<?php

class Nobita_DiscussionsPerPage_XenForo_ControllerPublic_Account extends XFCP_Nobita_DiscussionsPerPage_XenForo_ControllerPublic_Account
{
	public function actionPreferencesSave()
	{
		Nobita_DiscussionsPerPage_Listener::$globalData = $this;

		return parent::actionPreferencesSave();
	}
	
	public function DPP_actionPreferencesSave(XenForo_DataWriter_User $dw)
	{
		$choices = $this->_input->filter(array(
			'threads' 		=> XenForo_Input::UINT,
			'posts' 		=> XenForo_Input::UINT,
			'conversations' => XenForo_Input::UINT
		));

		$dw->set('custom_messages', $choices);

		// reset
		Nobita_DiscussionsPerPage_Listener::$globalData = null;
	}



}