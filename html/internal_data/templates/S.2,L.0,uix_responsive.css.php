<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') > 100)
{
$__output .= '

	/******* ADD PAGE MARGIN WHEN VIEWPORT APPROACHES PAGE WIDTH *******/
	
		@media screen and 
		(max-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') + (2 * XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth'))) . 'px) and 
		(min-width: ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') + 1) . 'px ) {
		
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 2)
{
$__output .= '
				#uix_wrapper,
				#uix_wrapper .activeSticky .pageWidth {
					margin-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
					margin-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
				}
			';
}
else
{
$__output .= '
				.pageWidth {
					margin-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
					margin-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
				}
			';
}
$__output .= '
		}

';
}
$__output .= '







';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') <= 100)
{
$__output .= '

	/******* ADD PAGE MARGIN *******/

		@media screen and
		
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') != ('') && XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') != ('100%'))
{
$__output .= '
		(max-width: 1024px) and	
		';
}
$__output .= '
		
		(min-width: ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') + 1) . 'px ) {
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 2)
{
$__output .= '
			
				.pageWidth { margin: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . '; }
					
			';
}
else
{
$__output .= '	
				
				#uix_wrapper,
				#uix_wrapper .activeSticky .pageWidth {
					margin-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
					margin-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
				}
	
			';
}
$__output .= '
		}
		
		
		
	/******* PAGE MAX-WIDTH RULES FOR FLUID STYLES *******/
	
		@media screen and (max-width: 1024px) {
			.Responsive .pageWidth {max-width: 100%;}
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 2)
{
$__output .= '
				.Responsive #uix_wrapper,
				.Responsive #uix_wrapper .activeSticky .pageWidth { max-width: 100%; } 
			';
}
$__output .= '
		}
		
		.NoResponsive body
		{
			';
if (XenForo_Template_Helper_Core::styleProperty('nonResponsiveMinWidth'))
{
$__output .= 'min-width: 960px;';
}
$__output .= '
		}
';
}
$__output .= '













@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') {
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 2)
{
$__output .= '
	.Responsive #uix_wrapper
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_wrapperResponsiveWide') . '
	}
	';
}
$__output .= '

	.Responsive .blockLinksList a, 
	.Responsive .blockLinksList label 
	{
		padding: 10px;
	}	
}





	
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 2)
{
$__output .= '
	.Responsive #uix_wrapper
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_wrapperResponsiveMedium') . '
	}
	';
}
$__output .= '

	.Responsive .profilePage .mast > *
	{
		max-width: none;
	}
	.Responsive .navTabs 
	{
		font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_responsiveNavigationFontSize') . ';
	}
	.Responsive #userBar .navTabs 
	{
		font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_responsiveUserBarFontSize') . ';
	}
	
	.Responsive #navigation .navTabs,
	.Responsive #userBar .navTabs {
		padding-left: 0;
		padding-right: 0;
	}
	
	.Responsive .moderatorTabs a i + .itemLabel {display: none;}
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adStylerOn'))
{
$__output .= '
		.uix_adStylerColorOptions ul li a {text-indent: -999999px;}
	';
}
$__output .= '
	
}
	







@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 2)
{
$__output .= '
	.Responsive #uix_wrapper
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_wrapperResponsiveNarrow') . '
	}
	';
}
$__output .= '
	.Responsive .resourceInfo .downloadButton
	{
		display: block;
	}
	.Responsive .pageNavLinkGroup
	{
		text-align: center;
	}
	.Responsive .pageNavLinkGroup .PageNav,
	.Responsive .pageNavLinkGroup .linkGroup
	{
		clear: both;
		display: inline-block;
	}
	.Responsive .pageNavLinkGroup .linkGroup .Popup 
	{
		margin-left: 0;
	}
	.Responsive .pageNavLinkGroup .linkGroup .Popup, 
	.Responsive .pageNavLinkGroup .linkGroup .element,
	.Responsive .pageNavLinkGroup .linkGroup a 
	{
		margin: 0 5px; 
		display: inline-block; 
		float: none;
	}
	.Responsive .breadBoxTop.withTopCtrl .topCtrl,
	.Responsive .pageNavLinkGroup .linkGroup,
	.Responsive .nodeListNewDiscussionButton,
	.Responsive .contentCallToAction
	{
		display: block;
		float: none;
		width: 100%;
		text-align: center;
		margin-left: 0;
		
	}
	.Responsive .breadBoxTop.withTopCtrl .topCtrl
	{
		margin-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	}
	.Responsive .breadBoxTop.withTopCtrl .topCtrl a.callToAction,
	.Responsive .pageNavLinkGroup .linkGroup a.callToAction,
	.Responsive .nodeListNewDiscussionButton a.callToAction,
	.Responsive .contentCallToAction a.callToAction
	{
		display: block;
	}
	
	.Responsive .contentCallToAction {margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';}
	
	.Responsive .navTabs .navTab.account .avatar {padding-right: 0;}

}





@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_adStylerMinWidth') . 'px) {
	.Responsive .footer .choosers.chooser_AdStyler, .uix_adStylerColorOptions {display: none;}
}


';
