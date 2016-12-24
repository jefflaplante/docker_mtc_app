<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= 'Your comment on <a href="{link}">' . '<a href="' . htmlspecialchars($extra['link'], ENT_QUOTES, 'UTF-8') . '" class="PopupItemLink">' . htmlspecialchars($extra['profilePost']['username'], ENT_QUOTES, 'UTF-8') . '</a>' . '\'s profile post</a> was edited.' . '
';
if ($extra['reason'])
{
$__output .= 'Reason' . ': ' . htmlspecialchars($extra['reason'], ENT_QUOTES, 'UTF-8');
}
