<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($brmeOptions['enabled_title'])
{
if ($brmeOptions['title'] == ('content'))
{
$__extraData['title'] = '';
$__extraData['title'] .= htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8') . XenForo_Template_Helper_Core::callHelper('pagenumber', array(
'0' => $page
));
}
else
{
$__extraData['title'] = '';
if ($brmeOptions['title'] != ('fixed') && $metaData['title'])
{
$__extraData['title'] = '';
$__extraData['title'] .= $metaData['title'] . XenForo_Template_Helper_Core::callHelper('pagenumber', array(
'0' => $page
));
}
else if ($brmeOptions['titleFixed'])
{
$__extraData['title'] = '';
$__extraData['title'] .= $brmeOptions['titleFixed'] . XenForo_Template_Helper_Core::callHelper('pagenumber', array(
'0' => $page
));
}
}
}
$__output .= '
';
$__extraData['h1'] = '';
$__extraData['h1'] .= htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8');
$__output .= '

';
if ($forum['description'] AND XenForo_Template_Helper_Core::styleProperty('threadListDescriptions'))
{
$__output .= '
	';
if ($brmeOptions['enabled_title'])
{
$__output .= '
	';
if ($brmeOptions['title'] == ('user') && $metaData['title'])
{
$__output .= '
	';
$__extraData['head']['openGraph'] = '';
$__compilerVar1 = '';
$__compilerVar1 .= XenForo_Template_Helper_Core::link('canonical:forums', $forum, array());
$__compilerVar2 = '';
$__compilerVar2 .= $metaData['title'];
$__compilerVar3 = '';
if ($xenOptions['facebookAppId'] OR $xenOptions['facebookAdmins'])
{
$__compilerVar3 .= '
	<meta property="og:site_name" content="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
	';
if ($avatar)
{
$__compilerVar3 .= '<meta property="og:image" content="' . htmlspecialchars($avatar, ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar3 .= '
	<meta property="og:image" content="' . XenForo_Template_Helper_Core::callHelper('fullurl', array(
'0' => XenForo_Template_Helper_Core::styleProperty('ogLogoPath'),
'1' => '1'
)) . '" />
	<meta property="og:type" content="' . (($ogType) ? (htmlspecialchars($ogType, ENT_QUOTES, 'UTF-8')) : ('article')) . '" />
	<meta property="og:url" content="' . $__compilerVar1 . '" />
	<meta property="og:title" content="' . $__compilerVar2 . '" />
	';
if ($description)
{
$__compilerVar3 .= '<meta property="og:description" content="' . $description . '" />';
}
$__compilerVar3 .= '
	' . $ogExtraHtml . '
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar3 .= '<meta property="fb:app_id" content="' . htmlspecialchars($xenOptions['facebookAppId'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar3 .= '
	';
if ($xenOptions['facebookAdmins'])
{
$__compilerVar3 .= '<meta property="fb:admins" content="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $xenOptions['facebookAdmins'],
'1' => ','
)) . '" />';
}
$__compilerVar3 .= '
';
}
$__extraData['head']['openGraph'] .= $__compilerVar3;
unset($__compilerVar1, $__compilerVar2, $__compilerVar3);
$__output .= '
	';
}
else if ($brmeOptions['title'] == ('fixed') && $brmeOptions['titleFixed'])
{
$__output .= '
	';
$__extraData['head']['openGraph'] = '';
$__compilerVar4 = '';
$__compilerVar4 .= XenForo_Template_Helper_Core::link('canonical:forums', $forum, array());
$__compilerVar5 = '';
$__compilerVar5 .= $brmeOptions['titleFixed'];
$__compilerVar6 = '';
if ($xenOptions['facebookAppId'] OR $xenOptions['facebookAdmins'])
{
$__compilerVar6 .= '
	<meta property="og:site_name" content="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
	';
if ($avatar)
{
$__compilerVar6 .= '<meta property="og:image" content="' . htmlspecialchars($avatar, ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar6 .= '
	<meta property="og:image" content="' . XenForo_Template_Helper_Core::callHelper('fullurl', array(
'0' => XenForo_Template_Helper_Core::styleProperty('ogLogoPath'),
'1' => '1'
)) . '" />
	<meta property="og:type" content="' . (($ogType) ? (htmlspecialchars($ogType, ENT_QUOTES, 'UTF-8')) : ('article')) . '" />
	<meta property="og:url" content="' . $__compilerVar4 . '" />
	<meta property="og:title" content="' . $__compilerVar5 . '" />
	';
if ($description)
{
$__compilerVar6 .= '<meta property="og:description" content="' . $description . '" />';
}
$__compilerVar6 .= '
	' . $ogExtraHtml . '
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar6 .= '<meta property="fb:app_id" content="' . htmlspecialchars($xenOptions['facebookAppId'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar6 .= '
	';
if ($xenOptions['facebookAdmins'])
{
$__compilerVar6 .= '<meta property="fb:admins" content="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $xenOptions['facebookAdmins'],
'1' => ','
)) . '" />';
}
$__compilerVar6 .= '
';
}
$__extraData['head']['openGraph'] .= $__compilerVar6;
unset($__compilerVar4, $__compilerVar5, $__compilerVar6);
$__output .= '
	';
}
else
{
$__extraData['head']['description'] = '';
$__output .= '
';
$__extraData['pageDescription'] = array(
'class' => 'baseHtml',
'skipmeta' => (true)
);
$__extraData['pageDescription']['content'] = '';
$__extraData['pageDescription']['content'] .= $forum['description'];
$__output .= '
';
}
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'] = XenForo_Template_Helper_Core::appendBreadCrumbs($__extraData['navigation'], $nodeBreadCrumbs);
$__output .= '

';
$__extraData['head']['canonical'] = '';
$__extraData['head']['canonical'] .= '
	<link rel="canonical" href="' . XenForo_Template_Helper_Core::link('canonical:forums', $forum, array(
'page' => $page
)) . '" />';
$__output .= '

';
$__extraData['head']['rss'] = '';
$__extraData['head']['rss'] .= '
	<link rel="alternate" type="application/rss+xml" title="' . 'RSS feed for ' . htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8') . '' . '" href="' . XenForo_Template_Helper_Core::link('forums/index.rss', $forum, array()) . '" />';
$__output .= '

