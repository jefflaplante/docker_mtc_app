<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($user['trophyCache'] && $xenOptions['waindigo_trophies_profilePagePosition'] == ('sidebar'))
{
$__output .= '
	';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__output .= '
	<div class="section trophies">
		<h3 class="subHeading textWithCount">
			<span class="text">' . 'Trophies' . '</span>
			<a href="' . XenForo_Template_Helper_Core::link('members/trophies', $user, array()) . '" class="count OverlayTrigger">' . XenForo_Template_Helper_Core::numberFormat($user['trophy_count'], '0') . '</a>
		</h3>
		<div class="primaryContent">
			<ol>
			';
foreach ($user['trophyCache'] AS $trophy)
{
$__output .= '
				<li>
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
				</li>
			';
}
$__output .= '
			</ol>
		</div>
		<div class="sectionFooter"><a href="' . XenForo_Template_Helper_Core::link('members/trophies', $user, array()) . '" class="OverlayTrigger">' . 'Show All' . '</a></div>
	</div>
';
}
