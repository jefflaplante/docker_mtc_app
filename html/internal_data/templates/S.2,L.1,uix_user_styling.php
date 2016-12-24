<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<style>
/* User specific styling */

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_widthToggle') && XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') > 100)
{
$__output .= '
		.pageWidth {
			';
if (XenForo_Template_Helper_Core::numberFormat($visitor['uix_width'], '0') == 1 || (!$visitor['user_id'] && $xenOptions['uix_defaultWidth'] == 1))
{
$__output .= '
				max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_widthToggleFluid') . ';
			';
}
else
{
$__output .= '
				max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
			';
}
$__output .= '
		}
	
	
		.Menu.uix_megaMenu
		{
			';
if (XenForo_Template_Helper_Core::numberFormat($visitor['uix_width'], '0') == 1 || (!$visitor['user_id'] && $xenOptions['uix_defaultWidth'] == 1))
{
$__output .= '
				max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_widthToggleFluid') . ';
			';
}
else
{
$__output .= '
				max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
			';
}
$__output .= '
		}
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 2)
{
$__output .= '
		
			#uix_wrapper {
				';
if (XenForo_Template_Helper_Core::numberFormat($visitor['uix_width'], '0') == 1 || (!$visitor['user_id'] && $xenOptions['uix_defaultWidth'] == 1))
{
$__output .= '
					max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_widthToggleFluid') . ';
				';
}
else
{
$__output .= '
					max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
				';
}
$__output .= '
			}
			
			#uix_wrapper .activeSticky .pageWidth 
			{
				';
if (XenForo_Template_Helper_Core::numberFormat($visitor['uix_width'], '0') == 1 || (!$visitor['user_id'] && $xenOptions['uix_defaultWidth'] == 1))
{
$__output .= '
					max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_widthToggleFluid') . ';
				';
}
else
{
$__output .= '
					max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
				';
}
$__output .= '
			}
			.Menu.uix_megaMenu
			{
				';
if (XenForo_Template_Helper_Core::numberFormat($visitor['uix_width'], '0') == 1 || (!$visitor['user_id'] && $xenOptions['uix_defaultWidth'] == 1))
{
$__output .= '
					max-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_widthToggleFluid') - (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.padding-left') + XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.padding-right')) - (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.border-left-width') + XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.border-right-width'))) . 'px;
				';
}
else
{
$__output .= '
					max-width: calc(' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ' - ' . ((XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.padding-left') + XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.padding-right')) - (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.border-left-width') + XenForo_Template_Helper_Core::styleProperty('uix_pageStyle2_style.border-right-width'))) . 'px);
				';
}
$__output .= '
			}
			
			@media (max-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') + (2 * XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth'))) . 'px) {
				.Responsive #uix_wrapper, .Responsive #uix_wrapper .activeSticky .pageWidth, .Responsive .Menu.uix_megaMenu  {
					max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';
				}
			}
		';
}
$__output .= '
		
	';
}
$__output .= '
	
	';
if ($visitor['user_id'])
{
$__output .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapseSticky') && $uix_collapseStickyThreads)
{
$__output .= '
			.uix_stickyThreads {
				display: none;
			}
		';
}
$__output .= '
		
		';
if ($visitor['uix_sidebar'] > $uix_currentTimestamp)
{
$__output .= '
			.uix_mainSidebar {
				display: none;
			}
			
			
			.mainContainer .mainContent {
				margin-right: 0;
				margin-left: 0;
			}
			
		';
}
$__output .= '
	';
}
$__output .= '
	
	';
if ($xenOptions['uix_enableCollapseUserInfo'])
{
$__output .= '
	
		';
if (!$visitor['user_id'] || $visitor['uix_collapse_user_info'])
{
$__output .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_threadSlidingAvatar'))
{
$__output .= '
				@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint') . ') {
					.Responsive .messageList .messageUserBlock .avatarHolder {
						border-bottom-width: 0;
					}
				}
			
				@media (min-width: ' . XenForo_Template_Helper_Core::numberFormat((XenForo_Template_Helper_Core::numberFormat(XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint'), '0') + 1), '0') . 'px) {
					.messageList .messageUserBlock .avatarHolder {
						display: none;
					}
					
					.messageList .messageUserInfo .arrow span {
						border-left-color: ' . XenForo_Template_Helper_Core::styleProperty('messageUserText.background-color') . ';
						-webkit-transition: border-left-color 0.15s;
						-ms-transition: border-left-color 0.15s;
						-moz-transition: border-left-color 0.15s;
						transition: border-left-color 0.15s;
					}
					
					.messageList .messageUserInfo .expanded .arrow span {
						border-left-color: ' . XenForo_Template_Helper_Core::styleProperty('messageAvatarHolder.background-color') . ';
					}
					
					.messageList .quickReply .messageUserBlock .avatarHolder {
						display: block;
						border-bottom-width: 0;
					}
					
					.messageList .quickReply .messageUserInfo .arrow span {
						border-left-color: ' . XenForo_Template_Helper_Core::styleProperty('messageAvatarHolder.background-color') . ';
					}
			
					.messageList .uix_noCollapseMessage .avatarHolder,
					.messageList .message.deleted .avatarHolder {
						display: block;
					}
						
					.messageList .uix_noCollapseMessage .arrow span,
					.messageList .message.deleted .arrow span {
						border-left-color: ' . XenForo_Template_Helper_Core::styleProperty('messageAvatarHolder.background-color') . ';
					}
				}
			';
}
$__output .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_threadSlidingExtra'))
{
$__output .= '
				.messageList .messageUserBlock .extraUserInfo {
					display: none;
				}
			
				@media (min-width: ' . XenForo_Template_Helper_Core::numberFormat((XenForo_Template_Helper_Core::numberFormat(XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint'), '0') + 1), '0') . 'px) {
					.messageList .uix_noCollapseMessage .extraUserInfo,
					.messageList .message.deleted .extraUserInfo {
						display: block;
					}
				}
			';
}
$__output .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_threadSlidingAvatar') || XenForo_Template_Helper_Core::styleProperty('uix_threadSlidingExtra'))
{
$__output .= '
				@media (min-width: ' . XenForo_Template_Helper_Core::numberFormat((XenForo_Template_Helper_Core::numberFormat(XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint'), '0') + 1), '0') . 'px) {
					.messageList .message .uix_threadSlide {
						display: block;
					}
					
					.messageList .message.uix_noCollapseMessage .uix_threadSlide {
						display: none;
					}
				}
			';
}
$__output .= '
		';
}
$__output .= '
	';
}
$__output .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_signatureHidingEnabled') && $xenOptions['uix_enableCollapseSignature'])
{
$__output .= '
		';
if ($visitor['user_id'] > 0 && $visitor['uix_collapse_signature'] == 0)
{
$__output .= '
			li.message .signature .uix_signatureWrapperInner
			{
				max-height: none;
			}
			
			li.message .signature .uix_signatureCover,
			li.message .uix_signatureToggle
			{
				display: none;
			}
		';
}
$__output .= '
	';
}
$__output .= '	

</style>';
