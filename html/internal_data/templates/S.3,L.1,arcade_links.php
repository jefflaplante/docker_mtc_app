<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<ul class="secondaryContent blockLinksList">
	';
foreach ($categories AS $category)
{
$__output .= '
		<li><a href="' . XenForo_Template_Helper_Core::link('arcade/browse', $category, array()) . '">' . htmlspecialchars($category['title'], ENT_QUOTES, 'UTF-8') . '</a></li>
	';
}
$__output .= '
</ul>';
