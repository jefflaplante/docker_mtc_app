<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '
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
$__output .= '

' . '

<div id="navigation" class="' . (($canSearch && ($uix_searchPosition == 0 || $uix_searchPosition == 2)) ? ('withSearch') : ('')) . ' ' . ((XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) ? ('stickyTop') : ('')) . '">
	<div class="sticky_wrapper">
		<div class="uix_navigationWrapper">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__output .= '
		<div class="pageWidth">
		';
}
$__output .= '
			<div class="pageContent">
				<nav>
					<div class="navTabs">
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__output .= '
						<div class="pageWidth">
						';
}
$__output .= '
							
							<ul class="publicTabs navLeft">
	
							';
if ((XenForo_Template_Helper_Core::styleProperty('uix_navigationStickyLogo') && XenForo_Template_Helper_Core::styleProperty('uix_stickyNavigation')) || XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2)
{
$__output .= '
							<li id="logo_small">
								<a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
								';
if (XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath'))
{
$__output .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('uix_smallLogoPath') . '">
								';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__output .= '
									<h1 class="uix_textLogo">';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__output .= '<i class="uix_icon ' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon') . '"></i>';
}
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__output .= XenForo_Template_Helper_Core::styleProperty('uix_logoText');
}
$__output .= '</h1>
								';
}
else
{
$__output .= '
									<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
								';
}
$__output .= '
								</a>
							</li>
							';
}
$__output .= '
							
							';
if (XenForo_Template_Helper_Core::styleProperty('uix_leftCanvasTrigger_position') == 0)
{
$__compilerVar1 = '0';
$__compilerVar2 = '';
$__compilerVar2 .= '

';
if ($__compilerVar1 == 0)
{
$__compilerVar2 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar2 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar2 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar2 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar2 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar2 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar2 .= '
	';
}
else
{
$__compilerVar2 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar2 .= '
	';
}
$__compilerVar2 .= '
	
';
}
else if ($__compilerVar1 == 1)
{
$__compilerVar2 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar2 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar2 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar2 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar2 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar2 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar2 .= '
	';
}
else
{
$__compilerVar2 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar2 .= '
	';
}
$__compilerVar2 .= '
	
';
}
$__compilerVar2 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar2 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar1) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar2 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar2 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar2 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar2 .= '
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
$__compilerVar2 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar1) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar2 .= '
			';
if (!$__compilerVar1)
{
$__compilerVar2 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar2 .= '
			';
if ($__compilerVar1)
{
$__compilerVar2 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar2 .= '
		';
}
else
{
$__compilerVar2 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar2 .= '</a>
	</li>

';
}
$__output .= $__compilerVar2;
unset($__compilerVar1, $__compilerVar2);
}
$__output .= '
							
							<!-- home -->
							';
if ($showHomeLink)
{
$__output .= '
								<li class="navTab home PopupClosed"><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="navLink">';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon'))
{
$__output .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__output .= 'Home';
}
$__output .= '</a></li>
							';
}
$__output .= '
								
								
								<!-- extra tabs: home -->
								';
if ($extraTabs['home'])
{
$__output .= '
								';
foreach ($extraTabs['home'] AS $extraTabId => $extraTab)
{
$__output .= '
									';
if ($extraTab['linksTemplate'])
{
$__output .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__output .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__output .= '">
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' NoPopupGadget';
}
$__output .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' rel="Menu"';
}
$__output .= '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_showNavHomeIcon') && ($extraTabId == ('home') || $extraTabId == ('portal') || $extraTabId == ('ctaFt')))
{
$__output .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__output .= htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
}
if ($extraTab['counter'])
{
$__output .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__output .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= 'Menu JsOnly tabMenu';
}
else
{
$__output .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__output .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h2>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h2>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar3 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar3 .= '
	';
$__compilerVar4 = '';
$__compilerVar4 .= '
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
$__compilerVar4 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar5 = '';
$__compilerVar5 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar5 .= '
		';
$__compilerVar6 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar6 .= '

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
$__compilerVar5 .= $__compilerVar6;
unset($__compilerVar6);
$__compilerVar5 .= '
	';
}
$__compilerVar5 .= '
	
	
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
$__compilerVar5 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar5 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar5 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar5 .= '
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
$__compilerVar5 .= '
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
$__compilerVar5 .= '
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
$__compilerVar4 .= $this->callTemplateHook('quick_search', $__compilerVar5, array());
unset($__compilerVar5);
$__compilerVar4 .= '

