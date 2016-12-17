<?php

class KeywordAlert_Model_Queue extends XenForo_Model
{
    public function runQueue(array $queueItems)
    {
        if (empty($queueItems)) {
            return;
        }

        $queueByUser = array();

        /* @var $userModel XenForo_Model_User */
        $userModel = $this->getModelFromCache('XenForo_Model_User');

        $this->deleteQueueItems($queueItems);

        foreach ($queueItems as $queueItem) {
            if ($userModel->isUserIgnored(
                array('user_id' => $queueItem['target_user_id'], 'ignored' => $queueItem['target_user_ignored']),
                $queueItem['data']['user']['user_id']
            )
            ) {
                // don't send email about ignored users
                continue;
            }

            if (!empty($queueItem['data']['content'])
                && !$this->canViewContent($queueItem['data']['content'], $queueItem)
            ) {
                // no permission
                continue;
            }

            if (empty($queueByUser[$queueItem['target_user_id']])) {
                $queueByUser[$queueItem['target_user_id']] = array(
                    'targetUser' => array(
                        'user_id' => $queueItem['target_user_id'],
                        'username' => $queueItem['target_username'],
                        'email' => $queueItem['target_user_email'],
                        'language_id' => $queueItem['target_user_language_id'],
                    ),
                    'queueItemsData' => array(),
                );
            }

            $queueByUser[$queueItem['target_user_id']]['queueItemsData'][] = $queueItem['data'];
        }

        foreach ($queueByUser as $userQueue) {
            $mail = XenForo_Mail::create(
                'keywordalert_email',
                $userQueue,
                $userQueue['targetUser']['language_id']
            );
            $mail->enableAllLanguagePreCache();
            $mail->queue($userQueue['targetUser']['email'], $userQueue['targetUser']['username']);
        }
    }

    public function canViewContent(array $content, array $viewingUser = null)
    {
        $this->standardizeViewingUserReference($viewingUser);

        if (empty($content['content_type'])) {
            // old data
            $content['content_type'] = '';
        }

        switch ($content['content_type']) {
            case 'post':
                if (!empty($content['post'])
                    && !empty($content['thread'])
                    && !empty($content['forum'])
                ) {
                    /* @var XenForo_Model_Node $nodeModel */
                    $nodeModel = $this->getModelFromCache('XenForo_Model_Node');

                    // this method is cached, don't freak out
                    $allNodePermissions = $nodeModel->getNodePermissionsForPermissionCombination($viewingUser['permission_combination_id']);

                    if (isset($allNodePermissions[$content['forum']['node_id']])) {
                        /** @var XenForo_Model_Post $postModel */
                        $postModel = $this->getModelFromCache('XenForo_Model_Post');

                        return $postModel->canViewPostAndContainer(
                            $content['post'],
                            $content['thread'],
                            $content['forum'],
                            $null,
                            $allNodePermissions[$content['forum']['node_id']],
                            $viewingUser
                        );
                    }
                }
                break;
        }

        // unknown data, just assume user can view it
        return true;
    }

    public function queue(array $found, $text, $title, $link, array $data)
    {
        $nearestScheduleDate = -1;

        $queueData = array();
        $queueData['snippet'] = strip_tags(XenForo_Template_Helper_Core::helperSnippet(
            $text,
            KeywordAlert_Option::get('snippetMaxLength'),
            array(
                'stripQuote' => true,
            )
        ));

        $queueData['title'] = $title;
        $queueData['link'] = $link;
        $queueData['user'] = array(
            'user_id' => $data['user_id'],
            'username' => $data['username'],
        );
        $queueData['content'] = $data;

        foreach ($found as $foundSingle) {
            $queueData['snippetHtml'] = XenForo_Template_Helper_Core::helperSnippet(
                $text,
                KeywordAlert_Option::get('snippetMaxLength'),
                array(
                    'stripQuote' => true,
                    'term' => isset($foundSingle['matchedText']) ? $foundSingle['matchedText'] : false,
                    'emClass' => 'highlight',
                )
            );

            $scheduleDate = self::getScheduleDate($foundSingle['notify_frequency'], $foundSingle['timezone']);
            if ($nearestScheduleDate === -1
                || $nearestScheduleDate > $scheduleDate
            ) {
                $nearestScheduleDate = $scheduleDate;
            }

            $dw = XenForo_DataWriter::create('KeywordAlert_DataWriter_Queue');
            $dw->set('target_user_id', $foundSingle['user_id']);
            $dw->set('data', $queueData);
            $dw->set('schedule_date', $scheduleDate);
            $dw->save();
        }

        XenForo_Application::defer('KeywordAlert_Deferred_Queue', array());
    }

    public function deleteQueueItems(array $queueItems)
    {
        // TODO: archive the items to somewhere else
        $this->_getDb()->query("DELETE FROM `xf_keywordalert_queue` WHERE queue_id IN (" . $this->_getDb()->quote(array_keys($queueItems)) . ")");
    }

