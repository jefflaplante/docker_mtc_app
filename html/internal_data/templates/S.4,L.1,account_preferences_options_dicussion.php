<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<dl class="ctrlUnit">
	<dt><label for="ctrl_threads">' . 'Threads Per Page' . ':</label></dt>
	<dd>
		<select name="threads" class="textCtrl" id="ctrl_threads">
			';
foreach ($choices AS $choice)
{
$__output .= '
					<option value="' . htmlspecialchars($choice, ENT_QUOTES, 'UTF-8') . '" ' . (($choice == $selected['threads']) ? ' selected="selected"' : '') . '>' . htmlspecialchars($choice, ENT_QUOTES, 'UTF-8') . '</option>
			';
}
$__output .= '
		</select>
	</dd>
</dl>

<dl class="ctrlUnit">
	<dt><label for="ctrl_posts">' . 'Posts Per Page' . ':</label></dt>
	<dd>
		<select name="posts" class="textCtrl" id="ctrl_posts">
			';
foreach ($choices AS $choice)
{
$__output .= '
					<option value="' . htmlspecialchars($choice, ENT_QUOTES, 'UTF-8') . '" ' . (($choice == $selected['posts']) ? ' selected="selected"' : '') . '>' . htmlspecialchars($choice, ENT_QUOTES, 'UTF-8') . '</option>
			';
}
$__output .= '
		</select>
	</dd>
</dl>

<dl class="ctrlUnit">
	<dt><label for="ctrl_conversations">' . 'Conversations Per Page' . ':</label></dt>
	<dd>
		<select name="conversations" class="textCtrl" id="ctrl_conversations">
			';
foreach ($choices AS $choice)
{
$__output .= '
					<option value="' . htmlspecialchars($choice, ENT_QUOTES, 'UTF-8') . '" ' . (($choice == $selected['conversations']) ? ' selected="selected"' : '') . '>' . htmlspecialchars($choice, ENT_QUOTES, 'UTF-8') . '</option>
			';
}
$__output .= '
		</select>
	</dd>
</dl>
';
