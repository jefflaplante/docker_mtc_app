<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'arcade');
$__output .= '
';
$this->addRequiredExternal('css', 'node_list');
$__output .= '
';
$this->addRequiredExternal('css', 'node_forum');
$__output .= '


<li class="gameListItem">
	<div class="listBlock image">
		';
if ($game['images']['m'])
{
$__output .= '
		<img src="' . htmlspecialchars($game['images']['m'], ENT_QUOTES, 'UTF-8') . '" />
		';
}
$__output .= '
	</div>

	<div class="listBlock theTitle">
		<div class="titleText">
			<h3 class="nodeTitle">
				';
if ($xenOptions['xfarcade_play_display'] == 1)
{
$__output .= '
					<a href="' . XenForo_Template_Helper_Core::link('arcade', $game, array()) . '" title="' . XenForo_Template_Helper_Core::callHelper('striphtml', array(
'0' => (($game['description']) ? ($game['description']) : ($game['title']))
)) . '" class="Tooltip" data-tipclass="resourceCategoryTooltip"><span class="title">' . htmlspecialchars($game['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
				';
}
else
{
$__output .= '
					<a class="OverlayTrigger" href="' . XenForo_Template_Helper_Core::link('arcade', $game, array()) . '" title="' . XenForo_Template_Helper_Core::callHelper('striphtml', array(
'0' => (($game['description']) ? ($game['description']) : ($game['title']))
)) . '" class="Tooltip" data-tipclass="resourceCategoryTooltip"><span class="title">' . htmlspecialchars($game['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
				';
}
$__output .= '
			</h3>

			<div class="secondRow">
				<div class="controls faint">				
					';
if ($game['category_id'])
{
$__output .= '
						<a href="' . XenForo_Template_Helper_Core::link('full:arcade/browse', array(
'category_id' => $game['category_id'],
'title' => $game['category_title']
), array()) . '" class="EditControl">' . htmlspecialchars($game['category_title'], ENT_QUOTES, 'UTF-8') . '</a>
					';
}
$__output .= '
					
					';
if ($canVote)
{
$__output .= '
						/
						';
$__compilerVar1 = '';
$this->addRequiredExternal('js', 'js/Arcade/frontend.js');
$__compilerVar1 .= '

<span class="game-vote-' . htmlspecialchars($game['game_id'], ENT_QUOTES, 'UTF-8') . '" data-message="' . 'You have already voted this.' . '">
<a href="' . XenForo_Template_Helper_Core::link('arcade/vote', $game, array(
'd' => 'up'
)) . '" class="GameVoteLink';
if ($game['voted_up'])
{
$__compilerVar1 .= ' GameVoted';
}
$__compilerVar1 .= '" data-gameid="' . htmlspecialchars($game['game_id'], ENT_QUOTES, 'UTF-8') . '">
' . XenForo_Template_Helper_Core::numberFormat($game['vote_up'], '0') . '
' . 'Recommend' . '
</a>
-
<a href="' . XenForo_Template_Helper_Core::link('arcade/vote', $game, array(
'd' => 'down'
)) . '" class="GameVoteLink';
if ($game['voted_date'] AND !$game['voted_up'])
{
$__compilerVar1 .= ' GameVoted';
}
$__compilerVar1 .= '" data-gameid="' . htmlspecialchars($game['game_id'], ENT_QUOTES, 'UTF-8') . '">
' . XenForo_Template_Helper_Core::numberFormat($game['vote_down'], '0') . '
' . 'Not Recommend' . '
</a>
</span>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
					';
}
$__output .= '
				</div>
			</div>
		</div>
	</div>
	
	<div class="listBlock gameStats" style=\'font-size: 11px\'>
		<div class="infoContainer">
		';
if ($game['last_play_date'])
{
$__output .= '
			' . '<span class=\'muted\'>Played </span>' . XenForo_Template_Helper_Core::numberFormat($game['play_count'], '0') . ' <span class=\'muted\'>time' . (($game['play_count'] != 1) ? ('s') : ('')) . '</span>' . '
			<br />
			<span class=\'muted\'>' . 'Last played' . ': </span>' . XenForo_Template_Helper_Core::date($game['highscore_date'], '') . '
		';
}
$__output .= '
		</div>
	</div>
	
	<div class="listBlock champion">
		';
if ($game['highscore_user_id'])
{
$__output .= '
			<div class="avatarContainer">
			' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($game,(true),array(
'user' => '$game',
'size' => 's',
'img' => 'true'
),'')) . '
			</div>
			<div class="infoContainer">
				' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($game,'',(true),array())) . '<br />
				<span class=\'muted\'>' . 'Score' . ':</span> ' . XenForo_Template_Helper_Core::callHelper('Arcade_renderScore', array(
'0' => $game['highscore']
)) . '<br />
				<span class="muted">' . XenForo_Template_Helper_Core::date($game['highscore_date'], '') . '</span>
			</div>
		';
}
else
{
$__output .= '
			' . 'No one\'s played this yet' . '
		';
}
$__output .= '
	</div>

	<div class="listBlock scores">
		<div class="infoContainer">
		';
if ($game['highscore_user_id'])
{
$__output .= '	
			<table align=\'center\' class=\'highscores\'>
			';
$i = 0;
foreach ($game['highscores'] AS $score)
{
$i++;
$__output .= '
				<tr>
					<td width=\'12\'>' . ($i + 1) . '.</td>
					<td class=\'name\'>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($score,'',(true),array())) . '</td>
					<td class=\'datscore\'>' . XenForo_Template_Helper_Core::callHelper('Arcade_renderScore', array(
'0' => $score['score']
)) . '</td>
				</tr>
			';
}
$__output .= '	
			</table>
		';
}
$__output .= '
		</div>
	</div>
	
	<div class="listBlock personalBest">
		<div class="infoContainer">
		';
if ($game['played_date'])
{
$__output .= '
			<div class="titleText">
				<span class=\'muted\'>' . 'Your Score' . ':</span>
				' . XenForo_Template_Helper_Core::callHelper('Arcade_renderScore', array(
'0' => $game['played_score']
)) . '<br />

				';
if ($game['played_rank'] == 1)
{
$__output .= '
					<span style=\'font-style:italic\'>' . 'You\'re the Champion!' . '</span>
				';
}
else
{
$__output .= '
					<span class=\'muted\'>Rank:</span> ' . XenForo_Template_Helper_Core::numberFormat($game['played_rank'], '0') . '
				';
}
$__output .= '
			</div>
		';
}
else
{
$__output .= '
			<div class="titleText">' . 'You haven\'t tried it yet' . '</div>
		';
}
$__output .= '
		</div>
	</div>
</li>';
