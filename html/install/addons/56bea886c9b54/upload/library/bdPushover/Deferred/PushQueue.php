<?php

class bdPushover_Deferred_PushQueue extends XenForo_Deferred_Abstract
{
	public function execute(array $deferred, array $data, $targetRunTime, &$status)
	{
		/* @var $queueModel bdPushover_Model_PushQueue */
		$queueModel = XenForo_Model::create('bdPushover_Model_PushQueue');

		$hasMore = $queueModel->runQueue($targetRunTime);
		if ($hasMore)
		{
			return $data;
		}
		else
		{
			return false;
		}
	}

}
