<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
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
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__output .= '
	';
$headerWhiteSpace = '';
$headerWhiteSpace .= XenForo_Template_Helper_Core::styleProperty('uix_headerWhiteSpace');
$__output .= '	
';
}
else
{
$__output .= '
	';
$headerWhiteSpace = '';
$headerWhiteSpace .= '0';
$__output .= '	
';
}
$__output .= '

.dataTable tr.dataRow th,
.discussionListFilters .removeFilter,
.discussionListFilters .removeAllFilters,
.AttachmentEditor .AttachedFile .ProgressMeter .ProgressGraphic,
.inlineCtrlGroup,
.PrefixMenu .PrefixGroup h3 { background-image: none; }

.MultiQuoteItem {border-bottom: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('secondaryMedium') . ';}

.MultiQuoteItem .messageInfo {
	background: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLighter') . ';
}

.MultiQuoteItem .avatarHolder {
	border-right: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('secondaryMedium') . ';
}

.importantMessage {
	background: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLightest') . ';
	border: 2px solid ' . XenForo_Template_Helper_Core::styleProperty('secondaryDark') . ';
	color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryDark') . ';
	font-weight: bold;
	padding: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
	margin: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' 0;
}

.prefix.prefixPrimary {border-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ';}

.userBanner.bannerStaff {background: ' . XenForo_Template_Helper_Core::styleProperty('uix_tertiaryColor') . '; color: #FFF; border-color: transparent;}

.userBanner.bannerStaff.wrapped span {background: rgba(0,0,0,.7);}

.userBanner.wrapped span {top: -5px;}

.conversation_view .message:first-child,
.messageList .message:first-child,
.thread_view .pageNavLinkGroup + .section {margin-top: 0;}

.avatarHeap ol {margin: -4px;text-align: center;}

.avatarHeap li {float: none; display: inline-block; margin: 4px;}

.LikeText a {
	font-weight: bold;
	color: inherit;
}

';
$__compilerVar1 = '';
$__compilerVar1 .= '.funbox
{
	overflow: hidden;
	margin: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' 0;
}

.funbox img {max-width: 100%;}
';
if (XenForo_Template_Helper_Core::styleProperty('uix_centerAds'))
{
$__compilerVar1 .= '.funbox {text-align: center;}';
}
$__compilerVar1 .= '





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
$__compilerVar1 .= '
		
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
$__compilerVar1 .= '			
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
$__compilerVar1 .= '

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') 
{
	#logoBlock .funbox
	{
		margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
	}
}';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '




#navigation .pageContent {
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('navTabs.border-radius') . ';
}

';
$__compilerVar2 = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_enableBorderJS') || XenForo_Template_Helper_Core::styleProperty('uix_enableULManagerJs'))
{
$__compilerVar2 .= '




.noBorderRadiusTop {
	border-top-left-radius: 0 !important;
	border-top-right-radius: 0 !important;
}

.noBorderRadiusBottom {
	border-bottom-left-radius: 0 !important;
	border-bottom-right-radius: 0 !important;
}

.noBorderRadius {
	border-radius: 0 !important;
}




	

	.noBorderRadiusTop .navTabs {
		border-top-left-radius: 0 !important;
		border-top-right-radius: 0 !important;
	}
	
	.noBorderRadiusBottom .navTabs {
		border-bottom-left-radius: 0 !important;
		border-bottom-right-radius: 0 !important;
	}
	
	.noBorderRadius .navTabs { border-radius: 0 !important; }
	
	
	
	
	.noBorderRadiusBottom .navTabs .navTab.selected .tabLinks {
		border-bottom-left-radius: 0 !important;
		border-bottom-right-radius: 0 !important;
	}
	
	.noBorderRadius .navTabs .navTab.selected .tabLinks { border-radius: 0 !important; }
	

	
	
		 
	
		/* THE FIRST TAB OF THE FIRST UL */
	
		.navTabs .navLeft:first-of-type .uix_leftMost { 
			border-top-left-radius: ' . XenForo_Template_Helper_Core::styleProperty('navTabs.border-top-left-radius') . '; 
			border-bottom-left-radius: ' . XenForo_Template_Helper_Core::styleProperty('navTabs.border-bottom-left-radius') . ';
		}
		
		#userBar .navTabs .navLeft:first-of-type .uix_leftMost {
			border-top-left-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.border-top-left-radius') . '; 
			border-bottom-left-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.border-bottom-left-radius') . ';
		}
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar2 .= ' #navigation .navTabs .navLeft:first-of-type .uix_leftMost { border-bottom-left-radius: 0 !important; } ';
}
$__compilerVar2 .= '
		
			/* NAVLINK */
		
			.navTabs .navLeft:first-of-type .uix_leftMost .navLink {
				border-radius: inherit;
			}
		
		
		/* THE LAST TAB OF THE "LAST" UL */
		
		.navTabs .navRight .uix_rightMost {
			border-top-right-radius: ' . XenForo_Template_Helper_Core::styleProperty('navTabs.border-top-right-radius') . '; 
			border-bottom-right-radius: ' . XenForo_Template_Helper_Core::styleProperty('navTabs.border-bottom-right-radius') . ';
		}
		
		#userBar .navTabs .navRight .uix_rightMost {
			border-top-right-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.border-top-right-radius') . '; 
			border-bottom-right-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.border-bottom-right-radius') . ';
		}
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar2 .= ' #navigation .navTabs .navRight .uix_rightMost { border-bottom-right-radius: 0 !important; } ';
}
$__compilerVar2 .= '
		
		/* CAN\'T USE LAST-OF-TYPE BECAUSE NATURE OF FLOAT: RIGHT */
		
		.navTabs .navRight ~ .navRight .uix_rightMost {
			border-top-right-radius: initial !important;
			border-bottom-right-radius: initial !important;	
		}
		
			/* NAVLINK */
		
			.navTabs .navRight .uix_rightMost .navLink {
				border-radius: inherit;
			}
			
		
		
		
		/* THE FIRST TAB OF THE FIRST UL */

		.noBorderRadius .navLeft:first-of-type .uix_leftMost {
			border-bottom-left-radius: 0 !important;
			border-top-left-radius: 0 !important;
		}
		
		.noBorderRadiusBottom .navTabs .navLeft:first-of-type .uix_leftMost { border-bottom-left-radius: 0 !important; }
		
		.noBorderRadiusTop .navTabs .navLeft:first-of-type .uix_leftMost { border-top-left-radius: 0 !important; }
		
		
		.activeSticky .navLeft:first-of-type .uix_leftMost {
			border-bottom-left-radius: 0 !important;
			border-top-left-radius: 0 !important;
		}
		
		
		/* THE LAST TAB OF THE "LAST" UL */
		
		.noBorderRadius .navRight .uix_rightMost {
			border-bottom-right-radius: 0 !important;
			border-top-right-radius: 0 !important;
		}
		
		.noBorderRadiusBottom .navTabs .navRight .uix_rightMost { border-bottom-right-radius: 0 !important; }
		
		.noBorderRadiusTop .navTabs .navRight .uix_rightMost { border-top-left-radius: 0 !important; }
		
		
		.activeSticky .navRight .uix_rightMost {
			border-bottom-right-radius: 0 !important;
			border-top-right-radius: 0 !important;
		}
		
	
		
	
	
	
	
	
';
}
$__output .= $__compilerVar2;
unset($__compilerVar2);
$__output .= '





';
$__compilerVar3 = '';
$__compilerVar3 .= '.uix_icon,

.uix_icon-facebook,
.uix_icon-twitter,
.uix_icon-youtube,
.uix_icon-dribbble,
.uix_icon-vimeo,
.uix_icon-deviantArt,
.uix_icon-googlePlus,
.uix_icon-linkedIn,
.uix_icon-instagram,
.uix_icon-pinterest,
.uix_icon-steam,
.uix_icon-twitch,
.uix_icon-vine,
.uix_icon-tumblr,
.uix_icon-git,
.uix_icon-reddit,
.uix_icon-flickr,

.uix_icon-close,
.uix_icon-search,
.uix_icon-home,
.uix_icon-inbox,
.uix_icon-alerts,
.uix_icon-admin,
.uix_icon-cog,
.uix_icon-navTrigger,
.uix_icon-sitemap,
.uix_icon-jumpToTop,
.uix_icon-jumpToBottom,
.uix_icon-signIn,
.uix_icon-register,

.uix_icon-permissions,
.uix_icon-user,
.uix_icon-users,
.uix_icon-reports,
.uix_icon-moderator,

.uix_icon-sidebarCollapse,

.uix_icon-email,
.uix_icon-rss,
.uix_icon-comment,
.uix_icon-thumbsUp,
.uix_icon-trophy,

.uix_icon-statsDiscussions,
.uix_icon-statsMessages,
.uix_icon-statsSubforumPopup,

.uix_icon-breadcrumbSeparator,
.breadcrumb .crust.placeholder .arrow,

.uix_icon-expand,
.uix_icon-collapse

{
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.uix_icon-facebook:before		 {content: "\\f09a";}
.uix_icon-twitter:before		 {content: "\\f099";}
.uix_icon-youtube:before		 {content: "\\f16a";}
.uix_icon-dribbble:before		 {content: "\\f17d";}
.uix_icon-vimeo:before		 	 {content: "\\f194";}
.uix_icon-deviantArt:before		 {content: "\\f1bd";}
.uix_icon-googlePlus:before		 {content: "\\f0d5";}
.uix_icon-linkedIn:before		 {content: "\\f0e1";}
.uix_icon-instagram:before		 {content: "\\f16d";}
.uix_icon-pinterest:before	 	 {content: "\\f0d2";}
.uix_icon-steam:before	 		 {content: "\\f1b6";}
.uix_icon-twitch:before	 		 {content: "\\f1e8";}
.uix_icon-vine:before	 		 {content: "\\f1ca";}
.uix_icon-tumblr:before	 		 {content: "\\f173";}
.uix_icon-git:before	 		 {content: "\\f1d3";}
.uix_icon-reddit:before	 		 {content: "\\f1a1";}
.uix_icon-flickr:before	 		 {content: "\\f16e";}

.uix_icon-close:before		 	 {content: "\\f00d";}
.uix_icon-search:before		 	 {content: "\\f002";}
.uix_icon-admin:before		 	 {content: "\\f013";}
.uix_icon-cog:before			 {content: "\\f013";}
.uix_icon-home:before		 	 {content: "\\f015";}
.uix_icon-inbox:before		 	 {content: "\\f0e0";}
.uix_icon-alerts:before		 	 {content: "\\f024";}
.uix_icon-navTrigger:before		 {content: "\\f0c9";}
.uix_icon-sitemap:before		 {content: "\\f0e8";}
.uix_icon-jumpToTop:before		 {content: "\\f062";}
.uix_icon-jumpToBottom:before		 {content: "\\f063";}
.uix_icon-signIn:before			 {content: "\\f007";}
.uix_icon-register:before		 {content: "\\f09c";}

.uix_icon-permissions:before		 {content: "\\f1c4";}
.uix_icon-user:before		 	 {content: "\\f007";}
.uix_icon-users:before		 	 {content: "\\f0c0";}
.uix_icon-reports:before		 {content: "\\f0f6";}
.uix_icon-moderator:before		 {content: "\\f0ae";}

.uix_icon-sidebarCollapse:before 	 {content: "\\f039";}

.uix_icon-email:before 			 {content: "\\f0e0";}
.uix_icon-rss:before 			 {content: "\\f09e";}
.uix_icon-comment:before 		 {content: "\\f075";}
.uix_icon-thumbsUp:before 		 {content: "\\f164";}
.uix_icon-trophy:before 		 {content: "\\f091";}

.uix_icon-statsDiscussions:before	 {content: "\\f0e5";}
.uix_icon-statsMessages:before		 {content: "\\f0c5";}
.uix_icon-statsSubforumPopup:before	 {content: "\\f114";}

.uix_icon-collapse:before		 { content: "\\f068"; }
.uix_icon-expand:before		 	 { content: "\\f067"; }

';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators'))
{
$__compilerVar3 .= '.breadcrumb .crust.placeholder .arrow:before, ';
}
$__compilerVar3 .= '
.uix_icon-breadcrumbSeparator:before{content: "\\f105";}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_rteIconFont'))
{
$__compilerVar3 .= '

	html .redactor_toolbar li a
	{
		text-indent: 0;
		text-align: center;
		line-height: ' . (XenForo_Template_Helper_Core::styleProperty('rteToolbarButton.height') - XenForo_Template_Helper_Core::styleProperty('rteToolbarButton.border-top-width') - XenForo_Template_Helper_Core::styleProperty('rteToolbarButton.border-bottom-width')) . 'px;
		font-size: 14px;
		color: ' . XenForo_Template_Helper_Core::styleProperty('contentText') . ';
	}
	
	.redactor_dropdown a.icon,
	html .redactor_toolbar li a,
	html .redactor_toolbar li a:hover,
	html .redactor_toolbar li a:active, 
	html .redactor_toolbar li a.redactor_act
	{
		background-image: none;
	}
	.redactor_dropdown a.icon:before
	{
		margin-left: -22px;
		margin-right: 10px;
		font-size: 14px;
	}
	html .redactor_toolbar li a:before,
	.redactor_dropdown a.icon:before
	{
		display: inline-block;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;	
	}
	
	
	html .redactor_toolbar li a, 
	html .redactor_toolbar li a:hover, 
	html .redactor_toolbar li a:active, 
	html .redactor_toolbar li a.redactor_act
	{
		background-image: none;
	}
	
	html .redactor_toolbar li a.redactor_btn_bold:before
	{
		content: "\\f032";
	}
	html .redactor_toolbar li a.redactor_btn_italic:before
	{
		content: "\\f033";
	}
	html .redactor_toolbar li a.redactor_btn_underline:before
	{
		content: "\\f0cd";
	}
	html .redactor_toolbar li a.redactor_btn_deleted:before
	{
		content: "\\f0cc";
	}
	html .redactor_toolbar li a.redactor_btn_fontcolor:before
	{
		content: "\\f043";
	}
	html .redactor_toolbar li a.redactor_btn_fontsize:before
	{
		content: "\\f034";
	}
	html .redactor_toolbar li a.redactor_btn_fontfamily:before
	{
		content: "\\f031";
	}
	html .redactor_toolbar li a.redactor_btn_createlink:before
	{
		content: "\\f0c1";
	}
	html .redactor_toolbar li a.redactor_btn_unlink:before
	{
		content: "\\f127";
	}
	html .redactor_toolbar li a.redactor_btn_alignment:before,
	.redactor_dropdown a.alignLeft:before
	{
		content: "\\f036";
	}
	.redactor_dropdown a.alignCenter:before
	{
		content: "\\f037";
	}
	.redactor_dropdown a.alignRight:before
	{
		content: "\\f038";
	}
	html .redactor_toolbar li a.redactor_btn_unorderedlist:before
	{
		content: "\\f0ca";
	}
	html .redactor_toolbar li a.redactor_btn_orderedlist:before
	{
		content: "\\f0cb";
	}
	html .redactor_toolbar li a.redactor_btn_outdent:before
	{
		content: "\\f03b";
	}
	html .redactor_toolbar li a.redactor_btn_indent:before
	{
		content: "\\f03c";
	}
	html .redactor_toolbar li a.redactor_btn_smilies:before
	{
		content: "\\f118";
	}
	html .redactor_toolbar li a.redactor_btn_image:before
	{
		content: "\\f03e";
	}
	html .redactor_toolbar li a.redactor_btn_media:before
	{
		content: "\\f008";
	}
	html .redactor_toolbar li a.redactor_btn_insert:before
	{
		content: "\\f196";
	}
	.redactor_dropdown a.quote:before
	{
		content: "\\f10e";
	}
	.redactor_dropdown a.spoiler:before
	{
		content: "\\f070";
	}
	.redactor_dropdown a.code:before
	{
		content: "\\f121";
	}
	.redactor_dropdown a.strikethrough:before
	{
		content: "\\f0cc";
	}
	html .redactor_toolbar li a.redactor_btn_draft:before,
	.redactor_dropdown a.saveDraft:before
	{
		content: "\\f0c7"
	}
	.redactor_dropdown a.deleteDraft:before
	{
		content: "\\f014";
	}
	html .redactor_toolbar li a.redactor_btn_undo:before
	{
		content: "\\f0e2";
	}
	html .redactor_toolbar li a.redactor_btn_redo:before
	{
		content: "\\f01e";
	}
	html .redactor_toolbar li a.redactor_btn_removeformat:before
	{
		content: "\\f12d";
	}
	html .redactor_toolbar li a.redactor_btn_switchmode:before
	{
		content: "\\f0ad";
	}
	
	html .redactor_toolbar li a.redactor_btn_custom_gallery {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_custom_gallery:before {
		content: "\\f030";
	}
	
';
}
$__output .= $__compilerVar3;
unset($__compilerVar3);
$__output .= '

.navTabs .navTab .navLink > .uix_icon { 
	line-height: inherit;
	vertical-align: top;
	overflow: hidden;
	font-size: 16px;
}

.navTabs .navTab .navLink > .uix_icon:before {
	vertical-align: baseline;
	height: 1em;
	width: 1em;
	text-align: center;
}





.clear {clear:both;}
.clear_left {clear:left;}
.clear_right {clear:right;}
.float_left {float: left;}
.float_right {float: right;}
.uix_hide {display: none !important;}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a label {
	cursor: pointer;
}
::selection
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_selection') . '
}	
body::-webkit-selection 
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_selection') . '
}	
body::-moz-selection 
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_selection') . '
}	
.errorPanel 
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_errorStyle') . '
}



