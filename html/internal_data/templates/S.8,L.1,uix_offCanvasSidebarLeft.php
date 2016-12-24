<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<aside class="uix_sidePane left-off-canvas-content">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__output .= '
		';
$__compilerVar1 = '';
$__compilerVar1 .= '<div class="uix_sidePane_content uix_offCanvasNavigation">
<ul>
	<!-- home -->
	';
if ($showHomeLink)
{
$__compilerVar1 .= '
		<li class="navTab home"><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="navLink">' . 'Home' . '</a></li>
	';
}
$__compilerVar1 .= '
	
	
	<!-- extra tabs: home -->
	';
if ($extraTabs['home'])
{
$__compilerVar1 .= '
	';
foreach ($extraTabs['home'] AS $extraTabId => $extraTab)
{
$__compilerVar1 .= '
		';
if ($extraTab['linksTemplate'])
{
$__compilerVar1 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar1 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar1 .= '</a>
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				' . $extraTab['linksTemplate'] . '
			</div>
		</li>
		';
}
else
{
$__compilerVar1 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</li>
		';
}
$__compilerVar1 .= '
	';
}
$__compilerVar1 .= '
	';
}
$__compilerVar1 .= '
	
	
	<!-- forums -->
	';
if ($tabs['forums'] AND ($xenOptions['adnavigation_showForumsLink'] OR !$adnavigation))
{
$__compilerVar1 .= '
		<li class="navTab forums ' . (($tabs['forums']['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				<ul class="blockLinksList">
				';
$__compilerVar2 = '';
$__compilerVar2 .= '
					';
if ($visitor['user_id'])
{
$__compilerVar2 .= '<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>';
}
$__compilerVar2 .= '
					';
if ($canSearch)
{
$__compilerVar2 .= '<li><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Forums' . '</a></li>';
}
$__compilerVar2 .= '
					';
if ($visitor['user_id'])
{
$__compilerVar2 .= '
						<li><a href="' . XenForo_Template_Helper_Core::link('watched/forums', false, array()) . '">' . 'Watched Forums' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('watched/threads', false, array()) . '">' . 'Watched Threads' . '</a></li>
					';
}
$__compilerVar2 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '" rel="nofollow">' . (($visitor['user_id']) ? ('New Posts') : ('Recent Posts')) . '</a></li>
				';
$__compilerVar1 .= $this->callTemplateHook('navigation_tabs_forums', $__compilerVar2, array());
unset($__compilerVar2);
$__compilerVar1 .= '
				</ul>
			</div>
		</li>
	';
}
$__compilerVar1 .= '
	
	
	<!-- extra tabs: middle -->
	';
if ($extraTabs['middle'])
{
$__compilerVar1 .= '
	';
foreach ($extraTabs['middle'] AS $extraTabId => $extraTab)
{
$__compilerVar1 .= '
		';
if ($extraTab['linksTemplate'])
{
$__compilerVar1 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar1 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar1 .= '</a>
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				' . $extraTab['linksTemplate'] . '
			</div>
		</li>
		';
}
else
{
$__compilerVar1 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</li>
		';
}
$__compilerVar1 .= '
	';
}
$__compilerVar1 .= '
	';
}
$__compilerVar1 .= '
	
	
	<!-- members -->
	';
if ($tabs['members'] AND ($xenOptions['adnavigation_showMembersLink'] OR !$adnavigation))
{
$__compilerVar1 .= '
		<li class="navTab members ' . (($tabs['members']['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				<ul class="blockLinksList">
				';
$__compilerVar3 = '';
$__compilerVar3 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Notable Members' . '</a></li>
					';
if ($xenOptions['enableMemberList'])
{
$__compilerVar3 .= '<li><a href="' . XenForo_Template_Helper_Core::link('members/list', false, array()) . '">' . 'Registered Members' . '</a></li>';
}
$__compilerVar3 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Current Visitors' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar3 .= '<li><a href="' . XenForo_Template_Helper_Core::link('recent-activity', false, array()) . '">' . 'Recent Activity' . '</a></li>';
}
$__compilerVar3 .= '
				';
