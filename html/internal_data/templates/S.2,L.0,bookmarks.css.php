<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.event .normalText
{
	color: ' . XenForo_Template_Helper_Core::styleProperty('textCtrlText') . ';
}
		.normalText a
		{
			color: ' . XenForo_Template_Helper_Core::styleProperty('textCtrlText') . ';
			text-decoration: none;
		}
		
		.normalText a[href]:hover
		{
			color: ' . XenForo_Template_Helper_Core::styleProperty('primaryMedium') . ';
			text-decoration: none;
		}
		
.event .blockLinksList .bookmarkFilter
{
}
	.blockLinksList .bookmarkFilter a
	{
	}
		
	.blockLinksList .bookmarkFilter a.active
	{
		background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . ';
	}
	
	.blockLinksList .bookmarkFilter a:hover,
	.blockLinksList .bookmarkFilter a:active
	{
		background-color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
	}
	
.event .bookmarkControls
{
	font-size: 11px;
	color: ' . XenForo_Template_Helper_Core::styleProperty('mutedTextColor') . ';
	margin-left: 30px;
}	
		.bookmarkControls a
		{
			color: ' . XenForo_Template_Helper_Core::styleProperty('mutedTextColor') . ';
		}
	
		.bookmarkControls a[href]:hover
		{
			color: ' . XenForo_Template_Helper_Core::styleProperty('dimmedTextColor') . ';
		}

			.bookmarkControls .controlEdit
			{
			}
			
				.bookmarkControls .controlEdit a
				{
				}
				
					.controlEdit a[href]:hover
					{
					}

			.bookmarkControls .controlDelete
			{
				margin-left: 12px;
			}
					
				.bookmarkControls .controlDelete a
				{
				}
				
					.controlDelete a[href]:hover
					{
					}
	
.event .bookmarkTag
{
	font-size: 11px;
	color: ' . XenForo_Template_Helper_Core::styleProperty('mutedTextColor') . ';
	margin-left: 30px;
}	
		.bookmarkTag a
		{
			color: ' . XenForo_Template_Helper_Core::styleProperty('mutedTextColor') . ';
		}
		
		.bookmarkTag a[href]:hover
		{
			color: ' . XenForo_Template_Helper_Core::styleProperty('dimmedTextColor') . ';
		}

/* used for line break placeholder */
.event .tinyText
{
	font-size: 6px;
}

/* used for line break placeholder */
.event .smallText
{
	font-size: 9px;
}

.event .controlsFloatRight
{
	float: right;
	';
if ($xenOptions['bookmarks_public'])
{
$__output .= '
		';
if ($pageIsRtl)
{
$__output .= '
			margin-top: 1px;
		';
}
else
{
$__output .= '
			margin-top: 3px;
		';
}
$__output .= '
	';
}
$__output .= '
}

.event .paginationCount
{
	float: right;
	margin-top: 5px;
}

.event .bookmarkNote
{
}

.event .buttonBookmarks
{
	position: absolute;
	width:52px;
	font-size: 11px;
	bottom: 2px;
}

.event .bookmarkPrivate
{
	display: inline-block;
	margin-left: 65px;
	font-size: 11px;
}

.event .bookmarkPublic
{
	display: inline-block;
	margin-left: 65px;
	font-size: 11px;
}

.event .DateTime
{
	color: ' . XenForo_Template_Helper_Core::styleProperty('mutedTextColor') . ';
}

.event .stickyIcon
{
	display: block;
	background: transparent url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/xenforo-ui-sprite.png\') no-repeat 0px -16px;
	vertical-align: text-top;
	width: 16px;
	height: 16px;
	overflow: hidden;
	float: right;
}

.tabsAnchor
{
	display: block;
	position: relative;
}

.bookmarksPage
{
}

.bookmarksPage .itemContainerSticky
{
	' . XenForo_Template_Helper_Core::styleProperty('bookmarksItemContainerSticky') . '
}

.bookmarksPage .itemContainer
{
	' . XenForo_Template_Helper_Core::styleProperty('bookmarksItemContainer') . '
}

.bookmarksPage .tabsPos
{
	display: block;
	position: absolute;
	top: -34px;
	z-index: 1;
}

.bookmarksPage .tagsPos
{
	display: block;
	position: absolute;
	top: -30px;
	right: 5px;
	font-weight: bold;
	font-size: 11px;
	float:right;
	z-index: 1;
}

