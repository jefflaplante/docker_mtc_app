<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'arcade');
$__output .= '

';
$__extraData['title'] = '';
$__extraData['title'] .= 'Arcade';
$__output .= '

';
if ($order == ('game_id'))
{
$__output .= '
	';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'Most Recent';
$__output .= '
';
}
else if ($order == ('play_count'))
{
$__output .= '
	';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'Most Played';
$__output .= '
';
}
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'] = XenForo_Template_Helper_Core::appendBreadCrumbs($__extraData['navigation'], $breadcrumbs);
$__output .= '

<div class="section">
	';
$__compilerVar1 = '';
$__compilerVar1 .= '<div class="resourceHeaders">
     <ol class="tabs">
          ';
if ($category)
{
$__compilerVar1 .= '
     		<li class="' . (($order == ('')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade/browse', $category, array()) . '">' . 'Alphabetical' . '</a></li>
     		<li class="' . (($order == ('game_id')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade/browse', $category, array(
'order' => 'game_id',
'type' => $typeFilter
)) . '">' . 'Most Recent' . '</a></li>
     		<li class="' . (($order == ('play_count')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade/browse', $category, array(
'order' => 'play_count',
'type' => $typeFilter
)) . '">' . 'Most Played' . '</a></li>
          ';
}
else
{
$__compilerVar1 .= '
     		<li class="' . (($order == ('')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade', '', array()) . '">' . 'Alphabetical' . '</a></li>
     		<li class="' . (($order == ('game_id')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade', '', array(
'order' => 'game_id',
'type' => $typeFilter
)) . '">' . 'Most Recent' . '</a></li>
     		<li class="' . (($order == ('play_count')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade', '', array(
'order' => 'play_count',
'type' => $typeFilter
)) . '">' . 'Most Played' . '</a></li>
          ';
}
$__compilerVar1 .= '
     </ol>
</div>
';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '

	';
$__compilerVar2 = '';
$__compilerVar3 = '';
$__compilerVar3 .= '<form action="';
if ($__compilerVar2)
{
$__compilerVar3 .= XenForo_Template_Helper_Core::link('arcade/browse', $__compilerVar2, array());
}
else
{
$__compilerVar3 .= XenForo_Template_Helper_Core::link('arcade', false, array());
}
$__compilerVar3 .= '" method="post" class="gameList">
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
if ($allGames)
{
$__compilerVar3 .= '
		';
foreach ($allGames AS $game)
{
$__compilerVar3 .= '
			';
$__compilerVar4 = '';
$this->addRequiredExternal('css', 'arcade');
$__compilerVar4 .= '
';
$this->addRequiredExternal('css', 'node_list');
$__compilerVar4 .= '
';
$this->addRequiredExternal('css', 'node_forum');
$__compilerVar4 .= '


<li class="gameListItem">
	<div class="listBlock image">
		';
if ($game['images']['m'])
{
$__compilerVar4 .= '
		<img src="' . htmlspecialchars($game['images']['m'], ENT_QUOTES, 'UTF-8') . '" />
		';
}
$__compilerVar4 .= '
	</div>

	<div class="listBlock theTitle">
		<div class="titleText">
			<h3 class="nodeTitle">
				';
if ($xenOptions['xfarcade_play_display'] == 1)
{
$__compilerVar4 .= '
					<a href="' . XenForo_Template_Helper_Core::link('arcade', $game, array()) . '" title="' . XenForo_Template_Helper_Core::callHelper('striphtml', array(
'0' => (($game['description']) ? ($game['description']) : ($game['title']))
)) . '" class="Tooltip" data-tipclass="resourceCategoryTooltip"><span class="title">' . htmlspecialchars($game['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
				';
}
else
{
$__compilerVar4 .= '
					<a class="OverlayTrigger" href="' . XenForo_Template_Helper_Core::link('arcade', $game, array()) . '" title="' . XenForo_Template_Helper_Core::callHelper('striphtml', array(
'0' => (($game['description']) ? ($game['description']) : ($game['title']))
)) . '" class="Tooltip" data-tipclass="resourceCategoryTooltip"><span class="title">' . htmlspecialchars($game['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
				';
}
$__compilerVar4 .= '
			</h3>

			<div class="secondRow">
				<div class="controls faint">				
					';
if ($game['category_id'])
{
$__compilerVar4 .= '
						<a href="' . XenForo_Template_Helper_Core::link('full:arcade/browse', array(
'category_id' => $game['category_id'],
'title' => $game['category_title']
), array()) . '" class="EditControl">' . htmlspecialchars($game['category_title'], ENT_QUOTES, 'UTF-8') . '</a>
					';
}
$__compilerVar4 .= '
					
					';
