<?php

class Andy_ChangeDate_ControllerPublic_Post extends XFCP_Andy_ChangeDate_ControllerPublic_Post
{
	public function actionChangeDate()
	{		
		// throw error if not logged in
		if (!XenForo_Visitor::getUserId())
		{
			throw $this->getNoPermissionResponseException();
		}			
		
		// get user group permission
		if (!XenForo_Visitor::getInstance()->hasPermission('changeDateGroupID', 'changeDateID'))
		{
			throw $this->getNoPermissionResponseException();
		}
				
		// get post_id from route, example /forums/posts/12345/changedate
		$postId = $this->_input->filterSingle('post_id', XenForo_Input::UINT);
		
		// get post variables
		$post = $this->getModelFromCache('XenForo_Model_Post')->getPostById($postId);
		
		// get visitor data
		$visitor = XenForo_Visitor::getInstance();
		
		// get timezone
		$timezone = $visitor['timezone'];
		
		// set timezone
		date_default_timezone_set($timezone);
		
		// get options from Admin CP -> Options -> Change Date -> Date Format
		$dateFormat = XenForo_Application::get('options')->changeDateDateFormat;						

		if (	$dateFormat == 1)
		{
			$dateFormat = 'M j, Y';
		}

		if (	$dateFormat == 2)
		{
			$dateFormat = 'j M Y';
		}
		
		if (	$dateFormat == 3)
		{
			$dateFormat = 'Y-m-d';
		}		
		
		// get options from Admin CP -> Options -> Change Date -> Time Format
		$timeFormat = XenForo_Application::get('options')->changeDateTimeFormat;	
		
		if (	$timeFormat == 1)
		{
			$timeFormat = 'g:i A';
		}

		if (	$timeFormat == 2)
		{
			$timeFormat = 'H:i';
		}			
		
		// format date and time
		$timeFormat = $dateFormat . ' ' . $timeFormat;	
		$post['formatted_date'] = date($timeFormat, $post['post_date']);
		
		// send to template
		$viewParams = array(
			'post' => $post
		);
		
		// send to template
		return $this->responseView('Andy_ChangeDate_ViewPublic_Post','andy_changedate',$viewParams);
	}
	
	public function actionChangeDateSave()
	{	
		// throw error if not logged in
		if (!XenForo_Visitor::getUserId())
		{
			throw $this->getNoPermissionResponseException();
		}			
		
		// get user group permission
		if (!XenForo_Visitor::getInstance()->hasPermission('changeDateGroupID', 'changeDateID'))
		{
			throw $this->getNoPermissionResponseException();
		}
		
		// make sure data comes from $_POST
		$this->_assertPostOnly();		
		
		// get post_id  
		$post['post_id'] = $this->_input->filterSingle('post_id', XenForo_Input::UINT);
		
		// get new_post_date from overlay		
		$newPostDate = $this->_input->filterSingle('new_post_date', XenForo_Input::STRING);
		
		// get visitor data
		$visitor = XenForo_Visitor::getInstance();
		
		// get timezone
		$timezone = $visitor['timezone'];
		
		// set timezone
		date_default_timezone_set($timezone);		
		
		// convert newPostDate to unix timestamp
		$dateline = strtotime($newPostDate);
		
		// make sure dateline has a value
		if (!$dateline)
		{
			throw new XenForo_Exception(new XenForo_Phrase('changedate_please_enter_valid_date_format'), true);
		}
		
		//########################################
		// start database operations
		//########################################
		
		// update post
		$dw = XenForo_DataWriter::create('XenForo_DataWriter_DiscussionMessage_Post');
		$dw->setExistingData($post['post_id']);
		$dw->set('post_date', $dateline);
		$dw->save(); 
		
		// rebuild discussion
		$threadId = $dw->get('thread_id');
		$dw = XenForo_DataWriter::create('XenForo_DataWriter_Discussion_Thread');
		$dw->setExistingData($threadId); 
		$dw->rebuildDiscussion();
		$dw->save(); 
		
		// declare variable
		$lastPost = '';
		
		// get database
		$db = XenForo_Application::get('db');		

		// check if post modified is last post
		$thread = $db->fetchRow("
		SELECT thread_id, node_id, last_post_date, last_post_user_id, last_post_username
		FROM xf_thread
		WHERE last_post_id = ?
		", $post['post_id']);
		
		if ($thread['thread_id'] != '')
		{
			$lastPost = 'yes';
		}
		
		//########################################
		// is last post
		
		if ($lastPost == 'yes')
		{		
			// update xf_forum
			$db->query("
				UPDATE xf_forum SET
					last_post_date = ?,
					last_post_user_id = ?, 
					last_post_username = ?
				WHERE node_id = ?
			", array($thread['last_post_date'], $thread['last_post_user_id'], $thread['last_post_username'], $thread['node_id']));				
		}		
		
		//########################################
		// return with response redirect
		//######################################## 
		
		// prepare variable for redirect
		$changesSaved = new XenForo_Phrase('changedate_changes_saved');		
				
		return $this->responseRedirect(
		XenForo_ControllerResponse_Redirect::SUCCESS,
		XenForo_Link::buildPublicLink('posts', $post), $changesSaved);			
	} 
}