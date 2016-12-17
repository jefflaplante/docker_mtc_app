<?php

class bdPushover_Simulation_View extends XenForo_View
{
	protected static $_bdPushover_viewRenderer = null;

	public static function create()
	{
		if (self::$_bdPushover_viewRenderer === null)
		{
			self::$_bdPushover_viewRenderer = bdPushover_Simulation_ViewRenderer::create();
		}

		return new bdPushover_Simulation_View(self::$_bdPushover_viewRenderer, self::$_bdPushover_viewRenderer->bdPushover_getResponse());
	}

}
