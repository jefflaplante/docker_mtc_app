<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($profilePosts)
{
$__output .= '
    <div class="section profilePostList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></h3>
            ';
$__compilerVar1 = '';
if ($canUpdateStatus)
{
$__compilerVar1 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__compilerVar1 .= '
	<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" id="ProfilePoster" class="statusPoster AutoValidator" data-optInOut="OptIn" data-hide-submit="true">
		<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" data-statusEditorCounter="#statusEditorCounter"></textarea>
		<div class="submitUnit">
			<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
			<input type="submit" class="button primary" value="' . 'Post' . '" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="hidden" name="simple" value="1" />
		</div>
	</form>
';
}
$__compilerVar1 .= '
<ul id="ProfilePostList" class="' . (($canUpdateStatus) ? ('nonInitial') : ('')) . '">
';
foreach ($profilePosts AS $profilePost)
{
$__compilerVar1 .= '
	';
$__compilerVar2 = '';
$this->addRequiredExternal('css', 'profile_post_list_simple');
$__compilerVar2 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar2 .= '

<li id="profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="profilePostListItem ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$profilePost',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		<div class="messageContent">
			<span class="poster">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
				';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$__compilerVar2 .= '
					<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
				';
}
$__compilerVar2 .= '
			</span>
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'profile_post_list_item_simple',
'1' => $profilePost['message']
)) . '</blockquote></article>
		</div>

		<div class="messageMeta">
			<div class="privateControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
			</div>

			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" class="item Tooltip OverlayTrigger" title="' . 'Interact' . '" data-tipclass="flipped" data-offsetX="7" data-offsetY="-7">&#8226;&#8226;&#8226;</a>
			</div>
		</div>

	</div>
</li>';
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
$__compilerVar1 .= '
';
}
$__compilerVar1 .= '
</ul>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
        </div>
    </div>
';
}
