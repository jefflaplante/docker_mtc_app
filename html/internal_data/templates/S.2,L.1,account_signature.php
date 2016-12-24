<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Edit Signature';
$__output .= '

';
$this->addRequiredExternal('css', 'account');
$__output .= '

<form method="post" class="xenForm AutoValidator Preview"
	action="' . XenForo_Template_Helper_Core::link('account/signature-save', false, array()) . '"
	data-previewUrl="' . XenForo_Template_Helper_Core::link('account/signature-preview', false, array()) . '">

	<dl class="ctrlUnit fullWidth">
		<dt></dt>
		<dd>' . $signatureEditor . '</dd>
	</dl>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd>
			<input type="submit" name="save" value="' . 'Save Changes' . '" accesskey="s" class="button primary" />
			<input type="button" value="' . 'Preview' . '..." class="button PreviewButton JsOnly" />
		</dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
