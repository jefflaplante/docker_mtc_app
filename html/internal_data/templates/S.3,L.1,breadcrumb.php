<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '

<nav>

       ';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_enable'))
{
$__output .= '
       ';
if ($contentTemplate != ('forum_list'))
{
$__output .= '
       ';
}
else
{
$__output .= '
       ';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_mode_breadcrumb'))
{
$__output .= '
       ';
}
else
{
$__output .= '
       <div class="sidebar_mini Tooltip" title="Sidebar"><a style="text-decoration:none;" href="#"></a></div>
       ';
}
$__output .= '
       ';
}
$__output .= '
       ';
}
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
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><!--' . 'Jump to' . '...--></a>
		
		';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_enable'))
{
$__output .= '
                ';
if ($contentTemplate != ('forum_list'))
{
$__output .= '
                ';
}
else
{
$__output .= '
                ';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_mode_breadcrumb'))
{
$__output .= '
                <div class="sidebar_mini Tooltip breadmode" title="Sidebar"><a style="text-decoration:none;" href="#"></a></div>
                ';
}
$__output .= '
                ';
}
$__output .= '
                ';
}
$__output .= '
			
		<div class="boardTitle"><strong>' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '</strong></div>
		
		<span class="crumbs">
			';
if ($showHomeLink)
{
$__output .= '
				<span class="crust homeCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>
					';
if (XenForo_Template_Helper_Core::styleProperty('xc_replace_home_text'))
{
$__output .= '
                                        <i class="fa fa-home replace_home_text" style="vertical-align: middle;"></i>
                                        ';
}
else
{
$__output .= '
                                        ' . 'Home' . '
                                        ';
}
$__output .= '
					</span></a>
					<span class="arrow"><span></span></span>
				</span>
			';
}
else if ($selectedTabId != $homeTabId)
{
$__output .= '
				<span class="crust homeCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>' . htmlspecialchars($homeTab['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
					<span class="arrow"><span></span></span>
				</span>
			';
}
$__output .= '
			
			';
if ($selectedTab)
{
$__output .= '
				<span class="crust selectedTabCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($selectedTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>' . htmlspecialchars($selectedTab['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
					<span class="arrow"><span>&gt;</span></span>
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
						<span class="arrow"><span>&gt;</span></span>
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
