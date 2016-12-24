<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['h1'] = '';
$__output .= '

';
$__extraData['pageDescription'] = array();
$__extraData['pageDescription']['content'] = '';
$__output .= '

';
$__extraData['head']['openGraph'] = '';
$__extraData['head']['openGraph'] .= '
	';
$__compilerVar1 = '';
$__compilerVar1 .= XenForo_Template_Helper_Core::link('canonical:resources', $resource, array());
$__compilerVar2 = '';
$__compilerVar2 .= XenForo_Template_Helper_Core::callHelper('resourcePrefix', array(
'0' => $resource,
'1' => 'escaped'
)) . htmlspecialchars($resource['title'], ENT_QUOTES, 'UTF-8');
$__compilerVar3 = '';
if ($xenOptions['facebookAppId'] OR $xenOptions['facebookAdmins'])
{
$__compilerVar3 .= '
	<meta property="og:site_name" content="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
	';
if ($avatar)
{
$__compilerVar3 .= '<meta property="og:image" content="' . htmlspecialchars($avatar, ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar3 .= '
	<meta property="og:image" content="' . XenForo_Template_Helper_Core::callHelper('fullurl', array(
'0' => XenForo_Template_Helper_Core::styleProperty('ogLogoPath'),
'1' => '1'
)) . '" />
	<meta property="og:type" content="' . (($ogType) ? (htmlspecialchars($ogType, ENT_QUOTES, 'UTF-8')) : ('article')) . '" />
	<meta property="og:url" content="' . $__compilerVar1 . '" />
	<meta property="og:title" content="' . $__compilerVar2 . '" />
	';
if ($description)
{
$__compilerVar3 .= '<meta property="og:description" content="' . $description . '" />';
}
$__compilerVar3 .= '
	' . $ogExtraHtml . '
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar3 .= '<meta property="fb:app_id" content="' . htmlspecialchars($xenOptions['facebookAppId'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar3 .= '
	';
if ($xenOptions['facebookAdmins'])
{
$__compilerVar3 .= '<meta property="fb:admins" content="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $xenOptions['facebookAdmins'],
'1' => ','
)) . '" />';
}
$__compilerVar3 .= '
';
}
$__extraData['head']['openGraph'] .= $__compilerVar3;
unset($__compilerVar1, $__compilerVar2, $__compilerVar3);
$__output .= '
';
$__extraData['searchBar']['resourceUpdate'] = '';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'] = XenForo_Template_Helper_Core::appendBreadCrumbs($__extraData['navigation'], $categoryBreadcrumbs);
$__output .= '

';
if ($resource['canAddVersion'])
{
$__output .= '
	';
$__extraData['topctrl'] = '';
$__extraData['topctrl'] .= '<a href="' . XenForo_Template_Helper_Core::link('resources/add-version', $resource, array()) . '" class="callToAction"><span>' . 'post_resource_update' . '</span></a>';
$__output .= '
';
}
$__output .= '

';
$this->addRequiredExternal('css', 'resource_view');
$__output .= '

' . '

';
if ($xenOptions['enableTagging'] AND $xenOptions['tagPosition'] == ('top') AND ($resource['canEditTags'] OR $resource['tagsList']))
{
$__output .= '
	';
$__compilerVar4 = '';
$__compilerVar4 .= (($resource['canEditTags']) ? (XenForo_Template_Helper_Core::link('resources/tags', $resource, array())) : (''));
$__compilerVar5 = '';
$__compilerVar5 .= '<div class="tagBlock TagContainer">
	' . 'Tags' . ':
	';
if ($resource['tagsList'])
{
$__compilerVar5 .= '
		<ul class="tagList">
		';
foreach ($resource['tagsList'] AS $tag)
{
$__compilerVar5 .= '
			<li><a href="' . XenForo_Template_Helper_Core::link('tags', $tag, array()) . '" class="tag"><span class="arrow"></span>' . htmlspecialchars($tag['tag'], ENT_QUOTES, 'UTF-8') . '</a></li>
		';
}
$__compilerVar5 .= '
		</ul>
	';
}
$__compilerVar5 .= '
	';
if ($__compilerVar4)
{
$__compilerVar5 .= '
		<a href="' . htmlspecialchars($__compilerVar4, ENT_QUOTES, 'UTF-8', (false)) . '" class="OverlayTrigger tagBlockEdit">';
if ($resource['tagsList'])
{
$__compilerVar5 .= 'Edit';
}
else
{
$__compilerVar5 .= 'Add Tags';
}
$__compilerVar5 .= '</a>
	';
}
$__compilerVar5 .= '
</div>';
$__output .= $__compilerVar5;
unset($__compilerVar4, $__compilerVar5);
$__output .= '
';
}
$__output .= '

