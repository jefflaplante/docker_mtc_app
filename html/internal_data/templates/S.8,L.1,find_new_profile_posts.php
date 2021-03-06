<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'New Profile Posts';
$__output .= '

';
$__extraData['head']['profilePosterCss'] = '';
$__extraData['head']['profilePosterCss'] .= '
<style>
	.profilePoster
	{
		max-width: 100%;
		width: 250px;
	}

	.profilePoster textarea
	{
		height: 36px;
		width: 100%;
		box-sizing: border-box;
		resize: vertical;
	}
	
	.profilePoster .submitUnit
	{
		margin-top: 5px;
		text-align: ' . (($pageIsRtl) ? ('left') : ('right')) . ';
	}
	
	.profilePoster .formValidationInlineError
	{
		display: none !important;
	}
</style>
';
$__output .= '
';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__output .= '

<div class="pageNavLinkGroup">
	<div class="linkGroup SelectionCountContainer">
		';
if ($canUpdateStatus)
{
$__output .= '
			<div class="Popup">
				<a rel="Menu">' . 'Update Your Status' . '</a>
				<div class="Menu">
					<div class="primaryContent menuHeader"><h3>' . 'Update Your Status' . '</h3></div>
					<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post"
						class="profilePoster AutoValidator secondaryContent" id="ProfilePoster"
						data-optInOut="optIn"
					>
						<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" rows="2" data-statusEditorCounter="#statusEditorCounter"></textarea>

						<div class="submitUnit">
							<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
							<input type="submit" class="button primary MenuCloser" value="' . 'Post' . '" accesskey="s" />
						</div>
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
					</form>
				</div>
			</div>
		';
}
$__output .= '
	</div>
	' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($perPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($total, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'find-new/profile-posts', $search, array(), false, array())) . '
</div>

<form action="' . XenForo_Template_Helper_Core::link('inline-mod/profile-post/switch', false, array()) . '" method="post"
class="InlineModForm section"
data-cookieName="profilePosts"
data-controls="#InlineModControls"
data-imodOptions="#ModerationSelect option">

	<ol class="messageSimpleList topBorder" id="ProfilePostList">
		';
foreach ($profilePosts AS $profilePost)
{
$__output .= '
			';
if ($profilePost['isDeleted'])
{
$__output .= '
				';
$__compilerVar1 = '';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar1 .= '

';
$__compilerVar2 = '';
$__compilerVar2 .= 'profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar3 = '';
$__compilerVar3 .= '
		';
if ($profilePost['canInlineMod'])
{
$__compilerVar3 .= '<input type="checkbox" name="profilePosts[]" value="' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck item" data-target="#profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select this post by ' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '' . '" />';
}
$__compilerVar3 .= '
		' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date',
'class' => 'muted item'
))) . '
		<a href="' . XenForo_Template_Helper_Core::link('profile-posts/show', $profilePost, array()) . '" class="MessageLoader control item show" data-messageSelector="#profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span>' . 'Show' . '</a>
	';
$__compilerVar4 = '';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar4 .= '

<li id="' . htmlspecialchars($__compilerVar2, ENT_QUOTES, 'UTF-8') . '" class="messageSimple deleted placeholder ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '">

	<div class="placeholderContent secondaryContent">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$message',
'size' => 's',
'img' => 'true'
),'')) . '
				
		<p>
			' . 'This message by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $profilePost
)) . ' has been removed from public view.' . '
			';
