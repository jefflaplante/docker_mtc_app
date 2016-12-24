<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Bookmarks' . XenForo_Template_Helper_Core::callHelper('pagenumber', array(
'0' => $page
));
$__output .= '
';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'Bookmarks';
$__output .= '

';
$this->addRequiredExternal('css', 'events');
$__output .= '
';
$this->addRequiredExternal('css', 'bookmarks');
$__output .= '

<div class="event bookmarksPage">
';
if ($hasBookmarks)
{
$__output .= '

	';
$this->addRequiredExternal('js', 'js/bookmarks/bookmarks.js');
$__output .= '
	<form action="' . XenForo_Template_Helper_Core::link('bookmarks/flip-status', false, array()) . '" method="post" class="BookmarksList formOverlay AutoValidator" id="BookmarksFlipForm">
	
	';
if ($xenOptions['bookmarks_profile'] OR $xenOptions['bookmarks_resource'] OR $xenOptions['bookmarks_showcase'] OR $xenOptions['bookmarks_media'])
{
$__output .= '
		<span class="tabsPos numTabs' . htmlspecialchars($numTabs, ENT_QUOTES, 'UTF-8') . '">
			';
if ($totalPostItems < 1 AND $xenOptions['bookmarks_profile'] AND $totalProfilePostItems)
{
$__output .= '
				<ul class="tabs mainTabs BookmarkTabs" data-panes="#BookmarkPanes > li" data-types="' . htmlspecialchars($contentTypes, ENT_QUOTES, 'UTF-8') . '" data-tab="profile_posts" data-history="on">
			';
}
else if ($totalPostItems < 1 AND $xenOptions['bookmarks_resource'] AND $totalResources)
{
$__output .= '
				<ul class="tabs mainTabs BookmarkTabs" data-panes="#BookmarkPanes > li" data-types="' . htmlspecialchars($contentTypes, ENT_QUOTES, 'UTF-8') . '" data-tab="resources" data-history="on">
			';
}
else if ($totalPostItems < 1 AND $xenOptions['bookmarks_media'] AND $totalMedia)
{
$__output .= '
				<ul class="tabs mainTabs BookmarkTabs" data-panes="#BookmarkPanes > li" data-types="' . htmlspecialchars($contentTypes, ENT_QUOTES, 'UTF-8') . '" data-tab="xengallery_media" data-history="on">
			';
}
else if ($totalPostItems < 1 AND $xenOptions['bookmarks_showcase'] AND $totalShowcaseItems)
{
$__output .= '
				<ul class="tabs mainTabs BookmarkTabs" data-panes="#BookmarkPanes > li" data-types="' . htmlspecialchars($contentTypes, ENT_QUOTES, 'UTF-8') . '" data-tab="showcase_items" data-history="on">
			';
}
else
{
$__output .= '
				<ul class="tabs mainTabs BookmarkTabs" data-panes="#BookmarkPanes > li" data-types="' . htmlspecialchars($contentTypes, ENT_QUOTES, 'UTF-8') . '" data-history="on">
			';
}
$__output .= '
				<li><a href="#thread_posts">' . 'Thread Posts' . '</a></li>
				';
if ($xenOptions['bookmarks_profile'])
{
$__output .= '
					<li><a href="#profile_posts">' . 'Profile Posts' . '</a></li>
				';
}
$__output .= '
				';
if ($xenOptions['bookmarks_resource'])
{
$__output .= '
					<li><a href="#resources">' . 'resources' . '</a></li>
				';
}
$__output .= '
				';
if ($xenOptions['bookmarks_media'])
{
$__output .= '
					<li><a href="#xengallery_media">' . 'xengallery_media' . '</a></li>
				';
}
$__output .= '
				';
if ($xenOptions['bookmarks_showcase'])
{
$__output .= '
					<li><a href="#showcase_items">' . 'Showcase Items' . '</a></li>
				';
}
$__output .= '
			</ul>
		</span>
	';
}
$__output .= '
	
	';
$__compilerVar1 = '';
$__compilerVar1 .= '
					';
if ($xenOptions['bookmarks_public'] OR $xenOptions['bookmarks_navtab'])
{
$__compilerVar1 .= '
						<div class="primaryContent menuHeader"><h3>' . 'Filter by Type' . '</h3></div>
						<ul class="secondaryContent blockLinksList">
							';
if ($xenOptions['bookmarks_public'])
{
$__compilerVar1 .= '
								<li class="bookmarkFilter"><a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', '', array(
'filter_type' => (($filterType == ('private')) ? ('') : ('private')),
'tag' => $bookmarkTag
)) . '" class="' . (($filterType == ('private')) ? ('active') : ('')) . '">' . 'Private' . '</a></li>
								<li class="bookmarkFilter"><a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', '', array(
'filter_type' => (($filterType == ('public')) ? ('') : ('public')),
'tag' => $bookmarkTag
)) . '" class="' . (($filterType == ('public')) ? ('active') : ('')) . '">' . 'Public' . '</a></li>
							';
}
$__compilerVar1 .= '
							';
