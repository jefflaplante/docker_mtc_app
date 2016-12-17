<?php

class Nobita_DiscussionsPerPage_XenForo_DataWriter_User extends XFCP_Nobita_DiscussionsPerPage_XenForo_DataWriter_User
{
	protected function _getFields()
	{
		$fields = parent::_getFields();

		$fields['xf_user_option']['custom_messages'] = array(
			'type' => self::TYPE_SERIALIZED, 
			'default' => 'a:0:{}'
		);

		return $fields;
	}
	
	protected function _preSave()
	{
		if(!is_null(Nobita_DiscussionsPerPage_Listener::$globalData))
		{
			Nobita_DiscussionsPerPage_Listener::$globalData->DPP_actionPreferencesSave($this);
		}
		
		return parent::_preSave();
	}
}