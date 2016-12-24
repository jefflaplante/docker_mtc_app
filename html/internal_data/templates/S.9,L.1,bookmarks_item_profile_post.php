<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<span class="bookmarkNote" name="bookmarkNoteContainer' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" ' . ((!$content['bookmark_note']) ? ('style="display:none;"') : ('')) . '>
';
if ($pageIsRtl)
{
$__output .= '
	<span class="primaryText ugc"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/view-item', $item, array()) . '" class="OverlayTrigger"><span name="bookmarkNote' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($content['bookmark_note'], ENT_QUOTES, 'UTF-8') . '</span></a></span><span class="muted"> :' . 'Bookmark Note' . '</span>
';
}
else
{
$__output .= '
	<span class="muted">' . 'Bookmark Note' . ':</span> <span class="primaryText ugc"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/view-item', $item, array()) . '" class="OverlayTrigger"><span name="bookmarkNote' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($content['bookmark_note'], ENT_QUOTES, 'UTF-8') . '</span></a></span>
';
}
$__output .= '
</span>

<h3 class="description thread">
';
if ($xenOptions['bookmarks_icons'] AND !$xenOptions['bookmarks_multiline'])
{
$__output .= '<span class="icon"></span>';
}
$__output .= '

';
if (!$xenOptions['bookmarks_multiline'] AND $pageIsRtl)
{
$__output .= '
	<span style="float:right;margin-left:5px;">
';
}
$__output .= '

';
if ($user['user_id'] > 0)
{
$__output .= '
	' . '' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user
)) . '\'s post from' . ':
';
}
else
{
$__output .= '
	' . '' . htmlspecialchars($content['username'], ENT_QUOTES, 'UTF-8') . '\'s post from' . ':
';
}
$__output .= '

';
if ($pageIsRtl)
{
$__output .= '
	</span>
';
}
$__output .= '

';
if ($xenOptions['bookmarks_multiline'])
{
$__output .= '
</h3>
<h3 class="description title thread">
';
if ($xenOptions['bookmarks_icons'])
{
$__output .= '<span class="icon"></span>';
}
$__output .= '
';
}
$__output .= '

';
if ($content['profile_user_id'] > 0)
{
$__output .= '
	<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $content, array()) . '">' . '' . htmlspecialchars($content['profile_username'], ENT_QUOTES, 'UTF-8') . '\'s Profile' . '</a>
';
}
else
{
$__output .= '
	' . '' . htmlspecialchars($content['profile_username'], ENT_QUOTES, 'UTF-8') . '\'s Profile' . '
';
}
$__output .= '
</h3>

<p class="snippet post normalText ugc"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/view-item', $item, array()) . '" class="OverlayTrigger">' . htmlspecialchars($content['message'], ENT_QUOTES, 'UTF-8') . '</a></p>

<span class="smallText" name="bookmarkLineBreak' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" ' . (($content['bookmark_note'] && $xenOptions['bookmarks_multiline']) ? ('style="display:none;"') : ('style="display:block;"')) . '>
	';
if (!$xenOptions['bookmarks_multiline'] && !$content['bookmark_note'])
{
$__output .= '
		<br /><br />
	';
}
else
{
$__output .= '
		<br />
	';
}
$__output .= '
</span>';
