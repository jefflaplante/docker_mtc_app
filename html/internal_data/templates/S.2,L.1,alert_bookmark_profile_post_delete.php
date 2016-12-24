<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= 'A profile post you had bookmarked has been deleted or made un-viewable.' . '<br />
' . 'Therefore, your bookmark has been removed.' . '<br />

<span class="dimmed">' . 'Bookmark Note' . ':</span>

<a href="' . XenForo_Template_Helper_Core::link('bookmarks/view-alert-item', '', array(
'alert_id' => $alert_id
)) . '" class="OverlayTrigger">
';
if ($bookmark['bookmark_note'])
{
$__output .= '
	<b>' . htmlspecialchars($bookmark['bookmark_note'], ENT_QUOTES, 'UTF-8') . '</b>
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
<br />

';
if ($content)
{
$__output .= '
	<span class="dimmed">' . 'Profile page of Member' . ':</span> ';
if ($content['username'])
{
$__output .= XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $content,
'1' => 'subject'
));
}
else
{
$__output .= htmlspecialchars($bookmark['profileUser']['username'], ENT_QUOTES, 'UTF-8');
}
$__output .= '
';
}
