<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Notable Members';
$__output .= '

';
$__extraData['head']['canonical'] = '';
$__extraData['head']['canonical'] .= '
	<link rel="canonical" href="' . XenForo_Template_Helper_Core::link('canonical:members', false, array()) . '" />';
$__output .= '

';
$this->addRequiredExternal('css', 'member_list');
$__output .= '
';
$this->addRequiredExternal('css', 'xenforo_member_list_item');
$__output .= '
	
';
if ($userNotFound)
{
$__output .= '
	<div class="importantMessage">' . 'The specified member cannot be found. Please enter a member\'s entire name.' . '</div>
';
}
$__output .= '

<ul class="tabs">
	<li class="' . (($type == ('messages')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Most Messages' . '</a></li>
	<li class="' . (($type == ('likes')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'likes'
)) . '">' . 'Most Likes' . '</a></li>
	';
if ($xenOptions['enableTrophies'])
{
$__output .= '<li class="' . (($type == ('points')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'points'
)) . '">' . 'Most Points' . '</a></li>';
}
$__output .= '
	<li class="' . (($type == ('staff')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('members', '', array(
'type' => 'staff'
)) . '">' . 'Staff Members' . '</a></li>
</ul>

<div class="section">
	<ol class="memberList">
		';
foreach ($users AS $user)
{
$__output .= '
			';
$__compilerVar1 = '';
$__compilerVar1 .= '1';
$__compilerVar2 = '';
if ($bigKey)
{
$__compilerVar2 .= '<span class="bigNumber">' . XenForo_Template_Helper_Core::numberFormat($user[$bigKey], '0') . '</span>';
}
$__compilerVar3 = '';
$this->addRequiredExternal('css', 'xenforo_member_list_item');
$__compilerVar3 .= '

<li class="primaryContent memberListItem' . (($extended) ? (' extended') : ('')) . '"' . (($id) ? (' id="' . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,false,array(
'user' => '$user',
'size' => 's',
'class' => (($__compilerVar1) ? ('NoOverlay') : (''))
),'')) . '

	';
if ($__compilerVar2)
{
$__compilerVar3 .= '<div class="extra">' . $__compilerVar2 . '</div>';
}
$__compilerVar3 .= '

	<div class="member">
	
		';
if ($user['user_id'])
{
$__compilerVar3 .= '
		
			<h3 class="username">' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array(
'class' => 'StatusTooltip' . (($__compilerVar1) ? (' NoOverlay') : ('')),
'title' => XenForo_Template_Helper_Core::callHelper('snippet', array(
'0' => $user['status'],
'1' => '0',
'2' => array(
'stripPlainTag' => '1'
)
))
))) . '
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar3 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_notable_members');
$__compilerVar3 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaNotableM') AND $xenOptions['cxf_fas'])
{
$__compilerVar3 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $user['user_id'])
{
$__compilerVar3 .= '
    <dl class="convButtonNM"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $user['username']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar3 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar3 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar3 .= ' title="' . 'Start a Conversation' . '" ><i class="fa fa-envelope"></i></a></dl>
';
}
$__compilerVar3 .= '
';
}
$__compilerVar3 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaNMmobile'))
{
$__compilerVar3 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar3 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonNM {
        display: none;
    }
}
';
}
$__compilerVar3 .= '
</style>
';
}
$__compilerVar3 .= '
';
}
$__compilerVar3 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar3 .= '
<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
\'height=\'+h+\',width=\'+w+\',top=\'+TopPosition+\',left=\'+LeftPosition+\',scrollbars=\'+scroll+\',resizable\'
popupWindow = window.open(url,winName,settings)
}
</script>
';
}
$__compilerVar3 .= '</h3>
			
			<div class="userInfo">
				<div class="userBlurb dimmed">' . XenForo_Template_Helper_Core::callHelper('userBlurb', array(
'0' => $user
)) . '</div>
				<dl class="userStats pairsInline">
					<dt title="' . 'Total messages posted by ' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '' . '">' . 'Messages' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($user['message_count'], '0') . '</dd>
					<dt title="' . 'Number of times something posted by ' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' has been \'liked\'' . '">' . 'Likes Received' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($user['like_count'], '0') . '</dd>
					';
if ($xenOptions['enableTrophies'])
{
$__compilerVar3 .= '
						<dt>' . 'Trophy Points' . ':</dt> <dd title="' . 'Trophy Points' . '">' . XenForo_Template_Helper_Core::numberFormat($user['trophy_points'], '0') . '</dd>
					';
}
$__compilerVar3 .= '
				</dl>
			</div>
			
		';
}
else if ($guestHtml)
{
$__compilerVar3 .= '
			<h3 class="username guest dimmed">' . $guestHtml . '</h3>
		';
}
else
{
$__compilerVar3 .= '
			<h3 class="username guest dimmed">' . 'Guest' . '</h3>
		';
}
$__compilerVar3 .= '
		
		';
$__compilerVar4 = '';
$__compilerVar4 .= $contentTemplate;
if (trim($__compilerVar4) !== '')
{
$__compilerVar3 .= '
			<div class="contentInfo">' . $__compilerVar4 . '</div>
		';
}
unset($__compilerVar4);
$__compilerVar3 .= '
		
	</div>
	
</li>';
$__output .= $__compilerVar3;
unset($__compilerVar1, $__compilerVar2, $__compilerVar3);
$__output .= '
		';
}
$__output .= '
	</ol>
</div>

';
$__extraData['sidebar'] = '';
$__extraData['sidebar'] .= '
	<div class="section">
		<form action="' . XenForo_Template_Helper_Core::link('members', false, array()) . '" method="post" class="secondaryContent findMember">
			<h3><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '" title="' . 'See all online users' . '">' . 'Find Member' . '</a></h3>
				
			<input type="search" name="username" placeholder="' . 'Name' . '..." class="textCtrl AutoComplete" data-autoSubmit="true" />
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>
	</div>

	';
if ($birthdays)
{
$__extraData['sidebar'] .= '
		<div class="section">
			<div class="secondaryContent avatarHeap">
				<h3>' . 'Today\'s Birthdays' . '</h3>
				
				<ol>
				';
foreach ($birthdays AS $user)
{
$__extraData['sidebar'] .= '
					<li>' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,false,array(
'user' => '$user',
'size' => 's',
'text' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'),
'class' => 'Tooltip',
'data-tipclass' => 'flipped',
'title' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8')
),'')) . '</li>
				';
}
$__extraData['sidebar'] .= '
				</ol>
			</div>
		</div>
	';
}
$__extraData['sidebar'] .= '
	
	';
if ($latestUsers)
{
$__extraData['sidebar'] .= '
		<div class="section newestMembers">
			<div class="secondaryContent avatarHeap">
				<h3>' . 'Newest Members' . '</h3>
				
				<ol>
					';
foreach ($latestUsers AS $user)
{
$__extraData['sidebar'] .= '
						<li>' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,false,array(
'user' => '$user',
'size' => 's',
'text' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' (' . XenForo_Template_Helper_Core::datetime($user['register_date'], '') . ')',
'class' => 'Tooltip',
'data-tipclass' => 'flipped',
'title' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ', ' . 'Joined' . ': ' . XenForo_Template_Helper_Core::datetime($user['register_date'], '')
),'')) . '</li>
					';
}
$__extraData['sidebar'] .= '
				</ol>
			</div>
		</div>
	';
}
$__extraData['sidebar'] .= '
';
