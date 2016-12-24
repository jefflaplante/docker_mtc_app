<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($xenOptions['uix_useSameJsForAllStyles'])
{
$__output .= '
	';
$uix_jsPathUsed = '';
$uix_jsPathUsed .= htmlspecialchars($xenOptions['uix_jsPath'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else
{
$__output .= '
	';
$uix_jsPathUsed = '';
$uix_jsPathUsed .= XenForo_Template_Helper_Core::styleProperty('uix_jsPath');
$__output .= '
';
}
$__output .= '

';
$headerTabHeight_outer = '';
$headerTabHeight_outer .= (XenForo_Template_Helper_Core::styleProperty('headerTabHeight') + XenForo_Template_Helper_Core::styleProperty('navTabs.border-top-width') + XenForo_Template_Helper_Core::styleProperty('navTabs.border-bottom-width') + XenForo_Template_Helper_Core::styleProperty('navTabs.padding-top') + XenForo_Template_Helper_Core::styleProperty('navTabs.padding-bottom'));
$__output .= '
';
$uix_fixedNavigationHeight_outer = '';
$uix_fixedNavigationHeight_outer .= (XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigationHeight') + XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigation_style.border-top-width') + XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigation_style.border-bottom-width') + XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigation_style.padding-top') + XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigation_style.padding-bottom'));
$__output .= '

';
$uix_tabLinksHeight_outer = '';
$uix_tabLinksHeight_outer .= (XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeight') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinks_style.padding-top') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinks_style.padding-bottom') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinks_style.border-bottom-width') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinks_style.border-top-width'));
$__output .= '
';
$uix_tabLinksHeightSticky_outer = '';
$uix_tabLinksHeightSticky_outer .= (XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeightSticky') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinksSticky_style.padding-top') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinksSticky_style.padding-bottom') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinksSticky_style.border-bottom-width') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinksSticky_style.border-top-width'));
$__output .= '

';
$userBar_headerTabHeight_outer = '';
$userBar_headerTabHeight_outer .= (XenForo_Template_Helper_Core::styleProperty('uix_userBarHeight') + XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.border-top-width') + XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.border-bottom-width') + XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.padding-top') + XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.padding-bottom'));
$__output .= '
';
$userBar_uix_fixedNavigationHeight_outer = '';
$userBar_uix_fixedNavigationHeight_outer .= (XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBarHeight') + XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBar_style.border-top-width') + XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBar_style.border-bottom-width') + XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBar_style.padding-top') + XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBar_style.padding-bottom'));
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_fontAwesome'))
{
$__output .= '<link href="' . XenForo_Template_Helper_Core::styleProperty('uix_fontAwesome') . '" rel="stylesheet">';
}
$__output .= '
';
if (XenForo_Template_Helper_Core::styleProperty('uix_googleFonts'))
{
$__output .= '<link href=\'//fonts.googleapis.com/css?family=' . XenForo_Template_Helper_Core::styleProperty('uix_googleFonts') . '\' rel=\'stylesheet\' type=\'text/css\'>';
}
$__output .= '


<script src="' . htmlspecialchars($jQuerySource, ENT_QUOTES, 'UTF-8') . '"></script>	
';
if ($jQuerySource != $jQuerySourceLocal)
{
$__output .= '
	<script>if (!window.jQuery) { document.write(\'<scr\'+\'ipt type="text/javascript" src="' . htmlspecialchars($jQuerySourceLocal, ENT_QUOTES, 'UTF-8') . '"><\\/scr\'+\'ipt>\'); }</script>
';
}
$__output .= '

';
if ($xenOptions['uncompressedJs'] == 1 OR $xenOptions['uncompressedJs'] == 3)
{
$__output .= '
	<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/jquery/jquery.xenforo.rollup.js?_v=' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '"></script>
';
}
$__output .= '	
<script src="' . XenForo_Template_Helper_Core::callHelper('javaScriptUrl', array(
'0' => $javaScriptSource . '/xenforo/xenforo.js?_v=' . $xenOptions['jsVersion']
)) . '"></script>
<!--XenForo_Require:JS-->


