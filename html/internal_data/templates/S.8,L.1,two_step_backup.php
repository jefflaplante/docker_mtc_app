<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<p>' . 'A backup code can be used when you don\'t have access to an alternative verification method. Once a backup code is used, it will no longer be usable. You will receive an email when you login using a backup code.' . '</p>

<dl class="ctrlUnit">
	<dt><label for="ctrl_backup_code">' . 'Backup Code' . ':</label></dt>
	<dd>
		<input type="text" name="code" id="ctrl_backup_code" class="textCtrl" />
	</dd>
</dl>';
