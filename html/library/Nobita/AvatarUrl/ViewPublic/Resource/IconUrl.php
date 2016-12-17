<?php

class Nobita_AvatarUrl_ViewPublic_Resource_IconUrl extends XenForo_ViewPublic_Base
{
	public function renderJson()
	{
		$output = XenForo_Application::arrayFilterKeys($this->_params, array(
			'resource_id', 'redirectUrl'
		));

		return XenForo_ViewRenderer_Json::jsonEncodeForOutput($output);
	}
}