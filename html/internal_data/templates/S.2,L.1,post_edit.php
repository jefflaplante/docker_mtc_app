<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Edit Post by ' . htmlspecialchars($post['username'], ENT_QUOTES, 'UTF-8') . '';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'] = XenForo_Template_Helper_Core::appendBreadCrumbs($__extraData['navigation'], $nodeBreadCrumbs);
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:posts', $post, array()), 'value' => XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8'));
$__output .= '

';
$__extraData['bodyClasses'] = '';
$__extraData['bodyClasses'] .= XenForo_Template_Helper_Core::callHelper('nodeClasses', array(
'0' => $nodeBreadCrumbs,
'1' => $forum
));
$__output .= '
';
$__extraData['searchBar']['thread'] = '';
$__compilerVar1 = '';
$__compilerVar1 .= '<label title="' . 'Search only ' . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '' . '"><input type="checkbox" name="type[post][thread_id]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '"
	id="search_bar_thread" class="AutoChecker"
	data-uncheck="#search_bar_title_only, #search_bar_nodes" /> ' . 'Search this thread only' . '</label>';
$__extraData['searchBar']['thread'] .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
';
$__extraData['searchBar']['forum'] = '';
$__compilerVar2 = '';
$__compilerVar2 .= '<label title="' . 'Search only ' . htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8') . '' . '"><input type="checkbox" name="nodes[]" value="' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8') . '"
	id="search_bar_nodes" class="Disabler AutoChecker" checked="checked"
	data-uncheck="#search_bar_thread" /> ' . 'Search this forum only' . '</label>
	<ul id="search_bar_nodes_Disabler">
		<li><label><input type="checkbox" name="type[post][group_discussion]" value="1"
			id="search_bar_group_discussion" class="AutoChecker"
			data-uncheck="#search_bar_thread" /> ' . 'Display results as threads' . '</label></li>
	</ul>';
$__extraData['searchBar']['forum'] .= $__compilerVar2;
unset($__compilerVar2);
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('posts/save', $post, array()) . '" method="post" class="xenForm Preview AutoValidator"
	data-previewUrl="' . XenForo_Template_Helper_Core::link('posts/edit/preview', $post, array()) . '" data-redirect="on">

	<fieldset>
		<dl class="ctrlUnit fullWidth surplusLabel">
			<dt><label for="ctrl_message">' . 'Message' . ':</label></dt>
			<dd>' . $editorTemplate . '</dd>
		</dl>
	</fieldset>
