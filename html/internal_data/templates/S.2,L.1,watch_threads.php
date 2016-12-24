<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Unread Watched Threads';
$__output .= '

';
$__extraData['pageDescription'] = array();
$__extraData['pageDescription']['content'] = '';
$__extraData['pageDescription']['content'] .= 'This is a list of the ' . htmlspecialchars($xenOptions['discussionsPerPage'], ENT_QUOTES, 'UTF-8') . ' most recently updated threads with unread replies that you are watching.' . ' <a href="' . XenForo_Template_Helper_Core::link('watched/threads/all', false, array()) . '">' . 'There may be more to view.' . '</a>';
$__output .= '

';
$this->addRequiredExternal('css', 'discussion_list');
$__output .= '

<div class="discussionList sectionMain">
	<dl class="sectionHeaders">
		<dt class="posterAvatar"></dt>
		<dd class="main">
			<a class="title"><span>' . 'Title' . '</span></a>
			<a class="postDate"><span></span></a>
		</dd>
		<dd class="stats">
			<a class="major"><span>' . 'Replies' . '</span></a>
			<a class="minor"><span>' . 'Views' . '</span></a>
		</dd>
		<dd class="lastPost"><a><span>' . 'Last Message' . '</span></a></dd>
	</dl>

	';
if ($newThreads)
{
$__output .= '		
		<ol class="discussionListItems">
		';
foreach ($newThreads AS $thread)
{
$__output .= '
			';
$__compilerVar1 = '';
$__compilerVar1 .= '1';
$__compilerVar2 = '';
$__compilerVar2 .= '1';
$__compilerVar3 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar3 .= '

';
if ($thread['isDeleted'])
{
$__compilerVar4 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar4 .= '

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
$__compilerVar5 = '';
$__compilerVar5 .= '
					';
if ($thread['discussion_state'] == ('moderated'))
{
$__compilerVar5 .= '<span class="moderated" title="' . 'Moderated' . '">' . 'Moderated' . '</span>';
}
$__compilerVar5 .= '
					';
if (!$thread['discussion_open'])
{
$__compilerVar5 .= '<span class="locked" title="' . 'Locked' . '">' . 'Locked' . '</span>';
}
$__compilerVar5 .= '
					';
if ($thread['sticky'])
{
$__compilerVar5 .= '<span class="sticky" title="' . 'Sticky' . '">' . 'Sticky' . '</span>';
}
$__compilerVar5 .= '
					';
if ($thread['discussion_type'] == ('redirect'))
{
$__compilerVar5 .= '<span class="redirect" title="' . 'Redirect' . '">' . 'Redirect' . '</span>';
}
$__compilerVar5 .= '
				';
if (trim($__compilerVar5) !== '')
{
$__compilerVar4 .= '
				<div class="iconKey">
				' . $__compilerVar5 . '
				</div>
			';
}
unset($__compilerVar5);
$__compilerVar4 .= '

			<h3 class="title muted">
				';
if ($thread['canInlineMod'])
{
$__compilerVar4 .= '<input type="checkbox" name="threads[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck" id="inlineModCheck-thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" data-target="#thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select thread' . ': ' . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar4 .= '
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
$__compilerVar4 .= '
						' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $thread['deleteInfo']
)) . '' . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['delete_date'],array(
'time' => htmlspecialchars($thread['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($thread['delete_reason'])
{
$__compilerVar4 .= ', ' . 'Reason' . ': ' . htmlspecialchars($thread['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar4 .= '.
					';
}
$__compilerVar4 .= '
				</div>

				<div class="controls faint">
					<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array()) . '" class="viewLink">' . 'View' . '</a>
					';
if ($thread['canEditThread'])
{
$__compilerVar4 .= '<a href="javascript:" data-href="' . XenForo_Template_Helper_Core::link('threads/list-item-edit', $thread, array()) . '" class="EditControl JsOnly">' . 'Edit' . '</a>';
}
$__compilerVar4 .= '
				</div>
			</div>
		</div>

	</div>

	<div class="listBlock statsLastPost"></div>

</li>';
$__compilerVar3 .= $__compilerVar4;
unset($__compilerVar4);
}
else
{
$__compilerVar3 .= '

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
$__compilerVar3 .= XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,(true),array(
'user' => '$visitor',
'size' => 's',
'img' => 'true',
'class' => 'miniMe',
'title' => 'You have posted ' . XenForo_Template_Helper_Core::numberFormat($thread['user_post_count'], '0') . ' message(s) in this thread'
),''));
}
$__compilerVar3 .= '
		</span>
	</div>

	<div class="listBlock main">

		<div class="titleText">
			';
$__compilerVar6 = '';
$__compilerVar6 .= '
					';
$__compilerVar7 = '';
$__compilerVar7 .= '
					';
if ($thread['isModerated'])
{
$__compilerVar7 .= '<span class="moderated" title="' . 'Moderated' . '">' . 'Moderated' . '</span>';
}
$__compilerVar7 .= '
					';
if (!$thread['discussion_open'])
{
$__compilerVar7 .= '<span class="locked" title="' . 'Locked' . '">' . 'Locked' . '</span>';
}
$__compilerVar7 .= '
					';
if ($thread['sticky'])
{
$__compilerVar7 .= '<span class="sticky" title="' . 'Sticky' . '">' . 'Sticky' . '</span>';
}
$__compilerVar7 .= '
					';
if ($thread['isRedirect'])
{
$__compilerVar7 .= '<span class="redirect" title="' . 'Redirect' . '">' . 'Redirect' . '</span>';
}
$__compilerVar7 .= '
					';
if ($thread['thread_is_watched'] OR $thread['forum_is_watched'])
{
$__compilerVar7 .= '<span class="watched" title="' . 'Watched' . '">' . 'Watched' . '</span>';
}
$__compilerVar7 .= '
					';
$__compilerVar6 .= $this->callTemplateHook('thread_list_item_icon_key', $__compilerVar7, array(
'thread' => $thread
));
unset($__compilerVar7);
$__compilerVar6 .= '
				';
if (trim($__compilerVar6) !== '')
{
$__compilerVar3 .= '
				<div class="iconKey">
				' . $__compilerVar6 . '
				</div>
			';
}
unset($__compilerVar6);
$__compilerVar3 .= '

			<h3 class="title">
				';
if ($thread['canInlineMod'])
{
$__compilerVar3 .= '<input type="checkbox" name="threads[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck" id="inlineModCheck-thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" data-target="#thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select thread' . ': ' . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar3 .= '
				';
if ($showSubscribeOptions)
{
$__compilerVar3 .= '<input type="checkbox" name="thread_ids[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar3 .= '
				';
if ($thread['prefix_id'])
{
$__compilerVar3 .= '
					';
if ($linkPrefix)
{
$__compilerVar3 .= '
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
$__compilerVar3 .= '
						' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . '
					';
}
$__compilerVar3 .= '
				';
}
$__compilerVar3 .= '
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
$__compilerVar3 .= '<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '" class="unreadLink" title="' . 'Go to first unread message' . '"></a>';
}
$__compilerVar3 .= '
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
if ($__compilerVar1)
{
$__compilerVar3 .= '<span class="containerName">,
					<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a></span>';
}
$__compilerVar3 .= '

					';
if ($__compilerVar2 AND $thread['lastPageNumbers'])
{
$__compilerVar3 .= '
						<span class="itemPageNav">
							<span>...</span>
							';
foreach ($thread['lastPageNumbers'] AS $pageNumber)
{
$__compilerVar3 .= '
								<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array(
'page' => $pageNumber
)) . '">' . htmlspecialchars($pageNumber, ENT_QUOTES, 'UTF-8') . '</a>
							';
}
$__compilerVar3 .= '
						</span>
					';
}
$__compilerVar3 .= '
				</div>

				<div class="controls faint">
					';
if ($thread['canEditThread'])
{
$__compilerVar3 .= '<a href="javascript:" data-href="' . XenForo_Template_Helper_Core::link('threads/list-item-edit', $thread, array(
'showForumLink' => $__compilerVar1
)) . '" class="EditControl JsOnly">' . 'Edit' . '</a>';
}
$__compilerVar3 .= '
					';
if ($showSubscribeOptions AND $thread['email_subscribe'])
{
$__compilerVar3 .= 'Email';
}
$__compilerVar3 .= '
				</div>
			</div>
		</div>
	</div>

	<div class="listBlock stats pairsJustified" title="' . 'Members who liked the first message' . ': ' . (($thread['isRedirect']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($thread['first_post_likes'], '0'))) . '">
		<dl class="major"><dt>' . 'Replies' . ':</dt> <dd>';
if ($thread['isRedirect'])
{
$__compilerVar3 .= '
&ndash;
';
}
else
{
$__compilerVar3 .= '
';
if ($visitor['permissions']['forum']['whoRepliedView'] and $thread['reply_count'] > 0)
{
$__compilerVar3 .= '
<a href="' . XenForo_Template_Helper_Core::link('threads/whoreplied', $thread, array()) . '" title="' . 'Who Replied?' . '" class=\'OverlayTrigger\' data-href="' . XenForo_Template_Helper_Core::link('threads/whoreplied', $thread, array()) . '">' . XenForo_Template_Helper_Core::numberFormat($thread['reply_count'], '0') . '</a>
';
}
else
{
$__compilerVar3 .= '
' . htmlspecialchars($thread['reply_count'], ENT_QUOTES, 'UTF-8') . '
';
}
$__compilerVar3 .= '
';
}
$__compilerVar3 .= '</dd></dl>
		<dl class="minor"><dt>' . 'Views' . ':</dt> <dd>' . (($thread['isRedirect']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($thread['view_count'], '0'))) . '</dd></dl>
	</div>

	<div class="listBlock lastPost">
		';
if ($thread['isRedirect'])
{
$__compilerVar3 .= '
			<div class="lastPostInfo">' . 'N/A' . '</div>
		';
}
else
{
$__compilerVar3 .= '
			<dl class="lastPostInfo">
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_threadLastPostAvatar') AND $thread['uix_lastPostAvatar'])
{
$__compilerVar3 .= '
					' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['uix_lastPostAvatar'],(true),array(
'user' => '$thread.uix_lastPostAvatar',
'size' => 's',
'img' => 'true'
),'')) . '
				';
}
$__compilerVar3 .= '
				<dt>';
if (XenForo_Template_Helper_Core::callHelper('isIgnored', array(
'0' => $thread['last_post_user_id']
)))
{
$__compilerVar3 .= 'Ignored Member';
}
else
{
$__compilerVar3 .= XenForo_Template_Helper_Core::callHelper('usernamehtml', array($thread['lastPostInfo'],'',false,array()));
}
$__compilerVar3 .= '</dt>
				<dd class="muted"><a' . (($visitor['user_id']) ? (' href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '" title="' . 'Go to last message' . '"') : ('')) . ' class="dateTime">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '</a></dd>
			</dl>
		';
}
$__compilerVar3 .= '
	</div>
</li>

';
}
$__output .= $__compilerVar3;
unset($__compilerVar1, $__compilerVar2, $__compilerVar3);
$__output .= '
		';
}
$__output .= '
		</ol>
	';
}
else
{
$__output .= '
		<div class="primaryContent">' . 'You do not have any watched threads that are unread.' . '</div>
	';
}
$__output .= '
	
	<div class="sectionFooter">
		<a href="' . XenForo_Template_Helper_Core::link('watched/threads/all', false, array()) . '">' . 'Show all watched threads' . '</a>
	</div>

</div>

';
$__compilerVar8 = '';
$__compilerVar8 .= '<div id="PreviewTooltip">
	<span class="arrow"><span></span></span>
	
	<div class="section">
		<div class="primaryContent previewContent">
			<span class="PreviewContents">' . 'Loading' . '...</span>
		</div>
	</div>
</div>';
$__output .= $__compilerVar8;
unset($__compilerVar8);