if ($canVote)
{
$__compilerVar4 .= '
						/
						';
$__compilerVar5 = '';
$this->addRequiredExternal('js', 'js/Arcade/frontend.js');
$__compilerVar5 .= '

<span class="game-vote-' . htmlspecialchars($game['game_id'], ENT_QUOTES, 'UTF-8') . '" data-message="' . 'You have already voted this.' . '">
<a href="' . XenForo_Template_Helper_Core::link('arcade/vote', $game, array(
'd' => 'up'
)) . '" class="GameVoteLink';
if ($game['voted_up'])
{
$__compilerVar5 .= ' GameVoted';
}
$__compilerVar5 .= '" data-gameid="' . htmlspecialchars($game['game_id'], ENT_QUOTES, 'UTF-8') . '">
' . XenForo_Template_Helper_Core::numberFormat($game['vote_up'], '0') . '
' . 'Recommend' . '
</a>
-
<a href="' . XenForo_Template_Helper_Core::link('arcade/vote', $game, array(
'd' => 'down'
)) . '" class="GameVoteLink';
if ($game['voted_date'] AND !$game['voted_up'])
{
$__compilerVar5 .= ' GameVoted';
}
$__compilerVar5 .= '" data-gameid="' . htmlspecialchars($game['game_id'], ENT_QUOTES, 'UTF-8') . '">
' . XenForo_Template_Helper_Core::numberFormat($game['vote_down'], '0') . '
' . 'Not Recommend' . '
</a>
</span>';
$__compilerVar4 .= $__compilerVar5;
unset($__compilerVar5);
$__compilerVar4 .= '
					';
}
$__compilerVar4 .= '
				</div>
			</div>
		</div>
	</div>
	
	<div class="listBlock gameStats" style=\'font-size: 11px\'>
		<div class="infoContainer">
		';
if ($game['last_play_date'])
{
$__compilerVar4 .= '
			' . '<span class=\'muted\'>Played </span>' . XenForo_Template_Helper_Core::numberFormat($game['play_count'], '0') . ' <span class=\'muted\'>time' . (($game['play_count'] != 1) ? ('s') : ('')) . '</span>' . '
			<br />
			<span class=\'muted\'>' . 'Last played' . ': </span>' . XenForo_Template_Helper_Core::date($game['highscore_date'], '') . '
		';
}
$__compilerVar4 .= '
		</div>
	</div>
	
	<div class="listBlock champion">
		';
if ($game['highscore_user_id'])
{
$__compilerVar4 .= '
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
$__compilerVar4 .= '
			' . 'No one\'s played this yet' . '
		';
}
$__compilerVar4 .= '
	</div>

	<div class="listBlock scores">
		<div class="infoContainer">
		';
if ($game['highscore_user_id'])
{
$__compilerVar4 .= '	
			<table align=\'center\' class=\'highscores\'>
			';
$i = 0;
foreach ($game['highscores'] AS $score)
{
$i++;
$__compilerVar4 .= '
				<tr>
					<td width=\'12\'>' . ($i + 1) . '.</td>
					<td class=\'name\'>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($score,'',(true),array())) . '</td>
					<td class=\'datscore\'>' . XenForo_Template_Helper_Core::callHelper('Arcade_renderScore', array(
'0' => $score['score']
)) . '</td>
				</tr>
			';
}
$__compilerVar4 .= '	
			</table>
		';
}
$__compilerVar4 .= '
		</div>
	</div>
	
	<div class="listBlock personalBest">
		<div class="infoContainer">
		';