';
$__compilerVar3 = '';
if ($canEditPostDate)
{
$__compilerVar3 .= '
	<dl class="ctrlUnit">
		<dt>' . 'Set Post Date' . ':</dt>
		<dd>
			<ul>
				<li>
					';
if ($xenOptions['waindigo_editPostDate_unixTimestamp'])
{
$__compilerVar3 .= '
						<label><input type="checkbox" name="edit_post_date" value="1" class="Disabler" id="ctrl_edit_post_date" /> ' . 'Post Date (unix timestamp)' . ':</label>
						<ul id="ctrl_edit_post_date_Disabler">
							<li><input type="text" name="post_date" value="' . htmlspecialchars($post['date'], ENT_QUOTES, 'UTF-8') . '" id="ctrl_post_date" class="textCtrl" maxlength="15" size="30" /></li>
						</ul>
					';
}
else
{
$__compilerVar3 .= '
						<label><input type="checkbox" name="edit_post_date" value="1" class="Disabler" id="ctrl_edit_post_date" /> ' . 'Post Date' . ':</label>
						<ul id="ctrl_edit_post_date_Disabler">
							<li>';
$__compilerVar4 = '';
$__compilerVar4 .= '<select name="month" class="textCtrl autoSize">
	<option value="0" ' . (($datetime['month'] == 0) ? ' selected="selected"' : '') . '>&nbsp;</option>
	<option value="1" ' . (($datetime['month'] == 1) ? ' selected="selected"' : '') . '>' . 'January' . '</option>
	<option value="2" ' . (($datetime['month'] == 2) ? ' selected="selected"' : '') . '>' . 'February' . '</option>
	<option value="3" ' . (($datetime['month'] == 3) ? ' selected="selected"' : '') . '>' . 'March' . '</option>
	<option value="4" ' . (($datetime['month'] == 4) ? ' selected="selected"' : '') . '>' . 'April' . '</option>
	<option value="5" ' . (($datetime['month'] == 5) ? ' selected="selected"' : '') . '>' . 'May' . '</option>
	<option value="6" ' . (($datetime['month'] == 6) ? ' selected="selected"' : '') . '>' . 'June' . '</option>
	<option value="7" ' . (($datetime['month'] == 7) ? ' selected="selected"' : '') . '>' . 'July' . '</option>
	<option value="8" ' . (($datetime['month'] == 8) ? ' selected="selected"' : '') . '>' . 'August' . '</option>
	<option value="9" ' . (($datetime['month'] == 9) ? ' selected="selected"' : '') . '>' . 'September' . '</option>
	<option value="10" ' . (($datetime['month'] == 10) ? ' selected="selected"' : '') . '>' . 'October' . '</option>
	<option value="11" ' . (($datetime['month'] == 11) ? ' selected="selected"' : '') . '>' . 'November' . '</option>
	<option value="12" ' . (($datetime['month'] == 12) ? ' selected="selected"' : '') . '>' . 'December' . '</option>
</select>
	<input type="text" name="day" value="' . (($datetime['day']) ? (htmlspecialchars($datetime['day'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl autoSize" placeholder="' . 'Day' . '" size="2" maxlength="2" />
	<input type="text" name="year" value="' . (($datetime['year']) ? (htmlspecialchars($datetime['year'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl autoSize" placeholder="' . 'Year' . '" size="4" maxlength="4" />	
<select name="hour" class="textCtrl autoSize">
	<option value="00" ' . htmlspecialchars($datetime['hour']['00'], ENT_QUOTES, 'UTF-8') . '>00</option>
	<option value="01" ' . htmlspecialchars($datetime['hour']['01'], ENT_QUOTES, 'UTF-8') . '>01</option>
	<option value="02" ' . htmlspecialchars($datetime['hour']['02'], ENT_QUOTES, 'UTF-8') . '>02</option>
	<option value="03" ' . htmlspecialchars($datetime['hour']['03'], ENT_QUOTES, 'UTF-8') . '>03</option>
	<option value="04" ' . htmlspecialchars($datetime['hour']['04'], ENT_QUOTES, 'UTF-8') . '>04</option>
	<option value="05" ' . htmlspecialchars($datetime['hour']['05'], ENT_QUOTES, 'UTF-8') . '>05</option>
	<option value="06" ' . htmlspecialchars($datetime['hour']['06'], ENT_QUOTES, 'UTF-8') . '>06</option>
	<option value="07" ' . htmlspecialchars($datetime['hour']['07'], ENT_QUOTES, 'UTF-8') . '>07</option>
	<option value="08" ' . htmlspecialchars($datetime['hour']['08'], ENT_QUOTES, 'UTF-8') . '>08</option>
	<option value="09" ' . htmlspecialchars($datetime['hour']['09'], ENT_QUOTES, 'UTF-8') . '>09</option>
	<option value="10" ' . htmlspecialchars($datetime['hour']['10'], ENT_QUOTES, 'UTF-8') . '>10</option>
	<option value="11" ' . htmlspecialchars($datetime['hour']['11'], ENT_QUOTES, 'UTF-8') . '>11</option>
	<option value="12" ' . htmlspecialchars($datetime['hour']['12'], ENT_QUOTES, 'UTF-8') . '>12</option>
	<option value="13" ' . htmlspecialchars($datetime['hour']['13'], ENT_QUOTES, 'UTF-8') . '>13</option>
	<option value="14" ' . htmlspecialchars($datetime['hour']['14'], ENT_QUOTES, 'UTF-8') . '>14</option>
	<option value="15" ' . htmlspecialchars($datetime['hour']['15'], ENT_QUOTES, 'UTF-8') . '>15</option>
	<option value="16" ' . htmlspecialchars($datetime['hour']['16'], ENT_QUOTES, 'UTF-8') . '>16</option>
	<option value="17" ' . htmlspecialchars($datetime['hour']['17'], ENT_QUOTES, 'UTF-8') . '>17</option>
	<option value="18" ' . htmlspecialchars($datetime['hour']['18'], ENT_QUOTES, 'UTF-8') . '>18</option>
	<option value="19" ' . htmlspecialchars($datetime['hour']['19'], ENT_QUOTES, 'UTF-8') . '>19</option>
	<option value="20" ' . htmlspecialchars($datetime['hour']['20'], ENT_QUOTES, 'UTF-8') . '>20</option>
	<option value="21" ' . htmlspecialchars($datetime['hour']['21'], ENT_QUOTES, 'UTF-8') . '>21</option>
	<option value="22" ' . htmlspecialchars($datetime['hour']['22'], ENT_QUOTES, 'UTF-8') . '>22</option>
	<option value="23" ' . htmlspecialchars($datetime['hour']['23'], ENT_QUOTES, 'UTF-8') . '>23</option>
</select>
	:
<select name="min" class="textCtrl autoSize">
	<option value="00" ' . htmlspecialchars($datetime['min']['00'], ENT_QUOTES, 'UTF-8') . '>00</option>
	<option value="05" ' . htmlspecialchars($datetime['min']['05'], ENT_QUOTES, 'UTF-8') . '>05</option>
	<option value="10" ' . htmlspecialchars($datetime['min']['10'], ENT_QUOTES, 'UTF-8') . '>10</option>
	<option value="15" ' . htmlspecialchars($datetime['min']['15'], ENT_QUOTES, 'UTF-8') . '>15</option>
	<option value="20" ' . htmlspecialchars($datetime['min']['20'], ENT_QUOTES, 'UTF-8') . '>20</option>
	<option value="25" ' . htmlspecialchars($datetime['min']['25'], ENT_QUOTES, 'UTF-8') . '>25</option>
	<option value="30" ' . htmlspecialchars($datetime['min']['30'], ENT_QUOTES, 'UTF-8') . '>30</option>
	<option value="35" ' . htmlspecialchars($datetime['min']['35'], ENT_QUOTES, 'UTF-8') . '>35</option>
	<option value="40" ' . htmlspecialchars($datetime['min']['40'], ENT_QUOTES, 'UTF-8') . '>40</option>
	<option value="45" ' . htmlspecialchars($datetime['min']['45'], ENT_QUOTES, 'UTF-8') . '>45</option>
	<option value="50" ' . htmlspecialchars($datetime['min']['50'], ENT_QUOTES, 'UTF-8') . '>50</option>
	<option value="55" ' . htmlspecialchars($datetime['min']['55'], ENT_QUOTES, 'UTF-8') . '>55</option>
</select>';
$__compilerVar3 .= $__compilerVar4;
unset($__compilerVar4);
$__compilerVar3 .= '</li>
						</ul>
					';
}
$__compilerVar3 .= '
				</li>
			</ul>
		</dd>
	</dl>
';
}
$__output .= $__compilerVar3;
unset($__compilerVar3);
$__output .= '

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd>
			<input type="submit" value="' . 'Save Changes' . '" accesskey="s" class="button primary" />
			';
