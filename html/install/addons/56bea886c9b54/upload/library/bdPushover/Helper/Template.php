<?php

class bdPushover_Helper_Template
{
	public static function canAssociate($service = 'pushover')
	{
		switch ($service)
		{
			case 'pushbullet':
				$id = bdPushover_Option::get('pushbulletId');
				$secret = bdPushover_Option::get('pushbulletSecret');
				if (empty($id) OR empty($secret))
				{
					return false;
				}
				break;
			case 'pushover':
			default:
				$token = bdPushover_Option::get('token');
				if (empty($token))
				{
					return false;
				}
				break;
		}

		return XenForo_Visitor::getInstance()->hasPermission('general', 'bdPushover_associate');
	}

	public static function getContentTypes($getAll = false)
	{
		$contentTypesAll = XenForo_Application::get('contentTypes');
		$contentTypes = array();
		foreach ($contentTypesAll as $contentType => $contentTypeFields)
		{
			if (isset($contentTypeFields['alert_handler_class']))
			{
				$contentTypes[$contentType] = new XenForo_Phrase($contentType);
			}
		}

		if (!$getAll)
		{
			$optionContents = bdPushover_Option::get('contents');
			foreach ($optionContents as $contentType => $disabled)
			{
				if (isset($contentTypes[$contentType]) AND $disabled === 'disabled')
				{
					unset($contentTypes[$contentType]);
				}
			}
		}

		return $contentTypes;
	}

}
