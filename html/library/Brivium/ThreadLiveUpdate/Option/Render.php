<?php

/**
 * Helper for choosing what happens by default to spam threads.
 *
 * @package XenForo_Options
 */
abstract class Brivium_ThreadLiveUpdate_Option_Render
{
	
	public static function renderOption(XenForo_View $view, $fieldPrefix, array $preparedOption, $canEdit)
	{
		$value = $preparedOption['option_value'];
		$seleted = 0;
		if($value)$seleted = -1;
		$editLink = $view->createTemplateObject('option_list_option_editlink', array(
			'preparedOption' => $preparedOption,
			'canEditOptionDefinition' => $canEdit
		));

		$forumOptions = XenForo_Option_NodeChooser::getNodeOptions(
			$seleted,
			sprintf('(%s)', new XenForo_Phrase('unspecified')),
			'Forum'
		);
		
		return $view->createTemplateObject('BRTLU_list_nodes', array(
			'fieldPrefix' => $fieldPrefix,
			'listedFieldName' => $fieldPrefix . '_listed[]',
			'preparedOption' => $preparedOption,
			'formatParams' => $forumOptions,
			'editLink' => $editLink
		));
	}
}