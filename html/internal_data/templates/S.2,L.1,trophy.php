<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'trophy');
$__output .= '

<div class="trophy" id="trophy-' . htmlspecialchars($trophy['trophy_id'], ENT_QUOTES, 'UTF-8') . '">
	';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__output .= '
<div class="points">
';
if ($trophy['iconUrl'])
{
$__output .= '
<img src="' . htmlspecialchars($trophy['iconUrl'], ENT_QUOTES, 'UTF-8') . '" class="trophyIcon" title="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" />
';
}
else
{
$__output .= '
' . htmlspecialchars($trophy['trophy_points'], ENT_QUOTES, 'UTF-8') . '
';
}
$__output .= '
</div>
	';
if ($trophy['award_date'])
{
$__output .= '
		<div class="awarded">' . 'Awarded' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($trophy['award_date'],array(
'time' => '$trophy.award_date'
))) . '</div>
	';
}
$__output .= '
	<div class="info">
		<h3 class="title">' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '</h3>
		
';
if ($trophy['iconUrl'])
{
$__output .= '
<p class="description">' . 'Points' . ': ' . htmlspecialchars($trophy['trophy_points'], ENT_QUOTES, 'UTF-8') . '</p>
';
}
$__output .= '
<p class="description">' . $trophy['description'] . '</p>
';
if ($trophy['userTrophyList'])
{
$__output .= '
';
$__compilerVar1 = '';
$__compilerVar1 .= '<p class="description"> ' . 'Users who have attained this trophy: ' . '
';
$i = 0;
foreach ($trophy['userTrophyList'] AS $_user)
{
$i++;
$__compilerVar1 .= '
	' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $_user
));
if ($i < $trophy['count'])
{
$__compilerVar1 .= ',';
}
$__compilerVar1 .= '
';
}
$__compilerVar1 .= '
</p>					';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
';
}
$__output .= '
	</div>
</div>';
