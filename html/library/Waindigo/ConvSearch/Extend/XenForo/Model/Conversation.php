<?php

class Waindigo_ConvSearch_Extend_XenForo_Model_Conversation extends XFCP_Waindigo_ConvSearch_Extend_XenForo_Model_Conversation
{

    /**
     * Get the specified conversations, ordered by last message first.
     *
     * @param array $conversationIds
     *
     * @return array Format: [conversation id] => info
     */
    public function getConversationsByIds(array $conversationIds)
    {
        if (!$conversationIds) {
            return array();
        }

        return $this->fetchAllKeyed(
            '
            SELECT conversation_message.*,
                conversation_master.*,
                conversation_user.*,
                conversation_starter.*,
                conversation_master.username AS username,
                conversation_recipient.recipient_state, conversation_recipient.last_read_date
            FROM xf_conversation_user AS conversation_user
            INNER JOIN xf_conversation_master AS conversation_master ON
                (conversation_user.conversation_id = conversation_master.conversation_id)
            INNER JOIN xf_conversation_message AS conversation_message ON
                (conversation_message.message_id = conversation_master.first_message_id)
            INNER JOIN xf_conversation_recipient AS conversation_recipient ON
                (conversation_user.conversation_id = conversation_recipient.conversation_id
                AND conversation_user.owner_user_id = conversation_recipient.user_id)
            INNER JOIN xf_user AS conversation_starter ON
                (conversation_starter.user_id = conversation_master.user_id)
            WHERE conversation_user.conversation_id IN (' . $this->_getDb()
                ->quote($conversationIds) . ')
            ORDER BY conversation_user.last_message_date DESC
        ', 'conversation_id');
    } /* END getConversationsByIds */

    /**
     * Get the specified conversations that a user can see, ordered by last
     * message first.
     *
     * @param integer $userId
     * @param array $conversationIds
     *
     * @return array Format: [conversation id] => info
     */
    public function getConversationsSearchResultsForUserByIds($userId, array $conversationIds)
    {
        if (!$conversationIds) {
            return array();
        }

        return $this->fetchAllKeyed(
            '
            SELECT conversation_message.*,
                conversation_master.*,
                conversation_user.*,
                conversation_starter.*,
                conversation_master.username AS username,
                conversation_recipient.recipient_state, conversation_recipient.last_read_date
            FROM xf_conversation_user AS conversation_user
            INNER JOIN xf_conversation_master AS conversation_master ON
                (conversation_user.conversation_id = conversation_master.conversation_id)
            INNER JOIN xf_conversation_message AS conversation_message ON
                (conversation_message.message_id = conversation_master.first_message_id)
            INNER JOIN xf_conversation_recipient AS conversation_recipient ON
                (conversation_user.conversation_id = conversation_recipient.conversation_id
                AND conversation_user.owner_user_id = conversation_recipient.user_id)
            INNER JOIN xf_user AS conversation_starter ON
                (conversation_starter.user_id = conversation_master.user_id)
            WHERE conversation_user.owner_user_id = ?
                AND conversation_user.conversation_id IN (' . $this->_getDb()
                ->quote($conversationIds) . ')
            ORDER BY conversation_user.last_message_date DESC
        ', 'conversation_id', $userId);
    } /* END getConversationsSearchResultsForUserByIds */

    /**
     * Gets the specified conversation message records.
     *
     * @param array $messageIds
     *
     * @return array false
     */
    public function getConversationMessagesByIds(array $messageIds)
    {
        return $this->fetchAllKeyed(
            '
            SELECT conversation_master.*,
                conversation_user.*,
                conversation_starter.*,
                conversation_message.username AS username,
                conversation_recipient.recipient_state, conversation_recipient.last_read_date,
                conversation_message.*
            FROM xf_conversation_message AS conversation_message
            INNER JOIN xf_conversation_user AS conversation_user ON
                (conversation_message.conversation_id = conversation_user.conversation_id)
            INNER JOIN xf_conversation_master AS conversation_master ON
                (conversation_user.conversation_id = conversation_master.conversation_id)
            INNER JOIN xf_conversation_recipient AS conversation_recipient ON
                (conversation_user.conversation_id = conversation_recipient.conversation_id
                AND conversation_user.owner_user_id = conversation_recipient.user_id)
            INNER JOIN xf_user AS conversation_starter ON
                (conversation_starter.user_id = conversation_message.user_id)
            WHERE conversation_message.message_id IN (' . $this->_getDb()
                ->quote($messageIds) . ')
            ORDER BY conversation_user.last_message_date DESC
        ', 'message_id');
    } /* END getConversationMessagesByIds */

    /**
     * Gets the specified conversation message records.
     *
     * @param array $messageIds
     *
     * @return array false
     */
    public function getConversationMessagesSearchResultsForUserByIds($userId, array $messageIds)
    {
        return $this->fetchAllKeyed(
            '
            SELECT conversation_master.*,
                conversation_user.*,
                conversation_starter.*,
                conversation_message.username AS username,
                conversation_recipient.recipient_state, conversation_recipient.last_read_date,
                conversation_message.*
            FROM xf_conversation_message AS conversation_message
            INNER JOIN xf_conversation_user AS conversation_user ON
                (conversation_message.conversation_id = conversation_user.conversation_id)
            INNER JOIN xf_conversation_master AS conversation_master ON
                (conversation_user.conversation_id = conversation_master.conversation_id)
            INNER JOIN xf_conversation_recipient AS conversation_recipient ON
                (conversation_user.conversation_id = conversation_recipient.conversation_id
                AND conversation_user.owner_user_id = conversation_recipient.user_id)
            INNER JOIN xf_user AS conversation_starter ON
                (conversation_starter.user_id = conversation_message.user_id)
            WHERE conversation_user.owner_user_id = ?
                AND conversation_message.message_id IN (' . $this->_getDb()
                ->quote($messageIds) . ')
            ORDER BY conversation_user.last_message_date DESC
        ', 'message_id', $userId);
    } /* END getConversationMessagesSearchResultsForUserByIds */

    /**
     * Gets conversation IDs in the specified range.
     * The IDs returned will be those immediately
     * after the "start" value (not including the start), up to the specified
     * limit.
     *
     * @param integer $start IDs greater than this will be returned
     * @param integer $limit Number of conversation to return
     *
     * @return array List of IDs
     */
    public function getConversationIdsInRange($start, $limit)
    {
        $db = $this->_getDb();

        return $db->fetchCol(
            $db->limit(
                '
            SELECT conversation_id
            FROM xf_conversation_master
            WHERE conversation_id > ?
            ORDER BY conversation_id
        ', $limit), $start);
    } /* END getConversationIdsInRange */

    /**
     * Gets conversation message IDs in the specified range.
     * The IDs returned will be those immediately
     * after the "start" value (not including the start), up to the specified
     * limit.
     *
     * @param integer $start IDs greater than this will be returned
     * @param integer $limit Number of conversation messages to return
     *
     * @return array List of IDs
     */
    public function getConversationMessageIdsInRange($start, $limit)
    {
        $db = $this->_getDb();

        return $db->fetchCol(
            $db->limit(
                '
            SELECT message_id
            FROM xf_conversation_message
            WHERE message_id > ?
            ORDER BY message_id
        ', $limit), $start);
    } /* END getConversationMessageIdsInRange */

    /**
     * Determines if the specified user can view the specified conversation
     *
     * @param array $conversation
     * @param string $errorPhraseKey
     * @param array|null $viewingUser
     *
     * @return boolean
     */
    public function canViewConversation(array $conversation, &$errorPhraseKey = '', array $viewingUser = null)
    {
        $this->standardizeViewingUserReference($viewingUser);

        if (!$viewingUser['user_id']) {
            return false;
        }

        return ($conversation['owner_user_id'] == $viewingUser['user_id']);
    } /* END canViewConversation */
}