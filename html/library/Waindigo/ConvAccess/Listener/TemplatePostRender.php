<?php

class Waindigo_ConvAccess_Listener_TemplatePostRender extends Waindigo_Listener_TemplatePostRender
{
    protected function _getTemplates()
    {
        return array(
            'conversation_list',
        );
    } /* END _getTemplates */

    public static function templatePostRender($templateName, &$content, array &$containerData, XenForo_Template_Abstract $template)
    {
        $templatePostRender = new Waindigo_ConvAccess_Listener_TemplatePostRender($templateName, $content, $containerData, $template);
        list($content, $containerData) = $templatePostRender->run();
    } /* END templatePostRender */

    protected function _conversationList()
    {
        $this->_prependTemplate('waindigo_conversation_list_tabs_convaccess');
    } /* END _conversationList */
}