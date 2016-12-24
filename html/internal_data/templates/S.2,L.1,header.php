<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '

';
$__compilerVar1 = '';
$__compilerVar1 .= '
<div id="header">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_userBarLocation') == 0)
{
$__compilerVar2 = '';
$this->addRequiredExternal('css', 'moderator_bar');
$__compilerVar2 .= '

';
$__compilerVar3 = '';
$__compilerVar3 .= '
		
					';
$__compilerVar4 = '';
$__compilerVar4 .= '
						';
$__compilerVar5 = '';
$__compilerVar4 .= $this->callTemplateHook('uix_userbar_left_start', $__compilerVar5, array());
unset($__compilerVar5);
$__compilerVar4 .= '
						
						';
if ($xenOptions['uix_socialMedia'] && XenForo_Template_Helper_Core::styleProperty('uix_socialMedia'))
{
$__compilerVar4 .= '\'
						<li class="navTab scratch_socialTab">
							<div class="navLink">
								';
$__compilerVar6 = '';
$__compilerVar6 .= '<ul class="uix_socialMediaLinks">
	';
if ($xenOptions['uix_socialMedia_facebook'])
{
$__compilerVar6 .= '<li class="facebook"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_facebook'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-facebook"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_twitter'])
{
$__compilerVar6 .= '<li class="twitter"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_twitter'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-twitter"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_youtube'])
{
$__compilerVar6 .= '<li class="youtube"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_youtube'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-youtube"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_dribbble'])
{
$__compilerVar6 .= '<li class="dribbble"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_dribbble'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-dribbble"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_vimeo'])
{
$__compilerVar6 .= '<li class="vimeo"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_vimeo'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-vimeo"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_deviantart'])
{
$__compilerVar6 .= '<li class="deviantart"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_deviantart'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-deviantArt"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_googleplus'])
{
$__compilerVar6 .= '<li class="googleplus"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_googleplus'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-googlePlus"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_linkedin'])
{
$__compilerVar6 .= '<li class="linkedin"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_linkedin'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-linkedIn"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_instagram'])
{
$__compilerVar6 .= '<li class="instagram"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_instagram'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-instagram"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_pinterest'])
{
$__compilerVar6 .= '<li class="pinterest"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_pinterest'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-pinterest"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_steam'])
{
$__compilerVar6 .= '<li class="steam"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_steam'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-steam"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_twitch'])
{
$__compilerVar6 .= '<li class="twitch"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_twitch'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-twitch"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_vine'])
{
$__compilerVar6 .= '<li class="vine"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_vine'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-vine"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_tumblr'])
{
$__compilerVar6 .= '<li class="tumblr"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_tumblr'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-tumblr"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_git'])
{
$__compilerVar6 .= '<li class="git"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_git'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-git"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_reddit'])
{
$__compilerVar6 .= '<li class="reddit"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_reddit'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-reddit"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_flickr'])
{
$__compilerVar6 .= '<li class="flickr"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_flickr'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-flickr"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_contact'] AND $xenOptions['contactUrl']['type'] == ('default'))
{
$__compilerVar6 .= '<li class="contact"><a href="' . XenForo_Template_Helper_Core::link('misc/contact', false, array()) . '" class="OverlayTrigger" data-overlayOptions="{&quot;fixed&quot;:false}"><i class="uix_icon uix_icon-email"></i></a></li>';
}
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_contact'] AND $xenOptions['contactUrl']['type'] == ('custom'))
{
$__compilerVar6 .= '<li class="contact"><a href="' . htmlspecialchars($xenOptions['contactUrl']['custom'], ENT_QUOTES, 'UTF-8') . '" ' . (($xenOptions['contactUrl']['overlay']) ? ('class="OverlayTrigger" data-overlayOptions="' . '{' . '&quot;fixed&quot;:false}"') : ('target="_blank"')) . '><i class="uix_icon uix_icon-email"></i></a></li>';
}
$__compilerVar6 .= '
        ';
$__compilerVar7 = '';
$__compilerVar7 .= '



<!--ADD LIST ITEMS HERE -->


';
$__compilerVar6 .= $__compilerVar7;
unset($__compilerVar7);
$__compilerVar6 .= '
        ';
if ($xenOptions['uix_socialMedia_rss'])
{
$__compilerVar6 .= '<li class="rss"><a href="' . XenForo_Template_Helper_Core::link('forums/-/index.rss', false, array()) . '" rel="alternate}" target="_blank"><i class="uix_icon uix_icon-rss"></i></a></li>';
}
$__compilerVar6 .= '
</ul>';
$__compilerVar4 .= $__compilerVar6;
unset($__compilerVar6);
$__compilerVar4 .= '
							</div>
						</li>
						';
}
$__compilerVar4 .= '
						
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 1)
{
$__compilerVar8 = '0';
$__compilerVar9 = '';
$__compilerVar9 .= '

';
if ($__compilerVar8 == 0)
{
$__compilerVar9 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar9 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar9 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar9 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar9 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar9 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar9 .= '
	';
}
else
{
$__compilerVar9 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar9 .= '
	';
}
$__compilerVar9 .= '
	
';
}
else if ($__compilerVar8 == 1)
{
$__compilerVar9 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar9 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar9 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar9 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar9 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar9 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar9 .= '
	';
}
else
{
$__compilerVar9 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar9 .= '
	';
}
$__compilerVar9 .= '
	
';
}
$__compilerVar9 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar9 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar8) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar9 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar9 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar9 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar9 .= '
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
$__compilerVar9 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar8) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar9 .= '
			';
if (!$__compilerVar8)
{
$__compilerVar9 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar9 .= '
			';
if ($__compilerVar8)
{
$__compilerVar9 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar9 .= '
		';
}
else
{
$__compilerVar9 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar9 .= '</a>
	</li>

';
}
$__compilerVar4 .= $__compilerVar9;
unset($__compilerVar8, $__compilerVar9);
}
$__compilerVar4 .= '
						
						';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar4 .= '
							';
$__compilerVar10 = '';
$__compilerVar10 .= '	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('100%'))
{
$__compilerVar10 .= '

		';
if ($visitor['is_admin'])
{
$__compilerVar10 .= '			
			<li class="navTab">
				<a href="admin.php" target="_blank" class="acp adminLink navLink">
					<i class="uix_icon uix_icon-admin"></i> 
					<span class="itemLabel">' . 'Admin' . '</span>
				</a>
			</li>
			
			';
if ($session['permissionTest'])
{
$__compilerVar10 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
					<i class="uix_icon uix_icon-permissions"></i> 
					<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
				</a>
			</li>
			
			';
}
$__compilerVar10 .= '
		';
}
$__compilerVar10 .= '
		
		';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar10 .= '
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
$__compilerVar10 .= '
		
		';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar10 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
					<i class="uix_icon uix_icon-reports"></i> 
					<span class="itemLabel">' . 'Reports' . ':</span>
					<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
						<span class="Total">
							';
if ($session['reportCounts']['assigned'])
{
$__compilerVar10 .= '
								' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
else
{
$__compilerVar10 .= '
								' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
$__compilerVar10 .= '
						</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar10 .= '
		
		';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar10 .= '
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
$__compilerVar10 .= '
		
		';
$__compilerVar11 = '';
$__compilerVar10 .= $this->callTemplateHook('moderator_bar', $__compilerVar11, array());
unset($__compilerVar11);
$__compilerVar10 .= '	
	';
}
$__compilerVar10 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('0'))
{
$__compilerVar10 .= '

		<li class="navTab admin Popup PopupControl PopupClosed">
			<a href="';
if ($visitor['is_admin'])
{
$__compilerVar10 .= 'admin.php';
}
else
{
$__compilerVar10 .= 'javascript: void(0);';
}
$__compilerVar10 .= '" class="navLink NoPopupGadget" rel="Menu" ';
if ($visitor['is_admin'])
{
$__compilerVar10 .= 'target="_blank"';
}
$__compilerVar10 .= '>
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
$__compilerVar10 .= '
				' . 'Admin' . '
				';
}
else
{
$__compilerVar10 .= '
				Mod
				';
}
$__compilerVar10 .= ' ' . 'Menu' . '
				
				
				</h3></div>
				<ul class="secondaryContent blockLinksList">
					
	
	
					';
if ($visitor['is_admin'])
{
$__compilerVar10 .= '			
						<li class="navTab">
							<a href="admin.php" target="_blank" class="acp adminLink navLink">
								<i class="uix_icon uix_icon-admin"></i> 
								<span class="itemLabel">' . 'Admin' . '</span>
							</a>
						</li>
						
						';
if ($session['permissionTest'])
{
$__compilerVar10 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
								<i class="uix_icon uix_icon-permissions"></i> 
								<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
							</a>
						</li>
						
						';
}
$__compilerVar10 .= '
					';
}
$__compilerVar10 .= '
			
					';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar10 .= '
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
$__compilerVar10 .= '
					
					';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar10 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
								<i class="uix_icon uix_icon-reports"></i> 
								<span class="itemLabel">' . 'Reports' . ':</span>
								<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
									<span class="Total">
										';
if ($session['reportCounts']['assigned'])
{
$__compilerVar10 .= '
											' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
else
{
$__compilerVar10 .= '
											' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
$__compilerVar10 .= '
									</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar10 .= '
					
					';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar10 .= '
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
$__compilerVar10 .= '
					
					';
$__compilerVar12 = '';
$__compilerVar10 .= $this->callTemplateHook('moderator_bar', $__compilerVar12, array());
unset($__compilerVar12);
$__compilerVar10 .= '
	
				</ul>
			</div>		
		</li>
	';
}
$__compilerVar10 .= '	';
$__compilerVar4 .= $__compilerVar10;
unset($__compilerVar10);
$__compilerVar4 .= '
						';
}
$__compilerVar4 .= '
						
						';
$__compilerVar13 = '';
$__compilerVar4 .= $this->callTemplateHook('uix_userbar_left_end', $__compilerVar13, array());
unset($__compilerVar13);
$__compilerVar4 .= '
						
						';
if (trim($__compilerVar4) !== '')
{
$__compilerVar3 .= '
					<ul class="navLeft';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar3 .= ' moderatorTabs';
}
$__compilerVar3 .= '">
					
						' . $__compilerVar4 . '
		
					</ul>

					
					';
}
unset($__compilerVar4);
$__compilerVar3 .= '
					
					';
$__compilerVar14 = '';
$__compilerVar14 .= '
						
							';
$__compilerVar15 = '';
$__compilerVar14 .= $this->callTemplateHook('uix_userbar_right_start', $__compilerVar15, array());
unset($__compilerVar15);
$__compilerVar14 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar14 .= '
								';
$__compilerVar16 = '';
$__compilerVar17 = '';
$__compilerVar17 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar17 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar17 .= '
	';
$__compilerVar18 = '';
$__compilerVar17 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar18, array());
unset($__compilerVar18);
$__compilerVar17 .= '
	';
}
$__compilerVar17 .= '
	
	  <li class="navTab" style="line-height:50px;"> &nbsp;  <a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>&nbsp;</li>

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">


		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar17 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar17 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar17 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar17 .= '

			
			
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
$__compilerVar19 = '';
$__compilerVar19 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar19) !== '')
{
$__compilerVar17 .= '<div class="muted">' . $__compilerVar19 . '</div>';
}
unset($__compilerVar19);
$__compilerVar17 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar20 = '';
$__compilerVar20 .= '
					';
if ($canEditProfile)
{
$__compilerVar20 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar20 .= '
					';
if ($canEditSignature)
{
$__compilerVar20 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar20 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar20 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar20 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar20 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar20 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar21 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar21 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar20 .= $__compilerVar21;
unset($__compilerVar21);
$__compilerVar20 .= '
';
$__compilerVar17 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar20, array());
unset($__compilerVar20);
$__compilerVar17 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar22 = '';
$__compilerVar22 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar22 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar22 .= '
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
$__compilerVar22 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar22 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar17 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar22, array());
unset($__compilerVar22);
$__compilerVar17 .= '
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
$__compilerVar17 .= '
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
$__compilerVar17 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar17 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar17 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar23 = '';
$__compilerVar23 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar23 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar23 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar17 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar23, array());
unset($__compilerVar23);
$__compilerVar17 .= '
				</ul>
				';
$__compilerVar24 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar24 .= '
	';
$__compilerVar25 = '';
$__compilerVar25 .= '
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
$__compilerVar25 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar26 = '';
$__compilerVar26 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar26 .= '
		';
$__compilerVar27 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar27 .= '

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
$__compilerVar26 .= $__compilerVar27;
unset($__compilerVar27);
$__compilerVar26 .= '
	';
}
$__compilerVar26 .= '
	
	
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
$__compilerVar26 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar26 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar26 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar26 .= '
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
$__compilerVar26 .= '
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
$__compilerVar26 .= '
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
$__compilerVar25 .= $this->callTemplateHook('quick_search', $__compilerVar26, array());
unset($__compilerVar26);
$__compilerVar25 .= '

</div>';
$__compilerVar24 .= $__compilerVar25;
unset($__compilerVar25);
$__compilerVar24 .= '
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
$__compilerVar24 .= $__compilerVar28;
unset($__compilerVar28);
$__compilerVar24 .= '
';
}
$__compilerVar17 .= $__compilerVar24;
unset($__compilerVar24);
$__compilerVar17 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar17 .= '
	';
}
$__compilerVar17 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar17 .= '

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
$__compilerVar17 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar17 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar17 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar17 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar29 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar29 .= '
	';
$__compilerVar30 = '';
$__compilerVar30 .= '
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
$__compilerVar30 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar31 = '';
$__compilerVar31 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar31 .= '
		';
$__compilerVar32 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar32 .= '

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
$__compilerVar31 .= $__compilerVar32;
unset($__compilerVar32);
$__compilerVar31 .= '
	';
}
$__compilerVar31 .= '
	
	
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
$__compilerVar31 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar31 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar31 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar31 .= '
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
$__compilerVar31 .= '
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
$__compilerVar31 .= '
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
$__compilerVar30 .= $this->callTemplateHook('quick_search', $__compilerVar31, array());
unset($__compilerVar31);
$__compilerVar30 .= '

</div>';
$__compilerVar29 .= $__compilerVar30;
unset($__compilerVar30);
$__compilerVar29 .= '
	';
$__compilerVar33 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar33 .= '

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
$__compilerVar29 .= $__compilerVar33;
unset($__compilerVar33);
$__compilerVar29 .= '
';
}
$__compilerVar17 .= $__compilerVar29;
unset($__compilerVar29);
$__compilerVar17 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar17 .= '
		';
}
$__compilerVar17 .= '
		
		';
$__compilerVar34 = '';
$__compilerVar17 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar34, array());
unset($__compilerVar34);
$__compilerVar17 .= '
		
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
$__compilerVar35 = '';
$__compilerVar17 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar35, array());
unset($__compilerVar35);
$__compilerVar17 .= '
	';
}
else
{
$__compilerVar17 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar17 .= ' 
	';
}
$__compilerVar17 .= '
	
