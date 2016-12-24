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
$__compilerVar13 .= '
	
		';
$__compilerVar14 = '';
$__compilerVar14 .= '
				';
$__compilerVar15 = '';
$__compilerVar14 .= $this->callTemplateHook('ad_forum_view_above_node_list', $__compilerVar15, array());
unset($__compilerVar15);
$__compilerVar14 .= '
				
				
				
				
				
				
			';
if (trim($__compilerVar14) !== '')
{
$__compilerVar13 .= '
			' . $__compilerVar14 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar13 .= '
			<div>' . 'Template' . ': ad_forum_view_above_node_list</div>
		';
}
unset($__compilerVar14);
$__compilerVar13 .= '
	
	';
if (trim($__compilerVar13) !== '')
{
$__compilerVar12 .= '
	
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers')) ? ('section') : ('sectionMain')) . ' funbox">
	<div class="funboxWrapper">
	' . $__compilerVar13 . '
	</div>
	</div>
	
';
}
unset($__compilerVar13);
$__output .= $__compilerVar12;
unset($__compilerVar12);
$__output .= '
	';
$__compilerVar16 = '';
$this->addRequiredExternal('css', 'node_list');
$__compilerVar16 .= '

';
$__compilerVar17 = '';
$__compilerVar17 .= '
		';
foreach ($renderedNodes AS $node)
{
$__compilerVar17 .= $node;
}
$__compilerVar17 .= '
	';
if (trim($__compilerVar17) !== '')
{
$__compilerVar16 .= '
	<ol class="nodeList section uix_nodeStyle_' . XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') . '" id="forums">
	' . $__compilerVar17 . '
	</ol>
';
}
unset($__compilerVar17);
$__compilerVar16 .= '

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
$__output .= $__compilerVar16;
unset($__compilerVar16);
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
$__compilerVar18 = '';
$__output .= $this->callTemplateHook('forum_view_pagenav_before', $__compilerVar18, array(
'forum' => $forum
));
unset($__compilerVar18);
$__output .= '

';
$__compilerVar19 = '';
$__compilerVar20 = '';
$__compilerVar20 .= '
	
		';
$__compilerVar21 = '';
$__compilerVar21 .= '
				';
$__compilerVar22 = '';
$__compilerVar21 .= $this->callTemplateHook('ad_forum_view_above_thread_list', $__compilerVar22, array());
unset($__compilerVar22);
$__compilerVar21 .= '
				
				
				
				
				
				
				
			';
if (trim($__compilerVar21) !== '')
{
$__compilerVar20 .= '
			' . $__compilerVar21 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar20 .= '
			<div>' . 'Template' . ': ad_forum_view_above_thread_list</div>
		';
}
unset($__compilerVar21);
$__compilerVar20 .= '
	
	';
if (trim($__compilerVar20) !== '')
{
$__compilerVar19 .= '
	
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers')) ? ('section') : ('sectionMain')) . ' funbox">
	<div class="funboxWrapper">
	' . $__compilerVar20 . '
	</div>
	</div>
	
';
}
unset($__compilerVar20);
$__output .= $__compilerVar19;
unset($__compilerVar19);
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
$__compilerVar23 = '';
$__output .= $this->callTemplateHook('forum_view_threads_before', $__compilerVar23, array(
'forum' => $forum
));
unset($__compilerVar23);
$__output .= '

<div class="discussionList section sectionMain">
	';
$__compilerVar24 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar24 .= '
';
$this->addRequiredExternal('js', 'js/xenforo/discussion_list.js');
$__compilerVar24 .= '
';
$__extraData['uix_collapseStickyThreads'] = '';
$__extraData['uix_collapseStickyThreads'] .= htmlspecialchars($uix_collapseStickyThreads, ENT_QUOTES, 'UTF-8');
$__compilerVar24 .= '

<form action="' . XenForo_Template_Helper_Core::link('inline-mod/thread/switch', false, array()) . '" method="post"
	class="DiscussionList InlineModForm"
	data-cookieName="threads"
	data-controls="#InlineModControls"
	data-imodOptions="#ModerationSelect option">
	
	';
$__compilerVar25 = '';
$__compilerVar25 .= '
			';
