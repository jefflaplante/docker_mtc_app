<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($user['trophyCache'] && $xenOptions['waindigo_trophies_profilePagePosition'] == ('top'))
{
$__output .= '
	';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__output .= '
	<p class="trophies" id="trophyIcons">
		';
foreach ($user['trophyCache'] AS $trophy)
{
$__output .= '
			';
$__compilerVar1 = '';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__compilerVar1 .= '
<a href="' . XenForo_Template_Helper_Core::link('members/trophies', $user, array()) . '" class="OverlayTrigger">		
<img src="' . htmlspecialchars($trophy['iconUrl'], ENT_QUOTES, 'UTF-8') . '" title="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" class="trophyIconMini" />
</a>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
		';
}
$__output .= '
	</p>
';
}
