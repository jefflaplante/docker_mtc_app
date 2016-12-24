<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'moderator_bar');
$__output .= '

';
$__compilerVar1 = '';
$__compilerVar1 .= '
		
					';
$__compilerVar2 = '';
$__compilerVar2 .= '
						';
$__compilerVar3 = '';
$__compilerVar2 .= $this->callTemplateHook('uix_userbar_left_start', $__compilerVar3, array());
unset($__compilerVar3);
$__compilerVar2 .= '
						
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 1)
{
$__compilerVar4 = '0';
$__compilerVar5 = '';
$__compilerVar5 .= '

';
if ($__compilerVar4 == 0)
{
$__compilerVar5 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar5 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar5 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar5 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar5 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar5 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar5 .= '
	';
}
else
{
$__compilerVar5 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar5 .= '
	';
}
$__compilerVar5 .= '
	
';
}
else if ($__compilerVar4 == 1)
{
$__compilerVar5 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar5 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar5 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar5 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar5 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar5 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar5 .= '
	';
}
else
{
$__compilerVar5 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar5 .= '
	';
}
$__compilerVar5 .= '
	
';
}
$__compilerVar5 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar5 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar4) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar5 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar5 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar5 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar5 .= '
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="uix_VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
			</strong>
	</a></li>
	
';
}
else if ($canvasType == ('navigation') || $canvasType == ('custom'))
{
$__compilerVar5 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar4) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar5 .= '
			';
if (!$__compilerVar4)
{
$__compilerVar5 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar5 .= '
			';
if ($__compilerVar4)
{
$__compilerVar5 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar5 .= '
		';
}
else
{
$__compilerVar5 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar5 .= '</a>
	</li>

';
}
$__compilerVar2 .= $__compilerVar5;
unset($__compilerVar4, $__compilerVar5);
}
$__compilerVar2 .= '
						
						';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar2 .= '
							';
