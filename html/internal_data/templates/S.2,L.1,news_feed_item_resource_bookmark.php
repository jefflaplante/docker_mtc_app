<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<h3 class="description">
	';
if ($content['user_id'] == $visitor['user_id'])
{
$__output .= '
		' . '' . (($user['user_id'] == $visitor['user_id']) ? ('You') : (XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'primaryText'
)))) . ' bookmarked your resource ' . '<a href="' . XenForo_Template_Helper_Core::link('resources', $content, array()) . '" ' . (($content['username']) ? ('class="PreviewTooltip" data-previewUrl="' . XenForo_Template_Helper_Core::link('resources/quick-preview', $content, array()) . '"') : ('')) . '>' . htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8') . '</a>' . '.' . '
	';
}
else
{
$__output .= '
		' . '' . (($user['user_id'] == $visitor['user_id']) ? ('You') : (XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $user,
'1' => 'primaryText'
)))) . ' bookmarked <a ' . 'href="' . XenForo_Template_Helper_Core::link('members', $content, array()) . '"' . '>' . htmlspecialchars($content['username'], ENT_QUOTES, 'UTF-8') . '</a>\'s resource ' . '<a href="' . XenForo_Template_Helper_Core::link('resources', $content, array()) . '" ' . (($content['username']) ? ('class="PreviewTooltip" data-previewUrl="' . XenForo_Template_Helper_Core::link('resources/quick-preview', $content, array()) . '"') : ('')) . '>' . htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8') . '</a>' . '.' . '
	';
}
$__output .= '
</h3>';
