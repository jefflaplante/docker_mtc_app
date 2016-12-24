<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= 'A resource you had bookmarked has been deleted.' . '<br />
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

<span class="dimmed">' . 'resource' . ':</span>
';
if ($content['deleted_title'])
{
$__output .= '
	' . htmlspecialchars($content['deleted_title'], ENT_QUOTES, 'UTF-8') . '
';
}
else if ($content['title'])
{
$__output .= '
	<a href="' . XenForo_Template_Helper_Core::link('resources', $content, array()) . '">' . htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8') . '</a>
';
}
else
{
$__output .= '
	' . 'N/A' . '
';
}
$__output .= '
<br />
<span class="dimmed">' . 'Resource Category' . ':</span>
';
if ($content['deleted_category_title'])
{
$__output .= '
	' . htmlspecialchars($content['deleted_category_title'], ENT_QUOTES, 'UTF-8') . '
';
}
else if ($content['category_title'])
{
$__output .= '
	<a href="' . XenForo_Template_Helper_Core::link('resources/categories', '', array(
'resource_category_id' => $content['category_id']
)) . '">' . htmlspecialchars($content['category_title'], ENT_QUOTES, 'UTF-8') . '</a>
';
}
else
{
$__output .= '
	' . 'N/A' . '
';
}
