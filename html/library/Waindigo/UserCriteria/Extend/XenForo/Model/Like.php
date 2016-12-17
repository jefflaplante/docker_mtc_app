<?php

/**
 *
 * @see XenForo_Model_Like
 */
class Waindigo_UserCriteria_Extend_XenForo_Model_Like extends XFCP_Waindigo_UserCriteria_Extend_XenForo_Model_Like
{

    /**
     * Count the number of likes a content user has given.
     *
     * @param integer $userId
     *
     * @return integer
     */
    public function countLikesFromUser($userId)
    {
        return $this->_getDb()->fetchOne(
            '
			SELECT COUNT(*)
			FROM xf_liked_content
			WHERE like_user_id = ?
		', $userId);
    }
}