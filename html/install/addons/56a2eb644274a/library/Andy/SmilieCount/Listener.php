<?php

class Andy_SmilieCount_Listener
{	
	public static function loadClassDatawriter($class, array &$extend)
	{
		$extend[] = 'Andy_SmilieCount_DataWriter';
	} 
}