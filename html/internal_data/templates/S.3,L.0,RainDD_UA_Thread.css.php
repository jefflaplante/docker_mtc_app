<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '#uaThreadViewContainer,
#uaThreadReadContainer 
{
	' . XenForo_Template_Helper_Core::styleProperty('RainDD_UA_ThreadContainer') . '
}

#uaThreadViewContainer h3,
#uaThreadReadContainer h3
{
	' . XenForo_Template_Helper_Core::styleProperty('RainDD_UA_ThreadContainerH3') . '
}

#uaThreadViewContainer h3 .footnote,
#uaThreadReadContainer h3 .footnote
{
	' . XenForo_Template_Helper_Core::styleProperty('RainDD_UA_ThreadContainerH3Footnote') . '
}

#uaThreadViewContainer .avatar img,
#uaThreadReadContainer .avatar img
{
	' . XenForo_Template_Helper_Core::styleProperty('RainDD_UA_Avatar') . '
}';
