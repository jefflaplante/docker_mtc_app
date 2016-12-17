<?php

class Nobita_AvatarUrl_Listener
{
	public static function load_proxy($class, array &$extend)
	{
		static $proxy = array(
			'XenForo_ControllerPublic_Account',

			'XenResource_ControllerPublic_Resource'
		);

		if (in_array($class, $proxy))
		{
			$extend[] = str_replace('Listener', '', __CLASS__) . $class;
		}
	}

	public static function template_hook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
	{
		$params = $template->getParams();
		$params += $hookParams;

		$params['importType'] = $hookName;
		$contents .= $template->create('avatar_url_import_helper', $params)->render();
	}
}