';
$__extraData['head']['openGraph'] = '';
$__compilerVar7 = '';
$__compilerVar7 .= XenForo_Template_Helper_Core::link('canonical:forums', $forum, array());
$__compilerVar8 = '';
$__compilerVar8 .= htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8');
$__compilerVar9 = '';
$__compilerVar9 .= XenForo_Template_Helper_Core::callHelper('stripHtml', array(
'0' => $forum['description']
));
$__compilerVar10 = '';
if ($xenOptions['facebookAppId'] OR $xenOptions['facebookAdmins'])
{
$__compilerVar10 .= '
	<meta property="og:site_name" content="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
	';
if ($avatar)
{
$__compilerVar10 .= '<meta property="og:image" content="' . htmlspecialchars($avatar, ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar10 .= '
	<meta property="og:image" content="' . XenForo_Template_Helper_Core::callHelper('fullurl', array(
'0' => XenForo_Template_Helper_Core::styleProperty('ogLogoPath'),
'1' => '1'
)) . '" />
	<meta property="og:type" content="' . (($ogType) ? (htmlspecialchars($ogType, ENT_QUOTES, 'UTF-8')) : ('article')) . '" />
	<meta property="og:url" content="' . $__compilerVar7 . '" />
	<meta property="og:title" content="' . $__compilerVar8 . '" />
	';
if ($__compilerVar9)
{
$__compilerVar10 .= '<meta property="og:description" content="' . $__compilerVar9 . '" />';
}
$__compilerVar10 .= '
	' . $ogExtraHtml . '
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar10 .= '<meta property="fb:app_id" content="' . htmlspecialchars($xenOptions['facebookAppId'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar10 .= '
	';
if ($xenOptions['facebookAdmins'])
{
$__compilerVar10 .= '<meta property="fb:admins" content="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $xenOptions['facebookAdmins'],
'1' => ','
)) . '" />';
}
$__compilerVar10 .= '
';
}
$__extraData['head']['openGraph'] .= $__compilerVar10;
unset($__compilerVar7, $__compilerVar8, $__compilerVar9, $__compilerVar10);
}
$__output .= '
';
}
$__output .= '

';
$__extraData['quickNavSelected'] = '';
$__extraData['quickNavSelected'] .= 'node-' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
$__extraData['bodyClasses'] = '';
$__extraData['bodyClasses'] .= XenForo_Template_Helper_Core::callHelper('nodeClasses', array(
'0' => $nodeBreadCrumbs,
'1' => $forum
));
$__output .= '
';
$__extraData['searchBar']['forum'] = '';
$__compilerVar11 = '';
$__compilerVar11 .= '<label title="' . 'Search only ' . htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8') . '' . '"><input type="checkbox" name="nodes[]" value="' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8') . '"
	id="search_bar_nodes" class="Disabler AutoChecker" checked="checked"
	data-uncheck="#search_bar_thread" /> ' . 'Search this forum only' . '</label>
	<ul id="search_bar_nodes_Disabler">
		<li><label><input type="checkbox" name="type[post][group_discussion]" value="1"
			id="search_bar_group_discussion" class="AutoChecker"
			data-uncheck="#search_bar_thread" /> ' . 'Display results as threads' . '</label></li>
	</ul>';
$__extraData['searchBar']['forum'] .= $__compilerVar11;
unset($__compilerVar11);
$__output .= '

';
if ($canPostThread)
{
$__output .= '
	';
$newDiscussionButton = '';
$newDiscussionButton .= '<a href="' . XenForo_Template_Helper_Core::link('forums/create-thread', $forum, array()) . '" class="callToAction"><span>' . 'Post New Thread' . '</span></a>';
$__output .= '
	';
if (!$renderedNodes)
{
$__output .= '
		';
$__extraData['topctrl'] = '';
$__extraData['topctrl'] .= $newDiscussionButton;
$__output .= '
	';
}
$__output .= '
';
}
$__output .= '

';
if ($showPostedNotice)
{
$__output .= '
	<div class="importantMessage">' . 'Your message has been submitted and will be displayed pending approval by a moderator.' . '</div>
';
}
$__output .= '

';
if ($renderedNodes)
{
$__output .= '
	';
$__compilerVar12 = '';
$__compilerVar13 = '';
$__compilerVar12 .= $this->callTemplateHook('ad_forum_view_above_node_list', $__compilerVar13, array());
unset($__compilerVar13);
$__output .= $__compilerVar12;
unset($__compilerVar12);
$__output .= '
	';
$__compilerVar14 = '';
$this->addRequiredExternal('css', 'node_list');
$__compilerVar14 .= '

';
$__compilerVar15 = '';
$__compilerVar15 .= '
		';
foreach ($renderedNodes AS $node)
{
$__compilerVar15 .= $node;
}
$__compilerVar15 .= '
	';
if (trim($__compilerVar15) !== '')
{
$__compilerVar14 .= '
	<ol class="nodeList sectionMain" id="forums">
	' . $__compilerVar15 . '
	</ol>
';
}
unset($__compilerVar15);
$__compilerVar14 .= '

' . '
' . '
' . '
' . '

' . '
' . '
' . '
' . '

' . '
' . '
' . '
' . '

' . '
' . '
' . '
';
$__output .= $__compilerVar14;
unset($__compilerVar14);
$__output .= '
	';
if ($newDiscussionButton)
{
$__output .= '
		<div class="nodeListNewDiscussionButton">' . $newDiscussionButton . '</div>
	';
}
$__output .= '
';
}
$__output .= '

';
$__compilerVar16 = '';
$__output .= $this->callTemplateHook('forum_view_pagenav_before', $__compilerVar16, array(
'forum' => $forum
));
unset($__compilerVar16);
$__output .= '

';
$__compilerVar17 = '';
$__compilerVar18 = '';
$__compilerVar17 .= $this->callTemplateHook('ad_forum_view_above_thread_list', $__compilerVar18, array());
unset($__compilerVar18);
$__output .= $__compilerVar17;
unset($__compilerVar17);
$__output .= '

<div class="pageNavLinkGroup">

	<div class="linkGroup SelectionCountContainer">
		';
if ($canWatchForum)
{
$__output .= '
			<a href="' . XenForo_Template_Helper_Core::link('forums/watch', $forum, array()) . '" class="OverlayTrigger" data-cacheOverlay="false">' . (($forum['forum_is_watched']) ? ('Unwatch Forum') : ('Watch Forum')) . '</a>
		';
}
$__output .= '
	</div>

	' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($threadsPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalThreads, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'forums', $forum, $pageNavParams, false, array())) . '

</div>

';
$__compilerVar19 = '';
$__output .= $this->callTemplateHook('forum_view_threads_before', $__compilerVar19, array(
'forum' => $forum
));
unset($__compilerVar19);
$__output .= '

<div class="discussionList section sectionMain">
	';
$__compilerVar20 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar20 .= '
';
$this->addRequiredExternal('js', 'js/xenforo/discussion_list.js');
$__compilerVar20 .= '

<form action="' . XenForo_Template_Helper_Core::link('inline-mod/thread/switch', false, array()) . '" method="post"
	class="DiscussionList InlineModForm"
	data-cookieName="threads"
	data-controls="#InlineModControls"
	data-imodOptions="#ModerationSelect option">
	
	';
$__compilerVar21 = '';
$__compilerVar21 .= '
			';
if ($displayConditions['prefix_id'])
{
$__compilerVar21 .= '
				<dt>' . 'Prefix' . ':</dt>
				<dd><a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array(
'_params' => $pageNavParams,
'prefix_id' => ''
)) . '" class="removeFilter Tooltip" title="' . 'Remove Filter' . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $displayConditions['prefix_id'],
'1' => 'escaped',
'2' => ''
)) . ' <span class="gadget">x</span></a></dd>
			';
}
$__compilerVar21 .= '
			';