#header > div
{
	margin-top: ' . htmlspecialchars($headerWhiteSpace, ENT_QUOTES, 'UTF-8') . ';
	margin-bottom: ' . htmlspecialchars($headerWhiteSpace, ENT_QUOTES, 'UTF-8') . ';
}

#header > div:last-of-type
{
	margin-bottom: 0;
}
@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
{
	.Responsive #header > div
	{
		margin: 0;
	}
}

';
if ((XenForo_Template_Helper_Core::styleProperty('uix_detachedNavigation') || XenForo_Template_Helper_Core::styleProperty('uix_removeContentWrapper')))
{
$__output .= '	
	#content
	{
		margin-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';	
	}
';
}
$__output .= '








#navigation .visitorTabs {
    min-width: 1px;
}


#AccountMenu {width: 288px;}
ul.col1.blockLinksList, ul.col2.blockLinksList  {width: 50%;}
#AccountMenu .menuColumns a, #AccountMenu .menuColumns label {width: auto;}

.navTabs .navLink .itemCount.Zero {
	display: none !important;
}

.Menu.uix_megaMenu {
	max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
	width: 100%;
	left: 0 !important;
	right: 0;
	margin: 0 auto;
	box-sizing: border-box;
	' . XenForo_Template_Helper_Core::styleProperty('uix_megaMenu_style') . '
}

#headerMover #header {
	position: static;
	width: auto;
}

#headerMover #headerProxy {
	display: none;
	height: 0;
}
	
';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1 && XenForo_Template_Helper_Core::styleProperty('navTabs.border-width'))
{
$__output .= '

	html:not(.activeSmallLogo) .navTabs ul.left .navTab:first-child .navLink 
	{
		border-left-width: 0;
	}
	.navTabs ul.right .navTab:last-child .navLink 
	{
		border-right-width: 0; 
	}

';
}
$__output .= '






.navTabs .navTab.PopupClosed .navLink { color: ' . XenForo_Template_Helper_Core::styleProperty('navLink.color') . '; }

	

	.navTabs .navTab:hover,
	.navTabs .navTab.PopupClosed:hover {
		' . XenForo_Template_Helper_Core::styleProperty('uix_navLinkHover') . '
	}
	
	.navTabs .navTab:hover .navLink,
	.navTabs .navTab.PopupClosed:hover .navLink,
	.navTabs .navTab.PopupClosed:hover .SplitCtrl { color: inherit; }



	

	.navTabs .navTab.Popup.PopupOpen,
	.navTabs .navTab.selected.PopupOpen .navLink {
		' . XenForo_Template_Helper_Core::styleProperty('uix_navTabOpen') . '
	}
	
	.navTabs .navTab.Popup.PopupOpen .navLink,
	.navTabs .navTab.Popup.PopupOpen .SplitCtrl { color: inherit; }


	
	
	.navTabs .navTab.selected .navLink, 
	.navTabs .navTab.PopupClosed.selected .navLink,
	.navTabs .navTab.PopupClosed.selected .SplitCtrl { color: ' . XenForo_Template_Helper_Core::styleProperty('navTabSelected.color') . '; }
	
	.hasTabLinks #navigation .navTabs .navTab.selected .navLink { border-bottom-color: ' . XenForo_Template_Helper_Core::styleProperty('navTabSelected.background-color') . '; }





.navTabs .moderatorTabs .uix_icon { opacity: 0.5; }



#navigation .uix_icon-navTrigger { font-size: 14px; }



	

';
if (XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= '
	.navTabs .SplitCtrl {
		font-family: FontAwesome !important;
		font-weight: normal !important;
		font-style: normal !important;
		text-rendering: auto;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		transform: translate(0, 0);
		
		font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_dropdownFontSize') . ';
		
		margin-left: -' . (XenForo_Template_Helper_Core::styleProperty('navLink.padding-right') + XenForo_Template_Helper_Core::styleProperty('uix_dropdownFontSize')) . 'px;
	}
	
	.navTabs .SplitCtrl,
	#userBar .navTabs .SplitCtrl {
		width: 1em;
		border: none !important;
		padding-left: 0 !important;
		padding-right: 0 !important;
		margin-right: 0 !important;
		background: none !important;
	}
	
	#userBar .navTabs .SplitCtrl {
		margin-left: -' . (XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.padding-right') + XenForo_Template_Helper_Core::styleProperty('uix_dropdownFontSize')) . 'px;	
	}
	
	.navTabs .SplitCtrl:hover { text-decoration: none; }
	
	.navTabs .SplitCtrl:before {
		content: "\\f0d7";
		display: block;
	}
	
	.navTabs .navTab.Popup .navLink:not(.NoPopupGadget) { 
		padding-right: calc( .2em + ' . (XenForo_Template_Helper_Core::styleProperty('navLink.padding-right') + XenForo_Template_Helper_Core::styleProperty('uix_dropdownFontSize')) . 'px ); 
	}
	
	#userBar .navTabs .navTab.Popup .navLink:not(.NoPopupGadget) { 
		padding-right: calc( .2em + ' . (XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.padding-right') + XenForo_Template_Helper_Core::styleProperty('uix_dropdownFontSize')) . 'px ); 
	}
	
	
	
	
	
	.navTabs .navTab.Popup.PopupOpen .SplitCtrl:before { content: "\\f0d8"; }

	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= '
	
		.navTabs .navTab.selected .SplitCtrl { display: none; }
		
	';
}
$__output .= '
	
	

';
}
else
{
$__output .= '

	.navTabs .SplitCtrl { display: none; }
	
';
}
$__output .= '



';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= '

	#navigation .pageContent { height: ' . htmlspecialchars($headerTabHeight_outer, ENT_QUOTES, 'UTF-8') . 'px; }
	
	.navTabs .navTab.selected .navLink { position: static; }
	
';
}
else
{
$__output .= '

	.navTabs .publicTabs .navTab.selected.Popup .navLink { padding-right: ' . XenForo_Template_Helper_Core::styleProperty('navLink.padding-right') . '; }

	#navigation.inactiveSticky.uix_noTabLinks .pageContent { height: ' . htmlspecialchars($headerTabHeight_outer, ENT_QUOTES, 'UTF-8') . 'px; }

	#navigation .pageContent { height: ' . ($headerTabHeight_outer + $uix_tabLinksHeight_outer) . 'px; }

	#navigation .navTabs {
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0;
	}
	
	.navTabs .navTab.selected .tabLinks {
		top: ' . htmlspecialchars($headerTabHeight_outer, ENT_QUOTES, 'UTF-8') . 'px;
		' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinks_style') . '
		
		height: ' . htmlspecialchars($uix_tabLinksHeight_outer, ENT_QUOTES, 'UTF-8') . 'px;
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeight') . ';
	}

	.navTabs .navTab.selected .tabLinks li {
		padding-top: 0;
		max-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeight') . ';
		box-sizing: border-box; 
	}
		
';
}
$__output .= '



.navTabs .navTab.account .itemCount,
.navTabs .navTab.inbox .itemCount,
.navTabs .navTab.alerts .itemCount {
	' . XenForo_Template_Helper_Core::styleProperty('alertBalloon') . '
}

.Menu.uix_adminMenu .blockLinksList .itemCount.alert,
#userBar .navTabs .navTab.account .itemCount,
#userBar .navTabs .navTab.inbox .itemCount,
#userBar .navTabs .navTab.alerts .itemCount
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_moderatorTabsAlert') . '
}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_inlineAlertBalloon_navigation'))
{
$__output .= '
	#navigation .navTabs .navLink {
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	
	#navigation .navTabs .navLink .itemCount {
		' . XenForo_Template_Helper_Core::styleProperty('uix_inlineAlertBalloon_style') . '
	}
	#navigation .navTabs .navLink .itemCount .arrow 
	{
		display: none;
	}
';
}
$__output .= '






' . '






/********************************
POPUP ICON SWAP
********************************/

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
	.Responsive .navigationSideBar .heading span:before {
		content: \'\\f0d7\';
		font-family: \'FontAwesome\';
	}
}

.Popup .arrowWidget:before {
	content: \'\\f0d7\';
	font-family: \'FontAwesome\';
}
.Popup .PopupOpen .arrowWidget:before {
	content: \'\\f0d8\';
	font-family: \'FontAwesome\';
}

.messageSimple
{
	border-bottom: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ';
}

.messageSimpleList .placeholder .placeholderContent {background-image: none;}

';
$__compilerVar4 = '';
$__compilerVar4 .= '
';
if (!XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation'))
{
$__compilerVar4 .= '.uix_sticky_navigation {display: none;}';
}
$__compilerVar4 .= '
';
if (!XenForo_Template_Helper_Core::styleProperty('uix_stickyUserBar'))
{
$__compilerVar4 .= '.uix_sticky_userbar {display: none;}';
}
$__compilerVar4 .= '
';
if (!XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar_sticky'))
{
$__compilerVar4 .= '.uix_sticky_sidebar {display: none;}';
}
$__output .= $__compilerVar4;
unset($__compilerVar4);
$__output .= '


.navigationSideBar {font-size: ' . XenForo_Template_Helper_Core::styleProperty('sidebar.font-size') . ';}
.navigationSideBar a:hover {
	background-image: none;
	color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . ';
}
.navigationSideBar > ul {
	border: solid 1px ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ';
	border-width: 0 0 1px 1px;
	margin-bottom: 10px;
	background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryContent.background-color') . ';
}
.navigationSideBar > ul, 
.navigationSideBar > ul > li.section:last-child > ul > li:last-child,
.navigationSideBar > ul > li.section:last-child > ul > li:last-child a {border-bottom-left-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeBorderRadius') . ';}

.navigationSideBar > ul.menuVisible, 
.navigationSideBar > ul.menuVisible > li.section:last-child > ul > li:last-child,
.navigationSideBar > ul.menuVisible > li.section:last-child > ul > li:last-child a {border-radius: 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeBorderRadius') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeBorderRadius') . ';}




';
$__compilerVar5 = '';
$__compilerVar5 .= '
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
$__compilerVar5 .= '


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
$__compilerVar5 .= '
	
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
$__compilerVar5 .= '
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
$__compilerVar5 .= '



';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchButton'))
{
$__compilerVar5 .= '
	
	#QuickSearch .primaryControls .uix_icon
	{
		' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButtonPosition')) ? ('left: 0;') : ('right: 0;')) . '
		' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle') . '
		';
if ($pageIsRtl)
{
$__compilerVar5 .= '
			border-radius: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButtonPosition')) ? ('0 ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius') . ' 0') : (XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius') . ' 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius'))) . ';
		';
}
else
{
$__compilerVar5 .= '	
			border-radius: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButtonPosition')) ? (XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius') . ' 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius')) : ('0 ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_searchButtonStyle.border-radius') . ' 0')) . ';
		';
}
$__compilerVar5 .= '	
	}
	#QuickSearch:not(.show) #QuickSearchQuery 
	{
		text-indent: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButtonPosition')) ? ((XenForo_Template_Helper_Core::styleProperty('uix_quickSearchHeight') + 6) . 'px') : ('6px')) . ';
	}
	
';
}
else
{
$__compilerVar5 .= '

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
$__compilerVar5 .= '



';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar5 .= '

	#uix_searchMinimal { 
		box-sizing: border-box;
		pointer-events: none; 
	}
	
	#uix_searchMinimal.show { pointer-events: auto; }
	
	
	
	';
if ($uix_searchPosition == 0)
{
$__compilerVar5 .= '
	
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar5 .= '#navigation.withSearch .tabLinks .pageWidth { position: relative; }';
}
$__compilerVar5 .= '
	
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
$__compilerVar5 .= '
	
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
$__compilerVar5 .= '
		
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
$__compilerVar5 .= '
	
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
$__compilerVar5 .= '
		
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
$__compilerVar5 .= '
	
		
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
$__compilerVar5 .= '
		#uix_searchMinimal { color: ' . XenForo_Template_Helper_Core::styleProperty('navLink.color') . '; }
		#uix_searchMinimal input::-webkit-input-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('navLink.color') . '; }
		#uix_searchMinimal input:-moz-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('navLink.color') . '; }
		#uix_searchMinimal input::-moz-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('navLink.color') . '; }
		#uix_searchMinimal input:-ms-input-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('navLink.color') . '; }
	';
}
else if ($uix_searchPosition == 3)
{
$__compilerVar5 .= '
		#uix_searchMinimal { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.color') . '; }
		#uix_searchMinimal input::-webkit-input-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.color') . '; }
		#uix_searchMinimal input:-moz-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.color') . '; }
		#uix_searchMinimal input::-moz-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.color') . '; }
		#uix_searchMinimal input:-ms-input-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink.color') . '; }
	';
}
else if ($uix_searchPosition == 4)
{
$__compilerVar5 .= '
		#uix_searchMinimal { color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb.color') . '; }
		#uix_searchMinimal input::-webkit-input-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb.color') . '; }
		#uix_searchMinimal input:-moz-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb.color') . '; }
		#uix_searchMinimal input::-moz-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb.color') . '; }
		#uix_searchMinimal input:-ms-input-placeholder { color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb.color') . '; }
	';
}
$__compilerVar5 .= '
';
}
$__compilerVar5 .= '



';
if ($uix_searchPosition == 0)
{
$__compilerVar5 .= '
	
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
$__compilerVar5 .= '
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
$__compilerVar5 .= '
	
		.withSearch .navTabs .navTab.selected .blockLinksList {
			margin-right: ' . ((2 * XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall')) + 8 + XenForo_Template_Helper_Core::styleProperty('uix_quickSearchPlaceholderSize')) . 'px;
		}
	
	';
}
$__compilerVar5 .= '
	
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation'))
{
$__compilerVar5 .= '
	
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
$__compilerVar5 .= '		
	
';
}
else if ($uix_searchPosition == 1)
{
$__compilerVar5 .= '
	
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_widthToCenterLogo') != ('100%'))
{
$__compilerVar5 .= '
		
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
$__compilerVar5 .= '
		
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
$__compilerVar5 .= '
	
		
';
}
else if ($uix_searchPosition == 2)
{
$__compilerVar5 .= '

	
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
$__compilerVar5 .= '
	
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
$__compilerVar5 .= '
	
';
}
else if ($uix_searchPosition == 3)
{
$__compilerVar5 .= '

	
		
	
	
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
$__compilerVar5 .= '
	
		
		
		
		
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
$__compilerVar5 .= '
	
';
}
else if ($uix_searchPosition == 4)
{
$__compilerVar5 .= '

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
$__compilerVar5 .= '
	
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
$__compilerVar5 .= '
	
';
}
$__compilerVar5 .= '	';
$__output .= $__compilerVar5;
unset($__compilerVar5);
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__output .= '
#VisitorExtraMenu_Counter {display: inline-block !important;}
#VisitorExtraMenu_Counter.Zero {display: none !important;}
';
}
$__output .= '

.pollBlock .question .questionText {color: ' . XenForo_Template_Helper_Core::styleProperty('contentText') . ';}
.pollResult .barContainer {border-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_tertiaryColor') . '; border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';}
.pollResult .bar {background: ' . XenForo_Template_Helper_Core::styleProperty('uix_tertiaryColor') . ';}

.eventList li,
html .searchResult {border-bottom: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ';}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_moveTopCtrl'))
{
$__output .= '
.contentCallToAction {margin-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';}
';
}
$__output .= '




' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.uix_contentFix'
)) . '


.uix_mainSidebar {
	-moz-transition: opacity 0.4s;
	-o-transition: opacity 0.4s;
	-webkit-transition: opacity 0.4s;
	transition: opacity 0.4s;
}

.mainContainer .mainContent > *:first-child,
.mainContainer_noSidebar > *:first-child
{
	margin-top: 0;	
}

.mainContainer .mainContent > *:last-child,
.mainContainer_noSidebar > *:last-child
{
	margin-bottom: 0;
}


';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeContentWrapper'))
{
$__output .= ' 
	' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.mainContainer_noSidebar'
)) . '
	' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.mainContainer .mainContent'
)) . '
	#content .pageContent:after
	{
		content: none;	
	}

	#content .pageContent 
	{
		background-color: transparent; 
		padding: 0;
		margin: 0;
		margin-bottom: 1px; 
		border: none;
		box-shadow: none;
		background-image: none;
	}
	.Responsive #content .pageContent
	{
		padding-left: 0;
		padding-right: 0;
	}
	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
	{
		.Responsive #content .pageWidth
		{
			margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('content.padding-left') / 2) . 'px;
			margin-right: ' . (XenForo_Template_Helper_Core::styleProperty('content.padding-right') / 2) . 'px;
		}
	}

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 2)
{
$__output .= '
		.mainContainer .mainContent, 
		.mainContainer_noSidebar 
		{
			' . XenForo_Template_Helper_Core::styleProperty('content') . '
		}
		
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ')
		{
			.mainContainer .mainContent, 
			.mainContainer_noSidebar
			{
				padding-left: ' . (XenForo_Template_Helper_Core::styleProperty('content.padding-left') / 2) . 'px;
				padding-right: ' . (XenForo_Template_Helper_Core::styleProperty('content.padding-right') / 2) . 'px;
			}
		}
	';
}
else
{
$__output .= '
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
		{
			.Responsive #content .pageWidth
			{
				margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.padding-left') / 2) . 'px;
				margin-right: ' . (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.padding-right') / 2) . 'px;
			}
		}
	';
}
$__output .= '
	
';
}
else
{
$__output .= ' 

		#content .pageContent > *:first-child
		{
			margin-top: 0;	
		}
		#content .pageContent > *:last-child
		{
			margin-bottom: 0;	
		}
							
';
}
$__output .= '

';
$__compilerVar6 = '';
$__compilerVar6 .= '#InlineModOverlay {
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
$__output .= $__compilerVar6;
unset($__compilerVar6);
$__output .= '