$__compilerVar5 = '';
if ($attachmentParams)
{
$__compilerVar5 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar5 .= '
	';
if ($xenOptions['swfUpload'] AND $visitor['enable_flash_uploader'])
{
$__compilerVar5 .= '
		';
$this->addRequiredExternal('js', 'js/swfupload/swfupload.min.js');
$__compilerVar5 .= '
	';
}
$__compilerVar5 .= '	
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar5 .= '

	<span id="AttachmentUploader" class="buttonProxy AttachmentUploader"
		style="display: none"
		data-placeholder="#SWFUploadPlaceHolder"
		data-trigger="#ctrl_uploader"
		data-postname="upload"
		data-maxfilesize="' . htmlspecialchars($attachmentConstraints['size'], ENT_QUOTES, 'UTF-8') . '"
		data-maxuploads="' . htmlspecialchars($attachmentConstraints['count'], ENT_QUOTES, 'UTF-8') . '"
		data-extensions="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $attachmentConstraints['extensions'],
'1' => ','
)) . '"
		data-action="' . XenForo_Template_Helper_Core::link('full:attachments/do-upload.json', '', array(
'hash' => $attachmentParams['hash'],
'content_type' => $attachmentParams['content_type'],
'key' => $attachmentButtonKey
)) . '"
		data-uniquekey="' . htmlspecialchars($attachmentButtonKey, ENT_QUOTES, 'UTF-8') . '"
		data-err-110="' . 'The uploaded file is too large.' . '"
		data-err-120="' . 'The uploaded file is empty.' . '"
		data-err-130="' . 'The uploaded file does not have an allowed extension.' . '"
		data-err-unknown="' . 'There was a problem uploading your file.' . '">
		
		<span id="SWFUploadPlaceHolder"></span>		
			
		<input type="button" value="' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '"
			id="ctrl_uploader" class="button OverlayTrigger DisableOnSubmit"
			data-href="' . XenForo_Template_Helper_Core::link('full:attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => '',
