<?php

class bdCache_XenForo_Model_Permission extends XFCP_bdCache_XenForo_Model_Permission
{
    const SIMPLE_CACHE_GUEST_PERMISSIONS = 'bdc_gp';

    public function rebuildPermissionCombination(array $combination, array $permissionsGrouped, array $entries)
    {
        $response = parent::rebuildPermissionCombination($combination, $permissionsGrouped, $entries);

        if (!empty($combination['permission_combination_id']) AND $combination['permission_combination_id'] == XenForo_Model_User::$guestPermissionCombinationId) {
            $this->bdCache_saveGuestPermissions();
        }

        return $response;
    }

    public function bdCache_saveGuestPermissions()
    {
        $cacheValue = $this->_getDb()->fetchOne('
				SELECT cache_value
				FROM xf_permission_combination
				WHERE permission_combination_id = ?
				', XenForo_Model_User::$guestPermissionCombinationId);

        XenForo_Application::setSimpleCacheData(self::SIMPLE_CACHE_GUEST_PERMISSIONS, $cacheValue);

        return $cacheValue;
    }

    public function bdCache_loadGuestPermissions()
    {
        $cacheValue = XenForo_Application::getSimpleCacheData(self::SIMPLE_CACHE_GUEST_PERMISSIONS);

        if (empty($cacheValue)) {
            $cacheValue = $this->bdCache_saveGuestPermissions();
        }

        return $cacheValue;
    }

}
