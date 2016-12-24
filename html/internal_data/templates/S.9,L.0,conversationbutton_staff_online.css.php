<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '/* Styling for button - staff online */
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__output .= '
    .convButtonStaff {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuastaff') . '
    }
    .convButtonStaff:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuastaffh') . '
    }
    .convButtonStaff a:hover {
        text-decoration: none;
    }
    .convButtonStaffIcon {
        float: left;
        padding-left: 5px;
    }
    .sidebar .avatarList .fa {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuastaffi') . '
    }
    .sidebar .avatarList .fa:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuastaffihover') . '
    }
    .sidebar .avatarList .userTitle {
        float: left;
    }
';
}
else
{
$__output .= '
    .convButtonStaff {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuastaff') . '
    }
    .convButtonStaff:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuastaffh') . '
    }
    .convButtonStaff a:hover {
        text-decoration: none;
    }
    .convButtonStaffIcon {
        float: left;
        padding-left: 5px;
    }
    .sidebar .avatarList .fa {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuastaffi') . '
        padding-top: 2px;
    }
    .sidebar .avatarList .fa:hover {
        ' . XenForo_Template_Helper_Core::styleProperty('cbuastaffihover') . '
    }
    .sidebar .avatarList .userTitle {
        float: left;
    }
';
}
$__output .= '

/* Clickable button */
.convButtonStaff a {position:relative;z-index:50;}
.convButtonStaff a:before {
    position:absolute;
    content:\'\';
    top:-3px;
    right:-3px;
    left:-3px;
    bottom:-3px;
    z-index:40;
}';