';
$__compilerVar7 = '';
$__compilerVar7 .= '



#userBar .navTabs {
	' . XenForo_Template_Helper_Core::styleProperty('uix_userBar_style') . '
	height: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarHeight') . ';
}

#userBar .navTabs .navLink,
#userBar .navTabs .SplitCtrl {
	' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLink') . '
}

#userBar .navTabs .navTab.selected .navLink {
	' . XenForo_Template_Helper_Core::styleProperty('uix_userBarSelectedLink') . '
}


	
	
	#userBar .navTabs .navTab:hover,
	#userBar .navTabs .navTab.PopupClosed:hover {
		' . XenForo_Template_Helper_Core::styleProperty('uix_userBarLinkHover') . '
	}

	#userBar .navTabs .navTab:hover .navLink,
	#userBar .navTabs .navTab.PopupClosed:hover .navLink,
	#userBar .navTabs .navTab.PopupClosed:hover .SplitCtrl { color: inherit; }


	
	
	#userBar .navTabs .navTab.Popup.PopupOpen,
	#userBar .navTabs .navTab.selected.PopupOpen .navLink {
		' . XenForo_Template_Helper_Core::styleProperty('uix_userBarNavTabOpen') . ';
	}
	
	#userBar .navTabs .navTab.Popup.PopupOpen .navLink,
	#userBar .navTabs .navTab.Popup.PopupOpen .SplitCtrl { color: inherit; }


	

	#userBar .navTabs .navTab.selected .navLink, 
	#userBar .navTabs .navTab.PopupClosed.selected .navLink,
	#userBar .navTabs .navTab.PopupClosed.selected .SplitCtrl { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarSelectedLink.color') . '; }





#userBar .navTabs .navLink .itemCount 
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_userBarAlertBalloon') . ';
}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_inlineAlertBalloon_userBar'))
{
$__compilerVar7 .= '
	#userBar .navTabs .navLink
	{
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	#userBar .navTabs .navLink .itemCount 
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_inlineAlertBalloon_style') . '
	}
	#userBar .navTabs .navLink .itemCount .arrow {display: none;}
	
';
}
$__compilerVar7 .= '

#userBar .navTabs .navLink .itemCount.alert
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_moderatorTabsAlert') . '
}
#userBar .navTabs .navLink .itemCount .arrow
{
	border-top-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarAlertBalloon.background-color') . ';
}
#userBar .navTabs .navLink .itemCount.alert .arrow
{
	border-top-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_moderatorTabsAlert.background-color') . ';
}

';
if ((XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2) && (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1))
{
$__compilerVar7 .= '
	#userBar {margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';}
';
}
$__compilerVar7 .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('100%'))
{
$__compilerVar7 .= '
	.moderatorTabs .navTab.admin.Popup
	{
		display: none;
	}

	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') . ')
	{
		.Responsive .moderatorTabs .navTab
		{
			display: none;
		}
		.Responsive .moderatorTabs .navTab.admin.Popup
		{
			display: inline-block;
		}
	}
';
}
$__compilerVar7 .= '


.uix_userbarRenderFix {
	display: inherit;
}';
$__output .= $__compilerVar7;
unset($__compilerVar7);
$__output .= '




.uix_mainSidebar.sticky .inner_wrapper {
	-moz-transition: top 0.2s;
	-o-transition: top 0.2s;
	-webkit-transition: top 0.2s;
	transition: top 0.2s;
}




#navigation,
#userBar {
	position: relative;
}

#navigation.withSearch,
#userBar.withSearch {
	z-index: 52;
}


#userBar .moderatorTabs > a {
	visibility: hidden;
}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation') || XenForo_Template_Helper_Core::styleProperty('uix_stickyUserBar'))
{
$__output .= '

	.sticky_wrapper {
		position: relative;
	
		-moz-transition: -moz-transform 0.2s !important;
		-o-transition: transform 0.2s !important;
		-o-transition: -o-transform 0.2s !important;
		
		-webkit-transition: -webkit-transform 0.2s !important;
		
		transition: -webkit-transform 0.2s !important;
		transition: transform 0.2s !important; 
		
		transform: translate3d(0, 0, 0);
	}
	
	.activeSticky .sticky_wrapper {
		position: fixed;
		left: 0;
		right: 0;
		-webkit-perspective: 1000px;
		perspective: 1000px;
	}
	
	
	
	#navigation.activeSticky,
	#userBar.activeSticky,
	.activeSticky .sticky_wrapper { z-index: 250; }
	
	
	
	#navigation.activeSticky.withSearch,
	#userBar.activeSticky.withSearch,
	.activeSticky.withSearch .sticky_wrapper { z-index: 260; }
	
		#navigation.activeSticky.lastSticky,
		#userBar.activeSticky.lastSticky,
		.activeSticky.lastSticky .sticky_wrapper { z-index: 240; }

	/* style last sticky element with a box-shadow body.scrollNotTouchingTop*/ 
	.activeSticky.lastSticky .pageContent {
		box-shadow: 0 2px rgba(0,0,0,.1);
	}
	
	.activeSticky .navTabs .navLink .itemCount 
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_inlineAlertBalloon_style') . '
	}
	.activeSticky .navTabs .navLink .itemCount .arrow
	{
		display: none;
	}
	
	
	
	#navigation.activeSticky .navTabs .navLink,
	#navigation.activeSticky .navTabs .SplitCtrl {
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigationHeight') . ';
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigationHeight') . ';
	}
	
	#navigation.activeSticky .navTabs {
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigationHeight') . ';
	
		' . XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigation_style') . '
	}
	
	
	
	
	.activeSticky .navTabs .navTab.selected .tabLinks {
		' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksSticky_style') . '
	
		height: ' . htmlspecialchars($uix_tabLinksHeightSticky_outer, ENT_QUOTES, 'UTF-8') . 'px;
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeightSticky') . ';
		top: ' . htmlspecialchars($uix_fixedNavigationHeight_outer, ENT_QUOTES, 'UTF-8') . 'px;
		border-radius: 0;
	}
	
	.activeSticky .navTabs .navTab.selected .tabLinks li { max-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinksHeightSticky') . '; }
	
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinksSticky'))
{
$__output .= '
		.activeSticky.uix_hideSubElement .navTabs .navTab.selected .tabLinks { display: none !important; }
	';
}
$__output .= '

	#navigation.activeSticky .pageContent {
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= '
			height: ' . htmlspecialchars($uix_fixedNavigationHeight_outer, ENT_QUOTES, 'UTF-8') . 'px;
		';
}
else
{
$__output .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinksSticky'))
{
$__output .= '
				height: ' . htmlspecialchars($uix_fixedNavigationHeight_outer, ENT_QUOTES, 'UTF-8') . 'px;
			';
}
else
{
$__output .= '
				height: ' . ($uix_fixedNavigationHeight_outer + $uix_tabLinksHeightSticky_outer) . 'px;
			';
}
$__output .= '
		';
}
$__output .= '
	}
	
	
	
	#userBar.activeSticky .navTabs .navLink, 
	#userBar.activeSticky .navTabs .SplitCtrl {
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBarHeight') . ';
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBarHeight') . ';
	}
	
	#userBar.activeSticky .navTabs {
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBarHeight') . ';
		
		' . XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBar_style') . '
	}
	
';
}
$__output .= ' 





';
if (XenForo_Template_Helper_Core::styleProperty('uix_hideAccountUsername'))
{
$__output .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_hideAccountUsername') != ('100%'))
{
$__output .= '
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_hideAccountUsername') . ') {
			.navTabs .navTab.account .navLink .accountUsername {display: none !important;}
		}
	';
}
else
{
$__output .= '
		.navTabs .navTab.account .navLink .accountUsername {display: none !important;}
	';
}
$__output .= '
		
';
}
$__output .= '	
.navTabs .navTab.account .avatar img 
{
	width: 20px;
	height: 20px;
	border: none;
	box-shadow: none;
	display: block;
}
	
.navTabs .navTab.account .navLink .accountUsername 
{
	display: inline-block;
	vertical-align: inherit;
	text-transform: none;
}

.navTabs .navTab.account .navLink {
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.navTabs .navTab.account .navLink > strong,
.navTabs .navTab.account .navLink > span {
	display: inline-block;
	text-align: center;
	vertical-align: top;
	position: relative;
	top: 50%;
	transform: translateY(-50%);
}

.PageNav .scrollable {width: ' . ((XenForo_Template_Helper_Core::styleProperty('pageNavLinkWidth') * 5) + (XenForo_Template_Helper_Core::styleProperty('pageNavLinkSpacing') * 4)) . 'px;}

.PageNav,
.pageNavLinkGroup {line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageNav_height') . ';}
.PageNav .scrollable {height: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageNav_height') . ';}
.PageNav a {line-height: ' . (XenForo_Template_Helper_Core::styleProperty('uix_pageNav_height') - XenForo_Template_Helper_Core::styleProperty('pageNavItem.border-top-width') - XenForo_Template_Helper_Core::styleProperty('pageNavItem.border-bottom-width')) . 'px; }

a.PageNavPrev, a.PageNavNext {padding: 0;}

.PageNav .pageNavHeader, 
.PageNav a, 
.PageNav .scrollable
{
	margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('pageNavLinkSpacing') . ';
}
.textWithCount.subHeading .text 
{
	color: ' . XenForo_Template_Helper_Core::styleProperty('subHeading.color') . ';
}
.button.spinBoxButton
{
	margin-left: 5px;
	min-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_formElementHeight') . ';
}

.textCtrlWrap
{
	height: auto;
	text-indent: 0;
}
.textCtrl .prefix, 
.textCtrl .Popup
{
	height: ' . XenForo_Template_Helper_Core::styleProperty('uix_formElementHeight') . ';
	line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_formElementHeight') . ';
}
.textCtrlWrap input.textCtrl,
.textCtrlWrap input.textCtrl:focus,
.textCtrlWrap input.textCtrl.Focus {box-shadow: none !important;}

.xenForm fieldset + .ctrlUnit, 
.xenForm .formGroup + .ctrlUnit, 
.xenForm .submitUnit 
{
	border-top: none;
}
.xenForm fieldset, 
.xenForm .formGroup,
.dataTable tr.dataRow td
{
	border-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ';
}
.larger.textHeading,
.xenForm .sectionHeader,
.larger.textHeading a,
.xenForm .sectionHeader a {color: ' . XenForo_Template_Helper_Core::styleProperty('contentText') . '; }

.formPopup .controlsWrapper,
.thread_view .threadAlerts {background-image: none;}
.thread_view .threadAlerts {
	border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('secondaryMedium') . ';
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';
	background-image: none;
	background-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLight') . ';
}
 
.thread_view .threadAlerts dt {color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryDark') . ';}

';
$__compilerVar8 = '';
if ($xenOptions['uix_socialMedia'] && XenForo_Template_Helper_Core::styleProperty('uix_socialMedia'))
{
$__compilerVar8 .= '
	.footerLegal .uix_socialMediaLinks {float: right;}
	.uix_socialMediaLinks > li {display: inline-block;}
	.uix_socialMediaLinks > li > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon') . '
	}
	.uix_socialMediaLinks > li:last-child > a {margin-right: 0;}
	
	.uix_socialMediaLinks > li > a:hover {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIconsHover') . '
	
	}
	.uix_socialMediaLinks > li > a .uix_icon:before {
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon.height') . ';
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon.height') . ';
		display: block;
		
	}
	.uix_socialMediaLinks > li.facebook > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_facebook') . '
	}
	
	.uix_socialMediaLinks > li.twitter > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_twitter') . '
	}
	
	.uix_socialMediaLinks > li.youtube> a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_youtube') . '
	}
	
	.uix_socialMediaLinks > li.dribbble > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_dribbble') . '
	}
	
	.uix_socialMediaLinks > li.vimeo > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_vimeo') . '
	}
	
	.uix_socialMediaLinks > li.deviantart > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_deviantart') . '
	}
	
	.uix_socialMediaLinks > li.googleplus > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_googleplus') . '
	}
	
	.uix_socialMediaLinks > li.linkedin > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_linkedin') . '
	}
	
	.uix_socialMediaLinks > li.pinterest > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_pinterest') . '
	}
	
	.uix_socialMediaLinks > li.instagram > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_instagram') . '
	}
	
	.uix_socialMediaLinks > li.steam > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_steam') . '
	}
	
	.uix_socialMediaLinks > li.twitch > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_twitch') . '
	}
	
	.uix_socialMediaLinks > li.vine > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_vine') . '
	}
	
	.uix_socialMediaLinks > li.tumblr > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_tumblr') . '
	}	
	
	.uix_socialMediaLinks > li.git > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_git') . '
	}
	
	.uix_socialMediaLinks > li.reddit > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_reddit') . '
	}
	
	.uix_socialMediaLinks > li.flickr > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_flickr') . '
	}
	
	.uix_socialMediaLinks > li.contact > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_contact') . '
	}
	
	.uix_socialMediaLinks > li.rss > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_rss') . '
	}
';
}
$__output .= $__compilerVar8;
unset($__compilerVar8);
$__output .= '

';
$__compilerVar9 = '';
$__compilerVar9 .= '#logoBlock .pageContent {
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
$__compilerVar9 .= '
	#logo img {
		max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_logoWidth') . ';
		 width: 100%;
	}
';
}
$__compilerVar9 .= '

';
if ((XenForo_Template_Helper_Core::styleProperty('uix_navigationStickyLogo') && XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) || XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2)
{
$__compilerVar9 .= '
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
$__compilerVar9 .= '
		#logo_small { display: block; }
	';
}
$__compilerVar9 .= '
	
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
$__compilerVar9 .= 'width: ' . XenForo_Template_Helper_Core::styleProperty('uix_navigationLogoWidth') . ';';
}
$__compilerVar9 .= '
		display: inline-block;
		vertical-align: top;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
	}	
';
}
$__compilerVar9 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar9 .= '
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
$__compilerVar9 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__compilerVar9 .= '
	#logo .uix_icon,
	#navigation .uix_textLogo .uix_icon 
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIconStyle') . '
	}
';
}
$__compilerVar9 .= '



';
if (XenForo_Template_Helper_Core::styleProperty('uix_sloganText'))
{
$__compilerVar9 .= '
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
$__compilerVar9 .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_widthToCenterLogo') != ('100%'))
{
$__compilerVar9 .= '
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
$__compilerVar9 .= '

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
$__compilerVar9 .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar9 .= '

	' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '#logoBlock .pageWidth'
)) . '
	
	#logoBlock .pageContent {
		border-left: none;
		border-right: none;
	}

';
}
$__compilerVar9 .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar9 .= '

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
$__compilerVar9 .= '
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
$__compilerVar9 .= '
	
		#navigation .pageContent {
			margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth')) . 'px;
		}
		#logoBlock .pageContent {
			width: ' . XenForo_Template_Helper_Core::styleProperty('sidebar.width') . ';
			float: left;
		}
		
	';
}
$__compilerVar9 .= '
	
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar9 .= '
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
$__compilerVar9 .= '
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
$__compilerVar9 .= '	
		
	}
	
';
}
$__output .= $__compilerVar9;
unset($__compilerVar9);
$__output .= '

.avatarScaler img,
.xenOverlay .formOverlay .avatar img,
.xenOverlay .formOverlay .avatar .img,
.xenOverlay .formOverlay .avatarCropper 
{
	background-color: ' . XenForo_Template_Helper_Core::styleProperty('avatar.background-color') . ';
}
body .AvatarEditor .avatarOption 
{
	background: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLighter') . '; 
	border-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLight') . ';
}

.xenOverlay .section.messageSimpleList .messageContent {padding-right: 42px;}


';
if (XenForo_Template_Helper_Core::styleProperty('uix_avatarShape') != 1)
{
$__output .= '
	.avatar img, 
	.avatar .img, 
	.avatarCropper 
	{
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_avatarShape') == 0)
{
$__output .= '		
		border-radius: 100%;
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_avatarShape') == 2)
{
$__output .= '	
		-webkit-clip-path: polygon(50% 0, 100% 50%, 50% 100%, 0 50%);
		clip-path: url(#diamond);
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_avatarShape') == 3)
{
$__output .= '	
		-webkit-clip-path: polygon(50% 0, 100% 38%, 80% 100%, 20% 100%, 0 38%);
		clip-path: url(#pentagon);
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_avatarShape') == 4)
{
$__output .= '	
		-webkit-clip-path: polygon(50% 0, 95% 25%, 95% 75%, 50% 100%, 5% 75%, 5% 25%);
		clip-path: url(#hexagon);
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_avatarShape') == 5)
{
$__output .= '	
		-webkit-clip-path: polygon(0 50%, 15% 15%, 50% 0, 85% 15%, 100% 50%, 85% 85%, 50% 100%, 15% 85%);
		clip-path: url(#octogon);
	';
}
$__output .= '
	}

	.memberCard .avatarCropper img, 
	.memberCard .avatarCropper 
	{
		border-radius: 0;
	}
';
}
$__output .= '

.conversation_view .messageList
{
	border: none;
	padding-right: 0;
}

.conversation_view .message:first-child,
.conversation_view .quickReply 
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border') . '
}

';
$__compilerVar10 = '';
$__compilerVar10 .= '.breadcrumb 
{
	height: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') . ';
}

.breadBoxTop,
.breadBoxBottom
{
	margin: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' 0;
	' . XenForo_Template_Helper_Core::styleProperty('breadBox.margin') . '
}
.breadcrumb .crust a.crumb,
.breadcrumb .crust .arrow,
.breadcrumb .crust.placeholder .arrow,
.breadcrumb .jumpMenuTrigger
{
	line-height: ' . (XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') - (XenForo_Template_Helper_Core::styleProperty('breadcrumb.border-top-width') + XenForo_Template_Helper_Core::styleProperty('breadcrumb.border-bottom-width'))) . 'px;
}

.breadcrumb .uix_icon-home 
{
	font-size: 16px;
} 
.breadBoxTop a.callToAction 
{
	height: auto;
	line-height: inherit;
}

.breadcrumb .crust .arrow, .breadcrumb .crust .arrow span 
{
	border-top-width: ' . (XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') / 2) . 'px;
	border-bottom-width: ' . (XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') / 2) . 'px;
}
.breadcrumb .crust .arrow span 
{
	top: -' . (XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') / 2) . 'px;
}


