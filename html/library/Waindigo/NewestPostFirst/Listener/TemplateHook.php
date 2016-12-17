<?php

class Waindigo_NewestPostFirst_Listener_TemplateHook extends Waindigo_Listener_TemplateHook
{

    protected function _getHooks()
    {
        return array(
            'account_preferences_options',
            'thread_view_form_before',
            'thread_view_qr_after'
        );
    }

    public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
    {
        $templateHook = new Waindigo_NewestPostFirst_Listener_TemplateHook($hookName, $contents, $hookParams, $template);
        $contents = $templateHook->run();
    }

    protected function _accountPreferencesOptions()
    {
        $xenOptions = XenForo_Application::get('options');
        if ($xenOptions->waindigo_newestPostFirst_userChoice) {
            $this->_appendTemplate('waindigo_account_preferences_newestpostfirst');
        }
    }

    protected function _threadViewFormBefore()
    {
        $viewParams = $this->_fetchViewParams();
        
        if (isset($viewParams['canQuickReplyTop'])) {
            $viewParams['formAction'] = XenForo_Link::buildPublicLink('threads/add-reply', $viewParams['thread']);
            $viewParams['lastDate'] = $viewParams['firstPost']['post_date'];
            $viewParams['showMoreOptions'] = 1;
            $contents = $this->_render('quick_reply', $viewParams);
            $this->_append($contents);
        }
    }
    
    protected function _threadViewQrAfter()
    {
        $threadModel = $this->getModelFromCache('XenForo_Model_Thread');
        $viewParams = $this->_fetchViewParams();

        if (isset($viewParams['canQuickReplyBottom'])) {
            $viewParams['formAction'] = XenForo_Link::buildPublicLink('threads/add-reply', $viewParams['thread']);
            $viewParams['lastDate'] = $viewParams['firstPost']['post_date'];
            $viewParams['showMoreOptions'] = 1;
            $contents = $this->_render('quick_reply', $viewParams);
            $this->_append($contents);
        }
        
        if ($threadModel->getThreadDisplayOrderForThread($viewParams['thread']) == 'newest_first') {
            $this->_template->addRequiredExternal('js', 'js/waindigo/newestpostfirst/discussion.js');
        }
    }
}