';
if (trim($__compilerVar17) !== '')
{
$__compilerVar16 .= '
' . $__compilerVar17 . '
';
}
unset($__compilerVar17);
$__compilerVar14 .= $__compilerVar16;
unset($__compilerVar16);
$__compilerVar14 .= '
							';
}
$__compilerVar14 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 2)
{
$__compilerVar14 .= '
								';
$__compilerVar36 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar36 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar36 .= '<label for="LoginControl">';
}
$__compilerVar36 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar36 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar36 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar36 .= '</label>';
}
$__compilerVar36 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar36 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar37 = '';
$__compilerVar37 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

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
$__compilerVar37 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar37 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar38 = '';
$__compilerVar38 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar38 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar38 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar38 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar38 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar38 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar38 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar38 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar38 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar38 .= '

	';
if (trim($__compilerVar38) !== '')
{
$__compilerVar37 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar38 . '
	</div>
	';
}
unset($__compilerVar38);
$__compilerVar37 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar37 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar37 .= '

</form>';
$__compilerVar36 .= $__compilerVar37;
unset($__compilerVar37);
$__compilerVar36 .= '
			</div>
		</div>
		';
}
$__compilerVar36 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar36 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar36 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar36 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar36 .= '
	
';
}
$__compilerVar14 .= $__compilerVar36;
unset($__compilerVar36);
$__compilerVar14 .= '
							';
}
$__compilerVar14 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 1 && $contentTemplate == ('thread_view'))
{
$__compilerVar14 .= '
								<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
							';
}
$__compilerVar14 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar14 .= '
								';
$__compilerVar39 = '';
if ($canSearch)
{
$__compilerVar39 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar40 = '';
$__compilerVar40 .= '
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
$__compilerVar40 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar41 = '';
$__compilerVar41 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar41 .= '
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
$__compilerVar41 .= $__compilerVar42;
unset($__compilerVar42);
$__compilerVar41 .= '
	';
}
$__compilerVar41 .= '
	
	
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
$__compilerVar41 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar41 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar41 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar41 .= '
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
$__compilerVar41 .= '
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
$__compilerVar41 .= '
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
$__compilerVar40 .= $this->callTemplateHook('quick_search', $__compilerVar41, array());
unset($__compilerVar41);
$__compilerVar40 .= '

</div>';
$__compilerVar39 .= $__compilerVar40;
unset($__compilerVar40);
$__compilerVar39 .= '
		</li>
	
';
}
$__compilerVar14 .= $__compilerVar39;
unset($__compilerVar39);
$__compilerVar14 .= '
							';
}
$__compilerVar14 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 1)
{
$__compilerVar43 = '1';
$__compilerVar44 = '';
$__compilerVar44 .= '

';
if ($__compilerVar43 == 0)
{
$__compilerVar44 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar44 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar44 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar44 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar44 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar44 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar44 .= '
	';
}
else
{
$__compilerVar44 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar44 .= '
	';
}
$__compilerVar44 .= '
	
';
}
else if ($__compilerVar43 == 1)
{
$__compilerVar44 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar44 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar44 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar44 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar44 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar44 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar44 .= '
	';
}
else
{
$__compilerVar44 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar44 .= '
	';
}
$__compilerVar44 .= '
	
';
}
$__compilerVar44 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar44 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar43) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar44 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar44 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar44 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar44 .= '
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
$__compilerVar44 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar43) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar44 .= '
			';
if (!$__compilerVar43)
{
$__compilerVar44 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar44 .= '
			';
if ($__compilerVar43)
{
$__compilerVar44 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar44 .= '
		';
}
else
{
$__compilerVar44 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar44 .= '</a>
	</li>

';
}
$__compilerVar14 .= $__compilerVar44;
unset($__compilerVar43, $__compilerVar44);
}
$__compilerVar14 .= '
							
							';
$__compilerVar45 = '';
$__compilerVar14 .= $this->callTemplateHook('uix_userbar_right_end', $__compilerVar45, array());
unset($__compilerVar45);
$__compilerVar14 .= '
							
						';
if (trim($__compilerVar14) !== '')
{
$__compilerVar3 .= '
					
					
						<ul class="navRight' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar')) ? (' visitorTabs') : ('')) . '">
						
						' . $__compilerVar14 . '
						
						</ul>
						
					';
}
unset($__compilerVar14);
$__compilerVar3 .= '
					
					
					';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar3 .= '
						';
$__compilerVar46 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar46 .= '

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
$__compilerVar3 .= $__compilerVar46;
unset($__compilerVar46);
$__compilerVar3 .= '
					';
}
$__compilerVar3 .= '
					
				
				';
if (trim($__compilerVar3) !== '')
{
$__compilerVar2 .= '



<div id="userBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyUserBar')) ? ('stickyTop') : ('')) . ' ' . (($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3) ? ('withSearch') : ('')) . '">


	<div class="sticky_wrapper">

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar2 .= '
	<div class="pageWidth">
	';
}
$__compilerVar2 .= '
		
		<div class="pageContent">
		
			<div class="navTabs">
		
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar2 .= '
			<div class="pageWidth">
			';
}
$__compilerVar2 .= '
		
				' . $__compilerVar3 . '
			
			</div>

			<span class="helper"></span>
		</div>
	</div>
	</div>
</div>

';
if (XenForo_Template_Helper_Core::styleProperty('uix_jsInsideTemplates'))
{
$__compilerVar2 .= '
<script>if (typeof(uix) !== "undefined" && typeof(uix.templates) !== "undefined") uix.templates.userBar();</script>
';
}
$__compilerVar2 .= '

';
}
unset($__compilerVar3);
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
}
$__compilerVar1 .= '

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 1 && XenForo_Template_Helper_Core::styleProperty('uix_navStyle') != 4)
{
$__compilerVar47 = '';
$__compilerVar47 .= '
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
$__compilerVar47 .= '

' . '

<div id="navigation" class="' . (($canSearch && ($uix_searchPosition == 0 || $uix_searchPosition == 2)) ? ('withSearch') : ('')) . ' ' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) ? ('stickyTop') : ('')) . '">
	<div class="sticky_wrapper">
		<div class="uix_navigationWrapper">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar47 .= '
		<div class="pageWidth">
		';
}
$__compilerVar47 .= '
			<div class="pageContent">
				<nav>
					<div class="navTabs">
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar47 .= '
						<div class="pageWidth">
						';
}
$__compilerVar47 .= '
							
							<ul class="publicTabs navLeft">
	
							';
if ((XenForo_Template_Helper_Core::styleProperty('uix_navigationStickyLogo') && XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) || XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2)
{
$__compilerVar47 .= '
							<li id="logo_small">
								<a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
								';
if (XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath'))
{
$__compilerVar47 .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath') . '">
								';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar47 .= '
									<h1 class="uix_textLogo">';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__compilerVar47 .= '<i class="uix_icon ' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon') . '"></i>';
}
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar47 .= XenForo_Template_Helper_Core::styleProperty('uix_logoText');
}
$__compilerVar47 .= '</h1>
								';
}
else
{
$__compilerVar47 .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
								';
}
$__compilerVar47 .= '
								</a>
							</li>
							';
}
$__compilerVar47 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 0)
{
$__compilerVar48 = '0';
$__compilerVar49 = '';
$__compilerVar49 .= '

';
if ($__compilerVar48 == 0)
{
$__compilerVar49 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar49 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar49 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar49 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar49 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar49 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar49 .= '
	';
}
else
{
$__compilerVar49 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar49 .= '
	';
}
$__compilerVar49 .= '
	
';
}
else if ($__compilerVar48 == 1)
{
$__compilerVar49 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar49 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar49 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar49 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar49 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar49 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar49 .= '
	';
}
else
{
$__compilerVar49 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar49 .= '
	';
}
$__compilerVar49 .= '
	
';
}
$__compilerVar49 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar49 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar48) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar49 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar49 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar49 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar49 .= '
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
$__compilerVar49 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar48) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar49 .= '
			';
if (!$__compilerVar48)
{
$__compilerVar49 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar49 .= '
			';
if ($__compilerVar48)
{
$__compilerVar49 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar49 .= '
		';
}
else
{
$__compilerVar49 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar49 .= '</a>
	</li>

';
}
$__compilerVar47 .= $__compilerVar49;
unset($__compilerVar48, $__compilerVar49);
}
$__compilerVar47 .= '
							
							<!-- home -->
							';
if ($showHomeLink)
{
$__compilerVar47 .= '
								<li class="navTab home PopupClosed"><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="navLink">';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon'))
{
$__compilerVar47 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar47 .= 'Home';
}
$__compilerVar47 .= '</a></li>
							';
}
$__compilerVar47 .= '
								
								
								<!-- extra tabs: home -->
								';
if ($extraTabs['home'])
{
$__compilerVar47 .= '
								';
foreach ($extraTabs['home'] AS $extraTabId => $extraTab)
{
$__compilerVar47 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar47 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar47 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar47 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar47 .= '">
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' NoPopupGadget';
}
$__compilerVar47 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' rel="Menu"';
}
$__compilerVar47 .= '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon') && ($extraTabId == ('home') || $extraTabId == ('portal') || $extraTabId == ('ctaFt')))
{
$__compilerVar47 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar47 .= htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
}
if ($extraTab['counter'])
{
$__compilerVar47 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar47 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar47 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar47 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar47 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h2>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h2>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar50 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar50 .= '
	';
$__compilerVar51 = '';
$__compilerVar51 .= '
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
$__compilerVar51 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar52 = '';
$__compilerVar52 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar52 .= '
		';
$__compilerVar53 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar53 .= '

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
$__compilerVar52 .= $__compilerVar53;
unset($__compilerVar53);
$__compilerVar52 .= '
	';
}
$__compilerVar52 .= '
	
	
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
$__compilerVar52 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar52 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar52 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar52 .= '
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
$__compilerVar52 .= '
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
$__compilerVar52 .= '
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
$__compilerVar51 .= $this->callTemplateHook('quick_search', $__compilerVar52, array());
unset($__compilerVar52);
$__compilerVar51 .= '

</div>';
$__compilerVar50 .= $__compilerVar51;
unset($__compilerVar51);
$__compilerVar50 .= '
	';
$__compilerVar54 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar54 .= '

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
$__compilerVar50 .= $__compilerVar54;
unset($__compilerVar54);
$__compilerVar50 .= '
';
}
$__compilerVar47 .= $__compilerVar50;
unset($__compilerVar50);
}
$__compilerVar47 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar47 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' NoPopupGadget';
}
$__compilerVar47 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' rel="Menu"';
}
$__compilerVar47 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar47 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar47 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar47 .= '<div class="tabLinks">';
$__compilerVar55 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar55 .= '
	';
$__compilerVar56 = '';
$__compilerVar56 .= '
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
$__compilerVar56 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar57 = '';
$__compilerVar57 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar57 .= '
		';
$__compilerVar58 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar58 .= '

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
$__compilerVar57 .= $__compilerVar58;
unset($__compilerVar58);
$__compilerVar57 .= '
	';
}
$__compilerVar57 .= '
	
	
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
$__compilerVar57 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar57 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar57 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar57 .= '
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
$__compilerVar57 .= '
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
$__compilerVar57 .= '
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
$__compilerVar56 .= $this->callTemplateHook('quick_search', $__compilerVar57, array());
unset($__compilerVar57);
$__compilerVar56 .= '

</div>';
$__compilerVar55 .= $__compilerVar56;
unset($__compilerVar56);
$__compilerVar55 .= '
	';
$__compilerVar59 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar59 .= '

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
$__compilerVar55 .= $__compilerVar59;
unset($__compilerVar59);
$__compilerVar55 .= '
';
}
$__compilerVar47 .= $__compilerVar55;
unset($__compilerVar55);
$__compilerVar47 .= '</div>';
}
}
$__compilerVar47 .= '
										</li>
									';
}
$__compilerVar47 .= '
								';
}
$__compilerVar47 .= '
								';
}
$__compilerVar47 .= '
								
								
								<!-- forums -->
								';
if ($tabs['forums'])
{
$__compilerVar47 .= '
									<li class="navTab forums ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar47 .= (($tabs['forums']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar47 .= (($tabs['forums']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar47 .= '">
									
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' NoPopupGadget';
}
$__compilerVar47 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' rel="Menu"';
}
$__compilerVar47 .= '>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar47 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar47 .= (($tabs['forums']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar47 .= ' forumsTabLinks">
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar60 = '';
$__compilerVar60 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar60 .= '<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>';
}
$__compilerVar60 .= '
													';
