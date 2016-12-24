<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
$__extraData['h1'] = '';
$__output .= ' 

';
$__extraData['head']['canonical'] = '';
$__extraData['head']['canonical'] .= '
	<link rel="canonical" href="' . XenForo_Template_Helper_Core::link('canonical:members', $user, array(
'page' => $page
)) . '" />';
$__output .= '

';
$__extraData['head']['description'] = '';
$__extraData['head']['description'] .= '
	<meta name="description" content="' . '' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' is a ' . XenForo_Template_Helper_Core::callHelper('stripHtml', array(
'0' => XenForo_Template_Helper_Core::callHelper('usertitle', array(
'0' => $user
))
)) . ' at ' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '' . '" />';
$__output .= '
	
';
$__extraData['head']['openGraph'] = '';
$__compilerVar1 = '';
$__compilerVar1 .= XenForo_Template_Helper_Core::link('canonical:members', $user, array());
$__compilerVar2 = '';
$__compilerVar2 .= htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8');
$__compilerVar3 = '';
$__compilerVar3 .= '' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' is a ' . XenForo_Template_Helper_Core::callHelper('stripHtml', array(
'0' => XenForo_Template_Helper_Core::callHelper('usertitle', array(
'0' => $user
))
)) . ' at ' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '';
$__compilerVar4 = '';
$__compilerVar4 .= XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $user,
'1' => 'm',
'2' => '',
'3' => 'true'
));
$__compilerVar5 = '';
$__compilerVar5 .= 'profile';
$__compilerVar6 = '';
$__compilerVar6 .= '
		<meta property="profile:username" content="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" />
		';
if ($user['gender'])
{
$__compilerVar6 .= '<meta property="profile:gender" content="' . htmlspecialchars($user['gender'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar6 .= '
	';
$__compilerVar7 = '';
if ($xenOptions['facebookAppId'] OR $xenOptions['facebookAdmins'])
{
$__compilerVar7 .= '
	<meta property="og:site_name" content="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
	';
if ($__compilerVar4)
{
$__compilerVar7 .= '<meta property="og:image" content="' . htmlspecialchars($__compilerVar4, ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar7 .= '
	<meta property="og:image" content="' . XenForo_Template_Helper_Core::callHelper('fullurl', array(
'0' => XenForo_Template_Helper_Core::styleProperty('ogLogoPath'),
'1' => '1'
)) . '" />
	<meta property="og:type" content="' . (($__compilerVar5) ? (htmlspecialchars($__compilerVar5, ENT_QUOTES, 'UTF-8')) : ('article')) . '" />
	<meta property="og:url" content="' . $__compilerVar1 . '" />
	<meta property="og:title" content="' . $__compilerVar2 . '" />
	';
if ($__compilerVar3)
{
$__compilerVar7 .= '<meta property="og:description" content="' . $__compilerVar3 . '" />';
}
$__compilerVar7 .= '
	' . $__compilerVar6 . '
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar7 .= '<meta property="fb:app_id" content="' . htmlspecialchars($xenOptions['facebookAppId'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar7 .= '
	';
if ($xenOptions['facebookAdmins'])
{
$__compilerVar7 .= '<meta property="fb:admins" content="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $xenOptions['facebookAdmins'],
'1' => ','
)) . '" />';
}
$__compilerVar7 .= '
';
}
$__extraData['head']['openGraph'] .= $__compilerVar7;
unset($__compilerVar1, $__compilerVar2, $__compilerVar3, $__compilerVar4, $__compilerVar5, $__compilerVar6, $__compilerVar7);
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:members', $user, array()), 'value' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'));
$__output .= '

';
$this->addRequiredExternal('css', 'member_view');
$__output .= '
';
$this->addRequiredExternal('js', 'js/xenforo/quick_reply_profile.js');
$__output .= '

<div class="profilePage" itemscope="itemscope" itemtype="http://data-vocabulary.org/Person">

	<div class="mast">
		<div class="avatarScaler">
			';
if ($visitor['user_id'] == $user['user_id'])
{
$__output .= '
				<a class="Av' . htmlspecialchars($user['user_id'], ENT_QUOTES, 'UTF-8') . 'l OverlayTrigger" href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '">
					<img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $user,
'1' => 'l',
'2' => '',
'3' => 'true'
)) . '" alt="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" style="' . XenForo_Template_Helper_Core::callHelper('avatarCropCss', array(
'0' => $user
)) . '" itemprop="photo" />
				</a>
			';
}
else
{
$__output .= '
				<span class="Av' . htmlspecialchars($user['user_id'], ENT_QUOTES, 'UTF-8') . 'l">
					<img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $user,
'1' => 'l',
'2' => '',
'3' => 'true'
)) . '" alt="' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '" style="' . XenForo_Template_Helper_Core::callHelper('avatarCropCss', array(
'0' => $user
)) . '" itemprop="photo" />
				</span>
			';
}
$__output .= '
		</div>
		
		';
$__compilerVar8 = '';
$__compilerVar9 = '';
$__compilerVar9 .= '
	
		';
$__compilerVar10 = '';
$__compilerVar10 .= '
				';
$__compilerVar11 = '';
$__compilerVar10 .= $this->callTemplateHook('ad_member_view_below_avatar', $__compilerVar11, array());
unset($__compilerVar11);
$__compilerVar10 .= '
				
				
				
				
				
				
				
			';
if (trim($__compilerVar10) !== '')
{
$__compilerVar9 .= '
			' . $__compilerVar10 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar9 .= '
			<div>' . 'Template' . ': ad_member_view_below_avatar</div>
		';
}
unset($__compilerVar10);
$__compilerVar9 .= '
	
	';
if (trim($__compilerVar9) !== '')
{
$__compilerVar8 .= '
	
	<div class="section ' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers_sidebar')) ? ('') : ('infoBlock')) . ' funbox">
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers_sidebar')) ? ('') : ('secondaryContent')) . ' funboxWrapper">
	' . $__compilerVar9 . '
	</div>
	</div>
	
';
}
unset($__compilerVar9);
$__output .= $__compilerVar8;
unset($__compilerVar8);
$__output .= '
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__output .= '
';
$this->addRequiredExternal('css', 'conversationbutton_profile');
$__output .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShow'))
{
$__output .= '
';
if ($canStartConversation)
{
$__output .= '
    <dl class="conversationButton convButtonMobile"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
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
$__output .= ' >' . 'Start a conversation' . '</a></dl>
';
}
$__output .= '
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaMobile'))
{
$__output .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonMobile {
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
$__output .= '

		';
$__compilerVar12 = '';
$__output .= $this->callTemplateHook('member_view_sidebar_start', $__compilerVar12, array(
'user' => $user
));
unset($__compilerVar12);
$__output .= '

		<div class="section infoBlock">
			<div class="secondaryContent pairsJustified">

				';
$__compilerVar13 = '';
$__compilerVar13 .= '
				
				';
if ($canViewOnlineStatus)
{
$__compilerVar13 .= '
					<dl><dt>' . 'Last Activity' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($user['effective_last_activity'],array(
'time' => '$user.effective_last_activity'
))) . '</dd></dl>
				';
}
$__compilerVar13 .= '

				<dl><dt>' . 'Joined' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::date($user['register_date'], '') . '</dd></dl>

				<dl><dt>' . 'Messages' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::numberFormat($user['message_count'], '0') . '</dd></dl>

				<dl><dt>' . 'Likes Received' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::numberFormat($user['like_count'], '0') . '</dd></dl>

				';
if ($xenOptions['enableTrophies'])
{
$__compilerVar13 .= '
					<dl><dt>' . 'Trophy Points' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('members/trophies', $user, array()) . '" class="OverlayTrigger">' . XenForo_Template_Helper_Core::numberFormat($user['trophy_points'], '0') . '</a></dd></dl>
				';
}
$__compilerVar13 .= '
					
				';
if ($canViewWarnings)
{
$__compilerVar13 .= '
					<dl><dt>' . 'Warning Points' . ':</dt><dd>' . XenForo_Template_Helper_Core::numberFormat($user['warning_points'], '0') . '</dd></dl>
				';
}
$__compilerVar13 .= '
				';
if ($bookmarksCount > -1)
{
$__compilerVar13 .= '
					<dl><dt>' . 'Bookmarks' . ':</dt><dd>' . XenForo_Template_Helper_Core::numberFormat($bookmarksCount, '0') . '</dd></dl>
				';
}
$__compilerVar13 .= '
					
				';
