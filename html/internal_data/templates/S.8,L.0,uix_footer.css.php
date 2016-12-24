<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.uix_icon.uix_widthToggle {
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.uix_icon.uix_widthToggle:before {
	content: \'\\f066\';
}

.uix_widthToggle_lower .uix_icon.uix_widthToggle:before {
	content: \'\\f065\';
}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpToTopFixed') || XenForo_Template_Helper_Core::styleProperty('uix_jumpToBottomFixed'))
{
$__output .= '
#uix_jumpToFixed
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_jumpToFixed_style') . '
	padding: 0;
}

#uix_jumpToFixed a {
	color: inherit;
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpTo_stacked'))
{
$__output .= '
		display: block; 
	';
}
else
{
$__output .= '
		display: inline-block;
	';
}
$__output .= '
	' . XenForo_Template_Helper_Core::styleProperty('uix_jumpToFixed_style.padding') . '
	}
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpTo_stacked'))
{
$__output .= '
		#uix_jumpToFixed a:first-child {padding-bottom: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;}
		#uix_jumpToFixed a:last-child {padding-top: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;}
	';
}
else
{
$__output .= '
		#uix_jumpToFixed a:first-child {padding-right: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;}
		#uix_jumpToFixed a:last-child {padding-left: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;}
	';
}
$__output .= '
	
#uix_jumpToFixed:hover {opacity: 1;} 
';
}
$__output .= '
.footerLinks a.globalFeed {
	' . XenForo_Template_Helper_Core::styleProperty('nodeTinyIcon') . '
	opacity: 1;
	vertical-align: middle;
	display: inline-block;
	
}

#copyright {text-align: left; color: inherit;}

' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.footer .pageContent'
)) . '

#legal {clear: right;}
.footerLegal .pageContent {
	clear:both;
	' . XenForo_Template_Helper_Core::styleProperty('uix_footerLegal_style') . '
}

.debugInfo {float: left; clear: both;}


.footer .choosers dd {margin-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';}
.footer .choosers dd:last-child {margin-right: 0;}

.footer .choosers a:after 
{
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	content: "\\f0d7";
	font-size: 12px;
	margin-left: 4px;
}

.footer .choosers.chooser_widthToggle a:after {display: none;}

.footer .choosers a {
	' . XenForo_Template_Helper_Core::styleProperty('uix_footerChoosers') . '
}
.footer .choosers a:hover {
	' . XenForo_Template_Helper_Core::styleProperty('uix_footerChoosersHover') . '
}

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ')
{
	.Responsive .footerLegal .uix_socialMediaLinks {float: none; margin: 0; text-align: center;}
	.Responsive #copyright, .Responsive #legal, .Responsive .debugInfo {float: none; display: block;}
	.Responsive #legal li {display: inline-block;float:none}
	.Responsive #copyright {margin: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ' 0;display:block;text-align:center;}	
}
';
if (XenForo_Template_Helper_Core::styleProperty('uix_centerFooterLinks'))
{
$__output .= '
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_centerFooterLinks') != ('100%'))
{
$__output .= '
	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_centerFooterLinks') . ')
	{
	';
}
$__output .= '
		.Responsive .footer .pageContent {text-align: center;height: auto;}
		.Responsive .footer .choosers {display: inline-block; padding: 0 ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px; float: none; vertical-align: middle; text-align: center;}
		.Responsive .footer .choosers dd {margin: 0 4px; text-align: center;}
		.Responsive .footerLinks {float: none; padding: 0;}
		.Responsive .footerLinks li {display: inline-block; float: none !important;}
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_centerFooterLinks') != ('100%'))
{
$__output .= '
	}
	';
}
$__output .= '
';
}
