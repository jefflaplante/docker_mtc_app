<?php

/**
 *
 * @see XenForo_Model_Post
 */
class Waindigo_UserCriteria_Extend_XenForo_Model_Post extends XFCP_Waindigo_UserCriteria_Extend_XenForo_Model_Post
{

    public function getPostCountSinceDate($postDate, $userId)
    {
        return $this->_getDb()->fetchOne(
            '
			SELECT COUNT(*)
			FROM xf_post
			WHERE user_id = ?
				AND post_date > ?
		', array(
                $userId,
                $postDate
            ));
    }

    /**
     * Fetches basic information about all posts made by the specified user.
     *
     * @param integer $userId
     *
     * @return array
     */
    public function getLastPostTimeByUser($userId)
    {
        return $this->_getDb()->fetchOne(
            '
			SELECT post_date
			FROM xf_post AS post
			WHERE post.user_id = ?
            ORDER BY post_date DESC
		', $userId);
    }

    /**
     * Fetches the number of posts made by the specified user in a given node.
     *
     * @param integer|string|array $userId
     * @param integer $nodeId
     *
     * @return integer $count
     */
    public function getPostCountInNode($nodeId, $userId)
    {
        if (!is_array($nodeId)) {
            $nodeId = explode(',', $nodeId);
        }

        return $this->_getDb()->fetchOne(
            '
            SELECT SUM(thread_user_post.post_count)
            FROM xf_thread_user_post AS thread_user_post
            LEFT JOIN xf_thread AS thread ON (thread_user_post.thread_id = thread.thread_id)
            WHERE thread_user_post.user_id = ? AND thread.node_id IN (' . $this->_getDb()
                ->quote($nodeId) . ')
            ', $userId);
    }

    /**
     * Fetches the number of posts made by the specified user in a given thread.
     *
     * @param integer|string|array $userId
     * @param integer $nodeId
     *
     * @return integer $count
     */
    public function getPostCountInThread($threadId, $userId)
    {
        if (!is_array($threadId)) {
            $threadId = explode(',', $threadId);
        }

        return $this->_getDb()->fetchOne(
            '
            SELECT SUM(post_count)
            FROM xf_thread_user_post
            WHERE user_id = ? AND thread_id IN (' . $this->_getDb()
                ->quote($threadId) . ')
            ', $userId);
    }
}