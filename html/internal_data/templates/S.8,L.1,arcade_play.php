<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Play' . ' ' . htmlspecialchars($game['title'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'Play';
$__output .= '
';
if ($game['description'])
{
$__output .= '
	';
$__extraData['pageDescription'] = array();
$__extraData['pageDescription']['content'] = '';
$__extraData['pageDescription']['content'] .= htmlspecialchars($game['description'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'] = XenForo_Template_Helper_Core::appendBreadCrumbs($__extraData['navigation'], $breadcrumbs);
$__output .= '


';
$this->addRequiredExternal('css', 'arcade');
$__output .= '

<div class="sectionMain">
	<div class="primaryContent gamePlayer">
		' . $player . '
	</div>
</div>';
