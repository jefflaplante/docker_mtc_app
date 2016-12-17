<?php
class Nobita_StylePermissions_ControllerAdmin_Style extends XFCP_Nobita_StylePermissions_ControllerAdmin_Style {
	public function actionAdd() {
		$response = parent::actionAdd();
		if($response instanceof XenForo_ControllerResponse_View) {
			$viewParams =& $response->params;
			
			$viewParams['stylePermissions'] = array(
				'allowed_user_group_ids' => array()
			);
			$viewParams['userGroups'] = $this->getModelFromCache('XenForo_Model_UserGroup')->getAllUserGroups();
		}
		
		return $response;
	}
	
	public function actionEdit() {
		$response = parent::actionEdit();
		if($response instanceof XenForo_ControllerResponse_View) {
			$viewParams =& $response->params;
			
			$permissions = @unserialize($viewParams['style']['style_permissions']);
			if(!$permissions) {
				$permissions['allowed_user_group_ids'] = array();
			}
			$viewParams['stylePermissions'] = $permissions;
			$viewParams['userGroups'] = $this->getModelFromCache('XenForo_Model_UserGroup')->getAllUserGroups();
		}
		
		return $response;
	}
	
	public function actionSave() {
		$GLOBALS['Nobita_StylePermissions_ControllerAdmin_Style::actionSave'] = $this;
		
		return parent::actionSave();
	}
	
	public function permissions_actionSave(XenForo_DataWriter_Style $dw) {
		$input = $this->_input->filter(array(
			'user_group_ids' => array(XenForo_Input::UINT, 'array' => true),
			'special_users' => XenForo_Input::STRING
		));

		$usersFromInput = preg_split('#\r?\n#', $input['special_users'], -1, PREG_SPLIT_NO_EMPTY);

		$userModel = $this->getModelFromCache('XenForo_Model_User');
		$users = array();
		if(!empty($usersFromInput) && $usersFromInput[0] !== '') {
			foreach($usersFromInput as $username) {
				$user = $userModel->getUserByName($username);
				if(!$user) {
					$dw->error(new XenForo_Phrase('requested_user_x_not_found', array('name' => $username)));
				}
				
				$users[$user['user_id']] = $user['user_id'];
			}
		}
		
		$data = array(
			'allowed_user_group_ids' => $input['user_group_ids'],
			'allowed_user_names' => $input['special_users'],
			'users' => $users
		);
		$dw->set('style_permissions',$data);
		unset($GLOBALS['Nobita_StylePermissions_ControllerAdmin_Style::actionSave']);
	}
}