<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<div class="uix_sidePane_content uix_offCanvasNavigation">
<ul>
	<!-- home -->
	';
if ($showHomeLink)
{
$__output .= '
		<li class="navTab home"><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="navLink">' . 'Home' . '</a></li>
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
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__output .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__output .= '</a>
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				' . $extraTab['linksTemplate'] . '
			</div>
		</li>
		';
}
else
{
$__output .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</a>
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
if ($tabs['forums'] AND ($xenOptions['adnavigation_showForumsLink'] OR !$adnavigation))
{
$__output .= '
		<li class="navTab forums ' . (($tabs['forums']['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				<ul class="blockLinksList">
				';
$__compilerVar1 = '';
$__compilerVar1 .= '
					';
if ($visitor['user_id'])
{
$__compilerVar1 .= '<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>';
}
$__compilerVar1 .= '
					';
if ($canSearch)
{
$__compilerVar1 .= '<li><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Forums' . '</a></li>';
}
$__compilerVar1 .= '
					';
if ($visitor['user_id'])
{
$__compilerVar1 .= '
						<li><a href="' . XenForo_Template_Helper_Core::link('watched/forums', false, array()) . '">' . 'Watched Forums' . '</a></li>
						<li><a href="' . XenForo_Template_Helper_Core::link('watched/threads', false, array()) . '">' . 'Watched Threads' . '</a></li>
					';
}
$__compilerVar1 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '" rel="nofollow">' . (($visitor['user_id']) ? ('New Posts') : ('Recent Posts')) . '</a></li>
				';
$__output .= $this->callTemplateHook('navigation_tabs_forums', $__compilerVar1, array());
unset($__compilerVar1);
$__output .= '
				</ul>
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
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__output .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__output .= '</a>
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				' . $extraTab['linksTemplate'] . '
			</div>
		</li>
		';
}
else
{
$__output .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</a>
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
if ($tabs['members'] AND ($xenOptions['adnavigation_showMembersLink'] OR !$adnavigation))
{
$__output .= '
		<li class="navTab members ' . (($tabs['members']['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				<ul class="blockLinksList">
				';
$__compilerVar2 = '';
$__compilerVar2 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Notable Members' . '</a></li>
					';
if ($xenOptions['enableMemberList'])
{
$__compilerVar2 .= '<li><a href="' . XenForo_Template_Helper_Core::link('members/list', false, array()) . '">' . 'Registered Members' . '</a></li>';
}
$__compilerVar2 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Current Visitors' . '</a></li>
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar2 .= '<li><a href="' . XenForo_Template_Helper_Core::link('recent-activity', false, array()) . '">' . 'Recent Activity' . '</a></li>';
}
$__compilerVar2 .= '
				';
$__output .= $this->callTemplateHook('navigation_tabs_members', $__compilerVar2, array());
unset($__compilerVar2);
$__output .= '
				</ul>
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
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
		
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__output .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__output .= '</a>
			<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="subMenu"></a>
			
			<div class="subMenu">
				' . $extraTab['linksTemplate'] . '
			</div>
		</li>
		';
}
else
{
$__output .= '
			<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('')) . '">
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</a>
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
	
			

</ul>
</div>';
