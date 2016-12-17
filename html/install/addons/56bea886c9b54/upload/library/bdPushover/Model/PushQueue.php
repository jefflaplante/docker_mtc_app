<?php

class bdPushover_Model_PushQueue extends XenForo_Model
{
	public function insertQueue(array $alert, array $assoc, $queueDate = null)
	{
		if ($queueDate === null)
		{
			// queue it for 10 seconds, enough time for user to dismiss it as needed
			$queueDate = XenForo_Application::$time + 10;
		}

		XenForo_Application::defer('bdPushover_Deferred_PushQueue', array(), 'bdPushover_PushQueue', false, $queueDate);

		$this->_getDb()->insert('xf_bdpushover_push_queue', array(
			'alerted_user_id' => $alert['alerted_user_id'],
			'queue_data' => serialize(array(
				'alert' => $alert,
				'assoc' => $assoc,
			)),
			'queue_date' => $queueDate,
		));

		return true;
	}

	public function removeQueueForUser($userId)
	{
		return $this->_getDb()->delete('xf_bdpushover_push_queue', array('alerted_user_id = ?' => $userId));
	}

	public function hasQueue()
	{
		$minId = $this->_getDb()->fetchOne('
			SELECT MIN(push_queue_id)
			FROM xf_bdpushover_push_queue
			WHERE queue_date < ?
		', array(XenForo_Application::$time));

		return (bool)$minId;
	}

	public function getQueueAt($queueDate)
	{
		return $this->fetchAllKeyed('
			SELECT *
			FROM xf_bdpushover_push_queue
			WHERE queue_date = ?
		', 'push_queue_id', array($queueDate));
	}

	public function getQueue($limit = 20)
	{
		return $this->fetchAllKeyed($this->limitQueryResults('
			SELECT *
			FROM xf_bdpushover_push_queue
			WHERE queue_date < ?
			ORDER BY queue_date
		', $limit), 'push_queue_id', array(XenForo_Application::$time));
	}

	public function runQueue($targetRunTime = 0)
	{
		$s = microtime(true);
		$db = $this->_getDb();

		do
		{
			$queue = $this->getQueue($targetRunTime ? 20 : 0);
			$templateQueue = array();

			foreach ($queue AS $id => $record)
			{
				if (!$db->delete('xf_bdpushover_push_queue', 'push_queue_id = ' . $db->quote($id)))
				{
					// already been deleted - run elsewhere
					continue;
				}

				$data = @unserialize($record['queue_data']);
				if (empty($data) OR !isset($data['alert']) OR !isset($data['assoc']))
				{
					continue;
				}

				$templateQueue[] = bdPushover_Helper_Alert::work1_prepare($data['alert'], $data['assoc']);
			}

			while (!empty($templateQueue))
			{
				bdPushover_Helper_Alert::work2_send(array_shift($templateQueue));

				if ($targetRunTime && microtime(true) - $s > $targetRunTime)
				{
					$queue = false;
					break;
				}
			}
		}
		while ($queue);

		return $this->hasQueue();
	}

}