$__compilerVar6 = '';
$__compilerVar6 .= '	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('100%'))
{
$__compilerVar6 .= '

		';
if ($visitor['is_admin'])
{
$__compilerVar6 .= '			
			<li class="navTab">
				<a href="admin.php" target="_blank" class="acp adminLink navLink">
					<i class="uix_icon uix_icon-admin"></i> 
					<span class="itemLabel">' . 'Admin' . '</span>
				</a>
			</li>
			
			';
if ($session['permissionTest'])
{
$__compilerVar6 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
					<i class="uix_icon uix_icon-permissions"></i> 
					<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
				</a>
			</li>
			
			';
}
$__compilerVar6 .= '
		';
}
$__compilerVar6 .= '
		
		';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar6 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('moderation-queue', false, array()) . '" class="moderationQueue modLink navLink">
					<i class="uix_icon uix_icon-moderator"></i> 
					<span class="itemLabel">' . 'Moderation' . ':</span>
					<strong class="itemCount ' . (($session['moderationCounts']['total']) ? ('alert') : ('')) . '">
						<span class="Total">' . htmlspecialchars($session['moderationCounts']['total'], ENT_QUOTES, 'UTF-8') . '</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar6 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
					<i class="uix_icon uix_icon-reports"></i> 
					<span class="itemLabel">' . 'Reports' . ':</span>
					<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
						<span class="Total">
							';
if ($session['reportCounts']['assigned'])
{
$__compilerVar6 .= '
								' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
else
{
$__compilerVar6 .= '
								' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
$__compilerVar6 .= '
						</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar6 .= '
		
		';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar6 .= '
			<li class="navTab">
				<a href="admin.php?users/moderated" class="userModerationQueue modLink navLink">
					<i class="uix_icon uix_icon-users"></i> 
					<span class="itemLabel">' . 'Users' . ':</span>
					<strong class="itemCount ' . (($session['userModerationCounts']['total']) ? ('alert') : ('')) . '">
						<span class="Total">
							' . htmlspecialchars($session['userModerationCounts']['total'], ENT_QUOTES, 'UTF-8') . '
						</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar6 .= '
		
		';
$__compilerVar7 = '';
$__compilerVar6 .= $this->callTemplateHook('moderator_bar', $__compilerVar7, array());
unset($__compilerVar7);
$__compilerVar6 .= '	
	';
}
$__compilerVar6 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('0'))
{
$__compilerVar6 .= '

		<li class="navTab admin Popup PopupControl PopupClosed">
			<a href="';
if ($visitor['is_admin'])
{
$__compilerVar6 .= 'admin.php';
}
else
{
$__compilerVar6 .= 'javascript: void(0);';
}
$__compilerVar6 .= '" class="navLink NoPopupGadget" rel="Menu" ';
if ($visitor['is_admin'])
{
$__compilerVar6 .= 'target="_blank"';
}
$__compilerVar6 .= '>
				<i class="uix_icon uix_icon-admin"></i> 
				<span class="itemLabel">' . (($visitor['is_admin']) ? ('Admin') : ('Mod')) . '</span>
				<strong class="itemCount">
					<span class="Total">0</span>
					<span class="arrow"></span>
				</strong>	
			</a>
			<div class="uix_adminMenu Menu JsOnly tabMenu">
				<div class="primaryContent menuHeader"><h3>
				
				';
if ($visitor['is_admin'])
{
$__compilerVar6 .= '
				' . 'Admin' . '
				';
}
else
{
$__compilerVar6 .= '
				Mod
				';
}
$__compilerVar6 .= ' ' . 'Menu' . '
				
				
				</h3></div>
				<ul class="secondaryContent blockLinksList">
					
	
	
					';
if ($visitor['is_admin'])
{
$__compilerVar6 .= '			
						<li class="navTab">
							<a href="admin.php" target="_blank" class="acp adminLink navLink">
								<i class="uix_icon uix_icon-admin"></i> 
								<span class="itemLabel">' . 'Admin' . '</span>
							</a>
						</li>
						
						';
if ($session['permissionTest'])
{
$__compilerVar6 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
								<i class="uix_icon uix_icon-permissions"></i> 
								<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
							</a>
						</li>
						
						';
}
$__compilerVar6 .= '
					';
}
$__compilerVar6 .= '
			
					';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar6 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('moderation-queue', false, array()) . '" class="moderationQueue modLink navLink">
								<i class="uix_icon uix_icon-moderator"></i> 
								<span class="itemLabel">' . 'Moderation' . ':</span>
								<strong class="itemCount ' . (($session['moderationCounts']['total']) ? ('alert') : ('')) . '">
									<span class="Total">' . htmlspecialchars($session['moderationCounts']['total'], ENT_QUOTES, 'UTF-8') . '</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar6 .= '
					
					';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar6 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
								<i class="uix_icon uix_icon-reports"></i> 
								<span class="itemLabel">' . 'Reports' . ':</span>
								<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
									<span class="Total">
										';
if ($session['reportCounts']['assigned'])
{
$__compilerVar6 .= '
											' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
else
{
$__compilerVar6 .= '
											' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
$__compilerVar6 .= '
									</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar6 .= '
					
					';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar6 .= '
						<li class="navTab">
							<a href="admin.php?users/moderated" class="userModerationQueue modLink navLink">
								<i class="uix_icon uix_icon-users"></i> 
								<span class="itemLabel">' . 'Users' . ':</span>
								<strong class="itemCount ' . (($session['userModerationCounts']['total']) ? ('alert') : ('')) . '">
									<span class="Total">
										' . htmlspecialchars($session['userModerationCounts']['total'], ENT_QUOTES, 'UTF-8') . '
									</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar6 .= '
					
					';
$__compilerVar8 = '';
$__compilerVar6 .= $this->callTemplateHook('moderator_bar', $__compilerVar8, array());
unset($__compilerVar8);
$__compilerVar6 .= '
	
				</ul>
			</div>		
		</li>
	';
}
$__compilerVar6 .= '	';
$__compilerVar2 .= $__compilerVar6;
unset($__compilerVar6);
$__compilerVar2 .= '
						';
}
$__compilerVar2 .= '
						
						';
$__compilerVar9 = '';
$__compilerVar2 .= $this->callTemplateHook('uix_userbar_left_end', $__compilerVar9, array());
unset($__compilerVar9);
$__compilerVar2 .= '
						
						';
if (trim($__compilerVar2) !== '')
{
$__compilerVar1 .= '
					<ul class="navLeft';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar1 .= ' moderatorTabs';
}
$__compilerVar1 .= '">
					
						' . $__compilerVar2 . '
		
					</ul>

					
					';
}
unset($__compilerVar2);
$__compilerVar1 .= '
					
					';
$__compilerVar10 = '';
$__compilerVar10 .= '
						
							';
$__compilerVar11 = '';
$__compilerVar10 .= $this->callTemplateHook('uix_userbar_right_start', $__compilerVar11, array());
unset($__compilerVar11);
$__compilerVar10 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar10 .= '
								';
$__compilerVar12 = '';
$__compilerVar13 = '';
$__compilerVar13 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar13 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar13 .= '
	';
$__compilerVar14 = '';
$__compilerVar13 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar14, array());
unset($__compilerVar14);
$__compilerVar13 .= '
	';
}
$__compilerVar13 .= '

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">

		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar13 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar13 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar13 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar13 .= '
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ResponsiveOnly ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
				<span class="arrow"></span>
			</strong>
		</a>
		
		<div class="Menu JsOnly" id="AccountMenu">
			<div class="primaryContent menuHeader">
				' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,false,array(
