<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__compilerVar1 = '';
$__compilerVar1 .= '
	
		';
$__compilerVar2 = '';
$__compilerVar2 .= '
				';
$__compilerVar3 = '';
$__compilerVar2 .= $this->callTemplateHook('ad_thread_list_below_stickies', $__compilerVar3, array());
unset($__compilerVar3);
$__compilerVar2 .= '
				
				
				
				
				
				
				
			';
if (trim($__compilerVar2) !== '')
{
$__compilerVar1 .= '
			' . $__compilerVar2 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar1 .= '
			<div>' . 'Template' . ': ad_thread_list_below_stickies</div>
		';
}
unset($__compilerVar2);
$__compilerVar1 .= '
	
	';
if (trim($__compilerVar1) !== '')
{
$__output .= '
	
	<div class="funbox">
	<div class="funboxWrapper">
	' . $__compilerVar1 . '
	</div>
	</div>
	
';
}
unset($__compilerVar1);
