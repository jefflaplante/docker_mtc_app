<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('js', 'js/Nobita/avatarurl/avatar.js');
$__output .= '

';
if ($importType == ('account_avatar_overlay'))
{
$__output .= '
	<label for="ctrl_su">' . 'Import a photo from a URL' . ':</label>
	<input type="url" name="su" id="ctrl_su" class="textCtrl" data-importing="' . 'Importing' . '" />
	<input type="button" 
		class="button importProxy" 
		value="' . 'Import' . '" 
		data-url="#ctrl_su"
		data-error="#fetch-error"
		data-fetchurl="' . XenForo_Template_Helper_Core::link('account/fetchavatar', false, array()) . '" />
	<p class="explain faint">
		<label for="ctrl_su_error"><span id="fetch-error"></span></label>
	</p>
';
}
else if ($importType == ('account_avatar'))
{
$__output .= '
	<dl class="ctrlUnit">
		<dt><label for="ctrl_su">' . 'Import a photo from a URL' . ':</label></dt>
		<dd>
			<input type="url" name="su" id="ctrl_su" class="textCtrl" data-importing="' . 'Importing' . '" />
			<input type="button" 
				class="button importProxy" 
				value="' . 'Import' . '" 
				data-url="#ctrl_su"
				data-error="#fetch-error"
				data-fetchurl="' . XenForo_Template_Helper_Core::link('account/fetchavatar', false, array()) . '"
				style="margin-top:5px" />
			<p class="explain faint">
				<label for="ctrl_su_error"><span id="fetch-error"></span></label>
			</p>
		</dd>
	</dl>
';
}
else if ($importType == ('resource_icon'))
{
$__output .= '
	<li class="iconAction">
		<label for="ctrl_su">' . 'Import a photo from a URL' . ':</label>
		<div>
			<input type="url" name="su" id="ctrl_su" class="textCtrl" data-importing="' . 'Importing' . '" />
			<input type="button" 
				class="button importProxy" 
				value="' . 'Import' . '" 
				data-url="#ctrl_su"
				data-error="#fetch-error"
				data-fetchurl="' . XenForo_Template_Helper_Core::link('resources/iconurl', $resource, array()) . '"
				style="margin-top:5px" />
			<p class="explain faint">
				<label for="ctrl_su_error"><span id="fetch-error"></span></label>
			</p>
		</div>
	</li>
';
}