if ($xenOptions['bookmarks_navtab'])
{
$__compilerVar1 .= '
								<li class="bookmarkFilter"><a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', '', array(
'filter_type' => (($filterType == ('quick_link')) ? ('') : ('quick_link')),
'tag' => $bookmarkTag
)) . '" class="' . (($filterType == ('quick_link')) ? ('active') : ('')) . '">' . 'Quick Link' . '</a></li>
							';
}
$__compilerVar1 .= '
						</ul>
					';
}
$__compilerVar1 .= '
					';
if ($xenOptions['bookmarks_tags'] AND $bookmarkTags)
{
$__compilerVar1 .= '
						<div class="primaryContent menuHeader"><h3>' . 'Filter by Tag' . '</h3></div>
						<ul class="secondaryContent blockLinksList">
							';
foreach ($bookmarkTags AS $tag)
{
$__compilerVar1 .= '
								<li class="bookmarkFilter"><a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', '', array(
'tag' => (($bookmarkTag == $tag['name']) ? ('') : ($tag['name'])),
'filter_type' => $filterType
)) . '" class="' . (($bookmarkTag == $tag['name']) ? ('active') : ('')) . '"><span style="float:right;">' . XenForo_Template_Helper_Core::numberFormat($tag['count'], '0') . '</span>' . htmlspecialchars($tag['name'], ENT_QUOTES, 'UTF-8') . '</a></li>
							';
}
$__compilerVar1 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('account/bookmarks-tags', false, array()) . '" class="primaryContent">' . 'Edit Tags' . '</a></li>
						</ul>
					';
}
$__compilerVar1 .= '
				';
if (trim($__compilerVar1) !== '')
{
$__output .= '
	<span class="tagsPos numTabs' . htmlspecialchars($numTabs, ENT_QUOTES, 'UTF-8') . '">
		<div class="linkGroup" style="position:relative;">
			<div class="Popup">
				<a rel="Menu">' . 'Filter by...' . '</a>
				<div class="Menu">
				' . $__compilerVar1 . '
				</div>
			</div>
		</div>
	</span>
	';
}
unset($__compilerVar1);
$__output .= '

	<ul id="BookmarkPanes">
		<li id="thread_posts">
			';
