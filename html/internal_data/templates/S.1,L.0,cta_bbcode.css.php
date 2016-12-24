<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.ctaBbcodeContainer
{
	width: auto;
	max-height: 600px;
	overflow: auto;
}

.ctaBbcodeTable
{
	border: 0;
	font-size: 0.85em;
}

.ctaBbcodeTable tr.ctaBbcodeTableRowTransparent
{
	
}

.ctaBbcodeTable tr.ctaBbcodeTableRowOdd
{
	background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightest') . ';
}

.ctaBbcodeTable tr.ctaBbcodeTableRowEven
{
	background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
}

.ctaBbcodeTable tr:hover
{
	background-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLightest') . ';
}

.ctaBbcodeTable td
{
	border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLight') . ';
	padding: 1px 4px;
}

.ctaBbcodeTable td.ctaBbcodeTableCellHeader
{
	border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLightish') . ';
	text-align: center;
	font-weight: bold;
	background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . ';
}

.ctaBbcodeTable td.ctaBbcodeTableCellLeft
{
	
}

.ctaBbcodeTable td.ctaBbcodeTableCellCentred
{
	text-align: center;
}

.ctaBbcodeTable td.ctaBbcodeTableCellRight
{
	text-align: right;
}';
