<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= 'A profile post you had bookmarked has been edited.' . '<br />
' . 'Post contents may have changed.' . '<br />

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

';
if ($content)
{
$__output .= '
<span class="dimmed">' . 'Profile page of Member' . ':</span> ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $content,
'1' => 'subject'
)) . '
';
}
