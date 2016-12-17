<?php

class ControlNoFollow_Option_UsergroupChooser
{
	public static function renderCheckbox(XenForo_View $view, $fieldPrefix, array $preparedOption, $canEdit)
	{
		return self::_render('option_list_option_checkbox', $view, $fieldPrefix, $preparedOption, $canEdit);
	}

	protected static function _render($templateName, XenForo_View $view, $fieldPrefix, array $preparedOption, $canEdit)
	{
		$preparedOption['formatParams'] = XenForo_Option_UserGroupChooser::getUserGroupOptions(
			$preparedOption['option_value']
		);

		return XenForo_ViewAdmin_Helper_Option::renderOptionTemplateInternal(
			$templateName, $view, $fieldPrefix, $preparedOption, $canEdit
		);
	}    
}