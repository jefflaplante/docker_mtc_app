<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_adStylerOn'))
{
$__output .= '
	#styleit-wrapper .bgAuto {background-size: auto;}
	#styleit-wrapper .bgContain {background-size: contain;}
	
	.styleit-bgimage-options {width: 256px !important;}
	.styleit-bgimage-options > span:hover {-webkit-filter: brightness(.9) !important;}
	#styleit-wrapper {z-index: 99999;}
	#styleit-wrapper * {box-sizing: border-box;}
	.colorpicker {z-index: 999999 !important;}
	#styleit-wrapper .styleit-logo span {color: #ADCDEC;}
	#styleit-wrapper .styleit-section-title {font-size: 12px;}
	.footer .choosers.chooser_AdStyler a:after {content: "\\f043";}
	
	
	.uix_adStylerColorOptions
	{
		margin: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' 0;
		display: none;
	}
	.uix_adStylerColorOptions ul {display: table; width: 100%;}
	.uix_adStylerColorOptions ul li {display: table-cell; font-weight: bold; text-align: center;}
	.uix_adStylerColorOptions ul li a {box-shadow: inset 0 2px 0 rgba(0,0,0,.2);opacity: 0.85; display: block; padding: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . '; color: rgba(255,255,255,.85); text-shadow: 0 -1px 0 rgba(0,0,0,.3);}
	.uix_adStylerColorOptions ul li:first-child a {border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ' 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';}
	.uix_adStylerColorOptions ul li:last-child a {border-radius: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ' 0;}
	.uix_adStylerColorOptions ul li a:hover {opacity: 1; color: #FFF; text-decoration: none;}
	
	.footer .choosers a.uix_colorOptionsToggle {
		background-image: url(' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/uix/icon_color-swatch.png);
		background-position: 6px 50%;
		background-repeat: no-repeat;
		padding-left: 28px;
	}
	
';
}
