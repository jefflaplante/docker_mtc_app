<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__compilerVar1 = '';
$__compilerVar1 .= '#header
{
	' . XenForo_Template_Helper_Core::styleProperty('header') . '
}

' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '#header .pageWidth .pageContent'
)) . '

	#logo
	{
		display: block;
		float: left;
		line-height: ' . (XenForo_Template_Helper_Core::styleProperty('headerLogoHeight') - 4) . 'px;
		*line-height: ' . XenForo_Template_Helper_Core::styleProperty('headerLogoHeight') . ';
		height: ' . XenForo_Template_Helper_Core::styleProperty('headerLogoHeight') . ';
		max-width: 100%;
		vertical-align: middle;
	}

		/* IE6/7 vertical align fix */
		#logo span
		{
			*display: inline-block;
			*height: 100%;
		}

		#logo a:hover
		{
			text-decoration: none;
		}

		#logo img
		{
			vertical-align: middle;
			max-width: 100%;
		}

	#visitorInfo
	{
		float: right;
		min-width: 250px;
		_width: 250px;
		overflow: hidden; zoom: 1;
		background: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . ';
		padding: 5px;
		border-radius: 5px;
		margin: 10px 0;
		border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryDarker') . ';
		color: ' . XenForo_Template_Helper_Core::styleProperty('primaryDarker') . ';
	}

		#visitorInfo .avatar
		{
			float: left;
			display: block;
		}

			#visitorInfo .avatar .img
			{
				border-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightish') . ';
			}

		#visitorInfo .username
		{
			font-size: 18px;
			text-shadow: 1px 1px 10px white;
			color: ' . XenForo_Template_Helper_Core::styleProperty('primaryDarker') . ';
			white-space: nowrap;
			word-wrap: normal;
		}

		#alerts
		{
			zoom: 1;
		}

		#alerts #alertMessages
		{
			padding-left: 5px;
		}

		#alerts li.alertItem
		{
			font-size: 11px;
		}

			#alerts .label
			{
				color: ' . XenForo_Template_Helper_Core::styleProperty('primaryDarker') . ';
			}';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '

';
$__compilerVar2 = '';
$__compilerVar2 .= '.footer .pageContent
{
	' . XenForo_Template_Helper_Core::styleProperty('footer') . '
}
	
	.footer a,
	.footer a:visited
	{
		' . XenForo_Template_Helper_Core::styleProperty('footerLink') . '
	}
	
		.footer a:hover,
		.footer a:active
		{
			' . XenForo_Template_Helper_Core::styleProperty('footerLinkHover') . '
		}

	.footer .choosers
	{
		' . XenForo_Template_Helper_Core::styleProperty('footerLeftBlock') . '
	}
	
		.footer .choosers dt
		{
			display: none;
		}
		
		.footer .choosers dd
		{
			float: left;
			';
if ($pageIsRtl)
{
$__compilerVar2 .= '*display: inline; *float: none; *zoom: 1;';
}
$__compilerVar2 .= '
		}
		
	.footerLinks
	{
		' . XenForo_Template_Helper_Core::styleProperty('footerRightBlock') . '
	}
	
		.footerLinks li
		{
			float: left;
			';
if ($pageIsRtl)
{
$__compilerVar2 .= '*display: inline; *float: none; *zoom: 1;';
}
$__compilerVar2 .= '
		}
		
			.footerLinks a.globalFeed
			{
				width: 14px;
				height: 14px;
				display: block;
				text-indent: -9999px;
				white-space: nowrap;
				background: url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/xenforo-ui-sprite.png\') no-repeat -112px -16px;
				padding: 0;
				margin: 5px;
			}

.footerLegal .pageContent
{
	font-size: 11px;
	overflow: hidden; zoom: 1;
	padding: 5px 5px 15px;
	text-align: center;
}
	
	#copyright
	{
		color: ' . XenForo_Template_Helper_Core::styleProperty('dimmedTextColor') . ';
		float: left;
	}
	
	#legal
	{
		float: right;
	}
	
		#legal li
		{
			float: left;
			';
if ($pageIsRtl)
{
$__compilerVar2 .= '*display: inline; *float: none; *zoom: 1;';
}
$__compilerVar2 .= '
			margin-left: 10px;
		}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar2 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
	.Responsive .footerLinks a.globalFeed,
	.Responsive .footerLinks a.topLink,
	.Responsive .footerLinks a.homeLink
	{
		display: none;
	}

	.Responsive .footerLegal .debugInfo
	{
		clear: both;
	}
}

@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
{
	.Responsive #copyright span
	{
		display: none;
	}
}
';
}
$__output .= $__compilerVar2;
unset($__compilerVar2);
$__output .= '

';
$__compilerVar3 = '';
$__compilerVar3 .= '.breadBoxTop,
.breadBoxBottom
{
	' . XenForo_Template_Helper_Core::styleProperty('breadBox') . '
}

.breadBoxTop
{
}

.breadBoxTop .topCtrl
{
	' . XenForo_Template_Helper_Core::styleProperty('breadBoxTopCtrl') . '
}

.breadcrumb
{
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumb') . '
}

.breadcrumb.showAll
{
	height: auto;
}

.breadcrumb .boardTitle
{
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumbBoardTitle') . '
}

.breadcrumb .crust
{
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrust') . '
}

.breadcrumb .crust a.crumb
{
	cursor: pointer;
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumb') . '
}

	.breadcrumb .crust a.crumb > span
	{
		display: block;
		text-overflow: ellipsis;
		word-wrap: normal;
		white-space: nowrap;
		overflow: hidden;
		max-width: 100%;
	}

	.breadcrumb .crust:first-child a.crumb,
	.breadcrumb .crust.firstVisibleCrumb a.crumb
	{
		' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemFirstCrumb') . '
	}
	
	.breadcrumb .crust:last-child a.crumb
	{
		' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemLastCrumb') . '
	}

.breadcrumb .crust .arrow
{
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemArrowOuter') . '
}

.breadcrumb .crust .arrow span
{
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemArrowInner') . '
}

.breadcrumb .crust:hover a.crumb
{
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumbHover') . '
}

.breadcrumb .crust:hover .arrow span
{
	border-left-color: ' . XenForo_Template_Helper_Core::styleProperty('breadcrumbItemCrumbHover.background-color') . ';
}

	.breadcrumb .crust .arrow
	{
		/* hide from IE6 */
		_display: none;
	}

.breadcrumb .jumpMenuTrigger
{
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumbJumpMenuTrigger') . '
}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar3 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
{
	.Responsive .breadBoxTop.withTopCtrl
	{
		display: table;
		table-layout: fixed;
		width: 100%;
	}

	.Responsive .breadBoxTop.withTopCtrl nav
	{
		display: table-header-group;
	}

	.Responsive .breadBoxTop.withTopCtrl .topCtrl
	{
		display: table-footer-group;
		margin-top: 5px;
		text-align: right;
	}
}
';
}
$__output .= $__compilerVar3;
unset($__compilerVar3);
$__output .= '

';
$__compilerVar4 = '';
$__compilerVar4 .= '#navigation .pageContent
{
	height: ' . (XenForo_Template_Helper_Core::styleProperty('headerTabHeight') * 2 + 2) . 'px;
	position: relative;
}

#navigation .menuIcon
{
	position: relative;
	font-size:18px;
	width: 16px;
	display: inline-block;
	text-indent: -9999px;
}