.bookmarksPage .controlEditNewLine
{
	display: none;
}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:785px)
{
	';
if ($xenOptions['bookmarks_tags'] OR $xenOptions['bookmarks_public'] OR $xenOptions['bookmarks_navtab'])
{
$__output .= '
		.Responsive .bookmarksPage .tabsPos.numTabs4
		{
			display: block;
			position: static;
			z-index: 1;
		}
	';
}
$__output .= '
}
@media (max-width:770px)
{
	.Responsive .bookmarksPage .bookmarkTag
	{
		';
if ($xenOptions['bookmarks_edit_link_location_right'])
{
$__output .= '
			position: relative;
			left: 35px;
		';
}
$__output .= '
	}
	
	';
if ($xenOptions['bookmarks_tags'])
{
$__output .= '
		.bookmarksPage .controlEditNewLine
		{
			display: block;
		}
	';
}
$__output .= '
	
	.bookmarkControls .controlEdit
	{
		';
if ($xenOptions['bookmarks_tags'] AND !$xenOptions['bookmarks_edit_link_location_right'])
{
$__output .= '
	 		position: relative;
			left: 35px;
		';
}
$__output .= '
	}
	
	.bookmarkControls .controlDelete
	{
		';
if ($xenOptions['bookmarks_tags'] AND !$xenOptions['bookmarks_edit_link_location_right'])
{
$__output .= '
	 		position: relative;
			left: 35px;
		';
}
$__output .= '
	}
}
@media (max-width:695px)
{
	';
if ($xenOptions['bookmarks_tags'] OR $xenOptions['bookmarks_public'] OR $xenOptions['bookmarks_navtab'])
{
$__output .= '
		.Responsive .bookmarksPage .tabsPos.numTabs3
		{
			display: block;
			position: static;
			z-index: 1;
		}
	';
}
else
{
$__output .= '
		.Responsive .bookmarksPage .tabsPos.numTabs4
		{
			display: block;
			position: static;
			z-index: 1;
		}
	';
}
$__output .= '
}
@media (max-width:577px)
{
	';
if (!$xenOptions['bookmarks_tags'] AND !$xenOptions['bookmarks_public'] AND !$xenOptions['bookmarks_navtab'])
{
$__output .= '
		.Responsive .bookmarksPage .tabsPos.numTabs3
		{
			display: block;
			position: static;
			z-index: 1;
		}
	';
}
$__output .= '
}
@media (max-width:560px)
{
	.Responsive .bookmarksPage .tagsPos
	{
		display: none;
	}
	
	.Responsive .bookmarksPage .bookmarkTag
	{
		display: none;
	}
	
	.event .controlsFloatRight
	{
	 	float: none;
	}
	
	';
if (!$xenOptions['bookmarks_tags'])
{
$__output .= '
		.bookmarksPage .controlEditNewLine
		{
			display: block;
		}
	';
}
$__output .= '
	
	.bookmarkControls .controlEdit
	{
		';
if ($xenOptions['bookmarks_edit_link_location_right'] OR !$xenOptions['bookmarks_tags'])
{
$__output .= '
	 		position: relative;
			left: 35px;
		';
}
$__output .= '
	}
	
	.bookmarkControls .controlDelete
	{
		';
if ($xenOptions['bookmarks_edit_link_location_right'] OR !$xenOptions['bookmarks_tags'])
{
$__output .= '
	 		position: relative;
			left: 35px;
		';
}
$__output .= '
	}
}
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
{
	.Responsive .bookmarksPage .tabsPos
	{
		display: block;
		position: static;
		z-index: 1;
	}
	
	.Responsive .event .paginationCount
	{
		float: none;
	}
}
';
}
$__output .= '

.bookmarksPage .tabs.mainTabs
{
	padding: 0 ' . XenForo_Template_Helper_Core::styleProperty('bookmarksPageTabInset') . ';
	height: ' . (XenForo_Template_Helper_Core::styleProperty('bookmarksPageTabHeight') + 1) . 'px;
	position: relative;
	text-align: center;
}

	.bookmarksPage .tabs.mainTabs li a
	{
		padding-left: ' . XenForo_Template_Helper_Core::styleProperty('bookmarksPageTabHeight') . ';
		padding-right: ' . XenForo_Template_Helper_Core::styleProperty('bookmarksPageTabHeight') . ';		
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('bookmarksPageTabHeight') . ';
		height: ' . XenForo_Template_Helper_Core::styleProperty('bookmarksPageTabHeight') . ';
		
		' . XenForo_Template_Helper_Core::styleProperty('bookmarksPageTab') . '
	}
	
		.bookmarksPage .tabs.mainTabs li a:hover
		{
			' . XenForo_Template_Helper_Core::styleProperty('bookmarksPageTabHover') . '
		}
	
	.bookmarksPage .tabs.mainTabs li.active a
	{
		' . XenForo_Template_Helper_Core::styleProperty('bookmarksPageTabSelected') . '
	}';