'key' => $attachmentButtonKey
)) . '"
			data-hider="#AttachmentUploader" />
		<span class="HiddenInput" data-name="_xfSessionId" data-value="' . htmlspecialchars($sessionId, ENT_QUOTES, 'UTF-8') . '"></span>
		';
foreach ($attachmentParams['content_data'] AS $dataKey => $dataValue)
{
$__compilerVar5 .= '<span class="HiddenInput" data-name="content_data[' . htmlspecialchars($dataKey, ENT_QUOTES, 'UTF-8') . ']" data-value="' . htmlspecialchars($dataValue, ENT_QUOTES, 'UTF-8') . '"></span>
		';
}
$__compilerVar5 .= '
	</span>

	<noscript>
		<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" class="button" target="_blank">' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '</a>
	</noscript>

';
}
$__output .= $__compilerVar5;
unset($__compilerVar5);
$__output .= '
			<input type="button" value="' . 'Preview' . '..." class="button PreviewButton JsOnly" />
		</dd>
	</dl>

	';
if ($attachmentParams)
{
$__output .= '
		<dl class="ctrlUnit AttachedFilesUnit">
			<dt>' . 'Attached Files' . ':</dt>
			<dd>';
$__compilerVar6 = '';
if ($attachmentParams)
{
$__compilerVar6 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar6 .= '
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar6 .= '
	
	<div class="AttachmentEditor">
	
		';
if ($showUploadButton)
{
$__compilerVar6 .= '
			';
$__compilerVar7 = '';
if ($attachmentParams)
{
$__compilerVar7 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar7 .= '
	';
if ($xenOptions['swfUpload'] AND $visitor['enable_flash_uploader'])
{
$__compilerVar7 .= '
		';
$this->addRequiredExternal('js', 'js/swfupload/swfupload.min.js');
$__compilerVar7 .= '
	';
}
$__compilerVar7 .= '	
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar7 .= '

	<span id="AttachmentUploader" class="buttonProxy AttachmentUploader"
		style="display: none"
		data-placeholder="#SWFUploadPlaceHolder"
		data-trigger="#ctrl_uploader"
		data-postname="upload"
		data-maxfilesize="' . htmlspecialchars($attachmentConstraints['size'], ENT_QUOTES, 'UTF-8') . '"
		data-maxuploads="' . htmlspecialchars($attachmentConstraints['count'], ENT_QUOTES, 'UTF-8') . '"
		data-extensions="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $attachmentConstraints['extensions'],
'1' => ','
)) . '"
		data-action="' . XenForo_Template_Helper_Core::link('full:attachments/do-upload.json', '', array(
'hash' => $attachmentParams['hash'],
'content_type' => $attachmentParams['content_type'],
'key' => $attachmentButtonKey
)) . '"
		data-uniquekey="' . htmlspecialchars($attachmentButtonKey, ENT_QUOTES, 'UTF-8') . '"
		data-err-110="' . 'The uploaded file is too large.' . '"
		data-err-120="' . 'The uploaded file is empty.' . '"
		data-err-130="' . 'The uploaded file does not have an allowed extension.' . '"
		data-err-unknown="' . 'There was a problem uploading your file.' . '">
		
		<span id="SWFUploadPlaceHolder"></span>		
			
		<input type="button" value="' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '"
			id="ctrl_uploader" class="button OverlayTrigger DisableOnSubmit"
			data-href="' . XenForo_Template_Helper_Core::link('full:attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => '',
