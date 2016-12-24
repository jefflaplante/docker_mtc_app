<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<div class="BookmarksFeedEnd">
	<div class="sectionFooter">
		<a href="' . htmlspecialchars($itemLoaderUrl, ENT_QUOTES, 'UTF-8') . '" class="BookmarksFeedLoader" data-cutOffDate="' . htmlspecialchars($cutOffDate, ENT_QUOTES, 'UTF-8') . '" data-skipIds="' . htmlspecialchars($skipIds, ENT_QUOTES, 'UTF-8') . '" data-totalChecked="' . htmlspecialchars($totalChecked, ENT_QUOTES, 'UTF-8') . '">' . 'Show older items' . '</a>
	</div>
</div>';
