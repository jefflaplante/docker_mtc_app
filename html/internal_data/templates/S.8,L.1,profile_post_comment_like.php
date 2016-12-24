<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Profile Post Comment by ' . htmlspecialchars($comment['username'], ENT_QUOTES, 'UTF-8') . '' . ' - ' . (($like) ? ('Unlike Profile Post Comment') : ('Like Profile Post Comment'));
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:members', $user, array()), 'value' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'));
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('profile-posts/comments/like', $comment, array()) . '" method="post" class="xenForm">

	<dl class="ctrlUnit fullWidth">
		<dt></dt>
		<dd>
			';
if ($like)
{
$__output .= '
				' . 'Are you sure you want to unlike this profile post comment?' . '
			';
}
else
{
$__output .= '
				' . 'Are you sure you want to like this profile post comment?' . '
			';
}
$__output .= '
		</dd>
	</dl>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" value="' . (($like) ? ('Unlike Profile Post Comment') : ('Like Profile Post Comment')) . '" accesskey="s" class="button primary" autofocus="true" /></dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