' . '

<div class="innerContent">
	' . $_subView . '
</div>';
if ($brmeOptions['enabled_title'])
{
if ($brmeOptions['title'] == ('user') && $metaData['title'])
{
$__extraData['title'] = '';
$__extraData['title'] .= $metaData['title'];
}
else if ($brmeOptions['title'] == ('fixed') && $brmeOptions['titleFixed'])
{
$__extraData['title'] = '';
$__extraData['title'] .= $brmeOptions['titleFixed'];
}
}
$__output .= '

';
if ($resourceTagsHtml AND $xenOptions['tagPosition'] == ('top'))
{
$__output .= $resourceTagsHtml;
}
$__output .= '

';
$__extraData['sidebar'] = '';
$__extraData['sidebar'] .= '
	';
$__extraData['noVisitorPanel'] = '';
$__extraData['noVisitorPanel'] .= '1';
$__extraData['sidebar'] .= '

	';
$__compilerVar6 = '';
$__extraData['sidebar'] .= $this->callTemplateHook('resource_view_sidebar_start', $__compilerVar6, array(
'resource' => $resource
));
unset($__compilerVar6);
$__extraData['sidebar'] .= '
	
	<div class="section statsList" id="resourceInfo"' . (($resource['rating_count']) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Review-aggregate"') : ('')) . '>
		<div class="secondaryContent">
		';
$__compilerVar7 = '';
$__compilerVar7 .= '
			<h3>
				' . 'Information' . '
				';
if ($resource['feature_date'])
{
$__compilerVar7 .= '
					<strong class="featuredNotice">' . 'featured' . '</strong>
				';
}
$__compilerVar7 .= '
			</h3>
			<span style="display:none">
				<span itemprop="itemreviewed">' . XenForo_Template_Helper_Core::callHelper('resourcePrefix', array(
'0' => $resource,
'1' => 'escaped'
)) . htmlspecialchars($resource['title'], ENT_QUOTES, 'UTF-8') . '</span>,
				<span itemprop="votes">' . htmlspecialchars($resource['rating_count'], ENT_QUOTES, 'UTF-8') . '</span> ' . 'rm_ratings' . '
			</span>
			<div class="pairsJustified">
				<dl class="author"><dt>' . 'Author' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($resource,'',false,array(
'href' => XenForo_Template_Helper_Core::link('resources/authors', $resource, array()),
'class' => 'NoOverlay'
))) . '</dd>
				</dl>
				';
if (!$resource['is_fileless'])
{
$__compilerVar7 .= '
					<dl class="downloadCount"><dt title="' . 'by_unique_downloaders' . '">' . 'total_downloads' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($resource['download_count'], '0') . '</dd></dl>
				';
}
$__compilerVar7 .= '
				<dl class="firstRelease"><dt>' . 'first_release' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($resource['resource_date'],array(
'time' => '$resource.resource_date'
))) . '</dd></dl>
				<dl class="lastUpdate"><dt>' . 'last_update' . ':</dt>
					<dd>' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($resource['last_update'],array(
'time' => '$resource.last_update'
))) . '</dd></dl>
				<dl class="resourceCategory"><dt>' . 'category' . ':</dt>
					<dd><a href="' . XenForo_Template_Helper_Core::link('resources/categories', $category, array()) . '">' . htmlspecialchars($category['category_title'], ENT_QUOTES, 'UTF-8') . '</a></dd></dl>
				';
