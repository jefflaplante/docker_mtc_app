<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('js', 'js/KeywordAlert/editor.js');
$__output .= '

';
if (!$tooltipOnly)
{
$__output .= '<span class="KeywordAlert_HelpTooltip">[?]</span>';
}
$__output .= '
<div class="xenTooltip">
	<span class="arrow"></span>
	' . $tooltip . '
</div>';
