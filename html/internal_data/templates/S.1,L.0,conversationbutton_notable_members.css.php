<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '/* Styling for icon beside username notable members page */
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__output .= '
    .convButtonNM {
        display: inline-block;
        font-size: small;
    }
    .memberListItem .fa {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuanm') . '
        padding-left: 2px;
    }
    .memberListItem .fa:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuanmhover') . '
    }
';
}
else
{
$__output .= '
    .convButtonNM {
        display: inline-block;
        font-size: small;
    }
    .memberListItem .fa {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuanm') . '
        padding-left: 2px;
    }
    .memberListItem .fa:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuanmhover') . '
    }
';
}
