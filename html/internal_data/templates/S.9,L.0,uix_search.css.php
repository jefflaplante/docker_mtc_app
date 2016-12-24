<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '
';
$uix_searchPosition = '';
if ((XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 1 && (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2 || (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)) || (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 0 && XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))))
{
$uix_searchPosition .= '2';
}
else
{
$uix_searchPosition .= XenForo_Template_Helper_Core::styleProperty('uix_searchPosition');
}
$__output .= '


input[type=search],
input[type=text] {
	-webkit-appearance: none;
}

#calroot {	
	box-shadow: 0 0 5px rgba(0,0,0,.2);
}

#QuickSearchQuery {
	min-height: 0;
	
	' . XenForo_Template_Helper_Core::styleProperty('uix_quickSearchStyle') . '
}

#QuickSearch .formPopup .secondaryControls {
	width: ' . XenForo_Template_Helper_Core::styleProperty('uix_quickSearchWidth') . ';
	box-sizing: border-box;
}

#QuickSearch .formPopup .controlsWrapper .textCtrl {
	width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_quickSearchWidth') - 20) . 'px;
	box-sizing: border-box;
	text-indent: 6px;
}



	#QuickSearch {
		display: inline-block;
		position: relative;
		right: 0;
		top: 0;
		vertical-align: top;
		background-color: transparent;
		padding: 0;
		line-height: normal;
		text-align: left;
	}
	#QuickSearchPlaceholder {
		position: static;
		right: 0;
		top: 0;
		height: auto;
		line-height: inherit;
		width: ' . XenForo_Template_Helper_Core::styleProperty('uix_quickSearchPlaceholderSize') . ';
		padding: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
		box-sizing: content-box;
		text-align: center;
		font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_quickSearchPlaceholderSize') . ';
		text-indent: 0;
		color: inherit;
		background-image: none;
		
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
		
	}
	#QuickSearchPlaceholder:before
	{
		display: inline-block;
		position: relative;
		vertical-align: top;
	}	
	#QuickSearch #commonSearches .arrowWidget 
	{
		float: none;
		margin: 0 auto;
	}
	
	
	
	#QuickSearch.active 
	{
		box-shadow: none;
		padding-bottom: 0;
	}	
	#QuickSearch .formPopup 
	{
		background: none;
		width: auto;
	}
	#QuickSearch .formPopup .controlsWrapper 
	{
		background: none;
		padding: 0;
		margin: 0;
	}
	#QuickSearch .formPopup .primaryControls 
	{
		padding: 0;
	}
	
#QuickSearch .formPopup .secondaryControls {
	box-shadow: 0 0 5px rgba(0,0,0,.2);
	padding: 10px;
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';
	background: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
	color: ' . XenForo_Template_Helper_Core::styleProperty('contentText') . ';
	position: absolute;
	top: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight')) + 10) . 'px;
	z-index: 7500;
}
	
#QuickSearch input.button.primary {
	margin-right: 5px;
}

#QuickSearch a.button.moreOptions {
	float: left;
	margin: 0;
	/* width: 87px; */ 
}

input[type=\'search\']::-webkit-search-decoration, 
input[type=\'search\']::-webkit-search-cancel-button, 
input[type=\'search\']::-webkit-search-results-button,
input[type=\'search\']::-webkit-search-results-decoration {
	display: none;
}

#QuickSearch .primaryControls {
	position: relative;
}

#QuickSearch .primaryControls .uix_icon {
	position: absolute;
	top: 0;
	width: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.width') . ';
	height: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.height') . ';
	line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.height') . ';
	text-align: center;
}


	
	#QuickSearch.show {
		display: block;
		position: absolute;
		transform: none;
		box-shadow: 0 0 5px rgba(0,0,0,.2);
		border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';
		background: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
		padding: 0 0 10px;
		margin-top: -10px;
	}
	
	#QuickSearch.show .primaryControls .uix_icon.uix_icon-search {
		display: none;
	}
	
	#QuickSearch.show #QuickSearchQuery {
		width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_quickSearchWidth') - 20) . 'px;
	}
	
	#QuickSearch.show .formPopup .primaryControls {
		padding: 10px 10px 0 10px;
	}
	
	#QuickSearch.show .formPopup .secondaryControls {
		position: static;
		box-shadow: none;
		background: none;
		border: none;
	}
	


