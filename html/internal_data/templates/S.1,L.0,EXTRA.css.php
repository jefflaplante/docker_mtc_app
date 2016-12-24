<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.messageUserBlock .extraUserInfo
{
    opacity: 0;
    max-height: 0px;
    overflow: hidden;
    transition: all 0.5s ease-in-out;
}

.messageUserInfo:hover .extraUserInfo
{
    opacity: 1;
    max-height: 300px;
}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ')
{
    html .messageUserBlock .extraUserInfo
    {
        opacity: 1;
        height: auto;
        transition: none;
    }
    .messageUserInfo:hover .extraUserInfo
    {
        height: auto;
    }
 
}
';
}
$__output .= '

.userBanner.aveline
{
color: white;
background-color: crimson;
}

.userBanner.jaded
{
color: white;
background-color: darkorchid;
border-color: orchid;
}

.userBanner.kryssyy
{
color: white;
background-color: Slategray;
}

.message .signature .bbCodeImage {
max-height: 100px !important;
max-width: 800px !important;
}';
