<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Reset Password';
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('lost-password/confirm', $user, array()) . '" method="post" class="xenForm">

	<dl class="ctrlUnit">
		<dt>' . 'Your Name' . ':</dt>
		<dd>' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '</dd>
	</dl>

	<dl class="ctrlUnit">
		<dt><label for="ctrl_password">' . 'New Password' . ':</label></dt>
		<dd><input type="password" name="password" value="" dir="ltr" class="textCtrl" id="ctrl_password" /></dd>
	</dl>

	<dl class="ctrlUnit">
		<dt><label for="ctrl_password_confirm">' . 'Confirm New Password' . ':</label></dt>
		<dd><input type="password" name="password_confirm" value="" class="textCtrl" dir="ltr" id="ctrl_password_confirm" /></dd>
	</dl>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" name="save" value="' . 'Save Changes' . '" accesskey="s" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="c" value="' . htmlspecialchars($confirmationKey, ENT_QUOTES, 'UTF-8') . '" />
</form>';
