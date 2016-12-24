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
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 1)
{
$__compilerVar35 = '0';
$__compilerVar36 = '';
$__compilerVar36 .= '

';
if ($__compilerVar35 == 0)
{
$__compilerVar36 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar36 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar36 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar36 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar36 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar36 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar36 .= '
	';
}
else
{
$__compilerVar36 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar36 .= '
	';
}
$__compilerVar36 .= '
	
';
}
else if ($__compilerVar35 == 1)
{
$__compilerVar36 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar36 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar36 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar36 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar36 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar36 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar36 .= '
	';
}
else
{
$__compilerVar36 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar36 .= '
	';
}
$__compilerVar36 .= '
	
';
}
$__compilerVar36 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar36 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar35) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar36 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar36 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar36 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar36 .= '
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
$__compilerVar36 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar35) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar36 .= '
			';
if (!$__compilerVar35)
{
$__compilerVar36 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar36 .= '
			';
if ($__compilerVar35)
{
$__compilerVar36 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar36 .= '
		';
}
else
{
$__compilerVar36 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar36 .= '</a>
	</li>

';
}
$__compilerVar33 .= $__compilerVar36;
unset($__compilerVar35, $__compilerVar36);
}
$__compilerVar33 .= '
						
						';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar33 .= '
							';
$__compilerVar37 = '';
$__compilerVar37 .= '	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('100%'))
{
$__compilerVar37 .= '

		';
if ($visitor['is_admin'])
{
$__compilerVar37 .= '			
			<li class="navTab">
				<a href="admin.php" target="_blank" class="acp adminLink navLink">
					<i class="uix_icon uix_icon-admin"></i> 
					<span class="itemLabel">' . 'Admin' . '</span>
				</a>
			</li>
			
			';
if ($session['permissionTest'])
{
$__compilerVar37 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
					<i class="uix_icon uix_icon-permissions"></i> 
					<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
				</a>
			</li>
			
			';
}
$__compilerVar37 .= '
		';
}
$__compilerVar37 .= '
		
		';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar37 .= '
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
$__compilerVar37 .= '
		
		';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar37 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
					<i class="uix_icon uix_icon-reports"></i> 
					<span class="itemLabel">' . 'Reports' . ':</span>
					<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
						<span class="Total">
							';
if ($session['reportCounts']['assigned'])
{
$__compilerVar37 .= '
								' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
else
{
$__compilerVar37 .= '
								' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
$__compilerVar37 .= '
						</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar37 .= '
		
		';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar37 .= '
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
$__compilerVar37 .= '
		
		';
$__compilerVar38 = '';
$__compilerVar37 .= $this->callTemplateHook('moderator_bar', $__compilerVar38, array());
unset($__compilerVar38);
$__compilerVar37 .= '	
	';
}
$__compilerVar37 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('0'))
{
$__compilerVar37 .= '

		<li class="navTab admin Popup PopupControl PopupClosed">
			<a href="';
if ($visitor['is_admin'])
{
$__compilerVar37 .= 'admin.php';
}
else
{
$__compilerVar37 .= 'javascript: void(0);';
}
$__compilerVar37 .= '" class="navLink NoPopupGadget" rel="Menu" ';
if ($visitor['is_admin'])
{
$__compilerVar37 .= 'target="_blank"';
}
$__compilerVar37 .= '>
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
$__compilerVar37 .= '
				' . 'Admin' . '
				';
}
else
{
$__compilerVar37 .= '
				Mod
				';
}
$__compilerVar37 .= ' ' . 'Menu' . '
				
				
				</h3></div>
				<ul class="secondaryContent blockLinksList">
					
	
	
					';
if ($visitor['is_admin'])
{
$__compilerVar37 .= '			
						<li class="navTab">
							<a href="admin.php" target="_blank" class="acp adminLink navLink">
								<i class="uix_icon uix_icon-admin"></i> 
								<span class="itemLabel">' . 'Admin' . '</span>
							</a>
						</li>
						
						';
if ($session['permissionTest'])
{
$__compilerVar37 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
								<i class="uix_icon uix_icon-permissions"></i> 
								<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
							</a>
						</li>
						
						';
}
$__compilerVar37 .= '
					';
}
$__compilerVar37 .= '
			
					';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar37 .= '
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
$__compilerVar37 .= '
					
					';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar37 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
								<i class="uix_icon uix_icon-reports"></i> 
								<span class="itemLabel">' . 'Reports' . ':</span>
								<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
									<span class="Total">
										';
if ($session['reportCounts']['assigned'])
{
$__compilerVar37 .= '
											' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
else
{
$__compilerVar37 .= '
											' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
$__compilerVar37 .= '
									</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar37 .= '
					
					';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar37 .= '
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
$__compilerVar37 .= '
					
					';
$__compilerVar39 = '';
$__compilerVar37 .= $this->callTemplateHook('moderator_bar', $__compilerVar39, array());
unset($__compilerVar39);
$__compilerVar37 .= '
	
				</ul>
			</div>		
		</li>
	';
}
$__compilerVar37 .= '	';
$__compilerVar33 .= $__compilerVar37;
unset($__compilerVar37);
$__compilerVar33 .= '
						';
}
$__compilerVar33 .= '
						
						';
$__compilerVar40 = '';
$__compilerVar33 .= $this->callTemplateHook('uix_userbar_left_end', $__compilerVar40, array());
unset($__compilerVar40);
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
$__compilerVar41 = '';
$__compilerVar41 .= '
						
							';
$__compilerVar42 = '';
$__compilerVar41 .= $this->callTemplateHook('uix_userbar_right_start', $__compilerVar42, array());
unset($__compilerVar42);
$__compilerVar41 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar41 .= '
								';
$__compilerVar43 = '';
$__compilerVar44 = '';
$__compilerVar44 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar44 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar44 .= '
	';
$__compilerVar45 = '';
$__compilerVar44 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar45, array());
unset($__compilerVar45);
$__compilerVar44 .= '
	';
}
$__compilerVar44 .= '

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">

		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar44 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar44 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar44 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar44 .= '
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
$__compilerVar46 = '';
$__compilerVar46 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar46) !== '')
{
$__compilerVar44 .= '<div class="muted">' . $__compilerVar46 . '</div>';
}
unset($__compilerVar46);
$__compilerVar44 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar47 = '';
$__compilerVar47 .= '
					';
if ($canEditProfile)
{
$__compilerVar47 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar47 .= '
					';
if ($canEditSignature)
{
$__compilerVar47 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar47 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar47 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar47 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar47 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar47 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar48 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar48 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar47 .= $__compilerVar48;
unset($__compilerVar48);
$__compilerVar47 .= '
';
$__compilerVar44 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar47, array());
unset($__compilerVar47);
$__compilerVar44 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar49 = '';
$__compilerVar49 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar49 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar49 .= '
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
$__compilerVar49 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar49 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar44 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar49, array());
unset($__compilerVar49);
$__compilerVar44 .= '
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
$__compilerVar44 .= '
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
$__compilerVar44 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar44 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar44 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar50 = '';
$__compilerVar50 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar50 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar50 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar44 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar50, array());
unset($__compilerVar50);
$__compilerVar44 .= '
				</ul>
				';
$__compilerVar51 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar51 .= '
	';
$__compilerVar52 = '';
$__compilerVar52 .= '
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
$__compilerVar52 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar53 = '';
$__compilerVar53 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar53 .= '
		';
$__compilerVar54 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar54 .= '

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
$__compilerVar53 .= $__compilerVar54;
unset($__compilerVar54);
$__compilerVar53 .= '
	';
}
$__compilerVar53 .= '
	
	
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
$__compilerVar53 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar53 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar53 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar53 .= '
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
$__compilerVar53 .= '
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
$__compilerVar53 .= '
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
$__compilerVar52 .= $this->callTemplateHook('quick_search', $__compilerVar53, array());
unset($__compilerVar53);
$__compilerVar52 .= '

</div>';
$__compilerVar51 .= $__compilerVar52;
unset($__compilerVar52);
$__compilerVar51 .= '
	';
$__compilerVar55 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar55 .= '

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
$__compilerVar51 .= $__compilerVar55;
unset($__compilerVar55);
$__compilerVar51 .= '
';
}
$__compilerVar44 .= $__compilerVar51;
unset($__compilerVar51);
$__compilerVar44 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar44 .= '
	';
}
$__compilerVar44 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar44 .= '

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
$__compilerVar44 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar44 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar44 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar44 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar56 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar56 .= '
	';
$__compilerVar57 = '';
$__compilerVar57 .= '
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
$__compilerVar57 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar58 = '';
$__compilerVar58 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar58 .= '
		';
$__compilerVar59 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar59 .= '

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
$__compilerVar58 .= $__compilerVar59;
unset($__compilerVar59);
$__compilerVar58 .= '
	';
}
$__compilerVar58 .= '
	
	
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
$__compilerVar58 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar58 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar58 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar58 .= '
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
$__compilerVar58 .= '
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
$__compilerVar58 .= '
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
$__compilerVar57 .= $this->callTemplateHook('quick_search', $__compilerVar58, array());
unset($__compilerVar58);
$__compilerVar57 .= '

</div>';
$__compilerVar56 .= $__compilerVar57;
unset($__compilerVar57);
$__compilerVar56 .= '
	';
$__compilerVar60 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar60 .= '

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
$__compilerVar56 .= $__compilerVar60;
unset($__compilerVar60);
$__compilerVar56 .= '
';
}
$__compilerVar44 .= $__compilerVar56;
unset($__compilerVar56);
$__compilerVar44 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar44 .= '
		';
}
$__compilerVar44 .= '
		
		';
$__compilerVar61 = '';
$__compilerVar44 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar61, array());
unset($__compilerVar61);
$__compilerVar44 .= '
		
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
$__compilerVar62 = '';
$__compilerVar44 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar62, array());
unset($__compilerVar62);
$__compilerVar44 .= '
	';
}
else
{
$__compilerVar44 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar44 .= ' 
	';
}
$__compilerVar44 .= '
	
';
if (trim($__compilerVar44) !== '')
{
$__compilerVar43 .= '
' . $__compilerVar44 . '
';
}
unset($__compilerVar44);
$__compilerVar41 .= $__compilerVar43;
unset($__compilerVar43);
$__compilerVar41 .= '
							';
}
$__compilerVar41 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 2)
{
$__compilerVar41 .= '
								';
$__compilerVar63 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar63 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar63 .= '<label for="LoginControl">';
}
$__compilerVar63 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar63 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar63 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar63 .= '</label>';
}
$__compilerVar63 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar63 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar64 = '';
$__compilerVar64 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

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
$__compilerVar64 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar64 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar65 = '';
$__compilerVar65 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar65 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar65 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar65 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar65 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar65 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar65 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar65 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar65 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar65 .= '

	';
if (trim($__compilerVar65) !== '')
{
$__compilerVar64 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar65 . '
	</div>
	';
}
unset($__compilerVar65);
$__compilerVar64 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar64 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar64 .= '

</form>';
$__compilerVar63 .= $__compilerVar64;
unset($__compilerVar64);
$__compilerVar63 .= '
			</div>
		</div>
		';
}
$__compilerVar63 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar63 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar63 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar63 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar63 .= '
	
';
}
$__compilerVar41 .= $__compilerVar63;
unset($__compilerVar63);
$__compilerVar41 .= '
							';
}
$__compilerVar41 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 1 && $contentTemplate == ('thread_view'))
{
$__compilerVar41 .= '
								<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
							';
}
$__compilerVar41 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar41 .= '
								';
$__compilerVar66 = '';
if ($canSearch)
{
$__compilerVar66 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar67 = '';
$__compilerVar67 .= '
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
$__compilerVar67 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar68 = '';
$__compilerVar68 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar68 .= '
		';
$__compilerVar69 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar69 .= '

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
$__compilerVar68 .= $__compilerVar69;
unset($__compilerVar69);
$__compilerVar68 .= '
	';
}
$__compilerVar68 .= '
	
	
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
$__compilerVar68 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar68 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar68 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar68 .= '
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
$__compilerVar68 .= '
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
$__compilerVar68 .= '
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
$__compilerVar67 .= $this->callTemplateHook('quick_search', $__compilerVar68, array());
unset($__compilerVar68);
$__compilerVar67 .= '

</div>';
$__compilerVar66 .= $__compilerVar67;
unset($__compilerVar67);
$__compilerVar66 .= '
		</li>
	
';
}
$__compilerVar41 .= $__compilerVar66;
unset($__compilerVar66);
$__compilerVar41 .= '
							';
}
$__compilerVar41 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 1)
{
$__compilerVar70 = '1';
$__compilerVar71 = '';
$__compilerVar71 .= '

';
if ($__compilerVar70 == 0)
{
$__compilerVar71 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar71 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar71 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar71 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar71 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar71 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar71 .= '
	';
}
else
{
$__compilerVar71 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar71 .= '
	';
}
$__compilerVar71 .= '
	
';
}
else if ($__compilerVar70 == 1)
{
$__compilerVar71 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar71 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar71 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar71 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar71 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar71 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar71 .= '
	';
}
else
{
$__compilerVar71 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar71 .= '
	';
}
$__compilerVar71 .= '
	
';
}
$__compilerVar71 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar71 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar70) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar71 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar71 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar71 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar71 .= '
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
$__compilerVar71 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar70) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar71 .= '
			';
if (!$__compilerVar70)
{
$__compilerVar71 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar71 .= '
			';
if ($__compilerVar70)
{
$__compilerVar71 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar71 .= '
		';
}
else
{
$__compilerVar71 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar71 .= '</a>
	</li>

';
}
$__compilerVar41 .= $__compilerVar71;
unset($__compilerVar70, $__compilerVar71);
}
$__compilerVar41 .= '
							
							';
$__compilerVar72 = '';
$__compilerVar41 .= $this->callTemplateHook('uix_userbar_right_end', $__compilerVar72, array());
unset($__compilerVar72);
$__compilerVar41 .= '
							
						';
if (trim($__compilerVar41) !== '')
{
$__compilerVar32 .= '
					
					
						<ul class="navRight' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar')) ? (' visitorTabs') : ('')) . '">
						
						' . $__compilerVar41 . '
						
						</ul>
						
					';
}
unset($__compilerVar41);
$__compilerVar32 .= '
					
					
					';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar32 .= '
						';
$__compilerVar73 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar73 .= '

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
$__compilerVar32 .= $__compilerVar73;
unset($__compilerVar73);
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
$__compilerVar74 = '';
$__compilerVar74 .= '
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
$__compilerVar74 .= '

' . '

<div id="navigation" class="' . (($canSearch && ($uix_searchPosition == 0 || $uix_searchPosition == 2)) ? ('withSearch') : ('')) . ' ' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) ? ('stickyTop') : ('')) . '">
	<div class="sticky_wrapper">
		<div class="uix_navigationWrapper">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar74 .= '
		<div class="pageWidth">
		';
}
$__compilerVar74 .= '
			<div class="pageContent">
				<nav>
					<div class="navTabs">
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar74 .= '
						<div class="pageWidth">
						';
}
$__compilerVar74 .= '
							
							<ul class="publicTabs navLeft">
	
							';
if ((XenForo_Template_Helper_Core::styleProperty('uix_navigationStickyLogo') && XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) || XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2)
{
$__compilerVar74 .= '
							<li id="logo_small">
								<a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
								';
if (XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath'))
{
$__compilerVar74 .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath') . '">
								';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar74 .= '
									<h2 class="uix_textLogo">';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__compilerVar74 .= '<i class="uix_icon ' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon') . '"></i>';
}
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar74 .= XenForo_Template_Helper_Core::styleProperty('uix_logoText');
}
$__compilerVar74 .= '</h2>
								';
}
else
{
$__compilerVar74 .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
								';
}
$__compilerVar74 .= '
								</a>
							</li>
							';
}
$__compilerVar74 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 0)
{
$__compilerVar75 = '0';
$__compilerVar76 = '';
$__compilerVar76 .= '

';
if ($__compilerVar75 == 0)
{
$__compilerVar76 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar76 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar76 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar76 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar76 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar76 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar76 .= '
	';
}
else
{
$__compilerVar76 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar76 .= '
	';
}
$__compilerVar76 .= '
	
';
}
else if ($__compilerVar75 == 1)
{
$__compilerVar76 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar76 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar76 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar76 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar76 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar76 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar76 .= '
	';
}
else
{
$__compilerVar76 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar76 .= '
	';
}
$__compilerVar76 .= '
	
';
}
$__compilerVar76 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar76 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar75) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar76 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar76 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar76 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar76 .= '
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
$__compilerVar76 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar75) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar76 .= '
			';
if (!$__compilerVar75)
{
$__compilerVar76 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar76 .= '
			';
if ($__compilerVar75)
{
$__compilerVar76 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar76 .= '
		';
}
else
{
$__compilerVar76 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar76 .= '</a>
	</li>

';
}
$__compilerVar74 .= $__compilerVar76;
unset($__compilerVar75, $__compilerVar76);
}
$__compilerVar74 .= '
							
							<!-- home -->
							';
if ($showHomeLink)
{
$__compilerVar74 .= '
								<li class="navTab home PopupClosed"><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="navLink">';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon'))
{
$__compilerVar74 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar74 .= 'Home';
}
$__compilerVar74 .= '</a></li>
							';
}
$__compilerVar74 .= '
								
								
								<!-- extra tabs: home -->
								';
if ($extraTabs['home'])
{
$__compilerVar74 .= '
								';
foreach ($extraTabs['home'] AS $extraTabId => $extraTab)
{
$__compilerVar74 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar74 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar74 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar74 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar74 .= '">
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' NoPopupGadget';
}
$__compilerVar74 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' rel="Menu"';
}
$__compilerVar74 .= '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon') && ($extraTabId == ('home') || $extraTabId == ('portal') || $extraTabId == ('ctaFt')))
{
$__compilerVar74 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar74 .= htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
}
if ($extraTab['counter'])
{
$__compilerVar74 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar74 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar74 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar74 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar74 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar77 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar77 .= '
	';
$__compilerVar78 = '';
$__compilerVar78 .= '
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
$__compilerVar78 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar79 = '';
$__compilerVar79 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar79 .= '
		';
$__compilerVar80 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar80 .= '

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
$__compilerVar79 .= $__compilerVar80;
unset($__compilerVar80);
$__compilerVar79 .= '
	';
}
$__compilerVar79 .= '
	
	
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
$__compilerVar79 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar79 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar79 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar79 .= '
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
$__compilerVar79 .= '
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
$__compilerVar79 .= '
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
$__compilerVar78 .= $this->callTemplateHook('quick_search', $__compilerVar79, array());
unset($__compilerVar79);
$__compilerVar78 .= '

</div>';
$__compilerVar77 .= $__compilerVar78;
unset($__compilerVar78);
$__compilerVar77 .= '
	';
$__compilerVar81 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar81 .= '

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
$__compilerVar77 .= $__compilerVar81;
unset($__compilerVar81);
$__compilerVar77 .= '
';
}
$__compilerVar74 .= $__compilerVar77;
unset($__compilerVar77);
}
$__compilerVar74 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar74 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' NoPopupGadget';
}
$__compilerVar74 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' rel="Menu"';
}
$__compilerVar74 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar74 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar74 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar74 .= '<div class="tabLinks">';
$__compilerVar82 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar82 .= '
	';
$__compilerVar83 = '';
$__compilerVar83 .= '
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
$__compilerVar83 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar84 = '';
$__compilerVar84 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar84 .= '
		';
$__compilerVar85 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar85 .= '

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
$__compilerVar84 .= $__compilerVar85;
unset($__compilerVar85);
$__compilerVar84 .= '
	';
}
$__compilerVar84 .= '
	
	
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
$__compilerVar84 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar84 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar84 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar84 .= '
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
$__compilerVar84 .= '
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
$__compilerVar84 .= '
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
$__compilerVar83 .= $this->callTemplateHook('quick_search', $__compilerVar84, array());
unset($__compilerVar84);
$__compilerVar83 .= '

</div>';
$__compilerVar82 .= $__compilerVar83;
unset($__compilerVar83);
$__compilerVar82 .= '
	';
$__compilerVar86 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar86 .= '

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
$__compilerVar82 .= $__compilerVar86;
unset($__compilerVar86);
$__compilerVar82 .= '
';
}
$__compilerVar74 .= $__compilerVar82;
unset($__compilerVar82);
$__compilerVar74 .= '</div>';
}
}
$__compilerVar74 .= '
										</li>
									';
}
$__compilerVar74 .= '
								';
}
$__compilerVar74 .= '
								';
}
$__compilerVar74 .= '
								
								
								<!-- forums -->
								';
