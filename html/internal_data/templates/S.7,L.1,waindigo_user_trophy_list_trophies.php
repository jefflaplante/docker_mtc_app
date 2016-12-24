<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<p class="description"> ' . 'Users who have attained this trophy: ' . '
';
$i = 0;
foreach ($trophy['userTrophyList'] AS $_user)
{
$i++;
$__output .= '
	' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $_user
));
if ($i < $trophy['count'])
{
$__output .= ',';
}
$__output .= '
';
}
$__output .= '
</p>					';
