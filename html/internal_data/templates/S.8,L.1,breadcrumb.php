<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '

<nav>

	';
$__compilerVar1 = '';
$__compilerVar1 .= '	
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar') && $sidebar && $uix_canCollapseSidebar && $visitor['user_id'] > 0)
{
$__compilerVar1 .= '
				';
if ($visitor['uix_sidebar'] > $uix_currentTimestamp)
{
$__compilerVar1 .= '
					<li class="uix_sidebar_collapse toggleList_item uix_sidebar_collapsed">
				';
}
else
{
$__compilerVar1 .= '
					<li class="uix_sidebar_collapse toggleList_item">
				';
}
$__compilerVar1 .= '
					<a href="#" title="' . 'Toggle Sidebar' . '" class="Tooltip" ' . ((XenForo_Template_Helper_Core::styleProperty('uix_sidebarLocation')) ? ('') : ('data-tipclass="flipped"')) . '>
						<i class="uix_icon uix_icon-sidebarCollapse"></i>
						';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapsibleSidebar_usePhrases'))
{
$__compilerVar1 .= ' 
							<span class="uix_sidebar_collapse_phrase_close">
								' . 'Close Sidebar' . '
							</span>
							<span class="uix_sidebar_collapse_phrase_open">
								' . 'Open Sidebar' . '
							</span>
						';
}
$__compilerVar1 .= '
					</a>
				</li>
			';
}
$__compilerVar1 .= '
			';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 4)
{
$__compilerVar1 .= '<li class="toggleList_item toggleList_item_search">';
$__compilerVar2 = '';
$__compilerVar2 .= '
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
$__compilerVar2 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar3 = '';
$__compilerVar3 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar3 .= '
		';
$__compilerVar4 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar4 .= '

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
$__compilerVar3 .= $__compilerVar4;
unset($__compilerVar4);
$__compilerVar3 .= '
	';
}
$__compilerVar3 .= '
	
	
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
$__compilerVar3 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar3 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar3 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar3 .= '
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
$__compilerVar3 .= '
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
$__compilerVar3 .= '
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
$__compilerVar2 .= $this->callTemplateHook('quick_search', $__compilerVar3, array());
unset($__compilerVar3);
$__compilerVar2 .= '

</div>';
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
$__compilerVar1 .= '</li>';
}
$__compilerVar1 .= '
		';
if (trim($__compilerVar1) !== '')
{
$__output .= '
	<ul class="uix_breadCrumb_toggleList">
		' . $__compilerVar1 . '
	</ul>
	';
}
unset($__compilerVar1);
$__output .= '
	
	';
if (!$quickNavSelected AND $navigation)
{
$__output .= '
		';
foreach ($navigation AS $breadcrumb)
{
$__output .= '
			';
if ($breadcrumb['node_id'])
{
$__output .= '
				';
$quickNavSelected = '';
$quickNavSelected .= 'node-' . htmlspecialchars($breadcrumb['node_id'], ENT_QUOTES, 'UTF-8');
$__output .= '
			';
}
$__output .= '
		';
}
$__output .= '
	';
}
$__output .= '

	<fieldset class="breadcrumb">
		<a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><!--' . 'Jump to' . '...--></a>
			
		<div class="boardTitle"><strong>' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '</strong></div>
		
		<span class="crumbs">
			';
if ($showHomeLink)
{
$__output .= '
				<span class="crust homeCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon'))
{
$__output .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__output .= 'Home';
}
$__output .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span></span>')) . '</span>
				</span>
			';
}
else if ($selectedTabId != $homeTabId)
{
$__output .= '
				<span class="crust homeCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon'))
{
$__output .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__output .= htmlspecialchars($homeTab['title'], ENT_QUOTES, 'UTF-8');
}
$__output .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span></span>')) . '</span>
				</span>
			';
}
$__output .= '
			
			';
if ($selectedTab)
{
$__output .= '
				<span class="crust selectedTabCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($selectedTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbHomeIcon') && $selectedTabId == $homeTabId && !$showHomeLink)
{
$__output .= '<i class="uix_icon uix_icon-home"></i>';
}
else
{
$__output .= htmlspecialchars($selectedTab['title'], ENT_QUOTES, 'UTF-8');
}
$__output .= '</span></a>
					<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span>&gt;</span>')) . '</span>
				</span>
			';
}
$__output .= '
			
			';
if ($navigation)
{
$__output .= '
				';
$i = 0;
$count = count($navigation);
foreach ($navigation AS $breadcrumb)
{
$i++;
$__output .= '
					<span class="crust"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
						<a href="' . $breadcrumb['href'] . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>' . $breadcrumb['value'] . '</span></a>
						<span class="arrow">' . ((XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators')) ? ('<i class="uix_icon uix_icon-breadcrumbSeparator"></i>') : ('<span>&gt;</span>')) . '</span>
					</span>
				';
}
$__output .= '
			';
}
$__output .= '
		</span>
	</fieldset>
</nav>';
