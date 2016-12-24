<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($selected)
{
$__output .= '



';
foreach ($firstChildNodes AS $node)
{
$__output .= '

';
if ($node['submenu'])
{
$__output .= '
<li class="Popup PopupControl PopupClosed">
	<a href="' . XenForo_Template_Helper_Core::link(htmlspecialchars($nodeTypes[$node['node_type_id']]['public_route_prefix'], ENT_QUOTES, 'UTF-8'), $node, array()) . '" rel="Menu" ' . (($node['nat_newwindow']) ? ('target="_blank"') : ('')) . '>' . htmlspecialchars($node['title'], ENT_QUOTES, 'UTF-8') . '</a>
	<div class="Menu JsOnly tabMenu">
		<ul class="secondaryContent blockLinksList">
			';
foreach ($node['submenu'] AS $subNode)
{
$__output .= '
			';
$depth = '';
$depth .= (($subNode['level'] - 2));
$__output .= '
			<li class="natMenuLevel' . htmlspecialchars($depth, ENT_QUOTES, 'UTF-8') . '">
				';
if ($nodeTypes[$subNode['node_type_id']]['public_route_prefix'])
{
$__output .= '
					<a href="' . XenForo_Template_Helper_Core::link(htmlspecialchars($nodeTypes[$subNode['node_type_id']]['public_route_prefix'], ENT_QUOTES, 'UTF-8'), $subNode, array()) . '" ' . (($subNode['nat_newwindow']) ? ('target="_blank"') : ('')) . '>' . htmlspecialchars($subNode['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__output .= '
			</li>
			';
}
$__output .= '
		</ul>
	</div>
</li>
';
}
else if ($node['level'] == 1)
{
$__output .= '
<li>
	';
if ($nodeTypes[$node['node_type_id']]['public_route_prefix'])
{
$__output .= '
		<a href="' . XenForo_Template_Helper_Core::link(htmlspecialchars($nodeTypes[$node['node_type_id']]['public_route_prefix'], ENT_QUOTES, 'UTF-8'), $node, array()) . '" ' . (($node['nat_newwindow']) ? ('target="_blank"') : ('')) . '>' . htmlspecialchars($node['title'], ENT_QUOTES, 'UTF-8') . '</a>
	';
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
else if ($nodeTab['nat_popup_columns'])
{
$__output .= '



';
foreach ($firstChildNodes AS $node)
{
$__output .= '

';
if ($node['submenu'])
{
$__output .= '
';
if ($beyondFirst)
{
$__output .= '
	</ul>
	<ul class="secondaryContent blockLinksList">
';
}
$__output .= '
';
$depth = '';
$depth .= (($node['level'] - 1));
$__output .= '
<li class="natMenuLevel' . htmlspecialchars($depth, ENT_QUOTES, 'UTF-8') . '">
	';
if ($nodeTypes[$node['node_type_id']]['public_route_prefix'])
{
$__output .= '
		<a href="' . XenForo_Template_Helper_Core::link(htmlspecialchars($nodeTypes[$node['node_type_id']]['public_route_prefix'], ENT_QUOTES, 'UTF-8'), $node, array()) . '" ' . (($node['nat_newwindow']) ? ('target="_blank"') : ('')) . '>' . htmlspecialchars($node['title'], ENT_QUOTES, 'UTF-8') . '</a>
	';
}
$__output .= '
</li>
';
foreach ($node['submenu'] AS $subNode)
{
$__output .= '
';
$depth = '';
$depth .= (($subNode['level'] - 1));
$__output .= '
<li class="natMenuLevel' . htmlspecialchars($depth, ENT_QUOTES, 'UTF-8') . '">
	';
if ($nodeTypes[$subNode['node_type_id']]['public_route_prefix'])
{
$__output .= '
		<a href="' . XenForo_Template_Helper_Core::link(htmlspecialchars($nodeTypes[$subNode['node_type_id']]['public_route_prefix'], ENT_QUOTES, 'UTF-8'), $subNode, array()) . '" ' . (($subNode['nat_newwindow']) ? ('target="_blank"') : ('')) . '>' . htmlspecialchars($subNode['title'], ENT_QUOTES, 'UTF-8') . '</a>
	';
}
$__output .= '
</li>
';
}
$__output .= '
';
$beyondFirst = '';
$beyondFirst .= '1';
$__output .= '
';
}
else if ($node['level'] == 1)
{
$__output .= '
';
if ($beyondFirst)
{
$__output .= '
	</ul>
	<ul class="secondaryContent blockLinksList">
';
}
$__output .= '
';
$depth = '';
$depth .= (($node['level'] - 1));
$__output .= '
<li class="natMenuLevel' . htmlspecialchars($depth, ENT_QUOTES, 'UTF-8') . '">
	';
if ($nodeTypes[$node['node_type_id']]['public_route_prefix'])
{
$__output .= '
		<a href="' . XenForo_Template_Helper_Core::link(htmlspecialchars($nodeTypes[$node['node_type_id']]['public_route_prefix'], ENT_QUOTES, 'UTF-8'), $node, array()) . '" ' . (($node['nat_newwindow']) ? ('target="_blank"') : ('')) . '>' . htmlspecialchars($node['title'], ENT_QUOTES, 'UTF-8') . '</a>
	';
}
$__output .= '
</li>
';
$beyondFirst = '';
$beyondFirst .= '1';
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



';
foreach ($firstChildNodes AS $node)
{
$__output .= '
';
$depth = '';
$depth .= (($node['level'] - 1));
$__output .= '
<li class="natMenuLevel' . htmlspecialchars($depth, ENT_QUOTES, 'UTF-8') . '">
	';
if ($nodeTypes[$node['node_type_id']]['public_route_prefix'])
{
$__output .= '
		<a href="' . XenForo_Template_Helper_Core::link(htmlspecialchars($nodeTypes[$node['node_type_id']]['public_route_prefix'], ENT_QUOTES, 'UTF-8'), $node, array()) . '" ' . (($node['nat_newwindow']) ? ('target="_blank"') : ('')) . '>' . htmlspecialchars($node['title'], ENT_QUOTES, 'UTF-8') . '</a>
	';
}
$__output .= '
</li>
';
}
$__output .= '



';
}
