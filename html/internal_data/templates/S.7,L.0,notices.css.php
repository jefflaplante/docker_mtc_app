<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.hasJs .FloatingContainer .Notice
{
	display: none;
}

.FloatingContainer
{
	position: fixed;
	width: 300px;
	z-index: 9997;
	top: auto;
	left: auto;
	bottom: 0;
	right: 20px;
}

.Notices .Notice .blockImage
{
	padding: 10px 0 5px 10px;
}

.Notices .Notice .blockImage,
.FloatingContainer .floatingImage
{
	float: left;
}

.Notices .Notice .blockImage img,
.FloatingContainer .floatingImage img
{
	max-width: 48px;
	max-height: 48px;
}

.Notices .hasImage,
.FloatingContainer .hasImage
{
	margin-left: 64px;
	min-height: 52px;
}

.FloatingContainer .floatingItem
{
	display: block;
	padding: 10px;
	font-size: 11px;
	position: relative;
	margin-bottom: 20px;
	border: 1px solid transparent;
	border-radius: 6px;
	box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
}

.FloatingContainer .floatingItem.primary
{
	' . XenForo_Template_Helper_Core::styleProperty('secondaryContent.background') . '
	border-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . ';
}

.FloatingContainer .floatingItem.secondary
{
	color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryDark') . ';
	background-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLight') . ';
	border-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLighter') . ';
}

.FloatingContainer .floatingItem.dark
{
	color: #fff;
	background: black;
	background: rgba(0,0,0, 0.8);
	border-color: #333;
}

.FloatingContainer .floatingItem.light
{
	color: #000;
	background: white;
	background: rgba(255,255,255, 0.8);
	border-color: #ddd;
}

.FloatingContainer .floatingItem .title
{
	font-size: 14px;
	padding-bottom: 5px;
	font-weight: bold;
	display: block;
}

.FloatingContainer .floatingItem .DismissCtrl
{
	position: static;
	float: right;
	margin-left: 5px;
	margin-right: -5px;
	margin-top: -5px;
}

.Notices
{
	display: none;
}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
	@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ')
	{
		.Responsive .Notice.wide { display: none !important; }
	}
	
	@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
	{
		.Responsive .Notice.medium { display: none !important; }
	}
	
	@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
	{
		.Responsive .Notice.narrow { display: none !important; }
		
		.Responsive .FloatingContainer
		{
			right: 50%;
			margin-right: -150px;
		}
	}
';
}
