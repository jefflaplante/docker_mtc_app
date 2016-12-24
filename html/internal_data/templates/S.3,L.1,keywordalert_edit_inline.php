<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'keywordalert');
$__output .= '
';
$this->addRequiredExternal('css', 'discussion_list');
$__output .= '
';
$this->addRequiredExternal('css', 'inline_mod');
$__output .= '
';
$this->addRequiredExternal('js', 'js/KeywordAlert/editor.js');
$__output .= '

<li>
	<form action="' . XenForo_Template_Helper_Core::link('account/keyword-alert-edit', false, array()) . '" method="POST"
		class="discussionListItem KeywordAlert_KeywordListItem inlineCtrlGroup AutoValidator' . (($KeywordAlert_isAdding) ? (' KeywordAlert_InlineKeywordEditorAdding') : ('')) . '">
		<div class="listBlock keywordName">
			<input type="text" class="textCtrl" name="name" value="' . (($keyword) ? (htmlspecialchars($keyword['name'], ENT_QUOTES, 'UTF-8')) : ('')) . '" placeholder="' . 'Keyword Set' . '" />

			<div class="secondRow">
				<select name="notify_frequency" class="textCtrl Tooltip" title="' . 'Email Frequency' . '">
					<option value="0"' . (((($keyword) ? ($keyword['notify_frequency']) : ('')) == 0) ? ' selected="selected"' : '') . '>' . 'Immediately' . '</option>
					<option value="86400"' . (((($keyword) ? ($keyword['notify_frequency']) : ('')) == 86400) ? ' selected="selected"' : '') . '>' . 'Daily' . '</option>
					<option value="604800"' . (((($keyword) ? ($keyword['notify_frequency']) : ('')) == 604800) ? ' selected="selected"' : '') . '>' . 'Weekly' . '</option>
					<option value="2592000"' . (((($keyword) ? ($keyword['notify_frequency']) : ('')) == 2592000) ? ' selected="selected"' : '') . '>' . 'Monthly' . '</option>
					<option value="4"' . (((($keyword) ? ($keyword['notify_frequency']) : ('')) == 4) ? ' selected="selected"' : '') . '>' . 'Don\'t send emails' . '</option>
				</select>
			</div>

			<div class="secondRow">
				<label>
					<input type="checkbox" name="send_alert" value="1" ' . (($keyword && $keyword['send_alert']) ? ' checked="checked"' : '') . ' />
					' . 'Also send alerts' . '
				</label>
			</div>
		</div>
		<div class="listBlock keywordKeywords">
			<ul>
				<li>
					' . 'Enter your keywords below' . ':
					';
$__compilerVar1 = '';
$__compilerVar1 .= 'Each line can be one keyword (example: "banana") or a phrase of multiple words (example: "united states of america").<br/>
<br/>
You can also use @ syntax to search for poster by username (example: "@admin" will match all contents posted by admin).';
$__compilerVar2 = '';
$this->addRequiredExternal('js', 'js/KeywordAlert/editor.js');
$__compilerVar2 .= '

';
if (!$tooltipOnly)
{
$__compilerVar2 .= '<span class="KeywordAlert_HelpTooltip">[?]</span>';
}
$__compilerVar2 .= '
<div class="xenTooltip">
	<span class="arrow"></span>
	' . $__compilerVar1 . '
</div>';
$__output .= $__compilerVar2;
unset($__compilerVar1, $__compilerVar2);
$__output .= '
				</li>
				';
