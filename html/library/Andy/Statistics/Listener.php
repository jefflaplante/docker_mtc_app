<?php

class Andy_Statistics_Listener
{
	public static function Forum($class, array &$extend)
	{
		$extend[] = 'Andy_Statistics_ControllerPublic_Forum';
	}	
}