<?php

/**
 * Model for trophy categories.
 */
class Waindigo_Trophies_Model_TrophyCategory extends XenForo_Model
{

    /**
     * Gets trophy categories that match the specified criteria.
     *
     * @param array $conditions List of conditions.
     * @param array $fetchOptions
     *
     * @return array [trophy category id] => info.
     */
    public function getTrophyCategories(array $conditions = array(), array $fetchOptions = array())
    {
        $whereClause = $this->prepareTrophyCategoryConditions($conditions, $fetchOptions);
        
        $sqlClauses = $this->prepareTrophyCategoryFetchOptions($fetchOptions);
        $limitOptions = $this->prepareLimitFetchOptions($fetchOptions);
        
        return $this->fetchAllKeyed(
            $this->limitQueryResults(
                '
                SELECT trophy_category.*
                    ' . $sqlClauses['selectFields'] . '
                FROM xf_trophy_category AS trophy_category
                ' . $sqlClauses['joinTables'] . '
                WHERE ' . $whereClause . '
                ' . $sqlClauses['orderClause'] . '
            ', $limitOptions['limit'], $limitOptions['offset']), 
            'trophy_category_id');
    }

    /**
     * Gets the trophy category that matches the specified criteria.
     *
     * @param array $conditions List of conditions.
     * @param array $fetchOptions Options that affect what is fetched.
     *
     * @return array false
     */
    public function getTrophyCategory(array $conditions = array(), array $fetchOptions = array())
    {
        $trophyCategories = $this->getTrophyCategories($conditions, $fetchOptions);
        
        return reset($trophyCategories);
    }

    /**
     * Gets a trophy category by ID.
     *
     * @param integer $trophyCategoryId
     * @param array $fetchOptions Options that affect what is fetched.
     *
     * @return array false
     */
    public function getTrophyCategoryById($trophyCategoryId, array $fetchOptions = array())
    {
        $conditions = array(
            'trophy_category_id' => $trophyCategoryId
        );
        
        return $this->getTrophyCategory($conditions, $fetchOptions);
    }

    /**
     * Gets the total number of a trophy category that match the specified
     * criteria.
     *
     * @param array $conditions List of conditions.
     *
     * @return integer
     */
    public function countTrophyCategories(array $conditions = array())
    {
        $fetchOptions = array();
        
        $whereClause = $this->prepareTrophyCategoryConditions($conditions, $fetchOptions);
        $joinOptions = $this->prepareTrophyCategoryFetchOptions($fetchOptions);
        
        $limitOptions = $this->prepareLimitFetchOptions($fetchOptions);
        
        return $this->_getDb()->fetchOne(
            '
            SELECT COUNT(*)
            FROM xf_trophy_category AS trophy_category
            ' . $joinOptions['joinTables'] . '
            WHERE ' . $whereClause . '
        ');
    }

    /**
     * Gets all trophy categories titles.
     *
     * @return array [trophy category id] => title.
     */
    public static function getTrophyCategoryTitles()
    {
        $trophyCategories = XenForo_Model::create(__CLASS__)->getTrophyCategories();
        $titles = array();
        foreach ($trophyCategories as $trophyCategoryId => $trophyCategory) {
            $titles[$trophyCategoryId] = $trophyCategory['title'];
        }
        return $titles;
    }

    /**
     * Gets the default trophy category record.
     *
     * @return array
     */
    public function getDefaultTrophyCategory()
    {
        return array(
            'trophy_category_id' => '', 
            'display_order' => 1, /* 'display_order' */
        );
    }
    
    public function groupTrophyCategoriesByParent(array $trophyCategories)
    {
        $parentTrophyCategories = array();
        foreach ($trophyCategories as $trophyCategoryId => $trophyCategory) {
            if ($trophyCategory['parent_category_id'] == 0) {
                $parentTrophyCategories[$trophyCategoryId] = $trophyCategory;
            } else {
                $parentTrophyCategories[$trophyCategory['parent_category_id']]['trophy_categories'][$trophyCategoryId] = $trophyCategory;
            }
        }
        
        return $parentTrophyCategories;
    }

    /**
     * Prepares a set of conditions to select trophy categories against.
     *
     * @param array $conditions List of conditions.
     * @param array $fetchOptions The fetch options that have been provided. May
     * be edited if criteria requires.
     *
     * @return string Criteria as SQL for where clause
     */
    public function prepareTrophyCategoryConditions(array $conditions, array &$fetchOptions)
    {
        $db = $this->_getDb();
        $sqlConditions = array();
        
        if (isset($conditions['trophy_category_ids']) && !empty($conditions['trophy_category_ids'])) {
            $sqlConditions[] = 'trophy_category.trophy_category_id IN (' . $db->quote(
                $conditions['trophy_category_ids']) . ')';
        } else 
            if (isset($conditions['trophy_category_id'])) {
                $sqlConditions[] = 'trophy_category.trophy_category_id = ' .
                     $db->quote($conditions['trophy_category_id']);
            }
        
        if (isset($conditions['parent_category_ids']) && !empty($conditions['parent_category_ids'])) {
            $sqlConditions[] = 'trophy_category.parent_category_id IN (' . $db->quote(
                $conditions['parent_category_ids']) . ')';
        } else 
            if (isset($conditions['parent_category_id'])) {
                $sqlConditions[] = 'trophy_category.parent_category_id = ' .
                     $db->quote($conditions['parent_category_id']);
            }
        
        $this->_prepareTrophyCategoryConditions($conditions, $fetchOptions, $sqlConditions);
        
        return $this->getConditionsForClause($sqlConditions);
    }

    /**
     * Method designed to be overridden by child classes to add to set of
     * conditions.
     *
     * @param array $conditions List of conditions.
     * @param array $fetchOptions The fetch options that have been provided. May
     * be edited if criteria requires.
     * @param array $sqlConditions List of conditions as SQL snippets. May be
     * edited if criteria requires.
     */
    protected function _prepareTrophyCategoryConditions(array $conditions, array &$fetchOptions, array &$sqlConditions)
    {
    }

    /**
     * Checks the 'join' key of the incoming array for the presence of the
     * FETCH_x bitfields in this class
     * and returns SQL snippets to join the specified tables if required.
     *
     * @param array $fetchOptions containing a 'join' integer key built from
     * this class's FETCH_x bitfields.
     *
     * @return string containing selectFields, joinTables, orderClause keys.
     * Example: selectFields = ', user.*, foo.title'; joinTables = ' INNER JOIN
     * foo ON (foo.id = other.id) '; orderClause = 'ORDER BY x.y'
     */
    public function prepareTrophyCategoryFetchOptions(array &$fetchOptions)
    {
        $selectFields = '';
        $joinTables = '';
        $orderBy = '';
        
        if (!empty($fetchOptions['order'])) {
            switch ($fetchOptions['order']) {
                case 'default':
                    $orderBy = 'trophy_category.parent_category_id, trophy_category.display_order';
                    break;
                
                case 'parent_category_id':
                    $orderBy = 'trophy_category.' . $fetchOptions['order'];
                    break;
                
                case 'title':
                default:
                    $orderBy = 'trophy_category.title';
            }
            if (!isset($fetchOptions['orderDirection']) || $fetchOptions['orderDirection'] == 'asc') {
                $orderBy .= ' ASC';
            } else {
                $orderBy .= ' DESC';
            }
        }
        
        $this->_prepareTrophyCategoryFetchOptions($fetchOptions, $selectFields, $joinTables, $orderBy);
        
        return array(
            'selectFields' => $selectFields,
            'joinTables' => $joinTables,
            'orderClause' => ($orderBy ? "ORDER BY $orderBy" : '')
        );
    }

    /**
     * Method designed to be overridden by child classes to add to SQL snippets.
     *
     * @param array $fetchOptions containing a 'join' integer key built from
     * this class's FETCH_x bitfields.
     * @param string $selectFields = ', user.*, foo.title'
     * @param string $joinTables = ' INNER JOIN foo ON (foo.id = other.id) '
     * @param string $orderBy = 'x.y ASC, x.z DESC'
     */
    protected function _prepareTrophyCategoryFetchOptions(array &$fetchOptions, &$selectFields, &$joinTables, &$orderBy)
    {
    }
}