if ($displayConditions['prefix_id'])
{
$__compilerVar25 .= '
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
$__compilerVar25 .= '
			';
if (trim($__compilerVar25) !== '')
{
$__compilerVar24 .= '
		<div class="discussionListFilters secondaryContent">
			<h3 class="filtersHeading">' . 'Filters' . ':</h3>
			<dl class="pairsInline filterPairs">
			' . $__compilerVar25 . '
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
unset($__compilerVar25);
$__compilerVar24 .= '

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
$__compilerVar24 .= '
		';
$showLastPageNumbers = '';
$showLastPageNumbers .= '1';
$__compilerVar24 .= '
		';
$linkPrefix = '';
$linkPrefix .= '1';
$__compilerVar24 .= '
		
		
		
		';
if ($stickyThreads)
{
$__compilerVar24 .= '
			<div class="uix_stickyThreadWrapper node ';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapseSticky') && $uix_collapseStickyThreads)
{
$__compilerVar24 .= ' collapsed';
}
$__compilerVar24 .= '">
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_separateStickyThreads'))
{
$__compilerVar24 .= '
					<li class="heading sticky">
						<span class="headingText">
							' . 'Sticky Threads' . '
						</span>
						';
if ($visitor['user_id'] && XenForo_Template_Helper_Core::styleProperty('uix_collapseSticky'))
{
$__compilerVar24 .= '
						<a href="#" class="uix_collapseNodes" title="Toggle Visibility"><i class="uix_icon uix_icon-collapse"></i></a>
						';
}
$__compilerVar24 .= '
					</li>
				';
}
$__compilerVar24 .= '
			
				
				<div class="uix_stickyThreads">
					';
$__compilerVar26 = '';
$__compilerVar26 .= '
					';
foreach ($stickyThreads AS $thread)
{
$__compilerVar26 .= '
						';
$__compilerVar27 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar27 .= '

';
if ($thread['isDeleted'])
{
$__compilerVar28 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar28 .= '

<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="discussionListItem ' . (($thread['sticky']) ? (' sticky') : ('')) . ' ' . htmlspecialchars($thread['discussion_state'], ENT_QUOTES, 'UTF-8') . (($thread['isNew']) ? (' new') : ('')) . (($thread['prefix_id']) ? (' prefix' . htmlspecialchars($thread['prefix_id'], ENT_QUOTES, 'UTF-8')) : ('')) . (($thread['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['username'], ENT_QUOTES, 'UTF-8') . '">

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
$__compilerVar29 = '';
$__compilerVar29 .= '
					';
if ($thread['discussion_state'] == ('moderated'))
{
$__compilerVar29 .= '<span class="moderated" title="' . 'Moderated' . '">' . 'Moderated' . '</span>';
}
$__compilerVar29 .= '
					';
if (!$thread['discussion_open'])
{
$__compilerVar29 .= '<span class="locked" title="' . 'Locked' . '">' . 'Locked' . '</span>';
}
$__compilerVar29 .= '
					';
if ($thread['sticky'])
{
$__compilerVar29 .= '<span class="sticky" title="' . 'Sticky' . '">' . 'Sticky' . '</span>';
}
$__compilerVar29 .= '
					';
if ($thread['discussion_type'] == ('redirect'))
{
$__compilerVar29 .= '<span class="redirect" title="' . 'Redirect' . '">' . 'Redirect' . '</span>';
}
$__compilerVar29 .= '
				';
if (trim($__compilerVar29) !== '')
{
$__compilerVar28 .= '
				<div class="iconKey">
				' . $__compilerVar29 . '
				</div>
			';
}
unset($__compilerVar29);
$__compilerVar28 .= '

			<h3 class="title muted">
				';
if ($thread['canInlineMod'])
{
$__compilerVar28 .= '<input type="checkbox" name="threads[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck" id="inlineModCheck-thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" data-target="#thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select thread' . ': ' . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar28 .= '
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
$__compilerVar28 .= '
						' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $thread['deleteInfo']
)) . '' . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['delete_date'],array(
'time' => htmlspecialchars($thread['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($thread['delete_reason'])
{
$__compilerVar28 .= ', ' . 'Reason' . ': ' . htmlspecialchars($thread['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar28 .= '.
					';
}
$__compilerVar28 .= '
				</div>

				<div class="controls faint">
					<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array()) . '" class="viewLink">' . 'View' . '</a>
					';
if ($thread['canEditThread'])
{
$__compilerVar28 .= '<a href="javascript:" data-href="' . XenForo_Template_Helper_Core::link('threads/list-item-edit', $thread, array()) . '" class="EditControl JsOnly">' . 'Edit' . '</a>';
}
$__compilerVar28 .= '
				</div>
			</div>
		</div>

	</div>

	<div class="listBlock statsLastPost"></div>

</li>';
$__compilerVar27 .= $__compilerVar28;
unset($__compilerVar28);
}
else
{
$__compilerVar27 .= '

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
$__compilerVar27 .= XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,(true),array(
'user' => '$visitor',
'size' => 's',
'img' => 'true',
'class' => 'miniMe',
'title' => 'You have posted ' . XenForo_Template_Helper_Core::numberFormat($thread['user_post_count'], '0') . ' message(s) in this thread'
),''));
}
$__compilerVar27 .= '
		</span>
	</div>

	<div class="listBlock main">

		<div class="titleText">
			';
$__compilerVar30 = '';
$__compilerVar30 .= '
					';
$__compilerVar31 = '';
$__compilerVar31 .= '
					';
if ($thread['isModerated'])
{
$__compilerVar31 .= '<span class="moderated" title="' . 'Moderated' . '">' . 'Moderated' . '</span>';
}
$__compilerVar31 .= '
					';
if (!$thread['discussion_open'])
{
$__compilerVar31 .= '<span class="locked" title="' . 'Locked' . '">' . 'Locked' . '</span>';
}
$__compilerVar31 .= '
					';
if ($thread['sticky'])
{
$__compilerVar31 .= '<span class="sticky" title="' . 'Sticky' . '">' . 'Sticky' . '</span>';
}
$__compilerVar31 .= '
					';
if ($thread['isRedirect'])
{
$__compilerVar31 .= '<span class="redirect" title="' . 'Redirect' . '">' . 'Redirect' . '</span>';
}
$__compilerVar31 .= '
					';
if ($thread['thread_is_watched'] OR $thread['forum_is_watched'])
{
$__compilerVar31 .= '<span class="watched" title="' . 'Watched' . '">' . 'Watched' . '</span>';
}
$__compilerVar31 .= '
					';
$__compilerVar30 .= $this->callTemplateHook('thread_list_item_icon_key', $__compilerVar31, array(
'thread' => $thread
));
unset($__compilerVar31);
$__compilerVar30 .= '
				';
if (trim($__compilerVar30) !== '')
{
$__compilerVar27 .= '
				<div class="iconKey">
				' . $__compilerVar30 . '
				</div>
			';
}
unset($__compilerVar30);
$__compilerVar27 .= '

			<h3 class="title">
				';
if ($thread['canInlineMod'])
{
$__compilerVar27 .= '<input type="checkbox" name="threads[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck" id="inlineModCheck-thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" data-target="#thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select thread' . ': ' . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar27 .= '
				';
if ($showSubscribeOptions)
{
$__compilerVar27 .= '<input type="checkbox" name="thread_ids[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar27 .= '
				';
if ($thread['prefix_id'])
{
$__compilerVar27 .= '
					';
if ($linkPrefix)
{
$__compilerVar27 .= '
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
$__compilerVar27 .= '
						' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . '
					';
}
$__compilerVar27 .= '
				';
}
$__compilerVar27 .= '
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
$__compilerVar27 .= '<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '" class="unreadLink" title="' . 'Go to first unread message' . '"></a>';
}
$__compilerVar27 .= '
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
$__compilerVar27 .= '<span class="containerName">,
					<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a></span>';
}
$__compilerVar27 .= '

					';
if ($showLastPageNumbers AND $thread['lastPageNumbers'])
{
$__compilerVar27 .= '
						<span class="itemPageNav">
							<span>...</span>
							';
foreach ($thread['lastPageNumbers'] AS $pageNumber)
{
$__compilerVar27 .= '
								<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array(
'page' => $pageNumber
)) . '">' . htmlspecialchars($pageNumber, ENT_QUOTES, 'UTF-8') . '</a>
							';
}
$__compilerVar27 .= '
						</span>
					';
}
$__compilerVar27 .= '
				</div>

				<div class="controls faint">
					';
if ($thread['canEditThread'])
{
$__compilerVar27 .= '<a href="javascript:" data-href="' . XenForo_Template_Helper_Core::link('threads/list-item-edit', $thread, array(
'showForumLink' => $showForumLink
)) . '" class="EditControl JsOnly">' . 'Edit' . '</a>';
}
$__compilerVar27 .= '
					';
if ($showSubscribeOptions AND $thread['email_subscribe'])
{
$__compilerVar27 .= 'Email';
}
$__compilerVar27 .= '
				</div>
			</div>
		</div>
	</div>

	<div class="listBlock stats pairsJustified" title="' . 'Members who liked the first message' . ': ' . (($thread['isRedirect']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($thread['first_post_likes'], '0'))) . '">
		<dl class="major"><dt>' . 'Replies' . ':</dt> <dd>';
if ($thread['isRedirect'])
{
$__compilerVar27 .= '
&ndash;
';
}
else
{
$__compilerVar27 .= '
';
if ($visitor['permissions']['forum']['whoRepliedView'] and $thread['reply_count'] > 0)
{
$__compilerVar27 .= '
<a href="' . XenForo_Template_Helper_Core::link('threads/whoreplied', $thread, array()) . '" title="' . 'Who Replied?' . '" class=\'OverlayTrigger\' data-href="' . XenForo_Template_Helper_Core::link('threads/whoreplied', $thread, array()) . '">' . XenForo_Template_Helper_Core::numberFormat($thread['reply_count'], '0') . '</a>
';
}
else
{
$__compilerVar27 .= '
' . htmlspecialchars($thread['reply_count'], ENT_QUOTES, 'UTF-8') . '
';
}
$__compilerVar27 .= '
';
}
$__compilerVar27 .= '</dd></dl>
		<dl class="minor"><dt>' . 'Views' . ':</dt> <dd>' . (($thread['isRedirect']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($thread['view_count'], '0'))) . '</dd></dl>
	</div>

	<div class="listBlock lastPost">
		';
if ($thread['isRedirect'])
{
$__compilerVar27 .= '
			<div class="lastPostInfo">' . 'N/A' . '</div>
		';
}
else
{
$__compilerVar27 .= '
			<dl class="lastPostInfo">
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_threadLastPostAvatar') AND $thread['uix_lastPostAvatar'])
{
$__compilerVar27 .= '
					' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['uix_lastPostAvatar'],(true),array(
'user' => '$thread.uix_lastPostAvatar',
'size' => 's',
'img' => 'true'
),'')) . '
				';
}
$__compilerVar27 .= '
				<dt>';
if (XenForo_Template_Helper_Core::callHelper('isIgnored', array(
'0' => $thread['last_post_user_id']
)))
{
$__compilerVar27 .= 'Ignored Member';
}
else
{
$__compilerVar27 .= XenForo_Template_Helper_Core::callHelper('usernamehtml', array($thread['lastPostInfo'],'',false,array()));
}
$__compilerVar27 .= '</dt>
				<dd class="muted"><a' . (($visitor['user_id']) ? (' href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '" title="' . 'Go to last message' . '"') : ('')) . ' class="dateTime">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '</a></dd>
			</dl>
		';
}
$__compilerVar27 .= '
	</div>
