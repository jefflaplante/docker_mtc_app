<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($visitor['user_id'] == $extra['profileUser']['user_id'])
{
$__output .= '
	' . 'Your <a href="' . htmlspecialchars($extra['profileLink'], ENT_QUOTES, 'UTF-8') . '">status update</a> was deleted.' . '
';
}
else
{
$__output .= '
	' . 'Your profile post on ' . '<a href="' . htmlspecialchars($extra['profileLink'], ENT_QUOTES, 'UTF-8') . '" class="PopupItemLink">' . htmlspecialchars($extra['profileUser']['username'], ENT_QUOTES, 'UTF-8') . '</a>' . '\'s profile was deleted.' . '
';
}
$__output .= '
';
if ($extra['reason'])
{
$__output .= 'Reason' . ': ' . htmlspecialchars($extra['reason'], ENT_QUOTES, 'UTF-8');
}
