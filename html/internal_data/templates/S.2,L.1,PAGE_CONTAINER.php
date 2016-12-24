<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$uix_adStyler_enabled = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_adStylerOn') && ($uix_canUseStylerPanel || $uix_canUseStylerPresets || $uix_canUseStylerSwatches))
{
$uix_adStyler_enabled .= '1';
}
else
{
$uix_adStyler_enabled .= '0';
}
$__output .= '



<!DOCTYPE html>';
$isResponsive = ((XenForo_Template_Helper_Core::styleProperty('enableResponsive') AND !$noResponsive) ? ('1') : ('0'));
$__output .= '
<html id="XenForo" lang="' . htmlspecialchars($visitorLanguage['language_code'], ENT_QUOTES, 'UTF-8') . '" dir="' . htmlspecialchars($visitorLanguage['text_direction'], ENT_QUOTES, 'UTF-8') . '" class="Public NoJs ' . (($visitor['user_id']) ? ('LoggedIn') : ('LoggedOut')) . ' ' . (($sidebar) ? ('Sidebar') : ('NoSidebar')) . ' ' . (($hasAutoDeferred) ? ('RunDeferred') : ('')) . ' ' . (($isResponsive) ? ('Responsive') : ('NoResponsive')) . ((XenForo_Template_Helper_Core::styleProperty('uix_navigationFixed')) ? (' hasHeaderFixed') : (''));
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 1)
{
$__output .= ' hasNavAtTop';
}
$__output .= ((!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? (' hasTabLinks') : (' not_hasTabLinks')) . ((XenForo_Template_Helper_Core::styleProperty('uix_beta')) ? (' uix_betaMode') : ('')) . (($canSearch) ? (' hasSearch') : (' not_hasSearch'));
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2)
{
$__output .= ' activeSmallLogo';
}
$__output .= ' navStyle_' . XenForo_Template_Helper_Core::styleProperty('uix_navStyle') . ' pageStyle_' . XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') . ' hasFlexbox" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>

';
$__compilerVar1 = '';
$__compilerVar1 .= '
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	';
if ($isResponsive)
{
$__compilerVar1 .= '
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	';
}
$__compilerVar1 .= '
	';
if ($requestPaths['fullBasePath'])
{
$__compilerVar1 .= '
		<base href="' . htmlspecialchars($requestPaths['fullBasePath'], ENT_QUOTES, 'UTF-8') . '" />
		<script>
			var _b = document.getElementsByTagName(\'base\')[0], _bH = "' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($requestPaths['fullBasePath'], ENT_QUOTES, 'UTF-8'), 'double') . '";
			if (_b && _b.href != _bH) _b.href = _bH;
		</script>
	';
}
$__compilerVar1 .= '

	';
if ($contentTemplate == ('thread_view') && $xenOptions['BRME_removeBoardTitle'])
{
$__compilerVar1 .= '
	<title>';
if ($title)
{
$__compilerVar1 .= $title;
}
else
{
$__compilerVar1 .= htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar1 .= '</title>
';
}
else
{
$__compilerVar1 .= '<title>';
if ($title)
{
$__compilerVar1 .= $title . ' | ' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8');
}
else
{
$__compilerVar1 .= htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar1 .= '</title>';
}
$__compilerVar1 .= '
	
	<noscript><style>.JsOnly, .jsOnly { display: none !important; }</style></noscript>
	<link rel="stylesheet" href="css.php?css=xenforo,form,public&amp;style=' . urlencode($_styleId) . '&amp;dir=' . htmlspecialchars($visitorLanguage['text_direction'], ENT_QUOTES, 'UTF-8') . '&amp;d=' . htmlspecialchars($visitorStyle['last_modified_date'], ENT_QUOTES, 'UTF-8') . '" />
	
	<!--XenForo_Require:CSS-->
	
	<link rel="stylesheet" href="css.php?css=uix';
if (XenForo_Template_Helper_Core::styleProperty('uix_cssTemplate'))
{
$__compilerVar1 .= ',' . XenForo_Template_Helper_Core::styleProperty('uix_cssTemplate');
}
$__compilerVar1 .= '&amp;style=' . urlencode($_styleId) . '&amp;dir=' . htmlspecialchars($visitorLanguage['text_direction'], ENT_QUOTES, 'UTF-8') . '&amp;d=' . htmlspecialchars($visitorStyle['last_modified_date'], ENT_QUOTES, 'UTF-8') . '" />
	
	';
$__compilerVar2 = '';
$__compilerVar2 .= '<style>
/* User specific styling */

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_widthToggle') && XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') > 100)
{
$__compilerVar2 .= '
		.pageWidth {
			';
if (XenForo_Template_Helper_Core::numberFormat($visitor['uix_width'], '0') == 1 || (!$visitor['user_id'] && $xenOptions['uix_defaultWidth'] == 1))
{
$__compilerVar2 .= '
				max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_widthToggleFluid') . ';
			';
}
else
{
$__compilerVar2 .= '
				max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
			';
}
$__compilerVar2 .= '
		}
	
	
		.Menu.uix_megaMenu
		{
			';
if (XenForo_Template_Helper_Core::numberFormat($visitor['uix_width'], '0') == 1 || (!$visitor['user_id'] && $xenOptions['uix_defaultWidth'] == 1))
{
$__compilerVar2 .= '
				max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_widthToggleFluid') . ';
			';
}
else
{
$__compilerVar2 .= '
				max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
			';
}
$__compilerVar2 .= '
		}
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 2)
{
$__compilerVar2 .= '
		
			#uix_wrapper {
				';
if (XenForo_Template_Helper_Core::numberFormat($visitor['uix_width'], '0') == 1 || (!$visitor['user_id'] && $xenOptions['uix_defaultWidth'] == 1))
{
$__compilerVar2 .= '
					max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_widthToggleFluid') . ';
				';
}
else
{
$__compilerVar2 .= '
					max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
				';
}
$__compilerVar2 .= '
			}
			
			#uix_wrapper .activeSticky .pageWidth 
			{
				';
if (XenForo_Template_Helper_Core::numberFormat($visitor['uix_width'], '0') == 1 || (!$visitor['user_id'] && $xenOptions['uix_defaultWidth'] == 1))
{
$__compilerVar2 .= '
					max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_widthToggleFluid') . ';
				';
}
else
{
$__compilerVar2 .= '
					max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
				';
}
$__compilerVar2 .= '
			}
			.Menu.uix_megaMenu
			{
				';
if (XenForo_Template_Helper_Core::numberFormat($visitor['uix_width'], '0') == 1 || (!$visitor['user_id'] && $xenOptions['uix_defaultWidth'] == 1))
{
$__compilerVar2 .= '
					max-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_widthToggleFluid') - (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.padding-left') + XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.padding-right')) - (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.border-left-width') + XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.border-right-width'))) . 'px;
				';
}
else
{
$__compilerVar2 .= '
					max-width: calc(' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ' - ' . ((XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.padding-left') + XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.padding-right')) - (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.border-left-width') + XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.border-right-width'))) . 'px);
				';
}
$__compilerVar2 .= '
			}
			
			@media (max-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') + (2 * XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth'))) . 'px) {
				.Responsive #uix_wrapper, .Responsive #uix_wrapper .activeSticky .pageWidth, .Responsive .Menu.uix_megaMenu  {
					max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
				}
			}
		';
}
$__compilerVar2 .= '
		
	';
}
$__compilerVar2 .= '
	
	';
if ($visitor['user_id'])
{
$__compilerVar2 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapseSticky') && $uix_collapseStickyThreads)
{
$__compilerVar2 .= '
			.uix_stickyThreads {
				display: none;
			}
		';
}
$__compilerVar2 .= '
		
		';
if ($visitor['uix_sidebar'] > $uix_currentTimestamp)
{
$__compilerVar2 .= '
			.uix_mainSidebar {
				display: none;
			}
			
			
			.mainContainer .mainContent {
				margin-right: 0;
				margin-left: 0;
			}
			
		';
}
$__compilerVar2 .= '
	';
}
$__compilerVar2 .= '
	
	';
if ($xenOptions['uix_enableCollapseUserInfo'])
{
$__compilerVar2 .= '
	
		';
if (!$visitor['user_id'] || $visitor['uix_collapse_user_info'])
{
$__compilerVar2 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_threadSlidingAvatar'))
{
$__compilerVar2 .= '
				@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint') . ') {
					.Responsive .messageList .messageUserBlock .avatarHolder {
						border-bottom-width: 0;
					}
				}
			
				@media (min-width: ' . XenForo_Template_Helper_Core::numberFormat((XenForo_Template_Helper_Core::numberFormat(XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint'), '0') + 1), '0') . 'px) {
					.messageList .messageUserBlock .avatarHolder {
						display: none;
					}
					
					.messageList .messageUserInfo .arrow span {
						border-left-color: ' . XenForo_Template_Helper_Core::styleProperty('messageUserText.background-color') . ';
						-webkit-transition: border-left-color 0.15s;
						-ms-transition: border-left-color 0.15s;
						-moz-transition: border-left-color 0.15s;
						transition: border-left-color 0.15s;
					}
					
					.messageList .messageUserInfo .expanded .arrow span {
						border-left-color: ' . XenForo_Template_Helper_Core::styleProperty('messageAvatarHolder.background-color') . ';
					}
					
					.messageList .quickReply .messageUserBlock .avatarHolder {
						display: block;
						border-bottom-width: 0;
					}
					
					.messageList .quickReply .messageUserInfo .arrow span {
						border-left-color: ' . XenForo_Template_Helper_Core::styleProperty('messageAvatarHolder.background-color') . ';
					}
			
					.messageList .uix_noCollapseMessage .avatarHolder,
					.messageList .message.deleted .avatarHolder {
						display: block;
					}
						
					.messageList .uix_noCollapseMessage .arrow span,
					.messageList .message.deleted .arrow span {
						border-left-color: ' . XenForo_Template_Helper_Core::styleProperty('messageAvatarHolder.background-color') . ';
					}
				}
			';
}
$__compilerVar2 .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_threadSlidingExtra'))
{
$__compilerVar2 .= '
				.messageList .messageUserBlock .extraUserInfo {
					display: none;
				}
			
				@media (min-width: ' . XenForo_Template_Helper_Core::numberFormat((XenForo_Template_Helper_Core::numberFormat(XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint'), '0') + 1), '0') . 'px) {
					.messageList .uix_noCollapseMessage .extraUserInfo,
					.messageList .message.deleted .extraUserInfo {
						display: block;
					}
				}
			';
}
$__compilerVar2 .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_threadSlidingAvatar') || XenForo_Template_Helper_Core::styleProperty('uix_threadSlidingExtra'))
{
$__compilerVar2 .= '
				@media (min-width: ' . XenForo_Template_Helper_Core::numberFormat((XenForo_Template_Helper_Core::numberFormat(XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint'), '0') + 1), '0') . 'px) {
					.messageList .message .uix_threadSlide {
						display: block;
					}
					
					.messageList .message.uix_noCollapseMessage .uix_threadSlide {
						display: none;
					}
				}
			';
}
$__compilerVar2 .= '
		';
}
$__compilerVar2 .= '
	';
}
$__compilerVar2 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_signatureHidingEnabled') && $xenOptions['uix_enableCollapseSignature'])
{
$__compilerVar2 .= '
		';
if ($visitor['user_id'] > 0 && $visitor['uix_collapse_signature'] == 0)
{
$__compilerVar2 .= '
			li.message .signature .uix_signatureWrapperInner
			{
				max-height: none;
			}
			
			li.message .signature .uix_signatureCover,
			li.message .uix_signatureToggle
			{
				display: none;
			}
		';
}
$__compilerVar2 .= '
	';
}
$__compilerVar2 .= '	

</style>';
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
$__compilerVar1 .= '
	
	<link rel="stylesheet" href="css.php?css=EXTRA&amp;style=' . urlencode($_styleId) . '&amp;dir=' . htmlspecialchars($visitorLanguage['text_direction'], ENT_QUOTES, 'UTF-8') . '&amp;d=' . htmlspecialchars($visitorStyle['last_modified_date'], ENT_QUOTES, 'UTF-8') . '" />

	';
if ($uix_hidePageNodeContainer)
{
$__compilerVar1 .= '
	<style>#pageNodeContent .bottomContent {display: none;}#pageNodeContent {padding: 0;}</style>
	';
}
$__compilerVar1 .= '
	
	';
$__compilerVar3 = '';
$__compilerVar3 .= '<style>
/* Node Styling */
' . $cssOutput . '
</style>';
$__compilerVar1 .= $__compilerVar3;
unset($__compilerVar3);
$__compilerVar1 .= '

	' . XenForo_Template_Helper_Core::callHelper('ignoredCss', array(
'0' => $visitor['ignoredUsers']
)) . '

	';
if ($uix_adStyler_enabled)
{
$__compilerVar1 .= '
		<link rel="stylesheet" href="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/audentio/ad_styler/2.1/stylesheets/colpick.css" />
		<link rel="stylesheet" href="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/audentio/ad_styler/2.1/stylesheets/styleit.css" />
	';
}
$__compilerVar1 .= '

	';
$__compilerVar4 = '';
if ($xenOptions['googleAnalyticsWebPropertyId'])
{
$__compilerVar4 .= '<script>

	(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');
	
	ga(\'create\', \'' . htmlspecialchars($xenOptions['googleAnalyticsWebPropertyId'], ENT_QUOTES, 'UTF-8') . '\', \'auto\');
	ga(\'send\', \'pageview\');

</script>';
}
$__compilerVar1 .= $__compilerVar4;
unset($__compilerVar4);
$__compilerVar1 .= '
	';
$__compilerVar5 = '';
if ($xenOptions['uix_useSameJsForAllStyles'])
{
$__compilerVar5 .= '
	';
$uix_jsPathUsed = '';
$uix_jsPathUsed .= htmlspecialchars($xenOptions['uix_jsPath'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else
{
$__compilerVar5 .= '
	';
$uix_jsPathUsed = '';
$uix_jsPathUsed .= XenForo_Template_Helper_Core::styleProperty('uix_jsPath');
$__compilerVar5 .= '
';
}
$__compilerVar5 .= '

';
$headerTabHeight_outer = '';
$headerTabHeight_outer .= (XenForo_Template_Helper_Core::styleProperty('headerTabHeight') + XenForo_Template_Helper_Core::styleProperty('navTabs.border-top-width') + XenForo_Template_Helper_Core::styleProperty('navTabs.border-bottom-width') + XenForo_Template_Helper_Core::styleProperty('navTabs.padding-top') + XenForo_Template_Helper_Core::styleProperty('navTabs.padding-bottom'));
$__compilerVar5 .= '
';
$uix_fixedNavigationHeight_outer = '';
$uix_fixedNavigationHeight_outer .= (XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigationHeight') + XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigation_style.border-top-width') + XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigation_style.border-bottom-width') + XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigation_style.padding-top') + XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigation_style.padding-bottom'));
$__compilerVar5 .= '

';
$uix_tabLinksHeight_outer = '';
$uix_tabLinksHeight_outer .= (XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeight') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinks_style.padding-top') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinks_style.padding-bottom') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinks_style.border-bottom-width') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinks_style.border-top-width'));
$__compilerVar5 .= '
';
$uix_tabLinksHeightSticky_outer = '';
$uix_tabLinksHeightSticky_outer .= (XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeightSticky') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinksSticky_style.padding-top') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinksSticky_style.padding-bottom') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinksSticky_style.border-bottom-width') + XenForo_Template_Helper_Core::styleProperty('uix_tabLinksSticky_style.border-top-width'));
$__compilerVar5 .= '

';
$userBar_headerTabHeight_outer = '';
$userBar_headerTabHeight_outer .= (XenForo_Template_Helper_Core::styleProperty('uix_userBarHeight') + XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.border-top-width') + XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.border-bottom-width') + XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.padding-top') + XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.padding-bottom'));
$__compilerVar5 .= '
';
$userBar_uix_fixedNavigationHeight_outer = '';
$userBar_uix_fixedNavigationHeight_outer .= (XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBarHeight') + XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBar_style.border-top-width') + XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBar_style.border-bottom-width') + XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBar_style.padding-top') + XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBar_style.padding-bottom'));
$__compilerVar5 .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_fontAwesome'))
{
$__compilerVar5 .= '<link href="' . XenForo_Template_Helper_Core::styleProperty('uix_fontAwesome') . '" rel="stylesheet">';
}
$__compilerVar5 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('uix_googleFonts'))
{
$__compilerVar5 .= '<link href=\'//fonts.googleapis.com/css?family=' . XenForo_Template_Helper_Core::styleProperty('uix_googleFonts') . '\' rel=\'stylesheet\' type=\'text/css\'>';
}
$__compilerVar5 .= '


<script src="' . htmlspecialchars($jQuerySource, ENT_QUOTES, 'UTF-8') . '"></script>	
';
if ($jQuerySource != $jQuerySourceLocal)
{
$__compilerVar5 .= '
	<script>if (!window.jQuery) { document.write(\'<scr\'+\'ipt type="text/javascript" src="' . htmlspecialchars($jQuerySourceLocal, ENT_QUOTES, 'UTF-8') . '"><\\/scr\'+\'ipt>\'); }</script>
';
}
$__compilerVar5 .= '

';
if ($xenOptions['uncompressedJs'] == 1 OR $xenOptions['uncompressedJs'] == 3)
{
$__compilerVar5 .= '
	<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/jquery/jquery.xenforo.rollup.js?_v=' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '"></script>
';
}
$__compilerVar5 .= '	
<script src="' . XenForo_Template_Helper_Core::callHelper('javaScriptUrl', array(
'0' => $javaScriptSource . '/xenforo/xenforo.js?_v=' . $xenOptions['jsVersion']
)) . '"></script>
<!--XenForo_Require:JS-->


';
if (XenForo_Template_Helper_Core::styleProperty('uix_ie8Support'))
{
$__compilerVar5 .= '
<!--[if lt IE 9]>
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_ie8Support_local'))
{
$__compilerVar5 .= '
		<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/audentio/' . htmlspecialchars($uix_jsPathUsed, ENT_QUOTES, 'UTF-8') . '/ie8_polyfill.min.js"></script>
	';
}
else
{
$__compilerVar5 .= '
		 
        	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	        
	        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	        
	        <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
	';
}
$__compilerVar5 .= '
<![endif]-->
       
';
}
$__compilerVar5 .= '

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
$__compilerVar5 .= '
			responsiveMessageBreakpoint		: 99999,
		';
}
else
{
$__compilerVar5 .= '
			responsiveMessageBreakpoint		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint') . '\'),
		';
}
$__compilerVar5 .= '
		sidebarMaxResponsiveWidthStr		: \'' . XenForo_Template_Helper_Core::styleProperty('uix_sidebarMaxResponsiveWidth') . '\',
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') == ('100%') || !XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth'))
{
$__compilerVar5 .= '
			offCanvasTriggerWidth		: 99999,
		';
}
else
{
$__compilerVar5 .= '
			offCanvasTriggerWidth		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') . '\'),
		';
}
$__compilerVar5 .= '
	  
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
$__compilerVar5 .= '
			sidebarInnerFloat 		: ' . (($pageIsRtl) ? ('"right"') : ('"left"')) . ',
		';
}
else
{
$__compilerVar5 .= '
			sidebarInnerFloat		: ' . (($pageIsRtl) ? ('"left"') : ('"right"')) . ',
		';
}
$__compilerVar5 .= '
		RTL					: ' . (($pageIsRtl) ? ('1') : ('0')) . ',
		stickyItems 				: {},
		stickyGlobalMinimumPosition		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyGlobalMinimumPosition') . '\'),
		stickyGlobalScrollUp			: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_stickyGlobalScrollUp') . '\'),
		stickyDisableIOSThirdParty		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_disableStickyIOS') . '\'),
		
		searchMinimalSize			: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize') == ('100%')) ? ('99999') : ('parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize') . '\')')) . ',
		
		searchPosition				: parseInt(\'';
if ((XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 1 && (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2 || (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)) || (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 0 && XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))))
{
$__compilerVar5 .= '2';
}
else
{
$__compilerVar5 .= XenForo_Template_Helper_Core::styleProperty('uix_searchPosition');
}
$__compilerVar5 .= '\'),
		
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
$__compilerVar5 .= '
			sidebarStickyBottomOffset	: parseInt(\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2)) . '\'),
		';
}
else
{
$__compilerVar5 .= '
			sidebarStickyBottomOffset	: parseInt(0),
		';
}
$__compilerVar5 .= '
	  
	  	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') > 0 || XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') > 0)
{
$__compilerVar5 .= '
			offCanvasSidebar			: 1,

			';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 || XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2)
{
$__compilerVar5 .= '
				offCanvasSidebarVisitorTabs		: 1,
			';
}
else
{
$__compilerVar5 .= '
				offCanvasSidebarVisitorTabs		: 0,
			';
}
$__compilerVar5 .= '
		
		';
}
else
{
$__compilerVar5 .= '
			offCanvasSidebar			: 0,
			offCanvasSidebarVisitorTabs		: 0,
		';
}
$__compilerVar5 .= '
	  
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
$__compilerVar5 .= 'node_' . htmlspecialchars($nodeId, ENT_QUOTES, 'UTF-8') . ',';
}
}
$__compilerVar5 .= '\',
		widthToggleUpper			: \'' . XenForo_Template_Helper_Core::styleProperty('uix_widthToggleFluid') . '\',
		widthToggleLower			: \'' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . '\',
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') > 100)
{
$__compilerVar5 .= '
			toggleWidthEnabled		: parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_widthToggle') . '\'),
		';
}
else
{
$__compilerVar5 .= '
			toggleWidthEnabled		: false,
		';
}
$__compilerVar5 .= '
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
$__compilerVar5 .= '
									sidebarState	: 1,
								';
}
else
{
$__compilerVar5 .= '
									sidebarState	: 0,
								';
}
$__compilerVar5 .= '
								';
if (!$visitor['user_id'] || $visitor['uix_collapse_user_info'])
{
$__compilerVar5 .= '
									collapseUserInfo : 1,
								';
}
else
{
$__compilerVar5 .= '
									collapseUserInfo : 0,
								';
}
$__compilerVar5 .= '
								';