</li>

';
}
$__compilerVar26 .= $__compilerVar27;
unset($__compilerVar27);
$__compilerVar26 .= '
					';
}
$__compilerVar26 .= '
					';
$__compilerVar24 .= $this->callTemplateHook('thread_list_stickies', $__compilerVar26, array());
unset($__compilerVar26);
$__compilerVar24 .= '
				</div>
			</div>
		';
}
$__compilerVar24 .= '
		
		';
$__compilerVar32 = '';
$__compilerVar33 = '';
$__compilerVar33 .= '
	
		';
$__compilerVar34 = '';
$__compilerVar34 .= '
				';
$__compilerVar35 = '';
$__compilerVar34 .= $this->callTemplateHook('ad_thread_list_below_stickies', $__compilerVar35, array());
unset($__compilerVar35);
$__compilerVar34 .= '
				
				
				
				
				
				
				
			';
if (trim($__compilerVar34) !== '')
{
$__compilerVar33 .= '
			' . $__compilerVar34 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar33 .= '
			<div>' . 'Template' . ': ad_thread_list_below_stickies</div>
		';
}
unset($__compilerVar34);
$__compilerVar33 .= '
	
	';
if (trim($__compilerVar33) !== '')
{
$__compilerVar32 .= '
	
	<div class="funbox">
	<div class="funboxWrapper">
	' . $__compilerVar33 . '
	</div>
	</div>
	
';
}
unset($__compilerVar33);
$__compilerVar24 .= $__compilerVar32;
unset($__compilerVar32);
$__compilerVar24 .= '
		
		';
