<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__compilerVar1 = '';
$__compilerVar1 .= '
	';
if ($visitor['nsfw_options']['avatar'])
{
$__compilerVar1 .= '
		.avatarHolder { display: none !important; }
		.avatar img { display: none !important; }
		.avatarScaler img { display: none !important; }
		.avatar span.img { background-image: none !important; }
		
		
		.discussionListItem .posterAvatar .avatar img { display: none !important; }

		
		.quickReply .messageUserInfo { display: none !important; }
		.quickReply #QuickReply { margin-left: 0 !important; }
		
		
		.profilePage .mast .section.infoBlock { margin-top: 0px !important; }
	';
}
$__compilerVar1 .= '
';
if (trim($__compilerVar1) !== '')
{
$__output .= '
<!-- add-on NSFW rendered this block of CSS -->
<style>
' . $__compilerVar1 . '
</style>
';
}
unset($__compilerVar1);
