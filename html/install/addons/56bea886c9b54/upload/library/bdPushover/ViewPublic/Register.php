<?php

class bdPushover_ViewPublic_Register extends XenForo_ViewPublic_Base
{
	public function prepareParams()
	{
		$this->_params['contentTypes'] = bdPushover_Helper_Template::getContentTypes();
		
		return parent::prepareParams();
	}
}
