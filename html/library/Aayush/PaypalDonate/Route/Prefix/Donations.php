<?php

/**
 * Route public prefix handler for donations
 *
 * @package Aayush_PaypalDonate
 */
class Aayush_PaypalDonate_Route_Prefix_Donations implements XenForo_Route_Interface
{
	/**
	 * Match a specific route for an already matched prefix.
	 *
	 * @see XenForo_Route_Interface::match()
	 */
	public function match($routePath, Zend_Controller_Request_Http $request, XenForo_Router $router)
	{
		$action = $router->resolveActionWithIntegerParam($routePath, $request, 'donation_id');
		return $router->getRouteMatch('Aayush_PaypalDonate_ControllerPublic_Donation', $action, 'donations');
	}

	/**
	 * Method to build a link to the specified page/action with the provided
	 * data and params.
	 *
	 * @see XenForo_Route_BuilderInterface
	 */
	public function buildLink($originalPrefix, $outputPrefix, $action, $extension, $data, array &$extraParams)
	{
		return XenForo_Link::buildBasicLinkWithIntegerParam($outputPrefix, $action, $extension, $data, 'donation_id');
	}
}