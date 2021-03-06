<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'message');
$__output .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__output .= '

<li id="' . htmlspecialchars($messageId, ENT_QUOTES, 'UTF-8') . '" class="message ' . (($message['isDeleted']) ? ('deleted') : ('')) . ' ' . (($message['is_staff']) ? ('staff') : ('')) . ' ' . (($message['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($message['username'], ENT_QUOTES, 'UTF-8') . '">

	';
$__compilerVar1 = '';
$this->addRequiredExternal('css', 'message_user_info');
$__compilerVar1 .= '

<div class="messageUserInfo" itemscope="itemscope" itemtype="http://data-vocabulary.org/Person">	
<div class="messageUserBlock ' . (($message['isOnline']) ? ('online') : ('')) . '">
	';
$__compilerVar2 = '';
$__compilerVar2 .= '
		<div class="avatarHolder">
			<span class="helper"></span>
			' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($message,(true),array(
'user' => '$user',
'size' => 'm',
'img' => 'true'
),'')) . '
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar2 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_avatar');
$__compilerVar2 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuainfoa'))
{
$__compilerVar2 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $message['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar2 .= '
    <dl class="convButtonInfoA convButtonInfoAM"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $message['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar2 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar2 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar2 .= ' >' . 'Contact' . '</a></dl>
';
}
$__compilerVar2 .= '
';
}
$__compilerVar2 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaAvatarInfoM'))
{
$__compilerVar2 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar2 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonInfoAM {
        display: none;
    }
}
';
}
$__compilerVar2 .= '
</style>
';
}
$__compilerVar2 .= '
';
}
else
{
$__compilerVar2 .= '

';
}
$__compilerVar2 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar2 .= '
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
$__compilerVar2 .= '
			';
if ($message['isOnline'])
{
$__compilerVar2 .= '<span class="Tooltip onlineMarker" title="' . 'Online Now' . '" data-offsetX="-22" data-offsetY="-8"></span>';
}
$__compilerVar2 .= '
			<!-- slot: message_user_info_avatar -->
		</div>
	';
$__compilerVar1 .= $this->callTemplateHook('message_user_info_avatar', $__compilerVar2, array(
'user' => $message,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar2);
$__compilerVar1 .= '

';
if (!$isQuickReply)
{
$__compilerVar1 .= '
	';
$__compilerVar3 = '';
$__compilerVar3 .= '
		<h3 class="userText">
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar3 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_username_icon');
$__compilerVar3 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaUserIcon') AND $xenOptions['cxf_fas'])
{
$__compilerVar3 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $message['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar3 .= '
    <dl class="convButtonUI"><span class="Tooltip" title="' . 'Start a Conversation' . '"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $message['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar3 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar3 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar3 .= ' title="' . 'Start a Conversation' . '" ><i class="fa fa-envelope Tooltip"></i></a></span></dl>
';
}
$__compilerVar3 .= '
';
}
$__compilerVar3 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaUserIconM'))
{
$__compilerVar3 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar3 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonUI {
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
$__compilerVar3 .= '
			' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($message,'',(true),array(
'itemprop' => 'name'
))) . '
			';
$__compilerVar4 = '';
$__compilerVar4 .= XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $message,
'1' => '1',
'2' => '1'
));
if (trim($__compilerVar4) !== '')
{
$__compilerVar3 .= '<em class="userTitle" itemprop="title">' . $__compilerVar4 . '</em>';
}
unset($__compilerVar4);
$__compilerVar3 .= '
			' . XenForo_Template_Helper_Core::callHelper('userBanner', array(
'0' => $message,
'1' => 'wrapped'
)) . '
			<!-- slot: message_user_info_text -->
		</h3>
	';