if ($canSearch)
{
$__compilerVar60 .= '<li><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Forums' . '</a></li>';
}
$__compilerVar60 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar60 .= '
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/forums', false, array()) . '">' . 'Watched Forums' . '</a></li>
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/threads', false, array()) . '">' . 'Watched Threads' . '</a></li>
													';
}
$__compilerVar60 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '" rel="nofollow">' . (($visitor['user_id']) ? ('New Posts') : ('Recent Posts')) . '</a></li>
												';
$__compilerVar47 .= $this->callTemplateHook('navigation_tabs_forums', $__compilerVar60, array());
unset($__compilerVar60);
$__compilerVar47 .= '
												</ul>
												';
if ($tabs['forums']['selected'])
{
$__compilerVar61 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar61 .= '
	';
$__compilerVar62 = '';
$__compilerVar62 .= '
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
$__compilerVar62 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar63 = '';
$__compilerVar63 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar63 .= '
		';
$__compilerVar64 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar64 .= '

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
$__compilerVar63 .= $__compilerVar64;
unset($__compilerVar64);
$__compilerVar63 .= '
	';
}
$__compilerVar63 .= '
	
	
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
$__compilerVar63 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar63 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar63 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar63 .= '
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
$__compilerVar63 .= '
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
$__compilerVar63 .= '
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
$__compilerVar62 .= $this->callTemplateHook('quick_search', $__compilerVar63, array());
unset($__compilerVar63);
$__compilerVar62 .= '

</div>';
$__compilerVar61 .= $__compilerVar62;
unset($__compilerVar62);
$__compilerVar61 .= '
	';
$__compilerVar65 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar65 .= '

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
$__compilerVar61 .= $__compilerVar65;
unset($__compilerVar65);
$__compilerVar61 .= '
';
}
$__compilerVar47 .= $__compilerVar61;
unset($__compilerVar61);
}
$__compilerVar47 .= '
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__compilerVar47 .= '
								
								
								<!-- extra tabs: middle -->
								';
if ($extraTabs['middle'])
{
$__compilerVar47 .= '
								';
foreach ($extraTabs['middle'] AS $extraTabId => $extraTab)
{
$__compilerVar47 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar47 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar47 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar47 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar47 .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' NoPopupGadget';
}
$__compilerVar47 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' rel="Menu"';
}
$__compilerVar47 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar47 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar47 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar47 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar47 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar47 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar66 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar66 .= '
	';
$__compilerVar67 = '';
$__compilerVar67 .= '
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
$__compilerVar67 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar68 = '';
$__compilerVar68 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar68 .= '
		';
$__compilerVar69 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar69 .= '

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
$__compilerVar68 .= $__compilerVar69;
unset($__compilerVar69);
$__compilerVar68 .= '
	';
}
$__compilerVar68 .= '
	
	
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
$__compilerVar68 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar68 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar68 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar68 .= '
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
$__compilerVar68 .= '
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
$__compilerVar68 .= '
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
$__compilerVar67 .= $this->callTemplateHook('quick_search', $__compilerVar68, array());
unset($__compilerVar68);
$__compilerVar67 .= '

</div>';
$__compilerVar66 .= $__compilerVar67;
unset($__compilerVar67);
$__compilerVar66 .= '
	';
$__compilerVar70 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar70 .= '

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
$__compilerVar66 .= $__compilerVar70;
unset($__compilerVar70);
$__compilerVar66 .= '
';
}
$__compilerVar47 .= $__compilerVar66;
unset($__compilerVar66);
}
$__compilerVar47 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar47 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' NoPopupGadget';
}
$__compilerVar47 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' rel="Menu"';
}
$__compilerVar47 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar47 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar47 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar47 .= '<div class="tabLinks">';
$__compilerVar71 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar71 .= '
	';
$__compilerVar72 = '';
$__compilerVar72 .= '
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
$__compilerVar72 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar73 = '';
$__compilerVar73 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar73 .= '
		';
$__compilerVar74 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar74 .= '

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
$__compilerVar73 .= $__compilerVar74;
unset($__compilerVar74);
$__compilerVar73 .= '
	';
}
$__compilerVar73 .= '
	
	
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
$__compilerVar73 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar73 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar73 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar73 .= '
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
$__compilerVar73 .= '
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
$__compilerVar73 .= '
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
$__compilerVar72 .= $this->callTemplateHook('quick_search', $__compilerVar73, array());
unset($__compilerVar73);
$__compilerVar72 .= '

</div>';
$__compilerVar71 .= $__compilerVar72;
unset($__compilerVar72);
$__compilerVar71 .= '
	';
$__compilerVar75 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar75 .= '

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
$__compilerVar71 .= $__compilerVar75;
unset($__compilerVar75);
$__compilerVar71 .= '
';
}
$__compilerVar47 .= $__compilerVar71;
unset($__compilerVar71);
$__compilerVar47 .= '</div>';
}
}
$__compilerVar47 .= '
										</li>
									';
}
$__compilerVar47 .= '
								';
}
$__compilerVar47 .= '
								';
}
$__compilerVar47 .= '
								
								
								<!-- members -->
								';
if ($tabs['members'])
{
$__compilerVar47 .= '
									<li class="navTab members ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar47 .= (($tabs['members']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar47 .= (($tabs['members']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar47 .= '">
									
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' NoPopupGadget';
}
$__compilerVar47 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' rel="Menu"';
}
$__compilerVar47 .= '>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar47 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar47 .= (($tabs['members']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar47 .= ' membersTabLinks">
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar76 = '';
$__compilerVar76 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Notable Members' . '</a></li>
													';
if ($xenOptions['enableMemberList'])
{
$__compilerVar76 .= '<li><a href="' . XenForo_Template_Helper_Core::link('members/list', false, array()) . '">' . 'Registered Members' . '</a></li>';
}
$__compilerVar76 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Current Visitors' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar76 .= '<li><a href="' . XenForo_Template_Helper_Core::link('recent-activity', false, array()) . '">' . 'Recent Activity' . '</a></li>';
}
$__compilerVar76 .= '
													';
if ($canViewProfilePosts)
{
$__compilerVar76 .= '<li><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></li>';
}
$__compilerVar76 .= '
												';
$__compilerVar47 .= $this->callTemplateHook('navigation_tabs_members', $__compilerVar76, array());
unset($__compilerVar76);
$__compilerVar47 .= '
												</ul>
												';
if ($tabs['members']['selected'])
{
$__compilerVar77 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar77 .= '
	';
$__compilerVar78 = '';
$__compilerVar78 .= '
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
$__compilerVar78 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar79 = '';
$__compilerVar79 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar79 .= '
		';
$__compilerVar80 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar80 .= '

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
$__compilerVar79 .= $__compilerVar80;
unset($__compilerVar80);
$__compilerVar79 .= '
	';
}
$__compilerVar79 .= '
	
	
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
$__compilerVar79 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar79 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar79 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar79 .= '
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
$__compilerVar79 .= '
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
$__compilerVar79 .= '
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
$__compilerVar78 .= $this->callTemplateHook('quick_search', $__compilerVar79, array());
unset($__compilerVar79);
$__compilerVar78 .= '

</div>';
$__compilerVar77 .= $__compilerVar78;
unset($__compilerVar78);
$__compilerVar77 .= '
	';
$__compilerVar81 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar81 .= '

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
$__compilerVar77 .= $__compilerVar81;
unset($__compilerVar81);
$__compilerVar77 .= '
';
}
$__compilerVar47 .= $__compilerVar77;
unset($__compilerVar77);
}
$__compilerVar47 .= '
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__compilerVar47 .= '				
								
								<!-- extra tabs: end -->
								';
if ($extraTabs['end'])
{
$__compilerVar47 .= '
								';
foreach ($extraTabs['end'] AS $extraTabId => $extraTab)
{
$__compilerVar47 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar47 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar47 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar47 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar47 .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' NoPopupGadget';
}
$__compilerVar47 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' rel="Menu"';
}
$__compilerVar47 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar47 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar47 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar47 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar47 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar47 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar82 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar82 .= '
	';
$__compilerVar83 = '';
$__compilerVar83 .= '
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
$__compilerVar83 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar84 = '';
$__compilerVar84 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar84 .= '
		';
$__compilerVar85 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar85 .= '

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
$__compilerVar84 .= $__compilerVar85;
unset($__compilerVar85);
$__compilerVar84 .= '
	';
}
$__compilerVar84 .= '
	
	
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
$__compilerVar84 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar84 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar84 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar84 .= '
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
$__compilerVar84 .= '
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
$__compilerVar84 .= '
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
$__compilerVar83 .= $this->callTemplateHook('quick_search', $__compilerVar84, array());
unset($__compilerVar84);
$__compilerVar83 .= '

</div>';
$__compilerVar82 .= $__compilerVar83;
unset($__compilerVar83);
$__compilerVar82 .= '
	';
$__compilerVar86 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar86 .= '

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
$__compilerVar82 .= $__compilerVar86;
unset($__compilerVar86);
$__compilerVar82 .= '
';
}
$__compilerVar47 .= $__compilerVar82;
unset($__compilerVar82);
}
$__compilerVar47 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar47 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' NoPopupGadget';
}
$__compilerVar47 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar47 .= ' rel="Menu"';
}
$__compilerVar47 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar47 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar47 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar47 .= '<div class="tabLinks">';
$__compilerVar87 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar87 .= '
	';
$__compilerVar88 = '';
$__compilerVar88 .= '
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
$__compilerVar88 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar89 = '';
$__compilerVar89 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar89 .= '
		';
$__compilerVar90 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar90 .= '

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
$__compilerVar89 .= $__compilerVar90;
unset($__compilerVar90);
$__compilerVar89 .= '
	';
}
$__compilerVar89 .= '
	
	
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
$__compilerVar89 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar89 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar89 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar89 .= '
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
$__compilerVar89 .= '
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
$__compilerVar89 .= '
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
$__compilerVar88 .= $this->callTemplateHook('quick_search', $__compilerVar89, array());
unset($__compilerVar89);
$__compilerVar88 .= '

</div>';
$__compilerVar87 .= $__compilerVar88;
unset($__compilerVar88);
$__compilerVar87 .= '
	';
$__compilerVar91 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar91 .= '

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
$__compilerVar87 .= $__compilerVar91;
unset($__compilerVar91);
$__compilerVar87 .= '
';
}
$__compilerVar47 .= $__compilerVar87;
unset($__compilerVar87);
$__compilerVar47 .= '</div>';
}
}
$__compilerVar47 .= '
										</li>
									';
}
$__compilerVar47 .= '
								';
}
$__compilerVar47 .= '
								';
}
$__compilerVar47 .= '
								
								<!-- responsive popup -->
								<li class="navTab navigationHiddenTabs Popup PopupControl PopupClosed" style="display:none">	
												
									<a rel="Menu" class="navLink NoPopupGadget uix_dropdownDesktopMenu"><i class="uix_icon uix_icon-navTrigger"></i><span class="uix_hide menuIcon">' . 'Menu' . '</span></a>
									
									<div class="Menu JsOnly blockLinksList primaryContent" id="NavigationHiddenMenu"></div>
								</li>
									
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar47 .= '
								<!-- no selection -->
								';
if (!$selectedTab)
{
$__compilerVar47 .= '
									<li class="navTab selected"><div class="tabLinks">';
$__compilerVar92 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar92 .= '
	';
$__compilerVar93 = '';
$__compilerVar93 .= '
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
$__compilerVar93 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar94 = '';
$__compilerVar94 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar94 .= '
		';
$__compilerVar95 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar95 .= '

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
$__compilerVar94 .= $__compilerVar95;
unset($__compilerVar95);
$__compilerVar94 .= '
	';
}
$__compilerVar94 .= '
	
	
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
$__compilerVar94 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar94 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar94 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar94 .= '
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
$__compilerVar94 .= '
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
$__compilerVar94 .= '
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
$__compilerVar93 .= $this->callTemplateHook('quick_search', $__compilerVar94, array());
unset($__compilerVar94);
$__compilerVar93 .= '

</div>';
$__compilerVar92 .= $__compilerVar93;
unset($__compilerVar93);
$__compilerVar92 .= '
	';
$__compilerVar96 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar96 .= '

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
$__compilerVar92 .= $__compilerVar96;
unset($__compilerVar96);
$__compilerVar92 .= '
';
}
$__compilerVar47 .= $__compilerVar92;
unset($__compilerVar92);
$__compilerVar47 .= '</div></li>
								';
}
$__compilerVar47 .= '
								';
}
$__compilerVar47 .= '
	
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar47 .= '	
									';
if ($tabs['account']['selected'])
{
$__compilerVar47 .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar97 = '';
$__compilerVar97 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar97 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar97 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
												';
$__compilerVar47 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar97, array());
unset($__compilerVar97);
$__compilerVar47 .= '
												</ul>
												';
$__compilerVar98 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar98 .= '
	';
$__compilerVar99 = '';
$__compilerVar99 .= '
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
$__compilerVar99 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar100 = '';
$__compilerVar100 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar100 .= '
		';
$__compilerVar101 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar101 .= '

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
$__compilerVar100 .= $__compilerVar101;
unset($__compilerVar101);
$__compilerVar100 .= '
	';
}
$__compilerVar100 .= '
	
	
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
$__compilerVar100 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar100 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar100 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar100 .= '
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
$__compilerVar100 .= '
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
$__compilerVar100 .= '
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
$__compilerVar99 .= $this->callTemplateHook('quick_search', $__compilerVar100, array());
unset($__compilerVar100);
$__compilerVar99 .= '

</div>';
$__compilerVar98 .= $__compilerVar99;
unset($__compilerVar99);
$__compilerVar98 .= '
	';
