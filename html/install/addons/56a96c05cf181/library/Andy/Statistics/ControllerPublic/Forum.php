<?php

class Andy_Statistics_ControllerPublic_Forum extends XFCP_Andy_Statistics_ControllerPublic_Forum
{
	public function actionIndex()
	{
		// get parent		
		$parent = parent::actionIndex();
		
		// return parent action if this is a redirect or other non View response
		if (!$parent instanceOf XenForo_ControllerResponse_View)
		{
			return $parent;
		}	
		
		// return if rss
		if ($this->_routeMatch->getResponseType() == 'rss')	
		{
			return $parent;
		}
		
		// declare variables
		$totalMembers = 0;
		$totalActiveMembers = 0;
		$totalThreads = 0;
		$totalPosts = 0;
		$totalThreadsLastDay = 0;
		$totalPostsLastDay = 0;	
		
		// get database
		$db = XenForo_Application::get('db');
		
		// run query
		$statistics = $db->fetchAll("
		SELECT field_id, field_value
		FROM xf_statistics
		");		
		
		// prepare scalar variables
		foreach ($statistics as $k => $v)
		{
			if ($v['field_id'] == 'total_members')
			{
				$totalMembers = $v['field_value'];
			}
			
			if ($v['field_id'] == 'total_active_members')
			{
				$totalActiveMembers = $v['field_value'];
			}			
			
			if ($v['field_id'] == 'total_threads')
			{
				$totalThreads = $v['field_value'];
			}
			
			if ($v['field_id'] == 'total_posts')
			{
				$totalPosts = $v['field_value'];
			}
			
			if ($v['field_id'] == 'total_threads_last_day')
			{
				$totalThreadsLastDay = $v['field_value'];
			}
			
			if ($v['field_id'] == 'total_posts_last_day')
			{
				$totalPostsLastDay = $v['field_value'];
			}								
		}
		
		// prepare viewParams
		if ($parent instanceOf XenForo_ControllerResponse_View)
		{
			$viewParams = array(
			'totalMembers' => $totalMembers,
			'totalActiveMembers' => $totalActiveMembers,
			'totalThreads' => $totalThreads,
			'totalPosts' => $totalPosts,
			'totalThreadsLastDay' => $totalThreadsLastDay,
			'totalPostsLastDay' => $totalPostsLastDay
			);
			
			// add viewParams to parent params
			$parent->params += $viewParams;
		}	
		
		// return parent
		return $parent;	
	}
}