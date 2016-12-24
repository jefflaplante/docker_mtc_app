<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<li id="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" name="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarksListItem ' . (($item['sticky']) ? ('itemContainerSticky') : ('itemContainer')) . '">

';
if ($item['content_type'] != ('xengallery_media'))
{
$__output .= '
<span class="event">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($item,false,array(
'user' => '$item',
'size' => 's',
'class' => 'icon'
),'')) . '
</span>
';
}
$__output .= '

<div class="content ' . (($item['content_type'] == ('xengallery_media')) ? ('contentMedia') : ('')) . '">

<span name="stickyIcon' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="stickyIcon" title="' . 'Sticky' . '" ' . (($item['sticky']) ? ('style="display:block;"') : ('style="display:none;"')) . '></span>

' . $item['listTemplate'] . '

</div>
<div style="position:relative;">

';
if ($isOnAccountPage)
{
$__output .= '
	';
if ($xenOptions['bookmarks_public'])
{
$__output .= '
		<input type="submit" name="fliptext' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" value="' . (($item['public']) ? ('Public') : ('Private')) . '" class="button buttonBookmarks" onClick="document.getElementById(\'bookmark_id\').value=' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" />
		<span class="bookmarkPrivate">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
else
{
$__output .= '
		<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
$__output .= '
	<div class="controlEditNewLine"></div>
	<span name="bookmarkTag' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarkTag' . (($xenOptions['bookmarks_edit_link_location_right']) ? ('') : (' controlsFloatRight')) . '">
		';
if ($xenOptions['bookmarks_tags'] AND $item['bookmark_tag'])
{
$__output .= '<a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', '', array(
'tag' => $item['bookmark_tag']
)) . '">' . htmlspecialchars($item['bookmark_tag'], ENT_QUOTES, 'UTF-8') . '</a>';
}
$__output .= '
	</span>
	<span class="bookmarkControls' . (($xenOptions['bookmarks_edit_link_location_right']) ? (' controlsFloatRight') : ('')) . '">
		<span class="controlEdit"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/listItemEdit', $item, array()) . '" class="EditControl">' . 'Edit' . '</a></span>
		<span class="controlDelete"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/delete', $item, array()) . '" class="OverlayTrigger">' . 'Delete' . '</a></span>
	</span>
';
}
else
{
$__output .= '
	<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
';
}
$__output .= '

</div>
</li>';