$__compilerVar102 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar102 .= '

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
$__compilerVar98 .= $__compilerVar102;
unset($__compilerVar102);
$__compilerVar98 .= '
';
}
$__compilerVar47 .= $__compilerVar98;
unset($__compilerVar98);
$__compilerVar47 .= '
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__compilerVar47 .= '
									';
if ($tabs['inbox']['selected'])
{
$__compilerVar47 .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
												</ul>
												';
$__compilerVar103 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar103 .= '
	';
$__compilerVar104 = '';
$__compilerVar104 .= '
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
$__compilerVar104 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar105 = '';
$__compilerVar105 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar105 .= '
		';
$__compilerVar106 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar106 .= '

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
$__compilerVar105 .= $__compilerVar106;
unset($__compilerVar106);
$__compilerVar105 .= '
	';
}
$__compilerVar105 .= '
	
	
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
$__compilerVar105 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar105 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar105 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar105 .= '
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
$__compilerVar105 .= '
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
$__compilerVar105 .= '
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
$__compilerVar104 .= $this->callTemplateHook('quick_search', $__compilerVar105, array());
unset($__compilerVar105);
$__compilerVar104 .= '

</div>';
$__compilerVar103 .= $__compilerVar104;
unset($__compilerVar104);
$__compilerVar103 .= '
	';
$__compilerVar107 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar107 .= '

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
$__compilerVar103 .= $__compilerVar107;
unset($__compilerVar107);
$__compilerVar103 .= '
';
}
$__compilerVar47 .= $__compilerVar103;
unset($__compilerVar103);
$__compilerVar47 .= '
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__compilerVar47 .= '
								';
}
$__compilerVar47 .= '		
	
							</ul>
							
							
							';
$__compilerVar108 = '';
$__compilerVar108 .= '
								
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 0 && $contentTemplate == ('thread_view'))
{
$__compilerVar108 .= '
										<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
									';
}
$__compilerVar108 .= '
								
									';
$__compilerVar109 = '';
$__compilerVar108 .= $this->callTemplateHook('uix_navigation_right_start', $__compilerVar109, array());
unset($__compilerVar109);
$__compilerVar108 .= '
									
									';
if (!XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar108 .= '
										';
$__compilerVar110 = '';
$__compilerVar111 = '';
$__compilerVar111 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar111 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar111 .= '
	';
$__compilerVar112 = '';
$__compilerVar111 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar112, array());
unset($__compilerVar112);
$__compilerVar111 .= '
	';
}
$__compilerVar111 .= '
	
	  <li class="navTab" style="line-height:50px;"> &nbsp;  <a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>&nbsp;</li>

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">


		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar111 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar111 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar111 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar111 .= '

			
			
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
$__compilerVar113 = '';
$__compilerVar113 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar113) !== '')
{
$__compilerVar111 .= '<div class="muted">' . $__compilerVar113 . '</div>';
}
unset($__compilerVar113);
$__compilerVar111 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar114 = '';
$__compilerVar114 .= '
					';
if ($canEditProfile)
{
$__compilerVar114 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar114 .= '
					';
if ($canEditSignature)
{
$__compilerVar114 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar114 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar114 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar114 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar114 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar114 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar115 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar115 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar114 .= $__compilerVar115;
unset($__compilerVar115);
$__compilerVar114 .= '
';
$__compilerVar111 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar114, array());
unset($__compilerVar114);
$__compilerVar111 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar116 = '';
$__compilerVar116 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar116 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar116 .= '
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
$__compilerVar116 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar116 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar111 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar116, array());
unset($__compilerVar116);
$__compilerVar111 .= '
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
$__compilerVar111 .= '
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
$__compilerVar111 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar111 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar111 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar117 = '';
$__compilerVar117 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar117 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar117 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar111 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar117, array());
unset($__compilerVar117);
$__compilerVar111 .= '
				</ul>
				';
$__compilerVar118 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar118 .= '
	';
$__compilerVar119 = '';
$__compilerVar119 .= '
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
$__compilerVar119 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar120 = '';
$__compilerVar120 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar120 .= '
		';
$__compilerVar121 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar121 .= '

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
$__compilerVar120 .= $__compilerVar121;
unset($__compilerVar121);
$__compilerVar120 .= '
	';
}
$__compilerVar120 .= '
	
	
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
$__compilerVar120 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar120 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar120 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar120 .= '
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
$__compilerVar120 .= '
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
$__compilerVar120 .= '
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
$__compilerVar119 .= $this->callTemplateHook('quick_search', $__compilerVar120, array());
unset($__compilerVar120);
$__compilerVar119 .= '

</div>';
$__compilerVar118 .= $__compilerVar119;
unset($__compilerVar119);
$__compilerVar118 .= '
	';
$__compilerVar122 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar122 .= '

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
$__compilerVar118 .= $__compilerVar122;
unset($__compilerVar122);
$__compilerVar118 .= '
';
}
$__compilerVar111 .= $__compilerVar118;
unset($__compilerVar118);
$__compilerVar111 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar111 .= '
	';
}
$__compilerVar111 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar111 .= '

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
$__compilerVar111 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar111 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar111 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar111 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar123 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar123 .= '
	';
$__compilerVar124 = '';
$__compilerVar124 .= '
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
$__compilerVar124 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar125 = '';
$__compilerVar125 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar125 .= '
		';
$__compilerVar126 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar126 .= '

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
$__compilerVar125 .= $__compilerVar126;
unset($__compilerVar126);
$__compilerVar125 .= '
	';
}
$__compilerVar125 .= '
	
	
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
$__compilerVar125 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar125 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar125 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar125 .= '
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
$__compilerVar125 .= '
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
$__compilerVar125 .= '
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
$__compilerVar124 .= $this->callTemplateHook('quick_search', $__compilerVar125, array());
unset($__compilerVar125);
$__compilerVar124 .= '

</div>';
$__compilerVar123 .= $__compilerVar124;
unset($__compilerVar124);
$__compilerVar123 .= '
	';
$__compilerVar127 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar127 .= '

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
$__compilerVar123 .= $__compilerVar127;
unset($__compilerVar127);
$__compilerVar123 .= '
';
}
$__compilerVar111 .= $__compilerVar123;
unset($__compilerVar123);
$__compilerVar111 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar111 .= '
		';
}
$__compilerVar111 .= '
		
		';
$__compilerVar128 = '';
$__compilerVar111 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar128, array());
unset($__compilerVar128);
$__compilerVar111 .= '
		
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
$__compilerVar129 = '';
$__compilerVar111 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar129, array());
unset($__compilerVar129);
$__compilerVar111 .= '
	';
}
else
{
$__compilerVar111 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar111 .= ' 
	';
}
$__compilerVar111 .= '
	
';
if (trim($__compilerVar111) !== '')
{
$__compilerVar110 .= '
' . $__compilerVar111 . '
';
}
unset($__compilerVar111);
$__compilerVar108 .= $__compilerVar110;
unset($__compilerVar110);
$__compilerVar108 .= '
									';
}
$__compilerVar108 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 1)
{
$__compilerVar108 .= '
										';
$__compilerVar130 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar130 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar130 .= '<label for="LoginControl">';
}
$__compilerVar130 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar130 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar130 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar130 .= '</label>';
}
$__compilerVar130 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar130 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar131 = '';
$__compilerVar131 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

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
$__compilerVar131 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar131 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar132 = '';
$__compilerVar132 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar132 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar132 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar132 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar132 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar132 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar132 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar132 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar132 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar132 .= '

	';
if (trim($__compilerVar132) !== '')
{
$__compilerVar131 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar132 . '
	</div>
	';
}
unset($__compilerVar132);
$__compilerVar131 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar131 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar131 .= '

</form>';
$__compilerVar130 .= $__compilerVar131;
unset($__compilerVar131);
$__compilerVar130 .= '
			</div>
		</div>
		';
}
$__compilerVar130 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar130 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar130 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar130 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar130 .= '
	
';
}
$__compilerVar108 .= $__compilerVar130;
unset($__compilerVar130);
$__compilerVar108 .= '
									';
}
$__compilerVar108 .= '
							
									';
$__compilerVar133 = '';
$__compilerVar108 .= $this->callTemplateHook('uix_navigation_right_end', $__compilerVar133, array());
unset($__compilerVar133);
$__compilerVar108 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 0)
{
$__compilerVar134 = '1';
$__compilerVar135 = '';
$__compilerVar135 .= '

';
if ($__compilerVar134 == 0)
{
$__compilerVar135 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar135 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar135 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar135 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar135 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar135 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar135 .= '
	';
}
else
{
$__compilerVar135 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar135 .= '
	';
}
$__compilerVar135 .= '
	
';
}
else if ($__compilerVar134 == 1)
{
$__compilerVar135 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar135 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar135 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar135 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar135 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar135 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar135 .= '
	';
}
else
{
$__compilerVar135 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar135 .= '
	';
}
$__compilerVar135 .= '
	
';
}
$__compilerVar135 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar135 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar134) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar135 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar135 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar135 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar135 .= '
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
$__compilerVar135 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar134) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar135 .= '
			';
if (!$__compilerVar134)
{
$__compilerVar135 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar135 .= '
			';
if ($__compilerVar134)
{
$__compilerVar135 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar135 .= '
		';
}
else
{
$__compilerVar135 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar135 .= '</a>
	</li>

';
}
$__compilerVar108 .= $__compilerVar135;
unset($__compilerVar134, $__compilerVar135);
}
$__compilerVar108 .= '
	
									';
if ($uix_searchPosition == 2)
{
$__compilerVar108 .= '
										';
$__compilerVar136 = '';
if ($canSearch)
{
$__compilerVar136 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar137 = '';
$__compilerVar137 .= '
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
$__compilerVar137 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar138 = '';
$__compilerVar138 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar138 .= '
		';
$__compilerVar139 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar139 .= '

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
$__compilerVar138 .= $__compilerVar139;
unset($__compilerVar139);
$__compilerVar138 .= '
	';
}
$__compilerVar138 .= '
	
	
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
$__compilerVar138 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar138 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar138 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar138 .= '
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
$__compilerVar138 .= '
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
$__compilerVar138 .= '
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
$__compilerVar137 .= $this->callTemplateHook('quick_search', $__compilerVar138, array());
unset($__compilerVar138);
$__compilerVar137 .= '

</div>';
$__compilerVar136 .= $__compilerVar137;
unset($__compilerVar137);
$__compilerVar136 .= '
		</li>
	
';
}
$__compilerVar108 .= $__compilerVar136;
unset($__compilerVar136);
$__compilerVar108 .= '
									';
}
$__compilerVar108 .= '
								
								';
if (trim($__compilerVar108) !== '')
{
$__compilerVar47 .= '
								
								
								<ul class="navRight visitorTabs">
								
								' . $__compilerVar108 . '
								
								</ul>
								
							';
}
unset($__compilerVar108);
$__compilerVar47 .= '
							
							';
if ($uix_searchPosition == 2)
{
$__compilerVar47 .= '
								';
$__compilerVar140 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar140 .= '

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
$__compilerVar47 .= $__compilerVar140;
unset($__compilerVar140);
$__compilerVar47 .= '
							';
}
$__compilerVar47 .= '
									
								
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar47 .= '</div>';
}
$__compilerVar47 .= '
					</div>
	
				<span class="helper"></span>
					
				</nav>
			</div>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar47 .= '</div>';
}
$__compilerVar47 .= '
		</div>
	</div>
</div>';
$__compilerVar1 .= $__compilerVar47;
unset($__compilerVar47);
}
$__compilerVar1 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') != 2)
{
$__compilerVar1 .= '
		';
$__compilerVar141 = '';
$__compilerVar141 .= '
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
$__compilerVar141 .= '

<div id="logoBlock" ' . (($canSearch && $uix_searchPosition == 1) ? ('class="withSearch"') : ('')) . '>

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar141 .= '
	<div class="pageWidth">
	';
}
$__compilerVar141 .= '	
		
		<div class="pageContent">
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar141 .= '
		<div class="pageWidth">
		';
}
$__compilerVar141 .= '
			
		';
$__compilerVar142 = '';
$__compilerVar142 .= '
		<div id="logo"><a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
			<span></span>
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar142 .= '<h2 class="uix_textLogo">';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__compilerVar142 .= '<i class="uix_icon ' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon') . '"></i>';
}
$__compilerVar142 .= XenForo_Template_Helper_Core::styleProperty('uix_logoText') . '</h2>';
}
else
{
$__compilerVar142 .= '<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar142 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_sloganText'))
{
$__compilerVar142 .= '<div class="uix_slogan">' . XenForo_Template_Helper_Core::styleProperty('uix_sloganText') . '</div>';
}
$__compilerVar142 .= '
		</a></div>
		';
$__compilerVar141 .= $this->callTemplateHook('header_logo', $__compilerVar142, array());
unset($__compilerVar142);
$__compilerVar141 .= '
		
		';
if ($canSearch && $uix_searchPosition == 1)
{
$__compilerVar141 .= '
			';
$__compilerVar143 = '';
$__compilerVar143 .= '
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
$__compilerVar143 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar144 = '';
$__compilerVar144 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar144 .= '
		';
$__compilerVar145 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar145 .= '

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
$__compilerVar144 .= $__compilerVar145;
unset($__compilerVar145);
$__compilerVar144 .= '
	';
}
$__compilerVar144 .= '
	
	
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
$__compilerVar144 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar144 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar144 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar144 .= '
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
$__compilerVar144 .= '
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
$__compilerVar144 .= '
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
$__compilerVar143 .= $this->callTemplateHook('quick_search', $__compilerVar144, array());
unset($__compilerVar144);
$__compilerVar143 .= '

