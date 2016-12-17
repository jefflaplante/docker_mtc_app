<?php

class bdPushover_XenForo_ControllerPublic_Register extends XFCP_bdPushover_XenForo_ControllerPublic_Register
{
	public function actionPushover()
	{
		$this->_assertRegistrationRequired();

		if (!bdPushover_Helper_Template::canAssociate())
		{
			return $this->responseNoPermission();
		}

		$userExternalModel = $this->getModelFromCache('XenForo_Model_UserExternal');

		$existingAssoc = $userExternalModel->getExternalAuthAssociationForUser('bdpushover', XenForo_Visitor::getUserId());
		$existingAssocProviderKey = '';
		if (!empty($existingAssoc))
		{
			$existingAssocProviderKey = $existingAssoc['provider_key'];
			$existingAssoc['provider_key'] = substr($existingAssoc['provider_key'], 0, 5) . '...';
			$existingAssoc['extraData'] = @unserialize($existingAssoc['extra_data']);
		}

		$sounds = bdPushover_Helper_Api::soundsCached();

		if ($this->isConfirmedPost())
		{
			$input = $this->_input->filter(array(
				'user_key' => XenForo_Input::STRING,
				'device' => XenForo_Input::STRING,
				'sound' => XenForo_Input::STRING,
				'priority_enable' => XenForo_Input::UINT,
				'priority' => XenForo_Input::ARRAY_SIMPLE,
			));

			if ($input['user_key'] == $existingAssoc['provider_key'])
			{
				$input['user_key'] = $existingAssocProviderKey;
			}
			$validated = bdPushover_Helper_Api::usersValidate($input['user_key']);
			if (!is_array($validated))
			{
				return $this->responseError(new XenForo_Phrase('bdpushover_user_cannot_validated_please_verify'), 400);
			}

			if (!empty($input['device']))
			{
				if (empty($validated['devices']))
				{
					// we may need to check for devices for all association
					// but I chose to check only when user specify one
					// because new user may try the add-on before setting up his/her device
					return $this->responseError(new XenForo_Phrase('bdpushover_no_devices_found'), 400);
				}

				$deviceFound = false;
				foreach ($validated['devices'] as $validatedDevice)
				{
					if (utf8_strtolower($validatedDevice) === utf8_strtolower($input['device']))
					{
						$input['device'] = $validatedDevice;
						$deviceFound = true;
					}
				}
				if (!$deviceFound)
				{
					return $this->responseError(new XenForo_Phrase('bdpushover_device_x_not_found', array('device' => $input['device'])), 400);
				}
			}

			if (!isset($sounds[$input['sound']]))
			{
				$input['sound'] = '';
			}

			if (empty($input['priority_enable']))
			{
				// force reset priority array if our checkbox is not checked
				$input['priority'] = array();
			}
			else
			{
				// filter priority to save space and store efficiently
				foreach (array_keys($input['priority']) as $contentType)
				{
					if (in_array($input['priority'][$contentType], array(
						'disabled',
						'low',
						'high',
						'emergency',
					), true))
					{
						// good
					}
					else
					{
						unset($input['priority'][$contentType]);
					}
				}
			}

			$userExternalModel->updateExternalAuthAssociation('bdpushover', $input['user_key'], XenForo_Visitor::getUserId(), array(
				'time' => XenForo_Application::$time,
				'validated' => $validated,
				'device' => $input['device'],
				'sound' => $input['sound'],
				'priority' => $input['priority'],
			));

			// try to send first message
			if (empty($input['device']))
			{
				// all devices
				bdPushover_Helper_Api::messages($input['user_key'], new XenForo_Phrase('bdpushover_hi_x_this_confirms_able_receive_all_devices', array(
					'user' => XenForo_Visitor::getInstance()->get('username'),
					'boardTitle' => XenForo_Application::getOptions()->get('boardTitle'),
				)), array(
					'device' => '',
					'sound' => $input['sound'],
					'title' => new XenForo_Phrase('bdpushover_welcome_to_x', array(
						'user' => XenForo_Visitor::getInstance()->get('username'),
						'boardTitle' => XenForo_Application::getOptions()->get('boardTitle')
					)),
				));
			}
			else
			{
				// single device
				bdPushover_Helper_Api::messages($input['user_key'], new XenForo_Phrase('bdpushover_hi_x_this_confirms_able_receive_device_x', array(
					'user' => XenForo_Visitor::getInstance()->get('username'),
					'device' => $input['device'],
					'boardTitle' => XenForo_Application::getOptions()->get('boardTitle'),
				)), array(
					'device' => $input['device'],
					'sound' => $input['sound'],
					'title' => new XenForo_Phrase('bdpushover_welcome_to_x', array(
						'user' => XenForo_Visitor::getInstance()->get('username'),
						'boardTitle' => XenForo_Application::getOptions()->get('boardTitle')
					)),
				));
			}

			$redirectTarget = XenForo_Link::buildPublicLink('account/external-accounts');

			if (empty($validated['group']))
			{
				$redirectMessage = new XenForo_Phrase('bdpushover_associated_pushover_user');
			}
			else
			{
				$redirectMessage = new XenForo_Phrase('bdpushover_associated_pushover_group');
			}

			return $this->responseRedirect(XenForo_ControllerResponse_Redirect::RESOURCE_UPDATED, $redirectTarget, $redirectMessage);
		}

		$existingAssocValidated = false;
		if (!empty($existingAssoc))
		{
			$existingAssocValidated = bdPushover_Helper_Api::usersValidate($existingAssocProviderKey);
			if (!is_array($existingAssocValidated))
			{
				$existingAssocValidated = false;
			}
		}

		$viewParams = array(
			'existingAssoc' => $existingAssoc,
			'existingAssocValidated' => $existingAssocValidated,
			'sounds' => $sounds,
		);

		return $this->responseView('bdPushover_ViewPublic_Register', 'bdpushover_register_pushover', $viewParams);
	}