if ($profilePost['delete_username'])
{
$__compilerVar4 .= '
				' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $profilePost['deleteInfo']
)) . '' . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['delete_date'],array(
'time' => htmlspecialchars($profilePost['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($profilePost['delete_reason'])
{
$__compilerVar4 .= ', ' . 'Reason' . ': ' . htmlspecialchars($profilePost['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar4 .= '.
			';
}
$__compilerVar4 .= '
		</p>
		<div class="privateControls">' . $__compilerVar3 . '</div>
		
	</div>

</li>';
$__compilerVar1 .= $__compilerVar4;
unset($__compilerVar2, $__compilerVar3, $__compilerVar4);
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
			';
}
else
{
$__output .= '
				';
$__compilerVar5 = '1';
$__compilerVar6 = '';
$this->addRequiredExternal('js', 'js/xenforo/comments_simple.js');
$__compilerVar6 .= '

';
if ($__compilerVar5)
{
$__compilerVar6 .= '
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
$__compilerVar6 .= '
';
}
else
{
$__compilerVar6 .= '
	';
$messagePosterHtml = '';
$__compilerVar6 .= '
';
}
$__compilerVar6 .= '

';
$__compilerVar7 = '';
$__compilerVar7 .= 'profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar8 = '';
$__compilerVar8 .= '

		<div class="messageMeta">
				<div class="privateControls">
					';
if ($profilePost['canInlineMod'])
{
$__compilerVar8 .= '<input type="checkbox" name="profilePosts[]" value="' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck item" data-target="#profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select this post by ' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '' . '" />';
}
$__compilerVar8 .= '
					<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
					';
$__compilerVar9 = '';
$__compilerVar9 .= '
					';
if ($profilePost['canEdit'])
{
$__compilerVar9 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/edit', $profilePost, array()) . '" class="OverlayTrigger item control edit"><span></span>' . 'Edit' . '</a>
					';
}
$__compilerVar9 .= '
					';
if ($profilePost['canDelete'])
{
$__compilerVar9 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/delete', $profilePost, array()) . '" class="item OverlayTrigger control delete"><span></span>' . 'Delete' . '</a>
					';
}
$__compilerVar9 .= '
					';
if ($profilePost['canCleanSpam'])
{
$__compilerVar9 .= '
						<a href="' . XenForo_Template_Helper_Core::link('spam-cleaner', $profilePost, array()) . '" class="item control deleteSpam OverlayTrigger"><span></span>' . 'Spam' . '</a
					>';
}
$__compilerVar9 .= '
					';
if ($canViewIps AND $profilePost['ip_id'])
{
$__compilerVar9 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/ip', $profilePost, array()) . '" class="item control ip OverlayTrigger"><span></span>' . 'IP' . '</a>
					';
}
$__compilerVar9 .= '
					
					';
if ($profilePost['canWarn'])
{
$__compilerVar9 .= '
						<a href="' . XenForo_Template_Helper_Core::link('members/warn', $profilePost, array(
'content_type' => 'profile_post',
'content_id' => $profilePost['profile_post_id']
)) . '" class="item control warn"><span></span>' . 'Warn' . '</a>
					';
}
else if ($profilePost['warning_id'] && $canViewWarnings)
{
$__compilerVar9 .= '
						<a href="' . XenForo_Template_Helper_Core::link('warnings', $profilePost, array()) . '" class="OverlayTrigger item control viewWarning"><span></span>' . 'View Warning' . '</a>
					';
}
$__compilerVar9 .= '
					';
if ($profilePost['canReport'])
{
$__compilerVar9 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/report', $profilePost, array()) . '" class="OverlayTrigger item control report" data-cacheOverlay="false"><span></span>' . 'Report' . '</a>
					';
}
$__compilerVar9 .= '
					
					';
$__compilerVar8 .= $this->callTemplateHook('profile_post_private_controls', $__compilerVar9, array(
'profilePost' => $profilePost
));
unset($__compilerVar9);
$__compilerVar8 .= '
				</div>
			';
$__compilerVar10 = '';
$__compilerVar10 .= '
					';
$__compilerVar11 = '';
$__compilerVar11 .= '
					';
if ($profilePost['canLike'])
{
$__compilerVar11 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/like', $profilePost, array()) . '" class="LikeLink item control ' . (($profilePost['like_date']) ? ('unlike') : ('like')) . '" data-container="#likes-wp-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span><span class="LikeLabel">' . (($profilePost['like_date']) ? ('Unlike') : ('Like')) . '</span></a>
					';
}
$__compilerVar11 .= '
					';
if ($profilePost['canComment'])
{
$__compilerVar11 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comment', $profilePost, array()) . '" class="CommentPoster item control postComment" data-commentArea="#commentSubmit-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span>' . 'Comment' . '</a>
					';
}
$__compilerVar11 .= '
					';
$__compilerVar10 .= $this->callTemplateHook('profile_post_public_controls', $__compilerVar11, array(
'profilePost' => $profilePost
));
unset($__compilerVar11);
$__compilerVar10 .= '
				';
if (trim($__compilerVar10) !== '')
{
$__compilerVar8 .= '
				<div class="publicControls">
				' . $__compilerVar10 . '
				</div>
			';
}
unset($__compilerVar10);
$__compilerVar8 .= '
		</div>

		<ol class="messageResponse">

			<li id="likes-wp-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '">
				';
if ($profilePost['likes'])
{
$__compilerVar8 .= '
					';
$__compilerVar12 = '';
$__compilerVar12 .= XenForo_Template_Helper_Core::link('profile-posts/likes', $profilePost, array());
$__compilerVar13 = '';
if ($profilePost['likes'])
{
$__compilerVar13 .= '
	';
$this->addRequiredExternal('css', 'likes_summary');
$__compilerVar13 .= '
	<div class="likesSummary secondaryContent">
		<span class="LikeText">
			' . XenForo_Template_Helper_Core::callHelper('likeshtml', array($profilePost['likes'],$__compilerVar12,$profilePost['like_date'],$profilePost['likeUsers'])) . '
		</span>
	</div>
';
}
$__compilerVar8 .= $__compilerVar13;
unset($__compilerVar12, $__compilerVar13);
$__compilerVar8 .= '
				';
}
$__compilerVar8 .= '
			</li>

			';
if ($profilePost['comments'])
{
$__compilerVar8 .= '

				';
if ($profilePost['comment_count'] > 3)
{
$__compilerVar8 .= '
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
$__compilerVar8 .= '

				';
foreach ($profilePost['comments'] AS $comment)
{
$__compilerVar8 .= '
					';
if ($comment['isDeleted'])
{
$__compilerVar8 .= '
						';
$__compilerVar14 = '';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar14 .= '

';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar14 .= '

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
$__compilerVar14 .= '
				' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $comment['deleteInfo']
)) . '' . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($comment['delete_date'],array(
'time' => htmlspecialchars($comment['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($comment['delete_reason'])
{
$__compilerVar14 .= ', ' . 'Reason' . ': ' . htmlspecialchars($comment['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar14 .= '.
			';
}
$__compilerVar14 .= '
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
$__compilerVar8 .= $__compilerVar14;
unset($__compilerVar14);
$__compilerVar8 .= '
					';
}
else
{
$__compilerVar8 .= '
						';
$__compilerVar15 = '';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar15 .= '

<li id="profile-post-comment-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '" class="comment secondaryContent ' . (($comment['isIgnored']) ? (' ignored') : ('')) . '">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($comment,(true),array(
'user' => '$comment',
'size' => 's',
'img' => 'true'
),'')) . '

	<div class="commentInfo">
		';
$__compilerVar16 = '';
$__compilerVar16 .= '
					';
if ($comment['warning_message'])
{
$__compilerVar16 .= '
						<li class="warningNotice"><span class="icon Tooltip" title="' . 'Warning' . '" data-tipclass="iconTip flipped"></span>' . htmlspecialchars($comment['warning_message'], ENT_QUOTES, 'UTF-8') . '</li>
					';
}
else if ($comment['isDeleted'])
{
$__compilerVar16 .= '
						<li class="deletedNotice"><span class="icon Tooltip" title="' . 'Deleted' . '" data-tipclass="iconTip flipped"></span>' . 'This message has been removed from public view.' . '</li>
					';
}
else if ($comment['isModerated'])
{
$__compilerVar16 .= '
						<li class="moderatedNotice"><span class="icon Tooltip" title="' . 'Awaiting moderation' . '" data-tipclass="iconTip flipped"></span>' . 'This message is awaiting moderator approval, and is invisible to normal visitors.' . '</li>
					';
}
$__compilerVar16 .= '
				';
if (trim($__compilerVar16) !== '')
{
$__compilerVar15 .= '
			<ul class="messageNotices">
				' . $__compilerVar16 . '
			</ul>
		';
}
unset($__compilerVar16);
$__compilerVar15 .= '
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
$__compilerVar15 .= '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/edit', $comment, array()) . '" class="OverlayTrigger item control edit"><span></span>' . 'Edit' . '</a>';
}
$__compilerVar15 .= '
			';
if ($comment['canDelete'])
{
$__compilerVar15 .= '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/delete', $comment, array()) . '" class="OverlayTrigger item control delete"><span></span>' . 'Delete' . '</a>';
}
$__compilerVar15 .= '
			';
if ($comment['canReport'])
{
$__compilerVar15 .= '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/report', $comment, array()) . '" class="OverlayTrigger item control report"><span></span>' . 'Report' . '</a>';
}
$__compilerVar15 .= '
			';
$__compilerVar17 = '';
$__compilerVar17 .= '
						';
$__compilerVar18 = '';
$__compilerVar18 .= '
								';
if ($comment['canUndelete'])
{
$__compilerVar18 .= '<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/undelete', $comment, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger item control undelete"><span></span>' . 'Undelete' . '</a></li>';
}
$__compilerVar18 .= '
								';
if ($comment['canCleanSpam'])
{
$__compilerVar18 .= '<li><a href="' . XenForo_Template_Helper_Core::link('spam-cleaner', $comment, array()) . '" class="item control deleteSpam OverlayTrigger"><span></span>' . 'Spam' . '</a></li>';
}
$__compilerVar18 .= '
								';
if ($comment['canViewIps'])
{
$__compilerVar18 .= '<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/ip', $comment, array()) . '" class="OverlayTrigger item control ip"><span></span>' . 'IP' . '</a></li>';
}
$__compilerVar18 .= '
								';
if ($comment['canWarn'])
{
$__compilerVar18 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('members/warn', $comment, array(
'content_type' => 'profile_post_comment',
'content_id' => $comment['profile_post_comment_id']
)) . '" class="item control warn"><span></span>' . 'Warn' . '</a></li>
								';
}
else if ($comment['warning_id'] && $canViewWarnings)
{
$__compilerVar18 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('warnings', $comment, array()) . '" class="OverlayTrigger item control viewWarning"><span></span>' . 'View Warning' . '</a></li>
								';
}
$__compilerVar18 .= '
								';
if ($comment['canApproveUnapprove'] AND $comment['message_state'] != ('deleted'))
{
$__compilerVar18 .= '
									';
if ($comment['message_state'] == ('moderated'))
{
$__compilerVar18 .= '
										<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/approve', $comment, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger item control approve"><span></span>' . 'Approve' . '</a></li>
									';
}
else
{
$__compilerVar18 .= '
										<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/unapprove', $comment, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger item control unapprove"><span></span>' . 'Unapprove' . '</a></li>
									';
}
$__compilerVar18 .= '
								';
}
$__compilerVar18 .= '
							';
if (trim($__compilerVar18) !== '')
{
$__compilerVar17 .= '
						<div class="primaryContent menuHeader"><h3>' . 'Controls' . '</h3></div>
						<ul class="secondaryContent blockLinksList">
							' . $__compilerVar18 . '
						</ul>
						';
}
unset($__compilerVar18);
$__compilerVar17 .= '
					';
if (trim($__compilerVar17) !== '')
{
$__compilerVar15 .= '
				<span class="Popup item control menu">
					<a rel="Menu">' . 'Controls' . '</a>
					<div class="Menu' . (($inOverlay) ? (' inOverlay') : ('')) . '">
					' . $__compilerVar17 . '
					</div>
				</span>
			';
}
unset($__compilerVar17);
$__compilerVar15 .= '
			
			';
$__compilerVar19 = '';
$__compilerVar19 .= '
					';
if ($comment['canLike'])
{
$__compilerVar19 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/like', $comment, array()) . '" class="LikeLink item control ' . (($comment['like_date']) ? ('unlike') : ('like')) . '" data-container="#likes-pc-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '"><span></span><span class="LikeLabel">' . (($comment['like_date']) ? ('Unlike') : ('Like')) . '</span></a>
					';
}
$__compilerVar19 .= '
				';
if (trim($__compilerVar19) !== '')
{
$__compilerVar15 .= '
				<div class="publicControls">
				' . $__compilerVar19 . '
				</div>
			';
}
unset($__compilerVar19);
$__compilerVar15 .= '
		</div>
		
		<div id="likes-pc-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '">
			';
if ($comment['likes'])
{
$__compilerVar15 .= '
				';
$__compilerVar20 = '';
$__compilerVar20 .= XenForo_Template_Helper_Core::link('profile-posts/comments/likes', $comment, array());
$__compilerVar21 = '';
if ($comment['likes'])
{
$__compilerVar21 .= '
	';
$this->addRequiredExternal('css', 'likes_summary');
$__compilerVar21 .= '
	<div class="likesSummary secondaryContent">
		<span class="LikeText">
			' . XenForo_Template_Helper_Core::callHelper('likeshtml', array($comment['likes'],$__compilerVar20,$comment['like_date'],$comment['likeUsers'])) . '
		</span>
	</div>
';
}
$__compilerVar15 .= $__compilerVar21;
unset($__compilerVar20, $__compilerVar21);
$__compilerVar15 .= '
			';
}
$__compilerVar15 .= '
		</div>
	</div>
</li>';
$__compilerVar8 .= $__compilerVar15;
unset($__compilerVar15);
$__compilerVar8 .= '
					';
}
$__compilerVar8 .= '
				';
}
$__compilerVar8 .= '

			';
}
$__compilerVar8 .= '

			';
if ($profilePost['canComment'])
{
$__compilerVar8 .= '
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
$__compilerVar8 .= '
						<input type="hidden" name="overlay" value="1" />
					';
}
$__compilerVar8 .= '
				</li>
			';
}
$__compilerVar8 .= '

		</ol>

	';
$__compilerVar22 = '';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar22 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar22 .= '

<li id="' . htmlspecialchars($__compilerVar7, ENT_QUOTES, 'UTF-8') . '" class="primaryContent messageSimple ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$message',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		';
$__compilerVar23 = '';
$__compilerVar23 .= '
					';
$__compilerVar24 = '';
$__compilerVar24 .= '
						';
if ($profilePost['warning_message'])
{
$__compilerVar24 .= '
							<li class="warningNotice"><span class="icon Tooltip" title="' . 'Warning' . '" data-tipclass="iconTip flipped"></span>' . htmlspecialchars($profilePost['warning_message'], ENT_QUOTES, 'UTF-8') . '</li>
						';
}
$__compilerVar24 .= '
						';
if ($profilePost['isDeleted'])
{
$__compilerVar24 .= '
							<li class="deletedNotice"><span class="icon Tooltip" title="' . 'Deleted' . '" data-tipclass="iconTip flipped"></span>' . 'This message has been removed from public view.' . '</li>
						';
}
else if ($profilePost['isModerated'])
{
$__compilerVar24 .= '
							<li class="moderatedNotice"><span class="icon Tooltip" title="' . 'Awaiting moderation' . '" data-tipclass="iconTip flipped"></span>' . 'This message is awaiting moderator approval, and is invisible to normal visitors.' . '</li>
						';
}
$__compilerVar24 .= '
						';
if ($profilePost['isIgnored'])
{
$__compilerVar24 .= '
							<li>' . 'You are ignoring content by this member.' . ' <a href="javascript:" class="JsOnly DisplayIgnoredContent">' . 'Show Ignored Content' . '</a></li>
						';
}
$__compilerVar24 .= '
					';
$__compilerVar23 .= $this->callTemplateHook('message_simple_notices', $__compilerVar24, array(
'message' => $profilePost
));
unset($__compilerVar24);
$__compilerVar23 .= '
				';
if (trim($__compilerVar23) !== '')
{
$__compilerVar22 .= '
			<ul class="messageNotices">
				' . $__compilerVar23 . '
			</ul>
		';
}
unset($__compilerVar23);
$__compilerVar22 .= '

		<div class="messageContent">
			';
if ($messagePosterHtml)
{
$__compilerVar22 .= '
				' . $messagePosterHtml . '
			';
}
else
{
$__compilerVar22 .= '
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array(
'class' => 'poster'
))) . '
			';
}
$__compilerVar22 .= '
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('parseSmilies', array(
'0' => XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'message_simple',
'1' => $profilePost['message']
))
)) . '</blockquote></article>
		</div>

		' . $__compilerVar8 . '
	</div>
