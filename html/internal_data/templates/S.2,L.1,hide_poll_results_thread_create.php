<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($visitor['permissions']['forum']['hidePollResults'])
{
$__output .= '
	<li><label for="ctrl_poll_hide_results"><input type="checkbox" name="hide_results" value="1" class="Disabler" id="ctrl_poll_hide_results"' . (($poll['hide_results']) ? ' checked="checked"' : '') . ' /> ' . 'Hide poll results' . '</label>
		<ul id="ctrl_poll_hide_results_Disabler">
			<li>
				<label for="ctrl_poll_hide_until_close"><input type="checkbox" name="until_close" value="1" id="ctrl_poll_hide_until_close"' . (($poll['until_close']) ? ' checked="checked"' : '') . ' /> ' . 'Hide until poll closes' . '</label>
				<p class="explain">
					' . 'If the above checkbox is checked then the results of this poll will remain hidden until the poll closes. If the poll does not have a close date or the above checkbox is unchecked then the results will be hidden until the poll is edited and the checkboxes unchecked.' . '
				</p>
			</li>
		</ul>
	</li>
	<input type="hidden" name="hide_poll_results_form" value="1" />
';
}
