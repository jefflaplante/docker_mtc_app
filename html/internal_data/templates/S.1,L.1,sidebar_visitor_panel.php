<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($visitor['user_id'])
{
$__output .= '

<div class="section visitorPanel">
	<div class="secondaryContent">
	
		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,(true),array(
'user' => '$visitor',
'size' => 'm',
'img' => 'true'
),'')) . '
		
		<div class="visitorText">
			<h2>' . '<span class="muted">Signed in as</span> ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $visitor,
'1' => 'NoOverlay'
)) . '' . '</h2>		
			<div class="stats">
			';
$__compilerVar1 = '';
$__compilerVar1 .= '
				<dl class="pairsJustified"><dt>' . 'Messages' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['message_count'], '0') . '</dd></dl>
				<dl class="pairsJustified"><dt>' . 'Likes' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['like_count'], '0') . '</dd></dl>
				';
if ($xenOptions['enableTrophies'])
{
$__compilerVar1 .= '
					<dl class="pairsJustified"><dt>' . 'Points' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['trophy_points'], '0') . '</dd></dl>
				';
}
$__compilerVar1 .= '
			</div>
			';
$__output .= $this->callTemplateHook('sidebar_visitor_panel_stats', $__compilerVar1, array());
unset($__compilerVar1);
$__output .= '
		</div>
		
	</div>
</div>

';
}
else
{
$__output .= '

<div class="section loginButton">		
	<div class="secondaryContent">
		<label for="LoginControl" id="SignupButton"><a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="inner">' . (($xenOptions['registrationSetup']['enabled']) ? ('Sign up now!') : ('Log in')) . '</a></label>
	</div>
</div>

';
}
$__output .= '

';
$__compilerVar2 = '';
$__compilerVar3 = '';
$__compilerVar2 .= $this->callTemplateHook('ad_sidebar_below_visitor_panel', $__compilerVar3, array());
unset($__compilerVar3);
$__output .= $__compilerVar2;
unset($__compilerVar2);
