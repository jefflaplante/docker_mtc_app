<?php

class Borbole_EditAlert_ControllerPublic_Thread extends XFCP_Borbole_EditAlert_ControllerPublic_Thread
{
	//Send alert to thread starters when someone edits his/her threads
	public function actionSave()
	{
	    $this->_assertPostOnly();
		$this->_assertRegistrationRequired();
		
		$threadId = $this->_input->filterSingle('thread_id', XenForo_Input::UINT);
		
		$ftpHelper = $this->getHelper('ForumThreadPost');
		
		list($thread, $forum) = $ftpHelper->assertThreadValidAndViewable($threadId);
		
		$this->_assertCanEditThread($thread, $forum);
		
		$visitor = XenForo_Visitor::getInstance();
		
		$options = XenForo_Application::get('options');
		
			
		$threadstarter = $this->getModelFromCache('XenForo_Model_User')->getUserById($thread['user_id']);
				
		if (!empty($options->thread_edit_alert) AND $threadstarter['user_id'] != $visitor['user_id'])
        {	
			$recipients = array($thread['username']);
		    $this->_getEditAlerts()->sendEditAlert('thread_starter', $thread['first_post_id'], $recipients, $visitor);
		}
	  
		return parent::actionSave();
	}
			
	protected function _getEditAlerts()
	{
		return $this->getModelFromCache('Borbole_EditAlert_Model_EditAlert');
	}	
}