#navigation .PopupOpen .menuIcon:before,
#navigation .navLink .menuIcon:before
{
	zoom: 1;
}

#navigation .menuIcon:before
{
	content: "";
	font-size: 18px;
	position: absolute;
	top: ' . (round(-0.31 + 0.029 * XenForo_Template_Helper_Core::styleProperty('headerTabHeight'), 1)) . 'em;
	left: 0;
	width: 16px;
	height: 2px;
	border-top: 6px double currentColor;
	border-bottom: 2px solid currentColor;
}

	.navTabs
	{
		' . XenForo_Template_Helper_Core::styleProperty('navTabs') . '
		
		height: ' . XenForo_Template_Helper_Core::styleProperty('headerTabHeight') . ';
	}
	
		.navTabs .publicTabs
		{
			float: left;
		}
		
		.navTabs .visitorTabs
		{
			float: right;
		}
	
			.navTabs .navTab
			{
				float: left;
				white-space: nowrap;
				word-wrap: normal;
				
				';
if ($pageIsRtl)
{
$__compilerVar4 .= '*display: inline; *float: none; *zoom: 1;';
}
$__compilerVar4 .= '
			}


/* ---------------------------------------- */
/* Links Inside Tabs */

.navTabs .navLink,
.navTabs .SplitCtrl
{
	' . XenForo_Template_Helper_Core::styleProperty('navLink') . '
	
	';
if ($pageIsRtl)
{
$__compilerVar4 .= '*float: none; *display: inline; *zoom: 1;';
}
$__compilerVar4 .= '
	
	height: ' . XenForo_Template_Helper_Core::styleProperty('headerTabHeight') . ';
	line-height: ' . XenForo_Template_Helper_Core::styleProperty('headerTabHeight') . ';
}

	.navTabs .publicTabs .navLink
	{
		padding: 0 15px;
	}
	
	.navTabs .visitorTabs .navLink
	{
		padding: 0 10px;
	}
	
	.navTabs .navLink:hover
	{
		text-decoration: none;
	}
	
	/* ---------------------------------------- */
	/* unselected tab, popup closed */

	.navTabs .navTab.PopupClosed
	{
		position: relative;
	}
	
	.navTabs .navTab.PopupClosed .navLink
	{
		color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . ';
	}
	
		.navTabs .navTab.PopupClosed:hover
		{
			background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryMedium') . ';
		}
		
			.navTabs .navTab.PopupClosed .navLink:hover
			{
				color: ' . XenForo_Template_Helper_Core::styleProperty('textCtrlBackground') . ';
			}
		
	.navTabs .navTab.PopupClosed .arrowWidget
	{
		/* circle-arrow-down-light */
		background-position: -64px 0;
	}
	
	.navTabs .navTab.PopupClosed .SplitCtrl
	{
		margin-left: -14px;
		width: 14px;
	}
		
		.navTabs .navTab.PopupClosed:hover .SplitCtrl
		{
			/* nav_menu_gadget, height: 17px */
			background: transparent url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/xenforo-ui-sprite.png\') no-repeat -128px ' . ((XenForo_Template_Helper_Core::styleProperty('headerTabHeight') - 17) / 2 + 1) . 'px;
		}
	
	/* ---------------------------------------- */
	/* selected tab */

	.navTabs .navTab.selected .navLink
	{
		position: relative;
		' . XenForo_Template_Helper_Core::styleProperty('navTabSelected') . '
	}
	
	.navTabs .navTab.selected .SplitCtrl
	{
		display: none;
	}
	
	.navTabs .navTab.selected .arrowWidget
	{
		/* circle-arrow-down */
		background-position: -32px 0;
	}
	
		.navTabs .navTab.selected.PopupOpen .arrowWidget
		{
			/* circle-arrow-up */
			background-position: -16px 0;
		}
	
	/* ---------------------------------------- */
	/* unselected tab, popup open */
	
	.navTabs .navTab.PopupOpen .navLink
	{
	}
	
	
	/* ---------------------------------------- */
	/* selected tab, popup open (account) */
	
	.navTabs .navTab.selected.PopupOpen .navLink
	{
		' . XenForo_Template_Helper_Core::styleProperty('popupControl') . '
	}
	
/* ---------------------------------------- */
/* Second Row */

.navTabs .navTab.selected .tabLinks
{
	' . XenForo_Template_Helper_Core::styleProperty('navTabSelected.background') . '
	
	width: 100%;	
	padding: 0;
	border: none;
	overflow: hidden; zoom: 1;	
	position: absolute;
	left: 0px;	
	top: ' . (XenForo_Template_Helper_Core::styleProperty('headerTabHeight') + 2) . 'px;
	height: ' . XenForo_Template_Helper_Core::styleProperty('headerTabHeight') . ';
	background-position: 0px -' . XenForo_Template_Helper_Core::styleProperty('headerTabHeight') . ';
	*clear:expression(style.width = document.getElementById(\'navigation\').offsetWidth + \'px\', style.clear = "none", 0);
}

	.navTabs .navTab.selected .blockLinksList
	{
		background: none;
		padding: 0;
		border: none;
		margin-left: 8px;
	}

	.withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 275px;
	}

	.navTabs .navTab.selected .tabLinks .menuHeader
	{
		display: none;
	}
	
	.navTabs .navTab.selected .tabLinks li
	{
		float: left;
		padding: 2px 0;
	}
	
		.navTabs .navTab.selected .tabLinks a
		{
			' . XenForo_Template_Helper_Core::styleProperty('navTabLink') . '
			
			line-height: ' . (XenForo_Template_Helper_Core::styleProperty('headerTabHeight') - 6) . 'px;
		}
		
		.navTabs .navTab.selected .tabLinks .PopupOpen a
		{
			color: inherit;
			text-shadow: none;
		}
		
			.navTabs .navTab.selected .tabLinks a:hover,
			.navTabs .navTab.selected .tabLinks a:focus
			{
				' . XenForo_Template_Helper_Core::styleProperty('navTabLinkHover') . '
			}
			
			.navTabs .navTab.selected .tabLinks .Popup a:hover,
			.navTabs .navTab.selected .tabLinks .Popup a:focus
			{
				color: inherit;
				background: none;
				border-color: transparent;
				border-radius: 0;
				text-shadow: none;
			}
	
/* ---------------------------------------- */
/* Alert Balloons */
	
.navTabs .navLink .itemCount
{
	' . XenForo_Template_Helper_Core::styleProperty('alertBalloon') . '
}

	.navTabs .navLink .itemCount .arrow
	{
		' . XenForo_Template_Helper_Core::styleProperty('alertBalloonArrow') . '
	}
	
.navTabs .navLink .itemCount.Zero
{
	display: none;
}

.navTabs .navLink .itemCount.ResponsiveOnly
{
	display: none !important;
}

.NoResponsive #VisitorExtraMenu_Counter,
.NoResponsive #VisitorExtraMenu_ConversationsCounter,
.NoResponsive #VisitorExtraMenu_AlertsCounter
{
	display: none !important;
}
	
/* ---------------------------------------- */
/* Account Popup Menu */

.navTabs .navTab.account .navLink
{
	font-weight: bold;
}

	.navTabs .navTab.account .navLink .accountUsername
	{
		display: block;
		max-width: 100px;
		overflow: hidden;
		text-overflow: ellipsis;
	}

#AccountMenu
{
	width: 274px;
}

#AccountMenu .menuHeader
{
	position: relative;
}

	#AccountMenu .menuHeader .avatar
	{
		float: left;
		margin-right: 10px;
	}

	#AccountMenu .menuHeader .visibilityForm
	{
		margin-top: 10px;
		color: ' . XenForo_Template_Helper_Core::styleProperty('primaryMedium') . ';
	}
	
	#AccountMenu .menuHeader .links .fl
	{
		position: absolute;
		bottom: 10px;
		left: ' . (10 + 10 + 96) . 'px;
	}

	#AccountMenu .menuHeader .links .fr
	{
		position: absolute;
		bottom: 10px;
		right: 10px;
	}
	
#AccountMenu .menuColumns
{
	overflow: hidden; zoom: 1;
	padding: 2px;
}

	#AccountMenu .menuColumns ul
	{
		float: left;
		padding: 0;
		max-height: none;
		overflow: hidden;
	}

		#AccountMenu .menuColumns a,
		#AccountMenu .menuColumns label
		{
			width: 115px;
		}

#AccountMenu .statusPoster textarea
{
	width: 245px;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}

#AccountMenu .statusPoster .submitUnit
{
	margin-top: 5px;
	text-align: right;
}

	#AccountMenu .statusPoster .submitUnit .statusEditorCounter
	{
		float: left;
		line-height: 23px;
		height: 23px;
	}
	
/* ---------------------------------------- */
/* Inbox, Alerts Popups */

.navPopup
{
	width: 260px;
}

.navPopup a:hover,
.navPopup .listItemText a:hover
{
	background: none;
	text-decoration: underline;
}

	.navPopup .menuHeader .InProgress
	{
		float: right;
		display: block;
		width: 20px;
		height: 20px;
	}

.navPopup .listPlaceholder
{
	max-height: 350px;
	overflow: auto;
}

	.navPopup .listPlaceholder ol.secondaryContent
	{
		padding: 0 10px;
	}

		.navPopup .listPlaceholder ol.secondaryContent.Unread
		{
			background-color: ' . XenForo_Template_Helper_Core::styleProperty('inlineModChecked.background-color') . ';
		}

.navPopup .listItem
{
	overflow: hidden; zoom: 1;
	padding: 5px 0;
	border-bottom: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
}

.navPopup .listItem:last-child
{
	border-bottom: none;
}

.navPopup .PopupItemLinkActive:hover
{
	margin: 0 -8px;
	padding: 5px 8px;
	border-radius: 5px;
	background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
	cursor: pointer;
}

.navPopup .avatar
{
	float: left;
}

	.navPopup .avatar img
	{
		width: 32px;
		height: 32px;
	}

.navPopup .listItemText
{
	margin-left: 37px;
}

	.navPopup .listItemText .muted
	{
		font-size: 9px;
	}

	.navPopup .unread .listItemText .title,
	.navPopup .listItemText .subject
	{
		font-weight: bold;
	}

.navPopup .sectionFooter .floatLink
{
	float: right;
}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar4 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
	.Responsive .navTabs
	{
		padding-left: 10px;
		padding-right: 10px;
	}

	.Responsive .withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 50px;
	}
}

