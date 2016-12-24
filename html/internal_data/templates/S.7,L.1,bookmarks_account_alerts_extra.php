<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<h3 class="sectionHeader">' . 'Bookmarks' . '</h3>
<dl class="ctrlUnit">
	<dt>' . 'Receive an alert when someone' . '...</dt>
	<dd>
		<ul>
			<li><input type="hidden" name="alertSet[bookmarks_content_bookmark]" value="1" />
				<label><input type="checkbox" value="1" name="alert[bookmarks_content_bookmark]" ' . ((!$alertOptOuts['bookmarks_content_bookmark']) ? ' checked="checked"' : '') . ' /> 
				';
if ($resource AND $showcase AND $gallery)
{
$__output .= '
					' . 'Bookmarks your post, resource, showcase or media item' . '</label>
					<p class="hint">' . 'Someone bookmarks one of your posts, resources, showcase or media items' . '</p>
				';
}
else if ($resource AND $showcase)
{
$__output .= '
					' . 'Bookmarks your post, resource, or showcase item' . '</label>
					<p class="hint">' . 'Someone bookmarks one of your posts, resources, or showcase items' . '</p>
				';
}
else if ($resource AND $gallery)
{
$__output .= '
					' . 'Bookmarks your post, resource or media item' . '</label>
					<p class="hint">' . 'Someone bookmarks one of your posts, resources or media.' . '</p>
				';
}
else if ($showcase AND $gallery)
{
$__output .= '
					' . 'Bookmarks your post, showcase or media item.' . '</label>
					<p class="hint">' . 'Someone bookmarks one of your posts, showcase or media items.' . '</p>	
				';
}
else if ($resource)
{
$__output .= '
					' . 'Bookmarks your post or resource' . '</label>
					<p class="hint">' . 'Someone bookmarks one of your posts or resources' . '</p>	
				';
}
else if ($showcase)
{
$__output .= '
					' . 'Bookmarks your post or showcase item' . '</label>
					<p class="hint">' . 'Someone bookmarks one of your posts or showcase items' . '</p>
				';
}
else if ($gallery)
{
$__output .= '
					' . 'Bookmarks your media item' . '</label>
					<p class="hint">' . 'Someone bookmarks one of your media items.' . '</p>
				';
}
else
{
$__output .= '
					' . 'Bookmarks your post' . '</label>
					<p class="hint">' . 'Someone bookmarks one of your posts' . '</p>				
				';
}
$__output .= '
			</li>
		</ul>
	</dd>
	<dt>' . 'Receive an alert when a bookmarked' . '...</dt>
	<dd>
		<ul>
			<li><input type="hidden" name="alertSet[bookmarks_content_edit]" value="1" />
				<label><input type="checkbox" value="1" name="alert[bookmarks_content_edit]" ' . ((!$alertOptOuts['bookmarks_content_edit']) ? ' checked="checked"' : '') . ' />
				';
if ($resource AND $showcase AND $gallery)
{
$__output .= '
					' . 'Post, resource, showcase or media item is edited' . '</label>
					<p class="hint">' . 'A bookmarked post, resource, showcase or media item is edited' . '</p>
				';
}
else if ($resource AND $showcase)
{
$__output .= '
					' . 'Post, resource, or showcase item is edited' . '</label>
					<p class="hint">' . 'A bookmarked post, resource, or showcase item is edited' . '</p>
				';
}
else if ($resource AND $gallery)
{
$__output .= '
					' . 'Post, resource or media item is edited' . '</label>
					<p class="hint">' . 'A bookmarked post, resource or media item is edited' . '</p>
				';
}
else if ($showcase AND $gallery)
{
$__output .= '
					' . 'Post, showcase or media item is edited' . '</label>
					<p class="hint">' . 'A bookmarked post, showcase or media item is edited' . '</p>
				';
}
else if ($resource)
{
$__output .= '
					' . 'Post or resource is edited' . '</label>
					<p class="hint">' . 'A bookmarked post or resource is edited' . '</p>
				';
}
else if ($showcase)
{
$__output .= '
					' . 'Post or showcase item is edited' . '</label>
					<p class="hint">' . 'A bookmarked post or showcase item is edited' . '</p>
				';
}
else if ($gallery)
{
$__output .= '
					' . 'Post or media item is edited' . '</label>
					<p class="hint">' . 'A bookmarked post or media item is edited' . '</p>
				';
}
else
{
$__output .= '
					' . 'Post is edited' . '</label>
					<p class="hint">' . 'A bookmarked post is edited' . '</p>
				';
}
$__output .= '
			</li>
			<li><input type="hidden" name="alertSet[bookmarks_content_merge]" value="1" />
				<label><input type="checkbox" value="1" name="alert[bookmarks_content_merge]" ' . ((!$alertOptOuts['bookmarks_content_merge']) ? ' checked="checked"' : '') . ' /> ' . 'Post is merged' . '</label>
				<p class="hint">' . 'A bookmarked post is merged with another post' . '</p>
			</li>
			<li><input type="hidden" name="alertSet[bookmarks_content_not_viewable]" value="1" />
				<label><input type="checkbox" value="1" name="alert[bookmarks_content_not_viewable]" ' . ((!$alertOptOuts['bookmarks_content_not_viewable']) ? ' checked="checked"' : '') . ' />
				';
