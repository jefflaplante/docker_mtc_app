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

	<div class="nodeInfo forumNodeInfo primaryContent ' . (($forum['hasNew']) ? ('unread') : ('')) . '">

		<span class="nodeIcon" title="' . (($forum['hasNew']) ? ('Unread messages') : ('')) . '"></span>

		<div class="nodeText">
			<h3 class="nodeTitle">';
if ($watchCheckBoxName)
{
$__output .= '<input type="checkbox" name="' . htmlspecialchars($watchCheckBoxName, ENT_QUOTES, 'UTF-8') . '" value="' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8') . '" />&nbsp;';
}
$__output .= '<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array()) . '" data-description="' . ((XenForo_Template_Helper_Core::styleProperty('nodeListDescriptionTooltips')) ? ('#nodeDescription-' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8')) : ('')) . '">' . htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8') . '</a></h3>

			';
if ($forum['description'] AND XenForo_Template_Helper_Core::styleProperty('nodeListDescriptions'))
{
$__output .= '
				<blockquote class="nodeDescription ' . ((XenForo_Template_Helper_Core::styleProperty('nodeListDescriptionTooltips')) ? ('nodeDescriptionTooltip') : ('')) . ' baseHtml" id="nodeDescription-' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8') . '">' . $forum['description'] . '</blockquote>
			';
}
$__output .= '

			<div class="nodeStats pairsInline">
			
			        ';
if (XenForo_Template_Helper_Core::styleProperty('xc_stats_column'))
{
$__output .= '
				<div class="xc_node_stats">
                                <dl><dd>' . (($forum['privateInfo']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($forum['discussion_count'], '0'))) . '</dd> <dt>' . 'Discussions' . '</dt></dl> 
                                <dl><dd>' . (($forum['privateInfo']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($forum['message_count'], '0'))) . '</dd> <dt>' . 'Messages' . '</dt></dl>
                                </div>
                                ';
}
else
{
$__output .= '
                                <dl><dt>' . 'Discussions' . ':</dt> <dd>' . (($forum['privateInfo']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($forum['discussion_count'], '0'))) . '</dd></dl>
				<dl><dt>' . 'Messages' . ':</dt> <dd>' . (($forum['privateInfo']) ? ('&ndash;') : (XenForo_Template_Helper_Core::numberFormat($forum['message_count'], '0'))) . '</dd></dl>
			        ';
}
$__output .= '
				
				
				';
if ($renderedChildren AND $level == 2 AND XenForo_Template_Helper_Core::styleProperty('nodeListSubForumPopup'))
{
$__output .= '
					<div class="Popup subForumsPopup">
						<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array()) . '" rel="Menu" class="cloaked" data-closemenu="true"><span class="dt">' . 'Sub-Forums' . ':</span> ' . XenForo_Template_Helper_Core::numberFormat($forum['childCount'], '0') . '</a>
						
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
$__compilerVar1 = '';
$__output .= $this->callTemplateHook('node_forum_level_2_before_lastpost', $__compilerVar1, array(
'forum' => $forum
));
unset($__compilerVar1);
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
