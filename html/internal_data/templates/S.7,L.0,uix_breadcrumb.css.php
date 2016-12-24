<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.breadcrumb 
{
	height: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') . ';
}

.breadBoxTop,
.breadBoxBottom
{
	margin: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' 0;
	' . XenForo_Template_Helper_Core::styleProperty('breadBox.margin') . '
}
.breadcrumb .crust a.crumb,
.breadcrumb .crust .arrow,
.breadcrumb .crust.placeholder .arrow,
.breadcrumb .jumpMenuTrigger
{
	line-height: ' . (XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') - (XenForo_Template_Helper_Core::styleProperty('breadcrumb.border-top-width') + XenForo_Template_Helper_Core::styleProperty('breadcrumb.border-bottom-width'))) . 'px;
}

.breadcrumb .uix_icon-home 
{
	font-size: 16px;
} 
.breadBoxTop a.callToAction 
{
	height: auto;
	line-height: inherit;
}

.breadcrumb .crust .arrow, .breadcrumb .crust .arrow span 
{
	border-top-width: ' . (XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') / 2) . 'px;
	border-bottom-width: ' . (XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') / 2) . 'px;
}
.breadcrumb .crust .arrow span 
{
	top: -' . (XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') / 2) . 'px;
}


';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators'))
{
$__output .= '
	.breadcrumb .crust a.crumb
	{
		float: left;
	}
	.breadcrumb .crust .arrow
	{
		position: static;
		display: block;
		float: left;
		border: none;
		height: auto;
		width: auto;
	}
	.breadcrumb .crust:last-child .arrow {
		display: none;
	}
	.breadcrumb .crust.placeholder .arrow span
	{
		display: none;
	}
';
}
$__output .= '

.uix_breadCrumb_toggleList 
{
	float: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('left') : ('right')) . ';
}
.uix_breadCrumb_toggleList li.toggleList_item 
{
	float: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('right') : ('left')) . ';
	margin-' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('right') : ('left')) . ': ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	
	height: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') . ';
	line-height: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') . ';
	
	box-sizing: border-box;
	
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.border') . '
	
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.background') . '
}
.uix_breadCrumb_toggleList .toggleList_item a
{
	display: block; 
	text-align: center; 
	padding: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb.color') . ';
	text-decoration: none;
	
}
.uix_breadCrumb_toggleList .toggleList_item a:hover {
	color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumbHover.color') . ';
}
.uix_breadCrumb_toggleList .toggleList_item a .uix_icon {font-size: 14px;}';
