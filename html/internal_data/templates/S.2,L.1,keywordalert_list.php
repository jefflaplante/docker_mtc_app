<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'keywordalert');
$__output .= '
';
$this->addRequiredExternal('css', 'discussion_list');
$__output .= '
';
$this->addRequiredExternal('js', 'js/KeywordAlert/editor.js');
$__output .= '

';
$__extraData['title'] = '';
$__extraData['title'] .= 'Keyword Alert';
$__output .= '

<div class="discussionList KeywordAlert_KeywordList">
	<dl class="sectionHeaders">
		<dt class="keywordName">' . 'Keyword Set' . '</dt>
		<dd class="keywordKeywords">' . 'Keywords' . '</dd>
		<dd class="keywordForumMode">' . 'Forum Mode' . '</dd>
		<dd class="keywordExcludedRules">' . 'Excluded Rules' . '</dd>
	</dl>
	<ol class="KeywordAlert_KeywordListItems">
		';
if ($keywords)
{
$__output .= '
		';
foreach ($keywords AS $keyword)
{
$__output .= '
			';
$__compilerVar1 = '';
$this->addRequiredExternal('css', 'keywordalert');
$__compilerVar1 .= '
';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar1 .= '
';
$this->addRequiredExternal('js', 'js/KeywordAlert/editor.js');
$__compilerVar1 .= '

<li id="keyword-' . htmlspecialchars($keyword['keyword_id'], ENT_QUOTES, 'UTF-8') . '" class="discussionListItem KeywordAlert_KeywordListItem">
	<div class="listBlock keywordName">
		<a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', '', array(
'edit' => $keyword['keyword_id']
)) . '">' . htmlspecialchars($keyword['name'], ENT_QUOTES, 'UTF-8') . '</a>
		<div class="secondRow">
			';
if ($keyword['notify_frequency'] != 4)
{
$__compilerVar1 .= '
				<span title="' . 'Email Frequency' . '" class="Tooltip sendEmail">
					' . XenForo_Template_Helper_Core::callHelper('keywordalert_notifyfrequency', array(
'0' => $keyword['notify_frequency']
)) . '
				</span>

				';
if ($keyword['send_alert'])
{
$__compilerVar1 .= '
					<span class="plus">+</span>
				';
}
$__compilerVar1 .= '
			';
}
$__compilerVar1 .= '

			';
if ($keyword['send_alert'])
{
$__compilerVar1 .= '
				<span class="sendAlert">' . 'Alerts' . '</span>
			';
}
$__compilerVar1 .= '

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
$__compilerVar1 .= '
			' . htmlspecialchars($aKeyword['text'], ENT_QUOTES, 'UTF-8');
if ($aKeyword['in_title'])
{
$__compilerVar1 .= '<sup title="' . 'in title' . '" class="Tooltip">T</sup>';
}
if ($i < XenForo_Template_Helper_Core::numberFormat(count($keyword['keywords']), '0'))
{
$__compilerVar1 .= ',';
}
$__compilerVar1 .= '
		';
}
$__compilerVar1 .= '
	</div>
	<div class="listBlock keywordForumMode">
		';
if ($keyword['forum_mode'] == ('all'))
{
$__compilerVar1 .= '
			' . 'All forums' . '
		';
}
else
{
$__compilerVar1 .= '
			' . (($keyword['forum_mode'] == ('whitelist')) ? ('White list') : ('Black list')) . '
			(' . XenForo_Template_Helper_Core::numberFormat(XenForo_Template_Helper_Core::numberFormat(count($keyword['forum_data']), '0'), '0') . ')
		';
}
$__compilerVar1 .= '
	</div>
	<div class="listBlock keywordExcludedRules">
		' . XenForo_Template_Helper_Core::callHelper('keywordalert_excludedrulescommaseparated', array(
'0' => $keyword['excluded_rules']
)) . '
	</div>
</li>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
		';
}
$__output .= '
		';
}
else
{
$__output .= '
			<li class="primaryContent">' . 'You haven\'t setup any keyword alert.' . '</li>
		';
}
$__output .= '
		';
$__compilerVar2 = '';
$__compilerVar3 = '';
$__compilerVar3 .= '1';
$__compilerVar4 = '';
$this->addRequiredExternal('css', 'keywordalert');
$__compilerVar4 .= '
';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar4 .= '
';
$this->addRequiredExternal('css', 'inline_mod');
$__compilerVar4 .= '
';
$this->addRequiredExternal('js', 'js/KeywordAlert/editor.js');
$__compilerVar4 .= '