</div>';
$__compilerVar141 .= $__compilerVar143;
unset($__compilerVar143);
$__compilerVar141 .= '
		';
}
else
{
$__compilerVar141 .= '
			';
$__compilerVar146 = '';
$__compilerVar147 = '';
$__compilerVar147 .= '
	
		';
$__compilerVar148 = '';
$__compilerVar148 .= '
				';
$__compilerVar149 = '';
$__compilerVar148 .= $this->callTemplateHook('ad_header', $__compilerVar149, array());
unset($__compilerVar149);
$__compilerVar148 .= '
				
				
				
				

				
			';
if (trim($__compilerVar148) !== '')
{
$__compilerVar147 .= '
			' . $__compilerVar148 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar147 .= '
			<div>' . 'Template' . ': ad_header</div>
		';
}
unset($__compilerVar148);
$__compilerVar147 .= '
	
	';
if (trim($__compilerVar147) !== '')
{
$__compilerVar146 .= '
	<div class="funbox">
	<div class="funboxWrapper">
	' . $__compilerVar147 . '
	</div>
	</div>
	
';
}
unset($__compilerVar147);
$__compilerVar141 .= $__compilerVar146;
unset($__compilerVar146);
$__compilerVar141 .= '
		';
}
$__compilerVar141 .= '
			
		<span class="helper"></span>
		</div>
	</div>	
</div>';
$__compilerVar1 .= $__compilerVar141;
unset($__compilerVar141);
$__compilerVar1 .= '
	';
}
$__compilerVar1 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') != 1 && XenForo_Template_Helper_Core::styleProperty('uix_navStyle') != 4)
{
$__compilerVar150 = '';
$__compilerVar150 .= '
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
$__compilerVar150 .= '

' . '

<div id="navigation" class="' . (($canSearch && ($uix_searchPosition == 0 || $uix_searchPosition == 2)) ? ('withSearch') : ('')) . ' ' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) ? ('stickyTop') : ('')) . '">
	<div class="sticky_wrapper">
		<div class="uix_navigationWrapper">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar150 .= '
		<div class="pageWidth">
		';
}
$__compilerVar150 .= '
			<div class="pageContent">
				<nav>
					<div class="navTabs">
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar150 .= '
						<div class="pageWidth">
						';
}
$__compilerVar150 .= '
							
							<ul class="publicTabs navLeft">
	
							';
if ((XenForo_Template_Helper_Core::styleProperty('uix_navigationStickyLogo') && XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) || XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2)
{
$__compilerVar150 .= '
							<li id="logo_small">
								<a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
								';
if (XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath'))
{
$__compilerVar150 .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath') . '">
								';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar150 .= '
									<h1 class="uix_textLogo">';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__compilerVar150 .= '<i class="uix_icon ' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon') . '"></i>';
}
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar150 .= XenForo_Template_Helper_Core::styleProperty('uix_logoText');
}
$__compilerVar150 .= '</h1>
								';
}
else
{
$__compilerVar150 .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
								';
}
$__compilerVar150 .= '
								</a>
							</li>
							';
}
$__compilerVar150 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 0)
{
$__compilerVar151 = '0';
$__compilerVar152 = '';
$__compilerVar152 .= '

';
if ($__compilerVar151 == 0)
{
$__compilerVar152 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar152 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar152 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar152 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar152 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar152 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar152 .= '
	';
}
else
{
$__compilerVar152 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar152 .= '
	';
}
$__compilerVar152 .= '
	
';
}
else if ($__compilerVar151 == 1)
{
$__compilerVar152 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar152 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar152 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar152 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar152 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar152 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar152 .= '
	';
}
else
{
$__compilerVar152 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar152 .= '
	';
}
$__compilerVar152 .= '
	
';
}
$__compilerVar152 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar152 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar151) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar152 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar152 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar152 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar152 .= '
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
$__compilerVar152 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar151) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar152 .= '
			';
if (!$__compilerVar151)
{
$__compilerVar152 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar152 .= '
			';
if ($__compilerVar151)
{
$__compilerVar152 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar152 .= '
		';
}
else
{
$__compilerVar152 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar152 .= '</a>
	</li>

';
}
$__compilerVar150 .= $__compilerVar152;
unset($__compilerVar151, $__compilerVar152);
}
$__compilerVar150 .= '
							
							<!-- home -->
							';
if ($showHomeLink)
{
$__compilerVar150 .= '
								<li class="navTab home PopupClosed"><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="navLink">';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon'))
{
$__compilerVar150 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar150 .= 'Home';
}
$__compilerVar150 .= '</a></li>
							';
}
$__compilerVar150 .= '
								
								
								<!-- extra tabs: home -->
								';
if ($extraTabs['home'])
{
$__compilerVar150 .= '
								';
foreach ($extraTabs['home'] AS $extraTabId => $extraTab)
{
$__compilerVar150 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar150 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar150 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar150 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar150 .= '">
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' NoPopupGadget';
}
$__compilerVar150 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' rel="Menu"';
}
$__compilerVar150 .= '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon') && ($extraTabId == ('home') || $extraTabId == ('portal') || $extraTabId == ('ctaFt')))
{
$__compilerVar150 .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__compilerVar150 .= htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
}
if ($extraTab['counter'])
{
$__compilerVar150 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar150 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar150 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar150 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar150 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h2>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h2>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar153 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar153 .= '
	';
$__compilerVar154 = '';
$__compilerVar154 .= '
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
$__compilerVar154 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar155 = '';
$__compilerVar155 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar155 .= '
		';
$__compilerVar156 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar156 .= '

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
$__compilerVar155 .= $__compilerVar156;
unset($__compilerVar156);
$__compilerVar155 .= '
	';
}
$__compilerVar155 .= '
	
	
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
$__compilerVar155 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar155 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar155 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar155 .= '
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
$__compilerVar155 .= '
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
$__compilerVar155 .= '
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
$__compilerVar154 .= $this->callTemplateHook('quick_search', $__compilerVar155, array());
unset($__compilerVar155);
$__compilerVar154 .= '

</div>';
$__compilerVar153 .= $__compilerVar154;
unset($__compilerVar154);
$__compilerVar153 .= '
	';
$__compilerVar157 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar157 .= '

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
$__compilerVar153 .= $__compilerVar157;
unset($__compilerVar157);
$__compilerVar153 .= '
';
}
$__compilerVar150 .= $__compilerVar153;
unset($__compilerVar153);
}
$__compilerVar150 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar150 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' NoPopupGadget';
}
$__compilerVar150 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' rel="Menu"';
}
$__compilerVar150 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar150 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar150 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar150 .= '<div class="tabLinks">';
$__compilerVar158 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar158 .= '
	';
$__compilerVar159 = '';
$__compilerVar159 .= '
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
$__compilerVar159 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar160 = '';
$__compilerVar160 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar160 .= '
		';
$__compilerVar161 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar161 .= '

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
$__compilerVar160 .= $__compilerVar161;
unset($__compilerVar161);
$__compilerVar160 .= '
	';
}
$__compilerVar160 .= '
	
	
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
$__compilerVar160 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar160 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar160 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar160 .= '
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
$__compilerVar160 .= '
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
$__compilerVar160 .= '
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
$__compilerVar159 .= $this->callTemplateHook('quick_search', $__compilerVar160, array());
unset($__compilerVar160);
$__compilerVar159 .= '

</div>';
$__compilerVar158 .= $__compilerVar159;
unset($__compilerVar159);
$__compilerVar158 .= '
	';
$__compilerVar162 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar162 .= '

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
$__compilerVar158 .= $__compilerVar162;
unset($__compilerVar162);
$__compilerVar158 .= '
';
}
$__compilerVar150 .= $__compilerVar158;
unset($__compilerVar158);
$__compilerVar150 .= '</div>';
}
}
$__compilerVar150 .= '
										</li>
									';
}
$__compilerVar150 .= '
								';
}
$__compilerVar150 .= '
								';
}
$__compilerVar150 .= '
								
								
								<!-- forums -->
								';
if ($tabs['forums'])
{
$__compilerVar150 .= '
									<li class="navTab forums ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar150 .= (($tabs['forums']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar150 .= (($tabs['forums']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar150 .= '">
									
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' NoPopupGadget';
}
$__compilerVar150 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' rel="Menu"';
}
$__compilerVar150 .= '>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar150 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar150 .= (($tabs['forums']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar150 .= ' forumsTabLinks">
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar163 = '';
$__compilerVar163 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar163 .= '<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>';
}
$__compilerVar163 .= '
													';
if ($canSearch)
{
$__compilerVar163 .= '<li><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Forums' . '</a></li>';
}
$__compilerVar163 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar163 .= '
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/forums', false, array()) . '">' . 'Watched Forums' . '</a></li>
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/threads', false, array()) . '">' . 'Watched Threads' . '</a></li>
													';
}
$__compilerVar163 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '" rel="nofollow">' . (($visitor['user_id']) ? ('New Posts') : ('Recent Posts')) . '</a></li>
												';
$__compilerVar150 .= $this->callTemplateHook('navigation_tabs_forums', $__compilerVar163, array());
unset($__compilerVar163);
$__compilerVar150 .= '
												</ul>
												';
if ($tabs['forums']['selected'])
{
$__compilerVar164 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar164 .= '
	';
$__compilerVar165 = '';
$__compilerVar165 .= '
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
$__compilerVar165 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar166 = '';
$__compilerVar166 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar166 .= '
		';
$__compilerVar167 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar167 .= '

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
$__compilerVar166 .= $__compilerVar167;
unset($__compilerVar167);
$__compilerVar166 .= '
	';
}
$__compilerVar166 .= '
	
	
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
$__compilerVar166 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar166 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar166 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar166 .= '
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
$__compilerVar166 .= '
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
$__compilerVar166 .= '
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
$__compilerVar165 .= $this->callTemplateHook('quick_search', $__compilerVar166, array());
unset($__compilerVar166);
$__compilerVar165 .= '

</div>';
$__compilerVar164 .= $__compilerVar165;
unset($__compilerVar165);
$__compilerVar164 .= '
	';
$__compilerVar168 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar168 .= '

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
$__compilerVar164 .= $__compilerVar168;
unset($__compilerVar168);
$__compilerVar164 .= '
';
}
$__compilerVar150 .= $__compilerVar164;
unset($__compilerVar164);
}
$__compilerVar150 .= '
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__compilerVar150 .= '
								
								
								<!-- extra tabs: middle -->
								';
if ($extraTabs['middle'])
{
$__compilerVar150 .= '
								';
foreach ($extraTabs['middle'] AS $extraTabId => $extraTab)
{
$__compilerVar150 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar150 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar150 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar150 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar150 .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' NoPopupGadget';
}
$__compilerVar150 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' rel="Menu"';
}
$__compilerVar150 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar150 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar150 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar150 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar150 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar150 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar169 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar169 .= '
	';
$__compilerVar170 = '';
$__compilerVar170 .= '
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
$__compilerVar170 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar171 = '';
$__compilerVar171 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar171 .= '
		';
$__compilerVar172 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar172 .= '

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
$__compilerVar171 .= $__compilerVar172;
unset($__compilerVar172);
$__compilerVar171 .= '
	';
}
$__compilerVar171 .= '
	
	
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
$__compilerVar171 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar171 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar171 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar171 .= '
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
$__compilerVar171 .= '
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
$__compilerVar171 .= '
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
$__compilerVar170 .= $this->callTemplateHook('quick_search', $__compilerVar171, array());
unset($__compilerVar171);
$__compilerVar170 .= '

</div>';
$__compilerVar169 .= $__compilerVar170;
unset($__compilerVar170);
$__compilerVar169 .= '
	';
$__compilerVar173 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar173 .= '

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
$__compilerVar169 .= $__compilerVar173;
unset($__compilerVar173);
$__compilerVar169 .= '
';
}
$__compilerVar150 .= $__compilerVar169;
unset($__compilerVar169);
}
$__compilerVar150 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar150 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' NoPopupGadget';
}
$__compilerVar150 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' rel="Menu"';
}
$__compilerVar150 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar150 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar150 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar150 .= '<div class="tabLinks">';
$__compilerVar174 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar174 .= '
	';
$__compilerVar175 = '';
$__compilerVar175 .= '
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
$__compilerVar175 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar176 = '';
$__compilerVar176 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar176 .= '
		';
$__compilerVar177 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar177 .= '

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
$__compilerVar176 .= $__compilerVar177;
unset($__compilerVar177);
$__compilerVar176 .= '
	';
}
$__compilerVar176 .= '
	
	
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
$__compilerVar176 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar176 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar176 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar176 .= '
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
$__compilerVar176 .= '
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
$__compilerVar176 .= '
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
$__compilerVar175 .= $this->callTemplateHook('quick_search', $__compilerVar176, array());
unset($__compilerVar176);
$__compilerVar175 .= '

</div>';
$__compilerVar174 .= $__compilerVar175;
unset($__compilerVar175);
$__compilerVar174 .= '
	';
$__compilerVar178 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar178 .= '

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
$__compilerVar174 .= $__compilerVar178;
unset($__compilerVar178);
$__compilerVar174 .= '
';
}
$__compilerVar150 .= $__compilerVar174;
unset($__compilerVar174);
$__compilerVar150 .= '</div>';
}
}
$__compilerVar150 .= '
										</li>
									';
}
$__compilerVar150 .= '
								';
}
$__compilerVar150 .= '
								';
}
$__compilerVar150 .= '
								
								
								<!-- members -->
								';
if ($tabs['members'])
{
$__compilerVar150 .= '
									<li class="navTab members ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar150 .= (($tabs['members']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar150 .= (($tabs['members']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar150 .= '">
									
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' NoPopupGadget';
}
$__compilerVar150 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' rel="Menu"';
}
$__compilerVar150 .= '>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar150 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar150 .= (($tabs['members']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar150 .= ' membersTabLinks">
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar179 = '';
$__compilerVar179 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Notable Members' . '</a></li>
													';
