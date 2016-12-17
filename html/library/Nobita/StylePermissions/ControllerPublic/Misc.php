<?php
class Nobita_StylePermissions_ControllerPublic_Misc extends XFCP_Nobita_StylePermissions_ControllerPublic_Misc {
	protected function _preDispatch($action) {
		if(strtolower($action) == "style") {
			if($this->_input->inRequest('style_id')) {
				$styleId = $this->_input->filterSingle('style_id', XenForo_Input::UINT);
				if($styleId) {
					$styles = (XenForo_Application::isRegistered('styles')
						? XenForo_Application::get('styles')
						: XenForo_Model::create('XenForo_Model_Style')->getAllStyles()
					);
					$style = isset($styles[$styleId]) ? $styles[$styleId] : array();
					
					$visitor = XenForo_Visitor::getInstance()->toArray();
					if(!empty($style)) {
						$permissions = @unserialize($style['style_permissions']);
						
						if ($permissions)
						{
							if(!Nobita_StylePermissions_Helper::appliedUserGroupIds($visitor, $permissions['allowed_user_group_ids'])
								&& !Nobita_StylePermissions_Helper::appliedIndividualUsers($visitor, $permissions['users']))
							{
								throw $this->getNoPermissionResponseException();
							}
						}
						
					}
				}
			}
		}
		
		return parent::_preDispatch($action);
	}
	
	public function actionStyle() {
		$response = parent::actionStyle();
		if($response instanceof XenForo_ControllerResponse_View
			AND !empty($response->params['styles'])) 
		{
			$styles =& $response->params['styles'];
			
			$visitor = XenForo_Visitor::getInstance()->toArray();
			
			foreach($styles as $styleId => &$style) {
				$permissions = @unserialize($style['style_permissions']);
				
				if ($permissions)
				{
					if(!Nobita_StylePermissions_Helper::appliedUserGroupIds($visitor, $permissions['allowed_user_group_ids'])
					&& !Nobita_StylePermissions_Helper::appliedIndividualUsers($visitor, $permissions['users']))
					{
						unset($styles[$styleId]); // unset if didn't permisson...
					}
				}
			}
		}
		
		return $response;
	}
}