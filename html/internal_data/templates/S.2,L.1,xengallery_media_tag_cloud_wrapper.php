<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'xengallery_media_tag_cloud');
$__output .= '

<div class="section xengallery_tag_cloud">
	<form action="' . XenForo_Template_Helper_Core::link('xengallery/tag-jump', false, array()) . '" method="post" class="secondaryContent tagCloudBlock">
		<h3><a href="' . XenForo_Template_Helper_Core::link('xengallery/tags', false, array()) . '">';
if ($xenOptions['xengalleryShowTagCloud']['enabled'])
{
$__output .= 'xengallery_tag_cloud';
}
else
{
$__output .= 'xengallery_tag_search';
}
$__output .= '</a></h3>
		<input type="search" name="tag_clean" placeholder="' . 'xengallery_search_tags' . '..." results="0" class="textCtrl AutoComplete AcSingle" data-autosubmit="true" data-acurl="' . XenForo_Template_Helper_Core::link('xengallery/tagging-auto-complete', false, array()) . '" />
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		<div>
			';
if ($xenOptions['xengalleryShowTagCloud']['enabled'] AND $xenCache['xengalleryTagCloudCache'])
{
$__output .= '
				' . XenForo_Template_Helper_Core::callHelper('tagcloud', array(
'0' => $xenCache['xengalleryTagCloudCache'],
'1' => $xenOptions['xengalleryShowTagCloud']['limit']
)) . '
			';
}
$__output .= '
		</div>
	</form>
</div>';
