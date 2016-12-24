<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow') AND !XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__output .= '
';
$__compilerVar1 = '';
$__compilerVar1 .= '<script language="javascript" type="text/javascript">
function windowClose() {
window.open(\'\',\'_parent\',\'\');
setTimeout("window.close();",1000);
}
</script>

';
$__extraData['title'] = '';
$__extraData['title'] .= 'Start a New Conversation';
$__compilerVar1 .= '

<form action="' . XenForo_Template_Helper_Core::link('conversations/insert', false, array()) . '" method="post" class="xenForm Preview AutoValidator"
	data-previewUrl="' . XenForo_Template_Helper_Core::link('conversations/preview', false, array()) . '"
	data-redirect="on"
>
	<dl class="ctrlUnit">
		<dt><label for="ctrl_recipients">' . (($remaining == 1) ? ('Participant' . ':') : ('Participants' . ':')) . '</label></dt>
		<dd>
			<input type="text" name="recipients" value="' . htmlspecialchars($to, ENT_QUOTES, 'UTF-8') . '" id="ctrl_recipients" class="textCtrl AutoComplete ' . (($remaining == 1) ? ('AcSingle') : ('')) . '" />
			';
if ($remaining != 1)
{
$__compilerVar1 .= '
				<p class="explain">' . 'Separate names with a comma.' . ' ';
if ($remaining > 0)
{
$__compilerVar1 .= 'You may invite up to ' . XenForo_Template_Helper_Core::numberFormat($remaining, '0') . ' member(s).';
}
$__compilerVar1 .= '</p>
			';
}
$__compilerVar1 .= '
		</dd>
	</dl>

	<fieldset>
		<dl class="ctrlUnit fullWidth surplusLabel">
			<dt><label for="ctrl_title">' . 'Title' . ':</label></dt>
			<dd><input type="text" name="title" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuasubject'))
{
$__compilerVar1 .= 'value="' . '<No Subject>' . '" onfocus="this.select()"';
}
$__compilerVar1 .= ' class="textCtrl titleCtrl" id="ctrl_title" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuafocus'))
{
$__compilerVar1 .= 'autofocus="on"';
}
$__compilerVar1 .= ' maxlength="100" value="' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '"
				placeholder="' . 'Conversation Title' . '..."
				data-liveTitleTemplate="' . 'Start a New Conversation' . ': <em>%s</em>" /></dd>
		</dl>
	
		<dl class="ctrlUnit fullWidth">
			<dt></dt>
			<dd>' . $editorTemplate . '</dd>
		</dl>
	</fieldset>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd>
			<input type="submit" value="' . 'Start a Conversation' . '" accesskey="s" class="button primary" onclick="windowClose();" />
			';
$__compilerVar2 = '';
if ($attachmentParams)
{
$__compilerVar2 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar2 .= '
	';
if ($xenOptions['swfUpload'] AND $visitor['enable_flash_uploader'])
{
$__compilerVar2 .= '
		';
$this->addRequiredExternal('js', 'js/swfupload/swfupload.min.js');
$__compilerVar2 .= '
	';
}
$__compilerVar2 .= '	
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar2 .= '

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
$__compilerVar2 .= '<span class="HiddenInput" data-name="content_data[' . htmlspecialchars($dataKey, ENT_QUOTES, 'UTF-8') . ']" data-value="' . htmlspecialchars($dataValue, ENT_QUOTES, 'UTF-8') . '"></span>
		';
}
$__compilerVar2 .= '
	</span>

	<noscript>
		<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" class="button" target="_blank">' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '</a>
	</noscript>

';
}
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
$__compilerVar1 .= '
			<input type="button" value="' . 'Preview' . '..." class="button PreviewButton JsOnly" />
		</dd>
	</dl>

	';
