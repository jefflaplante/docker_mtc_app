<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<dl class="ctrlUnit">
	<dt><label for="ctrl_thread_display_mode">' . 'Thread display mode' . ':</label></dt>
	<dd>
		<select name="thread_display_mode" class="textCtrl" id="ctrl_thread_display_mode">
			<option value="" ' . ((('') == $visitor['thread_display_mode']) ? ' selected="selected"' : '') . '></option>
			<option value="newest_first" ' . ((('newest_first') == $visitor['thread_display_mode']) ? ' selected="selected"' : '') . '>' . 'Newest post first' . '</option>
			<option value="oldest_first" ' . ((('oldest_first') == $visitor['thread_display_mode']) ? ' selected="selected"' : '') . '>' . 'Oldest post first' . '</option>
		</select>
	</dd>
</dl>';
