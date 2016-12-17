<?php

class bdPushover_Helper_Alert
{
	protected static $_alertModel = null;
	protected static $_queue = array();
	protected static $_worked = false;

	protected static $_users = array();
	protected static $_userAssocs = array();

	public static function tryToEnqueue(array $alert)
	{
		$optionContents = bdPushover_Option::get('contents');
		if (isset($optionContents[$alert['content_type']]) AND $optionContents[$alert['content_type']] === 'disabled')
		{
			return false;
		}

		if (empty($alert['alerted_user_id']))
		{
			return false;
		}
		$assocPushover = self::getUserAssoc($alert['alerted_user_id']);
		$assocPushbullet = self::getUserAssoc($alert['alerted_user_id'], 'pushbullet');

		if (!empty($assocPushover) OR !empty($assocPushbullet))
		{
			$sender = self::getUserData($alert['user_id']);
			$sender = array_merge($alert, $sender);

			if (!empty($assocPushover))
			{
				self::enqueue($sender, $assocPushover);
			}

			if (!empty($assocPushbullet))
			{
				self::enqueue($sender, $assocPushbullet);
			}
		}
	}

	/**
	 * @return array|false
	 */
	public static function getUserAssoc($userId, $service = 'pushover')
	{
		if (empty($userId))
		{
			return false;
		}

		$userExternalProvider = '';
		switch ($service)
		{
			case 'pushbullet':
				$id = bdPushover_Option::get('pushbulletId');
				$secret = bdPushover_Option::get('pushbulletSecret');
				if (empty($id) OR empty($secret))
				{
					return false;
				}
				$userExternalProvider = 'bdpushover_pushbullet';
				break;
			case 'pushover':
			default:
				$token = bdPushover_Option::get('token');
				if (empty($token))
				{
					return false;
				}
				$userExternalProvider = 'bdpushover';
				break;
		}

		$arrayKey = sprintf('%s_%s', $userId, $service);

		if (!isset(self::$_userAssocs[$arrayKey]))
		{
			self::$_userAssocs[$arrayKey] = self::_getAlertModel()->getModelFromCache('XenForo_Model_UserExternal')->getExternalAuthAssociationForUser($userExternalProvider, $userId);

			if (!empty(self::$_userAssocs[$arrayKey]['extra_data']))
			{
				self::$_userAssocs[$arrayKey]['extraData'] = @unserialize(self::$_userAssocs[$arrayKey]['extra_data']);
				unset(self::$_userAssocs[$arrayKey]['extra_data']);

				// get user data as needed
				$user = self::getUserData($userId);

				if (XenForo_Permission::hasPermission($user['permissions'], 'general', 'bdPushover_associate'))
				{
					self::$_userAssocs[$arrayKey] = array_merge($user, self::$_userAssocs[$arrayKey]);
				}
				else
				{
					// no permission, ignore association
					self::$_userAssocs[$arrayKey] = false;
				}
			}
		}

		return self::$_userAssocs[$arrayKey];
	}

	/**
	 * @return array
	 */
	public static function getUserData($userId)
	{
		if (!isset(self::$_users[$userId]))
		{
			if ($userId == XenForo_Visitor::getUserId())
			{
				self::$_users[$userId] = XenForo_Visitor::getInstance()->toArray();
			}
			elseif ($userId == 0)
			{
				self::$_users[$userId] = self::_getAlertModel()->getModelFromCache('XenForo_Model_User')->getVisitingGuestUser();
			}
			else
			{
				$user = self::_getAlertModel()->getModelFromCache('XenForo_Model_User')->getUserById($userId, array('join' => XenForo_Model_User::FETCH_USER_PERMISSIONS));
				$user['permissions'] = XenForo_Permission::unserializePermissions($user['global_permission_cache']);
				unset($user['global_permission_cache']);

				self::$_users[$userId] = $user;
			}
		}

		return self::$_users[$userId];
	}

	public static function enqueue($alert, $assoc)
	{
		if (bdPushover_Option::get('deferred'))
		{
			self::_getAlertModel()->getModelFromCache('bdPushover_Model_PushQueue')->insertQueue($alert, $assoc);
		}
		elseif (!self::$_worked)
		{
			self::$_queue[$alert['alert_id']] = array(
				$alert,
				$assoc,
			);
		}
		else
		{
			$step1 = self::work1_prepare($alert, $assoc);
			$step2 = self::work2_send($step1);
		}
	}

	public static function work()
	{
		$templateQueue = array();

		while (!empty(self::$_queue))
		{
			$queued = array_shift(self::$_queue);
			$templateQueue[] = self::work1_prepare($queued[0], $queued[1]);
		}

		while (!empty($templateQueue))
		{
			self::work2_send(array_shift($templateQueue));
		}

		self::$_worked = true;
	}

