<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<p>' . 'An email has been sent to <b>' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '</b> with a single-use code. Please enter that code to continue.' . '</p>

<dl class="ctrlUnit">
	<dt><label for="ctrl_email_code">' . 'Email Confirmation Code' . ':</label></dt>
	<dd>
		<input type="text" name="code" id="ctrl_email_code" class="textCtrl" />
	</dd>
</dl>';
