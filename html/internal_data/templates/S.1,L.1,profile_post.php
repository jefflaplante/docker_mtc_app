<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('js', 'js/xenforo/comments_simple.js');
$__output .= '

';
if ($showReceiverName)
{
$__output .= '
	';
$messagePosterHtml = '';
$messagePosterHtml .= '
		<span class="poster">
			' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
			';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$messagePosterHtml .= '
				<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
			';
}
$messagePosterHtml .= '
		</span>
	';
$__output .= '
';
}
else
{
$__output .= '
	';
$messagePosterHtml = '';
$__output .= '
';
}
$__output .= '

';
$__compilerVar1 = '';
$__compilerVar1 .= 'profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar2 = '';
$__compilerVar2 .= '

		<div class="messageMeta">
				<div class="privateControls">
					';
if ($profilePost['canInlineMod'])
{
$__compilerVar2 .= '<input type="checkbox" name="profilePosts[]" value="' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck item" data-target="#profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select this post by ' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '' . '" />';
}
$__compilerVar2 .= '
					<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
					';
$__compilerVar3 = '';
$__compilerVar3 .= '
					';
if ($profilePost['canEdit'])
{
$__compilerVar3 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/edit', $profilePost, array()) . '" class="OverlayTrigger item control edit"><span></span>' . 'Edit' . '</a>
					';
}
$__compilerVar3 .= '
					';
if ($profilePost['canDelete'])
{
$__compilerVar3 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/delete', $profilePost, array()) . '" class="item OverlayTrigger control delete"><span></span>' . 'Delete' . '</a>
					';
}
$__compilerVar3 .= '
					';
if ($profilePost['canCleanSpam'])
{
$__compilerVar3 .= '
						<a href="' . XenForo_Template_Helper_Core::link('spam-cleaner', $profilePost, array()) . '" class="item control deleteSpam OverlayTrigger"><span></span>' . 'Spam' . '</a
					>';
}
$__compilerVar3 .= '
					';
if ($canViewIps AND $profilePost['ip_id'])
{
$__compilerVar3 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/ip', $profilePost, array()) . '" class="item control ip OverlayTrigger"><span></span>' . 'IP' . '</a>
					';
}
$__compilerVar3 .= '
					
					';
if ($profilePost['canWarn'])
{
$__compilerVar3 .= '
						<a href="' . XenForo_Template_Helper_Core::link('members/warn', $profilePost, array(
'content_type' => 'profile_post',
'content_id' => $profilePost['profile_post_id']
)) . '" class="item control warn"><span></span>' . 'Warn' . '</a>
					';
}
else if ($profilePost['warning_id'] && $canViewWarnings)
{
$__compilerVar3 .= '
						<a href="' . XenForo_Template_Helper_Core::link('warnings', $profilePost, array()) . '" class="OverlayTrigger item control viewWarning"><span></span>' . 'View Warning' . '</a>
					';
}
$__compilerVar3 .= '
					';
if ($profilePost['canReport'])
{
$__compilerVar3 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/report', $profilePost, array()) . '" class="OverlayTrigger item control report" data-cacheOverlay="false"><span></span>' . 'Report' . '</a>
					';
}
$__compilerVar3 .= '
					
					';
$__compilerVar2 .= $this->callTemplateHook('profile_post_private_controls', $__compilerVar3, array(
'profilePost' => $profilePost
));
unset($__compilerVar3);
$__compilerVar2 .= '
				</div>
			';
$__compilerVar4 = '';
$__compilerVar4 .= '
					';
$__compilerVar5 = '';
$__compilerVar5 .= '
					';
if ($profilePost['canLike'])
{
$__compilerVar5 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/like', $profilePost, array()) . '" class="LikeLink item control ' . (($profilePost['like_date']) ? ('unlike') : ('like')) . '" data-container="#likes-wp-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span><span class="LikeLabel">' . (($profilePost['like_date']) ? ('Unlike') : ('Like')) . '</span></a>
					';
}
$__compilerVar5 .= '
					';
if ($profilePost['canComment'])
{
$__compilerVar5 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comment', $profilePost, array()) . '" class="CommentPoster item control postComment" data-commentArea="#commentSubmit-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span>' . 'Comment' . '</a>
					';
}
$__compilerVar5 .= '
					';
$__compilerVar4 .= $this->callTemplateHook('profile_post_public_controls', $__compilerVar5, array(
'profilePost' => $profilePost
));
unset($__compilerVar5);
$__compilerVar4 .= '
				';
