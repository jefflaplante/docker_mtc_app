<?php

/**
 *
 * @see XenForo_Model_User
 */
class ThemeHouse_ForceIgnore_Extend_XenForo_Model_User extends XFCP_ThemeHouse_ForceIgnore_Extend_XenForo_Model_User
{

    /**
     *
     * @see XenForo_Model_User::getVisitingUserById()
     */
    public function getVisitingUserById($userId)
    {
        $userInfo = parent::getVisitingUserById($userId);

        if (!empty($userInfo['ignored'])) {
            $ignored = unserialize($userInfo['ignored']);
        } else {
            $ignored = array();
        }

        $forceIgnoredUsers = XenForo_Application::getSimpleCacheData('force_ignored_users');
        if (is_array($forceIgnoredUsers)) {
            foreach ($forceIgnoredUsers as $userId => $username) {
                $ignored[$userId] = $username;
            }
        }

        $userInfo['ignored'] = serialize($ignored);
        return $userInfo;
    } /* END getVisitingUserById */
}