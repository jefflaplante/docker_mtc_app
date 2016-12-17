<?php

class bdPushover_Installer
{
	/* Start auto-generated lines of code. Change made will be overwriten... */

	protected static $_tables = array('push_queue' => array(
			'createQuery' => 'CREATE TABLE IF NOT EXISTS `xf_bdpushover_push_queue` (
				`push_queue_id` INT(10) UNSIGNED AUTO_INCREMENT
				,`alerted_user_id` INT(10) UNSIGNED NOT NULL
				,`queue_data` MEDIUMBLOB NOT NULL
				,`queue_date` INT(10) UNSIGNED NOT NULL
				, PRIMARY KEY (`push_queue_id`)
				
			) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;',
			'dropQuery' => 'DROP TABLE IF EXISTS `xf_bdpushover_push_queue`',
		), );
	protected static $_patches = array();

	public static function install($existingAddOn, $addOnData)
	{
		$db = XenForo_Application::get('db');

		foreach (self::$_tables as $table)
		{
			$db->query($table['createQuery']);
		}

		foreach (self::$_patches as $patch)
		{
			$tableExisted = $db->fetchOne($patch['showTablesQuery']);
			if (empty($tableExisted))
			{
				continue;
			}

			$existed = $db->fetchOne($patch['showColumnsQuery']);
			if (empty($existed))
			{
				$db->query($patch['alterTableAddColumnQuery']);
			}
		}

		self::installCustomized($existingAddOn, $addOnData);
	}

	public static function uninstall()
	{
		$db = XenForo_Application::get('db');

		foreach (self::$_patches as $patch)
		{
			$tableExisted = $db->fetchOne($patch['showTablesQuery']);
			if (empty($tableExisted))
			{
				continue;
			}

			$existed = $db->fetchOne($patch['showColumnsQuery']);
			if (!empty($existed))
			{
				$db->query($patch['alterTableDropColumnQuery']);
			}
		}

		foreach (self::$_tables as $table)
		{
			$db->query($table['dropQuery']);
		}

		self::uninstallCustomized();
	}

	/* End auto-generated lines of code. Feel free to make changes below */

	public static function installCustomized($existingAddOn, $addOnData)
	{
		if (XenForo_Application::$versionId < 1030000)
		{
			throw new XenForo_Exception('[bd] Pushover Integration requires XenForo 1.3.0 and above.');
		}

		$db = XenForo_Application::getDb();

		if ($db->fetchOne('SHOW COLUMNS FROM xf_bdpushover_push_queue WHERE Field = "alert_id"'))
		{
			$db->query('ALTER TABLE xf_bdpushover_push_queue CHANGE alert_id alerted_user_id INT(10) UNSIGNED NOT NULL');
		}

		$effectiveVersionId = 0;
		if (!empty($existingAddOn))
		{
			$effectiveVersionId = $existingAddOn['version_id'];
		}

		if ($effectiveVersionId < 1)
		{
			$db->query("
				INSERT IGNORE INTO xf_permission_entry
					(user_group_id, user_id, permission_group_id, permission_id, permission_value, permission_value_int)
				SELECT user_group_id, user_id, 'general', 'bdPushover_associate', permission_value, 0
				FROM xf_permission_entry
				WHERE permission_group_id = 'forum' AND permission_id = 'postThread'
			");
		}
	}

	public static function uninstallCustomized()
	{
		$db = XenForo_Application::getDb();

		$db->query("DELETE FROM xf_user_external_auth WHERE provider = 'bdpushover'");

		XenForo_Application::setSimpleCacheData('bdPushover_soundsCache', false);
	}

}