';
if (XenForo_Template_Helper_Core::styleProperty('uix_ie8Support'))
{
$__output .= '
<!--[if lt IE 9]>
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_ie8Support_local'))
{
$__output .= '
		<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/audentio/' . htmlspecialchars($uix_jsPathUsed, ENT_QUOTES, 'UTF-8') . '/ie8_polyfill.min.js"></script>
	';
}
else
{
$__output .= '
		 
        	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	        
	        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	        
	        <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
	';
}
$__output .= '
<![endif]-->
       
';
}
$__output .= '

<script>
	uix = {
		elm: {},
		fn:{},
		init: function(){
			if (uix.betaMode) {
				console.group(\'uix.%cinit()\', \'color:#3498DB\');
			}
			for(var x=0;x<uix.events.init.length;x++){
				uix.events.init[x]()
		  	}
		  	console.groupEnd(\'uix.%cinit()\',\'color:#3498DB\')
		},
	  	events: {init:[]},
	  	on: function(event, fn){
	  		if(event==\'init\'){
	  			uix.events.init.push(fn)
	  		}
	  	},
	  
		betaMode				: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_beta') . '\'),
		jsPathUsed				: \'' . htmlspecialchars($uix_jsPathUsed, ENT_QUOTES, 'UTF-8') . '\',
		jsGlobal				: parseInt(\'' . htmlspecialchars($xenOptions['uix_useSameJsForAllStyles'], ENT_QUOTES, 'UTF-8') . '\'),
		
	  
	  	version					: \'' . XenForo_Template_Helper_Core::styleProperty('uix_version') . '\',
	  	jsHeadVersion				: \'1.5.0.1\',
	  	addonVersion				: \'' . htmlspecialchars($xenAddOns['uix'], ENT_QUOTES, 'UTF-8') . '\',
	  	contentTemplate				: \'' . htmlspecialchars($contentTemplate, ENT_QUOTES, 'UTF-8') . '\',
	  
		globalPadding 				: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . '\'),
		sidebarWidth				: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('sidebar.width') . '\'),
		mainContainerMargin  	        	: \'' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth')) . 'px\',
		maxResponsiveWideWidth   		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . '\'),
		maxResponsiveMediumWidth 		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . '\'),
		maxResponsiveNarrowWidth 		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . '\'),
		sidebarMaxResponsiveWidth		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_sidebarMaxResponsiveWidth') . '\'),
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint') == ('100%'))
{
$__output .= '
			responsiveMessageBreakpoint		: 99999,
		';
}
else
{
$__output .= '
			responsiveMessageBreakpoint		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint') . '\'),
		';
}
$__output .= '
		sidebarMaxResponsiveWidthStr		: \'' . XenForo_Template_Helper_Core::styleProperty('uix_sidebarMaxResponsiveWidth') . '\',
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') == ('100%') || !XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth'))
{
$__output .= '
			offCanvasTriggerWidth		: 99999,
		';
}
else
{
$__output .= '
			offCanvasTriggerWidth		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') . '\'),
		';
}
$__output .= '
	  
		jumpToFixedDelayHide			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_jumpToTopFixed_delayHide') . '\'),
	  
		stickyNavigationMinWidth 		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation_minWidth') . '\'),
		stickyNavigationMinHeight		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation_minHeight') . '\'),
		stickyNavigationMaxWidth 		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation_maxWidth') . '\'),
		stickyNavigationMaxHeight		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation_maxHeight') . '\'),
		stickyNavigationPortraitMinWidth 	: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigationPortrait_minWidth') . '\'),
		stickyNavigationPortraitMinHeight	: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigationPortrait_minHeight') . '\'),
		stickyNavigationPortraitMaxWidth 	: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigationPortrait_maxWidth') . '\'),
		stickyNavigationPortraitMaxHeight	: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigationPortrait_maxHeight') . '\'),
		stickySidebar 				: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarMaxResponsiveWidth') != ('100%')) ? (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar_sticky')) : ('0')) . ',
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation'))
{
$__output .= '
			sidebarInnerFloat 		: ' . (($pageIsRtl) ? ('"right"') : ('"left"')) . ',
		';
}
else
{
$__output .= '
			sidebarInnerFloat		: ' . (($pageIsRtl) ? ('"left"') : ('"right"')) . ',
		';
}
$__output .= '
		RTL					: ' . (($pageIsRtl) ? ('1') : ('0')) . ',
		stickyItems 				: {},
		stickyGlobalMinimumPosition		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyGlobalMinimumPosition') . '\'),
		stickyGlobalScrollUp			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyGlobalScrollUp') . '\'),
		stickyDisableIOSThirdParty		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_disableStickyIOS') . '\'),
		
		searchMinimalSize			: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize') == ('100%')) ? ('99999') : ('parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize') . '\')')) . ',
		
		searchPosition				: parseInt(\'';
if ((XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 1 && (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2 || (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)) || (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 0 && XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))))
{
$__output .= '2';
}
else
{
$__output .= XenForo_Template_Helper_Core::styleProperty('uix_searchPosition');
}
$__output .= '\'),
		
		nodeStyle				: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') . '\'),
		pageStyle				: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') . '\'),
		
		enableBorderCheck			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_enableBorderJS') . '\'),
		enableULManager				: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_enableULManagerJs') . '\'),
		
		threadSlidingAvatar			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_threadSlidingAvatar') . '\'),
		threadSlidingExtra			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_threadSlidingExtra') . '\'),
		threadSlidingHover			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_threadSlidingHover') . '\'),
		threadSlidingStaffShow			: parseInt(\'' . htmlspecialchars($xenOptions['uix_noCollapseStaffPost'], ENT_QUOTES, 'UTF-8') . '\'),
		threadSlidingGlobalEnable		: parseInt(\'' . htmlspecialchars($xenOptions['uix_enableCollapseUserInfo'], ENT_QUOTES, 'UTF-8') . '\'),
		
		signatureHidingEnabled			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_signatureHidingEnabled') . '\'),
		signatureHidingEnabledAddon		: parseInt(\'' . htmlspecialchars($xenOptions['uix_enableCollapseUserInfo'], ENT_QUOTES, 'UTF-8') . '\'),
		signatureMaxHeight			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_signatureMaxHeight') . '\'),
		signatureHoverEnabled			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_signatureHoverEnabled') . '\'),
		
		enableStickyFooter 			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_enableStickyFooter') . '\'),
		stickyFooterBottomOffset 		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . '\') * 2,
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 3)
{
$__output .= '
			sidebarStickyBottomOffset	: parseInt(\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2)) . '\'),
		';
}
else
{
$__output .= '
			sidebarStickyBottomOffset	: parseInt(0),
		';
}
$__output .= '
	  
	  	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') > 0 || XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') > 0)
{
$__output .= '
			offCanvasSidebar			: 1,

			';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 || XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2)
{
$__output .= '
				offCanvasSidebarVisitorTabs		: 1,
			';
}
else
{
$__output .= '
				offCanvasSidebarVisitorTabs		: 0,
			';
}
$__output .= '
		
		';
}
else
{
$__output .= '
			offCanvasSidebar			: 0,
			offCanvasSidebarVisitorTabs		: 0,
		';
}
$__output .= '
	  
		reinsertWelcomeBlock			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_reinsertWelcomeBlock') . '\'),
	  
		sidebarCookieExpire			: \'' . htmlspecialchars($xenOptions['adhub_sidebarCollapseDays'], ENT_QUOTES, 'UTF-8') . '\',
		canCollapseSidebar			: \'' . htmlspecialchars($uix_canCollapseSidebar, ENT_QUOTES, 'UTF-8') . '\',
		
		cookiePrefix				: \'' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($xenOptions['cookieConfig']['prefix'], ENT_QUOTES, 'UTF-8'), 'double') . '\',
		sidebarLocation 			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation') . '\'),
		
		collapsibleSidebar			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar') . '\'),
		collapsedNodesDefault			: \'';