if ($threads && $stickyThreads && XenForo_Template_Helper_Core::styleProperty('uix_separateStickyThreads'))
{
$__compilerVar24 .= '
		<li class="heading">' . 'Normal Threads' . '</li>
		';
}
$__compilerVar24 .= '
		
		';
$__compilerVar36 = '';
$__compilerVar36 .= '
		';
foreach ($threads AS $thread)
{
$__compilerVar36 .= '
			';
$__compilerVar37 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar37 .= '

';
if ($thread['isDeleted'])
{
$__compilerVar38 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar38 .= '

<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="discussionListItem ' . (($thread['sticky']) ? (' sticky') : ('')) . ' ' . htmlspecialchars($thread['discussion_state'], ENT_QUOTES, 'UTF-8') . (($thread['isNew']) ? (' new') : ('')) . (($thread['prefix_id']) ? (' prefix' . htmlspecialchars($thread['prefix_id'], ENT_QUOTES, 'UTF-8')) : ('')) . (($thread['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['username'], ENT_QUOTES, 'UTF-8') . '">

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
$__compilerVar39 = '';
$__compilerVar39 .= '
					';
if ($thread['discussion_state'] == ('moderated'))
{
$__compilerVar39 .= '<span class="moderated" title="' . 'Moderated' . '">' . 'Moderated' . '</span>';
}
$__compilerVar39 .= '
					';
if (!$thread['discussion_open'])
{
$__compilerVar39 .= '<span class="locked" title="' . 'Locked' . '">' . 'Locked' . '</span>';
}
$__compilerVar39 .= '
					';
if ($thread['sticky'])
{
$__compilerVar39 .= '<span class="sticky" title="' . 'Sticky' . '">' . 'Sticky' . '</span>';
}
$__compilerVar39 .= '
					';
if ($thread['discussion_type'] == ('redirect'))
{
$__compilerVar39 .= '<span class="redirect" title="' . 'Redirect' . '">' . 'Redirect' . '</span>';
}
$__compilerVar39 .= '
				';
if (trim($__compilerVar39) !== '')
{
$__compilerVar38 .= '
				<div class="iconKey">
				' . $__compilerVar39 . '
				</div>
			';
}
unset($__compilerVar39);
$__compilerVar38 .= '

			<h3 class="title muted">
				';
if ($thread['canInlineMod'])
{
$__compilerVar38 .= '<input type="checkbox" name="threads[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck" id="inlineModCheck-thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" data-target="#thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select thread' . ': ' . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar38 .= '
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
$__compilerVar38 .= '
						' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $thread['deleteInfo']
)) . '' . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['delete_date'],array(
'time' => htmlspecialchars($thread['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($thread['delete_reason'])
{
$__compilerVar38 .= ', ' . 'Reason' . ': ' . htmlspecialchars($thread['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar38 .= '.
					';
}
$__compilerVar38 .= '
				</div>

				<div class="controls faint">
					<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array()) . '" class="viewLink">' . 'View' . '</a>
					';
if ($thread['canEditThread'])
{
$__compilerVar38 .= '<a href="javascript:" data-href="' . XenForo_Template_Helper_Core::link('threads/list-item-edit', $thread, array()) . '" class="EditControl JsOnly">' . 'Edit' . '</a>';
}
$__compilerVar38 .= '
				</div>
			</div>
		</div>

	</div>

	<div class="listBlock statsLastPost"></div>

</li>';
$__compilerVar37 .= $__compilerVar38;
unset($__compilerVar38);
}
else
{
$__compilerVar37 .= '

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
$__compilerVar37 .= XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,(true),array(
'user' => '$visitor',
'size' => 's',
'img' => 'true',
'class' => 'miniMe',
'title' => 'You have posted ' . XenForo_Template_Helper_Core::numberFormat($thread['user_post_count'], '0') . ' message(s) in this thread'
),''));
}
$__compilerVar37 .= '
		</span>
	</div>

	<div class="listBlock main">

		<div class="titleText">
			';
$__compilerVar40 = '';
$__compilerVar40 .= '
					';
$__compilerVar41 = '';
$__compilerVar41 .= '
					';
if ($thread['isModerated'])
{
$__compilerVar41 .= '<span class="moderated" title="' . 'Moderated' . '">' . 'Moderated' . '</span>';
}
$__compilerVar41 .= '
					';
if (!$thread['discussion_open'])
{
$__compilerVar41 .= '<span class="locked" title="' . 'Locked' . '">' . 'Locked' . '</span>';
}
$__compilerVar41 .= '
					';
if ($thread['sticky'])
{
$__compilerVar41 .= '<span class="sticky" title="' . 'Sticky' . '">' . 'Sticky' . '</span>';
}
$__compilerVar41 .= '
					';
if ($thread['isRedirect'])
{
$__compilerVar41 .= '<span class="redirect" title="' . 'Redirect' . '">' . 'Redirect' . '</span>';
}
$__compilerVar41 .= '
					';
if ($thread['thread_is_watched'] OR $thread['forum_is_watched'])
{
$__compilerVar41 .= '<span class="watched" title="' . 'Watched' . '">' . 'Watched' . '</span>';
}
$__compilerVar41 .= '
					';
$__compilerVar40 .= $this->callTemplateHook('thread_list_item_icon_key', $__compilerVar41, array(
'thread' => $thread
));
unset($__compilerVar41);
$__compilerVar40 .= '
				';
if (trim($__compilerVar40) !== '')
{
$__compilerVar37 .= '
				<div class="iconKey">
				' . $__compilerVar40 . '
				</div>
			';
}
unset($__compilerVar40);
$__compilerVar37 .= '

			<h3 class="title">
				';
if ($thread['canInlineMod'])
{
$__compilerVar37 .= '<input type="checkbox" name="threads[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck" id="inlineModCheck-thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" data-target="#thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select thread' . ': ' . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar37 .= '
				';
if ($showSubscribeOptions)
{
$__compilerVar37 .= '<input type="checkbox" name="thread_ids[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar37 .= '
				';
if ($thread['prefix_id'])
{
$__compilerVar37 .= '
					';
if ($linkPrefix)
{
$__compilerVar37 .= '
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
$__compilerVar37 .= '
						' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . '
					';
}
$__compilerVar37 .= '
				';
}
$__compilerVar37 .= '
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
$__compilerVar37 .= '<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '" class="unreadLink" title="' . 'Go to first unread message' . '"></a>';
}
$__compilerVar37 .= '
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
$__compilerVar37 .= '<span class="containerName">,
					<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a></span>';
}
$__compilerVar37 .= '

					';
if ($showLastPageNumbers AND $thread['lastPageNumbers'])
{
$__compilerVar37 .= '
						<span class="itemPageNav">
							<span>...</span>
							';
foreach ($thread['lastPageNumbers'] AS $pageNumber)
{
$__compilerVar37 .= '
								<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array(
'page' => $pageNumber
)) . '">' . htmlspecialchars($pageNumber, ENT_QUOTES, 'UTF-8') . '</a>
							';
}
$__compilerVar37 .= '
						</span>
					';
}
$__compilerVar37 .= '
				</div>

				<div class="controls faint">
					';
if ($thread['canEditThread'])
{
$__compilerVar37 .= '<a href="javascript:" data-href="' . XenForo_Template_Helper_Core::link('threads/list-item-edit', $thread, array(
'showForumLink' => $showForumLink
)) . '" class="EditControl JsOnly">' . 'Edit' . '</a>';
}
$__compilerVar37 .= '
					';
if ($showSubscribeOptions AND $thread['email_subscribe'])
{
$__compilerVar37 .= 'Email';
}
$__compilerVar37 .= '
				</div>
			</div>
		</div>
	</div>

	<div class="listBlock stats pairsJustified" title="' . 'Members who liked the first message' . ': ' . (($thread['isRedirect']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($thread['first_post_likes'], '0'))) . '">
		<dl class="major"><dt>' . 'Replies' . ':</dt> <dd>';
if ($thread['isRedirect'])
{
$__compilerVar37 .= '
&ndash;
';
}
else
{
$__compilerVar37 .= '
';
if ($visitor['permissions']['forum']['whoRepliedView'] and $thread['reply_count'] > 0)
{
$__compilerVar37 .= '
<a href="' . XenForo_Template_Helper_Core::link('threads/whoreplied', $thread, array()) . '" title="' . 'Who Replied?' . '" class=\'OverlayTrigger\' data-href="' . XenForo_Template_Helper_Core::link('threads/whoreplied', $thread, array()) . '">' . XenForo_Template_Helper_Core::numberFormat($thread['reply_count'], '0') . '</a>
';
}
else
{
$__compilerVar37 .= '
' . htmlspecialchars($thread['reply_count'], ENT_QUOTES, 'UTF-8') . '
';
}
$__compilerVar37 .= '
';
}
$__compilerVar37 .= '</dd></dl>
		<dl class="minor"><dt>' . 'Views' . ':</dt> <dd>' . (($thread['isRedirect']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($thread['view_count'], '0'))) . '</dd></dl>
	</div>

	<div class="listBlock lastPost">
		';
if ($thread['isRedirect'])
{
$__compilerVar37 .= '
			<div class="lastPostInfo">' . 'N/A' . '</div>
		';
}
else
{
$__compilerVar37 .= '
			<dl class="lastPostInfo">
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_threadLastPostAvatar') AND $thread['uix_lastPostAvatar'])
{
$__compilerVar37 .= '
					' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['uix_lastPostAvatar'],(true),array(
'user' => '$thread.uix_lastPostAvatar',
'size' => 's',
'img' => 'true'
),'')) . '
				';
}
$__compilerVar37 .= '
				<dt>';