@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
{
	.Responsive.hasJs .navTabs:not(.showAll) .publicTabs .navTab:not(.selected):not(.navigationHiddenTabs)
	{
		display: none;
	}
}
';
}
$__output .= $__compilerVar4;
unset($__compilerVar4);
$__output .= '

';
$__compilerVar5 = '';
$__compilerVar5 .= '#searchBar
{
	position: relative;
	zoom: 1;
	z-index: 52; /* higher than breadcrumb arrows */
}

	#QuickSearchPlaceholder
	{
		position: absolute;
		right: 20px;
		top: ' . (-1 * (XenForo_Template_Helper_Core::styleProperty('headerTabHeight') / 2 + 16 / 2)) . 'px;
		display: none;
		border-radius: 5px;
		cursor: pointer;
		font-size: 11px;
		height: 16px;
		width: 16px;
		box-sizing: border-box;
		text-indent: -9999px;
		background: transparent url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/xenforo-ui-sprite.png\') no-repeat -144px 0px;
		overflow: hidden;
	}

	#QuickSearch
	{
		display: block;
		
		position: absolute;
		right: 20px;
		top: -18px;
		
		margin: 0;
		
		background-color: ' . XenForo_Template_Helper_Core::styleProperty('content.background-color') . ';
		border-radius: 5px;
		padding-top: 5px;
		_padding-top: 3px;
		z-index: 7500;
	}
			
		#QuickSearch .secondaryControls
		{
			display: none;
		}
	
		#QuickSearch.active
		{
			box-shadow: 5px 5px 25px rgba(0,0,0, 0.5);
			padding-bottom: 5px;
		}
		
	#QuickSearch .submitUnit .button
	{
		min-width: 0;
	}
		
	#QuickSearch input.button.primary
	{
		float: left;
		width: 110px;
	}
	
	#QuickSearch #commonSearches
	{
		float: right;
	}
	
		#QuickSearch #commonSearches .button
		{
			width: 23px;
			padding: 0;
		}
		
			#QuickSearch #commonSearches .arrowWidget
			{
				margin: 0;
				float: left;
				margin-left: 4px;
				margin-top: 4px;
			}
	
	#QuickSearch .moreOptions
	{
		display: block;
		margin: 0 24px 0 110px;
		width: auto;
	}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar5 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
	.Responsive #QuickSearchPlaceholder
	{
		display: block;
	}

	.Responsive #QuickSearchPlaceholder.hide
	{
		visibility: hidden;
	}

	.Responsive #QuickSearch
	{
		display: none;
	}

	.Responsive #QuickSearch.show
	{
		display: block;
	}
}
';
}
$__output .= $__compilerVar5;
unset($__compilerVar5);
$__output .= '

/** move the header to the top again **/

#headerMover
{
	position: relative;
	zoom: 1;
}

	#headerMover #headerProxy
	{
		' . XenForo_Template_Helper_Core::styleProperty('header.background') . '
		height: ' . (XenForo_Template_Helper_Core::styleProperty('headerLogoHeight') + XenForo_Template_Helper_Core::styleProperty('headerTabHeight') * 2 + 2) . 'px; /* +2 borders */
	}

	#headerMover #header
	{
		width: 100%;
		position: absolute;
		top: 0px;
		left: 0px;
	}


/** Generic page containers **/

.pageWidth
{
	' . XenForo_Template_Helper_Core::styleProperty('pageWidth') . '
}

.NoResponsive body
{
	';
if (XenForo_Template_Helper_Core::styleProperty('nonResponsiveMinWidth'))
{
$__output .= 'min-width: ' . XenForo_Template_Helper_Core::styleProperty('nonResponsiveMinWidth') . ';';
}
$__output .= '
}

#content .pageContent
{
	' . XenForo_Template_Helper_Core::styleProperty('content') . '
}

' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '#content .pageContent'
)) . '

';
$__compilerVar6 = '';
$__compilerVar6 .= '/* sidebar structural elements */

.mainContainer
{
	 float: left;
	 margin-right: -' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + 10) . 'px;
	 width: 100%;
}

	.mainContent
	{
		margin-right: ' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + 10) . 'px;
	}

.sidebar
{
	float: right;
	' . XenForo_Template_Helper_Core::styleProperty('sidebar') . '
}







/* visitor panel */

