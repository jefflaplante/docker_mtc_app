<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.funbox
{
	overflow: hidden;
	margin: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' 0;
}

.funbox img {max-width: 100%;}
';
if (XenForo_Template_Helper_Core::styleProperty('uix_centerAds'))
{
$__output .= '.funbox {text-align: center;}';
}
$__output .= '





#logoBlock .funbox,
#logoBlock .funbox .section
{
	margin: 0;
}
#logoBlock .funbox .funboxWrapper
{
	vertical-align: middle;
	display: inline-block;
	line-height: normal;
}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_widthToCenterLogo') != ('100%'))
{
$__output .= '
		
	#logoBlock .funbox
	{
		float: right;
		line-height: ' . (XenForo_Template_Helper_Core::styleProperty('headerLogoHeight') - 4) . 'px;
		*line-height: ' . XenForo_Template_Helper_Core::styleProperty('headerLogoHeight') . ';
		height: ' . XenForo_Template_Helper_Core::styleProperty('headerLogoHeight') . ';
		margin-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
	}
	
	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_widthToCenterLogo') . ')
	{	
		.Responsive #logoBlock .funbox
		{
			height: auto;
			line-height: normal;
			text-align: center;
			float: none;
			margin-left: 0;
		}		
	}
';
}
else
{
$__output .= '			
	#logoBlock .funbox
	{
		height: auto;
		clear: both;
	}
	#logoBlock .funbox .funboxWrapper
	{
		float: none;
		text-align: center;
	}		
';
}
$__output .= '

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') 
{
	#logoBlock .funbox
	{
		margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
	}
}';