'user' => '$visitor',
'size' => 'm',
'class' => 'NoOverlay plainImage',
'title' => 'View your profile'
),'')) . '
				
				<h3>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($visitor,'',(true),array(
'class' => 'concealed',
'title' => 'View your profile'
))) . '</h3>
				
				';
$__compilerVar15 = '';
$__compilerVar15 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar15) !== '')
{
$__compilerVar13 .= '<div class="muted">' . $__compilerVar15 . '</div>';
}
unset($__compilerVar15);
$__compilerVar13 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar16 = '';
$__compilerVar16 .= '
					';
if ($canEditProfile)
{
$__compilerVar16 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar16 .= '
					';
if ($canEditSignature)
{
$__compilerVar16 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar16 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar16 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar16 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar16 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar16 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar17 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar17 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar16 .= $__compilerVar17;
unset($__compilerVar17);
$__compilerVar16 .= '
';
$__compilerVar13 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar16, array());
unset($__compilerVar16);
$__compilerVar13 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar18 = '';
$__compilerVar18 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar18 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar18 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '
						<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '"
							id="VisitorExtraMenu_ConversationsCounter">
							<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
						</strong></a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Alerts' . '
						<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '"
							id="VisitorExtraMenu_AlertsCounter">
							<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
						</strong></a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id']
)) . '">' . 'Your Content' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/ignored', false, array()) . '">' . 'People You Ignore' . '</a></li>
					';
if ($xenCache['userUpgradeCount'])
{
$__compilerVar18 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar18 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar13 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar18, array());
unset($__compilerVar18);
$__compilerVar13 .= '
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
					<li>				
						<form action="' . XenForo_Template_Helper_Core::link('account/toggle-visibility', false, array()) . '" method="post" class="AutoValidator visibilityForm">
							<label><input type="checkbox" name="visible" value="1" class="SubmitOnChange" ' . (($visitor['visible']) ? ' checked="checked"' : '') . ' />
								' . 'Show online status' . '</label>
							<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						</form>
					</li>
				</ul>
				<ul class="col2 blockLinksList">
					<li><a href="' . XenForo_Template_Helper_Core::link('logout', '', array(
'_xfToken' => $visitor['csrf_token_page']
)) . '" class="LogOut">' . 'Log Out' . '</a></li>
				</ul>
			</div>
			';
if ($canUpdateStatus)
{
$__compilerVar13 .= '
				<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" class="sectionFooter statusPoster AutoValidator" data-optInOut="OptIn">
					<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" data-acurl="' . XenForo_Template_Helper_Core::link('members/bdtagme-find', false, array()) . '" placeholder="' . 'Update your status' . '..." rows="1" cols="40" style="height:18px" data-statusEditorCounter="#visMenuSEdCount" data-nofocus="true"></textarea>
					<div class="submitUnit">
						<span id="visMenuSEdCount" title="' . 'Characters remaining' . '"></span>
						<input type="submit" class="button primary MenuCloser" value="' . 'Post' . '" />
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						<input type="hidden" name="return" value="1" /> 
					</div>
				</form>
			';
}
$__compilerVar13 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar13 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar13 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar19 = '';
$__compilerVar19 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar19 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar19 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar13 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar19, array());
unset($__compilerVar19);
$__compilerVar13 .= '
				</ul>
				';
