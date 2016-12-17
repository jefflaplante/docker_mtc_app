<?php

class Borbole_EditAlert_ControllerPublic_Post extends XFCP_Borbole_EditAlert_ControllerPublic_Post
{
	//Send alert to posters when someone edits his/her posts
	public function actionSaveInline()
	{
		$postId = $this->_input->filterSingle('post_id', XenForo_Input::UINT);
		
		$ftpHelper = $this->getHelper('ForumThreadPost');
		list($post, $thread, $forum) = $ftpHelper->assertPostValidAndViewable($postId);
		$this->_assertCanEditPost($post, $thread, $forum);

		$postModel = $this->_getPostModel();
		
		$visitor = XenForo_Visitor::getInstance();
			
	    $options = XenForo_Application::get('options');
			
		$poster = $this->getModelFromCache('XenForo_Model_User')->getUserById($post['user_id']);
		
		if (!empty($options->edit_post_alert) AND $poster['user_id'] != $visitor['user_id']) 
		{
		    $recipients = array($post['username']);			
			$this->_getEditAlerts()->sendEditAlert('posts_edit', $post['post_id'], $recipients, $visitor);
		}
			
		return parent::actionSaveInline();
	}
	
	protected function _getEditAlerts()
	{
		return $this->getModelFromCache('Borbole_EditAlert_Model_EditAlert');
	}
	
}