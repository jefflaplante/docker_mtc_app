<?php

class Waindigo_EditPostDate_Listener_TemplateHook extends Waindigo_Listener_TemplateHook
{

    protected function _getHooks()
    {
        return array(
            'thread_create_fields_extra'
        );
    } /* END _getHooks */

    public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
    {
        $templateHook = new Waindigo_EditPostDate_Listener_TemplateHook($hookName, $contents, $hookParams, $template);
        $contents = $templateHook->run();
    } /* END templateHook */

    protected function _threadCreateFieldsExtra()
    {
        $this->_appendTemplate('waindigo_edit_post_date_editpostdate');
    } /* END _threadCreateFieldsExtra */
}