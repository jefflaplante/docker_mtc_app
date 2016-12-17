<?php

/**
 * Route prefix handler for logs in the admin control panel.
 *
 * @package Bookmarks
 */
class Bookmarks_Route_PrefixAdmin_Bookmarks implements XenForo_Route_Interface
{
	/**
	 * Match a specific route for an already matched prefix.
	 *
	 * @see XenForo_Route_Interface::match()
	 */
	public function match($routePath, Zend_Controller_Request_Http $request, XenForo_Router $router)
	{
		return $router->getRouteMatch('Bookmarks_ControllerAdmin_Bookmarks', $routePath, 'bookmarks');
	}
}