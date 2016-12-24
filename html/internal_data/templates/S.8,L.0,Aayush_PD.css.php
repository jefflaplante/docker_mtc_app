<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.DonationGoal #custom_amount {
	display: none;
}

.DonationGoal h2.heading 
{
	margin-bottom: 0px;
}

.DonationGoal .section 
{
	margin-top:0px;
	border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
	padding:10px;
	padding-top: 5px;
}

.DonationGoal .donateButton
{
	cursor: pointer;
}

.sidebar .DonationGoal .donateButton 
{
	display: block;
	margin-top: 10px;
}

.sidebar .DonationGoal .donateButton img
{
	display: block;
	margin: 0px auto;
}

.donationNote 
{
	margin-bottom: 5px;	
}
		
.DonationGoal .ProgressMeter
{
	display: block;
	padding: 2px;
	border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . ';
	border-radius: 4px;
	background-color: ' . XenForo_Template_Helper_Core::styleProperty('content.background-color') . ';
	margin-right: 0px
	margin-top: 4px;
	font-size: 14pt;
	line-height: 26px;
	position: relative;
}
	
	.DonationGoal .ProgressMeter .ProgressGraphic
	{
		display: inline-block;
		width: 0%;
		height: 26px;
		background: ' . XenForo_Template_Helper_Core::styleProperty('primaryLight') . ' url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/gradients/category-23px-light.png\') repeat-x top;
		text-align: right;
	}
	
	.DonationGoal .ProgressMeter .ProgressCounter
	{
		display: block;
		height: 26px;
		padding: 0px;
		position: absolute;
  		top: 0px;
  		left: 49%;
  		text-align: center;
  		width: 100%;
  		left: 0px;
	}
	
	.DonationGoal .ProgressMeter .ProgressGraphic .ProgressCounter
	{
		color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightest') . ';
	}
	
.Responsive .DonationGoal .xenForm .ctrlUnit > dd .textCtrl[size], .Responsive .DonationGoal .xenForm .ctrlUnit > dd .textCtrl.autoSize 
{
	width: auto !important;
}';
