<?php

class Aayush_PaypalDonate_AlertHandler_Donation extends XenForo_AlertHandler_Abstract
{
	protected $_donationModel = null;

	public function getContentByIds(array $contentIds, $model, $userId, array $viewingUser)
	{	
		$donations = $this->_getDonationModel()->getDonationsByIds($contentIds);

		return $donations;
	}

	protected function _getDonationModel()
	{
		if (!$this->_donationModel)
		{
			$this->_donationModel = XenForo_Model::create('Aayush_PaypalDonate_Model_Donation');
		}

		return $this->_donationModel;
	}
}