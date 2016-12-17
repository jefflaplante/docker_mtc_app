<?php

class Waindigo_UserCriteria_Listener_TemplatePostRender extends Waindigo_Listener_TemplatePostRender
{

    protected function _getTemplates()
    {
        return array(
            'user_group_promotion_edit',
            'helper_user_criteria'
        );
    }

    public static function templatePostRender($templateName, &$content, array &$containerData,
        XenForo_Template_Abstract $template)
    {
        $templatePostRender = new Waindigo_UserCriteria_Listener_TemplatePostRender($templateName, $content,
            $containerData, $template);
        list ($content, $containerData) = $templatePostRender->run();
    }

    protected function _userGroupPromotionEdit()
    {
        $codeSnippet = $this->_render('helper_criteria_user_date', array(
            'noDateFields' => true
        ));
        $this->_replaceWithTemplateAtCodeSnippet($codeSnippet, 'helper_criteria_user_date');
    }

    protected function _helperUserCriteria()
    {
        $pattern = '#(<xen:if is="{\$showInactiveCriteria}">)(.*)(</xen:if>)#Us';
        $this->_contents = preg_replace($pattern, ${2}, $this->_contents);
    }
}