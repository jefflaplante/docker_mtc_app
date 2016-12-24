<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'xenforo_member_list_item');
$__output .= '

<li class="primaryContent memberListItem' . (($extended) ? (' extended') : ('')) . '"' . (($id) ? (' id="' . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,false,array(
'user' => '$user',
'size' => 's',
'class' => (($noOverlay) ? ('NoOverlay') : (''))
),'')) . '

	';
if ($extraTemplate)
{
$__output .= '<div class="extra">' . $extraTemplate . '</div>';
}
$__output .= '

	<div class="member">
	
		';
if ($user['user_id'])
{
$__output .= '
		
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
$__output .= '
';
$this->addRequiredExternal('css', 'conversationbutton_notable_members');
$__output .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaNotableM') AND $xenOptions['cxf_fas'])
{
$__output .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $user['user_id'])
{
$__output .= '
    <dl class="convButtonNM"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $user['username']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__output .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__output .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__output .= ' title="' . 'Start a Conversation' . '" ><i class="fa fa-envelope"></i></a></dl>
';
}
$__output .= '
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaNMmobile'))
{
$__output .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonNM {
        display: none;
    }
}
';
}
$__output .= '
</style>
';
}
$__output .= '
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__output .= '
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
$__output .= '</h3>
			
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
$__output .= '
						<dt>' . 'Trophy Points' . ':</dt> <dd title="' . 'Trophy Points' . '">' . XenForo_Template_Helper_Core::numberFormat($user['trophy_points'], '0') . '</dd>
					';
}
$__output .= '
				</dl>
			</div>
			
		';
}
else if ($guestHtml)
{
$__output .= '
			<h3 class="username guest dimmed">' . $guestHtml . '</h3>
		';
}
else
{
$__output .= '
			<h3 class="username guest dimmed">' . 'Guest' . '</h3>
		';
}
$__output .= '
		
		';
$__compilerVar1 = '';
$__compilerVar1 .= $contentTemplate;
if (trim($__compilerVar1) !== '')
{
$__output .= '
			<div class="contentInfo">' . $__compilerVar1 . '</div>
		';
}
unset($__compilerVar1);
$__output .= '
		
	</div>
	
</li>';