if ($tabs['forums'])
{
$__compilerVar74 .= '
									<li class="navTab forums ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar74 .= (($tabs['forums']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar74 .= (($tabs['forums']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar74 .= '">
									
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' NoPopupGadget';
}
$__compilerVar74 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' rel="Menu"';
}
$__compilerVar74 .= '>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar74 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar74 .= (($tabs['forums']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar74 .= ' forumsTabLinks">
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar87 = '';
$__compilerVar87 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar87 .= '<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>';
}
$__compilerVar87 .= '
													';
if ($canSearch)
{
$__compilerVar87 .= '<li><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Forums' . '</a></li>';
}
$__compilerVar87 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar87 .= '
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/forums', false, array()) . '">' . 'Watched Forums' . '</a></li>
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/threads', false, array()) . '">' . 'Watched Threads' . '</a></li>
													';
}
$__compilerVar87 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '" rel="nofollow">' . (($visitor['user_id']) ? ('New Posts') : ('Recent Posts')) . '</a></li>
												';
$__compilerVar74 .= $this->callTemplateHook('navigation_tabs_forums', $__compilerVar87, array());
unset($__compilerVar87);
$__compilerVar74 .= '
												</ul>
												';
if ($tabs['forums']['selected'])
{
$__compilerVar88 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar88 .= '
	';
$__compilerVar89 = '';
$__compilerVar89 .= '
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
$__compilerVar89 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar90 = '';
$__compilerVar90 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar90 .= '
		';
$__compilerVar91 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar91 .= '

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
$__compilerVar90 .= $__compilerVar91;
unset($__compilerVar91);
$__compilerVar90 .= '
	';
}
$__compilerVar90 .= '
	
	
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
$__compilerVar90 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar90 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar90 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar90 .= '
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
$__compilerVar90 .= '
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
$__compilerVar90 .= '
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
$__compilerVar89 .= $this->callTemplateHook('quick_search', $__compilerVar90, array());
unset($__compilerVar90);
$__compilerVar89 .= '

</div>';
$__compilerVar88 .= $__compilerVar89;
unset($__compilerVar89);
$__compilerVar88 .= '
	';
$__compilerVar92 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar92 .= '

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
$__compilerVar88 .= $__compilerVar92;
unset($__compilerVar92);
$__compilerVar88 .= '
';
}
$__compilerVar74 .= $__compilerVar88;
unset($__compilerVar88);
}
$__compilerVar74 .= '
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__compilerVar74 .= '
								
								
								<!-- extra tabs: middle -->
								';
if ($extraTabs['middle'])
{
$__compilerVar74 .= '
								';
foreach ($extraTabs['middle'] AS $extraTabId => $extraTab)
{
$__compilerVar74 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar74 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar74 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar74 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar74 .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' NoPopupGadget';
}
$__compilerVar74 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' rel="Menu"';
}
$__compilerVar74 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar74 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar74 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar74 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar74 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar74 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar93 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar93 .= '
	';
$__compilerVar94 = '';
$__compilerVar94 .= '
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
$__compilerVar94 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar95 = '';
$__compilerVar95 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar95 .= '
		';
$__compilerVar96 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar96 .= '

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
$__compilerVar95 .= $__compilerVar96;
unset($__compilerVar96);
$__compilerVar95 .= '
	';
}
$__compilerVar95 .= '
	
	
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
$__compilerVar95 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar95 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar95 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar95 .= '
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
$__compilerVar95 .= '
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
$__compilerVar95 .= '
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
$__compilerVar94 .= $this->callTemplateHook('quick_search', $__compilerVar95, array());
unset($__compilerVar95);
$__compilerVar94 .= '

</div>';
$__compilerVar93 .= $__compilerVar94;
unset($__compilerVar94);
$__compilerVar93 .= '
	';
$__compilerVar97 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar97 .= '

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
$__compilerVar93 .= $__compilerVar97;
unset($__compilerVar97);
$__compilerVar93 .= '
';
}
$__compilerVar74 .= $__compilerVar93;
unset($__compilerVar93);
}
$__compilerVar74 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar74 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' NoPopupGadget';
}
$__compilerVar74 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' rel="Menu"';
}
$__compilerVar74 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar74 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar74 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar74 .= '<div class="tabLinks">';
$__compilerVar98 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar98 .= '
	';
$__compilerVar99 = '';
$__compilerVar99 .= '
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
$__compilerVar99 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar100 = '';
$__compilerVar100 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar100 .= '
		';
$__compilerVar101 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar101 .= '

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
$__compilerVar100 .= $__compilerVar101;
unset($__compilerVar101);
$__compilerVar100 .= '
	';
}
$__compilerVar100 .= '
	
	
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
$__compilerVar100 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar100 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar100 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar100 .= '
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
$__compilerVar100 .= '
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
$__compilerVar100 .= '
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
$__compilerVar99 .= $this->callTemplateHook('quick_search', $__compilerVar100, array());
unset($__compilerVar100);
$__compilerVar99 .= '

</div>';
$__compilerVar98 .= $__compilerVar99;
unset($__compilerVar99);
$__compilerVar98 .= '
	';
$__compilerVar102 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar102 .= '

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
$__compilerVar98 .= $__compilerVar102;
unset($__compilerVar102);
$__compilerVar98 .= '
';
}
$__compilerVar74 .= $__compilerVar98;
unset($__compilerVar98);
$__compilerVar74 .= '</div>';
}
}
$__compilerVar74 .= '
										</li>
									';
}
$__compilerVar74 .= '
								';
}
$__compilerVar74 .= '
								';
}
$__compilerVar74 .= '
								
								
								<!-- members -->
								';
if ($tabs['members'])
{
$__compilerVar74 .= '
									<li class="navTab members ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar74 .= (($tabs['members']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar74 .= (($tabs['members']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar74 .= '">
									
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' NoPopupGadget';
}
$__compilerVar74 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' rel="Menu"';
}
$__compilerVar74 .= '>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar74 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar74 .= (($tabs['members']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar74 .= ' membersTabLinks">
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar103 = '';
$__compilerVar103 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Notable Members' . '</a></li>
													';
if ($xenOptions['enableMemberList'])
{
$__compilerVar103 .= '<li><a href="' . XenForo_Template_Helper_Core::link('members/list', false, array()) . '">' . 'Registered Members' . '</a></li>';
}
$__compilerVar103 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Current Visitors' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar103 .= '<li><a href="' . XenForo_Template_Helper_Core::link('recent-activity', false, array()) . '">' . 'Recent Activity' . '</a></li>';
}
$__compilerVar103 .= '
													';
if ($canViewProfilePosts)
{
$__compilerVar103 .= '<li><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></li>';
}
$__compilerVar103 .= '
												';
$__compilerVar74 .= $this->callTemplateHook('navigation_tabs_members', $__compilerVar103, array());
unset($__compilerVar103);
$__compilerVar74 .= '
												</ul>
												';
if ($tabs['members']['selected'])
{
$__compilerVar104 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar104 .= '
	';
$__compilerVar105 = '';
$__compilerVar105 .= '
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
$__compilerVar105 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar106 = '';
$__compilerVar106 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar106 .= '
		';
$__compilerVar107 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar107 .= '

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
$__compilerVar106 .= $__compilerVar107;
unset($__compilerVar107);
$__compilerVar106 .= '
	';
}
$__compilerVar106 .= '
	
	
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
$__compilerVar106 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar106 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar106 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar106 .= '
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
$__compilerVar106 .= '
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
$__compilerVar106 .= '
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
$__compilerVar105 .= $this->callTemplateHook('quick_search', $__compilerVar106, array());
unset($__compilerVar106);
$__compilerVar105 .= '

</div>';
$__compilerVar104 .= $__compilerVar105;
unset($__compilerVar105);
$__compilerVar104 .= '
	';
$__compilerVar108 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar108 .= '

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
$__compilerVar104 .= $__compilerVar108;
unset($__compilerVar108);
$__compilerVar104 .= '
';
}
$__compilerVar74 .= $__compilerVar104;
unset($__compilerVar104);
}
$__compilerVar74 .= '
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__compilerVar74 .= '				
								
								<!-- extra tabs: end -->
								';
if ($extraTabs['end'])
{
$__compilerVar74 .= '
								';
foreach ($extraTabs['end'] AS $extraTabId => $extraTab)
{
$__compilerVar74 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar74 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar74 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar74 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar74 .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' NoPopupGadget';
}
$__compilerVar74 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' rel="Menu"';
}
$__compilerVar74 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar74 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar74 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar74 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar74 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar74 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar109 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar109 .= '
	';
$__compilerVar110 = '';
$__compilerVar110 .= '
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
$__compilerVar110 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar111 = '';
$__compilerVar111 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar111 .= '
		';
$__compilerVar112 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar112 .= '

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
$__compilerVar111 .= $__compilerVar112;
unset($__compilerVar112);
$__compilerVar111 .= '
	';
}
$__compilerVar111 .= '
	
	
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
$__compilerVar111 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar111 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar111 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar111 .= '
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
$__compilerVar111 .= '
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
$__compilerVar111 .= '
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
$__compilerVar110 .= $this->callTemplateHook('quick_search', $__compilerVar111, array());
unset($__compilerVar111);
$__compilerVar110 .= '

</div>';
$__compilerVar109 .= $__compilerVar110;
unset($__compilerVar110);
$__compilerVar109 .= '
	';
$__compilerVar113 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar113 .= '

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
$__compilerVar109 .= $__compilerVar113;
unset($__compilerVar113);
$__compilerVar109 .= '
';
}
$__compilerVar74 .= $__compilerVar109;
unset($__compilerVar109);
}
$__compilerVar74 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar74 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' NoPopupGadget';
}
$__compilerVar74 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar74 .= ' rel="Menu"';
}
$__compilerVar74 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar74 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar74 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar74 .= '<div class="tabLinks">';
$__compilerVar114 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar114 .= '
	';
$__compilerVar115 = '';
$__compilerVar115 .= '
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
$__compilerVar115 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar116 = '';
$__compilerVar116 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar116 .= '
		';
$__compilerVar117 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar117 .= '

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
$__compilerVar116 .= $__compilerVar117;
unset($__compilerVar117);
$__compilerVar116 .= '
	';
}
$__compilerVar116 .= '
	
	
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
$__compilerVar116 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar116 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar116 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar116 .= '
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
$__compilerVar116 .= '
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
$__compilerVar116 .= '
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
$__compilerVar115 .= $this->callTemplateHook('quick_search', $__compilerVar116, array());
unset($__compilerVar116);
$__compilerVar115 .= '

</div>';
$__compilerVar114 .= $__compilerVar115;
unset($__compilerVar115);
$__compilerVar114 .= '
	';
$__compilerVar118 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar118 .= '

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
$__compilerVar114 .= $__compilerVar118;
unset($__compilerVar118);
$__compilerVar114 .= '
';
}
$__compilerVar74 .= $__compilerVar114;
unset($__compilerVar114);
$__compilerVar74 .= '</div>';
}
}
$__compilerVar74 .= '
										</li>
									';
}
$__compilerVar74 .= '
								';
}
$__compilerVar74 .= '
								';
}
$__compilerVar74 .= '
								
								<!-- responsive popup -->
								<li class="navTab navigationHiddenTabs Popup PopupControl PopupClosed" style="display:none">	
												
									<a rel="Menu" class="navLink NoPopupGadget uix_dropdownDesktopMenu"><i class="uix_icon uix_icon-navTrigger"></i><span class="uix_hide menuIcon">' . 'Menu' . '</span></a>
									
									<div class="Menu JsOnly blockLinksList primaryContent" id="NavigationHiddenMenu"></div>
								</li>
									
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar74 .= '
								<!-- no selection -->
								';
if (!$selectedTab)
{
$__compilerVar74 .= '
									<li class="navTab selected"><div class="tabLinks">';
$__compilerVar119 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar119 .= '
	';
$__compilerVar120 = '';
$__compilerVar120 .= '
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
$__compilerVar120 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar121 = '';
$__compilerVar121 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar121 .= '
		';
$__compilerVar122 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar122 .= '

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
$__compilerVar121 .= $__compilerVar122;
unset($__compilerVar122);
$__compilerVar121 .= '
	';
}
$__compilerVar121 .= '
	
	
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
$__compilerVar121 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar121 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar121 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar121 .= '
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
$__compilerVar121 .= '
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
$__compilerVar121 .= '
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
$__compilerVar120 .= $this->callTemplateHook('quick_search', $__compilerVar121, array());
unset($__compilerVar121);
$__compilerVar120 .= '

</div>';
$__compilerVar119 .= $__compilerVar120;
unset($__compilerVar120);
$__compilerVar119 .= '
	';
$__compilerVar123 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar123 .= '

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
$__compilerVar119 .= $__compilerVar123;
unset($__compilerVar123);
$__compilerVar119 .= '
';
}
$__compilerVar74 .= $__compilerVar119;
unset($__compilerVar119);
$__compilerVar74 .= '</div></li>
								';
}
$__compilerVar74 .= '
								';
}
$__compilerVar74 .= '
	
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar74 .= '	
									';
if ($tabs['account']['selected'])
{
$__compilerVar74 .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar124 = '';
$__compilerVar124 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar124 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar124 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
												';
$__compilerVar74 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar124, array());
unset($__compilerVar124);
$__compilerVar74 .= '
												</ul>
												';
$__compilerVar125 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar125 .= '
	';
$__compilerVar126 = '';
$__compilerVar126 .= '
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
$__compilerVar126 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar127 = '';
$__compilerVar127 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar127 .= '
		';
$__compilerVar128 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar128 .= '

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
$__compilerVar127 .= $__compilerVar128;
unset($__compilerVar128);
$__compilerVar127 .= '
	';
}
$__compilerVar127 .= '
	
	
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
$__compilerVar127 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar127 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar127 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar127 .= '
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
$__compilerVar127 .= '
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
$__compilerVar127 .= '
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
$__compilerVar126 .= $this->callTemplateHook('quick_search', $__compilerVar127, array());
unset($__compilerVar127);
$__compilerVar126 .= '

</div>';
$__compilerVar125 .= $__compilerVar126;
unset($__compilerVar126);
$__compilerVar125 .= '
	';
$__compilerVar129 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar129 .= '

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
$__compilerVar125 .= $__compilerVar129;
unset($__compilerVar129);
$__compilerVar125 .= '
';
}
$__compilerVar74 .= $__compilerVar125;
unset($__compilerVar125);
$__compilerVar74 .= '
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__compilerVar74 .= '
									';
if ($tabs['inbox']['selected'])
{
$__compilerVar74 .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
												</ul>
												';
$__compilerVar130 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar130 .= '
	';
$__compilerVar131 = '';
$__compilerVar131 .= '
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
$__compilerVar131 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar132 = '';
$__compilerVar132 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar132 .= '
		';
$__compilerVar133 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar133 .= '

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
$__compilerVar132 .= $__compilerVar133;
unset($__compilerVar133);
$__compilerVar132 .= '
	';
}
$__compilerVar132 .= '
	
	
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
$__compilerVar132 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar132 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar132 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar132 .= '
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
$__compilerVar132 .= '
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
$__compilerVar132 .= '
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
$__compilerVar131 .= $this->callTemplateHook('quick_search', $__compilerVar132, array());
unset($__compilerVar132);
$__compilerVar131 .= '

</div>';
$__compilerVar130 .= $__compilerVar131;
unset($__compilerVar131);
$__compilerVar130 .= '
	';
$__compilerVar134 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar134 .= '

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
$__compilerVar130 .= $__compilerVar134;
unset($__compilerVar134);
$__compilerVar130 .= '
';
}
$__compilerVar74 .= $__compilerVar130;
unset($__compilerVar130);
$__compilerVar74 .= '
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__compilerVar74 .= '
								';
}
$__compilerVar74 .= '		
	
							</ul>
							
							
							';
$__compilerVar135 = '';
$__compilerVar135 .= '
								
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 0 && $contentTemplate == ('thread_view'))
{
$__compilerVar135 .= '
										<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
									';
}
$__compilerVar135 .= '
								
									';
$__compilerVar136 = '';
$__compilerVar135 .= $this->callTemplateHook('uix_navigation_right_start', $__compilerVar136, array());
unset($__compilerVar136);
$__compilerVar135 .= '
									
									';
if (!XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar135 .= '
										';
$__compilerVar137 = '';
$__compilerVar138 = '';
$__compilerVar138 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar138 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar138 .= '
	';
$__compilerVar139 = '';
$__compilerVar138 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar139, array());
unset($__compilerVar139);
$__compilerVar138 .= '
	';
}
$__compilerVar138 .= '

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">

		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar138 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar138 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar138 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar138 .= '
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
$__compilerVar140 = '';
$__compilerVar140 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar140) !== '')
{
$__compilerVar138 .= '<div class="muted">' . $__compilerVar140 . '</div>';
}
unset($__compilerVar140);
$__compilerVar138 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar141 = '';
$__compilerVar141 .= '
					';
if ($canEditProfile)
{
$__compilerVar141 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar141 .= '
					';
if ($canEditSignature)
{
$__compilerVar141 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar141 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar141 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar141 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar141 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar141 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar142 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar142 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar141 .= $__compilerVar142;
unset($__compilerVar142);
$__compilerVar141 .= '
';
$__compilerVar138 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar141, array());
unset($__compilerVar141);
$__compilerVar138 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar143 = '';
$__compilerVar143 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar143 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar143 .= '
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
$__compilerVar143 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar143 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar138 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar143, array());
unset($__compilerVar143);
$__compilerVar138 .= '
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
$__compilerVar138 .= '
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
$__compilerVar138 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar138 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar138 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar144 = '';
$__compilerVar144 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar144 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar144 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar138 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar144, array());
unset($__compilerVar144);
$__compilerVar138 .= '
				</ul>
				';
$__compilerVar145 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar145 .= '
	';
$__compilerVar146 = '';
$__compilerVar146 .= '
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
$__compilerVar146 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar147 = '';
$__compilerVar147 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar147 .= '
		';
$__compilerVar148 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar148 .= '

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
$__compilerVar147 .= $__compilerVar148;
unset($__compilerVar148);
$__compilerVar147 .= '
	';
}
$__compilerVar147 .= '
	
	
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
$__compilerVar147 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar147 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar147 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar147 .= '
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
$__compilerVar147 .= '
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
$__compilerVar147 .= '
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
$__compilerVar146 .= $this->callTemplateHook('quick_search', $__compilerVar147, array());
unset($__compilerVar147);
$__compilerVar146 .= '

</div>';
$__compilerVar145 .= $__compilerVar146;
unset($__compilerVar146);
$__compilerVar145 .= '
	';
$__compilerVar149 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar149 .= '

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
$__compilerVar145 .= $__compilerVar149;
unset($__compilerVar149);
$__compilerVar145 .= '
';
}
$__compilerVar138 .= $__compilerVar145;
unset($__compilerVar145);
$__compilerVar138 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar138 .= '
	';
}
$__compilerVar138 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar138 .= '

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
$__compilerVar138 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar138 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar138 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar138 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar150 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar150 .= '
	';
$__compilerVar151 = '';
$__compilerVar151 .= '
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
$__compilerVar151 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar152 = '';
$__compilerVar152 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar152 .= '
		';
$__compilerVar153 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar153 .= '

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
$__compilerVar152 .= $__compilerVar153;
unset($__compilerVar153);
$__compilerVar152 .= '
	';
}
$__compilerVar152 .= '
	
	
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
$__compilerVar152 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar152 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar152 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar152 .= '
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
$__compilerVar152 .= '
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
$__compilerVar152 .= '
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
$__compilerVar151 .= $this->callTemplateHook('quick_search', $__compilerVar152, array());
unset($__compilerVar152);
$__compilerVar151 .= '

</div>';
$__compilerVar150 .= $__compilerVar151;
unset($__compilerVar151);
$__compilerVar150 .= '
	';
$__compilerVar154 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar154 .= '

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
$__compilerVar150 .= $__compilerVar154;
unset($__compilerVar154);
$__compilerVar150 .= '
';
}
$__compilerVar138 .= $__compilerVar150;
unset($__compilerVar150);
$__compilerVar138 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar138 .= '
		';
}
$__compilerVar138 .= '
		
		';
$__compilerVar155 = '';
$__compilerVar138 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar155, array());
unset($__compilerVar155);
$__compilerVar138 .= '
		
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
$__compilerVar156 = '';
$__compilerVar138 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar156, array());
unset($__compilerVar156);
$__compilerVar138 .= '
	';
}
else
{
$__compilerVar138 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar138 .= ' 
	';
}
$__compilerVar138 .= '
	
';
if (trim($__compilerVar138) !== '')
{
$__compilerVar137 .= '
' . $__compilerVar138 . '
';
}
unset($__compilerVar138);
$__compilerVar135 .= $__compilerVar137;
unset($__compilerVar137);
$__compilerVar135 .= '
									';
}
$__compilerVar135 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 1)
{
$__compilerVar135 .= '
										';
$__compilerVar157 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar157 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar157 .= '<label for="LoginControl">';
}
$__compilerVar157 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar157 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar157 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar157 .= '</label>';
}
$__compilerVar157 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar157 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar158 = '';
$__compilerVar158 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

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
$__compilerVar158 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar158 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar159 = '';
$__compilerVar159 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar159 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar159 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar159 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar159 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar159 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar159 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar159 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar159 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar159 .= '

	';
