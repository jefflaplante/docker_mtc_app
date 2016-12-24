<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'node_list');
$__output .= '
';
$this->addRequiredExternal('css', 'node_category');
$__output .= '

<li class="node category_forum level_' . htmlspecialchars($level, ENT_QUOTES, 'UTF-8') . ' node_' . htmlspecialchars($category['node_id'], ENT_QUOTES, 'UTF-8') . ' ' . (($uix_nodeClasses[$category['node_id']]) ? (htmlspecialchars($uix_nodeClasses[$category['node_id']], ENT_QUOTES, 'UTF-8')) : ('')) . '">

	<div class="nodeInfo categoryForumNodeInfo ' . (($category['hasNew']) ? ('unread') : ('')) . '">

		';
$__compilerVar1 = '';
$__compilerVar1 .= htmlspecialchars($category['hasNew'], ENT_QUOTES, 'UTF-8');
$__compilerVar2 = '';
$__compilerVar2 .= 'category';
$__compilerVar3 = '';
$__compilerVar3 .= htmlspecialchars($category['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar4 = '';
$__compilerVar4 .= '<span class="nodeIcon" title="' . (($category['hasNew']) ? ('Unread messages') : ('')) . '"></span>';
$__compilerVar5 = '';
$__compilerVar5 .= 'node';
$__compilerVar6 = '';
$__compilerVar6 .= '

';
if (!$__compilerVar5)
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
if (!$__compilerVar1 && $__compilerVar2 == ('category'))
{
$__compilerVar6 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultReadCategoryNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar1 == ('1') && $__compilerVar2 == ('category'))
{
$__compilerVar6 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultUnreadCategoryNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if (!$__compilerVar1 && $__compilerVar2 == ('forum'))
{
$__compilerVar6 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultReadForumNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar1 == ('1') && $__compilerVar2 == ('forum'))
{
$__compilerVar6 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultUnreadForumNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar2 == ('link'))
{
$__compilerVar6 .= '
	';
$globalIcon = '';
$globalIcon .= htmlspecialchars($xenOptions['uix_defaultLinkNodeIcon'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar2 == ('page'))
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
if (!$__compilerVar1 && $__compilerVar2 == ('category'))
{
$__compilerVar6 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultReadCategoryNodeIcon');
$__compilerVar6 .= '
';
}
else if ($__compilerVar1 == ('1') && $__compilerVar2 == ('category'))
{
$__compilerVar6 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultUnreadCategoryNodeIcon');
$__compilerVar6 .= '
';
}
else if (!$__compilerVar1 && $__compilerVar2 == ('forum'))
{
$__compilerVar6 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultReadForumNodeIcon');
$__compilerVar6 .= '
';
}
else if ($__compilerVar1 == ('1') && $__compilerVar2 == ('forum'))
{
$__compilerVar6 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultUnreadForumNodeIcon');
$__compilerVar6 .= '
';
}
else if ($__compilerVar2 == ('link'))
{
$__compilerVar6 .= '
	';
$stylePropertyIcon = '';
$stylePropertyIcon .= XenForo_Template_Helper_Core::styleProperty('uix_defaultLinkNodeIcon');
$__compilerVar6 .= '
';
}
else if ($__compilerVar2 == ('page'))
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
if (!$__compilerVar1 && $__compilerVar2 == ('category'))
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar3]['category_read'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar1 == ('1') && $__compilerVar2 == ('category'))
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar3]['category_unread'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if (!$__compilerVar1 && $__compilerVar2 == ('forum'))
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar3]['forum_read'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar1 == ('1') && $__compilerVar2 == ('forum'))
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar3]['forum_unread'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar2 == ('link'))
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar3]['link_node'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
';
}
else if ($__compilerVar2 == ('page'))
{
$__compilerVar6 .= '
	';
$specificNodeIcon = '';
$specificNodeIcon .= htmlspecialchars($uix_nodeIcons[$__compilerVar3]['page_node'], ENT_QUOTES, 'UTF-8');
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
	<span class="' . htmlspecialchars($__compilerVar5, ENT_QUOTES, 'UTF-8') . 'Icon ' . (($outputIcon) ? (' hasGlyph') : ('')) . '" title="' . (($__compilerVar1) ? ('Unread messages') : ('')) . '"><i class="' . htmlspecialchars($outputIcon, ENT_QUOTES, 'UTF-8') . '"></i></span>
';
}
else
{
$__compilerVar6 .= '
	' . $__compilerVar4 . '
';
}
$__output .= $__compilerVar6;
unset($__compilerVar1, $__compilerVar2, $__compilerVar3, $__compilerVar4, $__compilerVar5, $__compilerVar6);
$__output .= '

		<div class="nodeText">
			<h3 class="nodeTitle"><a href="' . XenForo_Template_Helper_Core::link('categories', $category, array()) . '" data-description="' . ((XenForo_Template_Helper_Core::styleProperty('nodeListDescriptionTooltips')) ? ('#nodeDescription-' . htmlspecialchars($category['node_id'], ENT_QUOTES, 'UTF-8')) : ('')) . '">' . htmlspecialchars($category['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
if ($category['hasNew'] && XenForo_Template_Helper_Core::styleProperty('uix_newNodeMarker') && $visitor['user_id'])
{
$__output .= '<div class="uix_nodeTitle_status">' . 'New' . '</div>';
}
$__output .= '
			</h3>

			';
if ($category['description'] AND XenForo_Template_Helper_Core::styleProperty('nodeListDescriptions'))
{
$__output .= '
				<blockquote class="nodeDescription ' . ((XenForo_Template_Helper_Core::styleProperty('nodeListDescriptionTooltips')) ? ('nodeDescriptionTooltip') : ('')) . ' baseHtml" id="nodeDescription-' . htmlspecialchars($category['node_id'], ENT_QUOTES, 'UTF-8') . '">' . $category['description'] . '</blockquote>
			';
}
$__output .= '

			<div class="nodeStats pairsInline">
				<dl><dd>' . (($category['privateInfo']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($category['discussion_count'], '0'))) . '</dd><dt>';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStatsIcons'))
{
$__output .= '<i class="uix_icon uix_icon-statsDiscussions"></i>';
}
else
{
$__output .= 'Threads';
}
$__output .= '</dt></dl>
				<dl><dd>' . (($category['privateInfo']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($category['message_count'], '0'))) . '</dd><dt>';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStatsIcons'))
{
$__output .= '<i class="uix_icon uix_icon-statsMessages"></i>';
}
else
{
$__output .= 'Posts';
}
$__output .= '</dt></dl>
				';
