<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '' . (($user['username']) ? (XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'subject'
))) : ('(deleted member)')) . ' bookmarked your resource ' . '<a href="' . XenForo_Template_Helper_Core::link('resources', $content, array()) . '" class="PopupItemLink">' . htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8') . '</a>' . '.';
