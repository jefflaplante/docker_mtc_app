<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Two-Step Verification Setup' . ': ' . htmlspecialchars($provider['title'], ENT_QUOTES, 'UTF-8');
$__output .= '

<form method="post" class="xenForm" action="' . XenForo_Template_Helper_Core::link('account/two-step/manage', false, array()) . '">
	<dl class="ctrlUnit">
		<dt>' . 'Backup Codes' . ':</dt>
		<dd>
			<ul class="twoColumnList">
			';
foreach ($usedCodes AS $code)
{
$__output .= '
				<li><div style="text-decoration: line-through">' . htmlspecialchars($code, ENT_QUOTES, 'UTF-8') . '</div></li>
			';
}
$__output .= '
			';
foreach ($availableCodes AS $code)
{
$__output .= '
				<li><div>' . htmlspecialchars($code, ENT_QUOTES, 'UTF-8') . '</div></li>
			';
}
$__output .= '
			</ul>
			<p class="explain">' . 'Each of these codes can be used once in case you don\'t have access to other means of verification. These codes should be saved in a secure location.' . '</p>
		</dd>
	</dl>

	<dl class="ctrlUnit">
		<dt></dt>
		<dd><ul>
			<li>
				<label><input type="checkbox" name="regen" value="1" /> ' . 'Generate new backup codes' . '</label>
				<p class="explain">' . 'This will generate new backup codes. All previous backup codes will no longer work.' . '</p>
			</li>
		</ul></dd>
	</dl>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" name="save" value="' . 'Confirm Regeneration' . '" accesskey="s" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="provider" value="' . htmlspecialchars($providerId, ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfConfirm" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
