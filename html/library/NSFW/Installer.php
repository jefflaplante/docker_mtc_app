<?php
class NSFW_Installer {

	/* Start auto-generated lines of code. Change made will be overwriten... */

	protected static $_tables = array();
	protected static $_patches = array(
		array(
			'table' => 'xf_user',
			'field' => 'nsfw_options',
			'showColumnsQuery' => 'SHOW COLUMNS FROM `xf_user` LIKE \'nsfw_options\'',
			'alterTableAddColumnQuery' => 'ALTER TABLE `xf_user` ADD COLUMN `nsfw_options` MEDIUMBLOB',
			'alterTableDropColumnQuery' => false
		)
	);

	public static function install() {
		$db = XenForo_Application::get('db');

		foreach (self::$_tables as $table) {
			$db->query($table['createQuery']);
		}
		
		foreach (self::$_patches as $patch) {
			$existed = $db->fetchOne($patch['showColumnsQuery']);
			if (empty($existed)) {
				$db->query($patch['alterTableAddColumnQuery']);
			}
		}
		
		self::installCustomized();
	}
	
	public static function uninstall() {
		// TODO
		
		self::uninstallCustomized();
	}

	/* End auto-generated lines of code. Feel free to make changes below */
	
	private static function installCustomized() {
		// customized install script goes here
	}
	
	private static function uninstallCustomized() {
		// customized uninstall script goes here
	}
	
}