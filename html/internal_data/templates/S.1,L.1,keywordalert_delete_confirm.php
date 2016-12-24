<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Delete Keyword' . ': ' . htmlspecialchars($keyword['name'], ENT_QUOTES, 'UTF-8');
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()), 'value' => 'Keyword Alert');
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('account/keyword-alert-delete', false, array()) . '" method="post" class="xenForm formOverlay">
	<p>' . 'Please confirm that you want to delete this keyword' . ':</p>
	<strong><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', '', array(
'edit' => $keyword['keyword_id']
)) . '">' . htmlspecialchars($keyword['name'], ENT_QUOTES, 'UTF-8') . '</a></strong>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" value="' . 'Delete Keyword' . '" accesskey="d" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="keyword_id" value="' . htmlspecialchars($keyword['keyword_id'], ENT_QUOTES, 'UTF-8') . '" />	
	<input type="hidden" name="_xfConfirm" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