$__output .= $this->callTemplateHook('member_view_info_block', $__compilerVar13, array());
unset($__compilerVar13);
$__output .= '

			</div>
			';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsActive'))
{
$__compilerVar14 = '';
$__compilerVar14 .= '
';
if (!XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsBadgeCSS'))
{
$__compilerVar14 .= '
    ';
$this->addRequiredExternal('css', 'userrankribbons');
$__compilerVar14 .= '
';
}
$__compilerVar14 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsBadgeCSS'))
{
$__compilerVar14 .= '
    ';
$this->addRequiredExternal('css', 'userrankribbonsbadge');
$__compilerVar14 .= '
';
}
$__compilerVar14 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsSoftResponsiveFix'))
{
$__compilerVar14 .= '
    ';
$this->addRequiredExternal('css', 'UserRankRibbonsSoftResponsiveFix');
$__compilerVar14 .= '
';
}
$__compilerVar14 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsXenMoodsFix'))
{
$__compilerVar14 .= '
    ';
$this->addRequiredExternal('css', 'UserRankRibbonsXenMoodsFix');
$__compilerVar14 .= '
';
}
$__compilerVar14 .= '
    
';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsActive'))
{
$__compilerVar14 .= '

	<ul class="ribbon">
    
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1'))
{
$__compilerVar14 .= '
			<li class="ribbon1">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2'))
{
$__compilerVar14 .= '
			<li class="ribbon2">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3'))
{
$__compilerVar14 .= '
			<li class="ribbon3">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4'))
{
$__compilerVar14 .= '
			<li class="ribbon4">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5'))
{
$__compilerVar14 .= '
			<li class="ribbon5">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6'))
{
$__compilerVar14 .= '
			<li class="ribbon6">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7'))
{
$__compilerVar14 .= '
			<li class="ribbon7">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8'))
{
$__compilerVar14 .= '
			<li class="ribbon8">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9'))
{
$__compilerVar14 .= '
			<li class="ribbon9">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10'))
{
$__compilerVar14 .= '
			<li class="ribbon10">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11'))
{
$__compilerVar14 .= '
			<li class="ribbon11">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12'))
{
$__compilerVar14 .= '
			<li class="ribbon12">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13'))
{
$__compilerVar14 .= '
			<li class="ribbon13">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14'))
{
$__compilerVar14 .= '
			<li class="ribbon14">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15'))
{
$__compilerVar14 .= '
			<li class="ribbon15">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16'))
{
$__compilerVar14 .= '
			<li class="ribbon16">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17'))
{
$__compilerVar14 .= '
			<li class="ribbon17">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18'))
{
$__compilerVar14 .= '
			<li class="ribbon18">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19'))
{
$__compilerVar14 .= '
			<li class="ribbon19">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20'))
{
$__compilerVar14 .= '
			<li class="ribbon20">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21'))
{
$__compilerVar14 .= '
			<li class="ribbon21">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22'))
{
$__compilerVar14 .= '
			<li class="ribbon22">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23'))
{
$__compilerVar14 .= '
			<li class="ribbon23">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24'))
{
$__compilerVar14 .= '
			<li class="ribbon24">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25'))
{
$__compilerVar14 .= '
			<li class="ribbon25">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26'))
{
$__compilerVar14 .= '
			<li class="ribbon26">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27'))
{
$__compilerVar14 .= '
			<li class="ribbon27">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28'))
{
$__compilerVar14 .= '
			<li class="ribbon28">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29'))
{
$__compilerVar14 .= '
			<li class="ribbon29">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30'))
{
$__compilerVar14 .= '
			<li class="ribbon30">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31'))
{
$__compilerVar14 .= '
			<li class="ribbon31">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32'))
{
$__compilerVar14 .= '
			<li class="ribbon32">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33'))
{
$__compilerVar14 .= '
			<li class="ribbon33">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34'))
{
$__compilerVar14 .= '
			<li class="ribbon34">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $user,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35'))
{
$__compilerVar14 .= '
			<li class="ribbon35">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35Title') . '
			</li>
		';
}
$__compilerVar14 .= '
		
	</ul>
';
}
$__output .= $__compilerVar14;
unset($__compilerVar14);
}
$__output .= '
		</div>

		';
$__compilerVar15 = '';
$__output .= $this->callTemplateHook('member_view_sidebar_middle1', $__compilerVar15, array(
'user' => $user
));
unset($__compilerVar15);
$__output .= '

		';
if ($following OR $followers)
{
$__output .= '
		<div class="followBlocks">
			';
if ($following)
{
$__output .= '
				<div class="section infoBlock">
					<div class="secondaryContent">
					<h3 class="textWithCount" title="' . '' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' is following ' . XenForo_Template_Helper_Core::numberFormat($followingCount, '0') . ' members.' . '">
						<span class="text">' . 'Following' . '</span>
						<a href="' . XenForo_Template_Helper_Core::link('members/following', $user, array()) . '" class="count OverlayTrigger">' . XenForo_Template_Helper_Core::numberFormat($followingCount, '0') . '</a>
					</h3>
					<div class="avatarHeap">
						<ol>
						';
foreach ($following AS $followUserId => $followUser)
{
$__output .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($followUser,false,array(
'user' => '$followUser',
'size' => 's',
'text' => htmlspecialchars($followUser['username'], ENT_QUOTES, 'UTF-8'),
'class' => 'Tooltip',
'title' => htmlspecialchars($followUser['username'], ENT_QUOTES, 'UTF-8'),
'itemprop' => 'contact'
),'')) . '
							</li>
						';
}
$__output .= '
						</ol>
					</div>
					';
if ($followingCount > count($following))
{
$__output .= '
						<div class="sectionFooter"><a href="' . XenForo_Template_Helper_Core::link('members/following', $user, array()) . '" class="OverlayTrigger">' . 'Show All' . '</a></div>
					';
}
$__output .= '
					</div>
				</div>
			';
}
$__output .= '

			';
if ($followers)
{
$__output .= '
				<div class="section infoBlock">
					<div class="secondaryContent">
					<h3 class="textWithCount" title="' . '' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' is being followed by ' . XenForo_Template_Helper_Core::numberFormat($followersCount, '0') . ' members.' . '">
						<span class="text">' . 'Followers' . '</span>
						<a href="' . XenForo_Template_Helper_Core::link('members/followers', $user, array()) . '" class="count OverlayTrigger">' . XenForo_Template_Helper_Core::numberFormat($followersCount, '0') . '</a>
					</h3>
					<div class="avatarHeap">
						<ol>
						';
foreach ($followers AS $followUserId => $followUser)
{
$__output .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($followUser,false,array(
'user' => '$followUser',
'size' => 's',
'text' => htmlspecialchars($followUser['username'], ENT_QUOTES, 'UTF-8'),
'class' => 'Tooltip',
'title' => htmlspecialchars($followUser['username'], ENT_QUOTES, 'UTF-8'),
'itemprop' => 'contact'
),'')) . '
							</li>
						';
}
$__output .= '
						</ol>
					</div>
					';
if ($followersCount > count($followers))
{
$__output .= '
						<div class="sectionFooter"><a href="' . XenForo_Template_Helper_Core::link('members/followers', $user, array()) . '" class="OverlayTrigger">' . 'Show All' . '</a></div>
					';
}
$__output .= '
					</div>
				</div>
			';
}
$__output .= '
		</div>
		';
}
$__output .= '

		';
$__compilerVar16 = '';
if ($user['trophyCache'] && $xenOptions['waindigo_trophies_profilePagePosition'] == ('sidebar'))
{
$__compilerVar16 .= '
	';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__compilerVar16 .= '
	<div class="section trophies">
		<h3 class="subHeading textWithCount">
			<span class="text">' . 'Trophies' . '</span>
			<a href="' . XenForo_Template_Helper_Core::link('members/trophies', $user, array()) . '" class="count OverlayTrigger">' . XenForo_Template_Helper_Core::numberFormat($user['trophy_count'], '0') . '</a>
		</h3>
		<div class="primaryContent">
			<ol>
			';
foreach ($user['trophyCache'] AS $trophy)
{
$__compilerVar16 .= '
				<li>
					';
$__compilerVar17 = '';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__compilerVar17 .= '
<a href="' . XenForo_Template_Helper_Core::link('members/trophies', $user, array()) . '" class="OverlayTrigger">		
<img src="' . htmlspecialchars($trophy['iconUrl'], ENT_QUOTES, 'UTF-8') . '" title="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" class="trophyIconMini" />
</a>';
$__compilerVar16 .= $__compilerVar17;
unset($__compilerVar17);
$__compilerVar16 .= '
				</li>
			';
}
$__compilerVar16 .= '
			</ol>
		</div>
		<div class="sectionFooter"><a href="' . XenForo_Template_Helper_Core::link('members/trophies', $user, array()) . '" class="OverlayTrigger">' . 'Show All' . '</a></div>
	</div>
';
}
$__output .= $__compilerVar16;
unset($__compilerVar16);
$__output .= '
';
$__compilerVar18 = '';
$__output .= $this->callTemplateHook('member_view_sidebar_middle2', $__compilerVar18, array(
'user' => $user
));
unset($__compilerVar18);
$__output .= '

		';
$__compilerVar19 = '';
$__compilerVar19 .= '
				';
if ($user['gender'])
{
$__compilerVar19 .= '
					<dl><dt>' . 'Gender' . ':</dt>
						<dd itemprop="gender">';
if ($user['gender'] == ('male'))
{
$__compilerVar19 .= 'Male';
}
else
{
$__compilerVar19 .= 'Female';
}
$__compilerVar19 .= '</dd></dl>
				';
}
$__compilerVar19 .= '

				';
if ($birthday)
{
$__compilerVar19 .= '
					<dl><dt>' . 'Birthday' . ':</dt>
						<dd><span class="dob" itemprop="dob">' . XenForo_Template_Helper_Core::date($birthday['timeStamp'], $birthday['format']) . '</span> ';
if ($birthday['age'])
{
$__compilerVar19 .= '<span class="age">(' . 'Age' . ': ' . XenForo_Template_Helper_Core::numberFormat($birthday['age'], '0') . ')</span>';
}
$__compilerVar19 .= '</dd></dl>
				';
}
$__compilerVar19 .= '

				';
if ($user['homepage'])
{
$__compilerVar19 .= '
					<dl><dt>' . 'Home Page' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($user['homepage'], ENT_QUOTES, 'UTF-8'),
'1' => 'x'
)) . '" rel="nofollow" target="_blank" itemprop="url">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($user['homepage'], ENT_QUOTES, 'UTF-8')
)) . '</a></dd></dl>
				';
}
$__compilerVar19 .= '

				';
if ($user['location'])
{
$__compilerVar19 .= '
					<dl><dt>' . 'Location' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('misc/location-info', '', array(
'location' => XenForo_Template_Helper_Core::string('censor', array(
'0' => $user['location'],
'1' => 'x'
))
)) . '" rel="nofollow" target="_blank" itemprop="address">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($user['location'], ENT_QUOTES, 'UTF-8')
)) . '</a></dd></dl>
				';
}
$__compilerVar19 .= '

				';
if ($user['occupation'])
{
$__compilerVar19 .= '
					<dl><dt>' . 'Occupation' . ':</dt>
						<dd itemprop="role">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($user['occupation'], ENT_QUOTES, 'UTF-8')
)) . '</dd></dl>
				';
}
$__compilerVar19 .= '
			';
if (trim($__compilerVar19) !== '')
{
$__output .= '
		<div class="section infoBlock">
			<dl class="secondaryContent pairsJustified">
			' . $__compilerVar19 . '
			</dl>
		</div>
		';
}
unset($__compilerVar19);
$__output .= '
		
		';
if ($user['allow_view_profile'] == ('everyone'))
{
$__output .= '
			' . '
		';
}
$__output .= '

		';
$__compilerVar21 = '';
$__output .= $this->callTemplateHook('member_view_sidebar_end', $__compilerVar21, array(
'user' => $user
));
unset($__compilerVar21);
$__output .= '
		
		';
$__compilerVar22 = '';
$__compilerVar23 = '';
$__compilerVar23 .= '
	
		';
$__compilerVar24 = '';
$__compilerVar24 .= '
				';
$__compilerVar25 = '';
$__compilerVar24 .= $this->callTemplateHook('ad_member_view_sidebar_bottom', $__compilerVar25, array());
unset($__compilerVar25);
$__compilerVar24 .= '
				
				
				
				
				
				
				
			';
if (trim($__compilerVar24) !== '')
{
$__compilerVar23 .= '
			' . $__compilerVar24 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar23 .= '
			<div>' . 'Template' . ': ad_member_view_sidebar_bottom</div>
		';
}
unset($__compilerVar24);
$__compilerVar23 .= '
	
	';
if (trim($__compilerVar23) !== '')
{
$__compilerVar22 .= '
	
	<div class="section ' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers_sidebar')) ? ('') : ('infoBlock')) . ' funbox">
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers_sidebar')) ? ('') : ('secondaryContent')) . ' funboxWrapper">
	' . $__compilerVar23 . '
	</div>
	</div>
	
';
}
unset($__compilerVar23);
$__output .= $__compilerVar22;
unset($__compilerVar22);
$__output .= '

	</div>

	<div class="mainProfileColumn">

		<div class="section primaryUserBlock">
			<div class="mainText secondaryContent">
				<div class="followBlock">
					';
$__compilerVar26 = '';
$__compilerVar26 .= '
						';
$__compilerVar27 = '';
$__compilerVar27 .= '
										';
if ($canWarn)
{
$__compilerVar27 .= '
											<li><a href="' . XenForo_Template_Helper_Core::link('members/warn', $user, array()) . '">' . 'Warn' . '</a></li>
										';
}
$__compilerVar27 .= '
										';
if ($canCleanSpam)
{
$__compilerVar27 .= '
											<li><a href="' . XenForo_Template_Helper_Core::link('spam-cleaner', $user, array(
'noredirect' => '1'
)) . '" class="deleteSpam OverlayTrigger">' . 'Spam' . '</a></li>
										';
}
$__compilerVar27 .= '
										';
if ($canViewIps)
{
$__compilerVar27 .= '
											<li><a href="' . XenForo_Template_Helper_Core::link('members/shared-ips', $user, array()) . '" class="OverlayTrigger">' . 'Shared IPs' . '</a></li>
										';
}
$__compilerVar27 .= '
										';
if ($canBanUsers)
{
$__compilerVar27 .= '
											';
if ($user['is_banned'])
{
$__compilerVar27 .= '
												<li><a href="' . XenForo_Template_Helper_Core::adminLink('banning/users/lift', $user, array()) . '">' . 'Lift Ban' . '</a></li>
											';
}
else
{
$__compilerVar27 .= '
												<li><a href="' . XenForo_Template_Helper_Core::adminLink('banning/users/add', $user, array()) . '">' . 'Ban' . '</a></li>
											';
}
$__compilerVar27 .= '
										';
}
$__compilerVar27 .= '
										';
if ($canEditUser)
{
$__compilerVar27 .= '
											<li><a href="' . XenForo_Template_Helper_Core::link('members/edit', $user, array()) . '">' . 'Edit' . '</a></li>
										';
}
$__compilerVar27 .= '
									';
if (trim($__compilerVar27) !== '')
{
$__compilerVar26 .= '
							<li><div class="Popup moderatorToolsPopup">
								<a rel="Menu">' . 'Moderator Tools' . '</a>
								<div class="Menu">
									<div class="primaryContent menuHeader"><h3>' . 'Moderator Tools' . '</h3></div>
									<ul class="secondaryContent blockLinksList">
									' . $__compilerVar27 . '
									</ul>
								</div>
							</div></li>
						';
}
unset($__compilerVar27);
$__compilerVar26 .= '

						' . XenForo_Template_Helper_Core::callHelper('followhtml', array($user,array(
'user' => '$user',
'title' => '',
'tag' => 'li'
))) . '
						';
if (XenForo_Template_Helper_Core::callHelper('isIgnored', array(
'0' => $user['user_id']
)))
{
$__compilerVar26 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('members/unignore', $user, array()) . '" class="FollowLink">' . 'Unignore' . '</a></li>
						';
}
else if ($canIgnore)
{
$__compilerVar26 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('members/ignore', $user, array()) . '" class="FollowLink">' . 'Ignore' . '</a></li>
						';
}
$__compilerVar26 .= '
						';
if ($canReport)
{
$__compilerVar26 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('members/report', $user, array()) . '" class="OverlayTrigger">' . 'Report' . '</a></li>
						';
}
$__compilerVar26 .= '
						';
if (trim($__compilerVar26) !== '')
{
$__output .= '
					<ul>
						' . $__compilerVar26 . '
					</ul>
					';
}
unset($__compilerVar26);
$__output .= '
					';
if ($visitor['user_id'] AND $user['user_id'] != $visitor['user_id'])
{
$__output .= '
						<div class="muted">
							';
if ($user['isFollowingVisitor'])
{
$__output .= '
								' . '' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' is following you' . '
							';
}
else
{
$__output .= '
								' . '' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' is not following you' . '
							';
}
$__output .= '
						</div>
					';
}
$__output .= '
				</div>

				<h1 itemprop="name" class="username">' . XenForo_Template_Helper_Core::callHelper('richUserName', array(
'0' => $user
)) . '</h1>

				<p class="userBlurb">
					' . XenForo_Template_Helper_Core::callHelper('userBlurb', array(
'0' => $user
)) . '
				</p>
				';
$__compilerVar28 = '';
$__compilerVar28 .= XenForo_Template_Helper_Core::callHelper('userBanner', array(
'0' => $user
));
if (trim($__compilerVar28) !== '')
{
$__output .= '
					<div class="userBanners">
						' . $__compilerVar28 . '
					</div>
				';
}
unset($__compilerVar28);
$__output .= '

				
';
$__compilerVar29 = '';
if ($user['trophyCache'] && $xenOptions['waindigo_trophies_profilePagePosition'] == ('top'))
{
$__compilerVar29 .= '
	';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__compilerVar29 .= '
	<p class="trophies" id="trophyIcons">
		';
foreach ($user['trophyCache'] AS $trophy)
{
$__compilerVar29 .= '
			';
$__compilerVar30 = '';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__compilerVar30 .= '
<a href="' . XenForo_Template_Helper_Core::link('members/trophies', $user, array()) . '" class="OverlayTrigger">		
<img src="' . htmlspecialchars($trophy['iconUrl'], ENT_QUOTES, 'UTF-8') . '" title="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" class="trophyIconMini" />
</a>';
$__compilerVar29 .= $__compilerVar30;
unset($__compilerVar30);
$__compilerVar29 .= '
		';
}
$__compilerVar29 .= '
	</p>
';
}
$__output .= $__compilerVar29;
unset($__compilerVar29);
$__output .= '
';
if ($user['status'])
{
$__output .= '<p class="userStatus" id="UserStatus">' . XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'member_view',
'1' => $user['status']
)) . ' ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($user['status_date'],array(
'time' => '$user.status_date'
))) . '</p>';
}
$__output .= '

				';
if ($canViewOnlineStatus)
{
$__output .= '
					<dl class="pairsInline lastActivity">
						<dt>' . '' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' was last seen' . ':</dt>
						<dd>
							';
if ($user['activity'] AND $canViewCurrentActivity)
{
$__output .= '
								';
if ($user['activity']['description'])
{
$__output .= '
									' . htmlspecialchars($user['activity']['description'], ENT_QUOTES, 'UTF-8');
if ($user['activity']['itemTitle'])
{
$__output .= ' <em><a href="' . htmlspecialchars($user['activity']['itemUrl'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($user['activity']['itemTitle'], ENT_QUOTES, 'UTF-8') . '</a></em>';
}
$__output .= ',
								';
}
else
{
$__output .= '
									' . 'Viewing unknown page' . ',
								';
}
$__output .= '
								' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($user['effective_last_activity'],array(
'time' => htmlspecialchars($user['effective_last_activity'], ENT_QUOTES, 'UTF-8'),
'class' => 'muted'
))) . '
							';
}
else
{
$__output .= '
								' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($user['effective_last_activity'],array(
'time' => htmlspecialchars($user['effective_last_activity'], ENT_QUOTES, 'UTF-8')
))) . '
							';
}
$__output .= '
						</dd>
					</dl>
				';
}
$__output .= '
			</div>
			
			<ul class="tabs mainTabs Tabs" data-panes="#ProfilePanes > li" data-history="on">
				<li><a href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#profilePosts">' . 'Profile Posts' . '</a></li>
				';
if ($showRecentActivity)
{
$__output .= '<li><a href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#recentActivity">' . 'Recent Activity' . '</a></li>';
}
$__output .= '
				<li><a href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#postings">' . 'Postings' . '</a></li>
				<li><a href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#info">' . 'Information' . '</a></li>
				';
if ($warningCount)
{
$__output .= '<li><a href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#warnings">' . 'Warnings' . ' (' . XenForo_Template_Helper_Core::numberFormat($warningCount, '0') . ')</a></li>';
}
$__output .= '
				';
if ($bookmarksTab)
{
$__output .= '
					<li><a href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#bookmarks">' . 'Bookmarks' . '</a></li>
				';
}
$__output .= '
				';
$__compilerVar31 = '';
$__output .= $this->callTemplateHook('member_view_tabs_heading', $__compilerVar31, array(
'user' => $user
));
unset($__compilerVar31);
$__output .= '
			</ul>
		</div>

		<ul id="ProfilePanes">
			<li id="profilePosts" class="profileContent">

			';
if ($canViewProfilePosts)
{
$__output .= '
				';
$this->addRequiredExternal('css', 'message_simple');
$__output .= '

				';
if ($canPostOnProfile)
{
$__output .= '
					<form action="' . XenForo_Template_Helper_Core::link('members/post', $user, array()) . '" method="post"
						class="messageSimple profilePoster AutoValidator primaryContent" id="ProfilePoster"
						data-optInOut="optIn">
						' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,(true),array(
'user' => '$visitor',
'size' => 's',
'img' => 'true'
),'')) . '
						<div class="messageInfo">
							';
if ($visitor['user_id'] == $user['user_id'])
{
$__output .= '
								';
if ($wysiwyg)
{
$__output .= '
									' . $editorTemplate . '
								';
}
else
{
$__output .= '
									<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" data-acurl="' . XenForo_Template_Helper_Core::link('members/bdtagme-find', false, array()) . '" placeholder="' . 'Update your status' . '..." rows="3" cols="50" data-statusEditorCounter="#statusEditorCounter"></textarea>
								';
}
$__output .= '
							';
}
else
{
$__output .= '
								';
if ($wysiwyg)
{
$__output .= '
									' . $editorTemplate . '
								';
}
else
{
$__output .= '
									<textarea name="message" class="textCtrl UserTagger Elastic" data-acurl="' . XenForo_Template_Helper_Core::link('members/bdtagme-find', false, array()) . '" placeholder="' . 'Write something' . '..." rows="3" cols="50"></textarea>
								';
}
$__output .= '
							';
}
$__output .= '
							<div class="submitUnit">
								<span id="statusEditorCounter" title="' . 'Characters remaining' . '"></span>
								<input type="submit" class="button primary" value="' . 'Post' . '" accesskey="s" />
								<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
							</div>
						</div>
					</form>
				';
}
$__output .= '
				
				';
$__compilerVar32 = '';
$__compilerVar33 = '';
$__compilerVar33 .= '
	
		';
$__compilerVar34 = '';
$__compilerVar34 .= '
				';
$__compilerVar35 = '';
$__compilerVar34 .= $this->callTemplateHook('ad_member_view_above_messages', $__compilerVar35, array());
unset($__compilerVar35);
$__compilerVar34 .= '
				
				
				
				
				
				
				
			';
if (trim($__compilerVar34) !== '')
{
$__compilerVar33 .= '
			' . $__compilerVar34 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar33 .= '
			<div>' . 'Template' . ': ad_member_view_above_messages</div>
		';
}
unset($__compilerVar34);
$__compilerVar33 .= '
	
	';
if (trim($__compilerVar33) !== '')
{
$__compilerVar32 .= '
	
	<div class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_removeAdWrappers')) ? ('section') : ('sectionMain')) . ' funbox">
	<div class="funboxWrapper">
	' . $__compilerVar33 . '
	</div>
	</div>
	
';
}
unset($__compilerVar33);
$__output .= $__compilerVar32;
unset($__compilerVar32);
$__output .= '

				<form action="' . XenForo_Template_Helper_Core::link('inline-mod/profile-post/switch', false, array()) . '" method="post"
					class="InlineModForm section"
					data-cookieName="profilePosts"
					data-controls="#InlineModControls"
					data-imodOptions="#ModerationSelect option">

					<ol class="messageSimpleList" id="ProfilePostList">
						';
if ($profilePosts)
{
$__output .= '
							';
foreach ($profilePosts AS $profilePost)
{
$__output .= '
								';
if ($profilePost['isDeleted'])
{
$__output .= '
									';
$__compilerVar36 = '';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar36 .= '

';
$__compilerVar37 = '';
$__compilerVar37 .= 'profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar38 = '';
$__compilerVar38 .= '
		';
if ($profilePost['canInlineMod'])
{
$__compilerVar38 .= '<input type="checkbox" name="profilePosts[]" value="' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck item" data-target="#profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select this post by ' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '' . '" />';
}
$__compilerVar38 .= '
		' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date',
'class' => 'muted item'
))) . '
		<a href="' . XenForo_Template_Helper_Core::link('profile-posts/show', $profilePost, array()) . '" class="MessageLoader control item show" data-messageSelector="#profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span>' . 'Show' . '</a>
	';
$__compilerVar39 = '';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar39 .= '

<li id="' . htmlspecialchars($__compilerVar37, ENT_QUOTES, 'UTF-8') . '" class="messageSimple deleted placeholder ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '">

	<div class="placeholderContent secondaryContent">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$message',
'size' => 's',
'img' => 'true'
),'')) . '
				
		<p>
			' . 'This message by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $profilePost
)) . ' has been removed from public view.' . '
			';