<li>
	<form action="' . XenForo_Template_Helper_Core::link('account/keyword-alert-edit', false, array()) . '" method="POST"
		class="discussionListItem KeywordAlert_KeywordListItem inlineCtrlGroup AutoValidator' . (($__compilerVar3) ? (' KeywordAlert_InlineKeywordEditorAdding') : ('')) . '">
		<div class="listBlock keywordName">
			<input type="text" class="textCtrl" name="name" value="' . (($__compilerVar2) ? (htmlspecialchars($__compilerVar2['name'], ENT_QUOTES, 'UTF-8')) : ('')) . '" placeholder="' . 'Keyword Set' . '" />

			<div class="secondRow">
				<select name="notify_frequency" class="textCtrl Tooltip" title="' . 'Email Frequency' . '">
					<option value="0"' . (((($__compilerVar2) ? ($__compilerVar2['notify_frequency']) : ('')) == 0) ? ' selected="selected"' : '') . '>' . 'Immediately' . '</option>
					<option value="86400"' . (((($__compilerVar2) ? ($__compilerVar2['notify_frequency']) : ('')) == 86400) ? ' selected="selected"' : '') . '>' . 'Daily' . '</option>
					<option value="604800"' . (((($__compilerVar2) ? ($__compilerVar2['notify_frequency']) : ('')) == 604800) ? ' selected="selected"' : '') . '>' . 'Weekly' . '</option>
					<option value="2592000"' . (((($__compilerVar2) ? ($__compilerVar2['notify_frequency']) : ('')) == 2592000) ? ' selected="selected"' : '') . '>' . 'Monthly' . '</option>
					<option value="4"' . (((($__compilerVar2) ? ($__compilerVar2['notify_frequency']) : ('')) == 4) ? ' selected="selected"' : '') . '>' . 'Don\'t send emails' . '</option>
				</select>
			</div>

			<div class="secondRow">
				<label>
					<input type="checkbox" name="send_alert" value="1" ' . (($__compilerVar2 && $__compilerVar2['send_alert']) ? ' checked="checked"' : '') . ' />
					' . 'Also send alerts' . '
				</label>
			</div>
		</div>
		<div class="listBlock keywordKeywords">
			<ul>
				<li>
					' . 'Enter your keywords below' . ':
					';
$__compilerVar5 = '';
$__compilerVar5 .= 'Each line can be one keyword (example: "banana") or a phrase of multiple words (example: "united states of america").<br/>
<br/>
You can also use @ syntax to search for poster by username (example: "@admin" will match all contents posted by admin).';
$__compilerVar6 = '';
$this->addRequiredExternal('js', 'js/KeywordAlert/editor.js');
$__compilerVar6 .= '

';
if (!$tooltipOnly)
{
$__compilerVar6 .= '<span class="KeywordAlert_HelpTooltip">[?]</span>';
}
$__compilerVar6 .= '
<div class="xenTooltip">
	<span class="arrow"></span>
	' . $__compilerVar5 . '
</div>';
$__compilerVar4 .= $__compilerVar6;
unset($__compilerVar5, $__compilerVar6);
$__compilerVar4 .= '
				</li>
				';