';
if (XenForo_Template_Helper_Core::styleProperty('uix_search_maxResponsiveWidth') != ('100%'))
{
$__output .= '
	
	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_search_maxResponsiveWidth') . ')
	{
		.Responsive #QuickSearch 
		{
			display: none;
		}
		.Responsive #QuickSearchPlaceholder
		{
			display: inline-block;
		}
		.Responsive #QuickSearch.show
		{
			display: inline-block;
		}
		
	}
';
}
else
{
$__output .= '
	#QuickSearchPlaceholder
	{
		display: inline-block;
	}
	#QuickSearch
	{
		display: none;
	}
';
}
$__output .= '



';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchButton'))
{
$__output .= '
	
	#QuickSearch .primaryControls .uix_icon
	{
		' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButtonPosition')) ? ('left: 0;') : ('right: 0;')) . '
		' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle') . '
		';
if ($pageIsRtl)
{
$__output .= '
			border-radius: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButtonPosition')) ? ('0 ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius') . ' 0') : (XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius') . ' 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius'))) . ';
		';
}
else
{
$__output .= '	
			border-radius: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButtonPosition')) ? (XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius') . ' 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius')) : ('0 ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius') . ' 0')) . ';
		';
}
$__output .= '	
	}
	#QuickSearch:not(.show) #QuickSearchQuery 
	{
		text-indent: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButtonPosition')) ? ((XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight') + 6) . 'px') : ('6px')) . ';
	}
	
';
}
else
{
$__output .= '

	#QuickSearchQuery 
	{
		text-indent: ' . (XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight') - 5) . 'px;
	}
	#QuickSearch.show #QuickSearchQuery
	{
		text-indent: 6px;
	}
	
';
}
$__output .= '



';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__output .= '

	#uix_searchMinimal { 
		box-sizing: border-box;
		pointer-events: none; 
	}
	
	#uix_searchMinimal.show { pointer-events: auto; }
	
	
	
	';
