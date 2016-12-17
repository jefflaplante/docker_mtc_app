<?php

class bdPushover_Listener
{
	public static function load_class($class, array &$extend)
	{
		static $classes = array(
			'XenForo_ControllerPublic_Account',
			'XenForo_ControllerPublic_Register',

			'XenForo_DataWriter_Alert',

			'XenForo_Model_Alert',
			'XenForo_Model_Conversation',
			
			'XenForo_ViewPublic_Account_ExternalAccounts',
		);

		if (in_array($class, $classes, true))
		{
			$extend[] = 'bdPushover_' . $class;
		}
	}

	public static function init_dependencies(XenForo_Dependencies_Abstract $dependencies, array $data)
	{
		XenForo_Template_Helper_Core::$helperCallbacks['bdpushover_canassociate'] = array(
			'bdPushover_Helper_Template',
			'canAssociate'
		);
		
		XenForo_Template_Helper_Core::$helperCallbacks['bdpushover_getoption'] = array(
			'bdPushover_Option',
			'get'
		);
	}

	public static function front_controller_post_view(XenForo_FrontController $fc, &$output)
	{
		bdPushover_Helper_Alert::work();
	}

}
