<?php

class Nobita_AvatarUrl_XenResource_ControllerPublic_Resource extends XFCP_Nobita_AvatarUrl_XenResource_ControllerPublic_Resource
{
	public function actionIconUrl()
	{
		$this->_assertPostOnly();

		list($resource, $category) = $this->_getResourceHelper()->assertResourceValidAndViewable();

		$resourceModel = $this->_getResourceModel();

		if (!$resourceModel->canEditResourceIcon($resource, $category, $errorPhraseKey))
		{
			throw $this->getErrorOrNoPermissionResponseException($errorPhraseKey);
		}

		$url = $this->_input->filterSingle('url', XenForo_Input::STRING);

		if (!Zend_Uri::check($url))
		{
			return $this->responseError(new XenForo_Phrase('please_enter_an_valid_image_url'));
		}

		$content = file_get_contents($url);

		$success = false;

		$iconFile = tempnam(XenForo_Helper_File::getTempDir(), 'xf');
		if ($iconFile)
		{
			file_put_contents($iconFile, file_get_contents($url));

			$imginfo = @getimagesize($iconFile);
			if (!$imginfo)
			{
				@unlink($iconFile);
				return $this->responseError(new XenForo_Phrase('please_enter_an_valid_image_url'));
			}

			try
			{
				$resourceModel->applyResourceIcon($resource['resource_id'], $iconFile);
	
				$success = true;
			}
			catch (XenForo_Exception $e) {}

			@unlink($iconFile);
		}

		if (!$success)
		{
			return $this->responseError(new XenForo_Phrase('something_errors_when_try_to_importing_a_photo'));
		}

		return $this->responseView('Nobita_AvatarUrl_ViewPublic_Resource_IconUrl', '', array(
			'resource' => $resource,
			'success' => $success,
			'resource_id' => $resource['resource_id'],
			'redirectUrl' => XenForo_Link::buildPublicLink('canonical:resources', $resource)
		));
	}

}