if ($uix_searchPosition == 0)
{
$__output .= '
	
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__output .= '#navigation.withSearch .tabLinks .pageWidth { position: relative; }';
}
$__output .= '
	
		#uix_searchMinimal {
			float: right;
			position: absolute;
			right: 0;
			top: 0;
			
			opacity: 0;
			width: 0;
  			
  			/* transition to inactive */
			-webkit-transition-property: opacity, width;	
			-webkit-transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
  			-webkit-transition-delay: 0s, 0s;
  			
			transition-property: opacity, width;	
			transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
  			transition-delay: 0s, 0s;
		}
		
			#uix_searchMinimal.show {
				opacity: 1;
				width: 100%;
				
				/* transition to active */
				-webkit-transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . '; 
				transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . '; 
			}
		
		.navTabs .navTab.selected .blockLinksList,
		#searchBar { 
			opacity: 1;
			
			/* transition to inactive */
			-webkit-transition-property: opacity;
			-webkit-transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			-webkit-transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			
			transition-property: opacity;
			transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
		}
		
			.uix_searchMinimalActive .navTab.selected .blockLinksList,
			.uix_searchMinimalActive #searchBar {
				pointer-events: none; 
				opacity: 0;
				
				/* transition to active */
				-webkit-transition-delay: 0s;
				transition-delay: 0s;
			}
	
	';
}
else if ($uix_searchPosition == 1)
{
$__output .= '
	
		#uix_searchMinimal {
			float: right;
			opacity: 0;
			width: 0;	
			
			/* transition to inactive */
			-webkit-transition-property: opacity, width;
			-webkit-transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			-webkit-transition-delay: 0s, 0s;
			
			transition-property: opacity, width;
			transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			transition-delay: 0s, 0s;
		}
		
			#uix_searchMinimal.show { 
				opacity: 1;
				width: 100%;
			
				/* transition to active */
				-webkit-transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
				transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			}
		
		#QuickSearchPlaceholder { 
			opacity: 1;
			
			/* transition to inactive */
			-webkit-transition-property: width, padding, opacity;
			-webkit-transition-duration: 0s, 0s, ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			-webkit-transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			
			transition-property: width, padding, opacity;
			transition-duration: 0s, 0s, ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
		}
		
			.uix_searchMinimalActive #QuickSearchPlaceholder {
				opacity: 0;
				pointer-events: none;
				width: 0;
				padding: 0;
				
				/* transition to active */
				-webkit-transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', 0s;
				transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', 0s;
			}
		
	';
}
else if ($uix_searchPosition == 2)
{
$__output .= '
		
		#uix_searchMinimal {
			float: right;
			position: absolute;
			right: 0;
			/* top: 0; */ 
			opacity: 0;
			width: 0;	
			
			/* transition to inactive */
			-webkit-transition-property: opacity, width;
			-webkit-transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			-webkit-transition-delay: 0s, 0s;
			
			transition-property: opacity, width;
			transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			transition-delay: 0s, 0s;
		}
		
			#uix_searchMinimal.show { 
				opacity: 1;
				width: 100%;
				
				/* transition to active */
				-webkit-transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
				transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			}
		
		
		#navigation.uix_searchMinimalActive .navTabs .navRight,
		#navigation.uix_searchMinimalActive .navTabs .navLeft,
		#navigation.uix_searchMinimalActive .navTabs .navTab { pointer-events: none; }
		
		.navTabs .navTab.selected .tabLinks { pointer-events: auto; }
			
		#navigation .navTabs .navTab > *:not(.tabLinks),
		#navigation #logo_small {
			opacity: 1;
			
			/* transition to inactive */
			-webkit-transition: opacity ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			transition: opacity ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
		}
		
			#navigation.uix_searchMinimalActive .navTabs .navTab > *:not(.tabLinks),
			#navigation.uix_searchMinimalActive #logo_small {
				opacity: 0;
				
				/* transition to active */
				-webkit-transition: opacity ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ' 0s;
				transition: opacity ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ' 0s;
			}
		


	';
}
else if ($uix_searchPosition == 3)
{
$__output .= '
	
		#userBar .pageWidth { position: relative; }
	
		#uix_searchMinimal {
			position: absolute;
			right: 0;
			/* top: 0; */ 
			opacity: 0;
			width: 0;	
			
			/* transition to inactive */
			-webkit-transition-property: opacity, width;
			-webkit-transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			-webkit-transition-delay: 0s, 0s;
			
			transition-property: opacity, width;
			transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			transition-delay: 0s, 0s;
		}
		
			#uix_searchMinimal.show { 
				opacity: 1;
				width: 100%;
				
				/* transition to active */
				-webkit-transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
				transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			}	
	
		#userBar.uix_searchMinimalActive .navTabs .navRight,
		#userBar.uix_searchMinimalActive .navTabs .navLeft,
		#userBar.uix_searchMinimalActive .navTabs .navTab { pointer-events: none; }
			
		#userBar .navTabs .navTab > *:not(.tabLinks) {
			opacity: 1;
			
			/* transition to inactive */
			-webkit-transition: opacity ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			transition: opacity ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
		}
		
			#userBar.uix_searchMinimalActive .navTabs .navTab > *:not(.tabLinks) {
				opacity: 0;
				
				/* transition to active */
				-webkit-transition: opacity ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ' 0s;
				transition: opacity ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ' 0s;
			}
			
	';
}
else if ($uix_searchPosition == 4)
{
$__output .= '
		
		.breadBoxTop,
		.breadBoxTop .pageWidth { position: relative; }
		
		#uix_searchMinimal {
			position: absolute;
			
			' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation') == 0) ? ('right: 0;') : ('left: 0;')) . '
			
			top: 0;
			opacity: 0;
			width: 0;
			
			/* transition to inactive */
			-webkit-transition-property: opacity, width;
			-webkit-transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			-webkit-transition-delay: 0s, 0s;
			
			transition-property: opacity, width;
			transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			transition-delay: 0s, 0s;
		}
		
			#uix_searchMinimal.show {
				opacity: 1;
				width: 100%;
				
				/* transition to active */
				-webkit-transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
				transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ', ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';	
			}
		
		.breadBoxTop nav,
		.breadBoxTop .topCtrl {
			opacity: 1;
			
			/* transition to inactive */
			-webkit-transition-property: opacity;
			-webkit-transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			-webkit-transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			
			transition-property: opacity;
			transition-duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
			transition-delay: ' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimal_speed') . ';
		}
		
			.breadBoxTop.uix_searchMinimalActive nav,
			.breadBoxTop.uix_searchMinimalActive .topCtrl {
				pointer-events: none;
				opacity: 0;
				
				/* transition to active */
				-webkit-transition-delay: 0s;
				transition-delay: 0s;
			}
			
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
			.Responsive .breadBoxTop.topCtrl,
			.Responsive .breadBoxTop.uix_searchMinimalActive .topCtrl {
				-webkit-transition: none;
				transition: none;
				pointer-events: auto;
				opacity: 1;
			}
		}
		
	';
}
$__output .= '
	
		
	#uix_searchMinimal.show form {
		padding: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
		box-sizing: border-box;
		
		width: 100%;
	}
	
	.hasFlexbox #uix_searchMinimal form {
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
	}
	
	#uix_searchMinimal form .uix_icon {
		display: none;
	}
	
	#uix_searchMinimal.show form .uix_icon {
		display: inline-block;
	}
	
	#uix_searchMinimalClose {
		padding: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' 0 0;
		cursor: pointer;
		float: left;
		font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_quickSearchPlaceholderSize') . ';
	}
	
	.hasFlexbox #uix_searchMinimalClose {
		-ms-flex: 0 0 auto;
		-webkit-flex: 0 0 auto;
		flex: 0 0 auto;
	}
	
	#uix_searchMinimalOptions {
		padding: 0 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
		cursor: pointer;
		float: right;
		font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_quickSearchPlaceholderSize') . ';
	}
	
	.hasFlexbox #uix_searchMinimalOptions {
		-ms-flex: 0 0 auto;
		-webkit-flex: 0 0 auto;
		flex: 0 0 auto;
		
		-ms-flex-order: 1;
		-webkit-order: 1;
		order: 1;
	}
	
	#uix_searchMinimalInput {
		overflow: hidden
	}
	
	.hasFlexbox #uix_searchMinimalInput {
		-ms-flex: 1 1 auto;
		-webkit-flex: 1 1 auto;
		flex: 1 1 auto;
	}
	
	
	
	#uix_searchMinimalClose,
	#uix_searchMinimalOptions,
	#uix_searchMinimalInput {
		line-height: inherit;
	}
	
	#uix_searchMinimal input {
		' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalInput_style') . '
	}
	
	#uix_searchMinimal input:focus {
		outline: none;
		' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalInput_styleFocus') . '
		}
	
	';
