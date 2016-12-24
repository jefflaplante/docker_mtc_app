<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<div id="logoBlock">
	<div class="pageWidth">
		<div class="pageContent">
		
		        ';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_header_enable_members'))
{
$__output .= '
			';
if ($visitor['user_id'])
{
$__output .= '
                        <span class="xc_enable_header_enable_members_text">' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_members') . '</span>
                        ';
}
$__output .= '
                        ';
}
$__output .= '
                        
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_header_enable_guest'))
{
$__output .= '
			';
if (!$visitor['user_id'])
{
$__output .= '
                        <span class="xc_enable_header_enable_guest">' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_guest') . '</span>
                        ';
}
$__output .= '
                        ';
}
$__output .= '
		        
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
			<div id="logo"><a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
			
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_icon_before_logo'))
{
$__compilerVar3 .= '<span class="xc_icon_before_logo_fa">' . XenForo_Template_Helper_Core::styleProperty('xc_icon_before_logo_fa') . '</span>';
}
$__compilerVar3 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_text_logo'))
{
$__compilerVar3 .= '<span class="xc_logo_text">' . XenForo_Template_Helper_Core::styleProperty('xc_logo_text') . '</span>
			';
}
else
{
$__compilerVar3 .= '
			
				<span></span>
				<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
			</a>
			';
}
$__compilerVar3 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_secondary_text_logo'))
{
$__compilerVar3 .= '<span class="xc_logo_secondary_text">' . XenForo_Template_Helper_Core::styleProperty('xc_logo_secondary_text') . '</span>';
}
$__compilerVar3 .= '
			
			</div>
			';
$__output .= $this->callTemplateHook('header_logo', $__compilerVar3, array());
unset($__compilerVar3);
$__output .= '
			<span class="helper"></span>
		</div>
	</div>
</div>';