if (trim($__compilerVar4) !== '')
{
$__compilerVar2 .= '
				<div class="publicControls">
				' . $__compilerVar4 . '
				</div>
			';
}
unset($__compilerVar4);
$__compilerVar2 .= '
		</div>

		<ol class="messageResponse">

			<li id="likes-wp-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '">
				';
if ($profilePost['likes'])
{
$__compilerVar2 .= '
					';
$__compilerVar6 = '';
$__compilerVar6 .= XenForo_Template_Helper_Core::link('profile-posts/likes', $profilePost, array());
$__compilerVar7 = '';
if ($profilePost['likes'])
{
$__compilerVar7 .= '
	';
$this->addRequiredExternal('css', 'likes_summary');
$__compilerVar7 .= '
	<div class="likesSummary secondaryContent">
		<span class="LikeText">
			' . XenForo_Template_Helper_Core::callHelper('likeshtml', array($profilePost['likes'],$__compilerVar6,$profilePost['like_date'],$profilePost['likeUsers'])) . '
		</span>
	</div>
';
}
$__compilerVar2 .= $__compilerVar7;
unset($__compilerVar6, $__compilerVar7);
$__compilerVar2 .= '
				';
}
$__compilerVar2 .= '
			</li>

			';
if ($profilePost['comments'])
{
$__compilerVar2 .= '

				';
if ($profilePost['comment_count'] > 3)
{
$__compilerVar2 .= '
					<li class="commentMore secondaryContent">
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $profilePost, array()) . '"
							class="CommentLoader"
							data-loadParams="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => array(
'before' => $profilePost['first_shown_comment_date']
)
)), ENT_QUOTES, 'UTF-8', true) . '">' . 'View previous comments' . '...</a>
					</li>
				';
}
$__compilerVar2 .= '

				';
foreach ($profilePost['comments'] AS $comment)
{
$__compilerVar2 .= '
					';
if ($comment['isDeleted'])
{
$__compilerVar2 .= '
						';
$__compilerVar8 = '';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar8 .= '

';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar8 .= '

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
$__compilerVar8 .= '
				' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $comment['deleteInfo']
)) . '' . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($comment['delete_date'],array(
'time' => htmlspecialchars($comment['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($comment['delete_reason'])
{
$__compilerVar8 .= ', ' . 'Reason' . ': ' . htmlspecialchars($comment['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar8 .= '.
			';
}
$__compilerVar8 .= '
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
$__compilerVar2 .= $__compilerVar8;
unset($__compilerVar8);
$__compilerVar2 .= '
					';
}
else
{
$__compilerVar2 .= '
						';
$__compilerVar9 = '';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar9 .= '

<li id="profile-post-comment-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '" class="comment secondaryContent ' . (($comment['isIgnored']) ? (' ignored') : ('')) . '">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($comment,(true),array(
'user' => '$comment',
'size' => 's',
'img' => 'true'
),'')) . '

	<div class="commentInfo">
		';
$__compilerVar10 = '';
$__compilerVar10 .= '
					';
if ($comment['warning_message'])
{
$__compilerVar10 .= '
						<li class="warningNotice"><span class="icon Tooltip" title="' . 'Warning' . '" data-tipclass="iconTip flipped"></span>' . htmlspecialchars($comment['warning_message'], ENT_QUOTES, 'UTF-8') . '</li>
					';
}
else if ($comment['isDeleted'])
{
$__compilerVar10 .= '
						<li class="deletedNotice"><span class="icon Tooltip" title="' . 'Deleted' . '" data-tipclass="iconTip flipped"></span>' . 'This message has been removed from public view.' . '</li>
					';
}
else if ($comment['isModerated'])
{
$__compilerVar10 .= '
						<li class="moderatedNotice"><span class="icon Tooltip" title="' . 'Awaiting moderation' . '" data-tipclass="iconTip flipped"></span>' . 'This message is awaiting moderator approval, and is invisible to normal visitors.' . '</li>
					';
}
$__compilerVar10 .= '
				';
if (trim($__compilerVar10) !== '')
{
$__compilerVar9 .= '
			<ul class="messageNotices">
				' . $__compilerVar10 . '
			</ul>
		';
}
unset($__compilerVar10);
$__compilerVar9 .= '
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
$__compilerVar9 .= '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/edit', $comment, array()) . '" class="OverlayTrigger item control edit"><span></span>' . 'Edit' . '</a>';
}
$__compilerVar9 .= '
			';
if ($comment['canDelete'])
{
$__compilerVar9 .= '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/delete', $comment, array()) . '" class="OverlayTrigger item control delete"><span></span>' . 'Delete' . '</a>';
}
$__compilerVar9 .= '
			';
if ($comment['canReport'])
{
$__compilerVar9 .= '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/report', $comment, array()) . '" class="OverlayTrigger item control report"><span></span>' . 'Report' . '</a>';
}
$__compilerVar9 .= '
			';
$__compilerVar11 = '';
$__compilerVar11 .= '
						';
$__compilerVar12 = '';
$__compilerVar12 .= '
								';
if ($comment['canUndelete'])
{
$__compilerVar12 .= '<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/undelete', $comment, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger item control undelete"><span></span>' . 'Undelete' . '</a></li>';
}
$__compilerVar12 .= '
								';
if ($comment['canCleanSpam'])
{
$__compilerVar12 .= '<li><a href="' . XenForo_Template_Helper_Core::link('spam-cleaner', $comment, array()) . '" class="item control deleteSpam OverlayTrigger"><span></span>' . 'Spam' . '</a></li>';
}
$__compilerVar12 .= '
								';
if ($comment['canViewIps'])
{
$__compilerVar12 .= '<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/ip', $comment, array()) . '" class="OverlayTrigger item control ip"><span></span>' . 'IP' . '</a></li>';
}
$__compilerVar12 .= '
								';
