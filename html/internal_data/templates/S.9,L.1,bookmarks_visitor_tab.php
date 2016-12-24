<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '
<li class="navTab Popup PopupControl PopupClosed">
	<a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', false, array()) . '" rel="Menu" class="navLink NoPopupGadget"><strong>' . 'Bookmarks' . '</strong></a>
	<div class="Menu JsOnly" id="BookmarksMenu">
		<div class="primaryContent menuHeader">
			<h3><a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', $visitor, array()) . '" class="concealed" title="' . 'Your Bookmarks' . '">' . 'Bookmarks' . '</a></h3>
			';
if ($threadBookmarks)
{
$__output .= '
				<div class="muted">' . 'Thread Posts' . '</div>
			';
}
else if ($profileBookmarks)
{
$__output .= '
				<div class="muted">' . 'Profile Posts' . '</div>
			';
}
else if ($resourceBookmarks)
{
$__output .= '
				<div class="muted">' . 'resources' . '</div>
			';
}
else if ($showcaseItemBookmarks)
{
$__output .= '
				<div class="muted">' . 'Showcase Items' . '</div>
			';
}
else
{
$__output .= '
				<div class="muted">' . 'Quick Links' . '</div>
			';
}
$__output .= '
		</div>
		';
if ($threadBookmarks OR $profileBookmarks OR $resourceBookmarks OR $showcaseItemBookmarks)
{
$__output .= '
			';
if ($threadBookmarks)
{
$__output .= '
				<div class="secondaryContent" style="padding:0;">
					<ul class="blockLinksList">
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
					</ul>
				</div>
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
				<div class="secondaryContent" style="padding:0;">
					<ul class="blockLinksList">
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
					</ul>
				</div>
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
				<div class="secondaryContent" style="padding:0;">
					<ul class="blockLinksList">
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
					</ul>
				</div>
			';
}
$__output .= '
				
			';
if ($showcaseItemBookmarks)
{
$__output .= '
				';
if ($threadBookmarks OR $profileBookmarks OR $resourceBookmarks)
{
$__output .= '
					<div class="primaryContent menuHeader muted">' . 'Showcase Items' . '</div>
				';
}
$__output .= '
				<div class="secondaryContent" style="padding:0;">
					<ul class="blockLinksList">
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
					</ul>
				</div>
			';
}
$__output .= '
		';
}
else
{
$__output .= '
			<div class="secondaryContent" style="padding:0;">
				<ul class="blockLinksList">
					<li><a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', false, array()) . '">' . 'You have no Quick Link bookmarks!<br />To add a bookmark here, you must<br />tick the Quick Link checkbox when<br />creating or editing a bookmark.' . '</a></li>
				</ul>
			</div>
		';
}
$__output .= '
	</div>
</li>
';
