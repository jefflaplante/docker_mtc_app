<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.actionFilterRow
{
	' . XenForo_Template_Helper_Core::styleProperty('tabsContainer') . '
	
	display: table;
	width: 100%;
	box-sizing: border-box;

	margin-bottom: 5px;
	font-size: 11px;
}

	.actionFilterRow .extraLinks
	{
		float: right;
		margin: 2px 0;
		min-height: 20px;
		line-height: 20px;
	}
	
		.actionFilterRow .extraLinks .Popup
		{
			display: inline-block;
			margin-left: 10px;
		}
		
	.actionFilterRow .filterList
	{
		float: left;
		margin: 2px 0;
	}
	
	.actionFilterRow .filtersHeading
	{
		display: inline;
		margin-right: 5px;
		color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLight') . ';
		font-weight: bold;
	}
	
	.actionFilterRow .removeFilter,
	.actionFilterRow .removeAllFilters
	{
		display: inline-block;
		color: ' . XenForo_Template_Helper_Core::styleProperty('primaryMedium') . ';
		background: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ' url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/gradients/form-button-white-25px.png\') repeat-x top;
		border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
		border-radius: 5px;
		padding: 2px 10px;
	}
	
		.actionFilterRow .gadget
		{
			color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLight') . ';
			font-weight: bold;
			margin-left: 3px;
		}

	
		.actionFilterRow .removeFilter:hover,
		.actionFilterRow .removeAllFilters:hover
		{
			background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightest') . ';
			text-decoration: none;
			color: ' . XenForo_Template_Helper_Core::styleProperty('mutedTextColor') . ';
			box-shadow: 1px 1px 5px rgba(0,0,0, 0.15);
		}
		
	.actionFilterRow .pairsInline dt
	{
		display: none;
	}
	
	.actionFilterRow .filterPairs,
	.actionFilterRow .removeAll
	{
		display: inline;
	}
		
		.actionFilterRow .removeAllFilters
		{
			padding: 2px 6px;
		}';
