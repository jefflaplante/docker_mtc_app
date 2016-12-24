<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '/** Login bar basics **/

#loginBar .pageContent 
{
	' . XenForo_Template_Helper_Core::styleProperty('loginBar') . '
}

	

	#loginBar .pageContent
	{
		padding-top: ' . XenForo_Template_Helper_Core::styleProperty('loginBarCollapsedHeight') . ';
		position: relative;
		_height: 0px;
	}

	#loginBar a
	{
		' . XenForo_Template_Helper_Core::styleProperty('loginBarLink') . '
	}

	#loginBar form
	{
		' . XenForo_Template_Helper_Core::styleProperty('loginBarForm') . '
	}
	
		#loginBar .xenForm .ctrlUnit,		
		#loginBar .xenForm .ctrlUnit > dt label
		{
			margin: 0;
			border: none;
		}
	
		#loginBar .xenForm .ctrlUnit > dd
		{
			position: relative;
		}
	
	#loginBar .lostPassword,
	#loginBar .lostPasswordLogin
	{
		font-size: 11px;
	}
	
	#loginBar .rememberPassword
	{
		font-size: 11px;
	}

	#loginBar .textCtrl
	{
		' . XenForo_Template_Helper_Core::styleProperty('loginBarTextCtrl') . '
	}
	
	#loginBar .textCtrl[type=text]
	{
		' . XenForo_Template_Helper_Core::styleProperty('loginBarUsername') . '
	}

	#loginBar .textCtrl:-webkit-autofill /* http://code.google.com/p/chromium/issues/detail?id=1334#c35 */
	{
		background: ' . XenForo_Template_Helper_Core::styleProperty('loginBarTextCtrl.background-color') . ' !important;
		color: ' . XenForo_Template_Helper_Core::styleProperty('loginBarTextCtrl.color') . ';
	}

	#loginBar .textCtrl:focus
	{
		' . XenForo_Template_Helper_Core::styleProperty('loginBarTextCtrlFocus') . '
	}
	
	#loginBar input.textCtrl.disabled
	{
		' . XenForo_Template_Helper_Core::styleProperty('loginBarTextCtrlDisabled') . '
	}
	
	#loginBar .button
	{
		min-width: ' . XenForo_Template_Helper_Core::styleProperty('loginButtonWidth') . ';
		*width: ' . XenForo_Template_Helper_Core::styleProperty('loginButtonWidth') . ';
	}
	
		#loginBar .button.primary
		{
			font-weight: bold;
		}
		
/** changes when eAuth is present **/

#loginBar form.eAuth
{
	-x-max-width: ' . (500 + XenForo_Template_Helper_Core::styleProperty('eAuthButtonWidth') + 20) . 'px; /* normal width + 170px */
}

	#loginBar form.eAuth .ctrlWrapper
	{
		border-right: 1px dotted ' . XenForo_Template_Helper_Core::callHelper('rgba', array(
'0' => XenForo_Template_Helper_Core::styleProperty('loginBar.color'),
'1' => '.5'
)) . ';
		margin-right: ' . (XenForo_Template_Helper_Core::styleProperty('eAuthButtonWidth') + 20) . 'px;
		box-sizing: border-box;
	}

	#loginBar form.eAuth #eAuthUnit
	{
		position: absolute;
		top: 0px;
		right: 0;
		width: ' . XenForo_Template_Helper_Core::styleProperty('eAuthButtonWidth') . ';
	}

		#eAuthUnit li
		{
			margin-top: 10px;
			line-height: 0;
		}
	
/** handle **/

#loginBar #loginBarHandle label 
{
	' . XenForo_Template_Helper_Core::styleProperty('loginBarHandle') . '
}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ')
{
	.Responsive #loginBar form.eAuth .ctrlWrapper
	{
		border-right: none;
		margin-right: 0;
		padding-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
	}

	.Responsive #loginBar form.eAuth #eAuthUnit
	{
		position: static;
		width: ' . XenForo_Template_Helper_Core::styleProperty('eAuthButtonWidth') . ';
		margin: 0 auto;
	}
}
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
	.Responsive #loginBar .xenForm .ctrlUnit > dd {padding-left: 0; padding-right: 0;}
	.Responsive #loginBar form.eAuth #eAuthUnit {width: auto; margin-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . '; margin-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';}
}
';
}
$__output .= '
';
