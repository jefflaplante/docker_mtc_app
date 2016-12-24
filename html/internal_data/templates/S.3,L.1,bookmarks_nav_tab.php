<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<ul class="secondaryContent blockLinksList">
';
if ($threadBookmarks OR $profileBookmarks OR $resourceBookmarks OR $showcaseItemBookmarks OR $mediaBookmarks)
{
$__output .= '
	';
if ($threadBookmarks)
{
$__output .= '
		';
foreach ($threadBookmarks AS $bookmark)
{
$__output .= '
			<li><a href="' . XenForo_Template_Helper_Core::link('posts', '', array(
'post_id' => $bookmark['content_id']
)) . '">' . htmlspecialchars($bookmark['note'], ENT_QUOTES, 'UTF-8') . '</a></li>
		';
}
$__output .= '
	';
}
$__output .= '

	';
if ($profileBookmarks)
{
$__output .= '
		';
if ($threadBookmarks)
{
$__output .= '
			<div class="primaryContent menuHeader muted">' . 'Profile Posts' . '</div>
		';
}
$__output .= '
		';
foreach ($profileBookmarks AS $bookmark)
{
$__output .= '
			<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts', '', array(
'profile_post_id' => $bookmark['content_id']
)) . '">' . htmlspecialchars($bookmark['note'], ENT_QUOTES, 'UTF-8') . '</a></li>
		';
}
$__output .= '
	';
}
$__output .= '

	';
if ($resourceBookmarks)
{
$__output .= '
		';
if ($threadBookmarks OR $profileBookmarks)
{
$__output .= '
			<div class="primaryContent menuHeader muted">' . 'resources' . '</div>
		';
}
$__output .= '
		';
foreach ($resourceBookmarks AS $bookmark)
{
$__output .= '
			<li><a href="' . XenForo_Template_Helper_Core::link('resources', '', array(
'resource_id' => $bookmark['content_id']
)) . '">' . htmlspecialchars($bookmark['note'], ENT_QUOTES, 'UTF-8') . '</a></li>
		';
}
$__output .= '
	';
}
$__output .= '
	
	';
if ($mediaBookmarks)
{
$__output .= '
		';
if ($threadBookmarks OR $profileBookmarks OR $resourceBookmarks)
{
$__output .= '
			<div class="primaryContent menuHeader muted">' . 'xengallery_media' . '</div>
		';
}
$__output .= '
		';
foreach ($mediaBookmarks AS $bookmark)
{
$__output .= '
			<li><a href="' . XenForo_Template_Helper_Core::link('media', '', array(
'media_id' => $bookmark['content_id']
)) . '">' . htmlspecialchars($bookmark['note'], ENT_QUOTES, 'UTF-8') . '</a></li>
		';
}
$__output .= '
	';
}
$__output .= '

	';
if ($showcaseItemBookmarks)
{
$__output .= '
		';
if ($threadBookmarks OR $profileBookmarks OR $resourceBookmarks OR $mediaBookmarks)
{
$__output .= '
			<div class="primaryContent menuHeader muted">' . 'Showcase Items' . '</div>
		';
}
$__output .= '
		';
foreach ($showcaseItemBookmarks AS $bookmark)
{
$__output .= '
			<li><a href="' . XenForo_Template_Helper_Core::link('showcase', '', array(
'item_id' => $bookmark['content_id']
)) . '">' . htmlspecialchars($bookmark['note'], ENT_QUOTES, 'UTF-8') . '</a></li>
		';
}
$__output .= '
	';
}
$__output .= '
';
}
else
{
$__output .= '
	<li><a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', false, array()) . '">' . 'You have no Quick Link bookmarks!<br />To add a bookmark here, you must<br />tick the Quick Link checkbox when<br />creating or editing a bookmark.' . '</a></li>
';
}
$__output .= '
</ul>';