if ($renderedChildren AND XenForo_Template_Helper_Core::styleProperty('nodeListSubForumPopup'))
{
$__output .= '
					<div class="Popup subForumsPopup">
						<a href="' . XenForo_Template_Helper_Core::link('categories', $category, array()) . '" rel="Menu" class="cloaked" data-closemenu="true"><span class="dt">';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStatsIcons'))
{
$__output .= '<i class="uix_icon uix_icon-statsSubforumPopup"></i>';
}
else
{
$__output .= 'Sub-Forums' . ':';
}
$__output .= '</span> ' . XenForo_Template_Helper_Core::numberFormat($category['childCount'], '0') . '</a>
						
						<div class="Menu JsOnly subForumsMenu">
							<div class="primaryContent menuHeader">
								<h3>' . htmlspecialchars($category['title'], ENT_QUOTES, 'UTF-8') . '</h3>
								<div class="muted">' . 'Sub-Forums' . '</div>
							</div>
							<ol class="secondaryContent blockLinksList">
							';
foreach ($renderedChildren AS $child)
{
$__output .= '
								' . $child . '
							';
}
$__output .= '
							</ol>
						</div>
					</div>
				';
}
$__output .= '
			</div>
			
			' . $nodeExtraHtml . '
		</div>

		';
if ($renderedChildren AND !XenForo_Template_Helper_Core::styleProperty('nodeListSubForumPopup'))
{
$__output .= '
			<ol class="subForumList">
			';
foreach ($renderedChildren AS $child)
{
$__output .= '
				' . $child . '
			';
}
$__output .= '
			</ol>
		';
}
$__output .= '

		<div class="nodeLastPost secondaryContent">
			';
if ($category['privateInfo'])
{
$__output .= '
				<span class="noMessages muted">(' . 'Private' . ')</span>
			';
}
else if ($category['lastPost']['date'])
{
$__output .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeLastPostAvatar') AND $category['uix_lastPostAvatar'])
{
$__output .= '
					' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($category['uix_lastPostAvatar'],(true),array(
'user' => '$category.uix_lastPostAvatar',
'size' => 's',
'img' => 'true'
),'')) . '
				';
}
$__output .= '
				<span class="lastThreadTitle"><span>' . 'Latest' . ':</span> <a href="' . XenForo_Template_Helper_Core::link('posts', $category['lastPost'], array()) . '" title="' . htmlspecialchars($category['lastPost']['title'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($category['lastPost']['title'], ENT_QUOTES, 'UTF-8') . '</a></span>
				<span class="lastThreadMeta">
					<span class="lastThreadUser">';
if (XenForo_Template_Helper_Core::callHelper('isIgnored', array(
'0' => $category['last_post_user_id']
)))
{
$__output .= 'Ignored Member';
}
else
{
$__output .= XenForo_Template_Helper_Core::callHelper('usernamehtml', array($category['lastPost'],'',false,array()));
}
$__output .= ',</span>
					' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($category['lastPost']['date'],array(
'time' => '$category.lastPost.date',
'class' => 'muted lastThreadDate',
'data-latest' => 'Latest' . ': '
))) . '
				</span>
			';
}
else
{
$__output .= '
				<span class="noMessages muted">(' . 'Contains no messages' . ')</span>
			';
}
$__output .= '
		</div>

	</div>

</li>';
