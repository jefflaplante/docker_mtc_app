<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($topDonations)
{
$__output .= '
	';
$this->addRequiredExternal('css', 'Aayush_PD_list_simple');
$__output .= '
	<div class="section topDonations">
		<div class="secondaryContent">
			<h3>' . 'Top Donations' . '</h3>
			<ul>
			';
foreach ($topDonations AS $donation)
{
$__output .= '
				<li class="donationListItem" id="donation_id_' . htmlspecialchars($donation['donation_id'], ENT_QUOTES, 'UTF-8') . '">
					';
if ($donation['anonymous'])
{
$__output .= '
						<a class="avatar"><img src="' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/avatars/avatar_s.png" width="48" height="48" alt="' . 'Anonymous' . '"></a>
						<a class="username">' . 'Anonymous' . '</a>
					';
}
else
{
$__output .= '
						' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($donation,(true),array(
'user' => '$donation',
'size' => 's',
'img' => 'true'
),'')) . '
						<a href="' . XenForo_Template_Helper_Core::link('members', $donation, array()) . '" class="username">' . htmlspecialchars($donation['username'], ENT_QUOTES, 'UTF-8') . '</a>
					';
}
$__output .= '
					
					<div class="additionalRow muted">
						' . htmlspecialchars($donation['amount'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($donation['currency'], ENT_QUOTES, 'UTF-8') . '
					</div>
				</li>
			';
}
$__output .= '
			</ul>
		</div>
	</div>
';
}
