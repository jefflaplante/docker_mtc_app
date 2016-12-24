<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Comments on Profile Post by ' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:members', $user, array()), 'value' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'));
$__output .= '

<ol class="messageSimple">

';
if ($firstCommentShown['comment_date'] > $profilePost['first_comment_date'])
{
$__output .= '
	';
$__compilerVar1 = '';
$__compilerVar1 .= '<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $profilePost, array(
'before' => $firstCommentShown['comment_date']
)) . '" class="CommentLoader" data-loadParams="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => array(
'before' => $firstCommentShown['comment_date']
)
)), ENT_QUOTES, 'UTF-8', true) . '">' . 'View previous comments' . '</a></li>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
';
}
$__output .= '

';
foreach ($comments AS $comment)
{
$__output .= '
	';
if ($comment['isDeleted'])
{
$__output .= '
		';
$__compilerVar2 = '';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar2 .= '

';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar2 .= '

<li id="profile-post-comment-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '" class="comment secondaryContent deleted' . (($comment['isIgnored']) ? (' ignored') : ('')) . '">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($comment,(true),array(
'user' => '$comment',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="commentInfo">
		<div class="commentContent">
			' . 'This message by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $comment
)) . ' has been removed from public view.' . '
			';
if ($comment['delete_username'])
{
$__compilerVar2 .= '
				' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $comment['deleteInfo']
)) . '' . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($comment['delete_date'],array(
'time' => htmlspecialchars($comment['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($comment['delete_reason'])
{
$__compilerVar2 .= ', ' . 'Reason' . ': ' . htmlspecialchars($comment['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar2 .= '.
			';
}
$__compilerVar2 .= '
		</div>
		
		<div class="commentControls">
			' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($comment['comment_date'],array(
'time' => '$comment.comment_date',
'class' => 'muted'
))) . '
			<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/show', $comment, array(
'overlay' => (($inOverlay) ? ('true') : (''))
)) . '" class="MessageLoader control item show" data-messageSelector="#profile-post-comment-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '"><span></span>' . 'Show' . '</a>
		</div>
	</div>
</li>';
$__output .= $__compilerVar2;
unset($__compilerVar2);
$__output .= '
	';
}
else
{
$__output .= '
		';
$__compilerVar3 = '';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar3 .= '

<li id="profile-post-comment-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '" class="comment secondaryContent ' . (($comment['isIgnored']) ? (' ignored') : ('')) . '">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($comment,(true),array(
'user' => '$comment',
'size' => 's',
'img' => 'true'
),'')) . '

	<div class="commentInfo">
		';
$__compilerVar4 = '';
$__compilerVar4 .= '
					';
if ($comment['warning_message'])
{
$__compilerVar4 .= '
						<li class="warningNotice"><span class="icon Tooltip" title="' . 'Warning' . '" data-tipclass="iconTip flipped"></span>' . htmlspecialchars($comment['warning_message'], ENT_QUOTES, 'UTF-8') . '</li>
					';
}
else if ($comment['isDeleted'])
{
$__compilerVar4 .= '
						<li class="deletedNotice"><span class="icon Tooltip" title="' . 'Deleted' . '" data-tipclass="iconTip flipped"></span>' . 'This message has been removed from public view.' . '</li>
					';
}
else if ($comment['isModerated'])
{
$__compilerVar4 .= '
						<li class="moderatedNotice"><span class="icon Tooltip" title="' . 'Awaiting moderation' . '" data-tipclass="iconTip flipped"></span>' . 'This message is awaiting moderator approval, and is invisible to normal visitors.' . '</li>
					';
}
$__compilerVar4 .= '
				';
if (trim($__compilerVar4) !== '')
{
$__compilerVar3 .= '
			<ul class="messageNotices">
				' . $__compilerVar4 . '
			</ul>
		';
}
unset($__compilerVar4);
$__compilerVar3 .= '
		<div class="commentContent">
			' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($comment,'',(true),array(
'class' => 'poster'
))) . '
			<article><blockquote>' . XenForo_Template_Helper_Core::callHelper('parseSmilies', array(
'0' => XenForo_Template_Helper_Core::callHelper('bodytext', array(
'0' => $comment['message']
))
)) . '</blockquote></article>
		</div>
		<div class="commentControls">
			' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($comment['comment_date'],array(
'time' => '$comment.comment_date',
'class' => 'muted'
))) . '
			';
if ($comment['canEdit'])
{
$__compilerVar3 .= '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/edit', $comment, array()) . '" class="OverlayTrigger item control edit"><span></span>' . 'Edit' . '</a>';
}
$__compilerVar3 .= '
			';
if ($comment['canDelete'])
{
$__compilerVar3 .= '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/delete', $comment, array()) . '" class="OverlayTrigger item control delete"><span></span>' . 'Delete' . '</a>';
}
$__compilerVar3 .= '
			';
if ($comment['canReport'])
{
$__compilerVar3 .= '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/report', $comment, array()) . '" class="OverlayTrigger item control report"><span></span>' . 'Report' . '</a>';
}
$__compilerVar3 .= '
			';