';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators'))
{
$__compilerVar10 .= '
	.breadcrumb .crust a.crumb
	{
		float: left;
	}
	.breadcrumb .crust .arrow
	{
		position: static;
		display: block;
		float: left;
		border: none;
		height: auto;
		width: auto;
	}
	.breadcrumb .crust:last-child .arrow {
		display: none;
	}
	.breadcrumb .crust.placeholder .arrow span
	{
		display: none;
	}
';
}
$__compilerVar10 .= '

.uix_breadCrumb_toggleList 
{
	float: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('left') : ('right')) . ';
}
.uix_breadCrumb_toggleList li.toggleList_item 
{
	float: ' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('right') : ('left')) . ';
	margin-' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('right') : ('left')) . ': ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	
	height: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') . ';
	line-height: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.height') . ';
	
	box-sizing: border-box;
	
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.border') . '
	
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumb.background') . '
}
.uix_breadCrumb_toggleList .toggleList_item a
{
	display: block; 
	text-align: center; 
	padding: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb.color') . ';
	text-decoration: none;
	
}
.uix_breadCrumb_toggleList .toggleList_item a:hover {
	color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumbHover.color') . ';
}
.uix_breadCrumb_toggleList .toggleList_item a .uix_icon {font-size: 14px;}';
$__output .= $__compilerVar10;
unset($__compilerVar10);
$__output .= '

.subForumsPopup .PopupOpen {color: ' . XenForo_Template_Helper_Core::styleProperty('popupControl.color') . ' !important;}
.subForumsPopup .PopupOpen .dt {color: ' . XenForo_Template_Helper_Core::styleProperty('popupControl.color') . ';}

';
$__compilerVar11 = '';
$__compilerVar11 .= '.uix_icon.uix_widthToggle {
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.uix_icon.uix_widthToggle:before {
	content: \'\\f066\';
}

.uix_widthToggle_lower .uix_icon.uix_widthToggle:before {
	content: \'\\f065\';
}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpToTopFixed') || XenForo_Template_Helper_Core::styleProperty('uix_jumpToBottomFixed'))
{
$__compilerVar11 .= '
#uix_jumpToFixed
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_jumpToFixed_style') . '
	padding: 0;
}

#uix_jumpToFixed a {
	color: inherit;
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpTo_stacked'))
{
$__compilerVar11 .= '
		display: block; 
	';
}
else
{
$__compilerVar11 .= '
		display: inline-block;
	';
}
$__compilerVar11 .= '
	' . XenForo_Template_Helper_Core::styleProperty('uix_jumpToFixed_style.padding') . '
	}
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpTo_stacked'))
{
$__compilerVar11 .= '
		#uix_jumpToFixed a:first-child {padding-bottom: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;}
		#uix_jumpToFixed a:last-child {padding-top: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;}
	';
}
else
{
$__compilerVar11 .= '
		#uix_jumpToFixed a:first-child {padding-right: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;}
		#uix_jumpToFixed a:last-child {padding-left: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;}
	';
}
$__compilerVar11 .= '
	
#uix_jumpToFixed:hover {opacity: 1;} 
';
}
$__compilerVar11 .= '
.footerLinks a.globalFeed {
	' . XenForo_Template_Helper_Core::styleProperty('nodeTinyIcon') . '
	opacity: 1;
	vertical-align: middle;
	display: inline-block;
	
}

#copyright {text-align: left; color: inherit;}

' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.footer .pageContent'
)) . '

#legal {clear: right;}
.footerLegal .pageContent {
	clear:both;
	' . XenForo_Template_Helper_Core::styleProperty('uix_footerLegal_style') . '
}

.debugInfo {float: left; clear: both;}


.footer .choosers dd {margin-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';}
.footer .choosers dd:last-child {margin-right: 0;}

.footer .choosers a:after 
{
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	content: "\\f0d7";
	font-size: 12px;
	margin-left: 4px;
}

.footer .choosers.chooser_widthToggle a:after {display: none;}

.footer .choosers a {
	' . XenForo_Template_Helper_Core::styleProperty('uix_footerChoosers') . '
}
.footer .choosers a:hover {
	' . XenForo_Template_Helper_Core::styleProperty('uix_footerChoosersHover') . '
}

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ')
{
	.Responsive .footerLegal .uix_socialMediaLinks {float: none; margin: 0; text-align: center;}
	.Responsive #copyright, .Responsive #legal, .Responsive .debugInfo {float: none; display: block;}
	.Responsive #legal li {display: inline-block;float:none}
	.Responsive #copyright {margin: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ' 0;display:block;text-align:center;}	
}
';
if (XenForo_Template_Helper_Core::styleProperty('uix_centerFooterLinks'))
{
$__compilerVar11 .= '
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_centerFooterLinks') != ('100%'))
{
$__compilerVar11 .= '
	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_centerFooterLinks') . ')
	{
	';
}
$__compilerVar11 .= '
		.Responsive .footer .pageContent {text-align: center;height: auto;}
		.Responsive .footer .choosers {display: inline-block; padding: 0 ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px; float: none; vertical-align: middle; text-align: center;}
		.Responsive .footer .choosers dd {margin: 0 4px; text-align: center;}
		.Responsive .footerLinks {float: none; padding: 0;}
		.Responsive .footerLinks li {display: inline-block; float: none !important;}
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_centerFooterLinks') != ('100%'))
{
$__compilerVar11 .= '
	}
	';
}
$__compilerVar11 .= '
';
}
$__output .= $__compilerVar11;
unset($__compilerVar11);
$__output .= '

';
$__compilerVar12 = '';
$__compilerVar12 .= '.profilePage .mast .sectionFooter { margin-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . '; }

.profilePage .mast { border-right: 0; }

.profilePage .primaryUserBlock {
	margin-top: 0; 
	border-top: 0;
}

.profilePage .mast .section.infoBlock .primaryContent,
.profilePage .mast .section.infoBlock .secondaryContent {
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('profilePageSidebarInfoBlock.border-radius') . '; 
}';
$__output .= $__compilerVar12;
unset($__compilerVar12);
$__output .= '

.PanelScroller .navContainer {margin-top: -' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') + 1) . 'px;}

';
$__compilerVar13 = '';
$__compilerVar13 .= '.discussionList .discussionListItem.sticky .posterAvatar, 
.discussionList .discussionListItem.sticky .stats,
.discussionList .discussionListItem.moderated .listBlock,
.discussionListItem.InlineModChecked .posterAvatar, 
.discussionListItem.InlineModChecked .main, 
.discussionListItem.InlineModChecked .stats, 
.discussionListItem.InlineModChecked .lastPost,
.discussionListItem.moderated.InlineModChecked,
.discussionListItem.deleted .posterAvatar   {background-color: transparent;}

.discussionList .discussionListItem.sticky.InlineModChecked,
.discussionList .discussionListItem.InlineModChecked,
.discussionList .discussionListItem.moderated.InlineModChecked,
.discussionList .discussionListItem.deleted.InlineModChecked {background-color: ' . XenForo_Template_Helper_Core::styleProperty('inlineMod') . ';}

.discussionListItem {
	' . XenForo_Template_Helper_Core::styleProperty('uix_discussionListItem') . '
}

	.discussionListItem:nth-child(even) {
		' . XenForo_Template_Helper_Core::styleProperty('uix_discussionListItemEven') . '
	}
	
	.discussionList .discussionListItem.sticky {
		' . XenForo_Template_Helper_Core::styleProperty('uix_stickyThreads') . '
	}
	
	.discussionList .discussionListItem.moderated {
		' . XenForo_Template_Helper_Core::styleProperty('uix_moderatedThreads') . '
	}
	
	.discussionList .discussionListItem.deleted {
		' . XenForo_Template_Helper_Core::styleProperty('uix_deletedThreads') . '
	}


.discussionListItem .title a {color: inherit;}

	.discussionListItems .unread.moderated .title a,
	.discussionListItems .unread.moderated  .lastPostInfo .username {
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_moderatedThreads.color') . ';
	}

	.discussionListItem.deleted .title {
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_deletedThreads.color') . ';
	}

.afterDiscussionListHandle {
	margin-top:' . (XenForo_Template_Helper_Core::styleProperty('discussionListOptionsHandle.height') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall')) . 'px;
}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_threadLastPostAvatar'))
{
$__compilerVar13 .= '
	.discussionListItem .lastPostInfo .avatar {
		' . XenForo_Template_Helper_Core::styleProperty('uix_threadLastPostAvatar_style') . '
	}
	.discussionListItem .lastPostInfo .avatar img {
		max-height: 100%;
		display: block;
		width: auto;
	}
	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
		.Responsive .discussionListItem .lastPostInfo .avatar {display: none;}
	}
';
}
$__compilerVar13 .= '

.discussionList .heading {
	position: relative;
}
.uix_stickyThreadWrapper .uix_collapseNodes {line-height: initial;}
.uix_stickyThreadWrapper .uix_collapseNodes .uix_icon {
	line-height: initial;
	vertical-align: middle;
	vertical-align: -webkit-baseline-middle;
}';
$__output .= $__compilerVar13;
unset($__compilerVar13);
$__output .= '


';
$__compilerVar14 = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_adStylerOn'))
{
$__compilerVar14 .= '
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
$__output .= $__compilerVar14;
unset($__compilerVar14);
$__output .= '



' . '





';
$__compilerVar15 = '';
$__compilerVar15 .= XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.sidebar .visitorPanel .secondaryContent'
)) . '

.sidebar .featuredNotice {
	box-shadow: none;
	border-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryMedium') . ';
	background: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLighter') . ';
	display: inline-block;
	color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryDark') . ';
}

.hasFlexbox .sidebar .visitorPanel .secondaryContent {
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	
	-ms-flex-wrap: wrap;
	-webkit-flex-wrap: wrap;
	flex-wrap: wrap;	
}

.sidebar .visitorPanel {
	overflow: visible;
}

.sidebar .visitorText {
	display: inline-block;
	vertical-align: top;
}

.hasFlexbox .sidebar .visitorText {
	-ms-flex: 1 1 0%;
	-webkit-flex: 1 1 0%;
	flex: 1 1 0%;
}

.sidebar .section .secondaryContent {
	' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder') . '
}
.sidebar .section:last-child 
{
	margin-bottom: 0;
}

.sidebar .tabs {
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex; 
	-ms-flex-wrap: wrap;
	-webkit-flex-wrap: wrap;
	flex-wrap: wrap;
}
.sidebar .tabs > li {
	-ms-flex: 1 0 auto;
	-webkit-flex: 1 0 auto;
	flex: 1 0 auto;
}
.sidebar .tabs > li a {
	display: block; 
	text-align: center;
}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation'))
{
$__compilerVar15 .= '
	.mainContainer
	{
		float: right;
		margin-left: -' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth')) . 'px;
		margin-right: 0;
	}
	.mainContent
	{
		margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth')) . 'px;
		margin-right: 0;
	}
	.sidebar
	{
		float: left;
	}
';
}
else
{
$__compilerVar15 .= '
	.mainContainer 
	{
		margin-right: -' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth')) . 'px;
	}
	.mainContent 
	{
		margin-right: ' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth')) . 'px;
	}
';
}
$__compilerVar15 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar'))
{
$__compilerVar15 .= '
	
	
	.uix_mainSidebar 
	{
		position: relative;
	}
	
	.uix_sidebar_collapse_phrase 
	{
		font-size: 12px;
	}
	.mainContainer 
	{
		position: relative;
	}
	.NoSidebar .uix_sidebar_collapse 
	{
		display: none;
	}
	
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation'))
{
$__compilerVar15 .= '
		.uix_sidebar_collapse.uix_sidebar_collapsed a .uix_icon:before 
		{
			content: "\\f03b";
		}
	';
}
else
{
$__compilerVar15 .= '
		.uix_sidebar_collapse.uix_sidebar_collapsed a .uix_icon:before 
		{
			content: "\\f03c";
		}
	';
}
$__compilerVar15 .= '
	
	.uix_sidebar_collapse.uix_sidebar_collapsed .uix_sidebar_collapse_phrase_close {
		display: none;
	}
	
	.uix_sidebar_collapse.uix_sidebar_collapsed .uix_sidebar_collapse_phrase_open {
		display: inline;
	}
	
	.uix_sidebar_collapse .uix_sidebar_collapse_phrase_close {
		display: inline;
	}
	
	.uix_sidebar_collapse .uix_sidebar_collapse_phrase_open {
		display: none;
	}
	
';
}
$__compilerVar15 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar_sticky'))
{
$__compilerVar15 .= '
	.uix_mainSidebar .inner_wrapper 
	{
		position: relative;
	}
	.uix_mainSidebar.sticky .inner_wrapper 
	{
		position:fixed;
		-webkit-backface-visibility: hidden;
	}
';
}
$__compilerVar15 .= ' 

';
if (XenForo_Template_Helper_Core::styleProperty('uix_sidebarIcons'))
{
$__compilerVar15 .= '
	
	.sidebar .section .primaryContent h3:before,
	.sidebar .section .secondaryContent h3:before,
	.profilePage .mast .section.infoBlock .secondaryContent h3:before {
		display: inline-block;
		
		font-family: \'FontAwesome\';
		font-style: normal;
	 	font-weight: normal;
	  	-webkit-font-smoothing: antialiased;
	  	-moz-osx-font-smoothing: grayscale;
		line-height: 1;
		
		' . XenForo_Template_Helper_Core::styleProperty('uix_sidebar_iconsStyle') . '
	}
	
	.sidebar .section.membersOnline h3:before,
	.sidebar .section.userList h3:before {content: "\\f0c0";}
	.sidebar .section.sharePage h3:before {content: "\\f14d";}
	.sidebar .section .statsList h3:before {content: \'\\f080\';}
	.sidebar .section.staffOnline h3:before {content: "\\f0b1";}
	.sidebar .section.profilePostList h3:before {content: "\\f007";}
	
	
	.sidebar .section.uix_loginForm h3:before {content: "\\f023";}
	
	
	.sidebar .section .secondaryContent.avatarHeap h3:before {content: "\\f0b1";}
	.sidebar .section .secondaryContent.findMember h3:before {content: "\\f002";}
	
	.section .discussionListFilters h3:before {content: none !important;}
';
}
$__compilerVar15 .= '

@media (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_sidebarMaxResponsiveWidth') + 1) . 'px) 
{
	.sidebar .section:first-child 
	{
		margin-top: 0;
	}
}

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_sidebarMaxResponsiveWidth') . ') 
{
	.uix_sidebar_collapse.toggleList_item:not(.uix_sidebar_collapsed) 
	{
		display: none;
	}

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation'))
{
$__compilerVar15 .= '
		.Responsive .mainContainer 
		{
			margin-left: 0;
		}
		.Responsive .mainContent 
		{
			margin-left: 0;
		}
	';
}
$__compilerVar15 .= '
}';
$__output .= $__compilerVar15;
unset($__compilerVar15);
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') > 0 || XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') > 0)
{
$__compilerVar16 = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') > 0 || XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') > 0)
{
$__compilerVar16 .= '

	.hasJs #userBar {
		display: none;
	}

	.off-canvas-wrapper {
		position: relative;
		overflow-x: hidden;
		overflow-y: auto;
		width: 100%;
		min-height: 100vh;
	}
	  
	.off-canvas-wrapper > .inner-wrapper {
		position: relative;
		min-height: 100vh;
		left: 0px;
	}
	    
	.off-canvas-wrapper .exit-off-canvas {
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		height: 100%;
		z-index: 1001;
		background: ' . XenForo_Template_Helper_Core::styleProperty('overlayMaskColor') . ';
		
		display: none;
		opacity: 0;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		
		-moz-transition: opacity .2s;
		-o-transition: opacity .2s;
		-webkit-transition: opacity .2s;
		transition: opacity .2s;
	}
	
	.left-off-canvas-content, .right-off-canvas-content {
		top: 0px;
		bottom: 0px;
		width: 250px;
		display: none;
		overflow-y: auto;
		position: absolute;
		z-index: 2;
		-webkit-backface-visibility: hidden;
		
		' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style') . '
	}
	
	.left-off-canvas-content {left: -' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ';}
	.right-off-canvas-content {right: -' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ';}
	
	
	.off-canvas-wrapper.move-right .exit-off-canvas,
	.off-canvas-wrapper.move-left .exit-off-canvas {
		opacity: ' . XenForo_Template_Helper_Core::styleProperty('overlayMaskOpacity') . ';
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	}
	
	.off-canvas-wrapper.move-right .exit-off-canvas:hover,
	.off-canvas-wrapper.move-right .exit-off-canvas:focus,
	.off-canvas-wrapper.move-left .exit-off-canvas:hover,
	.off-canvas-wrapper.move-left .exit-off-canvas:focus {
	    opacity: 0.3;
	    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
	}	
	
	.csstransforms .off-canvas-wrapper > .inner-wrapper,
	.csstransforms .left-off-canvas-content,
	.csstransforms .right-off-canvas-content {
		
		-moz-transition: -moz-transform .5s; /* Older Firefox */
		-o-transition: transform .5s; 
		-o-transition: -o-transform .5s;
		
		-webkit-transition: -webkit-transform .5s; /* Older Android Browser  */
		transition: -webkit-transform .5s; /* Safari, iOS Safari, Blackberry Browser */
		transition: transform .5s; /* Chrome, Android Chrome, Firefox  */
		
		display: block
	}
	
	.csstransforms .off-canvas-wrapper.move-left > .inner-wrapper,
	.csstransforms .off-canvas-wrapper.move-left .' . (($pageIsRtl) ? ('left') : ('right')) . '-off-canvas-content {
		transform: translate(-' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ', 0);
	}
	
	.csstransforms .off-canvas-wrapper.move-right > .inner-wrapper,
	.csstransforms .off-canvas-wrapper.move-right .' . (($pageIsRtl) ? ('right') : ('left')) . '-off-canvas-content {
	 	transform: translate(' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ', 0);
	}
	
	.no-csstransforms .off-canvas-wrapper > .inner-wrapper,
	.no-csstransforms .left-off-canvas-content,
	.no-csstransforms .right-off-canvas-content {
		display: block;
	}
	.no-csstransforms .off-canvas-wrapper.move-left > .inner-wrapper {left: -' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ';right:auto;}
	.no-csstransforms .off-canvas-wrapper.move-left .right-off-canvas-content {right:0;}
	.no-csstransforms .off-canvas-wrapper.move-right > .inner-wrapper {right: -' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ';left:auto;}
	.no-csstransforms .off-canvas-wrapper.move-right .left-off-canvas-content {left:0;}
	
	/* Styling for off canvas sidebar */
	
	
	.move-right .sticky_wrapper,
	.move-left .sticky_wrapper {position: static !important;}
	
	/* hide the trigger by default */
	.uix_offCanvas_trigger {
		display: none !important;	
	}
	
	.navLink.right-off-canvas-trigger .uix_icon.uix_icon-navTrigger {
		padding-left: 4px;
	}
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') != ('0'))
{
$__compilerVar16 .= '
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') && XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') != ('100%'))
{
$__compilerVar16 .= '
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') . ') {
		';
}
$__compilerVar16 .= '
			
	
			';
