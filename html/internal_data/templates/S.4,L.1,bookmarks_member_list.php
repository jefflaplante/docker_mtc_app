<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= '' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '\'s Bookmarks';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:members', $user, array()), 'value' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'));
$__output .= '

';
$this->addRequiredExternal('css', 'events');
$__output .= '
';
$this->addRequiredExternal('css', 'bookmarks');
$__output .= '

<div class="event bookmarksPage">
';
if ($bookmarks)
{
$__output .= '

	<ol>
		';
foreach ($bookmarks AS $item)
{
$__output .= '
			';
$__compilerVar1 = '';
$__compilerVar1 .= '<li id="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" name="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarksListItem ' . (($item['sticky']) ? ('itemContainerSticky') : ('itemContainer')) . '">

';
if ($item['content_type'] != ('xengallery_media'))
{
$__compilerVar1 .= '
<span class="event">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($item,false,array(
'user' => '$item',
'size' => 's',
'class' => 'icon'
),'')) . '
</span>
';
}
$__compilerVar1 .= '

<div class="content ' . (($item['content_type'] == ('xengallery_media')) ? ('contentMedia') : ('')) . '">

<span name="stickyIcon' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="stickyIcon" title="' . 'Sticky' . '" ' . (($item['sticky']) ? ('style="display:block;"') : ('style="display:none;"')) . '></span>

' . $item['listTemplate'] . '

</div>
<div style="position:relative;">

';
if ($isOnAccountPage)
{
$__compilerVar1 .= '
	';
if ($xenOptions['bookmarks_public'])
{
$__compilerVar1 .= '
		<input type="submit" name="fliptext' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" value="' . (($item['public']) ? ('Public') : ('Private')) . '" class="button buttonBookmarks" onClick="document.getElementById(\'bookmark_id\').value=' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" />
		<span class="bookmarkPrivate">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
else
{
$__compilerVar1 .= '
		<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
$__compilerVar1 .= '
	<div class="controlEditNewLine"></div>
	<span name="bookmarkTag' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarkTag' . (($xenOptions['bookmarks_edit_link_location_right']) ? ('') : (' controlsFloatRight')) . '">
		';
if ($xenOptions['bookmarks_tags'] AND $item['bookmark_tag'])
{
$__compilerVar1 .= '<a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', '', array(
'tag' => $item['bookmark_tag']
)) . '">' . htmlspecialchars($item['bookmark_tag'], ENT_QUOTES, 'UTF-8') . '</a>';
}
$__compilerVar1 .= '
	</span>
	<span class="bookmarkControls' . (($xenOptions['bookmarks_edit_link_location_right']) ? (' controlsFloatRight') : ('')) . '">
		<span class="controlEdit"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/listItemEdit', $item, array()) . '" class="EditControl">' . 'Edit' . '</a></span>
		<span class="controlDelete"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/delete', $item, array()) . '" class="OverlayTrigger">' . 'Delete' . '</a></span>
	</span>
';
}
else
{
$__compilerVar1 .= '
	<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
';
}
$__compilerVar1 .= '

</div>
</li>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
		';
}
$__output .= '
		<div class="pageNavLinkGroup">
			' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($bookmarksPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalBookmarkItems, ENT_QUOTES, 'UTF-8'), htmlspecialchars($bookmarksPage, ENT_QUOTES, 'UTF-8'), 'members/#bookmarks', $user, array(
'page' => $page
), false, array())) . '
		</div>
	</ol>

';
}
else
{
$__output .= '

	<p>' . '' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' does not have any public bookmarks to share at the moment.' . '</p>

';
}
$__output .= '
</div>';
