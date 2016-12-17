<?php

class UserNameHelper_Listener
{
	public static function loadClassView($class, array &$extend)
	{
		if (empty(XenForo_Template_Helper_Core::$helperCallbacks['unhelper_usernamehtml']))
		{
			XenForo_Template_Helper_Core::$helperCallbacks['unhelper_usernamehtml'] = XenForo_Template_Helper_Core::$helperCallbacks['usernamehtml'];
			XenForo_Template_Helper_Core::$helperCallbacks['usernamehtml'] = array('UserNameHelper_Helper', 'helperUserNameHtml');
		}
	}
}