if ($postBookmarks)
{
$__output .= '
				<ol>
					';
foreach ($postBookmarks AS $item)
{
$__output .= '
						';
$__compilerVar2 = '';
$__compilerVar2 .= 'true';
$__compilerVar3 = '';
$__compilerVar3 .= '<li id="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" name="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarksListItem ' . (($item['sticky']) ? ('itemContainerSticky') : ('itemContainer')) . '">

';
if ($item['content_type'] != ('xengallery_media'))
{
$__compilerVar3 .= '
<span class="event">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($item,false,array(
'user' => '$item',
'size' => 's',
'class' => 'icon'
),'')) . '
</span>
';
}
$__compilerVar3 .= '

<div class="content ' . (($item['content_type'] == ('xengallery_media')) ? ('contentMedia') : ('')) . '">

<span name="stickyIcon' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="stickyIcon" title="' . 'Sticky' . '" ' . (($item['sticky']) ? ('style="display:block;"') : ('style="display:none;"')) . '></span>

' . $item['listTemplate'] . '

</div>
<div style="position:relative;">

';
if ($__compilerVar2)
{
$__compilerVar3 .= '
	';
if ($xenOptions['bookmarks_public'])
{
$__compilerVar3 .= '
		<input type="submit" name="fliptext' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" value="' . (($item['public']) ? ('Public') : ('Private')) . '" class="button buttonBookmarks" onClick="document.getElementById(\'bookmark_id\').value=' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" />
		<span class="bookmarkPrivate">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
else
{
$__compilerVar3 .= '
		<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
$__compilerVar3 .= '
	<div class="controlEditNewLine"></div>
	<span name="bookmarkTag' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarkTag' . (($xenOptions['bookmarks_edit_link_location_right']) ? ('') : (' controlsFloatRight')) . '">
		';
if ($xenOptions['bookmarks_tags'] AND $item['bookmark_tag'])
{
$__compilerVar3 .= '<a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', '', array(
'tag' => $item['bookmark_tag']
)) . '">' . htmlspecialchars($item['bookmark_tag'], ENT_QUOTES, 'UTF-8') . '</a>';
}
$__compilerVar3 .= '
	</span>
	<span class="bookmarkControls' . (($xenOptions['bookmarks_edit_link_location_right']) ? (' controlsFloatRight') : ('')) . '">
		<span class="controlEdit"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/listItemEdit', $item, array()) . '" class="EditControl">' . 'Edit' . '</a></span>
		<span class="controlDelete"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/delete', $item, array()) . '" class="OverlayTrigger">' . 'Delete' . '</a></span>
	</span>
';
}
else
{
$__compilerVar3 .= '
	<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
';
}
$__compilerVar3 .= '

</div>
</li>';
$__output .= $__compilerVar3;
unset($__compilerVar2, $__compilerVar3);
$__output .= '
					';
}
$__output .= '
					<div class="pageNavLinkGroup">
						';
if ($totalPostItems > $perPage)
{
$__output .= '
							<span class="paginationCount">' . 'Showing ' . htmlspecialchars($postFrom, ENT_QUOTES, 'UTF-8') . ' to ' . htmlspecialchars($postTo, ENT_QUOTES, 'UTF-8') . ' of ' . htmlspecialchars($totalPostItems, ENT_QUOTES, 'UTF-8') . '' . '</span>
						';
}
$__output .= '
						' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($perPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalPostItems, ENT_QUOTES, 'UTF-8'), htmlspecialchars($postPage, ENT_QUOTES, 'UTF-8'), 'account/bookmarks/#posts', false, array(
'type' => htmlspecialchars('post', ENT_QUOTES, 'UTF-8', true),
'profilePostPage' => $profilePostPage,
'resourcePage' => $resourcePage,
'showcaseItemPage' => $showcaseItemPage,
'tag' => $bookmarkTag,
'filter_type' => $filterType
), false, array())) . '
					</div>
				</ol>
			';
}
else
{
$__output .= '
				<br />
				<p>
				';
if ($bookmarkTag AND $filterType AND $filterTypeName)
{
$__output .= '
					' . 'Tag <b><i>' . htmlspecialchars($bookmarkTag, ENT_QUOTES, 'UTF-8') . '</i></b> has no <b><i>' . htmlspecialchars($filterTypeName, ENT_QUOTES, 'UTF-8') . '</i></b> thread post bookmarks assigned to it.' . '
				';
}
else if ($bookmarkTag)
{
$__output .= '
					' . 'Tag <b><i>' . htmlspecialchars($bookmarkTag, ENT_QUOTES, 'UTF-8') . '</i></b> has no thread post bookmarks assigned to it.' . '
				';
}
else if ($filterType AND $filterTypeName)
{
$__output .= '
					' . 'There are no <b><i>' . htmlspecialchars($filterTypeName, ENT_QUOTES, 'UTF-8') . '</i></b> thread post bookmarks.' . '
				';
}
else
{
$__output .= '
					' . 'You have not bookmarked any Thread Posts yet!<br />
To display a post here, click the \'Bookmark\' link located at the bottom of each thread post.' . '
				';
}
$__output .= '
				</p>
			';
}
$__output .= '
		</li>
		';
