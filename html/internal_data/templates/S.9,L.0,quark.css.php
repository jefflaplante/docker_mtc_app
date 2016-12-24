<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeContentWrapper'))
{
$__output .= '
	#content .pageContent {box-shadow: none;}
	
';
}
$__output .= '


.breadBoxBottom {overflow: visible;}

.button.primary:hover {color: #FFF; text-shadow: 0 1px rgba(0,0,0,.5);}
.button.primary:active {color: #FFF; text-shadow: 0 -1px rgba(0,0,0,.5);}


.larger.textHeading,
.xenForm .sectionHeader,
.larger.textHeading a,
.xenForm .sectionHeader a {font-family: ' . XenForo_Template_Helper_Core::styleProperty('uix_secondaryFont') . ';}


/*********************
NAVIGATION
*********************/

.navTabs .navLeft .navTab.uix_leftMost .navLink { border-left: none; }
.navTabs .navRight .navTab.uix_rightMost .navLink { border-right: none; }

.hasTabLinks #navigation .navTabs .navTab.selected { box-shadow: 0 ' . XenForo_Template_Helper_Core::styleProperty('navTabs.border-bottom-width') . ' 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_tabLinks_style.background-color') . '; }

#navigation .pageContent {
	box-shadow: 0 2px 2px rgba(0,0,0,.5);
}

.navTabs .navTab {transition: linear background-color .1s;}

.navTabs .SplitCtrl:before { content: "\\f107" }

.navTabs .navTab.Popup.PopupOpen .SplitCtrl:before { content: "\\f106" }


/*********************
BREADCRUMB
*********************/

.uix_breadCrumb_toggleList li.toggleList_item { box-shadow: 0 2px 2px rgba(0,0,0,.5); }

.breadcrumb .crust .arrow span {transition: ease border-left-color .2s;}

/*********************
SIDEBAR
*********************/
.section > .secondaryContent > h3:before,
.resourceListSidebar > .secondaryContent > h3:before {color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . ';}

.sidebar .section .secondaryContent,
.resourceListSidebar .secondaryContent,
.container .xengallerySideBar .section .secondaryContent
{
	padding: 0;
	border: none;
	background: none;
}
.sidebar .section:first-child {margin-top: 0;}

.sidebar .secondaryContent {padding-left: 0; padding-right: 0;}


';
if (!XenForo_Template_Helper_Core::styleProperty('quark_sidebarEffect') == 0 || !XenForo_Template_Helper_Core::styleProperty('quark_sidebarEffect') == 1 || !XenForo_Template_Helper_Core::styleProperty('quark_sidebarEffect') == (''))
{
$__output .= '
	@media (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') + 1) . 'px) {
		aside .sidebar {
			opacity: ' . XenForo_Template_Helper_Core::styleProperty('quark_sidebarEffect') . ';
			transition: ease opacity .3s;
		}
		aside .sidebar:hover {opacity: 1;}
	}
';
}
$__output .= '

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') 
{
	.Responsive .sidebar
	{
		margin-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
	}
}
	
/*********************
SEARCH
*********************/


#QuickSearch {transition: ease .3s, linear background-color .1s;}

#QuickSearch:not(.show) #QuickSearchQuery {
	box-shadow: 0 2px 2px rgba(0,0,0,.15);
	border-width: 0 0 1px 0;
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeBorderRadius') . ';
}

#QuickSearch:not(.active) #QuickSearchQuery {
	background: ' . XenForo_Template_Helper_Core::styleProperty('uix_secondaryColor') . ';
}

/*********************
FORUM NODES
*********************/

.uix_collapseNodes, 
.breadcrumb .jumpMenuTrigger {
	opacity: .6;
	transition: ease opacity .3s;
}

.node .nodeInfo .tinyIcon[href] {
	opacity: .3;
	transition: ease opacity .3s;
}

.uix_collapseNodes:hover, 
.breadcrumb .jumpMenuTrigger:hover,
.node .nodeInfo:hover .tinyIcon[href], 
.Touch .node .tinyIcon {
	opacity: 1;
}

.nodeStats dt, 
.nodeStats .dt {color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . ';}

.subForumsPopup .PopupOpen .dt:before {color: #FFF;}


';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 3)
{
$__output .= '

	.node .nodeLastPost {
		background: none;
		border: none;
	}

	.node.audentio_grid_lg .nodeLastPost {
		' . XenForo_Template_Helper_Core::styleProperty('nodeLastPost.border') . '
		' . XenForo_Template_Helper_Core::styleProperty('nodeLastPost.padding') . '
		' . XenForo_Template_Helper_Core::styleProperty('nodeLastPost.background') . '
		margin: 0;
	}

';
}
else
{
$__output .= '
	
	.node.level_1 > .nodeList {
		  margin: 5px -5px 0 -5px;
	}
	
	.node.level_2 {
		box-sizing: border-box;
		padding: 5px;
	}

';
}
$__output .= '

/*********************
MESSAGE LIST
*********************/

.conversation_view .message:first-child {border-width: 1px 0 0 0;}
.conversation_view .messageList {padding-right: 0;}

.messageSimple {
	padding: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ' !important;
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';
}

.messageList .message:first-child {margin-bottom: 0;}

.messageList .message:last-child {
	margin-top: 0;
	border-width: 1px 0;
}

.messageList .message {
	margin: 0;
	border-radius: 0;
	border-width: 1px 0 0 0;
}

.messageList .message.sectionMain:nth-child(odd){background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';}

.attachedFiles .attachmentList {background: none !important;}

.profilePage .mast,
.resourceListSidebar,
.container .xengallerySideBar {
	background: ' . XenForo_Template_Helper_Core::styleProperty('uix_secondaryColor') . ';
	padding: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	box-sizing: border-box;
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeBorderRadius') . ';
	box-shadow: 0 2px 2px rgba(0,0,0,.2);
	border-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ' solid 1px;
}

.profilePage .mast > .avatarScaler img {
	max-width: ' . (XenForo_Template_Helper_Core::styleProperty('profilePageSidebarWidth') - (2 * XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall'))) . 'px;
}



/*********************
FOOTER
*********************/

.footer .choosers a:after {content: "\\f107";}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__output .= '
	.footer .pageContent {position: relative;}
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1 && XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && XenForo_Template_Helper_Core::styleProperty('uix_stickyGlobalScrollUp') == 0)
{
$__output .= '

	@media (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') + 1) . 'px) {
		#navigation .pageContent {
			-webkit-transition:ease margin-left .5s;
		   	-moz-transition:ease margin-left .5s;
		    	-o-transition:ease margin-left .5s;
		        transition:ease margin-left .5s;
		}						
	}	
	
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('quark_removeContainerWrapper'))
{
$__output .= '

	.mainContainer .mainContent, 
	.mainContainer_noSidebar,
	.resourceListMain,
	.gridSection {
		background: none;
		box-shadow: none;
		border: none;
		padding: 0;
	}
	
	.profilePage .mainProfileColumn,
	.profilePage .tabs.mainTabs li.active a,
	.resourceListMain,
	.resourceListMain .tabs li.active a,
	.tabs li.active a, 
	.tabs.noLinks li.active {background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightest') . ';}
	
';
}
$__output .= '

.uix_offCanvasVisitorTabs .primaryContent h3 {
	color: #FFF
}';