</div>';
$__compilerVar3 .= $__compilerVar4;
unset($__compilerVar4);
$__compilerVar3 .= '
	';
$__compilerVar7 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar7 .= '

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
$__compilerVar3 .= $__compilerVar7;
unset($__compilerVar7);
$__compilerVar3 .= '
';
}
$__output .= $__compilerVar3;
unset($__compilerVar3);
}
$__output .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__output .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' NoPopupGadget';
}
$__output .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' rel="Menu"';
}
$__output .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__output .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__output .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__output .= '<div class="tabLinks">';
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
$__output .= $__compilerVar8;
unset($__compilerVar8);
$__output .= '</div>';
}
}
$__output .= '
										</li>
									';
}
$__output .= '
								';
}
$__output .= '
								';
}
$__output .= '
								
								
								<!-- forums -->
								';
if ($tabs['forums'])
{
$__output .= '
									<li class="navTab forums ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= (($tabs['forums']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__output .= (($tabs['forums']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__output .= '">
									
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' NoPopupGadget';
}
$__output .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' rel="Menu"';
}
$__output .= '>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= 'Menu JsOnly tabMenu';
}
else
{
$__output .= (($tabs['forums']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__output .= ' forumsTabLinks">
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar13 = '';
$__compilerVar13 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar13 .= '<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>';
}
$__compilerVar13 .= '
													';
if ($canSearch)
{
$__compilerVar13 .= '<li><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Forums' . '</a></li>';
}
$__compilerVar13 .= '
													';
if ($visitor['user_id'])
{
$__compilerVar13 .= '
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/forums', false, array()) . '">' . 'Watched Forums' . '</a></li>
														<li><a href="' . XenForo_Template_Helper_Core::link('watched/threads', false, array()) . '">' . 'Watched Threads' . '</a></li>
													';
}
$__compilerVar13 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '" rel="nofollow">' . (($visitor['user_id']) ? ('New Posts') : ('Recent Posts')) . '</a></li>
												';
$__output .= $this->callTemplateHook('navigation_tabs_forums', $__compilerVar13, array());
unset($__compilerVar13);
$__output .= '
												</ul>
												';
if ($tabs['forums']['selected'])
{
$__compilerVar14 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar14 .= '
	';
$__compilerVar15 = '';
$__compilerVar15 .= '
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
$__compilerVar15 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar16 = '';
$__compilerVar16 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar16 .= '
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
$__compilerVar16 .= $__compilerVar17;
unset($__compilerVar17);
$__compilerVar16 .= '
	';
}
$__compilerVar16 .= '
	
	
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
$__compilerVar16 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar16 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar16 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar16 .= '
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
$__compilerVar16 .= '
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
$__compilerVar16 .= '
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
$__compilerVar15 .= $this->callTemplateHook('quick_search', $__compilerVar16, array());
unset($__compilerVar16);
$__compilerVar15 .= '

</div>';
$__compilerVar14 .= $__compilerVar15;
unset($__compilerVar15);
$__compilerVar14 .= '
	';
$__compilerVar18 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar18 .= '

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
$__compilerVar14 .= $__compilerVar18;
unset($__compilerVar18);
$__compilerVar14 .= '
';
}
$__output .= $__compilerVar14;
unset($__compilerVar14);
}
$__output .= '
											' . (($tabs['forums']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__output .= '
								
								
								<!-- extra tabs: middle -->
								';
if ($extraTabs['middle'])
{
$__output .= '
								';
foreach ($extraTabs['middle'] AS $extraTabId => $extraTab)
{
$__output .= '
									';
if ($extraTab['linksTemplate'])
{
$__output .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__output .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__output .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' NoPopupGadget';
}
$__output .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' rel="Menu"';
}
$__output .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__output .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__output .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= 'Menu JsOnly tabMenu';
}
else
{
$__output .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__output .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar19 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar19 .= '
	';
$__compilerVar20 = '';
$__compilerVar20 .= '
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
$__compilerVar20 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar21 = '';
$__compilerVar21 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar21 .= '
		';
$__compilerVar22 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar22 .= '

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
$__compilerVar21 .= $__compilerVar22;
unset($__compilerVar22);
$__compilerVar21 .= '
	';
}
$__compilerVar21 .= '
	
	
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
$__compilerVar21 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar21 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar21 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar21 .= '
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
$__compilerVar21 .= '
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
$__compilerVar21 .= '
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
$__compilerVar20 .= $this->callTemplateHook('quick_search', $__compilerVar21, array());
unset($__compilerVar21);
$__compilerVar20 .= '

