<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<div class="overlayScroll pollResultsOverlay">
	<table class="pollResults">
		<tr>
		';
if ($poll['close_date'] AND $poll['until_close'])
{
$__output .= '
			<p>' . 'The results of this poll are hidden until the poll closes on ' . $closeDate . '.' . '</p>
		';
}
else
{
$__output .= '
			<p>' . 'The results of this poll are hidden until it is manually edited by the user or site admin.' . '</p>
		';
}
$__output .= '
		</tr>
	</table>
</div>';
