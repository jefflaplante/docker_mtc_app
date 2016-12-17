<?php

class Aayush_PaypalDonate_Processor
{
	/**
	 * @var Zend_Controller_Request_Http
	 */
	protected $_request;

	/**
	 * @var XenForo_Input
	 */
	protected $_input;

	/**
	 * List of filtered input for handling a callback.
	 *
	 * @var array
	 */
	protected $_filtered = null;

	/**
	 * Info about the user who is donating.
	 *
	 * @var array|false
	 */
	protected $_user = false;

	/**
	 * The donation record ID inserted/updated.
	 *
	 * @var integer|null
	 */
	protected $_donationId = null;

	/**
	 * The donation record inserted/updated.
	 *
	 * @var array|null
	 */

	protected $_donationRecord = null;

	/**
	 * @var Aayush_PaypalDonate_Model_Donation
	 */
	protected $_donationModel = null;

	/**
	 * Initializes handling for processing a request callback.
	 *
	 * @param Zend_Controller_Request_Http $request
	 */
	public function initCallbackHandling(Zend_Controller_Request_Http $request)
	{
		$this->_request = $request;
		$this->_input = new XenForo_Input($request);

		$this->_filtered = $this->_input->filter(array(
			'test_ipn' => XenForo_Input::UINT,
			'business' => XenForo_Input::STRING,
			'receiver_email' => XenForo_Input::STRING,
			'txn_type' => XenForo_Input::STRING,
			'txn_id' => XenForo_Input::STRING,
			'parent_txn_id' => XenForo_Input::STRING,
			'mc_currency' => XenForo_Input::STRING,
			'mc_gross' => XenForo_Input::UNUM,
			'payment_status' => XenForo_Input::STRING,
			'custom' => XenForo_Input::STRING,
			'subscr_id' => XenForo_Input::STRING
		));

		$this->_donationModel =  XenForo_Model::create('Aayush_PaypalDonate_Model_Donation');
	}

	/**
	 * Validates the callback request is valid. If failure happens, the response should
	 * tell the processor to retry.
	 *
	 * @param string $errorString Output error string
	 *
	 * @return boolean
	 */
	public function validateRequest(&$errorString)
	{
		$options = XenForo_Application::get('options');
		$sandBoxEnabled = (isset($options->PD_Sandbox['enabled']) && $options->PD_Sandbox['enabled']) ? true : false;

		try
		{
			if ($this->_filtered['test_ipn'] && $sandBoxEnabled)
			{
				$validator = XenForo_Helper_Http::getClient('https://www.sandbox.paypal.com/cgi-bin/webscr');
			}
			else
			{
				$validator = XenForo_Helper_Http::getClient('https://www.paypal.com/cgi-bin/webscr');
			}
			$validator->setParameterPost('cmd', '_notify-validate');
			$validator->setParameterPost($_POST);
			$validatorResponse = $validator->request('POST');

			if (!$validatorResponse || $validatorResponse->getBody() != 'VERIFIED' || $validatorResponse->getStatus() != 200)
			{
				$errorString = 'Request not validated';
				return false;
			}
		}
		catch (Zend_Http_Client_Exception $e)
		{
			$errorString = 'Connection to PayPal failed';
			return false;
		}

		$business = strtolower($this->_filtered['business']);
		$receiverEmail = strtolower($this->_filtered['receiver_email']);
		
		/*$accounts = preg_split('#\r?\n#', $options->payPalAlternateAccounts, -1, PREG_SPLIT_NO_EMPTY);
		$accounts[] = $options->payPalPrimaryAccount;

		$matched = false;
		foreach ($accounts AS $account)
		{
			$account = trim(strtolower($account));
			if ($account && ($business == $account || $receiverEmail == $account))
			{
				$matched = true;
				break;
			}
		}*/

		$paypalEmail = ($sandBoxEnabled ? $options->PD_Sandbox['email'] : $options->PD_PaypalEmailAddress);

		$matched = false;
		$account = trim(strtolower($paypalEmail));
		if ($account && ($business == $account || $receiverEmail == $account))
		{
			$matched = true;
		}

		if (!$matched)
		{
			$errorString = 'Invalid business or receiver_email';
			return false;
		}

		return true;
	}

