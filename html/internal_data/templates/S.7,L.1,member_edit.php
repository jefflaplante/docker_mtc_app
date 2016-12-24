<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' - ' . 'Edit Member';
$__output .= '
';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'Edit Member';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:members', $user, array()), 'value' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'));
$__output .= '

';
$__compilerVar1 = '';
$__compilerVar1 .= '
	';
if ($user['avatar_date'] OR $user['gravatar'])
{
$__compilerVar1 .= '
		<dl class="ctrlUnit">
			<dt>' . 'Avatar' . ':</dt>
			<dd>
				' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'size' => 's',
'user' => '$user',
'img' => 'true'
),'')) . '
				<div><label><input type="checkbox" name="remove_avatar" value="1" /> ' . 'Delete current avatar' . '</label></div>
			</dd>
		</dl>
	';
}
$__compilerVar1 .= '

	';
if ($userCanSetCustomTitle OR $user['custom_title'])
{
$__compilerVar1 .= '
		<dl class="ctrlUnit">
			<dt>' . 'Custom Title' . ':</dt>
			<dd><input type="text" name="custom_title" value="' . htmlspecialchars($user['custom_title'], ENT_QUOTES, 'UTF-8') . '" class="textCtrl" /></dd>
		</dl>
	';
}
$__compilerVar1 .= '

	';
if ($userCanEditProfile OR $user['location'])
{
$__compilerVar1 .= '
		<dl class="ctrlUnit">
			<dt>' . 'Location' . ':</dt>
			<dd><input type="text" name="location" value="' . htmlspecialchars($user['location'], ENT_QUOTES, 'UTF-8') . '" class="textCtrl" /></dd>
		</dl>
	';
}
$__compilerVar1 .= '

	';
if ($userCanEditProfile OR $user['occupation'])
{
$__compilerVar1 .= '
		<dl class="ctrlUnit">
			<dt>' . 'Occupation' . ':</dt>
			<dd><input type="text" name="occupation" value="' . htmlspecialchars($user['occupation'], ENT_QUOTES, 'UTF-8') . '" class="textCtrl" /></dd>
		</dl>
	';
}
$__compilerVar1 .= '

	';
if ($userCanEditProfile OR $user['homepage'])
{
$__compilerVar1 .= '
		<dl class="ctrlUnit">
			<dt>' . 'Home Page' . ':</dt>
			<dd><input type="url" name="homepage" value="' . htmlspecialchars($user['homepage'], ENT_QUOTES, 'UTF-8') . '" class="textCtrl" /></dd>
		</dl>
	';
}
$__compilerVar1 .= '

	';
if ($userCanEditProfile OR $user['about'])
{
$__compilerVar1 .= '
		<dl class="ctrlUnit">
			<dt>' . 'About' . ':</dt>
			<dd>' . $aboutEditor . '</dd>
		</dl>
	';
}
$__compilerVar1 .= '

	';
if ($userCanEditSignature OR $user['signature'])
{
$__compilerVar1 .= '
		<dl class="ctrlUnit">
			<dt>' . 'Signature' . ':</dt>
			<dd>' . $signatureEditor . '</dd>
		</dl>
	';
}
$__compilerVar1 .= '
	
	';
