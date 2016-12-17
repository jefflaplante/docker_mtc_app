<?php

/**
 * 
 * @see XenForo_ControllerPublic_Post
 */
class Waindigo_NewestPostFirst_Extend_XenForo_ControllerPublic_Post extends XFCP_Waindigo_NewestPostFirst_Extend_XenForo_ControllerPublic_Post
{

    /**
     *
     * @see XenForo_ControllerPublic_Post::getPostSpecificRedirect()
     */
    public function getPostSpecificRedirect (array $post, array $thread, $redirectType = XenForo_ControllerResponse_Redirect::SUCCESS)
    {
        $threadModel = $this->getModelFromCache('XenForo_Model_Thread');
        
        if ($threadModel->getThreadDisplayOrderForThread($thread) == 'newest_first') {
            $page = floor(($thread['reply_count'] - $post['position']) / XenForo_Application::get('options')->messagesPerPage) + 1;
            
            return $this->responseRedirect($redirectType, XenForo_Link::buildPublicLink('threads', $thread, array(
                'page' => $page
            )) . '#post-' . $post['post_id']);
        }
        
        return parent::getPostSpecificRedirect($post, $thread, $redirectType);
    }
}