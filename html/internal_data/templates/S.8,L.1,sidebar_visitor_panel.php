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
				<dl class="pairsJustified"><dt>' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorStatsIcons')) ? ('<i class="uix_icon uix_icon-comment Tooltip" title="' . XenForo_Template_Helper_Core::numberFormat($visitor['message_count'], '0') . ' ' . 'Messages' . '"></i>') : ('Messages' . ':')) . '</dt><dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['message_count'], '0') . '</dd></dl>
				<dl class="pairsJustified"><dt>' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorStatsIcons')) ? ('<i class="uix_icon uix_icon-thumbsUp Tooltip" title="' . XenForo_Template_Helper_Core::numberFormat($visitor['like_count'], '0') . ' ' . 'Likes' . '"></i>') : ('Likes' . ':')) . '</dt><dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['like_count'], '0') . '</dd></dl>
				';
if ($xenOptions['enableTrophies'])
{
$__compilerVar1 .= '<dl class="pairsJustified"><dt>' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorStatsIcons')) ? ('<i class="uix_icon uix_icon-trophy Tooltip" title="' . XenForo_Template_Helper_Core::numberFormat($visitor['trophy_points'], '0') . ' ' . 'Points' . '"></i>') : ('Points' . ':')) . '</dt><dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['trophy_points'], '0') . '</dd></dl>';
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
		<label';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 0 && XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') != 3)
{
$__output .= ' for="LoginControl"';
}
$__output .= ' id="SignupButton"><a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="inner' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '">' . (($xenOptions['registrationSetup']['enabled']) ? ('Sign up now!') : ('Log in')) . '</a></label>
	</div>
</div>

';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginFormSidebar'))
{
$__output .= '
<div class="section uix_loginForm">		
	<div class="secondaryContent">
		<h3>' . 'Log in' . '</h3>
		';
$__compilerVar2 = '';
$__compilerVar2 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

	<label for="ctrl_pageLogin_login">' . 'Your name or email address' . ':' . htmlspecialchars($isOverlay, ENT_QUOTES, 'UTF-8') . '</label>
	<dl class="ctrlUnit">
		<dd><input type="text" name="login" value="' . htmlspecialchars($defaultLogin, ENT_QUOTES, 'UTF-8') . '" id="ctrl_pageLogin_login" class="textCtrl uix_fixIOSClickInput" tabindex="1" /></dd>
	</dl>
	
	<label for="ctrl_pageLogin_password">' . 'Password' . ':</label>
	<dl class="ctrlUnit">
		<dd>
			<input type="password" name="password" class="textCtrl uix_fixIOSClickInput" id="ctrl_pageLogin_password" tabindex="2" />					
			<div><a href="' . XenForo_Template_Helper_Core::link('lost-password', false, array()) . '" class="OverlayTrigger OverlayCloser" tabindex="6">' . 'Forgot your password?' . '</a></div>
		</dd>
	</dl>
	
	';
if ($captcha)
{
$__compilerVar2 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar2 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar3 = '';
$__compilerVar3 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar3 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar3 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar3 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar3 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar3 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar3 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar3 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar3 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar3 .= '

	';
if (trim($__compilerVar3) !== '')
{
$__compilerVar2 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar3 . '
	</div>
	';
}
unset($__compilerVar3);
$__compilerVar2 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar2 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar2 .= '

</form>';
$__output .= $__compilerVar2;
unset($__compilerVar2);
$__output .= '
	</div>
</div>
';
}
$__output .= '

';
}
$__output .= '

';
$__compilerVar4 = '';
$__compilerVar5 = '';
$__compilerVar5 .= '
	
		';
$__compilerVar6 = '';
$__compilerVar6 .= '
				';
$__compilerVar7 = '';
$__compilerVar6 .= $this->callTemplateHook('ad_sidebar_below_visitor_panel', $__compilerVar7, array());
unset($__compilerVar7);
$__compilerVar6 .= '
				
				
				
				
				
				
				
			';
if (trim($__compilerVar6) !== '')
{
$__compilerVar5 .= '
			' . $__compilerVar6 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar5 .= '
			<div>' . 'Template' . ': ad_sidebar_below_visitor_panel</div>
		';
}
unset($__compilerVar6);
$__compilerVar5 .= '
	
	';
if (trim($__compilerVar5) !== '')
{
$__compilerVar4 .= '
	
	<div class="section funbox">
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers_sidebar')) ? ('') : ('secondaryContent')) . ' funboxWrapper">
	' . $__compilerVar5 . '
	</div>
	</div>
	
';
}
unset($__compilerVar5);
$__output .= $__compilerVar4;
unset($__compilerVar4);
