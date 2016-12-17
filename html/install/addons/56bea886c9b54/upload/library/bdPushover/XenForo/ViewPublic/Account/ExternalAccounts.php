<?php

class bdPushover_XenForo_ViewPublic_Account_ExternalAccounts extends XFCP_bdPushover_XenForo_ViewPublic_Account_ExternalAccounts
{
	public function prepareParams()
	{
		$viewParams = &$this->_params;

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
		
		$viewParams['bdPushoverContentTypes'] = bdPushover_Helper_Template::getContentTypes();

		return parent::prepareParams();
	}

}
