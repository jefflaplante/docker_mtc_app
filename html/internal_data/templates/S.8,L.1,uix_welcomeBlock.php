<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<div class="uix_welcomeBlock_wrap">
	<div class="uix_welcomeBlock_content">
		<a href="#" class="close"></a>
		
		';
$__compilerVar1 = '';
$__compilerVar1 .= '
			';
if ($uix_welcomeBlockIcon_class)
{
$__compilerVar1 .= '<i class="uix_icon ' . htmlspecialchars($uix_welcomeBlockIcon_class, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar1 .= '
			';
if ($uix_welcomeBlockHeader_text)
{
$__compilerVar1 .= '<span>' . $uix_welcomeBlockHeader_text . '</span>';
}
$__compilerVar1 .= '
			';
if (trim($__compilerVar1) !== '')
{
$__output .= '

		<h3 class="uix_welcomeBlockHeader">
			' . $__compilerVar1 . '
		</h3>
		';
}
unset($__compilerVar1);
$__output .= '
		
		';
if ($uix_welcomeBlockMessage_text)
{
$__output .= '<p class="uix_welcomeBlockMessage">' . $uix_welcomeBlockMessage_text . '</p>';
}
$__output .= '
		';
if ($uix_welcomeBlockButton_url)
{
$__output .= '<a href="' . htmlspecialchars($uix_welcomeBlockButton_url, ENT_QUOTES, 'UTF-8') . '" class="callToAction"><span>' . htmlspecialchars($uix_welcomeBlockButton_text, ENT_QUOTES, 'UTF-8') . '</span></a>';
}
$__output .= '

	</div>
</div>';
