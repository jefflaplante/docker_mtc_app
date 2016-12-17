<?php

/**
 *
 * @see XenForo_Model_Trophy
 */
class Waindigo_Trophies_Extend_XenForo_Model_Trophy extends XFCP_Waindigo_Trophies_Extend_XenForo_Model_Trophy
{

    const FETCH_USER_TROPHY = 0x01;

    /**
     * Returns trophies records based on trophy Ids
     */
    public function getTrophiesByIds($trophyIds)
    {
        if (empty($trophyIds)) {
            return array();
        }

        return $this->fetchAllKeyed(
            '
				SELECT trophy.*
				FROM xf_trophy AS trophy
				WHERE trophy.trophy_id IN (' . $this->_getDb()
                ->quote($trophyIds) . ')
			', 'trophy_id');
    }

    /**
     * Returns user data based on trophy Id for username list
     */
    public function getUsersWithTrophy($trophyId)
    {
        if (empty($trophyId)) {
            return array();
        }

        $limit = XenForo_Application::getOptions()->waindigo_trophies_maxUsernamesInTrophyList;
        $hardLimit = 100;
        if ($limit > $hardLimit) {
            $limit = $hardLimit;
        }

        if ($limit) {
            $userData = $this->_getDb()->fetchAll(
                '
				SELECT user_trophy.user_id, user.username
				FROM xf_user_trophy AS user_trophy
			    INNER JOIN xf_user AS user ON (user_trophy.user_id = user.user_id)
				WHERE user_trophy.trophy_id = ?
                LIMIT ?
        ', array(
                    $trophyId,
                    $hardLimit
                ));
        }
        if (!empty($userData)) {
            shuffle($userData);
            return array_slice($userData, 0, $limit);
        }
        return false;
    }

    /**
     * Prepares a collection of trophy fetching related conditions into an SQL
     * clause
     *
     * @param array $conditions List of conditions
     * @param array $fetchOptions Modifiable set of fetch options (may have
     * joins pushed on to it)
     *
     * @return string SQL clause (at least 1=1)
     */
    public function prepareTrophyConditions(array $conditions, array &$fetchOptions)
    {
        $sqlConditions = array();
        $db = $this->_getDb();

        if (!empty($conditions['trophy_category_id'])) {
            if (is_array($conditions['trophy_category_id'])) {
                $sqlConditions[] = 'trophy.trophy_category_id IN (' . $db->quote($conditions['trophy_category_id']) . ')';
            } else {
                $sqlConditions[] = 'trophy.trophy_category_id = ' . $db->quote($conditions['trophy_category_id']);
            }
        }

        if (isset($conditions['user_id'])) {
            $sqlConditions[] = 'user_trophy.user_id = ' . $db->quote($conditions['user_id']);
        }

        if (isset($conditions['icon_url'])) {
            $sqlConditions[] = 'trophy.icon_url != \'\'';
        }

        return $this->getConditionsForClause($sqlConditions);
    }

    /**
     * Checks the 'join' key of the incoming array for the presence of the
     * FETCH_x bitfields in this class
     * and returns SQL snippets to join the specified tables if required
     *
     * @param array $fetchOptions containing a 'join' integer key build from
     * this class's FETCH_x bitfields
     *
     * @return array Containing selectFields, joinTables, orderClause keys.
     * Example: selectFields = ', user.*, foo.title'; joinTables = ' INNER JOIN
     * foo ON (foo.id = other.id) '; orderClause = ORDER BY x.y
     */
    public function prepareTrophyFetchOptions(array $fetchOptions)
    {
        $selectFields = '';
        $joinTables = '';
        $orderBy = '';
        $groupBy = '';

        if (!empty($fetchOptions['order'])) {
            $orderPrimary = 'trophy.trophy_points DESC';
            $orderSecondary = ', user_trophy.award_date DESC';
            $orderTertiary = ', trophy.trophy_id DESC';
            $orderBy = $orderPrimary . $orderSecondary . $orderTertiary;
        }

        if (isset($fetchOptions['waindigo_join'])) {
            if ($fetchOptions['waindigo_join'] & self::FETCH_USER_TROPHY) {
                $selectFields .= ',
    					user_trophy.award_date';
                $joinTables .= '
    					LEFT JOIN xf_trophy AS trophy ON
    						(user_trophy.trophy_id = trophy.trophy_id)';
            }
        }

        return array(
            'selectFields' => $selectFields,
            'joinTables' => $joinTables,
            'orderClause' => ($orderBy ? "ORDER BY $orderBy" : '')
        );
    }

    /**
     * Gets all trophies that the specified user has earned.
     * Ordered by trophy points descending.
     *
     * @return array Format: [trophy id] => trophy info
     */
    public function getTrophiesForCache(array $conditions = array(), array $fetchOptions = array())
    {
        $whereConditions = $this->prepareTrophyConditions($conditions, $fetchOptions);

        $sqlClauses = $this->prepareTrophyFetchOptions($fetchOptions);
        $limitOptions = $this->prepareLimitFetchOptions($fetchOptions);
        $groupBy = '';

        return $this->fetchAllKeyed(
            $this->limitQueryResults(
                '
				SELECT trophy.*
					' . $sqlClauses['selectFields'] . '
				FROM xf_user_trophy AS user_trophy ' . $sqlClauses['joinTables'] . '
				WHERE ' . $whereConditions . '
				' . $sqlClauses['orderClause'] . '
			', $limitOptions['limit'], $limitOptions['offset']),
            'trophy_id');
    }

    /**
     *
     * @see XenForo_Model_Trophy::prepareTrophy()
     */
    public function prepareTrophy(array $trophy)
    {
        $trophy = parent::prepareTrophy($trophy);

        if ($trophy['icon_url'] && XenForo_Application::$versionId >= 1030000) {
            $trophy['iconUrl'] = $this->_handleImageProxyOption($trophy['icon_url']);
        } else {
            $trophy['iconUrl'] = $trophy['icon_url'];
        }
        return $trophy;
    }

    public function prepareTrophiesCache(array $trophies)
    {
        foreach ($trophies as &$trophy) {
            if ($trophy['icon_url'] && XenForo_Application::$versionId >= 1030000) {
                $trophy['iconUrl'] = $this->_handleImageProxyOption($trophy['icon_url']);
            } else {
                $trophy['iconUrl'] = $trophy['icon_url'];
            }
            $trophy['title'] = new XenForo_Phrase($this->getTrophyTitlePhraseName($trophy['trophy_id']));
        }
        return $trophies;
    }

    public function prepareTrophyCacheForPosts(array $posts)
    {
        foreach ($posts as $post) {
            if (!empty($post['trophy_combination_cache_value'])) {
                $trophyCache = unserialize($post['trophy_combination_cache_value']);
                $trophyCache = $this->prepareTrophiesCache($trophyCache);
                $posts[$post['post_id']]['trophyCache'] = $trophyCache;
            }
        }
        return $posts;
    }

    /**
     * Get user trophies for individual cache
     */
    public function getUserTrophyCache($trophyCombinationId)
    {
        $trophyCache = $this->getTrophyCacheByTrophyCombinationId($trophyCombinationId);

        if (!empty($trophyCache['cache_value'])) {
            $trophies = unserialize($trophyCache['cache_value']);
        } else {
            return false;
        }

        $trophies = $this->prepareTrophiesCache($trophies);

        return $trophies;
    }

    public function getTrophyCacheByTrophyCombinationId($trophyCombinationId)
    {
        return $this->_getDb()->fetchRow(
            '
            SELECT *
            FROM xf_trophy_combination
            WHERE trophy_combination_id = ?
        ', $trophyCombinationId);
    }

    /**
     * Update a users trophyCombinationId based on trophies the user has earned.
     */
    public function rebuildUserTrophyCache($userId)
    {
        $fetchTrophyParams = $this->_getFetchTrophyParams($userId);
        $userTrophies = $this->getTrophiesForCache($fetchTrophyParams['conditions'], $fetchTrophyParams['fetchOptions']);
        if (empty($userTrophies)) {
            return true;
        }

        if ($fetchTrophyParams['showHighestTrophy'] && !empty($fetchTrophyParams['userTrophyCategories'])) {
            $userTrophies = $this->_filterHighestTrophies($userTrophies, $fetchTrophyParams['userTrophyCategories']);
            if ($fetchTrophyParams['maxIconCount'] < count($userTrophies)) {
                $userTrophies = array_slice($userTrophies, 0, $fetchTrophyParams['maxIconCount']);
            }
        }

        $trophyCombinationModel = $this->_getTrophyCombinationModel();
        $trophyCombinationId = $trophyCombinationModel->getTrophyCombinationByTrophyIds(array_keys($userTrophies));
        $trophyCombinationModel->setUserTrophyCombinationId($trophyCombinationId, $userId);
        if (isset($trophyCombinationId)) {
            $trophyCombination = array(
                'trophy_combination_id' => $trophyCombinationId,
                'trophy_ids' => implode(',', array_keys($userTrophies))
            );
            $trophyCombinationModel->rebuildTrophyCombination($trophyCombination, $userTrophies);
        }
    }

    /**
     * Returns the neccessary paramaters for fetching the trophies based on
     * admin and user set options
     *
     * @return array $fetchTrophyParams
     *
     */
    protected function _getFetchTrophyParams($userId)
    {
        $userTrophyCategories = array();
        $options = XenForo_Application::getOptions();

        if ($options->waindigo_trophies_userCanEditTrophyDisplayOptions) {
            $userTrophyCategories = $this->_getUserTrophyCategories($userId);
        }
        if (empty($userTrophyCategories)) {
            $userTrophyCategories = array_keys($this->_getTrophyCategoryModel()->getTrophyCategories());
            $userTrophyCategories[] = 0;
        } else {
            $trophyCategories = array_keys($this->_getTrophyCategoryModel()->getTrophyCategories());
            $trophyCategories[] = 0;
            $userTrophyCategories = array_diff($trophyCategories, $userTrophyCategories);
        }

        $conditions = array(
            'user_id' => $userId,
            'icon_url' => true
        );
        if (!empty($userTrophyCategories)) {
            $conditions['trophy_category_id'] = $userTrophyCategories;
        }

        if (!$options->waindigo_trophies_onlyShowHighest) {
            $fetchOptions = array(
                'limit' => $options->waindigo_trophies_maximumIconsDisplayed
            );
        }
        $fetchOptions['waindigo_join'] = self::FETCH_USER_TROPHY;
        $fetchOptions['order'] = true;

        $fetchTrophyParams = array(
            'fetchOptions' => $fetchOptions,
            'conditions' => $conditions,
            'showHighestTrophy' => $options->waindigo_trophies_onlyShowHighest,
            'userTrophyCategories' => $userTrophyCategories,
            'maxIconCount' => $options->waindigo_trophies_maximumIconsDisplayed
        );

        return $fetchTrophyParams;
    }

    protected function _getUserTrophyCategories($userId)
    {
        $userModel = $this->_getUserModel();
        $user = $userModel->getUserById($userId,
            array(
                'join' => XenForo_Model_User::FETCH_USER_OPTION
            ));
        if (!empty($user['trophy_category_ids'])) {
            $userTrophyCategories = explode(',', $user['trophy_category_ids']);
            return $userTrophyCategories;
        }
        return false;
    }

    protected function _filterHighestTrophies(array $userTrophies, array $userTrophyCategories)
    {
        $highestTrophies = array();
        foreach ($userTrophyCategories as $userTrophyCategory) {
            $highestPoints = 0;
            $highestTrophy = array();
            foreach ($userTrophies as $trophy) {
                if ($trophy['trophy_category_id'] == $userTrophyCategory) {
                    if ($trophy['trophy_points'] > $highestPoints) {
                        $highestTrophy = $trophy;
                        $highestPoints = $trophy['trophy_points'];
                        unset($userTrophies[$trophy['trophy_id']]);
                    } else
                        if ($highestPoints == 0) {
                            if (empty($highestTrophy['award_date'])) {
                                $highestTrophy = $trophy;
                                unset($userTrophies[$trophy['trophy_id']]);
                            } else
                                if ($trophy['award_date'] > $highestTrophy['award_date']) {
                                    $highestTrophy = $trophy;
                                    unset($userTrophies[$trophy['trophy_id']]);
                                }
                        }
                }
            }
            if (!empty($highestTrophy)) {
                $highestTrophies[$highestTrophy['trophy_id']] = $highestTrophy;
            }
        }
        return $highestTrophies;
    }

    /**
     * Extending this function allows the update of the trophy combination cache
     * when new trophies are earned, linked to the Trophies cron entry.
     * (run on active users with new trophies only)
     *
     * @see XenForo_Model_Trophy::updateTrophiesForUser()
     *
     */
    public function updateTrophiesForUser(array $user, array $userTrophies = null, array $trophies = null)
    {
        $awarded = parent::updateTrophiesForUser($user, $userTrophies, $trophies);
        if ($awarded == 0) {
            return $awarded;
        }
        $this->rebuildUserTrophyCache($user['user_id']);

        $this->_getDb()->query(
            '
            UPDATE xf_user_profile
            SET trophy_count = trophy_count + ?
            WHERE user_id = ?
        ', array(
                $awarded,
                $user['user_id']
            ));

        return $awarded;
    }

    /**
     * Extending this function to rebuild trophy cache upon installation of the
     * add-on
     * and other site-wide events.
     * (Run on all users)
     *
     * @see XenForo_Deferred_Trophy
     *
     */
    public function updateTrophyPointsForUser($userId, $points = null)
    {
        $points = parent::updateTrophyPointsForUser($userId, $points);

        $trophyCount = $this->recalculateTrophyCountForUser($userId);

        $this->_getDb()->update('xf_user_profile', array(
            'trophy_count' => $trophyCount
        ), 'user_id = ' . $this->_getDb()
            ->quote($userId));

        $this->rebuildUserTrophyCache($userId);

        return $points;
    }

    public function recalculateTrophyCountForUser($userId)
    {
        return intval(
            $this->_getDb()->fetchOne(
                "
			SELECT COUNT(*)
			FROM xf_user_trophy AS user_trophy
			WHERE user_trophy.user_id = ?
		", $userId));
    }

    /**
     * Gets the XML representation of a trophy, including customized templates.
     *
     * @param array $trophy
     *
     * @return DOMDocument
     */
    public function getTrophiesXml(array $trophies)
    {
        $document = new DOMDocument('1.0', 'utf-8');
        $document->formatOutput = true;

        $rootNode = $document->createElement('trophies');
        foreach ($trophies as $trophy) {
            $trophyNode = $document->createElement('trophy');
            $this->_appendTrophyXml($trophyNode, $trophy);
            $rootNode->appendChild($trophyNode);
        }

        $document->appendChild($rootNode);

        return $document;
    }

    /**
     *
     * @param DOMElement $rootNode
     * @param array $trophy
     */
    protected function _appendTrophyXml(DOMElement $rootNode, $trophy)
    {
        $document = $rootNode->ownerDocument;

        $rootNode->setAttribute('icon_url', $trophy['icon_url']);
        $rootNode->setAttribute('points', $trophy['trophy_points']);

        $titleNode = $document->createElement('title');
        $rootNode->appendChild($titleNode);
        $titleNode->appendChild(XenForo_Helper_DevelopmentXml::createDomCdataSection($document, $trophy['title']));

        $descriptionNode = $document->createElement('description');
        $rootNode->appendChild($descriptionNode);
        $descriptionNode->appendChild(
            XenForo_Helper_DevelopmentXml::createDomCdataSection($document, $trophy['description']));

        if ($trophy['user_criteria']) {
            $userCriteria = unserialize($trophy['user_criteria']);
        } else {
            $userCriteria = array();
        }
        $userCriteriaNode = $document->createElement('user_criteria');
        $rootNode->appendChild($userCriteriaNode);
        foreach ($userCriteria as $rule) {
            $ruleNode = $document->createElement('rule');
            $userCriteriaNode->appendChild($ruleNode);
            $ruleNode->setAttribute('id', $rule['rule']);
            $ruleNode->appendChild(
                XenForo_Helper_DevelopmentXml::createDomCdataSection($document, serialize($rule['data'])));
        }
    }

    /**
     * Imports a trophy XML file.
     *
     * @param SimpleXMLElement $document
     * @param string $trophyGroupId
     * @param integer $overwriteTrophyId
     *
     * @return array List of cache rebuilders to run
     */
    public function importTrophiesXml(SimpleXMLElement $document)
    {
        if ($document->getName() != 'trophies') {
            throw new XenForo_Exception(new XenForo_Phrase('waindigo_provided_file_is_not_valid_trophy_xml_trophies'),
                true);
        }

        $trophies = XenForo_Helper_DevelopmentXml::fixPhpBug50670($document->trophy);
        $db = $this->_getDb();
        /* @var $trophy SimpleXMLElement */
        XenForo_Db::beginTransaction($db);
        foreach ($trophies as $trophy) {
            $userCriteria = array();
            foreach ($trophy->user_criteria->rule as $rule) {
                $userCriteria[] = array(
                    'rule' => (string) $rule['id'],
                    'data' => unserialize(XenForo_Helper_DevelopmentXml::processSimpleXmlCdata($rule))
                );
            }
            /* @var $dw XenForo_DataWriter_Trophy */
            $dw = XenForo_DataWriter::create('XenForo_DataWriter_Trophy', XenForo_DataWriter::ERROR_SILENT);
            $dw->set('trophy_points', (string) $trophy['points']);
            $dw->set('icon_url', (string) $trophy['icon_url']);
            $dw->setExtraData(XenForo_DataWriter_Trophy::DATA_TITLE,
                XenForo_Helper_DevelopmentXml::processSimpleXmlCdata($trophy->title));
            $dw->setExtraData(XenForo_DataWriter_Trophy::DATA_DESCRIPTION,
                XenForo_Helper_DevelopmentXml::processSimpleXmlCdata($trophy->description));
            $dw->set('user_criteria', $userCriteria);
            $dw->save();
        }
        XenForo_Db::commit($db);
    }

    protected function _handleImageProxyOption($url)
    {
        list($class, $target, $type, $schemeMatch) = XenForo_Helper_String::getLinkClassTarget($url);

        if ($type == 'external' && $schemeMatch) {
            $options = XenForo_Application::getOptions();
            if (!empty($options->imageLinkProxy['images'])) {
                $url = $this->_generateProxyLink('image', $url);
            }
        }

        return $url;
    }

    protected function _generateProxyLink($proxyType, $url)
    {
        $hash = hash_hmac('md5', $url,
            XenForo_Application::getConfig()->globalSalt . XenForo_Application::getOptions()->imageLinkProxyKey);
        return 'proxy.php?' . $proxyType . '=' . urlencode($url) . '&hash=' . $hash;
    }

    /**
     * Get the trophy combination model.
     *
     * @return Waindigo_Trophies_Model_TrophyCombination
     */
    protected function _getTrophyCombinationModel()
    {
        return $this->getModelFromCache('Waindigo_Trophies_Model_TrophyCombination');
    }

    /**
     * Get the trophy categories model.
     *
     * @return Waindigo_Trophies_Model_TrophyCategory
     */
    protected function _getTrophyCategoryModel()
    {
        return $this->getModelFromCache('Waindigo_Trophies_Model_TrophyCategory');
    }

    /**
     * Get the user model.
     */
    protected function _getUserModel()
    {
        return $this->getModelFromCache('XenForo_Model_User');
    }
}