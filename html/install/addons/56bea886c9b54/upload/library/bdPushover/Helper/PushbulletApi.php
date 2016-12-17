<?php

class bdPushover_Helper_PushbulletApi
{
	public static function getAuthorizeUrl($redirectUri)
	{
		return call_user_func_array('sprintf', array(
			'https://www.pushbullet.com/authorize?response_type=code&client_id=%s&redirect_uri=%s',
			bdPushover_Option::get('pushbulletId'),
			$redirectUri,
		));
	}

	public static function getAccessTokenFromCode($code, $redirectUri)
	{
		$id = bdPushover_Option::get('pushbulletId');
		$secret = bdPushover_Option::get('pushbulletSecret');

		if (empty($id) OR empty($secret))
		{
			return false;
		}

		try
		{
			$client = XenForo_Helper_Http::getClient('https://api.pushbullet.com/oauth2/token');
			$client->setParameterPost(array(
				'grant_type' => 'authorization_code',
				'client_id' => $id,
				'client_secret' => $secret,
				'code' => $code,
				// 'redirect_uri' => $url,
			));

			$response = $client->request('POST');

			$body = $response->getBody();
			$parts = json_decode($body, true);

			if (!empty($parts['access_token']))
			{
				return $parts['access_token'];
			}
			else
			{
				return false;
			}
		}
		catch (Zend_Http_Client_Exception $e)
		{
			return false;
		}
	}

	public static function getUserInfo($accessToken)
	{
		try
		{
			$client = XenForo_Helper_Http::getClient('https://api.pushbullet.com/v2/users/me');
			$client->setAuth($accessToken);

			$response = $client->request('GET');
			return json_decode($response->getBody(), true);
		}
		catch (Zend_Http_Client_Exception $e)
		{
			return false;
		}
	}

	public static function getDevices($accessToken)
	{
		try
		{
			$client = XenForo_Helper_Http::getClient('https://api.pushbullet.com/v2/devices');
			$client->setAuth($accessToken);

			$response = $client->request('GET');
			$parts = json_decode($response->getBody(), true);

			if (isset($parts['devices']))
			{
				return $parts['devices'];
			}
			else
			{
				return array();
			}
		}
		catch (Zend_Http_Client_Exception $e)
		{
			return array();
		}
	}

	public static function push($accessToken, $message, array $extra = array())
	{
		try
		{
			$postParams = array();

			if (isset($extra['device']))
			{
				// send to one device
				$postParams['device_iden'] = $extra['device'];
			}

			if (!empty($extra['url']))
			{
				// send as link
				$postParams['type'] = 'link';
				$postParams['url'] = $extra['url'];

				if (isset($extra['title']))
				{
					$postParams['title'] = trim(strval($extra['title']));
				}
				if (!empty($postParams['title']))
				{
					$postParams['title'] = sprintf('%s: %s', $postParams['title'], $message);
				}
				else
				{
					$postParams['title'] = strval($message);
				}
			}
			else
			{
				// send as note
				$postParams['type'] = 'note';
				$postParams['body'] = strval($message);

				if (isset($extra['title']))
				{
					$postParams['title'] = strval($extra['title']);
				}
				else
				{
					$postParams['title'] = XenForo_Application::getOptions()->get('boardTitle');
				}
			}

			$client = XenForo_Helper_Http::getClient('https://api.pushbullet.com/v2/pushes');
			$client->setAuth($accessToken);
			$client->setParameterPost($postParams);

			$response = $client->request('POST');
			$body = $response->getBody();

			$status = $response->getStatus();

			if ($status != 200)
			{
				$responseMessage = sprintf('Unable to push message (%d, %s)', $status, $body);

				// no information about retry from Pushbullet API documentation...
				// TODO: retry support?
				return bdPushover_ApiResponse::error($responseMessage);
			}

			return json_decode($body, true);
		}
		catch (Zend_Http_Client_Exception $e)
		{
			return bdPushover_ApiResponse::retry($e);
		}
	}

}