$__compilerVar8 = '';
$__compilerVar8 .= (($resource['canRateIfDownloaded']) ? (XenForo_Template_Helper_Core::link('resources/rate', $resource, array())) : (''));
$__compilerVar9 = '';
$__compilerVar9 .= htmlspecialchars($resource['rating_avg'], ENT_QUOTES, 'UTF-8');
$__compilerVar10 = '';
$__compilerVar10 .= 'all_time_rating' . ':';
$__compilerVar11 = '';
$__compilerVar11 .= (($resource['rating_count'] == 1) ? ('rm_1_rating') : ('rm_x_ratings'));
$__compilerVar12 = '';
$__compilerVar12 .= (($resource['rating_count']) ? ('1') : ('0'));
$__compilerVar13 = '';
$this->addRequiredExternal('css', 'rating');
$__compilerVar13 .= '

';
if ($__compilerVar8)
{
$__compilerVar13 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/rating.js');
$__compilerVar13 .= '

	<form action="' . htmlspecialchars($__compilerVar8, ENT_QUOTES, 'UTF-8') . '" method="post" class="rating RatingWidget" ' . (($__compilerVar12) ? ('itemscope="itemscope" itemtype="http://data-vocabulary.org/Rating"') : ('')) . '>
		<dl>
			<dt class="prompt muted">' . $__compilerVar10 . '</dt>
			<dd>
				<span class="ratings">
					 <button type="submit" name="rating" value="1" class="star ' . (($__compilerVar9 >= 1) ? ('Full') : ('')) . (($__compilerVar9 >= 0.5 AND $__compilerVar9 < 1) ? ('Half') : ('')) . '" title="' . 'Terrible' . '">1</button
					><button type="submit" name="rating" value="2" class="star ' . (($__compilerVar9 >= 2) ? ('Full') : ('')) . (($__compilerVar9 >= 1.5 AND $__compilerVar9 < 2) ? ('Half') : ('')) . '" title="' . 'Poor' . '">2</button
					><button type="submit" name="rating" value="3" class="star ' . (($__compilerVar9 >= 3) ? ('Full') : ('')) . (($__compilerVar9 >= 2.5 AND $__compilerVar9 < 3) ? ('Half') : ('')) . '" title="' . 'Average' . '">3</button
					><button type="submit" name="rating" value="4" class="star ' . (($__compilerVar9 >= 4) ? ('Full') : ('')) . (($__compilerVar9 >= 3.5 AND $__compilerVar9 < 4) ? ('Half') : ('')) . '" title="' . 'Good' . '">4</button
					><button type="submit" name="rating" value="5" class="star ' . (($__compilerVar9 >= 5) ? ('Full') : ('')) . (($__compilerVar9 >= 4.5 AND $__compilerVar9 < 5) ? ('Half') : ('')) . '" title="' . 'Excellent' . '">5</button>
				</span>
			
				<span class="RatingValue"><span class="Number" itemprop="average">' . htmlspecialchars($__compilerVar9, ENT_QUOTES, 'UTF-8') . '</span>/<span itemprop="best">5</span>,</span>
				<span class="Hint">' . $__compilerVar11 . '</span>
			</dd>
		</dl>
		
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
	
';
}
else
{
$__compilerVar13 .= '
	
	<div class="rating">
		<dl>
			<dt class="prompt muted">' . $__compilerVar10 . '</dt>
			<dd>		
				<span class="ratings" title="' . XenForo_Template_Helper_Core::numberFormat($__compilerVar9, '2') . '">
					 <span class="star ' . (($__compilerVar9 >= 1) ? ('Full') : ('')) . (($__compilerVar9 >= 0.5 AND $__compilerVar9 < 1) ? ('Half') : ('')) . '"></span
					><span class="star ' . (($__compilerVar9 >= 2) ? ('Full') : ('')) . (($__compilerVar9 >= 1.5 AND $__compilerVar9 < 2) ? ('Half') : ('')) . '"></span
					><span class="star ' . (($__compilerVar9 >= 3) ? ('Full') : ('')) . (($__compilerVar9 >= 2.5 AND $__compilerVar9 < 3) ? ('Half') : ('')) . '"></span
					><span class="star ' . (($__compilerVar9 >= 4) ? ('Full') : ('')) . (($__compilerVar9 >= 3.5 AND $__compilerVar9 < 4) ? ('Half') : ('')) . '"></span
					><span class="star ' . (($__compilerVar9 >= 5) ? ('Full') : ('')) . (($__compilerVar9 >= 4.5 AND $__compilerVar9 < 5) ? ('Half') : ('')) . '"></span>
				</span>
				
				<span class="RatingValue"><span class="Number" itemprop="average">' . htmlspecialchars($__compilerVar9, ENT_QUOTES, 'UTF-8') . '</span>/<span itemprop="best">5</span>,</span>
				<span class="Hint">' . $__compilerVar11 . '</span>
			</dd>
		</dl>	
	</div>

';
}
$__compilerVar7 .= $__compilerVar13;
unset($__compilerVar8, $__compilerVar9, $__compilerVar10, $__compilerVar11, $__compilerVar12, $__compilerVar13);
$__compilerVar7 .= '
			</div>

			';
