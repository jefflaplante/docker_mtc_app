<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Preview Message';
$__output .= '

';
$this->addRequiredExternal('css', 'user_message_preview');
$__output .= '

<div class="section">
	<h3 class="subHeading">' . htmlspecialchars($conversation['message_title'], ENT_QUOTES, 'UTF-8') . '</h3>
	<div class="overlayScroll messageText primaryContent baseHtml">
		' . $conversation['messageHtml'] . '
	</div>
	<div class="sectionFooter overlayOnly"><a class="button primary OverlayCloser">' . 'Close' . '</a></div>
</div>';