if ($xenOptions['enableMemberList'])
{
$__compilerVar179 .= '<li><a href="' . XenForo_Template_Helper_Core::link('members/list', false, array()) . '">' . 'Registered Members' . '</a></li>';
}
$__compilerVar179 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Current Visitors' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar179 .= '<li><a href="' . XenForo_Template_Helper_Core::link('recent-activity', false, array()) . '">' . 'Recent Activity' . '</a></li>';
}
$__compilerVar179 .= '
													';
if ($canViewProfilePosts)
{
$__compilerVar179 .= '<li><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></li>';
}
$__compilerVar179 .= '
												';
$__compilerVar150 .= $this->callTemplateHook('navigation_tabs_members', $__compilerVar179, array());
unset($__compilerVar179);
$__compilerVar150 .= '
												</ul>
												';
if ($tabs['members']['selected'])
{
$__compilerVar180 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar180 .= '
	';
$__compilerVar181 = '';
$__compilerVar181 .= '
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
$__compilerVar181 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar182 = '';
$__compilerVar182 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar182 .= '
		';
$__compilerVar183 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar183 .= '

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
$__compilerVar182 .= $__compilerVar183;
unset($__compilerVar183);
$__compilerVar182 .= '
	';
}
$__compilerVar182 .= '
	
	
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
$__compilerVar182 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar182 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar182 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar182 .= '
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
$__compilerVar182 .= '
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
$__compilerVar182 .= '
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
$__compilerVar181 .= $this->callTemplateHook('quick_search', $__compilerVar182, array());
unset($__compilerVar182);
$__compilerVar181 .= '

</div>';
$__compilerVar180 .= $__compilerVar181;
unset($__compilerVar181);
$__compilerVar180 .= '
	';
$__compilerVar184 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar184 .= '

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
$__compilerVar180 .= $__compilerVar184;
unset($__compilerVar184);
$__compilerVar180 .= '
';
}
$__compilerVar150 .= $__compilerVar180;
unset($__compilerVar180);
}
$__compilerVar150 .= '
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__compilerVar150 .= '				
								
								<!-- extra tabs: end -->
								';
if ($extraTabs['end'])
{
$__compilerVar150 .= '
								';
foreach ($extraTabs['end'] AS $extraTabId => $extraTab)
{
$__compilerVar150 .= '
									';
if ($extraTab['linksTemplate'])
{
$__compilerVar150 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar150 .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__compilerVar150 .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__compilerVar150 .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' NoPopupGadget';
}
$__compilerVar150 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' rel="Menu"';
}
$__compilerVar150 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar150 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar150 .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar150 .= 'Menu JsOnly tabMenu';
}
else
{
$__compilerVar150 .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__compilerVar150 .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar185 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar185 .= '
	';
$__compilerVar186 = '';
$__compilerVar186 .= '
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
$__compilerVar186 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar187 = '';
$__compilerVar187 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar187 .= '
		';
$__compilerVar188 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar188 .= '

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
$__compilerVar187 .= $__compilerVar188;
unset($__compilerVar188);
$__compilerVar187 .= '
	';
}
$__compilerVar187 .= '
	
	
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
$__compilerVar187 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar187 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar187 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar187 .= '
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
$__compilerVar187 .= '
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
$__compilerVar187 .= '
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
$__compilerVar186 .= $this->callTemplateHook('quick_search', $__compilerVar187, array());
unset($__compilerVar187);
$__compilerVar186 .= '

</div>';
$__compilerVar185 .= $__compilerVar186;
unset($__compilerVar186);
$__compilerVar185 .= '
	';
$__compilerVar189 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar189 .= '

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
$__compilerVar185 .= $__compilerVar189;
unset($__compilerVar189);
$__compilerVar185 .= '
';
}
$__compilerVar150 .= $__compilerVar185;
unset($__compilerVar185);
}
$__compilerVar150 .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__compilerVar150 .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' NoPopupGadget';
}
$__compilerVar150 .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__compilerVar150 .= ' rel="Menu"';
}
$__compilerVar150 .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar150 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar150 .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__compilerVar150 .= '<div class="tabLinks">';
$__compilerVar190 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar190 .= '
	';
$__compilerVar191 = '';
$__compilerVar191 .= '
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
$__compilerVar191 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar192 = '';
$__compilerVar192 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar192 .= '
		';
$__compilerVar193 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar193 .= '

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
$__compilerVar192 .= $__compilerVar193;
unset($__compilerVar193);
$__compilerVar192 .= '
	';
}
$__compilerVar192 .= '
	
	
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
$__compilerVar192 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar192 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar192 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar192 .= '
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
$__compilerVar192 .= '
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
$__compilerVar192 .= '
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
$__compilerVar191 .= $this->callTemplateHook('quick_search', $__compilerVar192, array());
unset($__compilerVar192);
$__compilerVar191 .= '

</div>';
$__compilerVar190 .= $__compilerVar191;
unset($__compilerVar191);
$__compilerVar190 .= '
	';
$__compilerVar194 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar194 .= '

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
$__compilerVar190 .= $__compilerVar194;
unset($__compilerVar194);
$__compilerVar190 .= '
';
}
$__compilerVar150 .= $__compilerVar190;
unset($__compilerVar190);
$__compilerVar150 .= '</div>';
}
}
$__compilerVar150 .= '
										</li>
									';
}
$__compilerVar150 .= '
								';
}
$__compilerVar150 .= '
								';
}
$__compilerVar150 .= '
								
								<!-- responsive popup -->
								<li class="navTab navigationHiddenTabs Popup PopupControl PopupClosed" style="display:none">	
												
									<a rel="Menu" class="navLink NoPopupGadget uix_dropdownDesktopMenu"><i class="uix_icon uix_icon-navTrigger"></i><span class="uix_hide menuIcon">' . 'Menu' . '</span></a>
									
									<div class="Menu JsOnly blockLinksList primaryContent" id="NavigationHiddenMenu"></div>
								</li>
									
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__compilerVar150 .= '
								<!-- no selection -->
								';
if (!$selectedTab)
{
$__compilerVar150 .= '
									<li class="navTab selected"><div class="tabLinks">';
$__compilerVar195 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar195 .= '
	';
$__compilerVar196 = '';
$__compilerVar196 .= '
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
$__compilerVar196 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar197 = '';
$__compilerVar197 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar197 .= '
		';
$__compilerVar198 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar198 .= '

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
$__compilerVar197 .= $__compilerVar198;
unset($__compilerVar198);
$__compilerVar197 .= '
	';
}
$__compilerVar197 .= '
	
	
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
$__compilerVar197 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar197 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar197 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar197 .= '
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
$__compilerVar197 .= '
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
$__compilerVar197 .= '
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
$__compilerVar196 .= $this->callTemplateHook('quick_search', $__compilerVar197, array());
unset($__compilerVar197);
$__compilerVar196 .= '

</div>';
$__compilerVar195 .= $__compilerVar196;
unset($__compilerVar196);
$__compilerVar195 .= '
	';
$__compilerVar199 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar199 .= '

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
$__compilerVar195 .= $__compilerVar199;
unset($__compilerVar199);
$__compilerVar195 .= '
';
}
$__compilerVar150 .= $__compilerVar195;
unset($__compilerVar195);
$__compilerVar150 .= '</div></li>
								';
}
$__compilerVar150 .= '
								';
}
$__compilerVar150 .= '
	
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar150 .= '	
									';
if ($tabs['account']['selected'])
{
$__compilerVar150 .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar200 = '';
$__compilerVar200 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar200 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar200 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
												';
$__compilerVar150 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar200, array());
unset($__compilerVar200);
$__compilerVar150 .= '
												</ul>
												';
$__compilerVar201 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar201 .= '
	';
$__compilerVar202 = '';
$__compilerVar202 .= '
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
$__compilerVar202 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar203 = '';
$__compilerVar203 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar203 .= '
		';
$__compilerVar204 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar204 .= '

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
$__compilerVar203 .= $__compilerVar204;
unset($__compilerVar204);
$__compilerVar203 .= '
	';
}
$__compilerVar203 .= '
	
	
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
$__compilerVar203 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar203 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar203 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar203 .= '
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
$__compilerVar203 .= '
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
$__compilerVar203 .= '
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
$__compilerVar202 .= $this->callTemplateHook('quick_search', $__compilerVar203, array());
unset($__compilerVar203);
$__compilerVar202 .= '

</div>';
$__compilerVar201 .= $__compilerVar202;
unset($__compilerVar202);
$__compilerVar201 .= '
	';
$__compilerVar205 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar205 .= '

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
$__compilerVar201 .= $__compilerVar205;
unset($__compilerVar205);
$__compilerVar201 .= '
';
}
$__compilerVar150 .= $__compilerVar201;
unset($__compilerVar201);
$__compilerVar150 .= '
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__compilerVar150 .= '
									';
if ($tabs['inbox']['selected'])
{
$__compilerVar150 .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
												</ul>
												';
$__compilerVar206 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar206 .= '
	';
$__compilerVar207 = '';
$__compilerVar207 .= '
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
$__compilerVar207 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar208 = '';
$__compilerVar208 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar208 .= '
		';
$__compilerVar209 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar209 .= '

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
$__compilerVar208 .= $__compilerVar209;
unset($__compilerVar209);
$__compilerVar208 .= '
	';
}
$__compilerVar208 .= '
	
	
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
$__compilerVar208 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar208 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar208 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar208 .= '
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
$__compilerVar208 .= '
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
$__compilerVar208 .= '
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
$__compilerVar207 .= $this->callTemplateHook('quick_search', $__compilerVar208, array());
unset($__compilerVar208);
$__compilerVar207 .= '

</div>';
$__compilerVar206 .= $__compilerVar207;
unset($__compilerVar207);
$__compilerVar206 .= '
	';
$__compilerVar210 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar210 .= '

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
$__compilerVar206 .= $__compilerVar210;
unset($__compilerVar210);
$__compilerVar206 .= '
';
}
$__compilerVar150 .= $__compilerVar206;
unset($__compilerVar206);
$__compilerVar150 .= '
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__compilerVar150 .= '
								';
}
$__compilerVar150 .= '		
	
							</ul>
							
							
							';
$__compilerVar211 = '';
$__compilerVar211 .= '
								
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 0 && $contentTemplate == ('thread_view'))
{
$__compilerVar211 .= '
										<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
									';
}
$__compilerVar211 .= '
								
									';
$__compilerVar212 = '';
$__compilerVar211 .= $this->callTemplateHook('uix_navigation_right_start', $__compilerVar212, array());
unset($__compilerVar212);
$__compilerVar211 .= '
									
									';
if (!XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar211 .= '
										';
$__compilerVar213 = '';
$__compilerVar214 = '';
$__compilerVar214 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar214 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar214 .= '
	';
$__compilerVar215 = '';
$__compilerVar214 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar215, array());
unset($__compilerVar215);
$__compilerVar214 .= '
	';
}
$__compilerVar214 .= '
	
	  <li class="navTab" style="line-height:50px;"> &nbsp;  <a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>&nbsp;</li>

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">


		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar214 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar214 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar214 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar214 .= '

			
			
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
$__compilerVar216 = '';
$__compilerVar216 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar216) !== '')
{
$__compilerVar214 .= '<div class="muted">' . $__compilerVar216 . '</div>';
}
unset($__compilerVar216);
$__compilerVar214 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar217 = '';
$__compilerVar217 .= '
					';
if ($canEditProfile)
{
$__compilerVar217 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar217 .= '
					';
if ($canEditSignature)
{
$__compilerVar217 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar217 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar217 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar217 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar217 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar217 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar218 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar218 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar217 .= $__compilerVar218;
unset($__compilerVar218);
$__compilerVar217 .= '
';
$__compilerVar214 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar217, array());
unset($__compilerVar217);
$__compilerVar214 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar219 = '';
$__compilerVar219 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar219 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar219 .= '
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
$__compilerVar219 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar219 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar214 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar219, array());
unset($__compilerVar219);
$__compilerVar214 .= '
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
$__compilerVar214 .= '
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
$__compilerVar214 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar214 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar214 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar220 = '';
$__compilerVar220 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar220 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar220 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar214 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar220, array());
unset($__compilerVar220);
$__compilerVar214 .= '
				</ul>
				';
$__compilerVar221 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar221 .= '
	';
$__compilerVar222 = '';
$__compilerVar222 .= '
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
$__compilerVar222 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar223 = '';
$__compilerVar223 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar223 .= '
		';
$__compilerVar224 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar224 .= '

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
$__compilerVar223 .= $__compilerVar224;
unset($__compilerVar224);
$__compilerVar223 .= '
	';
}
$__compilerVar223 .= '
	
	
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
$__compilerVar223 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar223 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar223 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar223 .= '
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
$__compilerVar223 .= '
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
$__compilerVar223 .= '
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
$__compilerVar222 .= $this->callTemplateHook('quick_search', $__compilerVar223, array());
unset($__compilerVar223);
$__compilerVar222 .= '

</div>';
$__compilerVar221 .= $__compilerVar222;
unset($__compilerVar222);
$__compilerVar221 .= '
	';
$__compilerVar225 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar225 .= '

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
$__compilerVar221 .= $__compilerVar225;
unset($__compilerVar225);
$__compilerVar221 .= '
';
}
$__compilerVar214 .= $__compilerVar221;
unset($__compilerVar221);
$__compilerVar214 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar214 .= '
	';
}
$__compilerVar214 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar214 .= '

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
$__compilerVar214 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar214 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar214 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar214 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar226 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar226 .= '
	';
$__compilerVar227 = '';
$__compilerVar227 .= '
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
$__compilerVar227 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar228 = '';
$__compilerVar228 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar228 .= '
		';
