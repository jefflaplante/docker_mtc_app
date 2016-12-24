<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<form action="' . XenForo_Template_Helper_Core::link('bookmarks/search-process', false, array()) . '" method="post" class="xenForm formOverlay">
	<dl class="ctrlUnit">
		<dt><label for="note_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '">' . 'Content Type' . ':</label></dt>
		<dd>
			<select name="content_type" class="textCtrl">
			    <option value="all">' . 'All' . '</option>
			    ';
foreach ($contentTypes AS $type => $contentType)
{
$__output .= '
			    	<option value="' . htmlspecialchars($type, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($contentType, ENT_QUOTES, 'UTF-8') . '</option>
			    ';
}
$__output .= '
			</select>
		</dd>
	</dl>
	';
if ($tagNames)
{
$__output .= '
		<dl class="ctrlUnit">
			<dt><label for="note_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '">' . 'Tag' . ':</label></dt>
			<dd>
				<select name="tag" class="textCtrl">
					<option value="">' . 'All' . '</option>
					';
foreach ($tagNames AS $tag)
{
$__output .= '
					<option value="' . htmlspecialchars($tag['name'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($tag['name'], ENT_QUOTES, 'UTF-8') . '</option>
					';
}
$__output .= '
				</select>
			</dd>
		</dl>
	';
}
$__output .= '
	<dl class="ctrlUnit">
		<dt><label for="quick_link_yes_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '">' . 'Quick Link' . '</label></dt>
		<dd>
			<select name="quick_link" class="textCtrl">
				<option value="0">' . 'All' . '</option>
				<option value="1">' . 'Quick Link Only' . '</option>
			</select>
		</dd>
	</dl>
	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" name="save" value="' . 'Search' . '" accesskey="s" class="button primary OverlayTrigger"> <input type="reset" class="button OverlayCloser" value="' . 'Cancel' . '"></dd>
	</dl>
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
