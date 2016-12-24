<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.profilePage .mast .sectionFooter { margin-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . '; }

.profilePage .mast { border-right: 0; }

.profilePage .primaryUserBlock {
	margin-top: 0; 
	border-top: 0;
}

.profilePage .mast .section.infoBlock .primaryContent,
.profilePage .mast .section.infoBlock .secondaryContent {
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('profilePageSidebarInfoBlock.border-radius') . '; 
}';
