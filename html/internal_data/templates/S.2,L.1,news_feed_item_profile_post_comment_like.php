<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<h3 class="description">

	';
if ($content['user_id'] == $visitor['user_id'])
{
$__output .= '

		' . '' . (($user['user_id']) ? (XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'primaryText'
))) : ('<span class="primaryText">' . 'Unknown Member' . '</span>')) . ' liked <a ' . 'href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $content, array()) . '"' . '>your comment</a> on ' . htmlspecialchars($content['profilePost']['username'], ENT_QUOTES, 'UTF-8') . '\'s profile post.' . '

	';
}
else if ($content['profilePost']['user_id'] == $visitor['user_id'])
{
$__output .= '
	
		' . '' . (($user['user_id']) ? (XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'primaryText'
))) : ('<span class="primaryText">' . 'Unknown Member' . '</span>')) . ' liked <a ' . 'href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $content, array()) . '"' . '>' . htmlspecialchars($content['username'], ENT_QUOTES, 'UTF-8') . '\'s comment</a> on your profile post.' . '

	';
}
else
{
$__output .= '
	
		' . '' . (($user['user_id']) ? (XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'primaryText'
))) : ('<span class="primaryText">' . 'Unknown Member' . '</span>')) . ' liked <a ' . 'href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $content, array()) . '"' . '>' . htmlspecialchars($content['username'], ENT_QUOTES, 'UTF-8') . '\'s comment</a> on ' . htmlspecialchars($content['profilePost']['username'], ENT_QUOTES, 'UTF-8') . '\'s profile post' . '

	';
}
$__output .= '

</h3>

<p class="snippet">' . XenForo_Template_Helper_Core::callHelper('snippet', array(
'0' => $content['message'],
'1' => $xenOptions['newsFeedMessageSnippetLength'],
'2' => array(
'stripPlainTag' => '1'
)
)) . '</p>';
