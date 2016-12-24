<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'Aayush_PD');
$__output .= '

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
$__output .= '
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
$__output .= '
});
</script>

';
$donationReceived = '';
$__compilerVar1 = '';
$donationReceived .= $this->callTemplateCallback('Aayush_PaypalDonate_Helper', 'getDonationReceived', $__compilerVar1, array());
unset($__compilerVar1);
$__output .= '
';
$receivedPercent = '';
$receivedPercent .= XenForo_Template_Helper_Core::numberFormat((($donationReceived / $xenOptions['PD_GoalAmount']) * 100), '0');
$__output .= '

';
if ($receivedPercent > 100)
{
$__output .= '
	';
$receivedPercent = '';
$receivedPercent .= '100';
$__output .= '
';
}
$__output .= '
	
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
$__output .= '
						<option value="' . htmlspecialchars($amount, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($amount, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($xenOptions['PD_Currency'], ENT_QUOTES, 'UTF-8') . '</option>
					';
}
$__output .= '	
					';
if ($xenOptions['PD_AllowCustomAmount'])
{
$__output .= '
						<option value="custom">' . 'Custom' . '</option>
					';
}
$__output .= '				
					</select>
					
					';
if ($xenOptions['PD_AllowCustomAmount'])
{
$__output .= '
						<span id="custom_amount">
							<input type="text" class="textCtrl" size="5" name="custom_amount" /> <span class="textCtrl">' . htmlspecialchars($xenOptions['PD_Currency'], ENT_QUOTES, 'UTF-8') . '</span>
						</span>
					';
}
$__output .= '
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
