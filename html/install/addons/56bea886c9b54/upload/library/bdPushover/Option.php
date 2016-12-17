<?php

class bdPushover_Option
{
	public static function get($key, $subKey = null)
	{
		$options = XenForo_Application::getOptions();

		return $options->get(sprintf('bdPushover_%s', $key), $subKey);
	}

	public static function renderContentTypes(XenForo_View $view, $fieldPrefix, array $preparedOption, $canEdit)
	{
		$editLink = $view->createTemplateObject('option_list_option_editlink', array(
			'preparedOption' => $preparedOption,
			'canEditOptionDefinition' => $canEdit
		));

		return $view->createTemplateObject('bdpushover_option_template_content_types', array(
			'fieldPrefix' => $fieldPrefix,
			'listedFieldName' => $fieldPrefix . '_listed[]',
			'preparedOption' => $preparedOption,
			'formatParams' => $preparedOption['formatParams'],
			'editLink' => $editLink,

			'contentTypes' => bdPushover_Helper_Template::getContentTypes(true),
			'value' => $preparedOption['option_value'],
		));
	}

}
