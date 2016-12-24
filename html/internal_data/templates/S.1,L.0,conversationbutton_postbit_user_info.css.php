<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '/* Styling for button - postbit */
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__output .= '
    .conversationButtonInfo {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuainfo') . '
    }
    .conversationButtonInfo:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuainfohover') . '
    }
    .conversationButtonInfo a:hover {
        text-decoration: none;
    }
';
}
else
{
$__output .= '
    .conversationButtonInfo {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuainfo') . '
    }
    .conversationButtonInfo:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuainfohover') . '
    }
    .conversationButtonInfo a:hover {
        text-decoration: none;
    }
';
}
$__output .= '

/* Styling for button - postbit mobile */
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonMobileInfo {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuami') . '
    }
    .convButtonMobileInfo:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuamihover') . '
    }
}
';
}
$__output .= '

/* Clickable button */
.conversationButtonInfo a {position:relative;z-index:50;}
.conversationButtonInfo a:before {
    position:absolute;
    content:\'\';
    top:-4px;
    right:-10px;
    left:-10px;
    bottom:-7px;
    z-index:40;
}';
