<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Trophies';
$__output .= '

';
$this->addRequiredExternal('css', 'account');
$__output .= '

<form method="post" class="xenForm formOverlay NoFixedOverlay _AutoValidator"
	action="' . XenForo_Template_Helper_Core::link('account/trophies-save', false, array()) . '"
	data-fieldValidatorUrl="' . XenForo_Template_Helper_Core::link('account/validate-field.json', false, array()) . '">

	<dl class="ctrlUnit">
		<dt>' . 'Do not display trophies from these categories' . ':</dt>
		<dd>
			<ul>
			';
foreach ($trophyCategoryTitles AS $key => $title)
{
$__output .= '
				<li>
					<label><input type="checkbox" value="1" name="trophy_category_ids[' . htmlspecialchars($key, ENT_QUOTES, 'UTF-8') . ']" ' . ((in_array($key, $selectedTrophyCategories)) ? ' checked="checked"' : '') . ' /> ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '</label>
				</li>
			';
}
$__output .= '
			</ul>
		</dd>
	</dl>




	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" name="save" value="' . 'Save Changes' . '" accesskey="s" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