if (!$visitor['user_id'] || $visitor['uix_collapse_signature'])
{
$__compilerVar5 .= '
									signatureHiding : 1,
								';
}
else
{
$__compilerVar5 .= '
									signatureHiding : 0,
								';
}
$__compilerVar5 .= '
							}
	};
	
	if(uix.stickyNavigationMaxWidth == 0){uix.stickyNavigationMaxWidth = 999999}
	if(uix.stickyNavigationMaxHeight == 0){uix.stickyNavigationMaxHeight = 999999}
	if(uix.stickyNavigationPortraitMaxWidth == 0){uix.stickyNavigationPortraitMaxWidth = 999999}
	if(uix.stickyNavigationPortraitMaxHeight == 0){uix.stickyNavigationPortraitMaxHeight = 999999}
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation') && ($visitor['uix_sticky_navigation'] || $visitor['user_id'] == 0))
{
$__compilerVar5 .= '
		uix.stickyItems[\'#navigation\'] = {normalHeight:parseInt(\'' . htmlspecialchars($headerTabHeight_outer, ENT_QUOTES, 'UTF-8') . '\'), stickyHeight:parseInt(\'' . htmlspecialchars($uix_fixedNavigationHeight_outer, ENT_QUOTES, 'UTF-8') . '\')}
		
		var subElement = null;
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') == 0)
{
$__compilerVar5 .= '
			//if tablinks are visible
			uix.stickyItems[\'#navigation\'].options = {subElement: \'#navigation .tabLinks\', subNormalHeight: parseInt(\'' . htmlspecialchars($uix_tabLinksHeight_outer, ENT_QUOTES, 'UTF-8') . '\'), subStickyHeight: parseInt(\'' . htmlspecialchars($uix_tabLinksHeightSticky_outer, ENT_QUOTES, 'UTF-8') . '\'), subStickyHide: ' . XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinksSticky') . ' == 1 , scrollSticky: uix.stickyGlobalScrollUp }
		';
}
else
{
$__compilerVar5 .= '
			uix.stickyItems[\'#navigation\'].options = {scrollSticky: uix.stickyGlobalScrollUp }
		';
}
$__compilerVar5 .= '
		
	';
}
$__compilerVar5 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_stickyUserBar') && ($visitor['uix_sticky_userbar'] || $visitor['user_id'] == 0))
{
$__compilerVar5 .= '
	$(document).ready(function() {
		if ( $(\'#userBar\').length ) {
			uix.stickyItems[\'#userBar\']= {normalHeight:parseInt(\'' . htmlspecialchars($userBar_headerTabHeight_outer, ENT_QUOTES, 'UTF-8') . '\'), stickyHeight:parseInt(\'' . htmlspecialchars($userBar_uix_fixedNavigationHeight_outer, ENT_QUOTES, 'UTF-8') . '\')}
			
			uix.stickyItems[\'#userBar\'].options = {scrollSticky: uix.stickyGlobalScrollUp }
		}
	});
	';
}
$__compilerVar5 .= '
	
	';
$__compilerVar6 = '';
$__compilerVar6 .= '$(document).ready(function(){
	
	//put jquery code here
	

});';
$__compilerVar5 .= $__compilerVar6;
unset($__compilerVar6);
$__compilerVar5 .= '
	
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
$__compilerVar5 .= '
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
$__compilerVar5 .= '
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
$__compilerVar5 .= '
					audentio.grid.parse(\'' . $uix_nodeLayouts . '\');
					';
$__compilerVar7 = '';
$__compilerVar7 .= '

audentio.grid.addSizeListener(\'global\', \'audentio_grid_xs\', ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeGrid_xs') . ', 0);
audentio.grid.addSizeListener(\'global\', \'audentio_grid_sm\', ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeGrid_sm') . ', 0);
audentio.grid.addSizeListener(\'global\', \'audentio_grid_md\', ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeGrid_md') . ', 0);
audentio.grid.addSizeListener(\'global\', \'audentio_grid_lg\', ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeGrid_lg') . ', 0);
audentio.grid.addSizeListener(\'global\', \'audentio_grid_xl\', ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeGrid_xl') . ', 0);';
$__compilerVar5 .= $__compilerVar7;
unset($__compilerVar7);
$__compilerVar5 .= '
				';
}
$__compilerVar5 .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination'))
{
$__compilerVar5 .= '																
					audentio.pagination.enabled = true;
					';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 0)
{
$__compilerVar5 .= '
						audentio.grid.parentEle = \'navigation\';
					';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 1)
{
$__compilerVar5 .= '
						audentio.grid.parentEle = \'userBar\';
					';
}
$__compilerVar5 .= '
					audentio.pagination.outOfPhrase = \'' . '' . '<span id="audentio_postPaginationCurrent" class="uix_postPagination_x"></span>' . ' / ' . '<span id="audentio_postPaginationTotal" class="uix_postPagination_y"></span>' . '' . '\';
					audentio.pagination.enterIndexPhrase = \'' . 'Enter Index' . '\';
					audentio.pagination.offset = parseInt(\'' . XenForo_Template_Helper_Core::styleProperty('uix_postPaginationOffset') . '\');
				';
}
$__compilerVar5 .= '
				
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
$__compilerVar5 .= '
<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/audentio/' . htmlspecialchars($uix_jsPathUsed, ENT_QUOTES, 'UTF-8') . '/backstretch.min.js?_v=' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '_' . XenForo_Template_Helper_Core::styleProperty('uix_version') . '"></script>
<script>
$(document).ready(function() {
	$';
if (XenForo_Template_Helper_Core::styleProperty('uix_backstretchSelector'))
{
$__compilerVar5 .= '("' . XenForo_Template_Helper_Core::styleProperty('uix_backstretchSelector') . '")';
}
$__compilerVar5 .= '.backstretch([
		' . XenForo_Template_Helper_Core::styleProperty('uix_backstretchImages') . '
	], {
		fade: ' . XenForo_Template_Helper_Core::styleProperty('uix_backstretchFade') . ',
		duration: ' . XenForo_Template_Helper_Core::styleProperty('uix_backstretchDuration') . '
	});
});
</script>
';
}
$__compilerVar1 .= $__compilerVar5;
unset($__compilerVar5);
$__compilerVar1 .= '
	
	';
if ($xenOptions['uix_favicon'])
{
$__compilerVar1 .= '<link href="' . htmlspecialchars($xenOptions['uix_favicon'], ENT_QUOTES, 'UTF-8') . '" rel="icon" type="image/x-icon" />';
}
$__compilerVar1 .= '
	';
$__compilerVar8 = '';
if ($visitor['user_id'] AND $visitor['liveupdate_display_option'])
{
$__compilerVar8 .= '
	<link rel="shortcut icon" href="' . (($xenOptions['liveUpdateFavicon']) ? (htmlspecialchars($xenOptions['liveUpdateFavicon'], ENT_QUOTES, 'UTF-8')) : ('favicon.ico')) . '" />

	';
$this->addRequiredExternal('js', 'js/liveupdate/min/update.js');
$__compilerVar8 .= '
	';
if ($visitor['liveupdate_display_option'] == ('both') OR $visitor['liveupdate_display_option'] == ('tab_icon'))
{
$__compilerVar8 .= '
		';
$this->addRequiredExternal('js', 'js/liveupdate/min/tinycon.js');
$__compilerVar8 .= '
	';
}
$__compilerVar8 .= '

	<script>
		$(\'html\').data(\'pollinterval\', ' . htmlspecialchars($xenOptions['liveUpdateInterval'], ENT_QUOTES, 'UTF-8') . ')
			.data(\'displaytype\', \'' . htmlspecialchars($visitor['liveupdate_display_option'], ENT_QUOTES, 'UTF-8') . '\');
	</script>
';
}
$__compilerVar1 .= $__compilerVar8;
unset($__compilerVar8);
$__compilerVar1 .= '
<link rel="apple-touch-icon" href="' . XenForo_Template_Helper_Core::callHelper('fullurl', array(
'0' => XenForo_Template_Helper_Core::styleProperty('ogLogoPath'),
'1' => '1'
)) . '" />
	<link rel="alternate" type="application/rss+xml" title="' . 'RSS feed for ' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '' . '" href="' . XenForo_Template_Helper_Core::link('forums/-/index.rss', false, array()) . '" />
	';
if ($pageDescription['content'] AND !$pageDescription['skipmeta'] AND !$head['description'])
{
$__compilerVar1 .= '<meta name="description" content="' . XenForo_Template_Helper_Core::string('wordTrim', array(
'0' => XenForo_Template_Helper_Core::callHelper('stripHtml', array(
'0' => $pageDescription['content']
)),
'1' => '200'
)) . '" />';
}
$__compilerVar1 .= '
	';
if ($head)
{
foreach ($head AS $headElement)
{
$__compilerVar1 .= $headElement;
}
}
$__compilerVar1 .= '
	<LINK REL="SHORTCUT ICON" HREF="http://www.mturkcrowd.com/favicon.ico">
';
$__output .= $this->callTemplateHook('page_container_head', $__compilerVar1, array());
unset($__compilerVar1);
$__output .= '

';
if ($uix_adStyler_enabled)
{
$__output .= '
	<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/audentio/ad_styler/2.1/javascripts/colpick.js?_v=' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '"></script>
	<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/audentio/ad_styler/2.1/javascripts/bucket.js?_v=' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '"></script>
	<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/audentio/ad_styler/2.1/javascripts/styleit.js?_v=' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '"></script>
';
}
$__output .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_browserThemeColor'))
{
$__output .= '<meta name="theme-color" content="' . XenForo_Template_Helper_Core::styleProperty('uix_browserThemeColor') . '">';
}
$__output .= '
	<meta name="keywords" content="mturk, mechanical turk, forum, mturkcrowd, amazon, amt, mech turk, turk forum, mturk help, mturk forum" />

<script type="text/javascript" charset="utf-8">
jQuery(document).ready(function($){

// The height of the content block when it\'s not expanded
var internalheight = $(".uaExpandThreadRead").outerHeight();
var adjustheight = ' . htmlspecialchars($xenOptions['RainDD_UA_ThreadReadLimit'], ENT_QUOTES, 'UTF-8') . ';
// The "more" link text
var moreText = "+ Show All";
// The "less" link text
var lessText = "- Show Less";


if (internalheight > adjustheight)
{
$(".uaCollapseThreadRead .uaExpandThreadRead").css(\'height\', adjustheight).css(\'overflow\', \'hidden\');
$(".uaCollapseThreadRead").css(\'overflow\', \'hidden\');


$(".uaCollapseThreadRead").append(\'<span style="float: right;"><a href="#" class="adjust"></a></span>\');

$("a.adjust").text(moreText);
}

$(".adjust").toggle(function() {
		$(this).parents("div:first").find(".uaExpandThreadRead").css(\'height\', \'auto\').css(\'overflow\', \'visible\');
		$(this).text(lessText);
	}, function() {
		$(this).parents("div:first").find(".uaExpandThreadRead").css(\'height\', adjustheight).css(\'overflow\', \'hidden\');
		$(this).text(moreText);


});
});

</script>
</head>

<body' . (($bodyClasses) ? (' class="' . htmlspecialchars($bodyClasses, ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>

	';
if ($uix_adStyler_enabled)
{
$__output .= '
		<script>
			styleit_skin_name = "' . XenForo_Template_Helper_Core::styleProperty('uix_adStylerPresetGroup') . '_' . htmlspecialchars($visitor['style_id'], ENT_QUOTES, 'UTF-8') . '";
			styleit_id = "' . XenForo_Template_Helper_Core::styleProperty('uix_adStyler_id') . '";
			styleit_var = {};
			
			' . XenForo_Template_Helper_Core::styleProperty('uix_adStyler_vars') . '
			
			styleit_var[\'boardPath\'] = "' . htmlspecialchars($xenOptions['boardUrl'], ENT_QUOTES, 'UTF-8') . '";
			styleit_var[\'ImgPath\'] = \'' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/audentio/ad_styler/2.1/images\';
			styleit_var[\'gFontsPath\'] = "//fonts.googleapis.com";
			si_restored = false; styleit_store = _bucket(\'si-\'+styleit_skin_name);
			
			var
				head = document.getElementsByTagName(\'head\')[0];
				siStyleTag = document.createElement(\'style\');
				siStyleTag.type = "text/css";
				siStyleTag.id = "si-style",
				savedStyle = styleit_store.get(\'style\'),
				styledata = styleit_store.get(\'styledata\');
				
			if ( savedStyle ) {
				if (siStyleTag.styleSheet) { siStyleTag.styleSheet.cssText = savedStyle }
				else { siStyleTag.appendChild(document.createTextNode(savedStyle)) }
				head.appendChild(siStyleTag);
				si_restored = true;
				
				for (var elm in styledata) {
					for (var prop in styledata[elm]) {
						if (prop == "_fonturl") {
							var
							fontTag = document.createElement(\'link\');
							fontTag.href = styledata[elm][prop];
							fontTag.type = "text/css";
							fontTag.rel = "stylesheet";
							head.appendChild(fontTag);
						}
					}
				}
			}
		</script>
	';
}
$__output .= '
	
	';
if (!$visitor['user_id'] && !$hideLoginBar)
{
$__output .= '
		';
$__compilerVar9 = '';
$this->addRequiredExternal('css', 'login_bar');
$__compilerVar9 .= '

<div id="loginBar">
	<div class="pageContent">
		<span class="helper"></span>
	</div>
	<div class="pageWidth">
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 0)
{
$__compilerVar9 .= '
		<h3 id="loginBarHandle">
			<label for="LoginControl"><a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="concealed noOutline">' . (($xenOptions['registrationSetup']['enabled']) ? ('Log in or Sign up') : ('Log in')) . '</a></label>
		</h3>
		';
}
$__compilerVar9 .= '
		
	</div>
</div>';
$__output .= $__compilerVar9;
unset($__compilerVar9);
$__output .= '
	';
}
$__output .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') > 0 || XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') > 0)
{
$__output .= '
		<div id="uix_paneContainer" class="off-canvas-wrapper">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') > 0)
{
$__output .= '
				';
$__compilerVar10 = '';
$__compilerVar10 .= '<aside class="uix_sidePane left-off-canvas-content">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar10 .= '
		';
$__compilerVar11 = '';
$__compilerVar11 .= '<div class="uix_sidePane_content uix_offCanvasNavigation">
<ul>
	<!-- home -->
	';
if ($showHomeLink)
{
$__compilerVar11 .= '
		<li class="navTab home"><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="navLink">' . 'Home' . '</a></li>
	';
}
$__compilerVar11 .= '
	
	
	<!-- extra tabs: home -->
	';
if ($extraTabs['home'])
{
$__compilerVar11 .= '
	';
foreach ($extraTabs['home'] AS $extraTabId => $extraTab)
{
$__compilerVar11 .= '
		';
if ($extraTab['linksTemplate'])
{
$__compilerVar11 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar11 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar11 .= '</a>
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				' . $extraTab['linksTemplate'] . '
			</div>
		</li>
		';
}
else
{
$__compilerVar11 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</li>
		';
}
$__compilerVar11 .= '
	';
}
$__compilerVar11 .= '
	';
}
$__compilerVar11 .= '
	
	
	<!-- forums -->
	';
if ($tabs['forums'] AND ($xenOptions['adnavigation_showForumsLink'] OR !$adnavigation))
{
$__compilerVar11 .= '
		<li class="navTab forums ' . (($tabs['forums']['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				<ul class="blockLinksList">
				';
$__compilerVar12 = '';
$__compilerVar12 .= '
					';
if ($visitor['user_id'])
{
$__compilerVar12 .= '<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>';
}
$__compilerVar12 .= '
					';
if ($canSearch)
{
$__compilerVar12 .= '<li><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Forums' . '</a></li>';
}
$__compilerVar12 .= '
					';
if ($visitor['user_id'])
{
$__compilerVar12 .= '
						<li><a href="' . XenForo_Template_Helper_Core::link('watched/forums', false, array()) . '">' . 'Watched Forums' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('watched/threads', false, array()) . '">' . 'Watched Threads' . '</a></li>
					';
}
$__compilerVar12 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '" rel="nofollow">' . (($visitor['user_id']) ? ('New Posts') : ('Recent Posts')) . '</a></li>
				';
$__compilerVar11 .= $this->callTemplateHook('navigation_tabs_forums', $__compilerVar12, array());
unset($__compilerVar12);
$__compilerVar11 .= '
				</ul>
			</div>
		</li>
	';
}
$__compilerVar11 .= '
	
	
	<!-- extra tabs: middle -->
	';
if ($extraTabs['middle'])
{
$__compilerVar11 .= '
	';
foreach ($extraTabs['middle'] AS $extraTabId => $extraTab)
{
$__compilerVar11 .= '
		';
if ($extraTab['linksTemplate'])
{
$__compilerVar11 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar11 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar11 .= '</a>
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				' . $extraTab['linksTemplate'] . '
			</div>
		</li>
		';
}
else
{
$__compilerVar11 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</li>
		';
}
$__compilerVar11 .= '
	';
}
$__compilerVar11 .= '
	';
}
$__compilerVar11 .= '
	
	
	<!-- members -->
	';
if ($tabs['members'] AND ($xenOptions['adnavigation_showMembersLink'] OR !$adnavigation))
{
$__compilerVar11 .= '
		<li class="navTab members ' . (($tabs['members']['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				<ul class="blockLinksList">
				';
$__compilerVar13 = '';
$__compilerVar13 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Notable Members' . '</a></li>
					';
if ($xenOptions['enableMemberList'])
{
$__compilerVar13 .= '<li><a href="' . XenForo_Template_Helper_Core::link('members/list', false, array()) . '">' . 'Registered Members' . '</a></li>';
}
$__compilerVar13 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Current Visitors' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar13 .= '<li><a href="' . XenForo_Template_Helper_Core::link('recent-activity', false, array()) . '">' . 'Recent Activity' . '</a></li>';
}
$__compilerVar13 .= '
				';
$__compilerVar11 .= $this->callTemplateHook('navigation_tabs_members', $__compilerVar13, array());
unset($__compilerVar13);
$__compilerVar11 .= '
				</ul>
			</div>
		</li>
	';
}
$__compilerVar11 .= '				
	
	<!-- extra tabs: end -->
	';
if ($extraTabs['end'])
{
$__compilerVar11 .= '
	';
foreach ($extraTabs['end'] AS $extraTabId => $extraTab)
{
$__compilerVar11 .= '
		';
if ($extraTab['linksTemplate'])
{
$__compilerVar11 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar11 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar11 .= '</a>
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				' . $extraTab['linksTemplate'] . '
			</div>
		</li>
		';
}
else
{
$__compilerVar11 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</li>
		';
}
$__compilerVar11 .= '
	';
}
$__compilerVar11 .= '
	';
}
$__compilerVar11 .= '
	
			

</ul>
</div>';
$__compilerVar10 .= $__compilerVar11;
unset($__compilerVar11);
$__compilerVar10 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2)
{
$__compilerVar10 .= '
		';
$__compilerVar14 = '';
$__compilerVar14 .= '<script>
	var uix_offCanvasCurrentTab = \'uix_offCanvasVisitorMenu\';
	var uix_offCanvasVisitorConvoLoad = true;
	var uix_offCanvasVisitorAlertLoad = true;
	function uix_offCanvasVisitorTab(ele, id) {
		jQuery(\'#uix_offcanvasVisitorTabs .navTab\').removeClass(\'selected\');
		jQuery(\'.uix_sidePane_content.uix_offCanvasVisitorTabs ul\').removeClass(\'activeTab\').removeClass(\'leftTab\').removeClass(\'rightTab\');
		
		jQuery(ele).parent().addClass(\'selected\');
		jQuery(\'#\' + id).addClass(\'activeTab\');
		if (id == \'uix_offCanvasVisitorMenu\') {
			if (uix_offCanvasCurrentTab == \'uix_offCanvasVisitorAlert\') {
				jQuery(\'#uix_offCanvasVisitorConvo\').css(\'opacity\', 0)
				window.setTimeout(function(){jQuery(\'#uix_offCanvasVisitorConvo\').css(\'opacity\', 1);}, 300);
			}
			jQuery(\'#uix_offCanvasVisitorConvo\').addClass(\'rightTab\');
			jQuery(\'#uix_offCanvasVisitorAlert\').addClass(\'rightTab\');
		} else if (id == \'uix_offCanvasVisitorConvo\') {
			if (uix_offCanvasVisitorConvoLoad){
				uix_offCanvasVisitorConvoLoad = false;
				$(\'#uix_offCanvasVisitorConvo .listPlaceholder\').load(\'' . XenForo_Template_Helper_Core::link('conversations/popup', false, array()) . ' #content div:not(.sidebar) .secondaryContent li:lt(5)\');
			}
			jQuery(\'#uix_offCanvasVisitorMenu\').addClass(\'leftTab\');
			jQuery(\'#uix_offCanvasVisitorAlert\').addClass(\'rightTab\');
			
			//XenForo.balloonCounterUpdate($(\'#VisitorExtraMenu_Counter\'), 0);
			//XenForo.balloonCounterUpdate($(\'#uix_VisitorExtraMenu_Counter\'), 0);
			//XenForo.balloonCounterUpdate($(\'#ConversationsMenu_Counter\'), 0);
			uix.fn.syncBaloon($(\'#ConversationsMenu_Counter\'), $(\'#uix_ConversationsMenu_Counter\'));
		} else if (id == \'uix_offCanvasVisitorAlert\') {
			if (uix_offCanvasVisitorAlertLoad){
				uix_offCanvasVisitorAlertLoad = false;
				$(\'#uix_offCanvasVisitorAlert .listPlaceholder\').load(\'' . XenForo_Template_Helper_Core::link('account/alerts-popup', false, array()) . ' #content div:not(.sidebar) .secondaryContent li:lt(5)\');
			}
			
			if (uix_offCanvasCurrentTab == \'uix_offCanvasVisitorMenu\') {
				jQuery(\'#uix_offCanvasVisitorConvo\').css(\'opacity\', 0)
				window.setTimeout(function(){jQuery(\'#uix_offCanvasVisitorConvo\').css(\'opacity\', 1);}, 300);
			}
			jQuery(\'#uix_offCanvasVisitorConvo\').addClass(\'leftTab\');
			jQuery(\'#uix_offCanvasVisitorMenu\').addClass(\'leftTab\');
			
			XenForo.balloonCounterUpdate($(\'#VisitorExtraMenu_Counter\'), 0);
			XenForo.balloonCounterUpdate($(\'#uix_VisitorExtraMenu_Counter\'), 0);
			XenForo.balloonCounterUpdate($(\'#AlertsMenu_Counter\'), 0);
			uix.fn.syncBaloon($(\'#AlertsMenu_Counter\'), $(\'#uix_AlertsMenu_Counter\'));
		}
		
		uix_offCanvasCurrentTab = id;
	}	
</script>

<div class="uix_sidePane_content uix_offCanvasVisitorTabs">
	<div class="uix_offCanvasTabsWrapper">
		<ul id="uix_offcanvasVisitorTabs" class="uix_offcanvasTabs">
			<li class="navTab selected"><a class="navLink" onclick="uix_offCanvasVisitorTab(this, \'uix_offCanvasVisitorMenu\')">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</a></li>
			<li class="navTab">
				<a onclick="uix_offCanvasVisitorTab(this, \'uix_offCanvasVisitorConvo\')" class="navLink">
					<i class="uix_icon uix_icon-inbox"></i>
					<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '" id="uix_ConversationsMenu_Counter" data-text="' . 'You have %d new unread conversation(s).' . '">
						<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
					</strong>
				</a>
			</li>
			<li class="navTab">
				<a onclick="uix_offCanvasVisitorTab(this, \'uix_offCanvasVisitorAlert\')" class="navLink">
					<i class="uix_icon uix_icon-alerts"></i>
					<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '" id="uix_AlertsMenu_Counter" data-text="' . 'You have %d new alert(s).' . '">
						<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
					</strong>
				</a>
			</li>
		</ul>
	</div>
	
	<div class="uix_offCanvasPanes">
		<ul class="activeTab" id="uix_offCanvasVisitorMenu">
		
			<li class="navTab full">
			<div class="primaryContent menuHeader">
				' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,false,array(
'user' => '$visitor',
'size' => 'm',
'class' => 'NoOverlay plainImage',
'title' => 'View your profile'
),'')) . '
					
				<h3><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '" class="concealed" title="' . 'View your profile' . '">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</a></h3>
					
				';
$__compilerVar15 = '';
$__compilerVar15 .= XenForo_Template_Helper_Core::callHelper('usertitle', array(
'0' => $visitor
));
if (trim($__compilerVar15) !== '')
{
$__compilerVar14 .= '<div class="muted">' . $__compilerVar15 . '</div>';
}
unset($__compilerVar15);
$__compilerVar14 .= '	
				
			</div>
			</li>
			
			';
if ($canUpdateStatus)
{
$__compilerVar14 .= '
				<li class="navTab full">
				<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" class="sectionFooter statusPoster AutoValidator" data-optInOut="OptIn">
					<textarea id="uix_offCanvasStatus" name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" style="height:18px" data-statusEditorCounter="#visMenuSEdCountAlt" data-nofocus="true"></textarea>
					<div class="submitUnit">
						<span id="visMenuSEdCountAlt" title="' . 'Characters remaining' . '"></span>
						<input type="submit" class="button primary MenuCloser" value="' . 'Post' . '" />
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						<input type="hidden" name="return" value="1" /> 
					</div>
				</form>
				</li>
			';
}
$__compilerVar14 .= '
			
			<li class="fl navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
			
			';
$__compilerVar16 = '';
$__compilerVar16 .= '
				';
if ($canEditProfile)
{
$__compilerVar16 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar16 .= '
				';
if ($canEditSignature)
{
$__compilerVar16 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar16 .= '
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
				';
if ($canUploadAvatar)
{
$__compilerVar16 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar16 .= '
				';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar16 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar16 .= '
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
			';
$__compilerVar14 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar16, array());
unset($__compilerVar16);
$__compilerVar14 .= '
				
			';
$__compilerVar17 = '';
$__compilerVar17 .= '
				';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar17 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar17 .= '
				
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id']
)) . '">' . 'Your Content' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/ignored', false, array()) . '">' . 'People You Ignore' . '</a></li>
				';
if ($xenCache['userUpgradeCount'])
{
$__compilerVar17 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar17 .= '
			';
$__compilerVar14 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar17, array());
unset($__compilerVar17);
$__compilerVar14 .= '
			
				<li class="navTab"><a href="' . XenForo_Template_Helper_Core::link('logout', '', array(
'_xfToken' => $visitor['csrf_token_page']
)) . '" class="LogOut navLink">' . 'Log Out' . '</a></li>
			
				<li class="navTab full">				
					<form action="' . XenForo_Template_Helper_Core::link('account/toggle-visibility', false, array()) . '" method="post" class="AutoValidator visibilityForm navLink">
						<label><input type="checkbox" name="visible" value="1" class="SubmitOnChange" ' . (($visitor['visible']) ? ' checked="checked"' : '') . ' />
							' . 'Show online status' . '</label>
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
					</form>
				</li>
		
		</ul>
		
		<ul id="uix_offCanvasVisitorConvo" class="rightTab">
			<div class="menuHeader primaryContent">
				<h3>
					<span class="Progress InProgress"></span>
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" class="concealed">' . 'Conversations' . '</a>
				</h3>						
			</div>
					
			<div class="listPlaceholder"></div>
					
			';
if ($canStartConversation)
{
$__compilerVar14 .= '<li class="navTab"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink navLink">' . 'Start a New Conversation' . '</a></li>';
}
$__compilerVar14 .= '
			<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a></li>
	
		</ul>
		
		<ul id="uix_offCanvasVisitorAlert" class="rightTab">
			<div class="menuHeader primaryContent">
				<h3>
					<span class="Progress InProgress"></span>
					<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" class="concealed">' . 'Alerts' . '</a>
				</h3>
			</div>
					
			<div class="listPlaceholder"></div>
					
			<li class="navTab"><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '" class="floatLink navLink">' . 'Alert Preferences' . '</a></li>
			<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Show All' . '...</a></li>
		</ul>
	</div>
</div>';
$__compilerVar10 .= $__compilerVar14;
unset($__compilerVar14);
$__compilerVar10 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar10 .= '
		';
$__compilerVar18 = '';
$__compilerVar18 .= '<div class="uix_sidePane_content uix_offCanvasCustomLeft">
<ul>

	<li class="navTab"><a class="navLink">Customize</a></li>
	<li class="navTab"><a class="navLink">uix_offCanvasSidebarCustomLeft</a></li>
	
</ul>
</div>';
$__compilerVar10 .= $__compilerVar18;
unset($__compilerVar18);
$__compilerVar10 .= '
	';
}
else
{
$__compilerVar10 .= '
		<div class="uix_sidePane_content">
			<ul><li class="navLink">Error: Choose a valid value for</li></ul>
			<ul><li class="navLink">uix_offCanvasSidebarLeft</li></ul>
		</div>
	';
}
$__compilerVar10 .= '
</aside>';
$__output .= $__compilerVar10;
unset($__compilerVar10);
$__output .= '
			';
}
$__output .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') > 0)
{
$__output .= '
				';
$__compilerVar19 = '';
$__compilerVar19 .= '<aside class="uix_sidePane right-off-canvas-content">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar19 .= '
		';
$__compilerVar20 = '';
$__compilerVar20 .= '<div class="uix_sidePane_content uix_offCanvasNavigation">
<ul>
	<!-- home -->
	';
if ($showHomeLink)
{
$__compilerVar20 .= '
		<li class="navTab home"><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="navLink">' . 'Home' . '</a></li>
	';
}
$__compilerVar20 .= '
	
	
	<!-- extra tabs: home -->
	';
if ($extraTabs['home'])
{
$__compilerVar20 .= '
	';
foreach ($extraTabs['home'] AS $extraTabId => $extraTab)
{
$__compilerVar20 .= '
		';
if ($extraTab['linksTemplate'])
{
$__compilerVar20 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar20 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar20 .= '</a>
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				' . $extraTab['linksTemplate'] . '
			</div>
		</li>
		';
}
else
{
$__compilerVar20 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</li>
		';
}
$__compilerVar20 .= '
	';
}
$__compilerVar20 .= '
	';
}
$__compilerVar20 .= '
	
	
	<!-- forums -->
	';
if ($tabs['forums'] AND ($xenOptions['adnavigation_showForumsLink'] OR !$adnavigation))
{
$__compilerVar20 .= '
		<li class="navTab forums ' . (($tabs['forums']['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				<ul class="blockLinksList">
				';
$__compilerVar21 = '';
$__compilerVar21 .= '
					';
if ($visitor['user_id'])
{
$__compilerVar21 .= '<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>';
}
$__compilerVar21 .= '
					';
if ($canSearch)
{
$__compilerVar21 .= '<li><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Forums' . '</a></li>';
}
$__compilerVar21 .= '
					';
if ($visitor['user_id'])
{
$__compilerVar21 .= '
						<li><a href="' . XenForo_Template_Helper_Core::link('watched/forums', false, array()) . '">' . 'Watched Forums' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('watched/threads', false, array()) . '">' . 'Watched Threads' . '</a></li>
					';
}
$__compilerVar21 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '" rel="nofollow">' . (($visitor['user_id']) ? ('New Posts') : ('Recent Posts')) . '</a></li>
				';
$__compilerVar20 .= $this->callTemplateHook('navigation_tabs_forums', $__compilerVar21, array());
unset($__compilerVar21);
$__compilerVar20 .= '
				</ul>
			</div>
		</li>
	';
}
$__compilerVar20 .= '
	
	
	<!-- extra tabs: middle -->
	';
if ($extraTabs['middle'])
{
$__compilerVar20 .= '
	';
foreach ($extraTabs['middle'] AS $extraTabId => $extraTab)
{
$__compilerVar20 .= '
		';
if ($extraTab['linksTemplate'])
{
$__compilerVar20 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar20 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar20 .= '</a>
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				' . $extraTab['linksTemplate'] . '
			</div>
		</li>
		';
}
else
{
$__compilerVar20 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</li>
		';
}
$__compilerVar20 .= '
	';
}
$__compilerVar20 .= '
	';
}
$__compilerVar20 .= '
	
	
	<!-- members -->
	';
if ($tabs['members'] AND ($xenOptions['adnavigation_showMembersLink'] OR !$adnavigation))
{
$__compilerVar20 .= '
		<li class="navTab members ' . (($tabs['members']['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				<ul class="blockLinksList">
				';
$__compilerVar22 = '';
$__compilerVar22 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Notable Members' . '</a></li>
					';
if ($xenOptions['enableMemberList'])
{
$__compilerVar22 .= '<li><a href="' . XenForo_Template_Helper_Core::link('members/list', false, array()) . '">' . 'Registered Members' . '</a></li>';
}
$__compilerVar22 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Current Visitors' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar22 .= '<li><a href="' . XenForo_Template_Helper_Core::link('recent-activity', false, array()) . '">' . 'Recent Activity' . '</a></li>';
}
$__compilerVar22 .= '
				';
$__compilerVar20 .= $this->callTemplateHook('navigation_tabs_members', $__compilerVar22, array());
unset($__compilerVar22);
$__compilerVar20 .= '
				</ul>
			</div>
		</li>
	';
}
$__compilerVar20 .= '				
	
	<!-- extra tabs: end -->
	';
if ($extraTabs['end'])
{
$__compilerVar20 .= '
	';
foreach ($extraTabs['end'] AS $extraTabId => $extraTab)
{
$__compilerVar20 .= '
		';
if ($extraTab['linksTemplate'])
{
$__compilerVar20 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar20 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar20 .= '</a>
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				' . $extraTab['linksTemplate'] . '
			</div>
		</li>
		';
}
else
{
$__compilerVar20 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</li>
		';
}
$__compilerVar20 .= '
	';
}
$__compilerVar20 .= '
	';
}
$__compilerVar20 .= '
	
			

</ul>
</div>';
$__compilerVar19 .= $__compilerVar20;
unset($__compilerVar20);
$__compilerVar19 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2)
{
$__compilerVar19 .= '
		';
$__compilerVar23 = '';
$__compilerVar23 .= '<script>
	var uix_offCanvasCurrentTab = \'uix_offCanvasVisitorMenu\';
	var uix_offCanvasVisitorConvoLoad = true;
	var uix_offCanvasVisitorAlertLoad = true;
	function uix_offCanvasVisitorTab(ele, id) {
		jQuery(\'#uix_offcanvasVisitorTabs .navTab\').removeClass(\'selected\');
		jQuery(\'.uix_sidePane_content.uix_offCanvasVisitorTabs ul\').removeClass(\'activeTab\').removeClass(\'leftTab\').removeClass(\'rightTab\');
		
		jQuery(ele).parent().addClass(\'selected\');
		jQuery(\'#\' + id).addClass(\'activeTab\');
		if (id == \'uix_offCanvasVisitorMenu\') {
			if (uix_offCanvasCurrentTab == \'uix_offCanvasVisitorAlert\') {
				jQuery(\'#uix_offCanvasVisitorConvo\').css(\'opacity\', 0)
				window.setTimeout(function(){jQuery(\'#uix_offCanvasVisitorConvo\').css(\'opacity\', 1);}, 300);
			}
			jQuery(\'#uix_offCanvasVisitorConvo\').addClass(\'rightTab\');
			jQuery(\'#uix_offCanvasVisitorAlert\').addClass(\'rightTab\');
		} else if (id == \'uix_offCanvasVisitorConvo\') {
			if (uix_offCanvasVisitorConvoLoad){
				uix_offCanvasVisitorConvoLoad = false;
				$(\'#uix_offCanvasVisitorConvo .listPlaceholder\').load(\'' . XenForo_Template_Helper_Core::link('conversations/popup', false, array()) . ' #content div:not(.sidebar) .secondaryContent li:lt(5)\');
			}
			jQuery(\'#uix_offCanvasVisitorMenu\').addClass(\'leftTab\');
			jQuery(\'#uix_offCanvasVisitorAlert\').addClass(\'rightTab\');
			
			//XenForo.balloonCounterUpdate($(\'#VisitorExtraMenu_Counter\'), 0);
			//XenForo.balloonCounterUpdate($(\'#uix_VisitorExtraMenu_Counter\'), 0);
			//XenForo.balloonCounterUpdate($(\'#ConversationsMenu_Counter\'), 0);
			uix.fn.syncBaloon($(\'#ConversationsMenu_Counter\'), $(\'#uix_ConversationsMenu_Counter\'));
		} else if (id == \'uix_offCanvasVisitorAlert\') {
			if (uix_offCanvasVisitorAlertLoad){
				uix_offCanvasVisitorAlertLoad = false;
				$(\'#uix_offCanvasVisitorAlert .listPlaceholder\').load(\'' . XenForo_Template_Helper_Core::link('account/alerts-popup', false, array()) . ' #content div:not(.sidebar) .secondaryContent li:lt(5)\');
			}
			
			if (uix_offCanvasCurrentTab == \'uix_offCanvasVisitorMenu\') {
				jQuery(\'#uix_offCanvasVisitorConvo\').css(\'opacity\', 0)
				window.setTimeout(function(){jQuery(\'#uix_offCanvasVisitorConvo\').css(\'opacity\', 1);}, 300);
			}
			jQuery(\'#uix_offCanvasVisitorConvo\').addClass(\'leftTab\');
			jQuery(\'#uix_offCanvasVisitorMenu\').addClass(\'leftTab\');
			
			XenForo.balloonCounterUpdate($(\'#VisitorExtraMenu_Counter\'), 0);
			XenForo.balloonCounterUpdate($(\'#uix_VisitorExtraMenu_Counter\'), 0);
			XenForo.balloonCounterUpdate($(\'#AlertsMenu_Counter\'), 0);
			uix.fn.syncBaloon($(\'#AlertsMenu_Counter\'), $(\'#uix_AlertsMenu_Counter\'));
		}
		
		uix_offCanvasCurrentTab = id;
	}	
</script>

<div class="uix_sidePane_content uix_offCanvasVisitorTabs">
	<div class="uix_offCanvasTabsWrapper">
		<ul id="uix_offcanvasVisitorTabs" class="uix_offcanvasTabs">
			<li class="navTab selected"><a class="navLink" onclick="uix_offCanvasVisitorTab(this, \'uix_offCanvasVisitorMenu\')">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</a></li>
			<li class="navTab">
				<a onclick="uix_offCanvasVisitorTab(this, \'uix_offCanvasVisitorConvo\')" class="navLink">
					<i class="uix_icon uix_icon-inbox"></i>
					<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '" id="uix_ConversationsMenu_Counter" data-text="' . 'You have %d new unread conversation(s).' . '">
						<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
					</strong>
				</a>
			</li>
			<li class="navTab">
				<a onclick="uix_offCanvasVisitorTab(this, \'uix_offCanvasVisitorAlert\')" class="navLink">
					<i class="uix_icon uix_icon-alerts"></i>
					<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '" id="uix_AlertsMenu_Counter" data-text="' . 'You have %d new alert(s).' . '">
						<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
					</strong>
				</a>
			</li>
		</ul>
	</div>
	
	<div class="uix_offCanvasPanes">
		<ul class="activeTab" id="uix_offCanvasVisitorMenu">
		
			<li class="navTab full">
			<div class="primaryContent menuHeader">
				' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,false,array(
'user' => '$visitor',
'size' => 'm',
'class' => 'NoOverlay plainImage',
'title' => 'View your profile'
),'')) . '
					
				<h3><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '" class="concealed" title="' . 'View your profile' . '">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</a></h3>
					
				';
$__compilerVar24 = '';
$__compilerVar24 .= XenForo_Template_Helper_Core::callHelper('usertitle', array(
'0' => $visitor
));
if (trim($__compilerVar24) !== '')
{
$__compilerVar23 .= '<div class="muted">' . $__compilerVar24 . '</div>';
}
unset($__compilerVar24);
$__compilerVar23 .= '	
				
			</div>
			</li>
			
			';
if ($canUpdateStatus)
{
$__compilerVar23 .= '
				<li class="navTab full">
				<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" class="sectionFooter statusPoster AutoValidator" data-optInOut="OptIn">
					<textarea id="uix_offCanvasStatus" name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" style="height:18px" data-statusEditorCounter="#visMenuSEdCountAlt" data-nofocus="true"></textarea>
					<div class="submitUnit">
						<span id="visMenuSEdCountAlt" title="' . 'Characters remaining' . '"></span>
						<input type="submit" class="button primary MenuCloser" value="' . 'Post' . '" />
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						<input type="hidden" name="return" value="1" /> 
					</div>
				</form>
				</li>
			';
}
$__compilerVar23 .= '
			
			<li class="fl navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
			
			';
$__compilerVar25 = '';
$__compilerVar25 .= '
				';
if ($canEditProfile)
{
$__compilerVar25 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar25 .= '
				';
if ($canEditSignature)
{
$__compilerVar25 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar25 .= '
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
				';
if ($canUploadAvatar)
{
$__compilerVar25 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar25 .= '
				';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar25 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar25 .= '
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
			';
$__compilerVar23 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar25, array());
unset($__compilerVar25);
$__compilerVar23 .= '
				
			';
$__compilerVar26 = '';
$__compilerVar26 .= '
				';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar26 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar26 .= '
				
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id']
)) . '">' . 'Your Content' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/ignored', false, array()) . '">' . 'People You Ignore' . '</a></li>
				';
if ($xenCache['userUpgradeCount'])
{
$__compilerVar26 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar26 .= '
			';
$__compilerVar23 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar26, array());
unset($__compilerVar26);
$__compilerVar23 .= '
			
				<li class="navTab"><a href="' . XenForo_Template_Helper_Core::link('logout', '', array(
'_xfToken' => $visitor['csrf_token_page']
)) . '" class="LogOut navLink">' . 'Log Out' . '</a></li>
			
				<li class="navTab full">				
					<form action="' . XenForo_Template_Helper_Core::link('account/toggle-visibility', false, array()) . '" method="post" class="AutoValidator visibilityForm navLink">
						<label><input type="checkbox" name="visible" value="1" class="SubmitOnChange" ' . (($visitor['visible']) ? ' checked="checked"' : '') . ' />
							' . 'Show online status' . '</label>
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
					</form>
				</li>
		
		</ul>
		
		<ul id="uix_offCanvasVisitorConvo" class="rightTab">
			<div class="menuHeader primaryContent">
				<h3>
					<span class="Progress InProgress"></span>
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" class="concealed">' . 'Conversations' . '</a>
				</h3>						
			</div>
					
			<div class="listPlaceholder"></div>
					
			';
if ($canStartConversation)
{
$__compilerVar23 .= '<li class="navTab"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink navLink">' . 'Start a New Conversation' . '</a></li>';
}
$__compilerVar23 .= '
			<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a></li>
	
		</ul>
		
		<ul id="uix_offCanvasVisitorAlert" class="rightTab">
			<div class="menuHeader primaryContent">
				<h3>
					<span class="Progress InProgress"></span>
					<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" class="concealed">' . 'Alerts' . '</a>
				</h3>
			</div>
					
			<div class="listPlaceholder"></div>
					
			<li class="navTab"><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '" class="floatLink navLink">' . 'Alert Preferences' . '</a></li>
			<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Show All' . '...</a></li>
		</ul>
	</div>
</div>';
$__compilerVar19 .= $__compilerVar23;
unset($__compilerVar23);
$__compilerVar19 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar19 .= '
		';
$__compilerVar27 = '';
$__compilerVar27 .= '<div class="uix_sidePane_content uix_offCanvasCustomRight">
<ul>

	<li class="navTab"><a class="navLink">Customize</a></li>
	<li class="navTab"><a class="navLink">uix_offCanvasSidebarCustomRight</a></li>
	
</ul>
</div>';
$__compilerVar19 .= $__compilerVar27;
unset($__compilerVar27);
$__compilerVar19 .= '
	';
}
else
{
$__compilerVar19 .= '
		<div class="uix_sidePane_content">
			<ul><li class="navLink">Error: Choose a valid value for</li></ul>
			<ul><li class="navLink">uix_offCanvasSidebarRight</li></ul>
		</div>
	';
}
$__compilerVar19 .= '
</aside>';
$__output .= $__compilerVar19;
unset($__compilerVar19);
$__output .= '
			';
}
$__output .= '
			<div class="inner-wrapper">

				
				<a href="#" class="exit-off-canvas"></a>
		
	';
}
$__output .= '

	';
$__compilerVar28 = '';
$__compilerVar28 .= '
	
	<div class="uix_wrapperFix" style="height: 1px; margin-bottom: -1px;"></div>
		<div id="uix_wrapper">

<div id="headerMover">
	<div id="headerProxy"></div>
<header>
	';
$__compilerVar29 = '';
$__compilerVar29 .= '

';
$__compilerVar30 = '';
$__compilerVar30 .= '
<div id="header">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_userBarLocation') == 0)
{
$__compilerVar31 = '';
$this->addRequiredExternal('css', 'moderator_bar');
$__compilerVar31 .= '

';
$__compilerVar32 = '';
$__compilerVar32 .= '
		
					';
$__compilerVar33 = '';
$__compilerVar33 .= '
						';
$__compilerVar34 = '';
$__compilerVar33 .= $this->callTemplateHook('uix_userbar_left_start', $__compilerVar34, array());
unset($__compilerVar34);
$__compilerVar33 .= '
						
						';
if ($xenOptions['uix_socialMedia'] && XenForo_Template_Helper_Core::styleProperty('uix_socialMedia'))
{
$__compilerVar33 .= '\'
						<li class="navTab scratch_socialTab">
							<div class="navLink">
								';
$__compilerVar35 = '';
$__compilerVar35 .= '<ul class="uix_socialMediaLinks">
	';
if ($xenOptions['uix_socialMedia_facebook'])
{
$__compilerVar35 .= '<li class="facebook"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_facebook'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-facebook"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_twitter'])
{
$__compilerVar35 .= '<li class="twitter"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_twitter'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-twitter"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_youtube'])
{
$__compilerVar35 .= '<li class="youtube"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_youtube'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-youtube"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_dribbble'])
{
$__compilerVar35 .= '<li class="dribbble"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_dribbble'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-dribbble"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_vimeo'])
{
$__compilerVar35 .= '<li class="vimeo"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_vimeo'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-vimeo"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_deviantart'])
{
$__compilerVar35 .= '<li class="deviantart"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_deviantart'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-deviantArt"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_googleplus'])
{
$__compilerVar35 .= '<li class="googleplus"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_googleplus'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-googlePlus"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_linkedin'])
{
$__compilerVar35 .= '<li class="linkedin"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_linkedin'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-linkedIn"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_instagram'])
{
$__compilerVar35 .= '<li class="instagram"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_instagram'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-instagram"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_pinterest'])
{
$__compilerVar35 .= '<li class="pinterest"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_pinterest'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-pinterest"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_steam'])
{
$__compilerVar35 .= '<li class="steam"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_steam'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-steam"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_twitch'])
{
$__compilerVar35 .= '<li class="twitch"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_twitch'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-twitch"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_vine'])
{
$__compilerVar35 .= '<li class="vine"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_vine'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-vine"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_tumblr'])
{
$__compilerVar35 .= '<li class="tumblr"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_tumblr'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-tumblr"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_git'])
{
$__compilerVar35 .= '<li class="git"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_git'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-git"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_reddit'])
{
$__compilerVar35 .= '<li class="reddit"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_reddit'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-reddit"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_flickr'])
{
$__compilerVar35 .= '<li class="flickr"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_flickr'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-flickr"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_contact'] AND $xenOptions['contactUrl']['type'] == ('default'))
{
$__compilerVar35 .= '<li class="contact"><a href="' . XenForo_Template_Helper_Core::link('misc/contact', false, array()) . '" class="OverlayTrigger" data-overlayOptions="{&quot;fixed&quot;:false}"><i class="uix_icon uix_icon-email"></i></a></li>';
}
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_contact'] AND $xenOptions['contactUrl']['type'] == ('custom'))
{
$__compilerVar35 .= '<li class="contact"><a href="' . htmlspecialchars($xenOptions['contactUrl']['custom'], ENT_QUOTES, 'UTF-8') . '" ' . (($xenOptions['contactUrl']['overlay']) ? ('class="OverlayTrigger" data-overlayOptions="' . '{' . '&quot;fixed&quot;:false}"') : ('target="_blank"')) . '><i class="uix_icon uix_icon-email"></i></a></li>';
}
$__compilerVar35 .= '
        ';
$__compilerVar36 = '';
$__compilerVar36 .= '



<!--ADD LIST ITEMS HERE -->


';
$__compilerVar35 .= $__compilerVar36;
unset($__compilerVar36);
$__compilerVar35 .= '
        ';
if ($xenOptions['uix_socialMedia_rss'])
{
$__compilerVar35 .= '<li class="rss"><a href="' . XenForo_Template_Helper_Core::link('forums/-/index.rss', false, array()) . '" rel="alternate}" target="_blank"><i class="uix_icon uix_icon-rss"></i></a></li>';
}
$__compilerVar35 .= '
</ul>';
$__compilerVar33 .= $__compilerVar35;
unset($__compilerVar35);
$__compilerVar33 .= '
							</div>
						</li>
						';
}
$__compilerVar33 .= '
						
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 1)
{
$__compilerVar37 = '0';
$__compilerVar38 = '';
$__compilerVar38 .= '

';
if ($__compilerVar37 == 0)
{
$__compilerVar38 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar38 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar38 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar38 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar38 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar38 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar38 .= '
	';
}
else
{
$__compilerVar38 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar38 .= '
	';
}
$__compilerVar38 .= '
	
';
}
else if ($__compilerVar37 == 1)
{
$__compilerVar38 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar38 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar38 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar38 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar38 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar38 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar38 .= '
	';
}
else
{
$__compilerVar38 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar38 .= '
	';
}
$__compilerVar38 .= '
	
';
}
$__compilerVar38 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar38 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar37) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar38 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar38 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar38 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar38 .= '
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="uix_VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
			</strong>
	</a></li>
	
';
}
else if ($canvasType == ('navigation') || $canvasType == ('custom'))
{
$__compilerVar38 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar37) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar38 .= '
			';
if (!$__compilerVar37)
{
$__compilerVar38 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar38 .= '
			';
if ($__compilerVar37)
{
$__compilerVar38 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar38 .= '
		';
}
else
{
$__compilerVar38 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar38 .= '</a>
	</li>

';
}
$__compilerVar33 .= $__compilerVar38;
unset($__compilerVar37, $__compilerVar38);
}
$__compilerVar33 .= '
						
						';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar33 .= '
							';
$__compilerVar39 = '';
$__compilerVar39 .= '	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('100%'))
{
$__compilerVar39 .= '

		';
if ($visitor['is_admin'])
{
$__compilerVar39 .= '			
			<li class="navTab">
				<a href="admin.php" target="_blank" class="acp adminLink navLink">
					<i class="uix_icon uix_icon-admin"></i> 
					<span class="itemLabel">' . 'Admin' . '</span>
				</a>
			</li>
			
			';
if ($session['permissionTest'])
{
$__compilerVar39 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
					<i class="uix_icon uix_icon-permissions"></i> 
					<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
				</a>
			</li>
			
			';
}
$__compilerVar39 .= '
		';
}
$__compilerVar39 .= '
		
		';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar39 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('moderation-queue', false, array()) . '" class="moderationQueue modLink navLink">
					<i class="uix_icon uix_icon-moderator"></i> 
					<span class="itemLabel">' . 'Moderation' . ':</span>
					<strong class="itemCount ' . (($session['moderationCounts']['total']) ? ('alert') : ('')) . '">
						<span class="Total">' . htmlspecialchars($session['moderationCounts']['total'], ENT_QUOTES, 'UTF-8') . '</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar39 .= '
		
		';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar39 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
					<i class="uix_icon uix_icon-reports"></i> 
					<span class="itemLabel">' . 'Reports' . ':</span>
					<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
						<span class="Total">
							';
if ($session['reportCounts']['assigned'])
{
$__compilerVar39 .= '
								' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
else
{
$__compilerVar39 .= '
								' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
$__compilerVar39 .= '
						</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar39 .= '
		
		';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar39 .= '
			<li class="navTab">
				<a href="admin.php?users/moderated" class="userModerationQueue modLink navLink">
					<i class="uix_icon uix_icon-users"></i> 
					<span class="itemLabel">' . 'Users' . ':</span>
					<strong class="itemCount ' . (($session['userModerationCounts']['total']) ? ('alert') : ('')) . '">
						<span class="Total">
							' . htmlspecialchars($session['userModerationCounts']['total'], ENT_QUOTES, 'UTF-8') . '
						</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar39 .= '
		
		';
$__compilerVar40 = '';
$__compilerVar39 .= $this->callTemplateHook('moderator_bar', $__compilerVar40, array());
unset($__compilerVar40);
$__compilerVar39 .= '	
	';
}
$__compilerVar39 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('0'))
{
$__compilerVar39 .= '

		<li class="navTab admin Popup PopupControl PopupClosed">
			<a href="';
if ($visitor['is_admin'])
{
$__compilerVar39 .= 'admin.php';
}
else
{
$__compilerVar39 .= 'javascript: void(0);';
}
$__compilerVar39 .= '" class="navLink NoPopupGadget" rel="Menu" ';
if ($visitor['is_admin'])
{
$__compilerVar39 .= 'target="_blank"';
}
$__compilerVar39 .= '>
				<i class="uix_icon uix_icon-admin"></i> 
				<span class="itemLabel">' . (($visitor['is_admin']) ? ('Admin') : ('Mod')) . '</span>
				<strong class="itemCount">
					<span class="Total">0</span>
					<span class="arrow"></span>
				</strong>	
			</a>
			<div class="uix_adminMenu Menu JsOnly tabMenu">
				<div class="primaryContent menuHeader"><h3>
				
				';
if ($visitor['is_admin'])
{
$__compilerVar39 .= '
				' . 'Admin' . '
				';
}
else
{
$__compilerVar39 .= '
				Mod
				';
}
$__compilerVar39 .= ' ' . 'Menu' . '
				
				
				</h3></div>
				<ul class="secondaryContent blockLinksList">
					
	
	
					';
if ($visitor['is_admin'])
{
$__compilerVar39 .= '			
						<li class="navTab">
							<a href="admin.php" target="_blank" class="acp adminLink navLink">
								<i class="uix_icon uix_icon-admin"></i> 
								<span class="itemLabel">' . 'Admin' . '</span>
							</a>
						</li>
						
						';
if ($session['permissionTest'])
{
$__compilerVar39 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
								<i class="uix_icon uix_icon-permissions"></i> 
								<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
							</a>
						</li>
						
						';
}
$__compilerVar39 .= '
					';
}
$__compilerVar39 .= '
			
					';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar39 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('moderation-queue', false, array()) . '" class="moderationQueue modLink navLink">
								<i class="uix_icon uix_icon-moderator"></i> 
								<span class="itemLabel">' . 'Moderation' . ':</span>
								<strong class="itemCount ' . (($session['moderationCounts']['total']) ? ('alert') : ('')) . '">
									<span class="Total">' . htmlspecialchars($session['moderationCounts']['total'], ENT_QUOTES, 'UTF-8') . '</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar39 .= '
					
					';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar39 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
								<i class="uix_icon uix_icon-reports"></i> 
								<span class="itemLabel">' . 'Reports' . ':</span>
								<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
									<span class="Total">
										';
if ($session['reportCounts']['assigned'])
{
$__compilerVar39 .= '
											' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
else
{
$__compilerVar39 .= '
											' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
$__compilerVar39 .= '
									</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar39 .= '
					
					';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar39 .= '
						<li class="navTab">
							<a href="admin.php?users/moderated" class="userModerationQueue modLink navLink">
								<i class="uix_icon uix_icon-users"></i> 
								<span class="itemLabel">' . 'Users' . ':</span>
								<strong class="itemCount ' . (($session['userModerationCounts']['total']) ? ('alert') : ('')) . '">
									<span class="Total">
										' . htmlspecialchars($session['userModerationCounts']['total'], ENT_QUOTES, 'UTF-8') . '
									</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar39 .= '
					
					';
$__compilerVar41 = '';
$__compilerVar39 .= $this->callTemplateHook('moderator_bar', $__compilerVar41, array());
unset($__compilerVar41);
$__compilerVar39 .= '
	
				</ul>
			</div>		
		</li>
	';
}
$__compilerVar39 .= '	';
$__compilerVar33 .= $__compilerVar39;
unset($__compilerVar39);
$__compilerVar33 .= '
						';
}
$__compilerVar33 .= '
						
						';
$__compilerVar42 = '';
$__compilerVar33 .= $this->callTemplateHook('uix_userbar_left_end', $__compilerVar42, array());
unset($__compilerVar42);
$__compilerVar33 .= '
						
						';
if (trim($__compilerVar33) !== '')
{
$__compilerVar32 .= '
					<ul class="navLeft';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar32 .= ' moderatorTabs';
}
$__compilerVar32 .= '">
					
						' . $__compilerVar33 . '
		
					</ul>

					
					';
}
unset($__compilerVar33);
$__compilerVar32 .= '
					
					';
$__compilerVar43 = '';
$__compilerVar43 .= '
						
							';
$__compilerVar44 = '';
$__compilerVar43 .= $this->callTemplateHook('uix_userbar_right_start', $__compilerVar44, array());
unset($__compilerVar44);
$__compilerVar43 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar43 .= '
								';
$__compilerVar45 = '';
$__compilerVar46 = '';
$__compilerVar46 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar46 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar46 .= '
	';
$__compilerVar47 = '';
$__compilerVar46 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar47, array());
unset($__compilerVar47);
$__compilerVar46 .= '
	';
}
$__compilerVar46 .= '
	
	  <li class="navTab" style="line-height:50px;"> &nbsp;  <a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>&nbsp;</li>

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">


		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar46 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar46 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar46 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar46 .= '

			
			
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ResponsiveOnly ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
				<span class="arrow"></span>
			</strong>
		</a>
		
		<div class="Menu JsOnly" id="AccountMenu">
			<div class="primaryContent menuHeader">
				' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,false,array(
'user' => '$visitor',
'size' => 'm',
'class' => 'NoOverlay plainImage',
'title' => 'View your profile'
),'')) . '
				
				<h3>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($visitor,'',(true),array(
'class' => 'concealed',
'title' => 'View your profile'
))) . '</h3>
				
				';
$__compilerVar48 = '';
$__compilerVar48 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar48) !== '')
{
$__compilerVar46 .= '<div class="muted">' . $__compilerVar48 . '</div>';
}
unset($__compilerVar48);
$__compilerVar46 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar49 = '';
$__compilerVar49 .= '
					';
if ($canEditProfile)
{
$__compilerVar49 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar49 .= '
					';
if ($canEditSignature)
{
$__compilerVar49 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar49 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar49 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar49 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar49 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar49 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar50 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar50 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar49 .= $__compilerVar50;
unset($__compilerVar50);
$__compilerVar49 .= '
';
$__compilerVar46 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar49, array());
unset($__compilerVar49);
$__compilerVar46 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar51 = '';
$__compilerVar51 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar51 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar51 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '
						<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '"
							id="VisitorExtraMenu_ConversationsCounter">
							<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
						</strong></a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Alerts' . '
						<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '"
							id="VisitorExtraMenu_AlertsCounter">
							<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
						</strong></a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id']
)) . '">' . 'Your Content' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/ignored', false, array()) . '">' . 'People You Ignore' . '</a></li>
					';
if ($xenCache['userUpgradeCount'])
{
$__compilerVar51 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar51 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar46 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar51, array());
unset($__compilerVar51);
$__compilerVar46 .= '
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
					<li>				
						<form action="' . XenForo_Template_Helper_Core::link('account/toggle-visibility', false, array()) . '" method="post" class="AutoValidator visibilityForm">
							<label><input type="checkbox" name="visible" value="1" class="SubmitOnChange" ' . (($visitor['visible']) ? ' checked="checked"' : '') . ' />
								' . 'Show online status' . '</label>
							<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						</form>
					</li>
				</ul>
				<ul class="col2 blockLinksList">
					<li><a href="' . XenForo_Template_Helper_Core::link('logout', '', array(
'_xfToken' => $visitor['csrf_token_page']
)) . '" class="LogOut">' . 'Log Out' . '</a></li>
				</ul>
			</div>
			';
if ($canUpdateStatus)
{
$__compilerVar46 .= '
				<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" class="sectionFooter statusPoster AutoValidator" data-optInOut="OptIn">
					<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" data-acurl="' . XenForo_Template_Helper_Core::link('members/bdtagme-find', false, array()) . '" placeholder="' . 'Update your status' . '..." rows="1" cols="40" style="height:18px" data-statusEditorCounter="#visMenuSEdCount" data-nofocus="true"></textarea>
					<div class="submitUnit">
						<span id="visMenuSEdCount" title="' . 'Characters remaining' . '"></span>
						<input type="submit" class="button primary MenuCloser" value="' . 'Post' . '" />
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						<input type="hidden" name="return" value="1" /> 
					</div>
				</form>
			';
}
$__compilerVar46 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar46 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar46 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar52 = '';
$__compilerVar52 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar52 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar52 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar46 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar52, array());
unset($__compilerVar52);
$__compilerVar46 .= '
				</ul>
				';
$__compilerVar53 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar53 .= '
	';
$__compilerVar54 = '';
$__compilerVar54 .= '
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
$__compilerVar54 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar55 = '';
$__compilerVar55 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar55 .= '
		';
$__compilerVar56 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar56 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar55 .= $__compilerVar56;
unset($__compilerVar56);
$__compilerVar55 .= '
	';
}
$__compilerVar55 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar55 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar55 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar55 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar55 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar55 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar55 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar54 .= $this->callTemplateHook('quick_search', $__compilerVar55, array());
unset($__compilerVar55);
$__compilerVar54 .= '

</div>';
$__compilerVar53 .= $__compilerVar54;
unset($__compilerVar54);
$__compilerVar53 .= '
	';
$__compilerVar57 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar57 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar53 .= $__compilerVar57;
unset($__compilerVar57);
$__compilerVar53 .= '
';
}
$__compilerVar46 .= $__compilerVar53;
unset($__compilerVar53);
$__compilerVar46 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar46 .= '
	';
}
$__compilerVar46 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar46 .= '

		<!-- conversations popup -->
		<li class="navTab inbox Popup PopupControl PopupClosed ' . (($tabs['inbox']['selected']) ? ('selected') : ('')) . '">
						
			<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" rel="Menu" class="navLink NoPopupGadget">
				<i class="uix_icon uix_icon-inbox"></i>
				<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '"
					id="ConversationsMenu_Counter" data-text="' . 'You have %d new unread conversation(s).' . '">
					<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
					<span class="arrow"></span>
				</strong>
			</a>
			
			<div class="Menu JsOnly navPopup" id="ConversationsMenu"
				data-contentSrc="' . XenForo_Template_Helper_Core::link('conversations/popup', false, array()) . '"
				data-contentDest="#ConversationsMenu .listPlaceholder">
				
				<div class="menuHeader primaryContent">
					<h3>
						<span class="Progress InProgress"></span>
						<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" class="concealed">' . 'Conversations' . '</a>
					</h3>						
				</div>
				
				<div class="listPlaceholder"></div>
				
				<div class="sectionFooter">
					';
if ($canStartConversation)
{
$__compilerVar46 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar46 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar46 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar46 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar58 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar58 .= '
	';
$__compilerVar59 = '';
$__compilerVar59 .= '
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
$__compilerVar59 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar60 = '';
$__compilerVar60 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar60 .= '
		';
$__compilerVar61 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar61 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar60 .= $__compilerVar61;
unset($__compilerVar61);
$__compilerVar60 .= '
	';
}
$__compilerVar60 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar60 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar60 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar60 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar60 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar60 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar60 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar59 .= $this->callTemplateHook('quick_search', $__compilerVar60, array());
unset($__compilerVar60);
$__compilerVar59 .= '

</div>';
$__compilerVar58 .= $__compilerVar59;
unset($__compilerVar59);
$__compilerVar58 .= '
	';
$__compilerVar62 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar62 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar58 .= $__compilerVar62;
unset($__compilerVar62);
$__compilerVar58 .= '
';
}
$__compilerVar46 .= $__compilerVar58;
unset($__compilerVar58);
$__compilerVar46 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar46 .= '
		';
}
$__compilerVar46 .= '
		
		';
$__compilerVar63 = '';
$__compilerVar46 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar63, array());
unset($__compilerVar63);
$__compilerVar46 .= '
		
		<!-- alerts popup -->
		<li class="navTab alerts Popup PopupControl PopupClosed">	
						
			<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" rel="Menu" class="navLink NoPopupGadget">
				<i class="uix_icon uix_icon-alerts"></i>
				<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '"
					id="AlertsMenu_Counter" data-text="' . 'You have %d new alert(s).' . '">
					<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
					<span class="arrow"></span>
				</strong>
			</a>
			
			<div class="Menu JsOnly navPopup" id="AlertsMenu"
				data-contentSrc="' . XenForo_Template_Helper_Core::link('account/alerts-popup', false, array()) . '"
				data-contentDest="#AlertsMenu .listPlaceholder"
				data-removeCounter="#AlertsMenu_Counter">
				
				<div class="menuHeader primaryContent">
					<h3>
						<span class="Progress InProgress"></span>
						<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" class="concealed">' . 'Alerts' . '</a>
					</h3>
				</div>
				
				<div class="listPlaceholder"></div>
				
				<div class="sectionFooter">
					<a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '" class="floatLink">' . 'Alert Preferences' . '</a>
					<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
$__compilerVar64 = '';
$__compilerVar46 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar64, array());
unset($__compilerVar64);
$__compilerVar46 .= '
	';
}
else
{
$__compilerVar46 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar46 .= ' 
	';
}
$__compilerVar46 .= '
	
';
if (trim($__compilerVar46) !== '')
{
$__compilerVar45 .= '
' . $__compilerVar46 . '
';
}
unset($__compilerVar46);
$__compilerVar43 .= $__compilerVar45;
unset($__compilerVar45);
$__compilerVar43 .= '
							';
}
$__compilerVar43 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 2)
{
$__compilerVar43 .= '
								';
$__compilerVar65 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar65 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar65 .= '<label for="LoginControl">';
}
$__compilerVar65 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar65 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar65 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar65 .= '</label>';
}
$__compilerVar65 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar65 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar66 = '';
$__compilerVar66 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

	<label for="ctrl_pageLogin_login">' . 'Your name or email address' . ':' . htmlspecialchars($isOverlay, ENT_QUOTES, 'UTF-8') . '</label>
	<dl class="ctrlUnit">
		<dd><input type="text" name="login" value="' . htmlspecialchars($defaultLogin, ENT_QUOTES, 'UTF-8') . '" id="ctrl_pageLogin_login" class="textCtrl uix_fixIOSClickInput" tabindex="1" /></dd>
	</dl>
	
	<label for="ctrl_pageLogin_password">' . 'Password' . ':</label>
	<dl class="ctrlUnit">
		<dd>
			<input type="password" name="password" class="textCtrl uix_fixIOSClickInput" id="ctrl_pageLogin_password" tabindex="2" />					
			<div><a href="' . XenForo_Template_Helper_Core::link('lost-password', false, array()) . '" class="OverlayTrigger OverlayCloser" tabindex="6">' . 'Forgot your password?' . '</a></div>
		</dd>
	</dl>
	
	';
if ($captcha)
{
$__compilerVar66 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar66 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar67 = '';
$__compilerVar67 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar67 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar67 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar67 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar67 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar67 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar67 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar67 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar67 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar67 .= '

	';
if (trim($__compilerVar67) !== '')
{
$__compilerVar66 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar67 . '
	</div>
	';
}
unset($__compilerVar67);
$__compilerVar66 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar66 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar66 .= '

</form>';
$__compilerVar65 .= $__compilerVar66;
unset($__compilerVar66);
$__compilerVar65 .= '
			</div>
		</div>
		';
}
$__compilerVar65 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar65 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar65 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar65 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar65 .= '
	
';
}
$__compilerVar43 .= $__compilerVar65;
unset($__compilerVar65);
$__compilerVar43 .= '
							';
}
$__compilerVar43 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 1 && $contentTemplate == ('thread_view'))
{
$__compilerVar43 .= '
								<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
							';
}
$__compilerVar43 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar43 .= '
								';
$__compilerVar68 = '';
if ($canSearch)
{
$__compilerVar68 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar69 = '';
$__compilerVar69 .= '
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
$__compilerVar69 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar70 = '';
$__compilerVar70 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar70 .= '
		';
$__compilerVar71 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar71 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar70 .= $__compilerVar71;
unset($__compilerVar71);
$__compilerVar70 .= '
	';
}
$__compilerVar70 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar70 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar70 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar70 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar70 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar70 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar70 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar69 .= $this->callTemplateHook('quick_search', $__compilerVar70, array());
unset($__compilerVar70);
$__compilerVar69 .= '

</div>';
$__compilerVar68 .= $__compilerVar69;
unset($__compilerVar69);
$__compilerVar68 .= '
		</li>
	
';
}
$__compilerVar43 .= $__compilerVar68;
unset($__compilerVar68);
$__compilerVar43 .= '
							';
}
$__compilerVar43 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 1)
{
$__compilerVar72 = '1';
$__compilerVar73 = '';
$__compilerVar73 .= '

';
if ($__compilerVar72 == 0)
{
$__compilerVar73 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar73 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar73 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar73 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar73 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar73 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar73 .= '
	';
}
else
{
$__compilerVar73 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar73 .= '
	';
}
$__compilerVar73 .= '
	
';
}
else if ($__compilerVar72 == 1)
{
$__compilerVar73 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar73 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar73 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar73 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar73 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar73 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar73 .= '
	';
}
else
{
$__compilerVar73 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar73 .= '
	';
}
$__compilerVar73 .= '
	
';
}
$__compilerVar73 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar73 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar72) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar73 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar73 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar73 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar73 .= '
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="uix_VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
			</strong>
	</a></li>
	
';
}
else if ($canvasType == ('navigation') || $canvasType == ('custom'))
{
$__compilerVar73 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar72) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar73 .= '
			';
if (!$__compilerVar72)
{
$__compilerVar73 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar73 .= '
			';
if ($__compilerVar72)
{
$__compilerVar73 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar73 .= '
		';
}
else
{
$__compilerVar73 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar73 .= '</a>
	</li>

';
}
$__compilerVar43 .= $__compilerVar73;
unset($__compilerVar72, $__compilerVar73);
}
$__compilerVar43 .= '
							
							';
$__compilerVar74 = '';
$__compilerVar43 .= $this->callTemplateHook('uix_userbar_right_end', $__compilerVar74, array());
unset($__compilerVar74);
$__compilerVar43 .= '
							
						';
if (trim($__compilerVar43) !== '')
{
$__compilerVar32 .= '
					
					
						<ul class="navRight' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar')) ? (' visitorTabs') : ('')) . '">
						
						' . $__compilerVar43 . '
						
						</ul>
						
					';
}
unset($__compilerVar43);
$__compilerVar32 .= '
					
					
					';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar32 .= '
						';
$__compilerVar75 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar75 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar32 .= $__compilerVar75;
unset($__compilerVar75);
$__compilerVar32 .= '
					';
}
$__compilerVar32 .= '
					
				
				';
if (trim($__compilerVar32) !== '')
{
$__compilerVar31 .= '



<div id="userBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyUserBar')) ? ('stickyTop') : ('')) . ' ' . (($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3) ? ('withSearch') : ('')) . '">


	<div class="sticky_wrapper">

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar31 .= '
	<div class="pageWidth">
	';
}
$__compilerVar31 .= '
		
		<div class="pageContent">
		
			<div class="navTabs">
		
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar31 .= '
			<div class="pageWidth">
			';
}
$__compilerVar31 .= '
		
				' . $__compilerVar32 . '
			
			</div>

			<span class="helper"></span>
		</div>
	</div>
	</div>
</div>

';
if (XenForo_Template_Helper_Core::styleProperty('uix_jsInsideTemplates'))
{
$__compilerVar31 .= '
<script>if (typeof(uix) !== "undefined" && typeof(uix.templates) !== "undefined") uix.templates.userBar();</script>
';
}
$__compilerVar31 .= '

';
}
unset($__compilerVar32);
$__compilerVar30 .= $__compilerVar31;
unset($__compilerVar31);
}
$__compilerVar30 .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 1 && XenForo_Template_Helper_Core::styleProperty('uix_navStyle') != 4)
{
$__compilerVar76 = '';
$__compilerVar76 .= '
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
$__compilerVar76 .= '

' . '

<div id="navigation" class="' . (($canSearch && ($uix_searchPosition == 0 || $uix_searchPosition == 2)) ? ('withSearch') : ('')) . ' ' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) ? ('stickyTop') : ('')) . '">
	<div class="sticky_wrapper">
		<div class="uix_navigationWrapper">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar76 .= '
		<div class="pageWidth">
		';
}
$__compilerVar76 .= '
			<div class="pageContent">
				<nav>
					<div class="navTabs">
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar76 .= '
						<div class="pageWidth">
						';
}
$__compilerVar76 .= '
							
							<ul class="publicTabs navLeft">
	
							';
if ((XenForo_Template_Helper_Core::styleProperty('uix_navigationStickyLogo') && XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) || XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2)
{
$__compilerVar76 .= '
							<li id="logo_small">
								<a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
								';
if (XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath'))
{
$__compilerVar76 .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath') . '">
								';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar76 .= '
									<h1 class="uix_textLogo">';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__compilerVar76 .= '<i class="uix_icon ' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon') . '"></i>';
}
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar76 .= XenForo_Template_Helper_Core::styleProperty('uix_logoText');
}
$__compilerVar76 .= '</h1>
								';
}
else
{
$__compilerVar76 .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
								';
}
$__compilerVar76 .= '
								</a>
							</li>
							';
}
$__compilerVar76 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 0)
{
$__compilerVar77 = '0';
$__compilerVar78 = '';
$__compilerVar78 .= '

';
if ($__compilerVar77 == 0)
{
$__compilerVar78 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar78 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar78 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar78 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar78 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar78 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar78 .= '
	';
}
else
{
$__compilerVar78 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar78 .= '
	';
}
$__compilerVar78 .= '
	
';
}
else if ($__compilerVar77 == 1)
{
$__compilerVar78 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar78 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar78 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar78 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar78 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar78 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar78 .= '
	';
}
else
{
$__compilerVar78 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar78 .= '
	';
}
$__compilerVar78 .= '
	
';
}
$__compilerVar78 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar78 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar77) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar78 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar78 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar78 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar78 .= '
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="uix_VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
			</strong>
	</a></li>
	
';
}
else if ($canvasType == ('navigation') || $canvasType == ('custom'))
{
$__compilerVar78 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar77) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar78 .= '
			';
if (!$__compilerVar77)
{
$__compilerVar78 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar78 .= '
			';
if ($__compilerVar77)
{
$__compilerVar78 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar78 .= '
		';
}
else
{
$__compilerVar78 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar78 .= '</a>
	</li>

';
}
$__compilerVar76 .= $__compilerVar78;
unset($__compilerVar77, $__compilerVar78);
}
$__compilerVar76 .= '
							
							<!-- home -->
							';
if ($showHomeLink)
{
$__compilerVar76 .= '
								<li class="navTab home PopupClosed"><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="navLink">';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon'))
{
$__compilerVar76 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar76 .= 'Home';
}
$__compilerVar76 .= '</a></li>
							';
}
$__compilerVar76 .= '
								
								
								<!-- extra tabs: home -->
								';
if ($extraTabs['home'])
{
$__compilerVar76 .= '
								';
foreach ($extraTabs['home'] AS $extraTabId => $extraTab)
{
$__compilerVar76 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar76 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar76 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar76 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar76 .= '">
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' NoPopupGadget';
}
$__compilerVar76 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' rel="Menu"';
}
$__compilerVar76 .= '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon') && ($extraTabId == ('home') || $extraTabId == ('portal') || $extraTabId == ('ctaFt')))
{
$__compilerVar76 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar76 .= htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
}
if ($extraTab['counter'])
{
$__compilerVar76 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar76 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar76 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar76 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar76 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h2>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h2>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar79 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar79 .= '
	';
$__compilerVar80 = '';
$__compilerVar80 .= '
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
$__compilerVar80 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar81 = '';
$__compilerVar81 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar81 .= '
		';
$__compilerVar82 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar82 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar81 .= $__compilerVar82;
unset($__compilerVar82);
$__compilerVar81 .= '
	';
}
$__compilerVar81 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar81 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar81 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar81 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar81 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar81 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar81 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar80 .= $this->callTemplateHook('quick_search', $__compilerVar81, array());
unset($__compilerVar81);
$__compilerVar80 .= '

</div>';
$__compilerVar79 .= $__compilerVar80;
unset($__compilerVar80);
$__compilerVar79 .= '
	';
$__compilerVar83 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar83 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar79 .= $__compilerVar83;
unset($__compilerVar83);
$__compilerVar79 .= '
';
}
$__compilerVar76 .= $__compilerVar79;
unset($__compilerVar79);
}
$__compilerVar76 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar76 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' NoPopupGadget';
}
$__compilerVar76 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' rel="Menu"';
}
$__compilerVar76 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar76 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar76 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar76 .= '<div class="tabLinks">';
$__compilerVar84 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar84 .= '
	';
$__compilerVar85 = '';
$__compilerVar85 .= '
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
$__compilerVar85 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar86 = '';
$__compilerVar86 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar86 .= '
		';
$__compilerVar87 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar87 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar86 .= $__compilerVar87;
unset($__compilerVar87);
$__compilerVar86 .= '
	';
}
$__compilerVar86 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar86 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar86 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar86 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar86 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar86 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar86 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar85 .= $this->callTemplateHook('quick_search', $__compilerVar86, array());
unset($__compilerVar86);
$__compilerVar85 .= '

</div>';
$__compilerVar84 .= $__compilerVar85;
unset($__compilerVar85);
$__compilerVar84 .= '
	';
$__compilerVar88 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar88 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar84 .= $__compilerVar88;
unset($__compilerVar88);
$__compilerVar84 .= '
';
}
$__compilerVar76 .= $__compilerVar84;
unset($__compilerVar84);
$__compilerVar76 .= '</div>';
}
}
$__compilerVar76 .= '
										</li>
									';
}
$__compilerVar76 .= '
								';
}
$__compilerVar76 .= '
								';
}
$__compilerVar76 .= '
								
								
								<!-- forums -->
								';
if ($tabs['forums'])
{
$__compilerVar76 .= '
									<li class="navTab forums ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar76 .= (($tabs['forums']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar76 .= (($tabs['forums']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar76 .= '">
									
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' NoPopupGadget';
}
$__compilerVar76 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' rel="Menu"';
}
$__compilerVar76 .= '>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar76 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar76 .= (($tabs['forums']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar76 .= ' forumsTabLinks">
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar89 = '';
$__compilerVar89 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar89 .= '<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>';
}
$__compilerVar89 .= '
													';
if ($canSearch)
{
$__compilerVar89 .= '<li><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Forums' . '</a></li>';
}
$__compilerVar89 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar89 .= '
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/forums', false, array()) . '">' . 'Watched Forums' . '</a></li>
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/threads', false, array()) . '">' . 'Watched Threads' . '</a></li>
													';
}
$__compilerVar89 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '" rel="nofollow">' . (($visitor['user_id']) ? ('New Posts') : ('Recent Posts')) . '</a></li>
												';
$__compilerVar76 .= $this->callTemplateHook('navigation_tabs_forums', $__compilerVar89, array());
unset($__compilerVar89);
$__compilerVar76 .= '
												</ul>
												';
if ($tabs['forums']['selected'])
{
$__compilerVar90 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar90 .= '
	';
$__compilerVar91 = '';
$__compilerVar91 .= '
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
$__compilerVar91 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar92 = '';
$__compilerVar92 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar92 .= '
		';
$__compilerVar93 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar93 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar92 .= $__compilerVar93;
unset($__compilerVar93);
$__compilerVar92 .= '
	';
}
$__compilerVar92 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar92 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar92 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar92 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar92 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar92 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar92 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar91 .= $this->callTemplateHook('quick_search', $__compilerVar92, array());
unset($__compilerVar92);
$__compilerVar91 .= '

</div>';
$__compilerVar90 .= $__compilerVar91;
unset($__compilerVar91);
$__compilerVar90 .= '
	';
$__compilerVar94 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar94 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar90 .= $__compilerVar94;
unset($__compilerVar94);
$__compilerVar90 .= '
';
}
$__compilerVar76 .= $__compilerVar90;
unset($__compilerVar90);
}
$__compilerVar76 .= '
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__compilerVar76 .= '
								
								
								<!-- extra tabs: middle -->
								';
if ($extraTabs['middle'])
{
$__compilerVar76 .= '
								';
foreach ($extraTabs['middle'] AS $extraTabId => $extraTab)
{
$__compilerVar76 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar76 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar76 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar76 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar76 .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' NoPopupGadget';
}
$__compilerVar76 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' rel="Menu"';
}
$__compilerVar76 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar76 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar76 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar76 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar76 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar76 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar95 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar95 .= '
	';
$__compilerVar96 = '';
$__compilerVar96 .= '
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
$__compilerVar96 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar97 = '';
$__compilerVar97 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar97 .= '
		';
$__compilerVar98 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar98 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar97 .= $__compilerVar98;
unset($__compilerVar98);
$__compilerVar97 .= '
	';
}
$__compilerVar97 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar97 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar97 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar97 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar97 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar97 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar97 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar96 .= $this->callTemplateHook('quick_search', $__compilerVar97, array());
unset($__compilerVar97);
$__compilerVar96 .= '

</div>';
$__compilerVar95 .= $__compilerVar96;
unset($__compilerVar96);
$__compilerVar95 .= '
	';
$__compilerVar99 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar99 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar95 .= $__compilerVar99;
unset($__compilerVar99);
$__compilerVar95 .= '
';
}
$__compilerVar76 .= $__compilerVar95;
unset($__compilerVar95);
}
$__compilerVar76 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar76 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' NoPopupGadget';
}
$__compilerVar76 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' rel="Menu"';
}
$__compilerVar76 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar76 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar76 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar76 .= '<div class="tabLinks">';
$__compilerVar100 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar100 .= '
	';
$__compilerVar101 = '';
$__compilerVar101 .= '
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
$__compilerVar101 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar102 = '';
$__compilerVar102 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar102 .= '
		';
$__compilerVar103 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar103 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar102 .= $__compilerVar103;
unset($__compilerVar103);
$__compilerVar102 .= '
	';
}
$__compilerVar102 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar102 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar102 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar102 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar102 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar102 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar102 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar101 .= $this->callTemplateHook('quick_search', $__compilerVar102, array());
unset($__compilerVar102);
$__compilerVar101 .= '

</div>';
$__compilerVar100 .= $__compilerVar101;
unset($__compilerVar101);
$__compilerVar100 .= '
	';
$__compilerVar104 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar104 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar100 .= $__compilerVar104;
unset($__compilerVar104);
$__compilerVar100 .= '
';
}
$__compilerVar76 .= $__compilerVar100;
unset($__compilerVar100);
$__compilerVar76 .= '</div>';
}
}
$__compilerVar76 .= '
										</li>
									';
}
$__compilerVar76 .= '
								';
}
$__compilerVar76 .= '
								';
}
$__compilerVar76 .= '
								
								
								<!-- members -->
								';
