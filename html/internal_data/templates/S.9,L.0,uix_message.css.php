<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '


' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.message .privateControls'
)) . '
' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.message .publicControls'
)) . '

.message .messageInfo {
	margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('messageUserInfo.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') + 10) . 'px;
	' . ((XenForo_Template_Helper_Core::styleProperty('messageInfo.margin-left')) ? ('margin-left: ' . XenForo_Template_Helper_Core::styleProperty('messageInfo.margin-left') . ';') : ('')) . '
}

#QuickReply {
	margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('messageUserInfo.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') + 10) . 'px;
}

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
	#QuickReply .submitUnit {
		display: flex;
		margin: 5px -5px 0;
		flex-wrap: wrap;
	}
	#QuickReply .submitUnit > *,
	#QuickReply .insertQuotes {
	    margin: 5px !important;
	    flex: 1 0 150px;
	}
	
	#QuickReply #ctrl_uploader {width: 100%;}
	#QuickReply #AttachmentUploader {position: relative;}
	#QuickReply .swfupload {top: 0 !important;}
	
	#QuickReply .submitUnit .button.primary {
		order: -1;
	}
}

.messageUserBlock div.uix_avatarHolderInner {
	position: relative;
	text-align: center;
	margin: 0 auto;
}

.message.placeholder .messageContent { min-height: 0; }


		

	.hasFlexbox .messageList .uix_message {
		display: -ms-flexbox; /* 2012 syntax for IE10 */
	        display: -webkit-flex;
	        display: flex;
	        
	        ';
if (XenForo_Template_Helper_Core::styleProperty('uix_stretchPostbit'))
{
$__output .= '
	        
	        -ms-flex-align: stretch; /* 2012 syntax for IE10 */
		-webkit-align-items: stretch;
		align-items: stretch;
		
		';
}
else
{
$__output .= '
		
		-ms-flex-align: start; /* 2012 syntax for IE10 */
		-webkit-align-items: flex-start;
		align-items: flex-start;
		
		';
}
$__output .= '
	}
	
	.hasFlexbox .messageList .placeholder .placeholderContent {
		display: -ms-flexbox; /* 2012 syntax for IE10 */
	        display: -webkit-flex;
	        display: flex;
	}
	
	.hasFlexbox .messageList .placeholder a.avatar {
		-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
		-webkit-flex: 0 0 auto;
		flex: 0 0 auto;	
	}
	
	.hasFlexbox .message .messageUserInfo {
		-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
		-webkit-flex: 0 0 auto;
		flex: 0 0 auto;
	}
	
	.hasFlexbox .message .messageInfo {
		display: -ms-flexbox; /* 2012 syntax for IE10 */
	        display: -webkit-flex;
	        display: flex;
	        -ms-flex-direction: column; /* 2012 syntax for IE10 */
	        -webkit-flex-direction: column;
	        flex-direction: column;
		
		-ms-flex: 1 1 100%; /* 2012 syntax for IE10 */
		-webkit-flex: 1 1 100%;
		flex: 1 1 100%;
		
		overflow: hidden; /* wrap images - FF */
		
		margin-left: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
	}
	
	.hasFlexbox .message .messageContent {
		-ms-flex: 1 1 auto; /* 2012 syntax for IE10 */
		-webkit-flex: 1 1 auto;
		flex: 1 1 auto;
	}


	
	.message .messageDetails {
		' . XenForo_Template_Helper_Core::styleProperty('uix_messageDetails_style') . '
	}
	
	.message .messageDetails:after {
		content: \'.\';
		display: block;
		height: 0;
		clear: right;
		visibility: hidden;
	}

	.message .editDate {
		font-size: inherit;
		text-align: inherit;
		margin-top: 0;
	}
	.message .messageDetails .item {
		white-space: nowrap;
		display: inline-block;
		margin-left: 5px;
	}
	.message .messageDetails .postNumber {
		' . XenForo_Template_Helper_Core::styleProperty('uix_postNumber_style') . '
	}

.attachedFiles .attachmentList,
.messageList .newMessagesNotice {
	background-image: none;
}

.userBanner {
	background-image: none; 
	padding-top: 4px; 
	padding-bottom: 4px;
	box-shadow: none;
}

