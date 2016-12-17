<?php

class Andy_TabAlerts_ControllerPublic_TabAlerts extends XenForo_ControllerPublic_Abstract
{
	public function actionIndex()
	{
		return $this->responseView('Andy_TabAlerts_ViewPublic_TabAlerts', '');
	}
}