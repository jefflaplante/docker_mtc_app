<?php

class ControlNoFollow_ViewPublic_Resource_Description extends XFCP_ControlNoFollow_ViewPublic_Resource_Description
{
	public function renderHtml()
	{
		$options = XenForo_Application::get('options');
		$bypass = $options->bypassNoFollow;

		if ($bypass)
		{
			$isMember = XenForo_Model::create('XenForo_Model_User')->isMemberOfUserGroup($this->_params['resource'], $bypass);

			if ($isMember)
			{
				$this->_params['update']['isTrusted'] = true;
			}
		}

		return parent::renderHtml();
	}
}