if (XenForo_Template_Helper_Core::callHelper('isIgnored', array(
'0' => $thread['last_post_user_id']
)))
{
$__compilerVar37 .= 'Ignored Member';
}
else
{
$__compilerVar37 .= XenForo_Template_Helper_Core::callHelper('usernamehtml', array($thread['lastPostInfo'],'',false,array()));
}
$__compilerVar37 .= '</dt>
				<dd class="muted"><a' . (($visitor['user_id']) ? (' href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '" title="' . 'Go to last message' . '"') : ('')) . ' class="dateTime">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '</a></dd>
			</dl>
		';
}
$__compilerVar37 .= '
	</div>
</li>

';
}
$__compilerVar36 .= $__compilerVar37;
unset($__compilerVar37);
$__compilerVar36 .= '
		';
}
$__compilerVar36 .= '
		';
$__compilerVar24 .= $this->callTemplateHook('thread_list_threads', $__compilerVar36, array());
unset($__compilerVar36);
$__compilerVar24 .= '
		
		' . '
	';
}
else
{
$__compilerVar24 .= '
		<li class="primaryContent">' . 'There are no threads to display.' . '</li>
	';
}
$__compilerVar24 .= '
	';
if ($showDateLimitDisabler)
{
$__compilerVar24 .= '
		<li class="discussionListItem"><div class="noteRow secondary"><a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array(
'_params' => $pageNavParams,
'no_date_limit' => '1',
'page' => (($page > 1) ? ($page) : (''))
)) . '">' . 'Click here to display older threads.' . '</a></div></li>
	';
}
$__compilerVar24 .= '
	</ol>

	';