if ($tabs['members'])
{
$__compilerVar76 .= '
									<li class="navTab members ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar76 .= (($tabs['members']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar76 .= (($tabs['members']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar76 .= '">
									
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' NoPopupGadget';
}
$__compilerVar76 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' rel="Menu"';
}
$__compilerVar76 .= '>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar76 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar76 .= (($tabs['members']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar76 .= ' membersTabLinks">
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar105 = '';
$__compilerVar105 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Notable Members' . '</a></li>
													';
if ($xenOptions['enableMemberList'])
{
$__compilerVar105 .= '<li><a href="' . XenForo_Template_Helper_Core::link('members/list', false, array()) . '">' . 'Registered Members' . '</a></li>';
}
$__compilerVar105 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Current Visitors' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar105 .= '<li><a href="' . XenForo_Template_Helper_Core::link('recent-activity', false, array()) . '">' . 'Recent Activity' . '</a></li>';
}
$__compilerVar105 .= '
													';
if ($canViewProfilePosts)
{
$__compilerVar105 .= '<li><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></li>';
}
$__compilerVar105 .= '
												';
$__compilerVar76 .= $this->callTemplateHook('navigation_tabs_members', $__compilerVar105, array());
unset($__compilerVar105);
$__compilerVar76 .= '
												</ul>
												';
