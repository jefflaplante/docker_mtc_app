<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.threadListItem
{
	overflow: hidden; zoom: 1;

	margin: 5px 0;
	padding-top: 5px;
	border-top: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
}

.threadListItem:first-child
{
	border-top: none;
	padding-top: 0;
}

.threadListItem .avatar
{
	float: left;
	font-size: 0;
}

	.threadListItem .avatar img
	{
		width: 24px;
		height: 24px;
	}
	
.threadListItem .messageInfo
{
	margin-left: 34px;
}

.threadListItem .title
{
	padding: 1px 0;
}

.threadListItem .title,
.threadListItem .additionalRow
{
	overflow: hidden;
	white-space: nowrap;
	word-wrap: normal;
	text-overflow: ellipsis;
}';
