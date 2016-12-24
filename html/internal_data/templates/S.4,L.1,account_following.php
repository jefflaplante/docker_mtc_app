<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'People You Follow';
$__output .= '

';
$this->addRequiredExternal('css', 'account');
$__output .= '
';
$this->addRequiredExternal('css', 'member_list');
$__output .= '
';
$this->addRequiredExternal('js', 'js/xenforo/follow.js');
$__output .= '

<form method="post" class="xenForm AutoValidator FollowForm"
	action="' . XenForo_Template_Helper_Core::link('account/follow', false, array()) . '"
	data-userInputField="#ctrl_users">

	';
$__compilerVar1 = '';
$__compilerVar1 .= '
	<ul class="FollowList memberList">
		';
foreach ($following AS $user)
{
$__compilerVar1 .= '
			';
$__compilerVar2 = '';
$__compilerVar3 = '';
$__compilerVar3 .= 'user_list_' . htmlspecialchars($user['user_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar4 = '';
$__compilerVar4 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account/stop-following-confirm', '', array(
'user_id' => $user['user_id']
)) . '"
			class="UnfollowLink button smallButton"
			data-jsonUrl="' . XenForo_Template_Helper_Core::link('account/stop-following.json', false, array()) . '"
			data-userId="' . htmlspecialchars($user['user_id'], ENT_QUOTES, 'UTF-8') . '">' . 'Unfollow' . '</a>
	';
$__compilerVar5 = '';
$this->addRequiredExternal('css', 'xenforo_member_list_item');
$__compilerVar5 .= '

<li class="primaryContent memberListItem' . (($extended) ? (' extended') : ('')) . '"' . (($__compilerVar3) ? (' id="' . htmlspecialchars($__compilerVar3, ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,false,array(
'user' => '$user',
'size' => 's',
'class' => (($noOverlay) ? ('NoOverlay') : (''))
),'')) . '

	';
if ($__compilerVar4)
{
$__compilerVar5 .= '<div class="extra">' . $__compilerVar4 . '</div>';
}
$__compilerVar5 .= '

	<div class="member">
	
		';
if ($user['user_id'])
{
$__compilerVar5 .= '
		
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
$__compilerVar5 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_notable_members');
$__compilerVar5 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaNotableM') AND $xenOptions['cxf_fas'])
{
$__compilerVar5 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $user['user_id'])
{
$__compilerVar5 .= '
    <dl class="convButtonNM"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $user['username']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar5 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar5 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar5 .= ' title="' . 'Start a Conversation' . '" ><i class="fa fa-envelope"></i></a></dl>
';
}
$__compilerVar5 .= '
';
}
$__compilerVar5 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaNMmobile'))
{
$__compilerVar5 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar5 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonNM {
        display: none;
    }
}
';
}
$__compilerVar5 .= '
</style>
';
}
$__compilerVar5 .= '
';
}
$__compilerVar5 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar5 .= '
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
$__compilerVar5 .= '</h3>
			
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
$__compilerVar5 .= '
						<dt>' . 'Trophy Points' . ':</dt> <dd title="' . 'Trophy Points' . '">' . XenForo_Template_Helper_Core::numberFormat($user['trophy_points'], '0') . '</dd>
					';
}
$__compilerVar5 .= '
				</dl>
			</div>
			
		';
}
else if ($guestHtml)
{
$__compilerVar5 .= '
			<h3 class="username guest dimmed">' . $guestHtml . '</h3>
		';
}
else
{
$__compilerVar5 .= '
			<h3 class="username guest dimmed">' . 'Guest' . '</h3>
		';
}
$__compilerVar5 .= '
		
		';
$__compilerVar6 = '';
$__compilerVar6 .= $contentTemplate;
if (trim($__compilerVar6) !== '')
{
$__compilerVar5 .= '
			<div class="contentInfo">' . $__compilerVar6 . '</div>
		';
}
unset($__compilerVar6);
$__compilerVar5 .= '
		
	</div>
	
</li>';
$__compilerVar2 .= $__compilerVar5;
unset($__compilerVar3, $__compilerVar4, $__compilerVar5);
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
$__compilerVar1 .= '
		';
}
$__compilerVar1 .= '
	</ul>
	';
$__output .= $this->callTemplateHook('account_following_memberlist', $__compilerVar1, array());
unset($__compilerVar1);
$__output .= '

	';
$__compilerVar7 = '';
$__compilerVar7 .= '
	<dl class="ctrlUnit">
		<dt><label for="ctrl_users">' . 'Follow' . ':</label></dt>
		<dd>
			<input type="search" name="users" value="' . htmlspecialchars($username, ENT_QUOTES, 'UTF-8') . '" placeholder="' . 'Name' . '..." class="textCtrl AutoComplete" id="ctrl_users" autofocus="autofocus" />
			<p class="explain">' . 'Separate names with a comma.' . '</p>
		</dd>
	</dl>
	';
$__output .= $this->callTemplateHook('account_following_controls', $__compilerVar7, array());
unset($__compilerVar7);
$__output .= '

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" name="save" value="' . 'Save Changes' . '" accesskey="s" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
