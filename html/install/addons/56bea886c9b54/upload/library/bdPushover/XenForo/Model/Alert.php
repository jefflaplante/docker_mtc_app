<?php

class bdPushover_XenForo_Model_Alert extends XFCP_bdPushover_XenForo_Model_Alert
{
	public function bdPushover_getContentForAlerts(array $data, $userId, array $viewingUser)
	{
		return $this->_getContentForAlerts($data, $userId, $viewingUser);
	}

	public function bdPushover_markAlertRead(array $alert, $time = null)
	{
		if (is_callable(array(
			$this,
			'bdAlerts_markAlertRead'
		)))
		{
			// integration with [bd] Alerts
			return $this->bdAlerts_markAlertRead($alert, $time);
		}

		if (XenForo_Model_Alert::PREVENT_MARK_READ)
		{
			return;
		}

		if ($time === null)
		{
			$time = XenForo_Application::$time;
		}

		$db = $this->_getDb();

		if ($db->update('xf_user_alert', array('view_date' => $time), array('alert_id = ?' => $alert['alert_id'])))
		{
			$db->query('
				UPDATE `xf_user`
				SET alerts_unread = IF(alerts_unread > 0, alerts_unread - 1, 0)
				WHERE user_id = ?
			', array($alert['alerted_user_id']));
		}
	}

	public function bdPushover_getHandlerCache()
	{
		return $this->_handlerCache;
	}

	public function markAllAlertsReadForUser($userId, $time = null)
	{
		if (bdPushover_Option::get('deferred'))
		{
			$this->getModelFromCache('bdPushover_Model_PushQueue')->removeQueueForUser($userId);
		}

		return parent::markAllAlertsReadForUser($userId, $time);
	}

}
