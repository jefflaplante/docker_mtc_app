<?php

class bdPushover_XenForo_ControllerPublic_Account extends XFCP_bdPushover_XenForo_ControllerPublic_Account
{
	public function actionExternalAccounts()
	{
		$response = parent::actionExternalAccounts();

		if ($response instanceof XenForo_ControllerResponse_View AND !empty($response->subView))
		{
			if ($response->subView instanceof XenForo_ControllerResponse_View AND $response->subView->templateName === 'account_external_accounts')
			{
				$viewParams = &$response->subView->params;

				if (bdPushover_Helper_Template::canAssociate() AND !empty($viewParams['external']['bdpushover']))
				{
					$extra = @unserialize($viewParams['external']['bdpushover']['extra_data']);

					if (empty($extra['validated']['group']))
					{
						$viewParams['bdPushoverUserKey'] = substr($viewParams['external']['bdpushover']['provider_key'], 0, 5) . '...';
					}
					else
					{
						$viewParams['bdPushoverGroupKey'] = substr($viewParams['external']['bdpushover']['provider_key'], 0, 5) . '...';
					}

					if (!empty($extra['device']))
					{
						$viewParams['bdPushoverDevice'] = $extra['device'];
					}

					if (!empty($extra['sound']))
					{
						$sounds = bdPushover_Helper_Api::soundsCached();
						if (isset($sounds[$extra['sound']]))
						{
							$viewParams['bdPushoverSound'] = $sounds[$extra['sound']];
						}
					}

					if (!empty($extra['priority']))
					{
						$viewParams['bdPushoverPriorities'] = array();
						foreach ($extra['priority'] as $contentType => $priority)
						{
							$viewParams['bdPushoverPriorities'][$priority][] = new XenForo_Phrase($contentType);
						}
					}
				}

				if (bdPushover_Helper_Template::canAssociate('pushbullet') AND !empty($viewParams['external']['bdpushover_pushbullet']))
				{
					$viewParams['bdPushoverPushbullet'] = @unserialize($viewParams['external']['bdpushover_pushbullet']['extra_data']);
				}
			}
		}

		return $response;
	}

}