if ($xenOptions['bookmarks_profile'])
{
$__output .= '
			<li id="profile_posts">
				';
if ($profilePostBookmarks)
{
$__output .= '
					<ol>
						';
foreach ($profilePostBookmarks AS $item)
{
$__output .= '
							';
$__compilerVar4 = '';
$__compilerVar4 .= 'true';
$__compilerVar5 = '';
$__compilerVar5 .= '<li id="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" name="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarksListItem ' . (($item['sticky']) ? ('itemContainerSticky') : ('itemContainer')) . '">

';
if ($item['content_type'] != ('xengallery_media'))
{
$__compilerVar5 .= '
<span class="event">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($item,false,array(
'user' => '$item',
'size' => 's',
'class' => 'icon'
),'')) . '
</span>
';
}
$__compilerVar5 .= '

<div class="content ' . (($item['content_type'] == ('xengallery_media')) ? ('contentMedia') : ('')) . '">

<span name="stickyIcon' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="stickyIcon" title="' . 'Sticky' . '" ' . (($item['sticky']) ? ('style="display:block;"') : ('style="display:none;"')) . '></span>

' . $item['listTemplate'] . '

</div>
<div style="position:relative;">

';
if ($__compilerVar4)
{
$__compilerVar5 .= '
	';
if ($xenOptions['bookmarks_public'])
{
$__compilerVar5 .= '
		<input type="submit" name="fliptext' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" value="' . (($item['public']) ? ('Public') : ('Private')) . '" class="button buttonBookmarks" onClick="document.getElementById(\'bookmark_id\').value=' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" />
		<span class="bookmarkPrivate">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
else
{
$__compilerVar5 .= '
		<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
$__compilerVar5 .= '
	<div class="controlEditNewLine"></div>
	<span name="bookmarkTag' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarkTag' . (($xenOptions['bookmarks_edit_link_location_right']) ? ('') : (' controlsFloatRight')) . '">
		';
if ($xenOptions['bookmarks_tags'] AND $item['bookmark_tag'])
{
$__compilerVar5 .= '<a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', '', array(
'tag' => $item['bookmark_tag']
)) . '">' . htmlspecialchars($item['bookmark_tag'], ENT_QUOTES, 'UTF-8') . '</a>';
}
$__compilerVar5 .= '
	</span>
	<span class="bookmarkControls' . (($xenOptions['bookmarks_edit_link_location_right']) ? (' controlsFloatRight') : ('')) . '">
		<span class="controlEdit"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/listItemEdit', $item, array()) . '" class="EditControl">' . 'Edit' . '</a></span>
		<span class="controlDelete"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/delete', $item, array()) . '" class="OverlayTrigger">' . 'Delete' . '</a></span>
	</span>
';
}
else
{
$__compilerVar5 .= '
	<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
';
}
$__compilerVar5 .= '

</div>
</li>';
$__output .= $__compilerVar5;
unset($__compilerVar4, $__compilerVar5);
$__output .= '
						';
}
$__output .= '
		
						<div class="pageNavLinkGroup">
							';
if ($totalProfilePostItems > $perPage)
{
$__output .= '
								<span class="paginationCount">' . 'Showing ' . htmlspecialchars($profilePostFrom, ENT_QUOTES, 'UTF-8') . ' to ' . htmlspecialchars($profilePostTo, ENT_QUOTES, 'UTF-8') . ' of ' . htmlspecialchars($totalProfilePostItems, ENT_QUOTES, 'UTF-8') . '' . '</span>
							';
}
$__output .= '
							' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($perPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalProfilePostItems, ENT_QUOTES, 'UTF-8'), htmlspecialchars($profilePostPage, ENT_QUOTES, 'UTF-8'), 'account/bookmarks/#profile_posts', false, array(
'type' => htmlspecialchars('profile_post', ENT_QUOTES, 'UTF-8', true),
'postPage' => $postPage,
'resourcePage' => $resourcePage,
'showcaseItemPage' => $showcaseItemPage,
'tag' => $bookmarkTag,
'filter_type' => $filterType
), false, array())) . '
						</div>
					</ol>
				';
}
else
{
$__output .= '
					<br />
					<p>
					';
if ($bookmarkTag AND $filterType AND $filterTypeName)
{
$__output .= '
						' . 'Tag <b><i>' . htmlspecialchars($bookmarkTag, ENT_QUOTES, 'UTF-8') . '</i></b> has no <b><i>' . htmlspecialchars($filterTypeName, ENT_QUOTES, 'UTF-8') . '</i></b> profile post bookmarks assigned to it.' . '
					';
}
else if ($bookmarkTag)
{
$__output .= '
						' . 'Tag <b><i>' . htmlspecialchars($bookmarkTag, ENT_QUOTES, 'UTF-8') . '</i></b> has no profile post bookmarks assigned to it.' . '
					';
}
else if ($filterType AND $filterTypeName)
{
$__output .= '
						' . 'There are no <b><i>' . htmlspecialchars($filterTypeName, ENT_QUOTES, 'UTF-8') . '</i></b> profile post bookmarks.' . '
					';
}
else
{
$__output .= '
						' . 'You have not bookmarked any Profile Posts yet!<br />
To display a post here, click the \'Bookmark\' link located at the bottom of each profile post.' . '
					';
}
$__output .= '
					</p>
				';
}
$__output .= '
			</li>
		';
}
$__output .= '
		';
