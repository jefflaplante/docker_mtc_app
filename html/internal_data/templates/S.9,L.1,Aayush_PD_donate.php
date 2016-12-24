<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Donate';
$__output .= '
';
$__extraData['pageDescription'] = array();
$__extraData['pageDescription']['content'] = '';
$__extraData['pageDescription']['content'] .= htmlspecialchars($xenOptions['PD_GoalDescription'], ENT_QUOTES, 'UTF-8');
$__output .= '

';
$sandbox = '';
$sandbox .= htmlspecialchars($xenOptions['PD_Sandbox']['enabled'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
$payPalUrl = '';
$payPalUrl .= 'https://www.' . (($sandbox) ? ('sandbox.') : ('')) . 'paypal.com/cgi-bin/websrc';
$__output .= '

<form action="' . htmlspecialchars($payPalUrl, ENT_QUOTES, 'UTF-8') . '" method="post" class="xenForm formOverlay">
	<dl class="ctrlUnit">
		<dt>' . 'Amount' . ':</dt>
		<dd class="dimmed">' . htmlspecialchars($donation['amount'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($donation['currency'], ENT_QUOTES, 'UTF-8') . '</dd>
	</dl>
	
	<dl class="ctrlUnit">
		<dt>' . 'Note' . ':</dt>
		<dd class="dimmed">' . htmlspecialchars($donation['note'], ENT_QUOTES, 'UTF-8') . '</dd>
	</dl>
	
	<dl class="ctrlUnit">
		<dt>' . 'Anonymous' . ':</dt>
		<dd class="dimmed">' . (($donation['anonymous']) ? ('Yes') : ('No')) . '</dd>
	</dl>

	<input type="hidden" name="cmd" value="_xclick" />
	<input type="hidden" name="amount" value="' . htmlspecialchars($donation['amount'], ENT_QUOTES, 'UTF-8') . '" />
		
	<dl class="ctrlUnit submitUnit">	
		<dt></dt>				
		<dd><input type="submit" value="' . 'Donate via PayPal' . ' (' . htmlspecialchars($donation['amount'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($donation['currency'], ENT_QUOTES, 'UTF-8') . ')" class="primary button" /></dd>
	</dl>
	
	';
if ($sandbox)
{
$__output .= '
		<input type="hidden" name="test_ipn" value="1" />
	';
}
$__output .= '
	
	<input type="hidden" name="business" value="' . (($sandbox) ? (htmlspecialchars($xenOptions['PD_Sandbox']['email'], ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($xenOptions['PD_PaypalEmailAddress'], ENT_QUOTES, 'UTF-8'))) . '" />
	<input type="hidden" name="currency_code" value="' . htmlspecialchars($donation['currency'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="item_name" value="' . 'Donation to Support ' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '' . ' (' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . ':' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . ')" />
	<input type="hidden" name="quantity" value="1" />
	<input type="hidden" name="no_note" value="1" />
	<input type="hidden" name="no_shipping" value="1" />
	<input type="hidden" name="custom" value="' . htmlspecialchars($donation['donation_id'], ENT_QUOTES, 'UTF-8') . '" />
	
	<input type="hidden" name="charset" value="utf-8" />
	<input type="hidden" name="email" value="' . htmlspecialchars($visitor['email'], ENT_QUOTES, 'UTF-8') . '" />
	
	<input type="hidden" name="return" value="' . XenForo_Template_Helper_Core::link('full:donations/complete', false, array()) . '" />
	<input type="hidden" name="cancel_return" value="' . XenForo_Template_Helper_Core::link('full:donate', false, array()) . '" />
	<input type="hidden" name="notify_url" value="' . htmlspecialchars($xenOptions['boardUrl'], ENT_QUOTES, 'UTF-8') . '/donate_callback.php" />
</form>';
