<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Bookmarks';
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('account/bookmarks-edit-tags', false, array()) . '" method="post" class="xenForm AutoValidator" data-redirect="on">
	<h3 class="sectionHeader">' . 'Your Bookmark Tags' . ':</h3>

<div class="controlGroup">
';
if ($tags)
{
$__output .= '
	<ul>
		';
foreach ($tags AS $id => $tag)
{
$__output .= '
		 	<li>
		 		<dl class="ctrlUnit">
			 		<dd>
			 			<label><input name="tags[' . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . ']" type="text" class="textCtrl" size="30" maxlength="25" value="' . htmlspecialchars($tag['name'], ENT_QUOTES, 'UTF-8') . '" /></label>
			 		</dd>
		 		</dl>
		 	</li>
		';
}
$__output .= '
	</ul>
	
	<dl class="ctrlUnit submitUnit">
		<dd>
		<ul>
			<li>
				<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
				<input type="submit" accesskey="s" class="button primary" value="' . 'Edit Tags' . '" />
				<span class="hint">' . 'To delete a tag, simply empty its field.' . '</span>
			</li>
		</ul>
		</dd>
	</dl>
';
}
else
{
$__output .= '
	<br />' . 'No Tags Available' . '
';
}
$__output .= '
</div>
	
</form>';
