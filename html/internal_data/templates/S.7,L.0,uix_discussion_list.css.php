<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.discussionList .discussionListItem.sticky .posterAvatar, 
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
$__output .= '
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
$__output .= '

.discussionList .heading {
	position: relative;
}
.uix_stickyThreadWrapper .uix_collapseNodes {line-height: initial;}
.uix_stickyThreadWrapper .uix_collapseNodes .uix_icon {
	line-height: initial;
	vertical-align: middle;
	vertical-align: -webkit-baseline-middle;
}';