if ($tabs['members']['selected'])
{
$__compilerVar106 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar106 .= '
	';
$__compilerVar107 = '';
$__compilerVar107 .= '
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
$__compilerVar107 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar108 = '';
$__compilerVar108 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar108 .= '
		';
$__compilerVar109 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar109 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar108 .= $__compilerVar109;
unset($__compilerVar109);
$__compilerVar108 .= '
	';
}
$__compilerVar108 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar108 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar108 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar108 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar108 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar108 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar108 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar107 .= $this->callTemplateHook('quick_search', $__compilerVar108, array());
unset($__compilerVar108);
$__compilerVar107 .= '

</div>';
$__compilerVar106 .= $__compilerVar107;
unset($__compilerVar107);
$__compilerVar106 .= '
	';
$__compilerVar110 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar110 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar106 .= $__compilerVar110;
unset($__compilerVar110);
$__compilerVar106 .= '
';
}
$__compilerVar76 .= $__compilerVar106;
unset($__compilerVar106);
}
$__compilerVar76 .= '
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__compilerVar76 .= '				
								
								<!-- extra tabs: end -->
								';
if ($extraTabs['end'])
{
$__compilerVar76 .= '
								';
foreach ($extraTabs['end'] AS $extraTabId => $extraTab)
{
$__compilerVar76 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar76 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar76 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar76 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar76 .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' NoPopupGadget';
}
$__compilerVar76 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' rel="Menu"';
}
$__compilerVar76 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar76 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar76 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar76 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar76 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar76 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar111 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar111 .= '
	';
$__compilerVar112 = '';
$__compilerVar112 .= '
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
$__compilerVar112 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar113 = '';
$__compilerVar113 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar113 .= '
		';
$__compilerVar114 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar114 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar113 .= $__compilerVar114;
unset($__compilerVar114);
$__compilerVar113 .= '
	';
}
$__compilerVar113 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar113 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar113 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar113 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar113 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar113 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar113 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar112 .= $this->callTemplateHook('quick_search', $__compilerVar113, array());
unset($__compilerVar113);
$__compilerVar112 .= '

</div>';
$__compilerVar111 .= $__compilerVar112;
unset($__compilerVar112);
$__compilerVar111 .= '
	';
$__compilerVar115 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar115 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar111 .= $__compilerVar115;
unset($__compilerVar115);
$__compilerVar111 .= '
';
}
$__compilerVar76 .= $__compilerVar111;
unset($__compilerVar111);
}
$__compilerVar76 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar76 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' NoPopupGadget';
}
$__compilerVar76 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar76 .= ' rel="Menu"';
}
$__compilerVar76 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar76 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar76 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar76 .= '<div class="tabLinks">';
$__compilerVar116 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar116 .= '
	';
$__compilerVar117 = '';
$__compilerVar117 .= '
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
$__compilerVar117 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar118 = '';
$__compilerVar118 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar118 .= '
		';
$__compilerVar119 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar119 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar118 .= $__compilerVar119;
unset($__compilerVar119);
$__compilerVar118 .= '
	';
}
$__compilerVar118 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar118 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar118 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar118 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar118 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar118 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar118 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar117 .= $this->callTemplateHook('quick_search', $__compilerVar118, array());
unset($__compilerVar118);
$__compilerVar117 .= '

</div>';
$__compilerVar116 .= $__compilerVar117;
unset($__compilerVar117);
$__compilerVar116 .= '
	';
$__compilerVar120 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar120 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar116 .= $__compilerVar120;
unset($__compilerVar120);
$__compilerVar116 .= '
';
}
$__compilerVar76 .= $__compilerVar116;
unset($__compilerVar116);
$__compilerVar76 .= '</div>';
}
}
$__compilerVar76 .= '
										</li>
									';
}
$__compilerVar76 .= '
								';
}
$__compilerVar76 .= '
								';
}
$__compilerVar76 .= '
								
								<!-- responsive popup -->
								<li class="navTab navigationHiddenTabs Popup PopupControl PopupClosed" style="display:none">	
												
									<a rel="Menu" class="navLink NoPopupGadget uix_dropdownDesktopMenu"><i class="uix_icon uix_icon-navTrigger"></i><span class="uix_hide menuIcon">' . 'Menu' . '</span></a>
									
									<div class="Menu JsOnly blockLinksList primaryContent" id="NavigationHiddenMenu"></div>
								</li>
									
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar76 .= '
								<!-- no selection -->
								';
if (!$selectedTab)
{
$__compilerVar76 .= '
									<li class="navTab selected"><div class="tabLinks">';
$__compilerVar121 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar121 .= '
	';
$__compilerVar122 = '';
$__compilerVar122 .= '
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
$__compilerVar122 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar123 = '';
$__compilerVar123 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar123 .= '
		';
$__compilerVar124 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar124 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar123 .= $__compilerVar124;
unset($__compilerVar124);
$__compilerVar123 .= '
	';
}
$__compilerVar123 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar123 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar123 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar123 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar123 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar123 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar123 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar122 .= $this->callTemplateHook('quick_search', $__compilerVar123, array());
unset($__compilerVar123);
$__compilerVar122 .= '

</div>';
$__compilerVar121 .= $__compilerVar122;
unset($__compilerVar122);
$__compilerVar121 .= '
	';
$__compilerVar125 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar125 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar121 .= $__compilerVar125;
unset($__compilerVar125);
$__compilerVar121 .= '
';
}
$__compilerVar76 .= $__compilerVar121;
unset($__compilerVar121);
$__compilerVar76 .= '</div></li>
								';
}
$__compilerVar76 .= '
								';
}
$__compilerVar76 .= '
	
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar76 .= '	
									';
if ($tabs['account']['selected'])
{
$__compilerVar76 .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar126 = '';
$__compilerVar126 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar126 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar126 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
												';
$__compilerVar76 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar126, array());
unset($__compilerVar126);
$__compilerVar76 .= '
												</ul>
												';
$__compilerVar127 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar127 .= '
	';
$__compilerVar128 = '';
$__compilerVar128 .= '
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
$__compilerVar128 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar129 = '';
$__compilerVar129 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar129 .= '
		';
$__compilerVar130 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar130 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar129 .= $__compilerVar130;
unset($__compilerVar130);
$__compilerVar129 .= '
	';
}
$__compilerVar129 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar129 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar129 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar129 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar129 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar129 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar129 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar128 .= $this->callTemplateHook('quick_search', $__compilerVar129, array());
unset($__compilerVar129);
$__compilerVar128 .= '

</div>';
$__compilerVar127 .= $__compilerVar128;
unset($__compilerVar128);
$__compilerVar127 .= '
	';
$__compilerVar131 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar131 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar127 .= $__compilerVar131;
unset($__compilerVar131);
$__compilerVar127 .= '
';
}
$__compilerVar76 .= $__compilerVar127;
unset($__compilerVar127);
$__compilerVar76 .= '
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__compilerVar76 .= '
									';
if ($tabs['inbox']['selected'])
{
$__compilerVar76 .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
												</ul>
												';
$__compilerVar132 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar132 .= '
	';
$__compilerVar133 = '';
$__compilerVar133 .= '
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
$__compilerVar133 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar134 = '';
$__compilerVar134 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar134 .= '
		';
$__compilerVar135 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar135 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar134 .= $__compilerVar135;
unset($__compilerVar135);
$__compilerVar134 .= '
	';
}
$__compilerVar134 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar134 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar134 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar134 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar134 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar134 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar134 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar133 .= $this->callTemplateHook('quick_search', $__compilerVar134, array());
unset($__compilerVar134);
$__compilerVar133 .= '

</div>';
$__compilerVar132 .= $__compilerVar133;
unset($__compilerVar133);
$__compilerVar132 .= '
	';
$__compilerVar136 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar136 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar132 .= $__compilerVar136;
unset($__compilerVar136);
$__compilerVar132 .= '
';
}
$__compilerVar76 .= $__compilerVar132;
unset($__compilerVar132);
$__compilerVar76 .= '
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__compilerVar76 .= '
								';
}
$__compilerVar76 .= '		
	
							</ul>
							
							
							';
$__compilerVar137 = '';
$__compilerVar137 .= '
								
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 0 && $contentTemplate == ('thread_view'))
{
$__compilerVar137 .= '
										<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
									';
}
$__compilerVar137 .= '
								
									';
$__compilerVar138 = '';
$__compilerVar137 .= $this->callTemplateHook('uix_navigation_right_start', $__compilerVar138, array());
unset($__compilerVar138);
$__compilerVar137 .= '
									
									';
if (!XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar137 .= '
										';
$__compilerVar139 = '';
$__compilerVar140 = '';
$__compilerVar140 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar140 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar140 .= '
	';
$__compilerVar141 = '';
$__compilerVar140 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar141, array());
unset($__compilerVar141);
$__compilerVar140 .= '
	';
}
$__compilerVar140 .= '
	
	  <li class="navTab" style="line-height:50px;"> &nbsp;  <a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>&nbsp;</li>

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">


		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar140 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar140 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar140 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar140 .= '

			
			
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ResponsiveOnly ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
				<span class="arrow"></span>
			</strong>
		</a>
		
		<div class="Menu JsOnly" id="AccountMenu">
			<div class="primaryContent menuHeader">
				' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,false,array(
'user' => '$visitor',
'size' => 'm',
'class' => 'NoOverlay plainImage',
'title' => 'View your profile'
),'')) . '
				
				<h3>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($visitor,'',(true),array(
'class' => 'concealed',
'title' => 'View your profile'
))) . '</h3>
				
				';
$__compilerVar142 = '';
$__compilerVar142 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar142) !== '')
{
$__compilerVar140 .= '<div class="muted">' . $__compilerVar142 . '</div>';
}
unset($__compilerVar142);
$__compilerVar140 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar143 = '';
$__compilerVar143 .= '
					';
if ($canEditProfile)
{
$__compilerVar143 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar143 .= '
					';
if ($canEditSignature)
{
$__compilerVar143 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar143 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar143 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar143 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar143 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar143 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar144 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar144 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar143 .= $__compilerVar144;
unset($__compilerVar144);
$__compilerVar143 .= '
';
$__compilerVar140 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar143, array());
unset($__compilerVar143);
$__compilerVar140 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar145 = '';
$__compilerVar145 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar145 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar145 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '
						<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '"
							id="VisitorExtraMenu_ConversationsCounter">
							<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
						</strong></a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Alerts' . '
						<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '"
							id="VisitorExtraMenu_AlertsCounter">
							<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
						</strong></a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id']
)) . '">' . 'Your Content' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/ignored', false, array()) . '">' . 'People You Ignore' . '</a></li>
					';
if ($xenCache['userUpgradeCount'])
{
$__compilerVar145 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar145 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar140 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar145, array());
unset($__compilerVar145);
$__compilerVar140 .= '
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
					<li>				
						<form action="' . XenForo_Template_Helper_Core::link('account/toggle-visibility', false, array()) . '" method="post" class="AutoValidator visibilityForm">
							<label><input type="checkbox" name="visible" value="1" class="SubmitOnChange" ' . (($visitor['visible']) ? ' checked="checked"' : '') . ' />
								' . 'Show online status' . '</label>
							<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						</form>
					</li>
				</ul>
				<ul class="col2 blockLinksList">
					<li><a href="' . XenForo_Template_Helper_Core::link('logout', '', array(
'_xfToken' => $visitor['csrf_token_page']
)) . '" class="LogOut">' . 'Log Out' . '</a></li>
				</ul>
			</div>
			';
if ($canUpdateStatus)
{
$__compilerVar140 .= '
				<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" class="sectionFooter statusPoster AutoValidator" data-optInOut="OptIn">
					<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" data-acurl="' . XenForo_Template_Helper_Core::link('members/bdtagme-find', false, array()) . '" placeholder="' . 'Update your status' . '..." rows="1" cols="40" style="height:18px" data-statusEditorCounter="#visMenuSEdCount" data-nofocus="true"></textarea>
					<div class="submitUnit">
						<span id="visMenuSEdCount" title="' . 'Characters remaining' . '"></span>
						<input type="submit" class="button primary MenuCloser" value="' . 'Post' . '" />
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						<input type="hidden" name="return" value="1" /> 
					</div>
				</form>
			';
}
$__compilerVar140 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar140 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar140 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar146 = '';
$__compilerVar146 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar146 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar146 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar140 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar146, array());
unset($__compilerVar146);
$__compilerVar140 .= '
				</ul>
				';
$__compilerVar147 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar147 .= '
	';
$__compilerVar148 = '';
$__compilerVar148 .= '
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
$__compilerVar148 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar149 = '';
$__compilerVar149 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar149 .= '
		';
$__compilerVar150 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar150 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar149 .= $__compilerVar150;
unset($__compilerVar150);
$__compilerVar149 .= '
	';
}
$__compilerVar149 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar149 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar149 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar149 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar149 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar149 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar149 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar148 .= $this->callTemplateHook('quick_search', $__compilerVar149, array());
unset($__compilerVar149);
$__compilerVar148 .= '

</div>';
$__compilerVar147 .= $__compilerVar148;
unset($__compilerVar148);
$__compilerVar147 .= '
	';
$__compilerVar151 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar151 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar147 .= $__compilerVar151;
unset($__compilerVar151);
$__compilerVar147 .= '
';
}
$__compilerVar140 .= $__compilerVar147;
unset($__compilerVar147);
$__compilerVar140 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar140 .= '
	';
}
$__compilerVar140 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar140 .= '

		<!-- conversations popup -->
		<li class="navTab inbox Popup PopupControl PopupClosed ' . (($tabs['inbox']['selected']) ? ('selected') : ('')) . '">
						
			<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" rel="Menu" class="navLink NoPopupGadget">
				<i class="uix_icon uix_icon-inbox"></i>
				<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '"
					id="ConversationsMenu_Counter" data-text="' . 'You have %d new unread conversation(s).' . '">
					<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
					<span class="arrow"></span>
				</strong>
			</a>
			
			<div class="Menu JsOnly navPopup" id="ConversationsMenu"
				data-contentSrc="' . XenForo_Template_Helper_Core::link('conversations/popup', false, array()) . '"
				data-contentDest="#ConversationsMenu .listPlaceholder">
				
				<div class="menuHeader primaryContent">
					<h3>
						<span class="Progress InProgress"></span>
						<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" class="concealed">' . 'Conversations' . '</a>
					</h3>						
				</div>
				
				<div class="listPlaceholder"></div>
				
				<div class="sectionFooter">
					';
if ($canStartConversation)
{
$__compilerVar140 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar140 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar140 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar140 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar152 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar152 .= '
	';
$__compilerVar153 = '';
$__compilerVar153 .= '
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
$__compilerVar153 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar154 = '';
$__compilerVar154 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar154 .= '
		';
$__compilerVar155 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar155 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar154 .= $__compilerVar155;
unset($__compilerVar155);
$__compilerVar154 .= '
	';
}
$__compilerVar154 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar154 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar154 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar154 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar154 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar154 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar154 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar153 .= $this->callTemplateHook('quick_search', $__compilerVar154, array());
unset($__compilerVar154);
$__compilerVar153 .= '

</div>';
$__compilerVar152 .= $__compilerVar153;
unset($__compilerVar153);
$__compilerVar152 .= '
	';
$__compilerVar156 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar156 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar152 .= $__compilerVar156;
unset($__compilerVar156);
$__compilerVar152 .= '
';
}
$__compilerVar140 .= $__compilerVar152;
unset($__compilerVar152);
$__compilerVar140 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar140 .= '
		';
}
$__compilerVar140 .= '
		
		';
$__compilerVar157 = '';
$__compilerVar140 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar157, array());
unset($__compilerVar157);
$__compilerVar140 .= '
		
		<!-- alerts popup -->
		<li class="navTab alerts Popup PopupControl PopupClosed">	
						
			<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" rel="Menu" class="navLink NoPopupGadget">
				<i class="uix_icon uix_icon-alerts"></i>
				<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '"
					id="AlertsMenu_Counter" data-text="' . 'You have %d new alert(s).' . '">
					<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
					<span class="arrow"></span>
				</strong>
			</a>
			
			<div class="Menu JsOnly navPopup" id="AlertsMenu"
				data-contentSrc="' . XenForo_Template_Helper_Core::link('account/alerts-popup', false, array()) . '"
				data-contentDest="#AlertsMenu .listPlaceholder"
				data-removeCounter="#AlertsMenu_Counter">
				
				<div class="menuHeader primaryContent">
					<h3>
						<span class="Progress InProgress"></span>
						<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" class="concealed">' . 'Alerts' . '</a>
					</h3>
				</div>
				
				<div class="listPlaceholder"></div>
				
				<div class="sectionFooter">
					<a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '" class="floatLink">' . 'Alert Preferences' . '</a>
					<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
$__compilerVar158 = '';
$__compilerVar140 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar158, array());
unset($__compilerVar158);
$__compilerVar140 .= '
	';
}
else
{
$__compilerVar140 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar140 .= ' 
	';
}
$__compilerVar140 .= '
	
';
if (trim($__compilerVar140) !== '')
{
$__compilerVar139 .= '
' . $__compilerVar140 . '
';
}
unset($__compilerVar140);
$__compilerVar137 .= $__compilerVar139;
unset($__compilerVar139);
$__compilerVar137 .= '
									';
}
$__compilerVar137 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 1)
{
$__compilerVar137 .= '
										';
$__compilerVar159 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar159 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar159 .= '<label for="LoginControl">';
}
$__compilerVar159 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar159 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar159 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar159 .= '</label>';
}
$__compilerVar159 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar159 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar160 = '';
$__compilerVar160 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

	<label for="ctrl_pageLogin_login">' . 'Your name or email address' . ':' . htmlspecialchars($isOverlay, ENT_QUOTES, 'UTF-8') . '</label>
	<dl class="ctrlUnit">
		<dd><input type="text" name="login" value="' . htmlspecialchars($defaultLogin, ENT_QUOTES, 'UTF-8') . '" id="ctrl_pageLogin_login" class="textCtrl uix_fixIOSClickInput" tabindex="1" /></dd>
	</dl>
	
	<label for="ctrl_pageLogin_password">' . 'Password' . ':</label>
	<dl class="ctrlUnit">
		<dd>
			<input type="password" name="password" class="textCtrl uix_fixIOSClickInput" id="ctrl_pageLogin_password" tabindex="2" />					
			<div><a href="' . XenForo_Template_Helper_Core::link('lost-password', false, array()) . '" class="OverlayTrigger OverlayCloser" tabindex="6">' . 'Forgot your password?' . '</a></div>
		</dd>
	</dl>
	
	';
if ($captcha)
{
$__compilerVar160 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar160 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar161 = '';
$__compilerVar161 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar161 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar161 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar161 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar161 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar161 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar161 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar161 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar161 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar161 .= '

	';
if (trim($__compilerVar161) !== '')
{
$__compilerVar160 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar161 . '
	</div>
	';
}
unset($__compilerVar161);
$__compilerVar160 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar160 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar160 .= '

</form>';
$__compilerVar159 .= $__compilerVar160;
unset($__compilerVar160);
$__compilerVar159 .= '
			</div>
		</div>
		';
}
$__compilerVar159 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar159 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar159 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar159 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar159 .= '
	
';
}
$__compilerVar137 .= $__compilerVar159;
unset($__compilerVar159);
$__compilerVar137 .= '
									';
}
$__compilerVar137 .= '
							
									';
$__compilerVar162 = '';
$__compilerVar137 .= $this->callTemplateHook('uix_navigation_right_end', $__compilerVar162, array());
unset($__compilerVar162);
$__compilerVar137 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 0)
{
$__compilerVar163 = '1';
$__compilerVar164 = '';
$__compilerVar164 .= '

';
if ($__compilerVar163 == 0)
{
$__compilerVar164 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar164 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar164 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar164 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar164 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar164 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar164 .= '
	';
}
else
{
$__compilerVar164 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar164 .= '
	';
}
$__compilerVar164 .= '
	
';
}
else if ($__compilerVar163 == 1)
{
$__compilerVar164 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar164 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar164 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar164 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar164 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar164 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar164 .= '
	';
}
else
{
$__compilerVar164 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar164 .= '
	';
}
$__compilerVar164 .= '
	
';
}
$__compilerVar164 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar164 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar163) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar164 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar164 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar164 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar164 .= '
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="uix_VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
			</strong>
	</a></li>
	
';
}
else if ($canvasType == ('navigation') || $canvasType == ('custom'))
{
$__compilerVar164 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar163) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar164 .= '
			';
if (!$__compilerVar163)
{
$__compilerVar164 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar164 .= '
			';
if ($__compilerVar163)
{
$__compilerVar164 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar164 .= '
		';
}
else
{
$__compilerVar164 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar164 .= '</a>
	</li>

';
}
$__compilerVar137 .= $__compilerVar164;
unset($__compilerVar163, $__compilerVar164);
}
$__compilerVar137 .= '
	
									';
if ($uix_searchPosition == 2)
{
$__compilerVar137 .= '
										';
$__compilerVar165 = '';
if ($canSearch)
{
$__compilerVar165 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar166 = '';
$__compilerVar166 .= '
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
$__compilerVar166 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar167 = '';
$__compilerVar167 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar167 .= '
		';
$__compilerVar168 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar168 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar167 .= $__compilerVar168;
unset($__compilerVar168);
$__compilerVar167 .= '
	';
}
$__compilerVar167 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar167 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar167 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar167 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar167 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar167 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar167 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar166 .= $this->callTemplateHook('quick_search', $__compilerVar167, array());
unset($__compilerVar167);
$__compilerVar166 .= '

</div>';
$__compilerVar165 .= $__compilerVar166;
unset($__compilerVar166);
$__compilerVar165 .= '
		</li>
	
';
}
$__compilerVar137 .= $__compilerVar165;
unset($__compilerVar165);
$__compilerVar137 .= '
									';
}
$__compilerVar137 .= '
								
								';
if (trim($__compilerVar137) !== '')
{
$__compilerVar76 .= '
								
								
								<ul class="navRight visitorTabs">
								
								' . $__compilerVar137 . '
								
								</ul>
								
							';
}
unset($__compilerVar137);
$__compilerVar76 .= '
							
							';
if ($uix_searchPosition == 2)
{
$__compilerVar76 .= '
								';
$__compilerVar169 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar169 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar76 .= $__compilerVar169;
unset($__compilerVar169);
$__compilerVar76 .= '
							';
}
$__compilerVar76 .= '
									
								
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar76 .= '</div>';
}
$__compilerVar76 .= '
					</div>
	
				<span class="helper"></span>
					
				</nav>
			</div>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar76 .= '</div>';
}
$__compilerVar76 .= '
		</div>
	</div>
</div>';
$__compilerVar30 .= $__compilerVar76;
unset($__compilerVar76);
}
$__compilerVar30 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') != 2)
{
$__compilerVar30 .= '
		';
$__compilerVar170 = '';
$__compilerVar170 .= '
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
$__compilerVar170 .= '

<div id="logoBlock" ' . (($canSearch && $uix_searchPosition == 1) ? ('class="withSearch"') : ('')) . '>

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar170 .= '
	<div class="pageWidth">
	';
}
$__compilerVar170 .= '	
		
		<div class="pageContent">
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar170 .= '
		<div class="pageWidth">
		';
}
$__compilerVar170 .= '
			
		';
$__compilerVar171 = '';
$__compilerVar171 .= '
		<div id="logo"><a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
			<span></span>
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar171 .= '<h2 class="uix_textLogo">';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__compilerVar171 .= '<i class="uix_icon ' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon') . '"></i>';
}
$__compilerVar171 .= XenForo_Template_Helper_Core::styleProperty('uix_logoText') . '</h2>';
}
else
{
$__compilerVar171 .= '<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar171 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_sloganText'))
{
$__compilerVar171 .= '<div class="uix_slogan">' . XenForo_Template_Helper_Core::styleProperty('uix_sloganText') . '</div>';
}
$__compilerVar171 .= '
		</a></div>
		';
$__compilerVar170 .= $this->callTemplateHook('header_logo', $__compilerVar171, array());
unset($__compilerVar171);
$__compilerVar170 .= '
		
		';
if ($canSearch && $uix_searchPosition == 1)
{
$__compilerVar170 .= '
			';
$__compilerVar172 = '';
$__compilerVar172 .= '
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
$__compilerVar172 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar173 = '';
$__compilerVar173 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar173 .= '
		';
$__compilerVar174 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar174 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar173 .= $__compilerVar174;
unset($__compilerVar174);
$__compilerVar173 .= '
	';
}
$__compilerVar173 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar173 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar173 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar173 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar173 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar173 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar173 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar172 .= $this->callTemplateHook('quick_search', $__compilerVar173, array());
unset($__compilerVar173);
$__compilerVar172 .= '

</div>';
$__compilerVar170 .= $__compilerVar172;
unset($__compilerVar172);
$__compilerVar170 .= '
		';
}
else
{
$__compilerVar170 .= '
			';
$__compilerVar175 = '';
$__compilerVar176 = '';
$__compilerVar176 .= '
	
		';
$__compilerVar177 = '';
$__compilerVar177 .= '
				';
$__compilerVar178 = '';
$__compilerVar177 .= $this->callTemplateHook('ad_header', $__compilerVar178, array());
unset($__compilerVar178);
$__compilerVar177 .= '
				
				
				
				

				
			';
if (trim($__compilerVar177) !== '')
{
$__compilerVar176 .= '
			' . $__compilerVar177 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar176 .= '
			<div>' . 'Template' . ': ad_header</div>
		';
}
unset($__compilerVar177);
$__compilerVar176 .= '
	
	';
if (trim($__compilerVar176) !== '')
{
$__compilerVar175 .= '
	<div class="funbox">
	<div class="funboxWrapper">
	' . $__compilerVar176 . '
	</div>
	</div>
	
';
}
unset($__compilerVar176);
$__compilerVar170 .= $__compilerVar175;
unset($__compilerVar175);
$__compilerVar170 .= '
		';
}
$__compilerVar170 .= '
			
		<span class="helper"></span>
		</div>
	</div>	
</div>';
$__compilerVar30 .= $__compilerVar170;
unset($__compilerVar170);
$__compilerVar30 .= '
	';
}
$__compilerVar30 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') != 1 && XenForo_Template_Helper_Core::styleProperty('uix_navStyle') != 4)
{
$__compilerVar179 = '';
$__compilerVar179 .= '
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
$__compilerVar179 .= '

' . '

<div id="navigation" class="' . (($canSearch && ($uix_searchPosition == 0 || $uix_searchPosition == 2)) ? ('withSearch') : ('')) . ' ' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) ? ('stickyTop') : ('')) . '">
	<div class="sticky_wrapper">
		<div class="uix_navigationWrapper">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar179 .= '
		<div class="pageWidth">
		';
}
$__compilerVar179 .= '
			<div class="pageContent">
				<nav>
					<div class="navTabs">
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar179 .= '
						<div class="pageWidth">
						';
}
$__compilerVar179 .= '
							
							<ul class="publicTabs navLeft">
	
							';
if ((XenForo_Template_Helper_Core::styleProperty('uix_navigationStickyLogo') && XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) || XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2)
{
$__compilerVar179 .= '
							<li id="logo_small">
								<a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
								';
if (XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath'))
{
$__compilerVar179 .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath') . '">
								';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar179 .= '
									<h1 class="uix_textLogo">';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__compilerVar179 .= '<i class="uix_icon ' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon') . '"></i>';
}
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar179 .= XenForo_Template_Helper_Core::styleProperty('uix_logoText');
}
$__compilerVar179 .= '</h1>
								';
}
else
{
$__compilerVar179 .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
								';
}
$__compilerVar179 .= '
								</a>
							</li>
							';
}
$__compilerVar179 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 0)
{
$__compilerVar180 = '0';
$__compilerVar181 = '';
$__compilerVar181 .= '

';
if ($__compilerVar180 == 0)
{
$__compilerVar181 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar181 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar181 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar181 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar181 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar181 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar181 .= '
	';
}
else
{
$__compilerVar181 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar181 .= '
	';
}
$__compilerVar181 .= '
	
';
}
else if ($__compilerVar180 == 1)
{
$__compilerVar181 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar181 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar181 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar181 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar181 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar181 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar181 .= '
	';
}
else
{
$__compilerVar181 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar181 .= '
	';
}
$__compilerVar181 .= '
	
';
}
$__compilerVar181 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar181 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar180) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar181 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar181 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar181 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar181 .= '
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="uix_VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
			</strong>
	</a></li>
	
';
}
else if ($canvasType == ('navigation') || $canvasType == ('custom'))
{
$__compilerVar181 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar180) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar181 .= '
			';
if (!$__compilerVar180)
{
$__compilerVar181 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar181 .= '
			';
if ($__compilerVar180)
{
$__compilerVar181 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar181 .= '
		';
}
else
{
$__compilerVar181 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar181 .= '</a>
	</li>

';
}
$__compilerVar179 .= $__compilerVar181;
unset($__compilerVar180, $__compilerVar181);
}
$__compilerVar179 .= '
							
							<!-- home -->
							';
if ($showHomeLink)
{
$__compilerVar179 .= '
								<li class="navTab home PopupClosed"><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="navLink">';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon'))
{
$__compilerVar179 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar179 .= 'Home';
}
$__compilerVar179 .= '</a></li>
							';
}
$__compilerVar179 .= '
								
								
								<!-- extra tabs: home -->
								';
if ($extraTabs['home'])
{
$__compilerVar179 .= '
								';
foreach ($extraTabs['home'] AS $extraTabId => $extraTab)
{
$__compilerVar179 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar179 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar179 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar179 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar179 .= '">
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' NoPopupGadget';
}
$__compilerVar179 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' rel="Menu"';
}
$__compilerVar179 .= '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon') && ($extraTabId == ('home') || $extraTabId == ('portal') || $extraTabId == ('ctaFt')))
{
$__compilerVar179 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar179 .= htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
}
if ($extraTab['counter'])
{
$__compilerVar179 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar179 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar179 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar179 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar179 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h2>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h2>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar182 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar182 .= '
	';
$__compilerVar183 = '';
$__compilerVar183 .= '
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
$__compilerVar183 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar184 = '';
$__compilerVar184 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar184 .= '
		';
$__compilerVar185 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar185 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar184 .= $__compilerVar185;
unset($__compilerVar185);
$__compilerVar184 .= '
	';
}
$__compilerVar184 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar184 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar184 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar184 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar184 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar184 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar184 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar183 .= $this->callTemplateHook('quick_search', $__compilerVar184, array());
unset($__compilerVar184);
$__compilerVar183 .= '

</div>';
$__compilerVar182 .= $__compilerVar183;
unset($__compilerVar183);
$__compilerVar182 .= '
	';
$__compilerVar186 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar186 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar182 .= $__compilerVar186;
unset($__compilerVar186);
$__compilerVar182 .= '
';
}
$__compilerVar179 .= $__compilerVar182;
unset($__compilerVar182);
}
$__compilerVar179 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar179 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' NoPopupGadget';
}
$__compilerVar179 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' rel="Menu"';
}
$__compilerVar179 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar179 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar179 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar179 .= '<div class="tabLinks">';
$__compilerVar187 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar187 .= '
	';
$__compilerVar188 = '';
$__compilerVar188 .= '
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
$__compilerVar188 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar189 = '';
$__compilerVar189 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar189 .= '
		';
$__compilerVar190 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar190 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar189 .= $__compilerVar190;
unset($__compilerVar190);
$__compilerVar189 .= '
	';
}
$__compilerVar189 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar189 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar189 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar189 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar189 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar189 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar189 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar188 .= $this->callTemplateHook('quick_search', $__compilerVar189, array());
unset($__compilerVar189);
$__compilerVar188 .= '

</div>';
$__compilerVar187 .= $__compilerVar188;
unset($__compilerVar188);
$__compilerVar187 .= '
	';
$__compilerVar191 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar191 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar187 .= $__compilerVar191;
unset($__compilerVar191);
$__compilerVar187 .= '
';
}
$__compilerVar179 .= $__compilerVar187;
unset($__compilerVar187);
$__compilerVar179 .= '</div>';
}
}
$__compilerVar179 .= '
										</li>
									';
}
$__compilerVar179 .= '
								';
}
$__compilerVar179 .= '
								';
}
$__compilerVar179 .= '
								
								
								<!-- forums -->
								';
if ($tabs['forums'])
{
$__compilerVar179 .= '
									<li class="navTab forums ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar179 .= (($tabs['forums']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar179 .= (($tabs['forums']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar179 .= '">
									
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' NoPopupGadget';
}
$__compilerVar179 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' rel="Menu"';
}
$__compilerVar179 .= '>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar179 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar179 .= (($tabs['forums']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar179 .= ' forumsTabLinks">
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar192 = '';
$__compilerVar192 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar192 .= '<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>';
}
$__compilerVar192 .= '
													';
if ($canSearch)
{
$__compilerVar192 .= '<li><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Forums' . '</a></li>';
}
$__compilerVar192 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar192 .= '
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/forums', false, array()) . '">' . 'Watched Forums' . '</a></li>
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/threads', false, array()) . '">' . 'Watched Threads' . '</a></li>
													';
}
$__compilerVar192 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '" rel="nofollow">' . (($visitor['user_id']) ? ('New Posts') : ('Recent Posts')) . '</a></li>
												';
