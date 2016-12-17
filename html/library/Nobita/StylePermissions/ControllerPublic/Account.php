<?php
class Nobita_StylePermissions_ControllerPublic_Account extends XFCP_Nobita_StylePermissions_ControllerPublic_Account {
	public function actionPreferences() {
		$response = parent::actionPreferences();
		if ($response instanceof XenForo_ControllerResponse_View
			AND !empty($response->subView) AND $response->subView->params)
		{
			$params =& $response->subView->params;
			$styles = $params['styles'];
			
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

			$params['styles'] = $styles;
		}

		return $response;
	}
}