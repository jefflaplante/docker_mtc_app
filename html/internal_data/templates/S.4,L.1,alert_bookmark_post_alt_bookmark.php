<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '' . (($user['username']) ? (XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'subject'
))) : ('(deleted member)')) . ' bookmarked <a ' . 'href="' . XenForo_Template_Helper_Core::link('posts', $content, array()) . '" class="PopupItemLink"' . '>your post</a>  in the thread ' . '<a href="' . XenForo_Template_Helper_Core::link('threads', $content, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $content
)) . htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8') . '</a>' . '.';
