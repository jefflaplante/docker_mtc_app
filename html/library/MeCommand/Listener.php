<?php

class MeCommand_Listener
{
	public static function extendViews($class, array &$extend)
	{
		if ($class == 'XenForo_ViewPublic_Thread_View')
		{
			$extend[] = 'MeCommand_ViewPublic_Thread_View';
		}
		
		if ($class == 'XenForo_ViewPublic_Thread_ViewNewPosts')
		{
			$extend[] = 'MeCommand_ViewPublic_Thread_ViewNewPosts';
		}
	}
	
	public static function extendBbCodes($class, array &$extend)
	{
		if ($class == 'XenForo_BbCode_Formatter_Base')
		{
			$extend[] = 'MeCommand_BbCode_Formatter_Base';
		}
	}
	
	public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
	{
		if ($hookName == 'thread_view_pagenav_before')
		{
			$css = $template->addRequiredExternal('css', 'me_command');
		}
	}
}