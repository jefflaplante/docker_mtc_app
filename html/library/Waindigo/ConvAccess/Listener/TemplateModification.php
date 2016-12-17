<?php

class Waindigo_ConvAccess_Listener_TemplateModification extends Waindigo_Listener_TemplateModification
{

    public static function conversationList(array $matches)
    {
        $modification = new Waindigo_ConvAccess_Listener_TemplateModification($matches[0]);

        return $modification->_conversationList();
    } /* END conversationList */

    protected function _conversationList()
    {
        $pattern = '#<xen:pagenav[^>]*>#Us';
        $viewParams = $this->_fetchViewParams();
        $this->_prependTemplateAtPattern($pattern, 'waindigo_conversation_list_tabs_convaccess', $viewParams, $this->_contents, 1);

        return $this->_contents;
    } /* END _conversationList */
}