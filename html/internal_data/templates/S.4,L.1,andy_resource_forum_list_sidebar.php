<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($latestResources)
{
$__output .= '
	<div class="section miniResourceList">
		<div class="secondaryContent">
			<h3><a href="' . XenForo_Template_Helper_Core::link('find-new/resources', false, array()) . '">' . 'new_resources' . '</a></h3>
			' . '
		</div>
	</div>
';
}
