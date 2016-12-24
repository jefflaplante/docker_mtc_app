<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Two-Step Verification Setup' . ': ' . htmlspecialchars($provider['title'], ENT_QUOTES, 'UTF-8');
$__output .= '

<form method="post" class="xenForm AutoValidator" action="' . XenForo_Template_Helper_Core::link('account/two-step/enable', false, array()) . '" data-redirect="yes">

	' . $providerHtml . '

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" name="save" value="' . 'Confirm' . '" accesskey="s" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="step" value="confirm" />
	<input type="hidden" name="provider" value="' . htmlspecialchars($providerId, ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfConfirm" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
