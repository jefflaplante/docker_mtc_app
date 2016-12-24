<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.mainContainer .mainContent,
.mainContainer_noSidebar
{
	padding: 0;
}

/* ##### User and Mod bar ##### */

#userBar .navTabs .scratch_socialTab {
	background: transparent !important;
}

@media only screen and (max-width : ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
	.scratch_socialTab {display: none !important;}
	
}


/* ##### Navigation ##### */
.navTab.login .navLink > .uix_icon {display: none !important;}


/* ##### Header ##### */
#header {
	border-style: solid;
	border-width: 0px 0px 5px;
	-moz-border-image: url(\' ' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/scratch/scratchBorder.png\') 5 repeat;
	-webkit-border-image: url(\' ' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/scratch/scratchBorder.png\') 5 repeat;
	-o-border-image: url(\' ' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/scratch/scratchBorder.png\') 5 repeat;
	border-image: url(\' ' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/scratch/scratchBorder.png\') 5 repeat;
}


/* ##### Sidebar ##### */

#SignupButton {margin: -' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . '; }




/* ##### Welcome Back ##### */
#uix_welcomeBlock .callToAction {
	box-shadow: 0 -2px 0 0 rgba(0, 0, 0, 0.1) inset; 
	text-align: center;
	text-shadow: 0 2px 0 rgba(0,0,0,.2);
}
#uix_welcomeBlock .callToAction span {background-color: rgba(0, 0, 0, 0.15); text-transform: uppercase; font-weight: 400; font-size: 16px;}
@media only screen and (max-width : ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
	#uix_welcomeBlock .uix_welcomeBlock_content, .Responsive #uix_welcomeBlock .uix_welcomeBlock_content {padding: 10px;}
}
@media only screen and (min-width : ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') + 1) . 'px) {
	#uix_welcomeBlock .callToAction {
		position: absolute; 
		right: 0; 
		top: 0; 
		margin-right: 30px; 
		margin-top: 26px; 
		width: 130px;
	}
}


/* ##### Nodes ##### */

@media only screen and (min-width: 1024px) {

	.node .nodeLastPost {
		position: absolute;
		right: 240px;
		top: 10px;
		text-align: right;
	}
	.node .nodeStats {
		margin-top: 0;
		line-height: 20px;
		position: absolute;
		right: 0;
		top: 26px;
		max-width: 210px;
		}
		
	.node .nodeText .nodeTitle {padding-top: 10px;}
	
	@media (min-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') {
		.node .nodeText {margin-right: 460px;}	
	}
		
	.nodeStats.pairsInline dl {border-left: dashed; border-width: 2px; border-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLight') . '; min-width: 100px;}
	.nodeStats.pairsInline dd {color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . '; font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeFontSize') . ';}
	.nodeStats.pairsInline dt {color: ' . XenForo_Template_Helper_Core::styleProperty('mutedTextColor') . '; text-transform: uppercase; font-size: 10px;}
	
	.nodeStats.pairsInline dl, .nodeStats.pairsInline dt, .nodeStats.pairsInline dd {display: block; text-align: center;}
	.node .nodeControls {right: 220px; top: 6px;}

	
}
@media only screen and (max-width: 1023px) {

	.node .nodeLastPost {top: 10px;}
	.pairsInline dl, .pairsInline dt, .pairsInline dd {display: inline-block;}
	.pairsInline dd, .pairsInline dt {margin-right: 4px;}

}

.node .nodeInfo.primaryContent, .node .nodeInfo.secondaryContent {padding: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ' 0;}

.node .forumNodeInfo.unread .nodeIcon, 
.node .categoryForumNodeInfo.unread .nodeIcon,
.node .forumNodeInfo .nodeIcon, 
.node .categoryForumNodeInfo .nodeIcon,
.node .pageNodeInfo .nodeIcon,
.node .linkNodeInfo .nodeIcon {
	color: ' . XenForo_Template_Helper_Core::styleProperty('uix_secondaryColor') . '; 
	text-transform: uppercase;
	text-align: center;
	line-height: ' . XenForo_Template_Helper_Core::styleProperty('nodeIcon.height') . ';
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeBorderRadius') . ';
	font-weight: bold;
}
.node .forumNodeInfo.unread .nodeIcon, .node .categoryForumNodeInfo.unread .nodeIcon {
	color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightest') . ';
	background: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . ' url(" ' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/scratch/speck.png ") no-repeat right bottom;
}

';
if (!XenForo_Template_Helper_Core::styleProperty('uix_nodeIcons'))
{
$__output .= '
.node .forumNodeInfo.unread .nodeIcon:before, .node .categoryForumNodeInfo.unread .nodeIcon:before {content: "' . 'New' . '";}
.node .forumNodeInfo .nodeIcon:before, .node .categoryForumNodeInfo .nodeIcon:before {content: "' . 'Old' . '";}
';
}
else
{
$__output .= '
.node .forumNodeInfo .nodeIcon:before, .node .categoryForumNodeInfo .nodeIcon:before, .node .pageNodeInfo .nodeIcon:before, .node .linkNodeInfo .nodeIcon:before {
	font-size: 30px;
	line-height: 30px;
	vertical-align: middle;
	height: auto;
	color: inherit;
}
.node .forumNodeInfo.unread .nodeIcon:before {color: #FFF;}
';
}
$__output .= '

/* ##### Footer ##### */


footer .footer .pageContent,
footer .footerLegal .pageContent {
	border-style: solid;
	border-width: 5px 0px 0px 0px;
	-moz-border-image: url(\' ' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/scratch/scratchBorder.png\') 5 repeat;
	-webkit-border-image: url(\' ' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/scratch/scratchBorder.png\') 5 repeat;
	-o-border-image: url(\' ' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/scratch/scratchBorder.png\') 5 repeat;
	border-image: url(\' ' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/scratch/scratchBorder.png\') 5 repeat;
	border-bottom: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
}

footer .footerLegal .pageContent {border-bottom: 0;}

.topLink .uix_icon-jumpToTop {display: none;}
.topLink .hide {display: inline-block;}

footer .callToAction span {
	padding-left: 30px;
	padding-right: 30px;
} 

#copyright, .pairsInline.debugInfo {text-align: center; float: none;}
footer .pairsInline dt {color: ' . XenForo_Template_Helper_Core::styleProperty('uix_secondaryColor') . '}

#ProfilePanes .primaryContent {padding: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';}

.discussionListItem .titleText {padding: 10px;}
.discussionListItem .posterAvatar, .discussionListItem .stats {	background: transparent; border: dashed 2px ' . XenForo_Template_Helper_Core::styleProperty('secondaryLight') . '; border-width: 0 2px;}
.discussionListItem .posterAvatar {border-left: none; padding-right: 4px;}

.discussionListItem .stats dl {border: none;}
.discussionListItem .stats .major dt,
.discussionListItem .stats .minor dt {color: ' . XenForo_Template_Helper_Core::styleProperty('mutedTextColor') . '; text-transform: uppercase; font-size: 10px;}
.discussionListItem .stats .major dd {color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . '; font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeFontSize') . ';}

/* ##### Icons ##### */
.uix_icon-collapse:before {content: \'\\f077\';}
.node.collapsed .uix_collapseNodes .uix_icon:before {content: \'\\f078\';}
.uix_icon-sitemap:before {content: \'\\f041\'}


.uix_sidePane ul .SplitCtrl {background: none; border: none}';
