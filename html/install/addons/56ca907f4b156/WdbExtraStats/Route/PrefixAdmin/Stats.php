<?php

class WdbExtraStats_Route_PrefixAdmin_Stats implements XenForo_Route_Interface
{
	/**
	 * Match a specific route for an already matched prefix.
	 *
	 * @see XenForo_Route_Interface::match()
	 */
	public function match($routePath, Zend_Controller_Request_Http $request, XenForo_Router $router)
	{
		return $router->getRouteMatch('WdbExtraStats_ControllerAdmin_Stats', $routePath, 'stats');
	}
}