if ($totalThreads OR $inlineModOptions)
{
$__compilerVar24 .= '
		<div class="sectionFooter InlineMod SelectionCountContainer">
			';
if ($totalThreads)
{
$__compilerVar24 .= '<span class="contentSummary">' . 'Showing threads ' . XenForo_Template_Helper_Core::numberFormat($threadStartOffset, '0') . ' to ' . XenForo_Template_Helper_Core::numberFormat($threadEndOffset, '0') . ' of ' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '' . '</span>';
}
$__compilerVar24 .= '

			';
if ($inlineModOptions)
{
$__compilerVar24 .= '
				';
$__compilerVar42 = '';
$__compilerVar43 = '';
$__compilerVar43 .= 'Thread Moderation';
$__compilerVar44 = '';
$__compilerVar44 .= '
		';
if ($inlineModOptions['delete'])
{
$__compilerVar44 .= '<option value="delete">' . 'Delete Threads' . '...</option>';
}
$__compilerVar44 .= '
		';
if ($inlineModOptions['undelete'])
{
$__compilerVar44 .= '<option value="undelete">' . 'Undelete Threads' . '</option>';
}
$__compilerVar44 .= '
		';
if ($inlineModOptions['approve'])
{
$__compilerVar44 .= '<option value="approve">' . 'Approve Threads' . '</option>';
}
$__compilerVar44 .= '
		';
if ($inlineModOptions['unapprove'])
{
$__compilerVar44 .= '<option value="unapprove">' . 'Unapprove Threads' . '</option>';
}
$__compilerVar44 .= '
		';
if ($inlineModOptions['stick'])
{
$__compilerVar44 .= '<option value="stick">' . 'Stick Threads' . '</option>';
}
$__compilerVar44 .= '
		';
if ($inlineModOptions['unstick'])
{
$__compilerVar44 .= '<option value="unstick">' . 'Unstick Threads' . '</option>';
}
$__compilerVar44 .= '
		';
if ($inlineModOptions['lock'])
{
$__compilerVar44 .= '<option value="lock">' . 'Lock Threads' . '</option>';
}
$__compilerVar44 .= '
		';
if ($inlineModOptions['unlock'])
{
$__compilerVar44 .= '<option value="unlock">' . 'Unlock Threads' . '</option>';
}
$__compilerVar44 .= '
		';
if ($inlineModOptions['move'])
{
$__compilerVar44 .= '<option value="move">' . 'Move Threads' . '...</option>';
}
$__compilerVar44 .= '
		';
if ($inlineModOptions['merge'])
{
$__compilerVar44 .= '<option value="merge">' . 'Merge Threads' . '...</option>';
}
$__compilerVar44 .= '
		';
if ($inlineModOptions['edit'])
{
$__compilerVar44 .= '<option value="prefix">' . 'Apply Thread Prefix' . '...</option>';
}
$__compilerVar44 .= '
		<option value="deselect">' . 'Deselect Threads' . '</option>
	';
$__compilerVar45 = '';
$__compilerVar45 .= 'Select / deselect all threads on this page';
$__compilerVar46 = '';
$__compilerVar46 .= 'Selected Threads';
$__compilerVar47 = '';
$this->addRequiredExternal('css', 'inline_mod');
$__compilerVar47 .= '
';
$this->addRequiredExternal('js', 'js/xenforo/inline_mod.js');
$__compilerVar47 .= '

<span id="InlineModControls">
	<span class="selectionControl secondaryContent">
		<label for="ModerationCheck">
			' . 'Select All' . ' <input type="checkbox" id="ModerationCheck" title="' . htmlspecialchars($__compilerVar45, ENT_QUOTES, 'UTF-8') . '" />
		</label>

		<input type="button" class="button ClickNext" value="&darr;" title="' . 'Move down' . '" />
		<input type="button" class="button ClickPrev" value="&uarr;" title="' . 'Move up' . '" />
		<a class="SelectionCount">' . htmlspecialchars($__compilerVar46, ENT_QUOTES, 'UTF-8') . ': <em class="InlineModCheckedTotal">0</em></a>
	</span>

	<span class="actionControl sectionFooter">
		<span class="commonActions">
			';
if ($inlineModOptions['delete'])
{
$__compilerVar47 .= '<input type="submit" class="button" value="' . 'Delete' . '..." name="delete" />';
}
$__compilerVar47 .= '
			';
if ($inlineModOptions['approve'])
{
$__compilerVar47 .= '<input type="submit" class="button" value="' . 'Approve' . '" name="approve" />';
}
$__compilerVar47 .= '
		</span>

		<span class="otherActions">
			<select name="a" id="ModerationSelect" class="textCtrl">
				<option value="">' . 'Other Action' . '...</option>
				<optgroup label="' . 'Moderation Actions' . '">
					' . $__compilerVar44 . '
				</optgroup>
				<option value="closeOverlay">' . 'Close This Overlay' . '</option>
			</select>

			<input type="submit" class="button primary" value="' . 'Go' . '" />
			<input type="reset" class="button OverlayCloser overylayOnly" value="X" title="' . 'Cancel and close these controls' . '" />
		</span>
	</span>
</span>';
$__compilerVar42 .= $__compilerVar47;
unset($__compilerVar43, $__compilerVar44, $__compilerVar45, $__compilerVar46, $__compilerVar47);
$__compilerVar24 .= $__compilerVar42;
unset($__compilerVar42);
$__compilerVar24 .= '
			';
}
$__compilerVar24 .= '
		</div>
	';
}
$__compilerVar24 .= '

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>

