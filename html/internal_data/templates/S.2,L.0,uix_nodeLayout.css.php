<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.hasJs #forums,
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
