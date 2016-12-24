<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= XenForo_Template_Helper_Core::callHelper('clearfix', array(
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
$__output .= '
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
$__output .= '
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
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar'))
{
$__output .= '
	
	
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
$__output .= '
		.uix_sidebar_collapse.uix_sidebar_collapsed a .uix_icon:before 
		{
			content: "\\f03b";
		}
	';
}
else
{
$__output .= '
		.uix_sidebar_collapse.uix_sidebar_collapsed a .uix_icon:before 
		{
			content: "\\f03c";
		}
	';
}
$__output .= '
	
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
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar_sticky'))
{
$__output .= '
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
$__output .= ' 

';
if (XenForo_Template_Helper_Core::styleProperty('uix_sidebarIcons'))
{
$__output .= '
	
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
$__output .= '

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
$__output .= '
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
$__output .= '
}';
