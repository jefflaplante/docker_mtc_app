<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '

::selection{
	background: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . ';
	color: #FFF;
	}
	
body::-webkit-selection {
	background: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . ';
	color: #FFF;
	}
	
body::-moz-selection {
	background: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . ';
	color: #FFF;
	}
	
#navigation .pageContent {
	box-shadow: 0 2px 2px rgba(0,0,0,.2);
}
	
.uix_breadCrumb_toggleList li.toggleList_item {box-shadow: 0 2px 2px rgba(0,0,0,.2);}

.node .unread .nodeText .nodeTitle {color: ' . XenForo_Template_Helper_Core::styleProperty('primaryDarker') . ';}

.uix_nodeStyle_1 > .nodeList > li .nodeLastPost, .forum_view .nodeList > li .nodeLastPost {background-color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLightest') . ';}

.discussionListItem .posterAvatar, .discussionListItem .stats {background-color: transparent;}
.discussionListItem {background-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_secondaryColor') . ';}

.messageList .message.sectionMain:nth-child(odd) {background-color: rgb(235,235,235);}';