if (trim($__compilerVar21) !== '')
{
$__compilerVar20 .= '
		<div class="discussionListFilters secondaryContent">
			<h3 class="filtersHeading">' . 'Filters' . ':</h3>
			<dl class="pairsInline filterPairs">
			' . $__compilerVar21 . '
			</dl>
			<dl class="pairsInline removeAll">
				<dt>' . 'Remove All Filters' . ':</dt>
				<dd><a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array(
'order' => $pageNavParams['order'],
'direction' => $pageNavParams['direction']
)) . '" class="removeAllFilters Tooltip" data-tipclass="flipped" data-offsetx="8" title="' . 'Remove All Filters' . '">x</a></dd>
			</dl>
		</div>
	';
}
unset($__compilerVar21);
$__compilerVar20 .= '

	<dl class="sectionHeaders">
		<dt class="posterAvatar"><a><span>' . 'Sort By' . ':</span></a></dt>
		<dd class="main">
			<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array(
'_params' => $orderParams['title']
)) . '" class="title"><span>' . 'Title' . XenForo_Template_Helper_Core::callHelper('sortArrow', array(
'0' => $order,
'1' => $orderDirection,
'2' => 'title'
)) . '</span></a>
			<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array(
'_params' => $orderParams['post_date']
)) . '" class="postDate"><span>' . 'Start Date' . XenForo_Template_Helper_Core::callHelper('sortArrow', array(
'0' => $order,
'1' => $orderDirection,
'2' => 'post_date'
)) . '</span></a>
		</dd>
		<dd class="stats">
			<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array(
'_params' => $orderParams['reply_count']
)) . '" class="major"><span>' . 'Replies' . XenForo_Template_Helper_Core::callHelper('sortArrow', array(
'0' => $order,
'1' => $orderDirection,
'2' => 'reply_count'
)) . '</span></a>
			<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array(
'_params' => $orderParams['view_count']
)) . '" class="minor"><span>' . 'Views' . XenForo_Template_Helper_Core::callHelper('sortArrow', array(
'0' => $order,
'1' => $orderDirection,
'2' => 'view_count'
)) . '</span></a>
		</dd>
		<dd class="lastPost"><a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array(
'_params' => $orderParams['last_post_date']
)) . '"><span>' . 'Last Message' . XenForo_Template_Helper_Core::callHelper('sortArrow', array(
'0' => $order,
'1' => $orderDirection,
'2' => 'last_post_date'
)) . '</span></a></dd>
	</dl>

	<ol class="discussionListItems">
	';
if ($stickyThreads OR $threads)
{
$__compilerVar20 .= '
		';
$showLastPageNumbers = '';
$showLastPageNumbers .= '1';
$__compilerVar20 .= '
		';
$linkPrefix = '';
$linkPrefix .= '1';
$__compilerVar20 .= '
	
		';
$__compilerVar22 = '';
$__compilerVar22 .= '
		';
foreach ($stickyThreads AS $thread)
{
$__compilerVar22 .= '
			';
$__compilerVar23 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar23 .= '

';
if ($thread['isDeleted'])
{
$__compilerVar24 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar24 .= '

<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="discussionListItem ' . htmlspecialchars($thread['discussion_state'], ENT_QUOTES, 'UTF-8') . (($thread['isNew']) ? (' new') : ('')) . (($thread['prefix_id']) ? (' prefix' . htmlspecialchars($thread['prefix_id'], ENT_QUOTES, 'UTF-8')) : ('')) . (($thread['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['username'], ENT_QUOTES, 'UTF-8') . '">

	<div class="listBlock posterAvatar">
		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread,(true),array(
'user' => '$thread',
'size' => 's',
'img' => 'true'
),'')) . '
	</div>

	<div class="listBlock main">

		<div class="titleText">
			';
$__compilerVar25 = '';
$__compilerVar25 .= '
					';
if ($thread['discussion_state'] == ('moderated'))
{
$__compilerVar25 .= '<span class="moderated" title="' . 'Moderated' . '">' . 'Moderated' . '</span>';
}
$__compilerVar25 .= '
					';
if (!$thread['discussion_open'])
{
$__compilerVar25 .= '<span class="locked" title="' . 'Locked' . '">' . 'Locked' . '</span>';
}
$__compilerVar25 .= '
					';
if ($thread['sticky'])
{
$__compilerVar25 .= '<span class="sticky" title="' . 'Sticky' . '">' . 'Sticky' . '</span>';
}
$__compilerVar25 .= '
					';
if ($thread['discussion_type'] == ('redirect'))
{
$__compilerVar25 .= '<span class="redirect" title="' . 'Redirect' . '">' . 'Redirect' . '</span>';
}
$__compilerVar25 .= '
				';
if (trim($__compilerVar25) !== '')
{
$__compilerVar24 .= '
				<div class="iconKey">
				' . $__compilerVar25 . '
				</div>
			';
}
unset($__compilerVar25);
$__compilerVar24 .= '

			<h3 class="title muted">
				';
if ($thread['canInlineMod'])
{
$__compilerVar24 .= '<input type="checkbox" name="threads[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck" id="inlineModCheck-thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" data-target="#thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select thread' . ': ' . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar24 .= '
				' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . '
				<label for="inlineModCheck-thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '">' . XenForo_Template_Helper_Core::callHelper('wrap', array(
'0' => $thread['title'],
'1' => '50'
)) . '</label>
			</h3>

			<div class="secondRow">
				<div class="deletionNote">
					' . 'This thread, started by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $thread
)) . ', has been deleted.' . '
					';