</div>';
$__compilerVar19 .= $__compilerVar20;
unset($__compilerVar20);
$__compilerVar19 .= '
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
$__compilerVar19 .= $__compilerVar23;
unset($__compilerVar23);
$__compilerVar19 .= '
';
}
$__output .= $__compilerVar19;
unset($__compilerVar19);
}
$__output .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__output .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' NoPopupGadget';
}
$__output .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' rel="Menu"';
}
$__output .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__output .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__output .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__output .= '<div class="tabLinks">';
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
$__output .= $__compilerVar24;
unset($__compilerVar24);
$__output .= '</div>';
}
}
$__output .= '
										</li>
									';
}
$__output .= '
								';
}
$__output .= '
								';
}
$__output .= '
								
								
								<!-- members -->
								';
if ($tabs['members'])
{
$__output .= '
									<li class="navTab members ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= (($tabs['members']['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__output .= (($tabs['members']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__output .= '">
									
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' NoPopupGadget';
}
$__output .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' rel="Menu"';
}
$__output .= '>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</a>
										<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= 'Menu JsOnly tabMenu';
}
else
{
$__output .= (($tabs['members']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__output .= ' membersTabLinks">
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar29 = '';
$__compilerVar29 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Notable Members' . '</a></li>
													';
if ($xenOptions['enableMemberList'])
{
$__compilerVar29 .= '<li><a href="' . XenForo_Template_Helper_Core::link('members/list', false, array()) . '">' . 'Registered Members' . '</a></li>';
}
$__compilerVar29 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Current Visitors' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar29 .= '<li><a href="' . XenForo_Template_Helper_Core::link('recent-activity', false, array()) . '">' . 'Recent Activity' . '</a></li>';
}
$__compilerVar29 .= '
													';
if ($canViewProfilePosts)
{
$__compilerVar29 .= '<li><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></li>';
}
$__compilerVar29 .= '
												';
$__output .= $this->callTemplateHook('navigation_tabs_members', $__compilerVar29, array());
unset($__compilerVar29);
$__output .= '
												</ul>
												';
if ($tabs['members']['selected'])
{
$__compilerVar30 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar30 .= '
	';
$__compilerVar31 = '';
$__compilerVar31 .= '
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
$__compilerVar31 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar32 = '';
$__compilerVar32 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar32 .= '
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
$__compilerVar32 .= $__compilerVar33;
unset($__compilerVar33);
$__compilerVar32 .= '
	';
}
$__compilerVar32 .= '
	
	
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
$__compilerVar32 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar32 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar32 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar32 .= '
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
$__compilerVar32 .= '
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
$__compilerVar32 .= '
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
$__compilerVar31 .= $this->callTemplateHook('quick_search', $__compilerVar32, array());
unset($__compilerVar32);
$__compilerVar31 .= '

</div>';
$__compilerVar30 .= $__compilerVar31;
unset($__compilerVar31);
$__compilerVar30 .= '
	';
$__compilerVar34 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar34 .= '

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
$__compilerVar30 .= $__compilerVar34;
unset($__compilerVar34);
$__compilerVar30 .= '
';
}
$__output .= $__compilerVar30;
unset($__compilerVar30);
}
$__output .= '
											' . (($tabs['members']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
								';
}
$__output .= '				
								
								<!-- extra tabs: end -->
								';