$__compilerVar1 .= $this->callTemplateHook('navigation_tabs_members', $__compilerVar3, array());
unset($__compilerVar3);
$__compilerVar1 .= '
				</ul>
			</div>
		</li>
	';
}
$__compilerVar1 .= '				
	
	<!-- extra tabs: end -->
	';
if ($extraTabs['end'])
{
$__compilerVar1 .= '
	';
foreach ($extraTabs['end'] AS $extraTabId => $extraTab)
{
$__compilerVar1 .= '
		';
if ($extraTab['linksTemplate'])
{
$__compilerVar1 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar1 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar1 .= '</a>
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				' . $extraTab['linksTemplate'] . '
			</div>
		</li>
		';
}
else
{
$__compilerVar1 .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</li>
		';
}
$__compilerVar1 .= '
	';
}
$__compilerVar1 .= '
	';
}
$__compilerVar1 .= '
	
			

</ul>
</div>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2)
{
$__output .= '
		';
$__compilerVar4 = '';
$__compilerVar4 .= '<script>
	var uix_offCanvasCurrentTab = \'uix_offCanvasVisitorMenu\';
	var uix_offCanvasVisitorConvoLoad = true;
	var uix_offCanvasVisitorAlertLoad = true;
	function uix_offCanvasVisitorTab(ele, id) {
		jQuery(\'#uix_offcanvasVisitorTabs .navTab\').removeClass(\'selected\');
		jQuery(\'.uix_sidePane_content.uix_offCanvasVisitorTabs ul\').removeClass(\'activeTab\').removeClass(\'leftTab\').removeClass(\'rightTab\');
		
		jQuery(ele).parent().addClass(\'selected\');
		jQuery(\'#\' + id).addClass(\'activeTab\');
		if (id == \'uix_offCanvasVisitorMenu\') {
			if (uix_offCanvasCurrentTab == \'uix_offCanvasVisitorAlert\') {
				jQuery(\'#uix_offCanvasVisitorConvo\').css(\'opacity\', 0)
				window.setTimeout(function(){jQuery(\'#uix_offCanvasVisitorConvo\').css(\'opacity\', 1);}, 300);
			}
			jQuery(\'#uix_offCanvasVisitorConvo\').addClass(\'rightTab\');
			jQuery(\'#uix_offCanvasVisitorAlert\').addClass(\'rightTab\');
		} else if (id == \'uix_offCanvasVisitorConvo\') {
			if (uix_offCanvasVisitorConvoLoad){
				uix_offCanvasVisitorConvoLoad = false;
				$(\'#uix_offCanvasVisitorConvo .listPlaceholder\').load(\'' . XenForo_Template_Helper_Core::link('conversations/popup', false, array()) . ' #content div:not(.sidebar) .secondaryContent li:lt(5)\');
			}
			jQuery(\'#uix_offCanvasVisitorMenu\').addClass(\'leftTab\');
			jQuery(\'#uix_offCanvasVisitorAlert\').addClass(\'rightTab\');
			
			//XenForo.balloonCounterUpdate($(\'#VisitorExtraMenu_Counter\'), 0);
			//XenForo.balloonCounterUpdate($(\'#uix_VisitorExtraMenu_Counter\'), 0);
			//XenForo.balloonCounterUpdate($(\'#ConversationsMenu_Counter\'), 0);
			uix.fn.syncBaloon($(\'#ConversationsMenu_Counter\'), $(\'#uix_ConversationsMenu_Counter\'));
		} else if (id == \'uix_offCanvasVisitorAlert\') {
			if (uix_offCanvasVisitorAlertLoad){
				uix_offCanvasVisitorAlertLoad = false;
				$(\'#uix_offCanvasVisitorAlert .listPlaceholder\').load(\'' . XenForo_Template_Helper_Core::link('account/alerts-popup', false, array()) . ' #content div:not(.sidebar) .secondaryContent li:lt(5)\');
			}
			
			if (uix_offCanvasCurrentTab == \'uix_offCanvasVisitorMenu\') {
				jQuery(\'#uix_offCanvasVisitorConvo\').css(\'opacity\', 0)
				window.setTimeout(function(){jQuery(\'#uix_offCanvasVisitorConvo\').css(\'opacity\', 1);}, 300);
			}
			jQuery(\'#uix_offCanvasVisitorConvo\').addClass(\'leftTab\');
			jQuery(\'#uix_offCanvasVisitorMenu\').addClass(\'leftTab\');
			
			XenForo.balloonCounterUpdate($(\'#VisitorExtraMenu_Counter\'), 0);
			XenForo.balloonCounterUpdate($(\'#uix_VisitorExtraMenu_Counter\'), 0);
			XenForo.balloonCounterUpdate($(\'#AlertsMenu_Counter\'), 0);
			uix.fn.syncBaloon($(\'#AlertsMenu_Counter\'), $(\'#uix_AlertsMenu_Counter\'));
		}
		
		uix_offCanvasCurrentTab = id;
	}	
</script>

<div class="uix_sidePane_content uix_offCanvasVisitorTabs">
	<div class="uix_offCanvasTabsWrapper">
		<ul id="uix_offcanvasVisitorTabs" class="uix_offcanvasTabs">
			<li class="navTab selected"><a class="navLink" onclick="uix_offCanvasVisitorTab(this, \'uix_offCanvasVisitorMenu\')">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</a></li>
			<li class="navTab">
				<a onclick="uix_offCanvasVisitorTab(this, \'uix_offCanvasVisitorConvo\')" class="navLink">
					<i class="uix_icon uix_icon-inbox"></i>
					<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('alert') : ('Zero')) . '" id="uix_ConversationsMenu_Counter" data-text="' . 'You have %d new unread conversation(s).' . '">
						<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
					</strong>
				</a>
			</li>
			<li class="navTab">
				<a onclick="uix_offCanvasVisitorTab(this, \'uix_offCanvasVisitorAlert\')" class="navLink">
					<i class="uix_icon uix_icon-alerts"></i>
					<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('alert') : ('Zero')) . '" id="uix_AlertsMenu_Counter" data-text="' . 'You have %d new alert(s).' . '">
						<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
					</strong>
				</a>
			</li>
		</ul>
	</div>
	
	<div class="uix_offCanvasPanes">
		<ul class="activeTab" id="uix_offCanvasVisitorMenu">
		
			<li class="navTab full">
			<div class="primaryContent menuHeader">
				' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,false,array(
'user' => '$visitor',
'size' => 'm',
'class' => 'NoOverlay plainImage',
'title' => 'View your profile'
),'')) . '
					
				<h3><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '" class="concealed" title="' . 'View your profile' . '">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</a></h3>
					
				';
$__compilerVar5 = '';
$__compilerVar5 .= XenForo_Template_Helper_Core::callHelper('usertitle', array(
'0' => $visitor
));
if (trim($__compilerVar5) !== '')
{
$__compilerVar4 .= '<div class="muted">' . $__compilerVar5 . '</div>';
}
unset($__compilerVar5);
$__compilerVar4 .= '	
				
			</div>
			</li>
			
			';
if ($canUpdateStatus)
{
$__compilerVar4 .= '
				<li class="navTab full">
				<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" class="sectionFooter statusPoster AutoValidator" data-optInOut="OptIn">
					<textarea id="uix_offCanvasStatus" name="message" class="textCtrl StatusEditor UserTagger Elastic" placeholder="' . 'Update your status' . '..." rows="1" cols="40" style="height:18px" data-statusEditorCounter="#visMenuSEdCountAlt" data-nofocus="true"></textarea>
					<div class="submitUnit">
						<span id="visMenuSEdCountAlt" title="' . 'Characters remaining' . '"></span>
						<input type="submit" class="button primary MenuCloser" value="' . 'Post' . '" />
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						<input type="hidden" name="return" value="1" /> 
					</div>
				</form>
				</li>
			';
}
$__compilerVar4 .= '
			
			<li class="fl navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
			
			';
$__compilerVar6 = '';
$__compilerVar6 .= '
				';
if ($canEditProfile)
{
$__compilerVar6 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar6 .= '
				';
if ($canEditSignature)
{
$__compilerVar6 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar6 .= '
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
				';
if ($canUploadAvatar)
{
$__compilerVar6 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar6 .= '
				';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar6 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar6 .= '
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
			';
$__compilerVar4 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar6, array());
unset($__compilerVar6);
$__compilerVar4 .= '
				
			';
$__compilerVar7 = '';
$__compilerVar7 .= '
				';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar7 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar7 .= '
				
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id']
)) . '">' . 'Your Content' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . '</a></li>
				<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/ignored', false, array()) . '">' . 'People You Ignore' . '</a></li>
				';
if ($xenCache['userUpgradeCount'])
{
$__compilerVar7 .= '<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar7 .= '
			';
$__compilerVar4 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar7, array());
unset($__compilerVar7);
$__compilerVar4 .= '
			
				<li class="navTab"><a href="' . XenForo_Template_Helper_Core::link('logout', '', array(
'_xfToken' => $visitor['csrf_token_page']
)) . '" class="LogOut navLink">' . 'Log Out' . '</a></li>
			
				<li class="navTab full">				
					<form action="' . XenForo_Template_Helper_Core::link('account/toggle-visibility', false, array()) . '" method="post" class="AutoValidator visibilityForm navLink">
						<label><input type="checkbox" name="visible" value="1" class="SubmitOnChange" ' . (($visitor['visible']) ? ' checked="checked"' : '') . ' />
							' . 'Show online status' . '</label>
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
					</form>
				</li>
		
		</ul>
		
		<ul id="uix_offCanvasVisitorConvo" class="rightTab">
			<div class="menuHeader primaryContent">
				<h3>
					<span class="Progress InProgress"></span>
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" class="concealed">' . 'Conversations' . '</a>
				</h3>						
			</div>
					
			<div class="listPlaceholder"></div>
					
			';
if ($canStartConversation)
{
$__compilerVar4 .= '<li class="navTab"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink navLink">' . 'Start a New Conversation' . '</a></li>';
}
$__compilerVar4 .= '
			<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a></li>
	
		</ul>
		
		<ul id="uix_offCanvasVisitorAlert" class="rightTab">
			<div class="menuHeader primaryContent">
				<h3>
					<span class="Progress InProgress"></span>
					<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" class="concealed">' . 'Alerts' . '</a>
				</h3>
			</div>
					
			<div class="listPlaceholder"></div>
					
			<li class="navTab"><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '" class="floatLink navLink">' . 'Alert Preferences' . '</a></li>
			<li class="navTab"><a class="navLink" href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Show All' . '...</a></li>
		</ul>
	</div>
</div>';
$__output .= $__compilerVar4;
unset($__compilerVar4);
$__output .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__output .= '
		';
$__compilerVar8 = '';
$__compilerVar8 .= '<div class="uix_sidePane_content uix_offCanvasCustomLeft">
<ul>

	<li class="navTab"><a class="navLink">Customize</a></li>
	<li class="navTab"><a class="navLink">uix_offCanvasSidebarCustomLeft</a></li>
	
</ul>
</div>';
$__output .= $__compilerVar8;
unset($__compilerVar8);
$__output .= '
	';
}
else
{
$__output .= '
		<div class="uix_sidePane_content">
			<ul><li class="navLink">Error: Choose a valid value for</li></ul>
			<ul><li class="navLink">uix_offCanvasSidebarLeft</li></ul>
		</div>
	';
}
$__output .= '
</aside>';
