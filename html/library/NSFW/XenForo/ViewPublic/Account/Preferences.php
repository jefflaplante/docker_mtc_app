<?php

class NSFW_XenForo_ViewPublic_Account_Preferences extends XFCP_NSFW_XenForo_ViewPublic_Account_Preferences
{
	public function prepareParams()
	{
		parent::prepareParams();
		
		$this->_params['nsfw_machineId'] = NSFW_Cookie::getMachineId();
		$this->_params['nsfw_time'] = XenForo_Application::$time;
	}
}