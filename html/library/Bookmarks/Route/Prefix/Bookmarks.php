<?php

class Bookmarks_Route_Prefix_Bookmarks implements XenForo_Route_Interface
{
	public function match($routePath, Zend_Controller_Request_Http $request, XenForo_Router $router)
	{
		$action = $router->resolveActionWithIntegerParam($routePath, $request, 'bookmark_id');
		return $router->getRouteMatch('Bookmarks_ControllerPublic_Bookmarks', $action);
	}

	/**
	 * Method to build a link that includes the user_id
	 * @see XenForo_Route_BuilderInterface
	 */
	public function buildLink($originalPrefix, $outputPrefix, $action, $extension, $data, array &$extraParams)
	{
		return XenForo_Link::buildBasicLinkWithIntegerParam($outputPrefix, $action, $extension, $data, 'bookmark_id');
	}		
}