<?php

/**
 *
 * @see XenForo_ControllerPublic_Thread
 */
class Waindigo_NewestPostFirst_Extend_XenForo_ControllerPublic_Thread extends XFCP_Waindigo_NewestPostFirst_Extend_XenForo_ControllerPublic_Thread
{

    /**
     *
     * @see XenForo_ControllerPublic_Thread::actionUnread()
     */
    public function actionUnread()
    {
        $threadId = $this->_input->filterSingle('thread_id', XenForo_Input::UINT);
        $visitorUserId = XenForo_Visitor::getUserId();
        $visitor = XenForo_Visitor::getInstance();
        
        $ftpHelper = $this->getHelper('ForumThreadPost');
        $threadFetchOptions = array(
            'readUserId' => $visitorUserId
        );
        $forumFetchOptions = array(
            'readUserId' => $visitorUserId
        );
        list ($thread, $forum) = $ftpHelper->assertThreadValidAndViewable($threadId, $threadFetchOptions, 
            $forumFetchOptions);
        
        $threadModel = $this->_getThreadModel();
        
        if ($threadModel->getThreadDisplayOrderForThread($thread) == 'newest_first') {
            if (!$visitorUserId) {
                return $this->responseRedirect(XenForo_ControllerResponse_Redirect::RESOURCE_CANONICAL, 
                    XenForo_Link::buildPublicLink('threads', $thread));
            }
            
            $readDate = $this->_getThreadModel()->getMaxThreadReadDate($thread, $forum);
            $postModel = $this->_getPostModel();
            
            $ignoredUserIds = (!empty($visitor['ignored']) ? unserialize($visitor['ignored']) : array());
            $ignoredUserIds = array_keys($ignoredUserIds);
            
            $fetchOptions = $postModel->getPermissionBasedPostFetchOptions($thread, $forum);
            $firstUnread = $postModel->getNextPostInThread($threadId, $readDate, $fetchOptions, $ignoredUserIds);
            if (!$firstUnread) {
                $firstUnread = $postModel->getLastPostInThread($threadId, $fetchOptions);
            }
            
            if ($firstUnread) {
                $page = floor(
                    ($thread['reply_count'] - $firstUnread['position']) /
                         XenForo_Application::get('options')->messagesPerPage) + 1;
                
                $hashTag = ($firstUnread['position'] > 0 ? '#post-' . $firstUnread['post_id'] : '');
                
                return $this->responseRedirect(XenForo_ControllerResponse_Redirect::RESOURCE_CANONICAL, 
                    XenForo_Link::buildPublicLink('threads', $thread, 
                        array(
                            'page' => $page
                        )) . $hashTag);
            } else {
                return $this->responseRedirect(XenForo_ControllerResponse_Redirect::RESOURCE_CANONICAL, 
                    XenForo_Link::buildPublicLink('threads', $thread));
            }
        }
        return parent::actionUnread();
    }
}