if ($uix_searchPosition == 2)
{
$__output .= '
		#uix_searchMinimal { color: ' . XenForo_Template_Helper_Core::styleProperty('navLink.color') . '; }
		#uix_searchMinimal input::-webkit-input-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('navLink.color') . '; }
		#uix_searchMinimal input:-moz-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('navLink.color') . '; }
		#uix_searchMinimal input::-moz-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('navLink.color') . '; }
		#uix_searchMinimal input:-ms-input-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('navLink.color') . '; }
	';
}
else if ($uix_searchPosition == 3)
{
$__output .= '
		#uix_searchMinimal { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.color') . '; }
		#uix_searchMinimal input::-webkit-input-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.color') . '; }
		#uix_searchMinimal input:-moz-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.color') . '; }
		#uix_searchMinimal input::-moz-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.color') . '; }
		#uix_searchMinimal input:-ms-input-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.color') . '; }
	';
}
else if ($uix_searchPosition == 4)
{
$__output .= '
		#uix_searchMinimal { color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb.color') . '; }
		#uix_searchMinimal input::-webkit-input-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb.color') . '; }
		#uix_searchMinimal input:-moz-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb.color') . '; }
		#uix_searchMinimal input::-moz-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb.color') . '; }
		#uix_searchMinimal input:-ms-input-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb.color') . '; }
	';
}
$__output .= '
';
}
$__output .= '



