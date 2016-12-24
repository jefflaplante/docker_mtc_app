<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
{
	.conversationTabs .tabs
	{
		padding-right: 10px;
	}

	.conversationTabs .addLink
	{
		position: static;
		float: right;
	}
}
';
}
