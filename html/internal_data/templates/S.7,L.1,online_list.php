<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Current Visitors';
$__output .= '
';
$__extraData['pageDescription'] = array();
$__extraData['pageDescription']['content'] = '';
$__extraData['pageDescription']['content'] .= 'This is a list of all visitors currently browsing ' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '.';
$__output .= ' 

';
$this->addRequiredExternal('css', 'member_list');
$__output .= '
';
$this->addRequiredExternal('css', 'xenforo_member_list_item');
$__output .= '

<ul class="tabs">
	<li class="' . (($userLimit == ('')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Everyone' . '</a></li>
	<li class="' . (($userLimit == ('registered')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('online', '', array(
'type' => 'registered'
)) . '">' . 'Members' . '</a></li>
	<li class="' . (($userLimit == ('guest')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('online', '', array(
'type' => 'guest'
)) . '">' . 'Guests' . '</a></li>
	<li class="' . (($userLimit == ('robot')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('online', '', array(
'type' => 'robot'
)) . '">' . 'Robots' . '</a></li>
</ul>

';
if ($onlineUsers)
{
$__output .= '
	<ol class="section memberList">
		';
foreach ($onlineUsers AS $user)
{
$__output .= '
			';
$__compilerVar1 = '';
if ($user['robotInfo'])
{
$__compilerVar1 .= '
					' . 'Robot' . ': ';
if ($user['robotInfo']['link'])
{
$__compilerVar1 .= '<a href="' . htmlspecialchars($user['robotInfo']['link'], ENT_QUOTES, 'UTF-8') . '" target="_blank">' . htmlspecialchars($user['robotInfo']['title'], ENT_QUOTES, 'UTF-8') . '</a>';
}
else
{
$__compilerVar1 .= htmlspecialchars($user['robotInfo']['title'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar1 .= '
				';
}
$__compilerVar2 = '';
$__compilerVar2 .= '
					';
if ($canViewIps)
{
$__compilerVar2 .= '
						<a href="' . (($user['user_id']) ? (XenForo_Template_Helper_Core::link('online/user-ip', $user, array())) : (XenForo_Template_Helper_Core::link('online/guest-ip', '', array(
'ip' => $user['ipHex']
)))) . '" class="OverlayTrigger ip"><span>' . XenForo_Template_Helper_Core::callHelper('ip', array(
'0' => $user['ip']
)) . '</span></a>
					';
}
$__compilerVar2 .= '
				';
$__compilerVar3 = '';
$__compilerVar3 .= '
					';
if ($user['canViewCurrentActivity'])
{
$__compilerVar3 .= '
						';
if ($user['activityDescription'])
{
$__compilerVar3 .= '
							' . htmlspecialchars($user['activityDescription'], ENT_QUOTES, 'UTF-8');
if ($user['activityItemTitle'])
{
$__compilerVar3 .= ' <em><a href="' . htmlspecialchars($user['activityItemUrl'], ENT_QUOTES, 'UTF-8') . '"' . (($user['activityItemPreviewUrl']) ? (' class="PreviewTooltip" data-previewUrl="' . htmlspecialchars($user['activityItemPreviewUrl'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . htmlspecialchars($user['activityItemTitle'], ENT_QUOTES, 'UTF-8') . '</a></em>';
}
if ($bypassUserPrivacy AND $user['view_state'] == ('error'))
{
$__compilerVar3 .= ' <span class="muted Tooltip" title="' . 'This member is viewing an invalid page or a page they don\'t have permission to see.' . '">(' . 'Error' . ')</a>';
}
$__compilerVar3 .= ',
						';
}
else
{
$__compilerVar3 .= '
							' . 'Viewing unknown page' . ',
						';
}
$__compilerVar3 .= '
					';
}
$__compilerVar3 .= '
					' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($user['view_date'],array(
'time' => '$user.view_date',
'class' => 'muted'
))) . '
				';
$__compilerVar4 = '';
$this->addRequiredExternal('css', 'xenforo_member_list_item');
$__compilerVar4 .= '

<li class="primaryContent memberListItem' . (($extended) ? (' extended') : ('')) . '"' . (($id) ? (' id="' . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,false,array(
'user' => '$user',
'size' => 's',
'class' => (($noOverlay) ? ('NoOverlay') : (''))
),'')) . '

	';
