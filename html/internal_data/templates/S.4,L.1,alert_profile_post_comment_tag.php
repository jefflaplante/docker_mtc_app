<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'subject'
)) . ' mentioned you in <a ' . 'href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $content, array()) . '" class="PopupItemLink"' . '>a comment</a> on ' . htmlspecialchars($content['profilePost']['profile_username'], ENT_QUOTES, 'UTF-8') . '\'s profile.';