if (is_array($uix_collapsedNodes))
{
foreach ($uix_collapsedNodes AS $nodeId)
{
$__output .= 'node_' . htmlspecialchars($nodeId, ENT_QUOTES, 'UTF-8') . ',';
}
}
$__output .= '\',
		widthToggleUpper			: \'' . XenForo_Template_Helper_Core::styleProperty('uix_widthToggleFluid') . '\',
		widthToggleLower			: \'' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . '\',
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') > 100)
{
$__output .= '
			toggleWidthEnabled		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_widthToggle') . '\'),
		';
}
else
{
$__output .= '
			toggleWidthEnabled		: false,
		';
}
$__output .= '
		collapsibleNodes			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_collapseNodes') . '\'),
		collapsibleSticky			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_collapseSticky') . '\'),
		ajaxWidthToggleLink			: \'' . XenForo_Template_Helper_Core::link('uix/toggle-width', false, array()) . '\',
		ajaxStickyThreadToggleLink		: \'' . XenForo_Template_Helper_Core::link('uix/toggle-sticky-threads', false, array()) . '\',
		ajaxStickyThreadExpandLink		: \'' . XenForo_Template_Helper_Core::link('uix/expand-sticky-threads', false, array()) . '\',
		ajaxStickyThreadCollapseLink		: \'' . XenForo_Template_Helper_Core::link('uix/collapse-sticky-threads', false, array()) . '\',
		ajaxSidebarToggleLink			: \'' . XenForo_Template_Helper_Core::link('uix/toggle-sidebar', false, array()) . '\',
		
		user					: {
								\'themeName\'		: \'' . htmlspecialchars($visitorStyle['title'], ENT_QUOTES, 'UTF-8') . '\',
								\'-themeParents\'		: \'' . htmlspecialchars($visitorStyle['parent_list'], ENT_QUOTES, 'UTF-8') . '\',
								\'-themeModified\'	: \'' . htmlspecialchars($visitorStyle['last_modified_date'], ENT_QUOTES, 'UTF-8') . '\',
								\'-themeSelectable\'	: \'' . htmlspecialchars($visitorStyle['user_selectable'], ENT_QUOTES, 'UTF-8') . '\',
								languageName		: \'' . htmlspecialchars($visitorLanguage['title'], ENT_QUOTES, 'UTF-8') . '\',
								stickyEnableUserbar	: (parseInt(\'' . htmlspecialchars($visitor['uix_sticky_userbar'], ENT_QUOTES, 'UTF-8') . '\') == parseInt(\'' . htmlspecialchars($visitor['uix_sticky_userbar'], ENT_QUOTES, 'UTF-8') . '\')) ? parseInt(\'' . htmlspecialchars($visitor['uix_sticky_userbar'], ENT_QUOTES, 'UTF-8') . '\') : true,
								stickyEnableNav		: (parseInt(\'' . htmlspecialchars($visitor['uix_sticky_navigation'], ENT_QUOTES, 'UTF-8') . '\') == parseInt(\'' . htmlspecialchars($visitor['uix_sticky_navigation'], ENT_QUOTES, 'UTF-8') . '\')) ? parseInt(\'' . htmlspecialchars($visitor['uix_sticky_navigation'], ENT_QUOTES, 'UTF-8') . '\') : true,
								stickyEnableSidebar	: (parseInt(\'' . htmlspecialchars($visitor['uix_sticky_sidebar'], ENT_QUOTES, 'UTF-8') . '\') == parseInt(\'' . htmlspecialchars($visitor['uix_sticky_sidebar'], ENT_QUOTES, 'UTF-8') . '\')) ? parseInt(\'' . htmlspecialchars($visitor['uix_sticky_sidebar'], ENT_QUOTES, 'UTF-8') . '\') : true,
								widthToggleState	: (parseInt(\'' . htmlspecialchars($visitor['uix_width'], ENT_QUOTES, 'UTF-8') . '\') == parseInt(\'' . htmlspecialchars($visitor['uix_width'], ENT_QUOTES, 'UTF-8') . '\')) ? parseInt(\'' . htmlspecialchars($visitor['uix_width'], ENT_QUOTES, 'UTF-8') . '\') : parseInt(\'' . htmlspecialchars($xenOptions['uix_defaultWidth'], ENT_QUOTES, 'UTF-8') . '\'),
								stickyThreadsState	: (parseInt(\'' . htmlspecialchars($uix_collapseStickyThreads, ENT_QUOTES, 'UTF-8') . '\') == parseInt(\'' . htmlspecialchars($uix_collapseStickyThreads, ENT_QUOTES, 'UTF-8') . '\')) ? (parseInt(\'' . htmlspecialchars($uix_collapseStickyThreads, ENT_QUOTES, 'UTF-8') . '\') > 0) : 0,
								';
if ($visitor['uix_sidebar'] > $uix_currentTimestamp)
{
$__output .= '
									sidebarState	: 1,
								';
}
else
{
$__output .= '
									sidebarState	: 0,
								';
}
$__output .= '
								';
if (!$visitor['user_id'] || $visitor['uix_collapse_user_info'])
{
$__output .= '
									collapseUserInfo : 1,
								';
}
else
{
$__output .= '
									collapseUserInfo : 0,
								';
}
$__output .= '
								';
if (!$visitor['user_id'] || $visitor['uix_collapse_signature'])
{
$__output .= '
									signatureHiding : 1,
								';
}
else
{
$__output .= '
									signatureHiding : 0,
								';
}
$__output .= '
							}
	};
	
	if(uix.stickyNavigationMaxWidth == 0){uix.stickyNavigationMaxWidth = 999999}
	if(uix.stickyNavigationMaxHeight == 0){uix.stickyNavigationMaxHeight = 999999}
	if(uix.stickyNavigationPortraitMaxWidth == 0){uix.stickyNavigationPortraitMaxWidth = 999999}
	if(uix.stickyNavigationPortraitMaxHeight == 0){uix.stickyNavigationPortraitMaxHeight = 999999}
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation') && ($visitor['uix_sticky_navigation'] || $visitor['user_id'] == 0))
{
$__output .= '
		uix.stickyItems[\'#navigation\'] = {normalHeight:parseInt(\'' . htmlspecialchars($headerTabHeight_outer, ENT_QUOTES, 'UTF-8') . '\'), stickyHeight:parseInt(\'' . htmlspecialchars($uix_fixedNavigationHeight_outer, ENT_QUOTES, 'UTF-8') . '\')}
		
		var subElement = null;
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') == 0)
{
$__output .= '
			//if tablinks are visible
			uix.stickyItems[\'#navigation\'].options = {subElement: \'#navigation .tabLinks\', subNormalHeight: parseInt(\'' . htmlspecialchars($uix_tabLinksHeight_outer, ENT_QUOTES, 'UTF-8') . '\'), subStickyHeight: parseInt(\'' . htmlspecialchars($uix_tabLinksHeightSticky_outer, ENT_QUOTES, 'UTF-8') . '\'), subStickyHide: ' . XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinksSticky') . ' == 1 , scrollSticky: uix.stickyGlobalScrollUp }
		';
}
else
{
$__output .= '
			uix.stickyItems[\'#navigation\'].options = {scrollSticky: uix.stickyGlobalScrollUp }
		';
}
$__output .= '
		
	';
}
$__output .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_stickyUserBar') && ($visitor['uix_sticky_userbar'] || $visitor['user_id'] == 0))
{
$__output .= '
	$(document).ready(function() {
		if ( $(\'#userBar\').length ) {
			uix.stickyItems[\'#userBar\']= {normalHeight:parseInt(\'' . htmlspecialchars($userBar_headerTabHeight_outer, ENT_QUOTES, 'UTF-8') . '\'), stickyHeight:parseInt(\'' . htmlspecialchars($userBar_uix_fixedNavigationHeight_outer, ENT_QUOTES, 'UTF-8') . '\')}
			
			uix.stickyItems[\'#userBar\'].options = {scrollSticky: uix.stickyGlobalScrollUp }
		}
	});
	';
}
$__output .= '
	
	';
$__compilerVar1 = '';
$__compilerVar1 .= '$(document).ready(function(){
	
	//put jquery code here
	

});';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
	
	uix.debug = function() {
		result = "\\n\\n############============   Begin Copying Here   ============############\\n\\n";
		result += "Error: the functions file was not found.";
		result += "\\n\\n############============   End Copying Here   ============############\\n\\n";

		console.log(result);
	}

</script>

<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/audentio/' . htmlspecialchars($uix_jsPathUsed, ENT_QUOTES, 'UTF-8') . '/functions' . ((!XenForo_Template_Helper_Core::styleProperty('uix_beta')) ? ('.min') : ('')) . '.js?_v=' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '_' . XenForo_Template_Helper_Core::styleProperty('uix_version') . '"></script>

<script>
	uix.adminJsError = function(errMsg) {
		console.error(errMsg);
		
		';
if ($visitor['is_admin'])
{
$__output .= '
			if (parseInt(\'' . htmlspecialchars($xenOptions['uix_enableHelpfulAlerts'], ENT_QUOTES, 'UTF-8') . '\')) {
				var errorEle = document.createElement("div");
				errorEle.innerHTML = \'<div class="uix_upgradeMessage importantMessage"><i class="uix_icon uix_icon-alerts"></i>\' + errMsg.split(\'\\n\').join(\'<br />\') + \'</div>\';
				var contentPage = $(\'#content .pageContent\');
				if (contentPage.length) {
					contentPage.prepend(errorEle);
				}
			}
		';
}
$__output .= '
	}
	
	uix.fixJsVisibility = function() {
		var userBar = $(\'.hasJs #userBar\');
		var nodeList = $(\'.hasJs #forums, .hasJs .category_view .nodeList, .hasJs .watch_forums .nodeList\');
		if (userBar.length) userBar.css(\'display\', \'block\');
		if (nodeList.length) nodeList.css(\'visibility\', \'visible\');
	}
	
	uix.catchJsError = function(err) {
		console.log("\\n\\n############============   Begin Copying Here   ============############\\n\\n")
		var errMsg = "Uh Oh!  It looks like there\'s an error in your page\'s javascript.  There will likely be significant issues with the use of the forum until this is corrected.  If you are unable to resolve this and believe it is due to a bug in your Audentio Design theme, contact Audentio support and include a copy of the text between the designated areas from your javascript console.  This is the error: \\n\\n" + err ;
		uix.fixJsVisibility();	
		uix.adminJsError(errMsg);
		console.log("\\n\\n");
		console.log(err);
		console.log("\\n\\n");
		try {
			uix.debug(true);
		} catch (err) {
			console.log("Unable to include uix.debug();");
		}
		
		console.log("\\n\\n############============   End Copying Here   ============############\\n\\n");
	}

	$(document).ready(function(){
		if (typeof(audentio) === \'undefined\') {
			var errMsg = \'Uh Oh!  It looks like the javascript for your theme was not found in /js/audentio/' . htmlspecialchars($uix_jsPathUsed, ENT_QUOTES, 'UTF-8') . '/.\\n\\n\';
			if (uix.jsGlobal) {
				errMsg += \'Your forum is set to use the same javascript directory for all your themes.  Consider disabling this or modifying the directory.  Options are located under Options > [UI.X] General.\\n\\n\'
			} else {
				errMsg += \'Your theme has set the location of its javascript directory.  You may need to modify the javascript directory location style property located under [UI.X] Global Settings > Javascript Path.\\n\\n\'
			}
			errMsg += \'If your files are in the directory specified, ensure that your file permissions allow them to be read.  There will likely be significant issues with the use of the forum until this is corrected.  If you are unable to resolve this, contact Audentio support.  This error has also been logged to the javascript console.\';
			
			uix.fixJsVisibility();
			
			uix.adminJsError(errMsg);
		} else if (uix.jsHeadVersion != uix.jsVersion) {
			var errMsg = \'Uh Oh! It looks like the version of your javascript functions file does not match the version of your page_container_js_head template.  \\n\\nYour javascript functions file is version "\' + uix.jsVersion + \'". \\nYour page_container_js_head is version "\' + uix.jsHeadVersion + \'".  \\n\\nIf your functions file version number is higher, ensure that you have merged all templates (especially page_container_js_head).  If your page_container_js_head version number is higher, ensure that you have correctly uploaded the latest version of the javascript functions file and that you have cleared anything that could cache an old version of the javascript (CDN / Cloudflare / etc.). \\n\\nThis issue could cause parts of your forum to not display or function correctly.  If this does not resolve the issue contact Audentio support.  This error has also been logged to the javascript console.\';
			uix.adminJsError(errMsg);
		}
	});
</script>

<script>
	try {
		uix.sticky.stickyMinDist = parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyGlobalMinTriggerDist') . '\');
		
		$(document).ready(function(){
			try {
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 3)
{
$__output .= '
					audentio.grid.parse(\'' . $uix_nodeLayouts . '\');
					';
$__compilerVar2 = '';
$__compilerVar2 .= '

audentio.grid.addSizeListener(\'global\', \'audentio_grid_xs\', ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeGrid_xs') . ', 0);
audentio.grid.addSizeListener(\'global\', \'audentio_grid_sm\', ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeGrid_sm') . ', 0);
audentio.grid.addSizeListener(\'global\', \'audentio_grid_md\', ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeGrid_md') . ', 0);
audentio.grid.addSizeListener(\'global\', \'audentio_grid_lg\', ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeGrid_lg') . ', 0);
audentio.grid.addSizeListener(\'global\', \'audentio_grid_xl\', ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeGrid_xl') . ', 0);';
$__output .= $__compilerVar2;
unset($__compilerVar2);
$__output .= '
				';
}
$__output .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination'))
{
$__output .= '																
					audentio.pagination.enabled = true;
					';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 0)
{
$__output .= '
						audentio.grid.parentEle = \'navigation\';
					';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 1)
{
$__output .= '
						audentio.grid.parentEle = \'userBar\';
					';
}
$__output .= '
					audentio.pagination.outOfPhrase = \'' . '' . '<span id="audentio_postPaginationCurrent" class="uix_postPagination_x"></span>' . ' / ' . '<span id="audentio_postPaginationTotal" class="uix_postPagination_y"></span>' . '' . '\';
					audentio.pagination.enterIndexPhrase = \'' . 'Enter Index' . '\';
					audentio.pagination.offset = parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_postPaginationOffset') . '\');
				';
}
$__output .= '
				
				uix.initFunc();
			} catch (err) {
				uix.catchJsError(err);
			}
		});
	} catch (err) {
		uix.catchJsError(err);
	}
</script>

';
if (XenForo_Template_Helper_Core::styleProperty('uix_enableBackstretch') && XenForo_Template_Helper_Core::styleProperty('uix_backstretchImages'))
{
$__output .= '
<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/audentio/' . htmlspecialchars($uix_jsPathUsed, ENT_QUOTES, 'UTF-8') . '/backstretch.min.js?_v=' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '_' . XenForo_Template_Helper_Core::styleProperty('uix_version') . '"></script>
<script>
$(document).ready(function() {
	$';
if (XenForo_Template_Helper_Core::styleProperty('uix_backstretchSelector'))
{
$__output .= '("' . XenForo_Template_Helper_Core::styleProperty('uix_backstretchSelector') . '")';
}
$__output .= '.backstretch([
		' . XenForo_Template_Helper_Core::styleProperty('uix_backstretchImages') . '
	], {
		fade: ' . XenForo_Template_Helper_Core::styleProperty('uix_backstretchFade') . ',
		duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_backstretchDuration') . '
	});
});
</script>
';
}