if ($profilePost['delete_username'])
{
$__compilerVar39 .= '
				' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $profilePost['deleteInfo']
)) . '' . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['delete_date'],array(
'time' => htmlspecialchars($profilePost['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($profilePost['delete_reason'])
{
$__compilerVar39 .= ', ' . 'Reason' . ': ' . htmlspecialchars($profilePost['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar39 .= '.
			';
}
$__compilerVar39 .= '
		</p>
		<div class="privateControls">' . $__compilerVar38 . '</div>
		
	</div>

</li>';
$__compilerVar36 .= $__compilerVar39;
unset($__compilerVar37, $__compilerVar38, $__compilerVar39);
$__output .= $__compilerVar36;
unset($__compilerVar36);
$__output .= '
								';
}
else
{
$__output .= '
									';
$__compilerVar40 = '';
$this->addRequiredExternal('js', 'js/xenforo/comments_simple.js');
$__compilerVar40 .= '

';
if ($showReceiverName)
{
$__compilerVar40 .= '
	';
$messagePosterHtml = '';
$messagePosterHtml .= '
		<span class="poster">
			' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array())) . '
			';
if ($profilePost['user_id'] != $profilePost['profile_user_id'] AND $profilePost['profileUser'])
{
$messagePosterHtml .= '
				<span class="muted">' . (($pageIsRtl) ? ('&#9668;') : ('&#9658;')) . '</span> ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost['profileUser'],'',(true),array())) . '
			';
}
$messagePosterHtml .= '
		</span>
	';
$__compilerVar40 .= '
';
}
else
{
$__compilerVar40 .= '
	';
$messagePosterHtml = '';
$__compilerVar40 .= '
';
}
$__compilerVar40 .= '

';
$__compilerVar41 = '';
$__compilerVar41 .= 'profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar42 = '';
$__compilerVar42 .= '

		<div class="messageMeta">
				<div class="privateControls">
					';
if ($profilePost['canInlineMod'])
{
$__compilerVar42 .= '<input type="checkbox" name="profilePosts[]" value="' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck item" data-target="#profile-post-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select this post by ' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '' . '" />';
}
$__compilerVar42 .= '
					<a href="' . XenForo_Template_Helper_Core::link('profile-posts', $profilePost, array()) . '" title="' . 'Permalink' . '" class="item muted">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($profilePost['post_date'],array(
'time' => '$profilePost.post_date'
))) . '</a>
					';
$__compilerVar43 = '';
$__compilerVar43 .= '
					';
if ($profilePost['canEdit'])
{
$__compilerVar43 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/edit', $profilePost, array()) . '" class="OverlayTrigger item control edit"><span></span>' . 'Edit' . '</a>
					';
}
$__compilerVar43 .= '
					';
if ($profilePost['canDelete'])
{
$__compilerVar43 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/delete', $profilePost, array()) . '" class="item OverlayTrigger control delete"><span></span>' . 'Delete' . '</a>
					';
}
$__compilerVar43 .= '
					';
if ($profilePost['canCleanSpam'])
{
$__compilerVar43 .= '
						<a href="' . XenForo_Template_Helper_Core::link('spam-cleaner', $profilePost, array()) . '" class="item control deleteSpam OverlayTrigger"><span></span>' . 'Spam' . '</a
					>';
}
$__compilerVar43 .= '
					';
if ($canViewIps AND $profilePost['ip_id'])
{
$__compilerVar43 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/ip', $profilePost, array()) . '" class="item control ip OverlayTrigger"><span></span>' . 'IP' . '</a>
					';
}
$__compilerVar43 .= '
					
					';
if ($profilePost['canWarn'])
{
$__compilerVar43 .= '
						<a href="' . XenForo_Template_Helper_Core::link('members/warn', $profilePost, array(
'content_type' => 'profile_post',
'content_id' => $profilePost['profile_post_id']
)) . '" class="item control warn"><span></span>' . 'Warn' . '</a>
					';
}
else if ($profilePost['warning_id'] && $canViewWarnings)
{
$__compilerVar43 .= '
						<a href="' . XenForo_Template_Helper_Core::link('warnings', $profilePost, array()) . '" class="OverlayTrigger item control viewWarning"><span></span>' . 'View Warning' . '</a>
					';
}
$__compilerVar43 .= '
					';
if ($profilePost['canReport'])
{
$__compilerVar43 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/report', $profilePost, array()) . '" class="OverlayTrigger item control report" data-cacheOverlay="false"><span></span>' . 'Report' . '</a>
					';
}
$__compilerVar43 .= '
					
					';
$__compilerVar42 .= $this->callTemplateHook('profile_post_private_controls', $__compilerVar43, array(
'profilePost' => $profilePost
));
unset($__compilerVar43);
$__compilerVar42 .= '
				</div>
			';
$__compilerVar44 = '';
$__compilerVar44 .= '
					';
$__compilerVar45 = '';
$__compilerVar45 .= '
					';
if ($profilePost['canLike'])
{
$__compilerVar45 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/like', $profilePost, array()) . '" class="LikeLink item control ' . (($profilePost['like_date']) ? ('unlike') : ('like')) . '" data-container="#likes-wp-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span><span class="LikeLabel">' . (($profilePost['like_date']) ? ('Unlike') : ('Like')) . '</span></a>
					';
}
$__compilerVar45 .= '
					';
if ($profilePost['canComment'])
{
$__compilerVar45 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comment', $profilePost, array()) . '" class="CommentPoster item control postComment" data-commentArea="#commentSubmit-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span>' . 'Comment' . '</a>
					';
}
$__compilerVar45 .= '
					';
$__compilerVar44 .= $this->callTemplateHook('profile_post_public_controls', $__compilerVar45, array(
'profilePost' => $profilePost
));
unset($__compilerVar45);
$__compilerVar44 .= '
				';
if (trim($__compilerVar44) !== '')
{
$__compilerVar42 .= '
				<div class="publicControls">
				' . $__compilerVar44 . '
				</div>
			';
}
unset($__compilerVar44);
$__compilerVar42 .= '
		</div>

		<ol class="messageResponse">

			<li id="likes-wp-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '">
				';
if ($profilePost['likes'])
{
$__compilerVar42 .= '
					';
$__compilerVar46 = '';
$__compilerVar46 .= XenForo_Template_Helper_Core::link('profile-posts/likes', $profilePost, array());
$__compilerVar47 = '';
if ($profilePost['likes'])
{
$__compilerVar47 .= '
	';
$this->addRequiredExternal('css', 'likes_summary');
$__compilerVar47 .= '
	<div class="likesSummary secondaryContent">
		<span class="LikeText">
			' . XenForo_Template_Helper_Core::callHelper('likeshtml', array($profilePost['likes'],$__compilerVar46,$profilePost['like_date'],$profilePost['likeUsers'])) . '
		</span>
	</div>
';
}
$__compilerVar42 .= $__compilerVar47;
unset($__compilerVar46, $__compilerVar47);
$__compilerVar42 .= '
				';
}
$__compilerVar42 .= '
			</li>

			';
if ($profilePost['comments'])
{
$__compilerVar42 .= '

				';
if ($profilePost['comment_count'] > 3)
{
$__compilerVar42 .= '
					<li class="commentMore secondaryContent">
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments', $profilePost, array()) . '"
							class="CommentLoader"
							data-loadParams="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => array(
'before' => $profilePost['first_shown_comment_date']
)
)), ENT_QUOTES, 'UTF-8', true) . '">' . 'View previous comments' . '...</a>
					</li>
				';
}
$__compilerVar42 .= '

				';
