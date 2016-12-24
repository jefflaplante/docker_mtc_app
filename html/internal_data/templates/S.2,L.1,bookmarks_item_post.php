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
)) . '\'s post from thread' . ':
';
}
else
{
$__output .= '
	' . '' . htmlspecialchars($content['username'], ENT_QUOTES, 'UTF-8') . '\'s post from thread' . ':
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
if ($xenOptions['bookmarks_thread_prefix'])
{
$__output .= '
	<a href="' . XenForo_Template_Helper_Core::link('forums', $content, array(
'prefix_id' => $content['prefix_id']
)) . '" class="prefixLink"
							title="' . 'Show only threads prefixed by \'' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $content,
'1' => 'plain',
'2' => ''
)) . '\'.' . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $content,
'1' => 'html',
'2' => ''
)) . '</a>
';
}
$__output .= '
';
if ($xenOptions['bookmarks_content_preview'])
{
$__output .= '
	<a href="' . XenForo_Template_Helper_Core::link('posts', $content, array()) . '" class="PreviewTooltip" data-previewUrl="' . XenForo_Template_Helper_Core::link('threads/preview', $content, array()) . '">
	' . htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8') . '</a>
	';
$__compilerVar1 = '';
$__compilerVar1 .= '<div id="PreviewTooltip">
	<span class="arrow"><span></span></span>
	
	<div class="section">
		<div class="primaryContent previewContent">
			<span class="PreviewContents">' . 'Loading' . '...</span>
		</div>
	</div>
</div>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
';
}
else
{
$__output .= '
	<a href="' . XenForo_Template_Helper_Core::link('posts', $content, array()) . '">' . htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8') . '</a>
';
}
$__output .= '
</h3>

<p class="snippet post normalText ugc">
<a href="' . XenForo_Template_Helper_Core::link('bookmarks/view-item', $item, array()) . '" class="OverlayTrigger">' . htmlspecialchars($content['message'], ENT_QUOTES, 'UTF-8') . '
';
if ($content['attach_count'] AND $content['attachments'])
{
$__output .= '
	<span class="attachedImages attachedImages">
		<br />
		';
foreach ($content['attachments'] AS $attachment)
{
$__output .= '
			';
if ($attachment['thumbnailUrl'])
{
$__output .= '
				<img src="' . htmlspecialchars($attachment['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8') . '" />
			';
}
$__output .= '
		';
}
$__output .= '
	</span>
';
}
$__output .= '
</a>
</p>

<h4 class="minorTitle forum">';
if ($xenOptions['bookmarks_icons'])
{
$__output .= '<span class="icon"></span>';
}
$__output .= 'Forum' . ': <a href="' . XenForo_Template_Helper_Core::link('forums', $content, array()) . '">' . htmlspecialchars($content['node_title'], ENT_QUOTES, 'UTF-8') . '</a></h4>

<span class="tinyText" name="bookmarkLineBreak' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" ' . (($content['bookmark_note']) ? ('style="display:none;"') : ('style="display:block;"')) . '>
	';
if (!$xenOptions['bookmarks_multiline'] && !$content['bookmark_note'])
{
$__output .= '
		<br />
	';
}
$__output .= '
</span>';
