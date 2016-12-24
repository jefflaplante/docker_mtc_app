<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '#InlineModOverlay {
	border-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ';
	box-shadow: 2px 4px 15px -5px rgba(0,0,0,.2);
}

.xenPreviewTooltip .previewContent {
	background: none;
}

.xenOverlay table.dataTable {background: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightest') . '; margin: 0;}

.xenOverlay .xenForm {max-width: none;}

.xenOverlay.lightBox #LbUpper, .xenOverlay.lightBox #LbLower {
background-color: rgba(0,0,0,.75) !important;
}
.xenOverlay a.close 
{
	right: ' . XenForo_Template_Helper_Core::styleProperty('memberCardBox.padding-right') . ';
	top: ' . XenForo_Template_Helper_Core::styleProperty('memberCardBox.padding-top') . ';
	width: 24px;
	height: 24px;
	color: inherit;
}
.xenOverlay a.close:before 
{
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	font-size: inherit;
	content: "\\f00d";
}
a.fbLogin span {color: #FFF;}

.xenOverlay h2.heading span.prefix.prefixPrimary {
	color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . ';
	padding: 0 4px;
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';
}

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') 
{
	.Responsive .xenOverlay .formOverlay,
	.Responsive .xenOverlay .section,
	.Responsive .xenOverlay .sectionMain
	{
		border-radius: ' . XenForo_Template_Helper_Core::styleProperty('formOverlay.border-radius') . ';
		border-width: ' . XenForo_Template_Helper_Core::styleProperty('formOverlay.border-width') . ';
	}
}';
