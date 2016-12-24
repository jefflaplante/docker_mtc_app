<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<dl class="ctrlUnit">
	<dt>' . 'Live Update Display Options' . ':</dt>
	<dd>
		<ul class="checkboxColumns">
			<li>
				<label for="ctrl_liveupdate_display_option_disable"><input type="radio" name="liveupdate_display_option" id="ctrl_liveupdate_display_option_disable" value="" ' . ((!$visitor['liveupdate_display_option']) ? ' checked="checked"' : '') . ' /> ' . 'Disable' . '</label>
			</li>

			<li>
				<label for="ctrl_liveupdate_display_option_tab_icon"><input type="radio" name="liveupdate_display_option" id="ctrl_liveupdate_display_option_tab_icon" value="tab_icon" ' . (($visitor['liveupdate_display_option'] == ('tab_icon')) ? ' checked="checked"' : '') . ' /> ' . 'Tab Icon' . '</label>
			</li>

			<li>
				<label for="ctrl_liveupdate_display_option_both"><input type="radio" name="liveupdate_display_option" id="ctrl_liveupdate_display_option_both" value="both" ' . (($visitor['liveupdate_display_option'] == ('both')) ? ' checked="checked"' : '') . ' /> ' . 'Both' . '</label>
			</li>

			<li>
				<label for="ctrl_liveupdate_display_option_tab_title"><input type="radio" name="liveupdate_display_option" id="ctrl_liveupdate_display_option_tab_title" value="tab_title" ' . (($visitor['liveupdate_display_option'] == ('tab_title')) ? ' checked="checked"' : '') . ' /> ' . 'Tab Title' . '</label>
			</li>
		</ul>
		<p class="explain">' . 'Choose how you would like live updates to be displayed. They can either be disabled, displayed as text in the title, displayed as a balloon over the favicon or both.' . '</p>
	</dd>
</dl>';