$__compilerVar20 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar20 .= '
	';
$__compilerVar21 = '';
$__compilerVar21 .= '
';
$uix_searchPosition = '';
if ((XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 1 && (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2 || (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)) || (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 0 && XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))))
{
$uix_searchPosition .= '2';
}
else
{
$uix_searchPosition .= XenForo_Template_Helper_Core::styleProperty('uix_searchPosition');
}
$__compilerVar21 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar22 = '';
$__compilerVar22 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar22 .= '
		';
$__compilerVar23 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar23 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar22 .= $__compilerVar23;
unset($__compilerVar23);
$__compilerVar22 .= '
	';
}
$__compilerVar22 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar22 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar22 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar22 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar22 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar22 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar22 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar21 .= $this->callTemplateHook('quick_search', $__compilerVar22, array());
unset($__compilerVar22);
$__compilerVar21 .= '

</div>';
$__compilerVar20 .= $__compilerVar21;
unset($__compilerVar21);
$__compilerVar20 .= '
	';
$__compilerVar24 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar24 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar20 .= $__compilerVar24;
unset($__compilerVar24);
$__compilerVar20 .= '
';
}
$__compilerVar13 .= $__compilerVar20;
unset($__compilerVar20);
$__compilerVar13 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar13 .= '
	';
}
$__compilerVar13 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar13 .= '

		<!-- conversations popup -->
		<li class="navTab inbox Popup PopupControl PopupClosed ' . (($tabs['inbox']['selected']) ? ('selected') : ('')) . '">
						
			<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" rel="Menu" class="navLink NoPopupGadget">
				<i class="uix_icon uix_icon-inbox"></i>
				<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '"
					id="ConversationsMenu_Counter" data-text="' . 'You have %d new unread conversation(s).' . '">
					<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
					<span class="arrow"></span>
				</strong>
			</a>
			
			<div class="Menu JsOnly navPopup" id="ConversationsMenu"
				data-contentSrc="' . XenForo_Template_Helper_Core::link('conversations/popup', false, array()) . '"
				data-contentDest="#ConversationsMenu .listPlaceholder">
				
				<div class="menuHeader primaryContent">
					<h3>
						<span class="Progress InProgress"></span>
						<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" class="concealed">' . 'Conversations' . '</a>
					</h3>						
				</div>
				
				<div class="listPlaceholder"></div>
				
				<div class="sectionFooter">
					';
if ($canStartConversation)
{
$__compilerVar13 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar13 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar13 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar13 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar25 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar25 .= '
	';
$__compilerVar26 = '';
$__compilerVar26 .= '
';
$uix_searchPosition = '';
if ((XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 1 && (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2 || (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)) || (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 0 && XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))))
{
$uix_searchPosition .= '2';
}
else
{
$uix_searchPosition .= XenForo_Template_Helper_Core::styleProperty('uix_searchPosition');
}
$__compilerVar26 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar27 = '';
$__compilerVar27 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar27 .= '
		';
$__compilerVar28 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar28 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar27 .= $__compilerVar28;
unset($__compilerVar28);
$__compilerVar27 .= '
	';
}
$__compilerVar27 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar27 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar27 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar27 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar27 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar27 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar27 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar26 .= $this->callTemplateHook('quick_search', $__compilerVar27, array());
unset($__compilerVar27);
$__compilerVar26 .= '

</div>';
$__compilerVar25 .= $__compilerVar26;
unset($__compilerVar26);
$__compilerVar25 .= '
	';
$__compilerVar29 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar29 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar25 .= $__compilerVar29;
unset($__compilerVar29);
$__compilerVar25 .= '
';
}
$__compilerVar13 .= $__compilerVar25;
unset($__compilerVar25);
$__compilerVar13 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar13 .= '
		';
}
$__compilerVar13 .= '
		
		';
