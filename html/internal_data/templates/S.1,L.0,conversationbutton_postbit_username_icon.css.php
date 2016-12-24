<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '/* Styling for icon beside username in postbit */
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__output .= '
    .convButtonUI {
        float: right;
    }
    .messageUserBlock .fa {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuaui') . '
        padding-left: 2px;
    }
    .messageUserBlock .fa:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuauihover') . '
    }
';
}
else
{
$__output .= '
    .convButtonUI {
        float: right;
    }
    .messageUserBlock .fa {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuaui') . '
        padding-left: 2px;
    }
    .messageUserBlock .fa:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuauihover') . '
    }
';
}
