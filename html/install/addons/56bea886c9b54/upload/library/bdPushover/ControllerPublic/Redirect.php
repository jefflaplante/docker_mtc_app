<?php

class bdPushover_ControllerPublic_Redirect extends XenForo_ControllerPublic_Abstract
{
	public function actionIndex()
	{
		$redirect = $this->_input->filterSingle('redirect', XenForo_Input::STRING);
		if (empty($redirect))
		{
			$redirect = $this->getDynamicRedirect();
		}

		$alertModel = $this->_getAlertModel();

		$alertId = $this->_input->filterSingle('alert_id', XenForo_Input::UINT);
		if (!empty($alertId))
		{
			$alert = $alertModel->getAlertById($alertId);
			if (!empty($alert) AND empty($alert['view_date']) AND $alert['alerted_user_id'] == XenForo_Visitor::getUserId())
			{
				$alertModel->bdPushover_markAlertRead($alert);
			}
		}

		return $this->responseRedirect(XenForo_ControllerResponse_Redirect::RESOURCE_CANONICAL_PERMANENT, $redirect);
	}

	/**
	 * @return XenForo_Model_Alert
	 */
	protected function _getAlertModel()
	{
		return $this->getModelFromCache('XenForo_Model_Alert');
	}

}