.messageUserBlock .userBanner {
	margin-top: 5px;
}



	
	@media (min-width: ' . (XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint') + 1) . 'px) {
	
		.messageUserBlock div.uix_avatarHolderInner
		{
			position: relative;
		
			margin: 0 auto;
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_postbit_avatarSize') == ('l'))
{
$__output .= '
				max-width: ' . XenForo_Template_Helper_Core::styleProperty('messageUserInfo.width') . ';
			';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_postbit_avatarSize') == ('s'))
{
$__output .= '
				max-width: 48px;
			';
}
else
{
$__output .= '
				max-width: 96px;
			';
}
$__output .= '	
		}
		.messageUserBlock div.avatarHolder .avatar img 
		{
			max-width: 100%;
			width: auto;
			height: auto;
		}
	}

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_postbit_avatarSize') == ('l'))
{
$__output .= '
	
	.messageUserBlock div.avatarHolder .avatar img {
		border-radius: ' . XenForo_Template_Helper_Core::styleProperty('avatar.border-radius') . ';
	}
	
		';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint') . ') {
			.Responsive .messageUserBlock div.avatarHolder .avatar {
				height: 48px;
				width: 48px;
				line-height: 48px;
			}
			
			.Responsive .messageUserBlock div.avatarHolder .avatar img {
				max-height: 48px;
				max-width: 48px;
				height: auto;
				width: auto;
				vertical-align: middle;
			}
		}
		';
}
$__output .= '
	
	';
}
$__output .= '
	
	


	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_plainMessageControls'))
{
$__output .= '
	.message .publicControls .MultiQuoteControl.active {
		background-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_tertiaryColor') . ';
		color: #FFF;
		border-color: transparent;
	}
	';
}
$__output .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_messageControlIcons'))
{
$__output .= '
	
	.messageMeta .control:before,
	.messageMeta .uix_icon {
		display: inline-block;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		
		margin-right: 5px;
	}
	
	.messageMeta .control.reply:before {
		content: "\\f112";
	}
	
	.messageMeta .control.edit:before {
		content: "\\f040";
	}
	
	.messageMeta .control.delete:before {
		content: "\\f014";
	}
	
	.messageMeta .control.deleteSpam:before {
		content: "\\f05e";
	}
	
	.messageMeta .control.ip:before {
		content: "\\f124";
	}
	
	.messageMeta .control.like:before {
		content: "\\f164";
	}
	
	.messageMeta .control.unlike:before {
		content: "\\f165";
	}
	
	.messageMeta .control.MultiQuoteControl:before {
		content: "\\f10d";
	}
	
	.messageMeta .control.history:before {
		content: "\\f1da";
	}
	
	.messageMeta .control.warn:before {
		content: "\\f071";
	}
	
	.messageMeta .control.report:before {
		content: "\\f06a";
	}
	
	.messageMeta .control.postComment:before {
		content: "\\f075";
	}
	
	.messageMeta .uix_postbit_privateControlsMenu .uix_icon:before {
		content: "\\f0ad";
	}
		
	';
}
$__output .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_plainMessageControls'))
{
$__output .= '
	
	.message .messageMeta .control,
	.message .messageMeta .uix_postbit_privateControlsMenu {
		background: none !important;
		border: none !important;
		box-shadow: none !important;	
	}
	
	';
}
$__output .= '
	


	';
if (XenForo_Template_Helper_Core::styleProperty('uix_postbit_privateControlsMenu') != 0)
{
$__output .= '

	.message .messageMeta .uix_postbit_privateControlsMenu {
		' . XenForo_Template_Helper_Core::styleProperty('messageMetaControl') . '
	}
	
	.message .messageMeta .uix_postbit_privateControlsMenu a {
		color: inherit;
		display: block;
	}
	
	.message .messageMeta .uix_postbit_privateControlsMenu:hover {
		' . XenForo_Template_Helper_Core::styleProperty('popupControlClosedHover') . '	
	}
	
	.message .messageMeta .uix_postbit_privateControlsMenu.PopupOpen {
		' . XenForo_Template_Helper_Core::styleProperty('popupControl') . '
	}
	
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_plainMessageControls'))
{
$__output .= '
		
		.message .messageMeta .uix_postbit_privateControlsMenu.PopupOpen {color: inherit !important;}
		
		';
}
$__output .= '
	
	';
}
$__output .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_postbit_privateControlsMenu') != ('100%'))
{
$__output .= '

	.Responsive .message .messageMeta .uix_postbit_privateControlsMenu
	{
		display: none;
	}
	
	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_postbit_privateControlsMenu') . ')
	{
		.Responsive .thread_view .message .privateControls
		{
			display: none;	
		}
		

		.Responsive .message.deleted .messageMeta {clear: both; line-height: 30px; float: left;}
		.Responsive .message.deleted .privateControls {display: block;}
		.Responsive .message.deleted .privateControls .item.InlineModCheck {float: none; display: inline-block;}
		
		.Responsive .message .messageMeta .uix_postbit_privateControlsMenu
		{
			display: inline-block;
		}	
	}

	';
}
$__output .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_centerPostbitLinks'))
{
$__output .= '
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_centerPostbitLinks') == ('100%'))
{
$__output .= '
	
		.message .privateControls, .message .publicControls {float: none; text-align: center;}
	
	';
}
else
{
$__output .= '
	
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_centerPostbitLinks') . ') {
			.message .privateControls, .message .publicControls {float: none; text-align: center;}
		}
		
	';
}
$__output .= '
	';
}
$__output .= '




	';
