<?php

class XenForo_ControllerAdmin_Login extends XenForo_ControllerAdmin_Abstract
{
	public function actionForm()
	{
		$publicSession = XenForo_Session::getPublicSession($this->_request);
		if ($publicSession->get('user_id'))
		{
			$publicVisitor = $this->getModelFromCache('XenForo_Model_User')->getUserById($publicSession->get('user_id'));
			if ($publicVisitor)
			{
				XenForo_Visitor::getInstance()->setVisitorLanguage($publicVisitor['language_id']);
			}
		}
		else
		{
			$publicVisitor = false;
		}

		if ($this->_request->isPost())
		{
			$repost = true;
			$postVars = $_POST;
			if (!isset($postVars['redirect']))
			{
				$postVars['redirect'] = $this->getDynamicRedirect();
			}
		}
		else
		{
			$repost = false;
			$postVars = false;
		}

		$viewParams = array(
			'publicVisitor' => $publicVisitor,

			'repost' => $repost,
			'postVars' => $postVars
		);

		$containerParams = array(
			'containerTemplate' => 'LOGIN_PAGE'
		);

		return $this->responseView('XenForo_ViewAdmin_Login_Form', 'login_form', $viewParams, $containerParams);
	}

	public function actionLogin()
	{
		if (!$this->_request->isPost())
		{
			return $this->responseRedirect(
				 XenForo_ControllerResponse_Redirect::RESOURCE_CANONICAL,
				 XenForo_Link::buildAdminLink('index')
			);
		}

		$data = $this->_input->filter(array(
			'login' => XenForo_Input::STRING,
			'password' => XenForo_Input::STRING,
			'redirect' => XenForo_Input::STRING,
			'cookie_check' => XenForo_Input::UINT
		));

		$redirect = ($data['redirect'] ? $data['redirect'] : XenForo_Link::buildAdminLink('index'));

		$loginModel = $this->_getLoginModel();

		if ($data['cookie_check'] && count($_COOKIE) == 0)
		{
			// login came from a page, so we should at least have a session cookie.
			// if we don't, assume that cookies are disabled
			return $this->responseError(new XenForo_Phrase('cookies_required_to_log_in_to_site'));
		}

		$needCaptcha = $loginModel->requireLoginCaptcha($data['login']);
		if ($needCaptcha)
		{
			// just block logins here instead of using the captcha
			return $this->responseError(new XenForo_Phrase('your_account_has_temporarily_been_locked_due_to_failed_login_attempts'));
		}

		$userModel = $this->_getUserModel();

		$userId = $userModel->validateAuthentication($data['login'], $data['password'], $error);
		if (!$userId)
		{
			$loginModel->logLoginAttempt($data['login']);

			if ($loginModel->requireLoginCaptcha($data['login']))
			{
				return $this->responseError(new XenForo_Phrase('your_account_has_temporarily_been_locked_due_to_failed_login_attempts'));
			}

			if ($this->_input->filterSingle('upgrade', XenForo_Input::UINT))
			{
				return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS, $redirect);
			}
			else
			{
				// note - JSON view will return responseError($text)
				return $this->responseView(
					'XenForo_ViewAdmin_Login_Error',
					'login_form',
					array(
						'text' => $error,
						'defaultLogin' => $data['login'],
						'redirect' => $redirect
					), array(
						'containerTemplate' => 'LOGIN_PAGE'
				));
			}
		}

		$loginModel->clearLoginAttempts($data['login']);

		$user = $this->_getUserModel()->getFullUserById($userId, array(
			'join' => XenForo_Model_User::FETCH_USER_PERMISSIONS
		));

		// now check that the user will be able to get into the ACP (is_admin)
		if (!$user['is_admin'])
		{
			return $this->responseError(new XenForo_Phrase('your_account_does_not_have_admin_privileges'));
		}

		/** @var XenForo_ControllerHelper_Login $loginHelper */
		$loginHelper = $this->getHelper('Login');

