<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= $_subView . '
';
$__extraData['bodyClasses'] = '';
$__extraData['bodyClasses'] .= 'xengalleryPage';
$__output .= '

';
$this->addRequiredExternal('css', 'xengallery_wrapper');
$__output .= '

<div class="xengallerySideBarContainer">
	<div class="xengallerySideBar">

		' . '

		<div class="section xengallery_albums">
			<dl class="secondaryContent">
				<h3>' . 'xengallery_albums' . '</h3>
				<ol class="categoryList albumCategory">
					<li class="' . (($albumsSelected) ? ('selected') : ('')) . '">
						<a href="' . XenForo_Template_Helper_Core::link('xengallery/albums', false, array()) . '">' . 'xengallery_browse_albums' . '</a>
					</li>
					';
if ($visitor['user_id'])
{
$__output .= '
						<li class="' . (($ownMediaSelected) ? (' selected') : ('')) . '">
							<a href="' . XenForo_Template_Helper_Core::link('xengallery/users/albums', $visitor, array()) . '">' . 'xengallery_your_albums' . '</a>
						</li>
						<li class="' . (($sharedMediaSelected) ? (' selected') : ('')) . '">
							<a href="' . XenForo_Template_Helper_Core::link('xengallery/albums/shared', false, array()) . '">' . 'xengallery_albums_shared_with_you' . '</a>
						</li>
					';
}
$__output .= '
				</ol>
			</dl>
		</div>

		';
if ($canViewCategories)
{
$__output .= '
			';
$__compilerVar1 = '';
$__compilerVar1 .= '
							' . $categoryHtml . '
						';
if (trim($__compilerVar1) !== '')
{
$__output .= '
				<div class="section xengallery_categories">
					<dl class="secondaryContent">
						<h3>' . 'xengallery_categories' . '</h3>
						' . $__compilerVar1 . '
					</dl>
				</div>
			';
}
unset($__compilerVar1);
$__output .= '
		';
}
$__output .= '

		';
if ($xenOptions['xengalleryShowRecentComments']['enabled'])
{
$__output .= '
			' . '
		';
}
$__output .= '

		';
if ($album)
{
$__output .= '
			<div class="section xengallery_album_information">
				<div class="secondaryContent">
					<h3>' . 'xengallery_album_information' . '</h3>
					<div class="pairsJustified">
						<dl class="albumOwner"><dt>' . 'xengallery_album_owner' . ':</dt>
							<dd><a href="' . XenForo_Template_Helper_Core::link('xengallery/users', $album, array()) . '">' . htmlspecialchars($album['username'], ENT_QUOTES, 'UTF-8') . '</a></dd>
						</dl>
						<dl class="mediaCount"><dt>' . 'xengallery_media_items' . ':</dt>
							<dd>' . XenForo_Template_Helper_Core::numberFormat($album['album_media_count'], '0') . '</dd>
						</dl>
					</div>
				</div>
			</div>
		';
}
$__output .= '
		';
if ($recentAlbums AND $xenOptions['xengalleryShowRecentAlbums']['enabled'])
{
$__output .= '
			<div class="section xengallery_recent_albums">	
				<dl class="secondaryContent albumList">
					<h3>' . 'xengallery_recent_albums' . '</h3>
					<ol class="recentComments">
						';
foreach ($recentAlbums AS $_album)
{
$__output .= '
							<li>
								' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($_album,(true),array(
'user' => '$_album',
'size' => 's',
'img' => 'true',
'href' => XenForo_Template_Helper_Core::link('xengallery/albums', $_album, array()),
'class' => 'NoOverlay Tooltip',
'title' => htmlspecialchars($_album['username'], ENT_QUOTES, 'UTF-8')
),'')) . '
								<div class="albumTitle"><a href="' . XenForo_Template_Helper_Core::link('xengallery/albums', $_album, array()) . '" class="username NoOverlay">' . htmlspecialchars($_album['album_title'], ENT_QUOTES, 'UTF-8') . '</a></div>
								<div class="extraData"><a href="' . XenForo_Template_Helper_Core::link('xengallery/albums', $_album, array()) . '">' . 'xengallery_media_items_count' . '</a></div>
							</li>
						';
}
$__output .= '
					</ol>		
				</dl>
			</div>			
		';
}
$__output .= '

		';
if ($xenOptions['xengalleryShowStatisticsBlock']['gallery_side'])
{
$__output .= '
			';
$__compilerVar4 = '';
if ($xenOptions['xengalleryShowStatisticsBlock']['enabled'])
{
$__compilerVar4 .= '
	<div class="section xengallery_gallery_statistics">
		<dl class="secondaryContent">
			<h3>' . 'xengallery_gallery_statistics' . '</h3>
			<div class="statisticsBlock pairsJustified">

				';
if ($visitor['permissions']['xengallery']['viewCategories'])
{
$__compilerVar4 .= '
					<dl class="ctrlUnit">
						<dt>' . 'xengallery_categories' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($xenCache['xengalleryStatisticsCache']['category_count'], '0') . '</dd>
					</dl>
				';
}
$__compilerVar4 .= '

				';
if ($visitor['permissions']['xengallery']['viewAlbums'])
{
$__compilerVar4 .= '
					<dl class="ctrlUnit">
						<dt>' . 'xengallery_albums' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($xenCache['xengalleryStatisticsCache']['album_count'], '0') . '</dd>
					</dl>
				';
}
$__compilerVar4 .= '

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
$__compilerVar4 .= '
		<div class="section xengallery_your_statistics">
			<dl class="secondaryContent">
				<h3>' . 'xengallery_your_statistics' . '</h3>
				<div class="statisticsBlock pairsJustified">
					';
if ($visitor['permissions']['xengallery']['viewAlbums'])
{
$__compilerVar4 .= '
						<dl class="ctrlUnit">
							<dt>' . 'xengallery_your_albums' . ':</dt>
							<dd><a href="' . XenForo_Template_Helper_Core::link('xengallery/users/albums', $visitor, array()) . '">' . XenForo_Template_Helper_Core::numberFormat($visitor['xengallery_album_count'], '0') . '</a></dd>
						</dl>
					';
}
$__compilerVar4 .= '

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
$__compilerVar4 .= '
';
}
$__output .= $__compilerVar4;
unset($__compilerVar4);
$__output .= '
		';
}
$__output .= '
	</div>
</div>';