if ($thread['delete_username'])
{
$__compilerVar24 .= '
						' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $thread['deleteInfo']
)) . '' . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['delete_date'],array(
'time' => htmlspecialchars($thread['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($thread['delete_reason'])
{
$__compilerVar24 .= ', ' . 'Reason' . ': ' . htmlspecialchars($thread['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar24 .= '.
					';
}
$__compilerVar24 .= '
				</div>

				<div class="controls faint">
					<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array()) . '" class="viewLink">' . 'View' . '</a>
					';
if ($thread['canEditThread'])
{
$__compilerVar24 .= '<a href="javascript:" data-href="' . XenForo_Template_Helper_Core::link('threads/list-item-edit', $thread, array()) . '" class="EditControl JsOnly">' . 'Edit' . '</a>';
}
$__compilerVar24 .= '
				</div>
			</div>
		</div>

	</div>

	<div class="listBlock statsLastPost"></div>

</li>';
$__compilerVar23 .= $__compilerVar24;
unset($__compilerVar24);
}
else
{
$__compilerVar23 .= '

<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="discussionListItem ' . htmlspecialchars($thread['discussion_state'], ENT_QUOTES, 'UTF-8') . ((!$thread['discussion_open']) ? (' locked') : ('')) . (($thread['sticky']) ? (' sticky') : ('')) . (($thread['isNew']) ? (' unread') : ('')) . (($thread['prefix_id']) ? (' prefix' . htmlspecialchars($thread['prefix_id'], ENT_QUOTES, 'UTF-8')) : ('')) . (($thread['isIgnored']) ? (' ignored') : ('')) . ' ' . (($thread['thread_is_watched']) ? ('threadWatched') : ('')) . ' ' . (($thread['forum_is_watched']) ? ('forumWatched') : ('')) . '" data-author="' . htmlspecialchars($thread['username'], ENT_QUOTES, 'UTF-8') . '">

	<div class="listBlock posterAvatar">
		<span class="avatarContainer">
			' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread,(true),array(
'user' => '$thread',
'size' => 's',
'img' => 'true'
),'')) . '
			';
if ($thread['user_post_count'])
{
$__compilerVar23 .= XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,(true),array(
'user' => '$visitor',
'size' => 's',
'img' => 'true',
'class' => 'miniMe',
'title' => 'You have posted ' . XenForo_Template_Helper_Core::numberFormat($thread['user_post_count'], '0') . ' message(s) in this thread'
),''));
}
$__compilerVar23 .= '
		</span>
	</div>

	<div class="listBlock main">

		<div class="titleText">
			';
$__compilerVar26 = '';
$__compilerVar26 .= '
					';
$__compilerVar27 = '';
$__compilerVar27 .= '
					';
if ($thread['isModerated'])
{
$__compilerVar27 .= '<span class="moderated" title="' . 'Moderated' . '">' . 'Moderated' . '</span>';
}
$__compilerVar27 .= '
					';
if (!$thread['discussion_open'])
{
$__compilerVar27 .= '<span class="locked" title="' . 'Locked' . '">' . 'Locked' . '</span>';
}
$__compilerVar27 .= '
					';
if ($thread['sticky'])
{
$__compilerVar27 .= '<span class="sticky" title="' . 'Sticky' . '">' . 'Sticky' . '</span>';
}
$__compilerVar27 .= '
					';
if ($thread['isRedirect'])
{
$__compilerVar27 .= '<span class="redirect" title="' . 'Redirect' . '">' . 'Redirect' . '</span>';
}
$__compilerVar27 .= '
					';
if ($thread['thread_is_watched'] OR $thread['forum_is_watched'])
{
$__compilerVar27 .= '<span class="watched" title="' . 'Watched' . '">' . 'Watched' . '</span>';
}
$__compilerVar27 .= '
					';
$__compilerVar26 .= $this->callTemplateHook('thread_list_item_icon_key', $__compilerVar27, array(
'thread' => $thread
));
unset($__compilerVar27);
$__compilerVar26 .= '
				';
if (trim($__compilerVar26) !== '')
{
$__compilerVar23 .= '
				<div class="iconKey">
				' . $__compilerVar26 . '
				</div>
			';
}
unset($__compilerVar26);
$__compilerVar23 .= '

			<h3 class="title">
				';
if ($thread['canInlineMod'])
{
$__compilerVar23 .= '<input type="checkbox" name="threads[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck" id="inlineModCheck-thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" data-target="#thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select thread' . ': ' . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar23 .= '
				';
if ($showSubscribeOptions)
{
$__compilerVar23 .= '<input type="checkbox" name="thread_ids[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar23 .= '
				';
if ($thread['prefix_id'])
{
$__compilerVar23 .= '
					';
if ($linkPrefix)
{
$__compilerVar23 .= '
						<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array(
'prefix_id' => $thread['prefix_id']
)) . '" class="prefixLink"
							title="' . 'Show only threads prefixed by \'' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread,
'1' => 'plain',
'2' => ''
)) . '\'.' . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread,
'1' => 'html',
'2' => ''
)) . '</a>
					';
}
else
{
$__compilerVar23 .= '
						' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . '
					';
}
$__compilerVar23 .= '
				';
}
$__compilerVar23 .= '
				<a href="' . XenForo_Template_Helper_Core::link('threads' . (($thread['isNew'] AND $thread['haveReadData']) ? ('/unread') : ('')), $thread, array()) . '"
					title="' . (($thread['isNew'] AND $thread['haveReadData']) ? ('Go to first unread message') : ('')) . '"
					class="' . (($thread['hasPreview']) ? ('PreviewTooltip') : ('')) . '"
					data-previewUrl="' . (($thread['hasPreview']) ? (XenForo_Template_Helper_Core::link('threads/preview', $thread, array())) : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('wrap', array(
'0' => $thread['title'],
'1' => '50'
)) . '</a>
				';
if ($thread['isNew'])
{
$__compilerVar23 .= '<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '" class="unreadLink" title="' . 'Go to first unread message' . '"></a>';
}
$__compilerVar23 .= '
			</h3>
			
			<div class="secondRow">
				<div class="posterDate muted">
					' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($thread,'',false,array(
'title' => 'Thread starter'
))) . '<span class="startDate">,
					<a' . (($visitor['user_id']) ? (' href="' . XenForo_Template_Helper_Core::link('threads', $thread, array()) . '"') : ('')) . ' class="faint">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['post_date'],array(
'time' => '$thread.post_date',
'title' => (($visitor['user_id']) ? ('Go to first message in thread') : (''))
))) . '</a></span>';
if ($showForumLink)
{
$__compilerVar23 .= '<span class="containerName">,
					<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a></span>';
}
$__compilerVar23 .= '

					';
if ($showLastPageNumbers AND $thread['lastPageNumbers'])
{
$__compilerVar23 .= '
						<span class="itemPageNav">
							<span>...</span>
							';
foreach ($thread['lastPageNumbers'] AS $pageNumber)
{
$__compilerVar23 .= '
								<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array(
'page' => $pageNumber
)) . '">' . htmlspecialchars($pageNumber, ENT_QUOTES, 'UTF-8') . '</a>
							';
}
$__compilerVar23 .= '
						</span>
					';
}
$__compilerVar23 .= '
				</div>

				<div class="controls faint">
					';
if ($thread['canEditThread'])
{
$__compilerVar23 .= '<a href="javascript:" data-href="' . XenForo_Template_Helper_Core::link('threads/list-item-edit', $thread, array(
'showForumLink' => $showForumLink
)) . '" class="EditControl JsOnly">' . 'Edit' . '</a>';
}
$__compilerVar23 .= '
					';
if ($showSubscribeOptions AND $thread['email_subscribe'])
{
$__compilerVar23 .= 'Email';
}
$__compilerVar23 .= '
				</div>
			</div>
		</div>
	</div>

	<div class="listBlock stats pairsJustified" title="' . 'Members who liked the first message' . ': ' . (($thread['isRedirect']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($thread['first_post_likes'], '0'))) . '">
		<dl class="major"><dt>' . 'Replies' . ':</dt> <dd>';
