<?php

class Aayush_PaypalDonate_ControllerAdmin_Donation extends XenForo_ControllerAdmin_Abstract
{
	protected function _preDispatch($action)
	{
		$this->assertAdminPermission('manageDonations');
	}

	public function actionIndex()
	{
		return $this->responseReroute(__CLASS__, 'list');
	}

	public function actionList()
	{
		$page = $this->_input->filterSingle('page', XenForo_Input::UINT);
		$perPage = 25;

		$input = $this->_input->filter(array(
			'mode' => XenForo_Input::STRING,
			'username' => XenForo_Input::STRING,
			'start' => XenForo_Input::STRING,
			'end' => XenForo_Input::STRING
		));

		$dateInput = $this->_input->filter(array(
			'start' => XenForo_Input::DATE_TIME,
			'end' => array(XenForo_Input::DATE_TIME, 'dayEnd' => true),
		));

		$donationModel = $this->_getDonationModel();

		$pageParams = array();
		if ($input['mode'])
		{
			$pageParams['mode'] = $input['mode'];
		}
		if ($input['start'])
		{
			$pageParams['start'] = $input['start'];
		}
		if ($input['end'])
		{
			$pageParams['end'] = $input['end'];
		}

		$userId = 0;
		if ($input['username'])
		{
			if ($user = $this->getModelFromCache('XenForo_Model_User')->getUserByName($input['username']))
			{
				$userId = $user['user_id'];
				$pageParams['username'] = $input['username'];
			}
			else
			{
				$input['username'] = '';
			}
		}

		$conditions = array(
			'user_id' => $userId,
			'start' => $dateInput['start'],
			'end' => $dateInput['end'],
		);

		$fetchOptions = array(
			'page' => $page,
			'perPage' => $perPage,
			'join' => Aayush_PaypalDonate_Model_Donation::FETCH_USER
		);

		switch ($input['mode'])
		{
			case 'amount':
				$fetchOptions['order'] = 'amount';
				break;

			case 'recent';
			default:
				$input['mode'] = 'recent';
				$fetchOptions['order'] = 'recent';
				break;
		}

		$viewParams = array(
			'donations' => $donationModel->getDonations($conditions, $fetchOptions),

			'mode' => $input['mode'],
			'username' => $input['username'],
			'start' => $input['start'],
			'end' => $input['end'],

			'datePresets' => XenForo_Helper_Date::getDatePresets(),

			'pageParams' => $pageParams,
			'page' => $page,
			'perPage' => $perPage,
			'total' => $donationModel->countDonations($conditions)
		);

		return $this->responseView('Aayush_PaypalDonate_ViewAdmin_List', 'Aayush_paypaldonation_list', $viewParams);
	}

	/**
	 * Displays a form to add new donation
	 *
	 * @return XenForo_ControllerResponse_Abstract
	 */
	public function actionAdd()
	{
		$viewParams = array(
			'donation' => array(
				'currency' => XenForo_Application::get('options')->PD_Currency
			)
		);

		return $this->responseView('Aayush_PaypalDonate_ViewAdmin_Edit', 'Aayush_paypaldonation_edit', $viewParams);
	}

	/**
	 * Displays a form to edit an existing donation.
	 *
	 * @return XenForo_ControllerResponse_Abstract
	 */
	public function actionEdit()
	{
		$donationId = $this->_input->filterSingle('donation_id', XenForo_Input::UINT);
		$donation = $this->_getDonationOrError($donationId);

		$viewParams = array(
			'donation' => $donation,

			'month' => date('m', $donation['dateline']),
			'day' => date('d', $donation['dateline']),
			'year' => date('Y', $donation['dateline']),
		);

		return $this->responseView('Aayush_PaypalDonate_ViewAdmin_Edit', 'Aayush_paypaldonation_edit', $viewParams);
	}

	public function actionSave()
	{
		$this->_assertPostOnly();

		$donationId = $this->_input->filterSingle('donation_id', XenForo_Input::UINT);

		$input = $this->_input->filter(array(
			'username'  => XenForo_Input::STRING,
			'amount'	=> XenForo_Input::UNUM,		
			'day'		=> XenForo_Input::UINT,
			'month'     => XenForo_Input::UINT,
			'year'      => XenForo_Input::UINT,
			'confirmed' => XenForo_Input::UINT,
			'anonymous' => XenForo_Input::UINT,
			'note'      => XenForo_Input::STRING
		));

		$dw = XenForo_DataWriter::create('Aayush_PaypalDonate_DataWriter_Donation');
		$user = $this->getModelFromCache('XenForo_Model_User')->getUserByName($input['username']);

		if ($donationId)
		{
			$dw->setExistingData($donationId);
		}

		if (!$user)
		{
			$dw->error(new XenForo_Phrase('invalid_username'), 'username');	
			$dw->set('user_id', 0);
		}
		else
		{
			$dw->set('user_id', $user['user_id']);
		}

		$dw->set('amount', $input['amount']);
		$dw->set('confirmed', $input['confirmed']);
		$dw->set('anonymous', $input['anonymous']);
		$dw->set('note', $input['note']);

		if (!$donationId && checkdate($input['month'], $input['day'], $input['year']))
		{
			$dateline = mktime(0, 0, 0, $input['month'], $input['day'], $input['year']);
			$dw->set('dateline', $dateline);
		}

		$dw->save();

		$donation = $dw->getMergedData();

		return $this->responseRedirect(
			XenForo_ControllerResponse_Redirect::SUCCESS,
			XenForo_Link::buildAdminLink('donations/list') . $this->getLastHash($donation['donation_id'])
		);
	}

	public function actionDelete()
	{
		if ($this->isConfirmedPost())
		{
			return $this->_deleteData(
				'Aayush_PaypalDonate_DataWriter_Donation', 'donation_id',
				XenForo_Link::buildAdminLink('donations')
			);
		}
		else
		{
			$donationId = $this->_input->filterSingle('donation_id', XenForo_Input::UINT);
			$donation = $this->_getDonationOrError($donationId);

			$viewParams = array(
				'donation' => $donation
			);

			return $this->responseView('Aayush_PaypalDonate_ViewAdmin_Delete', 'Aayush_paypaldonation_delete', $viewParams);
		}
	}

	/**
	 * Gets a valid donation or throws an exception.
	 *
	 * @param string $donationId
	 *
	 * @return array
	 */
	protected function _getDonationOrError($donationId)
	{
		$fetchOptions = array(
			'join' => Aayush_PaypalDonate_Model_Donation::FETCH_USER
		);

		$info = $this->_getDonationModel()->getDonationById($donationId, $fetchOptions);
		if (!$info)
		{
			throw $this->responseException($this->responseError(new XenForo_Phrase('requested_donation_not_found'), 404));
		}

		return $info;
	}

	protected function _getDonationModel()
	{
		return $this->getModelFromCache('Aayush_PaypalDonate_Model_Donation');
	}
}