'key' => $attachmentButtonKey
)) . '"
			data-hider="#AttachmentUploader" />
		<span class="HiddenInput" data-name="_xfSessionId" data-value="' . htmlspecialchars($sessionId, ENT_QUOTES, 'UTF-8') . '"></span>
		';
foreach ($attachmentParams['content_data'] AS $dataKey => $dataValue)
{
$__compilerVar7 .= '<span class="HiddenInput" data-name="content_data[' . htmlspecialchars($dataKey, ENT_QUOTES, 'UTF-8') . ']" data-value="' . htmlspecialchars($dataValue, ENT_QUOTES, 'UTF-8') . '"></span>
		';
}
$__compilerVar7 .= '
	</span>

	<noscript>
		<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" class="button" target="_blank">' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '</a>
	</noscript>

';
}
$__compilerVar6 .= $__compilerVar7;
unset($__compilerVar7);
$__compilerVar6 .= '
		';
}
$__compilerVar6 .= '
		
		<div class="NoAttachments"></div>
		
		<div class="secondaryContent AttachmentInsertAllBlock JsOnly">
			<span></span>
			<div class="AttachmentText">
				<div class="label">' . 'Insert every image as a' . '...</div>
				<div class="controls">
					<!--<input type="button" value="' . 'Delete All' . '" class="button _smallButton AttachmentDeleteAll" />-->
					<input type="button" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInsertAll" name="thumb" />
					<input type="button" value="' . 'Full Image' . '" class="button smallButton AttachmentInsertAll" name="image" />
				</div>
			</div>
		</div>
	
		<ol class="AttachmentList New">
			';
$__compilerVar8 = '';
$__compilerVar8 .= '1';
$__compilerVar9 = '';
$__compilerVar10 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar10 .= '

