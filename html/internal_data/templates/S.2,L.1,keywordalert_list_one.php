<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'keywordalert');
$__output .= '
';
$this->addRequiredExternal('css', 'discussion_list');
$__output .= '
';
$this->addRequiredExternal('js', 'js/KeywordAlert/editor.js');
$__output .= '

<li id="keyword-' . htmlspecialchars($keyword['keyword_id'], ENT_QUOTES, 'UTF-8') . '" class="discussionListItem KeywordAlert_KeywordListItem">
	<div class="listBlock keywordName">
		<a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', '', array(
'edit' => $keyword['keyword_id']
)) . '">' . htmlspecialchars($keyword['name'], ENT_QUOTES, 'UTF-8') . '</a>
		<div class="secondRow">
			';
if ($keyword['notify_frequency'] != 4)
{
$__output .= '
				<span title="' . 'Email Frequency' . '" class="Tooltip sendEmail">
					' . XenForo_Template_Helper_Core::callHelper('keywordalert_notifyfrequency', array(
'0' => $keyword['notify_frequency']
)) . '
				</span>

				';
if ($keyword['send_alert'])
{
$__output .= '
					<span class="plus">+</span>
				';
}
$__output .= '
			';
}
$__output .= '

			';
if ($keyword['send_alert'])
{
$__output .= '
				<span class="sendAlert">' . 'Alerts' . '</span>
			';
}
$__output .= '

			<span class="controls">
				<a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', '', array(
'edit' => $keyword['keyword_id']
)) . '" class="EditControl">' . 'Edit' . '</a>
				<a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', '', array(
'delete' => $keyword['keyword_id']
)) . '" class="OverlayTrigger KeywordAlert_DeleteLink">' . 'Delete' . '</a>
			</span>
		</div>
	</div>
	<div class="listBlock keywordKeywords">
		';
$i = 0;
foreach ($keyword['keywords'] AS $aKeyword)
{
$i++;
$__output .= '
			' . htmlspecialchars($aKeyword['text'], ENT_QUOTES, 'UTF-8');
if ($aKeyword['in_title'])
{
$__output .= '<sup title="' . 'in title' . '" class="Tooltip">T</sup>';
}
if ($i < XenForo_Template_Helper_Core::numberFormat(count($keyword['keywords']), '0'))
{
$__output .= ',';
}
$__output .= '
		';
}
$__output .= '
	</div>
	<div class="listBlock keywordForumMode">
		';
if ($keyword['forum_mode'] == ('all'))
{
$__output .= '
			' . 'All forums' . '
		';
}
else
{
$__output .= '
			' . (($keyword['forum_mode'] == ('whitelist')) ? ('White list') : ('Black list')) . '
			(' . XenForo_Template_Helper_Core::numberFormat(XenForo_Template_Helper_Core::numberFormat(count($keyword['forum_data']), '0'), '0') . ')
		';
}
$__output .= '
	</div>
	<div class="listBlock keywordExcludedRules">
		' . XenForo_Template_Helper_Core::callHelper('keywordalert_excludedrulescommaseparated', array(
'0' => $keyword['excluded_rules']
)) . '
	</div>
</li>';