	/**
	 * Validates pre-conditions on the callback. These represent things that likely wouldn't get fixed
	 * (and generally shouldn't happen), so retries are not necessary.
	 *
	 * @param string $errorString
	 *
	 * @return boolean
	 */
	public function validatePreConditions(&$errorString)
	{
		$donationId = $this->_filtered['custom'];
		$donationRecord = $this->_donationModel->getDonationById($donationId);

		if (!$donationRecord)
		{
			$errorString = 'Invalid item (custom)';
			return false;
		}
		else
		{
			if ($donationRecord['user_id'])
			{
				$user = XenForo_Model::create('XenForo_Model_User')->getFullUserById($donationRecord['user_id']);
				if (!$user)
				{
					$errorString = 'Invalid user';
					return false;
				}
			}
			else
			{
				$user = array(
					'user_id' => 0,
					'username' => 'guest'
				);
			}

			$this->_user = $user;
			$this->_donationRecord = $donationRecord;
			$this->_donationId = $donationRecord['donation_id'];
		}

		if (!$this->_filtered['txn_id'])
		{
			$errorString = array('info', 'No txn_id. No action to take.');
			return false;
		}

		$transaction = $this->_donationModel->getProcessedTransactionLog($this->_filtered['txn_id']);
		if ($transaction)
		{
			$errorString = array('info', 'Transaction already processed. Skipping.');
			return false;
		}

		if (!$transaction && $this->_filtered['parent_txn_id'])
		{
			// do we have a log from a previous part of this transaction to work with?
			$parentLogs = $this->_donationModel->getLogsByTransactionId($this->_filtered['parent_txn_id']);
			foreach (array_reverse($parentLogs) AS $parentLog)
			{
				if ($parentLog['donation_id'])
				{
					$donationRecord = $this->_donationModel->getDonationById($parentLog['donation_id']);
					if ($donationRecord)
					{
						$this->_donationRecord = $donationRecord;
						$this->_donationId = $donationRecord['donation_id'];

						break;
					}
				}
			}
		}

		switch ($this->_filtered['txn_type'])
		{
			case 'web_accept':
			case 'subscr_payment':
				$paymentAmountPassed = (
					round($this->_filtered['mc_gross'], 2) == round($donationRecord['amount'], 2)
					&& strtolower($this->_filtered['mc_currency']) == strtolower($donationRecord['currency'])
				);

				if (!$paymentAmountPassed)
				{
					$errorString = 'Invalid payment amount';
					return false;
				}
		}

		return true;
	}

	/**
	 * Once all conditions are validated, process the transaction.
	 *
	 * @return array [0] => log type (payment, cancel, info), [1] => log message
	 */
	public function processTransaction()
	{
		switch ($this->_filtered['txn_type'])
		{
			case 'web_accept':
			case 'subscr_payment':
				if ($this->_filtered['payment_status'] == 'Completed')
				{
					$this->_donationModel->confirmDonation($this->getDonationId());
					return array('payment', 'Payment received');
				}
				break;
		}

		if ($this->_filtered['payment_status'] == 'Refunded' || $this->_filtered['payment_status'] == 'Reversed')
		{
			if ($this->_donationRecord)
			{
				$this->_donationModel->unconfirmDonation($this->getDonationId());

				return array('cancel', 'Payment refunded/reversed');
			}
		}
		else if ($this->_filtered['payment_status'] == 'Canceled_Reversal' && $this->_donationRecord)
		{
			$this->_donationModel->confirmDonation($this->getDonationId());
			return array('payment', 'Reversal cancelled');
		}

		return array('info', 'OK, no action');
	}

	/**
	 * Get details for use in the log.
	 *
	 * @return array
	 */
	public function getLogDetails()
	{
		$details = $_POST;
		$details['_callbackIp'] = (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : false);

		return $details;
	}

	/**
	 * Gets the transaction ID.
	 *
	 * @return string
	 */
	public function getTransactionId()
	{
		return $this->_filtered['txn_id'];
	}

	/**
	 * Gets the ID of the processor.
	 *
	 * @return string
	 */
	public function getProcessorId()
	{
		return 'paypal';
	}

	public function getDonationId()
	{
		return intval($this->_donationId);
	}

	/**
	 * Logs the request.
	 *
	 * @param string $type Log type (info, payment, cancel, error)
	 * @param string $message Log message
	 * @param array $extra Extra details to log (not including output from getLogDetails)
	 */
	public function log($type, $message, array $extra)
	{
		$donationId = $this->getDonationId();
		$processor = $this->getProcessorId();
		$transactionId = $this->getTransactionId();
		$details = $this->getLogDetails() + $extra;

		$this->_donationModel->logProcessorCallback(
			$donationId, $processor, $transactionId, $type, $message, $details
		);
	}
}