foreach ($profilePost['comments'] AS $comment)
{
$__compilerVar42 .= '
					';
if ($comment['isDeleted'])
{
$__compilerVar42 .= '
						';
$__compilerVar48 = '';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar48 .= '

';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar48 .= '

<li id="profile-post-comment-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '" class="comment secondaryContent deleted' . (($comment['isIgnored']) ? (' ignored') : ('')) . '">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($comment,(true),array(
'user' => '$comment',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="commentInfo">
		<div class="commentContent">
			' . 'This message by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $comment
)) . ' has been removed from public view.' . '
			';
if ($comment['delete_username'])
{
$__compilerVar48 .= '
				' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $comment['deleteInfo']
)) . '' . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($comment['delete_date'],array(
'time' => htmlspecialchars($comment['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($comment['delete_reason'])
{
$__compilerVar48 .= ', ' . 'Reason' . ': ' . htmlspecialchars($comment['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar48 .= '.
			';
}
$__compilerVar48 .= '
		</div>
		
		<div class="commentControls">
			' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($comment['comment_date'],array(
'time' => '$comment.comment_date',
'class' => 'muted'
))) . '
			<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/show', $comment, array(
'overlay' => (($inOverlay) ? ('true') : (''))
)) . '" class="MessageLoader control item show" data-messageSelector="#profile-post-comment-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '"><span></span>' . 'Show' . '</a>
		</div>
	</div>
</li>';
$__compilerVar42 .= $__compilerVar48;
unset($__compilerVar48);
$__compilerVar42 .= '
					';
}
else
{
$__compilerVar42 .= '
						';
$__compilerVar49 = '';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar49 .= '

<li id="profile-post-comment-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '" class="comment secondaryContent ' . (($comment['isIgnored']) ? (' ignored') : ('')) . '">
	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($comment,(true),array(
'user' => '$comment',
'size' => 's',
'img' => 'true'
),'')) . '

	<div class="commentInfo">
		';
$__compilerVar50 = '';
$__compilerVar50 .= '
					';
if ($comment['warning_message'])
{
$__compilerVar50 .= '
						<li class="warningNotice"><span class="icon Tooltip" title="' . 'Warning' . '" data-tipclass="iconTip flipped"></span>' . htmlspecialchars($comment['warning_message'], ENT_QUOTES, 'UTF-8') . '</li>
					';
}
else if ($comment['isDeleted'])
{
$__compilerVar50 .= '
						<li class="deletedNotice"><span class="icon Tooltip" title="' . 'Deleted' . '" data-tipclass="iconTip flipped"></span>' . 'This message has been removed from public view.' . '</li>
					';
}
else if ($comment['isModerated'])
{
$__compilerVar50 .= '
						<li class="moderatedNotice"><span class="icon Tooltip" title="' . 'Awaiting moderation' . '" data-tipclass="iconTip flipped"></span>' . 'This message is awaiting moderator approval, and is invisible to normal visitors.' . '</li>
					';
}
$__compilerVar50 .= '
				';
if (trim($__compilerVar50) !== '')
{
$__compilerVar49 .= '
			<ul class="messageNotices">
				' . $__compilerVar50 . '
			</ul>
		';
}
unset($__compilerVar50);
$__compilerVar49 .= '
		<div class="commentContent">
			' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($comment,'',(true),array(
'class' => 'poster'
))) . '
			<article><blockquote>' . XenForo_Template_Helper_Core::callHelper('parseSmilies', array(