$__compilerVar179 .= $this->callTemplateHook('navigation_tabs_forums', $__compilerVar192, array());
unset($__compilerVar192);
$__compilerVar179 .= '
												</ul>
												';
if ($tabs['forums']['selected'])
{
$__compilerVar193 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar193 .= '
	';
$__compilerVar194 = '';
$__compilerVar194 .= '
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
$__compilerVar194 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar195 = '';
$__compilerVar195 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar195 .= '
		';
$__compilerVar196 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar196 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar195 .= $__compilerVar196;
unset($__compilerVar196);
$__compilerVar195 .= '
	';
}
$__compilerVar195 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar195 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar195 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar195 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar195 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar195 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar195 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar194 .= $this->callTemplateHook('quick_search', $__compilerVar195, array());
unset($__compilerVar195);
$__compilerVar194 .= '

</div>';
$__compilerVar193 .= $__compilerVar194;
unset($__compilerVar194);
$__compilerVar193 .= '
	';
$__compilerVar197 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar197 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar193 .= $__compilerVar197;
unset($__compilerVar197);
$__compilerVar193 .= '
';
}
$__compilerVar179 .= $__compilerVar193;
unset($__compilerVar193);
}
$__compilerVar179 .= '
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__compilerVar179 .= '
								
								
								<!-- extra tabs: middle -->
								';
if ($extraTabs['middle'])
{
$__compilerVar179 .= '
								';
foreach ($extraTabs['middle'] AS $extraTabId => $extraTab)
{
$__compilerVar179 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar179 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar179 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar179 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar179 .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' NoPopupGadget';
}
$__compilerVar179 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' rel="Menu"';
}
$__compilerVar179 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar179 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar179 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar179 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar179 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar179 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar198 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar198 .= '
	';
$__compilerVar199 = '';
$__compilerVar199 .= '
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
$__compilerVar199 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar200 = '';
$__compilerVar200 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar200 .= '
		';
$__compilerVar201 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar201 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar200 .= $__compilerVar201;
unset($__compilerVar201);
$__compilerVar200 .= '
	';
}
$__compilerVar200 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar200 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar200 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar200 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar200 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar200 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar200 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar199 .= $this->callTemplateHook('quick_search', $__compilerVar200, array());
unset($__compilerVar200);
$__compilerVar199 .= '

</div>';
$__compilerVar198 .= $__compilerVar199;
unset($__compilerVar199);
$__compilerVar198 .= '
	';
$__compilerVar202 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar202 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar198 .= $__compilerVar202;
unset($__compilerVar202);
$__compilerVar198 .= '
';
}
$__compilerVar179 .= $__compilerVar198;
unset($__compilerVar198);
}
$__compilerVar179 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar179 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' NoPopupGadget';
}
$__compilerVar179 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' rel="Menu"';
}
$__compilerVar179 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar179 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar179 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar179 .= '<div class="tabLinks">';
$__compilerVar203 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar203 .= '
	';
$__compilerVar204 = '';
$__compilerVar204 .= '
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
$__compilerVar204 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar205 = '';
$__compilerVar205 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar205 .= '
		';
$__compilerVar206 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar206 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar205 .= $__compilerVar206;
unset($__compilerVar206);
$__compilerVar205 .= '
	';
}
$__compilerVar205 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar205 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar205 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar205 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar205 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar205 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar205 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar204 .= $this->callTemplateHook('quick_search', $__compilerVar205, array());
unset($__compilerVar205);
$__compilerVar204 .= '

</div>';
$__compilerVar203 .= $__compilerVar204;
unset($__compilerVar204);
$__compilerVar203 .= '
	';
$__compilerVar207 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar207 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar203 .= $__compilerVar207;
unset($__compilerVar207);
$__compilerVar203 .= '
';
}
$__compilerVar179 .= $__compilerVar203;
unset($__compilerVar203);
$__compilerVar179 .= '</div>';
}
}
$__compilerVar179 .= '
										</li>
									';
}
$__compilerVar179 .= '
								';
}
$__compilerVar179 .= '
								';
}
$__compilerVar179 .= '
								
								
								<!-- members -->
								';
if ($tabs['members'])
{
$__compilerVar179 .= '
									<li class="navTab members ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar179 .= (($tabs['members']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar179 .= (($tabs['members']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar179 .= '">
									
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' NoPopupGadget';
}
$__compilerVar179 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' rel="Menu"';
}
$__compilerVar179 .= '>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar179 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar179 .= (($tabs['members']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar179 .= ' membersTabLinks">
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar208 = '';
$__compilerVar208 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Notable Members' . '</a></li>
													';
if ($xenOptions['enableMemberList'])
{
$__compilerVar208 .= '<li><a href="' . XenForo_Template_Helper_Core::link('members/list', false, array()) . '">' . 'Registered Members' . '</a></li>';
}
$__compilerVar208 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Current Visitors' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar208 .= '<li><a href="' . XenForo_Template_Helper_Core::link('recent-activity', false, array()) . '">' . 'Recent Activity' . '</a></li>';
}
$__compilerVar208 .= '
													';
if ($canViewProfilePosts)
{
$__compilerVar208 .= '<li><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></li>';
}
$__compilerVar208 .= '
												';
$__compilerVar179 .= $this->callTemplateHook('navigation_tabs_members', $__compilerVar208, array());
unset($__compilerVar208);
$__compilerVar179 .= '
												</ul>
												';
if ($tabs['members']['selected'])
{
$__compilerVar209 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar209 .= '
	';
$__compilerVar210 = '';
$__compilerVar210 .= '
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
$__compilerVar210 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar211 = '';
$__compilerVar211 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar211 .= '
		';
$__compilerVar212 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar212 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar211 .= $__compilerVar212;
unset($__compilerVar212);
$__compilerVar211 .= '
	';
}
$__compilerVar211 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar211 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar211 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar211 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar211 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar211 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar211 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar210 .= $this->callTemplateHook('quick_search', $__compilerVar211, array());
unset($__compilerVar211);
$__compilerVar210 .= '

</div>';
$__compilerVar209 .= $__compilerVar210;
unset($__compilerVar210);
$__compilerVar209 .= '
	';
$__compilerVar213 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar213 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar209 .= $__compilerVar213;
unset($__compilerVar213);
$__compilerVar209 .= '
';
}
$__compilerVar179 .= $__compilerVar209;
unset($__compilerVar209);
}
$__compilerVar179 .= '
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__compilerVar179 .= '				
								
								<!-- extra tabs: end -->
								';
if ($extraTabs['end'])
{
$__compilerVar179 .= '
								';
foreach ($extraTabs['end'] AS $extraTabId => $extraTab)
{
$__compilerVar179 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar179 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar179 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar179 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar179 .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' NoPopupGadget';
}
$__compilerVar179 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' rel="Menu"';
}
$__compilerVar179 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar179 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar179 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar179 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar179 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar179 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar214 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar214 .= '
	';
$__compilerVar215 = '';
$__compilerVar215 .= '
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
$__compilerVar215 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar216 = '';
$__compilerVar216 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar216 .= '
		';
$__compilerVar217 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar217 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar216 .= $__compilerVar217;
unset($__compilerVar217);
$__compilerVar216 .= '
	';
}
$__compilerVar216 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar216 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar216 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar216 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar216 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar216 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar216 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar215 .= $this->callTemplateHook('quick_search', $__compilerVar216, array());
unset($__compilerVar216);
$__compilerVar215 .= '

</div>';
$__compilerVar214 .= $__compilerVar215;
unset($__compilerVar215);
$__compilerVar214 .= '
	';
$__compilerVar218 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar218 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar214 .= $__compilerVar218;
unset($__compilerVar218);
$__compilerVar214 .= '
';
}
$__compilerVar179 .= $__compilerVar214;
unset($__compilerVar214);
}
$__compilerVar179 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar179 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' NoPopupGadget';
}
$__compilerVar179 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar179 .= ' rel="Menu"';
}
$__compilerVar179 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar179 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar179 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar179 .= '<div class="tabLinks">';
$__compilerVar219 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar219 .= '
	';
$__compilerVar220 = '';
$__compilerVar220 .= '
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
$__compilerVar220 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar221 = '';
$__compilerVar221 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar221 .= '
		';
$__compilerVar222 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar222 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar221 .= $__compilerVar222;
unset($__compilerVar222);
$__compilerVar221 .= '
	';
}
$__compilerVar221 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar221 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar221 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar221 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar221 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar221 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar221 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar220 .= $this->callTemplateHook('quick_search', $__compilerVar221, array());
unset($__compilerVar221);
$__compilerVar220 .= '

</div>';
$__compilerVar219 .= $__compilerVar220;
unset($__compilerVar220);
$__compilerVar219 .= '
	';
$__compilerVar223 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar223 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar219 .= $__compilerVar223;
unset($__compilerVar223);
$__compilerVar219 .= '
';
}
$__compilerVar179 .= $__compilerVar219;
unset($__compilerVar219);
$__compilerVar179 .= '</div>';
}
}
$__compilerVar179 .= '
										</li>
									';
}
$__compilerVar179 .= '
								';
}
$__compilerVar179 .= '
								';
}
$__compilerVar179 .= '
								
								<!-- responsive popup -->
								<li class="navTab navigationHiddenTabs Popup PopupControl PopupClosed" style="display:none">	
												
									<a rel="Menu" class="navLink NoPopupGadget uix_dropdownDesktopMenu"><i class="uix_icon uix_icon-navTrigger"></i><span class="uix_hide menuIcon">' . 'Menu' . '</span></a>
									
									<div class="Menu JsOnly blockLinksList primaryContent" id="NavigationHiddenMenu"></div>
								</li>
									
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar179 .= '
								<!-- no selection -->
								';
if (!$selectedTab)
{
$__compilerVar179 .= '
									<li class="navTab selected"><div class="tabLinks">';
$__compilerVar224 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar224 .= '
	';
$__compilerVar225 = '';
$__compilerVar225 .= '
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
$__compilerVar225 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar226 = '';
$__compilerVar226 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar226 .= '
		';
$__compilerVar227 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar227 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar226 .= $__compilerVar227;
unset($__compilerVar227);
$__compilerVar226 .= '
	';
}
$__compilerVar226 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar226 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar226 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar226 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar226 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar226 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar226 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar225 .= $this->callTemplateHook('quick_search', $__compilerVar226, array());
unset($__compilerVar226);
$__compilerVar225 .= '

</div>';
$__compilerVar224 .= $__compilerVar225;
unset($__compilerVar225);
$__compilerVar224 .= '
	';
$__compilerVar228 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar228 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar224 .= $__compilerVar228;
unset($__compilerVar228);
$__compilerVar224 .= '
';
}
$__compilerVar179 .= $__compilerVar224;
unset($__compilerVar224);
$__compilerVar179 .= '</div></li>
								';
}
$__compilerVar179 .= '
								';
}
$__compilerVar179 .= '
	
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar179 .= '	
									';
if ($tabs['account']['selected'])
{
$__compilerVar179 .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar229 = '';
$__compilerVar229 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar229 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar229 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
												';
$__compilerVar179 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar229, array());
unset($__compilerVar229);
$__compilerVar179 .= '
												</ul>
												';
$__compilerVar230 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar230 .= '
	';
$__compilerVar231 = '';
$__compilerVar231 .= '
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
$__compilerVar231 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar232 = '';
$__compilerVar232 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar232 .= '
		';
$__compilerVar233 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar233 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar232 .= $__compilerVar233;
unset($__compilerVar233);
$__compilerVar232 .= '
	';
}
$__compilerVar232 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar232 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar232 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar232 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar232 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar232 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar232 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar231 .= $this->callTemplateHook('quick_search', $__compilerVar232, array());
unset($__compilerVar232);
$__compilerVar231 .= '

</div>';
$__compilerVar230 .= $__compilerVar231;
unset($__compilerVar231);
$__compilerVar230 .= '
	';
$__compilerVar234 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar234 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar230 .= $__compilerVar234;
unset($__compilerVar234);
$__compilerVar230 .= '
';
}
$__compilerVar179 .= $__compilerVar230;
unset($__compilerVar230);
$__compilerVar179 .= '
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__compilerVar179 .= '
									';
if ($tabs['inbox']['selected'])
{
$__compilerVar179 .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
												</ul>
												';
$__compilerVar235 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar235 .= '
	';
$__compilerVar236 = '';
$__compilerVar236 .= '
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
$__compilerVar236 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar237 = '';
$__compilerVar237 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar237 .= '
		';
$__compilerVar238 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar238 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar237 .= $__compilerVar238;
unset($__compilerVar238);
$__compilerVar237 .= '
	';
}
$__compilerVar237 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar237 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar237 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar237 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar237 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar237 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar237 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar236 .= $this->callTemplateHook('quick_search', $__compilerVar237, array());
unset($__compilerVar237);
$__compilerVar236 .= '

</div>';
$__compilerVar235 .= $__compilerVar236;
unset($__compilerVar236);
$__compilerVar235 .= '
	';
$__compilerVar239 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar239 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar235 .= $__compilerVar239;
unset($__compilerVar239);
$__compilerVar235 .= '
';
}
$__compilerVar179 .= $__compilerVar235;
unset($__compilerVar235);
$__compilerVar179 .= '
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__compilerVar179 .= '
								';
}
$__compilerVar179 .= '		
	
							</ul>
							
							
							';
$__compilerVar240 = '';
$__compilerVar240 .= '
								
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 0 && $contentTemplate == ('thread_view'))
{
$__compilerVar240 .= '
										<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
									';
}
$__compilerVar240 .= '
								
									';
$__compilerVar241 = '';
$__compilerVar240 .= $this->callTemplateHook('uix_navigation_right_start', $__compilerVar241, array());
unset($__compilerVar241);
$__compilerVar240 .= '
									
									';
if (!XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar240 .= '
										';
$__compilerVar242 = '';
$__compilerVar243 = '';
$__compilerVar243 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar243 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar243 .= '
	';
$__compilerVar244 = '';
$__compilerVar243 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar244, array());
unset($__compilerVar244);
$__compilerVar243 .= '
	';
}
$__compilerVar243 .= '
	
	  <li class="navTab" style="line-height:50px;"> &nbsp;  <a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>&nbsp;</li>

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">


		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar243 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar243 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar243 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar243 .= '

			
			
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ResponsiveOnly ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
				<span class="arrow"></span>
			</strong>
		</a>
		
		<div class="Menu JsOnly" id="AccountMenu">
			<div class="primaryContent menuHeader">
				' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,false,array(
'user' => '$visitor',
'size' => 'm',
'class' => 'NoOverlay plainImage',
'title' => 'View your profile'
),'')) . '
				
				<h3>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($visitor,'',(true),array(
'class' => 'concealed',
'title' => 'View your profile'
))) . '</h3>
				
				';
$__compilerVar245 = '';
$__compilerVar245 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar245) !== '')
{
$__compilerVar243 .= '<div class="muted">' . $__compilerVar245 . '</div>';
}
unset($__compilerVar245);
$__compilerVar243 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar246 = '';
$__compilerVar246 .= '
					';
if ($canEditProfile)
{
$__compilerVar246 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar246 .= '
					';
if ($canEditSignature)
{
$__compilerVar246 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar246 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar246 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar246 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar246 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar246 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar247 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar247 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar246 .= $__compilerVar247;
unset($__compilerVar247);
$__compilerVar246 .= '
';
$__compilerVar243 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar246, array());
unset($__compilerVar246);
$__compilerVar243 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar248 = '';
$__compilerVar248 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar248 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar248 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '
						<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '"
							id="VisitorExtraMenu_ConversationsCounter">
							<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
						</strong></a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Alerts' . '
						<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '"
							id="VisitorExtraMenu_AlertsCounter">
							<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
						</strong></a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id']
)) . '">' . 'Your Content' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/ignored', false, array()) . '">' . 'People You Ignore' . '</a></li>
					';
if ($xenCache['userUpgradeCount'])
{
$__compilerVar248 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar248 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar243 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar248, array());
unset($__compilerVar248);
$__compilerVar243 .= '
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
					<li>				
						<form action="' . XenForo_Template_Helper_Core::link('account/toggle-visibility', false, array()) . '" method="post" class="AutoValidator visibilityForm">
							<label><input type="checkbox" name="visible" value="1" class="SubmitOnChange" ' . (($visitor['visible']) ? ' checked="checked"' : '') . ' />
								' . 'Show online status' . '</label>
							<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						</form>
					</li>
				</ul>
				<ul class="col2 blockLinksList">
					<li><a href="' . XenForo_Template_Helper_Core::link('logout', '', array(
'_xfToken' => $visitor['csrf_token_page']
)) . '" class="LogOut">' . 'Log Out' . '</a></li>
				</ul>
			</div>
			';
if ($canUpdateStatus)
{
$__compilerVar243 .= '
				<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" class="sectionFooter statusPoster AutoValidator" data-optInOut="OptIn">
					<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" data-acurl="' . XenForo_Template_Helper_Core::link('members/bdtagme-find', false, array()) . '" placeholder="' . 'Update your status' . '..." rows="1" cols="40" style="height:18px" data-statusEditorCounter="#visMenuSEdCount" data-nofocus="true"></textarea>
					<div class="submitUnit">
						<span id="visMenuSEdCount" title="' . 'Characters remaining' . '"></span>
						<input type="submit" class="button primary MenuCloser" value="' . 'Post' . '" />
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						<input type="hidden" name="return" value="1" /> 
					</div>
				</form>
			';
}
$__compilerVar243 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar243 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar243 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar249 = '';
$__compilerVar249 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar249 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar249 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar243 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar249, array());
unset($__compilerVar249);
$__compilerVar243 .= '
				</ul>
				';
$__compilerVar250 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar250 .= '
	';
$__compilerVar251 = '';
$__compilerVar251 .= '
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
$__compilerVar251 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar252 = '';
$__compilerVar252 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar252 .= '
		';
$__compilerVar253 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar253 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar252 .= $__compilerVar253;
unset($__compilerVar253);
$__compilerVar252 .= '
	';
}
$__compilerVar252 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar252 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar252 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar252 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar252 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar252 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar252 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar251 .= $this->callTemplateHook('quick_search', $__compilerVar252, array());
unset($__compilerVar252);
$__compilerVar251 .= '

</div>';
$__compilerVar250 .= $__compilerVar251;
unset($__compilerVar251);
$__compilerVar250 .= '
	';
$__compilerVar254 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar254 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar250 .= $__compilerVar254;
unset($__compilerVar254);
$__compilerVar250 .= '
';
}
$__compilerVar243 .= $__compilerVar250;
unset($__compilerVar250);
$__compilerVar243 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar243 .= '
	';
}
$__compilerVar243 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar243 .= '

		<!-- conversations popup -->
		<li class="navTab inbox Popup PopupControl PopupClosed ' . (($tabs['inbox']['selected']) ? ('selected') : ('')) . '">
						
			<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" rel="Menu" class="navLink NoPopupGadget">
				<i class="uix_icon uix_icon-inbox"></i>
				<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '"
					id="ConversationsMenu_Counter" data-text="' . 'You have %d new unread conversation(s).' . '">
					<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
					<span class="arrow"></span>
				</strong>
			</a>
			
			<div class="Menu JsOnly navPopup" id="ConversationsMenu"
				data-contentSrc="' . XenForo_Template_Helper_Core::link('conversations/popup', false, array()) . '"
				data-contentDest="#ConversationsMenu .listPlaceholder">
				
				<div class="menuHeader primaryContent">
					<h3>
						<span class="Progress InProgress"></span>
						<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" class="concealed">' . 'Conversations' . '</a>
					</h3>						
				</div>
				
				<div class="listPlaceholder"></div>
				
				<div class="sectionFooter">
					';
if ($canStartConversation)
{
$__compilerVar243 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar243 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar243 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar243 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar255 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar255 .= '
	';
$__compilerVar256 = '';
$__compilerVar256 .= '
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
$__compilerVar256 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar257 = '';
$__compilerVar257 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar257 .= '
		';
$__compilerVar258 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar258 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar257 .= $__compilerVar258;
unset($__compilerVar258);
$__compilerVar257 .= '
	';
}
$__compilerVar257 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar257 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar257 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar257 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar257 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar257 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar257 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar256 .= $this->callTemplateHook('quick_search', $__compilerVar257, array());
unset($__compilerVar257);
$__compilerVar256 .= '

</div>';
$__compilerVar255 .= $__compilerVar256;
unset($__compilerVar256);
$__compilerVar255 .= '
	';
$__compilerVar259 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar259 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar255 .= $__compilerVar259;
unset($__compilerVar259);
$__compilerVar255 .= '
';
}
$__compilerVar243 .= $__compilerVar255;
unset($__compilerVar255);
$__compilerVar243 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar243 .= '
		';
}
$__compilerVar243 .= '
		
		';
$__compilerVar260 = '';
$__compilerVar243 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar260, array());
unset($__compilerVar260);
$__compilerVar243 .= '
		
		<!-- alerts popup -->
		<li class="navTab alerts Popup PopupControl PopupClosed">	
						
			<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" rel="Menu" class="navLink NoPopupGadget">
				<i class="uix_icon uix_icon-alerts"></i>
				<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '"
					id="AlertsMenu_Counter" data-text="' . 'You have %d new alert(s).' . '">
					<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
					<span class="arrow"></span>
				</strong>
			</a>
			
			<div class="Menu JsOnly navPopup" id="AlertsMenu"
				data-contentSrc="' . XenForo_Template_Helper_Core::link('account/alerts-popup', false, array()) . '"
				data-contentDest="#AlertsMenu .listPlaceholder"
				data-removeCounter="#AlertsMenu_Counter">
				
				<div class="menuHeader primaryContent">
					<h3>
						<span class="Progress InProgress"></span>
						<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" class="concealed">' . 'Alerts' . '</a>
					</h3>
				</div>
				
				<div class="listPlaceholder"></div>
				
				<div class="sectionFooter">
					<a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '" class="floatLink">' . 'Alert Preferences' . '</a>
					<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
$__compilerVar261 = '';
$__compilerVar243 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar261, array());
unset($__compilerVar261);
$__compilerVar243 .= '
	';
}
else
{
$__compilerVar243 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar243 .= ' 
	';
}
$__compilerVar243 .= '
	
';
if (trim($__compilerVar243) !== '')
{
$__compilerVar242 .= '
' . $__compilerVar243 . '
';
}
unset($__compilerVar243);
$__compilerVar240 .= $__compilerVar242;
unset($__compilerVar242);
$__compilerVar240 .= '
									';
}
$__compilerVar240 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 1)
{
$__compilerVar240 .= '
										';
$__compilerVar262 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar262 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar262 .= '<label for="LoginControl">';
}
$__compilerVar262 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar262 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar262 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar262 .= '</label>';
}
$__compilerVar262 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar262 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar263 = '';
$__compilerVar263 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

	<label for="ctrl_pageLogin_login">' . 'Your name or email address' . ':' . htmlspecialchars($isOverlay, ENT_QUOTES, 'UTF-8') . '</label>
	<dl class="ctrlUnit">
		<dd><input type="text" name="login" value="' . htmlspecialchars($defaultLogin, ENT_QUOTES, 'UTF-8') . '" id="ctrl_pageLogin_login" class="textCtrl uix_fixIOSClickInput" tabindex="1" /></dd>
	</dl>
	
	<label for="ctrl_pageLogin_password">' . 'Password' . ':</label>
	<dl class="ctrlUnit">
		<dd>
			<input type="password" name="password" class="textCtrl uix_fixIOSClickInput" id="ctrl_pageLogin_password" tabindex="2" />					
			<div><a href="' . XenForo_Template_Helper_Core::link('lost-password', false, array()) . '" class="OverlayTrigger OverlayCloser" tabindex="6">' . 'Forgot your password?' . '</a></div>
		</dd>
	</dl>
	
	';
if ($captcha)
{
$__compilerVar263 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar263 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar264 = '';
$__compilerVar264 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar264 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar264 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar264 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar264 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar264 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar264 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar264 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar264 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar264 .= '

	';
if (trim($__compilerVar264) !== '')
{
$__compilerVar263 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar264 . '
	</div>
	';
}
unset($__compilerVar264);
$__compilerVar263 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar263 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar263 .= '

</form>';
$__compilerVar262 .= $__compilerVar263;
unset($__compilerVar263);
$__compilerVar262 .= '
			</div>
		</div>
		';
}
$__compilerVar262 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar262 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar262 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar262 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar262 .= '
	
';
}
$__compilerVar240 .= $__compilerVar262;
unset($__compilerVar262);
$__compilerVar240 .= '
									';
}
$__compilerVar240 .= '
							
									';
$__compilerVar265 = '';
$__compilerVar240 .= $this->callTemplateHook('uix_navigation_right_end', $__compilerVar265, array());
unset($__compilerVar265);
$__compilerVar240 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 0)
{
$__compilerVar266 = '1';
$__compilerVar267 = '';
$__compilerVar267 .= '

';
if ($__compilerVar266 == 0)
{
$__compilerVar267 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar267 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar267 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar267 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar267 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar267 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar267 .= '
	';
}
else
{
$__compilerVar267 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar267 .= '
	';
}
$__compilerVar267 .= '
	
';
}
else if ($__compilerVar266 == 1)
{
$__compilerVar267 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar267 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar267 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar267 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar267 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar267 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar267 .= '
	';
}
else
{
$__compilerVar267 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar267 .= '
	';
}
$__compilerVar267 .= '
	
';
}
$__compilerVar267 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar267 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar266) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar267 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar267 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar267 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar267 .= '
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="uix_VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
			</strong>
	</a></li>
	
';
}
else if ($canvasType == ('navigation') || $canvasType == ('custom'))
{
$__compilerVar267 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar266) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar267 .= '
			';
if (!$__compilerVar266)
{
$__compilerVar267 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar267 .= '
			';
if ($__compilerVar266)
{
$__compilerVar267 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar267 .= '
		';
}
else
{
$__compilerVar267 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar267 .= '</a>
	</li>

';
}
$__compilerVar240 .= $__compilerVar267;
unset($__compilerVar266, $__compilerVar267);
}
$__compilerVar240 .= '
	
									';
if ($uix_searchPosition == 2)
{
$__compilerVar240 .= '
										';
$__compilerVar268 = '';
if ($canSearch)
{
$__compilerVar268 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar269 = '';
$__compilerVar269 .= '
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
$__compilerVar269 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar270 = '';
$__compilerVar270 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar270 .= '
		';
$__compilerVar271 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar271 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar270 .= $__compilerVar271;
unset($__compilerVar271);
$__compilerVar270 .= '
	';
}
$__compilerVar270 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar270 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar270 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar270 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar270 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar270 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar270 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar269 .= $this->callTemplateHook('quick_search', $__compilerVar270, array());
unset($__compilerVar270);
$__compilerVar269 .= '

</div>';
$__compilerVar268 .= $__compilerVar269;
unset($__compilerVar269);
$__compilerVar268 .= '
		</li>
	
';
}
$__compilerVar240 .= $__compilerVar268;
unset($__compilerVar268);
$__compilerVar240 .= '
									';
}
$__compilerVar240 .= '
								
								';
if (trim($__compilerVar240) !== '')
{
$__compilerVar179 .= '
								
								
								<ul class="navRight visitorTabs">
								
								' . $__compilerVar240 . '
								
								</ul>
								
							';
}
unset($__compilerVar240);
$__compilerVar179 .= '
							
							';
if ($uix_searchPosition == 2)
{
$__compilerVar179 .= '
								';
$__compilerVar272 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar272 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar179 .= $__compilerVar272;
unset($__compilerVar272);
$__compilerVar179 .= '
							';
}
$__compilerVar179 .= '
									
								
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar179 .= '</div>';
}
$__compilerVar179 .= '
					</div>
	
				<span class="helper"></span>
					
				</nav>
			</div>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar179 .= '</div>';
}
$__compilerVar179 .= '
		</div>
	</div>
