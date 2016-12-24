<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= 'A showcase item you had bookmarked has been edited.' . '<br />
' . 'Showcase item contents may have changed.' . '<br />

<span class="dimmed">' . 'Bookmark Note' . ':</span>

<b>
	';
if ($content['deleted'])
{
$__output .= '
		' . htmlspecialchars($bookmark['bookmark_note'], ENT_QUOTES, 'UTF-8') . '
	';
}
else
{
$__output .= '
		<a href="' . XenForo_Template_Helper_Core::link('bookmarks/view-alert-item', '', array(
'alert_id' => $alert_id
)) . '" class="OverlayTrigger">
			';
if ($bookmark['bookmark_note'])
{
$__output .= '
				' . htmlspecialchars($bookmark['bookmark_note'], ENT_QUOTES, 'UTF-8') . '
			';
}
else
{
$__output .= '
				' . 'N/A' . '
			';
}
$__output .= '
		</a>
	';
}
$__output .= '
</b>
<br />

<span class="dimmed">' . 'nflj_showcase_showcase_item' . ':</span>
';
if ($bookmark['deleted_title'])
{
$__output .= '
	' . htmlspecialchars($bookmark['deleted_title'], ENT_QUOTES, 'UTF-8') . '
';
}
else if ($bookmark['title'])
{
$__output .= '
	<a href="' . XenForo_Template_Helper_Core::link('showcase', $bookmark, array()) . '">' . htmlspecialchars($bookmark['title'], ENT_QUOTES, 'UTF-8') . '</a>
';
}
else
{
$__output .= '
	' . 'N/A' . '
';
}
