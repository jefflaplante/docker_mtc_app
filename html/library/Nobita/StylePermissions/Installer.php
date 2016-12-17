<?php
class Nobita_StylePermissions_Installer
{
	protected static $_tables = array();
	protected static $_patches = array(
		array(
			'table' => 'xf_style',
			'field' => 'style_permissions',
			'showTablesQuery' => 'SHOW TABLES LIKE \'xf_style\'',
			'showColumnsQuery' => 'SHOW COLUMNS FROM `xf_style` LIKE \'style_permissions\'',
			'alterTableAddColumnQuery' => 'ALTER TABLE `xf_style` ADD COLUMN `style_permissions` BLOB DEFAULT NULL',
			'alterTableDropColumnQuery' => 'ALTER TABLE `xf_style` DROP COLUMN `style_permissions`'
		)
	);

	public static function install() {
		$db = XenForo_Application::get('db');

		if(!empty(self::$_tables))
		{
			foreach (self::$_tables as $table) {
				$db->query($table['createQuery']);
			}
		}
		
		foreach (self::$_patches as $patch) {
			$tableExisted = $db->fetchOne($patch['showTablesQuery']);
			if (empty($tableExisted)) {
				continue;
			}
			
			$existed = $db->fetchOne($patch['showColumnsQuery']);
			if (empty($existed)) {
				$db->query($patch['alterTableAddColumnQuery']);
			}
		}
		
		self::installCustomized();
	}
	
	public static function uninstall() {
		$db = XenForo_Application::get('db');
		
		foreach (self::$_patches as $patch) {
			$tableExisted = $db->fetchOne($patch['showTablesQuery']);
			if (empty($tableExisted)) {
				continue;
			}
			
			$existed = $db->fetchOne($patch['showColumnsQuery']);
			if (!empty($existed)) {
				$db->query($patch['alterTableDropColumnQuery']);
			}
		}
		
		if(!empty(self::$_tables))
		{
			foreach (self::$_tables as $table) {
				$db->query($table['dropQuery']);
			}
		}
		
		self::uninstallCustomized();
	}
	
	private static function installCustomized() {
		// customize here
	}
	
	private static function uninstallCustomized() {
		// customize here
	}
}