$__compilerVar30 = '';
$__compilerVar13 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar30, array());
unset($__compilerVar30);
$__compilerVar13 .= '
		
		<!-- alerts popup -->
		<li class="navTab alerts Popup PopupControl PopupClosed">	
						
			<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" rel="Menu" class="navLink NoPopupGadget">
				<i class="uix_icon uix_icon-alerts"></i>
				<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '"
					id="AlertsMenu_Counter" data-text="' . 'You have %d new alert(s).' . '">
					<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
					<span class="arrow"></span>
				</strong>
			</a>
			
			<div class="Menu JsOnly navPopup" id="AlertsMenu"
				data-contentSrc="' . XenForo_Template_Helper_Core::link('account/alerts-popup', false, array()) . '"
				data-contentDest="#AlertsMenu .listPlaceholder"
				data-removeCounter="#AlertsMenu_Counter">
				
				<div class="menuHeader primaryContent">
					<h3>
						<span class="Progress InProgress"></span>
						<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" class="concealed">' . 'Alerts' . '</a>
					</h3>
				</div>
				
				<div class="listPlaceholder"></div>
				
				<div class="sectionFooter">
					<a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '" class="floatLink">' . 'Alert Preferences' . '</a>
					<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
$__compilerVar31 = '';
$__compilerVar13 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar31, array());
unset($__compilerVar31);
$__compilerVar13 .= '
	';
}
else
{
$__compilerVar13 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar13 .= ' 
	';
}
$__compilerVar13 .= '
	
';
if (trim($__compilerVar13) !== '')
{
$__compilerVar12 .= '
' . $__compilerVar13 . '
';
}
unset($__compilerVar13);
$__compilerVar10 .= $__compilerVar12;
unset($__compilerVar12);
$__compilerVar10 .= '
							';
}
$__compilerVar10 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 2)
{
$__compilerVar10 .= '
								';
$__compilerVar32 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar32 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar32 .= '<label for="LoginControl">';
}
$__compilerVar32 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar32 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar32 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar32 .= '</label>';
}
$__compilerVar32 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar32 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar33 = '';
$__compilerVar33 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

	<label for="ctrl_pageLogin_login">' . 'Your name or email address' . ':' . htmlspecialchars($isOverlay, ENT_QUOTES, 'UTF-8') . '</label>
	<dl class="ctrlUnit">
		<dd><input type="text" name="login" value="' . htmlspecialchars($defaultLogin, ENT_QUOTES, 'UTF-8') . '" id="ctrl_pageLogin_login" class="textCtrl uix_fixIOSClickInput" tabindex="1" /></dd>
	</dl>
	
	<label for="ctrl_pageLogin_password">' . 'Password' . ':</label>
	<dl class="ctrlUnit">
		<dd>
			<input type="password" name="password" class="textCtrl uix_fixIOSClickInput" id="ctrl_pageLogin_password" tabindex="2" />					
			<div><a href="' . XenForo_Template_Helper_Core::link('lost-password', false, array()) . '" class="OverlayTrigger OverlayCloser" tabindex="6">' . 'Forgot your password?' . '</a></div>
		</dd>
	</dl>
	
	';
if ($captcha)
{
$__compilerVar33 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar33 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar34 = '';
$__compilerVar34 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar34 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar34 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar34 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar34 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar34 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar34 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar34 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar34 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar34 .= '

	';
if (trim($__compilerVar34) !== '')
{
$__compilerVar33 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar34 . '
	</div>
	';
}
unset($__compilerVar34);
$__compilerVar33 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar33 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar33 .= '

</form>';
$__compilerVar32 .= $__compilerVar33;
unset($__compilerVar33);
$__compilerVar32 .= '
			</div>
		</div>
		';
}
$__compilerVar32 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar32 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar32 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar32 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar32 .= '
	
';
}
$__compilerVar10 .= $__compilerVar32;
unset($__compilerVar32);
$__compilerVar10 .= '
							';
}
$__compilerVar10 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 1 && $contentTemplate == ('thread_view'))
{
$__compilerVar10 .= '
								<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
							';
}
$__compilerVar10 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar10 .= '
								';
