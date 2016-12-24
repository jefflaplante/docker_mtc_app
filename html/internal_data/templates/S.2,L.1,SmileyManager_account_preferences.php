<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($xenOptions['SmileyManager_quickloadSmiley'])
{
$__output .= '<li>
	<label for="ctrl_quickload_smiley"><input type="checkbox" name="quickload_smiley" value="1" id="ctrl_quickload_smiley" ' . (($visitor['quickload_smiley']) ? ' checked="checked"' : '') . ' />
	' . 'Enable Quickload Smiley mode' . '</label>
	<p class="hint">' . 'If selected, all smilies will be loaded by clicking the textarea of the editor.' . '</p>
</li>';
}
