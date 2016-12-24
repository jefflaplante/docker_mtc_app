<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.donationListItem
{
	' . XenForo_Template_Helper_Core::styleProperty('memberListItem') . '
}

	.donationListItem .avatar	
	{
		' . XenForo_Template_Helper_Core::styleProperty('memberListItemAvatar') . '
	}
	
	.donationListItem .donationInfo
	{
		' . XenForo_Template_Helper_Core::styleProperty('memberListItemMember') . '
	}
	
	.donationListItem a.username
	{
		' . XenForo_Template_Helper_Core::styleProperty('memberListItemUsername') . '
		
		font-weight: normal;
	}
	
	.donationListItem .username.guest
	{
		' . XenForo_Template_Helper_Core::styleProperty('memberListItemGuest') . '
	}
	
	.donationListItem .userInfo
	{
		' . XenForo_Template_Helper_Core::styleProperty('memberListItemUserInfo') . '
	}';