'0' => XenForo_Template_Helper_Core::callHelper('bodytext', array(
'0' => $comment['message']
))
)) . '</blockquote></article>
		</div>
		<div class="commentControls">
			' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($comment['comment_date'],array(
'time' => '$comment.comment_date',
'class' => 'muted'
))) . '
			';
if ($comment['canEdit'])
{
$__compilerVar49 .= '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/edit', $comment, array()) . '" class="OverlayTrigger item control edit"><span></span>' . 'Edit' . '</a>';
}
$__compilerVar49 .= '
			';
if ($comment['canDelete'])
{
$__compilerVar49 .= '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/delete', $comment, array()) . '" class="OverlayTrigger item control delete"><span></span>' . 'Delete' . '</a>';
}
$__compilerVar49 .= '
			';
if ($comment['canReport'])
{
$__compilerVar49 .= '<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/report', $comment, array()) . '" class="OverlayTrigger item control report"><span></span>' . 'Report' . '</a>';
}
$__compilerVar49 .= '
			';
$__compilerVar51 = '';
$__compilerVar51 .= '
						';
$__compilerVar52 = '';
$__compilerVar52 .= '
								';
if ($comment['canUndelete'])
{
$__compilerVar52 .= '<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/undelete', $comment, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger item control undelete"><span></span>' . 'Undelete' . '</a></li>';
}
$__compilerVar52 .= '
								';
