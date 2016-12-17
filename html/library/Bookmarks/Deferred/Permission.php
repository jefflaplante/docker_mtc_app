<?php

class Bookmarks_Deferred_Permission extends XFCP_Bookmarks_Deferred_Permission
{
	public function execute(array $deferred, array $data, $targetRunTime, &$status)
	{
		$response = parent::execute($deferred, $data, $targetRunTime, $status);
		
		// all processing has been completed
		if ($response === false && isset($data['bookmark_user_ids']) && is_array($data['bookmark_user_ids']))
		{
		}
		
		return $response;
	}
}