$__compilerVar229 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar229 .= '

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
$__compilerVar228 .= $__compilerVar229;
unset($__compilerVar229);
$__compilerVar228 .= '
	';
}
$__compilerVar228 .= '
	
	
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
$__compilerVar228 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar228 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar228 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar228 .= '
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
$__compilerVar228 .= '
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
$__compilerVar228 .= '
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
$__compilerVar227 .= $this->callTemplateHook('quick_search', $__compilerVar228, array());
unset($__compilerVar228);
$__compilerVar227 .= '

</div>';
$__compilerVar226 .= $__compilerVar227;
unset($__compilerVar227);
$__compilerVar226 .= '
	';
$__compilerVar230 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar230 .= '

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
$__compilerVar226 .= $__compilerVar230;
unset($__compilerVar230);
$__compilerVar226 .= '
';
}
$__compilerVar214 .= $__compilerVar226;
unset($__compilerVar226);
$__compilerVar214 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar214 .= '
		';
}
$__compilerVar214 .= '
		
		';
$__compilerVar231 = '';
$__compilerVar214 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar231, array());
unset($__compilerVar231);
$__compilerVar214 .= '
		
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
$__compilerVar232 = '';
$__compilerVar214 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar232, array());
unset($__compilerVar232);
$__compilerVar214 .= '
	';
}
else
{
$__compilerVar214 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar214 .= ' 
	';
}
$__compilerVar214 .= '
	
';
if (trim($__compilerVar214) !== '')
{
$__compilerVar213 .= '
' . $__compilerVar214 . '
';
}
unset($__compilerVar214);
$__compilerVar211 .= $__compilerVar213;
unset($__compilerVar213);
$__compilerVar211 .= '
									';
}
$__compilerVar211 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 1)
{
$__compilerVar211 .= '
										';
$__compilerVar233 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar233 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar233 .= '<label for="LoginControl">';
}
$__compilerVar233 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar233 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar233 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar233 .= '</label>';
}
$__compilerVar233 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar233 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar234 = '';
$__compilerVar234 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

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
$__compilerVar234 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar234 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar235 = '';
$__compilerVar235 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar235 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar235 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar235 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar235 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar235 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar235 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar235 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar235 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar235 .= '

	';
if (trim($__compilerVar235) !== '')
{
$__compilerVar234 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar235 . '
	</div>
	';
}
unset($__compilerVar235);
$__compilerVar234 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar234 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar234 .= '

</form>';
$__compilerVar233 .= $__compilerVar234;
unset($__compilerVar234);
$__compilerVar233 .= '
			</div>
		</div>
		';
}
$__compilerVar233 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar233 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar233 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar233 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar233 .= '
	
';
}
$__compilerVar211 .= $__compilerVar233;
unset($__compilerVar233);
$__compilerVar211 .= '
									';
}
$__compilerVar211 .= '
							
									';
$__compilerVar236 = '';
$__compilerVar211 .= $this->callTemplateHook('uix_navigation_right_end', $__compilerVar236, array());
unset($__compilerVar236);
$__compilerVar211 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 0)
{
$__compilerVar237 = '1';
$__compilerVar238 = '';
$__compilerVar238 .= '

';
if ($__compilerVar237 == 0)
{
$__compilerVar238 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar238 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar238 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar238 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar238 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar238 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar238 .= '
	';
}
else
{
$__compilerVar238 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar238 .= '
	';
}
$__compilerVar238 .= '
	
';
}
else if ($__compilerVar237 == 1)
{
$__compilerVar238 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar238 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar238 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar238 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar238 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar238 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar238 .= '
	';
}
else
{
$__compilerVar238 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar238 .= '
	';
}
$__compilerVar238 .= '
	
';
}
$__compilerVar238 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar238 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar237) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar238 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar238 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar238 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar238 .= '
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
$__compilerVar238 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar237) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar238 .= '
			';
if (!$__compilerVar237)
{
$__compilerVar238 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar238 .= '
			';
if ($__compilerVar237)
{
$__compilerVar238 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar238 .= '
		';
}
else
{
$__compilerVar238 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar238 .= '</a>
	</li>

';
}
$__compilerVar211 .= $__compilerVar238;
unset($__compilerVar237, $__compilerVar238);
}
$__compilerVar211 .= '
	
									';
if ($uix_searchPosition == 2)
{
$__compilerVar211 .= '
										';
$__compilerVar239 = '';
if ($canSearch)
{
$__compilerVar239 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar240 = '';
$__compilerVar240 .= '
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
$__compilerVar240 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar241 = '';
$__compilerVar241 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar241 .= '
		';
$__compilerVar242 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar242 .= '

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
$__compilerVar241 .= $__compilerVar242;
unset($__compilerVar242);
$__compilerVar241 .= '
	';
}
$__compilerVar241 .= '
	
	
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
$__compilerVar241 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar241 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar241 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar241 .= '
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
$__compilerVar241 .= '
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
$__compilerVar241 .= '
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
$__compilerVar240 .= $this->callTemplateHook('quick_search', $__compilerVar241, array());
unset($__compilerVar241);
$__compilerVar240 .= '

</div>';
$__compilerVar239 .= $__compilerVar240;
unset($__compilerVar240);
$__compilerVar239 .= '
		</li>
	
';
}
$__compilerVar211 .= $__compilerVar239;
unset($__compilerVar239);
$__compilerVar211 .= '
									';
}
$__compilerVar211 .= '
								
								';
if (trim($__compilerVar211) !== '')
{
$__compilerVar150 .= '
								
								
								<ul class="navRight visitorTabs">
								
								' . $__compilerVar211 . '
								
								</ul>
								
							';
}
unset($__compilerVar211);
$__compilerVar150 .= '
							
							';
if ($uix_searchPosition == 2)
{
$__compilerVar150 .= '
								';
$__compilerVar243 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar243 .= '

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
$__compilerVar150 .= $__compilerVar243;
unset($__compilerVar243);
$__compilerVar150 .= '
							';
}
$__compilerVar150 .= '
									
								
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar150 .= '</div>';
}
$__compilerVar150 .= '
					</div>
	
				<span class="helper"></span>
					
				</nav>
			</div>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar150 .= '</div>';
}
$__compilerVar150 .= '
		</div>
	</div>
</div>';
$__compilerVar1 .= $__compilerVar150;
unset($__compilerVar150);
}
$__compilerVar1 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_userBarLocation') == 1)
{
$__compilerVar244 = '';
$this->addRequiredExternal('css', 'moderator_bar');
$__compilerVar244 .= '

';
$__compilerVar245 = '';
$__compilerVar245 .= '
		
					';
$__compilerVar246 = '';
$__compilerVar246 .= '
						';
$__compilerVar247 = '';
$__compilerVar246 .= $this->callTemplateHook('uix_userbar_left_start', $__compilerVar247, array());
unset($__compilerVar247);
$__compilerVar246 .= '
						
						';
if ($xenOptions['uix_socialMedia'] && XenForo_Template_Helper_Core::styleProperty('uix_socialMedia'))
{
$__compilerVar246 .= '\'
						<li class="navTab scratch_socialTab">
							<div class="navLink">
								';
$__compilerVar248 = '';
$__compilerVar248 .= '<ul class="uix_socialMediaLinks">
	';
if ($xenOptions['uix_socialMedia_facebook'])
{
$__compilerVar248 .= '<li class="facebook"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_facebook'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-facebook"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_twitter'])
{
$__compilerVar248 .= '<li class="twitter"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_twitter'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-twitter"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_youtube'])
{
$__compilerVar248 .= '<li class="youtube"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_youtube'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-youtube"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_dribbble'])
{
$__compilerVar248 .= '<li class="dribbble"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_dribbble'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-dribbble"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_vimeo'])
{
$__compilerVar248 .= '<li class="vimeo"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_vimeo'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-vimeo"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_deviantart'])
{
$__compilerVar248 .= '<li class="deviantart"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_deviantart'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-deviantArt"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_googleplus'])
{
$__compilerVar248 .= '<li class="googleplus"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_googleplus'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-googlePlus"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_linkedin'])
{
$__compilerVar248 .= '<li class="linkedin"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_linkedin'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-linkedIn"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_instagram'])
{
$__compilerVar248 .= '<li class="instagram"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_instagram'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-instagram"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_pinterest'])
{
$__compilerVar248 .= '<li class="pinterest"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_pinterest'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-pinterest"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_steam'])
{
$__compilerVar248 .= '<li class="steam"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_steam'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-steam"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_twitch'])
{
$__compilerVar248 .= '<li class="twitch"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_twitch'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-twitch"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_vine'])
{
$__compilerVar248 .= '<li class="vine"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_vine'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-vine"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_tumblr'])
{
$__compilerVar248 .= '<li class="tumblr"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_tumblr'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-tumblr"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_git'])
{
$__compilerVar248 .= '<li class="git"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_git'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-git"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_reddit'])
{
$__compilerVar248 .= '<li class="reddit"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_reddit'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-reddit"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_flickr'])
{
$__compilerVar248 .= '<li class="flickr"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_flickr'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-flickr"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_contact'] AND $xenOptions['contactUrl']['type'] == ('default'))
{
$__compilerVar248 .= '<li class="contact"><a href="' . XenForo_Template_Helper_Core::link('misc/contact', false, array()) . '" class="OverlayTrigger" data-overlayOptions="{&quot;fixed&quot;:false}"><i class="uix_icon uix_icon-email"></i></a></li>';
}
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_contact'] AND $xenOptions['contactUrl']['type'] == ('custom'))
{
$__compilerVar248 .= '<li class="contact"><a href="' . htmlspecialchars($xenOptions['contactUrl']['custom'], ENT_QUOTES, 'UTF-8') . '" ' . (($xenOptions['contactUrl']['overlay']) ? ('class="OverlayTrigger" data-overlayOptions="' . '{' . '&quot;fixed&quot;:false}"') : ('target="_blank"')) . '><i class="uix_icon uix_icon-email"></i></a></li>';
}
$__compilerVar248 .= '
        ';
$__compilerVar249 = '';
$__compilerVar249 .= '



<!--ADD LIST ITEMS HERE -->


';
$__compilerVar248 .= $__compilerVar249;
unset($__compilerVar249);
$__compilerVar248 .= '
        ';
if ($xenOptions['uix_socialMedia_rss'])
{
$__compilerVar248 .= '<li class="rss"><a href="' . XenForo_Template_Helper_Core::link('forums/-/index.rss', false, array()) . '" rel="alternate}" target="_blank"><i class="uix_icon uix_icon-rss"></i></a></li>';
}
$__compilerVar248 .= '
</ul>';
$__compilerVar246 .= $__compilerVar248;
unset($__compilerVar248);
$__compilerVar246 .= '
							</div>
						</li>
						';
}
$__compilerVar246 .= '
						
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 1)
{
$__compilerVar250 = '0';
$__compilerVar251 = '';
$__compilerVar251 .= '

';
if ($__compilerVar250 == 0)
{
$__compilerVar251 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar251 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar251 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar251 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar251 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar251 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar251 .= '
	';
}
else
{
$__compilerVar251 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar251 .= '
	';
}
$__compilerVar251 .= '
	
';
}
else if ($__compilerVar250 == 1)
{
$__compilerVar251 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar251 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar251 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar251 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar251 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar251 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar251 .= '
	';
}
else
{
$__compilerVar251 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar251 .= '
	';
}
$__compilerVar251 .= '
	
';
}
$__compilerVar251 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar251 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar250) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar251 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar251 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar251 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar251 .= '
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
$__compilerVar251 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar250) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar251 .= '
			';
if (!$__compilerVar250)
{
$__compilerVar251 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar251 .= '
			';
if ($__compilerVar250)
{
$__compilerVar251 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar251 .= '
		';
}
else
{
$__compilerVar251 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar251 .= '</a>
	</li>

';
}
$__compilerVar246 .= $__compilerVar251;
unset($__compilerVar250, $__compilerVar251);
}
$__compilerVar246 .= '
						
						';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar246 .= '
							';
$__compilerVar252 = '';
$__compilerVar252 .= '	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('100%'))
{
$__compilerVar252 .= '

		';
if ($visitor['is_admin'])
{
$__compilerVar252 .= '			
			<li class="navTab">
				<a href="admin.php" target="_blank" class="acp adminLink navLink">
					<i class="uix_icon uix_icon-admin"></i> 
					<span class="itemLabel">' . 'Admin' . '</span>
				</a>
			</li>
			
			';
if ($session['permissionTest'])
{
$__compilerVar252 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
					<i class="uix_icon uix_icon-permissions"></i> 
					<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
				</a>
			</li>
			
			';
}
$__compilerVar252 .= '
		';
}
$__compilerVar252 .= '
		
		';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar252 .= '
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
$__compilerVar252 .= '
		
		';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar252 .= '
			<li class="navTab">
				<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
					<i class="uix_icon uix_icon-reports"></i> 
					<span class="itemLabel">' . 'Reports' . ':</span>
					<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
						<span class="Total">
							';
if ($session['reportCounts']['assigned'])
{
$__compilerVar252 .= '
								' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
else
{
$__compilerVar252 .= '
								' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
							';
}
$__compilerVar252 .= '
						</span>
						<span class="arrow"></span>
					</strong>
				</a>
			</li>
		';
}
$__compilerVar252 .= '
		
		';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar252 .= '
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
$__compilerVar252 .= '
		
		';
$__compilerVar253 = '';
$__compilerVar252 .= $this->callTemplateHook('moderator_bar', $__compilerVar253, array());
unset($__compilerVar253);
$__compilerVar252 .= '	
	';
}
$__compilerVar252 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_adminMenuCollapse') != ('0'))
{
$__compilerVar252 .= '

		<li class="navTab admin Popup PopupControl PopupClosed">
			<a href="';
if ($visitor['is_admin'])
{
$__compilerVar252 .= 'admin.php';
}
else
{
$__compilerVar252 .= 'javascript: void(0);';
}
$__compilerVar252 .= '" class="navLink NoPopupGadget" rel="Menu" ';
if ($visitor['is_admin'])
{
$__compilerVar252 .= 'target="_blank"';
}
$__compilerVar252 .= '>
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
$__compilerVar252 .= '
				' . 'Admin' . '
				';
}
else
{
$__compilerVar252 .= '
				Mod
				';
}
$__compilerVar252 .= ' ' . 'Menu' . '
				
				
				</h3></div>
				<ul class="secondaryContent blockLinksList">
					
	
	
					';
if ($visitor['is_admin'])
{
$__compilerVar252 .= '			
						<li class="navTab">
							<a href="admin.php" target="_blank" class="acp adminLink navLink">
								<i class="uix_icon uix_icon-admin"></i> 
								<span class="itemLabel">' . 'Admin' . '</span>
							</a>
						</li>
						
						';
if ($session['permissionTest'])
{
$__compilerVar252 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger navLink">
								<i class="uix_icon uix_icon-permissions"></i> 
								<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
							</a>
						</li>
						
						';
}
$__compilerVar252 .= '
					';
}
$__compilerVar252 .= '
			
					';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar252 .= '
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
$__compilerVar252 .= '
					
					';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar252 .= '
						<li class="navTab">
							<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink navLink">
								<i class="uix_icon uix_icon-reports"></i> 
								<span class="itemLabel">' . 'Reports' . ':</span>
								<strong class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">
									<span class="Total">
										';
if ($session['reportCounts']['assigned'])
{
$__compilerVar252 .= '
											' . htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
else
{
$__compilerVar252 .= '
											' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8') . '
										';
}
$__compilerVar252 .= '
									</span>
									<span class="arrow"></span>
								</strong>
							</a>
						</li>
					';
}
$__compilerVar252 .= '
					
					';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar252 .= '
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
$__compilerVar252 .= '
					
					';
$__compilerVar254 = '';
$__compilerVar252 .= $this->callTemplateHook('moderator_bar', $__compilerVar254, array());
unset($__compilerVar254);
$__compilerVar252 .= '
	
				</ul>
			</div>		
		</li>
	';
}
$__compilerVar252 .= '	';
$__compilerVar246 .= $__compilerVar252;
unset($__compilerVar252);
$__compilerVar246 .= '
						';
}
$__compilerVar246 .= '
						
						';
$__compilerVar255 = '';
$__compilerVar246 .= $this->callTemplateHook('uix_userbar_left_end', $__compilerVar255, array());
unset($__compilerVar255);
$__compilerVar246 .= '
						
						';
if (trim($__compilerVar246) !== '')
{
$__compilerVar245 .= '
					<ul class="navLeft';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar245 .= ' moderatorTabs';
}
$__compilerVar245 .= '">
					
						' . $__compilerVar246 . '
		
					</ul>

					
					';
}
unset($__compilerVar246);
$__compilerVar245 .= '
					
					';
$__compilerVar256 = '';
$__compilerVar256 .= '
						
							';
$__compilerVar257 = '';
$__compilerVar256 .= $this->callTemplateHook('uix_userbar_right_start', $__compilerVar257, array());
unset($__compilerVar257);
$__compilerVar256 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar256 .= '
								';
$__compilerVar258 = '';
$__compilerVar259 = '';
$__compilerVar259 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar259 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar259 .= '
	';
$__compilerVar260 = '';
$__compilerVar259 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar260, array());
unset($__compilerVar260);
$__compilerVar259 .= '
	';
}
$__compilerVar259 .= '
	
	  <li class="navTab" style="line-height:50px;"> &nbsp;  <a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>&nbsp;</li>

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">


		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar259 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar259 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar259 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar259 .= '

			
			
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
$__compilerVar261 = '';
$__compilerVar261 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar261) !== '')
{
$__compilerVar259 .= '<div class="muted">' . $__compilerVar261 . '</div>';
}
unset($__compilerVar261);
$__compilerVar259 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar262 = '';
$__compilerVar262 .= '
					';
if ($canEditProfile)
{
$__compilerVar262 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar262 .= '
					';
if ($canEditSignature)
{
$__compilerVar262 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar262 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar262 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar262 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar262 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar262 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar263 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar263 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar262 .= $__compilerVar263;
unset($__compilerVar263);
$__compilerVar262 .= '
';
$__compilerVar259 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar262, array());
unset($__compilerVar262);
$__compilerVar259 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar264 = '';
$__compilerVar264 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar264 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar264 .= '
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
$__compilerVar264 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar264 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar259 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar264, array());
unset($__compilerVar264);
$__compilerVar259 .= '
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
$__compilerVar259 .= '
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
$__compilerVar259 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar259 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar259 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar265 = '';
$__compilerVar265 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar265 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar265 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar259 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar265, array());
unset($__compilerVar265);
$__compilerVar259 .= '
				</ul>
				';
$__compilerVar266 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar266 .= '
	';
$__compilerVar267 = '';
$__compilerVar267 .= '
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
$__compilerVar267 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar268 = '';
$__compilerVar268 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar268 .= '
		';
$__compilerVar269 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar269 .= '

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
$__compilerVar268 .= $__compilerVar269;
unset($__compilerVar269);
$__compilerVar268 .= '
	';
}
$__compilerVar268 .= '
	
	
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
$__compilerVar268 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar268 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar268 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar268 .= '
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
$__compilerVar268 .= '
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
$__compilerVar268 .= '
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
$__compilerVar267 .= $this->callTemplateHook('quick_search', $__compilerVar268, array());
unset($__compilerVar268);
$__compilerVar267 .= '

</div>';
$__compilerVar266 .= $__compilerVar267;
unset($__compilerVar267);
$__compilerVar266 .= '
	';
$__compilerVar270 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar270 .= '

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
$__compilerVar266 .= $__compilerVar270;
unset($__compilerVar270);
$__compilerVar266 .= '
';
}
$__compilerVar259 .= $__compilerVar266;
unset($__compilerVar266);
$__compilerVar259 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar259 .= '
	';
}
$__compilerVar259 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar259 .= '

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
$__compilerVar259 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar259 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar259 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar259 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar271 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar271 .= '
	';
$__compilerVar272 = '';
$__compilerVar272 .= '
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
$__compilerVar272 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar273 = '';
$__compilerVar273 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar273 .= '
		';
$__compilerVar274 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar274 .= '

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
$__compilerVar273 .= $__compilerVar274;
unset($__compilerVar274);
$__compilerVar273 .= '
	';
}
$__compilerVar273 .= '
	
	
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
$__compilerVar273 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar273 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar273 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar273 .= '
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
$__compilerVar273 .= '
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
$__compilerVar273 .= '
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
$__compilerVar272 .= $this->callTemplateHook('quick_search', $__compilerVar273, array());
unset($__compilerVar273);
$__compilerVar272 .= '

</div>';
$__compilerVar271 .= $__compilerVar272;
unset($__compilerVar272);
$__compilerVar271 .= '
	';
$__compilerVar275 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar275 .= '

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
$__compilerVar271 .= $__compilerVar275;
unset($__compilerVar275);
$__compilerVar271 .= '
';
}
$__compilerVar259 .= $__compilerVar271;
unset($__compilerVar271);
$__compilerVar259 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar259 .= '
		';
}
$__compilerVar259 .= '
		
		';
