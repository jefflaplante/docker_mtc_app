<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<select name="forum_data[' . htmlspecialchars($counter, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($forumId, ENT_QUOTES, 'UTF-8') . '" class="textCtrl">
	<option value="0">' . 'Please select one' . '</option>
	';
foreach ($forums AS $forum)
{
$__output .= '
		<option value="' . htmlspecialchars($forum['value'], ENT_QUOTES, 'UTF-8') . '"' . (($forumId == $forum['value']) ? ' selected="selected"' : '') . '>' . XenForo_Template_Helper_Core::string('repeat', array(
'0' => '&nbsp;&nbsp;&nbsp;&nbsp;',
'1' => htmlspecialchars($forum['depth'], ENT_QUOTES, 'UTF-8')
)) . htmlspecialchars($forum['label'], ENT_QUOTES, 'UTF-8') . '</option>
	';
}
$__output .= '
</select>';
