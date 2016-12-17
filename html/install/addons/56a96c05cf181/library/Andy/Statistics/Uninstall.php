<?php

class Andy_Statistics_Uninstall
{
    public static function uninstall()
    {
        $db = XenForo_Application::get('db');
		
		try
		{		
			$db->query("
				DROP TABLE xf_statistics
			");
		}
		catch (Zend_Db_Exception $e) {}	
    }
}