if (XenForo_Template_Helper_Core::styleProperty('uix_messageOnlineMarker_circle'))
{
$__output .= '
	
	.messageUserBlock div.avatarHolder .onlineMarker {
		' . XenForo_Template_Helper_Core::styleProperty('uix_messageOnlineMarker_circle_style') . '
	}
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_messageOnlineMarker_circlePulse'))
{
$__output .= '
		
		.messageUserBlock div.avatarHolder .onlineMarker {
			z-index: 10;
			
			-moz-transition: ease-out 0.1s;
			-o-transition: ease-out 0.1s;
			-webkit-transition: ease-out 0.1s;
			transition: ease-out 0.1s;
		}
		
		.messageUserBlock div.avatarHolder .onlineMarker_pulse {
			border: 10px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_messageOnlineMarker_circle_style.background-color') . ';
			background: transparent;
			-webkit-border-radius: 40px;
			-moz-border-radius: 40px;
			border-radius: 40px;
			height: 40px;
			width: 40px;
			-webkit-animation: pulse 3s ease-out infinite;
			-moz-animation: pulse 3s ease-out infinite;
			animation: pulse 3s ease-out infinite;
			position: absolute;
			top: -25px;
			left: -25px;
			z-index: 1;
			opacity: 0;
		}
		
		@-moz-keyframes pulse {
			0% {
			-moz-transform: scale(0);
			opacity: 0.0;
			}
			25% {
			-moz-transform: scale(0);
			opacity: 0.1;
			}
			50% {
			-moz-transform: scale(0.1);
			opacity: 0.3;
			}
			75% {
			-moz-transform: scale(0.5);
			opacity: 0.5;
			}
			100% {
			-moz-transform: scale(1);
			opacity: 0.0;
			}
		}
		
		@-webkit-keyframes "pulse" {
			0% {
			-webkit-transform: scale(0);
			opacity: 0.0;
			}
			25% {
			-webkit-transform: scale(0);
			opacity: 0.1;
			}
			50% {
			-webkit-transform: scale(0.1);
			opacity: 0.3;
			}
			75% {
			-webkit-transform: scale(0.5);
			opacity: 0.5;
			}
			100% {
			-webkit-transform: scale(1);
			opacity: 0.0;
			}
		}
		
		';
}
$__output .= '

	';
}
$__output .= '




	';
