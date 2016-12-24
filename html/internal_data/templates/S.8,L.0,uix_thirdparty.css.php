<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '

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
$__output .= '
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
$__output .= '



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
$__output .= '.resourceListSidebar, .resourceListMain {margin-bottom: 0;}';
}
$__output .= '



';
if (XenForo_Template_Helper_Core::styleProperty('uix_showCategoryDescOnHover'))
{
$__output .= '
	#taigachat_full.nodeList .categoryStrip .nodeDescription {opacity: 1;}
	#taigachat_full.nodeList .categoryStrip {height: auto;}
';
}
$__output .= '





.mainContainer .mainContent > *:first-child > .sectionMain, .mainContainer_noSidebar > *:first-child {
    margin-top: 0;
}

.xmgCarouselContainer .sectionMain .titleStrip h3 {line-height: ' . XenForo_Template_Helper_Core::styleProperty('categoryStrip.height') . ';}
.ratings { font-size: 16px; }

.ratings .star { font-size: inherit; }

';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= '
	.xengallerySubMenu {
		display: none !important;
	}
';
}
$__output .= '

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
$__output .= '
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
$__output .= '




';
if (XenForo_Template_Helper_Core::styleProperty('uix_sidebarIcons'))
{
$__output .= '


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
$__output .= '





.topRightBlocks,
.midRightBlocks,
.btmRightBlocks { float: none; }';
