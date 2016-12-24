<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($game['voted_date'])
{
$__output .= '
	';
$__extraData['title'] = '';
$__extraData['title'] .= 'Change Vote';
$__output .= '
';
}
else
{
$__output .= '
	';
$__extraData['title'] = '';
$__extraData['title'] .= 'Vote';
$__output .= '
';
}
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('arcade/browse', array(
'category_id' => $game['category_id']
), array()), 'value' => htmlspecialchars($game['category_title'], ENT_QUOTES, 'UTF-8'));
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('arcade/view', $game, array()), 'value' => htmlspecialchars($game['title'], ENT_QUOTES, 'UTF-8'));
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('arcade/vote', $game, array()) . '" method="post" class="xenForm formOverlay">
	<dl class="ctrlUnit">
		<dt><label>' . 'Please select your vote' . '</label></dt>
		<dd>
			<ul>
				<li>
					<label for="ctrl_vote_up">
						<input type="radio" name="d" value="up" id="ctrl_vote_up" ' . (($d == ('up')) ? ' checked="checked"' : '') . '/>
						' . 'Recommend' . '
					</label>
				</li>
				<li>
					<label for="ctrl_vote_down">
						<input type="radio" name="d" value="down" id="ctrl_vote_down" ' . (($d == ('down')) ? ' checked="checked"' : '') . '/>
						' . 'Not Recommend' . '
					</label>
				</li>
			</ul>
		</dd>
	</dl>
	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd>
			<input type="submit" value="';
if ($game['voted_date'])
{
$__output .= 'Change Vote';
}
else
{
$__output .= 'Vote';
}
$__output .= '" class="button primary" />
		</dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfConfirm" value="1" />
</form>';
