<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '#logo a.textLogo{
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
$__output .= '
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
$__output .= '

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
