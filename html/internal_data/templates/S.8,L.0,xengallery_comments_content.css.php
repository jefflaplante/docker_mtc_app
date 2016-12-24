<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '#CommentForm
{
	margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('messageUserInfo.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth')) . 'px;
	' . XenForo_Template_Helper_Core::styleProperty('messageInfo') . '
}

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
	#CommentForm {margin-left: 0;}
}

#CommentForm textarea
{
	width: 100%;
	*width: 98%;
	height: 117px;
	box-sizing: border-box;
}

#CommentForm .submitUnit
{
	margin-top: 10px;
	text-align: right;
}

.commentContent iframe
{
	display: block;
	max-width: 100%;
}

.xenPreviewTooltip
{
	width: 220px;
}

.commentList .subHeading
{
	margin-bottom: 15px;
}

.rateBlock
{
	margin: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' auto;
	border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ';
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';
	padding: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	text-align: center;
	overflow: hidden; zoom: 1;
}

.rateBlock .rating
{
	display: inline-block;
	text-align: left;
	width: 94px;
}

.rateBlock .Hint
{
	display: inline-block;
	width: 0;
	white-space: nowrap;
	word-wrap: normal;
}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
	@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
	{
		.Responsive .commentList .messageUserInfo
		{
			display: none;
		}
		
		.Responsive #CommentForm
		{
			margin-left: 0;
		}
	}
';
}
