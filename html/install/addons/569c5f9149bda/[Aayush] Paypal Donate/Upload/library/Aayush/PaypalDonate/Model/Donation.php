<?php

class Aayush_PaypalDonate_Model_Donation extends XenForo_Model
{
	/**
	 * @var integer Join user table to fetch donation options
	 */
	const FETCH_USER = 0x01;

	public function getDonationById($donationId, array $fetchOptions = array())
	{
		$sqlClauses = $this->prepareDonationFetchOptions($fetchOptions);

		return $this->_getDb()->fetchRow(
			'
				SELECT donation.*
					' . $sqlClauses['selectFields'] . '
				FROM aayush_ppdonate AS donation
				' . $sqlClauses['joinTables'] . '
				WHERE donation.donation_id = ?
			'
		, $donationId);
	}

	public function getDonationsByIds(array $donationIds)
	{
		if (!$donationIds)
		{
			return array();
		}

		return $this->fetchAllKeyed('
			SELECT *
			FROM aayush_ppdonate
			WHERE donation_id IN (' . $this->_getDb()->quote($donationIds) . ')
		', 'donation_id'); 
	}

	public function getDonations(array $conditions = array(), array $fetchOptions = array())
	{
		$whereConditions = $this->prepareDonationConditions($conditions, $fetchOptions);

		$sqlClauses = $this->prepareDonationFetchOptions($fetchOptions);
		$limitOptions = $this->prepareLimitFetchOptions($fetchOptions);

		return $this->fetchAllKeyed($this->limitQueryResults(
			'
				SELECT donation.*
					' . $sqlClauses['selectFields'] . '
				FROM aayush_ppdonate AS donation
				' . $sqlClauses['joinTables'] . '
				WHERE ' . $whereConditions . '
				' . $sqlClauses['orderClause'] . '
			', $limitOptions['limit'], $limitOptions['offset']
		), 'donation_id');
	}

	public function countDonations(array $conditions = array(), array $fetchOptions = array())
	{
		$whereConditions = $this->prepareDonationConditions($conditions, $fetchOptions);

		$sqlClauses = $this->prepareDonationFetchOptions($fetchOptions);

		return $this->_getDb()->fetchOne('
			SELECT COUNT(donation.donation_id)
			FROM aayush_ppdonate AS donation
			' . $sqlClauses['joinTables'] . '
			WHERE ' . $whereConditions
		);
	}

	public function confirmDonation($donationId)
	{
		if (!$donationId)
		{
			return;
		}

		$dw = XenForo_DataWriter::create('Aayush_PaypalDonate_DataWriter_Donation');
		$dw->setExistingData($donationId);

		$dw->set('confirmed', 1);

		$dw->save();

		return true;
	}

	public function unconfirmDonation($donationId)
	{
		if (!$donationId)
		{
			return;
		}
		
		$dw = XenForo_DataWriter::create('Aayush_PaypalDonate_DataWriter_Donation');
		$dw->setExistingData($donationId);

		$dw->set('confirmed', 0);

		$dw->save();

		return true;
	}

	public function getThisMonthDonation()
	{
		$startDate = XenForo_Application::getSimpleCacheData('PD_StartDate');

		return $this->_getDb()->fetchOne('
			SELECT SUM(amount)
			FROM aayush_ppdonate
			WHERE dateline > ? AND confirmed = 1
		', $startDate);
	}

	public function getTopDonations($limit = 5)
	{
		return $this->fetchAllKeyed('
			SELECT donation.*, user.* 
			FROM aayush_ppdonate AS donation
			LEFT JOIN xf_user AS user ON (user.user_id = donation.user_id)
			WHERE donation.confirmed = 1
			ORDER BY donation.amount DESC
			LIMIT ?
		', 'donation_id', $limit); 
	}

	/**
	 * Prepare SQL conditions for fetching donations
	 *
	 * @param array $conditions
	 * @param array $fetchOptions
	 *
	 * @return string
	 */

	public function prepareDonationConditions(array $conditions, array &$fetchOptions)
	{
		$sqlConditions = array();
		$db = $this->_getDb();

		if (!empty($conditions['user_id']))
		{
			$sqlConditions[] = 'donation.user_id = ' . $db->quote($conditions['user_id']);
		}

		if (!empty($conditions['confirmed']))
		{
			$sqlConditions[] = 'donation.confirmed = 1';
		}

		if (!empty($conditions['start']))
		{
			$sqlConditions[] = 'donation.dateline >= ' . $db->quote($conditions['start']);
		}

		if (!empty($conditions['end']))
		{
			$sqlConditions[] = 'donation.dateline <= ' . $db->quote($conditions['end']);
		}

		return $this->getConditionsForClause($sqlConditions);
	}

	public function prepareDonationFetchOptions(array $fetchOptions)
	{
		$selectFields = '';
		$joinTables = '';
		$orderBy = '';

		if (isset($fetchOptions['join']))
		{
			if ($fetchOptions['join'] & self::FETCH_USER)
			{
				$selectFields .= ',
					user.*';
				$joinTables .= '
					LEFT JOIN xf_user AS user ON
						(user.user_id = donation.user_id)';
			}
		}

		if (isset($fetchOptions['order']))
		{
			switch ($fetchOptions['order'])
			{
				case 'recent':
					$orderBy = 'donation.dateline DESC';
					break;
					
				case 'amount':
					$orderBy = 'donation.amount DESC';
					break;
			}
		}

		return array(
			'selectFields' => $selectFields,
			'joinTables' => $joinTables,
			'orderClause' => ($orderBy ? "ORDER BY $orderBy" : '')
		);
	}

	/**
	 * Logs a payment processor callback request.
	 *
	 * @param integer $donationId Donation record ID this applies to, if known
	 * @param string $processor
	 * @param string $transactionId
	 * @param string $transactionType Type of transaction: info, payment, cancel, error
	 * @param string $message
	 * @param array $details List of additional details about call
	 *
	 * @return integer Log record ID
	 */
	public function logProcessorCallback($donationId, $processor, $transactionId, $transactionType,
		$message, array $details
	)
	{
		$this->_getDb()->insert('aayush_ppdonate_log', array(
			'donation_id' => $donationId,
			'processor' => $processor,
			'transaction_id' => $transactionId,
			'transaction_type' => $transactionType,
			'message' => substr($message, 0, 255),
			'transaction_details' => serialize($details),
			'log_date' => XenForo_Application::$time		
		));

		return $this->_getDb()->lastInsertId();
	}

	/**
	 * Gets any log records that apply to the specified transaction.
	 *
	 * @param string $transactionId
	 *
	 * @return array [log id] => info
	 */
	public function getLogsByTransactionId($transactionId)
	{
		if ($transactionId === '')
		{
			return array();
		}

		return $this->fetchAllKeyed('
			SELECT *
			FROM aayush_ppdonate_log
			WHERE transaction_id = ?
			ORDER BY log_date
		', 'donation_log_id', $transactionId);
	}

	/**
	 * Gets any log record that indicates a transaction has been processed.
	 *
	 * @param string $transactionId
	 *
	 * @return array|false
	 */
	public function getProcessedTransactionLog($transactionId)
	{
		if ($transactionId === '')
		{
			return array();
		}

		return $this->fetchAllKeyed('
			SELECT *
			FROM aayush_ppdonate_log
			WHERE transaction_id = ?
				AND transaction_type IN (\'payment\', \'cancel\')
			ORDER BY log_date
		', 'donation_log_id', $transactionId);
	}

	public function canDonate(&$errorPhraseKey = '', array $viewingUser = null)
	{
		$this->standardizeViewingUserReference($viewingUser);

		return XenForo_Permission::hasPermission($viewingUser['permissions'], 'general', 'canDonate');
	}

	public function canViewDonationList(&$errorPhraseKey = '', array $viewingUser = null)
	{
		$this->standardizeViewingUserReference($viewingUser);

		return XenForo_Permission::hasPermission($viewingUser['permissions'], 'general', 'canViewDonationList');
	}
}