    public static function getScheduleDate($frequency, $timezone)
    {
        if ($frequency == 0) {
            // immediately!
            return XenForo_Application::$time;
        } else {
            $date = new DateTime('@' . XenForo_Application::$time);
            $date->setTimezone(new DateTimeZone($timezone));
            $date->setTime(0, 0, 0);

            if ($frequency == 86400) {
                // daily: go to the next day
                $date->modify('tomorrow');
            } elseif ($frequency == 604800) {
                // weekly: go to the next Monday
                $date->modify('Monday');
            } elseif ($frequency == 2592000) {
                // monthly: go to the last day of current month
                $date->modify('last day of this month');
            }

            return $date->format('U');
        }
    }

    private function getAllQueueCustomized(array &$data, array $fetchOptions)
    {
        foreach ($data as &$queueItem) {
            $queueItem['data'] = KeywordAlert_Model_Keyword::safeUnserialize($queueItem['data']);
        }
    }

    private function prepareQueueConditionsCustomized(array &$sqlConditions, array $conditions, array &$fetchOptions)
    {
        if (!empty($conditions['schedule_date_compare']) && is_array($conditions['schedule_date_compare'])) {
            list($operator, $cutOff) = $conditions['schedule_date_compare'];

            $this->assertValidCutOffOperator($operator);
            $sqlConditions[] = "queue.schedule_date $operator " . $this->_getDb()->quote($cutOff);
        }
    }

    public function prepareQueueFetchOptionsCustomized(&$selectFields, &$joinTables, array $fetchOptions)
    {
        $selectFields .= "\n,target_user.username AS target_username, target_user.email AS target_user_email, target_user.language_id AS target_user_language_id";
        $joinTables .= "\nINNER JOIN `xf_user` AS target_user ON (target_user.user_id = queue.target_user_id)";

        $selectFields .= "\n,target_user_profile.ignored AS target_user_ignored";
        $joinTables .= "\nINNER JOIN `xf_user_profile` AS target_user_profile ON (target_user_profile.user_id = queue.target_user_id)";
    }

    public function prepareQueueOrderOptionsCustomized(array &$choices, array &$fetchOptions)
    {
        // customized code goes here
    }

    /* Start auto-generated lines of code. Change made will be overwriten... */

    public function getList(array $conditions = array(), array $fetchOptions = array())
    {
        $data = $this->getAllQueue($conditions, $fetchOptions);
        $list = array();

        foreach ($data as $id => $row) {
            $list[$id] = $row[''];
        }

        return $list;
    }

    public function getQueueById($id, array $fetchOptions = array())
    {
        $data = $this->getAllQueue(array('queue_id' => $id), $fetchOptions);

        return reset($data);
    }

    public function getAllQueue(array $conditions = array(), array $fetchOptions = array())
    {
        $whereConditions = $this->prepareQueueConditions($conditions, $fetchOptions);

        $orderClause = $this->prepareQueueOrderOptions($fetchOptions);
        $joinOptions = $this->prepareQueueFetchOptions($fetchOptions);
        $limitOptions = $this->prepareLimitFetchOptions($fetchOptions);

        $all = $this->fetchAllKeyed($this->limitQueryResults("
				SELECT queue.*
					$joinOptions[selectFields]
				FROM `xf_keywordalert_queue` AS queue
					$joinOptions[joinTables]
				WHERE $whereConditions
					$orderClause
			", $limitOptions['limit'], $limitOptions['offset']
        ), 'queue_id');


        $this->getAllQueueCustomized($all, $fetchOptions);

        return $all;
    }

    public function countAllQueue(array $conditions = array(), array $fetchOptions = array())
    {
        $whereConditions = $this->prepareQueueConditions($conditions, $fetchOptions);

        $orderClause = $this->prepareQueueOrderOptions($fetchOptions);
        $joinOptions = $this->prepareQueueFetchOptions($fetchOptions);
        $limitOptions = $this->prepareLimitFetchOptions($fetchOptions);

        return $this->_getDb()->fetchOne("
			SELECT COUNT(*)
			FROM `xf_keywordalert_queue` AS queue
				$joinOptions[joinTables]
			WHERE $whereConditions
		");
    }

    public function prepareQueueConditions(array $conditions, array &$fetchOptions)
    {
        $sqlConditions = array();
        $db = $this->_getDb();

        foreach (array('queue_id', 'user_id', 'schedule_date') as $intField) {
            if (!isset($conditions[$intField])) continue;

            if (is_array($conditions[$intField])) {
                $sqlConditions[] = "queue.$intField IN (" . $db->quote($conditions[$intField]) . ")";
            } else {
                $sqlConditions[] = "queue.$intField = " . $db->quote($conditions[$intField]);
            }
        }

        $this->prepareQueueConditionsCustomized($sqlConditions, $conditions, $fetchOptions);

        return $this->getConditionsForClause($sqlConditions);
    }

    public function prepareQueueFetchOptions(array $fetchOptions)
    {
        $selectFields = '';
        $joinTables = '';

        $this->prepareQueueFetchOptionsCustomized($selectFields, $joinTables, $fetchOptions);

        return array(
            'selectFields' => $selectFields,
            'joinTables' => $joinTables
        );
    }

    public function prepareQueueOrderOptions(array &$fetchOptions, $defaultOrderSql = '')
    {
        $choices = array();

        $this->prepareQueueOrderOptionsCustomized($choices, $fetchOptions);

        return $this->getOrderByClause($choices, $fetchOptions, $defaultOrderSql);
    }


    /* End auto-generated lines of code. Feel free to make changes below */
}