if ($keyword AND $keyword['keywords'])
{
$__output .= '
					';
$i = 0;
foreach ($keyword['keywords'] AS $aKeyword)
{
$i++;
$__output .= '
						<li>
							';
$__compilerVar3 = '';
$__compilerVar3 .= ($i - 1);
$__compilerVar4 = '';
$__compilerVar4 .= '<input type="text" name="keywords[' . htmlspecialchars($__compilerVar3, ENT_QUOTES, 'UTF-8') . '][text]" value="' . (($aKeyword) ? (htmlspecialchars($aKeyword['text'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl" placeholder="' . 'Keyword' . '"/>

<div style="margin-left: 10px;">
	<label title="' . 'Enable to look for text in thread title too.' . '" class="Tooltip">
		<input type="checkbox" name="keywords[' . htmlspecialchars($__compilerVar3, ENT_QUOTES, 'UTF-8') . '][in_title]" value="1" ' . (($aKeyword && $aKeyword['in_title']) ? ' checked="checked"' : '') . ' />
		' . 'in title' . '
	</label>
</div>';
$__output .= $__compilerVar4;
unset($__compilerVar3, $__compilerVar4);
$__output .= '
						</li> 
					';
}
$__output .= '
				';
}
$__output .= '
				<li class="KeywordAlert_KeywordEditor">
					';
$__compilerVar5 = '';
$__compilerVar5 .= (($keyword AND $keyword['keywords']) ? (XenForo_Template_Helper_Core::numberFormat(count($keyword['keywords']), '0')) : ('0'));
$__compilerVar6 = '';
$__compilerVar7 = '';
$__compilerVar7 .= '<input type="text" name="keywords[' . htmlspecialchars($__compilerVar5, ENT_QUOTES, 'UTF-8') . '][text]" value="' . (($__compilerVar6) ? (htmlspecialchars($__compilerVar6['text'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl" placeholder="' . 'Keyword' . '"/>

<div style="margin-left: 10px;">
	<label title="' . 'Enable to look for text in thread title too.' . '" class="Tooltip">
		<input type="checkbox" name="keywords[' . htmlspecialchars($__compilerVar5, ENT_QUOTES, 'UTF-8') . '][in_title]" value="1" ' . (($__compilerVar6 && $__compilerVar6['in_title']) ? ' checked="checked"' : '') . ' />
		' . 'in title' . '
	</label>
</div>';
$__output .= $__compilerVar7;
unset($__compilerVar5, $__compilerVar6, $__compilerVar7);
$__output .= '
				</li>
			</ul>
		</div>
		<div class="listBlock keywordForumMode">
			<select name="forum_mode" class="textCtrl KeywordAlert_ForumModeSelector" data-siblings=".forumSelectors">
				<option value="all"' . (((($keyword) ? ($keyword['forum_mode']) : ('')) == ('all')) ? ' selected="selected"' : '') . '>' . 'All forums' . '</option>
				<option value="whitelist"' . (((($keyword) ? ($keyword['forum_mode']) : ('')) == ('whitelist')) ? ' selected="selected"' : '') . '>' . 'White list' . '</option>
				<option value="blacklist"' . (((($keyword) ? ($keyword['forum_mode']) : ('')) == ('blacklist')) ? ' selected="selected"' : '') . '>' . 'Black list' . '</option>
			</select>
			<ul class="forumSelectors">
				';
if ($keyword AND $keyword['forum_data'])
{
$__output .= '
					';
$i = 0;
foreach ($keyword['forum_data'] AS $forumId)
{
$i++;
$__output .= '
						<li>
							';
$__compilerVar8 = '';
$__compilerVar8 .= ($i - 1);
$__compilerVar9 = '';
$__compilerVar9 .= '<select name="forum_data[' . htmlspecialchars($__compilerVar8, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($forumId, ENT_QUOTES, 'UTF-8') . '" class="textCtrl">
	<option value="0">' . 'Please select one' . '</option>
	';
foreach ($forums AS $forum)
{
$__compilerVar9 .= '
		<option value="' . htmlspecialchars($forum['value'], ENT_QUOTES, 'UTF-8') . '"' . (($forumId == $forum['value']) ? ' selected="selected"' : '') . '>' . XenForo_Template_Helper_Core::string('repeat', array(
'0' => '&nbsp;&nbsp;&nbsp;&nbsp;',
'1' => htmlspecialchars($forum['depth'], ENT_QUOTES, 'UTF-8')
)) . htmlspecialchars($forum['label'], ENT_QUOTES, 'UTF-8') . '</option>
	';
}
$__compilerVar9 .= '
</select>';
$__output .= $__compilerVar9;
unset($__compilerVar8, $__compilerVar9);
$__output .= '
						</li> 
					';
}
$__output .= '
				';
}
$__output .= '
				<li class="KeywordAlert_ForumSelector">
					';
$__compilerVar10 = '';
$__compilerVar10 .= (($keyword AND $keyword['forum_data']) ? (XenForo_Template_Helper_Core::numberFormat(count($keyword['forum_data']), '0')) : ('0'));
$__compilerVar11 = '';
$__compilerVar11 .= '0';
$__compilerVar12 = '';
$__compilerVar12 .= '<select name="forum_data[' . htmlspecialchars($__compilerVar10, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($__compilerVar11, ENT_QUOTES, 'UTF-8') . '" class="textCtrl">
	<option value="0">' . 'Please select one' . '</option>
	';
foreach ($forums AS $forum)
{
$__compilerVar12 .= '
		<option value="' . htmlspecialchars($forum['value'], ENT_QUOTES, 'UTF-8') . '"' . (($__compilerVar11 == $forum['value']) ? ' selected="selected"' : '') . '>' . XenForo_Template_Helper_Core::string('repeat', array(
'0' => '&nbsp;&nbsp;&nbsp;&nbsp;',
'1' => htmlspecialchars($forum['depth'], ENT_QUOTES, 'UTF-8')
)) . htmlspecialchars($forum['label'], ENT_QUOTES, 'UTF-8') . '</option>
	';
}
$__compilerVar12 .= '
</select>';
$__output .= $__compilerVar12;
unset($__compilerVar10, $__compilerVar11, $__compilerVar12);
$__output .= '
				</li>
			</ul>
		</div>
		<div class="listBlock keywordExcludedRules">
			<ul>
				<li>
					' . 'Enter excluded rules below' . ':
				</li>
				';
if ($keyword AND $keyword['excluded_rules'])
{
$__output .= '
					';
$i = 0;
foreach ($keyword['excluded_rules'] AS $excludedRule)
{
$i++;
$__output .= '
						<li>
							';
$__compilerVar13 = '';
$__compilerVar13 .= ($i - 1);
$__compilerVar14 = '';
$__compilerVar14 .= '<input type="text" name="excluded_rules[' . htmlspecialchars($__compilerVar13, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($excludedRule, ENT_QUOTES, 'UTF-8') . '" class="textCtrl" placeholder="' . 'Excluded Rule' . '" />';
$__output .= $__compilerVar14;
unset($__compilerVar13, $__compilerVar14);
$__output .= '
						</li> 
					';
}
$__output .= '
				';
}
$__output .= '
				<li class="KeywordAlert_ExcludedRuleEditor">
					';
$__compilerVar15 = '';
$__compilerVar15 .= (($keyword AND $keyword['excluded_rules']) ? (XenForo_Template_Helper_Core::numberFormat(count($keyword['excluded_rules']), '0')) : ('0'));
$__compilerVar16 = '';
$__compilerVar17 = '';
$__compilerVar17 .= '<input type="text" name="excluded_rules[' . htmlspecialchars($__compilerVar15, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($__compilerVar16, ENT_QUOTES, 'UTF-8') . '" class="textCtrl" placeholder="' . 'Excluded Rule' . '" />';
$__output .= $__compilerVar17;
unset($__compilerVar15, $__compilerVar16, $__compilerVar17);
$__output .= '
				</li>
			</ul>
			<input type="submit" value="' . 'Save' . '" class="textCtrl primary" id="ctrl_submit_' . (($keyword) ? (htmlspecialchars($keyword['keyword_id'], ENT_QUOTES, 'UTF-8')) : ('')) . '" />
			<input type="reset"  value="' . 'Cancel' . '" class="textCtrl" id="ctrl_reset_' . (($keyword) ? (htmlspecialchars($keyword['keyword_id'], ENT_QUOTES, 'UTF-8')) : ('')) . '" />
			<input type="hidden" name="keyword_id" value="' . (($keyword) ? (htmlspecialchars($keyword['keyword_id'], ENT_QUOTES, 'UTF-8')) : ('')) . '" />
			<input type="hidden" name="_xfConfirm" value="1" />
			<input type="hidden" name="_postedFromInlineEditor" value="1" />
		</div>
	</form>
</li>';
