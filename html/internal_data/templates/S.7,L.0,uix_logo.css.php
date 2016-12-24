<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '#logoBlock .pageContent {
	' . XenForo_Template_Helper_Core::styleProperty('uix_logoBlock_style') . '
}



.hasFlexbox #logoBlock ' . ((XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1) ? ('.pageWidth') : ('.pageContent')) . ' {
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	
	-ms-flex-pack: justify;
	-webkit-justify-content: space-between;
	justify-content: space-between;
	
	-ms-flex-align: center;
	-webkit-align-items: center;
	align-items: center;
}




.hasFlexbox #logoBlock ' . ((XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1) ? ('.pageWidth') : ('.pageContent')) . ':after { display: none; }


.hasFlexbox #logoBlock .pageContent span.helper { display: none; }


';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoWidth'))
{
$__output .= '
	#logo img {
		max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_logoWidth') . ';
		 width: 100%;
	}
';
}
$__output .= '

';
if ((XenForo_Template_Helper_Core::styleProperty('uix_navigationStickyLogo') && XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) || XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2)
{
$__output .= '
	#logo_small {
		float: left;
		display: none;
	}
	
	.activeSmallLogo #logo_small {
		display: block;
	}
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2)
{
$__output .= '
		#logo_small { display: block; }
	';
}
$__output .= '
	
	#logo_small a {
		display: block;
		height: ' . XenForo_Template_Helper_Core::styleProperty('headerTabHeight') . ';
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('headerTabHeight') . ';
		padding: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
		
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	
	.activeSticky #logo_small a {
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigationHeight') . ';
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigationHeight') . ';
	}
	
	#logo_small a:hover {
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_navLinkHover.color') . ';
	}
	
	#logo_small img {
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_navigationLogoWidth'))
{
$__output .= 'width: ' . XenForo_Template_Helper_Core::styleProperty('uix_navigationLogoWidth') . ';';
}
$__output .= '
		display: inline-block;
		vertical-align: top;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
	}	
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__output .= '
/* Styling text based logo */
.uix_textLogo {
	' . XenForo_Template_Helper_Core::styleProperty('uix_textLogo') . '
}
#logo a, #logo_small a {
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
	display: block;
	text-decoration: none;
}
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__output .= '
	#logo .uix_icon,
	#navigation .uix_textLogo .uix_icon 
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIconStyle') . '
	}
';
}
$__output .= '



';
if (XenForo_Template_Helper_Core::styleProperty('uix_sloganText'))
{
$__output .= '
	#logoBlock .pageWidth 
	{
		position: relative;
	}
	.uix_slogan 
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_slogan') . '
	}
	.uix_slogan:hover 
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_sloganHover') . '	
	}
	
	@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ')
	{
		.Responsive .uix_slogan {display: none;}
	}
	
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_widthToCenterLogo') != ('100%'))
{
$__output .= '
	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_widthToCenterLogo') . ')
	{
		.Responsive.hasFlexbox #logoBlock ' . ((XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1) ? ('.pageWidth') : ('.pageContent')) . ' {
			-ms-flex-wrap: wrap;
			-webkit-flex-wrap: wrap;
			flex-wrap: wrap;
		}
		
		.Responsive.hasFlexbox #logoBlock ' . ((XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1) ? ('.pageWidth') : ('.pageContent')) . ' > * {
			-ms-flex: 0 1 100%;
			-webkit-flex: 0 1 100%;
			flex: 0 1 100%;
		}
	
		.Responsive #logo {
			float: none;
			text-align: center;
		}
		
		.Responsive .uix_slogan {
			display: none;
		}		
	}

';
}
else
{
$__output .= '

	.hasFlexbox #logoBlock ' . ((XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1) ? ('.pageWidth') : ('.pageContent')) . ' {
		-ms-flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
		flex-wrap: wrap;
	}
	
	.hasFlexbox #logoBlock ' . ((XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1) ? ('.pageWidth') : ('.pageContent')) . ' > * {
		-ms-flex: 0 1 100%;
		-webkit-flex: 0 1 100%;
		flex: 0 1 100%;
	}

	#logo {
		float: none;
		text-align: center;
	}
	.uix_slogan {
		display: none;
	}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__output .= '

	' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '#logoBlock .pageWidth'
)) . '
	
	#logoBlock .pageContent {
		border-left: none;
		border-right: none;
	}

';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__output .= '

	@media (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') + 1) . 'px) {
	
		#header > div#logoBlock {
			margin-bottom: 0;
			margin-top: 0;
		}
		
		
		
		#logoBlock .pageContent {
			position: relative;
			z-index: 53;
		}
		
		.hasFlexbox #logo {
			-ms-flex: 1 1 0%;
			-webkit-flex: 1 1 0%;
			flex: 1 1 0%;
		}
		
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoBlockWidth'))
{
$__output .= '
		#navigation .pageContent {
			margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('uix_logoBlockWidth') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth')) . 'px;
		}
		
		#logoBlock .pageContent {
			width: ' . XenForo_Template_Helper_Core::styleProperty('uix_logoBlockWidth') . ';
			float: left;
		}	
	';
}
else
{
$__output .= '
	
		#navigation .pageContent {
			margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth')) . 'px;
		}
		#logoBlock .pageContent {
			width: ' . XenForo_Template_Helper_Core::styleProperty('sidebar.width') . ';
			float: left;
		}
		
	';
}
$__output .= '
	
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= '
		#logo {
			line-height: ' . ($headerTabHeight_outer - 4) . 'px;
			*line-height: ' . htmlspecialchars($headerTabHeight_outer, ENT_QUOTES, 'UTF-8') . 'px;
			height: ' . htmlspecialchars($headerTabHeight_outer, ENT_QUOTES, 'UTF-8') . 'px;	
		}
		
		#logo img {
			max-height: ' . htmlspecialchars($headerTabHeight_outer, ENT_QUOTES, 'UTF-8') . 'px;
		}
		
	';
}
else
{
$__output .= '
		#logo {
			line-height: ' . ($headerTabHeight_outer + XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeight') - 4) . 'px;
			*line-height: ' . ($headerTabHeight_outer + XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeight')) . 'px;
			height: ' . ($headerTabHeight_outer + XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeight')) . 'px;	
		}
		
		#logo img {
			max-height: ' . ($headerTabHeight_outer + XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeight')) . 'px;	
		}
		
	';
}
$__output .= '	
		
	}
	
';
}
