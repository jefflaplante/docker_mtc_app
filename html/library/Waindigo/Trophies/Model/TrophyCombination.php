<?php

class Waindigo_Trophies_Model_TrophyCombination extends XenForo_Model
{

    public function rebuildAllTrophyCombinations()
    {
        $trophyCombinations = $this->_getDb()->fetchPairs(
            '
            SELECT trophy_combination_id
            FROM xf_user_profile
            WHERE trophy_combination_id != 0
        ');

        $this->rebuildTrophyCombinations($trophyCombinations);
    }

    public function rebuildExistingTrophyCombinationForTrophyId($trophyId)
    {
        $trophyCombinations = $this->_getDb()->fetchPairs(
            '
            SELECT trophy_combination_id, trophy_ids
            FROM xf_trophy_combination
            WHERE FIND_IN_SET(?, trophy_ids)
            GROUP BY trophy_ids
        ', $trophyId);

        //TODO - if a Trophy is updated in the ACP to include an icon this isn't immediately
        //updated for all users with that trophy, will update as users logon through cron

        $this->rebuildTrophyCombinations($trophyCombinations);
    }

    public function rebuildTrophyCombinations(array $trophyCombinations)
    {
        $trophyModel = XenForo_Model::create('XenForo_Model_Trophy');

        $trophies = $trophyModel->getAllTrophies();
        $trophies = $this->_prepareTrophiesForCombination($trophies);

        foreach ($trophyCombinations as $trophyCombinationId => $trophyIds) {
            $trophyCombination = array(
                'trophy_combination_id' => $trophyCombinationId,
                'trophy_ids' => $trophyIds
            );
            $this->rebuildTrophyCombination($trophyCombination, $trophies);
        }
    }

    public function rebuildTrophyCombination(array $trophyCombination, array $trophies = null)
    {
        $trophyIds = explode(',', $trophyCombination['trophy_ids']);

        if (is_null($trophies)) {
            $trophyModel = XenForo_Model::create('XenForo_Model_Trophy');

            $trophies = $trophyModel->getTrophiesByIds($trophyIds);
            $trophies = $this->_prepareTrophiesForCombination($trophies);
        } else {
            foreach ($trophies as $trophyId => $trophy) {
                if (!in_array($trophyId, $trophyIds) || empty($trophy['icon_url'])) {
                    unset($trophies[$trophyId]);
                }
            }
            if ($trophies) {
                $trophies = $this->_prepareTrophiesForCombination($trophies);
            }
        }

        $trophyIds = array_keys($trophies);
        sort($trophyIds);
        $trophyCombination['trophy_ids'] = implode(',', $trophyIds);

        $cacheValue = serialize($trophies);

        $this->_getDb()->query(
            '
            INSERT INTO xf_trophy_combination (trophy_combination_id, trophy_ids, cache_value)
            VALUES (?, ?, ?)
            ON DUPLICATE KEY UPDATE trophy_ids = VALUES(trophy_ids), cache_value = VALUES(cache_value)
            ',
            array(
                $trophyCombination['trophy_combination_id'],
                $trophyCombination['trophy_ids'],
                $cacheValue
            ));
    }

    public function getTrophyCombinationByTrophyIds($trophyIds)
    {
        if (!$trophyIds) {
            return 0;
        }

        if (!is_array($trophyIds)) {
            $trophyIds = explode(',', $trophyIds);
        }

        sort($trophyIds);
        $trophyIds = implode(',', $trophyIds);

        $trophyCombinationId = $this->_getDb()->fetchOne(
            '
            SELECT trophy_combination_id
            FROM xf_trophy_combination
            WHERE trophy_ids = ?
        ', $trophyIds);

        if (!$trophyCombinationId) {
            $this->_getDb()->query(
                '
                INSERT INTO xf_trophy_combination (trophy_ids)
                VALUES (?)
                ', $trophyIds);
            $trophyCombinationId = $this->_getDb()->lastInsertId();
        }

        return $trophyCombinationId;
    }

    /**
     * Gets all trophy combinations that involve the specified trophy.
     *
     * @param integer $trophyId
     *
     * @return array Format: [trophy_combination_id] => trophy
     * combination info
     */
    public function getTrophyCombinationsByTrophyId($trophyId)
    {
        return $this->fetchAllKeyed(
            '
            SELECT trophy_combination_id, trophy_ids
            FROM xf_trophy_combination
            WHERE FIND_IN_SET(?, trophy_ids)
		', 'trophy_combination_id', $trophyId);
    }

    private function _prepareTrophyForCombination(array $trophy)
    {
        return XenForo_Application::arrayFilterKeys($trophy,
            array(
                'trophy_id',
                'icon_url'
            ));
    }

    private function _prepareTrophiesForCombination(array $trophies)
    {
        foreach ($trophies as &$trophy) {
            $trophy = $this->_prepareTrophyForCombination($trophy);
        }

        return $trophies;
    }

    /**
     * Sets the trophyCombinationId
     */
    public function setUserTrophyCombinationId($trophyCombinationId, $userId)
    {
        $db = $this->_getDb();
        XenForo_Db::beginTransaction($db);

        $db->update('xf_user_profile',
            array(
                'trophy_combination_id' => $trophyCombinationId
            ), 'user_id = ' . $userId);
        XenForo_Db::commit($db);
    }

    /**
     *
     * @param int $trophyId
     * @return array
     */
    public function deleteTrophyCombinationsForTrophy($trophyId)
    {
        $combinations = $this->getTrophyCombinationsByTrophyId($trophyId);

        $db = $this->_getDb();
        XenForo_Db::beginTransaction($db);

        $trophyCombinations = array();

        foreach ($combinations as $combinationId => $combination) {
            $this->deleteTrophyCombination($combinationId);

            $trophyIds = explode(',', $combination['trophy_ids']);
            unset($trophyIds[array_search($trophyId, $trophyIds)]);

            $newCombinationId = $this->getTrophyCombinationByTrophyIds($trophyIds);

            $trophyIds = implode(',', $trophyIds);

            $db->update('xf_user_profile',
                array(
                    'trophy_combination_id' => $newCombinationId
                ), 'trophy_combination_id = ' . $combinationId);

            $trophyCombinations[$newCombinationId] = $trophyIds;
        }

        XenForo_Db::commit($db);

        $this->rebuildTrophyCombinations($trophyCombinations);

        return array_keys($combinations);
    }

    /**
     * Deletes the specified trophy combination.
     *
     * @param integer $combinationId
     */
    public function deleteTrophyCombination($combinationId)
    {
        $db = $this->_getDb();

        $combinationCondition = 'trophy_combination_id = ' . $db->quote($combinationId);

        $db->delete('xf_trophy_combination', $combinationCondition);
    }

    /**
     * @return XenForo_Model_Trophy
     */
    protected function _getTrophyModel()
    {
        return $this->getModelFromCache('XenForo_Model_Trophy');
    }
}