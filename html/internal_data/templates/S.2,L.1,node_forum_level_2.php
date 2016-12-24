<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'node_list');
$__output .= '
';
$this->addRequiredExternal('css', 'node_forum');
$__output .= '

<li class="node forum level_' . htmlspecialchars($level, ENT_QUOTES, 'UTF-8') . ' ' . (($level == 1 AND !$renderedChildren) ? ('groupNoChildren') : ('')) . ' node_' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8') . '">
	';
if ($level == 1)
{
$__output .= '<div class="categoryStrip subHeading"></div>';
}
$__output .= '

	<div class="nodeInfo forumNodeInfo ' . (($forum['hasNew']) ? ('unread') : ('')) . ' ' . (($uix_nodeClasses[$forum['node_id']]) ? (htmlspecialchars($uix_nodeClasses[$forum['node_id']], ENT_QUOTES, 'UTF-8')) : ('')) . '">
	
		';
$__compilerVar1 = '';
$__compilerVar1 .= htmlspecialchars($forum['hasNew'], ENT_QUOTES, 'UTF-8');
$__compilerVar2 = '';
$__compilerVar2 .= 'forum';
$__compilerVar3 = '';
$__compilerVar3 .= htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar4 = '';
$__compilerVar4 .= '<span class="nodeIcon" title="' . (($forum['hasNew']) ? ('Unread messages') : ('')) . '"></span>';
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
			<h3 class="nodeTitle">';
if ($watchCheckBoxName)
{
$__output .= '<input type="checkbox" name="' . htmlspecialchars($watchCheckBoxName, ENT_QUOTES, 'UTF-8') . '" value="' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8') . '" />&nbsp;';
}
$__output .= '<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array()) . '" data-description="' . ((XenForo_Template_Helper_Core::styleProperty('nodeListDescriptionTooltips')) ? ('#nodeDescription-' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8')) : ('')) . '">' . htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
if ($forum['hasNew'] && XenForo_Template_Helper_Core::styleProperty('uix_newNodeMarker') && $visitor['user_id'])
{
$__output .= '<div class="uix_nodeTitle_status">' . 'New' . '</div>';
}
$__output .= '
			</h3>

			';
if ($forum['description'] AND XenForo_Template_Helper_Core::styleProperty('nodeListDescriptions'))
{
$__output .= '
				<blockquote class="nodeDescription ' . ((XenForo_Template_Helper_Core::styleProperty('nodeListDescriptionTooltips')) ? ('nodeDescriptionTooltip') : ('')) . ' baseHtml" id="nodeDescription-' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8') . '">' . $forum['description'] . '</blockquote>
			';
}
$__output .= '

			<div class="nodeStats pairsInline">
				<dl><dd>' . (($forum['privateInfo']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($forum['discussion_count'], '0'))) . '</dd><dt>';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStatsIcons'))
{
$__output .= '<i class="uix_icon uix_icon-statsDiscussions"></i>';
}
else
{
$__output .= 'Threads';
}
$__output .= '</dt></dl>
				<dl><dd>' . (($forum['privateInfo']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($forum['message_count'], '0'))) . '</dd><dt>';
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
if ($renderedChildren AND $level == 2 AND XenForo_Template_Helper_Core::styleProperty('nodeListSubForumPopup'))
{
$__output .= '
					<div class="Popup subForumsPopup">
						<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array()) . '" rel="Menu" class="cloaked" data-closemenu="true"><span class="dt">';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStatsIcons'))
{
$__output .= '<i class="uix_icon uix_icon-statsSubforumPopup"></i>';
}
else
{
$__output .= 'Sub-Forums' . ':';
}
$__output .= '</span> ' . XenForo_Template_Helper_Core::numberFormat($forum['childCount'], '0') . '</a>
						
						<div class="Menu JsOnly subForumsMenu">
							<div class="primaryContent menuHeader">
								<h3>' . htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8') . '</h3>
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
if ($renderedChildren AND $level == 2 AND !XenForo_Template_Helper_Core::styleProperty('nodeListSubForumPopup'))
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
		
		';
$__compilerVar6 = '';
$__output .= $this->callTemplateHook('node_forum_level_2_before_lastpost', $__compilerVar6, array(
'forum' => $forum
));
unset($__compilerVar6);
$__output .= '

		<div class="nodeLastPost secondaryContent">
			';
if ($forum['privateInfo'])
{
$__output .= '
				<span class="noMessages muted">(' . 'Private' . ')</span>
			';
}
else if ($forum['lastPost']['date'])
{
$__output .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeLastPostAvatar') AND $forum['uix_lastPostAvatar'])
{
$__output .= '
					' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($forum['uix_lastPostAvatar'],(true),array(
'user' => '$forum.uix_lastPostAvatar',
'size' => 's',
'img' => 'true'
),'')) . '
				';
}
$__output .= '
				<span class="lastThreadTitle"><span>' . 'Latest' . ':</span> <a href="' . XenForo_Template_Helper_Core::link('posts', $forum['lastPost'], array()) . '" title="' . htmlspecialchars($forum['lastPost']['title'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($forum['lastPost']['title'], ENT_QUOTES, 'UTF-8') . '</a></span>
				<span class="lastThreadMeta">
					<span class="lastThreadUser">';
if (XenForo_Template_Helper_Core::callHelper('isIgnored', array(
'0' => $forum['last_post_user_id']
)))
{
$__output .= 'Ignored Member';
}
else
{
$__output .= XenForo_Template_Helper_Core::callHelper('usernamehtml', array($forum['lastPost'],'',false,array()));
}
$__output .= ',</span>
					' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($forum['lastPost']['date'],array(
'time' => '$forum.lastPost.date',
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

		<div class="nodeControls">
			<a href="' . XenForo_Template_Helper_Core::link('forums/index.rss', $forum, array()) . '" class="tinyIcon feedIcon" title="' . 'RSS' . '">' . 'RSS' . '</a>
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
