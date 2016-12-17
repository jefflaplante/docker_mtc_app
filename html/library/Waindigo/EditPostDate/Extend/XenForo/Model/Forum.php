<?php

/**
 *
 * @see XenForo_Model_Forum
 */
class Waindigo_EditPostDate_Extend_XenForo_Model_Forum extends XFCP_Waindigo_EditPostDate_Extend_XenForo_Model_Forum
{

    /**
     * Determines if post dates can be edited with the given permissions.
     * This does not check post viewing permissions.
     *
     * @param array $forum Info about the forum
     * @param string $errorPhraseKey Returned phrase key for a specific error
     * @param array|null $nodePermissions
     * @param array|null $viewingUser
     *
     * @return boolean
     */
    public function canEditPostDate(array $forum, &$errorPhraseKey = '', array $nodePermissions = null,
        array $viewingUser = null)
    {
        $this->standardizeViewingUserReferenceForNode($forum['node_id'], $viewingUser, $nodePermissions);
        return ($viewingUser['user_id'] && XenForo_Permission::hasContentPermission($nodePermissions, 'editPostDate'));
    } /* END canEditPostDate */
}