if (trim($__compilerVar159) !== '')
{
$__compilerVar158 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar159 . '
	</div>
	';
}
unset($__compilerVar159);
$__compilerVar158 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar158 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar158 .= '

</form>';
$__compilerVar157 .= $__compilerVar158;
unset($__compilerVar158);
$__compilerVar157 .= '
			</div>
		</div>
		';
}
$__compilerVar157 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar157 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar157 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar157 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar157 .= '
	
';
}
$__compilerVar135 .= $__compilerVar157;
unset($__compilerVar157);
$__compilerVar135 .= '
									';
}
$__compilerVar135 .= '
							
									';
$__compilerVar160 = '';
$__compilerVar135 .= $this->callTemplateHook('uix_navigation_right_end', $__compilerVar160, array());
unset($__compilerVar160);
$__compilerVar135 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 0)
{
$__compilerVar161 = '1';
$__compilerVar162 = '';
$__compilerVar162 .= '

';
if ($__compilerVar161 == 0)
{
$__compilerVar162 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar162 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar162 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar162 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar162 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar162 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar162 .= '
	';
}
else
{
$__compilerVar162 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar162 .= '
	';
}
$__compilerVar162 .= '
	
';
}
else if ($__compilerVar161 == 1)
{
$__compilerVar162 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar162 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar162 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar162 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar162 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar162 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar162 .= '
	';
}
else
{
$__compilerVar162 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar162 .= '
	';
}
$__compilerVar162 .= '
	
';
}
$__compilerVar162 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar162 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar161) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar162 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar162 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar162 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar162 .= '
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
$__compilerVar162 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar161) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar162 .= '
			';
if (!$__compilerVar161)
{
$__compilerVar162 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar162 .= '
			';
if ($__compilerVar161)
{
$__compilerVar162 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar162 .= '
		';
}
else
{
$__compilerVar162 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar162 .= '</a>
	</li>

';
}
$__compilerVar135 .= $__compilerVar162;
unset($__compilerVar161, $__compilerVar162);
}
$__compilerVar135 .= '
	
									';
if ($uix_searchPosition == 2)
{
$__compilerVar135 .= '
										';
$__compilerVar163 = '';
if ($canSearch)
{
$__compilerVar163 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar164 = '';
$__compilerVar164 .= '
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
$__compilerVar164 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar165 = '';
$__compilerVar165 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar165 .= '
		';
$__compilerVar166 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar166 .= '

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
$__compilerVar165 .= $__compilerVar166;
unset($__compilerVar166);
$__compilerVar165 .= '
	';
}
$__compilerVar165 .= '
	
	
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
$__compilerVar165 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar165 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar165 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar165 .= '
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
$__compilerVar165 .= '
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
$__compilerVar165 .= '
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
$__compilerVar164 .= $this->callTemplateHook('quick_search', $__compilerVar165, array());
unset($__compilerVar165);
$__compilerVar164 .= '

</div>';
$__compilerVar163 .= $__compilerVar164;
unset($__compilerVar164);
$__compilerVar163 .= '
		</li>
	
';
}
$__compilerVar135 .= $__compilerVar163;
unset($__compilerVar163);
$__compilerVar135 .= '
									';
}
$__compilerVar135 .= '
								
								';
if (trim($__compilerVar135) !== '')
{
$__compilerVar74 .= '
								
								
								<ul class="navRight visitorTabs">
								
								' . $__compilerVar135 . '
								
								</ul>
								
							';
}
unset($__compilerVar135);
$__compilerVar74 .= '
							
							';
if ($uix_searchPosition == 2)
{
$__compilerVar74 .= '
								';
$__compilerVar167 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar167 .= '

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
$__compilerVar74 .= $__compilerVar167;
unset($__compilerVar167);
$__compilerVar74 .= '
							';
}
$__compilerVar74 .= '
									
								
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar74 .= '</div>';
}
$__compilerVar74 .= '
					</div>
	
				<span class="helper"></span>
					
				</nav>
			</div>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar74 .= '</div>';
}
$__compilerVar74 .= '
		</div>
	</div>
</div>';
$__compilerVar30 .= $__compilerVar74;
unset($__compilerVar74);
}
$__compilerVar30 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') != 2)
{
$__compilerVar30 .= '
		';
$__compilerVar168 = '';
$__compilerVar168 .= '
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
$__compilerVar168 .= '

<div id="logoBlock" ' . (($canSearch && $uix_searchPosition == 1) ? ('class="withSearch"') : ('')) . '>

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar168 .= '
	<div class="pageWidth">
	';
}
$__compilerVar168 .= '	
		
		<div class="pageContent">
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar168 .= '
		<div class="pageWidth">
		';
}
$__compilerVar168 .= '
			
		';
$__compilerVar169 = '';
$__compilerVar169 .= '
		<div id="logo"><a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
			<span></span>
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar169 .= '<h2 class="uix_textLogo">';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__compilerVar169 .= '<i class="uix_icon ' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon') . '"></i>';
}
$__compilerVar169 .= XenForo_Template_Helper_Core::styleProperty('uix_logoText') . '</h2>';
}
else
{
$__compilerVar169 .= '<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar169 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_sloganText'))
{
$__compilerVar169 .= '<div class="uix_slogan">' . XenForo_Template_Helper_Core::styleProperty('uix_sloganText') . '</div>';
}
$__compilerVar169 .= '
		</a></div>
		';
$__compilerVar168 .= $this->callTemplateHook('header_logo', $__compilerVar169, array());
unset($__compilerVar169);
$__compilerVar168 .= '
		
		';
if ($canSearch && $uix_searchPosition == 1)
{
$__compilerVar168 .= '
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

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar171 = '';
$__compilerVar171 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar171 .= '
		';
$__compilerVar172 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar172 .= '

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
$__compilerVar171 .= $__compilerVar172;
unset($__compilerVar172);
$__compilerVar171 .= '
	';
}
$__compilerVar171 .= '
	
	
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
$__compilerVar171 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar171 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar171 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar171 .= '
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
$__compilerVar171 .= '
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
$__compilerVar171 .= '
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
$__compilerVar170 .= $this->callTemplateHook('quick_search', $__compilerVar171, array());
unset($__compilerVar171);
$__compilerVar170 .= '

</div>';
$__compilerVar168 .= $__compilerVar170;
unset($__compilerVar170);
$__compilerVar168 .= '
		';
}
else
{
$__compilerVar168 .= '
			';
$__compilerVar173 = '';
$__compilerVar174 = '';
$__compilerVar174 .= '
	
		';
$__compilerVar175 = '';
$__compilerVar175 .= '
				';
$__compilerVar176 = '';
$__compilerVar175 .= $this->callTemplateHook('ad_header', $__compilerVar176, array());
unset($__compilerVar176);
$__compilerVar175 .= '
				
				
				
				

				
			';
if (trim($__compilerVar175) !== '')
{
$__compilerVar174 .= '
			' . $__compilerVar175 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar174 .= '
			<div>' . 'Template' . ': ad_header</div>
		';
}
unset($__compilerVar175);
$__compilerVar174 .= '
	
	';
if (trim($__compilerVar174) !== '')
{
$__compilerVar173 .= '
	<div class="funbox">
	<div class="funboxWrapper">
	' . $__compilerVar174 . '
	</div>
	</div>
	
';
}
unset($__compilerVar174);
$__compilerVar168 .= $__compilerVar173;
unset($__compilerVar173);
$__compilerVar168 .= '
		';
}
$__compilerVar168 .= '
			
		<span class="helper"></span>
		</div>
	</div>	
</div>';
$__compilerVar30 .= $__compilerVar168;
unset($__compilerVar168);
$__compilerVar30 .= '
	';
}
$__compilerVar30 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') != 1 && XenForo_Template_Helper_Core::styleProperty('uix_navStyle') != 4)
{
$__compilerVar177 = '';
$__compilerVar177 .= '
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
$__compilerVar177 .= '

' . '

<div id="navigation" class="' . (($canSearch && ($uix_searchPosition == 0 || $uix_searchPosition == 2)) ? ('withSearch') : ('')) . ' ' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) ? ('stickyTop') : ('')) . '">
	<div class="sticky_wrapper">
		<div class="uix_navigationWrapper">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar177 .= '
		<div class="pageWidth">
		';
}
$__compilerVar177 .= '
			<div class="pageContent">
				<nav>
					<div class="navTabs">
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar177 .= '
						<div class="pageWidth">
						';
}
$__compilerVar177 .= '
							
							<ul class="publicTabs navLeft">
	
							';
if ((XenForo_Template_Helper_Core::styleProperty('uix_navigationStickyLogo') && XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) || XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2)
{
$__compilerVar177 .= '
							<li id="logo_small">
								<a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
								';
if (XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath'))
{
$__compilerVar177 .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath') . '">
								';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar177 .= '
									<h2 class="uix_textLogo">';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__compilerVar177 .= '<i class="uix_icon ' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon') . '"></i>';
}
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar177 .= XenForo_Template_Helper_Core::styleProperty('uix_logoText');
}
$__compilerVar177 .= '</h2>
								';
}
else
{
$__compilerVar177 .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
								';
}
$__compilerVar177 .= '
								</a>
							</li>
							';
}
$__compilerVar177 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 0)
{
$__compilerVar178 = '0';
$__compilerVar179 = '';
$__compilerVar179 .= '

';
if ($__compilerVar178 == 0)
{
$__compilerVar179 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar179 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar179 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar179 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar179 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar179 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar179 .= '
	';
}
else
{
$__compilerVar179 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar179 .= '
	';
}
$__compilerVar179 .= '
	
';
}
else if ($__compilerVar178 == 1)
{
$__compilerVar179 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar179 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar179 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar179 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar179 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar179 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar179 .= '
	';
}
else
{
$__compilerVar179 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar179 .= '
	';
}
$__compilerVar179 .= '
	
';
}
$__compilerVar179 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar179 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar178) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar179 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar179 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar179 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar179 .= '
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
$__compilerVar179 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar178) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar179 .= '
			';
if (!$__compilerVar178)
{
$__compilerVar179 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar179 .= '
			';
if ($__compilerVar178)
{
$__compilerVar179 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar179 .= '
		';
}
else
{
$__compilerVar179 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar179 .= '</a>
	</li>

';
}
$__compilerVar177 .= $__compilerVar179;
unset($__compilerVar178, $__compilerVar179);
}
$__compilerVar177 .= '
							
							<!-- home -->
							';
if ($showHomeLink)
{
$__compilerVar177 .= '
								<li class="navTab home PopupClosed"><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="navLink">';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon'))
{
$__compilerVar177 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar177 .= 'Home';
}
$__compilerVar177 .= '</a></li>
							';
}
$__compilerVar177 .= '
								
								
								<!-- extra tabs: home -->
								';
if ($extraTabs['home'])
{
$__compilerVar177 .= '
								';
foreach ($extraTabs['home'] AS $extraTabId => $extraTab)
{
$__compilerVar177 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar177 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar177 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar177 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar177 .= '">
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' NoPopupGadget';
}
$__compilerVar177 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' rel="Menu"';
}
$__compilerVar177 .= '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon') && ($extraTabId == ('home') || $extraTabId == ('portal') || $extraTabId == ('ctaFt')))
{
$__compilerVar177 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar177 .= htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
}
if ($extraTab['counter'])
{
$__compilerVar177 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar177 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar177 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar177 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar177 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar180 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar180 .= '
	';
$__compilerVar181 = '';
$__compilerVar181 .= '
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
$__compilerVar181 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar182 = '';
$__compilerVar182 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar182 .= '
		';
$__compilerVar183 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar183 .= '

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
$__compilerVar182 .= $__compilerVar183;
unset($__compilerVar183);
$__compilerVar182 .= '
	';
}
$__compilerVar182 .= '
	
	
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
$__compilerVar182 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar182 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar182 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar182 .= '
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
$__compilerVar182 .= '
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
$__compilerVar182 .= '
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
$__compilerVar181 .= $this->callTemplateHook('quick_search', $__compilerVar182, array());
unset($__compilerVar182);
$__compilerVar181 .= '

</div>';
$__compilerVar180 .= $__compilerVar181;
unset($__compilerVar181);
$__compilerVar180 .= '
	';
$__compilerVar184 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar184 .= '

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
$__compilerVar180 .= $__compilerVar184;
unset($__compilerVar184);
$__compilerVar180 .= '
';
}
$__compilerVar177 .= $__compilerVar180;
unset($__compilerVar180);
}
$__compilerVar177 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar177 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' NoPopupGadget';
}
$__compilerVar177 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' rel="Menu"';
}
$__compilerVar177 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar177 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar177 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar177 .= '<div class="tabLinks">';
$__compilerVar185 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar185 .= '
	';
$__compilerVar186 = '';
$__compilerVar186 .= '
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
$__compilerVar186 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar187 = '';
$__compilerVar187 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar187 .= '
		';
$__compilerVar188 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar188 .= '

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
$__compilerVar187 .= $__compilerVar188;
unset($__compilerVar188);
$__compilerVar187 .= '
	';
}
$__compilerVar187 .= '
	
	
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
$__compilerVar187 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar187 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar187 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar187 .= '
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
$__compilerVar187 .= '
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
$__compilerVar187 .= '
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
$__compilerVar186 .= $this->callTemplateHook('quick_search', $__compilerVar187, array());
unset($__compilerVar187);
$__compilerVar186 .= '

</div>';
$__compilerVar185 .= $__compilerVar186;
unset($__compilerVar186);
$__compilerVar185 .= '
	';
$__compilerVar189 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar189 .= '

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
$__compilerVar185 .= $__compilerVar189;
unset($__compilerVar189);
$__compilerVar185 .= '
';
}
$__compilerVar177 .= $__compilerVar185;
unset($__compilerVar185);
$__compilerVar177 .= '</div>';
}
}
$__compilerVar177 .= '
										</li>
									';
}
$__compilerVar177 .= '
								';
}
$__compilerVar177 .= '
								';
}
$__compilerVar177 .= '
								
								
								<!-- forums -->
								';
if ($tabs['forums'])
{
$__compilerVar177 .= '
									<li class="navTab forums ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar177 .= (($tabs['forums']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar177 .= (($tabs['forums']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar177 .= '">
									
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' NoPopupGadget';
}
$__compilerVar177 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' rel="Menu"';
}
$__compilerVar177 .= '>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar177 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar177 .= (($tabs['forums']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar177 .= ' forumsTabLinks">
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar190 = '';
$__compilerVar190 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar190 .= '<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>';
}
$__compilerVar190 .= '
													';
if ($canSearch)
{
$__compilerVar190 .= '<li><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Forums' . '</a></li>';
}
$__compilerVar190 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar190 .= '
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/forums', false, array()) . '">' . 'Watched Forums' . '</a></li>
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/threads', false, array()) . '">' . 'Watched Threads' . '</a></li>
													';
}
$__compilerVar190 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '" rel="nofollow">' . (($visitor['user_id']) ? ('New Posts') : ('Recent Posts')) . '</a></li>
												';
$__compilerVar177 .= $this->callTemplateHook('navigation_tabs_forums', $__compilerVar190, array());
unset($__compilerVar190);
$__compilerVar177 .= '
												</ul>
												';
if ($tabs['forums']['selected'])
{
$__compilerVar191 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar191 .= '
	';
$__compilerVar192 = '';
$__compilerVar192 .= '
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
$__compilerVar192 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar193 = '';
$__compilerVar193 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar193 .= '
		';
$__compilerVar194 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar194 .= '

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
$__compilerVar193 .= $__compilerVar194;
unset($__compilerVar194);
$__compilerVar193 .= '
	';
}
$__compilerVar193 .= '
	
	
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
$__compilerVar193 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar193 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar193 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar193 .= '
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
$__compilerVar193 .= '
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
$__compilerVar193 .= '
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
$__compilerVar192 .= $this->callTemplateHook('quick_search', $__compilerVar193, array());
unset($__compilerVar193);
$__compilerVar192 .= '

</div>';
$__compilerVar191 .= $__compilerVar192;
unset($__compilerVar192);
$__compilerVar191 .= '
	';
$__compilerVar195 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar195 .= '

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
$__compilerVar191 .= $__compilerVar195;
unset($__compilerVar195);
$__compilerVar191 .= '
';
}
$__compilerVar177 .= $__compilerVar191;
unset($__compilerVar191);
}
$__compilerVar177 .= '
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__compilerVar177 .= '
								
								
								<!-- extra tabs: middle -->
								';
if ($extraTabs['middle'])
{
$__compilerVar177 .= '
								';
foreach ($extraTabs['middle'] AS $extraTabId => $extraTab)
{
$__compilerVar177 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar177 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar177 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar177 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar177 .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' NoPopupGadget';
}
$__compilerVar177 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' rel="Menu"';
}
$__compilerVar177 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar177 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar177 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar177 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar177 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar177 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar196 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar196 .= '
	';
$__compilerVar197 = '';
$__compilerVar197 .= '
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
$__compilerVar197 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar198 = '';
$__compilerVar198 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar198 .= '
		';
$__compilerVar199 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar199 .= '

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
$__compilerVar198 .= $__compilerVar199;
unset($__compilerVar199);
$__compilerVar198 .= '
	';
}
$__compilerVar198 .= '
	
	
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
$__compilerVar198 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar198 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar198 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar198 .= '
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
$__compilerVar198 .= '
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
$__compilerVar198 .= '
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
$__compilerVar197 .= $this->callTemplateHook('quick_search', $__compilerVar198, array());
unset($__compilerVar198);
$__compilerVar197 .= '

</div>';
$__compilerVar196 .= $__compilerVar197;
unset($__compilerVar197);
$__compilerVar196 .= '
	';
$__compilerVar200 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar200 .= '

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
$__compilerVar196 .= $__compilerVar200;
unset($__compilerVar200);
$__compilerVar196 .= '
';
}
$__compilerVar177 .= $__compilerVar196;
unset($__compilerVar196);
}
$__compilerVar177 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar177 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' NoPopupGadget';
}
$__compilerVar177 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' rel="Menu"';
}
$__compilerVar177 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar177 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar177 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar177 .= '<div class="tabLinks">';
$__compilerVar201 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar201 .= '
	';
$__compilerVar202 = '';
$__compilerVar202 .= '
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
$__compilerVar202 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar203 = '';
$__compilerVar203 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar203 .= '
		';
$__compilerVar204 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar204 .= '

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
$__compilerVar203 .= $__compilerVar204;
unset($__compilerVar204);
$__compilerVar203 .= '
	';
}
$__compilerVar203 .= '
	
	
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
$__compilerVar203 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar203 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar203 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar203 .= '
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
$__compilerVar203 .= '
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
$__compilerVar203 .= '
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
$__compilerVar202 .= $this->callTemplateHook('quick_search', $__compilerVar203, array());
unset($__compilerVar203);
$__compilerVar202 .= '

</div>';
$__compilerVar201 .= $__compilerVar202;
unset($__compilerVar202);
$__compilerVar201 .= '
	';
$__compilerVar205 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar205 .= '

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
$__compilerVar201 .= $__compilerVar205;
unset($__compilerVar205);
$__compilerVar201 .= '
';
}
$__compilerVar177 .= $__compilerVar201;
unset($__compilerVar201);
$__compilerVar177 .= '</div>';
}
}
$__compilerVar177 .= '
										</li>
									';
}
$__compilerVar177 .= '
								';
}
$__compilerVar177 .= '
								';
}
$__compilerVar177 .= '
								
								
								<!-- members -->
								';
if ($tabs['members'])
{
$__compilerVar177 .= '
									<li class="navTab members ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar177 .= (($tabs['members']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar177 .= (($tabs['members']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar177 .= '">
									
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' NoPopupGadget';
}
$__compilerVar177 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' rel="Menu"';
}
$__compilerVar177 .= '>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar177 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar177 .= (($tabs['members']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar177 .= ' membersTabLinks">
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar206 = '';
$__compilerVar206 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Notable Members' . '</a></li>
													';
if ($xenOptions['enableMemberList'])
{
$__compilerVar206 .= '<li><a href="' . XenForo_Template_Helper_Core::link('members/list', false, array()) . '">' . 'Registered Members' . '</a></li>';
}
$__compilerVar206 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Current Visitors' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar206 .= '<li><a href="' . XenForo_Template_Helper_Core::link('recent-activity', false, array()) . '">' . 'Recent Activity' . '</a></li>';
}
$__compilerVar206 .= '
													';
if ($canViewProfilePosts)
{
$__compilerVar206 .= '<li><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></li>';
}
$__compilerVar206 .= '
												';
$__compilerVar177 .= $this->callTemplateHook('navigation_tabs_members', $__compilerVar206, array());
unset($__compilerVar206);
$__compilerVar177 .= '
												</ul>
												';
