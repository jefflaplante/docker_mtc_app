<?php

class Waindigo_UserCriteria_Listener_TemplateHook extends Waindigo_Listener_TemplateHook
{

    protected function _getHooks()
    {
        return array(
            'user_criteria_content',
            'user_criteria_profile'
        );
    }

    public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
    {
        $templateHook = new Waindigo_UserCriteria_Listener_TemplateHook($hookName, $contents, $hookParams, $template);
        $contents = $templateHook->run();
    }

    protected function _userCriteriaContent()
    {
        $viewParams = $this->_fetchViewParams();

        $addOns = $this->getModelFromCache('XenForo_Model_AddOn')->getAllAddOns();

        if (isset($addOns['Waindigo_SocialGroups']) && $addOns['Waindigo_SocialGroups']['active'] &&
             $addOns['Waindigo_SocialGroups']['version_id'] >= 1374286183) {
            $viewParams['showSocialGroupsCriteria'] = true;
        }

        $this->_appendTemplate('waindigo_user_criteria_content_usercriteria', $viewParams);
    }

    protected function _userCriteriaProfile()
    {
        $viewParams = $this->_fetchViewParams();

        $addOns = $this->getModelFromCache('XenForo_Model_AddOn')->getAllAddOns();

        if (isset($addOns['Waindigo_Friends']) && $addOns['Waindigo_Friends']['active']) {
            $viewParams['showFriendsCriteria'] = true;
        }

        $this->_appendTemplate('waindigo_user_criteria_profile_usercriteria', $viewParams);
    }
}