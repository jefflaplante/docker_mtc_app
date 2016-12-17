<?php

class Aayush_PaypalDonate_Listener
{
	public static function navigationTabs(array &$extraTabs, $selectedTabId)
	{
		if (XenForo_Application::get('options')->PD_DonateLink)
		{
			$extraTabs['donations'] = array(
				'title'		=>	new XenForo_Phrase('donate'),
				'href'		=>  XenForo_Link::buildPublicLink('full:donate'),
				'selected'	=> ($selectedTabId == 'donations') ? true : false,
				'position'	=> 'end'
			);

			if (XenForo_Visitor::getInstance()->hasPermission('general', 'canViewDonationList'))
			{
				$extraTabs['donations']['linksTemplate'] = 'Aayush_PD_navlinks';
			}
		}
	}

	public static function visitorSetup(XenForo_Visitor &$visitor)
	{
		$visitor['canDonate'] = ($visitor->hasPermission('general', 'canDonate')) ? true : false;
	}

	
}