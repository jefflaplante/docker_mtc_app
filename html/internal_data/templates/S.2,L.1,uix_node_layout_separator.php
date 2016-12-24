<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_nodeStyle') == 3)
{
$__output .= '<script>
	if (typeof(audentio) !== "undefined" && typeof(audentio.grid) !== "undefined") {
		audentio.grid.addSubNode(\'' . htmlspecialchars($node['node_id'], ENT_QUOTES, 'UTF-8') . '\');
	} else {
		console.warn("Unable to initialize node separator.  Make sure that the UIX functions file is up to date and being loaded.");
	}		
</script>';
}