if ($game['played_date'])
{
$__compilerVar4 .= '
			<div class="titleText">
				<span class=\'muted\'>' . 'Your Score' . ':</span>
				' . XenForo_Template_Helper_Core::callHelper('Arcade_renderScore', array(
'0' => $game['played_score']
)) . '<br />

				';
if ($game['played_rank'] == 1)
{
$__compilerVar4 .= '
					<span style=\'font-style:italic\'>' . 'You\'re the Champion!' . '</span>
				';
}
else
{
$__compilerVar4 .= '
					<span class=\'muted\'>Rank:</span> ' . XenForo_Template_Helper_Core::numberFormat($game['played_rank'], '0') . '
				';
}
$__compilerVar4 .= '
			</div>
		';
}
else
{
$__compilerVar4 .= '
			<div class="titleText">' . 'You haven\'t tried it yet' . '</div>
		';
}
$__compilerVar4 .= '
		</div>
	</div>
</li>';
$__compilerVar3 .= $__compilerVar4;
unset($__compilerVar4);
$__compilerVar3 .= '
		';
}
$__compilerVar3 .= '
	';
}
else
{
$__compilerVar3 .= '
		<li class="primaryContent">' . 'There is no game to display.' . '</li>
	';
}
$__compilerVar3 .= '
	</ol>

	';
if ($allGamesTotal)
{
$__compilerVar3 .= '
		<div class="sectionFooter InlineMod SelectionCountContainer">
			<span class="contentSummary">' . 'Showing games ' . XenForo_Template_Helper_Core::numberFormat($allGamesStartOffset, '0') . ' to ' . XenForo_Template_Helper_Core::numberFormat($allGamesEndOffset, '0') . ' of ' . XenForo_Template_Helper_Core::numberFormat($allGamesTotal, '0') . '' . '</span>
		</div>
	';
}
$__compilerVar3 .= '

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>

';
if ($allGamesTotal)
{
$__compilerVar3 .= '
	';
if ($__compilerVar2)
{
$__compilerVar3 .= '
		' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($gamesPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($allGamesTotal, ENT_QUOTES, 'UTF-8'), htmlspecialchars($allGamesPage, ENT_QUOTES, 'UTF-8'), 'arcade/browse', $__compilerVar2, array(), false, array())) . '
	';
}
else
{
$__compilerVar3 .= '
		' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($gamesPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($allGamesTotal, ENT_QUOTES, 'UTF-8'), htmlspecialchars($allGamesPage, ENT_QUOTES, 'UTF-8'), 'arcade', false, array(), false, array())) . '
	';
}
$__compilerVar3 .= '
';
}
$__output .= $__compilerVar3;
unset($__compilerVar2, $__compilerVar3);
$__output .= '
</div>

';
$__extraData['sidebar'] = '';
$__extraData['sidebar'] .= '
	';
$__compilerVar6 = '';
if ($categories)
{
$__compilerVar6 .= '
	<div class="section">
	<div class="secondaryContent">
		<h3>' . 'categories' . '</h3>
		    <ul>
				<li class="' . ((!$selectedCategoryId) ? ('selected') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade', false, array()) . '">' . 'All' . '</a></li>
				
				';
foreach ($categories AS $category)
{
$__compilerVar6 .= '
					<li class="' . (($category['category_id'] == $selectedCategoryId) ? ('selected') : ('')) . '">
						<a href="' . XenForo_Template_Helper_Core::link('arcade/browse', $category, array()) . '"
						   ' . (($category['description']) ? ('title="' . XenForo_Template_Helper_Core::callHelper('striphtml', array(
'0' => $category['description']
)) . '" class="Tooltip"') : ('')) . '>
							' . htmlspecialchars($category['title'], ENT_QUOTES, 'UTF-8') . '
						</a>
					</li>
				';
}
$__compilerVar6 .= '
		    </ul>
		</div>
	</div>
';
}
$__compilerVar6 .= '
';
$__extraData['sidebar'] .= $__compilerVar6;
unset($__compilerVar6);
$__extraData['sidebar'] .= '
';
