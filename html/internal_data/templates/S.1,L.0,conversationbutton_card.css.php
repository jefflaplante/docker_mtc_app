<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '/* Styling for button - member card */
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__output .= '
    .convButtonCard {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuac') . '
    }
    .convButtonCard:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuachover') . '
    }
    .convButtonCard a:hover {
        text-decoration: none;
    }
';
}
else
{
$__output .= '
    .convButtonCard {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuac') . '
    }
    .convButtonCard:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuachover') . '
    }
    .convButtonCard a:hover {
        text-decoration: none;
    }
';
}
$__output .= '

/* Styling for button - member card mobile */
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonCardM {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuacm') . '
    }
    .convButtonCardM:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuacmhover') . '
    }
}
';
}
$__output .= '

/* Clickable button */
.convButtonCard a {
    position:relative;
    z-index:50;
    color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . ';
}
.convButtonCard a:before {
    position:absolute;
    content:\'\';
    top:-4px;
    right:-120px;
    left:-120px;
    bottom:-4px;
    z-index:40;
}';
