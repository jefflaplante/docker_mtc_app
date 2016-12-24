<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '
';
if (!XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation'))
{
$__output .= '.uix_sticky_navigation {display: none;}';
}
$__output .= '
';
if (!XenForo_Template_Helper_Core::styleProperty('uix_stickyUserBar'))
{
$__output .= '.uix_sticky_userbar {display: none;}';
}
$__output .= '
';
if (!XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar_sticky'))
{
$__output .= '.uix_sticky_sidebar {display: none;}';
}