if ($tabs['members']['selected'])
{
$__compilerVar207 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar207 .= '
	';
$__compilerVar208 = '';
$__compilerVar208 .= '
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
$__compilerVar208 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar209 = '';
$__compilerVar209 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar209 .= '
		';
$__compilerVar210 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar210 .= '

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
$__compilerVar209 .= $__compilerVar210;
unset($__compilerVar210);
$__compilerVar209 .= '
	';
}
$__compilerVar209 .= '
	
	
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
$__compilerVar209 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar209 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar209 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar209 .= '
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
$__compilerVar209 .= '
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
$__compilerVar209 .= '
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
$__compilerVar208 .= $this->callTemplateHook('quick_search', $__compilerVar209, array());
unset($__compilerVar209);
$__compilerVar208 .= '

</div>';
$__compilerVar207 .= $__compilerVar208;
unset($__compilerVar208);
$__compilerVar207 .= '
	';
$__compilerVar211 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar211 .= '

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
$__compilerVar207 .= $__compilerVar211;
unset($__compilerVar211);
$__compilerVar207 .= '
';
}
$__compilerVar177 .= $__compilerVar207;
unset($__compilerVar207);
}
$__compilerVar177 .= '
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__compilerVar177 .= '				
								
								<!-- extra tabs: end -->
								';
if ($extraTabs['end'])
{
$__compilerVar177 .= '
								';
foreach ($extraTabs['end'] AS $extraTabId => $extraTab)
{
$__compilerVar177 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar177 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar177 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar177 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar177 .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' NoPopupGadget';
}
$__compilerVar177 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' rel="Menu"';
}
$__compilerVar177 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar177 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar177 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar177 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar177 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar177 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar212 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar212 .= '
	';
$__compilerVar213 = '';
$__compilerVar213 .= '
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
$__compilerVar213 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar214 = '';
$__compilerVar214 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar214 .= '
		';
$__compilerVar215 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar215 .= '

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
$__compilerVar214 .= $__compilerVar215;
unset($__compilerVar215);
$__compilerVar214 .= '
	';
}
$__compilerVar214 .= '
	
	
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
$__compilerVar214 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar214 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar214 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar214 .= '
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
$__compilerVar214 .= '
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
$__compilerVar214 .= '
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
$__compilerVar213 .= $this->callTemplateHook('quick_search', $__compilerVar214, array());
unset($__compilerVar214);
$__compilerVar213 .= '

</div>';
$__compilerVar212 .= $__compilerVar213;
unset($__compilerVar213);
$__compilerVar212 .= '
	';
$__compilerVar216 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar216 .= '

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
$__compilerVar212 .= $__compilerVar216;
unset($__compilerVar216);
$__compilerVar212 .= '
';
}
$__compilerVar177 .= $__compilerVar212;
unset($__compilerVar212);
}
$__compilerVar177 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar177 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' NoPopupGadget';
}
$__compilerVar177 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar177 .= ' rel="Menu"';
}
$__compilerVar177 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar177 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar177 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar177 .= '<div class="tabLinks">';
$__compilerVar217 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar217 .= '
	';
$__compilerVar218 = '';
$__compilerVar218 .= '
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
$__compilerVar218 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar219 = '';
$__compilerVar219 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar219 .= '
		';
$__compilerVar220 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar220 .= '

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
$__compilerVar219 .= $__compilerVar220;
unset($__compilerVar220);
$__compilerVar219 .= '
	';
}
$__compilerVar219 .= '
	
	
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
$__compilerVar219 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar219 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar219 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar219 .= '
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
$__compilerVar219 .= '
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
$__compilerVar219 .= '
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
$__compilerVar218 .= $this->callTemplateHook('quick_search', $__compilerVar219, array());
unset($__compilerVar219);
$__compilerVar218 .= '

</div>';
$__compilerVar217 .= $__compilerVar218;
unset($__compilerVar218);
$__compilerVar217 .= '
	';
$__compilerVar221 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar221 .= '

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
$__compilerVar217 .= $__compilerVar221;
unset($__compilerVar221);
$__compilerVar217 .= '
';
}
$__compilerVar177 .= $__compilerVar217;
unset($__compilerVar217);
$__compilerVar177 .= '</div>';
}
}
$__compilerVar177 .= '
										</li>
									';
}
$__compilerVar177 .= '
								';
}
$__compilerVar177 .= '
								';
}
$__compilerVar177 .= '
								
								<!-- responsive popup -->
								<li class="navTab navigationHiddenTabs Popup PopupControl PopupClosed" style="display:none">	
												
									<a rel="Menu" class="navLink NoPopupGadget uix_dropdownDesktopMenu"><i class="uix_icon uix_icon-navTrigger"></i><span class="uix_hide menuIcon">' . 'Menu' . '</span></a>
									
									<div class="Menu JsOnly blockLinksList primaryContent" id="NavigationHiddenMenu"></div>
								</li>
									
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar177 .= '
								<!-- no selection -->
								';
if (!$selectedTab)
{
$__compilerVar177 .= '
									<li class="navTab selected"><div class="tabLinks">';
$__compilerVar222 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar222 .= '
	';
$__compilerVar223 = '';
$__compilerVar223 .= '
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
$__compilerVar223 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar224 = '';
$__compilerVar224 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar224 .= '
		';
$__compilerVar225 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar225 .= '

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
$__compilerVar224 .= $__compilerVar225;
unset($__compilerVar225);
$__compilerVar224 .= '
	';
}
$__compilerVar224 .= '
	
	
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
$__compilerVar224 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar224 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar224 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar224 .= '
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
$__compilerVar224 .= '
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
$__compilerVar224 .= '
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
$__compilerVar223 .= $this->callTemplateHook('quick_search', $__compilerVar224, array());
unset($__compilerVar224);
$__compilerVar223 .= '

</div>';
$__compilerVar222 .= $__compilerVar223;
unset($__compilerVar223);
$__compilerVar222 .= '
	';
$__compilerVar226 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar226 .= '

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
$__compilerVar222 .= $__compilerVar226;
unset($__compilerVar226);
$__compilerVar222 .= '
';
}
$__compilerVar177 .= $__compilerVar222;
unset($__compilerVar222);
$__compilerVar177 .= '</div></li>
								';
}
$__compilerVar177 .= '
								';
}
$__compilerVar177 .= '
	
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar177 .= '	
									';
if ($tabs['account']['selected'])
{
$__compilerVar177 .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar227 = '';
$__compilerVar227 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar227 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar227 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
												';
$__compilerVar177 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar227, array());
unset($__compilerVar227);
$__compilerVar177 .= '
												</ul>
												';
$__compilerVar228 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar228 .= '
	';
$__compilerVar229 = '';
$__compilerVar229 .= '
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
$__compilerVar229 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar230 = '';
$__compilerVar230 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar230 .= '
		';
$__compilerVar231 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar231 .= '

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
$__compilerVar230 .= $__compilerVar231;
unset($__compilerVar231);
$__compilerVar230 .= '
	';
}
$__compilerVar230 .= '
	
	
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
$__compilerVar230 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar230 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar230 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar230 .= '
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
$__compilerVar230 .= '
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
$__compilerVar230 .= '
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
$__compilerVar229 .= $this->callTemplateHook('quick_search', $__compilerVar230, array());
unset($__compilerVar230);
$__compilerVar229 .= '

</div>';
$__compilerVar228 .= $__compilerVar229;
unset($__compilerVar229);
$__compilerVar228 .= '
	';
$__compilerVar232 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar232 .= '

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
$__compilerVar228 .= $__compilerVar232;
unset($__compilerVar232);
$__compilerVar228 .= '
';
}
$__compilerVar177 .= $__compilerVar228;
unset($__compilerVar228);
$__compilerVar177 .= '
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__compilerVar177 .= '
									';
if ($tabs['inbox']['selected'])
{
$__compilerVar177 .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
												</ul>
												';
$__compilerVar233 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar233 .= '
	';
$__compilerVar234 = '';
$__compilerVar234 .= '
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
$__compilerVar234 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar235 = '';
$__compilerVar235 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar235 .= '
		';
$__compilerVar236 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar236 .= '

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
$__compilerVar235 .= $__compilerVar236;
unset($__compilerVar236);
$__compilerVar235 .= '
	';
}
$__compilerVar235 .= '
	
	
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
$__compilerVar235 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar235 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar235 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar235 .= '
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
$__compilerVar235 .= '
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
$__compilerVar235 .= '
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
$__compilerVar234 .= $this->callTemplateHook('quick_search', $__compilerVar235, array());
unset($__compilerVar235);
$__compilerVar234 .= '

</div>';
$__compilerVar233 .= $__compilerVar234;
unset($__compilerVar234);
$__compilerVar233 .= '
	';
$__compilerVar237 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar237 .= '

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
$__compilerVar233 .= $__compilerVar237;
unset($__compilerVar237);
$__compilerVar233 .= '
';
}
$__compilerVar177 .= $__compilerVar233;
unset($__compilerVar233);
$__compilerVar177 .= '
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__compilerVar177 .= '
								';
}
$__compilerVar177 .= '		
	
							</ul>
							
							
							';
$__compilerVar238 = '';
$__compilerVar238 .= '
								
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 0 && $contentTemplate == ('thread_view'))
{
$__compilerVar238 .= '
										<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
									';
}
$__compilerVar238 .= '
								
									';
$__compilerVar239 = '';
$__compilerVar238 .= $this->callTemplateHook('uix_navigation_right_start', $__compilerVar239, array());
unset($__compilerVar239);
$__compilerVar238 .= '
									
									';
if (!XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar238 .= '
										';
$__compilerVar240 = '';
$__compilerVar241 = '';
$__compilerVar241 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar241 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar241 .= '
	';
$__compilerVar242 = '';
$__compilerVar241 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar242, array());
unset($__compilerVar242);
$__compilerVar241 .= '
	';
}
$__compilerVar241 .= '

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">

		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar241 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar241 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar241 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar241 .= '
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
$__compilerVar243 = '';
$__compilerVar243 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar243) !== '')
{
$__compilerVar241 .= '<div class="muted">' . $__compilerVar243 . '</div>';
}
unset($__compilerVar243);
$__compilerVar241 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar244 = '';
$__compilerVar244 .= '
					';
if ($canEditProfile)
{
$__compilerVar244 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar244 .= '
					';
if ($canEditSignature)
{
$__compilerVar244 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar244 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar244 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar244 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar244 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar244 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar245 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar245 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar244 .= $__compilerVar245;
unset($__compilerVar245);
$__compilerVar244 .= '
';
$__compilerVar241 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar244, array());
unset($__compilerVar244);
$__compilerVar241 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar246 = '';
$__compilerVar246 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar246 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar246 .= '
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
$__compilerVar246 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar246 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar241 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar246, array());
unset($__compilerVar246);
$__compilerVar241 .= '
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
$__compilerVar241 .= '
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
$__compilerVar241 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar241 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar241 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar247 = '';
$__compilerVar247 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar247 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar247 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar241 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar247, array());
unset($__compilerVar247);
$__compilerVar241 .= '
				</ul>
				';
$__compilerVar248 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar248 .= '
	';
$__compilerVar249 = '';
$__compilerVar249 .= '
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
$__compilerVar249 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar250 = '';
$__compilerVar250 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar250 .= '
		';
$__compilerVar251 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar251 .= '

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
$__compilerVar250 .= $__compilerVar251;
unset($__compilerVar251);
$__compilerVar250 .= '
	';
}
$__compilerVar250 .= '
	
	
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
$__compilerVar250 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar250 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar250 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar250 .= '
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
$__compilerVar250 .= '
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
$__compilerVar250 .= '
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
$__compilerVar249 .= $this->callTemplateHook('quick_search', $__compilerVar250, array());
unset($__compilerVar250);
$__compilerVar249 .= '

</div>';
$__compilerVar248 .= $__compilerVar249;
unset($__compilerVar249);
$__compilerVar248 .= '
	';
$__compilerVar252 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar252 .= '

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
$__compilerVar248 .= $__compilerVar252;
unset($__compilerVar252);
$__compilerVar248 .= '
';
}
$__compilerVar241 .= $__compilerVar248;
unset($__compilerVar248);
$__compilerVar241 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar241 .= '
	';
}
$__compilerVar241 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar241 .= '

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
$__compilerVar241 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar241 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar241 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar241 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar253 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar253 .= '
	';
$__compilerVar254 = '';
$__compilerVar254 .= '
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
$__compilerVar254 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar255 = '';
$__compilerVar255 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar255 .= '
		';
$__compilerVar256 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar256 .= '

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
$__compilerVar255 .= $__compilerVar256;
unset($__compilerVar256);
$__compilerVar255 .= '
	';
}
$__compilerVar255 .= '
	
	
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
$__compilerVar255 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar255 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar255 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar255 .= '
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
$__compilerVar255 .= '
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
$__compilerVar255 .= '
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
$__compilerVar254 .= $this->callTemplateHook('quick_search', $__compilerVar255, array());
unset($__compilerVar255);
$__compilerVar254 .= '

</div>';
$__compilerVar253 .= $__compilerVar254;
unset($__compilerVar254);
$__compilerVar253 .= '
	';
$__compilerVar257 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar257 .= '

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
$__compilerVar253 .= $__compilerVar257;
unset($__compilerVar257);
$__compilerVar253 .= '
';
}
$__compilerVar241 .= $__compilerVar253;
unset($__compilerVar253);
$__compilerVar241 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar241 .= '
		';
}
$__compilerVar241 .= '
		
		';
$__compilerVar258 = '';
$__compilerVar241 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar258, array());
unset($__compilerVar258);
$__compilerVar241 .= '
		
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
$__compilerVar259 = '';
$__compilerVar241 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar259, array());
unset($__compilerVar259);
$__compilerVar241 .= '
	';
}
else
{
$__compilerVar241 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar241 .= ' 
	';
}
$__compilerVar241 .= '
	
';
if (trim($__compilerVar241) !== '')
{
$__compilerVar240 .= '
' . $__compilerVar241 . '
';
}
unset($__compilerVar241);
$__compilerVar238 .= $__compilerVar240;
unset($__compilerVar240);
$__compilerVar238 .= '
									';
}
$__compilerVar238 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 1)
{
$__compilerVar238 .= '
										';
$__compilerVar260 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar260 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar260 .= '<label for="LoginControl">';
}
$__compilerVar260 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar260 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar260 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar260 .= '</label>';
}
$__compilerVar260 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar260 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar261 = '';
$__compilerVar261 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

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
$__compilerVar261 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar261 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar262 = '';
$__compilerVar262 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar262 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar262 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar262 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar262 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar262 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar262 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar262 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar262 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar262 .= '

	';
if (trim($__compilerVar262) !== '')
{
$__compilerVar261 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar262 . '
	</div>
	';
}
unset($__compilerVar262);
$__compilerVar261 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar261 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar261 .= '

</form>';
$__compilerVar260 .= $__compilerVar261;
unset($__compilerVar261);
$__compilerVar260 .= '
			</div>
		</div>
		';
}
$__compilerVar260 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar260 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar260 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar260 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar260 .= '
	
';
}
$__compilerVar238 .= $__compilerVar260;
unset($__compilerVar260);
$__compilerVar238 .= '
									';
}
$__compilerVar238 .= '
							
									';
$__compilerVar263 = '';
$__compilerVar238 .= $this->callTemplateHook('uix_navigation_right_end', $__compilerVar263, array());
unset($__compilerVar263);
$__compilerVar238 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 0)
{
$__compilerVar264 = '1';
$__compilerVar265 = '';
$__compilerVar265 .= '

';
if ($__compilerVar264 == 0)
{
$__compilerVar265 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar265 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar265 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar265 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar265 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar265 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar265 .= '
	';
}
else
{
$__compilerVar265 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar265 .= '
	';
}
$__compilerVar265 .= '
	
';
}
else if ($__compilerVar264 == 1)
{
$__compilerVar265 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar265 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar265 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar265 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar265 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar265 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar265 .= '
	';
}
else
{
$__compilerVar265 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar265 .= '
	';
}
$__compilerVar265 .= '
	
';
}
$__compilerVar265 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar265 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar264) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar265 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar265 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar265 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar265 .= '
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
$__compilerVar265 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar264) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar265 .= '
			';
if (!$__compilerVar264)
{
$__compilerVar265 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar265 .= '
			';
if ($__compilerVar264)
{
$__compilerVar265 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar265 .= '
		';
}
else
{
$__compilerVar265 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar265 .= '</a>
	</li>

';
}
$__compilerVar238 .= $__compilerVar265;
unset($__compilerVar264, $__compilerVar265);
}
$__compilerVar238 .= '
	
									';
if ($uix_searchPosition == 2)
{
$__compilerVar238 .= '
										';
$__compilerVar266 = '';
if ($canSearch)
{
$__compilerVar266 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar267 = '';
$__compilerVar267 .= '
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
$__compilerVar267 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar268 = '';
$__compilerVar268 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar268 .= '
		';
$__compilerVar269 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar269 .= '

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
$__compilerVar268 .= $__compilerVar269;
unset($__compilerVar269);
$__compilerVar268 .= '
	';
}
$__compilerVar268 .= '
	
	
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
$__compilerVar268 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar268 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar268 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar268 .= '
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
$__compilerVar268 .= '
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
$__compilerVar268 .= '
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
$__compilerVar267 .= $this->callTemplateHook('quick_search', $__compilerVar268, array());
unset($__compilerVar268);
$__compilerVar267 .= '

</div>';
$__compilerVar266 .= $__compilerVar267;
unset($__compilerVar267);
$__compilerVar266 .= '
		</li>
	
';
}
$__compilerVar238 .= $__compilerVar266;
unset($__compilerVar266);
$__compilerVar238 .= '
									';
}
$__compilerVar238 .= '
								
								';
if (trim($__compilerVar238) !== '')
{
$__compilerVar177 .= '
								
								
								<ul class="navRight visitorTabs">
								
								' . $__compilerVar238 . '
								
								</ul>
								
							';
}
unset($__compilerVar238);
$__compilerVar177 .= '
							
							';
if ($uix_searchPosition == 2)
{
$__compilerVar177 .= '
								';
$__compilerVar270 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar270 .= '

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
$__compilerVar177 .= $__compilerVar270;
unset($__compilerVar270);
$__compilerVar177 .= '
							';
}
$__compilerVar177 .= '
									
								
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar177 .= '</div>';
}
$__compilerVar177 .= '
					</div>
	
				<span class="helper"></span>
					
				</nav>
			</div>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar177 .= '</div>';
}
$__compilerVar177 .= '
		</div>
	</div>
</div>';
$__compilerVar30 .= $__compilerVar177;
unset($__compilerVar177);
}
$__compilerVar30 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_userBarLocation') == 1)
{
$__compilerVar271 = '';
$this->addRequiredExternal('css', 'moderator_bar');
$__compilerVar271 .= '

';
$__compilerVar272 = '';
$__compilerVar272 .= '
		
					';
$__compilerVar273 = '';
$__compilerVar273 .= '
						';
$__compilerVar274 = '';
$__compilerVar273 .= $this->callTemplateHook('uix_userbar_left_start', $__compilerVar274, array());
unset($__compilerVar274);
$__compilerVar273 .= '
						
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 1)
{
$__compilerVar275 = '0';
$__compilerVar276 = '';
$__compilerVar276 .= '

';
if ($__compilerVar275 == 0)
{
$__compilerVar276 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar276 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar276 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar276 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar276 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar276 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar276 .= '
	';
}
else
{
$__compilerVar276 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar276 .= '
	';
}
$__compilerVar276 .= '
	
';
}
else if ($__compilerVar275 == 1)
{
$__compilerVar276 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar276 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar276 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar276 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar276 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar276 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar276 .= '
	';
}
else
{
$__compilerVar276 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar276 .= '
	';
}
$__compilerVar276 .= '
	
';
}
$__compilerVar276 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar276 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar275) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar276 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar276 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar276 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar276 .= '
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
$__compilerVar276 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar275) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar276 .= '
			';
if (!$__compilerVar275)
{
$__compilerVar276 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar276 .= '
			';
if ($__compilerVar275)
{
$__compilerVar276 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar276 .= '
		';
}
else
{
$__compilerVar276 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar276 .= '</a>
	</li>

';
}
$__compilerVar273 .= $__compilerVar276;
unset($__compilerVar275, $__compilerVar276);
}
$__compilerVar273 .= '
						
						';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar273 .= '
							';
