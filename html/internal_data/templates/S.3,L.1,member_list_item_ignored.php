<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__compilerVar1 = '';
$__compilerVar1 .= 'user_list_' . htmlspecialchars($user['user_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar2 = '';
$__compilerVar2 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account/stop-ignoring', '', array(
'user_id' => $user['user_id']
)) . '"
			class="UnfollowLink button smallButton"
			data-userId="' . htmlspecialchars($user['user_id'], ENT_QUOTES, 'UTF-8') . '">' . 'Stop Ignoring' . '</a>
	';
$__compilerVar3 = '';
$this->addRequiredExternal('css', 'xenforo_member_list_item');
$__compilerVar3 .= '

<li class="primaryContent memberListItem' . (($extended) ? (' extended') : ('')) . '"' . (($__compilerVar1) ? (' id="' . htmlspecialchars($__compilerVar1, ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,false,array(
'user' => '$user',
'size' => 's',
'class' => (($noOverlay) ? ('NoOverlay') : (''))
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