if ((XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1) || (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1))
{
$__compilerVar16 .= '
				
				
			
				.Responsive #navigation .publicTabs .navTab:not(.uix_offCanvas_trigger):not(.selected) { display: none !important; }
				
				
				.Responsive #navigation .publicTabs .selected .navLink,
				.Responsive #navigation .publicTabs .selected .SplitCtrl { display: none !important; }
				
			
			';
}
$__compilerVar16 .= '
		
			
			';
if ((XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2) || (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2))
{
$__compilerVar16 .= '
			
				
				
				.Responsive .visitorTabs .navTab.account:not(.uix_offCanvas_trigger),
				.Responsive .visitorTabs .navTab.inbox,
				.Responsive .visitorTabs .navTab.alerts { 
					display: none !important; 
				}
			';
}
$__compilerVar16 .= '
			
			.Responsive .uix_offCanvas_trigger {display: list-item !important;}
			
			.Responsive #userBar.uix_offCanvasVisitorTabs.uix_noUserBarContent { display: none; }
			
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') && XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') != ('100%'))
{
$__compilerVar16 .= '	
		}
		';
}
$__compilerVar16 .= '
	';
}
$__compilerVar16 .= '
	

	.uix_sidePane ul#uix_offCanvasVisitorMenu li,
	.uix_sidePane .navTab { position: relative; }
	

	.uix_sidePane ul#uix_offCanvasVisitorMenu li > a,
	.uix_sidePane .navLink {
		display: block;
		' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink') . '
	}
	
	.uix_sidePane .navTab:first-of-type .navLink {
		border-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-style') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-width') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-color') . ';
	}
	
	.uix_sidePane .navTab.active + .navTab .navLink {
		box-shadow: 0 -' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-width') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-color') . ';
	}
	

	.uix_sidePane ul#uix_offCanvasVisitorMenu li >a:hover,
	.uix_sidePane .navLink:hover {
		' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLinkHover') . '
	}
	
	.uix_sidePane .SplitCtrl {
		display: block;
		position: absolute;
		right: 0;
		top: 0;
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.height') . ';
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.height') . ';
		width: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.height') . ';
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.color') . ';
		
		
		background: rgba(0,0,0,.2);
		border-left: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-color') . ';
		
		
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		text-align: center;
	}
	
	.uix_sidePane .SplitCtrl:hover {
		text-decoration: none;
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.color') . ';
	}
	
	.uix_sidePane .SplitCtrl:before { content: "\\f0d7"; }

	.uix_sidePane .navTab.active .SplitCtrl:before { content: "\\f0d8"; }
	
	
	.uix_sidePane .navTab.selected .SplitCtrl { background: none; }
	

	.uix_sidePane ul li.selected > a,
	.uix_sidePane .navTab.selected .navLink {
		' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navTabSelected') . '
	}
		
	.uix_sidePane .subMenu {
		-moz-transition: opacity 300ms ease, max-height 300ms ease;
		-o-transition: opacity 300ms ease, max-height 300ms ease;
		-webkit-transition: opacity 300ms ease, max-height 300ms ease;
		transition: opacity 300ms ease, max-height 300ms ease;
		
		opacity: 0;
		max-height: 0;
		overflow: hidden;
	}

	
	
	.uix_sidePane ul .subMenu .blockLinksList {
		padding: 0;
	}
		
	.uix_sidePane ul .active .subMenu {
		opacity: 1;
		max-height: 600px;
		
		-moz-transition: opacity 300ms ease, max-height 300ms ease;
		-o-transition: opacity 300ms ease, max-height 300ms ease;
		-webkit-transition: opacity 300ms ease, max-height 300ms ease;
		transition: opacity 300ms ease, max-height 300ms ease;
	}
		
	
	
	.uix_sidePane .subMenu .secondaryContent {background: transparent;}
	
	.uix_sidePane .subMenu .blockLinksList a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navTabLink') . '
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
		word-wrap: normal;
	}
	
	.uix_sidePane .subMenu .blockLinksList a:hover {
		' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navTabLinkHover') . '
	}

	.uix_sidePane .subMenu .blockLinksList a:focus { color: inherit; background-color: inherit; }




	.csstransforms .off-canvas-wrapper.move-right > .inner-wrapper, .csstransforms .off-canvas-wrapper.move-right .left-off-canvas-content {
		overflow-x: hidden;
	}
	
	.uix_sidePane_content {
		height: 100%;
		overflow-x: hidden;
		overflow-y: auto;
	}
	
	.uix_sidePane_content .uix_offCanvasPanes > ul {
		height: 0;
		
		-moz-transition: -moz-transform 0.3s ease;
		-o-transition: transform 0.3s ease;
		-o-transition: -o-transform 0.3s ease;
		
		-webkit-transition: -webkit-transform 0.3s ease;
		
		transition: -webkit-transform 0.3s ease;
		transition: transform 0.3s ease;
		
		float: left;
		width: 100%;
	}
	
	.uix_sidePane_content .uix_offCanvasPanes > ul.leftTab {
		transform: translate3d(-' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ', 0, 0);
	}
	
	.uix_sidePane_content .uix_offCanvasPanes > ul.rightTab {
		transform: translate3d(' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ', 0, 0);
	}
	
	.uix_sidePane_content .uix_offCanvasPanes > ul.activeTab {
		transform: translate3d(0, 0, 0);
		display: block;
	}
	
	
	
	
	.uix_offcanvasTabs {
		background-color: rgba(0,0,0,.1);
		display: table;
		width: 100%;
	}
	
	.uix_offcanvasTabs .navTab {
		min-width: 20px;
		max-width: 100px;
		display: table-cell; 
	}

	.uix_offcanvasTabs .navLink {
		display: block;
	
		border-right: solid 1px ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-color') . ';
		padding: 0 10px;
		font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeFontSize') . ';
		font-weight: bold;
		
		cursor: pointer;
		text-align: center;
		
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.height') . ';
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.height') . ';
		
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	
		.uix_offcanvasTabs .navTab:last-child .navLink { border-right: none; }
	
	.uix_offcanvasTabs .navTab .Zero { display: none !important; }
	
	.uix_sidePane .itemCount {
		' . XenForo_Template_Helper_Core::styleProperty('alertBalloon') . '
		' . XenForo_Template_Helper_Core::styleProperty('uix_inlineAlertBalloon_style') . '
	}
	
	.uix_offCanvasVisitorTabs .primaryContent,
	.uix_offCanvasVisitorTabs .secondaryContent,
	.uix_offCanvasVisitorTabs .sectionFooter { 
		background-color: transparent; 
	}
	

	.uix_offCanvasVisitorTabs .primaryContent .avatar span { margin-left: auto; margin-right: auto; }
	.uix_offCanvasVisitorTabs .primaryContent h3 { 
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . '; 
		font-size: 20px; 
		font-weight: bold;
	}
	.uix_offCanvasVisitorTabs .statusEditorCounter { display: none; }
	.uix_offCanvasVisitorTabs .StatusEditor, .uix_offCanvasVisitorTabs .button { width: 100%; }
	.uix_offCanvasVisitorTabs .StatusEditor {
		background: rgba(0,0,0,.2);
		border: 1px solid rgba(255,255,255,.2);
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.color') . ';
	}
	
	.uix_offCanvasVisitorTabs .StatusEditor:focus {
		border-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . ';
		min-height: 46px;
	}
	
	.uix_offCanvasVisitorTabs .button {
		display: block;
		overflow: hidden;
		box-sizing: border-box;
	}
	
	
	
	
	
	#uix_offCanvasVisitorMenu .primaryContent h3 { display: none; }
	#uix_offCanvasVisitorMenu .primaryContent h3 + .muted {text-align: center;}
	
	#uix_offCanvasVisitorMenu .primaryContent .muted { font-size: 15px; margin-top: 6px;}
	
	#uix_offCanvasVisitorMenu .navTab .navLink,
	.uix_sidePane ul#uix_offCanvasVisitorMenu li > a {
		line-height: 20px;
		height: auto;
		padding: 10px;
		font-size: 11px;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	
	#uix_offCanvasVisitorMenu .navTab,
	#uix_offCanvasVisitorMenu li {
		position: relative;
		width: 50%;
		float: left;
		border-right: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-color') . ';
		box-sizing: border-box;
	}
	
	#uix_offCanvasVisitorMenu .navTab.full,
	#uix_offCanvasVisitorMenu li.full {
		width: 100%;
		border: none;
	}
	
	#uix_offCanvasVisitorMenu .navTab:nth-child(2n),
	#uix_offCanvasVisitorMenu li:nth-child(2n) {
		border-right: 0;
	}
	
	#uix_offCanvasVisitorMenu .navTab.active .navLink,
	#uix_offCanvasVisitorMenu li.active > a {
		border-bottom-width: 1px;
	}
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorMenu .sectionFooter { 
		clear: left; 
		border: none;
	}
	
	
	
	
	#uix_offCanvasVisitorConvo .listItem,
	#uix_offCanvasVisitorAlert .listItem { 
		padding: 8px; 
		border-top: solid 1px ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-color') . '; 
		overflow-x: hidden; 
	}
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo .avatar,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert .avatar { float: left; }
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo .avatar img,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert .avatar img { width: 32px; height: 32px; }
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo .listItemText,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert .listItemText { margin-left: 40px; font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalSmallFontSize') . '; }
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo .listItem .title a,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert .listItem .title a {
		text-overflow: ellipsis;
		display: block;
	}
	
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo .listItem.unread .title a,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert .listItem.unread .title a {
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . ';
	} 
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo h3.title a,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert h3 a { 
		color: #FFF; 
		text-overflow: ellipsis;
		overflow: hidden; 
	}
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo .listItemText a,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert .listItemText {
		color: ' . XenForo_Template_Helper_Core::styleProperty('faintTextColor') . ';
	}
	
	
';
}
$__output .= $__compilerVar16;
unset($__compilerVar16);
}
$__output .= '


#content.help_bb_codes .sectionMain .primaryContent,
#content.help_trophies .sectionMain .primaryContent {background-color: transparent;}

#loginBar {z-index: 9999;}
#loginBar #loginBarHandle {text-align: right;}
#loginBar #loginBarHandle a {display: block;}
#loginBar .pageWidth {position: relative;}
.navTabs .navTab.login {display: list-item !important;}

';
$__compilerVar17 = '';
$__compilerVar17 .= '#loginBar .xenForm {max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';}
#loginBar .pageContent {padding: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';}

.uix_loginForm .xenForm .ctrlUnit > dd {
	width: auto;
	padding: 0;
	float: none;
}
.uix_loginForm .xenForm .uix_loginOptions .ctrlUnit > dt {display: none;}

.uix_loginForm .rememberPassword {font-size: 11px;}
.Responsive .uix_loginForm .xenForm .ctrlUnit {padding: 0;}

.xenOverlay .xenForm#pageLogin {
	max-width: 400px;
	margin: 0 auto;
	padding: 40px;
}
.xenOverlay .xenForm#pageLogin h2.heading {display: none;}
.xenOverlay .xenForm#pageLogin h2.textHeading {
	font-size: 18px;
	padding: 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' 0;
}

.xenOverlay .xenForm#pageLogin .ctrlUnit > dt,
.xenOverlay .xenForm#pageLogin .ctrlUnit > dd {
	float: none;
	width: auto;
	text-align: left;
	padding: 0;
	margin: 0;
}
.xenOverlay .xenForm#pageLogin .ctrlUnit > dt label {
	margin-left: 0;
	font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeFontSize') . ';
	padding: 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ' 0;
	display: block;
}
.xenOverlay .xenForm#pageLogin .ctrlUnit > dd > input {margin-top: 0;}
.xenOverlay .xenForm#pageLogin .ctrlUnit.submitUnit dd label.rememberPassword {float: right; line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_formElementHeight') . ';}

.xenOverlay .xenForm#pageLogin .submitUnit dt {display: none;}
.xenOverlay .xenForm#pageLogin .uix_loginOptions {
	margin-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	border-top: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ';
	padding-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
}

.xenOverlay .xenForm#pageLogin .textCtrl.disabled {display: none;}

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
	.xenOverlay .xenForm#pageLogin .ctrlUnit.submitUnit dd label.rememberPassword {display: block; float: none;}
	.xenOverlay .xenForm#pageLogin {padding: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';}
}



#XenForo a.twitterLogin span,
#XenForo a.fbLogin span,
#XenForo .googleLogin span {
	background: none;
	margin: 0;
	padding: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	border: none;
	text-shadow: none;
	color: #FFF;
	width: auto;
	height: ' . XenForo_Template_Helper_Core::styleProperty('uix_formElementHeight') . ';
	line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_formElementHeight') . ';
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';
	text-overflow: ellipsis;
}

#XenForo a.twitterLogin span:before,
#XenForo a.fbLogin span:before,
#XenForo .googleLogin span:before {
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	margin-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
}

#XenForo a.twitterLogin span:before {content: "\\f099";}
#XenForo a.fbLogin span:before {content: "\\f09a";}
#XenForo .googleLogin span:before {content: "\\f0d5";}

#XenForo a.twitterLogin span:hover,
#XenForo a.fbLogin span:hover,
#XenForo .googleLogin span:hover {background: rgba(0,0,0,.1);}

#XenForo a.twitterLogin,
#XenForo a.fbLogin,
#XenForo .googleLogin
{
	display: block;
	background: none;
	margin: 0;
	padding: 0;
	border: none;
	text-shadow: none;
	color: #FFF;
	width: 100%;
	height: auto;
	font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeFontSize') . ';
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';
}

#XenForo a.twitterLogin, #loginBar a.twitterLogin {background: #77CDF0;}
#XenForo a.fbLogin, #loginBar a.fbLogin {background: #537CBE;}
#XenForo .googleLogin, #loginBar .googleLogin {background: #E9654C;}';
$__output .= $__compilerVar17;
unset($__compilerVar17);
$__output .= '





';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 0 && (XenForo_Template_Helper_Core::styleProperty('uix_headerWhiteSpace') > 0))
{
$__output .= '
	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') and (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') + 1) . 'px)
	{	
		#header > div:first-child
		{
			margin-top: ' . XenForo_Template_Helper_Core::styleProperty('pageWidthResponsiveWide.margin-left') . ';
		}
	}
';
}
$__output .= '





';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__output .= '

	' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '#navigation.withSearch .navTabs .pageWidth'
)) . '
	
	#logoBlock .funbox {
		margin-top: 0;
	}
	
	#uix_footer_columns {
		margin-bottom: 0;
	}

	#navigation .navTabs,
	#userBar .navTabs,
	.navTabs .navTab.selected .tabLinks,
	.footer .pageContent,
	#uix_footer_columns {
		border-left: none;
		border-right: none;
	}
	
';
}
$__output .= ' 

	';
if ((XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_forceCovered') && XenForo_Template_Helper_Core::styleProperty('uix_footer_forceCovered')) || XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__output .= '
		.footer .pageContent { margin-bottom: 0; }
	';
}
$__output .= '
	
	';
if ((XenForo_Template_Helper_Core::styleProperty('uix_copyright_forceCovered') && XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_forceCovered')) || XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__output .= '
	#uix_footer_columns .pageContent 
	{
		margin-bottom: 0;
		margin-top: 0;
	}
	';
}
$__output .= '




';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 2)
{
$__output .= '

	#uix_wrapper {
		margin:' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') * 2) . 'px auto;
		
		' . XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style') . '
		
		max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
		box-sizing: border-box;		
	}

	#uix_wrapper .pageWidth
	{
		max-width: none;
		margin-left: auto;
		margin-right: auto;
		padding-left: 0;
		padding-right: 0;
	}
	#uix_wrapper .activeSticky .pageWidth 
	{
		max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
		margin: 0 auto;
	}
	
	.Menu.uix_megaMenu
	{
		max-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') - (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.padding-left') + XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.padding-right')) - (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.border-left-width') + XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.border-right-width'))) . 'px;
	}

	#header > div:first-child
	{
		margin-top: 0;
	}
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && !XenForo_Template_Helper_Core::styleProperty('uix_userBarLocation') == 0)
{
$__output .= '
	
		#header > div#navigation
		{
			margin-top: 0;
		}
	';
}
$__output .= '
	
	footer .footerLegal:last-of-type .pageContent
	{
		margin-bottom: 0;
	}	
	