if ($__compilerVar2)
{
$__compilerVar4 .= '<div class="extra">' . $__compilerVar2 . '</div>';
}
$__compilerVar4 .= '

	<div class="member">
	
		';
if ($user['user_id'])
{
$__compilerVar4 .= '
		
			<h3 class="username">' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array(
'class' => 'StatusTooltip' . (($noOverlay) ? (' NoOverlay') : ('')),
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
$__compilerVar4 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_notable_members');
$__compilerVar4 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaNotableM') AND $xenOptions['cxf_fas'])
{
$__compilerVar4 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $user['user_id'])
{
$__compilerVar4 .= '
    <dl class="convButtonNM"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $user['username']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar4 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar4 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar4 .= ' title="' . 'Start a Conversation' . '" ><i class="fa fa-envelope"></i></a></dl>
';
}
$__compilerVar4 .= '
';
}
$__compilerVar4 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaNMmobile'))
{
$__compilerVar4 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar4 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonNM {
        display: none;
    }
}
';
}
$__compilerVar4 .= '
</style>
';
}
$__compilerVar4 .= '
';
}
$__compilerVar4 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar4 .= '
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
$__compilerVar4 .= '</h3>
			
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
$__compilerVar4 .= '
						<dt>' . 'Trophy Points' . ':</dt> <dd title="' . 'Trophy Points' . '">' . XenForo_Template_Helper_Core::numberFormat($user['trophy_points'], '0') . '</dd>
					';
}
$__compilerVar4 .= '
				</dl>
			</div>
			
		';
}
else if ($__compilerVar1)
{
$__compilerVar4 .= '
			<h3 class="username guest dimmed">' . $__compilerVar1 . '</h3>
		';
}
else
{
$__compilerVar4 .= '
			<h3 class="username guest dimmed">' . 'Guest' . '</h3>
		';
}
$__compilerVar4 .= '
		
		';
$__compilerVar5 = '';
$__compilerVar5 .= $__compilerVar3;
if (trim($__compilerVar5) !== '')
{
$__compilerVar4 .= '
			<div class="contentInfo">' . $__compilerVar5 . '</div>
		';
}
unset($__compilerVar5);
$__compilerVar4 .= '
		
	</div>
	
</li>';
$__output .= $__compilerVar4;
unset($__compilerVar1, $__compilerVar2, $__compilerVar3, $__compilerVar4);
$__output .= '	
		';
}
$__output .= '
	</ol>

	<div class="pageNavLinkGroup">
		' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($usersPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalOnlineUsers, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'online', false, array(
'type' => $userLimit
), false, array())) . '
	</div>
';
}
else
{
$__output .= '
	<div class="section">' . 'No results found.' . '</div>
';
}
$__output .= '

';
$__extraData['sidebar'] = '';
$__extraData['sidebar'] .= '
	
	<div class="section">
		<div class="secondaryContent statsList" id="boardStats">
			<h3>' . 'Online Statistics' . '</h3>
			<div class="pairsJustified">
				<dl class="memberCount"><dt>' . 'Members Online' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::numberFormat($onlineTotals['members'], '0') . '</dd></dl>
				<dl class="guestCount"><dt>' . 'Guests Online' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::numberFormat($onlineTotals['guests'], '0') . '</dd></dl>
				<dl class="guestCount"><dt>' . 'Robots Online' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::numberFormat($onlineTotals['robots'], '0') . '</dd></dl>
				<dl class="visitorCount"><dt>' . 'Total Visitors' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::numberFormat($onlineTotals['total'], '0') . '</dd></dl>
			</div>
			<div class="footnote">' . 'Totals may include hidden visitors.' . '</div>
		</div>
	</div>
	
';
