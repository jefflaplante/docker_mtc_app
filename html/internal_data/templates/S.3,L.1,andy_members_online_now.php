<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<div class="section membersOnline userList">		
	<div class="secondaryContent">
		<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Members Online Now' . '</a></h3>
		
		';
if ($onlineUsers['records'])
{
$__output .= '
		
			';
if ($visitor['user_id'])
{
$__output .= '
				';
$__compilerVar1 = '';
$__compilerVar1 .= '
						';
foreach ($onlineUsers['records'] AS $user)
{
$__compilerVar1 .= '
							';
if ($user['followed'])
{
$__compilerVar1 .= '
								<li title="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" class="Tooltip">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'class' => '_plainImage'
),'')) . '</li>
							';
}
$__compilerVar1 .= '
						';
}
$__compilerVar1 .= '
					';
if (trim($__compilerVar1) !== '')
{
$__output .= '
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . ':</a></h4>
				<ul class="followedOnline">
					' . $__compilerVar1 . '
				</ul>
				<h4 class="minorHeading"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Members' . ':</a></h4>
				';
}
unset($__compilerVar1);
$__output .= '
			';
}
$__output .= '
			
			<ol class="listInline">
				';
$i = 0;
foreach ($onlineUsers['records'] AS $user)
{
$i++;
$__output .= '
					';
if ($i <= $onlineUsers['limit'])
{
$__output .= '
						<li>
						';
if ($user['user_id'])
{
$__output .= '
							<a href="' . XenForo_Template_Helper_Core::link('members', $user, array()) . '"
								class="username' . ((!$user['visible']) ? (' invisible') : ('')) . (($user['followed']) ? (' followed') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</a>';
if ($i < $onlineUsers['limit'])
{
$__output .= ',';
}
$__output .= '
						';
}
else
{
$__output .= '
							' . 'Guest';
if ($i < $onlineUsers['limit'])
{
$__output .= ',';
}
$__output .= '
						';
}
$__output .= '
						</li>
					';
}
$__output .= '
				';
}
$__output .= '
				';
if ($onlineUsers['recordsUnseen'])
{
$__output .= '
					<li class="moreLink">... <a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all visitors' . '">' . 'and ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['recordsUnseen'], '0') . ' more' . '</a></li>
				';
}
$__output .= '
			</ol>
		';
}
$__output .= '
		
		<div class="footnote">
			' . 'Total: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['total'], '0') . ' (members: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['members'], '0') . ', guests: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['guests'], '0') . ', robots: ' . XenForo_Template_Helper_Core::numberFormat($onlineUsers['robots'], '0') . ')' . '
		</div>
	</div>
</div>';
