<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'node_list');
$__output .= '
';
$this->addRequiredExternal('css', 'node_page');
$__output .= '

<li class="node page level_' . htmlspecialchars($level, ENT_QUOTES, 'UTF-8') . ' ' . (($level == 1 AND !$renderedChildren) ? ('groupNoChildren') : ('')) . ' node_' . htmlspecialchars($page['node_id'], ENT_QUOTES, 'UTF-8') . '">

	';
if ($level == 1)
{
$__output .= '<div class="categoryStrip"></div>';
}
$__output .= '

	<div class="nodeInfo pageNodeInfo ' . (($uix_nodeClasses[$page['node_id']]) ? (htmlspecialchars($uix_nodeClasses[$page['node_id']], ENT_QUOTES, 'UTF-8')) : ('')) . '">
	
		';
$__compilerVar1 = '';
$__compilerVar1 .= '0';
$__compilerVar2 = '';
$__compilerVar2 .= 'page';
$__compilerVar3 = '';
$__compilerVar3 .= htmlspecialchars($page['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar4 = '';
$__compilerVar4 .= '<span class="nodeIcon"></span>';
$__compilerVar5 = '';
$__compilerVar5 .= '

';
if (!$location)
{
$__compilerVar5 .= '
	';
$location = '';
$location .= 'node';
$__compilerVar5 .= '
';
}
$__compilerVar5 .= '

';
if (!$__compilerVar1 && $__compilerVar2 == ('category'))
{
$__compilerVar5 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultReadCategoryNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else if ($__compilerVar1 == ('1') && $__compilerVar2 == ('category'))
{
$__compilerVar5 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultUnreadCategoryNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else if (!$__compilerVar1 && $__compilerVar2 == ('forum'))
{
$__compilerVar5 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultReadForumNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else if ($__compilerVar1 == ('1') && $__compilerVar2 == ('forum'))
{
$__compilerVar5 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultUnreadForumNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else if ($__compilerVar2 == ('link'))
{
$__compilerVar5 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultLinkNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else if ($__compilerVar2 == ('page'))
{
$__compilerVar5 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultPageNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else
{
$__compilerVar5 .= '
	';
$globalIcon = '';
$globalIcon .= '0';
$__compilerVar5 .= '
';
}
$__compilerVar5 .= '




';
if (!$__compilerVar1 && $__compilerVar2 == ('category'))
{
$__compilerVar5 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultReadCategoryNodeIcon');
$__compilerVar5 .= '
';
}
else if ($__compilerVar1 == ('1') && $__compilerVar2 == ('category'))
{
$__compilerVar5 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultUnreadCategoryNodeIcon');
$__compilerVar5 .= '
';
}
else if (!$__compilerVar1 && $__compilerVar2 == ('forum'))
{
$__compilerVar5 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultReadForumNodeIcon');
$__compilerVar5 .= '
';
}
else if ($__compilerVar1 == ('1') && $__compilerVar2 == ('forum'))
{
$__compilerVar5 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultUnreadForumNodeIcon');
$__compilerVar5 .= '
';
}
else if ($__compilerVar2 == ('link'))
{
$__compilerVar5 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultLinkNodeIcon');
$__compilerVar5 .= '
';
}
else if ($__compilerVar2 == ('page'))
{
$__compilerVar5 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultPageNodeIcon');
$__compilerVar5 .= '
';
}
else
{
$__compilerVar5 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= '0';
$__compilerVar5 .= '
';
}
$__compilerVar5 .= '




';
if (!$__compilerVar1 && $__compilerVar2 == ('category'))
{
$__compilerVar5 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar3]['category_read'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else if ($__compilerVar1 == ('1') && $__compilerVar2 == ('category'))
{
$__compilerVar5 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar3]['category_unread'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else if (!$__compilerVar1 && $__compilerVar2 == ('forum'))
{
$__compilerVar5 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar3]['forum_read'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else if ($__compilerVar1 == ('1') && $__compilerVar2 == ('forum'))
{
$__compilerVar5 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar3]['forum_unread'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else if ($__compilerVar2 == ('link'))
{
$__compilerVar5 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar3]['link_node'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else if ($__compilerVar2 == ('page'))
{
$__compilerVar5 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar3]['page_node'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else
{
$__compilerVar5 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= '0';
$__compilerVar5 .= '
';
}
$__compilerVar5 .= '




';
if ($specificNodeIcon)
{
$__compilerVar5 .= '
	';
$outputIcon = '';
$outputIcon .= htmlspecialchars($specificNodeIcon, ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else if ($stylePropertyIcon)
{
$__compilerVar5 .= '
	';
$outputIcon = '';
$outputIcon .= htmlspecialchars($stylePropertyIcon, ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else if ($globalIcon)
{
$__compilerVar5 .= '
	';
$outputIcon = '';
$outputIcon .= htmlspecialchars($globalIcon, ENT_QUOTES, 'UTF-8');
$__compilerVar5 .= '
';
}
else
{
$__compilerVar5 .= '
	';
$outputIcon = '';
$outputIcon .= '0';
$__compilerVar5 .= '
';
}
$__compilerVar5 .= '


';
if ($outputIcon && XenForo_Template_Helper_Core::styleProperty('uix_nodeIcons'))
{
$__compilerVar5 .= '
	<span class="' . htmlspecialchars($location, ENT_QUOTES, 'UTF-8') . 'Icon ' . (($outputIcon) ? (' hasGlyph') : ('')) . '" title="' . (($__compilerVar1) ? ('Unread messages') : ('')) . '"><i class="' . htmlspecialchars($outputIcon, ENT_QUOTES, 'UTF-8') . '"></i></span>
';
}
else
{
$__compilerVar5 .= '
	' . $__compilerVar4 . '
';
}
$__output .= $__compilerVar5;
unset($__compilerVar1, $__compilerVar2, $__compilerVar3, $__compilerVar4, $__compilerVar5);
$__output .= '

		<div class="nodeText">
			<h3 class="nodeTitle"><a href="' . XenForo_Template_Helper_Core::link('pages', $page, array()) . '">' . htmlspecialchars($page['title'], ENT_QUOTES, 'UTF-8') . '</a></h3>
			';
if ($page['description'])
{
$__output .= '
				<blockquote class="nodeDescription baseHtml muted" id="nodeDescription-' . htmlspecialchars($page['node_id'], ENT_QUOTES, 'UTF-8') . '">' . $page['description'] . '</blockquote>
			';
}
$__output .= '
		</div>
	</div>
	
	';
if ($renderedChildren AND $level == 1)
{
$__output .= '		
		<ol class="nodeList">
			';
foreach ($renderedChildren AS $child)
{
$__output .= $child;
}
$__output .= '
		</ol>
	';
}
$__output .= '
	
</li>';
