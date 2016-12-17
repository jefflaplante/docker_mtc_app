<?php

/**
 *
 * @see XenForo_ControllerPublic_Member
 */
class ThemeHouse_ForceIgnore_Extend_XenForo_ControllerPublic_Member extends XFCP_ThemeHouse_ForceIgnore_Extend_XenForo_ControllerPublic_Member
{

    /**
     *
     * @see XenForo_ControllerPublic_Member::actionUnignore()
     */
    public function actionUnignore()
    {
        $this->_assertRegistrationRequired();
        $userId = $this->_input->filterSingle('user_id', XenForo_Input::UINT);
        $forceIgnoreModel = $this->_getForceIgnoreModel();
        $exists = $forceIgnoreModel->getIgnoreByUserIds(XenForo_Visitor::getUserId(), $userId);

        if (!empty($exists)) {
            return $this->responseError(new XenForo_Phrase('th_remove_not_allowed_forceignore'), 404);
        }

        $forceIgnoredUsers = XenForo_Application::getSimpleCacheData('force_ignored_users');
        if (is_array($forceIgnoredUsers) && isset($forceIgnoredUsers[$userId])) {
            return $this->responseError(new XenForo_Phrase('th_remove_not_allowed_forceignore'));
        }

        return parent::actionUnignore();
    } /* END actionUnignore */

    /**
	 * @return ThemeHouse_ForceIgnore_Model_ForceIgnore
	 */
    protected function _getForceIgnoreModel()
    {
        return $this->getModelFromCache('ThemeHouse_ForceIgnore_Model_ForceIgnore');
    } /* END _getForceIgnoreModel */
}