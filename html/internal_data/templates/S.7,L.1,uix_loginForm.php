<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

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
$__output .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__output .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar1 = '';
$__compilerVar1 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar1 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar1 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar1 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar1 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar1 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar1 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar1 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar1 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar1 .= '

	';
if (trim($__compilerVar1) !== '')
{
$__output .= '
	<div class="uix_loginOptions">
	' . $__compilerVar1 . '
	</div>
	';
}
unset($__compilerVar1);
$__output .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__output .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__output .= '

</form>';