if ($thread['isRedirect'])
{
$__compilerVar23 .= '
&ndash;
';
}
else
{
$__compilerVar23 .= '
';
if ($visitor['permissions']['forum']['whoRepliedView'] and $thread['reply_count'] > 0)
{
$__compilerVar23 .= '
<a href="' . XenForo_Template_Helper_Core::link('threads/whoreplied', $thread, array()) . '" title="' . 'Who Replied?' . '" class=\'OverlayTrigger\' data-href="' . XenForo_Template_Helper_Core::link('threads/whoreplied', $thread, array()) . '">' . XenForo_Template_Helper_Core::numberFormat($thread['reply_count'], '0') . '</a>
';
}
else
{
$__compilerVar23 .= '
' . htmlspecialchars($thread['reply_count'], ENT_QUOTES, 'UTF-8') . '
';
}
$__compilerVar23 .= '
';
}
$__compilerVar23 .= '</dd></dl>
		<dl class="minor"><dt>' . 'Views' . ':</dt> <dd>' . (($thread['isRedirect']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($thread['view_count'], '0'))) . '</dd></dl>
	</div>

	<div class="listBlock lastPost">
		';
if ($thread['isRedirect'])
{
$__compilerVar23 .= '
			<div class="lastPostInfo">' . 'N/A' . '</div>
		';
}
else
{
$__compilerVar23 .= '
			<dl class="lastPostInfo">
				<dt>';
if (XenForo_Template_Helper_Core::callHelper('isIgnored', array(
'0' => $thread['last_post_user_id']
)))
{
$__compilerVar23 .= 'Ignored Member';
}
else
{
$__compilerVar23 .= XenForo_Template_Helper_Core::callHelper('usernamehtml', array($thread['lastPostInfo'],'',false,array()));
}
$__compilerVar23 .= '</dt>
				<dd class="muted"><a' . (($visitor['user_id']) ? (' href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '" title="' . 'Go to last message' . '"') : ('')) . ' class="dateTime">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '</a></dd>
			</dl>
		';
}
$__compilerVar23 .= '
	</div>
</li>

';
}
$__compilerVar22 .= $__compilerVar23;
unset($__compilerVar23);
$__compilerVar22 .= '
		';
}
$__compilerVar22 .= '
		';
$__compilerVar20 .= $this->callTemplateHook('thread_list_stickies', $__compilerVar22, array());
unset($__compilerVar22);
$__compilerVar20 .= '
		
		';
$__compilerVar28 = '';
$__compilerVar29 = '';
$__compilerVar28 .= $this->callTemplateHook('ad_thread_list_below_stickies', $__compilerVar29, array());
unset($__compilerVar29);
$__compilerVar20 .= $__compilerVar28;
unset($__compilerVar28);
$__compilerVar20 .= '
		
		';
$__compilerVar30 = '';
$__compilerVar30 .= '
		';
foreach ($threads AS $thread)
{
$__compilerVar30 .= '
			';
$__compilerVar31 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar31 .= '

';
if ($thread['isDeleted'])
{
$__compilerVar32 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar32 .= '

<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="discussionListItem ' . htmlspecialchars($thread['discussion_state'], ENT_QUOTES, 'UTF-8') . (($thread['isNew']) ? (' new') : ('')) . (($thread['prefix_id']) ? (' prefix' . htmlspecialchars($thread['prefix_id'], ENT_QUOTES, 'UTF-8')) : ('')) . (($thread['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['username'], ENT_QUOTES, 'UTF-8') . '">

	<div class="listBlock posterAvatar">
		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread,(true),array(
'user' => '$thread',
'size' => 's',
'img' => 'true'
),'')) . '
	</div>

	<div class="listBlock main">

		<div class="titleText">
			';
$__compilerVar33 = '';
$__compilerVar33 .= '
					';
if ($thread['discussion_state'] == ('moderated'))
{
$__compilerVar33 .= '<span class="moderated" title="' . 'Moderated' . '">' . 'Moderated' . '</span>';
}
$__compilerVar33 .= '
					';
if (!$thread['discussion_open'])
{
$__compilerVar33 .= '<span class="locked" title="' . 'Locked' . '">' . 'Locked' . '</span>';
}
$__compilerVar33 .= '
					';
if ($thread['sticky'])
{
$__compilerVar33 .= '<span class="sticky" title="' . 'Sticky' . '">' . 'Sticky' . '</span>';
}
$__compilerVar33 .= '
					';
if ($thread['discussion_type'] == ('redirect'))
{
$__compilerVar33 .= '<span class="redirect" title="' . 'Redirect' . '">' . 'Redirect' . '</span>';
}
$__compilerVar33 .= '
				';
if (trim($__compilerVar33) !== '')
{
$__compilerVar32 .= '
				<div class="iconKey">
				' . $__compilerVar33 . '
				</div>
			';
}
unset($__compilerVar33);
$__compilerVar32 .= '

			<h3 class="title muted">
				';
if ($thread['canInlineMod'])
{
$__compilerVar32 .= '<input type="checkbox" name="threads[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck" id="inlineModCheck-thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" data-target="#thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select thread' . ': ' . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar32 .= '
				' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . '
				<label for="inlineModCheck-thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '">' . XenForo_Template_Helper_Core::callHelper('wrap', array(
'0' => $thread['title'],
'1' => '50'
)) . '</label>
			</h3>

			<div class="secondRow">
				<div class="deletionNote">
					' . 'This thread, started by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $thread
)) . ', has been deleted.' . '
					';
if ($thread['delete_username'])
{
$__compilerVar32 .= '
						' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $thread['deleteInfo']
)) . '' . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['delete_date'],array(
'time' => htmlspecialchars($thread['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($thread['delete_reason'])
{
$__compilerVar32 .= ', ' . 'Reason' . ': ' . htmlspecialchars($thread['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar32 .= '.
					';
}
$__compilerVar32 .= '
				</div>

				<div class="controls faint">
					<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array()) . '" class="viewLink">' . 'View' . '</a>
					';
if ($thread['canEditThread'])
{
$__compilerVar32 .= '<a href="javascript:" data-href="' . XenForo_Template_Helper_Core::link('threads/list-item-edit', $thread, array()) . '" class="EditControl JsOnly">' . 'Edit' . '</a>';
}
$__compilerVar32 .= '
				</div>
			</div>
		</div>

	</div>

	<div class="listBlock statsLastPost"></div>

</li>';
$__compilerVar31 .= $__compilerVar32;
unset($__compilerVar32);
}
else
{
$__compilerVar31 .= '

<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="discussionListItem ' . htmlspecialchars($thread['discussion_state'], ENT_QUOTES, 'UTF-8') . ((!$thread['discussion_open']) ? (' locked') : ('')) . (($thread['sticky']) ? (' sticky') : ('')) . (($thread['isNew']) ? (' unread') : ('')) . (($thread['prefix_id']) ? (' prefix' . htmlspecialchars($thread['prefix_id'], ENT_QUOTES, 'UTF-8')) : ('')) . (($thread['isIgnored']) ? (' ignored') : ('')) . ' ' . (($thread['thread_is_watched']) ? ('threadWatched') : ('')) . ' ' . (($thread['forum_is_watched']) ? ('forumWatched') : ('')) . '" data-author="' . htmlspecialchars($thread['username'], ENT_QUOTES, 'UTF-8') . '">

	<div class="listBlock posterAvatar">
		<span class="avatarContainer">
			' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread,(true),array(
'user' => '$thread',
'size' => 's',
'img' => 'true'
),'')) . '
			';
if ($thread['user_post_count'])
{
$__compilerVar31 .= XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,(true),array(
'user' => '$visitor',
'size' => 's',
'img' => 'true',
'class' => 'miniMe',
'title' => 'You have posted ' . XenForo_Template_Helper_Core::numberFormat($thread['user_post_count'], '0') . ' message(s) in this thread'
),''));
}
$__compilerVar31 .= '
		</span>
	</div>

	<div class="listBlock main">

		<div class="titleText">
			';
