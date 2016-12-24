<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<div class="tagBlock TagContainer">
	' . 'Tags' . ':
	';
if ($tags)
{
$__output .= '
		<ul class="tagList">
		';
foreach ($tags AS $tag)
{
$__output .= '
			<li><a href="' . XenForo_Template_Helper_Core::link('tags', $tag, array()) . '" class="tag"><span class="arrow"></span>' . htmlspecialchars($tag['tag'], ENT_QUOTES, 'UTF-8') . '</a></li>
		';
}
$__output .= '
		</ul>
	';
}
$__output .= '
	';
if ($editUrl)
{
$__output .= '
		<a href="' . htmlspecialchars($editUrl, ENT_QUOTES, 'UTF-8', (false)) . '" class="OverlayTrigger tagBlockEdit">';
if ($tags)
{
$__output .= 'Edit';
}
else
{
$__output .= 'Add Tags';
}
$__output .= '</a>
	';
}
$__output .= '
</div>';
