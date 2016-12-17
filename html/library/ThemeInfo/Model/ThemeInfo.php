<?php

class ThemeInfo_Model_ThemeInfo extends XenForo_Model
{
	public function getThemeInfo()
        {
		$options = XenForo_Application::get('options');
		$userlastactive = $options->userlastactive;
		$groupselector = $options->ThemeInfoGroupSelector;
		$limitgroup = $options->limitgroup;
                $db = $this->_getDb();

		
                switch ($limitgroup)
		{
		case '1':
                return $db->fetchAll("
                SELECT COUNT( xf_user.style_id ) AS TOTAL, xf_user.style_id, xf_style.title
		FROM xf_user
		LEFT JOIN xf_style 
		ON (xf_user.style_id = xf_style.style_id)
		WHERE xf_user.last_activity > UNIX_TIMESTAMP( ) - (86400 * $userlastactive)
		AND (find_in_set($groupselector,secondary_group_ids) OR find_in_set($groupselector,user_group_id))
		GROUP BY xf_style.style_id
		");
		break;

		case '0';
		return $db->fetchAll("
                SELECT COUNT( xf_user.style_id ) AS TOTAL, xf_user.style_id, xf_style.title
                FROM xf_user
                LEFT JOIN xf_style 
                ON (xf_user.style_id = xf_style.style_id)
                WHERE xf_user.last_activity > UNIX_TIMESTAMP( ) - (86400 * $userlastactive)
                GROUP BY xf_style.style_id
                ");
                break;
		}
        }

	public function getGroupInfo()
	{
		$options = XenForo_Application::get('options');
		$groupselector = $options->ThemeInfoGroupSelector;
		$limitgroup = $options->limitgroup;
		$db = $this->_getDb();

		switch ($limitgroup)
                {
                case '1':
		return $db->fetchOne("
		SELECT title
		FROM xf_user_group
		WHERE user_group_id = '$groupselector'
		");
		break;
		}
	}

	protected function _getThemeInfoModel()
        {
                return $this->getModelFromCache('ThemeInfo_Model_ThemeInfo');
        }
}