';
if ($uix_searchPosition == 0)
{
$__output .= '
	
	.navTabs .navTab.selected .tabLinks { overflow: visible; }
	
	
	#QuickSearch .formPopup li { 
		line-height: normal;
		float: none;
		padding: 0;
		margin: 0;
		border: none;
		box-shadow: none;
	}
	
	#QuickSearch .ctrlUnit > dd > * > li
	{
		margin: 4px 0 8px;
		padding-left: 1px; /* fix a webkit display bug */
	}
	
	#searchBar {
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeight') . ';
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeight') . ';
		float: right;
	}
	
	#uix_searchMinimal form {
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeight') . ';
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeight') . ';
	}
	
	#QuickSearch {
		transform: translateY(-50%);
		top: 50%;
	}
	
	#QuickSearchPlaceholder {
		color: ' . XenForo_Template_Helper_Core::styleProperty('navTabLink.color') . ';
		height: 100%;
	}
	
	#QuickSearchPlaceholder:before {
		top: 50%;
		vertical-align: top;
		transform: translateY(-50%);	
	}

	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_search_maxResponsiveWidth') != ('100%'))
{
$__output .= '
		@media (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_search_maxResponsiveWidth') + 1) . 'px)
		{
			.withSearch .navTabs .navTab.selected .blockLinksList {
				margin-right: ' . (XenForo_Template_Helper_Core::styleProperty('uix_quickSearchWidth') + (2 * XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall')) + 8) . 'px;
			}
		}
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_search_maxResponsiveWidth') . ')
		{
			.Responsive .withSearch .navTabs .navTab.selected .blockLinksList {	
				margin-right: ' . ((2 * XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall')) + 8 + XenForo_Template_Helper_Core::styleProperty('uix_quickSearchPlaceholderSize')) . 'px;
			}
		}
	';
}
else
{
$__output .= '
	
		.withSearch .navTabs .navTab.selected .blockLinksList {
			margin-right: ' . ((2 * XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall')) + 8 + XenForo_Template_Helper_Core::styleProperty('uix_quickSearchPlaceholderSize')) . 'px;
		}
	
	';
}
$__output .= '
	
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation'))
{
$__output .= '
	
		.activeSticky #searchBar {
			line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeightSticky') . ';
			height: ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeightSticky') . ';
		}
		
		.activeSticky #uix_searchMinimal form {
			line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeightSticky') . ';
			height: ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeightSticky') . ';
		}
		
	';
}
$__output .= '		
	
';
}
else if ($uix_searchPosition == 1)
{
$__output .= '
	
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_widthToCenterLogo') != ('100%'))
{
$__output .= '
		
		#searchBar {
			float: right;
			line-height: ' . (XenForo_Template_Helper_Core::styleProperty('headerLogoHeight') - 4) . 'px;
			*line-height: ' . XenForo_Template_Helper_Core::styleProperty('headerLogoHeight') . ';
			height: ' . XenForo_Template_Helper_Core::styleProperty('headerLogoHeight') . ';
		}
		
		.hasFlexbox #searchBar {
			margin-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
			line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight') . ';
			height: ' . XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight') . ';
			
			
			-ms-flex: 0 0 auto;
			-webkit-flex: 0 0 auto;
			flex: 0 0 auto;
		}
		
		#QuickSearch,
		#QuickSearchPlaceholder {
			vertical-align: middle;
		}
		
		.hasFlexbox #QuickSearch,
		.hasFlexbox #QuickSearchPlaceholder {
			vertical-align: initial;
		}
		
		#QuickSearch.show {
			top: calc(50% - ' . (XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight') / 2) . 'px)	
		}
		
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_widthToCenterLogo') . ') {
			.Responsive #searchBar {
				text-align: center;
				margin: 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' 0;
			}
			
			.Responsive #searchBar {
				float: none;
				line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight') . ';
				height: ' . XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight') . ';
			}
			
			.Responsive #QuickSearch.show {
				right: calc(50% - ' . ((XenForo_Template_Helper_Core::styleProperty('uix_quickSearchWidth') + 10) / 2) . 'px);	
			}
		}
	
		
	';
}
else
{
$__output .= '
		
		#searchBar {
			text-align: center;
			float: none;
			line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight') . ';
			height: ' . XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight') . ';
			
			margin: 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' 0;
		}
		
		#QuickSearch.show {
			right: calc(50% - ' . ((XenForo_Template_Helper_Core::styleProperty('uix_quickSearchWidth') + 10) / 2) . 'px);
		}
		
	';
}
$__output .= '
	
		
';
}
else if ($uix_searchPosition == 2)
{
$__output .= '

	
	#navigation .navTabs > ul { height: ' . XenForo_Template_Helper_Core::styleProperty('headerTabHeight') . '; }
		
	#searchBar,
	#uix_searchMinimal form {
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('headerTabHeight') . ';
		height: ' . XenForo_Template_Helper_Core::styleProperty('headerTabHeight') . ';
	}
	
	#QuickSearch {
		transform: translateY(-50%);
		top: 50%;
		padding: 0 10px; 
	}
	
	#QuickSearchPlaceholder {
		color: ' . XenForo_Template_Helper_Core::styleProperty('navLink.color') . ';
		padding: 0 10px; 
		height: 100%;
	}
	
	#QuickSearchPlaceholder:before {
		top: 50%;
		vertical-align: top;
		transform: translateY(-50%);	
	}
	
	#QuickSearch.show {
		margin-top: ' . ((XenForo_Template_Helper_Core::styleProperty('headerTabHeight') - XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight')) / 2 - 5) . 'px;
		top: 0;
	}
	
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation'))
{
$__output .= '
	
		.activeSticky #QuickSearch.show {
			margin-top: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigationHeight') - XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight')) / 2 - 10) . 'px;
			top: 0;
		}
		
		.activeSticky #searchBar,
		.activeSticky #uix_searchMinimal form {
			line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigationHeight') . ';
			height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigationHeight') . ';
		}
		
		
		
	';
}
$__output .= '
	