if ($resource['external_url'])
{
$__compilerVar7 .= '
				<div class="footnote">
					<a href="' . htmlspecialchars($resource['external_url'], ENT_QUOTES, 'UTF-8') . '" ' . ((!$resource['isTrusted']) ? ('rel="nofollow"') : ('')) . ' target="_blank">' . 'find_more_info_at_x' . '...</a>
				</div>
			';
}
$__compilerVar7 .= '
		';
$__extraData['sidebar'] .= $this->callTemplateHook('resource_view_sidebar_resource_info', $__compilerVar7, array());
unset($__compilerVar7);
$__extraData['sidebar'] .= '
		</div>
	</div>

	';
$__compilerVar14 = '';
$__extraData['sidebar'] .= $this->callTemplateHook('resource_view_sidebar_below_info', $__compilerVar14, array(
'resource' => $resource
));
unset($__compilerVar14);
$__extraData['sidebar'] .= '
	
	';
if (!$resource['isFilelessNoExternal'])
{
$__extraData['sidebar'] .= '
		<div class="section" id="versionInfo">
			<div class="secondaryContent">
			';
$__compilerVar15 = '';
$__compilerVar15 .= '
				<h3>' . 'version_x' . '</h3>
		
				<div class="pairsJustified">
					<dl class="versionReleaseDate"><dt>' . 'released' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($resource['release_date'],array(
'time' => '$resource.release_date'
))) . '</dd></dl>
		
					';
if (!$resource['is_fileless'])
{
$__compilerVar15 .= '
						<dl class="versionDownloadCount"><dt title="' . 'by_unique_downloaders' . '">' . 'downloads' . ':</dt>
							<dd>' . XenForo_Template_Helper_Core::numberFormat($resource['version_download_count'], '0') . '</dd></dl>
					';
}
$__compilerVar15 .= '
		
					';
$__compilerVar16 = '';
$__compilerVar16 .= (($resource['canRateIfDownloaded']) ? (XenForo_Template_Helper_Core::link('resources/rate', $resource, array())) : (''));
$__compilerVar17 = '';
$__compilerVar17 .= htmlspecialchars($resource['version_rating'], ENT_QUOTES, 'UTF-8');
$__compilerVar18 = '';
$__compilerVar18 .= 'version_rating' . ':';
$__compilerVar19 = '';
$__compilerVar19 .= (($resource['version_rating_count'] == 1) ? ('rm_1_rating') : ('rm_x_ratings'));
$__compilerVar20 = '';
$this->addRequiredExternal('css', 'rating');
$__compilerVar20 .= '

