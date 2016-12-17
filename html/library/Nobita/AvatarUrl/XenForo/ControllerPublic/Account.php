<?php

class Nobita_AvatarUrl_XenForo_ControllerPublic_Account extends XFCP_Nobita_AvatarUrl_XenForo_ControllerPublic_Account
{
	public function actionFetchAvatar()
	{
		$this->_assertPostOnly();
		if (!XenForo_Visitor::getInstance()->canUploadAvatar())
		{
			return $this->responseNoPermission();
		}

		$url = $this->_input->filterSingle('url', XenForo_Input::STRING);

		if (!Zend_Uri::check($url))
		{
			return $this->responseError(new XenForo_Phrase('please_enter_an_valid_image_url'));
		}

		$user = XenForo_Visitor::getInstance()->toArray();
		$content = file_get_contents($url);

		$success = false;

		$avatarFile = tempnam(XenForo_Helper_File::getTempDir(), 'xf');
		if ($avatarFile)
		{
			file_put_contents($avatarFile, file_get_contents($url));

			$imginfo = @getimagesize($avatarFile);
			if (!$imginfo)
			{
				@unlink($avatarFile);
				return $this->responseError(new XenForo_Phrase('please_enter_an_valid_image_url'));
			}

			try
			{
				$user = array_merge($user,
					$this->getModelFromCache('XenForo_Model_Avatar')->applyAvatar($user['user_id'], $avatarFile)
				);
				$success = true;
			}
			catch (XenForo_Exception $e) {}

			@unlink($avatarFile);
		}

		if (!$success)
		{
			return $this->responseError(new XenForo_Phrase('something_errors_when_try_to_importing_a_photo'));
		}

		return $this->responseView('Nobita_AvatarUrl_ViewPublic_Account_FetchAvatar', '', array(
			'user' => $user,
			'width' => $user['avatar_width'],
			'height' => $user['avatar_height'],
			'user_id' => $user['user_id'],
			'avatar_date' => $user['avatar_date'],
			'message' => new XenForo_Phrase('your_avatar_uploaded_successfully')
		));
	}

}