.sidebar .visitorPanel
{
	overflow: hidden; zoom: 1;
}

	.sidebar .visitorPanel h2 .muted
	{
		display: none;
	}

	.sidebar .visitorPanel .avatar
	{
		' . XenForo_Template_Helper_Core::styleProperty('visitorPanelAvatar') . '
		
		width: auto;
		height: auto;
	}
	
		.sidebar .visitorPanel .avatar img
		{
			width: ' . XenForo_Template_Helper_Core::styleProperty('visitorPanelAvatar.width') . ';
			height: ' . XenForo_Template_Helper_Core::styleProperty('visitorPanelAvatar.height') . ';
		}
	
	.sidebar .visitorPanel .username
	{
		' . XenForo_Template_Helper_Core::styleProperty('visitorPanelUsername') . '
	}
	
	.sidebar .visitorPanel .stats
	{
		' . XenForo_Template_Helper_Core::styleProperty('visitorPanelStats') . '
	}
	
	.sidebar .visitorPanel .stats .pairsJustified
	{
		line-height: normal;
	}













	
/* generic sidebar blocks */
		
.sidebar .section .primaryContent   h3,
.sidebar .section .secondaryContent h3,
.profilePage .mast .section.infoBlock h3
{
	' . XenForo_Template_Helper_Core::styleProperty('sidebarBlockHeading') . '
}

.sidebar .section .primaryContent   h3 a,
.sidebar .section .secondaryContent h3 a
{
	' . XenForo_Template_Helper_Core::styleProperty('sidebarBlockHeading.font') . '
}

.sidebar .section .secondaryContent .footnote,
.sidebar .section .secondaryContent .minorHeading
{
	' . XenForo_Template_Helper_Core::styleProperty('sidebarBlockFootnote') . '
}

	.sidebar .section .secondaryContent .minorHeading a
	{
		color: ' . XenForo_Template_Helper_Core::styleProperty('sidebarBlockFootnote.color') . ';
	}












/* list of users with 32px avatars, username and user title */

.sidebar .avatarList li
{
	' . XenForo_Template_Helper_Core::styleProperty('sidebarAvatarListItem') . '
}

	.sidebar .avatarList .avatar
	{
		' . XenForo_Template_Helper_Core::styleProperty('sidebarAvatarListAvatar') . '
		
		width: auto;
		height: auto;
	}
		
	.sidebar .avatarList .avatar img
	{
		width: ' . XenForo_Template_Helper_Core::styleProperty('sidebarAvatarListAvatar.width') . ';
		height: ' . XenForo_Template_Helper_Core::styleProperty('sidebarAvatarListAvatar.height') . ';
	}
	
	.sidebar .avatarList .username
	{
		' . XenForo_Template_Helper_Core::styleProperty('sidebarAvatarListUsername') . '
	}
	
	.sidebar .avatarList .userTitle
	{
		' . XenForo_Template_Helper_Core::styleProperty('sidebarAvatarListUserTitle') . '
	}









/* list of users */

.sidebar .userList
{
}

	.sidebar .userList .username
	{
		' . XenForo_Template_Helper_Core::styleProperty('sidebarUserListUsername') . '
	}

	.sidebar .userList .username.invisible
	{
		' . XenForo_Template_Helper_Core::styleProperty('sidebarUserListUsernameInvisible') . '
	}
	
	.sidebar .userList .username.followed
	{
		' . XenForo_Template_Helper_Core::styleProperty('sidebarUserListUsernameFollowed') . '
	}

	.sidebar .userList .moreLink
	{
		display: block;
	}
	
	
	
	
/* people you follow online now */

.followedOnline
{
	' . XenForo_Template_Helper_Core::styleProperty('sidebarFollowedUsers') . '
}

.followedOnline li
{
	' . XenForo_Template_Helper_Core::styleProperty('sidebarFollowedUsersItem') . '
}

	.followedOnline .avatar
	{
		' . XenForo_Template_Helper_Core::styleProperty('sidebarFollowedUsersAvatar') . '
		
		width: auto;
		height: auto;
	}
	
		.followedOnline .avatar img
		{
			width: ' . XenForo_Template_Helper_Core::styleProperty('sidebarFollowedUsersAvatar.width') . ';
			height: ' . XenForo_Template_Helper_Core::styleProperty('sidebarFollowedUsersAvatar.height') . ';
		}
	
	
	

	
	
/* call to action */

#SignupButton
{
	' . XenForo_Template_Helper_Core::styleProperty('signupButton') . '
}

	#SignupButton .inner
	{
		' . XenForo_Template_Helper_Core::styleProperty('signupButtonInner') . '
	}
	
	#SignupButton:hover .inner
	{
		' . XenForo_Template_Helper_Core::styleProperty('signupButtonHover') . '
	}
	
	#SignupButton:active
	{
		' . XenForo_Template_Helper_Core::styleProperty('signupButtonActive') . '
	}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar6 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ')
{
	.Responsive .mainContainer
	{
		 float: none;
		 margin-right: 0;
		 width: auto;
	}

		.Responsive .mainContent
		{
			margin-right: 0;
		}
	
	.Responsive .sidebar
	{
		float: none;
		margin: 0 auto;
	}

		.Responsive .sidebar .visitorPanel
		{
			display: none;
		}
}

@media (max-width:340px)
{
	.Responsive .sidebar
	{
		width: 100%;
	}
}
';
}
$__output .= $__compilerVar6;
unset($__compilerVar6);
$__output .= '

/** Text used in message bodies **/

.messageText
{
	' . XenForo_Template_Helper_Core::styleProperty('messageText') . '
}

	.messageText img,
	.messageText iframe,
	.messageText object,
	.messageText embed
	{
		max-width: 100%;
	}

/** Link groups and pagenav container **/

.pageNavLinkGroup
{
	display: table;
	*zoom: 1;
	table-layout: fixed;
	box-sizing: border-box;
	
	' . XenForo_Template_Helper_Core::styleProperty('pageNavLinkGroup') . '
}

opera:-o-prefocus, .pageNavLinkGroup
{
	display: block;
	overflow: hidden;
}

	.pageNavLinkGroup:after
	{
		content: ". .";
		display: block;
		word-spacing: 99in;
		overflow: hidden;
		height: 0;
		font-size: 0.13em;
		line-height: 0;
	}

	.pageNavLinkGroup .linkGroup
	{
		float: right;
	}

.linkGroup
{
}
	
	.linkGroup a
	{
		' . XenForo_Template_Helper_Core::styleProperty('linkGroupLink') . '
	}

		.linkGroup a.inline
		{
			padding: 0;
		}

	.linkGroup a,
	.linkGroup .Popup,
	.linkGroup .element
	{
		margin-left: ' . XenForo_Template_Helper_Core::styleProperty('linkGroupLinkSpacing') . ';
		display: block;
		float: left;
		';
if ($pageIsRtl)
{
$__output .= '*display: inline; *float: none; *zoom: 1;';
}
$__output .= '
	}
	
		.linkGroup .Popup a
		{
			margin-left: -2px;
			margin-right: -5px;
			*margin-left: ' . XenForo_Template_Helper_Core::styleProperty('linkGroupLinkSpacing') . ';
			padding: ' . XenForo_Template_Helper_Core::styleProperty('linkGroupLink.padding-top') . ' 5px;
		}

	.linkGroup .element
	{
		padding: 3px 0;
	}

/** Call to action buttons **/