if ($extraTabs['end'])
{
$__output .= '
								';
foreach ($extraTabs['end'] AS $extraTabId => $extraTab)
{
$__output .= '
									';
if ($extraTab['linksTemplate'])
{
$__output .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= (($extraTab['selected']) ? ('selected') : ('')) . ' Popup PopupControl PopupClosed';
}
else
{
$__output .= (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed'));
}
$__output .= '">
									
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' NoPopupGadget';
}
$__output .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' rel="Menu"';
}
$__output .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__output .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__output .= '</a>
										<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
										
										<div class="';
if (XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= 'Menu JsOnly tabMenu';
}
else
{
$__output .= (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu'));
}
$__output .= ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<div class="primaryContent menuHeader">
													<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
													<div class="muted">' . 'Quick Links' . '</div>
												</div>
												' . $extraTab['linksTemplate'] . '
												';
if ($extraTab['selected'])
{
$__compilerVar35 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar35 .= '
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
	';
$__compilerVar39 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar39 .= '

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
$__compilerVar35 .= $__compilerVar39;
unset($__compilerVar39);
$__compilerVar35 .= '
';
}
$__output .= $__compilerVar35;
unset($__compilerVar35);
}
$__output .= '
											' . (($extraTab['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
else
{
$__output .= '
										<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
											<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' NoPopupGadget';
}
$__output .= '"';
if (!XenForo_Template_Helper_Core::styleProperty('uix_navDropdownArrows'))
{
$__output .= ' rel="Menu"';
}
$__output .= '>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__output .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__output .= '</a>
											';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
if ($extraTab['selected'])
{
$__output .= '<div class="tabLinks">';
$__compilerVar40 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar40 .= '
	';
$__compilerVar41 = '';
$__compilerVar41 .= '
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
$__compilerVar41 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar42 = '';
$__compilerVar42 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar42 .= '
		';
$__compilerVar43 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar43 .= '

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
$__compilerVar42 .= $__compilerVar43;
unset($__compilerVar43);
$__compilerVar42 .= '
	';
}
$__compilerVar42 .= '
	
	
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
$__compilerVar42 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar42 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar42 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar42 .= '
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
$__compilerVar42 .= '
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
$__compilerVar42 .= '
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
$__compilerVar41 .= $this->callTemplateHook('quick_search', $__compilerVar42, array());
unset($__compilerVar42);
$__compilerVar41 .= '

</div>';
$__compilerVar40 .= $__compilerVar41;
unset($__compilerVar41);
$__compilerVar40 .= '
	';
$__compilerVar44 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar44 .= '

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
$__compilerVar40 .= $__compilerVar44;
unset($__compilerVar44);
$__compilerVar40 .= '
';
}
$__output .= $__compilerVar40;
unset($__compilerVar40);
$__output .= '</div>';
}
}
$__output .= '
										</li>
									';
}
$__output .= '
								';
}
$__output .= '
								';
}
$__output .= '
								
								<!-- responsive popup -->
								<li class="navTab navigationHiddenTabs Popup PopupControl PopupClosed" style="display:none">	
												
									<a rel="Menu" class="navLink NoPopupGadget uix_dropdownDesktopMenu"><i class="uix_icon uix_icon-navTrigger"></i><span class="uix_hide menuIcon">' . 'Menu' . '</span></a>
									
									<div class="Menu JsOnly blockLinksList primaryContent" id="NavigationHiddenMenu"></div>
								</li>
									
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= '
								<!-- no selection -->
								';
if (!$selectedTab)
{
$__output .= '
									<li class="navTab selected"><div class="tabLinks">';
$__compilerVar45 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar45 .= '
	';
$__compilerVar46 = '';
$__compilerVar46 .= '
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
$__compilerVar46 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar47 = '';
$__compilerVar47 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar47 .= '
		';
$__compilerVar48 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar48 .= '

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
$__compilerVar47 .= $__compilerVar48;
unset($__compilerVar48);
$__compilerVar47 .= '
	';
}
$__compilerVar47 .= '
	
	
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
$__compilerVar47 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar47 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar47 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar47 .= '
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
$__compilerVar47 .= '
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
$__compilerVar47 .= '
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
$__compilerVar46 .= $this->callTemplateHook('quick_search', $__compilerVar47, array());
unset($__compilerVar47);
$__compilerVar46 .= '

</div>';
$__compilerVar45 .= $__compilerVar46;
unset($__compilerVar46);
$__compilerVar45 .= '
	';
$__compilerVar49 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar49 .= '

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
$__compilerVar45 .= $__compilerVar49;
unset($__compilerVar49);
$__compilerVar45 .= '
';
}
$__output .= $__compilerVar45;
unset($__compilerVar45);
$__output .= '</div></li>
								';
}
$__output .= '
								';
}
$__output .= '
	
								';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__output .= '	
									';
if ($tabs['account']['selected'])
{
$__output .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
												';
$__compilerVar50 = '';
$__compilerVar50 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar50 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar50 .= '
													<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
												';
$__output .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar50, array());
unset($__compilerVar50);
$__output .= '
												</ul>
												';
$__compilerVar51 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar51 .= '
	';
