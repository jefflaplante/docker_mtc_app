<?php

class Andy_VoterCount_ControllerPublic_Thread extends XFCP_Andy_VoterCount_ControllerPublic_Thread
{
	public function actionIndex()
	{				
		// get parent
		$parent = parent::actionIndex();
		
		// return parent action if this is a redirect or other non View response 
		if (!$parent instanceof XenForo_ControllerResponse_View)
		{
			return $parent;
		}
		
		// get threadId
		$threadId = $this->_input->filterSingle('thread_id', XenForo_Input::UINT);

		// get database
		$db = XenForo_Application::get('db');
		
		$pollId = $db->fetchOne("
			SELECT poll_id
			FROM xf_poll
			WHERE content_id = ?
			AND content_type = 'thread'
		", $threadId);				
		
		$results = $db->fetchAll("
			SELECT DISTINCT(user_id)
			FROM xf_poll_vote
			WHERE poll_id = ?
			GROUP BY user_id
		", $pollId);
		
		// get total
		$voterCount = count($results);		

		// declare viewParams
		$viewParams = array(
			'voterCount' => $voterCount
		);
		
		// add viewParams to parent params
		$parent->params += $viewParams;
		
		// return parent
		return $parent;	
	}
}