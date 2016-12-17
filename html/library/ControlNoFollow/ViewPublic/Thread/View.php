<?php

class ControlNoFollow_ViewPublic_Thread_View extends XFCP_ControlNoFollow_ViewPublic_Thread_View
{
	public function renderHtml()
	{
		isset($this->_params['posts']) ? $posts = $this->_params['posts'] : $posts = '';
		
		if (!$posts)
		{
			return parent::renderHtml();
		}
		
		$options = XenForo_Application::get('options');
		$bypass = $options->bypassNoFollow;
		
		if ($bypass)
		{
			foreach ($posts AS &$post)
			{
				$isMember = XenForo_Model::create('XenForo_Model_User')->isMemberOfUserGroup($post, $bypass);
				
				if ($isMember)
				{
					$post['isTrusted'] = true;
				}
			}			
		}
		
		$this->_params['posts'] = $posts;
		
		return parent::renderHtml();
	}	
}
