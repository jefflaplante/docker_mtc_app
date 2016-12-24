<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($visitor['user_id'] == $content['profilePost']['user_id'])
{
$__output .= '
	' . '' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'subject'
)) . ' liked <a ' . 'href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $content, array()) . '" class="PopupItemLink"' . '>your comment</a> on your profile post.' . '
';
}
else
{
$__output .= '
	' . '' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'subject'
)) . ' liked <a ' . 'href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $content, array()) . '" class="PopupItemLink"' . '>your comment</a> on ' . htmlspecialchars($content['profilePost']['username'], ENT_QUOTES, 'UTF-8') . '\'s profile post.' . '
';
}
