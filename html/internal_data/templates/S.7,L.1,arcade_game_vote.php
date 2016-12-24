<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('js', 'js/Arcade/frontend.js');
$__output .= '

<span class="game-vote-' . htmlspecialchars($game['game_id'], ENT_QUOTES, 'UTF-8') . '" data-message="' . 'You have already voted this.' . '">
<a href="' . XenForo_Template_Helper_Core::link('arcade/vote', $game, array(
'd' => 'up'
)) . '" class="GameVoteLink';
if ($game['voted_up'])
{
$__output .= ' GameVoted';
}
$__output .= '" data-gameid="' . htmlspecialchars($game['game_id'], ENT_QUOTES, 'UTF-8') . '">
' . XenForo_Template_Helper_Core::numberFormat($game['vote_up'], '0') . '
' . 'Recommend' . '
</a>
-
<a href="' . XenForo_Template_Helper_Core::link('arcade/vote', $game, array(
'd' => 'down'
)) . '" class="GameVoteLink';
if ($game['voted_date'] AND !$game['voted_up'])
{
$__output .= ' GameVoted';
}
$__output .= '" data-gameid="' . htmlspecialchars($game['game_id'], ENT_QUOTES, 'UTF-8') . '">
' . XenForo_Template_Helper_Core::numberFormat($game['vote_down'], '0') . '
' . 'Not Recommend' . '
</a>
</span>';
