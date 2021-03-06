<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Trophies Awarded to ' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '';
$__output .= '

';
$__extraData['head']['noindex'] = '';
$__extraData['head']['noindex'] .= '
	<meta name="robots" content="noindex" />';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:members', $user, array()), 'value' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'));
$__output .= '

<div class="section">
	';
if ($trophies)
{
$__output .= '
		<ol class="overlayScroll">
		';
foreach ($trophies AS $trophy)
{
$__output .= '
			<li class="primaryContent">
				';
$__compilerVar1 = '';
$this->addRequiredExternal('css', 'trophy');
$__compilerVar1 .= '

<div class="trophy" id="trophy-' . htmlspecialchars($trophy['trophy_id'], ENT_QUOTES, 'UTF-8') . '">
	';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__compilerVar1 .= '
<div class="points">
';
if ($trophy['iconUrl'])
{
$__compilerVar1 .= '
<img src="' . htmlspecialchars($trophy['iconUrl'], ENT_QUOTES, 'UTF-8') . '" class="trophyIcon" title="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" />
';
}
else
{
$__compilerVar1 .= '
' . htmlspecialchars($trophy['trophy_points'], ENT_QUOTES, 'UTF-8') . '
';
}
$__compilerVar1 .= '
</div>
	';
if ($trophy['award_date'])
{
$__compilerVar1 .= '
		<div class="awarded">' . 'Awarded' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($trophy['award_date'],array(
'time' => '$trophy.award_date'
))) . '</div>
	';
}
$__compilerVar1 .= '
	<div class="info">
		<h3 class="title">' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '</h3>
		
';
if ($trophy['iconUrl'])
{
$__compilerVar1 .= '
<p class="description">' . 'Points' . ': ' . htmlspecialchars($trophy['trophy_points'], ENT_QUOTES, 'UTF-8') . '</p>
';
}
$__compilerVar1 .= '
<p class="description">' . $trophy['description'] . '</p>
';
if ($trophy['userTrophyList'])
{
$__compilerVar1 .= '
';
$__compilerVar2 = '';
$__compilerVar2 .= '<p class="description"> ' . 'Users who have attained this trophy: ' . '
';
$i = 0;
foreach ($trophy['userTrophyList'] AS $_user)
{
$i++;
$__compilerVar2 .= '
	' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $_user
));
if ($i < $trophy['count'])
{
$__compilerVar2 .= ',';
}
$__compilerVar2 .= '
';
}
$__compilerVar2 .= '
</p>					';
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
$__compilerVar1 .= '
';
}
$__compilerVar1 .= '
	</div>
</div>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
			</li>
		';
}
$__output .= '
		</ol>
		<div class="sectionFooter opposedOptions">
			<span class="left">' . 'Total Points' . ': ' . XenForo_Template_Helper_Core::numberFormat($user['trophy_points'], '0') . '</span>
			<div class="right">
				<input type="button" class="button primary overlayOnly OverlayCloser" value="' . 'Close' . '" />
				<a href="' . XenForo_Template_Helper_Core::link('help/trophies', false, array()) . '" class="button">' . 'View All Available Trophies' . '</a>
			</div>
		</div>
	';
}
else
{
$__output .= '
		<div class="primaryContent">' . '' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' has not been awarded any trophies yet.' . '</div>
		<div class="sectionFooter">
			<input type="button" class="button primary overlayOnly OverlayCloser" value="' . 'Close' . '" />
			<a href="' . XenForo_Template_Helper_Core::link('help/trophies', false, array()) . '" class="right button">' . 'View All Available Trophies' . '</a>
		</div>
	';
}
$__output .= '
</div>';