$__compilerVar34 = '';
$__compilerVar34 .= '
					';
$__compilerVar35 = '';
$__compilerVar35 .= '
					';
if ($thread['isModerated'])
{
$__compilerVar35 .= '<span class="moderated" title="' . 'Moderated' . '">' . 'Moderated' . '</span>';
}
$__compilerVar35 .= '
					';
if (!$thread['discussion_open'])
{
$__compilerVar35 .= '<span class="locked" title="' . 'Locked' . '">' . 'Locked' . '</span>';
}
$__compilerVar35 .= '
					';
if ($thread['sticky'])
{
$__compilerVar35 .= '<span class="sticky" title="' . 'Sticky' . '">' . 'Sticky' . '</span>';
}
$__compilerVar35 .= '
					';
if ($thread['isRedirect'])
{
$__compilerVar35 .= '<span class="redirect" title="' . 'Redirect' . '">' . 'Redirect' . '</span>';
}
$__compilerVar35 .= '
					';
if ($thread['thread_is_watched'] OR $thread['forum_is_watched'])
{
$__compilerVar35 .= '<span class="watched" title="' . 'Watched' . '">' . 'Watched' . '</span>';
}
$__compilerVar35 .= '
					';
$__compilerVar34 .= $this->callTemplateHook('thread_list_item_icon_key', $__compilerVar35, array(
'thread' => $thread
));
unset($__compilerVar35);
$__compilerVar34 .= '
				';
if (trim($__compilerVar34) !== '')
{
$__compilerVar31 .= '
				<div class="iconKey">
				' . $__compilerVar34 . '
				</div>
			';
}
unset($__compilerVar34);
$__compilerVar31 .= '

			<h3 class="title">
				';
if ($thread['canInlineMod'])
{
$__compilerVar31 .= '<input type="checkbox" name="threads[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck" id="inlineModCheck-thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" data-target="#thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select thread' . ': ' . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar31 .= '
				';
if ($showSubscribeOptions)
{
$__compilerVar31 .= '<input type="checkbox" name="thread_ids[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar31 .= '
				';
if ($thread['prefix_id'])
{
$__compilerVar31 .= '
					';
if ($linkPrefix)
{
$__compilerVar31 .= '
						<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array(
'prefix_id' => $thread['prefix_id']
)) . '" class="prefixLink"
							title="' . 'Show only threads prefixed by \'' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread,
'1' => 'plain',
'2' => ''
)) . '\'.' . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread,
'1' => 'html',
'2' => ''
)) . '</a>
					';
}
else
{
$__compilerVar31 .= '
						' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . '
					';
}
$__compilerVar31 .= '
				';
}
$__compilerVar31 .= '
				<a href="' . XenForo_Template_Helper_Core::link('threads' . (($thread['isNew'] AND $thread['haveReadData']) ? ('/unread') : ('')), $thread, array()) . '"
					title="' . (($thread['isNew'] AND $thread['haveReadData']) ? ('Go to first unread message') : ('')) . '"
					class="' . (($thread['hasPreview']) ? ('PreviewTooltip') : ('')) . '"
					data-previewUrl="' . (($thread['hasPreview']) ? (XenForo_Template_Helper_Core::link('threads/preview', $thread, array())) : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('wrap', array(
'0' => $thread['title'],
'1' => '50'
)) . '</a>
				';
if ($thread['isNew'])
{
$__compilerVar31 .= '<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '" class="unreadLink" title="' . 'Go to first unread message' . '"></a>';
}
$__compilerVar31 .= '
			</h3>
			
			<div class="secondRow">
				<div class="posterDate muted">
					' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($thread,'',false,array(
'title' => 'Thread starter'
))) . '<span class="startDate">,
					<a' . (($visitor['user_id']) ? (' href="' . XenForo_Template_Helper_Core::link('threads', $thread, array()) . '"') : ('')) . ' class="faint">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['post_date'],array(
'time' => '$thread.post_date',
'title' => (($visitor['user_id']) ? ('Go to first message in thread') : (''))
))) . '</a></span>';
if ($showForumLink)
{
$__compilerVar31 .= '<span class="containerName">,
					<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a></span>';
}
$__compilerVar31 .= '

					';
if ($showLastPageNumbers AND $thread['lastPageNumbers'])
{
$__compilerVar31 .= '
						<span class="itemPageNav">
							<span>...</span>
							';
foreach ($thread['lastPageNumbers'] AS $pageNumber)
{
$__compilerVar31 .= '
								<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array(
'page' => $pageNumber
)) . '">' . htmlspecialchars($pageNumber, ENT_QUOTES, 'UTF-8') . '</a>
							';
}
$__compilerVar31 .= '
						</span>
					';
}
$__compilerVar31 .= '
				</div>

				<div class="controls faint">
					';
if ($thread['canEditThread'])
{
$__compilerVar31 .= '<a href="javascript:" data-href="' . XenForo_Template_Helper_Core::link('threads/list-item-edit', $thread, array(
'showForumLink' => $showForumLink
)) . '" class="EditControl JsOnly">' . 'Edit' . '</a>';
}
$__compilerVar31 .= '
					';
if ($showSubscribeOptions AND $thread['email_subscribe'])
{
$__compilerVar31 .= 'Email';
}
$__compilerVar31 .= '
				</div>
			</div>
		</div>
	</div>

	<div class="listBlock stats pairsJustified" title="' . 'Members who liked the first message' . ': ' . (($thread['isRedirect']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($thread['first_post_likes'], '0'))) . '">
		<dl class="major"><dt>' . 'Replies' . ':</dt> <dd>';