if ($comment['canWarn'])
{
$__compilerVar12 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('members/warn', $comment, array(
'content_type' => 'profile_post_comment',
'content_id' => $comment['profile_post_comment_id']
)) . '" class="item control warn"><span></span>' . 'Warn' . '</a></li>
								';
}
else if ($comment['warning_id'] && $canViewWarnings)
{
$__compilerVar12 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('warnings', $comment, array()) . '" class="OverlayTrigger item control viewWarning"><span></span>' . 'View Warning' . '</a></li>
								';
}
$__compilerVar12 .= '
								';
if ($comment['canApproveUnapprove'] AND $comment['message_state'] != ('deleted'))
{
$__compilerVar12 .= '
									';
if ($comment['message_state'] == ('moderated'))
{
$__compilerVar12 .= '
										<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/approve', $comment, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger item control approve"><span></span>' . 'Approve' . '</a></li>
									';
}
else
{
$__compilerVar12 .= '
										<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/unapprove', $comment, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger item control unapprove"><span></span>' . 'Unapprove' . '</a></li>
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
						<div class="primaryContent menuHeader"><h3>' . 'Controls' . '</h3></div>
						<ul class="secondaryContent blockLinksList">
							' . $__compilerVar12 . '
						</ul>
						';
}
unset($__compilerVar12);
$__compilerVar11 .= '
					';
if (trim($__compilerVar11) !== '')
{
$__compilerVar9 .= '
				<span class="Popup item control menu">
					<a rel="Menu">' . 'Controls' . '</a>
					<div class="Menu' . (($inOverlay) ? (' inOverlay') : ('')) . '">
					' . $__compilerVar11 . '
					</div>
				</span>
			';
}
unset($__compilerVar11);
$__compilerVar9 .= '
			
			';
$__compilerVar13 = '';
$__compilerVar13 .= '
					';
if ($comment['canLike'])
{
$__compilerVar13 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/like', $comment, array()) . '" class="LikeLink item control ' . (($comment['like_date']) ? ('unlike') : ('like')) . '" data-container="#likes-pc-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '"><span></span><span class="LikeLabel">' . (($comment['like_date']) ? ('Unlike') : ('Like')) . '</span></a>
					';
}
$__compilerVar13 .= '
				';
if (trim($__compilerVar13) !== '')
{
$__compilerVar9 .= '
				<div class="publicControls">
				' . $__compilerVar13 . '
				</div>
			';
}
unset($__compilerVar13);
$__compilerVar9 .= '
		</div>
		
		<div id="likes-pc-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '">
			';
if ($comment['likes'])
{
$__compilerVar9 .= '
				';
$__compilerVar14 = '';
$__compilerVar14 .= XenForo_Template_Helper_Core::link('profile-posts/comments/likes', $comment, array());
$__compilerVar15 = '';
if ($comment['likes'])
{
$__compilerVar15 .= '
	';
$this->addRequiredExternal('css', 'likes_summary');
$__compilerVar15 .= '
	<div class="likesSummary secondaryContent">
		<span class="LikeText">
			' . XenForo_Template_Helper_Core::callHelper('likeshtml', array($comment['likes'],$__compilerVar14,$comment['like_date'],$comment['likeUsers'])) . '
		</span>
	</div>
';
}
$__compilerVar9 .= $__compilerVar15;
unset($__compilerVar14, $__compilerVar15);
$__compilerVar9 .= '
			';
}
$__compilerVar9 .= '
		</div>
	</div>
</li>';
$__compilerVar2 .= $__compilerVar9;
unset($__compilerVar9);
$__compilerVar2 .= '
					';
}
$__compilerVar2 .= '
				';
}
$__compilerVar2 .= '

			';
}
$__compilerVar2 .= '

			';
