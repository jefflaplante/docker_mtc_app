<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'node_list');
$__output .= '
';
$this->addRequiredExternal('css', 'node_category');
$__output .= '

<li class="node category level_' . htmlspecialchars($level, ENT_QUOTES, 'UTF-8') . ' node_' . htmlspecialchars($category['node_id'], ENT_QUOTES, 'UTF-8') . '" id="' . XenForo_Template_Helper_Core::callHelper('linktitle', array(
'0' => $category['node_id'],
'1' => $category['title'],
'2' => '1'
)) . '">

	<div class="nodeInfo categoryNodeInfo categoryStrip ' . (($uix_nodeClasses[$category['node_id']]) ? (htmlspecialchars($uix_nodeClasses[$category['node_id']], ENT_QUOTES, 'UTF-8')) : ('')) . '">
	
		<div class="categoryText">
			<h3 class="nodeTitle">
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeIcons_categoryStrip'))
{
$__output .= '
				';
$__compilerVar1 = '';
$__compilerVar1 .= htmlspecialchars($category['hasNew'], ENT_QUOTES, 'UTF-8');
$__compilerVar2 = '';
$__compilerVar2 .= 'category';
$__compilerVar3 = '';
$__compilerVar3 .= htmlspecialchars($category['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar4 = '';
$__compilerVar4 .= 'categoryStrip';
$__compilerVar5 = '';
$__compilerVar5 .= '

';
if (!$__compilerVar4)
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
	<span class="' . htmlspecialchars($__compilerVar4, ENT_QUOTES, 'UTF-8') . 'Icon ' . (($outputIcon) ? (' hasGlyph') : ('')) . '" title="' . (($__compilerVar1) ? ('Unread messages') : ('')) . '"><i class="' . htmlspecialchars($outputIcon, ENT_QUOTES, 'UTF-8') . '"></i></span>
';
}
else
{
$__compilerVar5 .= '
	' . $nonGlyphIcon . '
';
}
$__output .= $__compilerVar5;
unset($__compilerVar1, $__compilerVar2, $__compilerVar3, $__compilerVar4, $__compilerVar5);
$__output .= '
				';
}
$__output .= '
				<a href="' . XenForo_Template_Helper_Core::link('categories', $category, array()) . '" data-description="' . ((XenForo_Template_Helper_Core::styleProperty('uix_categoryStrip_descriptionTooltips')) ? ('#nodeDescription-' . htmlspecialchars($category['node_id'], ENT_QUOTES, 'UTF-8')) : ('')) . '">' . htmlspecialchars($category['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</h3>
			';
if ($category['description'])
{
$__output .= '<blockquote class="nodeDescription ' . ((XenForo_Template_Helper_Core::styleProperty('uix_categoryStrip_descriptionTooltips')) ? ('nodeDescriptionTooltip') : ('')) . ' baseHtml" id="nodeDescription-' . htmlspecialchars($category['node_id'], ENT_QUOTES, 'UTF-8') . '">' . $category['description'] . '</blockquote>';
}
$__output .= '
		</div>
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_collapseNodes'))
{
$__output .= '<a href="#" class="uix_collapseNodes" title="' . 'Toggle Visibility' . '"><i class="uix_icon uix_icon-collapse"></i></a>';
}
$__output .= '
		
	</div>
	
	';
if ($renderedChildren)
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
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle'))
{
$__output .= '<div class="clear"></div>';
}
$__output .= '
	<span class="tlc"></span>
	<span class="trc"></span>
	<span class="blc"></span>
	<span class="brc"></span>
</li>';
