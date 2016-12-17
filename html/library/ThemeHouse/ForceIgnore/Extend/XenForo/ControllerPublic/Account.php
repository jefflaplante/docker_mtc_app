<?php

/**
 *
 * @see XenForo_ControllerPublic_Account
 */
class ThemeHouse_ForceIgnore_Extend_XenForo_ControllerPublic_Account extends XFCP_ThemeHouse_ForceIgnore_Extend_XenForo_ControllerPublic_Account
{

    /**
     *
     * @see XenForo_ControllerPublic_Account::actionIgnored()
     */
    public function actionIgnored()
    {
        $response = parent::actionIgnored();
        $ignored = $response->subView->params['ignored'];
        $forceIgnoreModel = $this->_getForceIgnoreModel();
        $visitorId = XenForo_Visitor::getUserId();

        foreach ($ignored as $ignoreId => &$ignore) {
            $exists = $forceIgnoreModel->getIgnoreByUserIds($visitorId, $ignoreId);
            if (!empty($exists)) {
                // let the template know this is a forced ignored
                $ignore['forceIgnore'] = true;
            }
        }

        $response->subView->params['ignored'] = $ignored;
        return $response;
    } /* END actionIgnored */

    /**
     *
     * @see XenForo_ControllerPublic_Account::actionStopIgnoring()
     */
    public function actionStopIgnoring()
    {
        $userId = $this->_input->filterSingle('user_id', XenForo_Input::UINT);
        $forceIgnoreModel = $this->_getForceIgnoreModel();
        $exists = $forceIgnoreModel->getIgnoreByUserIds(XenForo_Visitor::getUserId(), $userId);

        if (!empty($exists)) {
            return $this->responseError(new XenForo_Phrase('th_remove_not_allowed_forceignore'));
        }

        $forceIgnoredUsers = XenForo_Application::getSimpleCacheData('force_ignored_users');
        if (is_array($forceIgnoredUsers) && isset($forceIgnoredUsers[$userId])) {
            return $this->responseError(new XenForo_Phrase('th_remove_not_allowed_forceignore'));
        }

        return parent::actionStopIgnoring();
    } /* END actionStopIgnoring */

    /**
     *
     * @return ThemeHouse_ForceIgnore_Model_ForceIgnore
     */
    protected function _getForceIgnoreModel()
    {
        return $this->getModelFromCache('ThemeHouse_ForceIgnore_Model_ForceIgnore');
    } /* END _getForceIgnoreModel */
}