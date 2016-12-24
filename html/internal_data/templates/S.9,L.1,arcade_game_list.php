<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<form action="';
if ($category)
{
$__output .= XenForo_Template_Helper_Core::link('arcade/browse', $category, array());
}
else
{
$__output .= XenForo_Template_Helper_Core::link('arcade', false, array());
}
$__output .= '" method="post" class="gameList">
	<dl class="sectionHeaders">
		<dt class="image">&nbsp;</dt>
		<dd class="gameStats"></dd>
		<dd class="theTitle"><span>' . 'Game Title' . '</span></dd>
		<dd class="champion">' . 'Champion' . '</dd>
		<dd class="scores">' . 'Highscores' . '</dd>
		<dd class="personalBest">' . 'Personal Best' . '</dd>
	</dl>

	<ol class="gameListItems">
	';
if ($games)
{
$__output .= '
		';
foreach ($games AS $game)
{
$__output .= '
			';
$__compilerVar1 = '';
$this->addRequiredExternal('css', 'arcade');
$__compilerVar1 .= '
';
$this->addRequiredExternal('css', 'node_list');
$__compilerVar1 .= '
';
$this->addRequiredExternal('css', 'node_forum');
$__compilerVar1 .= '


<li class="gameListItem">
	<div class="listBlock image">
		';
if ($game['images']['m'])
{
$__compilerVar1 .= '
		<img src="' . htmlspecialchars($game['images']['m'], ENT_QUOTES, 'UTF-8') . '" />
		';
}
$__compilerVar1 .= '
	</div>

	<div class="listBlock theTitle">
		<div class="titleText">
			<h3 class="nodeTitle">
				';
if ($xenOptions['xfarcade_play_display'] == 1)
{
$__compilerVar1 .= '
					<a href="' . XenForo_Template_Helper_Core::link('arcade', $game, array()) . '" title="' . XenForo_Template_Helper_Core::callHelper('striphtml', array(
'0' => (($game['description']) ? ($game['description']) : ($game['title']))
)) . '" class="Tooltip" data-tipclass="resourceCategoryTooltip"><span class="title">' . htmlspecialchars($game['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
				';
}
else
{
$__compilerVar1 .= '
					<a class="OverlayTrigger" href="' . XenForo_Template_Helper_Core::link('arcade', $game, array()) . '" title="' . XenForo_Template_Helper_Core::callHelper('striphtml', array(
'0' => (($game['description']) ? ($game['description']) : ($game['title']))
)) . '" class="Tooltip" data-tipclass="resourceCategoryTooltip"><span class="title">' . htmlspecialchars($game['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
				';
}
$__compilerVar1 .= '
			</h3>

			<div class="secondRow">
				<div class="controls faint">				
					';
if ($game['category_id'])
{
$__compilerVar1 .= '
						<a href="' . XenForo_Template_Helper_Core::link('full:arcade/browse', array(
'category_id' => $game['category_id'],
'title' => $game['category_title']
), array()) . '" class="EditControl">' . htmlspecialchars($game['category_title'], ENT_QUOTES, 'UTF-8') . '</a>
					';
}
$__compilerVar1 .= '
					
					';
if ($canVote)
{
$__compilerVar1 .= '
						/
						';
$__compilerVar2 = '';
$this->addRequiredExternal('js', 'js/Arcade/frontend.js');
$__compilerVar2 .= '

<span class="game-vote-' . htmlspecialchars($game['game_id'], ENT_QUOTES, 'UTF-8') . '" data-message="' . 'You have already voted this.' . '">
<a href="' . XenForo_Template_Helper_Core::link('arcade/vote', $game, array(
'd' => 'up'
)) . '" class="GameVoteLink';
if ($game['voted_up'])
{
$__compilerVar2 .= ' GameVoted';
}
$__compilerVar2 .= '" data-gameid="' . htmlspecialchars($game['game_id'], ENT_QUOTES, 'UTF-8') . '">
' . XenForo_Template_Helper_Core::numberFormat($game['vote_up'], '0') . '
' . 'Recommend' . '
</a>
-
<a href="' . XenForo_Template_Helper_Core::link('arcade/vote', $game, array(
'd' => 'down'
)) . '" class="GameVoteLink';
if ($game['voted_date'] AND !$game['voted_up'])
{
$__compilerVar2 .= ' GameVoted';
}
$__compilerVar2 .= '" data-gameid="' . htmlspecialchars($game['game_id'], ENT_QUOTES, 'UTF-8') . '">
' . XenForo_Template_Helper_Core::numberFormat($game['vote_down'], '0') . '
' . 'Not Recommend' . '
</a>
</span>';
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
$__compilerVar1 .= '
					';
}
$__compilerVar1 .= '
				</div>
			</div>
		</div>
	</div>
	
	<div class="listBlock gameStats" style=\'font-size: 11px\'>
		<div class="infoContainer">
		';
