<?php

class KeywordAlert_Model_Keyword extends XenForo_Model
{

    const DATA_REGISTRY_KEY = 'KeywordAlert_keywords';

    public static $keywords = false;

    public function updateKeywordCache()
    {
        $keywords = $this->getAllKeyword();

        /** @var XenForo_Model_DataRegistry $dataRegistryModel */
        $dataRegistryModel = $this->getModelFromCache('XenForo_Model_DataRegistry');
        $dataRegistryModel->set(self::DATA_REGISTRY_KEY, $keywords);

        return $keywords;
    }

    public function getKeywordCache()
    {
        if (self::$keywords !== false) {
            return self::$keywords;
        }

        /** @var XenForo_Model_DataRegistry $dataRegistryModel */
        $dataRegistryModel = $this->getModelFromCache('XenForo_Model_DataRegistry');
        self::$keywords = $dataRegistryModel->get(self::DATA_REGISTRY_KEY);

        if (empty(self::$keywords)) {
            self::$keywords = $this->updateKeywordCache();
        }

        return self::$keywords;
    }

    public function canUse(array $viewingUser = NULL)
    {
        $this->standardizeViewingUserReference($viewingUser);

        return XenForo_Permission::hasPermission($viewingUser['permissions'], 'general', 'KeywordAlert_canUse');
    }

    private function getAllKeywordCustomized(array &$data, array $fetchOptions)
    {
        foreach ($data as &$keyword) {
            $keyword['keywords'] = self::safeUnserialize($keyword['keywords']);
            $keyword['forum_data'] = self::safeUnserialize($keyword['forum_data']);
            $keyword['excluded_rules'] = self::safeUnserialize($keyword['excluded_rules']);
        }
    }

    private function prepareKeywordConditionsCustomized(array &$sqlConditions, array $conditions, array &$fetchOptions)
    {
        // customized code goes here
    }

    public function prepareKeywordFetchOptionsCustomized(&$selectFields, &$joinTables, array $fetchOptions)
    {
        $selectFields .= "\n,user.username, user.timezone";
        $joinTables .= "\nINNER JOIN `xf_user` AS user ON (user.user_id = keyword.user_id)";
    }

    public function prepareKeywordOrderOptionsCustomized(array &$choices, array &$fetchOptions)
    {
        // customized code goes here
    }

    /* Start auto-generated lines of code. Change made will be overwriten... */

    public function getList(array $conditions = array(), array $fetchOptions = array())
    {
        $data = $this->getAllKeyword($conditions, $fetchOptions);
        $list = array();

        foreach ($data as $id => $row) {
            $list[$id] = $row['name'];
        }

        return $list;
    }

    public function getKeywordById($id, array $fetchOptions = array())
    {
        $data = $this->getAllKeyword(array('keyword_id' => $id), $fetchOptions);

        return reset($data);
    }

    public function getAllKeyword(array $conditions = array(), array $fetchOptions = array())
    {
        $whereConditions = $this->prepareKeywordConditions($conditions, $fetchOptions);

        $orderClause = $this->prepareKeywordOrderOptions($fetchOptions);
        $joinOptions = $this->prepareKeywordFetchOptions($fetchOptions);
        $limitOptions = $this->prepareLimitFetchOptions($fetchOptions);

        $all = $this->fetchAllKeyed($this->limitQueryResults("
				SELECT keyword.*
					$joinOptions[selectFields]
				FROM `xf_keywordalert_keyword` AS keyword
					$joinOptions[joinTables]
				WHERE $whereConditions
					$orderClause
			", $limitOptions['limit'], $limitOptions['offset']
        ), 'keyword_id');


        $this->getAllKeywordCustomized($all, $fetchOptions);

        return $all;
    }

    public function countAllKeyword(array $conditions = array(), array $fetchOptions = array())
    {
        $whereConditions = $this->prepareKeywordConditions($conditions, $fetchOptions);

        $orderClause = $this->prepareKeywordOrderOptions($fetchOptions);
        $joinOptions = $this->prepareKeywordFetchOptions($fetchOptions);
        $limitOptions = $this->prepareLimitFetchOptions($fetchOptions);

        return $this->_getDb()->fetchOne("
			SELECT COUNT(*)
			FROM `xf_keywordalert_keyword` AS keyword
				$joinOptions[joinTables]
			WHERE $whereConditions
		");
    }

    public function prepareKeywordConditions(array $conditions, array &$fetchOptions)
    {
        $sqlConditions = array();
        $db = $this->_getDb();

        foreach (array('keyword_id', 'notify_frequency', 'user_id') as $intField) {
            if (!isset($conditions[$intField])) continue;

            if (is_array($conditions[$intField])) {
                $sqlConditions[] = "keyword.$intField IN (" . $db->quote($conditions[$intField]) . ")";
            } else {
                $sqlConditions[] = "keyword.$intField = " . $db->quote($conditions[$intField]);
            }
        }

        $this->prepareKeywordConditionsCustomized($sqlConditions, $conditions, $fetchOptions);

        return $this->getConditionsForClause($sqlConditions);
    }

    public function prepareKeywordFetchOptions(array $fetchOptions)
    {
        $selectFields = '';
        $joinTables = '';

        $this->prepareKeywordFetchOptionsCustomized($selectFields, $joinTables, $fetchOptions);

        return array(
            'selectFields' => $selectFields,
            'joinTables' => $joinTables
        );
    }

    public function prepareKeywordOrderOptions(array &$fetchOptions, $defaultOrderSql = '')
    {
        $choices = array();

        $this->prepareKeywordOrderOptionsCustomized($choices, $fetchOptions);

        return $this->getOrderByClause($choices, $fetchOptions, $defaultOrderSql);
    }


    /* End auto-generated lines of code. Feel free to make changes below */

    public static function safeUnserialize($str)
    {
        $array = @unserialize($str);
        if (empty($array)) {
            return array();
        } else {
            return $array;
        }
    }

}