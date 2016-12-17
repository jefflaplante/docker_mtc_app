<?php

/**
 *
 * @see XenForo_Model_Post
 */
class Waindigo_NewestPostFirst_Extend_XenForo_Model_Post extends XFCP_Waindigo_NewestPostFirst_Extend_XenForo_Model_Post
{

    /**
     * 
     * @see XenForo_Model_Post::getPostsInThread()
     */
    public function getPostsInThread($threadId, array $fetchOptions = array())
    {
        $thread = array('thread_id' => $threadId);
        
        $threadModel = $this->getModelFromCache('XenForo_Model_Thread');
        
        if ($threadModel->getThreadDisplayOrderForThread($thread) == 'newest_first') {
            $limitOptions = $this->prepareLimitFetchOptions($fetchOptions);
            $stateLimit = $this->prepareStateLimitFromConditions($fetchOptions, 'post');
            $joinOptions = $this->preparePostJoinOptions($fetchOptions);
            
            return $this->fetchAllKeyed($this->_getDb()
                ->limit('
    				SELECT post.*
    				' . $joinOptions['selectFields'] . '
    				FROM xf_post AS post
    				' . $joinOptions['joinTables'] . '
    				WHERE post.thread_id = ?
    				AND (' . $stateLimit . ')
    				ORDER BY 
    				' . (XenForo_Application::get('options')->waindigo_newestPostFirst_blogStyle ? 'FIELD(post.position, 0) DESC,' : '') . ' 
    				post.position DESC, post.post_date DESC
    				', $limitOptions['limit'], $limitOptions['offset']), 'post_id', $threadId);

        }
        
        return parent::getPostsInThread($threadId, $fetchOptions);
    }
}