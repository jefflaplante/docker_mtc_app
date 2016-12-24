<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'arcade');
$__output .= '
<ul class="championGameList champion-' . htmlspecialchars($user['user_id'], ENT_QUOTES, 'UTF-8') . '">
	';
foreach ($userChampion AS $champion)
{
$__output .= '
		<li class="championGameList champion-game-' . htmlspecialchars($champion['game']['game_id'], ENT_QUOTES, 'UTF-8') . '">
			' . '' . '<a href="' . XenForo_Template_Helper_Core::link('arcade', $champion['game'], array()) . '">' . htmlspecialchars($champion['game']['title'], ENT_QUOTES, 'UTF-8') . '</a>' . ' Champion' . '
		</li>
	';
}
$__output .= '
</ul>';
