<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Add Users';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('conversations', false, array()), 'value' => 'Conversations');
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('conversations/add-users', false, array()) . '" method="post" class="xenForm formOverlay">

	<dl class="ctrlUnit">
		<dt><label for="ctrl_users">' . 'Add Users' . ':</label></dt>
		<dd>
			<input type="search" name="users" value="' . htmlspecialchars($username, ENT_QUOTES, 'UTF-8') . '" results="0" placeholder="' . 'Name' . '..." class="textCtrl AutoComplete" id="ctrl_users" autofocus="autofocus" />
			<p class="explain">' . 'Separate names with a comma.' . '</p>
		</dd>
	</dl>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" value="' . 'Add Users' . '" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="_xfConfirm" value="1" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
