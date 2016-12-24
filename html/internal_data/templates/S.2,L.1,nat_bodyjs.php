<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
foreach ($nodeTabs AS $nodeTab)
{
$__output .= '
';
if ($nodeTab['nat_popup_columns'])
{
$__output .= '
	$(\'.Menu.JsOnly.tabMenu.nodetab' . htmlspecialchars($nodeTab['node_id'], ENT_QUOTES, 'UTF-8') . 'TabLinks\').addClass(\'natJSMenuColumns\');
';
}
$__output .= '
';
if ($nodeTab['nat_newwindow'])
{
$__output .= '
	$(\'.navTabs .navTab.nodetab' . htmlspecialchars($nodeTab['node_id'], ENT_QUOTES, 'UTF-8') . ' > a.navLink\').attr(\'target\', \'_blank\');
';
}
$__output .= '
';
}
