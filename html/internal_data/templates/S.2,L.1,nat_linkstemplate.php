<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<ul class="secondaryContent blockLinksList">
	';
if ($nodeTab['nat_markread'] AND $visitor['user_id'] AND $selected)
{
$__output .= '
	<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>
	';
}
$__output .= '

	
	

	' . $childLinks . '
</ul>';
