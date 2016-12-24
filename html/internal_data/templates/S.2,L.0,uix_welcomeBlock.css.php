<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '#uix_welcomeBlock {
	
	-moz-transition: opacity 0.4s ease;
	-o-transition: opacity 0.4s ease;
	-webkit-transition: opacity 0.4s ease;
	transition: opacity 0.4s ease;
	
	opacity: 1;
	' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_style') . '
	padding: 0;
}

#uix_welcomeBlock .uix_welcomeBlockMessage a {
	' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_link') . ';
}
#uix_welcomeBlock .uix_welcomeBlockMessage a:hover {
	' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_linkHover') . ';
}

#uix_welcomeBlock .uix_welcomeBlock_content {
	position: relative;
	' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_style.padding') . '
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockIcon_class'))
{
$__output .= '
		padding-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockIcon_style.width') . ';
	';
}
else
{
$__output .= '
		padding-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
	';
}
$__output .= '
}

#uix_welcomeBlock a.close {
	display: none;
	position: absolute;
	top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	height: 24px;
	width: 24px;
	text-align:center;
}
#uix_welcomeBlock a.close:hover {cursor: pointer;}

#uix_welcomeBlock a.close:before {
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	font-size: 24px;
	content: "\\f00d";
}

#uix_welcomeBlock h3.uix_welcomeBlockHeader span {
	' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockHeader_style') . '

}

#uix_welcomeBlock .uix_welcomeBlockMessage {
	margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
}

#uix_welcomeBlock .uix_welcomeBlockHeader .uix_icon {
	' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockIcon_style') . '
	
	margin-left: -' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockIcon_style.width') . ';
}

#uix_welcomeBlock a.callToAction {margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_showWelcomeBlock_fixed'))
{
$__output .= '
	#uix_welcomeBlock.uix_welcomeBlock_fixed {	
		' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_fixed_style') . '
		
		background-color: ' . XenForo_Template_Helper_Core::callHelper('rgba', array(
'0' => XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_fixed_style.background-color'),
'1' => XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_fixed_opacity')
)) . ';
		z-index: 150;
		position: fixed;
		margin: 0;
		display: none;
	}

	#uix_welcomeBlock.uix_welcomeBlock_fixed h3.uix_welcomeBlockHeader {margin-right: 24px;}
	
	#uix_welcomeBlock.uix_welcomeBlock_fixed h3.uix_welcomeBlockHeader span {
		' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockHeader_fixed_style') . '
	
	}
	
	#uix_welcomeBlock.uix_welcomeBlock_fixed .uix_welcomeBlockHeader .uix_icon {
		' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockIcon_fixed_style') . '
	
	}
	#uix_welcomeBlock.uix_welcomeBlock_fixed .uix_welcomeBlockMessage {
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_fixed_style.color') . ';
	}
	#uix_welcomeBlock.uix_welcomeBlock_fixed a.close {
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_fixed_style.color') . ';
		display: block;
	}

';
}
$__output .= '


@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{

	.Responsive #uix_welcomeBlock.uix_welcomeBlock_fixed {
		width: auto;
		left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
		right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
		bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	}

}

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') 
{

	.Responsive #uix_welcomeBlock h3.uix_welcomeBlockHeader span 
	{
		line-height: 30px;
		margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	}
	.Responsive #uix_welcomeBlock a.callToAction 
	{
		min-width: 60%;
		text-align: center;
	}
	.Responsive #uix_welcomeBlock .uix_welcomeBlockHeader .uix_icon 
	{
		display: block;
		float: none;
		width: 100%;
		margin: 0;
	}
	.Responsive #uix_welcomeBlock .uix_welcomeBlock_wrap 
	{
		text-align: center;
	}
	.Responsive #uix_welcomeBlock .uix_welcomeBlock_content 
	{
		padding-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_style.padding-right') . ';
	}
	
}';