<h3 id="DiscussionListOptionsHandle" class="JsOnly"><a href="#">' . 'Thread Display Options' . '</a></h3>

<form action="' . XenForo_Template_Helper_Core::link('forums', $forum, array()) . '" method="post" class="DiscussionListOptions secondaryContent">

	';
$__compilerVar48 = '';
$__compilerVar48 .= '
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
$__compilerVar48 .= '
		<div class="controlGroup">
			<label for="ctrl_prefix_id">' . 'Prefix' . ':</label>
			<select name="prefix_id" id="ctrl_prefix_id" class="textCtrl">
				<option value="0" ' . ((!$displayConditions['prefix_id']) ? ' selected="selected"' : '') . '>(' . 'Any' . ')</option>
				';
foreach ($forum['prefixCache'] AS $prefixGroupId => $prefixes)
{
$__compilerVar48 .= '
					';
if ($prefixGroupId)
{
$__compilerVar48 .= '
						<optgroup label="' . XenForo_Template_Helper_Core::callHelper('threadPrefixGroup', array(
'0' => $prefixGroupId
)) . '">
						';
foreach ($prefixes AS $prefixId)
{
$__compilerVar48 .= '
							<option value="' . htmlspecialchars($prefixId, ENT_QUOTES, 'UTF-8') . '" ' . (($displayConditions['prefix_id'] == $prefixId) ? ' selected="selected"' : '') . '>' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $prefixId,
'1' => 'escaped',
'2' => ''
)) . '</option>
						';
}
$__compilerVar48 .= '
						</optgroup>
					';
}
else
{
$__compilerVar48 .= '
						';
foreach ($prefixes AS $prefixId)
{
$__compilerVar48 .= '
							<option value="' . htmlspecialchars($prefixId, ENT_QUOTES, 'UTF-8') . '" ' . (($displayConditions['prefix_id'] == $prefixId) ? ' selected="selected"' : '') . '>' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $prefixId,
'1' => 'escaped',
'2' => ''
)) . '</option>
						';
}
$__compilerVar48 .= '
					';
}
$__compilerVar48 .= '
				';
}
$__compilerVar48 .= '
			</select>
		</div>
	';
}
$__compilerVar48 .= '

	<div class="buttonGroup">
		<input type="submit" class="button primary" value="' . 'Set Options' . '" />
		<input type="reset" class="button" value="' . 'Cancel' . '" />
	</div>
	';
$__compilerVar24 .= $this->callTemplateHook('thread_list_options', $__compilerVar48, array());
unset($__compilerVar48);
$__compilerVar24 .= '

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>

';
$__compilerVar49 = '';
$__compilerVar49 .= '<div id="PreviewTooltip">
	<span class="arrow"><span></span></span>
	
	<div class="section">
		<div class="primaryContent previewContent">
			<span class="PreviewContents">' . 'Loading' . '...</span>
		</div>
	</div>
</div>';
$__compilerVar24 .= $__compilerVar49;
unset($__compilerVar49);
$__output .= $__compilerVar24;
unset($__compilerVar24);
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
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 0 || XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3)
{
$__output .= '
				<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="concealed element' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '">(' . 'You must log in or sign up to post here.' . ')</a>
			';
}
else
{
$__output .= '
				<label for="LoginControl"}><a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="concealed element">(' . 'You must log in or sign up to post here.' . ')</a></label>
			';
}
$__output .= '
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
