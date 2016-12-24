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
$this->addRequiredExternal('css', 'Aayush_PD');
$__output .= '
';
$__compilerVar1 = '';
$this->addRequiredExternal('css', 'Aayush_PD');
$__compilerVar1 .= '

<script type="text/javascript">
$(function()
{
	$(\'.donateButton img\').click(function(e)
	{
		var $ctrl = $(this),
		$form = $ctrl.closest(\'form\');
			
		$form.submit();
	});
	
	';
if ($xenOptions['PD_AllowCustomAmount'])
{
$__compilerVar1 .= '
	$(\'#ctrl_amount\').change(function() 
	{
		if ($(this).val() == \'custom\')
		{
			$(\'#custom_amount\').css(\'display\', \'inline-block\');
		}
		else
		{
			$(\'#custom_amount\').css(\'display\', \'none\');
		}
	});
	';
}
$__compilerVar1 .= '
});
</script>

';
$donationReceived = '';
$__compilerVar2 = '';
$donationReceived .= $this->callTemplateCallback('Aayush_PaypalDonate_Helper', 'getDonationReceived', $__compilerVar2, array());
unset($__compilerVar2);
$__compilerVar1 .= '
';
$receivedPercent = '';
$receivedPercent .= XenForo_Template_Helper_Core::numberFormat((($donationReceived / $xenOptions['PD_GoalAmount']) * 100), '0');
$__compilerVar1 .= '

';
if ($receivedPercent > 100)
{
$__compilerVar1 .= '
	';
$receivedPercent = '';
$receivedPercent .= '100';
$__compilerVar1 .= '
';
}
$__compilerVar1 .= '
	
<div class="DonationGoal section">	
	<h2 class="heading">' . (($xenOptions['PD_GoalTitle']) ? (htmlspecialchars($xenOptions['PD_GoalTitle'], ENT_QUOTES, 'UTF-8')) : ('Donation Goal')) . '</h2>
	<div class="section">
		<blockquote class="baseHtml donationNote">' . 'Goal amount for this month' . ': ' . htmlspecialchars($xenOptions['PD_GoalAmount'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($xenOptions['PD_Currency'], ENT_QUOTES, 'UTF-8') . ', ' . 'Received' . ': ' . htmlspecialchars($donationReceived, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($xenOptions['PD_Currency'], ENT_QUOTES, 'UTF-8') . ' (' . htmlspecialchars($receivedPercent, ENT_QUOTES, 'UTF-8') . '%)</blockquote>
		
		<div class="ProgressMeter">
			<span class="ProgressGraphic" style="width:' . htmlspecialchars($receivedPercent, ENT_QUOTES, 'UTF-8') . '%;">&nbsp;</span><span class="ProgressCounter">' . htmlspecialchars($receivedPercent, ENT_QUOTES, 'UTF-8') . '%</span>
		</div>
		
		<h2 class="textHeading">' . 'Please choose from the options below...' . '</h2>
		
		<form id="donateForm" action="' . XenForo_Template_Helper_Core::link('donations/donate', false, array()) . '" method="post" class="xenForm AutoValidator" data-redirect="on">
			<dl class="ctrlUnit">
				<dt><label for="ctrl_amount">' . 'Amount' . ':</label></dt>
				<dd>
					<select name="amount" class="textCtrl autoSize" id="ctrl_amount" >
					';
foreach ($amounts AS $amount)
{
$__compilerVar1 .= '
						<option value="' . htmlspecialchars($amount, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($amount, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($xenOptions['PD_Currency'], ENT_QUOTES, 'UTF-8') . '</option>
					';
}
$__compilerVar1 .= '	
					';
if ($xenOptions['PD_AllowCustomAmount'])
{
$__compilerVar1 .= '
						<option value="custom">' . 'Custom' . '</option>
					';
}
$__compilerVar1 .= '				
					</select>
					
					';
if ($xenOptions['PD_AllowCustomAmount'])
{
$__compilerVar1 .= '
						<span id="custom_amount">
							<input type="text" class="textCtrl" size="5" name="custom_amount" /> <span class="textCtrl">' . htmlspecialchars($xenOptions['PD_Currency'], ENT_QUOTES, 'UTF-8') . '</span>
						</span>
					';
}
$__compilerVar1 .= '
				</dd>
			</dl>
			
			<dl class="ctrlUnit">
				<dt><label for="ctrl_note">' . 'Note' . ':</label><dfn>' . 'Optional' . '</dfn></dt>
				<dd><textarea rows="2" name="note" id="ctrl_note" class="textCtrl"></textarea></dd>
			</dl>
			
			<dl class="ctrlUnit">
				<dt><label for="ctrl_anonymous">' . 'Anonymous' . ':</label></dt>
				<dd><input type="checkbox" name="anonymous" value="1" id="ctrl_anonymous" /> </dd>
			</dl>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			
			<dl class="ctrlUnit">
				<dt></dt>
				<dd><a class="donateButton"><img src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" alt="' . 'Donate' . '" /></a></dd>
			</dl>
		</form>
	</div>
</div>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
' . '

';
$__extraData['sidebar'] = '';
$__extraData['sidebar'] .= '
	';
$__compilerVar3 = '';
if ($topDonations)
{
$__compilerVar3 .= '
	';
$this->addRequiredExternal('css', 'Aayush_PD_list_simple');
$__compilerVar3 .= '
	<div class="section topDonations">
		<div class="secondaryContent">
			<h3>' . 'Top Donations' . '</h3>
			<ul>
			';
foreach ($topDonations AS $donation)
{
$__compilerVar3 .= '
				<li class="donationListItem" id="donation_id_' . htmlspecialchars($donation['donation_id'], ENT_QUOTES, 'UTF-8') . '">
					';
if ($donation['anonymous'])
{
$__compilerVar3 .= '
						<a class="avatar"><img src="' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/avatars/avatar_s.png" width="48" height="48" alt="' . 'Anonymous' . '"></a>
						<a class="username">' . 'Anonymous' . '</a>
					';
}
else
{
$__compilerVar3 .= '
						' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($donation,(true),array(
'user' => '$donation',
'size' => 's',
'img' => 'true'
),'')) . '
						<a href="' . XenForo_Template_Helper_Core::link('members', $donation, array()) . '" class="username">' . htmlspecialchars($donation['username'], ENT_QUOTES, 'UTF-8') . '</a>
					';
}
$__compilerVar3 .= '
					
					<div class="additionalRow muted">
						' . htmlspecialchars($donation['amount'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($donation['currency'], ENT_QUOTES, 'UTF-8') . '
					</div>
				</li>
			';
}
$__compilerVar3 .= '
			</ul>
		</div>
	</div>
';
}
$__extraData['sidebar'] .= $__compilerVar3;
unset($__compilerVar3);
$__extraData['sidebar'] .= '
	' . '
';
