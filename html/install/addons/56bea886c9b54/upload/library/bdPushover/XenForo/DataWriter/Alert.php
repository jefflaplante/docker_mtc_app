<?php

class bdPushover_XenForo_DataWriter_Alert extends XFCP_bdPushover_XenForo_DataWriter_Alert
{
	protected function _postSaveAfterTransaction()
	{
		bdPushover_Helper_Alert::tryToEnqueue($this->getMergedData());

		return parent::_postSaveAfterTransaction();
	}

}