</div>';
$__compilerVar30 .= $__compilerVar179;
unset($__compilerVar179);
}
$__compilerVar30 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_userBarLocation') == 1)
{
$__compilerVar273 = '';
$this->addRequiredExternal('css', 'moderator_bar');
$__compilerVar273 .= '

';
$__compilerVar274 = '';
$__compilerVar274 .= '
		
					';
$__compilerVar275 = '';
$__compilerVar275 .= '
						';
$__compilerVar276 = '';
$__compilerVar275 .= $this->callTemplateHook('uix_userbar_left_start', $__compilerVar276, array());
unset($__compilerVar276);
$__compilerVar275 .= '
						
						';
if ($xenOptions['uix_socialMedia'] && XenForo_Template_Helper_Core::styleProperty('uix_socialMedia'))
{
$__compilerVar275 .= '\'
						<li class="navTab scratch_socialTab">
							<div class="navLink">
								';
$__compilerVar277 = '';
$__compilerVar277 .= '<ul class="uix_socialMediaLinks">
	';
if ($xenOptions['uix_socialMedia_facebook'])
{
$__compilerVar277 .= '<li class="facebook"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_facebook'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-facebook"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_twitter'])
{
$__compilerVar277 .= '<li class="twitter"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_twitter'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-twitter"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_youtube'])
{
$__compilerVar277 .= '<li class="youtube"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_youtube'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-youtube"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_dribbble'])
{
$__compilerVar277 .= '<li class="dribbble"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_dribbble'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-dribbble"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_vimeo'])
{
$__compilerVar277 .= '<li class="vimeo"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_vimeo'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-vimeo"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_deviantart'])
{
$__compilerVar277 .= '<li class="deviantart"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_deviantart'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-deviantArt"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_googleplus'])
{
$__compilerVar277 .= '<li class="googleplus"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_googleplus'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-googlePlus"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_linkedin'])
{
$__compilerVar277 .= '<li class="linkedin"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_linkedin'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-linkedIn"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_instagram'])
{
$__compilerVar277 .= '<li class="instagram"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_instagram'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-instagram"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_pinterest'])
{
$__compilerVar277 .= '<li class="pinterest"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_pinterest'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-pinterest"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_steam'])
{
$__compilerVar277 .= '<li class="steam"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_steam'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-steam"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_twitch'])
{
$__compilerVar277 .= '<li class="twitch"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_twitch'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-twitch"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_vine'])
{
$__compilerVar277 .= '<li class="vine"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_vine'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-vine"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_tumblr'])
{
$__compilerVar277 .= '<li class="tumblr"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_tumblr'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-tumblr"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_git'])
{
$__compilerVar277 .= '<li class="git"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_git'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-git"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_reddit'])
{
$__compilerVar277 .= '<li class="reddit"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_reddit'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-reddit"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_flickr'])
{
$__compilerVar277 .= '<li class="flickr"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_flickr'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-flickr"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_contact'] AND $xenOptions['contactUrl']['type'] == ('default'))
{
$__compilerVar277 .= '<li class="contact"><a href="' . XenForo_Template_Helper_Core::link('misc/contact', false, array()) . '" class="OverlayTrigger" data-overlayOptions="{&quot;fixed&quot;:false}"><i class="uix_icon uix_icon-email"></i></a></li>';
}
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_contact'] AND $xenOptions['contactUrl']['type'] == ('custom'))
{
$__compilerVar277 .= '<li class="contact"><a href="' . htmlspecialchars($xenOptions['contactUrl']['custom'], ENT_QUOTES, 'UTF-8') . '" ' . (($xenOptions['contactUrl']['overlay']) ? ('class="OverlayTrigger" data-overlayOptions="' . '{' . '&quot;fixed&quot;:false}"') : ('target="_blank"')) . '><i class="uix_icon uix_icon-email"></i></a></li>';
}
$__compilerVar277 .= '
        ';
$__compilerVar278 = '';
$__compilerVar278 .= '



<!--ADD LIST ITEMS HERE -->


';
$__compilerVar277 .= $__compilerVar278;
unset($__compilerVar278);
$__compilerVar277 .= '
        ';
if ($xenOptions['uix_socialMedia_rss'])
{
$__compilerVar277 .= '<li class="rss"><a href="' . XenForo_Template_Helper_Core::link('forums/-/index.rss', false, array()) . '" rel="alternate}" target="_blank"><i class="uix_icon uix_icon-rss"></i></a></li>';
}
$__compilerVar277 .= '
</ul>';
$__compilerVar275 .= $__compilerVar277;
unset($__compilerVar277);
$__compilerVar275 .= '
							</div>
						</li>
						';
}
$__compilerVar275 .= '
						
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 1)
{
$__compilerVar279 = '0';
$__compilerVar280 = '';
$__compilerVar280 .= '

';
if ($__compilerVar279 == 0)
{
$__compilerVar280 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar280 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar280 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar280 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar280 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar280 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar280 .= '
	';
}
else
{
$__compilerVar280 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar280 .= '
	';
}
$__compilerVar280 .= '
	
';
}
else if ($__compilerVar279 == 1)
{
$__compilerVar280 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar280 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar280 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar280 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar280 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar280 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar280 .= '
	';
}
else
{
$__compilerVar280 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar280 .= '
	';
}
$__compilerVar280 .= '
	
';
}
$__compilerVar280 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar280 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar279) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar280 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar280 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar280 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar280 .= '
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="uix_VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
			</strong>
	</a></li>
	
';
}
else if ($canvasType == ('navigation') || $canvasType == ('custom'))
{
$__compilerVar280 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar279) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar280 .= '
			';
if (!$__compilerVar279)
{
$__compilerVar280 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar280 .= '
			';
if ($__compilerVar279)
{
$__compilerVar280 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar280 .= '
		';
}
else
{
$__compilerVar280 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar280 .= '</a>
	</li>

';
}
$__compilerVar275 .= $__compilerVar280;
unset($__compilerVar279, $__compilerVar280);
}
$__compilerVar275 .= '
						
						';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar275 .= '
							';
$__compilerVar281 = '';
$__compilerVar281 .= '	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('100%'))
{
$__compilerVar281 .= '

		';
if ($visitor['is_admin'])
{
$__compilerVar281 .= '			
			<li class="navTab">
				<a href="admin.php" target="_blank" class="acp adminLink navLink">
					<i class="uix_icon uix_icon-admin"></i> 
					<span class="itemLabel">' . 'Admin' . '</span>
				</a>
			</li>
			
			';
if ($session['permissionTest'])
{
$__compilerVar281 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
					<i class="uix_icon uix_icon-permissions"></i> 
					<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
				</a>
			</li>
			
			';
}
$__compilerVar281 .= '
		';
}
$__compilerVar281 .= '
		
		';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar281 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('moderation-queue', false, array()) . '" class="moderationQueue modLink navLink">
					<i class="uix_icon uix_icon-moderator"></i> 
					<span class="itemLabel">' . 'Moderation' . ':</span>
					<strong class="itemCount ' . (($session['moderationCounts']['total']) ? ('alert') : ('')) . '">
						<span class="Total">' . htmlspecialchars($session['moderationCounts']['total'], ENT_QUOTES, 'UTF-8') . '</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar281 .= '
		
		';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar281 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
					<i class="uix_icon uix_icon-reports"></i> 
					<span class="itemLabel">' . 'Reports' . ':</span>
					<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
						<span class="Total">
							';
if ($session['reportCounts']['assigned'])
{
$__compilerVar281 .= '
								' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
else
{
$__compilerVar281 .= '
								' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
$__compilerVar281 .= '
						</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar281 .= '
		
		';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar281 .= '
			<li class="navTab">
				<a href="admin.php?users/moderated" class="userModerationQueue modLink navLink">
					<i class="uix_icon uix_icon-users"></i> 
					<span class="itemLabel">' . 'Users' . ':</span>
					<strong class="itemCount ' . (($session['userModerationCounts']['total']) ? ('alert') : ('')) . '">
						<span class="Total">
							' . htmlspecialchars($session['userModerationCounts']['total'], ENT_QUOTES, 'UTF-8') . '
						</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar281 .= '
		
		';
$__compilerVar282 = '';
$__compilerVar281 .= $this->callTemplateHook('moderator_bar', $__compilerVar282, array());
unset($__compilerVar282);
$__compilerVar281 .= '	
	';
}
$__compilerVar281 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('0'))
{
$__compilerVar281 .= '

		<li class="navTab admin Popup PopupControl PopupClosed">
			<a href="';
if ($visitor['is_admin'])
{
$__compilerVar281 .= 'admin.php';
}
else
{
$__compilerVar281 .= 'javascript: void(0);';
}
$__compilerVar281 .= '" class="navLink NoPopupGadget" rel="Menu" ';
if ($visitor['is_admin'])
{
$__compilerVar281 .= 'target="_blank"';
}
$__compilerVar281 .= '>
				<i class="uix_icon uix_icon-admin"></i> 
				<span class="itemLabel">' . (($visitor['is_admin']) ? ('Admin') : ('Mod')) . '</span>
				<strong class="itemCount">
					<span class="Total">0</span>
					<span class="arrow"></span>
				</strong>	
			</a>
			<div class="uix_adminMenu Menu JsOnly tabMenu">
				<div class="primaryContent menuHeader"><h3>
				
				';
if ($visitor['is_admin'])
{
$__compilerVar281 .= '
				' . 'Admin' . '
				';
}
else
{
$__compilerVar281 .= '
				Mod
				';
}
$__compilerVar281 .= ' ' . 'Menu' . '
				
				
				</h3></div>
				<ul class="secondaryContent blockLinksList">
					
	
	
					';
if ($visitor['is_admin'])
{
$__compilerVar281 .= '			
						<li class="navTab">
							<a href="admin.php" target="_blank" class="acp adminLink navLink">
								<i class="uix_icon uix_icon-admin"></i> 
								<span class="itemLabel">' . 'Admin' . '</span>
							</a>
						</li>
						
						';
if ($session['permissionTest'])
{
$__compilerVar281 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
								<i class="uix_icon uix_icon-permissions"></i> 
								<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
							</a>
						</li>
						
						';
}
$__compilerVar281 .= '
					';
}
$__compilerVar281 .= '
			
					';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar281 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('moderation-queue', false, array()) . '" class="moderationQueue modLink navLink">
								<i class="uix_icon uix_icon-moderator"></i> 
								<span class="itemLabel">' . 'Moderation' . ':</span>
								<strong class="itemCount ' . (($session['moderationCounts']['total']) ? ('alert') : ('')) . '">
									<span class="Total">' . htmlspecialchars($session['moderationCounts']['total'], ENT_QUOTES, 'UTF-8') . '</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar281 .= '
					
					';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar281 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
								<i class="uix_icon uix_icon-reports"></i> 
								<span class="itemLabel">' . 'Reports' . ':</span>
								<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
									<span class="Total">
										';
if ($session['reportCounts']['assigned'])
{
$__compilerVar281 .= '
											' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
else
{
$__compilerVar281 .= '
											' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
$__compilerVar281 .= '
									</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar281 .= '
					
					';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar281 .= '
						<li class="navTab">
							<a href="admin.php?users/moderated" class="userModerationQueue modLink navLink">
								<i class="uix_icon uix_icon-users"></i> 
								<span class="itemLabel">' . 'Users' . ':</span>
								<strong class="itemCount ' . (($session['userModerationCounts']['total']) ? ('alert') : ('')) . '">
									<span class="Total">
										' . htmlspecialchars($session['userModerationCounts']['total'], ENT_QUOTES, 'UTF-8') . '
									</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar281 .= '
					
					';
$__compilerVar283 = '';
$__compilerVar281 .= $this->callTemplateHook('moderator_bar', $__compilerVar283, array());
unset($__compilerVar283);
$__compilerVar281 .= '
	
				</ul>
			</div>		
		</li>
	';
}
$__compilerVar281 .= '	';
$__compilerVar275 .= $__compilerVar281;
unset($__compilerVar281);
$__compilerVar275 .= '
						';
}
$__compilerVar275 .= '
						
						';
$__compilerVar284 = '';
$__compilerVar275 .= $this->callTemplateHook('uix_userbar_left_end', $__compilerVar284, array());
unset($__compilerVar284);
$__compilerVar275 .= '
						
						';
if (trim($__compilerVar275) !== '')
{
$__compilerVar274 .= '
					<ul class="navLeft';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar274 .= ' moderatorTabs';
}
$__compilerVar274 .= '">
					
						' . $__compilerVar275 . '
		
					</ul>

					
					';
}
unset($__compilerVar275);
$__compilerVar274 .= '
					
					';
$__compilerVar285 = '';
$__compilerVar285 .= '
						
							';
$__compilerVar286 = '';
$__compilerVar285 .= $this->callTemplateHook('uix_userbar_right_start', $__compilerVar286, array());
unset($__compilerVar286);
$__compilerVar285 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar285 .= '
								';
$__compilerVar287 = '';
$__compilerVar288 = '';
$__compilerVar288 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar288 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar288 .= '
	';
$__compilerVar289 = '';
$__compilerVar288 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar289, array());
unset($__compilerVar289);
$__compilerVar288 .= '
	';
}
$__compilerVar288 .= '
	
	  <li class="navTab" style="line-height:50px;"> &nbsp;  <a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>&nbsp;</li>

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">


		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar288 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar288 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar288 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar288 .= '

			
			
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ResponsiveOnly ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
				<span class="arrow"></span>
			</strong>
		</a>
		
		<div class="Menu JsOnly" id="AccountMenu">
			<div class="primaryContent menuHeader">
				' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,false,array(
'user' => '$visitor',
'size' => 'm',
'class' => 'NoOverlay plainImage',
'title' => 'View your profile'
),'')) . '
				
				<h3>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($visitor,'',(true),array(
'class' => 'concealed',
'title' => 'View your profile'
))) . '</h3>
				
				';
$__compilerVar290 = '';
$__compilerVar290 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar290) !== '')
{
$__compilerVar288 .= '<div class="muted">' . $__compilerVar290 . '</div>';
}
unset($__compilerVar290);
$__compilerVar288 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar291 = '';
$__compilerVar291 .= '
					';
if ($canEditProfile)
{
$__compilerVar291 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar291 .= '
					';
if ($canEditSignature)
{
$__compilerVar291 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar291 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar291 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar291 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar291 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar291 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar292 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar292 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar291 .= $__compilerVar292;
unset($__compilerVar292);
$__compilerVar291 .= '
';
$__compilerVar288 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar291, array());
unset($__compilerVar291);
$__compilerVar288 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar293 = '';
$__compilerVar293 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar293 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar293 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '
						<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '"
							id="VisitorExtraMenu_ConversationsCounter">
							<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
						</strong></a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Alerts' . '
						<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '"
							id="VisitorExtraMenu_AlertsCounter">
							<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
						</strong></a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id']
)) . '">' . 'Your Content' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/ignored', false, array()) . '">' . 'People You Ignore' . '</a></li>
					';
if ($xenCache['userUpgradeCount'])
{
$__compilerVar293 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar293 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar288 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar293, array());
unset($__compilerVar293);
$__compilerVar288 .= '
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
					<li>				
						<form action="' . XenForo_Template_Helper_Core::link('account/toggle-visibility', false, array()) . '" method="post" class="AutoValidator visibilityForm">
							<label><input type="checkbox" name="visible" value="1" class="SubmitOnChange" ' . (($visitor['visible']) ? ' checked="checked"' : '') . ' />
								' . 'Show online status' . '</label>
							<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						</form>
					</li>
				</ul>
				<ul class="col2 blockLinksList">
					<li><a href="' . XenForo_Template_Helper_Core::link('logout', '', array(
'_xfToken' => $visitor['csrf_token_page']
)) . '" class="LogOut">' . 'Log Out' . '</a></li>
				</ul>
			</div>
			';
if ($canUpdateStatus)
{
$__compilerVar288 .= '
				<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" class="sectionFooter statusPoster AutoValidator" data-optInOut="OptIn">
					<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" data-acurl="' . XenForo_Template_Helper_Core::link('members/bdtagme-find', false, array()) . '" placeholder="' . 'Update your status' . '..." rows="1" cols="40" style="height:18px" data-statusEditorCounter="#visMenuSEdCount" data-nofocus="true"></textarea>
					<div class="submitUnit">
						<span id="visMenuSEdCount" title="' . 'Characters remaining' . '"></span>
						<input type="submit" class="button primary MenuCloser" value="' . 'Post' . '" />
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						<input type="hidden" name="return" value="1" /> 
					</div>
				</form>
			';
}
$__compilerVar288 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar288 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar288 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar294 = '';
$__compilerVar294 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar294 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar294 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar288 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar294, array());
unset($__compilerVar294);
$__compilerVar288 .= '
				</ul>
				';
$__compilerVar295 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar295 .= '
	';
$__compilerVar296 = '';
$__compilerVar296 .= '
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
$__compilerVar296 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar297 = '';
$__compilerVar297 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar297 .= '
		';
$__compilerVar298 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar298 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar297 .= $__compilerVar298;
unset($__compilerVar298);
$__compilerVar297 .= '
	';
}
$__compilerVar297 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar297 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar297 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar297 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar297 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar297 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar297 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar296 .= $this->callTemplateHook('quick_search', $__compilerVar297, array());
unset($__compilerVar297);
$__compilerVar296 .= '

</div>';
$__compilerVar295 .= $__compilerVar296;
unset($__compilerVar296);
$__compilerVar295 .= '
	';
$__compilerVar299 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar299 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar295 .= $__compilerVar299;
unset($__compilerVar299);
$__compilerVar295 .= '
';
}
$__compilerVar288 .= $__compilerVar295;
unset($__compilerVar295);
$__compilerVar288 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar288 .= '
	';
}
$__compilerVar288 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar288 .= '

		<!-- conversations popup -->
		<li class="navTab inbox Popup PopupControl PopupClosed ' . (($tabs['inbox']['selected']) ? ('selected') : ('')) . '">
						
			<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" rel="Menu" class="navLink NoPopupGadget">
				<i class="uix_icon uix_icon-inbox"></i>
				<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '"
					id="ConversationsMenu_Counter" data-text="' . 'You have %d new unread conversation(s).' . '">
					<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
					<span class="arrow"></span>
				</strong>
			</a>
			
			<div class="Menu JsOnly navPopup" id="ConversationsMenu"
				data-contentSrc="' . XenForo_Template_Helper_Core::link('conversations/popup', false, array()) . '"
				data-contentDest="#ConversationsMenu .listPlaceholder">
				
				<div class="menuHeader primaryContent">
					<h3>
						<span class="Progress InProgress"></span>
						<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" class="concealed">' . 'Conversations' . '</a>
					</h3>						
				</div>
				
				<div class="listPlaceholder"></div>
				
				<div class="sectionFooter">
					';
if ($canStartConversation)
{
$__compilerVar288 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar288 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar288 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar288 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar300 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar300 .= '
	';
$__compilerVar301 = '';
$__compilerVar301 .= '
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
$__compilerVar301 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar302 = '';
$__compilerVar302 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar302 .= '
		';
$__compilerVar303 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar303 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar302 .= $__compilerVar303;
unset($__compilerVar303);
$__compilerVar302 .= '
	';
}
$__compilerVar302 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar302 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar302 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar302 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar302 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar302 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar302 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar301 .= $this->callTemplateHook('quick_search', $__compilerVar302, array());
unset($__compilerVar302);
$__compilerVar301 .= '

</div>';
$__compilerVar300 .= $__compilerVar301;
unset($__compilerVar301);
$__compilerVar300 .= '
	';
$__compilerVar304 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar304 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar300 .= $__compilerVar304;
unset($__compilerVar304);
$__compilerVar300 .= '
';
}
$__compilerVar288 .= $__compilerVar300;
unset($__compilerVar300);
$__compilerVar288 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar288 .= '
		';
}
$__compilerVar288 .= '
		
		';
$__compilerVar305 = '';
$__compilerVar288 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar305, array());
unset($__compilerVar305);
$__compilerVar288 .= '
		
		<!-- alerts popup -->
		<li class="navTab alerts Popup PopupControl PopupClosed">	
						
			<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" rel="Menu" class="navLink NoPopupGadget">
				<i class="uix_icon uix_icon-alerts"></i>
				<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '"
					id="AlertsMenu_Counter" data-text="' . 'You have %d new alert(s).' . '">
					<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
					<span class="arrow"></span>
				</strong>
			</a>
			
			<div class="Menu JsOnly navPopup" id="AlertsMenu"
				data-contentSrc="' . XenForo_Template_Helper_Core::link('account/alerts-popup', false, array()) . '"
				data-contentDest="#AlertsMenu .listPlaceholder"
				data-removeCounter="#AlertsMenu_Counter">
				
				<div class="menuHeader primaryContent">
					<h3>
						<span class="Progress InProgress"></span>
						<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" class="concealed">' . 'Alerts' . '</a>
					</h3>
				</div>
				
				<div class="listPlaceholder"></div>
				
				<div class="sectionFooter">
					<a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '" class="floatLink">' . 'Alert Preferences' . '</a>
					<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
$__compilerVar306 = '';
$__compilerVar288 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar306, array());
unset($__compilerVar306);
$__compilerVar288 .= '
	';
}
else
{
$__compilerVar288 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar288 .= ' 
	';
}
$__compilerVar288 .= '
	
';
if (trim($__compilerVar288) !== '')
{
$__compilerVar287 .= '
' . $__compilerVar288 . '
';
}
unset($__compilerVar288);
$__compilerVar285 .= $__compilerVar287;
unset($__compilerVar287);
$__compilerVar285 .= '
							';
}
$__compilerVar285 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 2)
{
$__compilerVar285 .= '
								';
$__compilerVar307 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar307 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar307 .= '<label for="LoginControl">';
}
$__compilerVar307 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar307 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar307 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar307 .= '</label>';
}
$__compilerVar307 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar307 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar308 = '';
$__compilerVar308 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

	<label for="ctrl_pageLogin_login">' . 'Your name or email address' . ':' . htmlspecialchars($isOverlay, ENT_QUOTES, 'UTF-8') . '</label>
	<dl class="ctrlUnit">
		<dd><input type="text" name="login" value="' . htmlspecialchars($defaultLogin, ENT_QUOTES, 'UTF-8') . '" id="ctrl_pageLogin_login" class="textCtrl uix_fixIOSClickInput" tabindex="1" /></dd>
	</dl>
	
	<label for="ctrl_pageLogin_password">' . 'Password' . ':</label>
	<dl class="ctrlUnit">
		<dd>
			<input type="password" name="password" class="textCtrl uix_fixIOSClickInput" id="ctrl_pageLogin_password" tabindex="2" />					
			<div><a href="' . XenForo_Template_Helper_Core::link('lost-password', false, array()) . '" class="OverlayTrigger OverlayCloser" tabindex="6">' . 'Forgot your password?' . '</a></div>
		</dd>
	</dl>
	
	';
if ($captcha)
{
$__compilerVar308 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar308 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar309 = '';
$__compilerVar309 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar309 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar309 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar309 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar309 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar309 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar309 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar309 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar309 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar309 .= '

	';
if (trim($__compilerVar309) !== '')
{
$__compilerVar308 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar309 . '
	</div>
	';
}
unset($__compilerVar309);
$__compilerVar308 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar308 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar308 .= '

</form>';
$__compilerVar307 .= $__compilerVar308;
unset($__compilerVar308);
$__compilerVar307 .= '
			</div>
		</div>
		';
}
$__compilerVar307 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar307 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar307 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar307 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar307 .= '
	
';
}
$__compilerVar285 .= $__compilerVar307;
unset($__compilerVar307);
$__compilerVar285 .= '
							';
}
$__compilerVar285 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 1 && $contentTemplate == ('thread_view'))
{
$__compilerVar285 .= '
								<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
							';
}
$__compilerVar285 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar285 .= '
								';
$__compilerVar310 = '';
if ($canSearch)
{
$__compilerVar310 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar311 = '';
$__compilerVar311 .= '
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
$__compilerVar311 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar312 = '';
$__compilerVar312 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar312 .= '
		';
$__compilerVar313 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar313 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar312 .= $__compilerVar313;
unset($__compilerVar313);
$__compilerVar312 .= '
	';
}
$__compilerVar312 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar312 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar312 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar312 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar312 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar312 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar312 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar311 .= $this->callTemplateHook('quick_search', $__compilerVar312, array());
unset($__compilerVar312);
$__compilerVar311 .= '

</div>';
$__compilerVar310 .= $__compilerVar311;
unset($__compilerVar311);
$__compilerVar310 .= '
		</li>
	
';
}
$__compilerVar285 .= $__compilerVar310;
unset($__compilerVar310);
$__compilerVar285 .= '
							';
}
$__compilerVar285 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 1)
{
$__compilerVar314 = '1';
$__compilerVar315 = '';
$__compilerVar315 .= '

';
if ($__compilerVar314 == 0)
{
$__compilerVar315 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar315 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar315 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar315 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar315 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar315 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar315 .= '
	';
}
else
{
$__compilerVar315 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar315 .= '
	';
}
$__compilerVar315 .= '
	
';
}
else if ($__compilerVar314 == 1)
{
$__compilerVar315 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar315 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar315 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar315 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar315 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar315 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar315 .= '
	';
}
else
{
$__compilerVar315 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar315 .= '
	';
}
$__compilerVar315 .= '
	
';
}
$__compilerVar315 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar315 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar314) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar315 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar315 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar315 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar315 .= '
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="uix_VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
			</strong>
	</a></li>
	
';
}
else if ($canvasType == ('navigation') || $canvasType == ('custom'))
{
$__compilerVar315 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar314) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar315 .= '
			';
if (!$__compilerVar314)
{
$__compilerVar315 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar315 .= '
			';
if ($__compilerVar314)
{
$__compilerVar315 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar315 .= '
		';
}
else
{
$__compilerVar315 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar315 .= '</a>
	</li>

';
}
$__compilerVar285 .= $__compilerVar315;
unset($__compilerVar314, $__compilerVar315);
}
$__compilerVar285 .= '
							
							';
$__compilerVar316 = '';
$__compilerVar285 .= $this->callTemplateHook('uix_userbar_right_end', $__compilerVar316, array());
unset($__compilerVar316);
$__compilerVar285 .= '
							
						';
if (trim($__compilerVar285) !== '')
{
$__compilerVar274 .= '
					
					
						<ul class="navRight' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar')) ? (' visitorTabs') : ('')) . '">
						
						' . $__compilerVar285 . '
						
						</ul>
						
					';
}
unset($__compilerVar285);
$__compilerVar274 .= '
					
					
					';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar274 .= '
						';
$__compilerVar317 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar317 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar274 .= $__compilerVar317;
unset($__compilerVar317);
$__compilerVar274 .= '
					';
}
$__compilerVar274 .= '
					
				
				';
if (trim($__compilerVar274) !== '')
{
$__compilerVar273 .= '



<div id="userBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyUserBar')) ? ('stickyTop') : ('')) . ' ' . (($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3) ? ('withSearch') : ('')) . '">


	<div class="sticky_wrapper">

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar273 .= '
	<div class="pageWidth">
	';
}
$__compilerVar273 .= '
		
		<div class="pageContent">
		
			<div class="navTabs">
		
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar273 .= '
			<div class="pageWidth">
			';
}
$__compilerVar273 .= '
		
				' . $__compilerVar274 . '
			
			</div>

			<span class="helper"></span>
		</div>
	</div>
	</div>
</div>

';
if (XenForo_Template_Helper_Core::styleProperty('uix_jsInsideTemplates'))
{
$__compilerVar273 .= '
<script>if (typeof(uix) !== "undefined" && typeof(uix.templates) !== "undefined") uix.templates.userBar();</script>
';
}
$__compilerVar273 .= '

';
}
unset($__compilerVar274);
$__compilerVar30 .= $__compilerVar273;
unset($__compilerVar273);
}
$__compilerVar30 .= '
</div>
';
$__compilerVar29 .= $this->callTemplateHook('header', $__compilerVar30, array());
unset($__compilerVar30);
$__compilerVar28 .= $__compilerVar29;
unset($__compilerVar29);
$__compilerVar28 .= '
	' . '
	' . '
</header>

<div id="content" class="' . htmlspecialchars($contentTemplate, ENT_QUOTES, 'UTF-8') . '">
	';
if (!$uix_hidePageContent)
{
$__compilerVar28 .= '
	<div class="pageWidth">
		<div class="pageContent">
	';
}
$__compilerVar28 .= '
			<!-- main content area -->
			';
$__compilerVar318 = '';
$__compilerVar318 .= '

';
$uix_showWelcomeBlock_overRide = '';
$uix_showWelcomeBlock_overRide .= htmlspecialchars($uix_showWelcomeBlock, ENT_QUOTES, 'UTF-8');
$__compilerVar318 .= '


';
if (!XenForo_Template_Helper_Core::styleProperty('uix_useStyleProperties_welcomeBlock'))
{
$__compilerVar318 .= '
	
	';
$uix_showWelcomeBlock = '';
$uix_showWelcomeBlock .= htmlspecialchars($xenOptions['uix_enableWelcomeBlock'], ENT_QUOTES, 'UTF-8');
$__compilerVar318 .= '
	';
$uix_welcomeBlock_showAllTemplates = '';
$uix_welcomeBlock_showAllTemplates .= htmlspecialchars($xenOptions['uix_welcomeBlock_showAllTemplates'], ENT_QUOTES, 'UTF-8');
$__compilerVar318 .= '
	
	';
$uix_welcomeBlockButton_url = '';
$uix_welcomeBlockButton_url .= $xenOptions['uix_welcomeBlockButton_url'];
$__compilerVar318 .= '
	';
$uix_welcomeBlockButton_text = '';
$uix_welcomeBlockButton_text .= $xenOptions['uix_welcomeBlockButton_text'];
$__compilerVar318 .= '
	';
$uix_welcomeBlockHeader_text = '';
$uix_welcomeBlockHeader_text .= $xenOptions['uix_welcomeBlockHeader_text'];
$__compilerVar318 .= '
	';
$uix_welcomeBlockMessage_text = '';
$uix_welcomeBlockMessage_text .= $xenOptions['uix_welcomeBlockMessage_text'];
$__compilerVar318 .= '
	';
$uix_welcomeBlockIcon_class = '';
$uix_welcomeBlockIcon_class .= $xenOptions['uix_welcomeBlockIcon_class'];
$__compilerVar318 .= '
	

';
}
else
{
$__compilerVar318 .= '


	';
$uix_showWelcomeBlock = '';
$uix_showWelcomeBlock .= XenForo_Template_Helper_Core::styleProperty('uix_showWelcomeBlock');
$__compilerVar318 .= '
	';
$uix_welcomeBlock_showAllTemplates = '';
$uix_welcomeBlock_showAllTemplates .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_showAllTemplates');
$__compilerVar318 .= '
	
	';
$uix_welcomeBlockButton_url = '';
$uix_welcomeBlockButton_url .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockButton_url');
$__compilerVar318 .= '
	';
$uix_welcomeBlockButton_text = '';
$uix_welcomeBlockButton_text .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockButton_text');
$__compilerVar318 .= '
	';
$uix_welcomeBlockHeader_text = '';
$uix_welcomeBlockHeader_text .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockHeader_text');
$__compilerVar318 .= '
	';
$uix_welcomeBlockMessage_text = '';
$uix_welcomeBlockMessage_text .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockMessage_text');
$__compilerVar318 .= '
	';
$uix_welcomeBlockIcon_class = '';
$uix_welcomeBlockIcon_class .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockIcon_class');
$__compilerVar318 .= '

';
}
$__compilerVar318 .= '



';
$uix_boolean_welcomeBlock = '';
$uix_boolean_welcomeBlock .= (($uix_showWelcomeBlock_overRide || ($uix_showWelcomeBlock && !$uix_hideWelcomeBlock && $uix_canViewWelcomeBlock && ($contentTemplate == ('forum_list') || $uix_welcomeBlock_showAllTemplates))) ? ('1') : ('0'));
$__compilerVar318 .= '

';
if ($uix_boolean_welcomeBlock)
{
$__compilerVar318 .= '
	';
$this->addRequiredExternal('css', 'uix_welcomeBlock');
$__compilerVar318 .= '
	<div id="uix_welcomeBlock" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_showWelcomeBlock_fixed')) ? ('uix_welcomeBlock_fixed') : ('')) . '"> 
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_custom'))
{
$__compilerVar318 .= '
			';
$__compilerVar319 = '';
$__compilerVar319 .= '<div class="uix_welcomeBlock_wrap">
	<div class="uix_welcomeBlock_content">
		<a href="#" class="close"></a>
		
		';
$__compilerVar320 = '';
$__compilerVar320 .= '
			';
if ($uix_welcomeBlockIcon_class)
{
$__compilerVar320 .= '<i class="uix_icon ' . htmlspecialchars($uix_welcomeBlockIcon_class, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar320 .= '
			';
if ($uix_welcomeBlockHeader_text)
{
$__compilerVar320 .= '<span>' . $uix_welcomeBlockHeader_text . '</span>';
}
$__compilerVar320 .= '
			';
if (trim($__compilerVar320) !== '')
{
$__compilerVar319 .= '

		<h3 class="uix_welcomeBlockHeader">
			' . $__compilerVar320 . '
		</h3>
		';
}
unset($__compilerVar320);
$__compilerVar319 .= '
		
		';
if ($uix_welcomeBlockMessage_text)
{
$__compilerVar319 .= '<p class="uix_welcomeBlockMessage">' . $uix_welcomeBlockMessage_text . '</p>';
}
$__compilerVar319 .= '
		';
if ($uix_welcomeBlockButton_url)
{
$__compilerVar319 .= '<a href="' . htmlspecialchars($uix_welcomeBlockButton_url, ENT_QUOTES, 'UTF-8') . '" class="callToAction"><span>' . htmlspecialchars($uix_welcomeBlockButton_text, ENT_QUOTES, 'UTF-8') . '</span></a>';
}
$__compilerVar319 .= '

	</div>
</div>';
$__compilerVar318 .= $__compilerVar319;
unset($__compilerVar319);
$__compilerVar318 .= '
		';
}
else
{
$__compilerVar318 .= '
			' . '
		';
}
$__compilerVar318 .= '
	</div>
';
}
$__compilerVar318 .= '	';
$__compilerVar28 .= $__compilerVar318;
unset($__compilerVar318);
$__compilerVar28 .= '
			';
$__compilerVar321 = '';
$__compilerVar28 .= $this->callTemplateHook('page_container_content_top', $__compilerVar321, array());
unset($__compilerVar321);
$__compilerVar28 .= '
			
			';
$__compilerVar322 = '';
$__compilerVar323 = '';
$__compilerVar323 .= '
	
		';
$__compilerVar324 = '';
$__compilerVar324 .= '
				';
$__compilerVar325 = '';
$__compilerVar324 .= $this->callTemplateHook('ad_above_top_breadcrumb', $__compilerVar325, array());
unset($__compilerVar325);
$__compilerVar324 .= '	
				
				
				
				
				
				
			';
if (trim($__compilerVar324) !== '')
{
$__compilerVar323 .= '
			' . $__compilerVar324 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar323 .= '
			<div>' . 'Template' . ': ad_above_top_breadcrumb</div>
		';
}
unset($__compilerVar324);
$__compilerVar323 .= '
	
	';
if (trim($__compilerVar323) !== '')
{
$__compilerVar322 .= '
	
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers')) ? ('section') : ('sectionMain')) . ' funbox">
	<div class="funboxWrapper">
	' . $__compilerVar323 . '
	</div>
	</div>
';
}
unset($__compilerVar323);
$__compilerVar28 .= $__compilerVar322;
unset($__compilerVar322);
$__compilerVar28 .= '

			';
$__compilerVar326 = '';
$__compilerVar326 .= '
			';
if (!$uix_hideTopBreadcrumb && !(($selectedTabId == $homeTabId) && ($homeTabId != ('forums') && $homeTabId) && XenForo_Template_Helper_Core::styleProperty('uix_removeBreadCrumbOnIndex')) && !($contentTemplate == ('forum_list') && XenForo_Template_Helper_Core::styleProperty('uix_removeBreadCrumbOnForumIndex')))
{
$__compilerVar326 .= '
			<div class="breadBoxTop ' . (($topctrl && !XenForo_Template_Helper_Core::styleProperty('uix_moveTopCtrl')) ? ('withTopCtrl') : ('')) . ' ' . (($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 4) ? ('withSearch') : ('')) . '">
				';
if ($topctrl && !XenForo_Template_Helper_Core::styleProperty('uix_moveTopCtrl'))
{
$__compilerVar326 .= '<div class="topCtrl">' . $topctrl . '</div>';
}
$__compilerVar326 .= '
				';
$__compilerVar327 = '';
$__compilerVar327 .= '1';
$__compilerVar328 = '';
$__compilerVar328 .= '

<nav>

	';
$__compilerVar329 = '';
$__compilerVar329 .= '	
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar') && $sidebar && $uix_canCollapseSidebar && $visitor['user_id'] > 0)
{
$__compilerVar329 .= '
				';
if ($visitor['uix_sidebar'] > $uix_currentTimestamp)
{
$__compilerVar329 .= '
					<li class="uix_sidebar_collapse toggleList_item uix_sidebar_collapsed">
				';
}
else
{
$__compilerVar329 .= '
					<li class="uix_sidebar_collapse toggleList_item">
				';
}
$__compilerVar329 .= '
					<a href="#" title="' . 'Toggle Sidebar' . '" class="Tooltip" ' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('') : ('data-tipclass="flipped"')) . '>
						<i class="uix_icon uix_icon-sidebarCollapse"></i>
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar_usePhrases'))
{
$__compilerVar329 .= ' 
							<span class="uix_sidebar_collapse_phrase_close">
								' . 'Close Sidebar' . '
							</span>
							<span class="uix_sidebar_collapse_phrase_open">
								' . 'Open Sidebar' . '
							</span>
						';
}
$__compilerVar329 .= '
					</a>
				</li>
			';
}
$__compilerVar329 .= '
			';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 4)
{
$__compilerVar329 .= '<li class="toggleList_item toggleList_item_search">';
$__compilerVar330 = '';
$__compilerVar330 .= '
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
$__compilerVar330 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar331 = '';
$__compilerVar331 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar331 .= '
		';
$__compilerVar332 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar332 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar331 .= $__compilerVar332;
unset($__compilerVar332);
$__compilerVar331 .= '
	';
}
$__compilerVar331 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar331 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar331 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar331 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar331 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar331 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar331 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar330 .= $this->callTemplateHook('quick_search', $__compilerVar331, array());
unset($__compilerVar331);
$__compilerVar330 .= '

</div>';
$__compilerVar329 .= $__compilerVar330;
unset($__compilerVar330);
$__compilerVar329 .= '</li>';
}
$__compilerVar329 .= '
		';
if (trim($__compilerVar329) !== '')
{
$__compilerVar328 .= '
	<ul class="uix_breadCrumb_toggleList">
		' . $__compilerVar329 . '
	</ul>
	';
}
unset($__compilerVar329);
$__compilerVar328 .= '
	
	';
if (!$quickNavSelected AND $navigation)
{
$__compilerVar328 .= '
		';
foreach ($navigation AS $breadcrumb)
{
$__compilerVar328 .= '
			';
if ($breadcrumb['node_id'])
{
$__compilerVar328 .= '
				';
$quickNavSelected = '';
$quickNavSelected .= 'node-' . htmlspecialchars($breadcrumb['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar328 .= '
			';
}
$__compilerVar328 .= '
		';
}
$__compilerVar328 .= '
	';
}
$__compilerVar328 .= '

	<fieldset class="breadcrumb">
		<a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>
			
		<div class="boardTitle"><strong>' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '</strong></div>
		
		<span class="crumbs">
			';
if ($showHomeLink)
{
$__compilerVar328 .= '
				<span class="crust homeCrumb"' . (($__compilerVar327) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($__compilerVar327) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar327) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon'))
{
$__compilerVar328 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar328 .= 'Home';
}
$__compilerVar328 .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span></span>')) . '</span>
				</span>
			';
}
else if ($selectedTabId != $homeTabId)
{
$__compilerVar328 .= '
				<span class="crust homeCrumb"' . (($__compilerVar327) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($__compilerVar327) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar327) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon'))
{
$__compilerVar328 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar328 .= htmlspecialchars($homeTab['title'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar328 .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span></span>')) . '</span>
				</span>
			';
}
$__compilerVar328 .= '
			
			';
if ($selectedTab)
{
$__compilerVar328 .= '
				<span class="crust selectedTabCrumb"' . (($__compilerVar327) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($selectedTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($__compilerVar327) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar327) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon') && $selectedTabId == $homeTabId && !$showHomeLink)
{
$__compilerVar328 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar328 .= htmlspecialchars($selectedTab['title'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar328 .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span>&gt;</span>')) . '</span>
				</span>
			';
}
$__compilerVar328 .= '
			
			';
if ($navigation)
{
$__compilerVar328 .= '
				';
$i = 0;
$count = count($navigation);
foreach ($navigation AS $breadcrumb)
{
$i++;
$__compilerVar328 .= '
					<span class="crust"' . (($__compilerVar327) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
						<a href="' . $breadcrumb['href'] . '" class="crumb"' . (($__compilerVar327) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar327) ? (' itemprop="title"') : ('')) . '>' . $breadcrumb['value'] . '</span></a>
						<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span>&gt;</span>')) . '</span>
					</span>
				';
}
$__compilerVar328 .= '
			';
}
$__compilerVar328 .= '
		</span>
	</fieldset>
</nav>';
$__compilerVar326 .= $__compilerVar328;
unset($__compilerVar327, $__compilerVar328);
$__compilerVar326 .= '
				';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 4)
{
$__compilerVar326 .= '
					';
$__compilerVar333 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar333 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar326 .= $__compilerVar333;
unset($__compilerVar333);
$__compilerVar326 .= '
				';
}
$__compilerVar326 .= '
			</div>
			';
}
$__compilerVar326 .= '
			';
$__compilerVar28 .= $this->callTemplateHook('page_container_breadcrumb_top', $__compilerVar326, array());
unset($__compilerVar326);
$__compilerVar28 .= '
						
			';
$__compilerVar334 = '';
$__compilerVar335 = '';
$__compilerVar335 .= '
	
		';
$__compilerVar336 = '';
$__compilerVar336 .= '
				';
$__compilerVar337 = '';
$__compilerVar336 .= $this->callTemplateHook('ad_below_top_breadcrumb', $__compilerVar337, array());
unset($__compilerVar337);
$__compilerVar336 .= '
				
				
				
				
				
				
				
			';
if (trim($__compilerVar336) !== '')
{
$__compilerVar335 .= '
			' . $__compilerVar336 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar335 .= '
			<div>' . 'Template' . ': ad_below_top_breadcrumb</div>
		';
}
unset($__compilerVar336);
$__compilerVar335 .= '
	
	';
if (trim($__compilerVar335) !== '')
{
$__compilerVar334 .= '
	
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers')) ? ('section') : ('sectionMain')) . ' funbox">
	<div class="funboxWrapper">
	' . $__compilerVar335 . '
	</div>
	</div>
	
';
}
unset($__compilerVar335);
$__compilerVar28 .= $__compilerVar334;
unset($__compilerVar334);
$__compilerVar28 .= '
			
			';
if ($visitor['is_admin'] AND !$uix_isActive)
{
$__compilerVar28 .= '
				<div class="uix_upgradeMessage importantMessage">
					<i class="uix_icon uix_icon-alerts"></i> Please reinstall or reactivate the UI.X Add-On to regain functionality of your board.
				</div>
			';
}
$__compilerVar28 .= '
			
			';
if ($visitor['is_admin'] AND $xenAddOns['uix'] < 1000270)
{
$__compilerVar28 .= '
				<div class="uix_upgradeMessage importantMessage">
					<i class="uix_icon uix_icon-alerts"></i> Your UI.X Add-on version is incompatible with this UI.X theme. Upgrade your Add-on <a class="muted" style="text-decoration: underline; font-weight: normal;" href="https://audentio.com/download/uix_addon">here</a>.
				</div>
			';
}
$__compilerVar28 .= '
			
			
			
			';
if ($sidebar)
{
$__compilerVar28 .= '
				<div class="uix_contentFix">	
					<div class="mainContainer">
						<div class="mainContent">
			';
}
else
{
$__compilerVar28 .= '
				<div class="mainContainer_noSidebar">
			';
}
$__compilerVar28 .= '
					
						<!--[if lt IE 8]>
							<p class="importantMessage">' . 'You are using an out of date browser. It  may not display this or other websites correctly.<br />You should upgrade or use an <a href="https://www.google.com/chrome/browser/" target="_blank">alternative browser</a>.' . '</p>
						<![endif]-->
						
						';
if (!$uix_hideNotices)
{
$__compilerVar28 .= '
						';
$__compilerVar338 = '';
$__compilerVar338 .= '
						';
$__compilerVar339 = '';
if ($notices['block'])
{
$__compilerVar339 .= '

';
$this->addRequiredExternal('css', 'notices');
$__compilerVar339 .= '
';
$this->addRequiredExternal('css', 'panel_scroller');
$__compilerVar339 .= '
' . '

<div class="' . ((XenForo_Template_Helper_Core::styleProperty('scrollableNotices')) ? ('PanelScroller') : ('PanelScrollerOff')) . ' Notices" data-vertical="' . XenForo_Template_Helper_Core::styleProperty('noticeVertical') . '" data-speed="' . XenForo_Template_Helper_Core::styleProperty('noticeSpeed') . '" data-interval="' . XenForo_Template_Helper_Core::styleProperty('noticeInterval') . '">
	<div class="scrollContainer">
		<div class="PanelContainer">
			<ol class="Panels">
				';
foreach ($notices['block'] AS $noticeId => $notice)
{
$__compilerVar339 .= '
					';
$__compilerVar340 = '';
$__compilerVar340 .= $notice['message'];
$__compilerVar341 = '';
$__compilerVar341 .= '<li class="panel Notice DismissParent notice_' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($notice['visibility'], ENT_QUOTES, 'UTF-8') . '" data-notice="' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '">
	';
if ($notice['imageUrl'])
{
$__compilerVar341 .= '
		<div class="blockImage ' . htmlspecialchars($notice['display_image'], ENT_QUOTES, 'UTF-8') . '">
			<img src="' . htmlspecialchars($notice['imageUrl'], ENT_QUOTES, 'UTF-8') . '" alt="" />
		</div>
	';
}
$__compilerVar341 .= '
	<div class="' . (($notice['wrap']) ? ('baseHtml noticeContent') : ('')) . (($notice['imageUrl']) ? (' hasImage') : ('')) . '">' . $__compilerVar340 . '</div>
	
	';
if ($notice['dismissible'])
{
$__compilerVar341 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account/dismiss-notice', '', array(
'notice_id' => $noticeId
)) . '"
			title="' . 'Dismiss Notice' . '" class="DismissCtrl Tooltip" data-offsetx="7" data-tipclass="flipped">' . 'Dismiss Notice' . '</a>';
}
$__compilerVar341 .= '
</li>';
$__compilerVar339 .= $__compilerVar341;
unset($__compilerVar340, $__compilerVar341);
$__compilerVar339 .= '
				';
}
$__compilerVar339 .= '
			</ol>
		</div>
	</div>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('scrollableNotices') AND XenForo_Template_Helper_Core::numberFormat(count($notices['block']), '0') > 1)
{
$__compilerVar339 .= '<div class="navContainer">
		<span class="navControls Nav JsOnly">
			';
$i = 0;
foreach ($notices['block'] AS $noticeId => $notice)
{
$i++;
$__compilerVar339 .= '
				<a id="n' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '" href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#n' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '"' . (($i == 1) ? (' class="current"') : ('')) . '>
					<span class="arrow"><span></span></span>
					<!--' . htmlspecialchars($i, ENT_QUOTES, 'UTF-8') . ' -->' . htmlspecialchars($notice['title'], ENT_QUOTES, 'UTF-8') . '</a>
			';
}
$__compilerVar339 .= '
		</span>
	</div>';
}
$__compilerVar339 .= '
</div>

';
}
$__compilerVar339 .= '

';
if ($notices['floating'])
{
$__compilerVar339 .= '
	';
$this->addRequiredExternal('css', 'notices');
$__compilerVar339 .= '
	
	<div class="FloatingContainer Notices">
		';
foreach ($notices['floating'] AS $noticeId => $notice)
{
$__compilerVar339 .= '
			<div class="DismissParent Notice notice_' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($notice['visibility'], ENT_QUOTES, 'UTF-8') . '" data-notice="' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '" data-delay-duration="' . htmlspecialchars($notice['delay_duration'], ENT_QUOTES, 'UTF-8') . '" data-display-duration="' . htmlspecialchars($notice['display_duration'], ENT_QUOTES, 'UTF-8') . '" data-auto-dismiss="' . htmlspecialchars($notice['auto_dismiss'], ENT_QUOTES, 'UTF-8') . '">
				<div class="floatingItem ' . (($notice['display_style'] == ('custom')) ? (htmlspecialchars($notice['css_class'], ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($notice['display_style'], ENT_QUOTES, 'UTF-8'))) . '">
					';
if ($notice['dismissible'])
{
$__compilerVar339 .= '
						<a href="' . XenForo_Template_Helper_Core::link('account/dismiss-notice', '', array(
'notice_id' => $noticeId
)) . '"
							title="' . 'Dismiss Notice' . '" class="DismissCtrl Tooltip" data-offsetx="7" data-tipclass="flipped">' . 'Dismiss Notice' . '</a>';
}
$__compilerVar339 .= '
					';
if ($notice['imageUrl'])
{
$__compilerVar339 .= '
						<div class="floatingImage ' . htmlspecialchars($notice['display_image'], ENT_QUOTES, 'UTF-8') . '">
							<img src="' . htmlspecialchars($notice['imageUrl'], ENT_QUOTES, 'UTF-8') . '" alt="" />
						</div>
					';
}
$__compilerVar339 .= '
					<div class="' . (($notice['imageUrl']) ? ('hasImage') : ('')) . ' ' . (($notice['wrap']) ? ('baseHtml noticeContent') : ('')) . '">
						' . $notice['message'] . '
					</div>
				</div>
			</div>
		';
}
$__compilerVar339 .= '
	</div>
