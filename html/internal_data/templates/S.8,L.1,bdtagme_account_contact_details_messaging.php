<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($xenOptions['bdtagme_alertEmail'])
{
$__output .= '
	<li><label for="ctrl_bdtagme_email"><input type="checkbox" name="bdtagme_email" value="1" id="ctrl_bdtagme_email" ' . (($visitor['bdtagme_email']) ? ' checked="checked"' : '') . ' />
		' . 'Receive email when name is mentioned' . '</label>
		<p class="hint">' . 'Email notifications for mentions from threads, replies, profile posts, etc.' . '</p>
	</li>
';
}
