<?php

class Waindigo_NewestPostFirst_Listener_TemplateCreate extends Waindigo_Listener_TemplateCreate
{
    protected function _getTemplates()
    {
        return array(
            'account_preferences',
        );
    }

    public static function templateCreate(&$templateName, array &$params, XenForo_Template_Abstract $template)
    {
        $templateCreate = new Waindigo_NewestPostFirst_Listener_TemplateCreate($templateName, $params, $template);
        list($templateName, $params) = $templateCreate->run();
    }

    protected function _accountPreferences()
    {
        $this->_preloadTemplate('waindigo_account_preferences_newestpostfirst');
    }
}