';
}
else if ($uix_searchPosition == 3)
{
$__output .= '

	
		
	
	
	#searchBar,
	#uix_searchMinimal form {
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarHeight') . ';
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarHeight') . ';
	}
	
	#QuickSearch {
		top: 50%;
		transform: translateY(-50%);
		padding: 0 10px; 	
	}
	
	#QuickSearchPlaceholder {
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.color') . ';
		padding: 0 10px; 
		height: 100%;
	}
	
	#QuickSearchPlaceholder:before {
		top: 50%;
		vertical-align: top;
		transform: translateY(-50%);	
	}
	
	#QuickSearch.show {
		margin-top: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_userBarHeight') - XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight')) / 2 - 5) . 'px;
		top: 0;
	}
	
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_stickyUserBar'))
{
$__output .= '
	
		
		
		
		
		.activeSticky #searchBar,
		.activeSticky #uix_searchMinimal form {
			line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBarHeight') . ';
			height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBarHeight') . ';
		}
						
		.activeSticky #QuickSearch.show
		{
			margin-top: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBarHeight') - XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight')) / 2 - 5) . 'px;
		}
	';
}
$__output .= '
	
';
}
else if ($uix_searchPosition == 4)
{
$__output .= '

	#uix_searchMinimal form {
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') . ';
	}
	
	#searchBar {
		height: 100%
	}
	
	.breadBoxTop {
		overflow: visible;
	}
	
	#QuickSearchPlaceholder {
		height: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') . ';
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') . ';
	}
	
	#QuickSearch {
		transform: translateY(-50%);
		top: 50%;
		' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('left: 0; right: auto;') : ('')) . '
	}
	
	#QuickSearch.show {
		margin-top: ' . ((XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') - XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight')) / 2 - 5) . 'px;
		top: 0;
	}
	
	.breadBoxBottom .uix_breadCrumb_toggleList li.toggleList_item.toggleList_item_search {
		display: none;
	}
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_search_maxResponsiveWidth') != ('100%'))
{
$__output .= '
	
		@media (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_search_maxResponsiveWidth') + 1) . 'px) {
			.uix_breadCrumb_toggleList li.toggleList_item.toggleList_item_search {
				border: none;
				background: none;
				box-shadow: none;
				' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('margin-right') : ('margin-left')) . ': ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
			}
		}
	
	
	';
}
$__output .= '
	
';
}
$__output .= '	';