	public static function work1_prepare($alert, $assoc)
	{
		if (isset($assoc['language_id']))
		{
			bdPushover_Simulation_Template::$bdPushover_languageId = $assoc['language_id'];
			bdPushover_Simulation_Template::$bdPushover_visitor = $assoc;
		}

		if (empty($view))
		{
			$view = bdPushover_Simulation_View::create();
		}

		$alert['view_date'] = 0;
		$alerts = array($alert['alert_id'] => $alert);

		$alerts = self::_getAlertModel()->bdPushover_getContentForAlerts($alerts, $assoc['user_id'], $assoc);

		$alerts = self::_getAlertModel()->prepareAlerts($alerts, $assoc);

		$handlers = self::_getAlertModel()->bdPushover_getHandlerCache();

		$alerts = XenForo_ViewPublic_Helper_Alert::getTemplates($view, $alerts, $handlers);
		$alertNew = array_pop($alerts);

		$template = $alertNew['template'];
		$service = ($assoc['provider'] == 'bdpushover' ? 'pushover' : 'pushbullet');
		$serviceKey = $assoc['provider_key'];
		if ($service == 'pushbullet')
		{
			$serviceKey = $assoc['extraData']['access_token'];
		}
		$serviceExtra = array('timestamp' => $alert['event_date']);
		$queuedExtra = array();

		if (!empty($assoc['extraData']['device']))
		{
			$serviceExtra['device'] = $assoc['extraData']['device'];
		}

		if ($service == 'pushover')
		{
			if (!empty($assoc['extraData']['sound']))
			{
				$serviceExtra['sound'] = $assoc['extraData']['sound'];
			}

			if (!empty($assoc['extraData']['priority'][$alert['content_type']]))
			{
				switch ($assoc['extraData']['priority'][$alert['content_type']])
				{
					case 'disabled':
						$queuedExtra['disabled'] = true;
						break;
					case 'low':
						$serviceExtra['priority'] = '-1';
						break;
					case 'high':
						$serviceExtra['priority'] = '1';
						break;
					case 'emergency':
						$serviceExtra['priority'] = '2';
						break;
				}
			}
		}
		else
		{
			if (!empty($assoc['extraData']['contents'][$alert['content_type']]))
			{
				if ($assoc['extraData']['contents'][$alert['content_type']] == 'disabled')
				{
					$queuedExtra['disabled'] = true;
				}
			}
		}

		if (empty($queuedExtra['disabled']))
		{
			$queuedExtra += array(
				'titleTemplateObj' => $view->createTemplateObject('bdpushover_title_for_alert'),
				'urlTitleTemplateObj' => $view->createTemplateObject('bdpushover_url_title'),
				'alert' => bdPushover_Helper_Serialization::makeArraySafe($alert),
				'assoc' => bdPushover_Helper_Serialization::makeArraySafe($assoc),
			);
		}

		return array(
			$template,
			$service,
			$serviceKey,
			$serviceExtra,
			$queuedExtra,
		);
	}

	public static function work2_send(array $templateQueued)
	{
		$template = $templateQueued[0];
		$service = $templateQueued[1];
		$serviceKey = $templateQueued[2];
		$serviceExtra = $templateQueued[3];
		$queuedExtra = $templateQueued[4];

		if (!empty($queuedExtra['disabled']))
		{
			return false;
		}

		$message = self::_getMessageFromTemplate($template, $queuedExtra, $serviceExtra);

		if (empty($serviceExtra['title']) AND !empty($queuedExtra['titleTemplateObj']))
		{
			$serviceExtra['title'] = strval($queuedExtra['titleTemplateObj']);
		}

		switch ($service)
		{
			case 'pushbullet':
				$pushed = bdPushover_Helper_PushbulletApi::push($serviceKey, $message, $serviceExtra);
				break;
			case 'pushover':
			default:
				$pushed = bdPushover_Helper_Api::messages($serviceKey, $message, $serviceExtra);
				break;
		}

		if (is_array($pushed))
		{
			// good
		}
		elseif ($pushed instanceof bdPushover_ApiResponse_Retry)
		{
			self::_getAlertModel()->getModelFromCache('bdPushover_Model_PushQueue')->insertQueue($queuedExtra['alert'], $queuedExtra['assoc'], XenForo_Application::$time + 300);
		}
		elseif (XenForo_Application::debugMode())
		{
			XenForo_Error::logError($pushed->getMessage());
		}

		return $pushed;
	}

	/**
	 * @return XenForo_Model_Alert
	 */
	protected static function _getAlertModel()
	{
		if (self::$_alertModel === null)
		{
			self::$_alertModel = XenForo_Model::create('XenForo_Model_Alert');
		}

		return self::$_alertModel;
	}

	protected static function _getMessageFromTemplate(bdPushover_Simulation_Template $template, array $queuedExtra, array &$serviceExtra)
	{
		$template = strval($template);

		// try to get an url
		$offset = 0;
		while (true)
		{
			if (preg_match('#<a[^>]*href="([^"]+)"[^>]*>(.+?)</a>#s', $template, $matches, PREG_OFFSET_CAPTURE, $offset))
			{
				$href = $matches[1][0];
				$title = $matches[2][0];

				$serviceExtra['url'] = XenForo_Link::convertUriToAbsoluteUri($href, true);
				$serviceExtra['url_title'] = utf8_trim(strip_tags($title));

				$offset = $matches[0][1] + strlen($matches[0][0]);
			}
			else
			{
				break;
			}
		}

		// get html free version as message
		$message = utf8_trim(strip_tags($template));

		if (!empty($serviceExtra['url']) AND !empty($serviceExtra['url_title']))
		{
			$serviceExtra['url'] = XenForo_Link::buildPublicLink('canonical:pushover', $queuedExtra['alert'], array('redirect' => $serviceExtra['url']));

			if (!empty($queuedExtra['urlTitleTemplateObj']))
			{
				$queuedExtra['urlTitleTemplateObj']->setParam('content', $serviceExtra['url_title']);
				$serviceExtra['url_title'] = strval($queuedExtra['urlTitleTemplateObj']);
			}
		}

		return $message;
	}

}
