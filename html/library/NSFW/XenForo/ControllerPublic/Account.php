<?php

class NSFW_XenForo_ControllerPublic_Account extends XFCP_NSFW_XenForo_ControllerPublic_Account
{
	public function actionPreferencesSave()
	{
		$GLOBALS['NSFW_XenForo_ControllerPublic_Account'] = $this;
		
		return parent::actionPreferencesSave();
	}
	
	public function NSFW_actionPreferencesSave(NSFW_XenForo_DataWriter_User $dw)
	{
		$input = $this->_input->filter(array(
			'nsfw_mode' => XenForo_Input::STRING,
			'nsfw_machines' => XenForo_Input::ARRAY_SIMPLE,
			'nsfw_features' => XenForo_Input::ARRAY_SIMPLE,
		));
		
		if (in_array($input['nsfw_mode'], array('machine', 'all')))
		{
			$options = array_merge(array(
				'machines' => array(),
			), $input['nsfw_features']);
			
			if ($input['nsfw_mode'] == 'all') {
				$options['all'] = true;
			}
			
			foreach ($input['nsfw_machines'] as $machineId => $machine)
			{
				if (empty($machine['name']))
				{
					// this machine has no name, ignore it
				}
				elseif (!empty($machine['delete']))
				{
					// this machine is going to be deleted
				}
				else
				{
					$options['machines'][$machineId] = $machine;
				}
			}
			
			$dw->set('nsfw_options', $options);
		}
	}
}