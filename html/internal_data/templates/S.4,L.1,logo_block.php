<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<div id="logoBlock">
	<div class="pageWidth">
		<div class="pageContent">
			';
$__compilerVar1 = '';
$__compilerVar2 = '';
$__compilerVar1 .= $this->callTemplateHook('ad_header', $__compilerVar2, array());
unset($__compilerVar2);
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
			';
$__compilerVar3 = '';
$__compilerVar3 .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('textLogo'))
{
$__compilerVar3 .= '
					<div id="logo"><a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '" class=\'textLogo\'>' . XenForo_Template_Helper_Core::styleProperty('textLogoValue') . '</a></div>
				';
}
else
{
$__compilerVar3 .= '
					<div id="logo"><a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
						<span></span>
						<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
					</a></div>
				';
}
$__compilerVar3 .= '
			';
$__output .= $this->callTemplateHook('header_logo', $__compilerVar3, array());
unset($__compilerVar3);
$__output .= '
			<span class="helper"></span>
		</div>
	</div>
</div>';
