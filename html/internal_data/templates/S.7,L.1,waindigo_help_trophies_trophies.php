<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Trophies';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('help', false, array()), 'value' => 'Help');
$__output .= '

';
if ($parentTrophyCategories)
{
$__output .= '
	<ol class="section">
		';
foreach ($parentTrophyCategories AS $parentTrophyCategoryId => $parentTrophyCategory)
{
$__output .= '
			';
if ($parentTrophyCategory['trophy_categories'])
{
$__output .= '
				';
$__compilerVar1 = '';
$__compilerVar1 .= '
					';
foreach ($parentTrophyCategory['trophy_categories'] AS $trophyCategoryId => $trophyCategory)
{
$__compilerVar1 .= '
						';
if ($trophyCategory['trophies'])
{
$__compilerVar1 .= '
							';
if ($trophyCategoryId)
{
$__compilerVar1 .= '
								<h3 class="subHeading">
									';
if ($trophyCategoryId)
{
$__compilerVar1 .= htmlspecialchars($trophyCategory['title'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar1 .= '
								</h3>
							';
}
$__compilerVar1 .= '
							';
foreach ($trophyCategory['trophies'] AS $trophy)
{
$__compilerVar1 .= '
								<li class="primaryContent">
									';
$__compilerVar2 = '';
$this->addRequiredExternal('css', 'trophy');
$__compilerVar2 .= '

<div class="trophy" id="trophy-' . htmlspecialchars($trophy['trophy_id'], ENT_QUOTES, 'UTF-8') . '">
	';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__compilerVar2 .= '
<div class="points">
';
if ($trophy['iconUrl'])
{
$__compilerVar2 .= '
<img src="' . htmlspecialchars($trophy['iconUrl'], ENT_QUOTES, 'UTF-8') . '" class="trophyIcon" title="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" />
';
}
else
{
$__compilerVar2 .= '
' . htmlspecialchars($trophy['trophy_points'], ENT_QUOTES, 'UTF-8') . '
';
}
$__compilerVar2 .= '
</div>
	';
if ($trophy['award_date'])
{
$__compilerVar2 .= '
		<div class="awarded">' . 'Awarded' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($trophy['award_date'],array(
'time' => '$trophy.award_date'
))) . '</div>
	';
}
$__compilerVar2 .= '
	<div class="info">
		<h3 class="title">' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '</h3>
		
';
if ($trophy['iconUrl'])
{
$__compilerVar2 .= '
<p class="description">' . 'Points' . ': ' . htmlspecialchars($trophy['trophy_points'], ENT_QUOTES, 'UTF-8') . '</p>
';
}
$__compilerVar2 .= '
<p class="description">' . $trophy['description'] . '</p>
';
if ($trophy['userTrophyList'])
{
$__compilerVar2 .= '
';
$__compilerVar3 = '';
$__compilerVar3 .= '<p class="description"> ' . 'Users who have attained this trophy: ' . '
';
$i = 0;
foreach ($trophy['userTrophyList'] AS $_user)
{
$i++;
$__compilerVar3 .= '
	' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $_user
));
if ($i < $trophy['count'])
{
$__compilerVar3 .= ',';
}
$__compilerVar3 .= '
';
}
$__compilerVar3 .= '
</p>					';
$__compilerVar2 .= $__compilerVar3;
unset($__compilerVar3);
$__compilerVar2 .= '
';
}
$__compilerVar2 .= '
	</div>
</div>';
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
$__compilerVar1 .= '
								</li>
							';
}
$__compilerVar1 .= '
						';
}
$__compilerVar1 .= '
					';
}
$__compilerVar1 .= '
					';
if (trim($__compilerVar1) !== '')
{
$__output .= '
					';
if (XenForo_Template_Helper_Core::numberFormat(count($parentTrophyCategories), '0') > 1 || $parentTrophyCategoryId)
{
$__output .= '
						<h3 class="heading">
							';
if ($parentTrophyCategoryId)
{
$__output .= htmlspecialchars($parentTrophyCategory['title'], ENT_QUOTES, 'UTF-8');
}
else
{
$__output .= 'Other Trophies';
}
$__output .= '
						</h3>
					';
}
$__output .= '
					' . $__compilerVar1 . '
					';
}
unset($__compilerVar1);
$__output .= '
			';
}
$__output .= '
		';
}
$__output .= '
	</ol>
';
}
else
{
$__output .= '
	<div class="section">' . 'No trophies have been created yet.' . '</div>
';
}