$__compilerVar52 = '';
$__compilerVar52 .= '
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
$__compilerVar52 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar53 = '';
$__compilerVar53 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar53 .= '
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
$__compilerVar53 .= $__compilerVar54;
unset($__compilerVar54);
$__compilerVar53 .= '
	';
}
$__compilerVar53 .= '
	
	
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
$__compilerVar53 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar53 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar53 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar53 .= '
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
$__compilerVar53 .= '
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
$__compilerVar53 .= '
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
$__compilerVar52 .= $this->callTemplateHook('quick_search', $__compilerVar53, array());
unset($__compilerVar53);
$__compilerVar52 .= '

</div>';
$__compilerVar51 .= $__compilerVar52;
unset($__compilerVar52);
$__compilerVar51 .= '
	';
$__compilerVar55 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar55 .= '

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
$__compilerVar51 .= $__compilerVar55;
unset($__compilerVar55);
$__compilerVar51 .= '
';
}
$__output .= $__compilerVar51;
unset($__compilerVar51);
$__output .= '
											' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__output .= '
									';
if ($tabs['inbox']['selected'])
{
$__output .= '
									<li class="navTab selected">
										<div class="tabLinks">
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
												<ul class="secondaryContent blockLinksList">
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
													<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
												</ul>
												';
$__compilerVar56 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar56 .= '
	';
$__compilerVar57 = '';
$__compilerVar57 .= '
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
$__compilerVar57 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar58 = '';
$__compilerVar58 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar58 .= '
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
$__compilerVar58 .= $__compilerVar59;
unset($__compilerVar59);
$__compilerVar58 .= '
	';
}
$__compilerVar58 .= '
	
	
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
$__compilerVar58 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar58 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar58 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar58 .= '
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
$__compilerVar58 .= '
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
$__compilerVar58 .= '
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
$__compilerVar57 .= $this->callTemplateHook('quick_search', $__compilerVar58, array());
unset($__compilerVar58);
$__compilerVar57 .= '

</div>';
$__compilerVar56 .= $__compilerVar57;
unset($__compilerVar57);
$__compilerVar56 .= '
	';
$__compilerVar60 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar60 .= '

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
$__compilerVar56 .= $__compilerVar60;
unset($__compilerVar60);
$__compilerVar56 .= '
';
}
$__output .= $__compilerVar56;
unset($__compilerVar56);
$__output .= '
											' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
										</div>
									</li>
									';
}
$__output .= '
								';
}
$__output .= '		
	
							</ul>
							
							
							';
$__compilerVar61 = '';
$__compilerVar61 .= '
								
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_postPagination') && XenForo_Template_Helper_Core::styleProperty('uix_postPaginationPos') == 0 && $contentTemplate == ('thread_view'))
{
$__compilerVar61 .= '
										<li class="navTab audentio_postPagination" id="audentio_postPagination"></li>
									';
}
$__compilerVar61 .= '
								
									';
$__compilerVar62 = '';
$__compilerVar61 .= $this->callTemplateHook('uix_navigation_right_start', $__compilerVar62, array());
unset($__compilerVar62);
$__compilerVar61 .= '
									
									';
if (!XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar61 .= '
										';
$__compilerVar63 = '';
$__compilerVar64 = '';
$__compilerVar64 .= '

	';
if ($visitor['user_id'])
{
$__compilerVar64 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar64 .= '
	';
$__compilerVar65 = '';
$__compilerVar64 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar65, array());
unset($__compilerVar65);
$__compilerVar64 .= '
	';
}
$__compilerVar64 .= '
	
	  <li class="navTab" style="line-height:50px;"> &nbsp;  <a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>&nbsp;</li>

	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">


		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar64 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar64 .= '
				<span class="avatar Av' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . 's"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar64 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar64 .= '

			
			
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
$__compilerVar66 = '';
$__compilerVar66 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar66) !== '')
{
$__compilerVar64 .= '<div class="muted">' . $__compilerVar66 . '</div>';
}
unset($__compilerVar66);
$__compilerVar64 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar67 = '';
$__compilerVar67 .= '
					';
