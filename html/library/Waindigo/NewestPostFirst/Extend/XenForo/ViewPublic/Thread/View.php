<?php

/**
 *
 * @see XenForo_ViewPublic_Thread_View
 */
class Waindigo_NewestPostFirst_Extend_XenForo_ViewPublic_Thread_View extends XFCP_Waindigo_NewestPostFirst_Extend_XenForo_ViewPublic_Thread_View
{

    /**
     *
     * @see XenForo_ViewPublic_Thread_View::renderHtml()
     */
    public function renderHtml()
    {
        parent::renderHtml();
        
        $threadModel = XenForo_Model::create('XenForo_Model_Thread');
        $xenOptions = XenForo_Application::get('options');
        
        if ($threadModel->getThreadDisplayOrderForThread($this->_params['thread']) == 'newest_first')
        {
            if ($xenOptions->waindigo_newestPostFirst_moveQuickReply) {
                $this->_params['canQuickReplyTop'] = $this->_params['canQuickReply'];
                $this->_params['canQuickReply'] = false;
            } else {
                $this->_params['lastPost'] = $this->_params['firstPost'];
            }
        }
    }
}