';
}
$__output .= '





';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__output .= '

	@media (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') + 1) . 'px) {
	
		.uix_slogan 
		{
			display: none !important;
		}
		#content
		{
			clear: left;
		}
		#userBar
		{
			margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
		}
		
		#navigation.activeSticky .pageContent 
		{
			margin-left: 0;
		}
			
	} 
	
';
}
$__output .= '



';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination'))
{
$__output .= '

	.navTab.audentio_postPagination { position: relative; z-index: 50; }

	.audentio_postPagination a { color: inherit;}
	
	.audentio_postPagination .navLink:hover a, .audentio_postPagination a:hover { color: ' . XenForo_Template_Helper_Core::styleProperty('uix_navLinkHover.color') . '; text-decoration: inherit; }
	
	.audentio_postPagination .progress-container {
		width: 100%;
		height: 2px;
		margin-top: -8px;
		border-radius: 2px;
		overflow: hidden;
		background: rgba(0, 0, 0, 0.3);
		border: ' . XenForo_Template_Helper_Core::styleProperty('uix_postPaginationBar.border-color') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_postPaginationBar.border-style') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_postPaginationBar.border-width') . ';
	}
	
	.audentio_postPagination .PopupControl.PopupOpen,
	.audentio_postPagination .PopupControl:hover {background: none;}
	
	.audentio_postPagination .progress-bar {
		height: 2px;
		
		-moz-transition: width 0.3s ease;
		-o-transition: width 0.3s ease;
		-webkit-transition: width 0.3s ease;
		transition: width 0.3s ease;
		
		background-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_postPaginationBar.background-color') . ';
	}
	
	
	.audentio_postPagination .uix_paginationMenu {
		display: inline-block;
	}
	
	#navigation .audentio_postPagination .uix_paginationMenu {
		height: ' . XenForo_Template_Helper_Core::styleProperty('headerTabHeight') . ';
	}
	
	#navigation.activeSticky .audentio_postPagination .uix_paginationMenu {
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedNavigationHeight') . ';
	}
	
	#userBar .audentio_postPagination .uix_paginationMenu {
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBarHeight') . ';
	}
	
	#userBar.activeSticky .audentio_postPagination .uix_paginationMenu {
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_fixedUserBarHeight') . ';
	}
	
	
	#audentio_postPaginationDropdown {
		border-top-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ';
		border-top-width: 1px;
		
	}
	
	
	#audentio_postPaginationInput {
		margin: auto;
		height: 28px;
		font-size: 16px;
		text-align: center;
		width: 100%;
		max-width: 180px;
		padding-left: 0;
		padding-right: 0;
	}
	
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_widthToggle') && XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') > 100)
{
$__output .= '
	
	@media (max-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') + (2 * XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth'))) . 'px) {
		.Responsive .pageWidth {
			max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
		}
		
		.Responsive .chooser_widthToggle {
			display: none !important;
		}
	}

';
}
$__output .= '


';
$__compilerVar18 = '';
$__compilerVar18 .= '.nodeList .categoryForumNodeInfo,
.nodeList .forumNodeInfo, 
.nodeList .pageNodeInfo, 
.nodeList .linkNodeInfo {
	' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style') . '
	
	' . ((XenForo_Template_Helper_Core::styleProperty('uix_nodeTableStyle')) ? ('border-radius: 0;') : ('')) . '
}



.node .nodeIcon.hasGlyph {
	text-align: center;
	background-color: transparent;
	background: none;
	' . XenForo_Template_Helper_Core::styleProperty('uix_nodeIcons_style') . '
}
	
.node .unread .nodeIcon.hasGlyph {
	' . XenForo_Template_Helper_Core::styleProperty('uix_nodeIcons_new') . '
}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeIcons_categoryStrip'))
{
$__compilerVar18 .= '
	.nodeList .categoryStrip .nodeTitle .categoryStripIcon.hasGlyph {
		display: inline-block;
		color: ' . XenForo_Template_Helper_Core::styleProperty('categoryStrip.color') . ';
	}
';
}
$__compilerVar18 .= '





';
if (XenForo_Template_Helper_Core::styleProperty('uix_inlineCategoryDesc'))
{
$__compilerVar18 .= '
	.nodeList .categoryStrip .nodeDescription { display: inline; }
	
	.nodeList .categoryStrip .categoryText {	
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
	}
	
	.nodeList .categoryStrip .nodeTitle {
		float: left;
		margin-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';	
	}
	
	.nodeList .categoryStrip .categoryText { line-height: ' . XenForo_Template_Helper_Core::styleProperty('categoryStrip.height') . '; }
	
	.nodeList .categoryStrip {
		padding-top: 0;
		padding-bottom: 0;
	}
';
}
else
{
$__compilerVar18 .= '
	.nodeList .categoryStrip { height: auto; }
';
}
$__compilerVar18 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNodeStatsOnHover'))
{
$__compilerVar18 .= '
	.node.level_2 .nodeStats { opacity: 0; }
	
	.node.level_2:hover .nodeStats { opacity: 1; }
';
}
$__compilerVar18 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_inlineCategoryDesc') && XenForo_Template_Helper_Core::styleProperty('uix_showCategoryDescOnHover'))
{
$__compilerVar18 .= '
	.nodeList .categoryStrip .nodeDescription {
		opacity: 0;
		
		-moz-transition: linear .2s;
		-o-transition: linear .2s;
		-webkit-transition: linear .2s;
		transition: linear .2s;
		
		overflow: visible;
		white-space: normal;
	}
	
	.nodeList .node.level_1:hover .categoryStrip .nodeDescription {
		opacity: 1; 
		overflow: hidden; 
		white-space: nowrap;
	}
';
}
$__compilerVar18 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_newNodeMarker'))
{
$__compilerVar18 .= '
.uix_nodeTitle_status {
	' . XenForo_Template_Helper_Core::styleProperty('uix_newNodeMarker_style') . '
}
';
}
$__compilerVar18 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapseNodes') || XenForo_Template_Helper_Core::styleProperty('uix_collapseSticky'))
{
$__compilerVar18 .= '
	.nodeList .categoryStrip .categoryText {
		margin-right: ' . (XenForo_Template_Helper_Core::styleProperty('uix_collapseNodesIcons.font-size') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall')) . 'px;
	}
	
	.uix_collapseNodes {
		position: absolute;
		height: 100%;
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('categoryStrip.height') . ';
		right: ' . XenForo_Template_Helper_Core::styleProperty('subHeading.padding-right') . ';;
		right: ' . XenForo_Template_Helper_Core::styleProperty('categoryStrip.padding-right') . ';
		top: 0;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	
	.uix_collapseNodes .uix_icon {
		display: inline-block;
		' . XenForo_Template_Helper_Core::styleProperty('uix_collapseNodesIcons') . '
	}
	
	.node.collapsed .uix_collapseNodes .uix_icon:before { content: "\\f067"; }
	
';
}
$__compilerVar18 .= '





';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStatsIcons'))
{
$__compilerVar18 .= '
	.nodeStats dt,
	.nodeStats .dt { color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightish') . '; }
';
}
$__compilerVar18 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_hideNodeStats'))
{
$__compilerVar18 .= '
	.node .nodeStats { display: none; }
';
}
$__compilerVar18 .= '





.node .subForumList li { margin-left: 0; }

.nodeList .node.level_1 { margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . '; }

.nodeList .node.groupNoChildren + .node.groupNoChildren { margin-top: 0; }

.nodeList .node.groupNoChildren { margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . '; }

.node.groupNoChildren .categoryStrip { display: none; }


' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.nodeList'
)) . '




';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') != 3 && XenForo_Template_Helper_Core::styleProperty('uix_nodeTableStyle'))
{
$__compilerVar18 .= '
	
	.forum_view .nodeList,
	.category_view .nodeList,
	.watch_forums .nodeList {
		' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border') . '
		border-top: 0;
	}
	
	.forum_list .nodeList .nodeList,
	.forum_view .nodeList,
	.category_view .nodeList,
	.watch_forums .nodeList {
		background: ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.background-color') . ';
		margin-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
		border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-color') . ';
		border-top: 0;
		border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-radius') . ';
	}
	
	.node.level_2 .nodeInfo { border-top: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-color') . '; }
	
	.node.level_2:first-child .nodeInfo { border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-radius') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-radius') . ' 0 0; }
	
	.node.level_2:last-child .nodeInfo { border-radius: 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-radius') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-radius') . '; }
	
	.node.level_2:only-of-type .nodeInfo { border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-radius') . ' !important; }

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 1)
{
$__compilerVar18 .= '
	
		
	
		.node.level_2:nth-child(odd) .nodeInfo { border-right: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-color') . '; }
		
		.node.level_2:nth-child(even) .nodeInfo { box-shadow: -1px 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-color') . '; }
		
		.node.level_2:first-child .nodeInfo { border-top-right-radius: 0; }
		
		.node.level_2:last-child:nth-child(even) .nodeInfo { border-bottom-left-radius: 0; }
		
		.node.level_2:nth-child(2):nth-child(even) .nodeInfo { border-top-right-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-radius') . '; }
		
		.node.level_2:nth-last-child(2):nth-child(odd) .nodeInfo { border-bottom-left-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-radius') . '; }
		
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_halfWidthLastNode'))
{
$__compilerVar18 .= '
			.node.level_2:only-of-type .nodeInfo { border-right: 0; }
		';
}
else
{
$__compilerVar18 .= '
			.node.level_2:last-child:nth-child(odd) .nodeInfo { border-right: 0; }
		';
}
$__compilerVar18 .= '
		
		.node.level_2:last-child:nth-child(even) .nodeInfo { border-right: 0; }
		
	';
}
$__compilerVar18 .= '
	
	
';
}
$__compilerVar18 .= '


.node .tinyIcon { text-indent: -9999px; }

.node .tinyIcon:before {
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
		
	width: ' . XenForo_Template_Helper_Core::styleProperty('nodeTinyIcon.width') . ';
	content: "\\f09e";
	
	text-indent: 0;
	float: left;
}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_hideNodeControls'))
{
$__compilerVar18 .= '
	.node .nodeControls { display: none; }
';
}
$__compilerVar18 .= '

.node .nodeLastPost .noMessages {
	display: block;
	text-align: center;
}

.node .nodeControls {
	right: ' . (XenForo_Template_Helper_Core::styleProperty('nodeLastPost.width') + XenForo_Template_Helper_Core::styleProperty('nodeLastPost.margin-right') + XenForo_Template_Helper_Core::styleProperty('nodeLastPost.margin-left')) . 'px;
}
.node .nodeLastPost .lastThreadTitle { height: ' . (XenForo_Template_Helper_Core::styleProperty('uix_globalFontSize') + 3) . 'px; }

';
if (XenForo_Template_Helper_Core::styleProperty('uix_hideLastPost'))
{
$__compilerVar18 .= '
	.node .nodeText { margin-right: 10px; }
	
	.node .nodeLastPost { display: none; }
	
	.node .nodeControls { right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ' !important; }
';
}
$__compilerVar18 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeLastPostAvatar'))
{
$__compilerVar18 .= '
	.node .nodeLastPost .avatar {
		' . XenForo_Template_Helper_Core::styleProperty('uix_nodeLastPostAvatar_style') . '
	}
	
	.node .nodeLastPost .avatar img {
		max-height: 100%;
		display: block;
		width: auto;
	}
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') != 3)
{
$__compilerVar18 .= '
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
			.Responsive .node .nodeLastPost .avatar {display: none;}
		}
	';
}
$__compilerVar18 .= '
';
}
$__compilerVar18 .= '

.node .nodeText .nodeTitle a,
.subForumList .nodeTitle a { color: inherit; }

.node .nodeText,
.node .subForumList { margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('nodeIcon.width') + XenForo_Template_Helper_Core::styleProperty('nodeIcon.margin-left') + XenForo_Template_Helper_Core::styleProperty('nodeIcon.margin-right')) . 'px; }

';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') != 3)
{
$__compilerVar18 .= '
@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
	.Responsive .node .nodeLastPost { margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('nodeIcon.width') + XenForo_Template_Helper_Core::styleProperty('nodeIcon.margin-left') + XenForo_Template_Helper_Core::styleProperty('nodeIcon.margin-right')) . 'px; }
}
';
}
$__compilerVar18 .= '




';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 2)
{
$__compilerVar18 .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 1)
{
$__compilerVar18 .= '
		';
$nodeStyleLevel = '';
$nodeStyleLevel .= 'level_2';
$__compilerVar18 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 2)
{
$__compilerVar18 .= '
		';
$nodeStyleLevel = '';
$nodeStyleLevel .= 'level_1';
$__compilerVar18 .= '
	';
}
$__compilerVar18 .= '

	@media (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') + 1) . 'px) {
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_halfWidthLastNode'))
{
$__compilerVar18 .= '
			';
$filter = '';
$filter .= ':nth-last-child(n + 2)';
$__compilerVar18 .= '
		';
}
$__compilerVar18 .= '
		
		.node.' . htmlspecialchars($nodeStyleLevel, ENT_QUOTES, 'UTF-8') . ':nth-child(odd) { clear:left; }
	
		.node.' . htmlspecialchars($nodeStyleLevel, ENT_QUOTES, 'UTF-8') . htmlspecialchars($filter, ENT_QUOTES, 'UTF-8') . ',
		.node.' . htmlspecialchars($nodeStyleLevel, ENT_QUOTES, 'UTF-8') . ':nth-child(even) {
			width: 50%;
			float: left;
		}
		
		.node.' . htmlspecialchars($nodeStyleLevel, ENT_QUOTES, 'UTF-8') . htmlspecialchars($filter, ENT_QUOTES, 'UTF-8') . ' .nodeLastPost,
		.node.' . htmlspecialchars($nodeStyleLevel, ENT_QUOTES, 'UTF-8') . ':nth-child(even) .nodeLastPost {
			position: static;
			width: auto;
		}
		
		.node.' . htmlspecialchars($nodeStyleLevel, ENT_QUOTES, 'UTF-8') . htmlspecialchars($filter, ENT_QUOTES, 'UTF-8') . ' .nodeControls,
		.node.' . htmlspecialchars($nodeStyleLevel, ENT_QUOTES, 'UTF-8') . ':nth-child(even) .nodeControls { 
			right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
			top: 0; 
			margin-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
		}
		
		.node.' . htmlspecialchars($nodeStyleLevel, ENT_QUOTES, 'UTF-8') . htmlspecialchars($filter, ENT_QUOTES, 'UTF-8') . ' .nodeText,
		.node.' . htmlspecialchars($nodeStyleLevel, ENT_QUOTES, 'UTF-8') . ':nth-child(even) .nodeText { margin-right: 32px; }

		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 2)
{
$__compilerVar18 .= '
			.node.level_1 { box-sizing: border-box; }
			
			.node.level_1:nth-child(odd) { padding-right: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') / 2) . 'px; }
			
			.node.level_1:nth-child(even) { padding-left: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') / 2) . 'px; }
			
			';
if (!XenForo_Template_Helper_Core::styleProperty('uix_halfWidthLastNode'))
{
$__compilerVar18 .= '
			.node.level_1:last-child:nth-child(odd) {
				padding-left: 0; 
				padding-right: 0;
			}
			';
}
$__compilerVar18 .= '
		';
}
$__compilerVar18 .= '
		
		
	}
';
}
$__output .= $__compilerVar18;
unset($__compilerVar18);
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 3)
{
$__output .= '
	';
$__compilerVar19 = '';
$__compilerVar19 .= '.hasJs #forums,
.hasJs .category_view .nodeList,
.hasJs .watch_forums .nodeList { visibility: hidden; }

.node.level_1.audentio_grid {
	width: 100%;
}

.nodeList .node {
	box-sizing: border-box;
	clear: none;
}

.nodeList .node.audentio_grid { float: left; }

.nodeList .node.audentio_grid_left { clear: left; }

.nodeList .categoryForumNodeInfo, 
.nodeList .forumNodeInfo, 
.nodeList .pageNodeInfo, 
.nodeList .linkNodeInfo { 
	' . XenForo_Template_Helper_Core::styleProperty('uix_nodeGrid_nodeStyle') . '
}

.node.level_2 { width: 100%; }

.node.level_2 .nodeInfo { 
	width: 100%;
	box-sizing: border-box;
}

.node.audentio_grid .subForumList,
.node.audentio_grid .subForumsPopup { display: block; }


.node.audentio_grid_lg .nodeLastPost {
	position: static;
	width: auto;
	height: auto;
	padding: 0;
	margin: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
}

.node.audentio_grid_lg .nodeControls { right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . '; }

.node.audentio_grid_lg .nodeText { margin-right: 32px; }

.node.audentio_grid_lg .nodeControls {
	top: 0; 
	margin-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
}

.node.audentio_grid_md .nodeLastPost .avatar { display: none; }



.node.audentio_grid.audentio_grid_sm .subForumList { display: none; }

.node.audentio_grid.audentio_grid_xs .subForumsPopup { display: none; }





.forum_list #forums {
	margin-left: -' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	margin-right: -' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
}

#forums .node.level_1 {
	padding-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	padding-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
}





