<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('js', 'js/waindigo/convaccess/remove_user.js');
$__output .= '

';
$this->addRequiredExternal('css', 'waindigo_conversation_list_tabs_convaccess');
$__output .= '

';
if ($canAddUsers)
{
$__output .= '
	<div class="conversationTabs">
		<a href="' . XenForo_Template_Helper_Core::link('conversations/add-users', false, array()) . '" class="OverlayTrigger addLink">' . 'Add Users' . '</a>
		<ul class="tabs">
			<li class="' . (($selectedUserId == $visitor['user_id']) ? ('active') : ('')) . '">
				<a href="' . XenForo_Template_Helper_Core::link('conversations' . (($controllerAction == ('Starred')) ? ('/starred') : ((($controllerAction == ('Yours')) ? ('/yours') : ('')))), false, array()) . '">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</a>
			</li>
			';
foreach ($users AS $userId => $user)
{
$__output .= '
				<li class="' . (($selectedUserId == $userId) ? ('active') : ('')) . '">
					<a href="' . XenForo_Template_Helper_Core::link('conversations' . (($controllerAction == ('Starred')) ? ('/starred') : ((($controllerAction == ('Yours')) ? ('/yours') : ('')))), '', array(
'conversation_user_id' => $userId
)) . '">' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' <span class="RemoveUserTabIcon" data-href="' . XenForo_Template_Helper_Core::link('conversations/remove-user', '', array(
'conversation_user_id' => $userId
)) . '">' . 'waindigo_remove_user_convaccess' . '</span></a></a>
				</li>
			';
}
$__output .= '
		</ul>
	</div>
';
}
