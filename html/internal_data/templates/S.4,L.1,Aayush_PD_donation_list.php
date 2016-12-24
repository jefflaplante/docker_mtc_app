<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Donations';
$__output .= '
';
$__extraData['pageDescription'] = array();
$__extraData['pageDescription']['content'] = '';
$__extraData['pageDescription']['content'] .= 'List of all donations';
$__output .= '

';
$this->addRequiredExternal('css', 'Aayush_PD_donation_list');
$__output .= '

<div class="section">
	';
if ($donations)
{
$__output .= '
		<ol class="overlayScroll">
			';
foreach ($donations AS $donation)
{
$__output .= '
				<li class="primaryContent donationListItem">
					';
if ($donation['anonymous'])
{
$__output .= '
						<a class="avatar"><img src="' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/avatars/avatar_s.png" width="48" height="48" alt="' . 'Anonymous' . '"></a>
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
					';
}
$__output .= '
					
					<div class="donationInfo">
						<span class="dimmed" style="font-size:18px;">' . htmlspecialchars($donation['amount'], ENT_QUOTES, 'UTF-8') . '</span> 
						<span class="faint">' . htmlspecialchars($donation['currency'], ENT_QUOTES, 'UTF-8') . '</span>
					
						<div class="userInfo">
							';
if ($donation['anonymous'])
{
$__output .= '
								<a class="username">' . 'Anonymous' . '</a>';
if ($donation['note'])
{
$__output .= ',';
}
$__output .= '
							';
}
else
{
$__output .= '
								<a href="' . XenForo_Template_Helper_Core::link('members', $donation, array()) . '" class="username' . (($donation['user_id'] == 0) ? (' guest') : ('')) . '">' . htmlspecialchars($donation['username'], ENT_QUOTES, 'UTF-8') . '</a>';
if ($donation['note'])
{
$__output .= ',';
}
$__output .= '
							';
}
$__output .= '
							
							<span class="dimmed">' . htmlspecialchars($donation['note'], ENT_QUOTES, 'UTF-8') . '</span>
						</div>
					</div>
				</li>
			';
}
$__output .= '
		</ol>
	';
}
$__output .= '
	
	<div class="pageNavLinkGroup">
		' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($perPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($total, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'donations/list', false, array(), false, array())) . '
	</div>
</div>';
