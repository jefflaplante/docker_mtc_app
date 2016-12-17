<?php

class Aayush_PaypalDonate_Install_Controller
{
	public static function install($previous)
	{
		$db = XenForo_Application::getDb();

		if (XenForo_Application::$versionId < 1020070)
        {
            throw new XenForo_Exception('This add-on requires XenForo 1.2.0 or higher.', true);
        }

        $tables = self::getTables();
		$data = self::getData();

		if (!$previous)
		{
			foreach ($tables AS $tableSql)
			{
				try
				{
					$db->query($tableSql);
				}
				catch (Zend_Db_Exception $e) {}
			}

			foreach (self::getAlters() AS $alterSql)
			{
				try
				{
					$db->query($alterSql);
				}
				catch (Zend_Db_Exception $e) {}
			}

			foreach (self::getData() AS $dataSql)
			{
				$db->query($dataSql);
			}

			XenForo_Application::setSimpleCacheData('PD_StartDate', XenForo_Application::$time);
		}
		else 
		{
			// Nothing...
		}

		self::applyPermissionDefaults($previous ? $previous['version_id'] : false);

        XenForo_Application::set('contentTypes', XenForo_Model::create('XenForo_Model_ContentType')->getContentTypesForCache());
	}

	public static function uninstall()
	{
		$db = XenForo_Application::get('db');

		foreach (self::getTables() AS $tableName => $tableSql)
		{
			try
			{
				$db->query("DROP TABLE IF EXISTS `$tableName`");
			}
			catch (Zend_Db_Exception $e) {}
		}

		$db->delete('xf_content_type', "content_type = 'donation'");
		$db->delete('xf_content_type_field', "content_type = 'donation'");

		$db->delete('xf_permission_entry', "permission_group_id = 'general' AND permission_id IN ('canDonate', 'canViewDonationList')");
		$db->delete('xf_permission_entry_content', "permission_group_id = 'general' AND permission_id IN ('canDonate', 'canViewDonationList')");

		XenForo_Application::setSimpleCacheData('donationReceived', false);
		XenForo_Application::setSimpleCacheData('PD_StartDate', false);
		XenForo_Application::setSimpleCacheData('PD_EndDate', false);

		XenForo_Application::set('contentTypes', XenForo_Model::create('XenForo_Model_ContentType')->getContentTypesForCache());
	}

	public static function getTables()
	{
		$tables = array();

		$tables['aayush_ppdonate'] = "
			CREATE TABLE IF NOT EXISTS `aayush_ppdonate` (
			  `donation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
			  `user_id` int(10) unsigned NOT NULL,
			  `amount` decimal(10,2) unsigned NOT NULL,
			  `dateline` int(10) unsigned NOT NULL,
			  `confirmed` tinyint(1) unsigned NOT NULL DEFAULT '0',
			  `anonymous` tinyint(1) unsigned NOT NULL DEFAULT '0',
			  `note` varchar(200) NOT NULL DEFAULT '',
			  `currency` varchar(10) NOT NULL,
			  PRIMARY KEY (`donation_id`),
			  KEY `user_id` (`user_id`),
			  KEY `dateline` (`dateline`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8
		";

		$tables['aayush_ppdonate_log'] = "
			CREATE TABLE IF NOT EXISTS `aayush_ppdonate_log` (
			  `donation_log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
			  `donation_id` int(10) unsigned NOT NULL,
			  `processor` varchar(25) NOT NULL,
			  `transaction_id` varchar(50) NOT NULL,
			  `transaction_type` enum('payment','cancel','info','error') NOT NULL,
			  `message` varchar(255) NOT NULL DEFAULT '',
			  `transaction_details` mediumblob NOT NULL,
			  `log_date` int(10) unsigned NOT NULL DEFAULT '0',
			  PRIMARY KEY (`donation_log_id`),
			  KEY `transaction_id` (`transaction_id`),
			  KEY `log_date` (`log_date`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8
		";

		return $tables;
	}

	public static function getData()
	{
		$data = array();

		$data['xf_content_type'] = "
            INSERT IGNORE INTO xf_content_type
                (content_type, addon_id, fields)
            VALUES
                ('donation', 'paypalDonate', '')
        ";

        $data['xf_content_type_field'] = "
            INSERT IGNORE INTO xf_content_type_field
                (content_type, field_name, field_value)
            VALUES
                ('donation', 'alert_handler_class', 'Aayush_PaypalDonate_AlertHandler_Donation')
        ";

		return $data;
	}

	public static function getAlters()
	{
		$alters = array();

		return $alters;
	}

	public static function applyPermissionDefaults($previousVersion)
	{
		if (!$previousVersion)
		{
			self::applyGlobalPermission('general', 'canDonate', 'forum', 'postReply');
			self::applyGlobalPermission('general', 'canViewDonationList', 'general', 'editBasicProfile');
		}
	}

	public static function applyGlobalPermission($applyGroupId, $applyPermissionId, $dependGroupId = null, $dependPermissionId = null)
	{
		$db = XenForo_Application::getDb();

		XenForo_Db::beginTransaction($db);

		if ($dependGroupId && $dependPermissionId)
		{
			$db->query("
				INSERT IGNORE INTO xf_permission_entry
					(user_group_id, user_id, permission_group_id, permission_id, permission_value, permission_value_int)
				SELECT user_group_id, user_id, ?, ?, 'allow', 0
				FROM xf_permission_entry
				WHERE permission_group_id = ?
					AND permission_id = ?
					AND permission_value = 'allow'
			", array($applyGroupId, $applyPermissionId, $dependGroupId, $dependPermissionId));
		}
		else
		{
			$db->query("
				INSERT IGNORE INTO xf_permission_entry
					(user_group_id, user_id, permission_group_id, permission_id, permission_value, permission_value_int)
				SELECT DISTINCT user_group_id, user_id, ?, ?, 'allow', 0
				FROM xf_permission_entry
			", array($applyGroupId, $applyPermissionId));
		}

		XenForo_Db::commit($db);
	}
}