a.callToAction
{
	' . XenForo_Template_Helper_Core::styleProperty('callToAction') . '
	
}

	a.callToAction span
	{
		' . XenForo_Template_Helper_Core::styleProperty('callToActionSpan') . '
	}
	
	a.callToAction:hover
	{
		text-decoration: none;
	}

		a.callToAction:hover span
		{
			' . XenForo_Template_Helper_Core::styleProperty('callToActionHover') . '
		}
		
		a.callToAction:active
		{
			/*position: relative;
			top: 2px;*/
		}
		
		a.callToAction:active span
		{
			' . XenForo_Template_Helper_Core::styleProperty('callToActionActive') . '
		}

/*********/

.avatarHeap
{
	overflow: hidden; zoom: 1;
}

	.avatarHeap ol
	{
		margin-right: -4px;
		margin-top: -4px;
	}
	
		.avatarHeap li
		{
			float: left;
			margin-right: 4px;
			margin-top: 4px;
		}
		
		.avatarHeap li .avatar
		{
			display: block;
		}
		
/*********/

.fbWidgetBlock .fb_iframe_widget,
.fbWidgetBlock .fb_iframe_widget > span,
.fbWidgetBlock .fb_iframe_widget iframe
{
	width: 100% !important;
}

/*********/

.tagBlock
{
	margin: 10px 0;
	font-size: 11px;
}

.tagList,
.tagList li
{
	display: inline;
}


.tagList .tag
{
	position: relative;
	display: inline-block;
	background: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightest') . ';
	margin-left: 9px;
	height: 14px;
	line-height: 14px;
	padding: 1px 4px 1px 6px;
	border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . ';
	border-left: none;
	border-radius: 4px;
	border-top-left-radius: 0;
	border-bottom-left-radius: 0;
	color: ' . XenForo_Template_Helper_Core::styleProperty('primaryMedium') . ';
	font-size: 11px;
	margin-bottom: 2px;
}

	.tagList .tag:hover
	{
		text-decoration: none;
		background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
	}

	.tagList .tag .arrow
	{
		position: absolute;
		display: block;
		height: 2px;
		width: 0;
		left: -9px;
		top: -1px;
		border-style: solid;
		border-width: 8px 9px 8px 0;
		border-color: transparent;
		border-right-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . ';
	}

		.tagList .tag .arrow:after
		{
			content: \'\';
			position: absolute;
			display: block;
			height: 2px;
			width: 0;
			left: 1px;
			top: -7px;
			border-style: solid;
			border-width: 7px 8px 7px 0;
			border-color: transparent;
			border-right-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightest') . ';
		}

		.tagList .tag:hover .arrow:after
		{
			border-right-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
		}

	.tagList .tag:after
	{
		content: \'\';
		position: absolute;
		left: -2px;
		top: 6px;
		display: block;
		height: 3px;
		width: 3px;
		border-radius: 50%;
		border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . ';
		background: ' . XenForo_Template_Helper_Core::styleProperty('contentBackground') . ';
	}

';
$__compilerVar7 = '';
$__compilerVar7 .= '/* User name classes */
';
if ($displayStyles)
{
foreach ($displayStyles AS $displayStyleId => $displayStyle)
{
if ($displayStyle['username_css'])
{
$__compilerVar7 .= '
.username .style' . htmlspecialchars($displayStyleId, ENT_QUOTES, 'UTF-8') . '
{
	' . $displayStyle['username_css'] . '
}
';
}
}
}
$__compilerVar7 .= '

.username .banned
{
	text-decoration: line-through;
}';
$__output .= $__compilerVar7;
unset($__compilerVar7);
$__output .= '

';
$__compilerVar8 = '';
$__compilerVar8 .= '.prefix
{
	' . XenForo_Template_Helper_Core::styleProperty('titlePrefix') . '
}

a.prefixLink:hover
{
	text-decoration: none;
}

a.prefixLink:hover .prefix
{
	' . XenForo_Template_Helper_Core::styleProperty('titlePrefixHover') . '
}

.prefix a { color: inherit; }

.prefix.prefixPrimary    { color: ' . XenForo_Template_Helper_Core::styleProperty('primaryMedium') . '; background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . '; border-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . '; }
.prefix.prefixSecondary  { color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryDark') . '; background-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLighter') . '; border-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLighter') . '; }

