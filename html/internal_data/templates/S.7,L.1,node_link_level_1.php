<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__compilerVar1 = '';
$this->addRequiredExternal('css', 'node_list');
$__compilerVar1 .= '
';
$this->addRequiredExternal('css', 'node_link');
$__compilerVar1 .= '

<li class="node link level_' . htmlspecialchars($level, ENT_QUOTES, 'UTF-8') . ' ' . (($level == 1 AND !$renderedChildren) ? ('groupNoChildren') : ('')) . ' node_' . htmlspecialchars($link['node_id'], ENT_QUOTES, 'UTF-8') . '">

	';
if ($level == 1)
{
$__compilerVar1 .= '<div class="categoryStrip"></div>';
}
$__compilerVar1 .= '
	
	<div class="nodeInfo linkNodeInfo ' . (($uix_nodeClasses[$link['node_id']]) ? (htmlspecialchars($uix_nodeClasses[$link['node_id']], ENT_QUOTES, 'UTF-8')) : ('')) . '">
	
		';
$__compilerVar2 = '';
$__compilerVar2 .= '0';
$__compilerVar3 = '';
$__compilerVar3 .= 'link';
$__compilerVar4 = '';
$__compilerVar4 .= htmlspecialchars($link['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 = '';
$__compilerVar5 .= '<span class="nodeIcon"></span>';
$__compilerVar6 = '';
$__compilerVar6 .= '

';
if (!$location)
{
$__compilerVar6 .= '
	';
$location = '';
$location .= 'node';
$__compilerVar6 .= '
';
}
$__compilerVar6 .= '

';
if (!$__compilerVar2 && $__compilerVar3 == ('category'))
{
$__compilerVar6 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultReadCategoryNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar2 == ('1') && $__compilerVar3 == ('category'))
{
$__compilerVar6 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultUnreadCategoryNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if (!$__compilerVar2 && $__compilerVar3 == ('forum'))
{
$__compilerVar6 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultReadForumNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar2 == ('1') && $__compilerVar3 == ('forum'))
{
$__compilerVar6 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultUnreadForumNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar3 == ('link'))
{
$__compilerVar6 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultLinkNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar3 == ('page'))
{
$__compilerVar6 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultPageNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else
{
$__compilerVar6 .= '
	';
$globalIcon = '';
$globalIcon .= '0';
$__compilerVar6 .= '
';
}
$__compilerVar6 .= '




';
if (!$__compilerVar2 && $__compilerVar3 == ('category'))
{
$__compilerVar6 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultReadCategoryNodeIcon');
$__compilerVar6 .= '
';
}
else if ($__compilerVar2 == ('1') && $__compilerVar3 == ('category'))
{
$__compilerVar6 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultUnreadCategoryNodeIcon');
$__compilerVar6 .= '
';
}
else if (!$__compilerVar2 && $__compilerVar3 == ('forum'))
{
$__compilerVar6 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultReadForumNodeIcon');
$__compilerVar6 .= '
';
}
else if ($__compilerVar2 == ('1') && $__compilerVar3 == ('forum'))
{
$__compilerVar6 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultUnreadForumNodeIcon');
$__compilerVar6 .= '
';
}
else if ($__compilerVar3 == ('link'))
{
$__compilerVar6 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultLinkNodeIcon');
$__compilerVar6 .= '
';
}
else if ($__compilerVar3 == ('page'))
{
$__compilerVar6 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultPageNodeIcon');
$__compilerVar6 .= '
';
}
else
{
$__compilerVar6 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= '0';
$__compilerVar6 .= '
';
}
$__compilerVar6 .= '




';
if (!$__compilerVar2 && $__compilerVar3 == ('category'))
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar4]['category_read'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar2 == ('1') && $__compilerVar3 == ('category'))
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar4]['category_unread'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if (!$__compilerVar2 && $__compilerVar3 == ('forum'))
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar4]['forum_read'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar2 == ('1') && $__compilerVar3 == ('forum'))
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar4]['forum_unread'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar3 == ('link'))
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar4]['link_node'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar3 == ('page'))
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar4]['page_node'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= '0';
$__compilerVar6 .= '
';
}
$__compilerVar6 .= '




';
if ($specificNodeIcon)
{
$__compilerVar6 .= '
	';
$outputIcon = '';
$outputIcon .= htmlspecialchars($specificNodeIcon, ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($stylePropertyIcon)
{
$__compilerVar6 .= '
	';
$outputIcon = '';
$outputIcon .= htmlspecialchars($stylePropertyIcon, ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($globalIcon)
{
$__compilerVar6 .= '
	';
$outputIcon = '';
$outputIcon .= htmlspecialchars($globalIcon, ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else
{
$__compilerVar6 .= '
	';
$outputIcon = '';
$outputIcon .= '0';
$__compilerVar6 .= '
';
}
$__compilerVar6 .= '


';
if ($outputIcon && XenForo_Template_Helper_Core::styleProperty('uix_nodeIcons'))
{
$__compilerVar6 .= '
	<span class="' . htmlspecialchars($location, ENT_QUOTES, 'UTF-8') . 'Icon ' . (($outputIcon) ? (' hasGlyph') : ('')) . '" title="' . (($__compilerVar2) ? ('Unread messages') : ('')) . '"><i class="' . htmlspecialchars($outputIcon, ENT_QUOTES, 'UTF-8') . '"></i></span>
';
}
else
{
$__compilerVar6 .= '
	' . $__compilerVar5 . '
';
}
$__compilerVar1 .= $__compilerVar6;
unset($__compilerVar2, $__compilerVar3, $__compilerVar4, $__compilerVar5, $__compilerVar6);
$__compilerVar1 .= '

		<div class="nodeText">
			<h3 class="nodeTitle"><a href="' . XenForo_Template_Helper_Core::link('link-forums', $link, array()) . '" data-description-x="#nodeDescription-' . htmlspecialchars($link['node_id'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($link['title'], ENT_QUOTES, 'UTF-8') . '</a></h3>
			';
if ($link['description'])
{
$__compilerVar1 .= '<blockquote class="nodeDescription muted baseHtml" id="nodeDescription-' . htmlspecialchars($link['node_id'], ENT_QUOTES, 'UTF-8') . '">' . $link['description'] . '</blockquote>';
}
$__compilerVar1 .= '
		</div>		
	</div>
	
	';
if ($renderedChildren AND $level == 1)
{
$__compilerVar1 .= '		
		<ol class="nodeList">
			';
foreach ($renderedChildren AS $child)
{
$__compilerVar1 .= $child;
}
$__compilerVar1 .= '
		</ol>
	';
}
$__compilerVar1 .= '
</li>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