if ($thread['isRedirect'])
{
$__compilerVar31 .= '
&ndash;
';
}
else
{
$__compilerVar31 .= '
';
if ($visitor['permissions']['forum']['whoRepliedView'] and $thread['reply_count'] > 0)
{
$__compilerVar31 .= '
<a href="' . XenForo_Template_Helper_Core::link('threads/whoreplied', $thread, array()) . '" title="' . 'Who Replied?' . '" class=\'OverlayTrigger\' data-href="' . XenForo_Template_Helper_Core::link('threads/whoreplied', $thread, array()) . '">' . XenForo_Template_Helper_Core::numberFormat($thread['reply_count'], '0') . '</a>
';
}
else
{
$__compilerVar31 .= '
' . htmlspecialchars($thread['reply_count'], ENT_QUOTES, 'UTF-8') . '
';
}
$__compilerVar31 .= '
';
}
$__compilerVar31 .= '</dd></dl>
		<dl class="minor"><dt>' . 'Views' . ':</dt> <dd>' . (($thread['isRedirect']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($thread['view_count'], '0'))) . '</dd></dl>
	</div>

	<div class="listBlock lastPost">
		';
if ($thread['isRedirect'])
{
$__compilerVar31 .= '
			<div class="lastPostInfo">' . 'N/A' . '</div>
		';
}
else
{
$__compilerVar31 .= '
			<dl class="lastPostInfo">
				<dt>';
if (XenForo_Template_Helper_Core::callHelper('isIgnored', array(
'0' => $thread['last_post_user_id']
)))
{
$__compilerVar31 .= 'Ignored Member';
}
else
{
$__compilerVar31 .= XenForo_Template_Helper_Core::callHelper('usernamehtml', array($thread['lastPostInfo'],'',false,array()));
}
$__compilerVar31 .= '</dt>
				<dd class="muted"><a' . (($visitor['user_id']) ? (' href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '" title="' . 'Go to last message' . '"') : ('')) . ' class="dateTime">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '</a></dd>
			</dl>
		';
}
$__compilerVar31 .= '
	</div>
</li>

';
}
$__compilerVar30 .= $__compilerVar31;
unset($__compilerVar31);
$__compilerVar30 .= '
		';
}
$__compilerVar30 .= '
		';
$__compilerVar20 .= $this->callTemplateHook('thread_list_threads', $__compilerVar30, array());
unset($__compilerVar30);
$__compilerVar20 .= '
		
		' . '
	';
}
else
{
$__compilerVar20 .= '
		<li class="primaryContent">' . 'There are no threads to display.' . '</li>
	';
}
$__compilerVar20 .= '
	';
if ($showDateLimitDisabler)
{
$__compilerVar20 .= '
		<li class="discussionListItem"><div class="noteRow secondary"><a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array(
'_params' => $pageNavParams,
'no_date_limit' => '1',
'page' => (($page > 1) ? ($page) : (''))
)) . '">' . 'Click here to display older threads.' . '</a></div></li>
	';
}
$__compilerVar20 .= '
	</ol>

	';
if ($totalThreads OR $inlineModOptions)
{
$__compilerVar20 .= '
		<div class="sectionFooter InlineMod SelectionCountContainer">
			';
if ($totalThreads)
{
$__compilerVar20 .= '<span class="contentSummary">' . 'Showing threads ' . XenForo_Template_Helper_Core::numberFormat($threadStartOffset, '0') . ' to ' . XenForo_Template_Helper_Core::numberFormat($threadEndOffset, '0') . ' of ' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '' . '</span>';
}
$__compilerVar20 .= '

			';
if ($inlineModOptions)
{
$__compilerVar20 .= '
				';
$__compilerVar36 = '';
$__compilerVar37 = '';
$__compilerVar37 .= 'Thread Moderation';
$__compilerVar38 = '';
$__compilerVar38 .= '
		';
if ($inlineModOptions['delete'])
{
$__compilerVar38 .= '<option value="delete">' . 'Delete Threads' . '...</option>';
}
$__compilerVar38 .= '
		';
if ($inlineModOptions['undelete'])
{
$__compilerVar38 .= '<option value="undelete">' . 'Undelete Threads' . '</option>';
}
$__compilerVar38 .= '
		';
if ($inlineModOptions['approve'])
{
$__compilerVar38 .= '<option value="approve">' . 'Approve Threads' . '</option>';
}
$__compilerVar38 .= '
		';
if ($inlineModOptions['unapprove'])
{
$__compilerVar38 .= '<option value="unapprove">' . 'Unapprove Threads' . '</option>';
}
$__compilerVar38 .= '
		';
if ($inlineModOptions['stick'])
{
$__compilerVar38 .= '<option value="stick">' . 'Stick Threads' . '</option>';
}
$__compilerVar38 .= '
		';
if ($inlineModOptions['unstick'])
{
$__compilerVar38 .= '<option value="unstick">' . 'Unstick Threads' . '</option>';
}
$__compilerVar38 .= '
		';
if ($inlineModOptions['lock'])
{
$__compilerVar38 .= '<option value="lock">' . 'Lock Threads' . '</option>';
}
$__compilerVar38 .= '
		';
if ($inlineModOptions['unlock'])
{
$__compilerVar38 .= '<option value="unlock">' . 'Unlock Threads' . '</option>';
}
$__compilerVar38 .= '
		';
if ($inlineModOptions['move'])
{
$__compilerVar38 .= '<option value="move">' . 'Move Threads' . '...</option>';
}
$__compilerVar38 .= '
		';
if ($inlineModOptions['merge'])
{
$__compilerVar38 .= '<option value="merge">' . 'Merge Threads' . '...</option>';
}
$__compilerVar38 .= '
		';
if ($inlineModOptions['edit'])
{
$__compilerVar38 .= '<option value="prefix">' . 'Apply Thread Prefix' . '...</option>';
}
$__compilerVar38 .= '
		<option value="deselect">' . 'Deselect Threads' . '</option>
	';
$__compilerVar39 = '';
$__compilerVar39 .= 'Select / deselect all threads on this page';
$__compilerVar40 = '';
$__compilerVar40 .= 'Selected Threads';
$__compilerVar41 = '';
$this->addRequiredExternal('css', 'inline_mod');
$__compilerVar41 .= '
';
$this->addRequiredExternal('js', 'js/xenforo/inline_mod.js');
$__compilerVar41 .= '

<span id="InlineModControls">
	<span class="selectionControl secondaryContent">
		<label for="ModerationCheck">
			' . 'Select All' . ' <input type="checkbox" id="ModerationCheck" title="' . htmlspecialchars($__compilerVar39, ENT_QUOTES, 'UTF-8') . '" />
		</label>

		<input type="button" class="button ClickNext" value="&darr;" title="' . 'Move down' . '" />
		<input type="button" class="button ClickPrev" value="&uarr;" title="' . 'Move up' . '" />
		<a class="SelectionCount">' . htmlspecialchars($__compilerVar40, ENT_QUOTES, 'UTF-8') . ': <em class="InlineModCheckedTotal">0</em></a>
	</span>

	<span class="actionControl sectionFooter">
		<span class="commonActions">
			';
if ($inlineModOptions['delete'])
{
$__compilerVar41 .= '<input type="submit" class="button" value="' . 'Delete' . '..." name="delete" />';
}
$__compilerVar41 .= '
			';
if ($inlineModOptions['approve'])
{
$__compilerVar41 .= '<input type="submit" class="button" value="' . 'Approve' . '" name="approve" />';
}
$__compilerVar41 .= '
		</span>

		<span class="otherActions">
			<select name="a" id="ModerationSelect" class="textCtrl">
				<option value="">' . 'Other Action' . '...</option>
				<optgroup label="' . 'Moderation Actions' . '">
					' . $__compilerVar38 . '
				</optgroup>
				<option value="closeOverlay">' . 'Close This Overlay' . '</option>
			</select>

			<input type="submit" class="button primary" value="' . 'Go' . '" />
			<input type="reset" class="button OverlayCloser overylayOnly" value="X" title="' . 'Cancel and close these controls' . '" />
		</span>
	</span>
</span>';
$__compilerVar36 .= $__compilerVar41;
unset($__compilerVar37, $__compilerVar38, $__compilerVar39, $__compilerVar40, $__compilerVar41);
$__compilerVar20 .= $__compilerVar36;
unset($__compilerVar36);
$__compilerVar20 .= '
			';
}
$__compilerVar20 .= '
		</div>
	';
}
$__compilerVar20 .= '

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>

