<?php

class NSFW_Listener
{	
	public static function init_dependencies(XenForo_Dependencies_Abstract $dependencies, array $data)
	{
		if (NSFW_Cookie::getMachineId() === false)
		{
			NSFW_Cookie::generateMachineId();
		}
	}
	
	public static function visitor_setup(XenForo_Visitor &$visitor)
	{
		$visitor['nsfw_options'] = @unserialize($visitor['nsfw_options']);
		if (empty($visitor['nsfw_options']))
		{
			$visitor['nsfw_options'] = array();
		}
		
		$visitor[NSFW_Cookie::VISITOR_KEY_ACTIVATED] = false;
		if (!empty($visitor['nsfw_options']['all']))
		{
			// user selected 'all' mode
			$visitor[NSFW_Cookie::VISITOR_KEY_ACTIVATED] = true;
		}
		else
		{
			// user selected 'machine' mode, check machine id
			if (!empty($visitor['nsfw_options']['machines'][NSFW_Cookie::getMachineId()]))
			{
				// machine found
				$visitor[NSFW_Cookie::VISITOR_KEY_ACTIVATED] = true;
			}
		}
	}
	
	public static function template_create($templateName, array &$params, XenForo_Template_Abstract $template)
	{
		if ($templateName == 'account_preferences')
		{
			XenForo_Template_Public::preloadTemplate('nsfw_account_preferences');
		}
		elseif ($templateName == 'PAGE_CONTAINER')
		{
			if (XenForo_Visitor::getInstance()->get(NSFW_Cookie::VISITOR_KEY_ACTIVATED))
			{
				// read template_hook for page_container_head for more information
				XenForo_Template_Public::preloadTemplate('nsfw_page_container_head');
			}
		}
	} 
	
	public static function template_hook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
	{
		if ($hookName == 'account_preferences_options')
		{
			$ourTemplate = $template->create('nsfw_account_preferences', $template->getParams());
			$contents .= $ourTemplate->render();
		}
		elseif ($hookName == 'page_container_head')
		{
			if (XenForo_Visitor::getInstance()->get(NSFW_Cookie::VISITOR_KEY_ACTIVATED))
			{
				// only render this if NSFW is activated on this machine
				$ourTemplate = $template->create('nsfw_page_container_head', $template->getParams());
				$contents .= $ourTemplate->render();
			}
		}
	}
	
	public static function template_post_render($templateName, &$content, array &$containerData, XenForo_Template_Abstract $template)
	{
		// place holder for now
	}
	
	public static function load_class($class, array &$extend)
	{
		static $classes = array(
			'XenForo_BbCode_Formatter_Base',	
			'XenForo_ControllerPublic_Account',
			'XenForo_DataWriter_User',
			'XenForo_ViewPublic_Account_Preferences',
			'XenForo_ViewPublic_Thread_View',
		);
		
		if (in_array($class, $classes))
		{
			$extend[] = 'NSFW_' . $class;
		}
	}
}