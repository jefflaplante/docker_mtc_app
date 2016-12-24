<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Two-Step Verification Setup' . ': ' . htmlspecialchars($provider['title'], ENT_QUOTES, 'UTF-8');
$__output .= '

<form method="post" class="xenForm ' . (($newProviderHtml) ? ('AutoValidator') : ('')) . '" action="' . XenForo_Template_Helper_Core::link('account/two-step/manage', false, array()) . '" data-redirect="yes">

	';
if ($newProviderHtml)
{
$__output .= '
		' . $newProviderHtml . '

		<dl class="ctrlUnit submitUnit">
			<dt></dt>
			<dd><input type="submit" name="save" value="' . 'Confirm' . '" accesskey="s" class="button primary" /></dd>
		</dl>

		<input type="hidden" name="confirm" value="1" />
	';
}
else
{
$__output .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><ul>
				<li>
					<label><input type="checkbox" name="regen" value="1" /> ' . 'Regenerate secret for a new device' . '</label>
					<p class="explain">' . 'This will regenerate the secret that will be used for verification in order to move the data to a new device. Once completed, codes generated using the old secret will no longer work.' . '</p>
				</li>
			</ul></dd>
		</dl>

		<dl class="ctrlUnit submitUnit">
			<dt></dt>
			<dd><input type="submit" name="save" value="' . 'Confirm' . '" accesskey="s" class="button primary" /></dd>
		</dl>
	';
}
$__output .= '

	<input type="hidden" name="provider" value="' . htmlspecialchars($providerId, ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfConfirm" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