if ($comment['canCleanSpam'])
{
$__compilerVar52 .= '<li><a href="' . XenForo_Template_Helper_Core::link('spam-cleaner', $comment, array()) . '" class="item control deleteSpam OverlayTrigger"><span></span>' . 'Spam' . '</a></li>';
}
$__compilerVar52 .= '
								';
if ($comment['canViewIps'])
{
$__compilerVar52 .= '<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/ip', $comment, array()) . '" class="OverlayTrigger item control ip"><span></span>' . 'IP' . '</a></li>';
}
$__compilerVar52 .= '
								';
if ($comment['canWarn'])
{
$__compilerVar52 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('members/warn', $comment, array(
'content_type' => 'profile_post_comment',
'content_id' => $comment['profile_post_comment_id']
)) . '" class="item control warn"><span></span>' . 'Warn' . '</a></li>
								';
}
else if ($comment['warning_id'] && $canViewWarnings)
{
$__compilerVar52 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('warnings', $comment, array()) . '" class="OverlayTrigger item control viewWarning"><span></span>' . 'View Warning' . '</a></li>
								';
}
$__compilerVar52 .= '
								';
if ($comment['canApproveUnapprove'] AND $comment['message_state'] != ('deleted'))
{
$__compilerVar52 .= '
									';
if ($comment['message_state'] == ('moderated'))
{
$__compilerVar52 .= '
										<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/approve', $comment, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger item control approve"><span></span>' . 'Approve' . '</a></li>
									';
}
else
{
$__compilerVar52 .= '
										<li><a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/unapprove', $comment, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger item control unapprove"><span></span>' . 'Unapprove' . '</a></li>
									';
}
$__compilerVar52 .= '
								';
}
$__compilerVar52 .= '
							';
if (trim($__compilerVar52) !== '')
{
$__compilerVar51 .= '
						<div class="primaryContent menuHeader"><h3>' . 'Controls' . '</h3></div>
						<ul class="secondaryContent blockLinksList">
							' . $__compilerVar52 . '
						</ul>
						';
}
unset($__compilerVar52);
$__compilerVar51 .= '
					';
if (trim($__compilerVar51) !== '')
{
$__compilerVar49 .= '
				<span class="Popup item control menu">
					<a rel="Menu">' . 'Controls' . '</a>
					<div class="Menu' . (($inOverlay) ? (' inOverlay') : ('')) . '">
					' . $__compilerVar51 . '
					</div>
				</span>
			';
}
unset($__compilerVar51);
$__compilerVar49 .= '
			
			';
$__compilerVar53 = '';
$__compilerVar53 .= '
					';
if ($comment['canLike'])
{
$__compilerVar53 .= '
						<a href="' . XenForo_Template_Helper_Core::link('profile-posts/comments/like', $comment, array()) . '" class="LikeLink item control ' . (($comment['like_date']) ? ('unlike') : ('like')) . '" data-container="#likes-pc-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '"><span></span><span class="LikeLabel">' . (($comment['like_date']) ? ('Unlike') : ('Like')) . '</span></a>
					';
}
$__compilerVar53 .= '
				';
if (trim($__compilerVar53) !== '')
{
$__compilerVar49 .= '
				<div class="publicControls">
				' . $__compilerVar53 . '
				</div>
			';
}
unset($__compilerVar53);
$__compilerVar49 .= '
		</div>
		
		<div id="likes-pc-' . htmlspecialchars($comment['profile_post_comment_id'], ENT_QUOTES, 'UTF-8') . '">
			';
if ($comment['likes'])
{
$__compilerVar49 .= '
				';
$__compilerVar54 = '';
$__compilerVar54 .= XenForo_Template_Helper_Core::link('profile-posts/comments/likes', $comment, array());
$__compilerVar55 = '';
if ($comment['likes'])
{
$__compilerVar55 .= '
	';
$this->addRequiredExternal('css', 'likes_summary');
$__compilerVar55 .= '
	<div class="likesSummary secondaryContent">
		<span class="LikeText">
			' . XenForo_Template_Helper_Core::callHelper('likeshtml', array($comment['likes'],$__compilerVar54,$comment['like_date'],$comment['likeUsers'])) . '
		</span>
	</div>
';
}
$__compilerVar49 .= $__compilerVar55;
unset($__compilerVar54, $__compilerVar55);
$__compilerVar49 .= '
			';
}
$__compilerVar49 .= '
		</div>
	</div>
</li>';
$__compilerVar42 .= $__compilerVar49;
unset($__compilerVar49);
$__compilerVar42 .= '
					';
}
$__compilerVar42 .= '
				';
}
$__compilerVar42 .= '

			';
}
$__compilerVar42 .= '

			';
if ($profilePost['canComment'])
{
$__compilerVar42 .= '
				<li id="commentSubmit-' . htmlspecialchars($profilePost['profile_post_id'], ENT_QUOTES, 'UTF-8') . '" class="comment secondaryContent" style="display:none">
					' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,(true),array(
'user' => '$visitor',
'size' => 's',
'img' => 'true'
),'')) . '
					<div class="elements">
						<textarea name="message" rows="2" class="textCtrl UserTagger Elastic" data-acurl="' . XenForo_Template_Helper_Core::link('members/bdtagme-find', false, array()) . '"></textarea>
						<div class="submit"><input type="submit" class="button primary" value="' . 'Post Comment' . '" /></div>
					</div>
					
					';
if ($inOverlay)
{
$__compilerVar42 .= '
						<input type="hidden" name="overlay" value="1" />
					';
}
$__compilerVar42 .= '
				</li>
			';
}
$__compilerVar42 .= '

		</ol>

	';
