<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'bookmarks_deleted_media';
$__output .= '
';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'bookmarks_deleted_media';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('account/alerts', $user, array()), 'value' => htmlspecialchars($item['username'], ENT_QUOTES, 'UTF-8'));
$__output .= '

';
$this->addRequiredExternal('css', 'xengallery_media_thumb_item');
$__output .= '

<div class="section">
	<dl class="subHeading pairsInline"><dt>' . 'resource' . ':</dt> <dd><span class="ugc">
	';
if ($item['content']['not_viewable'])
{
$__output .= '
		' . htmlspecialchars($item['content']['media_title'], ENT_QUOTES, 'UTF-8') . '
	';
}
else
{
$__output .= '
		<a href="' . XenForo_Template_Helper_Core::link('media', $item['content'], array()) . '">' . htmlspecialchars($item['content']['media_title'], ENT_QUOTES, 'UTF-8') . '</a>
	';
}
$__output .= '
	<span></dd></dl>
	
	<div style="width: 50%;">
		' . '
	</div>
	
	<div class="sectionFooter overlayOnly">
		<a class="button primary OverlayCloser">' . 'Close' . '</a>
	</div>
</div>';
