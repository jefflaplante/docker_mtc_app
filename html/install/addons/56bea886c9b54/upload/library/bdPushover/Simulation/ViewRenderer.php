<?php

class bdPushover_Simulation_ViewRenderer extends XenForo_ViewRenderer_HtmlPublic
{
	protected static $_bdPushover_dependencies = null;
	protected static $_bdPushover_response = null;
	protected static $_bdPushover_request = null;

	public function bdPushover_getResponse()
	{
		return $this->_response;
	}

	public static function create()
	{
		if (self::$_bdPushover_dependencies === null)
		{
			self::$_bdPushover_dependencies = new bdPushover_Simulation_Dependencies();
		}

		if (self::$_bdPushover_request === null)
		{
			self::$_bdPushover_request = new Zend_Controller_Request_Http();
		}

		if (self::$_bdPushover_response === null)
		{
			self::$_bdPushover_response = new Zend_Controller_Response_Http();
		}

		return new bdPushover_Simulation_ViewRenderer(self::$_bdPushover_dependencies, self::$_bdPushover_response, self::$_bdPushover_request);
	}

}
