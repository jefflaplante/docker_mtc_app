<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($visitor['canDonate'] && !$xenOptions['PD_DisableDonations'])
{
$__output .= '
	';
$this->addRequiredExternal('css', 'Aayush_PD');
$__output .= '
	
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
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('donate', false, array()) . '">' . 'Donate' . '</a></h3>
			<div class="minorHeading donationNote">
				' . 'Goal amount for this month' . ': ' . htmlspecialchars($xenOptions['PD_GoalAmount'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($xenOptions['PD_Currency'], ENT_QUOTES, 'UTF-8') . ', ' . 'Received' . ': ' . htmlspecialchars($donationReceived, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($xenOptions['PD_Currency'], ENT_QUOTES, 'UTF-8') . ' (' . htmlspecialchars($receivedPercent, ENT_QUOTES, 'UTF-8') . '%)
			</div>
			
			<div class="ProgressMeter">
				<span class="ProgressGraphic" style="width:' . htmlspecialchars($receivedPercent, ENT_QUOTES, 'UTF-8') . '%;">&nbsp;</span><span class="ProgressCounter">' . htmlspecialchars($receivedPercent, ENT_QUOTES, 'UTF-8') . '%</span>
			</div>
			
			<a href="' . XenForo_Template_Helper_Core::link('donate', false, array()) . '#donateForm" class="donateButton"><img src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" alt="' . 'Donate' . '" /></a>
		</div>
		
	</div>
';
}
