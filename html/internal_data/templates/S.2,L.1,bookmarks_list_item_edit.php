<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'bookmarks_list_item_edit');
$__output .= '
';
$this->addRequiredExternal('css', 'inline_mod');
$__output .= '

<li>
	<div class="bookmarksListItemEdit inlineCtrlGroup">
	
		<div class="' . (($tagsEnabled) ? ('noteEditCat') : ('noteEdit')) . ' editBlock">
			<label for="ctrl_note_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '">' . 'Note' . ':
				<input type="text" name="note" value="' . (($item['bookmark_note']) ? (htmlspecialchars($item['bookmark_note'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl" id="ctrl_note_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" maxlength="150" autofocus="true" />
			</label>
		</div>
			
		';
if ($tagsEnabled)
{
$__output .= '
		<div class="tagEdit editBlock">
			<label for="ctrl_tag_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '">' . 'Tag' . ':
				<input type="text" name="tag" value="' . (($item['bookmark_tag']) ? (htmlspecialchars($item['bookmark_tag'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl" id="ctrl_tag_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" maxlength="25" />
			</label>
		</div>
		';
}
$__output .= '
		
		';
if ($publicEnabled)
{
$__output .= '
		<ul class="optionsEdit editBlock">
			<li><label for="ctrl_public_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '"><input type="checkbox" name="public" value="1" id="ctrl_public_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" ' . (($item['public']) ? ' checked="checked"' : '') . ' /> ' . 'Public' . '</label></li>
		</ul>
		';
}
$__output .= '

		<ul class="optionsEdit editBlock">
			<li><label for="ctrl_sticky_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '"><input type="checkbox" name="sticky" value="1" id="ctrl_sticky_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" ' . (($item['sticky']) ? ' checked="checked"' : '') . ' /> ' . 'Sticky' . '</label></li>
		</ul>
		
		';
if ($navTabEnabled)
{
$__output .= '	
		<ul class="optionsEdit editBlock">
			<li><label for="ctrl_quick_link_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '"><input type="checkbox" name="quick_link" value="1" id="ctrl_quick_link_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" ' . (($item['quick_link']) ? ' checked="checked"' : '') . ' /> ' . 'Quick Link' . '</label></li>
		</ul>
		';
}
$__output .= '
		
		<input type="hidden" name="prev_sticky_state" value="' . htmlspecialchars($item['sticky'], ENT_QUOTES, 'UTF-8') . '" />
			
		<div class="buttons editBlock">
			<img src="' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/widgets/ajaxload.info_000000_facebook.gif" class="AjaxSaveProgress" alt="" />
			<input type="submit" value="' . 'Save' . '" class="textCtrl primary" id="ctrl_submit_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" data-submitUrl="' . XenForo_Template_Helper_Core::link('bookmarks/edit', $item, array()) . '" onClick="document.getElementById(\'bookmark_id\').value=' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" />
			<input type="reset" value="' . 'Cancel' . '" class="textCtrl" id="ctrl_reset_' . htmlspecialchars($item['bookmark_id'], ENT_QUOTES, 'UTF-8') . '" />
		</div>
		
	</div>	
</li>';
