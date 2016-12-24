<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.tagCloud
{
	overflow: hidden;
}

.tagCloud li
{
	display: inline-block;
	margin-right: 8px;
}

.tagCloud li:last-child
{
	margin-right: 0;
}

.tagCloud .tagCloudTag1 { font-size: 100%; color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightish') . '; }
.tagCloud .tagCloudTag2 { font-size: 100%; }
.tagCloud .tagCloudTag3 { font-size: 125%; }
.tagCloud .tagCloudTag4 { font-size: 150%; }
.tagCloud .tagCloudTag5 { font-size: 175%; }
.tagCloud .tagCloudTag6 { font-size: 200%; }
.tagCloud .tagCloudTag7 { font-size: 225%; color: ' . XenForo_Template_Helper_Core::styleProperty('primaryDark') . '; }';