$__compilerVar276 = '';
$__compilerVar259 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar276, array());
unset($__compilerVar276);
$__compilerVar259 .= '
		
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
$__compilerVar277 = '';
$__compilerVar259 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar277, array());
unset($__compilerVar277);
$__compilerVar259 .= '
	';
}
else
{
$__compilerVar259 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar259 .= ' 
	';
}
$__compilerVar259 .= '
	
';
if (trim($__compilerVar259) !== '')
{
$__compilerVar258 .= '
' . $__compilerVar259 . '
';
}
unset($__compilerVar259);
$__compilerVar256 .= $__compilerVar258;
unset($__compilerVar258);
$__compilerVar256 .= '
							';
}
$__compilerVar256 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 2)
{
$__compilerVar256 .= '
								';
$__compilerVar278 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar278 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar278 .= '<label for="LoginControl">';
}
$__compilerVar278 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar278 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar278 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar278 .= '</label>';
}
$__compilerVar278 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar278 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar279 = '';
$__compilerVar279 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

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
$__compilerVar279 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar279 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar280 = '';
$__compilerVar280 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar280 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar280 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar280 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar280 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar280 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar280 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar280 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar280 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar280 .= '

	';
if (trim($__compilerVar280) !== '')
{
$__compilerVar279 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar280 . '
	</div>
	';
}
unset($__compilerVar280);
$__compilerVar279 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar279 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar279 .= '

</form>';
$__compilerVar278 .= $__compilerVar279;
unset($__compilerVar279);
$__compilerVar278 .= '
			</div>
		</div>
		';
}
$__compilerVar278 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar278 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar278 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar278 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar278 .= '
	
';
}
$__compilerVar256 .= $__compilerVar278;
unset($__compilerVar278);
$__compilerVar256 .= '
							';
}
$__compilerVar256 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 1 && $contentTemplate == ('thread_view'))
{
$__compilerVar256 .= '
								<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
							';
}
$__compilerVar256 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar256 .= '
								';
$__compilerVar281 = '';
if ($canSearch)
{
$__compilerVar281 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar282 = '';
$__compilerVar282 .= '
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
$__compilerVar282 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar283 = '';
$__compilerVar283 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar283 .= '
		';
$__compilerVar284 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar284 .= '

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
$__compilerVar283 .= $__compilerVar284;
unset($__compilerVar284);
$__compilerVar283 .= '
	';
}
$__compilerVar283 .= '
	
	
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
$__compilerVar283 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar283 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar283 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar283 .= '
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
$__compilerVar283 .= '
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
$__compilerVar283 .= '
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
$__compilerVar282 .= $this->callTemplateHook('quick_search', $__compilerVar283, array());
unset($__compilerVar283);
$__compilerVar282 .= '

</div>';
$__compilerVar281 .= $__compilerVar282;
unset($__compilerVar282);
$__compilerVar281 .= '
		</li>
	
';
}
$__compilerVar256 .= $__compilerVar281;
unset($__compilerVar281);
$__compilerVar256 .= '
							';
}
$__compilerVar256 .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 1)
{
$__compilerVar285 = '1';
$__compilerVar286 = '';
$__compilerVar286 .= '

';
if ($__compilerVar285 == 0)
{
$__compilerVar286 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar286 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar286 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar286 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar286 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar286 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar286 .= '
	';
}
else
{
$__compilerVar286 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar286 .= '
	';
}
$__compilerVar286 .= '
	
';
}
else if ($__compilerVar285 == 1)
{
$__compilerVar286 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar286 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar286 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar286 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar286 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar286 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar286 .= '
	';
}
else
{
$__compilerVar286 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar286 .= '
	';
}
$__compilerVar286 .= '
	
';
}
$__compilerVar286 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar286 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar285) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar286 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar286 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar286 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar286 .= '
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
$__compilerVar286 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar285) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar286 .= '
			';
if (!$__compilerVar285)
{
$__compilerVar286 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar286 .= '
			';
if ($__compilerVar285)
{
$__compilerVar286 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar286 .= '
		';
}
else
{
$__compilerVar286 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar286 .= '</a>
	</li>

';
}
$__compilerVar256 .= $__compilerVar286;
unset($__compilerVar285, $__compilerVar286);
}
$__compilerVar256 .= '
							
							';
$__compilerVar287 = '';
$__compilerVar256 .= $this->callTemplateHook('uix_userbar_right_end', $__compilerVar287, array());
unset($__compilerVar287);
$__compilerVar256 .= '
							
						';
if (trim($__compilerVar256) !== '')
{
$__compilerVar245 .= '
					
					
						<ul class="navRight' . ((XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar')) ? (' visitorTabs') : ('')) . '">
						
						' . $__compilerVar256 . '
						
						</ul>
						
					';
}
unset($__compilerVar256);
$__compilerVar245 .= '
					
					
					';
if (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3)
{
$__compilerVar245 .= '
						';
$__compilerVar288 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar288 .= '

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
$__compilerVar245 .= $__compilerVar288;
unset($__compilerVar288);
$__compilerVar245 .= '
					';
}
$__compilerVar245 .= '
					
				
				';
if (trim($__compilerVar245) !== '')
{
$__compilerVar244 .= '



<div id="userBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyUserBar')) ? ('stickyTop') : ('')) . ' ' . (($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 3) ? ('withSearch') : ('')) . '">


	<div class="sticky_wrapper">

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar244 .= '
	<div class="pageWidth">
	';
}
$__compilerVar244 .= '
		
		<div class="pageContent">
		
			<div class="navTabs">
		
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar244 .= '
			<div class="pageWidth">
			';
}
$__compilerVar244 .= '
		
				' . $__compilerVar245 . '
			
			</div>

			<span class="helper"></span>
		</div>
	</div>
	</div>
</div>

';
if (XenForo_Template_Helper_Core::styleProperty('uix_jsInsideTemplates'))
{
$__compilerVar244 .= '
<script>if (typeof(uix) !== "undefined" && typeof(uix.templates) !== "undefined") uix.templates.userBar();</script>
';
}
$__compilerVar244 .= '

';
}
unset($__compilerVar245);
$__compilerVar1 .= $__compilerVar244;
unset($__compilerVar244);
}
$__compilerVar1 .= '
</div>
';
$__output .= $this->callTemplateHook('header', $__compilerVar1, array());
unset($__compilerVar1);
