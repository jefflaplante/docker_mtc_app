<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__output .= '

';
$this->addRequiredExternal('css', 'message_simple');
$__output .= '

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
$__output .= '
				' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $comment['deleteInfo']
)) . '' . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($comment['delete_date'],array(
'time' => htmlspecialchars($comment['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($comment['delete_reason'])
{
$__output .= ', ' . 'Reason' . ': ' . htmlspecialchars($comment['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__output .= '.
			';
}
$__output .= '
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