if ($profilePost['canComment'])
{
$__compilerVar2 .= '
				<li id="commentSubmit-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="comment secondaryContent" style="display:none">
					' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,(true),array(
'user' => '$visitor',
'size' => 's',
'img' => 'true'
),'')) . '
					<div class="elements">
						<textarea name="message" rows="2" class="textCtrl UserTagger Elastic" data-acurl="' . XenForo_Template_Helper_Core::link('members/bdtagme-find', false, array()) . '"></textarea>
						<div class="submit"><input type="submit" class="button primary" value="' . 'Post Comment' . '" /></div>
					</div>
					
					';
if ($inOverlay)
{
$__compilerVar2 .= '
						<input type="hidden" name="overlay" value="1" />
					';
}
$__compilerVar2 .= '
				</li>
			';
}
$__compilerVar2 .= '

		</ol>

	';
$__compilerVar16 = '';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar16 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar16 .= '

<li id="' . htmlspecialchars($__compilerVar1, ENT_QUOTES, 'UTF-8') . '" class="primaryContent messageSimple ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$message',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		';
$__compilerVar17 = '';
$__compilerVar17 .= '
					';
$__compilerVar18 = '';
$__compilerVar18 .= '
						';
if ($profilePost['warning_message'])
{
$__compilerVar18 .= '
							<li class="warningNotice"><span class="icon Tooltip" title="' . 'Warning' . '" data-tipclass="iconTip flipped"></span>' . htmlspecialchars($profilePost['warning_message'], ENT_QUOTES, 'UTF-8') . '</li>
						';
}
$__compilerVar18 .= '
						';
if ($profilePost['isDeleted'])
{
$__compilerVar18 .= '
							<li class="deletedNotice"><span class="icon Tooltip" title="' . 'Deleted' . '" data-tipclass="iconTip flipped"></span>' . 'This message has been removed from public view.' . '</li>
						';
}
else if ($profilePost['isModerated'])
{
$__compilerVar18 .= '
							<li class="moderatedNotice"><span class="icon Tooltip" title="' . 'Awaiting moderation' . '" data-tipclass="iconTip flipped"></span>' . 'This message is awaiting moderator approval, and is invisible to normal visitors.' . '</li>
						';
}
$__compilerVar18 .= '
						';
if ($profilePost['isIgnored'])
{
$__compilerVar18 .= '
							<li>' . 'You are ignoring content by this member.' . ' <a href="javascript:" class="JsOnly DisplayIgnoredContent">' . 'Show Ignored Content' . '</a></li>
						';
}
$__compilerVar18 .= '
					';
$__compilerVar17 .= $this->callTemplateHook('message_simple_notices', $__compilerVar18, array(
'message' => $profilePost
));
unset($__compilerVar18);
$__compilerVar17 .= '
				';
if (trim($__compilerVar17) !== '')
{
$__compilerVar16 .= '
			<ul class="messageNotices">
				' . $__compilerVar17 . '
			</ul>
		';
}
unset($__compilerVar17);
$__compilerVar16 .= '

		<div class="messageContent">
			';
if ($messagePosterHtml)
{
$__compilerVar16 .= '
				' . $messagePosterHtml . '
			';
}
else
{
$__compilerVar16 .= '
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array(
'class' => 'poster'
))) . '
			';
}
$__compilerVar16 .= '
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('parseSmilies', array(
'0' => XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'message_simple',
'1' => $profilePost['message']
))
)) . '</blockquote></article>
		</div>

		' . $__compilerVar2 . '
	</div>
</li>';
$__output .= $__compilerVar16;
unset($__compilerVar1, $__compilerVar2, $__compilerVar16);
$__output .= '
' . '
';
