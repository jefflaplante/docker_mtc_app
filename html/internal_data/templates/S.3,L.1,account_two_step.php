<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Two-Step Verification';
$__output .= '

';
$this->addRequiredExternal('css', 'account');
$__output .= '
';
$this->addRequiredExternal('css', 'account_two_step');
$__output .= '

<p class="muted">' . 'Two-step verification increases the security of your account by requiring you to provide an additional code to complete the login process. If your password is ever compromised, this verification will help prevent unauthorized access to your account.' . '</p>

';
if ($backupAdded)
{
$__output .= '
	<div class="importantMessage">
		' . 'Verification backup codes have automatically been generated. Each of these codes can be used once in case you don\'t have access to other means of verification. These codes should be saved in a secure location.' . ' <a href="' . XenForo_Template_Helper_Core::link('account/two-step/manage', 'null', array(
'provider' => 'backup'
)) . '">' . 'View your backup codes.' . '</a>
	</div>
';
}
$__output .= '

<div class="section">
	<h3 class="subHeading">' . 'Two-Step Verification Methods' . '</h3>
	<ul>
	';
foreach ($providers AS $provider)
{
$__output .= '
		<li class="primaryContent twoStepProvider ' . (($provider['enabled']) ? ('enabled') : ('')) . '">
			<div class="twoStepButtonContainer">
				';
if ($provider['canEnable'])
{
$__output .= '
					<form action="' . XenForo_Template_Helper_Core::link('account/two-step/enable', false, array()) . '" method="post">
						<input type="submit" value="' . 'Enable' . '" class="button" />
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						<input type="hidden" name="provider" value="' . htmlspecialchars($provider['provider_id'], ENT_QUOTES, 'UTF-8') . '" />
					</form>
				';
}
$__output .= '
				';
if ($provider['canDisable'])
{
$__output .= '
					<a href="' . XenForo_Template_Helper_Core::link('account/two-step/disable', '', array(
'provider' => $provider['provider_id']
)) . '" class="OverlayTrigger button">' . 'Disable' . '</a>
				';
}
$__output .= '
				';
if ($provider['canManage'])
{
$__output .= '
					<a href="' . XenForo_Template_Helper_Core::link('account/two-step/manage', '', array(
'provider' => $provider['provider_id']
)) . '" class="button">' . 'Manage' . '</a>
				';
}
$__output .= '
			</div>
			
			<h3 class="twoStepTitle">' . htmlspecialchars($provider['title'], ENT_QUOTES, 'UTF-8') . '</h3>
			<div class="twoStepDescription">' . htmlspecialchars($provider['description'], ENT_QUOTES, 'UTF-8') . '</div>
		</li>
	';
}
$__output .= '
	</ul>
	';
if ($visitor['use_tfa'])
{
$__output .= '
		<div class="sectionFooter"><a href="' . XenForo_Template_Helper_Core::link('account/two-step/disable', false, array()) . '" class="button OverlayTrigger">' . 'Disable Two-Step Verification' . '</a></div>
	';
}
$__output .= '
</div>

';
if ($trustedRecord OR $otherDevicesTrusted)
{
$__output .= '
	<div class="section">
		<h3 class="subHeading">' . 'Trusted Devices' . '</h3>
		';
if ($trustedRecord)
{
$__output .= '
			<div class="primaryContent twoStepDisableTrustContainer">
				<form action="' . XenForo_Template_Helper_Core::link('account/two-step/trusted-disable', false, array()) . '" method="post">
					<input type="submit" value="' . 'Stop trusting this device' . '" class="button twoStepDisableTrustButton" />
					<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
					<input type="hidden" name="provider" value="' . htmlspecialchars($provider['provider_id'], ENT_QUOTES, 'UTF-8') . '" />
				</form>
				' . 'This device is currently trusted until ' . XenForo_Template_Helper_Core::datetime($trustedRecord['trusted_until'], '') . '. You will not need to complete two-step verification from this device until then. You may choose to stop trusting this device so that you will be prompted to complete two-step verification when you next log in.' . '
			</div>
		';
}
$__output .= '
		';
if ($otherDevicesTrusted)
{
$__output .= '
			<div class="primaryContent twoStepDisableTrustContainer">
				<form action="' . XenForo_Template_Helper_Core::link('account/two-step/trusted-disable', false, array()) . '" method="post">
					<input type="submit" value="' . 'Stop trusting other devices' . '" class="button twoStepDisableTrustButton" />
					<input type="hidden" name="others" value="1" />
					<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
					<input type="hidden" name="provider" value="' . htmlspecialchars($provider['provider_id'], ENT_QUOTES, 'UTF-8') . '" />
				</form>
				' . 'Other devices are currently trusted. You will not be prompted to complete two-step verification from these devices. If you have lost access to a trusted device, it is recommended that you stop trusting these devices.' . '
				';
if ($trustedRecord)
{
$__output .= 'This device will remain trusted.';
}
$__output .= '
			</div>
		';
}
$__output .= '
	</div>
';
}
