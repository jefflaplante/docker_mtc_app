<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '



#userBar .navTabs {
	' . XenForo_Template_Helper_Core::styleProperty('uix_userBar_style') . '
	height: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarHeight') . ';
}

#userBar .navTabs .navLink,
#userBar .navTabs .SplitCtrl {
	' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink') . '
}

#userBar .navTabs .navTab.selected .navLink {
	' . XenForo_Template_Helper_Core::styleProperty('uix_userBarSelectedLink') . '
}


	
	
	#userBar .navTabs .navTab:hover,
	#userBar .navTabs .navTab.PopupClosed:hover {
		' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLinkHover') . '
	}

	#userBar .navTabs .navTab:hover .navLink,
	#userBar .navTabs .navTab.PopupClosed:hover .navLink,
	#userBar .navTabs .navTab.PopupClosed:hover .SplitCtrl { color: inherit; }


	
	
	#userBar .navTabs .navTab.Popup.PopupOpen,
	#userBar .navTabs .navTab.selected.PopupOpen .navLink {
		' . XenForo_Template_Helper_Core::styleProperty('uix_userBarNavTabOpen') . ';
	}
	
	#userBar .navTabs .navTab.Popup.PopupOpen .navLink,
	#userBar .navTabs .navTab.Popup.PopupOpen .SplitCtrl { color: inherit; }


	

	#userBar .navTabs .navTab.selected .navLink, 
	#userBar .navTabs .navTab.PopupClosed.selected .navLink,
	#userBar .navTabs .navTab.PopupClosed.selected .SplitCtrl { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarSelectedLink.color') . '; }





#userBar .navTabs .navLink .itemCount 
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_userBarAlertBalloon') . ';
}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_inlineAlertBalloon_userBar'))
{
$__output .= '
	#userBar .navTabs .navLink
	{
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	#userBar .navTabs .navLink .itemCount 
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_inlineAlertBalloon_style') . '
	}
	#userBar .navTabs .navLink .itemCount .arrow {display: none;}
	
';
}
$__output .= '

#userBar .navTabs .navLink .itemCount.alert
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_moderatorTabsAlert') . '
}
#userBar .navTabs .navLink .itemCount .arrow
{
	border-top-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarAlertBalloon.background-color') . ';
}
#userBar .navTabs .navLink .itemCount.alert .arrow
{
	border-top-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_moderatorTabsAlert.background-color') . ';
}

';
if ((XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2) && (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1))
{
$__output .= '
	#userBar {margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('100%'))
{
$__output .= '
	.moderatorTabs .navTab.admin.Popup
	{
		display: none;
	}

	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') . ')
	{
		.Responsive .moderatorTabs .navTab
		{
			display: none;
		}
		.Responsive .moderatorTabs .navTab.admin.Popup
		{
			display: inline-block;
		}
	}
';
}
$__output .= '


.uix_userbarRenderFix {
	display: inherit;
}';
