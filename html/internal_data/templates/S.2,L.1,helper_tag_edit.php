<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($tags['uneditable'])
{
$__output .= '
	<dl class="ctrlUnit">
		<dt>' . 'Uneditable Tags' . ':</dt>
		<dd>
			' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => ', ',
'1' => $tags['uneditable']
)) . '
			<p class="explain">' . 'You may not change or remove these tags. They were added by another member.' . '</p>
		</dd>
	</dl>
';
}
$__output .= '

<dl class="ctrlUnit fullWidth surplusLabel">
	<dt><label>' . 'Tags' . ':</label></dt>
	<dd>
		<input type="text" name="tags" value="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => ', ',
'1' => $tags['editable']
)) . '" class="textCtrl TagInput" data-extra-class="verticalShift" ';
if ($autoFocus)
{
$__output .= 'autofocus="autofocus"';
}
$__output .= ' />
		<p class="explain">
			' . 'Multiple tags may be separated by commas.' . '
			';
if ($minTags)
{
$__output .= 'This content must have at least ' . XenForo_Template_Helper_Core::numberFormat($minTags, '0') . ' tag(s).';
}
$__output .= '
		</p>
	</dd>
</dl>';
