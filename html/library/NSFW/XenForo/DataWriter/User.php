<?php

class NSFW_XenForo_DataWriter_User extends XFCP_NSFW_XenForo_DataWriter_User
{
	protected function _getFields()
	{
		$fields = parent::_getFields();
		
		$fields['xf_user']['nsfw_options'] = array('type' => XenForo_DataWriter::TYPE_SERIALIZED);
		
		return $fields;
	}
	
	protected function _preSave()
	{
		if (!empty($GLOBALS['NSFW_XenForo_ControllerPublic_Account'])) 
		{
			$GLOBALS['NSFW_XenForo_ControllerPublic_Account']->NSFW_actionPreferencesSave($this);
		}
		
		return parent::_preSave();
	}
}