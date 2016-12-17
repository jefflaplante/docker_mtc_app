<?php

class Andy_Statistics_Install
{
    public static function install()
    {
        $db = XenForo_Application::get('db');		
		
		try
		{	
			$db->query("
				CREATE TABLE xf_statistics (
				field_id VARCHAR(32) NOT NULL, 
				field_value INT(10) UNSIGNED NOT NULL,
				PRIMARY KEY (field_id) 
				) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci
			");
		}
		catch (Zend_Db_Exception $e) {}
    }
}