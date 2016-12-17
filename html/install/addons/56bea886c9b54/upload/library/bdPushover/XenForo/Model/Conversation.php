<?php

class bdPushover_XenForo_Model_Conversation extends XFCP_bdPushover_XenForo_Model_Conversation
{
	public function insertConversationAlert(array $conversation, array $alertUser, $action, array $triggerUser = null, array $extraData = null, array &$messageInfo = null)
	{
		$response = parent::insertConversationAlert($conversation, $alertUser, $action, $triggerUser, $extraData, $messageInfo);

		if (!bdPushover_Option::get('pushConversationNotification'))
		{
			return $response;
		}

		if (!$triggerUser)
		{
			$triggerUser = array(
				'user_id' => $conversation['last_message_user_id'],
				'username' => $conversation['last_message_username']
			);
		}

		if ($triggerUser['user_id'] == $alertUser['user_id'])
		{
			return;
		}

		$fakeAlert = array(
			'alert_id' => 0,
			'alerted_user_id' => $alertUser['user_id'],
			'user_id' => $triggerUser['user_id'],
			'username' => $triggerUser['username'],
			'content_type' => 'conversation',
			'content_id' => $conversation['conversation_id'],
			'action' => $action,
			'event_date' => XenForo_Application::$time,
			'extra_data' => serialize($extraData),
		);

		bdPushover_Helper_Alert::tryToEnqueue($fakeAlert);

		return $response;
	}

}
