<?php

class bdPushover_Helper_Api
{
	const RESPONSE_RETRY_LATER = 'retry_later';

	public static function messages($user, $message, array $extra = array())
	{
		if (empty($user))
		{
			return bdPushover_ApiResponse::error('`$user` missing');
		}

		if (empty($message))
		{
			return bdPushover_ApiResponse::error('`$message` missing');
		}

		$response = self::_request('messages', array_merge(array(
			'user' => $user,
			'message' => $message,
		), $extra));

		if (!is_array($response))
		{
			return $response;
		}

		if ($response[0] == 429)
		{
			return bdPushover_ApiResponse::error('Reached Pushover Message Limits', true);
		}
		elseif ($response[0] != 200)
		{
			$responseMessage = sprintf('Unable to push message (%d, %s)', $response[0], json_encode($response[1]));

			if ($response[0] >= 400 AND $response[0] < 500)
			{
				return bdPushover_ApiResponse::error($responseMessage);
			}
			else
			{
				return bdPushover_ApiResponse::retry($responseMessage);
			}
		}

		return $response[1];
	}

	public static function sounds()
	{
		$response = self::_request('sounds', array(), 'GET');

		if ($response[0] != 200 OR empty($response[1]['sounds']))
		{
			$responseMessage = sprintf('Unable to get sounds list (%d, %s)', $response[0], json_encode($response[1]));
			return bdPushover_ApiResponse::error($responseMessage);
		}

		return $response[1]['sounds'];
	}

	public static function soundsCached()
	{
		$key = 'bdPushover_soundsCache';
		$cached = XenForo_Application::getSimpleCacheData($key);

		if (empty($cached) OR $cached['time'] < XenForo_Application::$time - 7 * 86400)
		{
			// no cache or too old cache data (one week)
			$sounds = self::sounds();

			if (is_array($sounds))
			{
				$cached = array(
					'sounds' => $sounds,
					'time' => XenForo_Application::$time
				);
				XenForo_Application::setSimpleCacheData($key, $cached);
			}
		}

		if (!empty($cached['sounds']))
		{
			return $cached['sounds'];
		}
		else
		{
			return array();
		}
	}

	public static function usersValidate($user)
	{
		if (empty($user))
		{
			return bdPushover_ApiResponse::error('`$user` missing');
		}

		$response = self::_request('users/validate', array('user' => $user));

		if (!is_array($response))
		{
			return $response;
		}

		if ($response[0] != 200)
		{
			return bdPushover_ApiResponse::error(sprintf('Unable to validate user/group (%d,%s)', $response[0], json_encode($response[1])));
		}

		return $response[1];
	}

	protected static function _request($path, array $params = array(), $method = 'POST')
	{
		try
		{
			$uri = call_user_func_array('sprintf', array(
				'https://api.pushover.net/1/%s.json',
				$path,
			));
			$client = XenForo_Helper_Http::getClient($uri);

			foreach (array_keys($params) as $paramKey)
			{
				$params[$paramKey] = strval($params[$paramKey]);
			}

			if (empty($params['token']))
			{
				$params['token'] = bdPushover_Option::get('token');
				if (empty($params['token']))
				{
					return bdPushover_ApiResponse::error('`token` missing');
				}
			}

			if ($method === 'GET')
			{
				$client->setParameterGet($params);
				$response = $client->request('GET');
			}
			else
			{
				$client->setParameterPost($params);
				$response = $client->request($method);
			}

			$body = $response->getBody();
			$json = @json_decode($body, true);

			if (!is_array($json))
			{
				return bdPushover_ApiResponse::error(sprintf('Unable to parse JSON: %s', $body), true);
			}

			return array(
				$response->getStatus(),
				$json
			);
		}
		catch (Zend_Http_Client_Exception $e)
		{
			return bdPushover_ApiResponse::retry($e);
		}
	}

}
