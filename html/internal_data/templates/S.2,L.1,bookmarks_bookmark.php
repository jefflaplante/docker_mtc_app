<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'bookmarks_bookmark');
$__output .= '
<script type="text/javascript">
function checkForm($contentId)
{
	var $note = document.getElementById(\'note_\'+$contentId);
	$note.value = $note.value.trim();
	var $message = document.getElementById(\'noteRequired_\'+$contentId);
	
	if (document.getElementById(\'quick_link_yes_\'+$contentId).checked && !$note.value)
	{
		$message.style.display = \'block\';
		$note.focus();
		return false;
	}
	else
	{
		$message.style.display = \'none\';
		return true;
	}
}

function setTag($contentId, $name)
{
	document.getElementById(\'tag_\'+$contentId).value = $name;
}

function resetError($contentId)
{
	document.getElementById(\'noteRequired_\'+$contentId).style.display = \'none\';
}
</script>

';
if ($content['content_type'] == ('post'))
{
$__output .= '
	';
$__extraData['title'] = '';
$__extraData['title'] .= htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8') . ' - ' . 'Bookmark';
$__output .= '
	';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'Bookmark';
$__output .= '
	
	';
$__extraData['navigation'] = array();
$__extraData['navigation'] = XenForo_Template_Helper_Core::appendBreadCrumbs($__extraData['navigation'], $nodeBreadCrumbs);
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:posts', $content, array()), 'value' => htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'));
$__output .= '
';
}
else if ($content['content_type'] == ('profile_post'))
{
$__output .= '
	';
$__extraData['title'] = '';
$__extraData['title'] .= 'Profile Post' . ' - ' . 'Bookmark';
$__output .= '
	';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'Bookmark';
$__output .= '
	
	';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:members', $user, array()), 'value' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'));
$__output .= '
';
}
else if ($content['content_type'] == ('resource'))
{
$__output .= '
	';
$__extraData['title'] = '';
$__extraData['title'] .= 'resource' . ' - ' . 'Bookmark';
$__output .= '
	';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'Bookmark';
$__output .= '
	
	';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:resources', $content, array()), 'value' => htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'));
$__output .= '
';
}
else if ($content['content_type'] == ('xengallery_media'))
{
$__output .= '
	';
$__extraData['title'] = '';
$__extraData['title'] .= 'xengallery_media' . ' - ' . 'Bookmark';
$__output .= '
	';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'Bookmark';
$__output .= '
	
	';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:media', $content, array()), 'value' => htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'));
$__output .= '
';
}
else if ($content['content_type'] == ('showcase'))
{
$__output .= '
	';
$__extraData['title'] = '';
$__extraData['title'] .= 'nflj_showcase' . ' - ' . 'Bookmark';
$__output .= '
	';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'Bookmark';
$__output .= '
	
	';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:showcase', $content, array()), 'value' => htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'));
$__output .= '
';
}
$__output .= '

<form id="form_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '" action="' . XenForo_Template_Helper_Core::link('bookmarks/save', false, array()) . '" method="post" onReset="resetError(' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . ')" class="xenForm formOverlay AutoValidator overlayScroll">
	<p class="titleExplain">
		';
if ($bookmark['bookmark_id'])
{
$__output .= '
			' . 'This content has already been bookmarked with the following values:' . '
		';
}
else
{
$__output .= '
			' . 'A link to this content will be inserted into your Bookmark list located on your Account page.<br />You may include a short note reminding yourself why you decided to Bookmark it.' . '
		';
}
$__output .= '
	</p>

	<div id="noteRequired_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '" name="noteRequired" class="errorPanel">
		<h3 class="errorHeading">' . 'Please correct the following error' . ':</h3>
		<div class="baseHtml errors">
			' . 'You have selected Quick Link but have no Note.<br />You must enter a Note in order to display this bookmark in your Quick Links tab.' . '
		</div>
	</div>
		
	<dl class="ctrlUnit">
		<dt><label for="note_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '">' . 'Note to Self' . ':</label></dt>
		<dd><input type="text" id="note_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '" name="note" class="textCtrl note" maxlength="150" ' . (($bookmark['bookmark_note']) ? ('value="' . htmlspecialchars($bookmark['bookmark_note'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . ' autofocus="true" autocomplete="off" /></dd>
	</dl>

	';
