<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Bookmark Delete Confirmation';
$__output .= '
';
$this->addRequiredExternal('js', 'js/bookmarks/bookmarks.js');
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('bookmarks/delete', false, array()) . '" method="post" class="xenForm formOverlay AutoValidator" id="BookmarksForm">

	<p>' . 'Are you sure you want to delete this bookmark item?' . '</p>
	
	<dl class="ctrlUnit submitUnit">
	<dt></dt>
		<dd>
		<input type="submit" value="' . 'Delete' . '" class="button primary" />
		</dd>
	</dl>

	<input type="hidden" name="bookmark_id" value="' . htmlspecialchars($bookmark_id, ENT_QUOTES, 'UTF-8') . '" />
    <input type="hidden" name="via_content" value="' . htmlspecialchars($via_content, ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfConfirm" value="1" />
</form>';
