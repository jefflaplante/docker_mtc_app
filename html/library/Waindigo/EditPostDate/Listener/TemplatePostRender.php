<?php

class Waindigo_EditPostDate_Listener_TemplatePostRender extends Waindigo_Listener_TemplatePostRender
{

    protected function _getTemplates()
    {
        return array(
            'post_edit',
            'thread_reply',
            'thread_view'
        );
    } /* END _getTemplates */

    public static function templatePostRender($templateName, &$content, array &$containerData,
        XenForo_Template_Abstract $template)
    {
        $templatePostRender = new Waindigo_EditPostDate_Listener_TemplatePostRender($templateName, $content,
            $containerData, $template);
        list ($content, $containerData) = $templatePostRender->run();
    } /* END templatePostRender */

    protected function _postEdit()
    {
        $pattern = '#<fieldset>\s*<dl class="ctrlUnit fullWidth surplusLabel">\s*<dt><label for="ctrl_message">.*</label></dt>\s*<dd>.*</dd>\s*</dl>\s*</fieldset>#Us';
        $this->_appendTemplateAtPattern($pattern, 'waindigo_edit_post_date_editpostdate');
    } /* END _postEdit */

    protected function _threadReply()
    {
        $this->_appendTemplateAfterSlot('after_editor', 'waindigo_edit_post_date_editpostdate');
    } /* END _threadReply */

    protected function _threadView()
    {
        $codeSnippet = '<option value="deselect">' . new XenForo_Phrase('deselect_posts') . '</option>';
        $this->_appendTemplateBeforeCodeSnippet($codeSnippet, 'waindigo_thread_view_options_editpostdate');
    } /* END _threadView */
}