';
}
$__compilerVar338 .= $__compilerVar339;
unset($__compilerVar339);
$__compilerVar338 .= '						
						';
$__compilerVar28 .= $this->callTemplateHook('page_container_notices', $__compilerVar338, array());
unset($__compilerVar338);
$__compilerVar28 .= '
						';
}
$__compilerVar28 .= '
						
						
						';
if ($topctrl && XenForo_Template_Helper_Core::styleProperty('uix_moveTopCtrl'))
{
$__compilerVar28 .= '<div class="topCtrl contentCallToAction">' . $topctrl . '</div>';
}
$__compilerVar28 .= '

						';
$__compilerVar342 = '';
$__compilerVar342 .= '
						';
if (!$noH1)
{
$__compilerVar342 .= '
							';
if (!$uix_hidePageTitle && !(($selectedTabId == $homeTabId) && ($homeTabId != ('forums') && $homeTabId) && XenForo_Template_Helper_Core::styleProperty('uix_removeHomePageTitle')) && !($contentTemplate == ('forum_list') && XenForo_Template_Helper_Core::styleProperty('uix_removeIndexPageTitle')))
{
$__compilerVar342 .= '				
								<!-- h1 title, description -->
								<div class="titleBar">
									' . $beforeH1 . '
									<h1>';
if ($h1)
{
$__compilerVar342 .= $h1;
}
else if ($title)
{
$__compilerVar342 .= $title;
}
else
{
$__compilerVar342 .= htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar342 .= '</h1>
									
									';
if ($pageDescription['content'])
{
$__compilerVar342 .= '<p id="pageDescription" class="muted ' . htmlspecialchars($pageDescription['class'], ENT_QUOTES, 'UTF-8') . '">' . $pageDescription['content'] . '</p>';
}
$__compilerVar342 .= '
								</div>
							';
}
$__compilerVar342 .= '
						';
}
$__compilerVar342 .= '
						';
$__compilerVar28 .= $this->callTemplateHook('page_container_content_title_bar', $__compilerVar342, array());
unset($__compilerVar342);
$__compilerVar28 .= '
						
						';
$__compilerVar343 = '';
$__compilerVar344 = '';
$__compilerVar344 .= '
	
		';
$__compilerVar345 = '';
$__compilerVar345 .= '
				';
$__compilerVar346 = '';
$__compilerVar345 .= $this->callTemplateHook('ad_above_content', $__compilerVar346, array());
unset($__compilerVar346);
$__compilerVar345 .= '	
				
				
				
				
				
			';
if (trim($__compilerVar345) !== '')
{
$__compilerVar344 .= '
			' . $__compilerVar345 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar344 .= '
			<div>' . 'Template' . ': ad_above_content</div>
		';
}
unset($__compilerVar345);
$__compilerVar344 .= '
	
	';
if (trim($__compilerVar344) !== '')
{
$__compilerVar343 .= '
	
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers')) ? ('section') : ('sectionMain')) . ' funbox">
	<div class="funboxWrapper">
	' . $__compilerVar344 . '
	</div>
	</div>
';
}
unset($__compilerVar344);
$__compilerVar28 .= $__compilerVar343;
unset($__compilerVar343);
$__compilerVar28 .= '
						
						<!-- main template -->
						' . $contents . '
						
						';
$__compilerVar347 = '';
$__compilerVar348 = '';
$__compilerVar348 .= '
	
		';
$__compilerVar349 = '';
$__compilerVar349 .= '
				';
$__compilerVar350 = '';
$__compilerVar349 .= $this->callTemplateHook('ad_below_content', $__compilerVar350, array());
unset($__compilerVar350);
$__compilerVar349 .= '
				
				
				
				
				
				
				
			';
if (trim($__compilerVar349) !== '')
{
$__compilerVar348 .= '
			' . $__compilerVar349 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar348 .= '
			<div>' . 'Template' . ': ad_below_content</div>
		';
}
unset($__compilerVar349);
$__compilerVar348 .= '
	
	';
if (trim($__compilerVar348) !== '')
{
$__compilerVar347 .= '
	
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers')) ? ('section') : ('sectionMain')) . ' funbox">
	<div class="funboxWrapper">
	' . $__compilerVar348 . '
	</div>
	</div>
	
';
}
unset($__compilerVar348);
$__compilerVar28 .= $__compilerVar347;
unset($__compilerVar347);
$__compilerVar28 .= '
						
						';
if (!$visitor['user_id'] && !$hideLoginBar)
{
$__compilerVar28 .= '
							<!-- login form, to be moved to the upper drop-down -->
							';
$__compilerVar351 = '';
$__compilerVar351 .= '

';
$__compilerVar352 = '';
$__compilerVar352 .= '
';
if ($xenOptions['facebookAppId'])
{
$eAuth = '';
$eAuth .= '1';
}
$__compilerVar352 .= '
';
if ($xenOptions['twitterAppKey'])
{
$eAuth = '';
$eAuth .= '1';
}
$__compilerVar352 .= '
';
if ($xenOptions['googleClientId'])
{
$eAuth = '';
$eAuth .= '1';
}
$__compilerVar352 .= '
';
$__compilerVar351 .= $this->callTemplateHook('login_bar_eauth_set', $__compilerVar352, array());
unset($__compilerVar352);
$__compilerVar351 .= '

<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm ' . (($eAuth) ? ('eAuth') : ('')) . '" id="login" style="display:none">

	';
$__compilerVar353 = '';
$__compilerVar353 .= '
				';
$__compilerVar354 = '';
$__compilerVar354 .= '
				';
if ($xenOptions['facebookAppId'])
{
$__compilerVar354 .= '
					';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar354 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="110"><span>' . 'Log in with Facebook' . '</span></a></li>
				';
}
$__compilerVar354 .= '
				
				';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar354 .= '
					';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar354 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="110"><span>' . 'Log in with Twitter' . '</span></a></li>
				';
}
$__compilerVar354 .= '
				
				';
if ($xenOptions['googleClientId'])
{
$__compilerVar354 .= '
					';
$this->addRequiredExternal('css', 'google');
$__compilerVar354 .= '
					<li><span class="googleLogin GoogleLogin JsOnly" tabindex="110" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></li>
				';
}
$__compilerVar354 .= '
				';
$__compilerVar353 .= $this->callTemplateHook('login_bar_eauth_items', $__compilerVar354, array());
unset($__compilerVar354);
$__compilerVar353 .= '
			';
if (trim($__compilerVar353) !== '')
{
$__compilerVar351 .= '
		<ul id="eAuthUnit">
			' . $__compilerVar353 . '
		</ul>
	';
}
unset($__compilerVar353);
$__compilerVar351 .= '

	<div class="ctrlWrapper">
		<dl class="ctrlUnit">
			<dt><label for="LoginControl">' . 'Your name or email address' . ':</label></dt>
			<dd><input type="text" name="login" id="LoginControl" class="textCtrl" tabindex="101" /></dd>
		</dl>
	
	';
if ($xenOptions['registrationSetup']['enabled'])
{
$__compilerVar351 .= '
		<dl class="ctrlUnit">
			<dt>
				<label for="ctrl_password">' . 'Do you already have an account?' . '</label>
			</dt>
			<dd>
				<ul>
					<li><label for="ctrl_not_registered"><input type="radio" name="register" value="1" id="ctrl_not_registered" tabindex="105" />
						' . 'No, create an account now.' . '</label></li>
					<li><label for="ctrl_registered"><input type="radio" name="register" value="0" id="ctrl_registered" tabindex="105" checked="checked" class="Disabler" />
						' . 'Yes, my password is' . ':</label></li>
					<li id="ctrl_registered_Disabler">
						<input type="password" name="password" class="textCtrl" id="ctrl_password" tabindex="102" />
						<div class="lostPassword"><a href="' . XenForo_Template_Helper_Core::link('lost-password', false, array()) . '" class="OverlayTrigger OverlayCloser" tabindex="106">' . 'Forgot your password?' . '</a></div>
					</li>
				</ul>
			</dd>
		</dl>
	';
}
else
{
$__compilerVar351 .= '
		<dl class="ctrlUnit">
			<dt>
				<label for="ctrl_password">' . 'Password' . ':</label>
			</dt>
			<dd>
				<input type="password" name="password" class="textCtrl" id="ctrl_password" tabindex="102" />
				<div class="lostPasswordLogin"><a href="' . XenForo_Template_Helper_Core::link('lost-password', false, array()) . '" class="OverlayTrigger OverlayCloser" tabindex="106">' . 'Forgot your password?' . '</a></div>
			</dd>
		</dl>
	';
}
$__compilerVar351 .= '
		
		<dl class="ctrlUnit submitUnit">
			<dt></dt>
			<dd>
				<input type="submit" class="button primary" value="' . 'Log in' . '" tabindex="104" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" />
				<label for="ctrl_remember" class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_remember" tabindex="103" /> ' . 'Stay logged in' . '</label>
			</dd>
		</dl>
	</div>

	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="redirect" value="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />

</form>';
$__compilerVar28 .= $__compilerVar351;
unset($__compilerVar351);
$__compilerVar28 .= '
						';
}
$__compilerVar28 .= '
						
			';
if ($sidebar)
{
$__compilerVar28 .= '
						</div>
					</div>
				
					<!-- sidebar -->
					<aside class="uix_mainSidebar ' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('uix_mainSidebar_left') : ('uix_mainSidebar_right')) . '">
						<div class="inner_wrapper">
							<div class="sidebar">
								';
$__compilerVar355 = '';
$__compilerVar355 .= '
								';
$__compilerVar356 = '';
$__compilerVar357 = '';
$__compilerVar357 .= '
		
			';
$__compilerVar358 = '';
$__compilerVar358 .= '
					';
$__compilerVar359 = '';
$__compilerVar358 .= $this->callTemplateHook('ad_sidebar_top', $__compilerVar359, array());
unset($__compilerVar359);
$__compilerVar358 .= '
					
					
					
					
					
					
				';
if (trim($__compilerVar358) !== '')
{
$__compilerVar357 .= '
				' . $__compilerVar358 . '
			';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar357 .= '
				<div>' . 'Template' . ': ad_sidebar_top</div>
			';
}
unset($__compilerVar358);
$__compilerVar357 .= '
		
		';
if (trim($__compilerVar357) !== '')
{
$__compilerVar356 .= '
	
	<div class="section funbox">
		<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers_sidebar')) ? ('') : ('secondaryContent')) . ' funboxWrapper">
		' . $__compilerVar357 . '
		</div>
	</div>
	
';
}
unset($__compilerVar357);
$__compilerVar355 .= $__compilerVar356;
unset($__compilerVar356);
$__compilerVar355 .= '
								';
if (!$noVisitorPanel)
{
$__compilerVar360 = '';
if ($visitor['user_id'])
{
$__compilerVar360 .= '

<div class="section visitorPanel">
	<div class="secondaryContent">
	
		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,(true),array(
'user' => '$visitor',
'size' => 'm',
'img' => 'true'
),'')) . '
		
		<div class="visitorText">
			<h2>' . '<span class="muted">Signed in as</span> ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $visitor,
'1' => 'NoOverlay'
)) . '' . '</h2>		
			<div class="stats">
			';
$__compilerVar361 = '';
$__compilerVar361 .= '
				<dl class="pairsJustified"><dt>' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorStatsIcons')) ? ('<i class="uix_icon uix_icon-comment Tooltip" title="' . XenForo_Template_Helper_Core::numberFormat($visitor['message_count'], '0') . ' ' . 'Messages' . '"></i>') : ('Messages' . ':')) . '</dt><dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['message_count'], '0') . '</dd></dl>
				<dl class="pairsJustified"><dt>' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorStatsIcons')) ? ('<i class="uix_icon uix_icon-thumbsUp Tooltip" title="' . XenForo_Template_Helper_Core::numberFormat($visitor['like_count'], '0') . ' ' . 'Likes' . '"></i>') : ('Likes' . ':')) . '</dt><dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['like_count'], '0') . '</dd></dl>
				';
if ($xenOptions['enableTrophies'])
{
$__compilerVar361 .= '<dl class="pairsJustified"><dt>' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorStatsIcons')) ? ('<i class="uix_icon uix_icon-trophy Tooltip" title="' . XenForo_Template_Helper_Core::numberFormat($visitor['trophy_points'], '0') . ' ' . 'Points' . '"></i>') : ('Points' . ':')) . '</dt><dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['trophy_points'], '0') . '</dd></dl>';
}
$__compilerVar361 .= '
				
			</div>
			';
$__compilerVar360 .= $this->callTemplateHook('sidebar_visitor_panel_stats', $__compilerVar361, array());
unset($__compilerVar361);
$__compilerVar360 .= '
		</div>
		
	</div>
</div>

';
}
else
{
$__compilerVar360 .= '

<div class="section loginButton">		
	<div class="secondaryContent">
		<label';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 0 && XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') != 3)
{
$__compilerVar360 .= ' for="LoginControl"';
}
$__compilerVar360 .= ' id="SignupButton"><a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="inner' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '">' . (($xenOptions['registrationSetup']['enabled']) ? ('Sign up now!') : ('Log in')) . '</a></label>
	</div>
</div>

';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginFormSidebar'))
{
$__compilerVar360 .= '
<div class="section uix_loginForm">		
	<div class="secondaryContent">
		<h3>' . 'Log in' . '</h3>
		';
$__compilerVar362 = '';
$__compilerVar362 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

	<label for="ctrl_pageLogin_login">' . 'Your name or email address' . ':' . htmlspecialchars($isOverlay, ENT_QUOTES, 'UTF-8') . '</label>
	<dl class="ctrlUnit">
		<dd><input type="text" name="login" value="' . htmlspecialchars($defaultLogin, ENT_QUOTES, 'UTF-8') . '" id="ctrl_pageLogin_login" class="textCtrl uix_fixIOSClickInput" tabindex="1" /></dd>
	</dl>
	
	<label for="ctrl_pageLogin_password">' . 'Password' . ':</label>
	<dl class="ctrlUnit">
		<dd>
			<input type="password" name="password" class="textCtrl uix_fixIOSClickInput" id="ctrl_pageLogin_password" tabindex="2" />					
			<div><a href="' . XenForo_Template_Helper_Core::link('lost-password', false, array()) . '" class="OverlayTrigger OverlayCloser" tabindex="6">' . 'Forgot your password?' . '</a></div>
		</dd>
	</dl>
	
	';
if ($captcha)
{
$__compilerVar362 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar362 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar363 = '';
$__compilerVar363 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar363 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar363 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar363 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar363 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar363 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar363 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar363 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar363 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar363 .= '

	';
if (trim($__compilerVar363) !== '')
{
$__compilerVar362 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar363 . '
	</div>
	';
}
unset($__compilerVar363);
$__compilerVar362 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar362 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar362 .= '

</form>';
$__compilerVar360 .= $__compilerVar362;
unset($__compilerVar362);
$__compilerVar360 .= '
	</div>
</div>
';
}
$__compilerVar360 .= '

';
}
$__compilerVar360 .= '

';
$__compilerVar364 = '';
$__compilerVar365 = '';
$__compilerVar365 .= '
	
		';
$__compilerVar366 = '';
$__compilerVar366 .= '
				';
$__compilerVar367 = '';
$__compilerVar366 .= $this->callTemplateHook('ad_sidebar_below_visitor_panel', $__compilerVar367, array());
unset($__compilerVar367);
$__compilerVar366 .= '
				
				
				
				
				
				
				
			';
if (trim($__compilerVar366) !== '')
{
$__compilerVar365 .= '
			' . $__compilerVar366 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar365 .= '
			<div>' . 'Template' . ': ad_sidebar_below_visitor_panel</div>
		';
}
unset($__compilerVar366);
$__compilerVar365 .= '
	
	';
if (trim($__compilerVar365) !== '')
{
$__compilerVar364 .= '
	
	<div class="section funbox">
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers_sidebar')) ? ('') : ('secondaryContent')) . ' funboxWrapper">
	' . $__compilerVar365 . '
	</div>
	</div>
	
';
}
unset($__compilerVar365);
$__compilerVar360 .= $__compilerVar364;
unset($__compilerVar364);
$__compilerVar355 .= $__compilerVar360;
unset($__compilerVar360);
}
$__compilerVar355 .= '
								' . $sidebar . '
								';
$__compilerVar368 = '';
$__compilerVar369 = '';
$__compilerVar369 .= '
		
			';
$__compilerVar370 = '';
$__compilerVar370 .= '
					';
$__compilerVar371 = '';
$__compilerVar370 .= $this->callTemplateHook('ad_sidebar_bottom', $__compilerVar371, array());
unset($__compilerVar371);
$__compilerVar370 .= '				
					
					
					
					
					
				';
if (trim($__compilerVar370) !== '')
{
$__compilerVar369 .= '
				' . $__compilerVar370 . '
			';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar369 .= '
				<div>' . 'Template' . ': ad_sidebar_bottom</div>
			';
}
unset($__compilerVar370);
$__compilerVar369 .= '
		
		';
if (trim($__compilerVar369) !== '')
{
$__compilerVar368 .= '
	
	<div class="section funbox">
		<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers_sidebar')) ? ('') : ('secondaryContent')) . ' funboxWrapper">
		' . $__compilerVar369 . '
		</div>
	</div>
	
';
}
unset($__compilerVar369);
$__compilerVar355 .= $__compilerVar368;
unset($__compilerVar368);
$__compilerVar355 .= '
								';
$__compilerVar28 .= $this->callTemplateHook('page_container_sidebar', $__compilerVar355, array());
unset($__compilerVar355);
$__compilerVar28 .= '
							</div>
						</div>
					</aside>
				</div>
			';
}
else
{
$__compilerVar28 .= '
				</div>
			';
}
$__compilerVar28 .= '
			
			';
$__compilerVar372 = '';
$__compilerVar372 .= '
			';
