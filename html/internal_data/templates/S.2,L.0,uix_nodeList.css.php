<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.nodeList .categoryForumNodeInfo,
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
$__output .= '
	.nodeList .categoryStrip .nodeTitle .categoryStripIcon.hasGlyph {
		display: inline-block;
		color: ' . XenForo_Template_Helper_Core::styleProperty('categoryStrip.color') . ';
	}
';
}
$__output .= '





';
if (XenForo_Template_Helper_Core::styleProperty('uix_inlineCategoryDesc'))
{
$__output .= '
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
$__output .= '
	.nodeList .categoryStrip { height: auto; }
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNodeStatsOnHover'))
{
$__output .= '
	.node.level_2 .nodeStats { opacity: 0; }
	
	.node.level_2:hover .nodeStats { opacity: 1; }
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_inlineCategoryDesc') && XenForo_Template_Helper_Core::styleProperty('uix_showCategoryDescOnHover'))
{
$__output .= '
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
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_newNodeMarker'))
{
$__output .= '
.uix_nodeTitle_status {
	' . XenForo_Template_Helper_Core::styleProperty('uix_newNodeMarker_style') . '
}
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapseNodes') || XenForo_Template_Helper_Core::styleProperty('uix_collapseSticky'))
{
$__output .= '
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
$__output .= '





';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStatsIcons'))
{
$__output .= '
	.nodeStats dt,
	.nodeStats .dt { color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightish') . '; }
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_hideNodeStats'))
{
$__output .= '
	.node .nodeStats { display: none; }
';
}
$__output .= '





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
$__output .= '
	
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
$__output .= '
	
		
	
		.node.level_2:nth-child(odd) .nodeInfo { border-right: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-color') . '; }
		
		.node.level_2:nth-child(even) .nodeInfo { box-shadow: -1px 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-color') . '; }
		
		.node.level_2:first-child .nodeInfo { border-top-right-radius: 0; }
		
		.node.level_2:last-child:nth-child(even) .nodeInfo { border-bottom-left-radius: 0; }
		
		.node.level_2:nth-child(2):nth-child(even) .nodeInfo { border-top-right-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-radius') . '; }
		
		.node.level_2:nth-last-child(2):nth-child(odd) .nodeInfo { border-bottom-left-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_nodeInfo_style.border-radius') . '; }
		
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_halfWidthLastNode'))
{
$__output .= '
			.node.level_2:only-of-type .nodeInfo { border-right: 0; }
		';
}
else
{
$__output .= '
			.node.level_2:last-child:nth-child(odd) .nodeInfo { border-right: 0; }
		';
}
$__output .= '
		
		.node.level_2:last-child:nth-child(even) .nodeInfo { border-right: 0; }
		
	';
}
$__output .= '
	
	
';
}
$__output .= '


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
$__output .= '
	.node .nodeControls { display: none; }
';
}
$__output .= '

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
$__output .= '
	.node .nodeText { margin-right: 10px; }
	
	.node .nodeLastPost { display: none; }
	
	.node .nodeControls { right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ' !important; }
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeLastPostAvatar'))
{
$__output .= '
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
$__output .= '
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
			.Responsive .node .nodeLastPost .avatar {display: none;}
		}
	';
}
$__output .= '
';
}
$__output .= '

.node .nodeText .nodeTitle a,
.subForumList .nodeTitle a { color: inherit; }

.node .nodeText,
.node .subForumList { margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('nodeIcon.width') + XenForo_Template_Helper_Core::styleProperty('nodeIcon.margin-left') + XenForo_Template_Helper_Core::styleProperty('nodeIcon.margin-right')) . 'px; }

';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') != 3)
{
$__output .= '
@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
	.Responsive .node .nodeLastPost { margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('nodeIcon.width') + XenForo_Template_Helper_Core::styleProperty('nodeIcon.margin-left') + XenForo_Template_Helper_Core::styleProperty('nodeIcon.margin-right')) . 'px; }
}
';
}
$__output .= '




';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 2)
{
$__output .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 1)
{
$__output .= '
		';
$nodeStyleLevel = '';
$nodeStyleLevel .= 'level_2';
$__output .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 2)
{
$__output .= '
		';
$nodeStyleLevel = '';
$nodeStyleLevel .= 'level_1';
$__output .= '
	';
}
$__output .= '

	@media (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') + 1) . 'px) {
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_halfWidthLastNode'))
{
$__output .= '
			';
$filter = '';
$filter .= ':nth-last-child(n + 2)';
$__output .= '
		';
}
$__output .= '
		
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
$__output .= '
			.node.level_1 { box-sizing: border-box; }
			
			.node.level_1:nth-child(odd) { padding-right: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') / 2) . 'px; }
			
			.node.level_1:nth-child(even) { padding-left: ' . (XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') / 2) . 'px; }
			
			';
if (!XenForo_Template_Helper_Core::styleProperty('uix_halfWidthLastNode'))
{
$__output .= '
			.node.level_1:last-child:nth-child(odd) {
				padding-left: 0; 
				padding-right: 0;
			}
			';
}
$__output .= '
		';
}
$__output .= '
		
		
	}
';
}