if ($canEditProfile)
{
$__compilerVar67 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar67 .= '
					';
if ($canEditSignature)
{
$__compilerVar67 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar67 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar67 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar67 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar67 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar67 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar68 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar68 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar67 .= $__compilerVar68;
unset($__compilerVar68);
$__compilerVar67 .= '
';
$__compilerVar64 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar67, array());
unset($__compilerVar67);
$__compilerVar64 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar69 = '';
$__compilerVar69 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar69 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar69 .= '
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
$__compilerVar69 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar69 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar64 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar69, array());
unset($__compilerVar69);
$__compilerVar64 .= '
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
$__compilerVar64 .= '
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
$__compilerVar64 .= '
		</div>		
	</li>
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar64 .= '	
	';
if ($tabs['account']['selected'])
{
$__compilerVar64 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
				<ul class="secondaryContent blockLinksList">
				';
$__compilerVar70 = '';
$__compilerVar70 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar70 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar70 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
				';
$__compilerVar64 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar70, array());
unset($__compilerVar70);
$__compilerVar64 .= '
				</ul>
				';
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
$__compilerVar64 .= $__compilerVar71;
unset($__compilerVar71);
$__compilerVar64 .= '
			' . (($tabs['account']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
		</div>
	</li>
	';
}
$__compilerVar64 .= '
	';
}
$__compilerVar64 .= '
	
	';
if (!XenForo_Template_Helper_Core::styleProperty('uix_privateTabCondense'))
{
$__compilerVar64 .= '

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
$__compilerVar64 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar64 .= '
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
				</div>
			</div>
		</li>
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks') && !XenForo_Template_Helper_Core::styleProperty('uix_visitorTabsToUserBar'))
{
$__compilerVar64 .= '
		';
if ($tabs['inbox']['selected'])
{
$__compilerVar64 .= '
		<li class="navTab selected">
			<div class="tabLinks">
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('<div class="pageWidth">') : ('')) . '
					<ul class="secondaryContent blockLinksList">
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
					</ul>
					';
$__compilerVar76 = '';
if ($uix_searchPosition == 0)
{
$__compilerVar76 .= '
	';
$__compilerVar77 = '';
$__compilerVar77 .= '
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
$__compilerVar77 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar78 = '';
$__compilerVar78 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar78 .= '
		';
$__compilerVar79 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar79 .= '

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
$__compilerVar78 .= $__compilerVar79;
unset($__compilerVar79);
$__compilerVar78 .= '
	';
}
$__compilerVar78 .= '
	
	
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
$__compilerVar78 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar78 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar78 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar78 .= '
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
$__compilerVar78 .= '
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
$__compilerVar78 .= '
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
$__compilerVar77 .= $this->callTemplateHook('quick_search', $__compilerVar78, array());
unset($__compilerVar78);
$__compilerVar77 .= '

</div>';
$__compilerVar76 .= $__compilerVar77;
unset($__compilerVar77);
$__compilerVar76 .= '
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
$__compilerVar76 .= $__compilerVar80;
unset($__compilerVar80);
$__compilerVar76 .= '
';
}
$__compilerVar64 .= $__compilerVar76;
unset($__compilerVar76);
$__compilerVar64 .= '
				' . (($tabs['inbox']['selected'] && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 && !XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks')) ? ('</div>') : ('')) . '
			</div>
		</li>
		';
}
$__compilerVar64 .= '
		';
}
$__compilerVar64 .= '
		
		';
$__compilerVar81 = '';
$__compilerVar64 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar81, array());
unset($__compilerVar81);
$__compilerVar64 .= '
		
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
$__compilerVar82 = '';
$__compilerVar64 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar82, array());
unset($__compilerVar82);
$__compilerVar64 .= '
	';
}
else
{
$__compilerVar64 .= '
		<li class="uix_hide" id="ConversationsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
		</li>
		
		<li class="uix_hide" id="AlertsMenu_Counter">
			<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
		</li>
	';
}
$__compilerVar64 .= ' 
	';
}
$__compilerVar64 .= '
	