if (!$uix_hideBottomBreadcrumb && !(($selectedTabId == $homeTabId) && ($homeTabId != ('forums')) && XenForo_Template_Helper_Core::styleProperty('uix_removeBreadCrumbOnIndex')) && !($contentTemplate == ('forum_list') && XenForo_Template_Helper_Core::styleProperty('uix_removeBreadCrumbOnForumIndex')))
{
$__compilerVar372 .= '			
				';
if (!XenForo_Template_Helper_Core::styleProperty('uix_hideBottomBreadcrumb'))
{
$__compilerVar372 .= '
					<div class="breadBoxBottom">';
$__compilerVar373 = '';
$__compilerVar373 .= '

<nav>

	';
$__compilerVar374 = '';
$__compilerVar374 .= '	
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar') && $sidebar && $uix_canCollapseSidebar && $visitor['user_id'] > 0)
{
$__compilerVar374 .= '
				';
if ($visitor['uix_sidebar'] > $uix_currentTimestamp)
{
$__compilerVar374 .= '
					<li class="uix_sidebar_collapse toggleList_item uix_sidebar_collapsed">
				';
}
else
{
$__compilerVar374 .= '
					<li class="uix_sidebar_collapse toggleList_item">
				';
}
$__compilerVar374 .= '
					<a href="#" title="' . 'Toggle Sidebar' . '" class="Tooltip" ' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('') : ('data-tipclass="flipped"')) . '>
						<i class="uix_icon uix_icon-sidebarCollapse"></i>
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar_usePhrases'))
{
$__compilerVar374 .= ' 
							<span class="uix_sidebar_collapse_phrase_close">
								' . 'Close Sidebar' . '
							</span>
							<span class="uix_sidebar_collapse_phrase_open">
								' . 'Open Sidebar' . '
							</span>
						';
}
$__compilerVar374 .= '
					</a>
				</li>
			';
}
$__compilerVar374 .= '
			';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 4)
{
$__compilerVar374 .= '<li class="toggleList_item toggleList_item_search">';
$__compilerVar375 = '';
$__compilerVar375 .= '
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
$__compilerVar375 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar376 = '';
$__compilerVar376 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar376 .= '
		';
$__compilerVar377 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar377 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar376 .= $__compilerVar377;
unset($__compilerVar377);
$__compilerVar376 .= '
	';
}
$__compilerVar376 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar376 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar376 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar376 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar376 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar376 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar376 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar375 .= $this->callTemplateHook('quick_search', $__compilerVar376, array());
unset($__compilerVar376);
$__compilerVar375 .= '

</div>';
$__compilerVar374 .= $__compilerVar375;
unset($__compilerVar375);
$__compilerVar374 .= '</li>';
}
$__compilerVar374 .= '
		';
if (trim($__compilerVar374) !== '')
{
$__compilerVar373 .= '
	<ul class="uix_breadCrumb_toggleList">
		' . $__compilerVar374 . '
	</ul>
	';
}
unset($__compilerVar374);
$__compilerVar373 .= '
	
	';
if (!$quickNavSelected AND $navigation)
{
$__compilerVar373 .= '
		';
foreach ($navigation AS $breadcrumb)
{
$__compilerVar373 .= '
			';
if ($breadcrumb['node_id'])
{
$__compilerVar373 .= '
				';
$quickNavSelected = '';
$quickNavSelected .= 'node-' . htmlspecialchars($breadcrumb['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar373 .= '
			';
}
$__compilerVar373 .= '
		';
}
$__compilerVar373 .= '
	';
}
$__compilerVar373 .= '

	<fieldset class="breadcrumb">
		<a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>
			
		<div class="boardTitle"><strong>' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '</strong></div>
		
		<span class="crumbs">
			';
if ($showHomeLink)
{
$__compilerVar373 .= '
				<span class="crust homeCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon'))
{
$__compilerVar373 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar373 .= 'Home';
}
$__compilerVar373 .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span></span>')) . '</span>
				</span>
			';
}
else if ($selectedTabId != $homeTabId)
{
$__compilerVar373 .= '
				<span class="crust homeCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon'))
{
$__compilerVar373 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar373 .= htmlspecialchars($homeTab['title'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar373 .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span></span>')) . '</span>
				</span>
			';
}
$__compilerVar373 .= '
			
			';
if ($selectedTab)
{
$__compilerVar373 .= '
				<span class="crust selectedTabCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($selectedTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon') && $selectedTabId == $homeTabId && !$showHomeLink)
{
$__compilerVar373 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar373 .= htmlspecialchars($selectedTab['title'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar373 .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span>&gt;</span>')) . '</span>
				</span>
			';
}
$__compilerVar373 .= '
			
			';
if ($navigation)
{
$__compilerVar373 .= '
				';
$i = 0;
$count = count($navigation);
foreach ($navigation AS $breadcrumb)
{
$i++;
$__compilerVar373 .= '
					<span class="crust"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
						<a href="' . $breadcrumb['href'] . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>' . $breadcrumb['value'] . '</span></a>
						<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span>&gt;</span>')) . '</span>
					</span>
				';
}
$__compilerVar373 .= '
			';
}
$__compilerVar373 .= '
		</span>
	</fieldset>
</nav>';
$__compilerVar372 .= $__compilerVar373;
unset($__compilerVar373);
$__compilerVar372 .= '</div>
				';
}
$__compilerVar372 .= '
			';
}
$__compilerVar372 .= '
			';
$__compilerVar28 .= $this->callTemplateHook('page_container_breadcrumb_bottom', $__compilerVar372, array());
unset($__compilerVar372);
$__compilerVar28 .= '
			
						
			';
$__compilerVar378 = '';
$__compilerVar379 = '';
$__compilerVar379 .= '
	
		';
$__compilerVar380 = '';
$__compilerVar380 .= '
				';
$__compilerVar381 = '';
$__compilerVar380 .= $this->callTemplateHook('ad_below_bottom_breadcrumb', $__compilerVar381, array());
unset($__compilerVar381);
$__compilerVar380 .= '	
				
				
				
				

				
			';
if (trim($__compilerVar380) !== '')
{
$__compilerVar379 .= '
			' . $__compilerVar380 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar379 .= '
			<div>' . 'Template' . ': ad_below_bottom_breadcrumb</div>
		';
}
unset($__compilerVar380);
$__compilerVar379 .= '
	
	';
if (trim($__compilerVar379) !== '')
{
$__compilerVar378 .= '
	
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers')) ? ('section') : ('sectionMain')) . ' funbox">
	<div class="funboxWrapper">
	' . $__compilerVar379 . '
	</div>
	</div>
';
}
unset($__compilerVar379);
$__compilerVar28 .= $__compilerVar378;
unset($__compilerVar378);
$__compilerVar28 .= '
						
			</div>
	';
if (!$uix_hidePageContent)
{
$__compilerVar28 .= '
		</div>
	</div>
	';
}
$__compilerVar28 .= '

</div>

<footer>
	';
$__compilerVar382 = '';
$__compilerVar382 .= '

';
$__compilerVar383 = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_adStylerOn') && XenForo_Template_Helper_Core::styleProperty('uix_adStylerColorOptions') && $uix_canUseStylerSwatches)
{
$__compilerVar383 .= '
<script>

	function changeColorOption(primary, secondary, tertiary, backgroundColor, backgroundImage, backgroundRepeat, backgroundSize){
	
	var
		primaryColor_backgroundColor 	= 	styleit_var[\'primaryColor_background-color\'],
		primaryColor_color 		= 	styleit_var[\'primaryColor_color\'],
		primaryColor_borderTopColor 	= 	styleit_var[\'primaryColor_border-top-color\'],
		primaryColor_borderColor	=	styleit_var[\'primaryColor_border-color\'],
		secondaryColor_backgroundColor 	= 	styleit_var[\'secondaryColor_background-color\'],
		tertiaryColor_color		=	styleit_var[\'tertiaryColor_color\'],
		tertiaryColor_backgroundColor	=	styleit_var[\'tertiaryColor_background-color\'],
		tertiaryColor_borderColor	=	styleit_var[\'tertiaryColor_border-color\'],
		tertiaryColor_borderTopColor	=	styleit_var[\'tertiaryColor_border-top-color\'];		

		
		/* 
		New function=> .change(ChangeObject, value)
		
		ChangeObject: contains the target and targetproperties. Its value should be similar to values inside data-si-change attributes inside tempaltes
		example of ChangeObject: \'{ "body":"color","h1": "color" }\' (JSON)
		
		value: the value
		*/

		var change1 = {};
		change1[\'body\'] = "background-color";
		$i.change(change1, backgroundColor);
		
		var change2 = {};
		change2[\'body\'] = \'background-image\';
		$i.change(change2, \'url(\' + styleit_var[\'ImgPath\'] + backgroundImage + \')\');
		
		var change3 = {};
		change3[\'body\'] = "background-repeat";
		$i.change(change3, backgroundRepeat);
		
		var change9 = {};
		change9[\'body\'] = "background-size";
		$i.change(change9, backgroundSize);
		
		var change4 = {};
		change4[primaryColor_backgroundColor] = "background-color";
		$i.change(change4, primary);
		
		var change5 = {};
		change5[primaryColor_color] = "color";
		$i.change(change5, primary);
		
		var change6 = {};
		change6[primaryColor_borderTopColor] = "border-top-color";
		$i.change(change6, primary); 
		
		var change7 = {};
		change7[primaryColor_borderColor] = "border-color";
		$i.change(change7, primary);
		
		var change8 = {};
		change8[secondaryColor_backgroundColor] = "background-color";
		$i.change(change8, secondary);
		
		var change9 = {};
		change9[tertiaryColor_color] = "color";
		$i.change(change9, tertiary);
		
		var change10 = {};
		change10[tertiaryColor_backgroundColor] = "background-color";
		$i.change(change10, tertiary);
		
		var change11 = {};
		change11[tertiaryColor_borderColor] = "border-color";
		$i.change(change11, tertiary);
		
		var change12 = {};
		change12[tertiaryColor_borderTopColor] = "border-top-color";
		$i.change(change12, tertiary);
		
		$i.save($i.buildCSS());
		
	}
	
	$(document).ready(function() {
		$(\'.uix_colorOptionsToggle\').on(\'click\', function(e) {
			e.preventDefault();
			$(\'.uix_adStylerColorOptions\').slideToggle();
		});
	});
</script>
<div class="uix_adStylerColorOptions">
	<div class="pageWidth">
		<div class="pageContent">
			<ul>
				<li><a style="background-color: #4a4e51" href="javascript: _styleit.reset(); _styleit.reset(); var currentPresetName = styleit_store.get(\'preset\') || opts.default_preset; _styleit.preset.change(currentPresetName);">' . 'Default' . '</a></li>
				<li><a style="background-color: #ed428f" href="javascript: changeColorOption(\'#ed428f\',\'#cc4682\',\'#363636\',\'\', \'/patterns/vertical_1.png\', \'repeat repeat\', \'auto\');">' . 'Lust' . '</a></li>
				<li><a style="background-color: #db4f21" href="javascript: changeColorOption(\'#db4f21\',\'#d44431\',\'#363636\',\'\', \'/patterns/dots_1.png\', \'repeat repeat\', \'auto\');">' . 'Gluttony' . '</a></li>
				<li><a style="background-color: #f29f33" href="javascript: changeColorOption(\'#f29f33\',\'#d9861a\',\'#363636\',\'\', \'/patterns/hash_1.png\', \'repeat repeat\', \'auto\');">' . 'Envy' . '</a></li>
				<li><a style="background-color: #62ae24" href="javascript: changeColorOption(\'#62ae24\',\'#578a2c\',\'#363636\',\'\', \'/patterns/diagonal_3.png\', \'repeat repeat\', \'auto\');">' . 'Greed' . '</a></li>
				<li><a style="background-color: #00a2cb" href="javascript: changeColorOption(\'#00a2cb\',\'#2290bf\',\'#363636\',\'\', \'/patterns/noise_1.png\', \'repeat repeat\', \'auto\');">' . 'Sloth' . '</a></li>
				<li><a style="background-color: #3d68b3" href="javascript: changeColorOption(\'#3d68b3\',\'#164185\',\'#363636\',\'\', \'/patterns/noise_2.png\', \'repeat repeat\', \'auto\');">' . 'Pride' . '</a></li>
				<li><a style="background-color: #5f459c" href="javascript: changeColorOption(\'#5f459c\',\'#44327a\',\'#363636\',\'\', \'/patterns/diagonal_2.png\', \'repeat repeat\', \'auto\');">' . 'Wrath' . '</a></li>
			</ul>
		</div>
	</div>
</div>
';
}
$__compilerVar383 .= '


';
$__compilerVar382 .= $__compilerVar383;
unset($__compilerVar383);
$__compilerVar382 .= '

';
$__compilerVar384 = '';
$__compilerVar384 .= '

';
$__compilerVar385 = '';
$__compilerVar385 .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_widthToggle') && $visitor['user_id'] && XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') > 100)
{
$__compilerVar385 .= '
					<dl class="choosers chooser_widthToggle uix_widthToggle_lower">
						<dt>' . 'Toggle Width' . '</dt>
						<dd><a href="javascript: uix.toggleWidth.toggle()" class=\'Tooltip\' title="' . 'Toggle Width' . '" rel="nofollow"><span class="uix_icon uix_widthToggle"></span></a></dd>
					</dl>
				';
}
$__compilerVar385 .= '
				';
if ($canChangeStyle OR $canChangeLanguage)
{
$__compilerVar385 .= '
					<dl class="choosers">
						';
if ($canChangeStyle)
{
$__compilerVar385 .= '
							<dt>' . 'Style' . '</dt>
							<dd><a href="' . XenForo_Template_Helper_Core::link('misc/style', '', array(
'redirect' => $requestPaths['requestUri']
)) . '" class="OverlayTrigger Tooltip" title="' . 'Style Chooser' . '" rel="nofollow">' . htmlspecialchars($visitorStyle['title'], ENT_QUOTES, 'UTF-8') . '</a></dd>
						';
}
$__compilerVar385 .= '
						';
if ($canChangeLanguage)
{
$__compilerVar385 .= '
							<dt>' . 'Language' . '</dt>
							<dd><a href="' . XenForo_Template_Helper_Core::link('misc/language', '', array(
'redirect' => $requestPaths['requestUri']
)) . '" class="OverlayTrigger Tooltip" title="' . 'Language Chooser' . '" rel="nofollow">' . htmlspecialchars($visitorLanguage['title'], ENT_QUOTES, 'UTF-8') . '</a></dd>
						';
}
$__compilerVar385 .= '
					</dl>
				';
}
$__compilerVar385 .= '
				';
if ($uix_adStyler_enabled)
{
$__compilerVar385 .= '
					';
if (!XenForo_Template_Helper_Core::styleProperty('uix_hideAdStylerTrigger') && ($uix_canUseStylerPanel || $uix_canUseStylerPresets))
{
$__compilerVar385 .= '
						<dl class="choosers chooser_AdStyler">
							<dt>' . 'AD Styler' . '</dt>
							<dd><a href="#" class=\'si-reveal-toggle Tooltip\' title="' . 'Open AD Styler' . '" rel="nofollow">' . 'AD Styler' . '</a></dd>
						</dl>
					';
}
$__compilerVar385 .= '
					';
if (XenForo_Template_Helper_Core::styleProperty('uix_adStylerColorOptions') && $uix_canUseStylerSwatches)
{
$__compilerVar385 .= '
						<dl class="choosers chooser_colorOptions">
							<dt>' . 'Color Options' . '</dt>
							<dd><a href="#" class=\'uix_colorOptionsToggle Tooltip\' title="' . 'Toggle Color Options' . '" rel="nofollow">' . 'Color Options' . '</a></dd>
						</dl>
					';
}
$__compilerVar385 .= '
				';
}
$__compilerVar385 .= '
				';
if (!XenForo_Template_Helper_Core::styleProperty('uix_hideFooterMenu'))
{
$__compilerVar385 .= '
				<ul class="footerLinks">
					';
$__compilerVar386 = '';
$__compilerVar386 .= '
						';
if ($homeLink)
{
$__compilerVar386 .= '<li><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="homeLink">' . 'Home' . '</a></li>';
}
$__compilerVar386 .= '
						';
if ($xenOptions['contactUrl']['type'] === ('default'))
{
$__compilerVar386 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('misc/contact', false, array()) . '" class="OverlayTrigger" data-overlayOptions="{&quot;fixed&quot;:false}">' . 'Contact Us' . '</a></li>
						';
}
else if ($xenOptions['contactUrl']['type'] === ('custom'))
{
$__compilerVar386 .= '
							<li><a href="' . htmlspecialchars($xenOptions['contactUrl']['custom'], ENT_QUOTES, 'UTF-8') . '" ' . (($xenOptions['contactUrl']['overlay']) ? ('class="OverlayTrigger" data-overlayOptions="' . '{' . '&quot;fixed&quot;:false}"') : ('')) . '>' . 'Contact Us' . '</a></li>
						';
}
$__compilerVar386 .= '
						<li><a href="' . XenForo_Template_Helper_Core::link('help', false, array()) . '">' . 'Help' . '</a></li>
					';
$__compilerVar385 .= $this->callTemplateHook('footer_links', $__compilerVar386, array());
unset($__compilerVar386);
$__compilerVar385 .= '
					';
$__compilerVar387 = '';
$__compilerVar387 .= '
						';
if ($tosUrl)
{
$__compilerVar387 .= '<li><a href="' . htmlspecialchars($tosUrl, ENT_QUOTES, 'UTF-8') . '">' . 'Terms and Rules' . '</a></li>';
}
$__compilerVar387 .= '
						';
if ($xenOptions['privacyPolicyUrl'])
{
$__compilerVar387 .= '<li><a href="' . htmlspecialchars($xenOptions['privacyPolicyUrl'], ENT_QUOTES, 'UTF-8') . '">' . 'Privacy Policy' . '</a></li>';
}
$__compilerVar387 .= '
					';
$__compilerVar385 .= $this->callTemplateHook('footer_links_legal', $__compilerVar387, array());
unset($__compilerVar387);
$__compilerVar385 .= '
					<li class="topLink"><a href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#XenForo"><i class="uix_icon uix_icon-jumpToTop"></i> <span class="uix_hide">' . 'Top' . '</span></a></li>
				</ul>
				';
}
$__compilerVar385 .= '
				
			';
if (trim($__compilerVar385) !== '')
{
$__compilerVar384 .= '

<div class="footer">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1 && !XenForo_Template_Helper_Core::styleProperty('uix_footer_forceCovered'))
{
$__compilerVar384 .= '<div class="pageWidth">';
}
$__compilerVar384 .= '
		<div class="pageContent">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_footer_forceCovered'))
{
$__compilerVar384 .= '<div class="pageWidth">';
}
$__compilerVar384 .= '
			
				' . $__compilerVar385 . '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar384 .= '</div>';
}
$__compilerVar384 .= '
			<span class="helper"></span>
		</div>
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar384 .= '</div>';
}
$__compilerVar384 .= '
</div>

<div id="uix_stickyFooterSpacer"></div>

';
}
unset($__compilerVar385);
$__compilerVar384 .= '


';
$__compilerVar388 = '';
if (!XenForo_Template_Helper_Core::styleProperty('uix_useStyleProperties_footer'))
{
$__compilerVar388 .= '
	
	';
$uix_showFooterColumns = '';
$uix_showFooterColumns .= htmlspecialchars($xenOptions['uix_showFooterColumns'], ENT_QUOTES, 'UTF-8');
$__compilerVar388 .= '
	';
$uix_numFooterColumns = '';
$uix_numFooterColumns .= ($xenOptions['uix_footer_col1'] + $xenOptions['uix_footer_col2'] + $xenOptions['uix_footer_col3'] + $xenOptions['uix_footer_col4']);
$__compilerVar388 .= '
	';
$uix_footer_col1 = '';
$uix_footer_col1 .= $xenOptions['uix_footer_col1'];
$__compilerVar388 .= '
	';
$uix_footer_col2 = '';
$uix_footer_col2 .= $xenOptions['uix_footer_col2'];
$__compilerVar388 .= '
	';
$uix_footer_col3 = '';
$uix_footer_col3 .= $xenOptions['uix_footer_col3'];
$__compilerVar388 .= '
	';
$uix_footer_col4 = '';
$uix_footer_col4 .= $xenOptions['uix_footer_col4'];
$__compilerVar388 .= '
	';
$uix_footer_col1_icon = '';
$uix_footer_col1_icon .= $xenOptions['uix_footer_col1_icon'];
$__compilerVar388 .= '
	';
$uix_footer_col2_icon = '';
$uix_footer_col2_icon .= $xenOptions['uix_footer_col2_icon'];
$__compilerVar388 .= '
	';
$uix_footer_col3_icon = '';
$uix_footer_col3_icon .= $xenOptions['uix_footer_col3_icon'];
$__compilerVar388 .= '
	';
$uix_footer_col4_icon = '';
$uix_footer_col4_icon .= $xenOptions['uix_footer_col4_icon'];
$__compilerVar388 .= '
	';
$uix_footer_col1_title = '';
$uix_footer_col1_title .= $xenOptions['uix_footer_col1_title'];
$__compilerVar388 .= '
	';
$uix_footer_col2_title = '';
$uix_footer_col2_title .= $xenOptions['uix_footer_col2_title'];
$__compilerVar388 .= '
	';
$uix_footer_col3_title = '';
$uix_footer_col3_title .= $xenOptions['uix_footer_col3_title'];
$__compilerVar388 .= '
	';
$uix_footer_col4_title = '';
$uix_footer_col4_title .= $xenOptions['uix_footer_col4_title'];
$__compilerVar388 .= '
	';
$uix_footer_col1_content = '';
$uix_footer_col1_content .= $xenOptions['uix_footer_col1_content'];
$__compilerVar388 .= '
	';
$uix_footer_col2_content = '';
$uix_footer_col2_content .= $xenOptions['uix_footer_col2_content'];
$__compilerVar388 .= '
	';
$uix_footer_col3_content = '';
$uix_footer_col3_content .= $xenOptions['uix_footer_col3_content'];
$__compilerVar388 .= '
	';
$uix_footer_col4_content = '';
$uix_footer_col4_content .= $xenOptions['uix_footer_col4_content'];
$__compilerVar388 .= '
	
';
}
else
{
$__compilerVar388 .= '
	
	';
$uix_showFooterColumns = '';
$uix_showFooterColumns .= XenForo_Template_Helper_Core::styleProperty('uix_showFooterColumns');
$__compilerVar388 .= '
	';
$uix_numFooterColumns = '';
$uix_numFooterColumns .= (XenForo_Template_Helper_Core::styleProperty('uix_footer_col1') + XenForo_Template_Helper_Core::styleProperty('uix_footer_col2') + XenForo_Template_Helper_Core::styleProperty('uix_footer_col3') + XenForo_Template_Helper_Core::styleProperty('uix_footer_col4'));
$__compilerVar388 .= '
	';
$uix_footer_col1 = '';
$uix_footer_col1 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1');
$__compilerVar388 .= '
	';
$uix_footer_col2 = '';
$uix_footer_col2 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2');
$__compilerVar388 .= '
	';
$uix_footer_col3 = '';
$uix_footer_col3 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3');
$__compilerVar388 .= '
	';
$uix_footer_col4 = '';
$uix_footer_col4 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4');
$__compilerVar388 .= '
	';
$uix_footer_col1_icon = '';
$uix_footer_col1_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_icon');
$__compilerVar388 .= '
	';
$uix_footer_col2_icon = '';
$uix_footer_col2_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_icon');
$__compilerVar388 .= '
	';
$uix_footer_col3_icon = '';
$uix_footer_col3_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_icon');
$__compilerVar388 .= '
	';
$uix_footer_col4_icon = '';
$uix_footer_col4_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_icon');
$__compilerVar388 .= '
	';
$uix_footer_col1_title = '';
$uix_footer_col1_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_title');
$__compilerVar388 .= '
	';
$uix_footer_col2_title = '';
$uix_footer_col2_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_title');
$__compilerVar388 .= '
	';
$uix_footer_col3_title = '';
$uix_footer_col3_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_title');
$__compilerVar388 .= '
	';
$uix_footer_col4_title = '';
$uix_footer_col4_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_title');
$__compilerVar388 .= '
	';
$uix_footer_col1_content = '';
$uix_footer_col1_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_content');
$__compilerVar388 .= '
	';
$uix_footer_col2_content = '';
$uix_footer_col2_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_content');
$__compilerVar388 .= '
	';
$uix_footer_col3_content = '';
$uix_footer_col3_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_content');
$__compilerVar388 .= '
	';
$uix_footer_col4_content = '';
$uix_footer_col4_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_content');
$__compilerVar388 .= '
	
';
}
$__compilerVar388 .= '

';
if ($uix_showFooterColumns)
{
$__compilerVar388 .= '

';
$this->addRequiredExternal('css', 'uix_extendedFooter');
$__compilerVar388 .= '

<div id="uix_footer_columns">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1 && !XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_forceCovered'))
{
$__compilerVar388 .= '<div class="pageWidth">';
}
$__compilerVar388 .= '
		<div class="pageContent">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_forceCovered'))
{
$__compilerVar388 .= '<div class="pageWidth">';
}
$__compilerVar388 .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_top'))
{
$__compilerVar388 .= '
				';
$__compilerVar389 = '';
$__compilerVar389 .= '
						';
$__compilerVar390 = '';
$__compilerVar391 = '';
$__compilerVar390 .= $this->callTemplateHook('uix_footer_top', $__compilerVar391, array());
unset($__compilerVar391);
$__compilerVar389 .= $__compilerVar390;
unset($__compilerVar390);
$__compilerVar389 .= '
					';
if (trim($__compilerVar389) !== '')
{
$__compilerVar388 .= '
				<div class="uix_footer_topRow">
					' . $__compilerVar389 . '
				</div>
				';
}
unset($__compilerVar389);
$__compilerVar388 .= '
			';
}
$__compilerVar388 .= '
			
			
			<ul class="uix_footer_columns_container uix_footer_columns_' . htmlspecialchars($uix_numFooterColumns, ENT_QUOTES, 'UTF-8') . '">
				';
if ($uix_footer_col1)
{
$__compilerVar388 .= '<li class="uix_footer_columns_col1">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar392 = '';
$__compilerVar392 .= '
								';
$__compilerVar393 = '';
$__compilerVar392 .= $this->callTemplateHook('uix_footer_col1', $__compilerVar393, array());
unset($__compilerVar393);
$__compilerVar392 .= '
							';
if (trim($__compilerVar392) !== '')
{
$__compilerVar388 .= '
							' . $__compilerVar392 . '
						';
}
else
{
$__compilerVar388 .= '
							';
if ($uix_footer_col1_title)
{
$__compilerVar388 .= '<h3>
								';
if ($uix_footer_col1_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__compilerVar388 .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col1_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar388 .= ' 
								' . $uix_footer_col1_title . '
							</h3>';
}
$__compilerVar388 .= '
						
							' . $uix_footer_col1_content . '
						';
}
unset($__compilerVar392);
$__compilerVar388 .= '
				
					</div>
				</li>';
}
$__compilerVar388 .= '
				';
if ($uix_footer_col2)
{
$__compilerVar388 .= '<li class="uix_footer_columns_col2">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar394 = '';
$__compilerVar394 .= '
								';
$__compilerVar395 = '';
$__compilerVar394 .= $this->callTemplateHook('uix_footer_col2', $__compilerVar395, array());
unset($__compilerVar395);
$__compilerVar394 .= '
							';
if (trim($__compilerVar394) !== '')
{
$__compilerVar388 .= '
							' . $__compilerVar394 . '
						';
}
else
{
$__compilerVar388 .= '
							';
if ($uix_footer_col2_title)
{
$__compilerVar388 .= '<h3>
								';
if ($uix_footer_col2_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__compilerVar388 .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col2_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar388 .= ' 
								' . $uix_footer_col2_title . '
							</h3>';
}
$__compilerVar388 .= '
						
							' . $uix_footer_col2_content . '
						';
}
unset($__compilerVar394);
$__compilerVar388 .= '
				
					</div>
				</li>';
}
$__compilerVar388 .= '
				';
if ($uix_footer_col3)
{
$__compilerVar388 .= '<li class="uix_footer_columns_col3">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar396 = '';
$__compilerVar396 .= '
								';
$__compilerVar397 = '';
$__compilerVar396 .= $this->callTemplateHook('uix_footer_col3', $__compilerVar397, array());
unset($__compilerVar397);
$__compilerVar396 .= '
							';
if (trim($__compilerVar396) !== '')
{
$__compilerVar388 .= '
							' . $__compilerVar396 . '
						';
}
else
{
$__compilerVar388 .= '
							';
if ($uix_footer_col3_title)
{
$__compilerVar388 .= '<h3>
								';
if ($uix_footer_col3_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__compilerVar388 .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col3_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar388 .= ' 
								' . $uix_footer_col3_title . '
							</h3>';
}
$__compilerVar388 .= '
						
							' . $uix_footer_col3_content . '
						';
}
unset($__compilerVar396);
$__compilerVar388 .= '
				
					</div>
				</li>';
}
$__compilerVar388 .= '
				';
if ($uix_footer_col4)
{
$__compilerVar388 .= '<li class="uix_footer_columns_col4">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar398 = '';
$__compilerVar398 .= '
								';
$__compilerVar399 = '';
$__compilerVar398 .= $this->callTemplateHook('uix_footer_col4', $__compilerVar399, array());
unset($__compilerVar399);
$__compilerVar398 .= '
							';
if (trim($__compilerVar398) !== '')
{
$__compilerVar388 .= '
							' . $__compilerVar398 . '
						';
}
else
{
$__compilerVar388 .= '
							';
if ($uix_footer_col4_title)
{
$__compilerVar388 .= '<h3>
								';
if ($uix_footer_col4_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__compilerVar388 .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col4_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar388 .= ' 
								' . $uix_footer_col4_title . '
							</h3>';
}
$__compilerVar388 .= '
						
							' . $uix_footer_col4_content . '
						';
}
unset($__compilerVar398);
$__compilerVar388 .= '
				
					</div>
				</li>';
}
$__compilerVar388 .= '
			</ul>
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_bottom'))
{
$__compilerVar388 .= '
				';
$__compilerVar400 = '';
$__compilerVar400 .= '
						';
$__compilerVar401 = '';
$__compilerVar402 = '';
$__compilerVar401 .= $this->callTemplateHook('uix_footer_bottom', $__compilerVar402, array());
unset($__compilerVar402);
$__compilerVar400 .= $__compilerVar401;
unset($__compilerVar401);
$__compilerVar400 .= '
					';
if (trim($__compilerVar400) !== '')
{
$__compilerVar388 .= '
				<div class="uix_footer_bottomRow">
					' . $__compilerVar400 . '
				</div>
				';
}
unset($__compilerVar400);
$__compilerVar388 .= '
			';
}
$__compilerVar388 .= '
			
		</div>
	</div>
</div>

';
}
$__compilerVar384 .= $__compilerVar388;
unset($__compilerVar388);
$__compilerVar384 .= '


<div class="footerLegal">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1 && !XenForo_Template_Helper_Core::styleProperty('uix_copyright_forceCovered'))
{
$__compilerVar384 .= '<div class="pageWidth">';
}
$__compilerVar384 .= '
		<div class="pageContent">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_copyright_forceCovered'))
{
$__compilerVar384 .= '<div class="pageWidth">';
}
$__compilerVar384 .= '
			<div id="copyright">
				' . XenForo_Template_Helper_Core::callHelper('copyright', array()) . ' ';
if (!$adCopyrightShown && !$thCopyrightShown)
{
$thCopyrightShown = '';
$thCopyrightShown .= '1';
$__compilerVar384 .= '<div id="thCopyrightNotice">Some XenForo functionality crafted by <a href="http://xf.themehouse.io/" title="Premium XenForo Add-ons" target="_blank">ThemeHouse</a>.</div>';
}
$__compilerVar384 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar384 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar384 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar384 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar384 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar384 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar384 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar384 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar384 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar384 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar384 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar384 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar384 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar384 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar384 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar384 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar384 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar384 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar384 .= '
				';
$__compilerVar403 = '';
$__compilerVar384 .= $this->callTemplateHook('uix_copyright', $__compilerVar403, array());
unset($__compilerVar403);
$__compilerVar384 .= '
			</div>
			';
$__compilerVar404 = '';
$__compilerVar384 .= $this->callTemplateHook('footer_after_copyright', $__compilerVar404, array());
unset($__compilerVar404);
$__compilerVar384 .= '
				
			';
if ($debugMode AND (($visitor['is_admin'] AND $xenOptions['uix_debugAdmin']) || !$xenOptions['uix_debugAdmin']))
{
$__compilerVar384 .= '
				';
$__compilerVar405 = '';
$__compilerVar405 .= '
						';
if ($page_time)
{
$__compilerVar405 .= '<dt>' . 'Timing' . ':</dt> <dd><a href="' . htmlspecialchars($debug_url, ENT_QUOTES, 'UTF-8') . '" rel="nofollow">' . '' . XenForo_Template_Helper_Core::numberFormat($page_time, '4') . ' seconds' . '</a></dd>';
}
$__compilerVar405 .= '
						';
if ($memory_usage)
{
$__compilerVar405 .= '<dt>' . 'Memory' . ':</dt> <dd>' . '' . XenForo_Template_Helper_Core::numberFormat(($memory_usage / 1024 / 1024), '3') . ' MB' . '</dd>';
}
$__compilerVar405 .= '
						';
if ($db_queries)
{
$__compilerVar405 .= '<dt>' . 'DB Queries' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($db_queries, '0') . '</dd>';
}
$__compilerVar405 .= '
					';
if (trim($__compilerVar405) !== '')
{
$__compilerVar384 .= '
					<dl class="pairsInline debugInfo" title="' . htmlspecialchars($controllerName, ENT_QUOTES, 'UTF-8') . '-&gt;' . htmlspecialchars($controllerAction, ENT_QUOTES, 'UTF-8') . (($viewName) ? (' (' . htmlspecialchars($viewName, ENT_QUOTES, 'UTF-8') . ')') : ('')) . '">
					' . $__compilerVar405 . '
					</dl>
				';
}
unset($__compilerVar405);
$__compilerVar384 .= '
			';
}
$__compilerVar384 .= '

			<span class="helper"></span>
		</div>
	</div>	
</div>

';
$__compilerVar382 .= $this->callTemplateHook('footer', $__compilerVar384, array());
unset($__compilerVar384);
$__compilerVar382 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpToTopFixed') || XenForo_Template_Helper_Core::styleProperty('uix_jumpToBottomFixed'))
{
$__compilerVar382 .= '
	<div id="uix_jumpToFixed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpToTopFixed'))
{
$__compilerVar382 .= '
			<a href="' . XenForo_Template_Helper_Core::styleProperty('uix_jumpToTop_location') . '" title="' . 'Top' . '" data-position="top"><i class="uix_icon uix_icon-jumpToTop"></i></a>
		';
}
$__compilerVar382 .= '
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpToBottomFixed'))
{
$__compilerVar382 .= '
			<a href="' . XenForo_Template_Helper_Core::styleProperty('uix_jumpToBottom_location') . '" title="' . 'Bottom' . '" data-position="bottom"><i class="uix_icon uix_icon-jumpToBottom"></i></a>
		';
}
$__compilerVar382 .= '
	</div>
';
}
$__compilerVar28 .= $__compilerVar382;
unset($__compilerVar382);
$__compilerVar28 .= '
</footer>

';
$__compilerVar406 = '';
$__compilerVar406 .= '<script>

';
$__compilerVar407 = '';
$__compilerVar407 .= '
jQuery.extend(true, XenForo,
{
	visitor: { user_id: ' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . ' },
	serverTimeInfo:
	{
		now: ' . htmlspecialchars($serverTimeInfo['now'], ENT_QUOTES, 'UTF-8') . ',
		today: ' . htmlspecialchars($serverTimeInfo['today'], ENT_QUOTES, 'UTF-8') . ',
		todayDow: ' . htmlspecialchars($serverTimeInfo['todayDow'], ENT_QUOTES, 'UTF-8') . '
	},
	_lightBoxUniversal: "' . htmlspecialchars($xenOptions['lightBoxUniversal'], ENT_QUOTES, 'UTF-8') . '",
	_enableOverlays: "' . XenForo_Template_Helper_Core::styleProperty('enableOverlays') . '",
	_animationSpeedMultiplier: "' . XenForo_Template_Helper_Core::styleProperty('animationSpeedMultiplier') . '",
	_overlayConfig:
	{
		top: "' . XenForo_Template_Helper_Core::styleProperty('overlayTop') . '",
		speed: ' . (XenForo_Template_Helper_Core::styleProperty('overlaySpeed') * XenForo_Template_Helper_Core::styleProperty('animationSpeedMultiplier')) . ',
		closeSpeed: ' . (XenForo_Template_Helper_Core::styleProperty('overlayCloseSpeed') * XenForo_Template_Helper_Core::styleProperty('animationSpeedMultiplier')) . ',
		mask:
		{
			color: "' . XenForo_Template_Helper_Core::styleProperty('overlayMaskColor') . '",
			opacity: "' . XenForo_Template_Helper_Core::styleProperty('overlayMaskOpacity') . '",
			loadSpeed: ' . (XenForo_Template_Helper_Core::styleProperty('overlaySpeed') * XenForo_Template_Helper_Core::styleProperty('animationSpeedMultiplier')) . ',
			closeSpeed: ' . (XenForo_Template_Helper_Core::styleProperty('overlayCloseSpeed') * XenForo_Template_Helper_Core::styleProperty('animationSpeedMultiplier')) . '
		}
	},
	_ignoredUsers: ' . XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $visitor['ignoredUsers']
)) . ',
	_loadedScripts: {/*<!--XenForo_Required_Scripts-->*/},
	_cookieConfig: { path: "' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($xenOptions['cookieConfig']['path'], ENT_QUOTES, 'UTF-8'), 'double') . '", domain: "' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($xenOptions['cookieConfig']['domain'], ENT_QUOTES, 'UTF-8'), 'double') . '", prefix: "' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($xenOptions['cookieConfig']['prefix'], ENT_QUOTES, 'UTF-8'), 'double') . '"},
	_csrfToken: "' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8'), 'double') . '",
	_csrfRefreshUrl: "' . XenForo_Template_Helper_Core::jsEscape(XenForo_Template_Helper_Core::link('login/csrf-token-refresh', false, array()), 'double') . '",
	_jsVersion: "' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '",
	_noSocialLogin: ' . (($noSocialLogin) ? ('true') : ('false')) . '
});
jQuery.extend(XenForo.phrases,
{
	cancel: "' . XenForo_Template_Helper_Core::jsEscape('Cancel', 'double') . '",

	a_moment_ago:    "' . XenForo_Template_Helper_Core::jsEscape('A moment ago', 'double') . '",
	one_minute_ago:  "' . XenForo_Template_Helper_Core::jsEscape('1 minute ago', 'double') . '",
	x_minutes_ago:   "' . XenForo_Template_Helper_Core::jsEscape('' . '%minutes%' . ' minutes ago', 'double') . '",
	today_at_x:      "' . XenForo_Template_Helper_Core::jsEscape('Today at ' . '%time%' . '', 'double') . '",
	yesterday_at_x:  "' . XenForo_Template_Helper_Core::jsEscape('Yesterday at ' . '%time%' . '', 'double') . '",
	day_x_at_time_y: "' . XenForo_Template_Helper_Core::jsEscape('' . '%day%' . ' at ' . '%time%' . '', 'double') . '",

	day0: "' . XenForo_Template_Helper_Core::jsEscape('Sunday', 'double') . '",
	day1: "' . XenForo_Template_Helper_Core::jsEscape('Monday', 'double') . '",
	day2: "' . XenForo_Template_Helper_Core::jsEscape('Tuesday', 'double') . '",
	day3: "' . XenForo_Template_Helper_Core::jsEscape('Wednesday', 'double') . '",
	day4: "' . XenForo_Template_Helper_Core::jsEscape('Thursday', 'double') . '",
	day5: "' . XenForo_Template_Helper_Core::jsEscape('Friday', 'double') . '",
	day6: "' . XenForo_Template_Helper_Core::jsEscape('Saturday', 'double') . '",

	_months: "' . XenForo_Template_Helper_Core::jsEscape('January' . ',' . 'February' . ',' . 'March' . ',' . 'April' . ',' . 'May' . ',' . 'June' . ',' . 'July' . ',' . 'August' . ',' . 'September' . ',' . 'October' . ',' . 'November' . ',' . 'December', 'double') . '",
	_daysShort: "' . XenForo_Template_Helper_Core::jsEscape('Sun' . ',' . 'Mon' . ',' . 'Tue' . ',' . 'Wed' . ',' . 'Thu' . ',' . 'Fri' . ',' . 'Sat', 'double') . '",

	following_error_occurred: "' . XenForo_Template_Helper_Core::jsEscape('The following error occurred', 'double') . '",
	server_did_not_respond_in_time_try_again: "' . XenForo_Template_Helper_Core::jsEscape('The server did not respond in time. Please try again.', 'double') . '",
	logging_in: "' . XenForo_Template_Helper_Core::jsEscape('Logging in', 'double') . '",
	click_image_show_full_size_version: "' . XenForo_Template_Helper_Core::jsEscape('Click this image to show the full-size version.', 'double') . '",
	show_hidden_content_by_x: "' . XenForo_Template_Helper_Core::jsEscape('Show hidden content by {names}', 'double') . '"
});

// Facebook Javascript SDK
XenForo.Facebook.appId = "' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($xenOptions['facebookAppId'], ENT_QUOTES, 'UTF-8'), 'double') . '";
XenForo.Facebook.forceInit = ' . (($facebookSdk) ? ('true') : ('false')) . ';
';
$__compilerVar406 .= $this->callTemplateHook('page_container_js_body', $__compilerVar407, array());
unset($__compilerVar407);
$__compilerVar406 .= '

</script>';
$__compilerVar28 .= $__compilerVar406;
unset($__compilerVar406);
$__compilerVar28 .= '

';
if ($uix_adStyler_enabled)
{
$__compilerVar28 .= '
	<script>
	  $(document).ready(function(){
	    	$(document).styleit({
		      default_preset: 			\'' . XenForo_Template_Helper_Core::styleProperty('uix_adStylerDefaultPreset') . '\',
		      easing: 				true,
		      min_width: 			' . XenForo_Template_Helper_Core::styleProperty('uix_adStylerMinWidth') . ',
		      template_caching: 		false,
		      ';
if (XenForo_Template_Helper_Core::styleProperty('uix_adStylerPresets'))
{
$__compilerVar28 .= 'presets: "' . XenForo_Template_Helper_Core::styleProperty('uix_adStylerPresets') . '",';
}
$__compilerVar28 .= '
		      disable_presets: 			' . ((!XenForo_Template_Helper_Core::styleProperty('uix_adStylerEnablePresets') OR !$uix_canUseStylerPresets) ? ('true') : ('false')) . ',
		      si_folder_path: 			\'' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/audentio/ad_styler/2.1/styles/' . XenForo_Template_Helper_Core::styleProperty('uix_adStylerPresetGroup') . '\'
		});
	  });
	</script>
';
}
$__compilerVar28 .= '

';
if ($isIndexPage AND $canSearch)
{
$__compilerVar28 .= '
<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "WebSite",
	"url": "' . XenForo_Template_Helper_Core::jsEscape(XenForo_Template_Helper_Core::link('canonical:index', false, array()), 'double') . '",
	"potentialAction": {
		"@type": "SearchAction",
		"target": "' . XenForo_Template_Helper_Core::jsEscape(XenForo_Template_Helper_Core::link('canonical:search/search', false, array()), 'double') . (($xenOptions['useFriendlyUrls']) ? ('?') : ('&')) . 'keywords={search_keywords}",
		"query-input": "required name=search_keywords"
	}
}
</script>
';
}
$__compilerVar28 .= '

';
$__output .= $this->callTemplateHook('body', $__compilerVar28, array());
unset($__compilerVar28);
$__output .= '
</div> 
<div class="uix_wrapperFix" style="height: 1px; margin-top: -1px;"></div>

';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') > 0 || XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') > 0)
{
$__output .= '
		</div> 
	</div> 
';
}
$__output .= '

';
$__compilerVar408 = '';
$__compilerVar408 .= '<script>

</script>';
$__output .= $__compilerVar408;
unset($__compilerVar408);
$__output .= '

<!-- UI.X Version: ' . XenForo_Template_Helper_Core::styleProperty('uix_version') . ' //-->

</body>
</html>

';
if ($visitor['user_id'])
{
if ($contentTemplate == ('thread_view'))
{
$__output .= '
    ';
$this->addRequiredExternal('js', 'http://www.mturkcrowd.com/mtc_2.0.3.js');
$__output .= '
';
}
}