.forum_list .nodeList .nodeList,
.category_view .nodeList,
.forum_view .nodeList,
.watch_forums .nodeList {         
        margin-left: -' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;
        margin-right: -' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;
}

.forum_list .nodeList .nodeList { margin-top: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px; }

.node.level_2 {
        box-sizing: border-box;
        padding: 0 ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;
        margin: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px 0; 
}





.hasFlexbox .node.level_2 {
        display: -ms-flexbox;
        display: -webkit-flex; 
        display: flex;
}

.hasFlexbox .forum_view .nodeList,
.hasFlexbox .watch_forums .nodeList,
.hasFlexbox .category_view .nodeList,
.hasFlexbox .forum_list .nodeList .nodeList {
        display: -ms-flexbox;
        display: -webkit-flex; 
        display: flex;
        
	-webkit-flex-wrap: wrap;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
}


.hasFlexbox .node.level_2 .nodeInfo {
	-ms-flex: 0 1 auto;
	-webkit-flex: 0 1 auto;
	flex: 0 1 auto;
}

';
$__output .= $__compilerVar19;
unset($__compilerVar19);
$__output .= '
';
}
$__output .= '

';
$__compilerVar20 = '';
$__compilerVar20 .= '


' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.message .privateControls'
)) . '
' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.message .publicControls'
)) . '

.message .messageInfo {
	margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('messageUserInfo.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') + 10) . 'px;
	' . ((XenForo_Template_Helper_Core::styleProperty('messageInfo.margin-left')) ? ('margin-left: ' . XenForo_Template_Helper_Core::styleProperty('messageInfo.margin-left') . ';') : ('')) . '
}

#QuickReply {
	margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('messageUserInfo.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') + 10) . 'px;
}

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
	#QuickReply .submitUnit {
		display: flex;
		margin: 5px -5px 0;
		flex-wrap: wrap;
	}
	#QuickReply .submitUnit > *,
	#QuickReply .insertQuotes {
	    margin: 5px !important;
	    flex: 1 0 150px;
	}
	
	#QuickReply #ctrl_uploader {width: 100%;}
	#QuickReply #AttachmentUploader {position: relative;}
	#QuickReply .swfupload {top: 0 !important;}
	
	#QuickReply .submitUnit .button.primary {
		order: -1;
	}
}

.messageUserBlock div.uix_avatarHolderInner {
	position: relative;
	text-align: center;
	margin: 0 auto;
}

.message.placeholder .messageContent { min-height: 0; }


		

	.hasFlexbox .messageList .uix_message {
		display: -ms-flexbox; /* 2012 syntax for IE10 */
	        display: -webkit-flex;
	        display: flex;
	        
	        ';
if (XenForo_Template_Helper_Core::styleProperty('uix_stretchPostbit'))
{
$__compilerVar20 .= '
	        
	        -ms-flex-align: stretch; /* 2012 syntax for IE10 */
		-webkit-align-items: stretch;
		align-items: stretch;
		
		';
}
else
{
$__compilerVar20 .= '
		
		-ms-flex-align: start; /* 2012 syntax for IE10 */
		-webkit-align-items: flex-start;
		align-items: flex-start;
		
		';
}
$__compilerVar20 .= '
	}
	
	.hasFlexbox .messageList .placeholder .placeholderContent {
		display: -ms-flexbox; /* 2012 syntax for IE10 */
	        display: -webkit-flex;
	        display: flex;
	}
	
	.hasFlexbox .messageList .placeholder a.avatar {
		-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
		-webkit-flex: 0 0 auto;
		flex: 0 0 auto;	
	}
	
	.hasFlexbox .message .messageUserInfo {
		-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
		-webkit-flex: 0 0 auto;
		flex: 0 0 auto;
	}
	
	.hasFlexbox .message .messageInfo {
		display: -ms-flexbox; /* 2012 syntax for IE10 */
	        display: -webkit-flex;
	        display: flex;
	        -ms-flex-direction: column; /* 2012 syntax for IE10 */
	        -webkit-flex-direction: column;
	        flex-direction: column;
		
		-ms-flex: 1 1 100%; /* 2012 syntax for IE10 */
		-webkit-flex: 1 1 100%;
		flex: 1 1 100%;
		
		overflow: hidden; /* wrap images - FF */
		
		margin-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
	}
	
	.hasFlexbox .message .messageContent {
		-ms-flex: 1 1 auto; /* 2012 syntax for IE10 */
		-webkit-flex: 1 1 auto;
		flex: 1 1 auto;
	}


	
	.message .messageDetails {
		' . XenForo_Template_Helper_Core::styleProperty('uix_messageDetails_style') . '
	}
	
	.message .messageDetails:after {
		content: \'.\';
		display: block;
		height: 0;
		clear: right;
		visibility: hidden;
	}

	.message .editDate {
		font-size: inherit;
		text-align: inherit;
		margin-top: 0;
	}
	.message .messageDetails .item {
		white-space: nowrap;
		display: inline-block;
		margin-left: 5px;
	}
	.message .messageDetails .postNumber {
		' . XenForo_Template_Helper_Core::styleProperty('uix_postNumber_style') . '
	}

.attachedFiles .attachmentList,
.messageList .newMessagesNotice {
	background-image: none;
}

.userBanner {
	background-image: none; 
	padding-top: 4px; 
	padding-bottom: 4px;
	box-shadow: none;
}

.messageUserBlock .userBanner {
	margin-top: 5px;
}



	
	@media (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint') + 1) . 'px) {
	
		.messageUserBlock div.uix_avatarHolderInner
		{
			position: relative;
		
			margin: 0 auto;
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_postbit_avatarSize') == ('l'))
{
$__compilerVar20 .= '
				max-width: ' . XenForo_Template_Helper_Core::styleProperty('messageUserInfo.width') . ';
			';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_postbit_avatarSize') == ('s'))
{
$__compilerVar20 .= '
				max-width: 48px;
			';
}
else
{
$__compilerVar20 .= '
				max-width: 96px;
			';
}
$__compilerVar20 .= '	
		}
		.messageUserBlock div.avatarHolder .avatar img 
		{
			max-width: 100%;
			width: auto;
			height: auto;
		}
	}

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_postbit_avatarSize') == ('l'))
{
$__compilerVar20 .= '
	
	.messageUserBlock div.avatarHolder .avatar img {
		border-radius: ' . XenForo_Template_Helper_Core::styleProperty('avatar.border-radius') . ';
	}
	
		';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar20 .= '
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint') . ') {
			.Responsive .messageUserBlock div.avatarHolder .avatar {
				height: 48px;
				width: 48px;
				line-height: 48px;
			}
			
			.Responsive .messageUserBlock div.avatarHolder .avatar img {
				max-height: 48px;
				max-width: 48px;
				height: auto;
				width: auto;
				vertical-align: middle;
			}
		}
		';
}
$__compilerVar20 .= '
	
	';
}
$__compilerVar20 .= '
	
	


	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_plainMessageControls'))
{
$__compilerVar20 .= '
	.message .publicControls .MultiQuoteControl.active {
		background-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_tertiaryColor') . ';
		color: #FFF;
		border-color: transparent;
	}
	';
}
$__compilerVar20 .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_messageControlIcons'))
{
$__compilerVar20 .= '
	
	.messageMeta .control:before,
	.messageMeta .uix_icon {
		display: inline-block;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		
		margin-right: 5px;
	}
	
	.messageMeta .control.reply:before {
		content: "\\f112";
	}
	
	.messageMeta .control.edit:before {
		content: "\\f040";
	}
	
	.messageMeta .control.delete:before {
		content: "\\f014";
	}
	
	.messageMeta .control.deleteSpam:before {
		content: "\\f05e";
	}
	
	.messageMeta .control.ip:before {
		content: "\\f124";
	}
	
	.messageMeta .control.like:before {
		content: "\\f164";
	}
	
	.messageMeta .control.unlike:before {
		content: "\\f165";
	}
	
	.messageMeta .control.MultiQuoteControl:before {
		content: "\\f10d";
	}
	
	.messageMeta .control.history:before {
		content: "\\f1da";
	}
	
	.messageMeta .control.warn:before {
		content: "\\f071";
	}
	
	.messageMeta .control.report:before {
		content: "\\f06a";
	}
	
	.messageMeta .control.postComment:before {
		content: "\\f075";
	}
	
	.messageMeta .uix_postbit_privateControlsMenu .uix_icon:before {
		content: "\\f0ad";
	}
		
	';
}
$__compilerVar20 .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_plainMessageControls'))
{
$__compilerVar20 .= '
	
	.message .messageMeta .control,
	.message .messageMeta .uix_postbit_privateControlsMenu {
		background: none !important;
		border: none !important;
		box-shadow: none !important;	
	}
	
	';
}
$__compilerVar20 .= '
	


	';
if (XenForo_Template_Helper_Core::styleProperty('uix_postbit_privateControlsMenu') != 0)
{
$__compilerVar20 .= '

	.message .messageMeta .uix_postbit_privateControlsMenu {
		' . XenForo_Template_Helper_Core::styleProperty('messageMetaControl') . '
	}
	
	.message .messageMeta .uix_postbit_privateControlsMenu a {
		color: inherit;
		display: block;
	}
	
	.message .messageMeta .uix_postbit_privateControlsMenu:hover {
		' . XenForo_Template_Helper_Core::styleProperty('popupControlClosedHover') . '	
	}
	
	.message .messageMeta .uix_postbit_privateControlsMenu.PopupOpen {
		' . XenForo_Template_Helper_Core::styleProperty('popupControl') . '
	}
	
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_plainMessageControls'))
{
$__compilerVar20 .= '
		
		.message .messageMeta .uix_postbit_privateControlsMenu.PopupOpen {color: inherit !important;}
		
		';
}
$__compilerVar20 .= '
	
	';
}
$__compilerVar20 .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_postbit_privateControlsMenu') != ('100%'))
{
$__compilerVar20 .= '

	.Responsive .message .messageMeta .uix_postbit_privateControlsMenu
	{
		display: none;
	}
	
	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_postbit_privateControlsMenu') . ')
	{
		.Responsive .thread_view .message .privateControls
		{
			display: none;	
		}
		

		.Responsive .message.deleted .messageMeta {clear: both; line-height: 30px; float: left;}
		.Responsive .message.deleted .privateControls {display: block;}
		.Responsive .message.deleted .privateControls .item.InlineModCheck {float: none; display: inline-block;}
		
		.Responsive .message .messageMeta .uix_postbit_privateControlsMenu
		{
			display: inline-block;
		}	
	}

	';
}
$__compilerVar20 .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_centerPostbitLinks'))
{
$__compilerVar20 .= '
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_centerPostbitLinks') == ('100%'))
{
$__compilerVar20 .= '
	
		.message .privateControls, .message .publicControls {float: none; text-align: center;}
	
	';
}
else
{
$__compilerVar20 .= '
	
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_centerPostbitLinks') . ') {
			.message .privateControls, .message .publicControls {float: none; text-align: center;}
		}
		
	';
}
$__compilerVar20 .= '
	';
}
$__compilerVar20 .= '




	';
if (XenForo_Template_Helper_Core::styleProperty('uix_messageOnlineMarker_circle'))
{
$__compilerVar20 .= '
	
	.messageUserBlock div.avatarHolder .onlineMarker {
		' . XenForo_Template_Helper_Core::styleProperty('uix_messageOnlineMarker_circle_style') . '
	}
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_messageOnlineMarker_circlePulse'))
{
$__compilerVar20 .= '
		
		.messageUserBlock div.avatarHolder .onlineMarker {
			z-index: 10;
			
			-moz-transition: ease-out 0.1s;
			-o-transition: ease-out 0.1s;
			-webkit-transition: ease-out 0.1s;
			transition: ease-out 0.1s;
		}
		
		.messageUserBlock div.avatarHolder .onlineMarker_pulse {
			border: 10px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_messageOnlineMarker_circle_style.background-color') . ';
			background: transparent;
			-webkit-border-radius: 40px;
			-moz-border-radius: 40px;
			border-radius: 40px;
			height: 40px;
			width: 40px;
			-webkit-animation: pulse 3s ease-out infinite;
			-moz-animation: pulse 3s ease-out infinite;
			animation: pulse 3s ease-out infinite;
			position: absolute;
			top: -25px;
			left: -25px;
			z-index: 1;
			opacity: 0;
		}
		
		@-moz-keyframes pulse {
			0% {
			-moz-transform: scale(0);
			opacity: 0.0;
			}
			25% {
			-moz-transform: scale(0);
			opacity: 0.1;
			}
			50% {
			-moz-transform: scale(0.1);
			opacity: 0.3;
			}
			75% {
			-moz-transform: scale(0.5);
			opacity: 0.5;
			}
			100% {
			-moz-transform: scale(1);
			opacity: 0.0;
			}
		}
		
		@-webkit-keyframes "pulse" {
			0% {
			-webkit-transform: scale(0);
			opacity: 0.0;
			}
			25% {
			-webkit-transform: scale(0);
			opacity: 0.1;
			}
			50% {
			-webkit-transform: scale(0.1);
			opacity: 0.3;
			}
			75% {
			-webkit-transform: scale(0.5);
			opacity: 0.5;
			}
			100% {
			-webkit-transform: scale(1);
			opacity: 0.0;
			}
		}
		
		';
}
$__compilerVar20 .= '

	';
}
$__compilerVar20 .= '




	';
if (XenForo_Template_Helper_Core::styleProperty('uix_classicPostbit'))
{
$__compilerVar20 .= '	

	
	
		.hasFlexbox .messageList .uix_message {
			-ms-flex-direction: column; /* 2012 syntax for IE10 */
		        -webkit-flex-direction: column;
		        flex-direction: column;	
		        
		        -ms-flex-align: stretch; /* 2012 syntax for IE10 */
			-webkit-align-items: stretch;
			align-items: stretch;
		}
		
		.hasFlexbox .message .messageInfo {
			margin-left: 0px;
			
			-ms-flex: 1 1 auto; /* 2012 syntax for IE10 */
			-webkit-flex: 1 1 auto;
			flex: 1 1 auto;
		}
		
		.hasFlexbox #QuickReply {
			margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('messageUserInfo.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall')) . 'px;
		}
		
		.hasFlexbox .messageUserInfo {
			width: auto;
		}
		
		.hasFlexbox .messageUserBlock {
			display: -ms-flexbox; /* 2012 syntax for IE10 */
		        display: -webkit-flex; 
		        display: flex;
			
			-ms-flex-pack: justify; /* 2012 syntax for IE10 */
			-webkit-justify-content: space-between;
			justify-content: space-between;
			
			margin-bottom: 5px;
		}
		
		.hasFlexbox .messageUserBlock div.avatarHolder {
			-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
			-webkit-flex: 0 0 auto;
			flex: 0 0 auto;
		}

		
		.hasFlexbox .messageUserBlock h3.userText {
			-ms-flex: 1 1 100%; /* 2012 syntax for IE10 */
			-webkit-flex: 1 1 100%;
			flex: 1 1 100%;
		}
		
		.hasFlexbox .messageUserBlock .extraUserInfo {
			-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
			-webkit-flex: 0 0 auto;
			flex: 0 0 auto;
			
			min-width: 150px;
		}
	
	
	
	
		.hasFlexbox .messageUserBlock .userBanner {
			max-width: 130px;
			overflow: hidden;
			text-overflow: ellipsis;
			margin-left: 0;
			margin-right: 0;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
			position: static;
			display: inline-block;	
		}
		
		.hasFlexbox .messageUserBlock .userBanner span {
			display: none;
		}
		
		.hasFlexbox .messageUserBlock .arrow {
			display: none;
		}

		
	
		.hasFlexbox .messageUserBlock div.avatarHolder {
			border-radius: ' . XenForo_Template_Helper_Core::styleProperty('messageAvatarHolder.border-radius') . ' 0 0 ' . XenForo_Template_Helper_Core::styleProperty('messageAvatarHolder.border-radius') . ';	
		}
		
		.hasFlexbox .messageUserBlock h3.userText {
			border: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ' solid 1px;
			border-width: 0 0 0 1px;
		}
		
		.hasFlexbox .messageUserBlock .extraUserInfo {
			border-radius: 0 ' . XenForo_Template_Helper_Core::styleProperty('messageExtraUserInfo.border-radius') . ' ' . XenForo_Template_Helper_Core::styleProperty('messageExtraUserInfo.border-radius') . ' 0;
			border: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ' solid 1px;
			border-width: 0 0 0 1px;
		}
	
	
	
	
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_floatUserBanners'))
{
$__compilerVar20 .= '
		
		.hasFlexbox .messageUserBlock .userBanner {
			float: right;
			clear: right;
			margin-top: 0;
		}

		.hasFlexbox .messageUserBlock h3.userText .uix_userTextInner {
			float: left;
		}
		
		';
}
$__compilerVar20 .= '

';
}
$__compilerVar20 .= '



