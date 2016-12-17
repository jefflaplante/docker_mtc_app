<?php

class Nobita_AvatarUrl_ViewPublic_Account_FetchAvatar extends XenForo_ViewPublic_Base
{
	public function renderJson()
	{
		$this->_params['urls'] = XenForo_Template_Helper_Core::getAvatarUrls($this->_params['user']);

		$output = XenForo_Application::arrayFilterKeys($this->_params, array(
			'width', 'height',
			'urls', 'user_id', 'avatar_date',
			'message'
		));

		return XenForo_ViewRenderer_Json::jsonEncodeForOutput($output);
	}
}