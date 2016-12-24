<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '/* Styling for button - profile */
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__output .= '
    .conversationButton {
        ' . XenForo_Template_Helper_Core::styleProperty('cbua') . '
    }
    .conversationButton:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuahover') . '
    }
    .conversationButton a:hover {
        text-decoration: none;
    }
';
}
else
{
$__output .= '
    .conversationButton {
        ' . XenForo_Template_Helper_Core::styleProperty('cbua') . '
    }
    .conversationButton:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuahover') . '
    }
    .conversationButton a:hover {
        text-decoration: none;
    }
';
}
$__output .= '

/* Styling for button - profile mobile */
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonMobile {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuam') . '
    }
    .convButtonMobile:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuamhover') . '
    }
}
';
}
$__output .= '

/* Clickable button */
.conversationButton a {position:relative;z-index:50;}
.conversationButton a:before {
    position:absolute;
    content:\'\';
    top:-4px;
    right:-40px;
    left:-40px;
    bottom:-8px;
    z-index:40;
}';
