<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
	codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,14,0"
	width="' . htmlspecialchars($game['system_options']['width'], ENT_QUOTES, 'UTF-8') . '"
	height="' . htmlspecialchars($game['system_options']['height'], ENT_QUOTES, 'UTF-8') . '"
	id="game_object">
	<param name="movie" value="' . htmlspecialchars($targetUrl, ENT_QUOTES, 'UTF-8') . '" />
	<param name="quality" value="high" />
	<embed src="' . htmlspecialchars($targetUrl, ENT_QUOTES, 'UTF-8') . '"
		width="' . htmlspecialchars($game['system_options']['width'], ENT_QUOTES, 'UTF-8') . '"
		height="' . htmlspecialchars($game['system_options']['height'], ENT_QUOTES, 'UTF-8') . '"
		id="game_embedobj"
		quality="high"
		pluginspage="http://www.macromedia.com/go/getflashplayer"
		type="application/x-shockwave-flash"></embed>
</object>';
