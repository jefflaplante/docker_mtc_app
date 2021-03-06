<?php

class bdPushover_Simulation_Dependencies extends XenForo_Dependencies_Public
{
	public function createTemplateObject($templateName, array $params = array())
	{
		if ($params)
		{
			$params = XenForo_Application::mapMerge($this->_defaultTemplateParams, $params);
		}
		else
		{
			$params = $this->_defaultTemplateParams;
		}

		return new bdPushover_Simulation_Template($templateName, $params);
	}

}