	public function actionPushbullet()
	{
		$this->_assertRegistrationRequired();

		if (!bdPushover_Helper_Template::canAssociate('pushbullet'))
		{
			return $this->responseNoPermission();
		}

		$userExternalModel = $this->getModelFromCache('XenForo_Model_UserExternal');
		$existingExtraData = array();
		$redirect = XenForo_Link::buildPublicLink('canonical:register/pushbullet');

		if ($this->_input->filterSingle('reg', XenForo_Input::UINT))
		{
			return $this->responseRedirect(XenForo_ControllerResponse_Redirect::RESOURCE_CANONICAL, bdPushover_Helper_PushbulletApi::getAuthorizeUrl($redirect));
		}

		$accessToken = $this->_input->filterSingle('access_token', XenForo_Input::STRING);
		if (empty($accessToken))
		{
			$code = $this->_input->filterSingle('code', XenForo_Input::STRING);
			if (!empty($code))
			{
				$accessToken = bdPushover_Helper_PushbulletApi::getAccessTokenFromCode($code, $redirect);

				if (empty($accessToken))
				{
					return $this->responseError(new XenForo_Phrase('bdpushover_error_occurred_while_connecting_with_pushbullet'));
				}
			}
			else
			{
				$existingAssoc = $userExternalModel->getExternalAuthAssociationForUser('bdpushover_pushbullet', XenForo_Visitor::getUserId());
				$existingExtraData = @unserialize($existingAssoc['extra_data']);
				$accessToken = $existingExtraData['access_token'];
			}
		}

		$pushbulletEmail = $this->_input->filterSingle('pushbullet_email', XenForo_Input::STRING);
		if (!$pushbulletEmail)
		{
			$pushbulletUser = bdPushover_Helper_PushbulletApi::getUserInfo($accessToken);

			if (empty($pushbulletUser['email']))
			{
				return $this->responseError(new XenForo_Phrase('bdpushover_pushbullet_email_not_found'));
			}
			$pushbulletEmail = $pushbulletUser['email'];
		}

		$devices = bdPushover_Helper_PushbulletApi::getDevices($accessToken);

		if ($this->isConfirmedPost())
		{
			$input = $this->_input->filter(array(
				'device' => XenForo_Input::STRING,
				'contents' => XenForo_Input::ARRAY_SIMPLE,
			));

			if (!empty($input['device']))
			{
				$deviceFound = false;
				foreach ($devices as $device)
				{
					if ($device['iden'] == $input['device'])
					{
						$input['deviceInfo'] = $device;
						$deviceFound = true;
					}
				}

				if (!$deviceFound)
				{
					return $this->responseError(new XenForo_Phrase('bdpushover_device_not_found'));
				}
			}

			$userExternalModel->updateExternalAuthAssociation('bdpushover_pushbullet', $pushbulletEmail, XenForo_Visitor::getUserId(), array_merge($existingExtraData, $input, array(
				'time' => XenForo_Application::$time,
				'access_token' => $accessToken,
				'pushbullet_email' => $pushbulletEmail,
			)));

			// try to send first message
			if (empty($input['device']))
			{
				// all devices
				bdPushover_Helper_PushbulletApi::push($accessToken, new XenForo_Phrase('bdpushover_hi_x_this_confirms_able_receive_all_devices', array(
					'user' => XenForo_Visitor::getInstance()->get('username'),
					'boardTitle' => XenForo_Application::getOptions()->get('boardTitle'),
				)), array(
					'title' => new XenForo_Phrase('bdpushover_welcome_to_x', array(
						'user' => XenForo_Visitor::getInstance()->get('username'),
						'boardTitle' => XenForo_Application::getOptions()->get('boardTitle')
					)),
				));
			}
			else
			{
				// single device
				bdPushover_Helper_PushbulletApi::push($accessToken, new XenForo_Phrase('bdpushover_hi_x_this_confirms_able_receive_device_x', array(
					'user' => XenForo_Visitor::getInstance()->get('username'),
					'device' => $input['deviceInfo']['nickname'],
					'boardTitle' => XenForo_Application::getOptions()->get('boardTitle'),
				)), array(
					'device' => $input['device'],
					'title' => new XenForo_Phrase('bdpushover_welcome_to_x', array(
						'user' => XenForo_Visitor::getInstance()->get('username'),
						'boardTitle' => XenForo_Application::getOptions()->get('boardTitle')
					)),
				));
			}

			$redirectTarget = XenForo_Link::buildPublicLink('account/external-accounts');
			$redirectMessage = new XenForo_Phrase('bdpushover_associated_pushbullet');
			return $this->responseRedirect(XenForo_ControllerResponse_Redirect::RESOURCE_UPDATED, $redirectTarget, $redirectMessage);
		}

		$viewParams = array(
			'accessToken' => $accessToken,
			'pushbulletEmail' => $pushbulletEmail,
			'devices' => $devices,

			'existingExtraData' => $existingExtraData,
		);

		return $this->responseView('bdPushover_ViewPublic_Register', 'bdpushover_register_pushbullet', $viewParams);
	}

}