';
if ($__compilerVar16)
{
$__compilerVar20 .= '
	';
$this->addRequiredExternal('js', 'js/xenforo/rating.js');
$__compilerVar20 .= '

	<form action="' . htmlspecialchars($__compilerVar16, ENT_QUOTES, 'UTF-8') . '" method="post" class="rating RatingWidget" ' . (($microdata) ? ('itemscope="itemscope" itemtype="http://data-vocabulary.org/Rating"') : ('')) . '>
		<dl>
			<dt class="prompt muted">' . $__compilerVar18 . '</dt>
			<dd>
				<span class="ratings">
					 <button type="submit" name="rating" value="1" class="star ' . (($__compilerVar17 >= 1) ? ('Full') : ('')) . (($__compilerVar17 >= 0.5 AND $__compilerVar17 < 1) ? ('Half') : ('')) . '" title="' . 'Terrible' . '">1</button
					><button type="submit" name="rating" value="2" class="star ' . (($__compilerVar17 >= 2) ? ('Full') : ('')) . (($__compilerVar17 >= 1.5 AND $__compilerVar17 < 2) ? ('Half') : ('')) . '" title="' . 'Poor' . '">2</button
					><button type="submit" name="rating" value="3" class="star ' . (($__compilerVar17 >= 3) ? ('Full') : ('')) . (($__compilerVar17 >= 2.5 AND $__compilerVar17 < 3) ? ('Half') : ('')) . '" title="' . 'Average' . '">3</button
					><button type="submit" name="rating" value="4" class="star ' . (($__compilerVar17 >= 4) ? ('Full') : ('')) . (($__compilerVar17 >= 3.5 AND $__compilerVar17 < 4) ? ('Half') : ('')) . '" title="' . 'Good' . '">4</button
					><button type="submit" name="rating" value="5" class="star ' . (($__compilerVar17 >= 5) ? ('Full') : ('')) . (($__compilerVar17 >= 4.5 AND $__compilerVar17 < 5) ? ('Half') : ('')) . '" title="' . 'Excellent' . '">5</button>
				</span>
			
				<span class="RatingValue"><span class="Number" itemprop="average">' . htmlspecialchars($__compilerVar17, ENT_QUOTES, 'UTF-8') . '</span>/<span itemprop="best">5</span>,</span>
				<span class="Hint">' . $__compilerVar19 . '</span>
			</dd>
		</dl>
		
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
	
';
}
else
{
$__compilerVar20 .= '
	
	<div class="rating">
		<dl>
			<dt class="prompt muted">' . $__compilerVar18 . '</dt>
			<dd>		
				<span class="ratings" title="' . XenForo_Template_Helper_Core::numberFormat($__compilerVar17, '2') . '">
					 <span class="star ' . (($__compilerVar17 >= 1) ? ('Full') : ('')) . (($__compilerVar17 >= 0.5 AND $__compilerVar17 < 1) ? ('Half') : ('')) . '"></span
					><span class="star ' . (($__compilerVar17 >= 2) ? ('Full') : ('')) . (($__compilerVar17 >= 1.5 AND $__compilerVar17 < 2) ? ('Half') : ('')) . '"></span
					><span class="star ' . (($__compilerVar17 >= 3) ? ('Full') : ('')) . (($__compilerVar17 >= 2.5 AND $__compilerVar17 < 3) ? ('Half') : ('')) . '"></span
					><span class="star ' . (($__compilerVar17 >= 4) ? ('Full') : ('')) . (($__compilerVar17 >= 3.5 AND $__compilerVar17 < 4) ? ('Half') : ('')) . '"></span
					><span class="star ' . (($__compilerVar17 >= 5) ? ('Full') : ('')) . (($__compilerVar17 >= 4.5 AND $__compilerVar17 < 5) ? ('Half') : ('')) . '"></span>
				</span>
				
				<span class="RatingValue"><span class="Number" itemprop="average">' . htmlspecialchars($__compilerVar17, ENT_QUOTES, 'UTF-8') . '</span>/<span itemprop="best">5</span>,</span>
				<span class="Hint">' . $__compilerVar19 . '</span>
			</dd>
		</dl>	
	</div>

';
}
$__compilerVar15 .= $__compilerVar20;
unset($__compilerVar16, $__compilerVar17, $__compilerVar18, $__compilerVar19, $__compilerVar20);
$__compilerVar15 .= '
		
					';
