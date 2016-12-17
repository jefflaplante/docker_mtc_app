<?php

/**
 *
 * @see XenForo_Model_Conversation
 */
class Waindigo_ConvAccess_Extend_XenForo_Model_Conversation extends XFCP_Waindigo_ConvAccess_Extend_XenForo_Model_Conversation
{

    /**
     *
     * @see XenForo_Model_Conversation::deleteConversationForUser()
     */
    public function deleteConversationForUser($conversationId, $userId, $deleteType)
    {
        $request = new Zend_Controller_Request_Http();
        $conversationUserId = $request->getParam('conversation_user_id');
        if ($conversationUserId) {
            $userId = $conversationUserId;
        }

        return parent::deleteConversationForUser($conversationId, $userId, $deleteType);
    } /* END deleteConversationForUser */

    /**
     *
     * @see XenForo_Model_Conversation::markConversationAsRead()
     */
    public function markConversationAsRead($conversationId, $userId, $newReadDate, $lastMessageDate = 0,
        $updateVisitor = true)
    {
        $request = new Zend_Controller_Request_Http();
        $conversationUserId = $request->getParam('conversation_user_id');
        if ($conversationUserId) {
            $userId = $conversationUserId;
        }

        return parent::markConversationAsRead($conversationId, $userId, $newReadDate, $lastMessageDate, $updateVisitor);
    } /* END markConversationAsRead */

    /**
     *
     * @see XenForo_Model_Conversation::markConversationAsUnread()
     */
    public function markConversationAsUnread($conversationId, $userId)
    {
        $request = new Zend_Controller_Request_Http();
        $conversationUserId = $request->getParam('conversation_user_id');
        if ($conversationUserId) {
            $userId = $conversationUserId;
        }

        return parent::markConversationAsUnread($conversationId, $userId);
    } /* END markConversationAsUnread */

    /**
     *
     * @see XenForo_Model_Conversation::changeConversationStarState()
     */
    public function changeConversationStarState($conversationId, $userId, $starred)
    {
        $request = new Zend_Controller_Request_Http();
        $conversationUserId = $request->getParam('conversation_user_id');
        if ($conversationUserId) {
            $userId = $conversationUserId;
        }

        return parent::changeConversationStarState($conversationId, $userId, $starred);
    } /* END changeConversationStarState */

    /**
     *
     * @param int $userId
     * @param int|array $accessUserIds
     */
    public function grantAccessToUsersConversationsForUser($userId, $accessUserIds)
    {
        if (!is_array($accessUserIds)) {
            $accessUserIds = array(
                $accessUserIds
            );
        }
        foreach ($accessUserIds as $accessUserId) {
            if ($accessUserId == $userId) {
                continue;
            }
            if ($this->canViewConversationsByUser($userId)) {
                $this->_getDb()->query(
                    '
                    INSERT IGNORE INTO xf_conversation_user_access
                    (user_id, access_user_id)
                    VALUES (?, ?)
                ',
                    array(
                        $userId,
                        $accessUserId
                    ));
            }
        }
    } /* END grantAccessToUsersConversationsForUser */

    /**
     *
     * @param int $userId
     * @param int $accessUserId
     */
    public function revokeAccessToUserConversationsForUser($userId, $accessUserId)
    {
        if ($accessUserId && $accessUserId != $userId) {
            $db = $this->_getDb();
            $db->delete('xf_conversation_user_access',
                'user_id = ' . $db->quote($userId) . ' AND access_user_id = ' . $db->quote($accessUserId));
        }
    } /* END revokeAccessToUserConversationsForUser */

    public function getAccessedUsersForUser($userId)
    {
        return $this->fetchAllKeyed(
            '
            SELECT user.*
            FROM xf_conversation_user_access AS conversation_user_access
            INNER JOIN xf_user AS user ON (conversation_user_access.access_user_id = user.user_id)
            WHERE conversation_user_access.user_id = ?
        ', 'user_id', $userId);
    } /* END getAccessedUsersForUser */

    /**
     * Determines if the viewing user can view they given user's conversations.
     * Does not check standard conversation permissions.
     *
     * @param $userId
     * @param string $errorPhraseKey
     * @param array|null $viewingUser
     *
     * @return boolean
     */
    public function canViewConversationsByUser($userId, &$errorPhraseKey = '', array $viewingUser = null)
    {
        $this->standardizeViewingUserReference($viewingUser);

        return XenForo_Permission::hasPermission($viewingUser['permissions'], 'conversation', 'viewAny');
    } /* END canViewConversationsByUser */
}