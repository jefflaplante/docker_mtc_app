<?php

class Borbole_EditAlert_Listener_Listener
{
	public static function controller($class, array &$extend)
	{
		if ($class == 'XenForo_ControllerPublic_Thread')
		{
			$extend[] = 'Borbole_EditAlert_ControllerPublic_Thread';
		}		
	
	    if ($class == 'XenForo_ControllerPublic_Post')
		{
			$extend[] = 'Borbole_EditAlert_ControllerPublic_Post';
		}	
	}
	
	
	
	public static function model($class, array &$extend)
	{
		if ($class == 'XenForo_Model_Thread')
		{
			$extend[] = 'Borbole_EditAlert_Model_EditAlert';
		}		
	}
}