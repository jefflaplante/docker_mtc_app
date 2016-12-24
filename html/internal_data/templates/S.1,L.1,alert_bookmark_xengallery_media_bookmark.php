<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '' . (($user['username']) ? (XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'subject'
))) : ('(deleted member)')) . ' bookmarked your media ' . '<a href="' . XenForo_Template_Helper_Core::link('xengallery', $content, array()) . '" class="PopupItemLink">' . htmlspecialchars($content['media_title'], ENT_QUOTES, 'UTF-8') . '</a>' . '.';