$__compilerVar56 = '';
$this->addRequiredExternal('css', 'message_simple');
$__compilerVar56 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar56 .= '

<li id="' . htmlspecialchars($__compilerVar41, ENT_QUOTES, 'UTF-8') . '" class="primaryContent messageSimple ' . (($profilePost['isDeleted']) ? ('deleted') : ('')) . ' ' . (($profilePost['is_staff']) ? ('staff') : ('')) . ' ' . (($profilePost['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($profilePost['username'], ENT_QUOTES, 'UTF-8') . '">

	' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($profilePost,(true),array(
'user' => '$message',
'size' => 's',
'img' => 'true'
),'')) . '
	
	<div class="messageInfo">
		
		';
$__compilerVar57 = '';
$__compilerVar57 .= '
					';
$__compilerVar58 = '';
$__compilerVar58 .= '
						';
if ($profilePost['warning_message'])
{
$__compilerVar58 .= '
							<li class="warningNotice"><span class="icon Tooltip" title="' . 'Warning' . '" data-tipclass="iconTip flipped"></span>' . htmlspecialchars($profilePost['warning_message'], ENT_QUOTES, 'UTF-8') . '</li>
						';
}
$__compilerVar58 .= '
						';
if ($profilePost['isDeleted'])
{
$__compilerVar58 .= '
							<li class="deletedNotice"><span class="icon Tooltip" title="' . 'Deleted' . '" data-tipclass="iconTip flipped"></span>' . 'This message has been removed from public view.' . '</li>
						';
}
else if ($profilePost['isModerated'])
{
$__compilerVar58 .= '
							<li class="moderatedNotice"><span class="icon Tooltip" title="' . 'Awaiting moderation' . '" data-tipclass="iconTip flipped"></span>' . 'This message is awaiting moderator approval, and is invisible to normal visitors.' . '</li>
						';
}
$__compilerVar58 .= '
						';
if ($profilePost['isIgnored'])
{
$__compilerVar58 .= '
							<li>' . 'You are ignoring content by this member.' . ' <a href="javascript:" class="JsOnly DisplayIgnoredContent">' . 'Show Ignored Content' . '</a></li>
						';
}
$__compilerVar58 .= '
					';
$__compilerVar57 .= $this->callTemplateHook('message_simple_notices', $__compilerVar58, array(
'message' => $profilePost
));
unset($__compilerVar58);
$__compilerVar57 .= '
				';
if (trim($__compilerVar57) !== '')
{
$__compilerVar56 .= '
			<ul class="messageNotices">
				' . $__compilerVar57 . '
			</ul>
		';
}
unset($__compilerVar57);
$__compilerVar56 .= '

		<div class="messageContent">
			';
if ($messagePosterHtml)
{
$__compilerVar56 .= '
				' . $messagePosterHtml . '
			';
}
else
{
$__compilerVar56 .= '
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($profilePost,'',(true),array(
'class' => 'poster'
))) . '
			';
}
$__compilerVar56 .= '
			<article><blockquote class="ugc baseHtml' . (($profilePost['isIgnored']) ? (' ignored') : ('')) . '">' . XenForo_Template_Helper_Core::callHelper('parseSmilies', array(
'0' => XenForo_Template_Helper_Core::callHelper('profileBbCode', array(
'0' => 'message_simple',
'1' => $profilePost['message']
))
)) . '</blockquote></article>
		</div>

		' . $__compilerVar42 . '
	</div>
</li>';
$__compilerVar40 .= $__compilerVar56;
unset($__compilerVar41, $__compilerVar42, $__compilerVar56);
$__compilerVar40 .= '
' . '
';
$__output .= $__compilerVar40;
unset($__compilerVar40);
$__output .= '
								';
}
$__output .= '
							';
}
$__output .= '
						';
}
else
{
$__output .= '
							<li id="NoProfilePosts">' . 'There are no messages on ' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '\'s profile yet.' . '</li>
						';
}
$__output .= '
					</ol>

					';
if ($inlineModOptions)
{
$__output .= '
						<div class="sectionFooter InlineMod Hide">
							<label for="ModerationSelect">' . 'Perform action with selected posts' . '...</label>

							';
$__compilerVar59 = '';
$__compilerVar60 = '';
$__compilerVar60 .= 'Post Moderation';
$__compilerVar61 = '';
$__compilerVar61 .= '
		';
if ($inlineModOptions['delete'])
{
$__compilerVar61 .= '<option value="delete">' . 'Delete Posts' . '</option>';
}
$__compilerVar61 .= '
		';
if ($inlineModOptions['undelete'])
{
$__compilerVar61 .= '<option value="undelete">' . 'Undelete Posts' . '</option>';
}
$__compilerVar61 .= '
		';
if ($inlineModOptions['approve'])
{
$__compilerVar61 .= '<option value="approve">' . 'Approve Posts' . '</option>';
}
$__compilerVar61 .= '
		';
if ($inlineModOptions['unapprove'])
{
$__compilerVar61 .= '<option value="unapprove">' . 'Unapprove Posts' . '</option>';
}
$__compilerVar61 .= '
		<option value="deselect">' . 'Deselect Posts' . '</option>
	';
$__compilerVar62 = '';
$__compilerVar62 .= 'Select / deselect all posts on this page';
$__compilerVar63 = '';
$__compilerVar63 .= 'Selected Posts';
$__compilerVar64 = '';
$this->addRequiredExternal('css', 'inline_mod');
$__compilerVar64 .= '
';
$this->addRequiredExternal('js', 'js/xenforo/inline_mod.js');
$__compilerVar64 .= '

<span id="InlineModControls">
	<span class="selectionControl secondaryContent">
		<label for="ModerationCheck">
			' . 'Select All' . ' <input type="checkbox" id="ModerationCheck" title="' . htmlspecialchars($__compilerVar62, ENT_QUOTES, 'UTF-8') . '" />
		</label>

		<input type="button" class="button ClickNext" value="&darr;" title="' . 'Move down' . '" />
		<input type="button" class="button ClickPrev" value="&uarr;" title="' . 'Move up' . '" />
		<a class="SelectionCount">' . htmlspecialchars($__compilerVar63, ENT_QUOTES, 'UTF-8') . ': <em class="InlineModCheckedTotal">0</em></a>
	</span>

	<span class="actionControl sectionFooter">
		<span class="commonActions">
			';
if ($inlineModOptions['delete'])
{
$__compilerVar64 .= '<input type="submit" class="button" value="' . 'Delete' . '..." name="delete" />';
}
$__compilerVar64 .= '
			';
if ($inlineModOptions['approve'])
{
$__compilerVar64 .= '<input type="submit" class="button" value="' . 'Approve' . '" name="approve" />';
}
$__compilerVar64 .= '
		</span>

		<span class="otherActions">
			<select name="a" id="ModerationSelect" class="textCtrl">
				<option value="">' . 'Other Action' . '...</option>
				<optgroup label="' . 'Moderation Actions' . '">
					' . $__compilerVar61 . '
				</optgroup>
				<option value="closeOverlay">' . 'Close This Overlay' . '</option>
			</select>

			<input type="submit" class="button primary" value="' . 'Go' . '" />
			<input type="reset" class="button OverlayCloser overylayOnly" value="X" title="' . 'Cancel and close these controls' . '" />
		</span>
	</span>
</span>';
$__compilerVar59 .= $__compilerVar64;
unset($__compilerVar60, $__compilerVar61, $__compilerVar62, $__compilerVar63, $__compilerVar64);
$__output .= $__compilerVar59;
unset($__compilerVar59);
$__output .= '
						</div>
					';
}
$__output .= '

					<div class="pageNavLinkGroup">
						<div class="linkGroup SelectionCountContainer"></div>
						<div class="linkGroup"' . ((!$ignoredNames) ? (' style="display: none"') : ('')) . '><a href="javascript:" class="muted JsOnly DisplayIgnoredContent Tooltip" title="' . 'Show hidden content by ' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $ignoredNames,
'1' => ', '
)) . '' . '">' . 'Show Ignored Content' . '</a></div>
						' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($profilePostsPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalProfilePosts, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'members', $user, array(
'bookmarksPage' => $bookmarksPage
), false, array())) . '
					</div>

					<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
				</form>

			';
}
else
{
$__output .= '
				<div id="NoProfilePosts">' . 'There are no messages on ' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '\'s profile yet.' . '</div>
			';
}
$__output .= '

			</li>

			';