$__compilerVar277 = '';
$__compilerVar277 .= '	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('100%'))
{
$__compilerVar277 .= '

		';
if ($visitor['is_admin'])
{
$__compilerVar277 .= '			
			<li class="navTab">
				<a href="admin.php" target="_blank" class="acp adminLink navLink">
					<i class="uix_icon uix_icon-admin"></i> 
					<span class="itemLabel">' . 'Admin' . '</span>
				</a>
			</li>
			
			';
if ($session['permissionTest'])
{
$__compilerVar277 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
					<i class="uix_icon uix_icon-permissions"></i> 
					<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
				</a>
			</li>
			
			';
}
$__compilerVar277 .= '
		';
}
$__compilerVar277 .= '
		
		';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar277 .= '
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
$__compilerVar277 .= '
		
		';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar277 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
					<i class="uix_icon uix_icon-reports"></i> 
					<span class="itemLabel">' . 'Reports' . ':</span>
					<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
						<span class="Total">
							';
if ($session['reportCounts']['assigned'])
{
$__compilerVar277 .= '
								' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
else
{
$__compilerVar277 .= '
								' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
$__compilerVar277 .= '
						</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar277 .= '
		
		';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar277 .= '
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
$__compilerVar277 .= '
		
		';
$__compilerVar278 = '';
$__compilerVar277 .= $this->callTemplateHook('moderator_bar', $__compilerVar278, array());
unset($__compilerVar278);
$__compilerVar277 .= '	
	';
}
$__compilerVar277 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('0'))
{
$__compilerVar277 .= '

		<li class="navTab admin Popup PopupControl PopupClosed">
			<a href="';
if ($visitor['is_admin'])
{
$__compilerVar277 .= 'admin.php';
}
else
{
$__compilerVar277 .= 'javascript: void(0);';
}
$__compilerVar277 .= '" class="navLink NoPopupGadget" rel="Menu" ';
if ($visitor['is_admin'])
{
$__compilerVar277 .= 'target="_blank"';
}
$__compilerVar277 .= '>
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
$__compilerVar277 .= '
				' . 'Admin' . '
				';
}
else
{
$__compilerVar277 .= '
				Mod
				';
}
$__compilerVar277 .= ' ' . 'Menu' . '
				
				
				</h3></div>
				<ul class="secondaryContent blockLinksList">
					
	
	
					';
if ($visitor['is_admin'])
{
$__compilerVar277 .= '			
						<li class="navTab">
							<a href="admin.php" target="_blank" class="acp adminLink navLink">
								<i class="uix_icon uix_icon-admin"></i> 
								<span class="itemLabel">' . 'Admin' . '</span>
							</a>
						</li>
						
						';
if ($session['permissionTest'])
{
$__compilerVar277 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
								<i class="uix_icon uix_icon-permissions"></i> 
								<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
							</a>
						</li>
						
						';
}
$__compilerVar277 .= '
					';
}
$__compilerVar277 .= '
			
					';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar277 .= '
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
$__compilerVar277 .= '
					
					';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar277 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
								<i class="uix_icon uix_icon-reports"></i> 
								<span class="itemLabel">' . 'Reports' . ':</span>
								<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
									<span class="Total">
										';
if ($session['reportCounts']['assigned'])
{
$__compilerVar277 .= '
											' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
else
{
$__compilerVar277 .= '
											' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
$__compilerVar277 .= '
									</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar277 .= '
					
					';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar277 .= '
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
$__compilerVar277 .= '
					
					';
$__compilerVar279 = '';
$__compilerVar277 .= $this->callTemplateHook('moderator_bar', $__compilerVar279, array());
unset($__compilerVar279);
$__compilerVar277 .= '
	
				</ul>
			</div>		
		</li>
	';
}
$__compilerVar277 .= '	';
$__compilerVar273 .= $__compilerVar277;
unset($__compilerVar277);
$__compilerVar273 .= '
						';
}
$__compilerVar273 .= '
						
						';
$__compilerVar280 = '';
$__compilerVar273 .= $this->callTemplateHook('uix_userbar_left_end', $__compilerVar280, array());
unset($__compilerVar280);
$__compilerVar273 .= '
						
						';
if (trim($__compilerVar273) !== '')
{
$__compilerVar272 .= '
					<ul class="navLeft';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar272 .= ' moderatorTabs';
}
$__compilerVar272 .= '">
					
						' . $__compilerVar273 . '
		
					</ul>

					
					';
}
unset($__compilerVar273);
$__compilerVar272 .= '
					
					';
$__compilerVar281 = '';
$__compilerVar281 .= '
						
							';
$__compilerVar282 = '';
$__compilerVar281 .= $this->callTemplateHook('uix_userbar_right_start', $__compilerVar282, array());
unset($__compilerVar282);
$__compilerVar281 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar281 .= '
								';
$__compilerVar283 = '';
$__compilerVar284 = '';
$__compilerVar284 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar284 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar284 .= '
	';
$__compilerVar285 = '';
$__compilerVar284 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar285, array());
unset($__compilerVar285);
$__compilerVar284 .= '
	';
}
$__compilerVar284 .= '

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">

		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar284 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar284 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar284 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar284 .= '
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
$__compilerVar286 = '';
$__compilerVar286 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar286) !== '')
{
$__compilerVar284 .= '<div class="muted">' . $__compilerVar286 . '</div>';
}
unset($__compilerVar286);
$__compilerVar284 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar287 = '';
$__compilerVar287 .= '
					';
if ($canEditProfile)
{
$__compilerVar287 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar287 .= '
					';
if ($canEditSignature)
{
$__compilerVar287 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar287 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar287 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar287 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar287 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar287 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar288 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar288 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar287 .= $__compilerVar288;
unset($__compilerVar288);
$__compilerVar287 .= '
';
$__compilerVar284 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar287, array());
unset($__compilerVar287);
$__compilerVar284 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar289 = '';
$__compilerVar289 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar289 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar289 .= '
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
$__compilerVar289 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar289 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar284 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar289, array());
unset($__compilerVar289);
$__compilerVar284 .= '
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
$__compilerVar284 .= '
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
$__compilerVar284 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar284 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar284 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar290 = '';
$__compilerVar290 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar290 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar290 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar284 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar290, array());
unset($__compilerVar290);
$__compilerVar284 .= '
				</ul>
				';
$__compilerVar291 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar291 .= '
	';
$__compilerVar292 = '';
$__compilerVar292 .= '
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
$__compilerVar292 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar293 = '';
$__compilerVar293 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar293 .= '
		';
$__compilerVar294 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar294 .= '

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
$__compilerVar293 .= $__compilerVar294;
unset($__compilerVar294);
$__compilerVar293 .= '
	';
}
$__compilerVar293 .= '
	
	
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
$__compilerVar293 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar293 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar293 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar293 .= '
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
$__compilerVar293 .= '
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
$__compilerVar293 .= '
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
$__compilerVar292 .= $this->callTemplateHook('quick_search', $__compilerVar293, array());
unset($__compilerVar293);
$__compilerVar292 .= '

</div>';
$__compilerVar291 .= $__compilerVar292;
unset($__compilerVar292);
$__compilerVar291 .= '
	';
$__compilerVar295 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar295 .= '

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
$__compilerVar291 .= $__compilerVar295;
unset($__compilerVar295);
$__compilerVar291 .= '
';
}
$__compilerVar284 .= $__compilerVar291;
unset($__compilerVar291);
$__compilerVar284 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar284 .= '
	';
}
$__compilerVar284 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar284 .= '

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
$__compilerVar284 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar284 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar284 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar284 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar296 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar296 .= '
	';
$__compilerVar297 = '';
$__compilerVar297 .= '
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
$__compilerVar297 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar298 = '';
$__compilerVar298 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar298 .= '
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
$__compilerVar298 .= $__compilerVar299;
unset($__compilerVar299);
$__compilerVar298 .= '
	';
}
$__compilerVar298 .= '
	
	
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
$__compilerVar298 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar298 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar298 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar298 .= '
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
$__compilerVar298 .= '
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
$__compilerVar298 .= '
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
$__compilerVar297 .= $this->callTemplateHook('quick_search', $__compilerVar298, array());
unset($__compilerVar298);
$__compilerVar297 .= '

</div>';
$__compilerVar296 .= $__compilerVar297;
unset($__compilerVar297);
$__compilerVar296 .= '
	';
$__compilerVar300 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar300 .= '

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
$__compilerVar296 .= $__compilerVar300;
unset($__compilerVar300);
$__compilerVar296 .= '
';
}
$__compilerVar284 .= $__compilerVar296;
unset($__compilerVar296);
$__compilerVar284 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar284 .= '
		';
}
$__compilerVar284 .= '
		
		';
$__compilerVar301 = '';
$__compilerVar284 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar301, array());
unset($__compilerVar301);
$__compilerVar284 .= '
		
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
$__compilerVar302 = '';
$__compilerVar284 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar302, array());
unset($__compilerVar302);
$__compilerVar284 .= '
	';
}
else
{
$__compilerVar284 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar284 .= ' 
	';
}
$__compilerVar284 .= '
	
';
if (trim($__compilerVar284) !== '')
{
$__compilerVar283 .= '
' . $__compilerVar284 . '
';
}
unset($__compilerVar284);
$__compilerVar281 .= $__compilerVar283;
unset($__compilerVar283);
$__compilerVar281 .= '
							';
}
$__compilerVar281 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 2)
{
$__compilerVar281 .= '
								';
$__compilerVar303 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar303 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar303 .= '<label for="LoginControl">';
}
$__compilerVar303 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar303 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar303 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar303 .= '</label>';
}
$__compilerVar303 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar303 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar304 = '';
$__compilerVar304 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

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
$__compilerVar304 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar304 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar305 = '';
$__compilerVar305 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar305 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar305 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar305 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar305 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar305 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar305 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar305 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar305 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar305 .= '

	';
if (trim($__compilerVar305) !== '')
{
$__compilerVar304 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar305 . '
	</div>
	';
}
unset($__compilerVar305);
$__compilerVar304 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar304 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar304 .= '

</form>';
$__compilerVar303 .= $__compilerVar304;
unset($__compilerVar304);
$__compilerVar303 .= '
			</div>
		</div>
		';
}
$__compilerVar303 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar303 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar303 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar303 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar303 .= '
	
';
}
$__compilerVar281 .= $__compilerVar303;
unset($__compilerVar303);
$__compilerVar281 .= '
							';
}
$__compilerVar281 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 1 && $contentTemplate == ('thread_view'))
{
$__compilerVar281 .= '
								<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
							';
}
$__compilerVar281 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar281 .= '
								';
$__compilerVar306 = '';
if ($canSearch)
{
$__compilerVar306 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar307 = '';
$__compilerVar307 .= '
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
$__compilerVar307 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar308 = '';
$__compilerVar308 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar308 .= '
		';
$__compilerVar309 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar309 .= '

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
$__compilerVar308 .= $__compilerVar309;
unset($__compilerVar309);
$__compilerVar308 .= '
	';
}
$__compilerVar308 .= '
	
	
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
$__compilerVar308 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar308 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar308 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar308 .= '
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
$__compilerVar308 .= '
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
$__compilerVar308 .= '
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
$__compilerVar307 .= $this->callTemplateHook('quick_search', $__compilerVar308, array());
unset($__compilerVar308);
$__compilerVar307 .= '

</div>';
$__compilerVar306 .= $__compilerVar307;
unset($__compilerVar307);
$__compilerVar306 .= '
		</li>
	
';
}
$__compilerVar281 .= $__compilerVar306;
unset($__compilerVar306);
$__compilerVar281 .= '
							';
}
$__compilerVar281 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 1)
{
$__compilerVar310 = '1';
$__compilerVar311 = '';
$__compilerVar311 .= '

';
if ($__compilerVar310 == 0)
{
$__compilerVar311 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar311 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar311 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar311 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar311 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar311 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar311 .= '
	';
}
else
{
$__compilerVar311 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar311 .= '
	';
}
$__compilerVar311 .= '
	
';
}
else if ($__compilerVar310 == 1)
{
$__compilerVar311 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar311 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar311 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar311 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar311 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar311 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar311 .= '
	';
}
else
{
$__compilerVar311 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar311 .= '
	';
}
$__compilerVar311 .= '
	
';
}
$__compilerVar311 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar311 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar310) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar311 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar311 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar311 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar311 .= '
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
$__compilerVar311 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar310) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar311 .= '
			';
if (!$__compilerVar310)
{
$__compilerVar311 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar311 .= '
			';
if ($__compilerVar310)
{
$__compilerVar311 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar311 .= '
		';
}
else
{
$__compilerVar311 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar311 .= '</a>
	</li>

';
}
$__compilerVar281 .= $__compilerVar311;
unset($__compilerVar310, $__compilerVar311);
}
$__compilerVar281 .= '
							
							';
$__compilerVar312 = '';
$__compilerVar281 .= $this->callTemplateHook('uix_userbar_right_end', $__compilerVar312, array());
unset($__compilerVar312);
$__compilerVar281 .= '
							
						';
if (trim($__compilerVar281) !== '')
{
$__compilerVar272 .= '
					
					
						<ul class="navRight' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar')) ? (' visitorTabs') : ('')) . '">
						
						' . $__compilerVar281 . '
						
						</ul>
						
					';
}
unset($__compilerVar281);
$__compilerVar272 .= '
					
					
					';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar272 .= '
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
$__compilerVar272 .= $__compilerVar313;
unset($__compilerVar313);
$__compilerVar272 .= '
					';
}
$__compilerVar272 .= '
					
				
				';
if (trim($__compilerVar272) !== '')
{
$__compilerVar271 .= '



<div id="userBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyUserBar')) ? ('stickyTop') : ('')) . ' ' . (($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3) ? ('withSearch') : ('')) . '">


	<div class="sticky_wrapper">

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar271 .= '
	<div class="pageWidth">
	';
}
$__compilerVar271 .= '
		
		<div class="pageContent">
		
			<div class="navTabs">
		
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar271 .= '
			<div class="pageWidth">
			';
}
$__compilerVar271 .= '
		
				' . $__compilerVar272 . '
			
			</div>

			<span class="helper"></span>
		</div>
	</div>
	</div>
</div>

';
if (XenForo_Template_Helper_Core::styleProperty('uix_jsInsideTemplates'))
{
$__compilerVar271 .= '
<script>if (typeof(uix) !== "undefined" && typeof(uix.templates) !== "undefined") uix.templates.userBar();</script>
';
}
$__compilerVar271 .= '

';
}
unset($__compilerVar272);
$__compilerVar30 .= $__compilerVar271;
unset($__compilerVar271);
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
$__compilerVar314 = '';
$__compilerVar28 .= $this->callTemplateHook('page_container_content_top', $__compilerVar314, array());
unset($__compilerVar314);
$__compilerVar28 .= '
			
			';
$__compilerVar315 = '';
$__compilerVar316 = '';
$__compilerVar316 .= '
	
		';
$__compilerVar317 = '';
$__compilerVar317 .= '
				';
$__compilerVar318 = '';
$__compilerVar317 .= $this->callTemplateHook('ad_above_top_breadcrumb', $__compilerVar318, array());
unset($__compilerVar318);
$__compilerVar317 .= '	
				
				
				
				
				
				
			';
if (trim($__compilerVar317) !== '')
{
$__compilerVar316 .= '
			' . $__compilerVar317 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar316 .= '
			<div>' . 'Template' . ': ad_above_top_breadcrumb</div>
		';
}
unset($__compilerVar317);
$__compilerVar316 .= '
	
	';
if (trim($__compilerVar316) !== '')
{
$__compilerVar315 .= '
	
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers')) ? ('section') : ('sectionMain')) . ' funbox">
	<div class="funboxWrapper">
	' . $__compilerVar316 . '
	</div>
	</div>
';
}
unset($__compilerVar316);
$__compilerVar28 .= $__compilerVar315;
unset($__compilerVar315);
$__compilerVar28 .= '

			';
$__compilerVar319 = '';
$__compilerVar319 .= '
			';
if (!$uix_hideTopBreadcrumb && !(($selectedTabId == $homeTabId) && ($homeTabId != ('forums') && $homeTabId) && XenForo_Template_Helper_Core::styleProperty('uix_removeBreadCrumbOnIndex')) && !($contentTemplate == ('forum_list') && XenForo_Template_Helper_Core::styleProperty('uix_removeBreadCrumbOnForumIndex')))
{
$__compilerVar319 .= '
			<div class="breadBoxTop ' . (($topctrl && !XenForo_Template_Helper_Core::styleProperty('uix_moveTopCtrl')) ? ('withTopCtrl') : ('')) . ' ' . (($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 4) ? ('withSearch') : ('')) . '">
				';
if ($topctrl && !XenForo_Template_Helper_Core::styleProperty('uix_moveTopCtrl'))
{
$__compilerVar319 .= '<div class="topCtrl">' . $topctrl . '</div>';
}
$__compilerVar319 .= '
				';
$__compilerVar320 = '';
$__compilerVar320 .= '1';
$__compilerVar321 = '';
$__compilerVar321 .= '

<nav>

	';
$__compilerVar322 = '';
$__compilerVar322 .= '	
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar') && $sidebar && $uix_canCollapseSidebar && $visitor['user_id'] > 0)
{
$__compilerVar322 .= '
				';
if ($visitor['uix_sidebar'] > $uix_currentTimestamp)
{
$__compilerVar322 .= '
					<li class="uix_sidebar_collapse toggleList_item uix_sidebar_collapsed">
				';
}
else
{
$__compilerVar322 .= '
					<li class="uix_sidebar_collapse toggleList_item">
				';
}
$__compilerVar322 .= '
					<a href="#" title="' . 'Toggle Sidebar' . '" class="Tooltip" ' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('') : ('data-tipclass="flipped"')) . '>
						<i class="uix_icon uix_icon-sidebarCollapse"></i>
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar_usePhrases'))
{
$__compilerVar322 .= ' 
							<span class="uix_sidebar_collapse_phrase_close">
								' . 'Close Sidebar' . '
							</span>
							<span class="uix_sidebar_collapse_phrase_open">
								' . 'Open Sidebar' . '
							</span>
						';
}
$__compilerVar322 .= '
					</a>
				</li>
			';
}
$__compilerVar322 .= '
			';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 4)
{
$__compilerVar322 .= '<li class="toggleList_item toggleList_item_search">';
$__compilerVar323 = '';
$__compilerVar323 .= '
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
$__compilerVar323 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar324 = '';
$__compilerVar324 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar324 .= '
		';
$__compilerVar325 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar325 .= '

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
$__compilerVar324 .= $__compilerVar325;
unset($__compilerVar325);
$__compilerVar324 .= '
	';
}
$__compilerVar324 .= '
	
	
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
$__compilerVar324 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar324 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar324 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar324 .= '
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
$__compilerVar324 .= '
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
$__compilerVar324 .= '
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
$__compilerVar323 .= $this->callTemplateHook('quick_search', $__compilerVar324, array());
unset($__compilerVar324);
$__compilerVar323 .= '

</div>';
$__compilerVar322 .= $__compilerVar323;
unset($__compilerVar323);
$__compilerVar322 .= '</li>';
}
$__compilerVar322 .= '
		';
if (trim($__compilerVar322) !== '')
{
$__compilerVar321 .= '
	<ul class="uix_breadCrumb_toggleList">
		' . $__compilerVar322 . '
	</ul>
	';
}
unset($__compilerVar322);
$__compilerVar321 .= '
	
	';
