<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '

';
if (!$location)
{
$__output .= '
	';
$location = '';
$location .= 'node';
$__output .= '
';
}
$__output .= '

';
if (!$state && $type == ('category'))
{
$__output .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultReadCategoryNodeIcon'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else if ($state == ('1') && $type == ('category'))
{
$__output .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultUnreadCategoryNodeIcon'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else if (!$state && $type == ('forum'))
{
$__output .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultReadForumNodeIcon'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else if ($state == ('1') && $type == ('forum'))
{
$__output .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultUnreadForumNodeIcon'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else if ($type == ('link'))
{
$__output .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultLinkNodeIcon'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else if ($type == ('page'))
{
$__output .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultPageNodeIcon'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else
{
$__output .= '
	';
$globalIcon = '';
$globalIcon .= '0';
$__output .= '
';
}
$__output .= '




';
if (!$state && $type == ('category'))
{
$__output .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultReadCategoryNodeIcon');
$__output .= '
';
}
else if ($state == ('1') && $type == ('category'))
{
$__output .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultUnreadCategoryNodeIcon');
$__output .= '
';
}
else if (!$state && $type == ('forum'))
{
$__output .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultReadForumNodeIcon');
$__output .= '
';
}
else if ($state == ('1') && $type == ('forum'))
{
$__output .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultUnreadForumNodeIcon');
$__output .= '
';
}
else if ($type == ('link'))
{
$__output .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultLinkNodeIcon');
$__output .= '
';
}
else if ($type == ('page'))
{
$__output .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultPageNodeIcon');
$__output .= '
';
}
else
{
$__output .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= '0';
$__output .= '
';
}
$__output .= '




';
if (!$state && $type == ('category'))
{
$__output .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$nodeId]['category_read'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else if ($state == ('1') && $type == ('category'))
{
$__output .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$nodeId]['category_unread'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else if (!$state && $type == ('forum'))
{
$__output .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$nodeId]['forum_read'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else if ($state == ('1') && $type == ('forum'))
{
$__output .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$nodeId]['forum_unread'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else if ($type == ('link'))
{
$__output .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$nodeId]['link_node'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else if ($type == ('page'))
{
$__output .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$nodeId]['page_node'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else
{
$__output .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= '0';
$__output .= '
';
}
$__output .= '




';
if ($specificNodeIcon)
{
$__output .= '
	';
$outputIcon = '';
$outputIcon .= htmlspecialchars($specificNodeIcon, ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else if ($stylePropertyIcon)
{
$__output .= '
	';
$outputIcon = '';
$outputIcon .= htmlspecialchars($stylePropertyIcon, ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else if ($globalIcon)
{
$__output .= '
	';
$outputIcon = '';
$outputIcon .= htmlspecialchars($globalIcon, ENT_QUOTES, 'UTF-8');
$__output .= '
';
}
else
{
$__output .= '
	';
$outputIcon = '';
$outputIcon .= '0';
$__output .= '
';
}
$__output .= '


';
if ($outputIcon && XenForo_Template_Helper_Core::styleProperty('uix_nodeIcons'))
{
$__output .= '
	<span class="' . htmlspecialchars($location, ENT_QUOTES, 'UTF-8') . 'Icon ' . (($outputIcon) ? (' hasGlyph') : ('')) . '" title="' . (($state) ? ('Unread messages') : ('')) . '"><i class="' . htmlspecialchars($outputIcon, ENT_QUOTES, 'UTF-8') . '"></i></span>
';
}
else
{
$__output .= '
	' . $nonGlyphIcon . '
';
}