if ($xenOptions['bookmarks_resource'])
{
$__output .= '
			<li id="resources">
				';
if ($resourceBookmarks)
{
$__output .= '
					<ol>
						';
foreach ($resourceBookmarks AS $item)
{
$__output .= '
							';
$__compilerVar6 = '';
$__compilerVar6 .= 'true';
$__compilerVar7 = '';
$__compilerVar7 .= '<li id="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" name="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarksListItem ' . (($item['sticky']) ? ('itemContainerSticky') : ('itemContainer')) . '">

';
if ($item['content_type'] != ('xengallery_media'))
{
$__compilerVar7 .= '
<span class="event">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($item,false,array(
'user' => '$item',
'size' => 's',
'class' => 'icon'
),'')) . '
</span>
';
}
$__compilerVar7 .= '

<div class="content ' . (($item['content_type'] == ('xengallery_media')) ? ('contentMedia') : ('')) . '">

<span name="stickyIcon' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="stickyIcon" title="' . 'Sticky' . '" ' . (($item['sticky']) ? ('style="display:block;"') : ('style="display:none;"')) . '></span>

' . $item['listTemplate'] . '

</div>
<div style="position:relative;">

';
if ($__compilerVar6)
{
$__compilerVar7 .= '
	';
if ($xenOptions['bookmarks_public'])
{
$__compilerVar7 .= '
		<input type="submit" name="fliptext' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" value="' . (($item['public']) ? ('Public') : ('Private')) . '" class="button buttonBookmarks" onClick="document.getElementById(\'bookmark_id\').value=' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" />
		<span class="bookmarkPrivate">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
else
{
$__compilerVar7 .= '
		<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
$__compilerVar7 .= '
	<div class="controlEditNewLine"></div>
	<span name="bookmarkTag' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarkTag' . (($xenOptions['bookmarks_edit_link_location_right']) ? ('') : (' controlsFloatRight')) . '">
		';
if ($xenOptions['bookmarks_tags'] AND $item['bookmark_tag'])
{
$__compilerVar7 .= '<a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', '', array(
'tag' => $item['bookmark_tag']
)) . '">' . htmlspecialchars($item['bookmark_tag'], ENT_QUOTES, 'UTF-8') . '</a>';
}
$__compilerVar7 .= '
	</span>
	<span class="bookmarkControls' . (($xenOptions['bookmarks_edit_link_location_right']) ? (' controlsFloatRight') : ('')) . '">
		<span class="controlEdit"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/listItemEdit', $item, array()) . '" class="EditControl">' . 'Edit' . '</a></span>
		<span class="controlDelete"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/delete', $item, array()) . '" class="OverlayTrigger">' . 'Delete' . '</a></span>
	</span>
';
}
else
{
$__compilerVar7 .= '
	<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
';
}
$__compilerVar7 .= '

</div>
</li>';
$__output .= $__compilerVar7;
unset($__compilerVar6, $__compilerVar7);
$__output .= '
						';
}
$__output .= '
		
						<div class="pageNavLinkGroup">
							';
if ($totalResources > $perPage)
{
$__output .= '
								<span class="paginationCount">' . 'Showing ' . htmlspecialchars($resourceFrom, ENT_QUOTES, 'UTF-8') . ' to ' . htmlspecialchars($resourceTo, ENT_QUOTES, 'UTF-8') . ' of ' . htmlspecialchars($totalResources, ENT_QUOTES, 'UTF-8') . '' . '</span>
							';
}
$__output .= '
							' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($perPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalResources, ENT_QUOTES, 'UTF-8'), htmlspecialchars($resourcePage, ENT_QUOTES, 'UTF-8'), 'account/bookmarks/#resources', false, array(
'type' => htmlspecialchars('resource', ENT_QUOTES, 'UTF-8', true),
'postPage' => $postPage,
'profilePostPage' => $profilePostPage,
'showcaseItemPage' => $showcaseItemPage,
'tag' => $bookmarkTag,
'filter_type' => $filterType
), false, array())) . '
						</div>
					</ol>
				';
}
else
{
$__output .= '
					<br />
					<p>
					';
if ($bookmarkTag AND $filterType AND $filterTypeName)
{
$__output .= '
						' . 'Tag <b><i>' . htmlspecialchars($bookmarkTag, ENT_QUOTES, 'UTF-8') . '</i></b> has no <b><i>' . htmlspecialchars($filterTypeName, ENT_QUOTES, 'UTF-8') . '</i></b> resource bookmarks assigned to it.' . '
					';
}
else if ($bookmarkTag)
{
$__output .= '
						' . 'Tag <b><i>' . htmlspecialchars($bookmarkTag, ENT_QUOTES, 'UTF-8') . '</i></b> has no resource bookmarks assigned to it.' . '
					';
}
else if ($filterType AND $filterTypeName)
{
$__output .= '
						' . 'There are no <b><i>' . htmlspecialchars($filterTypeName, ENT_QUOTES, 'UTF-8') . '</i></b> resource bookmarks.' . '
					';
}
else
{
$__output .= '
						' . 'You have not bookmarked any Resources yet!<br />
To display a resource here, click the \'Bookmark\' link located at the bottom of each resource overview.' . '
					';
}
$__output .= '
					</p>
				';
}
$__output .= '
			</li>
		';
}
$__output .= '
		';