if ($attachmentParams)
{
$__compilerVar1 .= '
		<dl class="ctrlUnit AttachedFilesUnit">
			<dt>' . 'Attached Files' . ':</label></dt>
			<dd>';
$__compilerVar3 = $attachmentParams['attachments'];
$__compilerVar4 = '';
if ($attachmentParams)
{
$__compilerVar4 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar4 .= '
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar4 .= '
	
	<div class="AttachmentEditor">
	
		';
if ($showUploadButton)
{
$__compilerVar4 .= '
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
$__compilerVar4 .= $__compilerVar5;
unset($__compilerVar5);
$__compilerVar4 .= '
		';
}
$__compilerVar4 .= '
		
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
$__compilerVar6 = '';
$__compilerVar6 .= '1';
$__compilerVar7 = '';
$__compilerVar8 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar8 .= '

<li id="' . (($__compilerVar6) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($__compilerVar7['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($__compilerVar7 and $__compilerVar7['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($__compilerVar7 and $__compilerVar7['thumbnailUrl'])
{
$__compilerVar8 .= '
			<a href="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar7, array()) . '" target="_blank"
				data-attachmentId="' . htmlspecialchars($__compilerVar7['attachment_id'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbTrigger" data-href="' . XenForo_Template_Helper_Core::link('misc/lightbox', false, array()) . '"><img
				src="' . htmlspecialchars($__compilerVar7['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($__compilerVar7['filename'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbImage" data-src="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar7, array(
'embedded' => '1'
)) . '" /></a>
		';
}
else
{
$__compilerVar8 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar8 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar7, array()) . '" target="_blank">' . (($__compilerVar7) ? (htmlspecialchars($__compilerVar7['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($__compilerVar6)
{
$__compilerVar8 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar8 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($__compilerVar7['thumbnailUrl'])
{
$__compilerVar8 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar8 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $__compilerVar7, array()) . '" />
			
				';
if ($__compilerVar7['thumbnailUrl'])
{
$__compilerVar8 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar8 .= '
			</div>
		';
}
$__compilerVar8 .= '

	</div>
	
</li>';
$__compilerVar4 .= $__compilerVar8;
unset($__compilerVar6, $__compilerVar7, $__compilerVar8);
$__compilerVar4 .= '
			';
if ($__compilerVar3)
{
$__compilerVar4 .= '
				';
foreach ($__compilerVar3 AS $attachment)
{
$__compilerVar4 .= '
					';
if ($attachment['temp_hash'])
{
$__compilerVar4 .= '
						';
$__compilerVar9 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar9 .= '

<li id="' . (($isTemplate) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($attachment and $attachment['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($attachment and $attachment['thumbnailUrl'])
{
$__compilerVar9 .= '
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
$__compilerVar9 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar9 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank">' . (($attachment) ? (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($isTemplate)
{
$__compilerVar9 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar9 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($attachment['thumbnailUrl'])
{
$__compilerVar9 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar9 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $attachment, array()) . '" />
			
				';
if ($attachment['thumbnailUrl'])
{
$__compilerVar9 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar9 .= '
			</div>
		';
}
$__compilerVar9 .= '

	</div>
	
</li>';
$__compilerVar4 .= $__compilerVar9;
unset($__compilerVar9);
$__compilerVar4 .= '
					';
}
$__compilerVar4 .= '
				';
}
$__compilerVar4 .= '
			';
}
$__compilerVar4 .= '
		</ol>
	
		';
if ($__compilerVar3)
{
$__compilerVar4 .= '
			';
$__compilerVar10 = '';
$__compilerVar10 .= '
					';
foreach ($__compilerVar3 AS $attachment)
{
$__compilerVar10 .= '
						';
if (!$attachment['temp_hash'])
{
$__compilerVar10 .= '
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
$__compilerVar10 .= $__compilerVar11;
unset($__compilerVar11);
$__compilerVar10 .= '
						';
}
$__compilerVar10 .= '
					';
}
$__compilerVar10 .= '
				';
if (trim($__compilerVar10) !== '')
{
$__compilerVar4 .= '
			<ol class="AttachmentList Existing">
				' . $__compilerVar10 . '
			</ol>
			';
}
unset($__compilerVar10);
$__compilerVar4 .= '
		';
}
$__compilerVar4 .= '
		
		<input type="hidden" name="attachment_hash" value="' . htmlspecialchars($attachmentParams['hash'], ENT_QUOTES, 'UTF-8') . '" />
		
		' . '
		
	</div>
	
';
}
$__compilerVar1 .= $__compilerVar4;
unset($__compilerVar3, $__compilerVar4);
$__compilerVar1 .= '</dd>
		</dl>
	';
}
$__compilerVar1 .= '

	<dl class="ctrlUnit">
		<dt></dt>
		<dd>
			<ul>
				<li><label for="ctrl_open_invite"><input type="checkbox" name="open_invite" id="ctrl_open_invite" value="1" /> ' . 'Allow anyone in the conversation to invite others' . '</label></li>
				<li><label for="ctrl_conversation_locked"><input type="checkbox" name="conversation_locked" id="ctrl_conversation_locked" value="1" /> ' . 'Lock conversation (no responses will be allowed)' . '</label></li>
			</ul>
		</dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
';
}
else if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay') AND !XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__output .= '
';
$__compilerVar12 = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Start a New Conversation';
$__compilerVar12 .= '


<div class="formOverlay">
<a class="close OverlayCloser"></a>
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaredirect'))
{
$__compilerVar12 .= '<form action="' . XenForo_Template_Helper_Core::link('conversations/insert', false, array()) . '" target="popup" method="post" class="xenForm Preview AutoValidator" data-previewUrl="' . XenForo_Template_Helper_Core::link('conversations/preview', false, array()) . '" >
';
}
else
{
$__compilerVar12 .= '<form action="' . XenForo_Template_Helper_Core::link('conversations/insert', false, array()) . '" method="post" class="xenForm Preview AutoValidator" data-previewUrl="' . XenForo_Template_Helper_Core::link('conversations/preview', false, array()) . '" data-redirect="on">
';
}
$__compilerVar12 .= '
        <dl class="ctrlUnit">
		<dt><label for="ctrl_recipients">' . (($remaining == 1) ? ('Participant' . ':') : ('Participants' . ':')) . '</label></dt>
		<dd>
			<input type="text" name="recipients" value="' . htmlspecialchars($to, ENT_QUOTES, 'UTF-8') . '" id="ctrl_recipients" class="textCtrl AutoComplete ' . (($remaining == 1) ? ('AcSingle') : ('')) . '" />
			';
if ($remaining != 1)
{
$__compilerVar12 .= '
				<p class="explain">' . 'Separate names with a comma.' . ' ';
if ($remaining > 0)
{
$__compilerVar12 .= 'You may invite up to ' . XenForo_Template_Helper_Core::numberFormat($remaining, '0') . ' member(s).';
}
$__compilerVar12 .= '</p>
			';
}
$__compilerVar12 .= '
		</dd>
	</dl>

	<fieldset>
		<dl class="ctrlUnit fullWidth surplusLabel">
			<dt><label for="ctrl_title">' . 'Title' . ':</label></dt>
			<dd><input type="text" name="title" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuasubject'))
{
$__compilerVar12 .= 'value="' . '<No Subject>' . '" onfocus="this.select()"';
}
$__compilerVar12 .= ' class="textCtrl titleCtrl" id="ctrl_title" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuafocus'))
{
$__compilerVar12 .= 'autofocus="on"';
}
$__compilerVar12 .= ' maxlength="100" value="' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '" placeholder="' . 'Conversation Title' . '..."	data-liveTitleTemplate="' . 'Start a New Conversation' . ': <em>%s</em>" /></dd>
		</dl>
	
		<dl class="ctrlUnit fullWidth">
			<dt></dt>
                ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaeditor'))
{
$__compilerVar12 .= '
                    <dd>' . $editorTemplate . '</dd>
                ';
}
else
{
$__compilerVar12 .= '
                <dd><textarea color="#ffffff" name="message" id="ctrl_message" rows="8" class="textCtrl Elastic"></textarea></dd>
                ';
}
$__compilerVar12 .= '

		</dl>
	</fieldset>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>

		<dd>
                    <input type="submit" value="' . 'Start a Conversation' . '" accesskey="s" class="button primary" />
                </dd>
	</dl>
        
	<dl class="ctrlUnit">
		<dt></dt>
		<dd>
			<ul>
				<li><label for="ctrl_open_invite"><input type="checkbox" name="open_invite" id="ctrl_open_invite" value="1" /> ' . 'Allow anyone in the conversation to invite others' . '</label></li>
				<li><label for="ctrl_conversation_locked"><input type="checkbox" name="conversation_locked" id="ctrl_conversation_locked" value="1" /> ' . 'Lock conversation (no responses will be allowed)' . '</label></li>
			</ul>
		</dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>
</div>';
$__output .= $__compilerVar12;
unset($__compilerVar12);
$__output .= '
';
}
else
{
$__output .= '
';
$__extraData['title'] = '';
$__extraData['title'] .= 'Start a New Conversation';
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('conversations/insert', false, array()) . '" method="post" class="xenForm Preview AutoValidator"
	data-previewUrl="' . XenForo_Template_Helper_Core::link('conversations/preview', false, array()) . '"
	data-redirect="on"
>
	<dl class="ctrlUnit">
		<dt><label for="ctrl_recipients">' . (($remaining == 1) ? ('Participant' . ':') : ('Participants' . ':')) . '</label></dt>
		<dd>
			<input type="text" name="recipients" value="' . htmlspecialchars($to, ENT_QUOTES, 'UTF-8') . '" id="ctrl_recipients" class="textCtrl AutoComplete ' . (($remaining == 1) ? ('AcSingle') : ('')) . '" />
			';
if ($remaining != 1)
{
$__output .= '
				<p class="explain">' . 'Separate names with a comma.' . ' ';
if ($remaining > 0)
{
$__output .= 'You may invite up to ' . XenForo_Template_Helper_Core::numberFormat($remaining, '0') . ' member(s).';
}
$__output .= '</p>
			';
}
$__output .= '
		</dd>
	</dl>

	<fieldset>
		<dl class="ctrlUnit fullWidth surplusLabel">
			<dt><label for="ctrl_title">' . 'Title' . ':</label></dt>
			<dd><input type="text" name="title" class="textCtrl titleCtrl" id="ctrl_title" maxlength="100" value="' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '"
				placeholder="' . 'Conversation Title' . '..."
				data-liveTitleTemplate="' . 'Start a New Conversation' . ': <em>%s</em>" /></dd>
		</dl>
	
		<dl class="ctrlUnit fullWidth">
			<dt></dt>
			<dd>' . $editorTemplate . '</dd>
		</dl>
	</fieldset>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd>
			<input type="submit" value="' . 'Start a Conversation' . '" accesskey="s" class="button primary" />
			';
$__compilerVar13 = '';
if ($attachmentParams)
{
$__compilerVar13 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar13 .= '
	';
if ($xenOptions['swfUpload'] AND $visitor['enable_flash_uploader'])
{
$__compilerVar13 .= '
		';
$this->addRequiredExternal('js', 'js/swfupload/swfupload.min.js');
$__compilerVar13 .= '
	';
}
$__compilerVar13 .= '	
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar13 .= '

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
$__compilerVar13 .= '<span class="HiddenInput" data-name="content_data[' . htmlspecialchars($dataKey, ENT_QUOTES, 'UTF-8') . ']" data-value="' . htmlspecialchars($dataValue, ENT_QUOTES, 'UTF-8') . '"></span>
		';
}
$__compilerVar13 .= '
	</span>

	<noscript>
		<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" class="button" target="_blank">' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '</a>
	</noscript>

';
}
$__output .= $__compilerVar13;
unset($__compilerVar13);
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
$__compilerVar14 = $attachmentParams['attachments'];
$__compilerVar15 = '';
if ($attachmentParams)
{
$__compilerVar15 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar15 .= '
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar15 .= '
	
	<div class="AttachmentEditor">
	
		';
if ($showUploadButton)
{
$__compilerVar15 .= '
			';
$__compilerVar16 = '';
if ($attachmentParams)
{
$__compilerVar16 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar16 .= '
	';
if ($xenOptions['swfUpload'] AND $visitor['enable_flash_uploader'])
{
$__compilerVar16 .= '
		';
$this->addRequiredExternal('js', 'js/swfupload/swfupload.min.js');
$__compilerVar16 .= '
	';
}
$__compilerVar16 .= '	
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar16 .= '

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
$__compilerVar16 .= '<span class="HiddenInput" data-name="content_data[' . htmlspecialchars($dataKey, ENT_QUOTES, 'UTF-8') . ']" data-value="' . htmlspecialchars($dataValue, ENT_QUOTES, 'UTF-8') . '"></span>
		';
}
$__compilerVar16 .= '
	</span>

	<noscript>
		<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" class="button" target="_blank">' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '</a>
	</noscript>

';
}
$__compilerVar15 .= $__compilerVar16;
unset($__compilerVar16);
$__compilerVar15 .= '
		';
}
$__compilerVar15 .= '
		
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
$__compilerVar17 = '';
$__compilerVar17 .= '1';
$__compilerVar18 = '';
$__compilerVar19 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar19 .= '

<li id="' . (($__compilerVar17) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($__compilerVar18['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($__compilerVar18 and $__compilerVar18['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($__compilerVar18 and $__compilerVar18['thumbnailUrl'])
{
$__compilerVar19 .= '
			<a href="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar18, array()) . '" target="_blank"
				data-attachmentId="' . htmlspecialchars($__compilerVar18['attachment_id'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbTrigger" data-href="' . XenForo_Template_Helper_Core::link('misc/lightbox', false, array()) . '"><img
				src="' . htmlspecialchars($__compilerVar18['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($__compilerVar18['filename'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbImage" data-src="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar18, array(
'embedded' => '1'
)) . '" /></a>
		';
}
else
{
$__compilerVar19 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar19 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar18, array()) . '" target="_blank">' . (($__compilerVar18) ? (htmlspecialchars($__compilerVar18['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($__compilerVar17)
{
$__compilerVar19 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar19 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($__compilerVar18['thumbnailUrl'])
{
$__compilerVar19 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar19 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $__compilerVar18, array()) . '" />
			
				';
if ($__compilerVar18['thumbnailUrl'])
{
$__compilerVar19 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar19 .= '
			</div>
		';
}
$__compilerVar19 .= '

	</div>
	
</li>';
$__compilerVar15 .= $__compilerVar19;
unset($__compilerVar17, $__compilerVar18, $__compilerVar19);
$__compilerVar15 .= '
			';
if ($__compilerVar14)
{
$__compilerVar15 .= '
				';
foreach ($__compilerVar14 AS $attachment)
{
$__compilerVar15 .= '
					';
if ($attachment['temp_hash'])
{
$__compilerVar15 .= '
						';
$__compilerVar20 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar20 .= '

<li id="' . (($isTemplate) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($attachment and $attachment['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($attachment and $attachment['thumbnailUrl'])
{
$__compilerVar20 .= '
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
$__compilerVar20 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar20 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank">' . (($attachment) ? (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($isTemplate)
{
$__compilerVar20 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar20 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($attachment['thumbnailUrl'])
{
$__compilerVar20 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar20 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $attachment, array()) . '" />
			
				';
if ($attachment['thumbnailUrl'])
{
$__compilerVar20 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar20 .= '
			</div>
		';
}
$__compilerVar20 .= '

	</div>
	
</li>';
$__compilerVar15 .= $__compilerVar20;
unset($__compilerVar20);
$__compilerVar15 .= '
					';
}
$__compilerVar15 .= '
				';
}
$__compilerVar15 .= '
			';
}
$__compilerVar15 .= '
		</ol>
	
		';
if ($__compilerVar14)
{
$__compilerVar15 .= '
			';
$__compilerVar21 = '';
$__compilerVar21 .= '
					';
foreach ($__compilerVar14 AS $attachment)
{
$__compilerVar21 .= '
						';
if (!$attachment['temp_hash'])
{
$__compilerVar21 .= '
							';
$__compilerVar22 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar22 .= '

<li id="' . (($isTemplate) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($attachment and $attachment['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($attachment and $attachment['thumbnailUrl'])
{
$__compilerVar22 .= '
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
$__compilerVar22 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar22 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank">' . (($attachment) ? (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($isTemplate)
{
$__compilerVar22 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar22 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($attachment['thumbnailUrl'])
{
$__compilerVar22 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar22 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $attachment, array()) . '" />
			
				';
if ($attachment['thumbnailUrl'])
{
$__compilerVar22 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar22 .= '
			</div>
		';
}
$__compilerVar22 .= '

	</div>
	
</li>';
$__compilerVar21 .= $__compilerVar22;
unset($__compilerVar22);
$__compilerVar21 .= '
						';
}
$__compilerVar21 .= '
					';
}
$__compilerVar21 .= '
				';
if (trim($__compilerVar21) !== '')
{
$__compilerVar15 .= '
			<ol class="AttachmentList Existing">
				' . $__compilerVar21 . '
			</ol>
			';
}
unset($__compilerVar21);
$__compilerVar15 .= '
		';
}
$__compilerVar15 .= '
		
		<input type="hidden" name="attachment_hash" value="' . htmlspecialchars($attachmentParams['hash'], ENT_QUOTES, 'UTF-8') . '" />
		
		' . '
		
	</div>
	
';
}
$__output .= $__compilerVar15;
unset($__compilerVar14, $__compilerVar15);
$__output .= '</dd>
		</dl>
	';
}
$__output .= '

	<dl class="ctrlUnit">
		<dt></dt>
		<dd>
			<ul>
				<li><label for="ctrl_open_invite"><input type="checkbox" name="open_invite" id="ctrl_open_invite" value="1" /> ' . 'Allow anyone in the conversation to invite others' . '</label></li>
				<li><label for="ctrl_conversation_locked"><input type="checkbox" name="conversation_locked" id="ctrl_conversation_locked" value="1" /> ' . 'Lock conversation (no responses will be allowed)' . '</label></li>
			</ul>
		</dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>
';
}
$__output .= '
';
}
else
{
$__output .= '
';
$__extraData['title'] = '';
$__extraData['title'] .= 'Start a New Conversation';
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('conversations/insert', false, array()) . '" method="post" class="xenForm Preview AutoValidator"
	data-previewUrl="' . XenForo_Template_Helper_Core::link('conversations/preview', false, array()) . '"
	data-redirect="on"
>
	<dl class="ctrlUnit">
		<dt><label for="ctrl_recipients">' . (($remaining == 1) ? ('Participant' . ':') : ('Participants' . ':')) . '</label></dt>
		<dd>
			<input type="text" name="recipients" value="' . htmlspecialchars($to, ENT_QUOTES, 'UTF-8') . '" id="ctrl_recipients" class="textCtrl AutoComplete ' . (($remaining == 1) ? ('AcSingle') : ('')) . '" />
			';
if ($remaining != 1)
{
$__output .= '
				<p class="explain">' . 'Separate names with a comma.' . ' ';
if ($remaining > 0)
{
$__output .= 'You may invite up to ' . XenForo_Template_Helper_Core::numberFormat($remaining, '0') . ' member(s).';
}
$__output .= '</p>
			';
}
$__output .= '
		</dd>
	</dl>

	<fieldset>
		<dl class="ctrlUnit fullWidth surplusLabel">
			<dt><label for="ctrl_title">' . 'Title' . ':</label></dt>
			<dd><input type="text" name="title" class="textCtrl titleCtrl" id="ctrl_title" maxlength="100" value="' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '"
				placeholder="' . 'Conversation Title' . '..."
				data-liveTitleTemplate="' . 'Start a New Conversation' . ': <em>%s</em>" /></dd>
		</dl>
	
		<dl class="ctrlUnit fullWidth">
			<dt></dt>
			<dd>' . $editorTemplate . '</dd>
		</dl>
	</fieldset>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd>
			<input type="submit" value="' . 'Start a Conversation' . '" accesskey="s" class="button primary" />
			';
$__compilerVar23 = '';
if ($attachmentParams)
{
$__compilerVar23 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar23 .= '
	';
if ($xenOptions['swfUpload'] AND $visitor['enable_flash_uploader'])
{
$__compilerVar23 .= '
		';
$this->addRequiredExternal('js', 'js/swfupload/swfupload.min.js');
$__compilerVar23 .= '
	';
}
$__compilerVar23 .= '	
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar23 .= '

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
$__compilerVar23 .= '<span class="HiddenInput" data-name="content_data[' . htmlspecialchars($dataKey, ENT_QUOTES, 'UTF-8') . ']" data-value="' . htmlspecialchars($dataValue, ENT_QUOTES, 'UTF-8') . '"></span>
		';
}
$__compilerVar23 .= '
	</span>

	<noscript>
		<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" class="button" target="_blank">' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '</a>
	</noscript>

';
}
$__output .= $__compilerVar23;
unset($__compilerVar23);
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
$__compilerVar24 = $attachmentParams['attachments'];
$__compilerVar25 = '';
if ($attachmentParams)
{
$__compilerVar25 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar25 .= '
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar25 .= '
	
	<div class="AttachmentEditor">
	
		';
if ($showUploadButton)
{
$__compilerVar25 .= '
			';
$__compilerVar26 = '';
if ($attachmentParams)
{
$__compilerVar26 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar26 .= '
	';
if ($xenOptions['swfUpload'] AND $visitor['enable_flash_uploader'])
{
$__compilerVar26 .= '
		';
$this->addRequiredExternal('js', 'js/swfupload/swfupload.min.js');
$__compilerVar26 .= '
	';
}
$__compilerVar26 .= '	
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar26 .= '

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
$__compilerVar26 .= '<span class="HiddenInput" data-name="content_data[' . htmlspecialchars($dataKey, ENT_QUOTES, 'UTF-8') . ']" data-value="' . htmlspecialchars($dataValue, ENT_QUOTES, 'UTF-8') . '"></span>
		';
}
$__compilerVar26 .= '
	</span>

	<noscript>
		<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" class="button" target="_blank">' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '</a>
	</noscript>

';
}
$__compilerVar25 .= $__compilerVar26;
unset($__compilerVar26);
$__compilerVar25 .= '
		';
}
$__compilerVar25 .= '
		
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
$__compilerVar27 = '';
$__compilerVar27 .= '1';
$__compilerVar28 = '';
$__compilerVar29 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar29 .= '

<li id="' . (($__compilerVar27) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($__compilerVar28['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($__compilerVar28 and $__compilerVar28['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($__compilerVar28 and $__compilerVar28['thumbnailUrl'])
{
$__compilerVar29 .= '
			<a href="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar28, array()) . '" target="_blank"
				data-attachmentId="' . htmlspecialchars($__compilerVar28['attachment_id'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbTrigger" data-href="' . XenForo_Template_Helper_Core::link('misc/lightbox', false, array()) . '"><img
				src="' . htmlspecialchars($__compilerVar28['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($__compilerVar28['filename'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbImage" data-src="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar28, array(
'embedded' => '1'
)) . '" /></a>
		';
}
else
{
$__compilerVar29 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar29 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar28, array()) . '" target="_blank">' . (($__compilerVar28) ? (htmlspecialchars($__compilerVar28['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($__compilerVar27)
{
$__compilerVar29 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar29 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($__compilerVar28['thumbnailUrl'])
{
$__compilerVar29 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar29 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $__compilerVar28, array()) . '" />
			
				';
if ($__compilerVar28['thumbnailUrl'])
{
$__compilerVar29 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar29 .= '
			</div>
		';
}
$__compilerVar29 .= '

	</div>
	
</li>';
$__compilerVar25 .= $__compilerVar29;
unset($__compilerVar27, $__compilerVar28, $__compilerVar29);
$__compilerVar25 .= '
			';
if ($__compilerVar24)
{
$__compilerVar25 .= '
				';
foreach ($__compilerVar24 AS $attachment)
{
$__compilerVar25 .= '
					';
if ($attachment['temp_hash'])
{
$__compilerVar25 .= '
						';
$__compilerVar30 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar30 .= '

<li id="' . (($isTemplate) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($attachment and $attachment['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($attachment and $attachment['thumbnailUrl'])
{
$__compilerVar30 .= '
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
$__compilerVar30 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar30 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank">' . (($attachment) ? (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($isTemplate)
{
$__compilerVar30 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar30 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($attachment['thumbnailUrl'])
{
$__compilerVar30 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar30 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $attachment, array()) . '" />
			
				';
if ($attachment['thumbnailUrl'])
{
$__compilerVar30 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar30 .= '
			</div>
		';
}
$__compilerVar30 .= '

	</div>
	
</li>';
$__compilerVar25 .= $__compilerVar30;
unset($__compilerVar30);
$__compilerVar25 .= '
					';
}
$__compilerVar25 .= '
				';
}
$__compilerVar25 .= '
			';
}
$__compilerVar25 .= '
		</ol>
	
		';
if ($__compilerVar24)
{
$__compilerVar25 .= '
			';
$__compilerVar31 = '';
$__compilerVar31 .= '
					';
foreach ($__compilerVar24 AS $attachment)
{
$__compilerVar31 .= '
						';
if (!$attachment['temp_hash'])
{
$__compilerVar31 .= '
							';
$__compilerVar32 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar32 .= '

<li id="' . (($isTemplate) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($attachment and $attachment['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($attachment and $attachment['thumbnailUrl'])
{
$__compilerVar32 .= '
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
$__compilerVar32 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar32 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank">' . (($attachment) ? (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($isTemplate)
{
$__compilerVar32 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar32 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($attachment['thumbnailUrl'])
{
$__compilerVar32 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar32 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $attachment, array()) . '" />
			
				';
if ($attachment['thumbnailUrl'])
{
$__compilerVar32 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar32 .= '
			</div>
		';
}
$__compilerVar32 .= '

	</div>
	
</li>';
$__compilerVar31 .= $__compilerVar32;
unset($__compilerVar32);
$__compilerVar31 .= '
						';
}
$__compilerVar31 .= '
					';
}
$__compilerVar31 .= '
				';
if (trim($__compilerVar31) !== '')
{
$__compilerVar25 .= '
			<ol class="AttachmentList Existing">
				' . $__compilerVar31 . '
			</ol>
			';
}
unset($__compilerVar31);
$__compilerVar25 .= '
		';
}
$__compilerVar25 .= '
		
		<input type="hidden" name="attachment_hash" value="' . htmlspecialchars($attachmentParams['hash'], ENT_QUOTES, 'UTF-8') . '" />
		
		' . '
		
	</div>
	
';
}
$__output .= $__compilerVar25;
unset($__compilerVar24, $__compilerVar25);
$__output .= '</dd>
		</dl>
	';
}
$__output .= '

	<dl class="ctrlUnit">
		<dt></dt>
		<dd>
			<ul>
				<li><label for="ctrl_open_invite"><input type="checkbox" name="open_invite" id="ctrl_open_invite" value="1" /> ' . 'Allow anyone in the conversation to invite others' . '</label></li>
				<li><label for="ctrl_conversation_locked"><input type="checkbox" name="conversation_locked" id="ctrl_conversation_locked" value="1" /> ' . 'Lock conversation (no responses will be allowed)' . '</label></li>
			</ul>
		</dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>
';
}