if ($resource['canRateIfDownloaded'] AND !$resource['canRate'])
{
$__compilerVar15 .= '
						<span class="muted">' . 'you_may_only_rate_after_downloading' . '</span>
					';
}
$__compilerVar15 .= '
				</div>
			';
$__extraData['sidebar'] .= $this->callTemplateHook('resource_view_sidebar_version_info', $__compilerVar15, array());
unset($__compilerVar15);
$__extraData['sidebar'] .= '
			</div>
		</div>
	';
}
$__extraData['sidebar'] .= '

	';
$__compilerVar21 = '';
$__extraData['sidebar'] .= $this->callTemplateHook('resource_view_sidebar_below_version', $__compilerVar21, array(
'resource' => $resource
));
unset($__compilerVar21);
$__extraData['sidebar'] .= '

	';
if ($xenOptions['allowAltResourceSupportUrl'] and $resource['alt_support_url'])
{
$__extraData['sidebar'] .= '
		<a class="callToAction" href="' . htmlspecialchars($resource['alt_support_url'], ENT_QUOTES, 'UTF-8') . '" ' . ((!$resource['isTrusted']) ? ('rel="nofollow"') : ('')) . '><span>
			' . 'ask_questions_get_support' . '
		</span></a>
	';
}
$__extraData['sidebar'] .= '

	';
$__compilerVar22 = '';
$__extraData['sidebar'] .= $this->callTemplateHook('resource_view_sidebar_below_support_button', $__compilerVar22, array(
'resource' => $resource
));
unset($__compilerVar22);
$__extraData['sidebar'] .= '

	';
if ($thread)
{
$__extraData['sidebar'] .= '<a class="callToAction" href="' . XenForo_Template_Helper_Core::link('threads', $thread, array()) . '"><span>
		' . 'discuss_this_resource' . '
		';
if ($thread['reply_count'])
{
$__extraData['sidebar'] .= '<small class="minorText">' . 'Replies' . ': ' . XenForo_Template_Helper_Core::numberFormat($thread['reply_count'], '0') . ', ' . 'Latest' . ': ' . XenForo_Template_Helper_Core::datetime($thread['last_post_date'], '') . '</small>';
}
$__extraData['sidebar'] .= '
	</span></a>';
}
$__extraData['sidebar'] .= '

	';
$__compilerVar23 = '';
$__extraData['sidebar'] .= $this->callTemplateHook('resource_view_sidebar_below_discussion_button', $__compilerVar23, array(
'resource' => $resource
));
unset($__compilerVar23);
$__extraData['sidebar'] .= '

	';
$__compilerVar24 = '';
$__compilerVar24 .= '
					';
$__compilerVar25 = '';
$__compilerVar25 .= '
						';
if ($resource['canEdit'])
{
$__compilerVar25 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('resources/edit', $resource, array()) . '"><span>' . 'edit_resource' . '</span></a></li>
						';
}
$__compilerVar25 .= '
						';
if ($resource['canEditIcon'])
{
$__compilerVar25 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('resources/icon', $resource, array()) . '" class="OverlayTrigger" id="EditIconTrigger"><span>' . 'edit_resource_icon' . '</span></a></li>
						';
}
$__compilerVar25 .= '
						';
if ($resource['canAddVersion'])
{
$__compilerVar25 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('resources/add-version', $resource, array()) . '"><span>' . 'post_resource_update' . '</span></a></li>
						';
}
$__compilerVar25 .= '
						';
if ($resource['canDelete'])
{
$__compilerVar25 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('resources/delete', $resource, array()) . '" class="OverlayTrigger"><span>' . 'delete_resource' . '</span></a></li>
						';
}
$__compilerVar25 .= '
						';
if ($resource['canUndelete'])
{
$__compilerVar25 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('resources/undelete', $resource, array()) . '" class="OverlayTrigger"><span>' . 'undelete_resource' . '</span></a></li>
						';
}
$__compilerVar25 .= '
						';