';
if (trim($__compilerVar64) !== '')
{
$__compilerVar63 .= '
' . $__compilerVar64 . '
';
}
unset($__compilerVar64);
$__compilerVar61 .= $__compilerVar63;
unset($__compilerVar63);
$__compilerVar61 .= '
									';
}
$__compilerVar61 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 1)
{
$__compilerVar61 .= '
										';
$__compilerVar83 = '';
if (!$visitor['user_id'] && $contentTemplate != ('login') && $contentTemplate != ('login_with_error'))
{
$__compilerVar83 .= '

	<li class="navTab login' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' Popup PopupControl') : ('')) . ' PopupClosed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar83 .= '<label for="LoginControl">';
}
$__compilerVar83 .= '
			<a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="navLink uix_dropdownDesktopMenu' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? (' NoPopupGadget') : ('')) . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 3) ? (' OverlayTrigger') : ('')) . '"' . ((XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2) ? ('rel="Menu"') : ('')) . '>
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar83 .= '<i class="uix_icon uix_icon-signIn"></i> ';
}
$__compilerVar83 .= '
				<strong class="loginText">' . 'Log in' . '</strong>
			</a>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 1)
{
$__compilerVar83 .= '</label>';
}
$__compilerVar83 .= '
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerStyle') == 2)
{
$__compilerVar83 .= '
		<div class="Menu JsOnly tabMenu uix_fixIOSClick">
			<div class="secondaryContent uix_loginForm">
				';
$__compilerVar84 = '';
$__compilerVar84 .= '<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm' . (($isOverlay) ? (' formOverlay') : ('')) . '">

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
$__compilerVar84 .= '
		<dl class="ctrlUnit">
			' . 'Verification' . ':
			<dd>' . $captcha . '</dd>
		</dl>
	';
}
$__compilerVar84 .= '

	<dl class="ctrlUnit submitUnit">
		<dd>
			<input type="submit" class="button primary" value="' . 'Log in' . '" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" tabindex="4" />
			<label class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_pageLogin_remember" tabindex="3" /> ' . 'Stay logged in' . '</label>
		</dd>
	</dl>
	
	';
$__compilerVar85 = '';
$__compilerVar85 .= '
	
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar85 .= '
		';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar85 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="10"><span>' . 'Log in with Facebook' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar85 .= '
	
	';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar85 .= '
		';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar85 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="10"><span>' . 'Log in with Twitter' . '</span></a></dd>
		</dl>
	';
}
$__compilerVar85 .= '
	
	';
if ($xenOptions['googleClientId'])
{
$__compilerVar85 .= '
		';
$this->addRequiredExternal('css', 'google');
$__compilerVar85 .= '
		<dl class="ctrlUnit">
			<dt></dt>
			<dd><span class="googleLogin GoogleLogin JsOnly" tabindex="10" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></dd>
		</dl>
	';
}
$__compilerVar85 .= '

	';
if (trim($__compilerVar85) !== '')
{
$__compilerVar84 .= '
	<div class="uix_loginOptions">
	' . $__compilerVar85 . '
	</div>
	';
}
unset($__compilerVar85);
$__compilerVar84 .= '
	
	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="redirect" value="' . (($redirect) ? (htmlspecialchars($redirect, ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8'))) . '" />
	';
if ($postData)
{
$__compilerVar84 .= '
		<input type="hidden" name="postData" value="' . htmlspecialchars(XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $postData
)), ENT_QUOTES, 'UTF-8', true) . '" />
	';
}
$__compilerVar84 .= '

</form>';
$__compilerVar83 .= $__compilerVar84;
unset($__compilerVar84);
$__compilerVar83 .= '
			</div>
		</div>
		';
}
$__compilerVar83 .= '
		
	</li>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginShowRegister') && $contentTemplate != ('register_form'))
{
$__compilerVar83 .= '
	<li class="navTab register PopupClosed">
		<a href="' . XenForo_Template_Helper_Core::link('register', false, array()) . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerIcons'))
{
$__compilerVar83 .= '<i class="uix_icon uix_icon-register"></i> ';
}
$__compilerVar83 .= '
			<strong>' . 'Sign up' . '</strong>
		</a>
	</li>
	';
}
$__compilerVar83 .= '
	
';
}
$__compilerVar61 .= $__compilerVar83;
unset($__compilerVar83);
$__compilerVar61 .= '
									';
}
$__compilerVar61 .= '
							
									';
$__compilerVar86 = '';
$__compilerVar61 .= $this->callTemplateHook('uix_navigation_right_end', $__compilerVar86, array());
unset($__compilerVar86);
$__compilerVar61 .= '
									
									';
