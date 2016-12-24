<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Two-Step Verification Required';
$__output .= '

';
$__extraData['hideLoginBar'] = '';
$__extraData['hideLoginBar'] .= '1';
$__output .= '
';
$__extraData['noSocialLogin'] = '';
$__extraData['noSocialLogin'] .= '1';
$__output .= '
';
$__extraData['head']['robots'] = '';
$__extraData['head']['robots'] .= '<meta name="robots" content="noindex" />';
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('login/two-step', false, array()) . '" method="post" class="xenForm AutoValidator" data-redirect="yes">

	<dl class="ctrlUnit">
		<dt>' . 'Logging in as' . ':</dt>
		<dd>' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '</dd>
	</dl>

	<h3 class="textHeading">' . htmlspecialchars($provider['title'], ENT_QUOTES, 'UTF-8') . '</h3>
	' . $providerHtml . '

	<dl class="ctrlUnit">
		<dt></dt>
		<dd><ul>
			<li>
				<label><input type="checkbox" name="trust" value="1" /> ' . 'Trust this device for 30 days' . '</label>
				<p class="explain">' . 'If selected, you will not need to complete two-step verification from this device for the next 30 days.' . '</p>
			</li>
		</ul></dd>
	</dl>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" name="save" value="' . 'Confirm' . '" accesskey="s" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="provider" value="' . htmlspecialchars($providerId, ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfConfirm" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="remember" value="' . htmlspecialchars($remember, ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8') . '" />

	';
if (count($providers) > 1)
{
$__output .= '
		<h3 class="textHeading">' . 'Alternative Methods' . '</h3>
		<div class="section">
			<div class="prmaryContent">
			';
foreach ($providers AS $id => $otherProvider)
{
$__output .= '
				';
if ($id != $providerId)
{
$__output .= '
					<a href="' . XenForo_Template_Helper_Core::link('login/two-step', '', array(
'redirect' => $redirect,
'remember' => $remember,
'provider' => $id
)) . '" class="button">' . htmlspecialchars($otherProvider['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__output .= '
			';
}
$__output .= '
			</div>
		</div>
	';
}
$__output .= '
</form>';