if ($xenOptions['bookmarks_media'])
{
$__output .= '
			<li id="xengallery_media">
				';
if ($mediaBookmarks)
{
$__output .= '
					<ol>
						';
foreach ($mediaBookmarks AS $item)
{
$__output .= '
							';
$__compilerVar8 = '';
$__compilerVar8 .= 'true';
$__compilerVar9 = '';
$__compilerVar9 .= '<li id="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" name="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarksListItem ' . (($item['sticky']) ? ('itemContainerSticky') : ('itemContainer')) . '">

';
if ($item['content_type'] != ('xengallery_media'))
{
$__compilerVar9 .= '
<span class="event">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($item,false,array(
'user' => '$item',
'size' => 's',
'class' => 'icon'
),'')) . '
</span>
';
}
$__compilerVar9 .= '

<div class="content ' . (($item['content_type'] == ('xengallery_media')) ? ('contentMedia') : ('')) . '">

<span name="stickyIcon' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="stickyIcon" title="' . 'Sticky' . '" ' . (($item['sticky']) ? ('style="display:block;"') : ('style="display:none;"')) . '></span>

' . $item['listTemplate'] . '

</div>
<div style="position:relative;">

';
if ($__compilerVar8)
{
$__compilerVar9 .= '
	';
if ($xenOptions['bookmarks_public'])
{
$__compilerVar9 .= '
		<input type="submit" name="fliptext' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" value="' . (($item['public']) ? ('Public') : ('Private')) . '" class="button buttonBookmarks" onClick="document.getElementById(\'bookmark_id\').value=' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" />
		<span class="bookmarkPrivate">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
else
{
$__compilerVar9 .= '
		<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
$__compilerVar9 .= '
	<div class="controlEditNewLine"></div>
	<span name="bookmarkTag' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarkTag' . (($xenOptions['bookmarks_edit_link_location_right']) ? ('') : (' controlsFloatRight')) . '">
		';
if ($xenOptions['bookmarks_tags'] AND $item['bookmark_tag'])
{
$__compilerVar9 .= '<a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', '', array(
'tag' => $item['bookmark_tag']
)) . '">' . htmlspecialchars($item['bookmark_tag'], ENT_QUOTES, 'UTF-8') . '</a>';
}
$__compilerVar9 .= '
	</span>
	<span class="bookmarkControls' . (($xenOptions['bookmarks_edit_link_location_right']) ? (' controlsFloatRight') : ('')) . '">
		<span class="controlEdit"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/listItemEdit', $item, array()) . '" class="EditControl">' . 'Edit' . '</a></span>
		<span class="controlDelete"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/delete', $item, array()) . '" class="OverlayTrigger">' . 'Delete' . '</a></span>
	</span>
';
}
else
{
$__compilerVar9 .= '
	<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
';
}
$__compilerVar9 .= '

</div>
</li>';
$__output .= $__compilerVar9;
unset($__compilerVar8, $__compilerVar9);
$__output .= '
						';
}
$__output .= '
		
						<div class="pageNavLinkGroup">
							';
if ($totalMedia > $perPage)
{
$__output .= '
								<span class="paginationCount">' . 'Showing ' . htmlspecialchars($mediaFrom, ENT_QUOTES, 'UTF-8') . ' to ' . htmlspecialchars($mediaTo, ENT_QUOTES, 'UTF-8') . ' of ' . htmlspecialchars($totalMedia, ENT_QUOTES, 'UTF-8') . '' . '</span>
							';
}
$__output .= '
							' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($perPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalResources, ENT_QUOTES, 'UTF-8'), htmlspecialchars($resourcePage, ENT_QUOTES, 'UTF-8'), 'account/bookmarks/#xengallery_media', false, array(
'type' => htmlspecialchars('xengallery_media', ENT_QUOTES, 'UTF-8', true),
'postPage' => $postPage,
'profilePostPage' => $profilePostPage,
'showcaseItemPage' => $showcaseItemPage,
'tag' => $bookmarkTag,
'filter_type' => $filterType
), false, array())) . '
						</div>
					</ol>
				';
}
else
{
$__output .= '
					<br />
					<p>
					';
if ($bookmarkTag AND $filterType AND $filterTypeName)
{
$__output .= '
						' . 'bookmarks_no_media_with_tag_x_type_y' . '
					';
}
else if ($bookmarkTag)
{
$__output .= '
						' . 'bookmarks_no_media_with_tag_x' . '
					';
}
else if ($filterType AND $filterTypeName)
{
$__output .= '
						' . 'bookmarks_no_media_of_type_x' . '
					';
}
else
{
$__output .= '
						' . 'You have not bookmarked any Media yet!
To display a media item here, click the \'Bookmark\' link located at the bottom of each media.' . '
					';
}
$__output .= '
					</p>
				';
}
$__output .= '
			</li>
		';
}
$__output .= '
		';
