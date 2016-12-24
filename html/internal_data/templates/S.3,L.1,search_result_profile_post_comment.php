<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<li id="profile-post-comment-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '" class="searchResult profilePostComment primaryContent' . (($comment['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($comment['username'], ENT_QUOTES, 'UTF-8') . '">

	<div class="listBlock posterAvatar">
		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($comment,(true),array(
'user' => '$comment',
'size' => 's',
'img' => 'true'
),'')) . '
	</div>

	<div class="listBlock main">
		<div class="titleText">
			<span class="contentType">' . 'Profile Post Comment' . '</span>
			<h3 class="title"><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $comment, array()) . '">' . XenForo_Template_Helper_Core::callHelper('snippet', array(
'0' => $comment['message'],
'1' => '100',
'2' => array(
'term' => $search['search_query'],
'fromStart' => '1',
'emClass' => 'highlight',
'stripPlainTag' => '1'
)
)) . '</a></h3>
		</div>

		<blockquote class="snippet">
			<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $comment, array()) . '">' . XenForo_Template_Helper_Core::callHelper('snippet', array(
'0' => $comment['message'],
'1' => '150',
'2' => array(
'term' => $search['search_query'],
'emClass' => 'highlight',
'stripPlainTag' => '1'
)
)) . '</a>
		</blockquote>	

		<div class="meta">
			' . 'Profile Post Comment by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $comment
)) . '' . ',
			' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($comment['comment_date'],array(
'time' => htmlspecialchars($comment['comment_date'], ENT_QUOTES, 'UTF-8')
))) . '
		</div>
	</div>
</li>';
