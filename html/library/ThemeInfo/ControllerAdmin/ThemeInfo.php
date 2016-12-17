<?php

class ThemeInfo_ControllerAdmin_ThemeInfo extends XenForo_ControllerAdmin_Tools
{
	public function actionIndex()
        {
		$options = XenForo_Application::get('options');
        	$theme_display_format = $options->theme_display_format;
		$groupselector = $options->ThemeInfoGroupSelector;
                $limitgroup = $options->limitgroup;
		$ThemeInfoModel = $this->_getThemeInfoModel();

		$themeInfo = $ThemeInfoModel->getThemeInfo();
		$groupInfo = $ThemeInfoModel->getGroupInfo();
		$viewParams['theme_info'] = $themeInfo;
		$viewParams['group_info'] = $groupInfo;
		$viewParams['limit_group'] = $limitgroup;

	switch ($theme_display_format)
	{
            	case 'chart':
		return $this->responseView('XenForo_ViewAdmin_Base', 'themeinfo_chart', $viewParams);
		break;

		case 'table':
		return $this->responseView('XenForo_ViewAdmin_Base', 'themeinfo_table', $viewParams);
                break;
	}

        }

	protected function _getThemeInfoModel()
        {
                return $this->getModelFromCache('ThemeInfo_Model_ThemeInfo');
        }

}