if ($resource['canApprove'])
{
$__compilerVar25 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('resources/approve', $resource, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger"><span>' . 'approve_resource' . '</span></a></li>
						';
}
$__compilerVar25 .= '
						';
if ($resource['canUnapprove'])
{
$__compilerVar25 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('resources/unapprove', $resource, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger"><span>' . 'unapprove_resource' . '</span></a></li>
						';
}
$__compilerVar25 .= '
						';
if ($resource['canFeatureUnfeature'])
{
$__compilerVar25 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('resources/toggle-featured', $resource, array(
't' => $visitor['csrf_token_page']
)) . '" class="OverlayTrigger">';
if ($resource['feature_date'])
{
$__compilerVar25 .= 'unfeature_resource';
}
else
{
$__compilerVar25 .= 'feature_resource';
}
$__compilerVar25 .= '</a></li>
						';
}
$__compilerVar25 .= '
						';
if ($resource['canReassign'])
{
$__compilerVar25 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('resources/reassign', $resource, array()) . '" class="OverlayTrigger"><span>' . 'reassign_resource' . '</span></a></li>
						';
}
$__compilerVar25 .= '
					';
$__compilerVar24 .= $this->callTemplateHook('resource_controls', $__compilerVar25, array(
'resource' => $resource
));
unset($__compilerVar25);
$__compilerVar24 .= '
					';
if (trim($__compilerVar24) !== '')
{
$__extraData['sidebar'] .= '
		<div class="section">
			<div class="secondaryContent" id="authorTools">
				<h3>' . 'resource_tools' . '</h3>
				<ul class="resourceControls">
					' . $__compilerVar24 . '
				</ul>
			</div>
		</div>
	';
}
unset($__compilerVar24);
$__extraData['sidebar'] .= '

	';
$__compilerVar26 = '';
$__extraData['sidebar'] .= $this->callTemplateHook('resource_view_sidebar_below_resource_controls', $__compilerVar26, array(
'resource' => $resource
));
unset($__compilerVar26);
$__extraData['sidebar'] .= '

	';
if ($otherResources)
{
$__extraData['sidebar'] .= '
	<div class="section">
		<div class="secondaryContent" id="moreAppsByAuthor">
			<h3><a href="' . XenForo_Template_Helper_Core::link('resources/authors', $resource, array()) . '" class="concealed">' . 'more_resources_from_x' . '</a></h3>
			<dl>
			';
foreach ($otherResources AS $otherResource)
{
$__extraData['sidebar'] .= '
				<dt style="margin-top: 5px"><a href="' . XenForo_Template_Helper_Core::link('resources', $otherResource, array()) . '">' . XenForo_Template_Helper_Core::callHelper('resourcePrefix', array(
'0' => $otherResource
)) . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($otherResource['title'], ENT_QUOTES, 'UTF-8')
)) . '</a></dt>
					<dd class="muted">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($otherResource['tag_line'], ENT_QUOTES, 'UTF-8')
)) . '</dd>
			';
}
$__extraData['sidebar'] .= '
			</dl>
		</div>
	</div>
	';
}
$__extraData['sidebar'] .= '

	';
$__compilerVar27 = '';
$__extraData['sidebar'] .= $this->callTemplateHook('resource_view_sidebar_below_other_resources', $__compilerVar27, array(
'resource' => $resource
));
unset($__compilerVar27);
$__extraData['sidebar'] .= '

	' . '

	';
$__compilerVar29 = '';
$__extraData['sidebar'] .= $this->callTemplateHook('resource_view_sidebar_end', $__compilerVar29, array(
'resource' => $resource
));
unset($__compilerVar29);
$__extraData['sidebar'] .= '

';
$__output .= '

';
if ($autoClickTrigger)
{
$__output .= '
<script>
$(function() {
	$(\'' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($autoClickTrigger, ENT_QUOTES, 'UTF-8'), 'double') . '\').click();
});
</script>
';
}