if ($tagsEnabled)
{
$__output .= '
	<dl class="ctrlUnit">
		<dt><label for="tag_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '">' . 'Tag' . ':</label></dt>
		<dd><input type="text" id="tag_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '" name="tag" class="textCtrl tag" maxlength="25" ' . (($bookmark['bookmark_tag']) ? ('value="' . htmlspecialchars($bookmark['bookmark_tag'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . ' autocomplete="off" />
		';
if ($tagNames)
{
$__output .= '
			<span class="linkGroup popupLocation">
				<div class="Popup">
					<a class="tagsMenuTitle" rel="Menu">' . 'Tags' . '</a>
					<div class="Menu tagsMenu">
						<ul class="secondaryContent blockLinksList">
							';
foreach ($tagNames AS $tag)
{
$__output .= '
								<li class="tagsMenuList"><a href="javascript:void(0)" onClick="setTag(' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . ',\'' . htmlspecialchars($tag['name'], ENT_QUOTES, 'UTF-8') . '\');">' . htmlspecialchars($tag['name'], ENT_QUOTES, 'UTF-8') . '</a></li>
							';
}
$__output .= '
						</ul>
					</div>
				</div>
			</span>
		';
}
$__output .= '
		<p class="optionExplain">' . 'Organise your bookmarks. This tag will show up for selection in the drop-down menu on your Account page.' . '</p></dd>
	</dl>
	';
}
$__output .= '
	
	';
if ($publicEnabled)
{
$__output .= '
	<dl class="ctrlUnit">
		<dt><label for="public_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '">' . 'Public Bookmark' . '?</label></dt>
		<dd><label>' . 'Yes' . ' <input type="radio" id="public_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '" name="public" value="1" ' . (($bookmark['public']) ? ('checked="checked"') : ('')) . ' /></label>&nbsp;&nbsp;<label>' . 'No' . ' <input type="radio" name="public" value="0" ' . ((!$bookmark['public']) ? ('checked="checked"') : ('')) . ' /></label><p class="optionExplain">' . 'Selecting \'Yes\' will add this bookmark to your public (shared) list on your profile page.' . '</p></dd>
	</dl>
	';
}
$__output .= '
	
	<dl class="ctrlUnit">
		<dt><label for="sticky_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '">' . 'Sticky Bookmark' . '?</label></dt>
		<dd><label>' . 'Yes' . ' <input type="radio" id="sticky_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '" name="sticky" value="1" ' . (($bookmark['sticky']) ? ('checked="checked"') : ('')) . ' /></label>&nbsp;&nbsp;<label>' . 'No' . ' <input type="radio" name="sticky" value="0" ' . ((!$bookmark['sticky']) ? ('checked="checked"') : ('')) . ' /></label><p class="optionExplain">' . 'A sticky bookmark will always remain at the top of your list.' . '</p></dd>
	</dl>

	';
if ($navTabEnabled)
{
$__output .= '	
	<dl class="ctrlUnit">
		<dt><label for="quick_link_yes_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '">' . 'Quick Link' . '?</label></dt>
		<dd><label>' . 'Yes' . ' <input type="radio" id="quick_link_yes_' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '" name="quick_link" value="1" ' . (($bookmark['quick_link']) ? ('checked="checked"') : ('')) . ' /></label>&nbsp;&nbsp;<label>' . 'No' . ' <input type="radio" name="quick_link" value="0" ' . ((!$bookmark['quick_link']) ? ('checked="checked"') : ('')) . ' /></label><p class="optionExplain">' . 'Selecting \'Yes\' will add this item to the Bookmarks navigation tab. This option requires that a note be entered above.' . '</p></dd>
	</dl>
	';
}
$__output .= '
	
	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" value="' . 'Bookmark' . '" accesskey="s" class="button primary" onClick="return checkForm(' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . ')" />';
if ($bookmark['bookmark_id'])
{
$__output .= ' <a href="' . XenForo_Template_Helper_Core::link('bookmarks/delete', $bookmark, array(
'via_content' => '1'
)) . '" class="button secondary OverlayTrigger">' . 'Delete' . '</a>';
}
$__output .= '</dd>
	</dl>
	
	<input type="hidden" name="content_type" value="' . htmlspecialchars($content['content_type'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="content_id" value="' . htmlspecialchars($contentId, ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
