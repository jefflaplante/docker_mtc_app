<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '

';
$uix_showWelcomeBlock_overRide = '';
$uix_showWelcomeBlock_overRide .= htmlspecialchars($uix_showWelcomeBlock, ENT_QUOTES, 'UTF-8');
$__output .= '


';
if (!XenForo_Template_Helper_Core::styleProperty('uix_useStyleProperties_welcomeBlock'))
{
$__output .= '
	
	';
$uix_showWelcomeBlock = '';
$uix_showWelcomeBlock .= htmlspecialchars($xenOptions['uix_enableWelcomeBlock'], ENT_QUOTES, 'UTF-8');
$__output .= '
	';
$uix_welcomeBlock_showAllTemplates = '';
$uix_welcomeBlock_showAllTemplates .= htmlspecialchars($xenOptions['uix_welcomeBlock_showAllTemplates'], ENT_QUOTES, 'UTF-8');
$__output .= '
	
	';
$uix_welcomeBlockButton_url = '';
$uix_welcomeBlockButton_url .= $xenOptions['uix_welcomeBlockButton_url'];
$__output .= '
	';
$uix_welcomeBlockButton_text = '';
$uix_welcomeBlockButton_text .= $xenOptions['uix_welcomeBlockButton_text'];
$__output .= '
	';
$uix_welcomeBlockHeader_text = '';
$uix_welcomeBlockHeader_text .= $xenOptions['uix_welcomeBlockHeader_text'];
$__output .= '
	';
$uix_welcomeBlockMessage_text = '';
$uix_welcomeBlockMessage_text .= $xenOptions['uix_welcomeBlockMessage_text'];
$__output .= '
	';
$uix_welcomeBlockIcon_class = '';
$uix_welcomeBlockIcon_class .= $xenOptions['uix_welcomeBlockIcon_class'];
$__output .= '
	

';
}
else
{
$__output .= '


	';
$uix_showWelcomeBlock = '';
$uix_showWelcomeBlock .= XenForo_Template_Helper_Core::styleProperty('uix_showWelcomeBlock');
$__output .= '
	';
$uix_welcomeBlock_showAllTemplates = '';
$uix_welcomeBlock_showAllTemplates .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_showAllTemplates');
$__output .= '
	
	';
$uix_welcomeBlockButton_url = '';
$uix_welcomeBlockButton_url .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockButton_url');
$__output .= '
	';
$uix_welcomeBlockButton_text = '';
$uix_welcomeBlockButton_text .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockButton_text');
$__output .= '
	';
$uix_welcomeBlockHeader_text = '';
$uix_welcomeBlockHeader_text .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockHeader_text');
$__output .= '
	';
$uix_welcomeBlockMessage_text = '';
$uix_welcomeBlockMessage_text .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockMessage_text');
$__output .= '
	';
$uix_welcomeBlockIcon_class = '';
$uix_welcomeBlockIcon_class .= XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlockIcon_class');
$__output .= '

';
}
$__output .= '



';
$uix_boolean_welcomeBlock = '';
$uix_boolean_welcomeBlock .= (($uix_showWelcomeBlock_overRide || ($uix_showWelcomeBlock && !$uix_hideWelcomeBlock && $uix_canViewWelcomeBlock && ($contentTemplate == ('forum_list') || $uix_welcomeBlock_showAllTemplates))) ? ('1') : ('0'));
$__output .= '

';
if ($uix_boolean_welcomeBlock)
{
$__output .= '
	';
$this->addRequiredExternal('css', 'uix_welcomeBlock');
$__output .= '
	<div id="uix_welcomeBlock" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_showWelcomeBlock_fixed')) ? ('uix_welcomeBlock_fixed') : ('')) . '"> 
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_welcomeBlock_custom'))
{
$__output .= '
			';
$__compilerVar1 = '';
$__compilerVar1 .= '<div class="uix_welcomeBlock_wrap">
	<div class="uix_welcomeBlock_content">
		<a href="#" class="close"></a>
		
		';
$__compilerVar2 = '';
$__compilerVar2 .= '
			';
if ($uix_welcomeBlockIcon_class)
{
$__compilerVar2 .= '<i class="uix_icon ' . htmlspecialchars($uix_welcomeBlockIcon_class, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar2 .= '
			';
if ($uix_welcomeBlockHeader_text)
{
$__compilerVar2 .= '<span>' . $uix_welcomeBlockHeader_text . '</span>';
}
$__compilerVar2 .= '
			';
if (trim($__compilerVar2) !== '')
{
$__compilerVar1 .= '

		<h3 class="uix_welcomeBlockHeader">
			' . $__compilerVar2 . '
		</h3>
		';
}
unset($__compilerVar2);
$__compilerVar1 .= '
		
		';
if ($uix_welcomeBlockMessage_text)
{
$__compilerVar1 .= '<p class="uix_welcomeBlockMessage">' . $uix_welcomeBlockMessage_text . '</p>';
}
$__compilerVar1 .= '
		';
if ($uix_welcomeBlockButton_url)
{
$__compilerVar1 .= '<a href="' . htmlspecialchars($uix_welcomeBlockButton_url, ENT_QUOTES, 'UTF-8') . '" class="callToAction"><span>' . htmlspecialchars($uix_welcomeBlockButton_text, ENT_QUOTES, 'UTF-8') . '</span></a>';
}
$__compilerVar1 .= '

	</div>
</div>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
		';
}
else
{
$__output .= '
			' . '
		';
}
$__output .= '
	</div>
';
}
$__output .= '	';
