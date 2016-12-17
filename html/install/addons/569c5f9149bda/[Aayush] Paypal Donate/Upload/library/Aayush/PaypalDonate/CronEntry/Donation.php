<?php

class Aayush_PaypalDonate_CronEntry_Donation
{
	public static function runDaily()
	{
		$endDate = intval(XenForo_Application::getSimpleCacheData('PD_EndDate'));

		if (!$endDate)
		{
			$endDate = self::_getEndDate();
			XenForo_Application::setSimpleCacheData('PD_EndDate', $endDate);
		}
		else
		{
			// check if day of the month is changed
			$oldDay = intval(date('j', $endDate));
			if ($oldDay != XenForo_Application::get('options')->PD_MonthDay)
			{
				$endDate = self::_getEndDate();
				XenForo_Application::setSimpleCacheData('PD_EndDate', $endDate);
			}
		}
		
		if (XenForo_Application::$time >= $endDate)
		{
			$endDate = self::_getEndDate();
			XenForo_Application::setSimpleCacheData('PD_EndDate', $endDate);

			// Reset Variables
			XenForo_Application::setSimpleCacheData('donationReceived', 0);
			XenForo_Application::setSimpleCacheData('PD_StartDate', XenForo_Application::$time);
		}

		XenForo_Application::get('db')->delete('aayush_ppdonate', "confirmed = 0 AND dateline < " . (XenForo_Application::$time - 2678400));
	}

	protected static function _getEndDate()
	{
		$m = intval(date('n', XenForo_Application::$time));
		$d = intval(date('j', XenForo_Application::$time));
		$y = intval(date('Y', XenForo_Application::$time));

		if ($d < XenForo_Application::get('options')->PD_MonthDay)
		{
			$nm = $m;
		}
		else
		{
			$nm = $m + 1;
			if ($nm > 12)
			{
				$nm = 1;
				$y++;
			}
		}

		return mktime(0, 0, 0, $nm, XenForo_Application::get('options')->PD_MonthDay, $y);
	}
}