<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.conversationTabs
{
	position: relative;
	padding-bottom: 10px;
}

	.conversationTabs .tabs
	{
		padding-left: 10px;
		padding-right: 60px;
	}

	.conversationTabs .addLink
	{
		position: absolute;
		right: 10px;
		top: 2px;
		font-size: 11px;
	}
	
	.conversationTabs .RemoveUserTabIcon
	{
		display: inline-block;
		background: transparent url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/xenforo-ui-sprite.png\') no-repeat -80px 0;
		width: 15px;
		height: 15px;
		line-height: 15px;
		text-align: center;
		
		opacity: .4;
		-webkit-transition: opacity 0.3s ease-in-out;
		-moz-transition: opacity 0.3s ease-in-out;
		transition: opacity 0.3s ease-in-out;
		
		font-size: 10px;
		
		overflow: hidden;
		white-space: nowrap;
		text-indent: 20000em;
		
		cursor: pointer;
		
		margin: 0 -4px -4px 0;
	}
	
		.conversationTabs li:hover .RemoveUserTabIcon,
		.Touch .conversationTabs .RemoveUserTabIcon
		{
			opacity: 1;
		}
		
			.conversationTabs li:hover .RemoveUserTabIcon:hover
			{
				background-position: -96px 0;
			}
			
				.conversationTabs li:hover .RemoveUserTabIcon:active
				{
					background-position: -112px 0;
				}';
$__compilerVar1 = '';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar1 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
{
	.conversationTabs .tabs
	{
		padding-right: 10px;
	}

	.conversationTabs .addLink
	{
		position: static;
		float: right;
	}
}
';
}
$__output .= $__compilerVar1;
unset($__compilerVar1);