.prefix.prefixRed        { color: white; background-color: red; border-color: #F88; }
.prefix.prefixGreen      { color: white; background-color: green; border-color: green; }
.prefix.prefixOlive      { color: black; background-color: olive; border-color: olive; }
.prefix.prefixLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.prefix.prefixBlue       { color: white; background-color: blue; border-color: #88F; }
.prefix.prefixRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.prefix.prefixSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.prefix.prefixGray       { color: black; background-color: gray; border-color: #AAA; }
.prefix.prefixSilver     { color: black; background-color: silver; border-color: silver; }
.prefix.prefixYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.prefix.prefixOrange     { color: black; background-color: orange; border-color: #FFC520; }

.discussionListItem .prefix,
.searchResult .prefix
{
	' . XenForo_Template_Helper_Core::styleProperty('discussionListPrefix') . '
	
	font-weight: normal;
}

h1 .prefix
{
	' . XenForo_Template_Helper_Core::styleProperty('discussionListPrefix') . '
	
	line-height: normal;
}

.breadcrumb span.prefix,
.heading span.prefix
{
	' . XenForo_Template_Helper_Core::styleProperty('breadcrumbTitlePrefix') . '
	color: inherit;
}';
$__output .= $__compilerVar8;
unset($__compilerVar8);
$__output .= '

';
$__compilerVar9 = '';
$__compilerVar9 .= '.userBanner
{
	font-size: 11px;
	background: transparent url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/gradients/form-button-white-25px.png\') repeat-x top;
	padding: 1px 5px;
	border: 1px solid transparent;
	border-radius: 3px;
	box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
	text-align: center;
}

	.userBanner.wrapped
	{
		border-top-right-radius: 0;
		border-top-left-radius: 0;
		position: relative;
	}
		
		.userBanner.wrapped span
		{
			position: absolute;
			top: -4px;
			width: 5px;
			height: 4px;
			background-color: inherit;
		}
		
		.userBanner.wrapped span.before
		{
			border-top-left-radius: 3px;
			left: -1px;
		}
		
		.userBanner.wrapped span.after
		{
			border-top-right-radius: 3px;
			right: -1px;
		}
		
.userBanner.bannerHidden { background: none; box-shadow: none; border: none; }
.userBanner.bannerHidden.wrapped { margin-left: 0; margin-right: 0; }
.userBanner.bannerHidden.wrapped span { display: none; }

.userBanner.bannerStaff { color: ' . XenForo_Template_Helper_Core::styleProperty('primaryMedium') . '; background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . '; border-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . '; }
.userBanner.bannerStaff.wrapped span { background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . '; }

.userBanner.bannerPrimary { color: ' . XenForo_Template_Helper_Core::styleProperty('primaryMedium') . '; background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . '; border-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . '; }
.userBanner.bannerPrimary.wrapped span { background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . '; }

.userBanner.bannerSecondary { color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryDark') . '; background-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLighter') . '; border-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLighter') . '; }
.userBanner.bannerSecondary.wrapped span { background-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLighter') . '; }

.userBanner.bannerRed        { color: white; background-color: red; border-color: #F88; }
.userBanner.bannerRed.wrapped span { background-color: #F88; }

.userBanner.bannerGreen      { color: white; background-color: green; border-color: green; }
.userBanner.bannerGreen.wrapped span { background-color: green; }

.userBanner.bannerOlive      { color: black; background-color: olive; border-color: olive; }
.userBanner.bannerOlive.wrapped span { background-color: olive; }

.userBanner.bannerLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.userBanner.bannerLightGreen.wrapped span { background-color: lightgreen; }

.userBanner.bannerBlue       { color: white; background-color: blue; border-color: #88F; }
.userBanner.bannerBlue.wrapped span { background-color: #88F; }

.userBanner.bannerRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.userBanner.bannerRoyalBlue.wrapped span { background-color: #81A9E1; }

.userBanner.bannerSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.userBanner.bannerSkyBlue.wrapped span { background-color: skyblue; }

.userBanner.bannerGray       { color: black; background-color: gray; border-color: #AAA; }
.userBanner.bannerGray.wrapped span { background-color: #AAA; }

.userBanner.bannerSilver     { color: black; background-color: silver; border-color: silver; }
.userBanner.bannerSilver.wrapped span { background-color: silver; }

.userBanner.bannerYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.userBanner.bannerYellow.wrapped span { background-color: #E0E000; }

.userBanner.bannerOrange     { color: black; background-color: orange; border-color: #FFC520; }
.userBanner.bannerOrange.wrapped span { background-color: #FFC520; }';
$__output .= $__compilerVar9;
unset($__compilerVar9);
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ')
{
	.Responsive .pageWidth
	{
		' . XenForo_Template_Helper_Core::styleProperty('pageWidthResponsiveWide') . '
	}

	.Responsive #content .pageContent
	{
		padding-left: ' . (XenForo_Template_Helper_Core::styleProperty('content.padding-left') / 2) . 'px;
		padding-right: ' . (XenForo_Template_Helper_Core::styleProperty('content.padding-right') / 2) . 'px;
	}
}

@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
	.Responsive .pageWidth
	{
		' . XenForo_Template_Helper_Core::styleProperty('pageWidthResponsiveMedium') . '
	}
	
	.Responsive .forum_view #pageDescription,
	.Responsive .thread_view #pageDescription
	{
		display: none;
	}
}

@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
{
	.Responsive .pageWidth
	{
		' . XenForo_Template_Helper_Core::styleProperty('pageWidthResponsiveNarrow') . '
	}
	
	.Responsive .pageNavLinkGroup .PageNav,
	.Responsive .pageNavLinkGroup .linkGroup
	{
		clear: right;
	}
}
';
}
$__output .= '

';
$__compilerVar10 = '';
$__compilerVar10 .= '#logo a.textLogo{
	color: #fff;
	font-size: 30px;
	font-weight: 300;
	padding: 0 20px;
	text-shadow: rgba(0,0,0,0.3) 0px 2px 0px, rgba(0,0,0,0.15) 0px 0px 3px;
	display: block;
	line-height: 70px;
}
#logo a.textLogo:hover{ background: rgba(0,0,0,0.05); }

#logoBlock{
	background: #333333;
	background-image: -moz-linear-gradient(top, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0) 100%);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.03)), color-stop(100%,rgba(255,255,255,0)));
	background-image: -webkit-linear-gradient(top, rgba(255,255,255,0.03) 0%,rgba(255,255,255,0) 100%);
	background-image: -o-linear-gradient(top, rgba(255,255,255,0.03) 0%,rgba(255,255,255,0) 100%);
	background-image: -ms-linear-gradient(top, rgba(255,255,255,0.03) 0%,rgba(255,255,255,0) 100%);
	background-image: linear-gradient(to bottom, rgba(255,255,255,0.03) 0%,rgba(255,255,255,0) 100%);
	box-shadow: inset rgba(255,255,255,0.06) 0px 1px 0px, inset rgba(255,255,255,0.06) 0px -1px 0px;
}

#navigation .pageContent .tabLinks{ box-shadow: rgba(0,0,0,0.2) 0px -3px 6px; }
#content .pageContent{ box-shadow: rgba(0,0,0,0.2) 0px 0px 6px; }
.footer .pageContent{ box-shadow: rgba(0,0,0,0.2) 0px 0px 6px; }

.breadcrumb a{ color: #444; text-shadow: #fff 0px 1px 0px; }
.breadcrumb a:hover{ color: #222; }

/*
	Navigation background: Navigation Tabs Container
*/

/* Nav link */
.navTabs .navTab.PopupClosed a.navLink{
	/* background: ; */
	color: #fff;
	border-radius: 4px 4px 0px 0px;
}

.navTabs .navTab.PopupClosed:hover a.navLink{
	background: #3a3a3a;
	color: #fff;
}
/* Public tabs */
.navTabs .publicTabs .navLink{ padding: 0 20px; }

/* Open menu tab */
.navTabs .Popup .PopupControl.PopupOpen > a, .navTabs .Popup.PopupContainerControl.PopupOpen > a{
	color: #fff;
	background: #3a3a3a;
	border-radius: 2px 2px 0px 0px;
}

/* Active tab */
.navTabs .navTab.selected a.navLink,
.navTabs ul.visitorTabs > li.navTab.selected a.navLink{
	background: #eaeaea;
	background-image: -moz-linear-gradient(top, rgba(255,255,255,0.4) 0%, rgba(255,255,255,0) 100%);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.4)), color-stop(100%,rgba(255,255,255,0)));
	background-image: -webkit-linear-gradient(top, rgba(255,255,255,0.4) 0%,rgba(255,255,255,0) 100%);
	background-image: -o-linear-gradient(top, rgba(255,255,255,0.4) 0%,rgba(255,255,255,0) 100%);
	background-image: -ms-linear-gradient(top, rgba(255,255,255,0.4) 0%,rgba(255,255,255,0) 100%);
	background-image: linear-gradient(to bottom, rgba(255,255,255,0.4) 0%,rgba(255,255,255,0) 100%);
	color: #292929;
	text-shadow: rgba(255,255,255,1) 0px 1px 0px;
	box-shadow: inset rgba(255,255,255,1) 0px 1px 0px;
	position: relative;
	border-radius: 4px 4px 0px 0px;
	z-index: 10;
}

.navTabs .publicTabs .navTab.selected a.navLink:before,
.navTabs .publicTabs .navTab.selected a.navLink:after{
	content: "";
	width: 0px; height: 0px;
	position: absolute;
	bottom: 0px; left: -4px;
	background: url(' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenfocus/navActiveCurve.png) no-repeat 0 0;
	z-index: 10;
	width: 4px; height: 4px;
}

.navTabs .publicTabs .navTab.selected a.navLink:after{
	left: auto; right: -4px;
	background-position: -4px 0;
	z-index: 5;
}

/* Sub navigation background */
.navTabs .navTab.selected .tabLinks{
	background: #eaeaea;
	background-image: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.05) 100%);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.05)));
	background-image: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.05) 100%);
	background-image: -o-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.05) 100%);
	background-image: -ms-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.05) 100%);
	background-image: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.05) 100%);
	background-position: 0 0;
	border-bottom: 1px solid #cecece;
	text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
	font-weight: normal;
}

.navTabs .navTab.selected .tabLinks a{
	color: #555;
	line-height: 26px;
	border-radius: 3px;
	margin-top: 3px;
	padding: 0 10px;
}

