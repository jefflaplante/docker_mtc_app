<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($xenOptions['xengalleryShowStatisticsBlock']['enabled'])
{
$__output .= '
	<div class="section xengallery_gallery_statistics">
		<dl class="secondaryContent">
			<h3>' . 'xengallery_gallery_statistics' . '</h3>
			<div class="statisticsBlock pairsJustified">

				';
if ($visitor['permissions']['xengallery']['viewCategories'])
{
$__output .= '
					<dl class="ctrlUnit">
						<dt>' . 'xengallery_categories' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($xenCache['xengalleryStatisticsCache']['category_count'], '0') . '</dd>
					</dl>
				';
}
$__output .= '

				';
if ($visitor['permissions']['xengallery']['viewAlbums'])
{
$__output .= '
					<dl class="ctrlUnit">
						<dt>' . 'xengallery_albums' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($xenCache['xengalleryStatisticsCache']['album_count'], '0') . '</dd>
					</dl>
				';
}
$__output .= '

				<dl class="ctrlUnit">
					<dt>' . 'xengallery_uploaded_media' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::numberFormat($xenCache['xengalleryStatisticsCache']['upload_count'], '0') . '</dd>
				</dl>

				<dl class="ctrlUnit">
					<dt>' . 'xengallery_embedded_media' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::numberFormat($xenCache['xengalleryStatisticsCache']['embed_count'], '0') . '</dd>
				</dl>

				<dl class="ctrlUnit">
					<dt>' . 'xengallery_comments' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::numberFormat($xenCache['xengalleryStatisticsCache']['comment_count'], '0') . '</dd>
				</dl>

				<dl class="ctrlUnit">
					<dt>' . 'xengallery_disk_usage' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::numberFormat($xenCache['xengalleryStatisticsCache']['disk_usage'], 'size') . '</dd>
				</dl>
			</div>
		</dl>
	</div>
	';
if ($visitor['permissions']['xengallery']['view'] AND $visitor['user_id'])
{
$__output .= '
		<div class="section xengallery_your_statistics">
			<dl class="secondaryContent">
				<h3>' . 'xengallery_your_statistics' . '</h3>
				<div class="statisticsBlock pairsJustified">
					';
if ($visitor['permissions']['xengallery']['viewAlbums'])
{
$__output .= '
						<dl class="ctrlUnit">
							<dt>' . 'xengallery_your_albums' . ':</dt>
							<dd><a href="' . XenForo_Template_Helper_Core::link('xengallery/users/albums', $visitor, array()) . '">' . XenForo_Template_Helper_Core::numberFormat($visitor['xengallery_album_count'], '0') . '</a></dd>
						</dl>
					';
}
$__output .= '

					<dl class="ctrlUnit">
						<dt>' . 'xengallery_your_media' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('xengallery/users', $visitor, array()) . '">' . XenForo_Template_Helper_Core::numberFormat($visitor['xengallery_media_count'], '0') . '</a></dd>
					</dl>

					<dl class="ctrlUnit">
						<dt>' . 'xengallery_your_usage' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['xengallery_media_quota'], 'size') . '</dd>
					</dl>
				</div>
			</dl>
		</div>
	';
}
$__output .= '
';
}