if ($game['last_play_date'])
{
$__compilerVar1 .= '
			' . '<span class=\'muted\'>Played </span>' . XenForo_Template_Helper_Core::numberFormat($game['play_count'], '0') . ' <span class=\'muted\'>time' . (($game['play_count'] != 1) ? ('s') : ('')) . '</span>' . '
			<br />
			<span class=\'muted\'>' . 'Last played' . ': </span>' . XenForo_Template_Helper_Core::date($game['highscore_date'], '') . '
		';
}
$__compilerVar1 .= '
		</div>
	</div>
	
	<div class="listBlock champion">
		';
if ($game['highscore_user_id'])
{
$__compilerVar1 .= '
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
$__compilerVar1 .= '
			' . 'No one\'s played this yet' . '
		';
}
$__compilerVar1 .= '
	</div>

	<div class="listBlock scores">
		<div class="infoContainer">
		';
if ($game['highscore_user_id'])
{
$__compilerVar1 .= '	
			<table align=\'center\' class=\'highscores\'>
			';
$i = 0;
foreach ($game['highscores'] AS $score)
{
$i++;
$__compilerVar1 .= '
				<tr>
					<td width=\'12\'>' . ($i + 1) . '.</td>
					<td class=\'name\'>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($score,'',(true),array())) . '</td>
					<td class=\'datscore\'>' . XenForo_Template_Helper_Core::callHelper('Arcade_renderScore', array(
'0' => $score['score']
)) . '</td>
				</tr>
			';
}
$__compilerVar1 .= '	
			</table>
		';
}
$__compilerVar1 .= '
		</div>
	</div>
	
	<div class="listBlock personalBest">
		<div class="infoContainer">
		';
if ($game['played_date'])
{
$__compilerVar1 .= '
			<div class="titleText">
				<span class=\'muted\'>' . 'Your Score' . ':</span>
				' . XenForo_Template_Helper_Core::callHelper('Arcade_renderScore', array(
'0' => $game['played_score']
)) . '<br />

				';
if ($game['played_rank'] == 1)
{
$__compilerVar1 .= '
					<span style=\'font-style:italic\'>' . 'You\'re the Champion!' . '</span>
				';
}
else
{
$__compilerVar1 .= '
					<span class=\'muted\'>Rank:</span> ' . XenForo_Template_Helper_Core::numberFormat($game['played_rank'], '0') . '
				';
}
$__compilerVar1 .= '
			</div>
		';
}
else
{
$__compilerVar1 .= '
			<div class="titleText">' . 'You haven\'t tried it yet' . '</div>
		';
}
$__compilerVar1 .= '
		</div>
	</div>
</li>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
		';
}
$__output .= '
	';
}
else
{
$__output .= '
		<li class="primaryContent">' . 'There is no game to display.' . '</li>
	';
}
$__output .= '
	</ol>

	';
if ($totalGames)
{
$__output .= '
		<div class="sectionFooter InlineMod SelectionCountContainer">
			<span class="contentSummary">' . 'Showing games ' . XenForo_Template_Helper_Core::numberFormat($gameStartOffset, '0') . ' to ' . XenForo_Template_Helper_Core::numberFormat($gameEndOffset, '0') . ' of ' . XenForo_Template_Helper_Core::numberFormat($totalGames, '0') . '' . '</span>
		</div>
	';
}
$__output .= '

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>

';
if ($totalGames)
{
$__output .= '
	';
if ($category)
{
$__output .= '
		' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($gamesPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalGames, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'arcade/browse', $category, array(), false, array())) . '
	';
}
else
{
$__output .= '
		' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($gamesPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalGames, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'arcade', false, array(), false, array())) . '
	';
}
$__output .= '
';
}
