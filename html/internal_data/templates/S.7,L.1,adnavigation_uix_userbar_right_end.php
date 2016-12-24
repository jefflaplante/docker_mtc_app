<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '		<!-- extra tabs: uix_userbar_right_end -->
		';
if ($extraTabs['uix_userbar_right_end'])
{
$__output .= '
		';
foreach ($extraTabs['uix_userbar_right_end'] AS $extraTabId => $extraTab)
{
$__output .= '
			';
if ($extraTab['linksTemplate'])
{
$__output .= '
				<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed')) . '">
			
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" target="' . htmlspecialchars($extraTab['target'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
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
if ($extraTab['icon'])
{
$__output .= '<i class="uix_icon ' . htmlspecialchars($extraTab['icon'], ENT_QUOTES, 'UTF-8') . '"></i> ';
}
$__output .= htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__output .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__output .= '</a>
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
				
				<div class="' . (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu')) . (($extraTab['mega_menu']) ? (' MegaMenu') : ('')) . ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
					<div class="primaryContent menuHeader">
						<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
						<div class="muted">' . (($extraTab['description']) ? (htmlspecialchars($extraTab['description'], ENT_QUOTES, 'UTF-8')) : ('Quick Links')) . '</div>
					</div>
					' . $extraTab['linksTemplate'] . '
				</div>
			</li>
			';
}
else
{
$__output .= '
				<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
					<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" target="' . htmlspecialchars($extraTab['target'], ENT_QUOTES, 'UTF-8') . '" class="navLink';
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
if ($extraTab['icon'])
{
$__output .= '<i class="uix_icon ' . htmlspecialchars($extraTab['icon'], ENT_QUOTES, 'UTF-8') . '"></i> ';
}
$__output .= htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__output .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__output .= '</a>
					';
if ($extraTab['selected'])
{
$__output .= '<div class="tabLinks"></div>';
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