if (XenForo_Template_Helper_Core::styleProperty('uix_rightCanvasTrigger_position') == 0)
{
$__compilerVar87 = '1';
$__compilerVar88 = '';
$__compilerVar88 .= '

';
if ($__compilerVar87 == 0)
{
$__compilerVar88 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1)
{
$__compilerVar88 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar88 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2 && $visitor['user_id'])
{
$__compilerVar88 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar88 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 3)
{
$__compilerVar88 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar88 .= '
	';
}
else
{
$__compilerVar88 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar88 .= '
	';
}
$__compilerVar88 .= '
	
';
}
else if ($__compilerVar87 == 1)
{
$__compilerVar88 .= '
											
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1)
{
$__compilerVar88 .= '
		';
$canvasType = '';
$canvasType .= 'navigation';
$__compilerVar88 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2 && $visitor['user_id'])
{
$__compilerVar88 .= '
		';
$canvasType = '';
$canvasType .= 'visitor';
$__compilerVar88 .= '
	';
}
else if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 3)
{
$__compilerVar88 .= '
		';
$canvasType = '';
$canvasType .= 'custom';
$__compilerVar88 .= '
	';
}
else
{
$__compilerVar88 .= '
		';
$canvasType = '';
$canvasType .= 'normal';
$__compilerVar88 .= '
	';
}
$__compilerVar88 .= '
	
';
}
$__compilerVar88 .= '







';
if ($canvasType == ('visitor'))
{
$__compilerVar88 .= '

	<li class="navTab account uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar87) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '"><a class="navLink offCanvasVisitorTabs" href="#">
		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar88 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_accountTabAvatar'))
{
$__compilerVar88 .= '
				<span class="avatar"><img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" alt="" /></span>
			';
}
else
{
$__compilerVar88 .= '
				<i class="uix_icon uix_icon-user"></i>
			';
}
$__compilerVar88 .= '
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
$__compilerVar88 .= '

	<li class="navTab uix_offCanvas_trigger PopupClosed" id="' . (($__compilerVar87) ? ('uix_paneTriggerRight') : ('uix_paneTriggerLeft')) . '">
		<a class="navLink" href="#">';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_showPhrases'))
{
$__compilerVar88 .= '
			';
if (!$__compilerVar87)
{
$__compilerVar88 .= '<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i> ' . 'Menu';
}
$__compilerVar88 .= '
			';
if ($__compilerVar87)
{
$__compilerVar88 .= 'Menu' . ' <i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerRight"></i>';
}
$__compilerVar88 .= '
		';
}
else
{
$__compilerVar88 .= '
			<i class="uix_icon uix_icon-navTrigger uix_icon-navTriggerLeft"></i>
		';
}
$__compilerVar88 .= '</a>
	</li>

';
}
$__compilerVar61 .= $__compilerVar88;
unset($__compilerVar87, $__compilerVar88);
}
$__compilerVar61 .= '
	
									';
if ($uix_searchPosition == 2)
{
$__compilerVar61 .= '
										';
$__compilerVar89 = '';
if ($canSearch)
{
$__compilerVar89 .= '

		<li class="navTab uix_searchTab">
		
			';
$__compilerVar90 = '';
$__compilerVar90 .= '
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
$__compilerVar90 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar91 = '';
$__compilerVar91 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar91 .= '
		';
$__compilerVar92 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar92 .= '

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
$__compilerVar91 .= $__compilerVar92;
unset($__compilerVar92);
$__compilerVar91 .= '
	';
}
$__compilerVar91 .= '
	
	
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
$__compilerVar91 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar91 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar91 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar91 .= '
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
$__compilerVar91 .= '
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
$__compilerVar91 .= '
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
$__compilerVar90 .= $this->callTemplateHook('quick_search', $__compilerVar91, array());
unset($__compilerVar91);
$__compilerVar90 .= '

</div>';
$__compilerVar89 .= $__compilerVar90;
unset($__compilerVar90);
$__compilerVar89 .= '
		</li>
	
';
}
$__compilerVar61 .= $__compilerVar89;
unset($__compilerVar89);
$__compilerVar61 .= '
									';
}
$__compilerVar61 .= '
								
								';
if (trim($__compilerVar61) !== '')
{
$__output .= '
								
								
								<ul class="navRight visitorTabs">
								
								' . $__compilerVar61 . '
								
								</ul>
								
							';
}
unset($__compilerVar61);
$__output .= '
							
							';
if ($uix_searchPosition == 2)
{
$__output .= '
								';
$__compilerVar93 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar93 .= '

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
$__output .= $__compilerVar93;
unset($__compilerVar93);
$__output .= '
							';
}
$__output .= '
									
								
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__output .= '</div>';
}
$__output .= '
					</div>
	
				<span class="helper"></span>
					
				</nav>
			</div>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__output .= '</div>';
}
$__output .= '
		</div>
	</div>
</div>';