<h3 id="DiscussionListOptionsHandle" class="JsOnly"><a href="#">' . 'Thread Display Options' . '</a></h3>

<form action="' . XenForo_Template_Helper_Core::link('forums', $forum, array()) . '" method="post" class="DiscussionListOptions secondaryContent">

	';
$__compilerVar42 = '';
$__compilerVar42 .= '
	<div class="controlGroup">
		<label for="ctrl_order">' . 'Sort threads by' . ':</label>
		<select name="order" id="ctrl_order" class="textCtrl">
			<option value="last_post_date" ' . (($order == ('last_post_date')) ? ' selected="selected"' : '') . '>' . 'Last message time' . '</option>
			<option value="post_date" ' . (($order == ('post_date')) ? ' selected="selected"' : '') . '>' . 'Thread creation time' . '</option>
			<option value="title" ' . (($order == ('title')) ? ' selected="selected"' : '') . '>' . 'Title (alphabetical)' . '</option>
			<option value="reply_count" ' . (($order == ('reply_count')) ? ' selected="selected"' : '') . '>' . 'Number of replies' . '</option>
			<option value="view_count" ' . (($order == ('view_count')) ? ' selected="selected"' : '') . '>' . 'Number of views' . '</option>
			<option value="first_post_likes" ' . (($order == ('first_post_likes')) ? ' selected="selected"' : '') . '>' . 'First message likes' . '</option>
		</select>
	</div>

	<div class="controlGroup">
		<label for="ctrl_direction">' . 'Order threads in' . ':</label>
		<select name="direction" id="ctrl_direction" class="textCtrl">
			<option value="desc" ' . (($orderDirection == ('desc')) ? ' selected="selected"' : '') . '>' . 'Descending order' . '</option>
			<option value="asc" ' . (($orderDirection == ('asc')) ? ' selected="selected"' : '') . '>' . 'Ascending order' . '</option>
		</select>
	</div>
	
	';
if ($forum['prefixCache'])
{
$__compilerVar42 .= '
		<div class="controlGroup">
			<label for="ctrl_prefix_id">' . 'Prefix' . ':</label>
			<select name="prefix_id" id="ctrl_prefix_id" class="textCtrl">
				<option value="0" ' . ((!$displayConditions['prefix_id']) ? ' selected="selected"' : '') . '>(' . 'Any' . ')</option>
				';
foreach ($forum['prefixCache'] AS $prefixGroupId => $prefixes)
{
$__compilerVar42 .= '
					';
if ($prefixGroupId)
{
$__compilerVar42 .= '
						<optgroup label="' . XenForo_Template_Helper_Core::callHelper('threadPrefixGroup', array(
'0' => $prefixGroupId
)) . '">
						';
foreach ($prefixes AS $prefixId)
{
$__compilerVar42 .= '
							<option value="' . htmlspecialchars($prefixId, ENT_QUOTES, 'UTF-8') . '" ' . (($displayConditions['prefix_id'] == $prefixId) ? ' selected="selected"' : '') . '>' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $prefixId,
'1' => 'escaped',
'2' => ''
)) . '</option>
						';
}
$__compilerVar42 .= '
						</optgroup>
					';
}
else
{
$__compilerVar42 .= '
						';
foreach ($prefixes AS $prefixId)
{
$__compilerVar42 .= '
							<option value="' . htmlspecialchars($prefixId, ENT_QUOTES, 'UTF-8') . '" ' . (($displayConditions['prefix_id'] == $prefixId) ? ' selected="selected"' : '') . '>' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $prefixId,
'1' => 'escaped',
'2' => ''
)) . '</option>
						';
}
$__compilerVar42 .= '
					';
}
$__compilerVar42 .= '
				';
}
$__compilerVar42 .= '
			</select>
		</div>
	';
}
$__compilerVar42 .= '

	<div class="buttonGroup">
		<input type="submit" class="button primary" value="' . 'Set Options' . '" />
		<input type="reset" class="button" value="' . 'Cancel' . '" />
	</div>
	';
$__compilerVar20 .= $this->callTemplateHook('thread_list_options', $__compilerVar42, array());
unset($__compilerVar42);
$__compilerVar20 .= '

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>

';
$__compilerVar43 = '';
$__compilerVar43 .= '<div id="PreviewTooltip">
	<span class="arrow"><span></span></span>
	
	<div class="section">
		<div class="primaryContent previewContent">
			<span class="PreviewContents">' . 'Loading' . '...</span>
		</div>
	</div>
</div>';
$__compilerVar20 .= $__compilerVar43;
unset($__compilerVar43);
$__output .= $__compilerVar20;
unset($__compilerVar20);
$__output .= '
</div>
	
<div class="pageNavLinkGroup afterDiscussionListHandle">
	<div class="linkGroup">
		';
if ($canPostThread)
{
$__output .= '
			<a href="' . XenForo_Template_Helper_Core::link('forums/create-thread', $forum, array()) . '" class="callToAction"><span>' . 'Post New Thread' . '</span></a>
		';
}
else if ($visitor['user_id'])
{
$__output .= '
			<span class="element">(' . 'You have insufficient privileges to post here.' . ')</span>
		';
}
else
{
$__output .= '
			<label for="LoginControl"><a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="concealed element">(' . 'You must log in or sign up to post here.' . ')</a></label>
		';
}
$__output .= '
	</div>
	<div class="linkGroup"' . ((!$ignoredNames) ? (' style="display: none"') : ('')) . '><a href="javascript:" class="muted JsOnly DisplayIgnoredContent Tooltip" title="' . 'Show hidden content by ' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $ignoredNames,
'1' => ', '
)) . '' . '">' . 'Show Ignored Content' . '</a></div>
	
	' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($threadsPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalThreads, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'forums', $forum, $pageNavParams, false, array())) . '
</div>';