if (!$quickNavSelected AND $navigation)
{
$__compilerVar321 .= '
		';
foreach ($navigation AS $breadcrumb)
{
$__compilerVar321 .= '
			';
if ($breadcrumb['node_id'])
{
$__compilerVar321 .= '
				';
$quickNavSelected = '';
$quickNavSelected .= 'node-' . htmlspecialchars($breadcrumb['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar321 .= '
			';
}
$__compilerVar321 .= '
		';
}
$__compilerVar321 .= '
	';
}
$__compilerVar321 .= '

	<fieldset class="breadcrumb">
		<a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>
			
		<div class="boardTitle"><strong>' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '</strong></div>
		
		<span class="crumbs">
			';
if ($showHomeLink)
{
$__compilerVar321 .= '
				<span class="crust homeCrumb"' . (($__compilerVar320) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($__compilerVar320) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar320) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon'))
{
$__compilerVar321 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar321 .= 'Home';
}
$__compilerVar321 .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span></span>')) . '</span>
				</span>
			';
}
else if ($selectedTabId != $homeTabId)
{
$__compilerVar321 .= '
				<span class="crust homeCrumb"' . (($__compilerVar320) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($__compilerVar320) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar320) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon'))
{
$__compilerVar321 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar321 .= htmlspecialchars($homeTab['title'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar321 .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span></span>')) . '</span>
				</span>
			';
}
$__compilerVar321 .= '
			
			';
if ($selectedTab)
{
$__compilerVar321 .= '
				<span class="crust selectedTabCrumb"' . (($__compilerVar320) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($selectedTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($__compilerVar320) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar320) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon') && $selectedTabId == $homeTabId && !$showHomeLink)
{
$__compilerVar321 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar321 .= htmlspecialchars($selectedTab['title'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar321 .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span>&gt;</span>')) . '</span>
				</span>
			';
}
$__compilerVar321 .= '
			
			';
if ($navigation)
{
$__compilerVar321 .= '
				';
$i = 0;
$count = count($navigation);
foreach ($navigation AS $breadcrumb)
{
$i++;
$__compilerVar321 .= '
					<span class="crust"' . (($__compilerVar320) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
						<a href="' . $breadcrumb['href'] . '" class="crumb"' . (($__compilerVar320) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar320) ? (' itemprop="title"') : ('')) . '>' . $breadcrumb['value'] . '</span></a>
						<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span>&gt;</span>')) . '</span>
					</span>
				';
}
$__compilerVar321 .= '
			';
}
$__compilerVar321 .= '
		</span>
	</fieldset>
</nav>';
$__compilerVar319 .= $__compilerVar321;
unset($__compilerVar320, $__compilerVar321);
$__compilerVar319 .= '
				';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 4)
{
$__compilerVar319 .= '
					';
$__compilerVar326 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar326 .= '

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
$__compilerVar319 .= $__compilerVar326;
unset($__compilerVar326);
$__compilerVar319 .= '
				';
}
$__compilerVar319 .= '
			</div>
			';
}
$__compilerVar319 .= '
			';
$__compilerVar28 .= $this->callTemplateHook('page_container_breadcrumb_top', $__compilerVar319, array());
unset($__compilerVar319);
$__compilerVar28 .= '
						
			';
$__compilerVar327 = '';
$__compilerVar328 = '';
$__compilerVar328 .= '
	
		';
$__compilerVar329 = '';
$__compilerVar329 .= '
				';
$__compilerVar330 = '';
$__compilerVar329 .= $this->callTemplateHook('ad_below_top_breadcrumb', $__compilerVar330, array());
unset($__compilerVar330);
$__compilerVar329 .= '
				
				
				
				
				
				
				
			';
if (trim($__compilerVar329) !== '')
{
$__compilerVar328 .= '
			' . $__compilerVar329 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar328 .= '
			<div>' . 'Template' . ': ad_below_top_breadcrumb</div>
		';
}
unset($__compilerVar329);
$__compilerVar328 .= '
	
	';
if (trim($__compilerVar328) !== '')
{
$__compilerVar327 .= '
	
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers')) ? ('section') : ('sectionMain')) . ' funbox">
	<div class="funboxWrapper">
	' . $__compilerVar328 . '
	</div>
	</div>
	
';
}
unset($__compilerVar328);
$__compilerVar28 .= $__compilerVar327;
unset($__compilerVar327);
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
$__compilerVar331 = '';
$__compilerVar331 .= '

';
$uix_showWelcomeBlock_overRide = '';
$uix_showWelcomeBlock_overRide .= htmlspecialchars($uix_showWelcomeBlock, ENT_QUOTES, 'UTF-8');
$__compilerVar331 .= '


';
if (!XenForo_Template_Helper_Core::styleProperty('uix_useStyleProperties_welcomeBlock'))
{
$__compilerVar331 .= '
	
	';
$uix_showWelcomeBlock = '';
$uix_showWelcomeBlock .= htmlspecialchars($xenOptions['uix_enableWelcomeBlock'], ENT_QUOTES, 'UTF-8');
$__compilerVar331 .= '
	';
$uix_welcomeBlock_showAllTemplates = '';
$uix_welcomeBlock_showAllTemplates .= htmlspecialchars($xenOptions['uix_welcomeBlock_showAllTemplates'], ENT_QUOTES, 'UTF-8');
$__compilerVar331 .= '
	
	';
$uix_welcomeBlockButton_url = '';
$uix_welcomeBlockButton_url .= $xenOptions['uix_welcomeBlockButton_url'];
$__compilerVar331 .= '
	';
$uix_welcomeBlockButton_text = '';
$uix_welcomeBlockButton_text .= $xenOptions['uix_welcomeBlockButton_text'];
$__compilerVar331 .= '
	';
$uix_welcomeBlockHeader_text = '';
$uix_welcomeBlockHeader_text .= $xenOptions['uix_welcomeBlockHeader_text'];
$__compilerVar331 .= '
	';
$uix_welcomeBlockMessage_text = '';
$uix_welcomeBlockMessage_text .= $xenOptions['uix_welcomeBlockMessage_text'];
$__compilerVar331 .= '
	';
$uix_welcomeBlockIcon_class = '';
$uix_welcomeBlockIcon_class .= $xenOptions['uix_welcomeBlockIcon_class'];
$__compilerVar331 .= '
	

';
}
else
{
$__compilerVar331 .= '


	';
$uix_showWelcomeBlock = '';
$uix_showWelcomeBlock .= XenForo_Template_Helper_Core::styleProperty('uix_showWelcomeBlock');
$__compilerVar331 .= '
	';
$uix_welcomeBlock_showAllTemplates = '';
$uix_welcomeBlock_showAllTemplates .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_showAllTemplates');
$__compilerVar331 .= '
	
	';
$uix_welcomeBlockButton_url = '';
$uix_welcomeBlockButton_url .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockButton_url');
$__compilerVar331 .= '
	';
$uix_welcomeBlockButton_text = '';
$uix_welcomeBlockButton_text .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockButton_text');
$__compilerVar331 .= '
	';
$uix_welcomeBlockHeader_text = '';
$uix_welcomeBlockHeader_text .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockHeader_text');
$__compilerVar331 .= '
	';
$uix_welcomeBlockMessage_text = '';
$uix_welcomeBlockMessage_text .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockMessage_text');
$__compilerVar331 .= '
	';
$uix_welcomeBlockIcon_class = '';
$uix_welcomeBlockIcon_class .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockIcon_class');
$__compilerVar331 .= '

';
}
$__compilerVar331 .= '



';
$uix_boolean_welcomeBlock = '';
$uix_boolean_welcomeBlock .= (($uix_showWelcomeBlock_overRide || ($uix_showWelcomeBlock && !$uix_hideWelcomeBlock && $uix_canViewWelcomeBlock && ($contentTemplate == ('forum_list') || $uix_welcomeBlock_showAllTemplates))) ? ('1') : ('0'));
$__compilerVar331 .= '

';
if ($uix_boolean_welcomeBlock)
{
$__compilerVar331 .= '
	';
$this->addRequiredExternal('css', 'uix_welcomeBlock');
$__compilerVar331 .= '
	<div id="uix_welcomeBlock" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_showWelcomeBlock_fixed')) ? ('uix_welcomeBlock_fixed') : ('')) . '"> 
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_custom'))
{
$__compilerVar331 .= '
			';
$__compilerVar332 = '';
$__compilerVar332 .= '<div class="uix_welcomeBlock_wrap">
	<div class="uix_welcomeBlock_content">
		<a href="#" class="close"></a>
		
		';
$__compilerVar333 = '';
$__compilerVar333 .= '
			';
if ($uix_welcomeBlockIcon_class)
{
$__compilerVar333 .= '<i class="uix_icon ' . htmlspecialchars($uix_welcomeBlockIcon_class, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar333 .= '
			';
if ($uix_welcomeBlockHeader_text)
{
$__compilerVar333 .= '<span>' . $uix_welcomeBlockHeader_text . '</span>';
}
$__compilerVar333 .= '
			';
if (trim($__compilerVar333) !== '')
{
$__compilerVar332 .= '

		<h3 class="uix_welcomeBlockHeader">
			' . $__compilerVar333 . '
		</h3>
		';
}
unset($__compilerVar333);
$__compilerVar332 .= '
		
		';
if ($uix_welcomeBlockMessage_text)
{
$__compilerVar332 .= '<p class="uix_welcomeBlockMessage">' . $uix_welcomeBlockMessage_text . '</p>';
}
$__compilerVar332 .= '
		';
if ($uix_welcomeBlockButton_url)
{
$__compilerVar332 .= '<a href="' . htmlspecialchars($uix_welcomeBlockButton_url, ENT_QUOTES, 'UTF-8') . '" class="callToAction"><span>' . htmlspecialchars($uix_welcomeBlockButton_text, ENT_QUOTES, 'UTF-8') . '</span></a>';
}
$__compilerVar332 .= '

	</div>
</div>';
$__compilerVar331 .= $__compilerVar332;
unset($__compilerVar332);
$__compilerVar331 .= '
		';
}
else
{
$__compilerVar331 .= '
			' . '
		';
}
$__compilerVar331 .= '
	</div>
';
}
$__compilerVar331 .= '	';
$__compilerVar28 .= $__compilerVar331;
unset($__compilerVar331);
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
$__compilerVar334 = '';
$__compilerVar334 .= '
						';
$__compilerVar335 = '';
if ($notices['block'])
{
$__compilerVar335 .= '

';
$this->addRequiredExternal('css', 'notices');
$__compilerVar335 .= '
';
$this->addRequiredExternal('css', 'panel_scroller');
$__compilerVar335 .= '
' . '

<div class="' . ((XenForo_Template_Helper_Core::styleProperty('scrollableNotices')) ? ('PanelScroller') : ('PanelScrollerOff')) . ' Notices" data-vertical="' . XenForo_Template_Helper_Core::styleProperty('noticeVertical') . '" data-speed="' . XenForo_Template_Helper_Core::styleProperty('noticeSpeed') . '" data-interval="' . XenForo_Template_Helper_Core::styleProperty('noticeInterval') . '">
	<div class="scrollContainer">
		<div class="PanelContainer">
			<ol class="Panels">
				';
foreach ($notices['block'] AS $noticeId => $notice)
{
$__compilerVar335 .= '
					';
$__compilerVar336 = '';
$__compilerVar336 .= $notice['message'];
$__compilerVar337 = '';
$__compilerVar337 .= '<li class="panel Notice DismissParent notice_' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($notice['visibility'], ENT_QUOTES, 'UTF-8') . '" data-notice="' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '">
	';
if ($notice['imageUrl'])
{
$__compilerVar337 .= '
		<div class="blockImage ' . htmlspecialchars($notice['display_image'], ENT_QUOTES, 'UTF-8') . '">
			<img src="' . htmlspecialchars($notice['imageUrl'], ENT_QUOTES, 'UTF-8') . '" alt="" />
		</div>
	';
}
$__compilerVar337 .= '
	<div class="' . (($notice['wrap']) ? ('baseHtml noticeContent') : ('')) . (($notice['imageUrl']) ? (' hasImage') : ('')) . '">' . $__compilerVar336 . '</div>
	
	';
if ($notice['dismissible'])
{
$__compilerVar337 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account/dismiss-notice', '', array(
'notice_id' => $noticeId
)) . '"
			title="' . 'Dismiss Notice' . '" class="DismissCtrl Tooltip" data-offsetx="7" data-tipclass="flipped">' . 'Dismiss Notice' . '</a>';
}
$__compilerVar337 .= '
</li>';
$__compilerVar335 .= $__compilerVar337;
unset($__compilerVar336, $__compilerVar337);
$__compilerVar335 .= '
				';
}
$__compilerVar335 .= '
			</ol>
		</div>
	</div>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('scrollableNotices') AND XenForo_Template_Helper_Core::numberFormat(count($notices['block']), '0') > 1)
{
$__compilerVar335 .= '<div class="navContainer">
		<span class="navControls Nav JsOnly">
			';
$i = 0;
foreach ($notices['block'] AS $noticeId => $notice)
{
$i++;
$__compilerVar335 .= '
				<a id="n' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '" href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#n' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '"' . (($i == 1) ? (' class="current"') : ('')) . '>
					<span class="arrow"><span></span></span>
					<!--' . htmlspecialchars($i, ENT_QUOTES, 'UTF-8') . ' -->' . htmlspecialchars($notice['title'], ENT_QUOTES, 'UTF-8') . '</a>
			';
}
$__compilerVar335 .= '
		</span>
	</div>';
}
$__compilerVar335 .= '
</div>

';
}
$__compilerVar335 .= '

';
if ($notices['floating'])
{
$__compilerVar335 .= '
	';
$this->addRequiredExternal('css', 'notices');
$__compilerVar335 .= '
	
	<div class="FloatingContainer Notices">
		';
foreach ($notices['floating'] AS $noticeId => $notice)
{
$__compilerVar335 .= '
			<div class="DismissParent Notice notice_' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($notice['visibility'], ENT_QUOTES, 'UTF-8') . '" data-notice="' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '" data-delay-duration="' . htmlspecialchars($notice['delay_duration'], ENT_QUOTES, 'UTF-8') . '" data-display-duration="' . htmlspecialchars($notice['display_duration'], ENT_QUOTES, 'UTF-8') . '" data-auto-dismiss="' . htmlspecialchars($notice['auto_dismiss'], ENT_QUOTES, 'UTF-8') . '">
				<div class="floatingItem ' . (($notice['display_style'] == ('custom')) ? (htmlspecialchars($notice['css_class'], ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($notice['display_style'], ENT_QUOTES, 'UTF-8'))) . '">
					';
if ($notice['dismissible'])
{
$__compilerVar335 .= '
						<a href="' . XenForo_Template_Helper_Core::link('account/dismiss-notice', '', array(
'notice_id' => $noticeId
)) . '"
							title="' . 'Dismiss Notice' . '" class="DismissCtrl Tooltip" data-offsetx="7" data-tipclass="flipped">' . 'Dismiss Notice' . '</a>';
}
$__compilerVar335 .= '
					';
if ($notice['imageUrl'])
{
$__compilerVar335 .= '
						<div class="floatingImage ' . htmlspecialchars($notice['display_image'], ENT_QUOTES, 'UTF-8') . '">
							<img src="' . htmlspecialchars($notice['imageUrl'], ENT_QUOTES, 'UTF-8') . '" alt="" />
						</div>
					';
}
$__compilerVar335 .= '
					<div class="' . (($notice['imageUrl']) ? ('hasImage') : ('')) . ' ' . (($notice['wrap']) ? ('baseHtml noticeContent') : ('')) . '">
						' . $notice['message'] . '
					</div>
				</div>
			</div>
		';
}
$__compilerVar335 .= '
	</div>
';
}
$__compilerVar334 .= $__compilerVar335;
unset($__compilerVar335);
$__compilerVar334 .= '						
						';
$__compilerVar28 .= $this->callTemplateHook('page_container_notices', $__compilerVar334, array());
unset($__compilerVar334);
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
$__compilerVar338 = '';
$__compilerVar338 .= '
						';
if (!$noH1)
{
$__compilerVar338 .= '
							';
if (!$uix_hidePageTitle && !(($selectedTabId == $homeTabId) && ($homeTabId != ('forums') && $homeTabId) && XenForo_Template_Helper_Core::styleProperty('uix_removeHomePageTitle')) && !($contentTemplate == ('forum_list') && XenForo_Template_Helper_Core::styleProperty('uix_removeIndexPageTitle')))
{
$__compilerVar338 .= '				
								<!-- h1 title, description -->
								<div class="titleBar">
									' . $beforeH1 . '
									<h1>';
if ($h1)
{
$__compilerVar338 .= $h1;
}
else if ($title)
{
$__compilerVar338 .= $title;
}
else
{
$__compilerVar338 .= htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar338 .= '</h1>
									
									';
if ($pageDescription['content'])
{
$__compilerVar338 .= '<p id="pageDescription" class="muted ' . htmlspecialchars($pageDescription['class'], ENT_QUOTES, 'UTF-8') . '">' . $pageDescription['content'] . '</p>';
}
$__compilerVar338 .= '
								</div>
							';
}
$__compilerVar338 .= '
						';
}
$__compilerVar338 .= '
						';
$__compilerVar28 .= $this->callTemplateHook('page_container_content_title_bar', $__compilerVar338, array());
unset($__compilerVar338);
$__compilerVar28 .= '
						
						';
$__compilerVar339 = '';
$__compilerVar340 = '';
$__compilerVar340 .= '
	
		';
$__compilerVar341 = '';
$__compilerVar341 .= '
				';
$__compilerVar342 = '';
$__compilerVar341 .= $this->callTemplateHook('ad_above_content', $__compilerVar342, array());
unset($__compilerVar342);
$__compilerVar341 .= '	
				
				
				
				
				
			';
if (trim($__compilerVar341) !== '')
{
$__compilerVar340 .= '
			' . $__compilerVar341 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar340 .= '
			<div>' . 'Template' . ': ad_above_content</div>
		';
}
unset($__compilerVar341);
$__compilerVar340 .= '
	
	';
if (trim($__compilerVar340) !== '')
{
$__compilerVar339 .= '
	
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers')) ? ('section') : ('sectionMain')) . ' funbox">
	<div class="funboxWrapper">
	' . $__compilerVar340 . '
	</div>
	</div>
';
}
unset($__compilerVar340);
$__compilerVar28 .= $__compilerVar339;
unset($__compilerVar339);
$__compilerVar28 .= '
						
						<!-- main template -->
						' . $contents . '
						
						';
$__compilerVar343 = '';
$__compilerVar344 = '';
$__compilerVar344 .= '
	
		';
$__compilerVar345 = '';
$__compilerVar345 .= '
				';
$__compilerVar346 = '';
$__compilerVar345 .= $this->callTemplateHook('ad_below_content', $__compilerVar346, array());
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
			<div>' . 'Template' . ': ad_below_content</div>
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
						
						';
if (!$visitor['user_id'] && !$hideLoginBar)
{
$__compilerVar28 .= '
							<!-- login form, to be moved to the upper drop-down -->
							';
$__compilerVar347 = '';
$__compilerVar347 .= '

';
$__compilerVar348 = '';
$__compilerVar348 .= '
';
if ($xenOptions['facebookAppId'])
{
$eAuth = '';
$eAuth .= '1';
}
$__compilerVar348 .= '
';
if ($xenOptions['twitterAppKey'])
{
$eAuth = '';
$eAuth .= '1';
}
$__compilerVar348 .= '
';
if ($xenOptions['googleClientId'])
{
$eAuth = '';
$eAuth .= '1';
}
$__compilerVar348 .= '
';
$__compilerVar347 .= $this->callTemplateHook('login_bar_eauth_set', $__compilerVar348, array());
unset($__compilerVar348);
$__compilerVar347 .= '

<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm ' . (($eAuth) ? ('eAuth') : ('')) . '" id="login" style="display:none">

	';
$__compilerVar349 = '';
$__compilerVar349 .= '
				';
$__compilerVar350 = '';
$__compilerVar350 .= '
				';
if ($xenOptions['facebookAppId'])
{
$__compilerVar350 .= '
					';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar350 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="110"><span>' . 'Log in with Facebook' . '</span></a></li>
				';
}
$__compilerVar350 .= '
				
				';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar350 .= '
					';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar350 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="110"><span>' . 'Log in with Twitter' . '</span></a></li>
				';
}
$__compilerVar350 .= '
				
				';
if ($xenOptions['googleClientId'])
{
$__compilerVar350 .= '
					';
$this->addRequiredExternal('css', 'google');
$__compilerVar350 .= '
					<li><span class="googleLogin GoogleLogin JsOnly" tabindex="110" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></li>
				';
}
$__compilerVar350 .= '
				';
$__compilerVar349 .= $this->callTemplateHook('login_bar_eauth_items', $__compilerVar350, array());
unset($__compilerVar350);
$__compilerVar349 .= '
			';
if (trim($__compilerVar349) !== '')
{
$__compilerVar347 .= '
		<ul id="eAuthUnit">
			' . $__compilerVar349 . '
		</ul>
	';
}
unset($__compilerVar349);
$__compilerVar347 .= '

	<div class="ctrlWrapper">
		<dl class="ctrlUnit">
			<dt><label for="LoginControl">' . 'Your name or email address' . ':</label></dt>
			<dd><input type="text" name="login" id="LoginControl" class="textCtrl" tabindex="101" /></dd>
		</dl>
	
	';
if ($xenOptions['registrationSetup']['enabled'])
{
$__compilerVar347 .= '
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
$__compilerVar347 .= '
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
$__compilerVar347 .= '
		
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
$__compilerVar28 .= $__compilerVar347;
unset($__compilerVar347);
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
$__compilerVar351 = '';
$__compilerVar351 .= '
								';
$__compilerVar352 = '';
$__compilerVar353 = '';
$__compilerVar353 .= '
		
			';
$__compilerVar354 = '';
$__compilerVar354 .= '
					';
$__compilerVar355 = '';
$__compilerVar354 .= $this->callTemplateHook('ad_sidebar_top', $__compilerVar355, array());
unset($__compilerVar355);
$__compilerVar354 .= '
					
					
					
					
					
					
				';
if (trim($__compilerVar354) !== '')
{
$__compilerVar353 .= '
				' . $__compilerVar354 . '
			';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar353 .= '
				<div>' . 'Template' . ': ad_sidebar_top</div>
			';
}
unset($__compilerVar354);
$__compilerVar353 .= '
		
		';
if (trim($__compilerVar353) !== '')
{
$__compilerVar352 .= '
	
	<div class="section funbox">
		<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers_sidebar')) ? ('') : ('secondaryContent')) . ' funboxWrapper">
		' . $__compilerVar353 . '
		</div>
	</div>
	
';
}
unset($__compilerVar353);
$__compilerVar351 .= $__compilerVar352;
unset($__compilerVar352);
$__compilerVar351 .= '
								';
if (!$noVisitorPanel)
{
$__compilerVar356 = '';
if ($visitor['user_id'])
{
$__compilerVar356 .= '

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
$__compilerVar357 = '';
$__compilerVar357 .= '
				<dl class="pairsJustified"><dt>' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorStatsIcons')) ? ('<i class="uix_icon uix_icon-comment Tooltip" title="' . XenForo_Template_Helper_Core::numberFormat($visitor['message_count'], '0') . ' ' . 'Messages' . '"></i>') : ('Messages' . ':')) . '</dt><dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['message_count'], '0') . '</dd></dl>
				<dl class="pairsJustified"><dt>' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorStatsIcons')) ? ('<i class="uix_icon uix_icon-thumbsUp Tooltip" title="' . XenForo_Template_Helper_Core::numberFormat($visitor['like_count'], '0') . ' ' . 'Likes' . '"></i>') : ('Likes' . ':')) . '</dt><dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['like_count'], '0') . '</dd></dl>
				';
