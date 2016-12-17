<?php

class ThemeHouse_ForceIgnore_Model_ForceIgnore extends XenForo_Model
{

    /**
     *
     * @param int $ignoreId
     */
    public function getIgnoreById($ignoreId)
    {
        return $this->_getDb()->fetchRow('
			SELECT *
			FROM xf_force_ignore
			WHERE force_ignore_id = ?
		', $ignoreId);
    } /* END getIgnoreById */

    /**
     *
     * @param int $userId1
     * @param int $userId2
     * @return array
     */
    public function getIgnoreByUserIds($userId1, $userId2)
    {
        return $this->_getDb()->fetchRow(
            '
			SELECT *
			FROM xf_force_ignore
			WHERE (user_id_1 = ? AND user_id_2 = ?) OR (user_id_1 = ? AND user_id_2 = ?)
		',
            array(
                $userId1,
                $userId2,
                $userId2,
                $userId1
            ));
    } /* END getIgnoreByUserIds */

    public function updateGlobalIgnoreCache()
    {
        $ignoredUsers = $this->_getDb()->fetchPairs('
			SELECT user.user_id, user.username
			FROM xf_force_ignore AS force_ignore
            LEFT JOIN xf_user AS user ON (force_ignore.user_id_1 = user.user_id)
			WHERE user_id_2 = 0
		');

        XenForo_Application::setSimpleCacheData('force_ignored_users', $ignoredUsers);
    } /* END updateGlobalIgnoreCache */

    /**
     *
     * @param array $fetchOptions
     * @return array
     */
    public function getIgnored(array $fetchOptions = array())
    {
        $limitOptions = $this->prepareLimitFetchOptions($fetchOptions);
        $db = $this->_getDb();

        return $this->fetchAllKeyed(
            $this->limitQueryResults('
				SELECT *
				FROM xf_force_ignore
				ORDER BY end_date DESC
			', $limitOptions['limit'], $limitOptions['offset']),
            'force_ignore_id');
    } /* END getIgnored */

    public function countIgnored()
    {
        return $this->_getDb()->fetchOne('
			SELECT COUNT(*)
			FROM xf_force_ignore
		');
    } /* END countIgnored */

    /**
     *
     * @param int $userId1
     * @param int $userId2
     */
    public function deleteUsers($userId1, $userId2)
    {
        $db = $this->_getDb();
        $userId1Quoted = $db->quote($userId1);
        $userId2Quoted = $db->quote($userId2);
        $where = "user_id_1 = $userId1Quoted AND user_id_2 = $userId2Quoted";

        $db->delete('xf_force_ignore', $where);

        if ($userId2 == 0) {
            $this->updateGlobalIgnoreCache();
        }
    } /* END deleteUsers */

    /**
     *
     * @param int $userId1
     * @param int $userId2
     * @param string $endDate
     */
    public function ignoreUsers($userId1, $userId2, $endDate = null)
    {
        $db = $this->_getDb();
        $userId1Quoted = $db->quote($userId1);
        $userId2Quoted = $db->quote($userId2);

        if (isset($endDate))
            $endDateQuoted = $db->quote($endDate);
        else
            $endDateQuoted = 0;

        $exists = $this->getIgnoreByUserIds($userId1, $userId2);
        if (!$exists) {
            $db->insert('xf_force_ignore',
                array(
                    'user_id_1' => $userId1Quoted,
                    'user_id_2' => $userId2Quoted,
                    'end_date' => $endDateQuoted
                ));
        } else {
            $db->update('xf_force_ignore', array(
                'end_date' => $endDateQuoted
            ), 'force_ignore_id = ' . $db->quote($exists['force_ignore_id']));
        }

        if ($userId2 == 0) {
            $this->updateGlobalIgnoreCache();
        }
    } /* END ignoreUsers */

    public function removeExpiredIgnores()
    {
        $db = $this->_getDb();
        $where = "end_date > 0 AND end_date < " . XenForo_Application::$time;

        $db->delete('xf_force_ignore', $where);

        $this->updateGlobalIgnoreCache();
    } /* END removeExpiredIgnores */
}