if (XenForo_Template_Helper_Core::styleProperty('uix_classicPostbit'))
{
$__output .= '	

	
	
		.hasFlexbox .messageList .uix_message {
			-ms-flex-direction: column; /* 2012 syntax for IE10 */
		        -webkit-flex-direction: column;
		        flex-direction: column;	
		        
		        -ms-flex-align: stretch; /* 2012 syntax for IE10 */
			-webkit-align-items: stretch;
			align-items: stretch;
		}
		
		.hasFlexbox .message .messageInfo {
			margin-left: 0px;
			
			-ms-flex: 1 1 auto; /* 2012 syntax for IE10 */
			-webkit-flex: 1 1 auto;
			flex: 1 1 auto;
		}
		
		.hasFlexbox #QuickReply {
			margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('messageUserInfo.width') + XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall')) . 'px;
		}
		
		.hasFlexbox .messageUserInfo {
			width: auto;
		}
		
		.hasFlexbox .messageUserBlock {
			display: -ms-flexbox; /* 2012 syntax for IE10 */
		        display: -webkit-flex; 
		        display: flex;
			
			-ms-flex-pack: justify; /* 2012 syntax for IE10 */
			-webkit-justify-content: space-between;
			justify-content: space-between;
			
			margin-bottom: 5px;
		}
		
		.hasFlexbox .messageUserBlock div.avatarHolder {
			-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
			-webkit-flex: 0 0 auto;
			flex: 0 0 auto;
		}

		
		.hasFlexbox .messageUserBlock h3.userText {
			-ms-flex: 1 1 100%; /* 2012 syntax for IE10 */
			-webkit-flex: 1 1 100%;
			flex: 1 1 100%;
		}
		
		.hasFlexbox .messageUserBlock .extraUserInfo {
			-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
			-webkit-flex: 0 0 auto;
			flex: 0 0 auto;
			
			min-width: 150px;
		}
	
	
	
	
		.hasFlexbox .messageUserBlock .userBanner {
			max-width: 130px;
			overflow: hidden;
			text-overflow: ellipsis;
			margin-left: 0;
			margin-right: 0;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
			position: static;
			display: inline-block;	
		}
		
		.hasFlexbox .messageUserBlock .userBanner span {
			display: none;
		}
		
		.hasFlexbox .messageUserBlock .arrow {
			display: none;
		}

		
	
		.hasFlexbox .messageUserBlock div.avatarHolder {
			border-radius: ' . XenForo_Template_Helper_Core::styleProperty('messageAvatarHolder.border-radius') . ' 0 0 ' . XenForo_Template_Helper_Core::styleProperty('messageAvatarHolder.border-radius') . ';	
		}
		
		.hasFlexbox .messageUserBlock h3.userText {
			border: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ' solid 1px;
			border-width: 0 0 0 1px;
		}
		
		.hasFlexbox .messageUserBlock .extraUserInfo {
			border-radius: 0 ' . XenForo_Template_Helper_Core::styleProperty('messageExtraUserInfo.border-radius') . ' ' . XenForo_Template_Helper_Core::styleProperty('messageExtraUserInfo.border-radius') . ' 0;
			border: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ' solid 1px;
			border-width: 0 0 0 1px;
		}
	
	
	
	
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_floatUserBanners'))
{
$__output .= '
		
		.hasFlexbox .messageUserBlock .userBanner {
			float: right;
			clear: right;
			margin-top: 0;
		}

		.hasFlexbox .messageUserBlock h3.userText .uix_userTextInner {
			float: left;
		}
		
		';
}
$__output .= '

';
}
$__output .= '



';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_responsiveMessageBreakpoint') . ') {
	
	
	
		.Responsive.hasFlexbox .messageList .uix_message {
			-ms-flex-direction: column; /* 2012 syntax for IE10 */
		        -webkit-flex-direction: column;
		        flex-direction: column;
	        
	        	-ms-flex-align: stretch; /* 2012 syntax for IE10 */
			-webkit-align-items: stretch;
			align-items: stretch;
		}
		
		.Responsive.hasFlexbox .message .messageInfo {
			-ms-flex: 1 1 auto; /* 2012 syntax for IE10 */
			-webkit-flex: 1 1 auto;
			flex: 1 1 auto;
		}

		.Responsive .message .messageInfo {
			padding: 0px;
			margin-left: 0px;
		}

		.Responsive.hasFlexbox #QuickReply {
			margin-left: 0;
		}
		
		.Responsive.hasFlexbox .messageUserBlock {
			display: -ms-flexbox; /* 2012 syntax for IE10 */
		        display: -webkit-flex; 
		        display: flex;

	        	-ms-flex-pack: justify; /* 2012 syntax for IE10 */
			-webkit-justify-content: space-between;
			justify-content: space-between;
		}
		
		.Responsive.hasFlexbox .messageUserBlock div.avatarHolder {
			-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
			-webkit-flex: 0 0 auto;
			flex: 0 0 auto;
		}
		
		
		.Responsive.hasFlexbox .messageUserBlock h3.userText {
			margin-left: 0;
			
			-ms-flex: 1 1 100%; /* 2012 syntax for IE10 */
			-webkit-flex: 1 1 100%;
			flex: 1 1 100%;
		}
		
		.Responsive.hasFlexbox #QuickReply {
			margin-left: 0;
		}
	
	
	
	
		.Responsive .messageUserBlock h3.userText {
			border-width: 0 0 0 1px;
		}
	
	
	

		';
if (XenForo_Template_Helper_Core::styleProperty('uix_floatUserBanners'))
{
$__output .= '

		.Responsive .messageUserBlock .userBanner {
			float: right;
			margin-top: 0;
		}

		.Responsive .messageUserBlock h3.userText .uix_userTextInner {
			float: left;
		}

		';
}
$__output .= '
	
	
	

		';
if (XenForo_Template_Helper_Core::styleProperty('uix_messageOnlineMarker_circle'))
{
$__output .= '

		.Responsive .messageUserBlock div.avatarHolder .onlineMarker {
			margin: 0;
		}

		';
}
$__output .= '

}
';
}
