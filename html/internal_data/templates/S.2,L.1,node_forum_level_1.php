<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__compilerVar1 = '';
$this->addRequiredExternal('css', 'node_list');
$__compilerVar1 .= '
';
$this->addRequiredExternal('css', 'node_forum');
$__compilerVar1 .= '

<li class="node forum level_' . htmlspecialchars($level, ENT_QUOTES, 'UTF-8') . ' ' . (($level == 1 AND !$renderedChildren) ? ('groupNoChildren') : ('')) . ' node_' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8') . '">
	';
if ($level == 1)
{
$__compilerVar1 .= '<div class="categoryStrip subHeading"></div>';
}
$__compilerVar1 .= '

	<div class="nodeInfo forumNodeInfo ' . (($forum['hasNew']) ? ('unread') : ('')) . ' ' . (($uix_nodeClasses[$forum['node_id']]) ? (htmlspecialchars($uix_nodeClasses[$forum['node_id']], ENT_QUOTES, 'UTF-8')) : ('')) . '">
	
		';
$__compilerVar2 = '';
$__compilerVar2 .= htmlspecialchars($forum['hasNew'], ENT_QUOTES, 'UTF-8');
$__compilerVar3 = '';
$__compilerVar3 .= 'forum';
$__compilerVar4 = '';
$__compilerVar4 .= htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar5 = '';
$__compilerVar5 .= '<span class="nodeIcon" title="' . (($forum['hasNew']) ? ('Unread messages') : ('')) . '"></span>';
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
			<h3 class="nodeTitle">';
if ($watchCheckBoxName)
{
$__compilerVar1 .= '<input type="checkbox" name="' . htmlspecialchars($watchCheckBoxName, ENT_QUOTES, 'UTF-8') . '" value="' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8') . '" />&nbsp;';
}
$__compilerVar1 .= '<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array()) . '" data-description="' . ((XenForo_Template_Helper_Core::styleProperty('nodeListDescriptionTooltips')) ? ('#nodeDescription-' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8')) : ('')) . '">' . htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
if ($forum['hasNew'] && XenForo_Template_Helper_Core::styleProperty('uix_newNodeMarker') && $visitor['user_id'])
{
$__compilerVar1 .= '<div class="uix_nodeTitle_status">' . 'New' . '</div>';
}
$__compilerVar1 .= '
			</h3>

			';
if ($forum['description'] AND XenForo_Template_Helper_Core::styleProperty('nodeListDescriptions'))
{
$__compilerVar1 .= '
				<blockquote class="nodeDescription ' . ((XenForo_Template_Helper_Core::styleProperty('nodeListDescriptionTooltips')) ? ('nodeDescriptionTooltip') : ('')) . ' baseHtml" id="nodeDescription-' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8') . '">' . $forum['description'] . '</blockquote>
			';
}
$__compilerVar1 .= '

			<div class="nodeStats pairsInline">
				<dl><dd>' . (($forum['privateInfo']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($forum['discussion_count'], '0'))) . '</dd><dt>';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStatsIcons'))
{
$__compilerVar1 .= '<i class="uix_icon uix_icon-statsDiscussions"></i>';
}
else
{
$__compilerVar1 .= 'Threads';
}
$__compilerVar1 .= '</dt></dl>
				<dl><dd>' . (($forum['privateInfo']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($forum['message_count'], '0'))) . '</dd><dt>';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStatsIcons'))
{
$__compilerVar1 .= '<i class="uix_icon uix_icon-statsMessages"></i>';
}
else
{
$__compilerVar1 .= 'Posts';
}
$__compilerVar1 .= '</dt></dl>
				';
if ($renderedChildren AND $level == 2 AND XenForo_Template_Helper_Core::styleProperty('nodeListSubForumPopup'))
{
$__compilerVar1 .= '
					<div class="Popup subForumsPopup">
						<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array()) . '" rel="Menu" class="cloaked" data-closemenu="true"><span class="dt">';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStatsIcons'))
{
$__compilerVar1 .= '<i class="uix_icon uix_icon-statsSubforumPopup"></i>';
}
else
{
$__compilerVar1 .= 'Sub-Forums' . ':';
}
$__compilerVar1 .= '</span> ' . XenForo_Template_Helper_Core::numberFormat($forum['childCount'], '0') . '</a>
						
						<div class="Menu JsOnly subForumsMenu">
							<div class="primaryContent menuHeader">
								<h3>' . htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8') . '</h3>
								<div class="muted">' . 'Sub-Forums' . '</div>
							</div>
							<ol class="secondaryContent blockLinksList">
							';
foreach ($renderedChildren AS $child)
{
$__compilerVar1 .= '
								' . $child . '
							';
}
$__compilerVar1 .= '
							</ol>
						</div>
					</div>
				';
}
$__compilerVar1 .= '
			</div>
			
			' . $nodeExtraHtml . '
		</div>

		';
if ($renderedChildren AND $level == 2 AND !XenForo_Template_Helper_Core::styleProperty('nodeListSubForumPopup'))
{
$__compilerVar1 .= '
			<ol class="subForumList">
			';
foreach ($renderedChildren AS $child)
{
$__compilerVar1 .= '
				' . $child . '
			';
}
$__compilerVar1 .= '
			</ol>
		';
}
$__compilerVar1 .= '
		
		';
$__compilerVar7 = '';
$__compilerVar1 .= $this->callTemplateHook('node_forum_level_2_before_lastpost', $__compilerVar7, array(
'forum' => $forum
));
unset($__compilerVar7);
$__compilerVar1 .= '

		<div class="nodeLastPost secondaryContent">
			';
if ($forum['privateInfo'])
{
$__compilerVar1 .= '
				<span class="noMessages muted">(' . 'Private' . ')</span>
			';
}
else if ($forum['lastPost']['date'])
{
$__compilerVar1 .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeLastPostAvatar') AND $forum['uix_lastPostAvatar'])
{
$__compilerVar1 .= '
					' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($forum['uix_lastPostAvatar'],(true),array(
'user' => '$forum.uix_lastPostAvatar',
'size' => 's',
'img' => 'true'
),'')) . '
				';
}
$__compilerVar1 .= '
				<span class="lastThreadTitle"><span>' . 'Latest' . ':</span> <a href="' . XenForo_Template_Helper_Core::link('posts', $forum['lastPost'], array()) . '" title="' . htmlspecialchars($forum['lastPost']['title'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($forum['lastPost']['title'], ENT_QUOTES, 'UTF-8') . '</a></span>
				<span class="lastThreadMeta">
					<span class="lastThreadUser">';
if (XenForo_Template_Helper_Core::callHelper('isIgnored', array(
'0' => $forum['last_post_user_id']
)))
{
$__compilerVar1 .= 'Ignored Member';
}
else
{
$__compilerVar1 .= XenForo_Template_Helper_Core::callHelper('usernamehtml', array($forum['lastPost'],'',false,array()));
}
$__compilerVar1 .= ',</span>
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
$__compilerVar1 .= '
				<span class="noMessages muted">(' . 'Contains no messages' . ')</span>
			';
}
$__compilerVar1 .= '
		</div>

		<div class="nodeControls">
			<a href="' . XenForo_Template_Helper_Core::link('forums/index.rss', $forum, array()) . '" class="tinyIcon feedIcon" title="' . 'RSS' . '">' . 'RSS' . '</a>
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
