<?php

class ControlNoFollow_Listener
{
	public static function extendViews($class, array &$extend)
	{
		if ($class == 'XenForo_ViewPublic_Thread_View')
		{
			$extend[] = 'ControlNoFollow_ViewPublic_Thread_View';
		}

		if ($class == 'XenResource_ViewPublic_Resource_Description')
		{
			$extend[] = 'ControlNoFollow_ViewPublic_Resource_Description';
		}
	}
	
	public static function templateCreate($templateName, array &$params, XenForo_Template_Abstract $template)
	{
		if ($templateName == 'thread_view')
		{
			isset($params['posts']) ? $posts = $params['posts'] : $posts = '';
			
			if ($posts)
			{
				$options = XenForo_Application::get('options');
				$bypass = $options->bypassNoFollow;		
				
				$posts = $params['posts'];
				
				foreach ($posts AS &$post)
				{
					$isMember = XenForo_Model::create('XenForo_Model_User')->isMemberOfUserGroup($post, $bypass);

					if ($isMember)
					{
						if ($post['signatureHtml'] instanceof XenForo_BbCode_TextWrapper)
						{
							$post['signatureHtml'] = str_replace('rel="nofollow"', '', $post['signatureHtml']->__toString());
						}
					}					
				}
				
				$params['posts'] = $posts;
			}
		}
	}
}