<li id="' . (($__compilerVar8) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($__compilerVar9['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($__compilerVar9 and $__compilerVar9['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($__compilerVar9 and $__compilerVar9['thumbnailUrl'])
{
$__compilerVar10 .= '
			<a href="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar9, array()) . '" target="_blank"
				data-attachmentId="' . htmlspecialchars($__compilerVar9['attachment_id'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbTrigger" data-href="' . XenForo_Template_Helper_Core::link('misc/lightbox', false, array()) . '"><img
				src="' . htmlspecialchars($__compilerVar9['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($__compilerVar9['filename'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbImage" data-src="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar9, array(
'embedded' => '1'
)) . '" /></a>
		';
}
else
{
$__compilerVar10 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar10 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar9, array()) . '" target="_blank">' . (($__compilerVar9) ? (htmlspecialchars($__compilerVar9['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($__compilerVar8)
{
$__compilerVar10 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar10 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($__compilerVar9['thumbnailUrl'])
{
$__compilerVar10 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar10 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $__compilerVar9, array()) . '" />
			
				';
if ($__compilerVar9['thumbnailUrl'])
{
$__compilerVar10 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar10 .= '
			</div>
		';
}
$__compilerVar10 .= '

	</div>
	
</li>';
$__compilerVar6 .= $__compilerVar10;
unset($__compilerVar8, $__compilerVar9, $__compilerVar10);
$__compilerVar6 .= '
			';
if ($attachments)
{
$__compilerVar6 .= '
				';
foreach ($attachments AS $attachment)
{
$__compilerVar6 .= '
					';
if ($attachment['temp_hash'])
{
$__compilerVar6 .= '
						';
$__compilerVar11 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar11 .= '

<li id="' . (($isTemplate) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($attachment and $attachment['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($attachment and $attachment['thumbnailUrl'])
{
$__compilerVar11 .= '
			<a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank"
				data-attachmentId="' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbTrigger" data-href="' . XenForo_Template_Helper_Core::link('misc/lightbox', false, array()) . '"><img
				src="' . htmlspecialchars($attachment['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbImage" data-src="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array(
'embedded' => '1'
)) . '" /></a>
		';
}
else
{
$__compilerVar11 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar11 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank">' . (($attachment) ? (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($isTemplate)
{
$__compilerVar11 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar11 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($attachment['thumbnailUrl'])
{
$__compilerVar11 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar11 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $attachment, array()) . '" />
			
				';
if ($attachment['thumbnailUrl'])
{
$__compilerVar11 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar11 .= '
			</div>
		';
}
$__compilerVar11 .= '

	</div>
	
</li>';
$__compilerVar6 .= $__compilerVar11;
unset($__compilerVar11);
$__compilerVar6 .= '
					';
}
$__compilerVar6 .= '
				';
}
$__compilerVar6 .= '
			';
}
$__compilerVar6 .= '
		</ol>
	
		';
if ($attachments)
{
$__compilerVar6 .= '
			';
$__compilerVar12 = '';
$__compilerVar12 .= '
					';
foreach ($attachments AS $attachment)
{
$__compilerVar12 .= '
						';
if (!$attachment['temp_hash'])
{
$__compilerVar12 .= '
							';
$__compilerVar13 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar13 .= '

<li id="' . (($isTemplate) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($attachment and $attachment['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($attachment and $attachment['thumbnailUrl'])
{
$__compilerVar13 .= '
			<a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank"
				data-attachmentId="' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbTrigger" data-href="' . XenForo_Template_Helper_Core::link('misc/lightbox', false, array()) . '"><img
				src="' . htmlspecialchars($attachment['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbImage" data-src="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array(
'embedded' => '1'
)) . '" /></a>
		';
}
else
{
$__compilerVar13 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar13 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank">' . (($attachment) ? (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($isTemplate)
{
$__compilerVar13 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar13 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($attachment['thumbnailUrl'])
{
$__compilerVar13 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar13 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $attachment, array()) . '" />
			
				';
if ($attachment['thumbnailUrl'])
{
$__compilerVar13 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar13 .= '
			</div>
		';
}
$__compilerVar13 .= '

	</div>
	
</li>';
$__compilerVar12 .= $__compilerVar13;
unset($__compilerVar13);
$__compilerVar12 .= '
						';
}
$__compilerVar12 .= '
					';
}
$__compilerVar12 .= '
				';
if (trim($__compilerVar12) !== '')
{
$__compilerVar6 .= '
			<ol class="AttachmentList Existing">
				' . $__compilerVar12 . '
			</ol>
			';
}
unset($__compilerVar12);
$__compilerVar6 .= '
		';
}
$__compilerVar6 .= '
		
		<input type="hidden" name="attachment_hash" value="' . htmlspecialchars($attachmentParams['hash'], ENT_QUOTES, 'UTF-8') . '" />
		
		' . '
		
	</div>
	
';
}
$__output .= $__compilerVar6;
unset($__compilerVar6);
$__output .= '</dd>
		</dl>
	';
}
$__output .= '

	';
if ($canSilentEdit)
{
$__output .= '
		';
$__compilerVar14 = '';
$__compilerVar14 .= '<dl class="ctrlUnit ' . htmlspecialchars($extraClasses, ENT_QUOTES, 'UTF-8') . '">
	<dt></dt>
	<dd><ul>
		<li><label><input type="checkbox" name="silent" value="1" id="ctrl_silent" class="Disabler" ' . (($silentEdit) ? ' checked="checked"' : '') . ' /> ' . 'Edit silently' . '</label>
			<p class="explain">' . 'If selected, no "last edited" note will be added for this edit.' . '</p>
			<ul id="ctrl_silent_Disabler">
				<li><label><input type="checkbox" name="clear_edit" value="1" ' . (($clearEdit) ? ' checked="checked"' : '') . ' /> ' . 'Clear last edit information' . '</label>
					<p class="explain">' . 'If selected, any existing "last edited" note will be removed.' . '</p>
				</li>
			</ul>
		</li>
	</ul></dd>
</dl>';
$__output .= $__compilerVar14;
unset($__compilerVar14);
$__output .= '
	';
}
$__output .= '

	';
if ($post['message_state'] == ('visible') AND $post['user_id'] AND $post['user_id'] != $visitor['user_id'])
{
$__output .= '
		<div class="actionAlert">
			';
$__compilerVar15 = '0';
$__compilerVar16 = '';
$__compilerVar16 .= '<dl class="ctrlUnit">
	<dt></dt>
	<dd><ul>
		<li>
			<label><input type="checkbox" name="send_author_alert" value="1" ' . (($__compilerVar15) ? ' checked="checked"' : '') . ' class="Disabler" id="ctrl_send_author_alert" /> ' . 'Notify author of this action.' . ' ' . 'Reason' . ':</label>
			<ul id="ctrl_send_author_alert_Disabler">
				<li><input type="text" name="author_alert_reason" class="textCtrl" placeholder="' . 'Optional' . '" /></li>
			</ul>
			<p class="hint">' . 'Note that the author will see this alert even if they can no longer view their message.' . '</p>
		</li>
	</ul></dd>
</dl>';
$__output .= $__compilerVar16;
unset($__compilerVar15, $__compilerVar16);
$__output .= '
		</div>
	';
}
$__output .= '

	';
if ($visitor['user_id'])
{
$__output .= '
		<fieldset>
			<dl class="ctrlUnit">
				<dt>' . 'Options' . ':</dt>
				<dd><ul>
					<li>';
$__compilerVar17 = '';
$__compilerVar17 .= '<label for="ctrl_watch_thread"><input type="checkbox" name="watch_thread" value="1" id="ctrl_watch_thread" class="Disabler" ' . (($watchState) ? ' checked="checked"' : '') . ' /> ' . 'Watch this thread' . '...</label>
	<ul id="ctrl_watch_thread_Disabler">
		<li><label for="ctrl_watch_thread_email"><input type="checkbox" name="watch_thread_email" value="1" id="ctrl_watch_thread_email" ' . (($watchState == ('watch_email')) ? ' checked="checked"' : '') . ' /> ' . 'and receive email notifications' . '</label></li>
	</ul>
	<input type="hidden" name="watch_thread_state" value="1" />';
$__output .= $__compilerVar17;
unset($__compilerVar17);
$__output .= '</li>
				</ul></dd>
			</dl>
		</fieldset>
	';
}
$__output .= '

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd>
			<input type="submit" value="' . 'Save Changes' . '" accesskey="s" class="button primary" />
			<input type="button" value="' . 'Preview' . '..." class="button PreviewButton JsOnly" />
		</dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
