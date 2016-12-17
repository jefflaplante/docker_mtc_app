<?php
class Brivium_ThreadLiveUpdate_DataWriter_User extends XFCP_Brivium_ThreadLiveUpdate_DataWriter_User{
	
	protected function _getFields()
	{
		$fields = parent::_getFields();
		$fields['xf_user']['br_thread_update'] = array('type' => self::TYPE_BOOLEAN, 'default' => 1);
		$fields['xf_user']['br_post_jump'] 		= array('type' => self::TYPE_BOOLEAN, 'default' => 1);
		return $fields;
	}
	
}