if ($resource AND $showcase AND $gallery)
{
$__output .= '
					' . 'Post, resource, showcase or media item is deleted or no longer viewable' . '</label>
					<p class="hint">' . 'A bookmarked post, resource, showcase or media item is no longer viewable to you and the bookmark was therefore deleted. If the bookmark was for a post, then this may happen when a post is deleted or moved to a forum to which you do not have viewing permission. If a profile post, then it was either deleted or that member is now limiting who may view their profile page.' . '</p>
				';
}
else if ($resource AND $showcase)
{
$__output .= '
					' . 'Post, resource, or showcase item is deleted or no longer viewable' . '</label>
					<p class="hint">' . 'A bookmarked post, resource, or showcase item is no longer viewable to you and the bookmark was therefore deleted. If the bookmark was for a post, then this may happen when a post is deleted or moved to a forum to which you do not have viewing permission. If a profile post, then it was either deleted or that member is now limiting who may view their profile page.' . '</p>
				';
}
else if ($resource AND $gallery)
{
$__output .= '
					' . 'Post, resource or media item is deleted or no longer viewable' . '</label>
					<p class="hint">' . 'A bookmarked post, resource or media item is no longer viewable to you and the bookmark was therefore deleted. If the bookmark was for a post, then this may happen when a post is deleted or moved to a forum to which you do not have viewing permission. If a profile post, then it was either deleted or that member is now limiting who may view their profile page.' . '</p>
				';
}
else if ($showcase AND $gallery)
{
$__output .= '
					' . 'Showcase or media item is deleted or no longer viewable' . '</label>
					<p class="hint">' . 'A bookmarked showcase or media item is no longer viewable to you and the bookmark was therefore deleted. If the bookmark was for a post, then this may happen when a post is deleted or moved to a forum to which you do not have viewing permission. If a profile post, then it was either deleted or that member is now limiting who may view their profile page.' . '</p>
				';
}
else if ($resource)
{
$__output .= '
					' . 'Post or resource is deleted or no longer viewable' . '</label>
					<p class="hint">' . 'A bookmarked post or resource is no longer viewable to you and the bookmark was therefore deleted. If the bookmark was for a post, then this may happen when a post is deleted or moved to a forum to which you do not have viewing permission. If a profile post, then it was either deleted or that member is now limiting who may view their profile page.' . '</p>
				';
}
else if ($showcase)
{
$__output .= '
					' . 'Post or showcase item is deleted or no longer viewable' . '</label>
					<p class="hint">' . 'A bookmarked post or showcase item is no longer viewable to you and the bookmark was therefore deleted. If the bookmark was for a post, then this may happen when a post is deleted or moved to a forum to which you do not have viewing permission. If a profile post, then it was either deleted or that member is now limiting who may view their profile page.' . '</p>
				';
}
else if ($gallery)
{
$__output .= '
					' . 'Media item is deleted or no longer viewable' . '</label>
					<p class="hint">' . 'A bookmarked post or media item is no longer viewable to you and the bookmark was therefore deleted. If the bookmark was for a post, then this may happen when a post is deleted or moved to a forum to which you do not have viewing permission. If a profile post, then it was either deleted or that member is now limiting who may view their profile page.' . '</p>
				';
}
else
{
$__output .= '
					' . 'Post is deleted or no longer viewable' . '</label>
					<p class="hint">' . 'A bookmarked post is no longer viewable to you and the bookmark was therefore deleted. If the bookmark was for a post, then this may happen when a post is deleted or moved to a forum to which you do not have viewing permission. If a profile post, then it was either deleted or that member is now limiting who may view their profile page.' . '</p>
				';
}
$__output .= '
			</li>
		</ul>
	</dd>
</dl>';
