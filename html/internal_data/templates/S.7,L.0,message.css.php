<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '

.messageList
{
	' . XenForo_Template_Helper_Core::styleProperty('messageList') . '
}

.messageList .message
{
	' . XenForo_Template_Helper_Core::styleProperty('sectionMain.margin') . '

	' . XenForo_Template_Helper_Core::styleProperty('message') . '
}

' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.messageList .message'
)) . '

/*** Message block ***/

.message .messageInfo
{
	' . XenForo_Template_Helper_Core::styleProperty('messageInfo') . '
	zoom: 1;
}

	.message .newIndicator
	{
		' . XenForo_Template_Helper_Core::styleProperty('messageNewIndicator') . '
		
		
	}
		

	.message .messageContent
	{
		' . XenForo_Template_Helper_Core::styleProperty('messageContent') . '
	}
	
	.message .messageTextEndMarker
	{
		height: 0;
		font-size: 0;
		overflow; hidden;
	}
	
	.message .editDate
	{
		text-align: right;
		margin-top: 5px;
		font-size: 11px;
		color: ' . XenForo_Template_Helper_Core::styleProperty('mutedTextColor') . ';
	}

	.message .signature
	{
		' . XenForo_Template_Helper_Core::styleProperty('messageSignature') . '
	}
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_signatureHidingEnabled') && $xenOptions['uix_enableCollapseSignature'])
{
$__output .= '
		.uix_signatureWrapper {
			position: relative;
			min-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_signatureExpandStyle.font-size') . ';
		}
		.uix_signatureWrapperInner {
			max-height: ' . XenForo_Template_Helper_Core::numberFormat(XenForo_Template_Helper_Core::styleProperty('uix_signatureMaxHeight'), '0') . 'px;
			transition: max-height 0.3s ease-in-out;
			overflow-y: hidden;
		}
		
		li.message .uix_signatureToggle .uix_signatureExpand,
		li.message.uix_signatureExpanded .uix_signatureToggle .uix_signatureCollapse {
			display: inline;
		}
		
		li.message.uix_signatureExpanded .uix_signatureToggle .uix_signatureExpand,
		li.message .uix_signatureToggle .uix_signatureCollapse {
			display: none;
		}
		
		.signature .uix_signatureCover
		{		
			display: none;
			opacity: 0;
			transition: opacity 0.3s ease-in-out;
			box-sizing: border-box;
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			padding-top: ' . (XenForo_Template_Helper_Core::numberFormat(XenForo_Template_Helper_Core::styleProperty('uix_signatureMaxHeight'), '0') / 3) . 'px;
			text-align: center;
			
			background: -webkit-linear-gradient(top, ' . XenForo_Template_Helper_Core::callHelper('rgba', array(
'0' => XenForo_Template_Helper_Core::styleProperty('message.background-color'),
'1' => '0'
)) . ' 0%, ' . XenForo_Template_Helper_Core::callHelper('unrgba', array(
'0' => XenForo_Template_Helper_Core::styleProperty('message.background-color')
)) . ' 80%);
			background: -moz-linear-gradient(top, ' . XenForo_Template_Helper_Core::callHelper('rgba', array(
'0' => XenForo_Template_Helper_Core::styleProperty('message.background-color'),
'1' => '0'
)) . ' 0%, ' . XenForo_Template_Helper_Core::callHelper('unrgba', array(
'0' => XenForo_Template_Helper_Core::styleProperty('message.background-color')
)) . ' 80%);
			background: -o-linear-gradient(top, ' . XenForo_Template_Helper_Core::callHelper('rgba', array(
'0' => XenForo_Template_Helper_Core::styleProperty('message.background-color'),
'1' => '0'
)) . ' 0%, ' . XenForo_Template_Helper_Core::callHelper('unrgba', array(
'0' => XenForo_Template_Helper_Core::styleProperty('message.background-color')
)) . ' 80%);
			background: linear-gradient(to bottom, ' . XenForo_Template_Helper_Core::callHelper('rgba', array(
'0' => XenForo_Template_Helper_Core::styleProperty('message.background-color'),
'1' => '0'
)) . ' 0%, ' . XenForo_Template_Helper_Core::callHelper('unrgba', array(
'0' => XenForo_Template_Helper_Core::styleProperty('message.background-color')
)) . ' 80%);
		}
		
		li.message .uix_signatureToggle {
			' . XenForo_Template_Helper_Core::styleProperty('uix_signatureExpandStyle') . '
		}
		
		.signature.uix_show .uix_signatureCover,
		.signature.uix_signatureExpanded.uix_show .uix_signatureCover
		{		
			display: block;
		}
			
		.signature.uix_signatureCut .uix_signatureCover
		{
			display: block;
			opacity: 1;
		}
			
		.signature.uix_signatureExpanded .uix_signatureCover
		{
			display: none;
			opacity: 0;
		}
		
		';
