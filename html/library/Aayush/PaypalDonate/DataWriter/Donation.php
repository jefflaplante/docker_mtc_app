<?php

class Aayush_PaypalDonate_DataWriter_Donation extends XenForo_DataWriter
{
	/**
	 * Title of the phrase that will be created when a call to set the
	 * existing data fails (when the data doesn't exist).
	 *
	 * @var string
	 */
	protected $_existingDataErrorPhrase = 'requested_donation_not_found';

	/**
	* Gets the fields that are defined for the table. See parent for explanation.
	*
	* @return array
	*/
	protected function _getFields()
	{
		return array(
			'aayush_ppdonate' => array(
				'donation_id'     => array('type' => self::TYPE_UINT, 'autoIncrement' => true),
				'user_id'		  => array('type' => self::TYPE_UINT, 'required' => true, 'default' => 0),
				'amount'          => array('type' => self::TYPE_FLOAT, 'required' => true, 'max' => 100000000, 'verification' => array('$this', '_verifyAmount')),
				'confirmed'       => array('type' => self::TYPE_BOOLEAN, 'default' => 0),
				'anonymous'       => array('type' => self::TYPE_BOOLEAN, 'default' => 0),
				'note'       => array('type' => self::TYPE_STRING, 'default' => '', 'maxlength' => 200),
				'dateline'  => array('type' => self::TYPE_UINT,    'default' => XenForo_Application::$time),
				'currency'  => array('type' => self::TYPE_STRING, 'default' => XenForo_Application::get('options')->PD_Currency)
			)
		);
	}

	/**
	* Gets the actual existing data out of data that was passed in. See parent for explanation.
	*
	* @param mixed
	*
	* @return array|false
	*/
	protected function _getExistingData($data)
	{
		if (!$id = $this->_getExistingPrimaryKey($data))
		{
			return false;
		}

		return array('aayush_ppdonate' => $this->_getDonationModel()->getDonationById($id));
	}

	/**
	* Gets SQL condition to update the existing record.
	*
	* @return string
	*/
	protected function _getUpdateCondition($tableName)
	{
		return 'donation_id = ' . $this->_db->quote($this->getExisting('donation_id'));
	}

	protected function _verifyAmount(&$amount)
	{
		if ($amount <= 0)
		{			
			$this->error(new XenForo_Phrase('please_enter_an_donation_amount_greater_than_zero'), 'amount');
			return false;
		}
		else
		{
			return true;
		}
	}

	/**
	 * Post-save handling.
	 */
	protected function _postSave()
	{
		if ($this->isChanged('confirmed'))
		{
			$donationReceived = $this->_getDonationModel()->getThisMonthDonation();
			XenForo_Application::setSimpleCacheData('donationReceived', $donationReceived);

			if ($this->get('user_id') && $this->get('confirmed') == 1)
			{
				$group = XenForo_Application::get('options')->PD_AddToUsergroup;
				if ($group)
				{
					$this->_getUserModel()->addUserGroupChange(
						$this->get('user_id'), "ugDonation" . $this->get('donation_id'), $group
					);
				}

				if (XenForo_Application::get('options')->PD_SendAlert)
				{
					XenForo_Model_Alert::alert($this->get('user_id'), 0, '', 'donation', $this->get('donation_id'), 'confirm');
				}
			}

			if ($this->get('user_id') && $this->get('confirmed') == 0)
			{
				$this->_getUserModel()->removeUserGroupChange($this->get('user_id'), "ugDonation" . $this->get('donation_id'));
			}
		}
	}

	/**
	 * Post-delete handling.
	 */
	protected function _postDelete()
	{
		if ($this->get('confirmed') == 1)
		{
			$donationReceived = $this->_getDonationModel()->getThisMonthDonation();
			XenForo_Application::setSimpleCacheData('donationReceived', $donationReceived);
		}

		$this->_getUserModel()->removeUserGroupChange($this->get('user_id'), "ugDonation" . $this->get('donation_id'));
	}

	protected function _getDonationModel()
	{
		return $this->getModelFromCache('Aayush_PaypalDonate_Model_Donation');
	}

	protected function _getUserModel()
	{
		return $this->getModelFromCache('XenForo_Model_User');
	}
}