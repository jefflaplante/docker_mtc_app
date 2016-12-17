<?php

class Aayush_PaypalDonate_Helper
{
	public static function getDonationReceived()
	{
		$donationReceived = XenForo_Application::getSimpleCacheData('donationReceived'); 
		if (!$donationReceived)
		{
			return 0;
		}

		return $donationReceived;
	}
}