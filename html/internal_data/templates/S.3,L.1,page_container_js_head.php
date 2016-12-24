<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '	<script src="' . htmlspecialchars($jQuerySource, ENT_QUOTES, 'UTF-8') . '"></script>	
	';
if ($jQuerySource != $jQuerySourceLocal)
{
$__output .= '
		<script>if (!window.jQuery) { document.write(\'<scr\'+\'ipt type="text/javascript" src="' . htmlspecialchars($jQuerySourceLocal, ENT_QUOTES, 'UTF-8') . '"><\\/scr\'+\'ipt>\'); }</script>
	';
}
if ($xenOptions['uncompressedJs'] == 1 OR $xenOptions['uncompressedJs'] == 3)
{
$__output .= '
	<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/jquery/jquery.xenforo.rollup.js?_v=' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '"></script>';
}
$__output .= '	
	<script src="' . XenForo_Template_Helper_Core::callHelper('javaScriptUrl', array(
'0' => $javaScriptSource . '/xenforo/xenforo.js?_v=' . $xenOptions['jsVersion']
)) . '"></script>
<!--XenForo_Require:JS-->

';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_navigation'))
{
$__output .= '
<script type="text/javascript" src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/XenCore_Framework/jquery.sticky.js"></script>
<script type="text/javascript" src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/XenCore_Framework/jquery.sticky_script.js"></script>
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_left_sidebar'))
{
$__output .= '
<script type="text/javascript" src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/XenCore_Framework/sidebar_left.js"></script>
';
}
else
{
$__output .= '
<script type="text/javascript" src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/XenCore_Framework/sidebar.js"></script>
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_cat_enable'))
{
$__output .= '
<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/XenCore_Framework/categories.js?_v=' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '"></script>
';
}