$__compilerVar5 = '';
$__compilerVar5 .= '
						';
$__compilerVar6 = '';
$__compilerVar6 .= '
								';
if ($comment['canUndelete'])
{
$__compilerVar6 .= '<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/undelete', $comment, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger item control undelete"><span></span>' . 'Undelete' . '</a></li>';
}
$__compilerVar6 .= '
								';
if ($comment['canCleanSpam'])
{
$__compilerVar6 .= '<li><a href="' . XenForo_Template_Helper_Core::link('spam-cleaner', $comment, array()) . '" class="item control deleteSpam OverlayTrigger"><span></span>' . 'Spam' . '</a></li>';
}
$__compilerVar6 .= '
								';
if ($comment['canViewIps'])
{
$__compilerVar6 .= '<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/ip', $comment, array()) . '" class="OverlayTrigger item control ip"><span></span>' . 'IP' . '</a></li>';
}
$__compilerVar6 .= '
								';
if ($comment['canWarn'])
{
$__compilerVar6 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('members/warn', $comment, array(
'content_type' => 'profile_post_comment',
'content_id' => $comment['profile_post_comment_id']
)) . '" class="item control warn"><span></span>' . 'Warn' . '</a></li>
								';
}
else if ($comment['warning_id'] && $canViewWarnings)
{
$__compilerVar6 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('warnings', $comment, array()) . '" class="OverlayTrigger item control viewWarning"><span></span>' . 'View Warning' . '</a></li>
								';
}
$__compilerVar6 .= '
								';
if ($comment['canApproveUnapprove'] AND $comment['message_state'] != ('deleted'))
{
$__compilerVar6 .= '
									';
if ($comment['message_state'] == ('moderated'))
{
$__compilerVar6 .= '
										<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/approve', $comment, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger item control approve"><span></span>' . 'Approve' . '</a></li>
									';
}
else
{
$__compilerVar6 .= '
										<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/unapprove', $comment, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger item control unapprove"><span></span>' . 'Unapprove' . '</a></li>
									';
}
$__compilerVar6 .= '
								';
}
$__compilerVar6 .= '
							';
if (trim($__compilerVar6) !== '')
{
$__compilerVar5 .= '
						<div class="primaryContent menuHeader"><h3>' . 'Controls' . '</h3></div>
						<ul class="secondaryContent blockLinksList">
							' . $__compilerVar6 . '
						</ul>
						';
}
unset($__compilerVar6);
$__compilerVar5 .= '
					';
if (trim($__compilerVar5) !== '')
{
$__compilerVar3 .= '
				<span class="Popup item control menu">
					<a rel="Menu">' . 'Controls' . '</a>
					<div class="Menu' . (($inOverlay) ? (' inOverlay') : ('')) . '">
					' . $__compilerVar5 . '
					</div>
				</span>
			';
}
unset($__compilerVar5);
$__compilerVar3 .= '
			
			';
$__compilerVar7 = '';
$__compilerVar7 .= '
					';
if ($comment['canLike'])
{
$__compilerVar7 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/like', $comment, array()) . '" class="LikeLink item control ' . (($comment['like_date']) ? ('unlike') : ('like')) . '" data-container="#likes-pc-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '"><span></span><span class="LikeLabel">' . (($comment['like_date']) ? ('Unlike') : ('Like')) . '</span></a>
					';
}
$__compilerVar7 .= '
				';
if (trim($__compilerVar7) !== '')
{
$__compilerVar3 .= '
				<div class="publicControls">
				' . $__compilerVar7 . '
				</div>
			';
}
unset($__compilerVar7);
$__compilerVar3 .= '
		</div>
		
		<div id="likes-pc-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '">
			';
if ($comment['likes'])
{
$__compilerVar3 .= '
				';
$__compilerVar8 = '';
$__compilerVar8 .= XenForo_Template_Helper_Core::link('profile-posts/comments/likes', $comment, array());
$__compilerVar9 = '';
if ($comment['likes'])
{
$__compilerVar9 .= '
	';
$this->addRequiredExternal('css', 'likes_summary');
$__compilerVar9 .= '
	<div class="likesSummary secondaryContent">
		<span class="LikeText">
			' . XenForo_Template_Helper_Core::callHelper('likeshtml', array($comment['likes'],$__compilerVar8,$comment['like_date'],$comment['likeUsers'])) . '
		</span>
	</div>
';
}
$__compilerVar3 .= $__compilerVar9;
unset($__compilerVar8, $__compilerVar9);
$__compilerVar3 .= '
			';
}
$__compilerVar3 .= '
		</div>
	</div>
</li>';
$__output .= $__compilerVar3;
unset($__compilerVar3);
$__output .= '
	';
}
$__output .= '
';
}
$__output .= '

';
if ($lastCommentShown['comment_date'] < $profilePost['last_comment_date'])
{
$__output .= '
	<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $profilePost, array()) . '">' . 'View most recent comments' . '</a></li>
';
}
$__output .= '

</ol>';
