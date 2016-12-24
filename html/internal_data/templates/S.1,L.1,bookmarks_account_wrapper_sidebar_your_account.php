<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<li>
	<a class="' . (($selectedKey == ('account/bookmarks')) ? ('secondaryContent') : ('primaryContent')) . '"
	href="' . XenForo_Template_Helper_Core::link('account/bookmarks', false, array()) . '">' . 'Bookmarks' . '</a>
</li>';
