<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '

';
if ($canvasLocation == 0)
{
$__output .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__output .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__output .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__output .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__output .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__output .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__output .= '
	';
}
else
{
$__output .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__output .= '
	';
}
$__output .= '
	
';
}
else if ($canvasLocation == 1)
{
$__output .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__output .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__output .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__output .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__output .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__output .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__output .= '
	';
}
else
{
$__output .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__output .= '
	';
}
$__output .= '
	
';
}
$__output .= '







';
if ($canvasType == ('visitor'))
{
$__output .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($canvasLocation) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__output .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__output .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__output .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__output .= '
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="uix_VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
			</strong>
	</a></li>
	
';
}
else if ($canvasType == ('navigation') || $canvasType == ('custom'))
{
$__output .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($canvasLocation) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__output .= '
			';
if (!$canvasLocation)
{
$__output .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__output .= '
			';
if ($canvasLocation)
{
$__output .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__output .= '
		';
}
else
{
$__output .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__output .= '</a>
	</li>

';
}
