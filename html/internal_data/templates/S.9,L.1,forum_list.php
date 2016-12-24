<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['h1'] = '';
$__extraData['h1'] .= htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8');
$__output .= '

';
$__extraData['head']['canonical'] = '';
$__extraData['head']['canonical'] .= '<link rel="canonical" href="' . XenForo_Template_Helper_Core::link('canonical:forums', false, array()) . '" />';
$__output .= '
';
if ($xenOptions['boardDescription'])
{
$__extraData['head']['description'] = '';
$__extraData['head']['description'] .= '
	<meta name="description" content="' . htmlspecialchars($xenOptions['boardDescription'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__output .= '
';
$__extraData['head']['openGraph'] = '';
$__extraData['head']['openGraph'] .= '
	';
$__compilerVar1 = '';
$__compilerVar1 .= XenForo_Template_Helper_Core::link('canonical:forums', false, array());
$__compilerVar2 = '';
$__compilerVar2 .= htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8');
$__compilerVar3 = '';
$__compilerVar3 .= htmlspecialchars($xenOptions['boardDescription'], ENT_QUOTES, 'UTF-8');
$__compilerVar4 = '';
$__compilerVar4 .= 'website';
$__compilerVar5 = '';
if ($xenOptions['facebookAppId'] OR $xenOptions['facebookAdmins'])
{
$__compilerVar5 .= '
	<meta property="og:site_name" content="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
	';
if ($avatar)
{
$__compilerVar5 .= '<meta property="og:image" content="' . htmlspecialchars($avatar, ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar5 .= '
	<meta property="og:image" content="' . XenForo_Template_Helper_Core::callHelper('fullurl', array(
'0' => XenForo_Template_Helper_Core::styleProperty('ogLogoPath'),
'1' => '1'
)) . '" />
	<meta property="og:type" content="' . (($__compilerVar4) ? (htmlspecialchars($__compilerVar4, ENT_QUOTES, 'UTF-8')) : ('article')) . '" />
	<meta property="og:url" content="' . $__compilerVar1 . '" />
	<meta property="og:title" content="' . $__compilerVar2 . '" />
	';
if ($__compilerVar3)
{
$__compilerVar5 .= '<meta property="og:description" content="' . $__compilerVar3 . '" />';
}
$__compilerVar5 .= '
	' . $ogExtraHtml . '
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar5 .= '<meta property="fb:app_id" content="' . htmlspecialchars($xenOptions['facebookAppId'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar5 .= '
	';
if ($xenOptions['facebookAdmins'])
{
$__compilerVar5 .= '<meta property="fb:admins" content="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $xenOptions['facebookAdmins'],
'1' => ','
)) . '" />';
}
$__compilerVar5 .= '
';
}
$__extraData['head']['openGraph'] .= $__compilerVar5;
unset($__compilerVar1, $__compilerVar2, $__compilerVar3, $__compilerVar4, $__compilerVar5);
$__output .= '

';
$__compilerVar6 = '';
$__compilerVar6 .= '
	';
if ($renderedNodes)
{
$__compilerVar7 = '';
$this->addRequiredExternal('css', 'node_list');
$__compilerVar7 .= '

';
$__compilerVar8 = '';
$__compilerVar8 .= '
		';
foreach ($renderedNodes AS $node)
{
$__compilerVar8 .= $node;
}
$__compilerVar8 .= '
	';
if (trim($__compilerVar8) !== '')
{
$__compilerVar7 .= '
	<ol class="nodeList section uix_nodeStyle_' . XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') . '" id="forums">
	' . $__compilerVar8 . '
	</ol>
';
}
unset($__compilerVar8);
$__compilerVar7 .= '

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
$__compilerVar6 .= $__compilerVar7;
unset($__compilerVar7);
}
$__compilerVar6 .= '
';
$__output .= $this->callTemplateHook('forum_list_nodes', $__compilerVar6, array());
unset($__compilerVar6);
$__output .= '
	
';
$__extraData['sidebar'] = '';
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsBanner'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('1'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar9 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar9 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar9 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar9 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar9 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar9 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar9 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar9 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar9 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar9 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar9 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar9 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar9 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar9 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar9 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar9 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar9;
unset($__compilerVar9);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('1'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('1'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar10 = '';
$__compilerVar10 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar10;
unset($__compilerVar10);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('1'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar11 = '';
$__compilerVar11 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar11 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar11 .= '
				';
$__compilerVar12 = '';
$__compilerVar12 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar12 .= '
							';
if ($user['followed'])
{
$__compilerVar12 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar12 .= '
						';
}
$__compilerVar12 .= '
					';
if (trim($__compilerVar12) !== '')
{
$__compilerVar11 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar12 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar12);
$__compilerVar11 .= '
			';
}
$__compilerVar11 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar11 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar11 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar11 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar11 .= ',';
}
$__compilerVar11 .= '
						';
}
else
{
$__compilerVar11 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar11 .= ',';
}
$__compilerVar11 .= '
						';
}
$__compilerVar11 .= '
						</li>
					';
}
$__compilerVar11 .= '
				';
}
$__compilerVar11 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar11 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar11 .= '
			</ol>
		';
}
$__compilerVar11 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar11;
unset($__compilerVar11);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('1'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar13 = '';
if ($threads)
{
$__compilerVar13 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar14 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar14 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar14 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar14 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar14 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar14 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar14 .= '
</ul>';
$__compilerVar13 .= $__compilerVar14;
unset($__compilerVar14);
$__compilerVar13 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar13;
unset($__compilerVar13);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('1'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar15 = '';
if ($profilePosts)
{
$__compilerVar15 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar16 = '';
if ($canUpdateStatus)
{
$__compilerVar16 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar16 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar16 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar16 .= '
	';
$__compilerVar17 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar17 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar17 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar17 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar17 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar16 .= $__compilerVar17;
unset($__compilerVar17);
$__compilerVar16 .= '
';
}
$__compilerVar16 .= '
</ul>';
$__compilerVar15 .= $__compilerVar16;
unset($__compilerVar16);
$__compilerVar15 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar15;
unset($__compilerVar15);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('1'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar18 = '';
if ($latestResources)
{
$__compilerVar18 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar18;
unset($__compilerVar18);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('1'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar19 = '';
$__compilerVar20 = '';
$__compilerVar20 .= '
				';
$__compilerVar21 = '';
$__compilerVar21 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar21 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar21 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar21 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar21 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar21 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar21 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar21 .= '	
				';
$__compilerVar20 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar21, array());
unset($__compilerVar21);
$__compilerVar20 .= '		
			';
if (trim($__compilerVar20) !== '')
{
$__compilerVar19 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar19 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar20 . '
		</div>
	</div>
';
}
unset($__compilerVar20);
$__extraData['sidebar'] .= $__compilerVar19;
unset($__compilerVar19);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('1'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar22 = '';
$__compilerVar23 = '';
$__compilerVar23 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar23 .= '
						';
if ($user['is_staff'])
{
$__compilerVar23 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar23 .= '
					';
}
$__compilerVar23 .= '
				';
if (trim($__compilerVar23) !== '')
{
$__compilerVar22 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar23 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar23);
$__extraData['sidebar'] .= $__compilerVar22;
unset($__compilerVar22);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('2'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar24 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar24 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar24 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar24 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar24 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar24 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar24 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar24 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar24 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar24 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar24 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar24 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar24 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar24 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar24 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar24 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar24;
unset($__compilerVar24);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('2'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('2'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar25 = '';
$__compilerVar25 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar25;
unset($__compilerVar25);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('2'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar26 = '';
$__compilerVar26 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar26 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar26 .= '
				';
$__compilerVar27 = '';
$__compilerVar27 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar27 .= '
							';
if ($user['followed'])
{
$__compilerVar27 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar27 .= '
						';
}
$__compilerVar27 .= '
					';
if (trim($__compilerVar27) !== '')
{
$__compilerVar26 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar27 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar27);
$__compilerVar26 .= '
			';
}
$__compilerVar26 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar26 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar26 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar26 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar26 .= ',';
}
$__compilerVar26 .= '
						';
}
else
{
$__compilerVar26 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar26 .= ',';
}
$__compilerVar26 .= '
						';
}
$__compilerVar26 .= '
						</li>
					';
}
$__compilerVar26 .= '
				';
}
$__compilerVar26 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar26 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar26 .= '
			</ol>
		';
}
$__compilerVar26 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar26;
unset($__compilerVar26);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('2'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar28 = '';
if ($threads)
{
$__compilerVar28 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar29 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar29 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar29 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar29 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar29 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar29 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar29 .= '
</ul>';
$__compilerVar28 .= $__compilerVar29;
unset($__compilerVar29);
$__compilerVar28 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar28;
unset($__compilerVar28);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('2'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar30 = '';
if ($profilePosts)
{
$__compilerVar30 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar31 = '';
if ($canUpdateStatus)
{
$__compilerVar31 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar31 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar31 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar31 .= '
	';
$__compilerVar32 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar32 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar32 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar32 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar32 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar31 .= $__compilerVar32;
unset($__compilerVar32);
$__compilerVar31 .= '
';
}
$__compilerVar31 .= '
</ul>';
$__compilerVar30 .= $__compilerVar31;
unset($__compilerVar31);
$__compilerVar30 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar30;
unset($__compilerVar30);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('2'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar33 = '';
if ($latestResources)
{
$__compilerVar33 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar33;
unset($__compilerVar33);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('2'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar34 = '';
$__compilerVar35 = '';
$__compilerVar35 .= '
				';
$__compilerVar36 = '';
$__compilerVar36 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar36 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar36 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar36 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar36 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar36 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar36 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar36 .= '	
				';
$__compilerVar35 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar36, array());
unset($__compilerVar36);
$__compilerVar35 .= '		
			';
if (trim($__compilerVar35) !== '')
{
$__compilerVar34 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar34 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar35 . '
		</div>
	</div>
';
}
unset($__compilerVar35);
$__extraData['sidebar'] .= $__compilerVar34;
unset($__compilerVar34);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('2'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar37 = '';
$__compilerVar38 = '';
$__compilerVar38 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar38 .= '
						';
if ($user['is_staff'])
{
$__compilerVar38 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar38 .= '
					';
}
$__compilerVar38 .= '
				';
if (trim($__compilerVar38) !== '')
{
$__compilerVar37 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar38 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar38);
$__extraData['sidebar'] .= $__compilerVar37;
unset($__compilerVar37);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('3'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar39 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar39 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar39 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar39 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar39 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar39 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar39 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar39 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar39 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar39 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar39 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar39 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar39 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar39 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar39 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar39 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar39;
unset($__compilerVar39);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('3'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('3'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar40 = '';
$__compilerVar40 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar40;
unset($__compilerVar40);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('3'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar41 = '';
$__compilerVar41 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar41 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar41 .= '
				';
$__compilerVar42 = '';
$__compilerVar42 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar42 .= '
							';
if ($user['followed'])
{
$__compilerVar42 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar42 .= '
						';
}
$__compilerVar42 .= '
					';
if (trim($__compilerVar42) !== '')
{
$__compilerVar41 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar42 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar42);
$__compilerVar41 .= '
			';
}
$__compilerVar41 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar41 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar41 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar41 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar41 .= ',';
}
$__compilerVar41 .= '
						';
}
else
{
$__compilerVar41 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar41 .= ',';
}
$__compilerVar41 .= '
						';
}
$__compilerVar41 .= '
						</li>
					';
}
$__compilerVar41 .= '
				';
}
$__compilerVar41 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar41 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar41 .= '
			</ol>
		';
}
$__compilerVar41 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar41;
unset($__compilerVar41);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('3'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar43 = '';
if ($threads)
{
$__compilerVar43 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar44 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar44 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar44 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar44 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar44 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar44 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar44 .= '
</ul>';
$__compilerVar43 .= $__compilerVar44;
unset($__compilerVar44);
$__compilerVar43 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar43;
unset($__compilerVar43);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('3'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar45 = '';
if ($profilePosts)
{
$__compilerVar45 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar46 = '';
if ($canUpdateStatus)
{
$__compilerVar46 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar46 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar46 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar46 .= '
	';
$__compilerVar47 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar47 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar47 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar47 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar47 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar46 .= $__compilerVar47;
unset($__compilerVar47);
$__compilerVar46 .= '
';
}
$__compilerVar46 .= '
</ul>';
$__compilerVar45 .= $__compilerVar46;
unset($__compilerVar46);
$__compilerVar45 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar45;
unset($__compilerVar45);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('3'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar48 = '';
if ($latestResources)
{
$__compilerVar48 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar48;
unset($__compilerVar48);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('3'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar49 = '';
$__compilerVar50 = '';
$__compilerVar50 .= '
				';
$__compilerVar51 = '';
$__compilerVar51 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar51 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar51 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar51 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar51 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar51 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar51 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar51 .= '	
				';
$__compilerVar50 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar51, array());
unset($__compilerVar51);
$__compilerVar50 .= '		
			';
if (trim($__compilerVar50) !== '')
{
$__compilerVar49 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar49 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar50 . '
		</div>
	</div>
';
}
unset($__compilerVar50);
$__extraData['sidebar'] .= $__compilerVar49;
unset($__compilerVar49);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('3'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar52 = '';
$__compilerVar53 = '';
$__compilerVar53 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar53 .= '
						';
if ($user['is_staff'])
{
$__compilerVar53 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar53 .= '
					';
}
$__compilerVar53 .= '
				';
if (trim($__compilerVar53) !== '')
{
$__compilerVar52 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar53 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar53);
$__extraData['sidebar'] .= $__compilerVar52;
unset($__compilerVar52);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('4'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar54 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar54 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar54 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar54 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar54 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar54 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar54 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar54 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar54 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar54 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar54 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar54 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar54 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar54 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar54 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar54 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar54;
unset($__compilerVar54);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('4'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('4'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar55 = '';
$__compilerVar55 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar55;
unset($__compilerVar55);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('4'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar56 = '';
$__compilerVar56 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar56 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar56 .= '
				';
$__compilerVar57 = '';
$__compilerVar57 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar57 .= '
							';
if ($user['followed'])
{
$__compilerVar57 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar57 .= '
						';
}
$__compilerVar57 .= '
					';
if (trim($__compilerVar57) !== '')
{
$__compilerVar56 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar57 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar57);
$__compilerVar56 .= '
			';
}
$__compilerVar56 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar56 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar56 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar56 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar56 .= ',';
}
$__compilerVar56 .= '
						';
}
else
{
$__compilerVar56 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar56 .= ',';
}
$__compilerVar56 .= '
						';
}
$__compilerVar56 .= '
						</li>
					';
}
$__compilerVar56 .= '
				';
}
$__compilerVar56 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar56 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar56 .= '
			</ol>
		';
}
$__compilerVar56 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar56;
unset($__compilerVar56);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('4'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar58 = '';
if ($threads)
{
$__compilerVar58 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar59 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar59 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar59 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar59 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar59 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar59 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar59 .= '
</ul>';
$__compilerVar58 .= $__compilerVar59;
unset($__compilerVar59);
$__compilerVar58 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar58;
unset($__compilerVar58);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('4'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar60 = '';
if ($profilePosts)
{
$__compilerVar60 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar61 = '';
if ($canUpdateStatus)
{
$__compilerVar61 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar61 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar61 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar61 .= '
	';
$__compilerVar62 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar62 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar62 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar62 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar62 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar61 .= $__compilerVar62;
unset($__compilerVar62);
$__compilerVar61 .= '
';
}
$__compilerVar61 .= '
</ul>';
$__compilerVar60 .= $__compilerVar61;
unset($__compilerVar61);
$__compilerVar60 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar60;
unset($__compilerVar60);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('4'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar63 = '';
if ($latestResources)
{
$__compilerVar63 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar63;
unset($__compilerVar63);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('4'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar64 = '';
$__compilerVar65 = '';
$__compilerVar65 .= '
				';
$__compilerVar66 = '';
$__compilerVar66 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar66 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar66 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar66 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar66 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar66 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar66 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar66 .= '	
				';
$__compilerVar65 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar66, array());
unset($__compilerVar66);
$__compilerVar65 .= '		
			';
if (trim($__compilerVar65) !== '')
{
$__compilerVar64 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar64 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar65 . '
		</div>
	</div>
';
}
unset($__compilerVar65);
$__extraData['sidebar'] .= $__compilerVar64;
unset($__compilerVar64);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('4'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar67 = '';
$__compilerVar68 = '';
$__compilerVar68 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar68 .= '
						';
if ($user['is_staff'])
{
$__compilerVar68 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar68 .= '
					';
}
$__compilerVar68 .= '
				';
if (trim($__compilerVar68) !== '')
{
$__compilerVar67 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar68 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar68);
$__extraData['sidebar'] .= $__compilerVar67;
unset($__compilerVar67);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('5'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar69 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar69 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar69 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar69 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar69 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar69 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar69 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar69 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar69 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar69 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar69 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar69 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar69 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar69 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar69 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar69 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar69;
unset($__compilerVar69);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('5'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('5'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar70 = '';
$__compilerVar70 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar70;
unset($__compilerVar70);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('5'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar71 = '';
$__compilerVar71 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar71 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar71 .= '
				';
$__compilerVar72 = '';
$__compilerVar72 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar72 .= '
							';
if ($user['followed'])
{
$__compilerVar72 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar72 .= '
						';
}
$__compilerVar72 .= '
					';
if (trim($__compilerVar72) !== '')
{
$__compilerVar71 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar72 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar72);
$__compilerVar71 .= '
			';
}
$__compilerVar71 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar71 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar71 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar71 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar71 .= ',';
}
$__compilerVar71 .= '
						';
}
else
{
$__compilerVar71 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar71 .= ',';
}
$__compilerVar71 .= '
						';
}
$__compilerVar71 .= '
						</li>
					';
}
$__compilerVar71 .= '
				';
}
$__compilerVar71 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar71 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar71 .= '
			</ol>
		';
}
$__compilerVar71 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar71;
unset($__compilerVar71);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('5'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar73 = '';
if ($threads)
{
$__compilerVar73 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar74 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar74 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar74 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar74 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar74 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar74 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar74 .= '
</ul>';
$__compilerVar73 .= $__compilerVar74;
unset($__compilerVar74);
$__compilerVar73 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar73;
unset($__compilerVar73);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('5'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar75 = '';
if ($profilePosts)
{
$__compilerVar75 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar76 = '';
if ($canUpdateStatus)
{
$__compilerVar76 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar76 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar76 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar76 .= '
	';
$__compilerVar77 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar77 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar77 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar77 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar77 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar76 .= $__compilerVar77;
unset($__compilerVar77);
$__compilerVar76 .= '
';
}
$__compilerVar76 .= '
</ul>';
$__compilerVar75 .= $__compilerVar76;
unset($__compilerVar76);
$__compilerVar75 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar75;
unset($__compilerVar75);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('5'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar78 = '';
if ($latestResources)
{
$__compilerVar78 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar78;
unset($__compilerVar78);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('5'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar79 = '';
$__compilerVar80 = '';
$__compilerVar80 .= '
				';
$__compilerVar81 = '';
$__compilerVar81 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar81 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar81 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar81 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar81 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar81 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar81 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar81 .= '	
				';
$__compilerVar80 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar81, array());
unset($__compilerVar81);
$__compilerVar80 .= '		
			';
if (trim($__compilerVar80) !== '')
{
$__compilerVar79 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar79 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar80 . '
		</div>
	</div>
';
}
unset($__compilerVar80);
$__extraData['sidebar'] .= $__compilerVar79;
unset($__compilerVar79);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('5'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar82 = '';
$__compilerVar83 = '';
$__compilerVar83 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar83 .= '
						';
if ($user['is_staff'])
{
$__compilerVar83 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar83 .= '
					';
}
$__compilerVar83 .= '
				';
if (trim($__compilerVar83) !== '')
{
$__compilerVar82 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar83 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar83);
$__extraData['sidebar'] .= $__compilerVar82;
unset($__compilerVar82);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('6'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar84 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar84 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar84 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar84 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar84 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar84 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar84 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar84 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar84 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar84 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar84 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar84 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar84 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar84 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar84 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar84 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar84;
unset($__compilerVar84);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('6'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('6'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar85 = '';
$__compilerVar85 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar85;
unset($__compilerVar85);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('6'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar86 = '';
$__compilerVar86 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar86 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar86 .= '
				';
$__compilerVar87 = '';
$__compilerVar87 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar87 .= '
							';
if ($user['followed'])
{
$__compilerVar87 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar87 .= '
						';
}
$__compilerVar87 .= '
					';
if (trim($__compilerVar87) !== '')
{
$__compilerVar86 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar87 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar87);
$__compilerVar86 .= '
			';
}
$__compilerVar86 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar86 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar86 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar86 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar86 .= ',';
}
$__compilerVar86 .= '
						';
}
else
{
$__compilerVar86 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar86 .= ',';
}
$__compilerVar86 .= '
						';
}
$__compilerVar86 .= '
						</li>
					';
}
$__compilerVar86 .= '
				';
}
$__compilerVar86 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar86 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar86 .= '
			</ol>
		';
}
$__compilerVar86 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar86;
unset($__compilerVar86);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('6'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar88 = '';
if ($threads)
{
$__compilerVar88 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar89 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar89 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar89 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar89 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar89 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar89 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar89 .= '
</ul>';
$__compilerVar88 .= $__compilerVar89;
unset($__compilerVar89);
$__compilerVar88 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar88;
unset($__compilerVar88);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('6'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar90 = '';
if ($profilePosts)
{
$__compilerVar90 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar91 = '';
if ($canUpdateStatus)
{
$__compilerVar91 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar91 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar91 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar91 .= '
	';
$__compilerVar92 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar92 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar92 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar92 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar92 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar91 .= $__compilerVar92;
unset($__compilerVar92);
$__compilerVar91 .= '
';
}
$__compilerVar91 .= '
</ul>';
$__compilerVar90 .= $__compilerVar91;
unset($__compilerVar91);
$__compilerVar90 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar90;
unset($__compilerVar90);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('6'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar93 = '';
if ($latestResources)
{
$__compilerVar93 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar93;
unset($__compilerVar93);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('6'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar94 = '';
$__compilerVar95 = '';
$__compilerVar95 .= '
				';
$__compilerVar96 = '';
$__compilerVar96 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar96 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar96 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar96 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar96 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar96 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar96 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar96 .= '	
				';
$__compilerVar95 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar96, array());
unset($__compilerVar96);
$__compilerVar95 .= '		
			';
if (trim($__compilerVar95) !== '')
{
$__compilerVar94 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar94 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar95 . '
		</div>
	</div>
';
}
unset($__compilerVar95);
$__extraData['sidebar'] .= $__compilerVar94;
unset($__compilerVar94);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('6'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar97 = '';
$__compilerVar98 = '';
$__compilerVar98 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar98 .= '
						';
if ($user['is_staff'])
{
$__compilerVar98 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar98 .= '
					';
}
$__compilerVar98 .= '
				';
if (trim($__compilerVar98) !== '')
{
$__compilerVar97 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar98 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar98);
$__extraData['sidebar'] .= $__compilerVar97;
unset($__compilerVar97);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('7'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar99 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar99 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar99 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar99 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar99 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar99 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar99 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar99 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar99 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar99 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar99 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar99 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar99 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar99 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar99 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar99 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar99;
unset($__compilerVar99);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('7'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('7'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar100 = '';
$__compilerVar100 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar100;
unset($__compilerVar100);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('7'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar101 = '';
$__compilerVar101 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar101 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar101 .= '
				';
$__compilerVar102 = '';
$__compilerVar102 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar102 .= '
							';
if ($user['followed'])
{
$__compilerVar102 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar102 .= '
						';
}
$__compilerVar102 .= '
					';
if (trim($__compilerVar102) !== '')
{
$__compilerVar101 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar102 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar102);
$__compilerVar101 .= '
			';
}
$__compilerVar101 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar101 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar101 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar101 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar101 .= ',';
}
$__compilerVar101 .= '
						';
}
else
{
$__compilerVar101 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar101 .= ',';
}
$__compilerVar101 .= '
						';
}
$__compilerVar101 .= '
						</li>
					';
}
$__compilerVar101 .= '
				';
}
$__compilerVar101 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar101 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar101 .= '
			</ol>
		';
}
$__compilerVar101 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar101;
unset($__compilerVar101);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('7'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar103 = '';
if ($threads)
{
$__compilerVar103 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar104 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar104 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar104 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar104 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar104 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar104 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar104 .= '
</ul>';
$__compilerVar103 .= $__compilerVar104;
unset($__compilerVar104);
$__compilerVar103 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar103;
unset($__compilerVar103);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('7'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar105 = '';
if ($profilePosts)
{
$__compilerVar105 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar106 = '';
if ($canUpdateStatus)
{
$__compilerVar106 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar106 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar106 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar106 .= '
	';
$__compilerVar107 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar107 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar107 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar107 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar107 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar106 .= $__compilerVar107;
unset($__compilerVar107);
$__compilerVar106 .= '
';
}
$__compilerVar106 .= '
</ul>';
$__compilerVar105 .= $__compilerVar106;
unset($__compilerVar106);
$__compilerVar105 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar105;
unset($__compilerVar105);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('7'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar108 = '';
if ($latestResources)
{
$__compilerVar108 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar108;
unset($__compilerVar108);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('7'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar109 = '';
$__compilerVar110 = '';
$__compilerVar110 .= '
				';
$__compilerVar111 = '';
$__compilerVar111 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar111 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar111 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar111 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar111 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar111 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar111 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar111 .= '	
				';
$__compilerVar110 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar111, array());
unset($__compilerVar111);
$__compilerVar110 .= '		
			';
if (trim($__compilerVar110) !== '')
{
$__compilerVar109 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar109 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar110 . '
		</div>
	</div>
';
}
unset($__compilerVar110);
$__extraData['sidebar'] .= $__compilerVar109;
unset($__compilerVar109);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('7'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar112 = '';
$__compilerVar113 = '';
$__compilerVar113 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar113 .= '
						';
if ($user['is_staff'])
{
$__compilerVar113 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar113 .= '
					';
}
$__compilerVar113 .= '
				';
if (trim($__compilerVar113) !== '')
{
$__compilerVar112 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar113 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar113);
$__extraData['sidebar'] .= $__compilerVar112;
unset($__compilerVar112);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('8'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar114 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar114 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar114 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar114 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar114 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar114 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar114 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar114 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar114 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar114 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar114 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar114 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar114 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar114 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar114 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar114 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar114;
unset($__compilerVar114);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('8'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('8'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar115 = '';
$__compilerVar115 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar115;
unset($__compilerVar115);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('8'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar116 = '';
$__compilerVar116 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar116 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar116 .= '
				';
$__compilerVar117 = '';
$__compilerVar117 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar117 .= '
							';
if ($user['followed'])
{
$__compilerVar117 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar117 .= '
						';
}
$__compilerVar117 .= '
					';
if (trim($__compilerVar117) !== '')
{
$__compilerVar116 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar117 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar117);
$__compilerVar116 .= '
			';
}
$__compilerVar116 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar116 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar116 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar116 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar116 .= ',';
}
$__compilerVar116 .= '
						';
}
else
{
$__compilerVar116 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar116 .= ',';
}
$__compilerVar116 .= '
						';
}
$__compilerVar116 .= '
						</li>
					';
}
$__compilerVar116 .= '
				';
}
$__compilerVar116 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar116 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar116 .= '
			</ol>
		';
}
$__compilerVar116 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar116;
unset($__compilerVar116);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('8'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar118 = '';
if ($threads)
{
$__compilerVar118 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar119 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar119 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar119 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar119 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar119 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar119 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar119 .= '
</ul>';
$__compilerVar118 .= $__compilerVar119;
unset($__compilerVar119);
$__compilerVar118 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar118;
unset($__compilerVar118);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('8'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar120 = '';
if ($profilePosts)
{
$__compilerVar120 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar121 = '';
if ($canUpdateStatus)
{
$__compilerVar121 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar121 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar121 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar121 .= '
	';
$__compilerVar122 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar122 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar122 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar122 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar122 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar121 .= $__compilerVar122;
unset($__compilerVar122);
$__compilerVar121 .= '
';
}
$__compilerVar121 .= '
</ul>';
$__compilerVar120 .= $__compilerVar121;
unset($__compilerVar121);
$__compilerVar120 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar120;
unset($__compilerVar120);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('8'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar123 = '';
if ($latestResources)
{
$__compilerVar123 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar123;
unset($__compilerVar123);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('8'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar124 = '';
$__compilerVar125 = '';
$__compilerVar125 .= '
				';
$__compilerVar126 = '';
$__compilerVar126 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar126 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar126 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar126 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar126 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar126 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar126 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar126 .= '	
				';
$__compilerVar125 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar126, array());
unset($__compilerVar126);
$__compilerVar125 .= '		
			';
if (trim($__compilerVar125) !== '')
{
$__compilerVar124 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar124 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar125 . '
		</div>
	</div>
';
}
unset($__compilerVar125);
$__extraData['sidebar'] .= $__compilerVar124;
unset($__compilerVar124);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('8'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar127 = '';
$__compilerVar128 = '';
$__compilerVar128 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar128 .= '
						';
if ($user['is_staff'])
{
$__compilerVar128 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar128 .= '
					';
}
$__compilerVar128 .= '
				';
if (trim($__compilerVar128) !== '')
{
$__compilerVar127 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar128 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar128);
$__extraData['sidebar'] .= $__compilerVar127;
unset($__compilerVar127);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('9'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar129 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar129 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar129 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar129 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar129 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar129 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar129 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar129 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar129 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar129 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar129 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar129 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar129 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar129 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar129 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar129 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar129;
unset($__compilerVar129);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('9'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('9'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar130 = '';
$__compilerVar130 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar130;
unset($__compilerVar130);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('9'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar131 = '';
$__compilerVar131 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar131 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar131 .= '
				';
$__compilerVar132 = '';
$__compilerVar132 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar132 .= '
							';
if ($user['followed'])
{
$__compilerVar132 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar132 .= '
						';
}
$__compilerVar132 .= '
					';
if (trim($__compilerVar132) !== '')
{
$__compilerVar131 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar132 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar132);
$__compilerVar131 .= '
			';
}
$__compilerVar131 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar131 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar131 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar131 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar131 .= ',';
}
$__compilerVar131 .= '
						';
}
else
{
$__compilerVar131 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar131 .= ',';
}
$__compilerVar131 .= '
						';
}
$__compilerVar131 .= '
						</li>
					';
}
$__compilerVar131 .= '
				';
}
$__compilerVar131 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar131 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar131 .= '
			</ol>
		';
}
$__compilerVar131 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar131;
unset($__compilerVar131);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('9'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar133 = '';
if ($threads)
{
$__compilerVar133 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar134 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar134 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar134 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar134 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar134 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar134 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar134 .= '
</ul>';
$__compilerVar133 .= $__compilerVar134;
unset($__compilerVar134);
$__compilerVar133 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar133;
unset($__compilerVar133);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('9'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar135 = '';
if ($profilePosts)
{
$__compilerVar135 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar136 = '';
if ($canUpdateStatus)
{
$__compilerVar136 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar136 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar136 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar136 .= '
	';
$__compilerVar137 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar137 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar137 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar137 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar137 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar136 .= $__compilerVar137;
unset($__compilerVar137);
$__compilerVar136 .= '
';
}
$__compilerVar136 .= '
</ul>';
$__compilerVar135 .= $__compilerVar136;
unset($__compilerVar136);
$__compilerVar135 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar135;
unset($__compilerVar135);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('9'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar138 = '';
if ($latestResources)
{
$__compilerVar138 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar138;
unset($__compilerVar138);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('9'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar139 = '';
$__compilerVar140 = '';
$__compilerVar140 .= '
				';
$__compilerVar141 = '';
$__compilerVar141 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar141 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar141 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar141 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar141 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar141 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar141 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar141 .= '	
				';
$__compilerVar140 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar141, array());
unset($__compilerVar141);
$__compilerVar140 .= '		
			';
if (trim($__compilerVar140) !== '')
{
$__compilerVar139 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar139 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar140 . '
		</div>
	</div>
';
}
unset($__compilerVar140);
$__extraData['sidebar'] .= $__compilerVar139;
unset($__compilerVar139);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('9'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar142 = '';
$__compilerVar143 = '';
$__compilerVar143 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar143 .= '
						';
if ($user['is_staff'])
{
$__compilerVar143 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar143 .= '
					';
}
$__compilerVar143 .= '
				';
if (trim($__compilerVar143) !== '')
{
$__compilerVar142 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar143 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar143);
$__extraData['sidebar'] .= $__compilerVar142;
unset($__compilerVar142);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('10'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar144 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar144 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar144 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar144 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar144 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar144 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar144 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar144 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar144 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar144 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar144 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar144 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar144 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar144 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar144 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar144 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar144;
unset($__compilerVar144);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('10'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('10'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar145 = '';
$__compilerVar145 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar145;
unset($__compilerVar145);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('10'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar146 = '';
$__compilerVar146 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar146 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar146 .= '
				';
$__compilerVar147 = '';
$__compilerVar147 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar147 .= '
							';
if ($user['followed'])
{
$__compilerVar147 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar147 .= '
						';
}
$__compilerVar147 .= '
					';
if (trim($__compilerVar147) !== '')
{
$__compilerVar146 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar147 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar147);
$__compilerVar146 .= '
			';
}
$__compilerVar146 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar146 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar146 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar146 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar146 .= ',';
}
$__compilerVar146 .= '
						';
}
else
{
$__compilerVar146 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar146 .= ',';
}
$__compilerVar146 .= '
						';
}
$__compilerVar146 .= '
						</li>
					';
}
$__compilerVar146 .= '
				';
}
$__compilerVar146 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar146 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar146 .= '
			</ol>
		';
}
$__compilerVar146 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar146;
unset($__compilerVar146);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('10'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar148 = '';
if ($threads)
{
$__compilerVar148 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar149 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar149 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar149 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar149 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar149 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar149 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar149 .= '
</ul>';
$__compilerVar148 .= $__compilerVar149;
unset($__compilerVar149);
$__compilerVar148 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar148;
unset($__compilerVar148);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('10'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar150 = '';
if ($profilePosts)
{
$__compilerVar150 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar151 = '';
if ($canUpdateStatus)
{
$__compilerVar151 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar151 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar151 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar151 .= '
	';
$__compilerVar152 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar152 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar152 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar152 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar152 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar151 .= $__compilerVar152;
unset($__compilerVar152);
$__compilerVar151 .= '
';
}
$__compilerVar151 .= '
</ul>';
$__compilerVar150 .= $__compilerVar151;
unset($__compilerVar151);
$__compilerVar150 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar150;
unset($__compilerVar150);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('10'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar153 = '';
if ($latestResources)
{
$__compilerVar153 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar153;
unset($__compilerVar153);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('10'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar154 = '';
$__compilerVar155 = '';
$__compilerVar155 .= '
				';
$__compilerVar156 = '';
$__compilerVar156 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar156 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar156 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar156 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar156 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar156 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar156 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar156 .= '	
				';
$__compilerVar155 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar156, array());
unset($__compilerVar156);
$__compilerVar155 .= '		
			';
if (trim($__compilerVar155) !== '')
{
$__compilerVar154 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar154 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar155 . '
		</div>
	</div>
';
}
unset($__compilerVar155);
$__extraData['sidebar'] .= $__compilerVar154;
unset($__compilerVar154);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('10'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar157 = '';
$__compilerVar158 = '';
$__compilerVar158 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar158 .= '
						';
if ($user['is_staff'])
{
$__compilerVar158 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar158 .= '
					';
}
$__compilerVar158 .= '
				';
if (trim($__compilerVar158) !== '')
{
$__compilerVar157 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar158 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar158);
$__extraData['sidebar'] .= $__compilerVar157;
unset($__compilerVar157);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('11'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar159 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar159 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar159 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar159 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar159 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar159 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar159 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar159 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar159 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar159 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar159 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar159 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar159 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar159 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar159 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar159 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar159;
unset($__compilerVar159);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('11'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('11'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar160 = '';
$__compilerVar160 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar160;
unset($__compilerVar160);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('11'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar161 = '';
$__compilerVar161 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar161 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar161 .= '
				';
$__compilerVar162 = '';
$__compilerVar162 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar162 .= '
							';
if ($user['followed'])
{
$__compilerVar162 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar162 .= '
						';
}
$__compilerVar162 .= '
					';
if (trim($__compilerVar162) !== '')
{
$__compilerVar161 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar162 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar162);
$__compilerVar161 .= '
			';
}
$__compilerVar161 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar161 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar161 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar161 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar161 .= ',';
}
$__compilerVar161 .= '
						';
}
else
{
$__compilerVar161 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar161 .= ',';
}
$__compilerVar161 .= '
						';
}
$__compilerVar161 .= '
						</li>
					';
}
$__compilerVar161 .= '
				';
}
$__compilerVar161 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar161 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar161 .= '
			</ol>
		';
}
$__compilerVar161 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar161;
unset($__compilerVar161);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('11'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar163 = '';
if ($threads)
{
$__compilerVar163 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar164 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar164 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar164 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar164 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar164 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar164 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar164 .= '
</ul>';
$__compilerVar163 .= $__compilerVar164;
unset($__compilerVar164);
$__compilerVar163 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar163;
unset($__compilerVar163);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('11'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar165 = '';
if ($profilePosts)
{
$__compilerVar165 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar166 = '';
if ($canUpdateStatus)
{
$__compilerVar166 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar166 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar166 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar166 .= '
	';
$__compilerVar167 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar167 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar167 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar167 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar167 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar166 .= $__compilerVar167;
unset($__compilerVar167);
$__compilerVar166 .= '
';
}
$__compilerVar166 .= '
</ul>';
$__compilerVar165 .= $__compilerVar166;
unset($__compilerVar166);
$__compilerVar165 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar165;
unset($__compilerVar165);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('11'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar168 = '';
if ($latestResources)
{
$__compilerVar168 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar168;
unset($__compilerVar168);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('11'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar169 = '';
$__compilerVar170 = '';
$__compilerVar170 .= '
				';
$__compilerVar171 = '';
$__compilerVar171 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar171 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar171 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar171 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar171 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar171 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar171 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar171 .= '	
				';
$__compilerVar170 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar171, array());
unset($__compilerVar171);
$__compilerVar170 .= '		
			';
if (trim($__compilerVar170) !== '')
{
$__compilerVar169 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar169 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar170 . '
		</div>
	</div>
';
}
unset($__compilerVar170);
$__extraData['sidebar'] .= $__compilerVar169;
unset($__compilerVar169);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('11'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar172 = '';
$__compilerVar173 = '';
$__compilerVar173 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar173 .= '
						';
if ($user['is_staff'])
{
$__compilerVar173 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar173 .= '
					';
}
$__compilerVar173 .= '
				';
if (trim($__compilerVar173) !== '')
{
$__compilerVar172 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar173 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar173);
$__extraData['sidebar'] .= $__compilerVar172;
unset($__compilerVar172);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('12'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar174 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar174 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar174 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar174 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar174 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar174 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar174 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar174 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar174 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar174 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar174 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar174 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar174 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar174 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar174 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar174 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar174;
unset($__compilerVar174);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('12'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('12'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar175 = '';
$__compilerVar175 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar175;
unset($__compilerVar175);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('12'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar176 = '';
$__compilerVar176 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar176 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar176 .= '
				';
$__compilerVar177 = '';
$__compilerVar177 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar177 .= '
							';
if ($user['followed'])
{
$__compilerVar177 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar177 .= '
						';
}
$__compilerVar177 .= '
					';
if (trim($__compilerVar177) !== '')
{
$__compilerVar176 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar177 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar177);
$__compilerVar176 .= '
			';
}
$__compilerVar176 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar176 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar176 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar176 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar176 .= ',';
}
$__compilerVar176 .= '
						';
}
else
{
$__compilerVar176 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar176 .= ',';
}
$__compilerVar176 .= '
						';
}
$__compilerVar176 .= '
						</li>
					';
}
$__compilerVar176 .= '
				';
}
$__compilerVar176 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar176 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar176 .= '
			</ol>
		';
}
$__compilerVar176 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar176;
unset($__compilerVar176);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('12'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar178 = '';
if ($threads)
{
$__compilerVar178 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar179 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar179 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar179 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar179 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar179 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar179 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar179 .= '
</ul>';
$__compilerVar178 .= $__compilerVar179;
unset($__compilerVar179);
$__compilerVar178 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar178;
unset($__compilerVar178);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('12'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar180 = '';
if ($profilePosts)
{
$__compilerVar180 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar181 = '';
if ($canUpdateStatus)
{
$__compilerVar181 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar181 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar181 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar181 .= '
	';
$__compilerVar182 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar182 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar182 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar182 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar182 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar181 .= $__compilerVar182;
unset($__compilerVar182);
$__compilerVar181 .= '
';
}
$__compilerVar181 .= '
</ul>';
$__compilerVar180 .= $__compilerVar181;
unset($__compilerVar181);
$__compilerVar180 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar180;
unset($__compilerVar180);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('12'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar183 = '';
if ($latestResources)
{
$__compilerVar183 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar183;
unset($__compilerVar183);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('12'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar184 = '';
$__compilerVar185 = '';
$__compilerVar185 .= '
				';
$__compilerVar186 = '';
$__compilerVar186 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar186 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar186 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar186 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar186 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar186 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar186 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar186 .= '	
				';
$__compilerVar185 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar186, array());
unset($__compilerVar186);
$__compilerVar185 .= '		
			';
if (trim($__compilerVar185) !== '')
{
$__compilerVar184 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar184 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar185 . '
		</div>
	</div>
';
}
unset($__compilerVar185);
$__extraData['sidebar'] .= $__compilerVar184;
unset($__compilerVar184);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('12'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar187 = '';
$__compilerVar188 = '';
$__compilerVar188 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar188 .= '
						';
if ($user['is_staff'])
{
$__compilerVar188 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar188 .= '
					';
}
$__compilerVar188 .= '
				';
if (trim($__compilerVar188) !== '')
{
$__compilerVar187 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar188 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar188);
$__extraData['sidebar'] .= $__compilerVar187;
unset($__compilerVar187);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('13'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar189 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar189 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar189 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar189 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar189 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar189 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar189 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar189 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar189 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar189 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar189 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar189 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar189 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar189 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar189 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar189 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar189;
unset($__compilerVar189);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('13'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('13'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar190 = '';
$__compilerVar190 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar190;
unset($__compilerVar190);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('13'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar191 = '';
$__compilerVar191 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar191 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar191 .= '
				';
$__compilerVar192 = '';
$__compilerVar192 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar192 .= '
							';
if ($user['followed'])
{
$__compilerVar192 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar192 .= '
						';
}
$__compilerVar192 .= '
					';
if (trim($__compilerVar192) !== '')
{
$__compilerVar191 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar192 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar192);
$__compilerVar191 .= '
			';
}
$__compilerVar191 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar191 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar191 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar191 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar191 .= ',';
}
$__compilerVar191 .= '
						';
}
else
{
$__compilerVar191 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar191 .= ',';
}
$__compilerVar191 .= '
						';
}
$__compilerVar191 .= '
						</li>
					';
}
$__compilerVar191 .= '
				';
}
$__compilerVar191 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar191 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar191 .= '
			</ol>
		';
}
$__compilerVar191 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar191;
unset($__compilerVar191);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('13'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar193 = '';
if ($threads)
{
$__compilerVar193 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar194 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar194 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar194 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar194 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar194 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar194 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar194 .= '
</ul>';
$__compilerVar193 .= $__compilerVar194;
unset($__compilerVar194);
$__compilerVar193 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar193;
unset($__compilerVar193);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('13'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar195 = '';
if ($profilePosts)
{
$__compilerVar195 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar196 = '';
if ($canUpdateStatus)
{
$__compilerVar196 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar196 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar196 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar196 .= '
	';
$__compilerVar197 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar197 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar197 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar197 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar197 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar196 .= $__compilerVar197;
unset($__compilerVar197);
$__compilerVar196 .= '
';
}
$__compilerVar196 .= '
</ul>';
$__compilerVar195 .= $__compilerVar196;
unset($__compilerVar196);
$__compilerVar195 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar195;
unset($__compilerVar195);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('13'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar198 = '';
if ($latestResources)
{
$__compilerVar198 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar198;
unset($__compilerVar198);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('13'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar199 = '';
$__compilerVar200 = '';
$__compilerVar200 .= '
				';
$__compilerVar201 = '';
$__compilerVar201 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar201 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar201 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar201 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar201 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar201 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar201 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar201 .= '	
				';
$__compilerVar200 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar201, array());
unset($__compilerVar201);
$__compilerVar200 .= '		
			';
if (trim($__compilerVar200) !== '')
{
$__compilerVar199 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar199 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar200 . '
		</div>
	</div>
';
}
unset($__compilerVar200);
$__extraData['sidebar'] .= $__compilerVar199;
unset($__compilerVar199);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('13'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar202 = '';
$__compilerVar203 = '';
$__compilerVar203 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar203 .= '
						';
if ($user['is_staff'])
{
$__compilerVar203 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar203 .= '
					';
}
$__compilerVar203 .= '
				';
if (trim($__compilerVar203) !== '')
{
$__compilerVar202 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar203 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar203);
$__extraData['sidebar'] .= $__compilerVar202;
unset($__compilerVar202);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('14'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar204 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar204 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar204 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar204 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar204 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar204 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar204 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar204 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar204 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar204 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar204 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar204 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar204 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar204 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar204 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar204 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar204;
unset($__compilerVar204);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('14'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('14'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar205 = '';
$__compilerVar205 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar205;
unset($__compilerVar205);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('14'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar206 = '';
$__compilerVar206 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar206 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar206 .= '
				';
$__compilerVar207 = '';
$__compilerVar207 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar207 .= '
							';
if ($user['followed'])
{
$__compilerVar207 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar207 .= '
						';
}
$__compilerVar207 .= '
					';
if (trim($__compilerVar207) !== '')
{
$__compilerVar206 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar207 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar207);
$__compilerVar206 .= '
			';
}
$__compilerVar206 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar206 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar206 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar206 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar206 .= ',';
}
$__compilerVar206 .= '
						';
}
else
{
$__compilerVar206 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar206 .= ',';
}
$__compilerVar206 .= '
						';
}
$__compilerVar206 .= '
						</li>
					';
}
$__compilerVar206 .= '
				';
}
$__compilerVar206 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar206 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar206 .= '
			</ol>
		';
}
$__compilerVar206 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar206;
unset($__compilerVar206);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('14'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar208 = '';
if ($threads)
{
$__compilerVar208 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar209 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar209 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar209 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar209 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar209 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar209 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar209 .= '
</ul>';
$__compilerVar208 .= $__compilerVar209;
unset($__compilerVar209);
$__compilerVar208 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar208;
unset($__compilerVar208);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('14'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar210 = '';
if ($profilePosts)
{
$__compilerVar210 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar211 = '';
if ($canUpdateStatus)
{
$__compilerVar211 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar211 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar211 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar211 .= '
	';
$__compilerVar212 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar212 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar212 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar212 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar212 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar211 .= $__compilerVar212;
unset($__compilerVar212);
$__compilerVar211 .= '
';
}
$__compilerVar211 .= '
</ul>';
$__compilerVar210 .= $__compilerVar211;
unset($__compilerVar211);
$__compilerVar210 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar210;
unset($__compilerVar210);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('14'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar213 = '';
if ($latestResources)
{
$__compilerVar213 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar213;
unset($__compilerVar213);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('14'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar214 = '';
$__compilerVar215 = '';
$__compilerVar215 .= '
				';
$__compilerVar216 = '';
$__compilerVar216 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar216 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar216 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar216 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar216 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar216 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar216 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar216 .= '	
				';
$__compilerVar215 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar216, array());
unset($__compilerVar216);
$__compilerVar215 .= '		
			';
if (trim($__compilerVar215) !== '')
{
$__compilerVar214 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar214 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar215 . '
		</div>
	</div>
';
}
unset($__compilerVar215);
$__extraData['sidebar'] .= $__compilerVar214;
unset($__compilerVar214);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('14'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar217 = '';
$__compilerVar218 = '';
$__compilerVar218 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar218 .= '
						';
if ($user['is_staff'])
{
$__compilerVar218 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar218 .= '
					';
}
$__compilerVar218 .= '
				';
if (trim($__compilerVar218) !== '')
{
$__compilerVar217 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar218 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar218);
$__extraData['sidebar'] .= $__compilerVar217;
unset($__compilerVar217);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('15'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar219 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar219 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar219 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar219 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar219 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar219 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar219 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar219 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar219 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar219 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar219 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar219 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar219 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar219 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar219 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar219 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar219;
unset($__compilerVar219);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('15'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('15'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar220 = '';
$__compilerVar220 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar220;
unset($__compilerVar220);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('15'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar221 = '';
$__compilerVar221 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar221 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar221 .= '
				';
$__compilerVar222 = '';
$__compilerVar222 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar222 .= '
							';
if ($user['followed'])
{
$__compilerVar222 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar222 .= '
						';
}
$__compilerVar222 .= '
					';
if (trim($__compilerVar222) !== '')
{
$__compilerVar221 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar222 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar222);
$__compilerVar221 .= '
			';
}
$__compilerVar221 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar221 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar221 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar221 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar221 .= ',';
}
$__compilerVar221 .= '
						';
}
else
{
$__compilerVar221 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar221 .= ',';
}
$__compilerVar221 .= '
						';
}
$__compilerVar221 .= '
						</li>
					';
}
$__compilerVar221 .= '
				';
}
$__compilerVar221 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar221 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar221 .= '
			</ol>
		';
}
$__compilerVar221 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar221;
unset($__compilerVar221);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('15'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar223 = '';
if ($threads)
{
$__compilerVar223 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar224 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar224 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar224 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar224 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar224 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar224 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar224 .= '
</ul>';
$__compilerVar223 .= $__compilerVar224;
unset($__compilerVar224);
$__compilerVar223 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar223;
unset($__compilerVar223);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('15'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar225 = '';
if ($profilePosts)
{
$__compilerVar225 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar226 = '';
if ($canUpdateStatus)
{
$__compilerVar226 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar226 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar226 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar226 .= '
	';
$__compilerVar227 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar227 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar227 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar227 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar227 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar226 .= $__compilerVar227;
unset($__compilerVar227);
$__compilerVar226 .= '
';
}
$__compilerVar226 .= '
</ul>';
$__compilerVar225 .= $__compilerVar226;
unset($__compilerVar226);
$__compilerVar225 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar225;
unset($__compilerVar225);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('15'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar228 = '';
if ($latestResources)
{
$__compilerVar228 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar228;
unset($__compilerVar228);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('15'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar229 = '';
$__compilerVar230 = '';
$__compilerVar230 .= '
				';
$__compilerVar231 = '';
$__compilerVar231 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar231 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar231 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar231 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar231 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar231 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar231 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar231 .= '	
				';
$__compilerVar230 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar231, array());
unset($__compilerVar231);
$__compilerVar230 .= '		
			';
if (trim($__compilerVar230) !== '')
{
$__compilerVar229 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar229 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar230 . '
		</div>
	</div>
';
}
unset($__compilerVar230);
$__extraData['sidebar'] .= $__compilerVar229;
unset($__compilerVar229);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('15'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar232 = '';
$__compilerVar233 = '';
$__compilerVar233 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar233 .= '
						';
if ($user['is_staff'])
{
$__compilerVar233 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar233 .= '
					';
}
$__compilerVar233 .= '
				';
if (trim($__compilerVar233) !== '')
{
$__compilerVar232 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar233 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar233);
$__extraData['sidebar'] .= $__compilerVar232;
unset($__compilerVar232);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '

';
if ($xenOptions['sidebarPositionsBanner'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsToday'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsTomorrow'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCalendarEventsUpcoming'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsCountdown'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnline'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostLikes'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMostPosts'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarDonations'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraOne'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraTwo'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraThree'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarExtraFour'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsSidebarNotices'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStatistics'] == ('16'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar234 = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__compilerVar234 .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__compilerVar234 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__compilerVar234 .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__compilerVar234 .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__compilerVar234 .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__compilerVar234 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar234 .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__compilerVar234 .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__compilerVar234 .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__compilerVar234 .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__compilerVar234 .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__compilerVar234 .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__compilerVar234 .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__compilerVar234 .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__compilerVar234 .= '
               
</div>
</div>
</div>

';
}
$__extraData['sidebar'] .= $__compilerVar234;
unset($__compilerVar234);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsTodaysBirthdays'] == ('16'))
{
$__extraData['sidebar'] .= '
    ' . '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsForumStatistics'] == ('16'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar235 = '';
$__compilerVar235 .= '<div class="section">
    <div class="secondaryContent statsList" id="boardStats">
        <h3>' . 'Forum Statistics' . '</h3>
        <div class="pairsJustified">
            <dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
            <dl class="messageCount"><dt>' . 'Messages' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
            <dl class="memberCount"><dt>' . 'Members' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
            <dl><dt>' . 'Latest Member' . ':</dt>
                <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',false,array())) . '</dd></dl>
            <!-- slot: forum_stats_extra -->
        </div>
    </div>
</div>';
$__extraData['sidebar'] .= $__compilerVar235;
unset($__compilerVar235);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsMembersOnlineNow'] == ('16'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar236 = '';
$__compilerVar236 .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__compilerVar236 .= '
		
			';
if ($visitor['user_id'])
{
$__compilerVar236 .= '
				';
$__compilerVar237 = '';
$__compilerVar237 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar237 .= '
							';
if ($user['followed'])
{
$__compilerVar237 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar237 .= '
						';
}
$__compilerVar237 .= '
					';
if (trim($__compilerVar237) !== '')
{
$__compilerVar236 .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar237 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar237);
$__compilerVar236 .= '
			';
}
$__compilerVar236 .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__compilerVar236 .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__compilerVar236 .= '
						<li>
						';
if ($user['user_id'])
{
$__compilerVar236 .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__compilerVar236 .= ',';
}
$__compilerVar236 .= '
						';
}
else
{
$__compilerVar236 .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__compilerVar236 .= ',';
}
$__compilerVar236 .= '
						';
}
$__compilerVar236 .= '
						</li>
					';
}
$__compilerVar236 .= '
				';
}
$__compilerVar236 .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__compilerVar236 .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__compilerVar236 .= '
			</ol>
		';
}
$__compilerVar236 .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
$__extraData['sidebar'] .= $__compilerVar236;
unset($__compilerVar236);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewPosts'] == ('16'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar238 = '';
if ($threads)
{
$__compilerVar238 .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar239 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar239 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar239 .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__compilerVar239 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar239 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar239 .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__compilerVar239 .= '
</ul>';
$__compilerVar238 .= $__compilerVar239;
unset($__compilerVar239);
$__compilerVar238 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar238;
unset($__compilerVar238);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewProfilePosts'] == ('16'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar240 = '';
if ($profilePosts)
{
$__compilerVar240 .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar241 = '';
if ($canUpdateStatus)
{
$__compilerVar241 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar241 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar241 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar241 .= '
	';
$__compilerVar242 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar242 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar242 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar242 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar242 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar241 .= $__compilerVar242;
unset($__compilerVar242);
$__compilerVar241 .= '
';
}
$__compilerVar241 .= '
</ul>';
$__compilerVar240 .= $__compilerVar241;
unset($__compilerVar241);
$__compilerVar240 .= '
        </div>
    </div>
';
}
$__extraData['sidebar'] .= $__compilerVar240;
unset($__compilerVar240);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsNewResources'] == ('16'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar243 = '';
if ($latestResources)
{
$__compilerVar243 .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar243;
unset($__compilerVar243);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsShareThisPage'] == ('16'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar244 = '';
$__compilerVar245 = '';
$__compilerVar245 .= '
				';
$__compilerVar246 = '';
$__compilerVar246 .= '
				';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar246 .= '
					<div class="tweet shareControl">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"
							data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
							data-url="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"
							' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
							' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
					</div>
				';
}
$__compilerVar246 .= '		
				';
if ($xenOptions['facebookLike'])
{
$__compilerVar246 .= '
					<div class="facebookLike shareControl">
						';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar246 .= '
						<div class="fb-like" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" data-layout="button_count" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-font="trebuchet ms" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
					</div>
				';
}
$__compilerVar246 .= '
				';
if ($xenOptions['plusone'])
{
$__compilerVar246 .= '
					<div class="plusone shareControl">
						<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"></div>
					</div>
				';
}
$__compilerVar246 .= '	
				';
$__compilerVar245 .= $this->callTemplateHook('sidebar_share_page_options', $__compilerVar246, array());
unset($__compilerVar246);
$__compilerVar245 .= '		
			';
if (trim($__compilerVar245) !== '')
{
$__compilerVar244 .= '	
	';
$this->addRequiredExternal('css', 'sidebar_share_page');
$__compilerVar244 .= '
	<div class="section infoBlock sharePage">
		<div class="secondaryContent">
			<h3>' . 'Share This Page' . '</h3>
			' . $__compilerVar245 . '
		</div>
	</div>
';
}
unset($__compilerVar245);
$__extraData['sidebar'] .= $__compilerVar244;
unset($__compilerVar244);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
';
if ($xenOptions['sidebarPositionsStaffOnlineNow'] == ('16'))
{
$__extraData['sidebar'] .= '
    ';
$__compilerVar247 = '';
$__compilerVar248 = '';
$__compilerVar248 .= '
					';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar248 .= '
						';
if ($user['is_staff'])
{
$__compilerVar248 .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true'
),'')) . '
								' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '
								<div class="userTitle">' . XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $user
)) . '</div>
							</li>
						';
}
$__compilerVar248 .= '
					';
}
$__compilerVar248 .= '
				';
if (trim($__compilerVar248) !== '')
{
$__compilerVar247 .= '
	<div class="section staffOnline avatarList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Online Now' . '</a></h3>
			<ul>
				' . $__compilerVar248 . '
			</ul>
		</div>
	</div>
';
}
unset($__compilerVar248);
$__extraData['sidebar'] .= $__compilerVar247;
unset($__compilerVar247);
$__extraData['sidebar'] .= '
';
}
$__extraData['sidebar'] .= '
	' . '
	
	';
$__compilerVar249 = '';
$__compilerVar249 .= '
';
if ($xenOptions['PD_DDGoalSidebar'])
{
$__compilerVar249 .= '
    ';
$__compilerVar250 = '';
if ($visitor['canDonate'] && !$xenOptions['PD_DisableDonations'])
{
$__compilerVar250 .= '
	';
$this->addRequiredExternal('css', 'Aayush_PD');
$__compilerVar250 .= '
	
	';
$donationReceived = '';
$__compilerVar251 = '';
$donationReceived .= $this->callTemplateCallback('Aayush_PaypalDonate_Helper', 'getDonationReceived', $__compilerVar251, array());
unset($__compilerVar251);
$__compilerVar250 .= '
	';
$receivedPercent = '';
$receivedPercent .= XenForo_Template_Helper_Core::numberFormat((($donationReceived / $xenOptions['PD_GoalAmount']) * 100), '0');
$__compilerVar250 .= '
	
	';
if ($receivedPercent > 100)
{
$__compilerVar250 .= '
		';
$receivedPercent = '';
$receivedPercent .= '100';
$__compilerVar250 .= '
	';
}
$__compilerVar250 .= '
	
	<div class="DonationGoal section">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('donate', false, array()) . '">' . 'Donate' . '</a></h3>
			<div class="minorHeading donationNote">
				' . 'Goal amount for this month' . ': ' . htmlspecialchars($xenOptions['PD_GoalAmount'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($xenOptions['PD_Currency'], ENT_QUOTES, 'UTF-8') . ', ' . 'Received' . ': ' . htmlspecialchars($donationReceived, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($xenOptions['PD_Currency'], ENT_QUOTES, 'UTF-8') . ' (' . htmlspecialchars($receivedPercent, ENT_QUOTES, 'UTF-8') . '%)
			</div>
			
			<div class="ProgressMeter">
				<span class="ProgressGraphic" style="width:' . htmlspecialchars($receivedPercent, ENT_QUOTES, 'UTF-8') . '%;">&nbsp;</span><span class="ProgressCounter">' . htmlspecialchars($receivedPercent, ENT_QUOTES, 'UTF-8') . '%</span>
			</div>
			
			<a href="' . XenForo_Template_Helper_Core::link('donate', false, array()) . '#donateForm" class="donateButton"><img src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" alt="' . 'Donate' . '" /></a>
		</div>
		
	</div>
';
}
$__compilerVar249 .= $__compilerVar250;
unset($__compilerVar250);
$__compilerVar249 .= '
';
}
$__compilerVar249 .= '
		';
if ($canViewMemberList)
{
$__compilerVar249 .= '
			' . '
		';
}
$__compilerVar249 .= '
		
		
		
		
		
		<!-- block: forum_stats -->
		<div class="section">
			<div class="secondaryContent statsList" id="boardStats">
				<h3>' . 'Forum Statistics' . '</h3>
				<div class="pairsJustified">
					<dl class="discussionCount"><dt>' . 'Discussions' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['discussions'], '0') . '</dd></dl>
					<dl class="messageCount"><dt>' . 'Messages' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['messages'], '0') . '</dd></dl>
					<dl class="memberCount"><dt>' . 'Members' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($boardTotals['users'], '0') . '</dd></dl>
					<dl><dt>' . 'Latest Member' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
					<!-- slot: forum_stats_extra -->
				</div>
			</div>
		</div>
		<!-- end block: forum_stats -->
		
		' . '
		
	';
$__extraData['sidebar'] .= $this->callTemplateHook('forum_list_sidebar', $__compilerVar249, array());
unset($__compilerVar249);
$__extraData['sidebar'] .= '
';
