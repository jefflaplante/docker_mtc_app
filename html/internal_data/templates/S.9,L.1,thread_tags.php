<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Edit Tags' . ': ' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread,
'1' => 'escaped'
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8');
$__output .= '
';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'Edit Tags' . ': ' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8');
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'] = XenForo_Template_Helper_Core::appendBreadCrumbs($__extraData['navigation'], $nodeBreadCrumbs);
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:threads', $thread, array()), 'value' => XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8'));
$__output .= '

';
$__extraData['bodyClasses'] = '';
$__extraData['bodyClasses'] .= XenForo_Template_Helper_Core::callHelper('nodeClasses', array(
'0' => $nodeBreadCrumbs,
'1' => $forum
));
$__output .= '

';
$this->addRequiredExternal('js', 'js/xenforo/tag.js');
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('threads/tags', $thread, array()) . '" method="post" class="xenForm formOverlay TagEditorForm AutoValidator" data-redirect="true">

	';
$__compilerVar1 = '';
$__compilerVar1 .= htmlspecialchars($forum['min_tags'], ENT_QUOTES, 'UTF-8');
$__compilerVar2 = '';
$__compilerVar2 .= '1';
$__compilerVar3 = '';
if ($tags['uneditable'])
{
$__compilerVar3 .= '
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
$__compilerVar3 .= '

<dl class="ctrlUnit fullWidth surplusLabel">
	<dt><label>' . 'Tags' . ':</label></dt>
	<dd>
		<input type="text" name="tags" value="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => ', ',
'1' => $tags['editable']
)) . '" class="textCtrl TagInput" data-extra-class="verticalShift" ';
if ($__compilerVar2)
{
$__compilerVar3 .= 'autofocus="autofocus"';
}
$__compilerVar3 .= ' />
		<p class="explain">
			' . 'Multiple tags may be separated by commas.' . '
			';
if ($__compilerVar1)
{
$__compilerVar3 .= 'This content must have at least ' . XenForo_Template_Helper_Core::numberFormat($__compilerVar1, '0') . ' tag(s).';
}
$__compilerVar3 .= '
		</p>
	</dd>
</dl>';
$__output .= $__compilerVar3;
unset($__compilerVar1, $__compilerVar2, $__compilerVar3);
$__output .= '

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd>
			<input type="submit" value="' . 'Save Changes' . '" accesskey="s" class="button primary" />
		</dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfConfirm" value="1" />
</form>';
