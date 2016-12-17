<?php
class Brivium_ThreadLiveUpdate_Installer extends Brivium_BriviumHelper_Installer
{
	protected $_installerType = 2;

	public static function install($existingAddOn, $addOnData)
	{
		self::$_addOnInstaller = __CLASS__;
		if (self::$_addOnInstaller && class_exists( self::$_addOnInstaller))
		{
			$installer = self::create( self::$_addOnInstaller);
			$installer->installAddOn( $existingAddOn, $addOnData);
		}
		return true;
	}

	public static function uninstall($addOnData)
	{
		self::$_addOnInstaller = __CLASS__;
		if (self::$_addOnInstaller && class_exists( self::$_addOnInstaller))
		{
			$installer = self::create( self::$_addOnInstaller);
			$installer->uninstallAddOn( $addOnData);
		}
	}

	public function getTables()
	{
		$tables = array();
		/*
		 * put list create tables here (include IF NOT EXISTS , remove AUTO_INCREMENT) $tables["table_name"] = "";
		 */
		return $tables;
	}

	public function getData()
	{
		$data = array();
		/*
		 * put list data $data["table_name"] = "";
		 */
		return $data;
	}

	public function getAlters()
	{
		$alters = array();
		
		$alters['xf_user'] = array(
			'br_thread_update' => "tinyint(3) UNSIGNED NOT NULL DEFAULT  '1'",
			'br_post_jump' => "tinyint(3) UNSIGNED NOT NULL DEFAULT  '1'"
		);
		
		return $alters;
	}

	public function getQueryBeforeTable()
	{
		$query = array();
		/*
		 * put list query $query[] = "";
		 */
		return $query;
	}

	public function getQueryBeforeAlter()
	{
		$query = array();
		/*
		 * put list query $query[] = "";
		 */
		return $query;
	}

	public function getQueryBeforeData()
	{
		$query = array();
		/*
		 * put list query $query[] = "";
		 */
		return $query;
	}

	public function getQueryFinal()
	{
		$query = array();
		if ($this->_triggerType != "uninstall")
		{
			$query[] = "
				REPLACE INTO `xf_brivium_listener_class` (`class`, `class_extend`, `event_id`, `addon_id`) VALUES
				('XenForo_ControllerPublic_Thread', 'Brivium_ThreadLiveUpdate_ControllerPublic_Thread', 'load_class_controller', 'Brivium_ThreadLiveUpdate'),
				('XenForo_DataWriter_User', 'Brivium_ThreadLiveUpdate_DataWriter_User', 'load_class_datawriter', 'Brivium_ThreadLiveUpdate');
			";
		} else
		{
			$query[] = "
				DELETE FROM `xf_brivium_listener_class` WHERE `addon_id` = 'Brivium_ThreadLiveUpdate';
			";
		}
		return $query;
	}
}

?>