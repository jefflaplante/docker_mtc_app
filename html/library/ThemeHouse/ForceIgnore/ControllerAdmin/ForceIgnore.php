<?php

/**
 * Controller for forcing ignored users.
 */
class ThemeHouse_ForceIgnore_ControllerAdmin_ForceIgnore extends XenForo_ControllerAdmin_Abstract
{

    protected function _preDispatch($action)
    {
        $this->assertAdminPermission('user');
    } /* END _preDispatch */

    public function actionUsers()
    {
        $page = $this->_input->filterSingle('page', XenForo_Input::UINT);
        $perPage = 20;

        $forceIgnoreModel = $this->_getForceIgnoreModel();
        $ignoredUsers = $forceIgnoreModel->getIgnored(
            array(
                'page' => $page,
                'perPage' => $perPage
            ));

        $userModel = $this->_getUserModel();

        foreach ($ignoredUsers as &$ignored) {
            $ignored['user1'] = $userModel->getUserById($ignored['user_id_1']);
            $ignored['user2'] = $userModel->getUserById($ignored['user_id_2']);
        }

        $viewParams = array(
            'ignoredUsers' => $ignoredUsers
        );

        $viewParams = array(
            'ignoredUsers' => $ignoredUsers,
            'totalIgnored' => $forceIgnoreModel->countIgnored(),
            'page' => $page,
            'perPage' => $perPage
        );

        return $this->responseView('XenForo_ViewAdmin_Base', 'th_users_forceignore', $viewParams);
    } /* END actionUsers */

    public function actionUsersAdd()
    {
        $viewParams = array();
        return $this->responseView('XenForo_ViewAdmin_Base', 'th_add_forceignore', $viewParams);
    } /* END actionUsersAdd */

    public function actionUsersIgnore()
    {
        $username1 = $this->_input->filterSingle('username_1', XenForo_Input::STRING);
        $username2 = $this->_input->filterSingle('username_2', XenForo_Input::STRING);

        $userModel = $this->_getUserModel();
        $user1 = $userModel->getUserByName($username1);
        if (!$user1) {
            return $this->responseError($username1 . ' - ' . new XenForo_Phrase('requested_user_not_found'), 404);
        }

        if ($username2) {
            $user2 = $userModel->getUserByName($username2);
            if (!$user2) {
                return $this->responseError($username2 . ' - ' . new XenForo_Phrase('requested_user_not_found'), 404);
            }
        } else {
            $user2 = array('user_id' => 0);
        }

        $forceIgnoreModel = $this->_getForceIgnoreModel();

        if (!$this->_input->filterSingle('is_edit', XenForo_Input::UINT)) {
            $exists = $forceIgnoreModel->getIgnoreByUserIds($user1['user_id'], $user2['user_id']);
            if ($exists) {
                $this->_request->setParam('id', $exists['force_ignore_id']);
                return $this->responseReroute(__CLASS__, 'usersEdit');
            }
        }

        $endDate = $this->_input->filterSingle('end_date', XenForo_Input::DATE_TIME);
        if (!$endDate) {
            $endDate = null;
        } else if ($endDate < XenForo_Application::$time) {
            return $this->responseError(new XenForo_Phrase('th_end_date_must_be_in_future_forceignore'), 404);
        }

        if ($user2['user_id']) {
            $ignoreModel = $this->_getIgnoreModel();
            $ignoreModel->ignoreUsers($user1['user_id'], $user2['user_id']);
            $ignoreModel->ignoreUsers($user2['user_id'], $user1['user_id']);
        }

        $forceIgnoreModel->ignoreUsers($user1['user_id'], $user2['user_id'], $endDate);

        return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
            XenForo_Link::buildAdminLink('force-ignore/users'));
    } /* END actionUsersIgnore */

    public function actionUsersEdit()
    {
        $ignoreId = $this->_input->filterSingle('id', XenForo_Input::UINT);
        $forceIgnoreModel = $this->_getForceIgnoreModel();
        $ignore = $forceIgnoreModel->getIgnoreById($ignoreId);

        $userModel = $this->_getUserModel();
        $user1 = $userModel->getUserById($ignore['user_id_1']);
        if ($ignore['user_id_2']) {
            $user2 = $userModel->getUserById($ignore['user_id_2']);
        } else {
            $user2 = array('username' => '');
        }
        if (!$user1 || ($ignore['user_id_2'] && !$user2)) {
            return $this->responseError(new XenForo_Phrase('requested_user_not_found'), 404);
        }

        $viewParams = array(
            'userName1' => $user1['username'],
            'userName2' => $user2['username'],
            'endDate' => $ignore['end_date']
        );

        return $this->responseView('XenForo_ViewAdmin_Base', 'th_edit_forceignore', $viewParams);
    } /* END actionUsersEdit */

    public function actionUsersRemove()
    {
        $ignoreId = $this->_input->filterSingle('id', XenForo_Input::UINT);
        $forceIgnoreModel = $this->_getForceIgnoreModel();
        $ignore = $forceIgnoreModel->getIgnoreById($ignoreId);

        if ($ignore['user_id_2']) {
            $ignoreModel = $this->_getIgnoreModel();
            $ignoreModel->unignoreUser($ignore['user_id_1'], $ignore['user_id_2']);
            $ignoreModel->unignoreUser($ignore['user_id_2'], $ignore['user_id_1']);
        }

        $forceIgnoreModel->deleteUsers($ignore['user_id_1'], $ignore['user_id_2']);

        return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
            XenForo_Link::buildAdminLink('force-ignore/users'));
    } /* END actionUsersRemove */

    /**
     *
     * @return XenForo_Model_User
     */
    protected function _getUserModel()
    {
        return $this->getModelFromCache('XenForo_Model_User');
    } /* END _getUserModel */

    /**
     *
     * @return XenForo_Model_UserIgnore
     */
    protected function _getIgnoreModel()
    {
        return $this->getModelFromCache('XenForo_Model_UserIgnore');
    } /* END _getIgnoreModel */

    /**
     *
     * @return ThemeHouse_ForceIgnore_Model_ForceIgnore
     */
    protected function _getForceIgnoreModel()
    {
        return $this->getModelFromCache('ThemeHouse_ForceIgnore_Model_ForceIgnore');
    } /* END _getForceIgnoreModel */
}