if ($xenOptions['enableTrophies'])
{
$__compilerVar357 .= '<dl class="pairsJustified"><dt>' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorStatsIcons')) ? ('<i class="uix_icon uix_icon-trophy Tooltip" title="' . XenForo_Template_Helper_Core::numberFormat($visitor['trophy_points'], '0') . ' ' . 'Points' . '"></i>') : ('Points' . ':')) . '</dt><dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['trophy_points'], '0') . '</dd></dl>';
}
$__compilerVar357 .= '
				
			</div>
			';
$__compilerVar356 .= $this->callTemplateHook('sidebar_visitor_panel_stats', $__compilerVar357, array());
unset($__compilerVar357);
$__compilerVar356 .= '
		</div>
		
	</div>
</div>

';
}
else
{
$__compilerVar356 .= '

<div class="section loginButton">		
	<div class="secondaryContent">
		<label';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 0 && XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') != 3)
{
$__compilerVar356 .= ' for="LoginControl"';
}
$__compilerVar356 .= ' id="SignupButton"><a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="inner' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '">' . (($xenOptions['registrationSetup']['enabled']) ? ('Sign up now!') : ('Log in')) . '</a></label>
	</div>
</div>

';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginFormSidebar'))
{
$__compilerVar356 .= '
<div class="section uix_loginForm">		
	<div class="secondaryContent">
		<h3>' . 'Log in' . '</h3>
		';
$__compilerVar358 = '';
$__compilerVar358 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

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
$__compilerVar358 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar358 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar359 = '';
$__compilerVar359 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar359 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar359 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar359 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar359 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar359 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar359 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar359 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar359 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar359 .= '

	';
if (trim($__compilerVar359) !== '')
{
$__compilerVar358 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar359 . '
	</div>
	';
}
unset($__compilerVar359);
$__compilerVar358 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar358 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar358 .= '

</form>';
$__compilerVar356 .= $__compilerVar358;
unset($__compilerVar358);
$__compilerVar356 .= '
	</div>
</div>
';
}
$__compilerVar356 .= '

';
}
$__compilerVar356 .= '

';
$__compilerVar360 = '';
$__compilerVar361 = '';
$__compilerVar361 .= '
	
		';
$__compilerVar362 = '';
$__compilerVar362 .= '
				';
$__compilerVar363 = '';
$__compilerVar362 .= $this->callTemplateHook('ad_sidebar_below_visitor_panel', $__compilerVar363, array());
unset($__compilerVar363);
$__compilerVar362 .= '
				
				
				
				
				
				
				
			';
if (trim($__compilerVar362) !== '')
{
$__compilerVar361 .= '
			' . $__compilerVar362 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar361 .= '
			<div>' . 'Template' . ': ad_sidebar_below_visitor_panel</div>
		';
}
unset($__compilerVar362);
$__compilerVar361 .= '
	
	';
if (trim($__compilerVar361) !== '')
{
$__compilerVar360 .= '
	
	<div class="section funbox">
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers_sidebar')) ? ('') : ('secondaryContent')) . ' funboxWrapper">
	' . $__compilerVar361 . '
	</div>
	</div>
	
';
}
unset($__compilerVar361);
$__compilerVar356 .= $__compilerVar360;
unset($__compilerVar360);
$__compilerVar351 .= $__compilerVar356;
unset($__compilerVar356);
}
$__compilerVar351 .= '
								' . $sidebar . '
								';
$__compilerVar364 = '';
$__compilerVar365 = '';
$__compilerVar365 .= '
		
			';
$__compilerVar366 = '';
$__compilerVar366 .= '
					';
$__compilerVar367 = '';
$__compilerVar366 .= $this->callTemplateHook('ad_sidebar_bottom', $__compilerVar367, array());
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
				<div>' . 'Template' . ': ad_sidebar_bottom</div>
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
$__compilerVar351 .= $__compilerVar364;
unset($__compilerVar364);
$__compilerVar351 .= '
								';
$__compilerVar28 .= $this->callTemplateHook('page_container_sidebar', $__compilerVar351, array());
unset($__compilerVar351);
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
$__compilerVar368 = '';
$__compilerVar368 .= '
			';