if ($showRecentActivity)
{
$__output .= '
			<li id="recentActivity" class="profileContent" data-loadUrl="' . XenForo_Template_Helper_Core::link('members/recent-activity', $user, array()) . '">
				<span class="JsOnly">' . 'Loading' . '...</span>
				<noscript><a href="' . XenForo_Template_Helper_Core::link('members/recent-activity', $user, array()) . '">' . 'View' . '</a></noscript>
			</li>
			';
}
$__output .= '

			<li id="postings" class="profileContent" data-loadUrl="' . XenForo_Template_Helper_Core::link('members/recent-content', $user, array()) . '">
				<span class="JsOnly">' . 'Loading' . '...</span>
				<noscript><a href="' . XenForo_Template_Helper_Core::link('members/recent-content', $user, array()) . '">' . 'View' . '</a></noscript>
			</li>

			<li id="info" class="profileContent">

				';
$__compilerVar65 = '';
$__compilerVar65 .= '
								';
$__compilerVar66 = '';
$__compilerVar66 .= '
										';
if ($user['gender'])
{
$__compilerVar66 .= '
											<dl><dt>' . 'Gender' . ':</dt> <dd>';
if ($user['gender'] == ('male'))
{
$__compilerVar66 .= 'Male';
}
else
{
$__compilerVar66 .= 'Female';
}
$__compilerVar66 .= '</dd></dl>
										';
}
$__compilerVar66 .= '

										';
if ($birthday)
{
$__compilerVar66 .= '
											<dl><dt>' . 'Birthday' . ':</dt> <dd>' . XenForo_Template_Helper_Core::date($birthday['timeStamp'], $birthday['format']) . ' ';
if ($birthday['age'])
{
$__compilerVar66 .= '(' . 'Age' . ': ' . XenForo_Template_Helper_Core::numberFormat($birthday['age'], '0') . ')';
}
$__compilerVar66 .= '</dd></dl>
										';
}
$__compilerVar66 .= '

										';
if ($user['homepage'])
{
$__compilerVar66 .= '
											<dl><dt>' . 'Home Page' . ':</dt> <dd><a href="' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($user['homepage'], ENT_QUOTES, 'UTF-8'),
'1' => 'x'
)) . '" rel="nofollow" target="_blank">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($user['homepage'], ENT_QUOTES, 'UTF-8')
)) . '</a></dd></dl>
										';
}
$__compilerVar66 .= '

										';
if ($user['location'])
{
$__compilerVar66 .= '
											<dl><dt>' . 'Location' . ':</dt> <dd><a href="' . XenForo_Template_Helper_Core::link('misc/location-info', '', array(
'location' => XenForo_Template_Helper_Core::string('censor', array(
'0' => $user['location'],
'1' => '-'
))
)) . '" target="_blank" rel="nofollow" itemprop="address" class="concealed">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($user['location'], ENT_QUOTES, 'UTF-8')
)) . '</a></dd></dl>
										';
}
$__compilerVar66 .= '

										';
if ($user['occupation'])
{
$__compilerVar66 .= '
											<dl><dt>' . 'Occupation' . ':</dt> <dd>' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($user['occupation'], ENT_QUOTES, 'UTF-8')
)) . '</dd></dl>
										';
}
$__compilerVar66 .= '
										
										';
if ($customFieldsGrouped['personal'])
{
$__compilerVar66 .= '
											';
foreach ($customFieldsGrouped['personal'] AS $field)
{
$__compilerVar66 .= '
												';
$__compilerVar67 = '';
$__compilerVar68 = '';
$__compilerVar68 .= '
			';
if (is_array($field['fieldValueHtml']))
{
$__compilerVar68 .= '
				<ul>
				';
foreach ($field['fieldValueHtml'] AS $_fieldValueHtml)
{
$__compilerVar68 .= '
					<li>' . $_fieldValueHtml . '</li>
				';
}
$__compilerVar68 .= '
				</ul>
			';
}
else
{
$__compilerVar68 .= '
				' . $field['fieldValueHtml'] . '
			';
}
$__compilerVar68 .= '
		';
if (trim($__compilerVar68) !== '')
{
$__compilerVar67 .= '
	<dl>
		<dt>' . htmlspecialchars($field['title'], ENT_QUOTES, 'UTF-8') . ':</dt> 
		<dd>' . $__compilerVar68 . '</dd>
	</dl>
';
}
unset($__compilerVar68);
$__compilerVar66 .= $__compilerVar67;
unset($__compilerVar67);
$__compilerVar66 .= '
											';
}
$__compilerVar66 .= '
										';
}
$__compilerVar66 .= '
									';
if (trim($__compilerVar66) !== '')
{
$__compilerVar65 .= '
									<div class="pairsColumns aboutPairs">
									' . $__compilerVar66 . '
									</div>
								';
}
unset($__compilerVar66);
$__compilerVar65 .= '

								';
if ($user['about'])
{
$__compilerVar65 .= '<div class="baseHtml ugc">' . $user['aboutHtml'] . '</div>';
}
$__compilerVar65 .= '
							';
if (trim($__compilerVar65) !== '')
{
$__output .= '
					<div class="section">
						<h3 class="textHeading">' . 'About' . '</h3>

						<div class="primaryContent">
							' . $__compilerVar65 . '
						</div>
					</div>
				';
}
unset($__compilerVar65);
$__output .= '

				<div class="section">
					<h3 class="textHeading">' . 'Interact' . '</h3>

					<div class="primaryContent">
						<div class="pairsColumns contactInfo">
							<dl>
								<dt>' . 'Content' . ':</dt>
								<dd><ul>
									';
$__compilerVar69 = '';
$__compilerVar69 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $user['user_id']
)) . '" rel="nofollow">' . 'Find all content by ' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $user['user_id'],
'content' => 'thread'
)) . '" rel="nofollow">' . 'Find all threads by ' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . '' . '</a></li>
									';
$__output .= $this->callTemplateHook('member_view_search_content_types', $__compilerVar69, array());
unset($__compilerVar69);
$__output .= '
								</ul></dd>
							</dl>
							';
if ($canStartConversation)
{
$__output .= '
								<dl><dt>' . 'Conversation' . ':</dt> <dd><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $user['username']
)) . '">' . 'Start a Conversation' . '</a></dd></dl>
							';
}
$__output .= '
							';
if ($customFieldsGrouped['contact'])
{
$__output .= '
								';
foreach ($customFieldsGrouped['contact'] AS $field)
{
$__output .= '
									';
$__compilerVar70 = '';
$__compilerVar71 = '';
$__compilerVar71 .= '
			';
if (is_array($field['fieldValueHtml']))
{
$__compilerVar71 .= '
				<ul>
				';
foreach ($field['fieldValueHtml'] AS $_fieldValueHtml)
{
$__compilerVar71 .= '
					<li>' . $_fieldValueHtml . '</li>
				';
}
$__compilerVar71 .= '
				</ul>
			';
}
else
{
$__compilerVar71 .= '
				' . $field['fieldValueHtml'] . '
			';
}
$__compilerVar71 .= '
		';
if (trim($__compilerVar71) !== '')
{
$__compilerVar70 .= '
	<dl>
		<dt>' . htmlspecialchars($field['title'], ENT_QUOTES, 'UTF-8') . ':</dt> 
		<dd>' . $__compilerVar71 . '</dd>
	</dl>
';
}
unset($__compilerVar71);
$__output .= $__compilerVar70;
unset($__compilerVar70);
$__output .= '
								';
}
$__output .= '
							';
}
$__output .= '
						</div>
					</div>
				</div>
				
				';
if ($user['signature'])
{
$__output .= '
					<div class="section">
						<h3 class="textHeading">' . 'Signature' . '</h3>
						<div class="primaryContent">
							<div class="baseHtml signature ugc">' . $user['signatureHtml'] . '</div>
						</div>
					</div>
				';
}
$__output .= '

			</li>
			
			';
if ($warningCount)
{
$__output .= '
				<li id="warnings" class="profileContent" data-loadUrl="' . XenForo_Template_Helper_Core::link('members/warnings', $user, array()) . '">
					' . 'Loading' . '...
					<noscript><a href="' . XenForo_Template_Helper_Core::link('members/warnings', $user, array()) . '">' . 'View' . '</a></noscript>
				</li>
			';
}
$__output .= '
			';
if ($bookmarksTab)
{
$__output .= '
				<li id="bookmarks" class="profileContent" data-loadUrl="' . XenForo_Template_Helper_Core::link('members/bookmarks', $user, array(
'page' => $page,
'bookmarksPage' => $bookmarksPage
)) . '">
					<span class="JsOnly">' . 'Loading' . '...</span>
					<noscript><a href="' . XenForo_Template_Helper_Core::link('members/bookmarks', $user, array(
'bookmarksPage' => $bookmarksPage
)) . '">' . 'View' . '</a></noscript>
				</li>
			';
}
$__output .= '
			
			';
$__compilerVar72 = '';
$__output .= $this->callTemplateHook('member_view_tabs_content', $__compilerVar72, array(
'user' => $user
));
unset($__compilerVar72);
$__output .= '
		</ul>
	</div>

</div>';
