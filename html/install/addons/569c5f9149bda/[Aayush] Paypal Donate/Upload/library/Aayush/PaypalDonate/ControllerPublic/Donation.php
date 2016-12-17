<?php

class Aayush_PaypalDonate_ControllerPublic_Donation extends XenForo_ControllerPublic_Abstract
{
	protected function _preDispatch($action)
	{
		if (XenForo_Application::get('options')->PD_DisableDonations)
		{
			throw $this->responseException($this->responseError(XenForo_Application::get('options')->PD_DDMessage));
		}
	}

	public function actionIndex()
	{
		$donationModel = $this->_getDonationModel();
		if (!$donationModel->canDonate())
		{
			return $this->responseNoPermission();
		}

		$amounts = explode(',', XenForo_Application::get('options')->PD_Amounts);

		$viewParams = array(
			'amounts' => array_map("trim", $amounts),

			'topDonations' => $donationModel->getTopDonations(),
		);

		return $this->responseView('Aayush_PaypalDonate_ViewPublic_Index', 'Aayush_PD_index', $viewParams);
	}

	public function actionDonate()
	{
		$donationModel = $this->_getDonationModel();
		if (!$donationModel->canDonate())
		{
			return $this->responseNoPermission();
		}

		$donationId = $this->_input->filterSingle('donation_id', XenForo_Input::UINT);

		if ($donationId)
		{
			$donation = $this->_getDonationOrError($donationId);
			$viewParams = array(
				'donation' => $donation
			);

			return $this->responseView('Aayush_PaypalDonate_ViewPublic_Donate', 'Aayush_PD_donate', $viewParams);
		}
		
		$this->_assertPostOnly();
		
		$data = $this->_input->filter(array(
			'amount' => XenForo_Input::STRING,
			'note' => XenForo_Input::STRING,
			'anonymous' => XenForo_Input::UINT
		));

		if ($data['amount'] == 'custom')
		{
			$data['amount'] = $this->_input->filterSingle('custom_amount', XenForo_Input::FLOAT);
		}

		$dw = XenForo_DataWriter::create('Aayush_PaypalDonate_DataWriter_Donation');
		$dw->bulkSet($data);

		$minimumAmount = XenForo_Application::get('options')->PD_MinimumAmount;

		if ($data['amount'] < $minimumAmount)
		{
			$dw->error(
				new XenForo_Phrase('paypal_donate_minimum_amount', array(
					'amount' => $minimumAmount,
					'currency' => XenForo_Application::get('options')->PD_Currency
				)), 
				'amount'
			);
		}

		$userId = XenForo_Visitor::getUserId();
		$dw->set('user_id', $userId);

		$donationId = $dw->save();

		$donation = $dw->getMergedData();

		return $this->responseRedirect(
			XenForo_ControllerResponse_Redirect::SUCCESS,
			XenForo_Link::buildPublicLink('donations/donate', $donation)		
		);
	}

	public function actionComplete()
	{
		$donationModel = $this->_getDonationModel();
		if (!$donationModel->canDonate())
		{
			return $this->responseNoPermission();
		}

		$donationId = $this->_input->filterSingle('custom', XenForo_Input::UINT);
		$transactionId = $this->_input->filterSingle('txn_id', XenForo_Input::STRING);
		$paymentStatus = $this->_input->filterSingle('payment_status', XenForo_Input::STRING);

		$donation = $donationModel->getDonationById($donationId);

		if (!$donation || !$transactionId)
		{
			return $this->responseRedirect(
				XenForo_ControllerResponse_Redirect::SUCCESS,
				XenForo_Link::buildPublicLink('donate')		
			);
		}

		$viewParams = array(
			'donation' => $donation,

			'transactionId' => $transactionId,
		);

		return $this->responseView('Aayush_PaypalDonate_ViewPublic_DonationComplete', 'Aayush_PD_donation_complete', $viewParams);
	}

	public function actionList()
	{
		$donationModel = $this->_getDonationModel();
		if (!$donationModel->canViewDonationList())
		{
			return $this->responseNoPermission();
		}

		$page = $this->_input->filterSingle('page', XenForo_Input::UINT);
		$perPage = XenForo_Application::get('options')->PD_DonationsPerPage;

		$conditions = array(
			'confirmed' => 1
		);

		$fetchOptions = array(
			'page' => $page,
			'perPage' => $perPage,
			'join' => Aayush_PaypalDonate_Model_Donation::FETCH_USER
		);

		$fetchOptions['order'] = 'recent';

		$viewParams = array(
			'donations' => $donationModel->getDonations($conditions, $fetchOptions),

			'page' => $page,
			'perPage' => $perPage,
			'total' => $donationModel->countDonations($conditions)
		);

		return $this->responseView('Aayush_PaypalDonate_ViewPublic_DonationList', 'Aayush_PD_donation_list', $viewParams);
	}

	/**
	 * Session activity details.
	 * @see XenForo_Controller::getSessionActivityDetailsForList()
	 */
	public static function getSessionActivityDetailsForList(array $activities)
	{
		return new XenForo_Phrase('viewing_donations');
	}

	protected function _checkCsrf($action)
	{
		if (strtolower($action) == 'complete')
		{
			return;
		}

		return parent::_checkCsrf($action);
	}

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