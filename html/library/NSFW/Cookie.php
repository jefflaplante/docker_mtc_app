<?php

class NSFW_Cookie
{
	const COOKIE_NAME_MACHINE_ID = 'machineid';
	const VISITOR_KEY_ACTIVATED = 'nsfw_activated';
	
	protected static $_machineId = false;
	
	public static function getMachineId()
	{
		$machineId = self::$_machineId;
		
		if (empty($machineId))
		{
			$machineId = self::_getCookie(self::COOKIE_NAME_MACHINE_ID);
		}
		
		return $machineId;
	}
	
	public static function generateMachineId()
	{
		$machineId = uniqid('', true); // 23 characters long unique id
		self::_setCookie(self::COOKIE_NAME_MACHINE_ID, $machineId);
		self::$_machineId = $machineId;
		
		return $machineId;
	}
	
	protected static function _getCookie($name)
	{
		// mostly from XenForo_Helper_Cookie::getCookie()
		
		$name = 'nsfw_' . XenForo_Application::get('config')->cookie->prefix . $name;

		if (isset($_COOKIE[$name]))
		{
			return $_COOKIE[$name];
		}
		else
		{
			return false;
		}
	}
	
	protected static function _setCookie($name, $value)
	{
		// mostly from XenForo_Helper_Cookie::_setCookieInternal()
		
		$secure = XenForo_Application::$secure;

		$cookieConfig = XenForo_Application::get('config')->cookie;
		$path = $cookieConfig->path;
		$domain = $cookieConfig->domain;

		$expiration = XenForo_Application::$time + 86400 * 365;

		$name = 'nsfw_' . $cookieConfig->prefix . $name;

		try
		{
			return setcookie($name, $value, $expiration, $path, $domain, $secure, false /* httpOnly */);
		}
		catch (Exception $e)
		{
			return false; // possibly an error with the name... silencing may not be ideal, but it shouldn't usually happen (not my word)
		}
	}
}