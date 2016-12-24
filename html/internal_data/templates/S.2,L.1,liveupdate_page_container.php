<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($visitor['user_id'] AND $visitor['liveupdate_display_option'])
{
$__output .= '
	<link rel="shortcut icon" href="' . (($xenOptions['liveUpdateFavicon']) ? (htmlspecialchars($xenOptions['liveUpdateFavicon'], ENT_QUOTES, 'UTF-8')) : ('favicon.ico')) . '" />

	';
$this->addRequiredExternal('js', 'js/liveupdate/min/update.js');
$__output .= '
	';
if ($visitor['liveupdate_display_option'] == ('both') OR $visitor['liveupdate_display_option'] == ('tab_icon'))
{
$__output .= '
		';
$this->addRequiredExternal('js', 'js/liveupdate/min/tinycon.js');
$__output .= '
	';
}
$__output .= '

	<script>
		$(\'html\').data(\'pollinterval\', ' . htmlspecialchars($xenOptions['liveUpdateInterval'], ENT_QUOTES, 'UTF-8') . ')
			.data(\'displaytype\', \'' . htmlspecialchars($visitor['liveupdate_display_option'], ENT_QUOTES, 'UTF-8') . '\');
	</script>
';
}
