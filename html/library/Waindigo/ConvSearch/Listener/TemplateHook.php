<?php

class Waindigo_ConvSearch_Listener_TemplateHook extends Waindigo_Listener_TemplateHook
{

    protected function _getHooks()
    {
        return array(
            'search_form_tabs'
        );
    } /* END _getHooks() */

    public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
    {
        $templateHook = new Waindigo_ConvSearch_Listener_TemplateHook($hookName, $contents, $hookParams, $template);
        $contents = $templateHook->run();
    } /* END templateHook */

    protected function _searchFormTabs()
    {
        $this->_appendTemplate('waindigo_search_form_tabs_convsearch');
    } /* END _searchFormTabs */
}