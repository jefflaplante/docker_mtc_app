<?php

class Waindigo_Trophies_Listener_TemplateCreate extends Waindigo_Listener_TemplateCreate
{
    protected function _getTemplates()
    {
        return array(
            'trophy_edit',
        );
    }

    public static function templateCreate(&$templateName, array &$params, XenForo_Template_Abstract $template)
    {
        $templateCreate = new Waindigo_Trophies_Listener_TemplateCreate($templateName, $params, $template);
        list($templateName, $params) = $templateCreate->run();
    }

    protected function _trophyEdit()
    {
        $this->_preloadTemplate('waindigo_trophy_edit_trophies');
    }
}