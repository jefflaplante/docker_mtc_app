<?php

class bdPushover_Helper_Serialization
{
	public static function makeArraySafe(array $array)
	{
		foreach (array_keys($array) as $key)
		{
			if (is_object($array[$key]))
			{
				unset($array[$key]);
			}
			elseif (is_array($array[$key]))
			{
				$array[$key] = self::makeArraySafe($array[$key]);
			}
		}

		return $array;
	}

}