if (!$uix_hideBottomBreadcrumb && !(($selectedTabId == $homeTabId) && ($homeTabId != ('forums')) && XenForo_Template_Helper_Core::styleProperty('uix_removeBreadCrumbOnIndex')) && !($contentTemplate == ('forum_list') && XenForo_Template_Helper_Core::styleProperty('uix_removeBreadCrumbOnForumIndex')))
{
$__compilerVar368 .= '			
				';
if (!XenForo_Template_Helper_Core::styleProperty('uix_hideBottomBreadcrumb'))
{
$__compilerVar368 .= '
					<div class="breadBoxBottom">';
$__compilerVar369 = '';
$__compilerVar369 .= '

<nav>

	';
$__compilerVar370 = '';
$__compilerVar370 .= '	
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar') && $sidebar && $uix_canCollapseSidebar && $visitor['user_id'] > 0)
{
$__compilerVar370 .= '
				';
if ($visitor['uix_sidebar'] > $uix_currentTimestamp)
{
$__compilerVar370 .= '
					<li class="uix_sidebar_collapse toggleList_item uix_sidebar_collapsed">
				';
}
else
{
$__compilerVar370 .= '
					<li class="uix_sidebar_collapse toggleList_item">
				';
}
$__compilerVar370 .= '
					<a href="#" title="' . 'Toggle Sidebar' . '" class="Tooltip" ' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('') : ('data-tipclass="flipped"')) . '>
						<i class="uix_icon uix_icon-sidebarCollapse"></i>
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar_usePhrases'))
{
$__compilerVar370 .= ' 
							<span class="uix_sidebar_collapse_phrase_close">
								' . 'Close Sidebar' . '
							</span>
							<span class="uix_sidebar_collapse_phrase_open">
								' . 'Open Sidebar' . '
							</span>
						';
}
$__compilerVar370 .= '
					</a>
				</li>
			';
}
$__compilerVar370 .= '
			';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 4)
{
$__compilerVar370 .= '<li class="toggleList_item toggleList_item_search">';
$__compilerVar371 = '';
$__compilerVar371 .= '
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
$__compilerVar371 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar372 = '';
$__compilerVar372 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar372 .= '
		';
$__compilerVar373 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar373 .= '

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
$__compilerVar372 .= $__compilerVar373;
unset($__compilerVar373);
$__compilerVar372 .= '
	';
}
$__compilerVar372 .= '
	
	
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
$__compilerVar372 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar372 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar372 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar372 .= '
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
$__compilerVar372 .= '
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
$__compilerVar372 .= '
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
$__compilerVar371 .= $this->callTemplateHook('quick_search', $__compilerVar372, array());
unset($__compilerVar372);
$__compilerVar371 .= '

</div>';
$__compilerVar370 .= $__compilerVar371;
unset($__compilerVar371);
$__compilerVar370 .= '</li>';
}
$__compilerVar370 .= '
		';
if (trim($__compilerVar370) !== '')
{
$__compilerVar369 .= '
	<ul class="uix_breadCrumb_toggleList">
		' . $__compilerVar370 . '
	</ul>
	';
}
unset($__compilerVar370);
$__compilerVar369 .= '
	
	';
if (!$quickNavSelected AND $navigation)
{
$__compilerVar369 .= '
		';
foreach ($navigation AS $breadcrumb)
{
$__compilerVar369 .= '
			';
if ($breadcrumb['node_id'])
{
$__compilerVar369 .= '
				';
$quickNavSelected = '';
$quickNavSelected .= 'node-' . htmlspecialchars($breadcrumb['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar369 .= '
			';
}
$__compilerVar369 .= '
		';
}
$__compilerVar369 .= '
	';
}
$__compilerVar369 .= '

	<fieldset class="breadcrumb">
		<a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>
			
		<div class="boardTitle"><strong>' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '</strong></div>
		
		<span class="crumbs">
			';
if ($showHomeLink)
{
$__compilerVar369 .= '
				<span class="crust homeCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon'))
{
$__compilerVar369 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar369 .= 'Home';
}
$__compilerVar369 .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span></span>')) . '</span>
				</span>
			';
}
else if ($selectedTabId != $homeTabId)
{
$__compilerVar369 .= '
				<span class="crust homeCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon'))
{
$__compilerVar369 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar369 .= htmlspecialchars($homeTab['title'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar369 .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span></span>')) . '</span>
				</span>
			';
}
$__compilerVar369 .= '
			
			';
if ($selectedTab)
{
$__compilerVar369 .= '
				<span class="crust selectedTabCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($selectedTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon') && $selectedTabId == $homeTabId && !$showHomeLink)
{
$__compilerVar369 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar369 .= htmlspecialchars($selectedTab['title'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar369 .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span>&gt;</span>')) . '</span>
				</span>
			';
}
$__compilerVar369 .= '
			
			';
if ($navigation)
{
$__compilerVar369 .= '
				';
$i = 0;
$count = count($navigation);
foreach ($navigation AS $breadcrumb)
{
$i++;
$__compilerVar369 .= '
					<span class="crust"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
						<a href="' . $breadcrumb['href'] . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>' . $breadcrumb['value'] . '</span></a>
						<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span>&gt;</span>')) . '</span>
					</span>
				';
}
$__compilerVar369 .= '
			';
}
$__compilerVar369 .= '
		</span>
	</fieldset>
</nav>';
$__compilerVar368 .= $__compilerVar369;
unset($__compilerVar369);
$__compilerVar368 .= '</div>
				';
}
$__compilerVar368 .= '
			';
}
$__compilerVar368 .= '
			';
$__compilerVar28 .= $this->callTemplateHook('page_container_breadcrumb_bottom', $__compilerVar368, array());
unset($__compilerVar368);
$__compilerVar28 .= '
			
						
			';
$__compilerVar374 = '';
$__compilerVar375 = '';
$__compilerVar375 .= '
	
		';
$__compilerVar376 = '';
$__compilerVar376 .= '
				';
$__compilerVar377 = '';
$__compilerVar376 .= $this->callTemplateHook('ad_below_bottom_breadcrumb', $__compilerVar377, array());
unset($__compilerVar377);
$__compilerVar376 .= '	
				
				
				
				

				
			';
if (trim($__compilerVar376) !== '')
{
$__compilerVar375 .= '
			' . $__compilerVar376 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar375 .= '
			<div>' . 'Template' . ': ad_below_bottom_breadcrumb</div>
		';
}
unset($__compilerVar376);
$__compilerVar375 .= '
	
	';
if (trim($__compilerVar375) !== '')
{
$__compilerVar374 .= '
	
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers')) ? ('section') : ('sectionMain')) . ' funbox">
	<div class="funboxWrapper">
	' . $__compilerVar375 . '
	</div>
	</div>
';
}
unset($__compilerVar375);
$__compilerVar28 .= $__compilerVar374;
unset($__compilerVar374);
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
$__compilerVar378 = '';
$__compilerVar378 .= '

';
$__compilerVar379 = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_adStylerOn') && XenForo_Template_Helper_Core::styleProperty('uix_adStylerColorOptions') && $uix_canUseStylerSwatches)
{
$__compilerVar379 .= '
<script>

	function changeColorOption(primary, secondary, tertiary, backgroundColor, backgroundImage, backgroundRepeat, backgroundSize){
	
		var
		primaryColor_backgroundColor 	= 	styleit_var[\'primaryColor_background-color\'],
		primaryColor_color 		= 	styleit_var[\'primaryColor_color\'],
		primaryColor_borderTopColor 	= 	styleit_var[\'primaryColor_border-top-color\'],
		primaryColor_borderColor	=	styleit_var[\'primaryColor_border-color\'],
		primaryColor_borderRightColor	=	styleit_var[\'primaryColor_border-right-color\'],
		primaryColor_borderBottomColor	=	styleit_var[\'primaryColor_border-bottom-color\'],
		
		tertiaryColor_color		=	styleit_var[\'tertiaryColor_color\'],
		tertiaryColor_backgroundColor	=	styleit_var[\'tertiaryColor_background-color\'];
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
		
		var change10 = {};
		change10[primaryColor_borderRightColor] = "border-right-color";
		$i.change(change10, primary); 
		
		var change11 = {};
		change11[primaryColor_borderBottomColor] = "border-bottom-color";
		$i.change(change11, tertiary); 
		
		var change12 = {};
		change12[tertiaryColor_color] = "color";
		$i.change(change12, tertiary); 
		var change13 = {};
		change13[tertiaryColor_backgroundColor] = "background-color";
		$i.change(change13, tertiary); 
		
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
				<li><a style="background-color: #ed428f" href="javascript: changeColorOption(\'#ed428f\',\'#cc4682\',\'#888\',\'\', \'/patterns/vertical_1.png\', \'repeat repeat\', \'auto\');">' . 'Lust' . '</a></li>
				<li><a style="background-color: #db4f21" href="javascript: changeColorOption(\'#db4f21\',\'#d44431\',\'#888\',\'\', \'/patterns/dots_1.png\', \'repeat repeat\', \'auto\');">' . 'Gluttony' . '</a></li>
				<li><a style="background-color: #f29f33" href="javascript: changeColorOption(\'#f29f33\',\'#d9861a\',\'#888\',\'\', \'/patterns/hash_1.png\', \'repeat repeat\', \'auto\');">' . 'Envy' . '</a></li>
				<li><a style="background-color: #62ae24" href="javascript: changeColorOption(\'#62ae24\',\'#578a2c\',\'#888\',\'\', \'/patterns/diagonal_3.png\', \'repeat repeat\', \'auto\');">' . 'Greed' . '</a></li>
				<li><a style="background-color: #00a2cb" href="javascript: changeColorOption(\'#00a2cb\',\'#2290bf\',\'#888\',\'\', \'/patterns/noise_1.png\', \'repeat repeat\', \'auto\');">' . 'Sloth' . '</a></li>
				<li><a style="background-color: #3d68b3" href="javascript: changeColorOption(\'#3d68b3\',\'#164185\',\'#888\',\'\', \'/patterns/noise_2.png\', \'repeat repeat\', \'auto\');">' . 'Pride' . '</a></li>
				<li><a style="background-color: #5f459c" href="javascript: changeColorOption(\'#5f459c\',\'#44327a\',\'#888\',\'\', \'/patterns/diagonal_2.png\', \'repeat repeat\', \'auto\');">' . 'Wrath' . '</a></li>
			</ul>
		</div>
	</div>
</div>
';
}
$__compilerVar379 .= '


';
$__compilerVar378 .= $__compilerVar379;
unset($__compilerVar379);
$__compilerVar378 .= '

';
$__compilerVar380 = '';
$__compilerVar380 .= '

';
$__compilerVar381 = '';
$__compilerVar381 .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_widthToggle') && $visitor['user_id'] && XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') > 100)
{
$__compilerVar381 .= '
					<dl class="choosers chooser_widthToggle uix_widthToggle_lower">
						<dt>' . 'Toggle Width' . '</dt>
						<dd><a href="javascript: uix.toggleWidth.toggle()" class=\'Tooltip\' title="' . 'Toggle Width' . '" rel="nofollow"><span class="uix_icon uix_widthToggle"></span></a></dd>
					</dl>
				';
}
$__compilerVar381 .= '
				';
if ($canChangeStyle OR $canChangeLanguage)
{
$__compilerVar381 .= '
					<dl class="choosers">
						';
if ($canChangeStyle)
{
$__compilerVar381 .= '
							<dt>' . 'Style' . '</dt>
							<dd><a href="' . XenForo_Template_Helper_Core::link('misc/style', '', array(
'redirect' => $requestPaths['requestUri']
)) . '" class="OverlayTrigger Tooltip" title="' . 'Style Chooser' . '" rel="nofollow">' . htmlspecialchars($visitorStyle['title'], ENT_QUOTES, 'UTF-8') . '</a></dd>
						';
}
$__compilerVar381 .= '
						';
if ($canChangeLanguage)
{
$__compilerVar381 .= '
							<dt>' . 'Language' . '</dt>
							<dd><a href="' . XenForo_Template_Helper_Core::link('misc/language', '', array(
'redirect' => $requestPaths['requestUri']
)) . '" class="OverlayTrigger Tooltip" title="' . 'Language Chooser' . '" rel="nofollow">' . htmlspecialchars($visitorLanguage['title'], ENT_QUOTES, 'UTF-8') . '</a></dd>
						';
}
$__compilerVar381 .= '
					</dl>
				';
}
$__compilerVar381 .= '
				';
if ($uix_adStyler_enabled)
{
$__compilerVar381 .= '
					';
if (!XenForo_Template_Helper_Core::styleProperty('uix_hideAdStylerTrigger') && ($uix_canUseStylerPanel || $uix_canUseStylerPresets))
{
$__compilerVar381 .= '
						<dl class="choosers chooser_AdStyler">
							<dt>' . 'AD Styler' . '</dt>
							<dd><a href="#" class=\'si-reveal-toggle Tooltip\' title="' . 'Open AD Styler' . '" rel="nofollow">' . 'AD Styler' . '</a></dd>
						</dl>
					';
}
$__compilerVar381 .= '
					';
if (XenForo_Template_Helper_Core::styleProperty('uix_adStylerColorOptions') && $uix_canUseStylerSwatches)
{
$__compilerVar381 .= '
						<dl class="choosers chooser_colorOptions">
							<dt>' . 'Color Options' . '</dt>
							<dd><a href="#" class=\'uix_colorOptionsToggle Tooltip\' title="' . 'Toggle Color Options' . '" rel="nofollow">' . 'Color Options' . '</a></dd>
						</dl>
					';
}
$__compilerVar381 .= '
				';
}
$__compilerVar381 .= '
				';
if (!XenForo_Template_Helper_Core::styleProperty('uix_hideFooterMenu'))
{
$__compilerVar381 .= '
				<ul class="footerLinks">
					';
$__compilerVar382 = '';
$__compilerVar382 .= '
						';
if ($homeLink)
{
$__compilerVar382 .= '<li><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="homeLink">' . 'Home' . '</a></li>';
}
$__compilerVar382 .= '
						';
if ($xenOptions['contactUrl']['type'] === ('default'))
{
$__compilerVar382 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('misc/contact', false, array()) . '" class="OverlayTrigger" data-overlayOptions="{&quot;fixed&quot;:false}">' . 'Contact Us' . '</a></li>
						';
}
else if ($xenOptions['contactUrl']['type'] === ('custom'))
{
$__compilerVar382 .= '
							<li><a href="' . htmlspecialchars($xenOptions['contactUrl']['custom'], ENT_QUOTES, 'UTF-8') . '" ' . (($xenOptions['contactUrl']['overlay']) ? ('class="OverlayTrigger" data-overlayOptions="' . '{' . '&quot;fixed&quot;:false}"') : ('')) . '>' . 'Contact Us' . '</a></li>
						';
}
$__compilerVar382 .= '
						<li><a href="' . XenForo_Template_Helper_Core::link('help', false, array()) . '">' . 'Help' . '</a></li>
					';
$__compilerVar381 .= $this->callTemplateHook('footer_links', $__compilerVar382, array());
unset($__compilerVar382);
$__compilerVar381 .= '
					';
$__compilerVar383 = '';
$__compilerVar383 .= '
						';
if ($tosUrl)
{
$__compilerVar383 .= '<li><a href="' . htmlspecialchars($tosUrl, ENT_QUOTES, 'UTF-8') . '">' . 'Terms and Rules' . '</a></li>';
}
$__compilerVar383 .= '
						';
if ($xenOptions['privacyPolicyUrl'])
{
$__compilerVar383 .= '<li><a href="' . htmlspecialchars($xenOptions['privacyPolicyUrl'], ENT_QUOTES, 'UTF-8') . '">' . 'Privacy Policy' . '</a></li>';
}
$__compilerVar383 .= '
					';
$__compilerVar381 .= $this->callTemplateHook('footer_links_legal', $__compilerVar383, array());
unset($__compilerVar383);
$__compilerVar381 .= '
					<li class="topLink"><a href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#XenForo"><i class="uix_icon uix_icon-jumpToTop"></i> <span class="uix_hide">' . 'Top' . '</span></a></li>
				</ul>
				';
}
$__compilerVar381 .= '
				
			';
if (trim($__compilerVar381) !== '')
{
$__compilerVar380 .= '

<div class="footer">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1 && !XenForo_Template_Helper_Core::styleProperty('uix_footer_forceCovered'))
{
$__compilerVar380 .= '<div class="pageWidth">';
}
$__compilerVar380 .= '
		<div class="pageContent">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_footer_forceCovered'))
{
$__compilerVar380 .= '<div class="pageWidth">';
}
$__compilerVar380 .= '
			
				' . $__compilerVar381 . '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar380 .= '</div>';
}
$__compilerVar380 .= '
			<span class="helper"></span>
		</div>
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar380 .= '</div>';
}
$__compilerVar380 .= '
</div>

<div id="uix_stickyFooterSpacer"></div>

';
}
unset($__compilerVar381);
$__compilerVar380 .= '


';
$__compilerVar384 = '';
if (!XenForo_Template_Helper_Core::styleProperty('uix_useStyleProperties_footer'))
{
$__compilerVar384 .= '
	
	';
$uix_showFooterColumns = '';
$uix_showFooterColumns .= htmlspecialchars($xenOptions['uix_showFooterColumns'], ENT_QUOTES, 'UTF-8');
$__compilerVar384 .= '
	';
$uix_numFooterColumns = '';
$uix_numFooterColumns .= ($xenOptions['uix_footer_col1'] + $xenOptions['uix_footer_col2'] + $xenOptions['uix_footer_col3'] + $xenOptions['uix_footer_col4']);
$__compilerVar384 .= '
	';
$uix_footer_col1 = '';
$uix_footer_col1 .= $xenOptions['uix_footer_col1'];
$__compilerVar384 .= '
	';
$uix_footer_col2 = '';
$uix_footer_col2 .= $xenOptions['uix_footer_col2'];
$__compilerVar384 .= '
	';
$uix_footer_col3 = '';
$uix_footer_col3 .= $xenOptions['uix_footer_col3'];
$__compilerVar384 .= '
	';
$uix_footer_col4 = '';
$uix_footer_col4 .= $xenOptions['uix_footer_col4'];
$__compilerVar384 .= '
	';
$uix_footer_col1_icon = '';
$uix_footer_col1_icon .= $xenOptions['uix_footer_col1_icon'];
$__compilerVar384 .= '
	';
$uix_footer_col2_icon = '';
$uix_footer_col2_icon .= $xenOptions['uix_footer_col2_icon'];
$__compilerVar384 .= '
	';
$uix_footer_col3_icon = '';
$uix_footer_col3_icon .= $xenOptions['uix_footer_col3_icon'];
$__compilerVar384 .= '
	';
$uix_footer_col4_icon = '';
$uix_footer_col4_icon .= $xenOptions['uix_footer_col4_icon'];
$__compilerVar384 .= '
	';
$uix_footer_col1_title = '';
$uix_footer_col1_title .= $xenOptions['uix_footer_col1_title'];
$__compilerVar384 .= '
	';
$uix_footer_col2_title = '';
$uix_footer_col2_title .= $xenOptions['uix_footer_col2_title'];
$__compilerVar384 .= '
	';
$uix_footer_col3_title = '';
$uix_footer_col3_title .= $xenOptions['uix_footer_col3_title'];
$__compilerVar384 .= '
	';
$uix_footer_col4_title = '';
$uix_footer_col4_title .= $xenOptions['uix_footer_col4_title'];
$__compilerVar384 .= '
	';
$uix_footer_col1_content = '';
$uix_footer_col1_content .= $xenOptions['uix_footer_col1_content'];
$__compilerVar384 .= '
	';
$uix_footer_col2_content = '';
$uix_footer_col2_content .= $xenOptions['uix_footer_col2_content'];
$__compilerVar384 .= '
	';
$uix_footer_col3_content = '';
$uix_footer_col3_content .= $xenOptions['uix_footer_col3_content'];
$__compilerVar384 .= '
	';
$uix_footer_col4_content = '';
$uix_footer_col4_content .= $xenOptions['uix_footer_col4_content'];
$__compilerVar384 .= '
	
';
}
else
{
$__compilerVar384 .= '
	
	';
$uix_showFooterColumns = '';
$uix_showFooterColumns .= XenForo_Template_Helper_Core::styleProperty('uix_showFooterColumns');
$__compilerVar384 .= '
	';
$uix_numFooterColumns = '';
$uix_numFooterColumns .= (XenForo_Template_Helper_Core::styleProperty('uix_footer_col1') + XenForo_Template_Helper_Core::styleProperty('uix_footer_col2') + XenForo_Template_Helper_Core::styleProperty('uix_footer_col3') + XenForo_Template_Helper_Core::styleProperty('uix_footer_col4'));
$__compilerVar384 .= '
	';
$uix_footer_col1 = '';
$uix_footer_col1 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1');
$__compilerVar384 .= '
	';
$uix_footer_col2 = '';
$uix_footer_col2 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2');
$__compilerVar384 .= '
	';
$uix_footer_col3 = '';
$uix_footer_col3 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3');
$__compilerVar384 .= '
	';
$uix_footer_col4 = '';
$uix_footer_col4 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4');
$__compilerVar384 .= '
	';
$uix_footer_col1_icon = '';
$uix_footer_col1_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_icon');
$__compilerVar384 .= '
	';
$uix_footer_col2_icon = '';
$uix_footer_col2_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_icon');
$__compilerVar384 .= '
	';
$uix_footer_col3_icon = '';
$uix_footer_col3_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_icon');
$__compilerVar384 .= '
	';
$uix_footer_col4_icon = '';
$uix_footer_col4_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_icon');
$__compilerVar384 .= '
	';
$uix_footer_col1_title = '';
$uix_footer_col1_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_title');
$__compilerVar384 .= '
	';
$uix_footer_col2_title = '';
$uix_footer_col2_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_title');
$__compilerVar384 .= '
	';
$uix_footer_col3_title = '';
$uix_footer_col3_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_title');
$__compilerVar384 .= '
	';
$uix_footer_col4_title = '';
$uix_footer_col4_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_title');
$__compilerVar384 .= '
	';
$uix_footer_col1_content = '';
$uix_footer_col1_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_content');
$__compilerVar384 .= '
	';
$uix_footer_col2_content = '';
$uix_footer_col2_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_content');
$__compilerVar384 .= '
	';
$uix_footer_col3_content = '';
$uix_footer_col3_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_content');
$__compilerVar384 .= '
	';
$uix_footer_col4_content = '';
$uix_footer_col4_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_content');
$__compilerVar384 .= '
	
';
}
$__compilerVar384 .= '

';
if ($uix_showFooterColumns)
{
$__compilerVar384 .= '

';
$this->addRequiredExternal('css', 'uix_extendedFooter');
$__compilerVar384 .= '

<div id="uix_footer_columns">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1 && !XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_forceCovered'))
{
$__compilerVar384 .= '<div class="pageWidth">';
}
$__compilerVar384 .= '
		<div class="pageContent">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_forceCovered'))
{
$__compilerVar384 .= '<div class="pageWidth">';
}
$__compilerVar384 .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_top'))
{
$__compilerVar384 .= '
				';
$__compilerVar385 = '';
$__compilerVar385 .= '
						';
$__compilerVar386 = '';
$__compilerVar387 = '';
$__compilerVar386 .= $this->callTemplateHook('uix_footer_top', $__compilerVar387, array());
unset($__compilerVar387);
$__compilerVar385 .= $__compilerVar386;
unset($__compilerVar386);
$__compilerVar385 .= '
					';
if (trim($__compilerVar385) !== '')
{
$__compilerVar384 .= '
				<div class="uix_footer_topRow">
					' . $__compilerVar385 . '
				</div>
				';
}
unset($__compilerVar385);
$__compilerVar384 .= '
			';
}
$__compilerVar384 .= '
			
			
			<ul class="uix_footer_columns_container uix_footer_columns_' . htmlspecialchars($uix_numFooterColumns, ENT_QUOTES, 'UTF-8') . '">
				';
if ($uix_footer_col1)
{
$__compilerVar384 .= '<li class="uix_footer_columns_col1">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar388 = '';
$__compilerVar388 .= '
								';
$__compilerVar389 = '';
$__compilerVar388 .= $this->callTemplateHook('uix_footer_col1', $__compilerVar389, array());
unset($__compilerVar389);
$__compilerVar388 .= '
							';
if (trim($__compilerVar388) !== '')
{
$__compilerVar384 .= '
							' . $__compilerVar388 . '
						';
}
else
{
$__compilerVar384 .= '
							';
if ($uix_footer_col1_title)
{
$__compilerVar384 .= '<h3>
								';
if ($uix_footer_col1_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__compilerVar384 .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col1_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar384 .= ' 
								' . $uix_footer_col1_title . '
							</h3>';
}
$__compilerVar384 .= '
						
							' . $uix_footer_col1_content . '
						';
}
unset($__compilerVar388);
$__compilerVar384 .= '
				
					</div>
				</li>';
}
$__compilerVar384 .= '
				';
if ($uix_footer_col2)
{
$__compilerVar384 .= '<li class="uix_footer_columns_col2">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar390 = '';
$__compilerVar390 .= '
								';
$__compilerVar391 = '';
$__compilerVar390 .= $this->callTemplateHook('uix_footer_col2', $__compilerVar391, array());
unset($__compilerVar391);
$__compilerVar390 .= '
							';
if (trim($__compilerVar390) !== '')
{
$__compilerVar384 .= '
							' . $__compilerVar390 . '
						';
}
else
{
$__compilerVar384 .= '
							';
if ($uix_footer_col2_title)
{
$__compilerVar384 .= '<h3>
								';
if ($uix_footer_col2_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__compilerVar384 .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col2_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar384 .= ' 
								' . $uix_footer_col2_title . '
							</h3>';
}
$__compilerVar384 .= '
						
							' . $uix_footer_col2_content . '
						';
}
unset($__compilerVar390);
$__compilerVar384 .= '
				
					</div>
				</li>';
}
$__compilerVar384 .= '
				';
if ($uix_footer_col3)
{
$__compilerVar384 .= '<li class="uix_footer_columns_col3">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar392 = '';
$__compilerVar392 .= '
								';
$__compilerVar393 = '';
$__compilerVar392 .= $this->callTemplateHook('uix_footer_col3', $__compilerVar393, array());
unset($__compilerVar393);
$__compilerVar392 .= '
							';
if (trim($__compilerVar392) !== '')
{
$__compilerVar384 .= '
							' . $__compilerVar392 . '
						';
}
else
{
$__compilerVar384 .= '
							';
if ($uix_footer_col3_title)
{
$__compilerVar384 .= '<h3>
								';
if ($uix_footer_col3_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__compilerVar384 .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col3_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar384 .= ' 
								' . $uix_footer_col3_title . '
							</h3>';
}
$__compilerVar384 .= '
						
							' . $uix_footer_col3_content . '
						';
}
unset($__compilerVar392);
$__compilerVar384 .= '
				
					</div>
				</li>';
}
$__compilerVar384 .= '
				';
if ($uix_footer_col4)
{
$__compilerVar384 .= '<li class="uix_footer_columns_col4">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar394 = '';
$__compilerVar394 .= '
								';
$__compilerVar395 = '';
$__compilerVar394 .= $this->callTemplateHook('uix_footer_col4', $__compilerVar395, array());
unset($__compilerVar395);
$__compilerVar394 .= '
							';
if (trim($__compilerVar394) !== '')
{
$__compilerVar384 .= '
							' . $__compilerVar394 . '
						';
}
else
{
$__compilerVar384 .= '
							';
if ($uix_footer_col4_title)
{
$__compilerVar384 .= '<h3>
								';
if ($uix_footer_col4_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__compilerVar384 .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col4_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar384 .= ' 
								' . $uix_footer_col4_title . '
							</h3>';
}
$__compilerVar384 .= '
						
							' . $uix_footer_col4_content . '
						';
}
unset($__compilerVar394);
$__compilerVar384 .= '
				
					</div>
				</li>';
}
$__compilerVar384 .= '
			</ul>
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_bottom'))
{
$__compilerVar384 .= '
				';
$__compilerVar396 = '';
$__compilerVar396 .= '
						';
$__compilerVar397 = '';
$__compilerVar398 = '';
$__compilerVar397 .= $this->callTemplateHook('uix_footer_bottom', $__compilerVar398, array());
unset($__compilerVar398);
$__compilerVar396 .= $__compilerVar397;
unset($__compilerVar397);
$__compilerVar396 .= '
					';
if (trim($__compilerVar396) !== '')
{
$__compilerVar384 .= '
				<div class="uix_footer_bottomRow">
					' . $__compilerVar396 . '
				</div>
				';
}
unset($__compilerVar396);
$__compilerVar384 .= '
			';
}
$__compilerVar384 .= '
			
		</div>
	</div>
</div>

';
}
$__compilerVar380 .= $__compilerVar384;
unset($__compilerVar384);
$__compilerVar380 .= '


<div class="footerLegal">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1 && !XenForo_Template_Helper_Core::styleProperty('uix_copyright_forceCovered'))
{
$__compilerVar380 .= '<div class="pageWidth">';
}
$__compilerVar380 .= '
		<div class="pageContent">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_copyright_forceCovered'))
{
$__compilerVar380 .= '<div class="pageWidth">';
}
$__compilerVar380 .= '
			<div id="copyright">
				' . XenForo_Template_Helper_Core::callHelper('copyright', array()) . ' ';
if (!$adCopyrightShown && !$thCopyrightShown)
{
$thCopyrightShown = '';
$thCopyrightShown .= '1';
$__compilerVar380 .= '<div id="thCopyrightNotice">Some XenForo functionality crafted by <a href="http://xf.themehouse.io/" title="Premium XenForo Add-ons" target="_blank">ThemeHouse</a>.</div>';
}
$__compilerVar380 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar380 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar380 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar380 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar380 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar380 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar380 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar380 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar380 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar380 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar380 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar380 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar380 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar380 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar380 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar380 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar380 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar380 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar380 .= '
				';
$__compilerVar399 = '';
$__compilerVar380 .= $this->callTemplateHook('uix_copyright', $__compilerVar399, array());
unset($__compilerVar399);
$__compilerVar380 .= '
			</div>
			';
$__compilerVar400 = '';
$__compilerVar380 .= $this->callTemplateHook('footer_after_copyright', $__compilerVar400, array());
unset($__compilerVar400);
$__compilerVar380 .= '
			';
if ($xenOptions['uix_socialMedia'] && XenForo_Template_Helper_Core::styleProperty('uix_socialMedia'))
{
$__compilerVar380 .= '
				';
$__compilerVar401 = '';
$__compilerVar401 .= '<ul class="uix_socialMediaLinks">
	';
if ($xenOptions['uix_socialMedia_facebook'])
{
$__compilerVar401 .= '<li class="facebook"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_facebook'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-facebook"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_twitter'])
{
$__compilerVar401 .= '<li class="twitter"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_twitter'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-twitter"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_youtube'])
{
$__compilerVar401 .= '<li class="youtube"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_youtube'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-youtube"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_dribbble'])
{
$__compilerVar401 .= '<li class="dribbble"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_dribbble'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-dribbble"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_vimeo'])
{
$__compilerVar401 .= '<li class="vimeo"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_vimeo'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-vimeo"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_deviantart'])
{
$__compilerVar401 .= '<li class="deviantart"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_deviantart'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-deviantArt"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_googleplus'])
{
$__compilerVar401 .= '<li class="googleplus"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_googleplus'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-googlePlus"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_linkedin'])
{
$__compilerVar401 .= '<li class="linkedin"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_linkedin'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-linkedIn"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_instagram'])
{
$__compilerVar401 .= '<li class="instagram"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_instagram'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-instagram"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_pinterest'])
{
$__compilerVar401 .= '<li class="pinterest"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_pinterest'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-pinterest"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_steam'])
{
$__compilerVar401 .= '<li class="steam"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_steam'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-steam"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_twitch'])
{
$__compilerVar401 .= '<li class="twitch"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_twitch'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-twitch"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_vine'])
{
$__compilerVar401 .= '<li class="vine"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_vine'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-vine"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_tumblr'])
{
$__compilerVar401 .= '<li class="tumblr"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_tumblr'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-tumblr"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_git'])
{
$__compilerVar401 .= '<li class="git"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_git'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-git"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_reddit'])
{
$__compilerVar401 .= '<li class="reddit"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_reddit'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-reddit"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_flickr'])
{
$__compilerVar401 .= '<li class="flickr"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_flickr'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-flickr"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_contact'] AND $xenOptions['contactUrl']['type'] == ('default'))
{
$__compilerVar401 .= '<li class="contact"><a href="' . XenForo_Template_Helper_Core::link('misc/contact', false, array()) . '" class="OverlayTrigger" data-overlayOptions="{&quot;fixed&quot;:false}"><i class="uix_icon uix_icon-email"></i></a></li>';
}
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_contact'] AND $xenOptions['contactUrl']['type'] == ('custom'))
{
$__compilerVar401 .= '<li class="contact"><a href="' . htmlspecialchars($xenOptions['contactUrl']['custom'], ENT_QUOTES, 'UTF-8') . '" ' . (($xenOptions['contactUrl']['overlay']) ? ('class="OverlayTrigger" data-overlayOptions="' . '{' . '&quot;fixed&quot;:false}"') : ('target="_blank"')) . '><i class="uix_icon uix_icon-email"></i></a></li>';
}
$__compilerVar401 .= '
        ';
$__compilerVar402 = '';
$__compilerVar402 .= '



<!--ADD LIST ITEMS HERE -->


';
$__compilerVar401 .= $__compilerVar402;
unset($__compilerVar402);
$__compilerVar401 .= '
        ';
if ($xenOptions['uix_socialMedia_rss'])
{
$__compilerVar401 .= '<li class="rss"><a href="' . XenForo_Template_Helper_Core::link('forums/-/index.rss', false, array()) . '" rel="alternate}" target="_blank"><i class="uix_icon uix_icon-rss"></i></a></li>';
}
$__compilerVar401 .= '
</ul>';
$__compilerVar380 .= $__compilerVar401;
unset($__compilerVar401);
$__compilerVar380 .= '
			';
}
$__compilerVar380 .= '	
			';
if ($debugMode AND (($visitor['is_admin'] AND $xenOptions['uix_debugAdmin']) || !$xenOptions['uix_debugAdmin']))
{
$__compilerVar380 .= '
				';
$__compilerVar403 = '';
$__compilerVar403 .= '
						';
if ($page_time)
{
$__compilerVar403 .= '<dt>' . 'Timing' . ':</dt> <dd><a href="' . htmlspecialchars($debug_url, ENT_QUOTES, 'UTF-8') . '" rel="nofollow">' . '' . XenForo_Template_Helper_Core::numberFormat($page_time, '4') . ' seconds' . '</a></dd>';
}
$__compilerVar403 .= '
						';
if ($memory_usage)
{
$__compilerVar403 .= '<dt>' . 'Memory' . ':</dt> <dd>' . '' . XenForo_Template_Helper_Core::numberFormat(($memory_usage / 1024 / 1024), '3') . ' MB' . '</dd>';
}
$__compilerVar403 .= '
						';
if ($db_queries)
{
$__compilerVar403 .= '<dt>' . 'DB Queries' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($db_queries, '0') . '</dd>';
}
$__compilerVar403 .= '
					';
if (trim($__compilerVar403) !== '')
{
$__compilerVar380 .= '
					<dl class="pairsInline debugInfo" title="' . htmlspecialchars($controllerName, ENT_QUOTES, 'UTF-8') . '-&gt;' . htmlspecialchars($controllerAction, ENT_QUOTES, 'UTF-8') . (($viewName) ? (' (' . htmlspecialchars($viewName, ENT_QUOTES, 'UTF-8') . ')') : ('')) . '">
					' . $__compilerVar403 . '
					</dl>
				';
}
unset($__compilerVar403);
$__compilerVar380 .= '
			';
}
$__compilerVar380 .= '

			<span class="helper"></span>
		</div>
	</div>	
</div>

';
$__compilerVar378 .= $this->callTemplateHook('footer', $__compilerVar380, array());
unset($__compilerVar380);
$__compilerVar378 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpToTopFixed') || XenForo_Template_Helper_Core::styleProperty('uix_jumpToBottomFixed'))
{
$__compilerVar378 .= '
	<div id="uix_jumpToFixed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpToTopFixed'))
{
$__compilerVar378 .= '
			<a href="' . XenForo_Template_Helper_Core::styleProperty('uix_jumpToTop_location') . '" title="' . 'Top' . '" data-position="top"><i class="uix_icon uix_icon-jumpToTop"></i></a>
		';
}
$__compilerVar378 .= '
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpToBottomFixed'))
{
$__compilerVar378 .= '
			<a href="' . XenForo_Template_Helper_Core::styleProperty('uix_jumpToBottom_location') . '" title="' . 'Bottom' . '" data-position="bottom"><i class="uix_icon uix_icon-jumpToBottom"></i></a>
		';
}
$__compilerVar378 .= '
	</div>
';
}
$__compilerVar28 .= $__compilerVar378;
unset($__compilerVar378);
$__compilerVar28 .= '
</footer>

';
$__compilerVar404 = '';
$__compilerVar404 .= '<script>

';
$__compilerVar405 = '';
$__compilerVar405 .= '
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
$__compilerVar404 .= $this->callTemplateHook('page_container_js_body', $__compilerVar405, array());
unset($__compilerVar405);
$__compilerVar404 .= '

</script>';
$__compilerVar28 .= $__compilerVar404;
unset($__compilerVar404);
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
$__compilerVar406 = '';
$__compilerVar406 .= '<script>

</script>';
$__output .= $__compilerVar406;
unset($__compilerVar406);
$__output .= '

<!-- UI.X Version: ' . XenForo_Template_Helper_Core::styleProperty('uix_version') . ' //-->

</body>
</html>';
