<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '#QuickReply #BookMarkOverlayTrigger
{
 float: left;
 margin-top: ' . (floor(XenForo_Template_Helper_Core::styleProperty('button.border-top-width') + (31 - XenForo_Template_Helper_Core::styleProperty('button.height')) / 2)) . 'px;
}
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
	.Responsive #QuickReply #BookMarkOverlayTrigger
	{
		float: right;
		margin-left: 3px;
	}
}
';
}
