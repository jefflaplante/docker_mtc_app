<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__compilerVar1 = '';
$__compilerVar1 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar1 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar1 .= '
	';
$__compilerVar2 = '';
$__compilerVar1 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar2, array());
unset($__compilerVar2);
$__compilerVar1 .= '
	';
}
$__compilerVar1 .= '

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">

		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar1 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar1 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar1 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar1 .= '
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
$__compilerVar3 = '';
$__compilerVar3 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar3) !== '')
{
$__compilerVar1 .= '<div class="muted">' . $__compilerVar3 . '</div>';
}
unset($__compilerVar3);
$__compilerVar1 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar4 = '';
$__compilerVar4 .= '
					';
if ($canEditProfile)
{
$__compilerVar4 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar4 .= '
					';
if ($canEditSignature)
{
$__compilerVar4 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar4 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar4 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar4 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar4 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar4 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar5 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar5 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar4 .= $__compilerVar5;
unset($__compilerVar5);
$__compilerVar4 .= '
';
$__compilerVar1 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar4, array());
unset($__compilerVar4);
$__compilerVar1 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar6 = '';
$__compilerVar6 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar6 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar6 .= '
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
$__compilerVar6 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar6 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar1 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar6, array());
unset($__compilerVar6);
$__compilerVar1 .= '
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
$__compilerVar1 .= '
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
$__compilerVar1 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar1 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar1 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar7 = '';
$__compilerVar7 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar7 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar7 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar1 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar7, array());
unset($__compilerVar7);
$__compilerVar1 .= '
				</ul>
				';
$__compilerVar8 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar8 .= '
	';
$__compilerVar9 = '';
$__compilerVar9 .= '
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
$__compilerVar9 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar10 = '';
$__compilerVar10 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar10 .= '
		';
$__compilerVar11 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar11 .= '

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
$__compilerVar10 .= $__compilerVar11;
unset($__compilerVar11);
$__compilerVar10 .= '
	';
}
$__compilerVar10 .= '
	
	
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
$__compilerVar10 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar10 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar10 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar10 .= '
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
$__compilerVar10 .= '
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
$__compilerVar10 .= '
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
$__compilerVar9 .= $this->callTemplateHook('quick_search', $__compilerVar10, array());
unset($__compilerVar10);
$__compilerVar9 .= '

</div>';
$__compilerVar8 .= $__compilerVar9;
unset($__compilerVar9);
$__compilerVar8 .= '
	';
$__compilerVar12 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar12 .= '

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
$__compilerVar8 .= $__compilerVar12;
unset($__compilerVar12);
$__compilerVar8 .= '
';
}
$__compilerVar1 .= $__compilerVar8;
unset($__compilerVar8);
$__compilerVar1 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar1 .= '
	';
}
$__compilerVar1 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar1 .= '

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
$__compilerVar1 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar1 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar1 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar1 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar13 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar13 .= '
	';
$__compilerVar14 = '';
$__compilerVar14 .= '
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
$__compilerVar14 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar15 = '';
$__compilerVar15 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar15 .= '
		';
$__compilerVar16 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar16 .= '

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
$__compilerVar15 .= $__compilerVar16;
unset($__compilerVar16);
$__compilerVar15 .= '
	';
}
$__compilerVar15 .= '
	
	
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
$__compilerVar15 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar15 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar15 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar15 .= '
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
$__compilerVar15 .= '
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
$__compilerVar15 .= '
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
$__compilerVar14 .= $this->callTemplateHook('quick_search', $__compilerVar15, array());
unset($__compilerVar15);
$__compilerVar14 .= '

</div>';
$__compilerVar13 .= $__compilerVar14;
unset($__compilerVar14);
$__compilerVar13 .= '
	';
$__compilerVar17 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar17 .= '

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
$__compilerVar13 .= $__compilerVar17;
unset($__compilerVar17);
$__compilerVar13 .= '
';
}
$__compilerVar1 .= $__compilerVar13;
unset($__compilerVar13);
$__compilerVar1 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar1 .= '
		';
}
$__compilerVar1 .= '
		
		';
$__compilerVar18 = '';
$__compilerVar1 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar18, array());
unset($__compilerVar18);
$__compilerVar1 .= '
		
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
$__compilerVar19 = '';
$__compilerVar1 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar19, array());
unset($__compilerVar19);
$__compilerVar1 .= '
	';
}
else
{
$__compilerVar1 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar1 .= ' 
	';
}
$__compilerVar1 .= '
	
';
if (trim($__compilerVar1) !== '')
{
$__output .= '
' . $__compilerVar1 . '
';
}
unset($__compilerVar1);
