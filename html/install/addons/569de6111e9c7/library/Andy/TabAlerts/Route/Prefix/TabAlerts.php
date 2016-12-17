<?php

class Andy_TabAlerts_Route_Prefix_TabAlerts implements XenForo_Route_Interface
{
	public function match($routePath, Zend_Controller_Request_Http $request, XenForo_Router $router)
	{
		return $router->getRouteMatch('Andy_TabAlerts_ControllerPublic_TabAlerts', $routePath);
	}
}