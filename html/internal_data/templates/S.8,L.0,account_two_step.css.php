<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.twoStepProvider
{
	overflow: hidden;
}

.twoStepTitle
{
	font-size: 11pt;
	margin-bottom: 3px;
}

	.twoStepProvider.enabled .twoStepTitle
	{
		font-weight: bold;
	}

.twoStepDescription
{
	color: ' . XenForo_Template_Helper_Core::styleProperty('mutedTextColor') . ';
}

.twoStepButtonContainer
{
	float: right;
	margin-left: 5px
}

.twoStepProvider .button
{
	min-width: 80px;
	display: block;
	margin-top: 5px;
}

	.twoStepProvider .button:first-child
	{
		margin-top: 0;
	}
	
.twoStepDisableTrustContainer
{
	overflow: hidden;
}

.twoStepDisableTrustButton
{
	float: right;
	margin-left: 5px;
}';