		if ($loginHelper->userTfaConfirmationRequired($user))
		{
			$loginHelper->setTfaSessionCheck($user['user_id']);

			return $this->responseRedirect(
				XenForo_ControllerResponse_Redirect::SUCCESS,
				XenForo_Link::buildAdminLink('login/two-step', null, array(
					'redirect' => $redirect
				))
			);
		}
		else
		{
			$permissions = XenForo_Permission::unserializePermissions($user['global_permission_cache']);

			if (empty($user['use_tfa'])
				&& XenForo_Application::getConfig()->enableTfa
				&& (
					XenForo_Application::getOptions()->adminRequireTfa
					|| XenForo_Permission::hasPermission($permissions, 'general', 'requireTfa')
				)
			)
			{
				return $this->responseError(new XenForo_Phrase('you_must_enable_two_step_access_control_panel', array(
					'link' => XenForo_Link::buildPublicLink('account/two-step')
				)));
			}

			$postVars = $this->_input->filterSingle('postVars', XenForo_Input::JSON_ARRAY);
			return $this->completeLogin($userId, $redirect, $postVars);
		}
	}

	public function actionTwoStep()
	{
		$redirect = $this->_input->filterSingle('redirect', XenForo_Input::STRING);
		if (!$redirect)
		{
			$redirect = $this->getDynamicRedirectIfNot(XenForo_Link::buildAdminLink('login'));
		}

		/** @var XenForo_ControllerHelper_Login $loginHelper */
		$loginHelper = $this->getHelper('Login');

		$user = $loginHelper->getUserForTfaCheck();
		if (!$user)
		{
			$loginHelper->clearTfaSessionCheck();
			return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS, $redirect);
		}

		/** @var XenForo_Model_Tfa $tfaModel */
		$tfaModel = $this->getModelFromCache('XenForo_Model_Tfa');
		$providers = $tfaModel->getTfaConfigurationForUser($user['user_id'], $userData);

		if (!$providers)
		{
			$loginHelper->clearTfaSessionCheck();
			return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS, $redirect);
		}

		$providerId = $this->_input->filterSingle('provider', XenForo_Input::STRING);

		if ($this->isConfirmedPost())
		{
			$loginHelper->assertNotTfaAttemptLimited($user['user_id']);
			
			$validationResult = $loginHelper->runTfaValidation($user, $providerId, $providers, $userData);
			if ($validationResult === true)
			{
				if ($this->_input->filterSingle('trust', XenForo_Input::BOOLEAN))
				{
					$loginHelper->setDeviceTrusted($user['user_id']);
				}

				return $this->completeLogin($user['user_id'], $redirect);
			}
			else if ($validationResult === false)
			{
				return $this->responseError(new XenForo_Phrase('two_step_verification_value_could_not_be_confirmed'));
			}
		}

		$viewParams = $loginHelper->triggerTfaCheck($user, $providerId, $providers, $userData);
		$viewParams['redirect'] = $redirect;

		$containerParams = array(
			'containerTemplate' => 'PAGE_CONTAINER_SIMPLE'
		);

		return $this->responseView('XenForo_ViewAdmin_Login_TwoStep', 'login_two_step', $viewParams, $containerParams);
	}

	public function completeLogin($userId, $redirect, array $postVars = array())
	{
		XenForo_Model_Ip::log($userId, 'user', $userId, 'login_admin');

		$visitor = XenForo_Visitor::setup($userId);

		XenForo_Application::getSession()->userLogin($userId, $visitor['password_date']);

		// if guest on front-end, login there too
		$class = XenForo_Application::resolveDynamicClass('XenForo_Session');
		$publicSession = new $class();
		$publicSession->start();
		if (!$publicSession->get('user_id'))
		{
			$publicSession->userLogin($userId, $visitor['password_date']);
			$publicSession->save();
		}

		if ($postVars)
		{
			$postVars['_xfToken'] = $visitor['csrf_token_page'];

			return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS, $redirect, '', array(
				'repost' => 1,
				'postVars' => $postVars
			));
		}
		else
		{
			return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS, $redirect);
		}
	}

	/**
	 * Gets an updated CSRF token for pages that are left open for a long time.
	 *
	 * @return XenForo_ControllerResponse_Abstract
	 */
	public function actionCsrfTokenRefresh()
	{
		$this->_assertPostOnly();

		$visitor = XenForo_Visitor::getInstance();
		$viewParams = array(
			'csrfToken' => $visitor['csrf_token_page']
		);

		return $this->responseView('XenForo_ViewAdmin_Login_CsrfTokenRefresh', '', $viewParams);
	}

	public function actionLogout()
	{
		$this->_checkCsrfFromToken($this->_input->filterSingle('_xfToken', XenForo_Input::STRING));

		XenForo_Application::get('session')->delete();
		XenForo_Visitor::setup(0);

		return $this->responseRedirect(
			XenForo_ControllerResponse_Redirect::SUCCESS,
			XenForo_Link::buildAdminLink('index')
		);
	}

	public function assertAdmin() {}
	protected function _assertCorrectVersion($action) {}
	protected function _assertInstallLocked($action) {}

	protected function _checkCsrf($action)
	{
		if (strtolower($action) == 'login')
		{
			return;
		}

		return parent::_checkCsrf($action);
	}

	protected function _logAdminRequest($controllerResponse, $controllerName, $action) {}

	/**
	 * @return XenForo_Model_User
	 */
	protected function _getUserModel()
	{
		return $this->getModelFromCache('XenForo_Model_User');
	}

	/**
	 * @return XenForo_Model_Login
	 */
	protected function _getLoginModel()
	{
		return $this->getModelFromCache('XenForo_Model_Login');
	}
}