$__compilerVar1 .= $this->callTemplateHook('message_user_info_text', $__compilerVar3, array(
'user' => $message,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar3);
$__compilerVar1 .= '
';
if ($post['trophyCache'])
{
$__compilerVar1 .= '
<p class="trophies" id="trophyIcons">
	';
foreach ($post['trophyCache'] AS $trophy)
{
$__compilerVar1 .= '
		';
$__compilerVar5 = '';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__compilerVar5 .= '
<a href="' . XenForo_Template_Helper_Core::link('members/trophies', $message, array()) . '" class="OverlayTrigger">		
<img src="' . htmlspecialchars($trophy['iconUrl'], ENT_QUOTES, 'UTF-8') . '" title="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" class="trophyIconMini" />
</a>';
$__compilerVar1 .= $__compilerVar5;
unset($__compilerVar5);
$__compilerVar1 .= '
	';
}
$__compilerVar1 .= '
</p>
';
}
$__compilerVar1 .= '
		
	';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsActive'))
{
$__compilerVar6 = '';
$__compilerVar6 .= '
';
if (!XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsBadgeCSS'))
{
$__compilerVar6 .= '
    ';
$this->addRequiredExternal('css', 'userrankribbons');
$__compilerVar6 .= '
';
}
$__compilerVar6 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsBadgeCSS'))
{
$__compilerVar6 .= '
    ';
$this->addRequiredExternal('css', 'userrankribbonsbadge');
$__compilerVar6 .= '
';
}
$__compilerVar6 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsSoftResponsiveFix'))
{
$__compilerVar6 .= '
    ';
$this->addRequiredExternal('css', 'UserRankRibbonsSoftResponsiveFix');
$__compilerVar6 .= '
';
}
$__compilerVar6 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsXenMoodsFix'))
{
$__compilerVar6 .= '
    ';
$this->addRequiredExternal('css', 'UserRankRibbonsXenMoodsFix');
$__compilerVar6 .= '
';
}
$__compilerVar6 .= '
    
';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsActive'))
{
$__compilerVar6 .= '

	<ul class="ribbon">
    
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1'))
{
$__compilerVar6 .= '
			<li class="ribbon1">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2'))
{
$__compilerVar6 .= '
			<li class="ribbon2">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3'))
{
$__compilerVar6 .= '
			<li class="ribbon3">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4'))
{
$__compilerVar6 .= '
			<li class="ribbon4">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5'))
{
$__compilerVar6 .= '
			<li class="ribbon5">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6'))
{
$__compilerVar6 .= '
			<li class="ribbon6">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7'))
{
$__compilerVar6 .= '
			<li class="ribbon7">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8'))
{
$__compilerVar6 .= '
			<li class="ribbon8">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9'))
{
$__compilerVar6 .= '
			<li class="ribbon9">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10'))
{
$__compilerVar6 .= '
			<li class="ribbon10">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11'))
{
$__compilerVar6 .= '
			<li class="ribbon11">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12'))
{
$__compilerVar6 .= '
			<li class="ribbon12">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13'))
{
$__compilerVar6 .= '
			<li class="ribbon13">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14'))
{
$__compilerVar6 .= '
			<li class="ribbon14">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15'))
{
$__compilerVar6 .= '
			<li class="ribbon15">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16'))
{
$__compilerVar6 .= '
			<li class="ribbon16">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17'))
{
$__compilerVar6 .= '
			<li class="ribbon17">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18'))
{
$__compilerVar6 .= '
			<li class="ribbon18">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19'))
{
$__compilerVar6 .= '
			<li class="ribbon19">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20'))
{
$__compilerVar6 .= '
			<li class="ribbon20">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21'))
{
$__compilerVar6 .= '
			<li class="ribbon21">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22'))
{
$__compilerVar6 .= '
			<li class="ribbon22">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23'))
{
$__compilerVar6 .= '
			<li class="ribbon23">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24'))
{
$__compilerVar6 .= '
			<li class="ribbon24">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25'))
{
$__compilerVar6 .= '
			<li class="ribbon25">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26'))
{
$__compilerVar6 .= '
			<li class="ribbon26">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27'))
{
$__compilerVar6 .= '
			<li class="ribbon27">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28'))
{
$__compilerVar6 .= '
			<li class="ribbon28">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29'))
{
$__compilerVar6 .= '
			<li class="ribbon29">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30'))
{
$__compilerVar6 .= '
			<li class="ribbon30">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31'))
{
$__compilerVar6 .= '
			<li class="ribbon31">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32'))
{
$__compilerVar6 .= '
			<li class="ribbon32">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33'))
{
$__compilerVar6 .= '
			<li class="ribbon33">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34'))
{
$__compilerVar6 .= '
			<li class="ribbon34">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $message,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35'))
{
$__compilerVar6 .= '
			<li class="ribbon35">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35Title') . '
			</li>
		';
}
$__compilerVar6 .= '
		
	</ul>
';
}
$__compilerVar1 .= $__compilerVar6;
unset($__compilerVar6);
}
$__compilerVar1 .= '
    ';
$__compilerVar7 = '';
$__compilerVar7 .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_info_extra_fa'))
{
$__compilerVar7 .= '
';
$__compilerVar8 = '';
$__compilerVar8 .= '

<dl class="pairsJustified">
<dt><i class="fa fa-comments Tooltip info_extra_fa" title="' . 'Messages' . '"></i></dt>
<dd><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $message['user_id']
)) . '" class="concealed" rel="nofollow">' . XenForo_Template_Helper_Core::numberFormat($message['message_count'], '0') . '</a></dd>
</dl>

<dl class="pairsJustified">
<dt><i class="fa fa-thumbs-up Tooltip info_extra_fa" title="' . 'Likes Received' . '"></i></dt>
<dd>' . XenForo_Template_Helper_Core::numberFormat($message['like_count'], '0') . '</dd>
</dl>

<dl class="pairsJustified">
<dt><i class="fa fa-trophy Tooltip info_extra_fa" title="' . 'Trophy Points' . '"></i></dt>
<dd><a href="' . XenForo_Template_Helper_Core::link('members/trophies', $message, array()) . '" class="OverlayTrigger concealed">' . XenForo_Template_Helper_Core::numberFormat($message['trophy_points'], '0') . '</a></dd>
</dl>

';
$__compilerVar7 .= $this->callTemplateHook('message_user_info_extra', $__compilerVar8, array(
'user' => $message,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar8);
$__compilerVar7 .= '
';
}
else
{
$__compilerVar7 .= '
			
			';
$__compilerVar9 = '';
$__compilerVar9 .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowRegisterDate') AND $message['user_id'])
{
$__compilerVar9 .= '
					<dl class="pairsJustified">
						<dt>' . 'Joined' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::date($message['register_date'], '') . '</dd>
					</dl>
				';
}
$__compilerVar9 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowMessageCount') AND $message['user_id'])
{
$__compilerVar9 .= '
					<dl class="pairsJustified">
						<dt>' . 'Messages' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $message['user_id']
)) . '" class="concealed" rel="nofollow">' . XenForo_Template_Helper_Core::numberFormat($message['message_count'], '0') . '</a></dd>
					</dl>
				';
}
$__compilerVar9 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowTotalLikes') AND $message['user_id'])
{
$__compilerVar9 .= '
					<dl class="pairsJustified">
						<dt>' . 'Likes Received' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($message['like_count'], '0') . '</dd>
					</dl>
				';
}
$__compilerVar9 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowTrophyPoints') AND $message['user_id'] AND $xenOptions['enableTrophies'])
{
$__compilerVar9 .= '
					<dl class="pairsJustified">
						<dt>' . 'Trophy Points' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('members/trophies', $message, array()) . '" class="OverlayTrigger concealed">' . XenForo_Template_Helper_Core::numberFormat($message['trophy_points'], '0') . '</a></dd>
					</dl>
				';
}
$__compilerVar9 .= '
			
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowGender') AND $message['gender'])
{
$__compilerVar9 .= '
					<dl class="pairsJustified">
						<dt>' . 'Gender' . ':</dt>
						<dd itemprop="gender">';
if ($message['gender'] == ('male'))
{
$__compilerVar9 .= 'Male';
}
else
{
$__compilerVar9 .= 'Female';
}
$__compilerVar9 .= '</dd>
					</dl>
				';
}
$__compilerVar9 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowOccupation') AND $message['occupation'])
{
$__compilerVar9 .= '
					<dl class="pairsJustified">
						<dt>' . 'Occupation' . ':</dt>
						<dd itemprop="role">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($message['occupation'], ENT_QUOTES, 'UTF-8')
)) . '</dd>
					</dl>
				';
}
$__compilerVar9 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowLocation') AND $message['location'])
{
$__compilerVar9 .= '
					<dl class="pairsJustified">
						<dt>' . 'Location' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('misc/location-info', '', array(
'location' => XenForo_Template_Helper_Core::string('censor', array(
'0' => $message['location'],
'1' => '-'
))
)) . '" target="_blank" rel="nofollow" itemprop="address" class="concealed">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($message['location'], ENT_QUOTES, 'UTF-8')
)) . '</a></dd>
					</dl>
				';
}
$__compilerVar9 .= '
			
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowHomepage') AND $message['homepage'])
{
$__compilerVar9 .= '
					<dl class="pairsJustified">
						<dt>' . 'Home Page' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($message['homepage'], ENT_QUOTES, 'UTF-8'),
'1' => '-'
)) . '" rel="nofollow" target="_blank" itemprop="url">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($message['homepage'], ENT_QUOTES, 'UTF-8')
)) . '</a></dd>
					</dl>
				';
}
$__compilerVar9 .= '
							
			';
$__compilerVar7 .= $this->callTemplateHook('message_user_info_extra', $__compilerVar9, array(
'user' => $message,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar9);
$__compilerVar7 .= '
			';
}
$__compilerVar7 .= '			
			';
if (XenForo_Template_Helper_Core::styleProperty('messageShowCustomFields') AND $message['customFields'])
{
$__compilerVar7 .= '
			';
$__compilerVar10 = '';
$__compilerVar10 .= '
			
				';
foreach ($userFieldsInfo AS $fieldId => $fieldInfo)
{
$__compilerVar10 .= '
					';
if ($fieldInfo['viewable_message'] AND ($fieldInfo['display_group'] != ('contact') OR $message['allow_view_identities'] == ('everyone') OR ($message['allow_view_identities'] == ('members') AND $visitor['user_id'])))
{
$__compilerVar10 .= '
						';
$__compilerVar11 = '';
$__compilerVar11 .= XenForo_Template_Helper_Core::callHelper('userFieldValue', array(
'0' => $fieldInfo,
'1' => $message,
'2' => $message['customFields'][$fieldId]
));
if (trim($__compilerVar11) !== '')
{
$__compilerVar10 .= '
							<dl class="pairsJustified userField_' . htmlspecialchars($fieldId, ENT_QUOTES, 'UTF-8') . '">
								<dt>' . XenForo_Template_Helper_Core::callHelper('userFieldTitle', array(
'0' => $fieldId
)) . ':</dt>
								<dd>' . $__compilerVar11 . '</dd>
							</dl>
						';
}
unset($__compilerVar11);
$__compilerVar10 .= '
					';
}
$__compilerVar10 .= '
				';
}
$__compilerVar10 .= '
				
			';
$__compilerVar7 .= $this->callTemplateHook('message_user_info_custom_fields', $__compilerVar10, array(
'user' => $message,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar10);
$__compilerVar7 .= '
			';
}
$__compilerVar7 .= '
			';
if (trim($__compilerVar7) !== '')
{
$__compilerVar1 .= '
		<div class="extraUserInfo">
			' . $__compilerVar7 . '
		</div>
	';
}
unset($__compilerVar7);
$__compilerVar1 .= '
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar1 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_user_info');
$__compilerVar1 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowInfo'))
{
$__compilerVar1 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $message['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar1 .= '
    <dl class="conversationButtonInfo convButtonMobileInfo"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $message['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar1 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar1 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar1 .= ' >' . 'Start a Conversation' . '</a></dl>
';
}
$__compilerVar1 .= '
';
}
$__compilerVar1 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaMobileInfo'))
{
$__compilerVar1 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar1 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonMobileInfo {
        display: none;
    }
}
';
}
$__compilerVar1 .= '
</style>
';
}
$__compilerVar1 .= '
';
}
$__compilerVar1 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar1 .= '
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
$__compilerVar1 .= '
		
';
}
$__compilerVar1 .= '

	<span class="arrow"><span></span></span>
</div>
</div>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '

	<div class="messageInfo primaryContent">
		';
if ($message['isNew'])
{
$__output .= '<strong class="newIndicator"><span></span>' . 'New' . '</strong>';
}
$__output .= '
		
		';
$__compilerVar12 = '';
$__compilerVar12 .= '
					';
$__compilerVar13 = '';
$__compilerVar13 .= '
						';
if ($message['warning_message'])
{
$__compilerVar13 .= '
							<li class="warningNotice"><span class="icon Tooltip" title="' . 'Warning' . '" data-tipclass="iconTip flipped"></span>' . htmlspecialchars($message['warning_message'], ENT_QUOTES, 'UTF-8') . '</li>
						';
}
$__compilerVar13 .= '
						';
if ($message['isDeleted'])
{
$__compilerVar13 .= '
							<li class="deletedNotice"><span class="icon Tooltip" title="' . 'Deleted' . '" data-tipclass="iconTip flipped"></span>' . 'This message has been removed from public view.' . '</li>
						';
}
else if ($message['isModerated'])
{
$__compilerVar13 .= '
							<li class="moderatedNotice"><span class="icon Tooltip" title="' . 'Awaiting moderation' . '" data-tipclass="iconTip flipped"></span>' . 'This message is awaiting moderator approval, and is invisible to normal visitors.' . '</li>
						';
}
$__compilerVar13 .= '
						';
if ($message['isIgnored'])
{
$__compilerVar13 .= '
							<li>' . 'You are ignoring content by this member.' . ' <a href="javascript:" class="JsOnly DisplayIgnoredContent">' . 'Show Ignored Content' . '</a></li>
						';
}
$__compilerVar13 .= '
					';
$__compilerVar12 .= $this->callTemplateHook('message_notices', $__compilerVar13, array(
'message' => $message
));
unset($__compilerVar13);
$__compilerVar12 .= '
				';
if (trim($__compilerVar12) !== '')
{
$__output .= '
			<ul class="messageNotices">
				' . $__compilerVar12 . '
			</ul>
		';
}
unset($__compilerVar12);
$__output .= '
		
		';
$__compilerVar14 = '';
$__compilerVar14 .= '
		<div class="messageContent">		
			<article>
				<blockquote class="messageText SelectQuoteContainer ugc baseHtml' . (($message['isIgnored']) ? (' ignored') : ('')) . '">
					';
$__compilerVar15 = '';
$__compilerVar16 = '';
$__compilerVar15 .= $this->callTemplateHook('ad_message_body', $__compilerVar16, array());
unset($__compilerVar16);
$__compilerVar14 .= $__compilerVar15;
unset($__compilerVar15);
$__compilerVar14 .= '
					' . $message['messageHtml'] . '
					<div class="messageTextEndMarker">&nbsp;</div>
				</blockquote>
			</article>
			
			' . $messageContentAfterTemplate . '
		</div>
		';
$__output .= $this->callTemplateHook('message_content', $__compilerVar14, array(
'message' => $message
));
unset($__compilerVar14);
$__output .= '
		
		';
if ($message['last_edit_date'])
{
$__output .= '
			<div class="editDate">
			';
if ($message['user_id'] == $message['last_edit_user_id'])
{
$__output .= '
				' . 'Last edited' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($message['last_edit_date'],array(
'time' => htmlspecialchars($message['last_edit_date'], ENT_QUOTES, 'UTF-8')
))) . '
			';
}
else
{
$__output .= '
				' . 'Last edited by a moderator' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($message['last_edit_date'],array(
'time' => htmlspecialchars($message['last_edit_date'], ENT_QUOTES, 'UTF-8')
))) . '
			';
}
$__output .= '
			</div>
		';
}
$__output .= '
		
		';
if ($visitor['content_show_signature'] && $message['signature'])
{
$__output .= '
			<div class="baseHtml signature messageText ugc' . (($message['isIgnored']) ? (' ignored') : ('')) . '"><aside>' . $message['signatureHtml'] . '</aside></div>
		';
}
$__output .= '
		
		' . $messageAfterTemplate . '
		
		<div id="likes-' . htmlspecialchars($messageId, ENT_QUOTES, 'UTF-8') . '">';
if ($message['likes'])
{
$__compilerVar17 = '';
if ($message['likes'])
{
$__compilerVar17 .= '
	';
$this->addRequiredExternal('css', 'likes_summary');
$__compilerVar17 .= '
	<div class="likesSummary secondaryContent">
		<span class="LikeText">
			' . XenForo_Template_Helper_Core::callHelper('likeshtml', array($message['likes'],$likesUrl,$message['like_date'],$message['likeUsers'])) . '
		</span>
	</div>
';
}
$__output .= $__compilerVar17;
unset($__compilerVar17);
}
$__output .= '</div>
	</div>

	';
$__compilerVar18 = '';
$__output .= $this->callTemplateHook('message_below', $__compilerVar18, array(
'post' => $message,
'message_id' => $messageId
));
unset($__compilerVar18);
$__output .= '
	
	';
$__compilerVar19 = '';
$__compilerVar20 = '';
$__compilerVar19 .= $this->callTemplateHook('ad_message_below', $__compilerVar20, array());
unset($__compilerVar20);
$__output .= $__compilerVar19;
unset($__compilerVar19);
$__output .= '
	
</li>';
