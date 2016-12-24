<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.nodeStats dl, .subForumsPopup { margin-right: 7px; }

';
if (!(XenForo_Template_Helper_Core::styleProperty('uix_detachedNavigation') || XenForo_Template_Helper_Core::styleProperty('uix_removeContentWrapper')))
{
$__output .= '	
	#content > .pageWidth > .pageContent 
	{
		border-top: 0;	
	}
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__output .= '

	.footer .pageContent {
		margin-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
		border-top: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('footer.border-color') . ';
	}
	
';
}
