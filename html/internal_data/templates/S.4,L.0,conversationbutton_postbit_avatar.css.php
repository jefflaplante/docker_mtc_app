<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '/* Styling for button - postbit avatar */
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__output .= '
    .convButtonInfoA {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuaia') . '
    }
    .convButtonInfoA:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuaiahover') . '
    }
    .convButtonInfoA a:hover {
        text-decoration: none;
    }
';
}
else
{
$__output .= '
    .convButtonInfoA {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuaia') . '
    }
    .convButtonInfoA:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuaiahover') . '
    }
    .convButtonInfoA a:hover {
        text-decoration: none;
    }
';
}
$__output .= '

/* Styling for button - postbit avatar mobile */
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonInfoAM {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuamia') . '
    }
    .convButtonInfoAM:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuamiahover') . '
    }
}
';
}
$__output .= '

/* Clickable button */
.convButtonInfoA a {position:relative;z-index:50;}
.convButtonInfoA a:before {
    position:absolute;
    content:\'\';
    top:-4px;
    right:-30px;
    left:-30px;
    bottom:-4px;
    z-index:40;
}';