';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar20 .= '
@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint') . ') {
	
	
	
		.Responsive.hasFlexbox .messageList .uix_message {
			-ms-flex-direction: column; /* 2012 syntax for IE10 */
		        -webkit-flex-direction: column;
		        flex-direction: column;
	        
	        	-ms-flex-align: stretch; /* 2012 syntax for IE10 */
			-webkit-align-items: stretch;
			align-items: stretch;
		}
		
		.Responsive.hasFlexbox .message .messageInfo {
			-ms-flex: 1 1 auto; /* 2012 syntax for IE10 */
			-webkit-flex: 1 1 auto;
			flex: 1 1 auto;
		}

		.Responsive .message .messageInfo {
			padding: 0px;
			margin-left: 0px;
		}

		.Responsive.hasFlexbox #QuickReply {
			margin-left: 0;
		}
		
		.Responsive.hasFlexbox .messageUserBlock {
			display: -ms-flexbox; /* 2012 syntax for IE10 */
		        display: -webkit-flex; 
		        display: flex;

	        	-ms-flex-pack: justify; /* 2012 syntax for IE10 */
			-webkit-justify-content: space-between;
			justify-content: space-between;
		}
		
		.Responsive.hasFlexbox .messageUserBlock div.avatarHolder {
			-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
			-webkit-flex: 0 0 auto;
			flex: 0 0 auto;
		}
		
		
		.Responsive.hasFlexbox .messageUserBlock h3.userText {
			margin-left: 0;
			
			-ms-flex: 1 1 100%; /* 2012 syntax for IE10 */
			-webkit-flex: 1 1 100%;
			flex: 1 1 100%;
		}
		
		.Responsive.hasFlexbox #QuickReply {
			margin-left: 0;
		}
	
	
	
	
		.Responsive .messageUserBlock h3.userText {
			border-width: 0 0 0 1px;
		}
	
	
	

		';
if (XenForo_Template_Helper_Core::styleProperty('uix_floatUserBanners'))
{
$__compilerVar20 .= '

		.Responsive .messageUserBlock .userBanner {
			float: right;
			margin-top: 0;
		}

		.Responsive .messageUserBlock h3.userText .uix_userTextInner {
			float: left;
		}

		';
}
$__compilerVar20 .= '
	
	
	

		';
if (XenForo_Template_Helper_Core::styleProperty('uix_messageOnlineMarker_circle'))
{
$__compilerVar20 .= '

		.Responsive .messageUserBlock div.avatarHolder .onlineMarker {
			margin: 0;
		}

		';
}
$__compilerVar20 .= '

}
';
}
$__output .= $__compilerVar20;
unset($__compilerVar20);
$__output .= '

';
$__compilerVar21 = '';
$__compilerVar21 .= '


/* Find the images, set the new image */

.LoggedIn .discussionListItem .unreadLink,
.LoggedIn .discussionListItem .ReadToggle,
.discussionListItem .iconKey span,
.event .content .thread .icon,
.event .content .forum .icon,
.footerLinks a.globalFeed,
.messageNotices .icon,
.rating .star,
.resourceAlerts .icon,
.thread_view .threadAlerts .icon,
.alerts .newIcon,
.alertsPopup .newIcon,
.DismissParent .DismissCtrl {
	background-image: url(' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/uix/sprite.png) !important;
	width: 16px; 
	height: 16px;
	background-repeat: no-repeat;
}


/* Set the background-position */

.LoggedIn .discussionListItem .unreadLink,
.LoggedIn .discussionListItem.unread .ReadToggle {background-position: 0 -32px;}
.LoggedIn .discussionListItem .ReadToggle:hover {background-position: -16px -32px;}

.discussionListItem .iconKey .sticky    { background-position:   0px -16px; }
.discussionListItem .iconKey .starred   { background-position: -64px -32px;}
.discussionListItem .iconKey .watched   { background-position: -144px -16px;}
.discussionListItem .iconKey .locked    { background-position: -16px -16px; }
.discussionListItem .iconKey .moderated { background-position: -32px -16px; }
.discussionListItem .iconKey .redirect  { background-position: -48px -16px; }
.discussionListItem .iconKey .new       { background-position: -64px -16px; }

.event .content .thread .icon {background-position: -96px -16px;}
.event .content .forum .icon {background-position: -80px -16px;}

.footerLinks a.globalFeed {background-position: -112px -16px;}

.messageNotices .deletedNotice .icon { background-position: -48px -32px; }		
.messageNotices .warningNotice .icon { background-position: -32px -32px; }		
.messageNotices .moderatedNotice .icon {background-position: -32px -16px; }

.navTabs .navTab.PopupClosed:hover .SplitCtrl {background-position: -128px ; }

.rating .star {background-position: -96px -32px !important;}
.rating .star.Full {background-position: -64px -32px !important;}
.rating .star.Half,
.rating .star.Full.Half {background-position: -80px -32px !important;}

.resourceAlerts .deletedAlert .icon { background-position: -48px -32px; }
.resourceAlerts .moderatedAlert .icon { background-position: -32px -16px; }

.thread_view .threadAlerts .deletedAlert .icon { background-position: -48px -32px; }
.thread_view .threadAlerts .moderatedAlert .icon { background-position: -32px -32px; }
.thread_view .threadAlerts .lockedAlert .icon { background-position: -16px -16px; }

.alerts .newIcon,
.alertsPopup .newIcon {background-position: -112px -32px;}
	
.DismissParent .DismissCtrl {background-position: -80px 0;}
.DismissParent:hover .DismissCtrl:hover {background-position: -96px 0;}
.DismissParent:hover .DismissCtrl:active {background-position: -112px 0;}
	
	

@media
only screen and (-webkit-min-device-pixel-ratio: 2),
only screen and (   min--moz-device-pixel-ratio: 2),
only screen and (     -o-min-device-pixel-ratio: 2/1),
only screen and (        min-device-pixel-ratio: 2),
only screen and (                min-resolution: 192dpi),
only screen and (                min-resolution: 2dppx) {
      
	.LoggedIn .discussionListItem .unreadLink,
	.LoggedIn .discussionListItem .ReadToggle,
	.discussionListItem .iconKey span,
	.event .content .thread .icon,
	.event .content .forum .icon,
	.footerLinks a.globalFeed,
	.messageNotices .icon,
	.rating .star,
	.resourceAlerts .icon,
	
	.thread_view .threadAlerts .icon,
	.alerts .newIcon,
	.alertsPopup .newIcon,
	.DismissParent .DismissCtrl {
		background-image: url(' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/uix/sprite@2x.png) !important;
		background-size: 160px 48px;
	}
         
}';
$__output .= $__compilerVar21;
unset($__compilerVar21);
$__output .= '
';
$__compilerVar22 = '';
$__compilerVar22 .= '


';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') > 100)
{
$__compilerVar22 .= '

	/******* ADD PAGE MARGIN WHEN VIEWPORT APPROACHES PAGE WIDTH *******/
	
		@media screen and 
		(max-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') + (2 * XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth'))) . 'px) and 
		(min-width: ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') + 1) . 'px ) {
		
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 2)
{
$__compilerVar22 .= '
				#uix_wrapper,
				#uix_wrapper .activeSticky .pageWidth {
					margin-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
					margin-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
				}
			';
}
else
{
$__compilerVar22 .= '
				.pageWidth {
					margin-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
					margin-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
				}
			';
}
$__compilerVar22 .= '
		}

';
}
$__compilerVar22 .= '







';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') <= 100)
{
$__compilerVar22 .= '

	/******* ADD PAGE MARGIN *******/

		@media screen and
		
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') != ('') && XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') != ('100%'))
{
$__compilerVar22 .= '
		(max-width: 1024px) and	
		';
}
$__compilerVar22 .= '
		
		(min-width: ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') + 1) . 'px ) {
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 2)
{
$__compilerVar22 .= '
			
				.pageWidth { margin: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . '; }
					
			';
}
else
{
$__compilerVar22 .= '	
				
				#uix_wrapper,
				#uix_wrapper .activeSticky .pageWidth {
					margin-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
					margin-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
				}
	
			';
}
$__compilerVar22 .= '
		}
		
		
		
	/******* PAGE MAX-WIDTH RULES FOR FLUID STYLES *******/
	
		@media screen and (max-width: 1024px) {
			.Responsive .pageWidth {max-width: 100%;}
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 2)
{
$__compilerVar22 .= '
				.Responsive #uix_wrapper,
				.Responsive #uix_wrapper .activeSticky .pageWidth { max-width: 100%; } 
			';
}
$__compilerVar22 .= '
		}
		
		.NoResponsive body
		{
			';
if (XenForo_Template_Helper_Core::styleProperty('nonResponsiveMinWidth'))
{
$__compilerVar22 .= 'min-width: 960px;';
}
$__compilerVar22 .= '
		}
';
}
$__compilerVar22 .= '













@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') {
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 2)
{
$__compilerVar22 .= '
	.Responsive #uix_wrapper
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_wrapperResponsiveWide') . '
	}
	';
}
$__compilerVar22 .= '

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
$__compilerVar22 .= '
	.Responsive #uix_wrapper
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_wrapperResponsiveMedium') . '
	}
	';
}
$__compilerVar22 .= '

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
$__compilerVar22 .= '
		.uix_adStylerColorOptions ul li a {text-indent: -999999px;}
	';
}
$__compilerVar22 .= '
	
}
	







@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 2)
{
$__compilerVar22 .= '
	.Responsive #uix_wrapper
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_wrapperResponsiveNarrow') . '
	}
	';
}
$__compilerVar22 .= '
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
$__output .= $__compilerVar22;
unset($__compilerVar22);
$__output .= '
';
$__compilerVar23 = '';
$__compilerVar23 .= '

.message .dark_postrating.likesSummary, .dark_postrating {
	margin: 0;
	min-height: 0;
	padding: 8px;
	' . XenForo_Template_Helper_Core::styleProperty('messageLikesSummary') . '
}

.dark_postrating_outputlist {
	font-family: inherit;
	margin: 0;
	font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalSmallFontSize') . ';
	color: inherit;
}

.dark_postrating_outputlist li strong, .dark_postrating_thread_rating strong {color: inherit;}



.widget-container.widget-tabs .secondaryContent {
  border-top: none;
}



';
if (XenForo_Template_Helper_Core::styleProperty('uix_classicPostbit'))
{
$__compilerVar23 .= '
@media screen and (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') + 1) . 'px)
{
	*:not(.avatarHolder) + .UserOnline,
	*:not(.avatarHolder) + .UserOnlineInvisible,
	*:not(.avatarHolder) + .UserOffline
	{
		position: absolute;
		left: 0;
		top: 0;	
		box-sizing: border-box;
		border-radius: 3px;
		margin: 0;	
	}
	*:not(.avatarHolder) + .UserOnline span, 
	*:not(.avatarHolder) + .UserOnlineInvisible span, 
	*:not(.avatarHolder) + .UserOffline span
	{
		display: none;
	}
}
';
}
$__compilerVar23 .= '



.featuredResourceList {
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	
	height: auto;
	
	-ms-flex-wrap: wrap;
	-webkit-flex-wrap: wrap;
	flex-wrap: wrap;
	
	margin: -' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;
}
.featuredResourceList .featuredResource {
	margin: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ' 0 0;
	box-shadow: none;
	border-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryMedium') . ';
	background: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLighter') . ';
	
	-ms-flex: 1 0 200px;
	-webkit-flex: 1 0 200px;
	flex: 1 0 200px;
	
	margin: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') / 2) . 'px;
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';
}
.featuredResourceList .featuredResource .details {left: 5px;}
.featuredResourceList .featuredResource .resourceInfo .title a {color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryDark') . ';}

@media screen and (-webkit-min-device-pixel-ratio:0)  {
	.resourceHeaders .typeFilter {
	    bottom: 0px;
	    (-bracket-:hack;
	        bottom: 1px;
	    );
	}
}

.resourceUpdate {padding: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';}
.resourceListItem {border-bottom: solid 1px ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ';}
.sidebar .callToAction {margin: 15px 0;}
.sidebar .callToAction span {padding: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . '; font-size: ' . XenForo_Template_Helper_Core::styleProperty('callToActionSpan.font-size') . '}
.resourceListSidebar .secondaryContent
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border') . '
	margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
}
.resourceListMain {
	' . XenForo_Template_Helper_Core::styleProperty('content') . '
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('content.border-radius') . ';
}

.imageCollection {background-image: none;}

.downloadButton .inner:hover {color: #FFF;}
.mediaContainer {box-shadow: none;}


';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar23 .= '.resourceListSidebar, .resourceListMain {margin-bottom: 0;}';
}
$__compilerVar23 .= '



';
if (XenForo_Template_Helper_Core::styleProperty('uix_showCategoryDescOnHover'))
{
$__compilerVar23 .= '
	#taigachat_full.nodeList .categoryStrip .nodeDescription {opacity: 1;}
	#taigachat_full.nodeList .categoryStrip {height: auto;}
';
}
$__compilerVar23 .= '





.mainContainer .mainContent > *:first-child > .sectionMain, .mainContainer_noSidebar > *:first-child {
    margin-top: 0;
}

.xmgCarouselContainer .sectionMain .titleStrip h3 {line-height: ' . XenForo_Template_Helper_Core::styleProperty('categoryStrip.height') . ';}
.ratings { font-size: 16px; }

.ratings .star { font-size: inherit; }

';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar23 .= '
	.xengallerySubMenu {
		display: none !important;
	}
';
}
$__compilerVar23 .= '

.mediaTabHeadings .typeFilter
{
	background-image: none;
}
.mediaLabels .mediaLabel
{
	box-shadow: none;
}

.xengallerySideBarContainer .xengallerySideBar .section h3 a {color: inherit;}

.xengallerySideBarContainer .xengallerySideBar .section
{
	margin: 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ' 0;
	padding: 0;
}
.xengallerySideBarContainer .xengallerySideBar .section .secondaryContent 
{
	' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border') . '
}
.xengallerySideBarContainer .xengallerySideBar .section h3 {
	' . XenForo_Template_Helper_Core::styleProperty('sidebarBlockHeading') . '
}

.xengallery_media_index .titleBar,
.xengallery_category_view .titleBar {height: auto;}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_messageControlIcons'))
{
$__compilerVar23 .= '
	.commentSimple .control:before,
	.mediaMeta .control:before
	{
		display: inline-block;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		
		margin-right: 5px;
	}
	.commentMeta .control.ReplyLink:before
	{
		content: "\\f112";
	}
	.commentMeta .control.edit:before
	{
		content: "\\f040";
	}
	.commentMeta .control.delete:before
	{
		content: "\\f014";
	}
	.commentMeta .control.deleteSpam:before
	{
		content: "\\f05e";
	}
	.commentMeta .control.ip:before,
	.mediaMeta .control.ip:before
	{
		content: "\\f124";
	}
	.commentMeta .control.like:before,
	.mediaMeta .control.like:before
	{
		content: "\\f164";
	}
	.commentMeta .control.unlike:before,
	.mediaMeta .control.unlike:before
	{
		content: "\\f165";
	}
	.commentMeta .control.MultiQuoteControl:before
	{
		content: "\\f10d";
	}
	.commentMeta .control.history:before
	{
		content: "\\f1da";
	}
	.commentMeta .control.warn:before
	{
		content: "\\f071";
	}
	.commentMeta .control.report:before,
	.mediaMeta .control.report:before
	{
		content: "\\f06a";
	}
	
	.commentMeta .control.postComment:before
	{
		content: "\\f075";
	}
';
}
$__compilerVar23 .= '




';
if (XenForo_Template_Helper_Core::styleProperty('uix_sidebarIcons'))
{
$__compilerVar23 .= '


	.resourceListSidebar .secondaryContent h3:before,
	.xengallerySideBar .section .secondaryContent h3:before {
		display: inline-block;
		font-family: \'FontAwesome\';
		font-style: normal;
	 	font-weight: normal;
	  	-webkit-font-smoothing: antialiased;
	  	-moz-osx-font-smoothing: grayscale;
		line-height: 1;
		
		' . XenForo_Template_Helper_Core::styleProperty('uix_sidebar_iconsStyle') . '
	}
	
	
	.sidebar .section .secondaryContent.widget.WidgetFramework_WidgetRenderer_OnlineUsers h3:before {content: "\\f0c0";}
	.sidebar .section .secondaryContent.widget.WidgetFramework_WidgetRenderer_OnlineStaff h3:before {content: "\\f0b1";}
	.sidebar .section .secondaryContent.widget.WidgetFramework_WidgetRenderer_Stats h3:before {content: \'\\f080\';}


	
	.resourceListSidebar .secondaryContent.categoryList h3:before {content: "\\f07c";}
	.resourceListSidebar .secondaryContent.miniResourceList h3:before {content: "\\f091";}
	.resourceListSidebar .secondaryContent.avatarList h3:before {content: "\\f0c0";}
	
	.sidebar .section#resourceInfo .secondaryContent h3:before {content: "\\f05a";}
	.sidebar .section .secondaryContent#authorTools h3:before {content: "\\f085";}
	.sidebar .section .secondaryContent#moreAppsByAuthor h3:before {content: "\\f0ca";}
	.sidebar .section#versionInfo .secondaryContent h3:before {content: "\\f0c5";}
	
	
	
	.xengallerySideBar .section.xengallery_albums .secondaryContent h3:before {content: "\\f00a";}
	.xengallerySideBar .section.xengallery_categories .secondaryContent h3:before {content: "\\f07b";}
	.xengallerySideBar .section.xengallery_tag_cloud .secondaryContent h3:before {content: "\\f02c";}
	.xengallerySideBar .section.xengallery_recent_comments .secondaryContent h3:before {content: "\\f086";}
	.xengallerySideBar .section.xengallery_top_contributors .secondaryContent h3:before {content: "\\f091";}
	.xengallerySideBar .section.xengallery_gallery_statistics .secondaryContent h3:before {content: "\\f080";}
	.xengallerySideBar .section.xengallery_your_statistics .secondaryContent h3:before {content: "\\f080";}
	
	.sidebar .section#shareMedia .secondaryContent h3:before {content: "\\f1e0";}
	.sidebar .section#mediaInfo .secondaryContent h3:before {content: "\\f129";}
	.sidebar .section#ownerInfo .secondaryContent h3:before {content: "\\f007";}
	
';
}
$__compilerVar23 .= '





.topRightBlocks,
.midRightBlocks,
.btmRightBlocks { float: none; }';
$__output .= $__compilerVar23;
unset($__compilerVar23);