if ($xenOptions['bookmarks_showcase'])
{
$__output .= '
			<li id="showcase_items">
				';
if ($showcaseItemBookmarks)
{
$__output .= '
					<ol>
						';
foreach ($showcaseItemBookmarks AS $item)
{
$__output .= '
							';
$__compilerVar10 = '';
$__compilerVar10 .= 'true';
$__compilerVar11 = '';
$__compilerVar11 .= '<li id="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" name="item_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarksListItem ' . (($item['sticky']) ? ('itemContainerSticky') : ('itemContainer')) . '">

';
if ($item['content_type'] != ('xengallery_media'))
{
$__compilerVar11 .= '
<span class="event">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($item,false,array(
'user' => '$item',
'size' => 's',
'class' => 'icon'
),'')) . '
</span>
';
}
$__compilerVar11 .= '

<div class="content ' . (($item['content_type'] == ('xengallery_media')) ? ('contentMedia') : ('')) . '">

<span name="stickyIcon' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="stickyIcon" title="' . 'Sticky' . '" ' . (($item['sticky']) ? ('style="display:block;"') : ('style="display:none;"')) . '></span>

' . $item['listTemplate'] . '

</div>
<div style="position:relative;">

';
if ($__compilerVar10)
{
$__compilerVar11 .= '
	';
if ($xenOptions['bookmarks_public'])
{
$__compilerVar11 .= '
		<input type="submit" name="fliptext' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" value="' . (($item['public']) ? ('Public') : ('Private')) . '" class="button buttonBookmarks" onClick="document.getElementById(\'bookmark_id\').value=' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" />
		<span class="bookmarkPrivate">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
else
{
$__compilerVar11 .= '
		<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
	';
}
$__compilerVar11 .= '
	<div class="controlEditNewLine"></div>
	<span name="bookmarkTag' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" class="bookmarkTag' . (($xenOptions['bookmarks_edit_link_location_right']) ? ('') : (' controlsFloatRight')) . '">
		';
if ($xenOptions['bookmarks_tags'] AND $item['bookmark_tag'])
{
$__compilerVar11 .= '<a href="' . XenForo_Template_Helper_Core::link('account/bookmarks', '', array(
'tag' => $item['bookmark_tag']
)) . '">' . htmlspecialchars($item['bookmark_tag'], ENT_QUOTES, 'UTF-8') . '</a>';
}
$__compilerVar11 .= '
	</span>
	<span class="bookmarkControls' . (($xenOptions['bookmarks_edit_link_location_right']) ? (' controlsFloatRight') : ('')) . '">
		<span class="controlEdit"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/listItemEdit', $item, array()) . '" class="EditControl">' . 'Edit' . '</a></span>
		<span class="controlDelete"><a href="' . XenForo_Template_Helper_Core::link('bookmarks/delete', $item, array()) . '" class="OverlayTrigger">' . 'Delete' . '</a></span>
	</span>
';
}
else
{
$__compilerVar11 .= '
	<span class="bookmarkPublic">' . 'Bookmark Date' . ':&nbsp;' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['bookmark_date'],array(
'time' => htmlspecialchars($item['bookmark_date'], ENT_QUOTES, 'UTF-8')
))) . '</span>
';
}
$__compilerVar11 .= '

