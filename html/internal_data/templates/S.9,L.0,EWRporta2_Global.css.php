<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.leftContainer { float: right; margin-left: -' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + 10) . 'px; width: 100%; }
.leftContent { margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + 10) . 'px; }
.leftSidebar { float: left; }

.splitWidgets .section:first-child,
.splitWidgets .sectionMain:first-child { margin-top: 0; }

.sidebar.noFloats { float: none; width: auto; margin-bottom: 10px; }
.sidebar.b-rightWidgets { margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + 10) . 'px; }
.sidebar.b-leftWidgets { float: left; }
.sidebar.footerWidgets { clear: both; }
' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.splitWidgets'
)) . '

.copyright { text-align: center; font-size: 11px; margin: 10px; }

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
	@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('uix_sidebarMaxResponsiveWidth') . ')
	{
		.Responsive .leftContainer { float: none; margin: 0 auto; }
		.Responsive .leftContent { margin-left: 0; }
	}
	@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
	{
		.Responsive .sidebar.b-leftWidgets { float: none; margin: 0 auto; }
		.Responsive .sidebar.b-rightWidgets { margin-left: 0px; }
	}
';
}