</li>';
$__compilerVar6 .= $__compilerVar22;
unset($__compilerVar7, $__compilerVar8, $__compilerVar22);
$__compilerVar6 .= '
' . '
';
$__output .= $__compilerVar6;
unset($__compilerVar5, $__compilerVar6);
$__output .= '
			';
}
$__output .= '
		';
}
$__output .= '
	</ol>
	
	';
if ($inlineModOptions)
{
$__output .= '
		<div class="sectionFooter InlineMod Hide">
			<label for="ModerationSelect">' . 'Perform action with selected posts' . '...</label>
	
			';
$__compilerVar25 = '';
$__compilerVar26 = '';
$__compilerVar26 .= 'Post Moderation';
$__compilerVar27 = '';
$__compilerVar27 .= '
		';
if ($inlineModOptions['delete'])
{
$__compilerVar27 .= '<option value="delete">' . 'Delete Posts' . '</option>';
}
$__compilerVar27 .= '
		';
if ($inlineModOptions['undelete'])
{
$__compilerVar27 .= '<option value="undelete">' . 'Undelete Posts' . '</option>';
}
$__compilerVar27 .= '
		';
if ($inlineModOptions['approve'])
{
$__compilerVar27 .= '<option value="approve">' . 'Approve Posts' . '</option>';
}
$__compilerVar27 .= '
		';
if ($inlineModOptions['unapprove'])
{
$__compilerVar27 .= '<option value="unapprove">' . 'Unapprove Posts' . '</option>';
}
$__compilerVar27 .= '
		<option value="deselect">' . 'Deselect Posts' . '</option>
	';
$__compilerVar28 = '';
$__compilerVar28 .= 'Select / deselect all posts on this page';
$__compilerVar29 = '';
$__compilerVar29 .= 'Selected Posts';
$__compilerVar30 = '';
$this->addRequiredExternal('css', 'inline_mod');
$__compilerVar30 .= '
';
$this->addRequiredExternal('js', 'js/xenforo/inline_mod.js');
$__compilerVar30 .= '

<span id="InlineModControls">
	<span class="selectionControl secondaryContent">
		<label for="ModerationCheck">
			' . 'Select All' . ' <input type="checkbox" id="ModerationCheck" title="' . htmlspecialchars($__compilerVar28, ENT_QUOTES, 'UTF-8') . '" />
		</label>

		<input type="button" class="button ClickNext" value="&darr;" title="' . 'Move down' . '" />
		<input type="button" class="button ClickPrev" value="&uarr;" title="' . 'Move up' . '" />
		<a class="SelectionCount">' . htmlspecialchars($__compilerVar29, ENT_QUOTES, 'UTF-8') . ': <em class="InlineModCheckedTotal">0</em></a>
	</span>

	<span class="actionControl sectionFooter">
		<span class="commonActions">
			';
if ($inlineModOptions['delete'])
{
$__compilerVar30 .= '<input type="submit" class="button" value="' . 'Delete' . '..." name="delete" />';
}
$__compilerVar30 .= '
			';
if ($inlineModOptions['approve'])
{
$__compilerVar30 .= '<input type="submit" class="button" value="' . 'Approve' . '" name="approve" />';
}
$__compilerVar30 .= '
		</span>

		<span class="otherActions">
			<select name="a" id="ModerationSelect" class="textCtrl">
				<option value="">' . 'Other Action' . '...</option>
				<optgroup label="' . 'Moderation Actions' . '">
					' . $__compilerVar27 . '
				</optgroup>
				<option value="closeOverlay">' . 'Close This Overlay' . '</option>
			</select>

			<input type="submit" class="button primary" value="' . 'Go' . '" />
			<input type="reset" class="button OverlayCloser overylayOnly" value="X" title="' . 'Cancel and close these controls' . '" />
		</span>
	</span>
</span>';
$__compilerVar25 .= $__compilerVar30;
unset($__compilerVar26, $__compilerVar27, $__compilerVar28, $__compilerVar29, $__compilerVar30);
$__output .= $__compilerVar25;
unset($__compilerVar25);
$__output .= '
		</div>
	';
}
$__output .= '
	
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>

<div class="pageNavLinkGroup">
	<div class="linkGroup"' . ((!$ignoredNames) ? (' style="display: none"') : ('')) . '><a href="javascript:" class="muted JsOnly DisplayIgnoredContent Tooltip" title="' . 'Show hidden content by ' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $ignoredNames,
'1' => ', '
)) . '' . '">' . 'Show Ignored Content' . '</a></div>

	' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($perPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($total, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'find-new/profile-posts', $search, array(), false, array())) . '
</div>';
