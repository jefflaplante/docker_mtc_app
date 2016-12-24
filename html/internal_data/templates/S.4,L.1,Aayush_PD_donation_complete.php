<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Thank you for your donation';
$__output .= '


<style type="text/css">
.donationComplete 
{
	text-align: center;
}
	.donationComplete > div 
	{
		font-size: 14px;
	}
</style>

<div class="section donationComplete">
	<div>' . 'Thank you very much for your support.' . '</div>
	';
if ($donation['confirmed'] == 0)
{
$__output .= '
		<div>' . 'We will update your status as soon as we confirm your donation. Please be patient.' . '</div>
	';
}
else
{
$__output .= '
		<div>' . 'Your payment of ' . htmlspecialchars($donation['amount'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($donation['currency'], ENT_QUOTES, 'UTF-8') . ' is complete.' . '</div>
	';
}
$__output .= '
	
	<br />
	<div>Transaction Id: <span class="muted">' . htmlspecialchars($transactionId, ENT_QUOTES, 'UTF-8') . '</span></div>
</div>';
