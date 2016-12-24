<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Password Confirmation';
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('login/password-confirm', false, array()) . '" method="post" class="xenForm AutoValidator" data-redirect="yes">

	<p>' . 'To access this page, you must first confirm your password.' . '</p>

	<dl class="ctrlUnit">
		<dt>' . 'Name' . ':</dt>
		<dd>
			' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '					
		</dd>
	</dl>
	
	<dl class="ctrlUnit">
		<dt>' . 'Password' . ':</dt>
		<dd>
			<input type="password" name="password" class="textCtrl" />					
		</dd>
	</dl>
	
	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd>
			<input type="submit" class="button primary" value="' . 'Confirm Password' . '" />
		</dd>
	</dl>

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