$__compilerVar35 = '';
if ($canSearch)
{
$__compilerVar35 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar36 = '';
$__compilerVar36 .= '
';
$uix_searchPosition = '';
if ((XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 1 && (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2 || (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)) || (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 0 && XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))))
{
$uix_searchPosition .= '2';
}
else
{
$uix_searchPosition .= XenForo_Template_Helper_Core::styleProperty('uix_searchPosition');
}
$__compilerVar36 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar37 = '';
$__compilerVar37 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar37 .= '
		';
$__compilerVar38 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar38 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar37 .= $__compilerVar38;
unset($__compilerVar38);
$__compilerVar37 .= '
	';
}
$__compilerVar37 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar37 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar37 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar37 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar37 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar37 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar37 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar36 .= $this->callTemplateHook('quick_search', $__compilerVar37, array());
unset($__compilerVar37);
$__compilerVar36 .= '

</div>';
$__compilerVar35 .= $__compilerVar36;
unset($__compilerVar36);
$__compilerVar35 .= '
		</li>
	
';
}
$__compilerVar10 .= $__compilerVar35;
unset($__compilerVar35);
$__compilerVar10 .= '
							';
}
$__compilerVar10 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 1)
{
$__compilerVar39 = '1';
$__compilerVar40 = '';
$__compilerVar40 .= '

';
if ($__compilerVar39 == 0)
{
$__compilerVar40 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar40 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar40 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar40 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar40 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar40 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar40 .= '
	';
}
else
{
$__compilerVar40 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar40 .= '
	';
}
$__compilerVar40 .= '
	
';
}
else if ($__compilerVar39 == 1)
{
$__compilerVar40 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar40 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar40 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar40 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar40 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar40 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar40 .= '
	';
}
else
{
$__compilerVar40 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar40 .= '
	';
}
$__compilerVar40 .= '
	
';
}
$__compilerVar40 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar40 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar39) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar40 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar40 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar40 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar40 .= '
			<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ' . (($visitorHiddenUnread) ? ('alert') : ('Zero')) . '"
				id="uix_VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
			</strong>
	</a></li>
	
';
}
else if ($canvasType == ('navigation') || $canvasType == ('custom'))
{
$__compilerVar40 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar39) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar40 .= '
			';
if (!$__compilerVar39)
{
$__compilerVar40 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar40 .= '
			';
if ($__compilerVar39)
{
$__compilerVar40 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar40 .= '
		';
}
else
{
$__compilerVar40 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar40 .= '</a>
	</li>

';
}
$__compilerVar10 .= $__compilerVar40;
unset($__compilerVar39, $__compilerVar40);
}
$__compilerVar10 .= '
							
							';
$__compilerVar41 = '';
$__compilerVar10 .= $this->callTemplateHook('uix_userbar_right_end', $__compilerVar41, array());
unset($__compilerVar41);
$__compilerVar10 .= '
							
						';
if (trim($__compilerVar10) !== '')
{
$__compilerVar1 .= '
					
					
						<ul class="navRight' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar')) ? (' visitorTabs') : ('')) . '">
						
						' . $__compilerVar10 . '
						
						</ul>
						
					';
}
unset($__compilerVar10);
$__compilerVar1 .= '
					
					
					';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar1 .= '
						';
$__compilerVar42 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar42 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar1 .= $__compilerVar42;
unset($__compilerVar42);
$__compilerVar1 .= '
					';
}
$__compilerVar1 .= '
					
				
				';
if (trim($__compilerVar1) !== '')
{
$__output .= '



<div id="userBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyUserBar')) ? ('stickyTop') : ('')) . ' ' . (($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3) ? ('withSearch') : ('')) . '">


	<div class="sticky_wrapper">

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__output .= '
	<div class="pageWidth">
	';
}
$__output .= '
		
		<div class="pageContent">
		
			<div class="navTabs">
		
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__output .= '
			<div class="pageWidth">
			';
}
$__output .= '
		
				' . $__compilerVar1 . '
			
			</div>

			<span class="helper"></span>
		</div>
	</div>
	</div>
</div>

';
if (XenForo_Template_Helper_Core::styleProperty('uix_jsInsideTemplates'))
{
$__output .= '
<script>if (typeof(uix) !== "undefined" && typeof(uix.templates) !== "undefined") uix.templates.userBar();</script>
';
}
$__output .= '

';
}
unset($__compilerVar1);
