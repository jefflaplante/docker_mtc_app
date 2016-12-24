<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($content['profilePost']['user_id'] == $content['profileUser']['user_id'])
{
$__output .= '
	' . '' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'subject'
)) . ' also commented on <a ' . 'href="' . XenForo_Template_Helper_Core::link('profile-posts', $content, array()) . '" class="PopupItemLink"' . '>' . htmlspecialchars($content['profilePost']['username'], ENT_QUOTES, 'UTF-8') . '\'s status</a>' . '.
';
}
else
{
$__output .= '
	' . '' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'subject'
)) . ' also commented on <a ' . 'href="' . XenForo_Template_Helper_Core::link('profile-posts', $content, array()) . '" class="PopupItemLink"' . '>' . htmlspecialchars($content['profilePost']['username'], ENT_QUOTES, 'UTF-8') . '\'s profile post</a>' . '.
';
}
