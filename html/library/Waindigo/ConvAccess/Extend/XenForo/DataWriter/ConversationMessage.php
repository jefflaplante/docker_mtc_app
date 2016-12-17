<?php

/**
 *
 * @see XenForo_DataWriter_ConversationMessage
 */
class Waindigo_ConvAccess_Extend_XenForo_DataWriter_ConversationMessage extends XFCP_Waindigo_ConvAccess_Extend_XenForo_DataWriter_ConversationMessage
{

    /**
     *
     * @see XenForo_DataWriter_ConversationMessage::_preSave()
     */
    protected function _preSave()
    {
        if ($this->getOption(self::OPTION_CHECK_SENDER_RECIPIENT))
        {
            $recipients = $this->_getConversationModel()->getConversationRecipients($this->get('conversation_id'));
            if (!isset($recipients[$this->get('user_id')]))
            {
                $conversation = array(
                    'conversation_id' => $this->get('conversation_id'),
                    'reply_count' => 0,
                    'last_message_date' => 0,
                    'last_message_id' => 0,
                    'last_message_user_id' => 0,
                    'last_message_username' => ''
                );
                $this->_getConversationModel()->insertConversationRecipient($conversation, $this->get('user_id'));
            }
            $this->setOption(self::OPTION_CHECK_SENDER_RECIPIENT, false);
        }

        parent::_preSave();
    } /* END _preSave */
}