</div>
</li>';
$__output .= $__compilerVar11;
unset($__compilerVar10, $__compilerVar11);
$__output .= '
						';
}
$__output .= '
		
						<div class="pageNavLinkGroup">
							';
if ($totalShowcaseItems > $perPage)
{
$__output .= '
								<span class="paginationCount">' . 'Showing ' . htmlspecialchars($showcaseItemFrom, ENT_QUOTES, 'UTF-8') . ' to ' . htmlspecialchars($showcaseItemTo, ENT_QUOTES, 'UTF-8') . ' of ' . htmlspecialchars($totalShowcaseItems, ENT_QUOTES, 'UTF-8') . '' . '</span>
							';
}
$__output .= '
							' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($perPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalShowcaseItems, ENT_QUOTES, 'UTF-8'), htmlspecialchars($showcaseItemPage, ENT_QUOTES, 'UTF-8'), 'account/bookmarks/#showcase_items', false, array(
'type' => htmlspecialchars('showcase_item', ENT_QUOTES, 'UTF-8', true),
'postPage' => $postPage,
'resourcePage' => $resourcePage,
'profilePostPage' => $profilePostPage,
'tag' => $bookmarkTag,
'filter_type' => $filterType
), false, array())) . '
						</div>
					</ol>
				';
}
else
{
$__output .= '
					<br />
					<p>
					';
if ($bookmarkTag AND $filterType AND $filterTypeName)
{
$__output .= '
						' . 'Tag <b><i>' . htmlspecialchars($bookmarkTag, ENT_QUOTES, 'UTF-8') . '</i></b> has no <b><i>' . htmlspecialchars($filterTypeName, ENT_QUOTES, 'UTF-8') . '</i></b> showcase item bookmarks assigned to it.' . '
					';
}
else if ($bookmarkTag)
{
$__output .= '
						' . 'Tag <b><i>' . htmlspecialchars($bookmarkTag, ENT_QUOTES, 'UTF-8') . '</i></b> has no showcase item bookmarks assigned to it.' . '
					';
}
else if ($filterType AND $filterTypeName)
{
$__output .= '
						' . 'There are no <b><i>' . htmlspecialchars($filterTypeName, ENT_QUOTES, 'UTF-8') . '</i></b> showcase item bookmarks.' . '
					';
}
else
{
$__output .= '
						' . 'You have not bookmarked any Showcase Items yet!<br />
To display a showcase here, click the \'Bookmark\' link located at the bottom of each showcase item description.' . '
					';
}
$__output .= '
					</p>
				';
}
$__output .= '
			</li>
		';
}
$__output .= '
	</ul>
		
	' . '
	<input type="hidden" id="bookmark_id" name="bookmark_id" value="" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>

';
}
else
{
$__output .= '
	
	<p>' . 'You do not have any Bookmarks yet!<br />
To display a post here, click the \'Bookmark\' link located at the bottom of each post.<br /><br />
Bookmarks is a way to conveniently display a link to posts you find informative or otherwise interesting.<br />This saves you the hassle of rummaging through multiple threads or multiple pages of a thread in order to locate that single post you wanted to have a second look at.' . '</p>

';
}
$__output .= '
</div>';
