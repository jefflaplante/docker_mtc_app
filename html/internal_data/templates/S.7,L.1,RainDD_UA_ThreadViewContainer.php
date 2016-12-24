<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($RainDD_UA_ThreadViewerPermission)
{
$__output .= '
	';
$__compilerVar1 = '';
$__compilerVar1 .= '
			';
if ($xenOptions['RainDD_UA_ThreadViewType'] == 0)
{
$__compilerVar1 .= '
			';
foreach ($RainDD_UA_ThreadUsersViewing['records'] AS $user)
{
$__compilerVar1 .= '
				<li>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '</li>
			';
}
$__compilerVar1 .= '
			';
}
else if ($xenOptions['RainDD_UA_ThreadViewType'] == 1)
{
$__compilerVar1 .= '
			';
foreach ($RainDD_UA_ThreadUsersViewing['records'] AS $user)
{
$__compilerVar1 .= '
				<li>' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'title' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8')
),'')) . '</li>
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
$this->addRequiredExternal('css', 'RainDD_UA_Thread');
$__output .= '
	<div id="uaThreadViewContainer" class="section secondaryContent">
		<h3>' . 'Users Who Are Viewing This Thread <span class="footnote">(Users: ' . XenForo_Template_Helper_Core::numberFormat($RainDD_UA_ThreadUsersViewing['members'], '0') . ', Guests: ' . XenForo_Template_Helper_Core::numberFormat($RainDD_UA_ThreadUsersViewing['guests'], '0') . ')</span>' . '</h3>	
		';
if ($xenOptions['RainDD_UA_ThreadViewType'] == 0)
{
$__output .= '
			<ol class="listInline commaImplode">
		';
}
else if ($xenOptions['RainDD_UA_ThreadViewType'] == 1)
{
$__output .= '
			<ol class="listInline">
		';
}
$__output .= '
			' . $__compilerVar1 . '
			</ol>
		</div>
	';
}
unset($__compilerVar1);
$__output .= '
';
}
