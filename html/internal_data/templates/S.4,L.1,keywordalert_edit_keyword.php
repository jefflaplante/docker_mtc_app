<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<input type="text" name="keywords[' . htmlspecialchars($counter, ENT_QUOTES, 'UTF-8') . '][text]" value="' . (($aKeyword) ? (htmlspecialchars($aKeyword['text'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl" placeholder="' . 'Keyword' . '"/>

<div style="margin-left: 10px;">
	<label title="' . 'Enable to look for text in thread title too.' . '" class="Tooltip">
		<input type="checkbox" name="keywords[' . htmlspecialchars($counter, ENT_QUOTES, 'UTF-8') . '][in_title]" value="1" ' . (($aKeyword && $aKeyword['in_title']) ? ' checked="checked"' : '') . ' />
		' . 'in title' . '
	</label>
</div>';