.navTabs .navTab.selected .tabLinks a:hover, .navTabs .navTab.selected .tabLinks a:focus{
	color: #333;
	background: rgba(0,0,0,0.07);
	box-shadow: inset rgba(0,0,0,0.2) 0px 1px 3px, rgba(255,255,255,0.7) 0px 1px 0px;
}

.navTabs .navTab.PopupClosed, .navTabs .navTab.PopupClosed:hover{ background: none transparent; }

.navTab.account a strong:before,
.navTab.inbox a:before,
.navTab.alerts a:before{
	content: "";
	background: url(' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenfocus/userLinkIcons.png) no-repeat 0 0;
	width: 18px; height: 18px;
	display: inline-block;
	position: relative;
	top: 4px;
	margin-right: 6px;
}

.navTab.account:hover a strong:before{ background-position: 0 -18px; }
.navTab.account.selected a strong:before{ background-position: 0 -36px; }
.navTab.inbox a:before{ background-position: -18px 0px; }
.navTab.inbox:hover a:before{ background-position: -18px -18px; }
.navTab.inbox.selected a:before{ background-position: -18px -36px; }
.navTab.alerts a:before{ background-position: -36px 0px; }
.navTab.alerts:hover a:before{ background-position: -36px -18px; }
.navTab.alerts.selected a:before{ background-position: -36px -36px; }

.navTab a strong#VisitorExtraMenu_Counter:before{ display: none; }

.navTabs .navTab.selected.PopupOpen a.navLink{ border-radius: 0px; }

/* Sidebar icons */
.forum_list .sidebar .section h3:before{
	content: "";
	float: left;
	width: 16px; height: 16px;
	margin: -1px 6px -5px 0;
	background: url(' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenfocus/sidebarSprite.png) no-repeat 0 0;
}
.forum_list .sidebar .section.staffOnline h3:before{ background-position: 0 -16px; }
.forum_list .sidebar .section.membersOnline h3:before{ background-position: 0 -32px; }
.forum_list .sidebar .section .statsList h3:before{ background-position: 0 -48px; }
.forum_list .sidebar .section.sharePage h3:before{ background-position: 0 -64px; }

.sidebar .secondaryContent{ border-radius: 4px; }

body .message .publicControls a.item{ margin-left: 5px; margin-right: 0; }
body .message .publicControls .MultiQuoteControl{ padding: 5px 8px; border-radius: 3px; margin: -6px 5px -6px 0; }
body .message .publicControls .MultiQuoteControl.active{ background-color: #ddd; }

/* Post button icons */
.messageMeta .control:before{
	content: "";
	display: inline-block;
	vertical-align: top;
	width: 16px; height: 16px;
	margin: -1px 6px -5px -2px;
	background: url(' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenfocus/postButtonSprite.png) no-repeat 0 0;
}
.messageMeta .control.edit:before{ background-position: 0 -16px; }
.messageMeta .control.delete:before{ background-position: 0 -32px; }
.messageMeta .control.ip:before{ background-position: 0 -48px; }
.messageMeta .control.report:before{ background-position: 0 -64px; }
.messageMeta .control.reply:before{ background-position: 0 -80px; }
.messageMeta .control.like:before{ background-position: 0 -96px; }
.messageMeta .control.unlike:before{ background-position: 0 -112px; }
.messageMeta .control.warn:before{ background-position: 0 -112px; }
.messageMeta .control.deleteSpam:before{ background-position: 0 -128px; }

.message .messageMeta .privateControls .control{ opacity: 0; }
.message .messageMeta .publicControls .control{ opacity: 0.25; }
.message:hover .messageMeta .control{ opacity: 1; }

.message .publicControls .item.muted{ float: right; }

.message .messageInfo .newIndicator{ margin-right: -23px; }

.footerLegal, .footerLegal a, .footerLegal .pairsInline dt, #copyright{ color: #555; text-shadow: rgba(255,255,255,0.7) 0px 1px 0px; }
.footerLegal .pairsInline dt{ opacity: 0.7; }

/* Remove the following if search box is inline with nav */
.withSearch .navTabs .navTab.selected .blockLinksList{ margin-right: 8px; }

/* Adjust the following + 0 value depending on navigation borders */
.navTabs .navTab.selected .tabLinks{ top: ' . (XenForo_Template_Helper_Core::styleProperty('headerTabHeight') + 4) . 'px; }
#navigation .pageContent{ height: ' . (XenForo_Template_Helper_Core::styleProperty('headerTabHeight') * 2 + 1) . 'px; }
#headerMover #headerProxy{ height: ' . (XenForo_Template_Helper_Core::styleProperty('headerLogoHeight') + XenForo_Template_Helper_Core::styleProperty('headerTabHeight') * 2 + 5) . 'px; }

#header{ height: ' . (XenForo_Template_Helper_Core::styleProperty('headerLogoHeight') + XenForo_Template_Helper_Core::styleProperty('headerTabHeight') + 4) . 'px; }

#headerMover #headerProxy{ background: none transparent; }

#QuickSearch{ top: -129px; background: none transparent; }
.LoggedOut #QuickSearch{ top: -118px; }
#QuickSearch.active{ background-color: ' . XenForo_Template_Helper_Core::styleProperty('content.background-color') . '; box-shadow: 0px 3px 6px rgba(0,0,0,0.25); }
#QuickSearch:not(.active) #QuickSearchQuery{ border-color: #111; }

.pageContent > .sharePage{
	' . XenForo_Template_Helper_Core::styleProperty('secondaryContent.background') . '
	' . XenForo_Template_Helper_Core::styleProperty('secondaryContent.border') . '
	' . XenForo_Template_Helper_Core::styleProperty('secondaryContent.padding') . '
	border-radius: 4px;
}

.pageContent > .sharePage h3{
	color: ' . XenForo_Template_Helper_Core::styleProperty('sidebarBlockHeading.color') . ';
	font-size: 11px !important;
	' . XenForo_Template_Helper_Core::styleProperty('sidebarBlockHeading.padding') . '
	' . XenForo_Template_Helper_Core::styleProperty('sidebarBlockHeading.margin') . '
	' . XenForo_Template_Helper_Core::styleProperty('sidebarBlockHeading.border') . '
	border: 0;
	' . XenForo_Template_Helper_Core::styleProperty('sidebarBlockHeading.background') . '
	text-shadow: rgba(255,255,255,0.8) 0px 1px 0px;
	background-image: -moz-linear-gradient(top, rgba(255,255,255,0.35) 0%, rgba(255,255,255,0) 100%);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.35)), color-stop(100%,rgba(255,255,255,0)));
	background-image: -webkit-linear-gradient(top, rgba(255,255,255,0.35) 0%,rgba(255,255,255,0) 100%);
	background-image: -o-linear-gradient(top, rgba(255,255,255,0.35) 0%,rgba(255,255,255,0) 100%);
	background-image: -ms-linear-gradient(top, rgba(255,255,255,0.35) 0%,rgba(255,255,255,0) 100%);
	background-image: linear-gradient(to bottom, rgba(255,255,255,0.35) 0%,rgba(255,255,255,0) 100%);
	box-shadow: inset rgba(255,255,255,0.8) 0px 1px 0px;
	border-bottom: 1px solid #e2e2e2;
}

form#login input.button.primary{
	color: #fff;
	text-shadow: rgba(0,0,0,0.4) 0px -1px 0px;
	background: #555;
	background-image: -moz-linear-gradient(top, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.1)), color-stop(100%,rgba(255,255,255,0)));
	background-image: -webkit-linear-gradient(top, rgba(255,255,255,0.1) 0%,rgba(255,255,255,0) 100%);
	background-image: -o-linear-gradient(top, rgba(255,255,255,0.1) 0%,rgba(255,255,255,0) 100%);
	background-image: -ms-linear-gradient(top, rgba(255,255,255,0.1) 0%,rgba(255,255,255,0) 100%);
	background-image: linear-gradient(to bottom, rgba(255,255,255,0.1) 0%,rgba(255,255,255,0) 100%);
	border: 0;
	box-shadow: inset rgba(255,255,255,0.1) 0px 1px 0px, rgba(0,0,0,0.3) 0px 1px 3px;
}

