<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '/* Styling for button - resource view */
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__output .= '
    .convButtonRM {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuarm') . '
    }
    .convButtonRM:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuarmh') . '
    }
    .convButtonRM a:hover {
        text-decoration: none;
    }
    .convButtonRMicon {
        float: right;
        padding-left: 5px;
    }
    .sidebar .avatarList .fa {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuarmi') . '
    }
    .sidebar .avatarList .fa:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuarmihover') . '
    }
    .sidebar .avatarList .userTitle {
        float: left;
    }
';
}
else
{
$__output .= '
    .convButtonRM {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuarm') . '
    }
    .convButtonRM:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuarmh') . '
    }
    .convButtonRM a:hover {
        text-decoration: none;
    }
    .convButtonRMicon {
        float: right;
        padding-left: 5px;
    }
    .sidebar .avatarList .fa {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuarmi') . '
        padding-top: 2px;
    }
    .sidebar .avatarList .fa:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuarmihover') . '
    }
    .sidebar .avatarList .userTitle {
        float: left;
    }
';
}
$__output .= '

/* Clickable button */
.convButtonRM a {position:relative;z-index:50;}
.convButtonRM a:before {
    position:absolute;
    content:\'\';
    top:-3px;
    right:-3px;
    left:-3px;
    bottom:-3px;
    z-index:40;
}';