if ($customFields)
{
$__compilerVar1 .= '
		<fieldset>
			';
$__compilerVar2 = '';
foreach ($customFields AS $field)
{
$__compilerVar2 .= '
	';
if ($field['isEditable'])
{
$__compilerVar2 .= '
		';
$__compilerVar3 = '';
if (!$customFieldInputName)
{
$customFieldInputName = 'custom_fields';
}
$__compilerVar3 .= '
<dl class="ctrlUnit customFieldEdit' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($customFieldExtraClass, ENT_QUOTES, 'UTF-8') . '">
	<dt>
		<label for="ctrl_custom_field_' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($field['title'], ENT_QUOTES, 'UTF-8') . ':</label>
		';
if ($field['required'])
{
$__compilerVar3 .= '<dfn>' . 'Required' . '</dfn>';
}
$__compilerVar3 .= '
	</dt>
	<dd>
		';
if ($field['field_type'] == ('textbox'))
{
$__compilerVar3 .= '
			<input type="text" name="' . htmlspecialchars($customFieldInputName, ENT_QUOTES, 'UTF-8') . '[' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($field['field_value'], ENT_QUOTES, 'UTF-8') . '" 
				id="ctrl_custom_field_' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . '"
				data-validatorname="custom_field_' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . '"
				class="textCtrl" maxlength="' . (($field['max_length']) ? (htmlspecialchars($field['max_length'], ENT_QUOTES, 'UTF-8')) : ('')) . '" 
			/>
		';
}
else if ($field['field_type'] == ('textarea'))
{
$__compilerVar3 .= '
			<textarea name="' . htmlspecialchars($customFieldInputName, ENT_QUOTES, 'UTF-8') . '[' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . ']" 
				id="ctrl_custom_field_' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . '"
				data-validatorname="custom_field_' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . '" 
				class="textCtrl Elastic">' . htmlspecialchars($field['field_value'], ENT_QUOTES, 'UTF-8') . '</textarea>
		';
}
else if ($field['field_type'] == ('radio'))
{
$__compilerVar3 .= '
			<ul class="checkboxColumns">
			';
if (!$field['required'])
{
$__compilerVar3 .= '
				<li><label><input type="radio" name="' . htmlspecialchars($customFieldInputName, ENT_QUOTES, 'UTF-8') . '[' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . ']" value="" ' . (($field['field_value'] === ('') OR !$field['hasValue']) ? ' checked="checked"' : '') . ' /> <span class="muted">' . 'No selection' . '</span></label></li>
			';
}
$__compilerVar3 .= '
			';
foreach ($field['fieldChoices'] AS $choice => $text)
{
$__compilerVar3 .= '
				<li><label><input type="radio" name="' . htmlspecialchars($customFieldInputName, ENT_QUOTES, 'UTF-8') . '[' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($choice, ENT_QUOTES, 'UTF-8') . '" ' . (($field['hasValue'] && strval($field['field_value']) == strval($choice)) ? ' checked="checked"' : '') . ' /> ' . $text . '</label></li>
			';
}
$__compilerVar3 .= '
			</ul>
		';
}
else if ($field['field_type'] == ('select'))
{
$__compilerVar3 .= '
			<select name="' . htmlspecialchars($customFieldInputName, ENT_QUOTES, 'UTF-8') . '[' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . ']" id="ctrl_custom_field_' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . '" class="textCtrl">
			';
if (!$field['required'] OR !$field['hasValue'])
{
$__compilerVar3 .= '
				<option value="">&nbsp;</option>
			';
}
$__compilerVar3 .= '
			';
foreach ($field['fieldChoices'] AS $choice => $text)
{
$__compilerVar3 .= '
				<option value="' . htmlspecialchars($choice, ENT_QUOTES, 'UTF-8') . '" ' . (($field['hasValue'] && strval($field['field_value']) == strval($choice)) ? ' selected="selected"' : '') . '>' . $text . '</option>
			';
}
$__compilerVar3 .= '
			</select>
		';
}
else if ($field['field_type'] == ('checkbox'))
{
$__compilerVar3 .= '
			<ul class="checkboxColumns">
			';
foreach ($field['fieldChoices'] AS $choice => $text)
{
$__compilerVar3 .= '
				<li><label><input type="checkbox" name="' . htmlspecialchars($customFieldInputName, ENT_QUOTES, 'UTF-8') . '[' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . '][' . htmlspecialchars($choice, ENT_QUOTES, 'UTF-8') . ']" value="' . htmlspecialchars($choice, ENT_QUOTES, 'UTF-8') . '" ' . ((isset($field['field_value'][$choice])) ? ' checked="checked"' : '') . ' /> ' . $text . '</label></li>
			';
}
$__compilerVar3 .= '
			</ul>
		';
}
else if ($field['field_type'] == ('multiselect'))
{
$__compilerVar3 .= '
			<select name="' . htmlspecialchars($customFieldInputName, ENT_QUOTES, 'UTF-8') . '[' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . '][]" id="ctrl_custom_field_' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . '" class="textCtrl" size="7" multiple="multiple">
			';
if (!$field['required'] OR !$field['hasValue'])
{
$__compilerVar3 .= '
				<option value="">&nbsp;</option>
			';
}
$__compilerVar3 .= '
			';
foreach ($field['fieldChoices'] AS $choice => $text)
{
$__compilerVar3 .= '
				<option value="' . htmlspecialchars($choice, ENT_QUOTES, 'UTF-8') . '" ' . ((isset($field['field_value'][$choice])) ? ' selected="selected"' : '') . '>' . $text . '</option>
			';
}
$__compilerVar3 .= '
			</select>
		';
}
$__compilerVar3 .= '

		';
$__compilerVar4 = '';
$__compilerVar4 .= $field['description'];
if (trim($__compilerVar4) !== '')
{
$__compilerVar3 .= '<p class="explain">' . $__compilerVar4 . '</p>';
}
unset($__compilerVar4);
$__compilerVar3 .= '
		<input type="hidden" name="custom_fields_shown[]" value="' . htmlspecialchars($field['field_id'], ENT_QUOTES, 'UTF-8') . '" />
	</dd>
</dl>';
$__compilerVar2 .= $__compilerVar3;
unset($__compilerVar3);
$__compilerVar2 .= '
	';
}
$__compilerVar2 .= '
';
}
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
$__compilerVar1 .= '
		</fieldset>
	';
}
$__compilerVar1 .= '
	';
if (trim($__compilerVar1) !== '')
{
$__output .= '
<form action="' . XenForo_Template_Helper_Core::link('members/edit', $user, array()) . '" method="post" class="xenForm">
	
	' . $__compilerVar1 . '

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" value="' . 'Save Changes' . '" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfConfirm" value="1" />
</form>
';
}
else
{
$__output .= '
	<p>' . 'This member\'s information is not currently editable.' . '</p>
';
}
unset($__compilerVar1);