if (XenForo_Template_Helper_Core::numberFormat(XenForo_Template_Helper_Core::styleProperty('uix_signatureMaxHeight'), '0') > 0 && XenForo_Template_Helper_Core::styleProperty('uix_signatureTriggerHide') && XenForo_Template_Helper_Core::styleProperty('uix_signatureHoverEnabled'))
{
$__output .= '
		.NoTouch li.message .signature .uix_signatureToggle {
			display: none;
		}
		';
}
$__output .= '
		
		.NoJs .signature .uix_signatureWrapperInner,
		li.message.uix_noCollapseMessage .signature .uix_signatureWrapperInner
		{
			max-height: none;
		}
		
		.NoJs .signature .uix_signatureCover,
		.NoJs li.message .uix_signatureToggle,
		li.message.uix_noCollapseMessage .signature .uix_signatureCover,
		li.message.uix_noCollapseMessage .uix_signatureToggle
		{
			display: none;
		}
	';
}
else
{
$__output .= '
		.signature .uix_signatureCover,
		li.message .uix_signatureToggle
		{		
			display: none;
		}
	';
}
$__output .= '

	.message .messageMeta
	{
		' . XenForo_Template_Helper_Core::styleProperty('messageMeta') . '
	}

		.message .privateControls
		{
			' . XenForo_Template_Helper_Core::styleProperty('messagePrivateControls') . '
		}

		.message .publicControls
		{
			' . XenForo_Template_Helper_Core::styleProperty('messagePublicControls') . '
		}
		
			.message .privateControls .item
			{
				margin-right: 10px;
				float: left;
			}

				.message .privateControls .item:last-child
				{
					margin-right: 0;
				}

			.message .publicControls .item
			{
				margin-left: 10px;
				float: left;
			}
	
				.message .messageMeta .control
				{
					' . XenForo_Template_Helper_Core::styleProperty('messageMetaControl') . '
				}
				
					.message .messageMeta .control:focus
					{
						' . XenForo_Template_Helper_Core::styleProperty('messageMetaControlFocus') . '
					}
				
					.message .messageMeta .control:hover
					{
						' . XenForo_Template_Helper_Core::styleProperty('messageMetaControlHover') . '
					}
				
					.message .messageMeta .control:active
					{
						' . XenForo_Template_Helper_Core::styleProperty('messageMetaControlActive') . '
					}
	/*** multiquote +/- ***/
		
		
	
	';
$__compilerVar1 = '';
$__compilerVar1 .= '	.messageNotices li
	{
		' . XenForo_Template_Helper_Core::styleProperty('messageNotice') . '
	}
	
		.messageNotices .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			background: url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/xenforo-ui-sprite.png\') no-repeat 1000px 1000px;
		}
	
			.messageNotices .warningNotice .icon { background-position: -48px -32px; }		
			.messageNotices .deletedNotice .icon { background-position: -64px -32px; }		
			.messageNotices .moderatedNotice .icon {background-position: -32px -16px; }';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
	
	.message .likesSummary
	{
		' . XenForo_Template_Helper_Core::styleProperty('messageLikesSummary') . '
	}
	
	.message .messageText > *:first-child
	{
		margin-top: 0;
	}

/* inline moderation changes */

.InlineModChecked .messageUserBlock,
.InlineModChecked .messageInfo,
.InlineModChecked .messageNotices,
.InlineModChecked .bbCodeBlock .type,
.InlineModChecked .bbCodeBlock blockquote,
.InlineModChecked .attachedFiles .attachedFilesHeader,
.InlineModChecked .attachedFiles .attachmentList
{
	' . XenForo_Template_Helper_Core::styleProperty('inlineModChecked') . '
}

.InlineModChecked .messageUserBlock div.avatarHolder,
.InlineModChecked .messageUserBlock .extraUserInfo
{
	background: transparent;
}

.InlineModChecked .messageUserBlock .arrow span
{
	border-left-color: ' . XenForo_Template_Helper_Core::styleProperty('inlineMod') . ';
}

/* message list */

.messageList .newMessagesNotice
{
	margin: 10px auto;
	padding: 5px 10px;
	border-radius: 5px;
	border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLighter') . ';
	background: ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ' url(' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/gradients/category-23px-light.png) repeat-x top;
	font-size: 11px;
}

/* deleted / ignored message placeholder */

.messageList .message.placeholder
{
}

.messageList .placeholder .placeholderContent
{	
	overflow: hidden; zoom: 1;
	color: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightish') . ';
	font-size: 11px;
}

	.messageList .placeholder a.avatar
	{
		float: left;
		display: block;
	}
	
		.messageList .placeholder a.avatar img
		{
			display: block;
			width: 32px;
			height: 32px;
		}
	

/* messages remaining link */

.postsRemaining a,
a.postsRemaining
{
	font-size: 11px;
	color: ' . XenForo_Template_Helper_Core::styleProperty('mutedTextColor') . ';
}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ')
{
	.Responsive .message .newIndicator
	{
		margin-right: 0;
		border-top-right-radius: ' . XenForo_Template_Helper_Core::styleProperty('messageNewIndicator.border-top-left-radius') . ';
	}
	
		.Responsive .message .newIndicator span
		{
			display: none;
		}
}

@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint') . ')
{
	.Responsive .message .messageInfo
	{
		margin-left: 0;
		padding: 0 10px;
	}

	.Responsive .message .messageContent
	{
		min-height: 0;
	}	
	

	.Responsive .message .postNumber,
	.Responsive .message .authorEnd
	{
		display: none;
	}
	
	.Responsive .message .signature
	{
		display: none;
	}
	
	.Responsive .messageList .placeholder a.avatar
	{
		margin-right: 10px;
	}
}
';
}