form#login input.button.primary:hover{ background-color: #666; }

body #pageNodeNavigation{
	box-shadow: rgba(0,0,0,0.05) 0px 1px 4px;
	border-radius: 0;
}

.quickReply.message{ border: 0; }

.mainProfileColumn{ background: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightest') . '; }
#ProfilePanes{ padding-right: 8px; padding-bottom: 8px; }

/* Xenfocus fixes */

.node .nodeLastPost .lastThreadTitle span{
	width: 16px; height: 16px;
	overflow: hidden; text-indent: -999px;
	float: left;
	margin: 1px 5px -6px 0;
	background: url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/xenforo-ui-sprite.png\') no-repeat -80px -16px;
}
.skin_branding{ float: left; padding-left: 15px; }
.skin_branding a{ float: none; display: inline-block; padding-left: 0; padding-right: 0; }
.insideSidebar{ padding: 10px; }
.node .nodeLastPost .noMessages{ line-height: 36px !important; }
.messageUserBlock .userBanner{ margin-top: 6px; padding-top: 4px; padding-bottom: 4px; }
.quote{ padding-left: 3px; }
/* Fix wider search input */
.formPopup{ width: 256px; }
.xenForm .submitUnit{ padding-top: 5px; }
.navigationSideBar li a.secondaryContent{
	border: 0;
	' . XenForo_Template_Helper_Core::styleProperty('primaryContent.border') . ';
}
/* Clear index avatar in sidebar */
.section.visitorPanel .secondaryContent:after{ content: "."; display: block; height: 0; clear: both; visibility: hidden; overflow: hidden; }
.footerLinks a.globalFeed{ width: 16px; height: 16px; margin: 7px 5px 0 5px; }
.thread_create .surplusLabel .textCtrl{ padding-left: 5px; padding-right: 0px; }
.thread_create #ctrl_title_thread_create{ box-shadow: none; padding: 3px; }
.titleBar .prefix{ position: relative; top: -2px; }
.PageNav .pageNavHeader{ margin-right: 7px; }
.PageNav a.text{ padding: 0 7px; }
.messageUserBlock .userTitle{ padding-top: 4px; }
.userBanner{ box-shadow: rgba(0,0,0,0.1) 0px 1px 4px; }
#QuickSearch .moreOptions{ margin: 0 29px 0 115px; }
#QuickSearch .formPopup{ background: none transparent; }
#QuickSearch .Popup .arrowWidget{ margin-left: 2px; margin-top: 0; }
body #moderatorBar{ border: 0; }
/* Align userlinks correctly and remove border from secondaryContent */
.styleChooser .secondaryContent,
.navPopup .secondaryContent,
.secondaryContent.blockLinksList,
#AccountMenu .menuColumns, #jumpMenu .secondaryContent{ border: 0; }
.PageNav .scrollable{ height: 30px; }
.formOverlay.AvatarEditor .avatarOption{ background: none transparent; border: 0; }
.message.deleted .messageMeta .control{ margin-bottom: 0px; }
body .afterDiscussionListHandle{ margin-top: 25px; }
body .textWithCount.subHeading .text{ color: inherit; }
body .textWithCount.subHeading .count{ text-shadow: none; }
body .messageSimple .messageMeta{ line-height: 16px; }
.discussionListItemEdit .textCtrl{ text-shadow: none; }
input[type="submit"], input[type="reset"], label{ cursor: pointer; }
.xenForm.formOverlay .ctrlUnit div.textCtrl{ padding-right: 0; }
#ctrl_title_thread_edit{ box-shadow: none; }
.help_cookies .baseHtml, .help_terms .baseHtml{ padding: 10px; }
.messageText b{ font-weight: bold; }
#ProfilePostList .messageMeta .control:before{ display: none !important; }
body .xenOverlay.timedMessage{ background: rgba(255,255,255,0.88); }

/* Responsive tweaks */
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar10 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . '){
	.Responsive #QuickSearchPlaceholder{ top: -23px; }
	.Responsive #QuickSearch{ top: -25px; right: 15px; }
	.Responsive .message .messageMeta .control{ opacity: 1; }
	.Responsive .messageList .message{ padding: 10px 0; }
}

@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . '){
	/* .Responsive #headerMover #headerProxy{ height: 161px; }
	.Responsive #logo{ height: 80px; line-height: 80px; }
	.Responsive #logo a.textLogo{ line-height: 80px; } */
	.Responsive .navTabs{ border-radius: 0; }
	.Responsive .messageList .message{ border: 0; }
	.Responsive .messageUserBlock a.username{ line-height: 14px; }
	.Responsive .messageUserBlock .userBanner{ margin-top: 2px; padding-top: 2px; padding-bottom: 2px; }
	.Responsive .messageUserBlock h3.userText{ padding: 5px 0 0px 8px; }
	.Responsive .message .privateControls .item.muted{
		float: none;
		display: block;
		padding-bottom: 10px;
	}
	.Responsive .message .privateControls, .Responsive .message .publicControls{ float: none; }
	.Responsive .message .publicControls .item{ margin-left: 5px; }
	.Responsive .message .messageMeta .control{ margin-top: 0; margin-bottom: 2px; }
	.Responsive .messageMeta .control:before{ display: none; }
	.Responsive .skin_branding{ padding-left: 8px; }
	.Responsive .skin_branding span{ display: none; }
	
	.Responsive .navTab.account a strong:before,
	.Responsive .navTab.inbox a:before,
	.Responsive .navTab.alerts a:before{
		background-image: url(' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenfocus/userLinkIcons-2x.png);
		background-size: 54px 54px;
	}
	
	.Responsive .node .forumNodeInfo .nodeIcon,
	.Responsive .node .categoryForumNodeInfo .nodeIcon,
	.Responsive .node .forumNodeInfo.unread .nodeIcon,
	.Responsive .node .categoryForumNodeInfo.unread .nodeIcon,
	.Responsive .node .pageNodeInfo .nodeIcon,
	.Responsive .node .linkNodeInfo .nodeIcon
	{
		background-image: url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/node-sprite-2x.png\');
		background-size: 144px 36px;
	}
}
';
}
$__compilerVar10 .= '

.userBanner.aveline
{
color: white;
background-color: crimson;
}

.userBanner.jaded
{
color: white;
background-color: darkorchid;
border-color: orchid;
}

.userBanner.kryssyy
{
color: white;
background-color: Slategray;
}

.message .signature .bbCodeImage {
max-height: 100px !important;
max-width: 800px !important;
}

.messageUserBlock h3.userText {
text-align: center;
}';
$__output .= $__compilerVar10;
unset($__compilerVar10);
