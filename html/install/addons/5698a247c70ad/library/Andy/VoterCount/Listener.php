<?php

class Andy_VoterCount_Listener
{
	public static function Thread($class, array &$extend)
	{
		$extend[] = 'Andy_VoterCount_ControllerPublic_Thread';
	}
}