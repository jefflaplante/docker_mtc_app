<?php

class bdPushover_Simulation_Template extends XenForo_Template_Public
{
	public static $bdPushover_languageId = 0;
	public static $bdPushover_visitor = null;

	public function __construct($templateName, array $params = array())
	{
		if (self::$bdPushover_visitor !== null)
		{
			$params['visitor'] = self::$bdPushover_visitor;
		}

		$params['xenOptions'] = XenForo_Application::getOptions()->getOptions();

		parent::__construct(sprintf('__%s_%d', $templateName, self::$bdPushover_languageId), $params);
	}

	protected function _getTemplatesFromDataSource(array $templateList)
	{
		$db = XenForo_Application::getDb();

		$listByLanguageId = array();
		foreach ($templateList as $template)
		{
			if (preg_match('#^__(.+)_(\d+)$#', $template, $matches))
			{
				$templateName = $matches[1];
				$languageId = $matches[2];

				if (!isset($listByLanguageId[$languageId]))
				{
					$listByLanguageId[$languageId] = array();
				}
				$listByLanguageId[$languageId][] = $templateName;
			}
		}

		$results = array();

		foreach ($listByLanguageId as $languageId => $templateNames)
		{
			$templates = $db->fetchPairs('
				SELECT title, template_compiled
				FROM xf_template_compiled
				WHERE title IN (' . $db->quote($templateNames) . ')
					AND style_id = ?
					AND language_id = ?
			', array(
				XenForo_Application::getOptions()->get('defaultStyleId'),
				$languageId,
			));

			foreach ($templates as $title => $compiled)
			{
				$results[sprintf('__%s_%d', $title, $languageId)] = $compiled;
			}
		}

		return $results;
	}

	protected function _loadTemplateFilePath($templateName)
	{
		if ($this->_usingTemplateFiles() AND preg_match('#^__(.+)_(\d+)$#', $templateName, $matches))
		{
			$templateName = $matches[1];
			$styleId = XenForo_Application::getOptions()->get('defaultStyleId');
			$languageId = $matches[2];

			return XenForo_Template_FileHandler::get($templateName, $styleId, $languageId);
		}
		else
		{
			return '';
		}
	}

}
