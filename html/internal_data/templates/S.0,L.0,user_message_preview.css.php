<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '/** Text used in message bodies **/

.messageText
{
	' . XenForo_Template_Helper_Core::styleProperty('messageText') . '
}

	.messageText img,
	.messageText iframe,
	.messageText object,
	.messageText embed
	{
		max-width: 100%;
	}';
