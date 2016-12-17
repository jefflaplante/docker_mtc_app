<?php

class bdPushover_Route_Prefix_Redirect implements XenForo_Route_Interface
{
	public static $base64Unsafe = array(
		'+',
		'/',
		'='
	);
	public static $base64Safe = array(
		'-',
		'_',
		'.'
	);

	public function match($routePath, Zend_Controller_Request_Http $request, XenForo_Router $router)
	{
		$action = $router->resolveActionWithIntegerParam($routePath, $request, 'alert_id');
		$request->setParam('redirect', $this->_decode($action, true));

		return $router->getRouteMatch('bdPushover_ControllerPublic_Redirect', 'index');
	}

	public function buildLink($originalPrefix, $outputPrefix, $action, $extension, $data, array &$extraParams)
	{
		$action = $this->_encode($extraParams['redirect'], true);
		unset($extraParams['redirect']);

		if (!empty($data['alert_id']))
		{
			return XenForo_Link::buildBasicLinkWithIntegerParam($outputPrefix, $action, $extension, $data, 'alert_id');
		}
		else
		{
			return XenForo_Link::buildBasicLink($outputPrefix, $action, $extension);
		}
	}

	protected function _encode($data, $isUri = false)
	{
		if ($isUri)
		{
			if (Zend_Uri::check($data))
			{
				$data = str_replace(XenForo_Link::getCanonicalLinkPrefix() . '/', '', $data);
			}
		}

		$base64 = base64_encode($data);

		$safe = str_replace(self::$base64Unsafe, self::$base64Safe, $base64);

		return $safe;
	}

	protected function _decode($safe, $expectUri = false)
	{
		$base64 = str_replace(self::$base64Safe, self::$base64Unsafe, $safe);

		$data = base64_decode($base64);

		if ($expectUri)
		{
			if (!Zend_Uri::check($data))
			{
				$data = XenForo_Link::getCanonicalLinkPrefix() . '/' . $data;
			}
		}

		return $data;
	}

}
