<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('js', 'js/KeywordAlert/editor.js');
$__output .= '

';
$__extraData['title'] = '';
$__extraData['title'] .= 'Edit Keyword' . ': ' . htmlspecialchars($keyword['name'], ENT_QUOTES, 'UTF-8');
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()), 'value' => 'Keyword Alert');
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('account/keyword-alert-edit', false, array()) . '" method="POST" class="xenForm AutoValidator" data-redirect="yes">

	<dl class="ctrlUnit">
		<dt><label for="ctrl_name">' . 'Keyword Set' . ':</label></dt>
		<dd>
			<input id="ctrl_name" type="text" class="textCtrl" name="name" value="' . (($keyword) ? (htmlspecialchars($keyword['name'], ENT_QUOTES, 'UTF-8')) : ('')) . '" />
		</dd>
	</dl>
	
	<dl class="ctrlUnit">
		<dt><label for="ctrl_notify_frequency">' . 'Email Frequency' . ':</label></dt>
		<dd>
			<select id="ctrl_notify_frequency" name="notify_frequency" class="textCtrl">
				<option value="0"' . (((($keyword) ? ($keyword['notify_frequency']) : ('')) == 0) ? ' selected="selected"' : '') . '>' . 'Immediately' . '</option>
				<option value="86400"' . (((($keyword) ? ($keyword['notify_frequency']) : ('')) == 86400) ? ' selected="selected"' : '') . '>' . 'Daily' . '</option>
				<option value="604800"' . (((($keyword) ? ($keyword['notify_frequency']) : ('')) == 604800) ? ' selected="selected"' : '') . '>' . 'Weekly (every Monday)' . '</option>
				<option value="2592000"' . (((($keyword) ? ($keyword['notify_frequency']) : ('')) == 2592000) ? ' selected="selected"' : '') . '>' . 'Monthly (last day every month)' . '</option>
				<option value="4"' . (((($keyword) ? ($keyword['notify_frequency']) : ('')) == 4) ? ' selected="selected"' : '') . '>' . 'Don\'t send emails' . '</option>
			</select>

			<label>
				<input type="checkbox" name="send_alert" value="1" ' . (($keyword['send_alert']) ? ' checked="checked"' : '') . ' />
				' . 'Also send alerts' . '
			</label>
		</dd>
	</dl>
	
	<dl class="ctrlUnit">
		<dt><label for="ctrl_keywords">' . 'Keywords' . ':</label></dt>
		<dd>
			<ul>
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
$__compilerVar1 = '';
$__compilerVar1 .= ($i - 1);
$__compilerVar2 = '';
$__compilerVar2 .= '<input type="text" name="keywords[' . htmlspecialchars($__compilerVar1, ENT_QUOTES, 'UTF-8') . '][text]" value="' . (($aKeyword) ? (htmlspecialchars($aKeyword['text'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl" placeholder="' . 'Keyword' . '"/>

<div style="margin-left: 10px;">
	<label title="' . 'Enable to look for text in thread title too.' . '" class="Tooltip">
		<input type="checkbox" name="keywords[' . htmlspecialchars($__compilerVar1, ENT_QUOTES, 'UTF-8') . '][in_title]" value="1" ' . (($aKeyword && $aKeyword['in_title']) ? ' checked="checked"' : '') . ' />
		' . 'in title' . '
	</label>
</div>';
$__output .= $__compilerVar2;
unset($__compilerVar1, $__compilerVar2);
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
$__compilerVar3 = '';
$__compilerVar3 .= (($keyword AND $keyword['keywords']) ? (XenForo_Template_Helper_Core::numberFormat(count($keyword['keywords']), '0')) : ('0'));
$__compilerVar4 = '';
$__compilerVar5 = '';
$__compilerVar5 .= '<input type="text" name="keywords[' . htmlspecialchars($__compilerVar3, ENT_QUOTES, 'UTF-8') . '][text]" value="' . (($__compilerVar4) ? (htmlspecialchars($__compilerVar4['text'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl" placeholder="' . 'Keyword' . '"/>

<div style="margin-left: 10px;">
	<label title="' . 'Enable to look for text in thread title too.' . '" class="Tooltip">
		<input type="checkbox" name="keywords[' . htmlspecialchars($__compilerVar3, ENT_QUOTES, 'UTF-8') . '][in_title]" value="1" ' . (($__compilerVar4 && $__compilerVar4['in_title']) ? ' checked="checked"' : '') . ' />
		' . 'in title' . '
	</label>
</div>';
$__output .= $__compilerVar5;
unset($__compilerVar3, $__compilerVar4, $__compilerVar5);
$__output .= '
				</li>
			</ul>
			<p class="explain">' . 'Each line can be one keyword (example: "banana") or a phrase of multiple words (example: "united states of america").<br/>
<br/>
You can also use @ syntax to search for poster by username (example: "@admin" will match all contents posted by admin).' . '</p>
		</dd>
	</dl>
	
	<dl class="ctrlUnit KeywordAlert_ForumModeSelector" data-siblings=".forumSelectors">
		<dt><label for="ctrl_forum_mode">' . 'Forum Mode' . ':</label></dt>
		<dd>
			<select id="ctrl_forum_mode" name="forum_mode" class="textCtrl">
				<option value="all"' . (((($keyword) ? ($keyword['forum_mode']) : ('')) == ('all')) ? ' selected="selected"' : '') . '>' . 'All forums' . '</option>
				<option value="whitelist"' . (((($keyword) ? ($keyword['forum_mode']) : ('')) == ('whitelist')) ? ' selected="selected"' : '') . '>' . 'White list' . '</option>
				<option value="blacklist"' . (((($keyword) ? ($keyword['forum_mode']) : ('')) == ('blacklist')) ? ' selected="selected"' : '') . '>' . 'Black list' . '</option>
			</select>
		</dd>
	</dl>
	
	<dl class="ctrlUnit forumSelectors">
		<dt><label for="ctrl_forum_data">&nbsp;</label></dt>
		<dd>
			<ul>
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
$__compilerVar6 = '';
$__compilerVar6 .= ($i - 1);
$__compilerVar7 = '';
$__compilerVar7 .= '<select name="forum_data[' . htmlspecialchars($__compilerVar6, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($forumId, ENT_QUOTES, 'UTF-8') . '" class="textCtrl">
	<option value="0">' . 'Please select one' . '</option>
	';
foreach ($forums AS $forum)
{
$__compilerVar7 .= '
		<option value="' . htmlspecialchars($forum['value'], ENT_QUOTES, 'UTF-8') . '"' . (($forumId == $forum['value']) ? ' selected="selected"' : '') . '>' . XenForo_Template_Helper_Core::string('repeat', array(
'0' => '&nbsp;&nbsp;&nbsp;&nbsp;',
'1' => htmlspecialchars($forum['depth'], ENT_QUOTES, 'UTF-8')
)) . htmlspecialchars($forum['label'], ENT_QUOTES, 'UTF-8') . '</option>
	';
}
$__compilerVar7 .= '
</select>';
$__output .= $__compilerVar7;
unset($__compilerVar6, $__compilerVar7);
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
$__compilerVar8 = '';
$__compilerVar8 .= (($keyword AND $keyword['forum_data']) ? (XenForo_Template_Helper_Core::numberFormat(count($keyword['forum_data']), '0')) : ('0'));
$__compilerVar9 = '';
$__compilerVar9 .= '0';
$__compilerVar10 = '';
$__compilerVar10 .= '<select name="forum_data[' . htmlspecialchars($__compilerVar8, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($__compilerVar9, ENT_QUOTES, 'UTF-8') . '" class="textCtrl">
	<option value="0">' . 'Please select one' . '</option>
	';
foreach ($forums AS $forum)
{
$__compilerVar10 .= '
		<option value="' . htmlspecialchars($forum['value'], ENT_QUOTES, 'UTF-8') . '"' . (($__compilerVar9 == $forum['value']) ? ' selected="selected"' : '') . '>' . XenForo_Template_Helper_Core::string('repeat', array(
'0' => '&nbsp;&nbsp;&nbsp;&nbsp;',
'1' => htmlspecialchars($forum['depth'], ENT_QUOTES, 'UTF-8')
)) . htmlspecialchars($forum['label'], ENT_QUOTES, 'UTF-8') . '</option>
	';
}
$__compilerVar10 .= '
</select>';
$__output .= $__compilerVar10;
unset($__compilerVar8, $__compilerVar9, $__compilerVar10);
$__output .= '
				</li>
			</ul>
		</dd>
	</dl>
	
	<dl class="ctrlUnit">
		<dt><label for="ctrl_excluded_rules">' . 'Excluded Rules' . ':</label></dt>
		<dd>
			<ul>
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
$__compilerVar11 = '';
$__compilerVar11 .= ($i - 1);
$__compilerVar12 = '';
$__compilerVar12 .= '<input type="text" name="excluded_rules[' . htmlspecialchars($__compilerVar11, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($excludedRule, ENT_QUOTES, 'UTF-8') . '" class="textCtrl" placeholder="' . 'Excluded Rule' . '" />';
$__output .= $__compilerVar12;
unset($__compilerVar11, $__compilerVar12);
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
$__compilerVar13 = '';
$__compilerVar13 .= (($keyword AND $keyword['excluded_rules']) ? (XenForo_Template_Helper_Core::numberFormat(count($keyword['excluded_rules']), '0')) : ('0'));
$__compilerVar14 = '';
$__compilerVar15 = '';
$__compilerVar15 .= '<input type="text" name="excluded_rules[' . htmlspecialchars($__compilerVar13, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($__compilerVar14, ENT_QUOTES, 'UTF-8') . '" class="textCtrl" placeholder="' . 'Excluded Rule' . '" />';
$__output .= $__compilerVar15;
unset($__compilerVar13, $__compilerVar14, $__compilerVar15);
$__output .= '
				</li>
			</ul>
			<p class="explain">' . 'Enter only one rule each line.<br/>
<br/>
Rules must conform following syntax:<br/>
- USER_ID = &lt;user id&gt;: Excludes posts made by user with the specified user id.<br/>' . '</p>
		</dd>
	</dl>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" name="save" value="' . 'Save' . '" accesskey="s" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="keyword_id" value="' . (($keyword) ? (htmlspecialchars($keyword['keyword_id'], ENT_QUOTES, 'UTF-8')) : ('')) . '" />
	<input type="hidden" name="_xfConfirm" value="1" />
</form>';