if ($__compilerVar2 AND $__compilerVar2['keywords'])
{
$__compilerVar4 .= '
					';
$i = 0;
foreach ($__compilerVar2['keywords'] AS $aKeyword)
{
$i++;
$__compilerVar4 .= '
						<li>
							';
$__compilerVar7 = '';
$__compilerVar7 .= ($i - 1);
$__compilerVar8 = '';
$__compilerVar8 .= '<input type="text" name="keywords[' . htmlspecialchars($__compilerVar7, ENT_QUOTES, 'UTF-8') . '][text]" value="' . (($aKeyword) ? (htmlspecialchars($aKeyword['text'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl" placeholder="' . 'Keyword' . '"/>

<div style="margin-left: 10px;">
	<label title="' . 'Enable to look for text in thread title too.' . '" class="Tooltip">
		<input type="checkbox" name="keywords[' . htmlspecialchars($__compilerVar7, ENT_QUOTES, 'UTF-8') . '][in_title]" value="1" ' . (($aKeyword && $aKeyword['in_title']) ? ' checked="checked"' : '') . ' />
		' . 'in title' . '
	</label>
</div>';
$__compilerVar4 .= $__compilerVar8;
unset($__compilerVar7, $__compilerVar8);
$__compilerVar4 .= '
						</li> 
					';
}
$__compilerVar4 .= '
				';
}
$__compilerVar4 .= '
				<li class="KeywordAlert_KeywordEditor">
					';
$__compilerVar9 = '';
$__compilerVar9 .= (($__compilerVar2 AND $__compilerVar2['keywords']) ? (XenForo_Template_Helper_Core::numberFormat(count($__compilerVar2['keywords']), '0')) : ('0'));
$__compilerVar10 = '';
$__compilerVar11 = '';
$__compilerVar11 .= '<input type="text" name="keywords[' . htmlspecialchars($__compilerVar9, ENT_QUOTES, 'UTF-8') . '][text]" value="' . (($__compilerVar10) ? (htmlspecialchars($__compilerVar10['text'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl" placeholder="' . 'Keyword' . '"/>

<div style="margin-left: 10px;">
	<label title="' . 'Enable to look for text in thread title too.' . '" class="Tooltip">
		<input type="checkbox" name="keywords[' . htmlspecialchars($__compilerVar9, ENT_QUOTES, 'UTF-8') . '][in_title]" value="1" ' . (($__compilerVar10 && $__compilerVar10['in_title']) ? ' checked="checked"' : '') . ' />
		' . 'in title' . '
	</label>
</div>';
$__compilerVar4 .= $__compilerVar11;
unset($__compilerVar9, $__compilerVar10, $__compilerVar11);
$__compilerVar4 .= '
				</li>
			</ul>
		</div>
		<div class="listBlock keywordForumMode">
			<select name="forum_mode" class="textCtrl KeywordAlert_ForumModeSelector" data-siblings=".forumSelectors">
				<option value="all"' . (((($__compilerVar2) ? ($__compilerVar2['forum_mode']) : ('')) == ('all')) ? ' selected="selected"' : '') . '>' . 'All forums' . '</option>
				<option value="whitelist"' . (((($__compilerVar2) ? ($__compilerVar2['forum_mode']) : ('')) == ('whitelist')) ? ' selected="selected"' : '') . '>' . 'White list' . '</option>
				<option value="blacklist"' . (((($__compilerVar2) ? ($__compilerVar2['forum_mode']) : ('')) == ('blacklist')) ? ' selected="selected"' : '') . '>' . 'Black list' . '</option>
			</select>
			<ul class="forumSelectors">
				';
if ($__compilerVar2 AND $__compilerVar2['forum_data'])
{
$__compilerVar4 .= '
					';
$i = 0;
foreach ($__compilerVar2['forum_data'] AS $forumId)
{
$i++;
$__compilerVar4 .= '
						<li>
							';
$__compilerVar12 = '';
$__compilerVar12 .= ($i - 1);
$__compilerVar13 = '';
$__compilerVar13 .= '<select name="forum_data[' . htmlspecialchars($__compilerVar12, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($forumId, ENT_QUOTES, 'UTF-8') . '" class="textCtrl">
	<option value="0">' . 'Please select one' . '</option>
	';
foreach ($forums AS $forum)
{
$__compilerVar13 .= '
		<option value="' . htmlspecialchars($forum['value'], ENT_QUOTES, 'UTF-8') . '"' . (($forumId == $forum['value']) ? ' selected="selected"' : '') . '>' . XenForo_Template_Helper_Core::string('repeat', array(
'0' => '&nbsp;&nbsp;&nbsp;&nbsp;',
'1' => htmlspecialchars($forum['depth'], ENT_QUOTES, 'UTF-8')
)) . htmlspecialchars($forum['label'], ENT_QUOTES, 'UTF-8') . '</option>
	';
}
$__compilerVar13 .= '
</select>';
$__compilerVar4 .= $__compilerVar13;
unset($__compilerVar12, $__compilerVar13);
$__compilerVar4 .= '
						</li> 
					';
}
$__compilerVar4 .= '
				';
}
$__compilerVar4 .= '
				<li class="KeywordAlert_ForumSelector">
					';
$__compilerVar14 = '';
$__compilerVar14 .= (($__compilerVar2 AND $__compilerVar2['forum_data']) ? (XenForo_Template_Helper_Core::numberFormat(count($__compilerVar2['forum_data']), '0')) : ('0'));
$__compilerVar15 = '';
$__compilerVar15 .= '0';
$__compilerVar16 = '';
$__compilerVar16 .= '<select name="forum_data[' . htmlspecialchars($__compilerVar14, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($__compilerVar15, ENT_QUOTES, 'UTF-8') . '" class="textCtrl">
	<option value="0">' . 'Please select one' . '</option>
	';
foreach ($forums AS $forum)
{
$__compilerVar16 .= '
		<option value="' . htmlspecialchars($forum['value'], ENT_QUOTES, 'UTF-8') . '"' . (($__compilerVar15 == $forum['value']) ? ' selected="selected"' : '') . '>' . XenForo_Template_Helper_Core::string('repeat', array(
'0' => '&nbsp;&nbsp;&nbsp;&nbsp;',
'1' => htmlspecialchars($forum['depth'], ENT_QUOTES, 'UTF-8')
)) . htmlspecialchars($forum['label'], ENT_QUOTES, 'UTF-8') . '</option>
	';
}
$__compilerVar16 .= '
</select>';
$__compilerVar4 .= $__compilerVar16;
unset($__compilerVar14, $__compilerVar15, $__compilerVar16);
$__compilerVar4 .= '
				</li>
			</ul>
		</div>
		<div class="listBlock keywordExcludedRules">
			<ul>
				<li>
					' . 'Enter excluded rules below' . ':
				</li>
				';
if ($__compilerVar2 AND $__compilerVar2['excluded_rules'])
{
$__compilerVar4 .= '
					';
$i = 0;
foreach ($__compilerVar2['excluded_rules'] AS $excludedRule)
{
$i++;
$__compilerVar4 .= '
						<li>
							';
$__compilerVar17 = '';
$__compilerVar17 .= ($i - 1);
$__compilerVar18 = '';
$__compilerVar18 .= '<input type="text" name="excluded_rules[' . htmlspecialchars($__compilerVar17, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($excludedRule, ENT_QUOTES, 'UTF-8') . '" class="textCtrl" placeholder="' . 'Excluded Rule' . '" />';
$__compilerVar4 .= $__compilerVar18;
unset($__compilerVar17, $__compilerVar18);
$__compilerVar4 .= '
						</li> 
					';
}
$__compilerVar4 .= '
				';
}
$__compilerVar4 .= '
				<li class="KeywordAlert_ExcludedRuleEditor">
					';
$__compilerVar19 = '';
$__compilerVar19 .= (($__compilerVar2 AND $__compilerVar2['excluded_rules']) ? (XenForo_Template_Helper_Core::numberFormat(count($__compilerVar2['excluded_rules']), '0')) : ('0'));
$__compilerVar20 = '';
$__compilerVar21 = '';
$__compilerVar21 .= '<input type="text" name="excluded_rules[' . htmlspecialchars($__compilerVar19, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($__compilerVar20, ENT_QUOTES, 'UTF-8') . '" class="textCtrl" placeholder="' . 'Excluded Rule' . '" />';
$__compilerVar4 .= $__compilerVar21;
unset($__compilerVar19, $__compilerVar20, $__compilerVar21);
$__compilerVar4 .= '
				</li>
			</ul>
			<input type="submit" value="' . 'Save' . '" class="textCtrl primary" id="ctrl_submit_' . (($__compilerVar2) ? (htmlspecialchars($__compilerVar2['keyword_id'], ENT_QUOTES, 'UTF-8')) : ('')) . '" />
			<input type="reset"  value="' . 'Cancel' . '" class="textCtrl" id="ctrl_reset_' . (($__compilerVar2) ? (htmlspecialchars($__compilerVar2['keyword_id'], ENT_QUOTES, 'UTF-8')) : ('')) . '" />
			<input type="hidden" name="keyword_id" value="' . (($__compilerVar2) ? (htmlspecialchars($__compilerVar2['keyword_id'], ENT_QUOTES, 'UTF-8')) : ('')) . '" />
			<input type="hidden" name="_xfConfirm" value="1" />
			<input type="hidden" name="_postedFromInlineEditor" value="1" />
		</div>
	</form>
</li>';
$__output .= $__compilerVar4;
unset($__compilerVar2, $__compilerVar3, $__compilerVar4);
$__output .= '
	</ol>
</div>';
