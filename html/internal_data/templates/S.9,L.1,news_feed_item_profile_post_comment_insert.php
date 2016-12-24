<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<h3 class="description">' . '' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'primaryText'
)) . ' commented on ' . '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $content, array()) . '">' . htmlspecialchars($content['profilePost']['username'], ENT_QUOTES, 'UTF-8') . '</a>' . '\'s profile post.' . '</h3>

<p class="snippet">' . XenForo_Template_Helper_Core::callHelper('snippet', array(
'0' => $content['message'],
'1' => $xenOptions['newsFeedMessageSnippetLength'],
'2' => array(
'stripPlainTag' => '1'
)
)) . '</p>';
