<?php

class Andy_ChangeDate_Listener
{
	public static function Post($class, array &$extend)
	{
		$extend[] = 'Andy_ChangeDate_ControllerPublic_Post';
	}
}