<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '


/* Find the images, set the new image */

.LoggedIn .discussionListItem .unreadLink,
.LoggedIn .discussionListItem .ReadToggle,
.discussionListItem .iconKey span,
.event .content .thread .icon,
.event .content .forum .icon,
.footerLinks a.globalFeed,
.messageNotices .icon,
.rating .star,
.resourceAlerts .icon,
.thread_view .threadAlerts .icon,
.alerts .newIcon,
.alertsPopup .newIcon,
.DismissParent .DismissCtrl {
	background-image: url(' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/uix/sprite.png) !important;
	width: 16px; 
	height: 16px;
	background-repeat: no-repeat;
}


/* Set the background-position */

.LoggedIn .discussionListItem .unreadLink,
.LoggedIn .discussionListItem.unread .ReadToggle {background-position: 0 -32px;}
.LoggedIn .discussionListItem .ReadToggle:hover {background-position: -16px -32px;}

.discussionListItem .iconKey .sticky    { background-position:   0px -16px; }
.discussionListItem .iconKey .starred   { background-position: -64px -32px;}
.discussionListItem .iconKey .watched   { background-position: -144px -16px;}
.discussionListItem .iconKey .locked    { background-position: -16px -16px; }
.discussionListItem .iconKey .moderated { background-position: -32px -16px; }
.discussionListItem .iconKey .redirect  { background-position: -48px -16px; }
.discussionListItem .iconKey .new       { background-position: -64px -16px; }

.event .content .thread .icon {background-position: -96px -16px;}
.event .content .forum .icon {background-position: -80px -16px;}

.footerLinks a.globalFeed {background-position: -112px -16px;}

.messageNotices .deletedNotice .icon { background-position: -48px -32px; }		
.messageNotices .warningNotice .icon { background-position: -32px -32px; }		
.messageNotices .moderatedNotice .icon {background-position: -32px -16px; }

.navTabs .navTab.PopupClosed:hover .SplitCtrl {background-position: -128px ; }

.rating .star {background-position: -96px -32px !important;}
.rating .star.Full {background-position: -64px -32px !important;}
.rating .star.Half,
.rating .star.Full.Half {background-position: -80px -32px !important;}

.resourceAlerts .deletedAlert .icon { background-position: -48px -32px; }
.resourceAlerts .moderatedAlert .icon { background-position: -32px -16px; }

.thread_view .threadAlerts .deletedAlert .icon { background-position: -48px -32px; }
.thread_view .threadAlerts .moderatedAlert .icon { background-position: -32px -32px; }
.thread_view .threadAlerts .lockedAlert .icon { background-position: -16px -16px; }

.alerts .newIcon,
.alertsPopup .newIcon {background-position: -112px -32px;}
	
.DismissParent .DismissCtrl {background-position: -80px 0;}
.DismissParent:hover .DismissCtrl:hover {background-position: -96px 0;}
.DismissParent:hover .DismissCtrl:active {background-position: -112px 0;}
	
	

@media
only screen and (-webkit-min-device-pixel-ratio: 2),
only screen and (   min--moz-device-pixel-ratio: 2),
only screen and (     -o-min-device-pixel-ratio: 2/1),
only screen and (        min-device-pixel-ratio: 2),
only screen and (                min-resolution: 192dpi),
only screen and (                min-resolution: 2dppx) {
      
	.LoggedIn .discussionListItem .unreadLink,
	.LoggedIn .discussionListItem .ReadToggle,
	.discussionListItem .iconKey span,
	.event .content .thread .icon,
	.event .content .forum .icon,
	.footerLinks a.globalFeed,
	.messageNotices .icon,
	.rating .star,
	.resourceAlerts .icon,
	
	.thread_view .threadAlerts .icon,
	.alerts .newIcon,
	.alertsPopup .newIcon,
	.DismissParent .DismissCtrl {
		background-image: url(' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/uix/sprite@2x.png) !important;
		background-size: 160px 48px;
	}
         
}';
