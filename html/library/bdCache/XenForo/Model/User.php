<?php

class bdCache_XenForo_Model_User extends XFCP_bdCache_XenForo_Model_User
{
    public function setPermissionsOnVisitorArray(array $userinfo, $permissionCombinationId = false)
    {
        if ($permissionCombinationId === false) {
            $userinfo['permission_combination_id'] = self::$guestPermissionCombinationId;

            /** @var bdCache_XenForo_Model_Permission $permissionModel */
            $permissionModel = $this->getModelFromCache('XenForo_Model_Permission');
            $userinfo['global_permission_cache'] = $permissionModel->bdCache_loadGuestPermissions();
        } else {
            $userinfo = parent::setPermissionsOnVisitorArray($userinfo, $permissionCombinationId);
        }

        return $userinfo;
    }

}
