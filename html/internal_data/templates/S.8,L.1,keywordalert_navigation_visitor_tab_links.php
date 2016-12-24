<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__output .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
