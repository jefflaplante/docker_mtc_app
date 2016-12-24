<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.note
{
}

.tag
{
	width: 160px !important;
}

.errorPanel
{
	margin: 10px 0 20px;
	color: rgb(180,0,0);
	background: rgb(255, 235, 235);
	border-radius: 5px;
	border: 1px solid rgb(180,0,0);
	display:none;
}

	.errorPanel .errorHeading
	{
		margin: .75em;
		font-weight: bold;
		font-size: 12pt;
	}
	
	.errorPanel .errors
	{
		margin: .75em 2em;
		display: block;
		line-height: 1.5;
	}

.optionExplain
{
	font-size: 11px;
	color: rgb(170,170,170);
	margin-top: 2px;
	margin-right: ' . XenForo_Template_Helper_Core::styleProperty('ctrlUnitEdgeSpacer') . ';
}

.titleExplain
{
	color: rgb(170,170,170);
}

.popupLocation
{
	position: absolute;
}

.tagsMenu
{
	z-index: 10000;
}

.tagsMenuTitle
{
	background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightest') . ';
	border-radius: 4px;
	color: ' . XenForo_Template_Helper_Core::styleProperty('textCtrlText') . ' !important;
}

.tagsMenuList
{
}

.tagsMenuList a
{
}

.tagsMenuList a:hover
{
}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (min-width:481px)
{
	.Responsive .popupLocation
	{
		top: 1px;
	}
}
';
}
