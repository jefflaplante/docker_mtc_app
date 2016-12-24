<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($providerId)
{
$__output .= '
	';
$__extraData['title'] = '';
$__extraData['title'] .= 'Disable Two-Step Verification' . ': ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else
{
$__output .= '
	';
$__extraData['title'] = '';
$__extraData['title'] .= 'Disable Two-Step Verification';
$__output .= '
';
}
$__output .= '

<form method="post" class="xenForm formOverlay" action="' . XenForo_Template_Helper_Core::link('account/two-step/disable', false, array()) . '">

	';
if ($providerId)
{
$__output .= '
		<p>' . 'Are you sure you want to disable the two-step verification method \'' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '\'?' . '</p>
	';
}
else
{
$__output .= '
		<p>' . 'Are you sure you want to disable the two-step verification?' . '</p>
	';
}
$__output .= '

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" name="save" value="' . 'Confirm' . '" accesskey="s" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="provider" value="' . htmlspecialchars($providerId, ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfConfirm" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
