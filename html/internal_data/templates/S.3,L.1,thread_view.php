<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
if ($brmeOptions['enabled_title'])
{
$__extraData['title'] .= '
	';
if ($brmeOptions['title'] == ('user') && $metaData['title'])
{
$__extraData['title'] .= '
		' . $metaData['title'] . '
	';
}
else if ($brmeOptions['title'] == ('fixed') && $brmeOptions['titleFixed'])
{
$__extraData['title'] .= '
		' . $brmeOptions['titleFixed'] . '
	';
}
else
{
$__extraData['title'] .= '
		' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread,
'1' => 'escaped'
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '
	';
}
$__extraData['title'] .= '
';
}
$__extraData['title'] .= XenForo_Template_Helper_Core::callHelper('pagenumber', array(
'0' => $page
));
$__output .= '
';
$__extraData['h1'] = '';
$__extraData['h1'] .= XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8');
$__output .= '

';
$__extraData['pageDescription'] = array();
$__extraData['pageDescription']['content'] = '';
$__extraData['pageDescription']['content'] .= '
	' . 'Discussion in \'' . '<a href="' . XenForo_Template_Helper_Core::link('forums', $forum, array()) . '">' . htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8') . '</a>' . '\' started by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $thread
)) . ', ' . '<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array()) . '">' . XenForo_Template_Helper_Core::datetime($thread['post_date'], 'html') . '</a>' . '.' . '
';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'] = XenForo_Template_Helper_Core::appendBreadCrumbs($__extraData['navigation'], $nodeBreadCrumbs);
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:threads', $thread, array()), 'value' => htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8'));
$__output .= '

';
$__extraData['head']['canonical'] = '';
$__extraData['head']['canonical'] .= '
	<link rel="canonical" href="' . XenForo_Template_Helper_Core::link('canonical:threads', $thread, array(
'page' => $page
)) . '" />';
$__output .= '
';
$__extraData['head']['description'] = '';
$__extraData['head']['description'] .= '
	';
$__output .= '
';
if ($brmeOptions['enabled_description'])
{
$__output .= '
	';
if ($brmeOptions['description'] != ('fixed') && $metaData['description'])
{
$__output .= '
		';
$__extraData['head']['openGraph'] = '';
$__compilerVar1 = '';
$__compilerVar1 .= XenForo_Template_Helper_Core::link('canonical:threads', $thread, array());
$__compilerVar2 = '';
if ($brmeOptions['enabled_title'])
{
$__compilerVar2 .= '
	';
if ($brmeOptions['title'] == ('user') && $metaData['title'])
{
$__compilerVar2 .= '
		' . $metaData['title'] . '
	';
}
else if ($brmeOptions['title'] == ('fixed') && $brmeOptions['titleFixed'])
{
$__compilerVar2 .= '
		' . $brmeOptions['titleFixed'] . '
	';
}
else
{
$__compilerVar2 .= '
		' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread,
'1' => 'escaped'
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '
	';
}
$__compilerVar2 .= '
';
}
$__compilerVar3 = '';
$__compilerVar3 .= $metaData['description'];
$__compilerVar4 = '';
$__compilerVar4 .= XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $thread,
'1' => 'm',
'2' => '0',
'3' => '1'
));
$__compilerVar5 = '';
if ($xenOptions['facebookAppId'] OR $xenOptions['facebookAdmins'])
{
$__compilerVar5 .= '
	<meta property="og:site_name" content="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
	';
if ($__compilerVar4)
{
$__compilerVar5 .= '<meta property="og:image" content="' . htmlspecialchars($__compilerVar4, ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar5 .= '
	<meta property="og:image" content="' . XenForo_Template_Helper_Core::callHelper('fullurl', array(
'0' => XenForo_Template_Helper_Core::styleProperty('ogLogoPath'),
'1' => '1'
)) . '" />
	<meta property="og:type" content="' . (($ogType) ? (htmlspecialchars($ogType, ENT_QUOTES, 'UTF-8')) : ('article')) . '" />
	<meta property="og:url" content="' . $__compilerVar1 . '" />
	<meta property="og:title" content="' . $__compilerVar2 . '" />
	';
if ($__compilerVar3)
{
$__compilerVar5 .= '<meta property="og:description" content="' . $__compilerVar3 . '" />';
}
$__compilerVar5 .= '
	' . $ogExtraHtml . '
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar5 .= '<meta property="fb:app_id" content="' . htmlspecialchars($xenOptions['facebookAppId'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar5 .= '
	';
if ($xenOptions['facebookAdmins'])
{
$__compilerVar5 .= '<meta property="fb:admins" content="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $xenOptions['facebookAdmins'],
'1' => ','
)) . '" />';
}
$__compilerVar5 .= '
';
}
$__extraData['head']['openGraph'] .= $__compilerVar5;
unset($__compilerVar1, $__compilerVar2, $__compilerVar3, $__compilerVar4, $__compilerVar5);
$__output .= '
	';
}
else if ($brmeOptions['descriptionFixed'])
{
$__output .= '
	';
$__extraData['head']['openGraph'] = '';
$__compilerVar6 = '';
$__compilerVar6 .= XenForo_Template_Helper_Core::link('canonical:threads', $thread, array());
$__compilerVar7 = '';
if ($brmeOptions['enabled_title'])
{
$__compilerVar7 .= '
	';
if ($brmeOptions['title'] == ('user') && $metaData['title'])
{
$__compilerVar7 .= '
		' . $metaData['title'] . '
	';
}
else if ($brmeOptions['title'] == ('fixed') && $brmeOptions['titleFixed'])
{
$__compilerVar7 .= '
		' . $brmeOptions['titleFixed'] . '
	';
}
else
{
$__compilerVar7 .= '
		' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread,
'1' => 'escaped'
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '
	';
}
$__compilerVar7 .= '
';
}
$__compilerVar8 = '';
$__compilerVar8 .= $metaData['description'];
$__compilerVar9 = '';
$__compilerVar9 .= XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $thread,
'1' => 'm',
'2' => '0',
'3' => '1'
));
$__compilerVar10 = '';
if ($xenOptions['facebookAppId'] OR $xenOptions['facebookAdmins'])
{
$__compilerVar10 .= '
	<meta property="og:site_name" content="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
	';
if ($__compilerVar9)
{
$__compilerVar10 .= '<meta property="og:image" content="' . htmlspecialchars($__compilerVar9, ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar10 .= '
	<meta property="og:image" content="' . XenForo_Template_Helper_Core::callHelper('fullurl', array(
'0' => XenForo_Template_Helper_Core::styleProperty('ogLogoPath'),
'1' => '1'
)) . '" />
	<meta property="og:type" content="' . (($ogType) ? (htmlspecialchars($ogType, ENT_QUOTES, 'UTF-8')) : ('article')) . '" />
	<meta property="og:url" content="' . $__compilerVar6 . '" />
	<meta property="og:title" content="' . $__compilerVar7 . '" />
	';
if ($__compilerVar8)
{
$__compilerVar10 .= '<meta property="og:description" content="' . $__compilerVar8 . '" />';
}
$__compilerVar10 .= '
	' . $ogExtraHtml . '
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar10 .= '<meta property="fb:app_id" content="' . htmlspecialchars($xenOptions['facebookAppId'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar10 .= '
	';
if ($xenOptions['facebookAdmins'])
{
$__compilerVar10 .= '<meta property="fb:admins" content="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $xenOptions['facebookAdmins'],
'1' => ','
)) . '" />';
}
$__compilerVar10 .= '
';
}
$__extraData['head']['openGraph'] .= $__compilerVar10;
unset($__compilerVar6, $__compilerVar7, $__compilerVar8, $__compilerVar9, $__compilerVar10);
$__output .= '
	';
}
$__output .= '
';
}
else
{
$__extraData['head']['openGraph'] = '';
$__compilerVar11 = '';
$__compilerVar11 .= XenForo_Template_Helper_Core::link('canonical:threads', $thread, array());
$__compilerVar12 = '';
if ($brmeOptions['enabled_title'])
{
$__compilerVar12 .= '
	';
if ($brmeOptions['title'] == ('user') && $metaData['title'])
{
$__compilerVar12 .= '
		' . $metaData['title'] . '
	';
}
else if ($brmeOptions['title'] == ('fixed') && $brmeOptions['titleFixed'])
{
$__compilerVar12 .= '
		' . $brmeOptions['titleFixed'] . '
	';
}
else
{
$__compilerVar12 .= '
		' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread,
'1' => 'escaped'
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '
	';
}
$__compilerVar12 .= '
';
}
$__compilerVar13 = '';
$__compilerVar13 .= XenForo_Template_Helper_Core::callHelper('snippet', array(
'0' => $firstPost['message'],
'1' => '155'
));
$__compilerVar14 = '';
$__compilerVar14 .= XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $thread,
'1' => 'm',
'2' => '0',
'3' => '1'
));
$__compilerVar15 = '';
if ($xenOptions['facebookAppId'] OR $xenOptions['facebookAdmins'])
{
$__compilerVar15 .= '
	<meta property="og:site_name" content="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
	';
if ($__compilerVar14)
{
$__compilerVar15 .= '<meta property="og:image" content="' . htmlspecialchars($__compilerVar14, ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar15 .= '
	<meta property="og:image" content="' . XenForo_Template_Helper_Core::callHelper('fullurl', array(
'0' => XenForo_Template_Helper_Core::styleProperty('ogLogoPath'),
'1' => '1'
)) . '" />
	<meta property="og:type" content="' . (($ogType) ? (htmlspecialchars($ogType, ENT_QUOTES, 'UTF-8')) : ('article')) . '" />
	<meta property="og:url" content="' . $__compilerVar11 . '" />
	<meta property="og:title" content="' . $__compilerVar12 . '" />
	';
if ($__compilerVar13)
{
$__compilerVar15 .= '<meta property="og:description" content="' . $__compilerVar13 . '" />';
}
$__compilerVar15 .= '
	' . $ogExtraHtml . '
	';
if ($xenOptions['facebookAppId'])
{
$__compilerVar15 .= '<meta property="fb:app_id" content="' . htmlspecialchars($xenOptions['facebookAppId'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar15 .= '
	';
if ($xenOptions['facebookAdmins'])
{
$__compilerVar15 .= '<meta property="fb:admins" content="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $xenOptions['facebookAdmins'],
'1' => ','
)) . '" />';
}
$__compilerVar15 .= '
';
}
$__extraData['head']['openGraph'] .= $__compilerVar15;
unset($__compilerVar11, $__compilerVar12, $__compilerVar13, $__compilerVar14, $__compilerVar15);
}
$__output .= '
';
$__extraData['bodyClasses'] = '';
$__extraData['bodyClasses'] .= XenForo_Template_Helper_Core::callHelper('nodeClasses', array(
'0' => $nodeBreadCrumbs,
'1' => $forum
)) . (($xenOptions['selectQuotable']) ? (' SelectQuotable') : (''));
$__output .= '
';
$__extraData['searchBar']['thread'] = '';
$__compilerVar16 = '';
$__compilerVar16 .= '<label title="' . 'Search only ' . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '' . '"><input type="checkbox" name="type[post][thread_id]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '"
	id="search_bar_thread" class="AutoChecker"
	data-uncheck="#search_bar_title_only, #search_bar_nodes" /> ' . 'Search this thread only' . '</label>';
$__extraData['searchBar']['thread'] .= $__compilerVar16;
unset($__compilerVar16);
$__output .= '
';
$__extraData['searchBar']['forum'] = '';
$__compilerVar17 = '';
$__compilerVar17 .= '<label title="' . 'Search only ' . htmlspecialchars($forum['title'], ENT_QUOTES, 'UTF-8') . '' . '"><input type="checkbox" name="nodes[]" value="' . htmlspecialchars($forum['node_id'], ENT_QUOTES, 'UTF-8') . '"
	id="search_bar_nodes" class="Disabler AutoChecker" checked="checked"
	data-uncheck="#search_bar_thread" /> ' . 'Search this forum only' . '</label>
	<ul id="search_bar_nodes_Disabler">
		<li><label><input type="checkbox" name="type[post][group_discussion]" value="1"
			id="search_bar_group_discussion" class="AutoChecker"
			data-uncheck="#search_bar_thread" /> ' . 'Display results as threads' . '</label></li>
	</ul>';
$__extraData['searchBar']['forum'] .= $__compilerVar17;
unset($__compilerVar17);
$__output .= '

';
$this->addRequiredExternal('css', 'thread_view');
$__output .= '

';
$threadTagsHtml = '';
if ($xenOptions['enableTagging'] AND ($canEditTags OR $thread['tagsList']))
{
$threadTagsHtml .= '
	';
$__compilerVar18 = '';
$__compilerVar18 .= (($canEditTags) ? (XenForo_Template_Helper_Core::link('threads/tags', $thread, array())) : (''));
$__compilerVar19 = '';
$__compilerVar19 .= '<div class="tagBlock TagContainer">
	' . 'Tags' . ':
	';
if ($thread['tagsList'])
{
$__compilerVar19 .= '
		<ul class="tagList">
		';
foreach ($thread['tagsList'] AS $tag)
{
$__compilerVar19 .= '
			<li><a href="' . XenForo_Template_Helper_Core::link('tags', $tag, array()) . '" class="tag"><span class="arrow"></span>' . htmlspecialchars($tag['tag'], ENT_QUOTES, 'UTF-8') . '</a></li>
		';
}
$__compilerVar19 .= '
		</ul>
	';
}
$__compilerVar19 .= '
	';
if ($__compilerVar18)
{
$__compilerVar19 .= '
		<a href="' . htmlspecialchars($__compilerVar18, ENT_QUOTES, 'UTF-8', (false)) . '" class="OverlayTrigger tagBlockEdit">';
if ($thread['tagsList'])
{
$__compilerVar19 .= 'Edit';
}
else
{
$__compilerVar19 .= 'Add Tags';
}
$__compilerVar19 .= '</a>
	';
}
$__compilerVar19 .= '
</div>';
$threadTagsHtml .= $__compilerVar19;
unset($__compilerVar18, $__compilerVar19);
$threadTagsHtml .= '
';
}
$__output .= '

';
if ($threadTagsHtml AND $xenOptions['tagPosition'] == ('top'))
{
$__output .= $threadTagsHtml;
}
$__output .= '

' . '

';
if ($poll)
{
$__output .= '
	';
$__compilerVar20 = '';
$__compilerVar20 .= '
			';
if ($poll['canVote'] AND !$poll['hasVoted'])
{
$__compilerVar20 .= '
				';
$__compilerVar21 = '';
$__compilerVar21 .= '
		
<div>		
	<ol class="pollOptions">
		';
foreach ($poll['responses'] AS $pollResponseId => $response)
{
$__compilerVar21 .= '
			<li class="pollOption"><label>';
if ($poll['max_votes'] != 1)
{
$__compilerVar21 .= '
				<input type="checkbox" name="response_multiple[]" class="PollResponse" value="' . htmlspecialchars($pollResponseId, ENT_QUOTES, 'UTF-8') . '" />';
}
else
{
$__compilerVar21 .= '
				<input type="radio" name="response" value="' . htmlspecialchars($pollResponseId, ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar21 .= '
				' . htmlspecialchars($response['response'], ENT_QUOTES, 'UTF-8') . '</label></li>				
		';
}
$__compilerVar21 .= '
	</ol>
	
	<div class="buttons">
		';
$__compilerVar22 = '';
$__compilerVar22 .= '
				';
if ($poll['max_votes'] == 0 OR $poll['max_votes'] > count($poll['responses']))
{
$__compilerVar22 .= '
					<span class="multipleNote muted">' . 'Multiple votes are allowed.' . '</span>
				';
}
else if ($poll['max_votes'] > 1)
{
$__compilerVar22 .= '
					<span class="multipleNote muted">' . 'You may select up to ' . htmlspecialchars($poll['max_votes'], ENT_QUOTES, 'UTF-8') . ' choices.' . '</span>
				';
}
$__compilerVar22 .= '
				';
if ($poll['public_votes'])
{
$__compilerVar22 .= '
					<span class="publicWarning muted">' . 'Your vote will be publicly visible.' . '</span>
				';
}
$__compilerVar22 .= '
				';
if (!$poll['canViewResults'])
{
$__compilerVar22 .= '
					<div class="noResultsNote muted">' . 'Results are only viewable after voting.' . '</div>
				';
}
$__compilerVar22 .= '
			';
if (trim($__compilerVar22) !== '')
{
$__compilerVar21 .= '
			<div class="pollNotes">
			' . $__compilerVar22 . '
			</div>
		';
}
unset($__compilerVar22);
$__compilerVar21 .= '
			
		<input type="submit" class="button primary" value="' . 'Cast Your Vote' . '" accesskey="s" />
		';
if ($poll['canViewResults'])
{
$__compilerVar21 .= '
			';
if ($canViewPollResults)
{
$__compilerVar21 .= '
<input type="button" value="' . 'View Results' . '" class="button OverlayTrigger JsOnly" data-href="' . XenForo_Template_Helper_Core::link('threads/poll/results', $thread, array()) . '" />
			<noscript><a href="' . XenForo_Template_Helper_Core::link('threads/poll/results', $thread, array()) . '" class="button">' . 'View Results' . '</a></noscript>
';
}
$__compilerVar21 .= '
		';
}
$__compilerVar21 .= '
	</div>
</div>';
$__compilerVar20 .= $__compilerVar21;
unset($__compilerVar21);
$__compilerVar20 .= '
			';
}
else
{
$__compilerVar20 .= '
				';
$__compilerVar23 = '';
$__compilerVar23 .= '

<div class="overlayScroll pollResultsOverlay">

	<ol class="pollResults ' . ((!$poll['canViewResults']) ? ('noResults') : ('')) . '">
	';
foreach ($poll['responses'] AS $pollResponseId => $response)
{
$__compilerVar23 .= '
		<li class="pollResult ' . (($response['hasVoted']) ? ('voted') : ('')) . '">
			';
if ($response['hasVoted'])
{
$__compilerVar23 .= '
				<div class="votedIconCell" title="' . 'Your vote' . '">*</div>
			';
}
else
{
$__compilerVar23 .= '
				<div class="votedIconCell"></div>
			';
}
$__compilerVar23 .= '
			<h3 class="optionText" ' . (($response['hasVoted']) ? ('title="' . 'Your vote' . '"') : ('')) . '>
				' . htmlspecialchars($response['response'], ENT_QUOTES, 'UTF-8') . '
			</h3>
			';
if ($poll['canViewResults'])
{
$__compilerVar23 .= '
				';
if ($canViewPollResults)
{
$__compilerVar23 .= '
<div class="barCell">
					<span class="barContainer">
						';
if ($response['response_vote_count'])
{
$__compilerVar23 .= '<span class="bar" style="width: ' . (100 * $response['response_vote_count'] / $poll['voter_count']) . '%"></span>';
}
$__compilerVar23 .= '
					</span>
				</div>
';
}
$__compilerVar23 .= '
				';
if ($canViewPollResults)
{
$__compilerVar23 .= '
<div class="count">
					';
if ($poll['public_votes'] AND $response['response_vote_count'])
{
$__compilerVar23 .= '
						<a href="' . XenForo_Template_Helper_Core::link('threads/poll/results', $thread, array(
'poll_response_id' => $pollResponseId
)) . '" class="concealed OverlayTrigger">' . '' . XenForo_Template_Helper_Core::numberFormat($response['response_vote_count'], '0') . ' vote(s)' . '</a>
					';
}
else
{
$__compilerVar23 .= '
						' . '' . XenForo_Template_Helper_Core::numberFormat($response['response_vote_count'], '0') . ' vote(s)' . '
					';
}
$__compilerVar23 .= '
				</div>
';
}
$__compilerVar23 .= '
				';
if ($canViewPollResults)
{
$__compilerVar23 .= '
<div class="percentage">
					';
if ($poll['voter_count'])
{
$__compilerVar23 .= '
						' . XenForo_Template_Helper_Core::numberFormat((100 * $response['response_vote_count'] / $poll['voter_count']), '1') . '%
					';
}
else
{
$__compilerVar23 .= '
						' . XenForo_Template_Helper_Core::numberFormat('0', '1') . '%
					';
}
$__compilerVar23 .= '
				</div>
';
}
$__compilerVar23 .= '
			';
}
$__compilerVar23 .= '
		</li>
	';
}
$__compilerVar23 .= '
	</ol>
	
	<div class="buttons">
		';
$__compilerVar24 = '';
$__compilerVar24 .= '
				';
if ($poll['max_votes'] != 1)
{
$__compilerVar24 .= '
					<span class="multipleNote muted">' . 'Multiple votes are allowed.' . '</span>
				';
}
$__compilerVar24 .= '
				';
if (!$poll['canViewResults'])
{
$__compilerVar24 .= '
					<div class="noResultsNote muted">' . 'Results are only viewable after voting.' . '</div>
				';
}
$__compilerVar24 .= '
			';
if (trim($__compilerVar24) !== '')
{
$__compilerVar23 .= '
			<div class="pollNotes">
			' . $__compilerVar24 . '
			</div>
		';
}
unset($__compilerVar24);
$__compilerVar23 .= '
		
		';
if ($poll['canVote'])
{
$__compilerVar23 .= '
			<a href="' . XenForo_Template_Helper_Core::link('threads/poll/vote', $thread, array()) . '" class="button PollChangeVote nonOverlayOnly">' . 'Change Your Vote' . '</a>
		';
}
$__compilerVar23 .= '
	</div>
</div>';
$__compilerVar20 .= $__compilerVar23;
unset($__compilerVar23);
$__compilerVar20 .= '
			';
}
$__compilerVar20 .= '
		';
$__compilerVar25 = '';
$this->addRequiredExternal('css', 'polls');
$__compilerVar25 .= '
';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar25 .= '

<div class="NoAutoHeader PollContainer">
	<form action="' . XenForo_Template_Helper_Core::link('threads/poll/vote', $thread, array()) . '" method="post"
	class="sectionMain pollBlock AutoValidator PollVoteForm" data-max-votes="' . htmlspecialchars($poll['max_votes'], ENT_QUOTES, 'UTF-8') . '">
	
		<div class="secondaryContent">	
			<div class="pollContent">
				<div class="questionMark">?</div>
			
				<div class="question">
					<h2 class="questionText">' . htmlspecialchars($poll['question'], ENT_QUOTES, 'UTF-8') . '</h2>
					';
if ($poll['canEdit'])
{
$__compilerVar25 .= '<a href="' . XenForo_Template_Helper_Core::link('threads/poll/edit', $thread, array()) . '" class="editLink">' . 'Edit' . '</a>';
}
$__compilerVar25 .= '
';
if ($poll['close_date'] AND $poll['hide_results'] AND $poll['until_close'])
{
$__compilerVar25 .= '
	<div class="pollNotes closeDate muted">
		' . 'The results of this poll are hidden until the poll closes on ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array(
'0' => $poll['close_date']
)) . '.' . '
	</div>
';
}
else if ($poll['hide_results'])
{
$__compilerVar25 .= '
	<div class="pollNotes closeDate muted">
		' . 'The results of this poll are hidden until it is manually edited by the user or site admin.' . '
	</div>
';
}
$__compilerVar25 .= '
					
					';
if ($poll['close_date'])
{
$__compilerVar25 .= '
						<div class="pollNotes closeDate muted">
							';
if ($poll['open'])
{
$__compilerVar25 .= '
								' . 'This poll will close on ' . XenForo_Template_Helper_Core::datetime($poll['close_date'], 'absolute') . '.' . '
							';
}
else
{
$__compilerVar25 .= '
								' . 'Poll closed ' . XenForo_Template_Helper_Core::datetime($poll['close_date'], '') . '.' . '
							';
}
$__compilerVar25 .= '
						</div>
					';
}
$__compilerVar25 .= '
				</div>
					
				' . $__compilerVar20 . '
			</div>
		</div>
	
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>';
$__output .= $__compilerVar25;
unset($__compilerVar20, $__compilerVar25);
$__output .= '
';
}
$__output .= '

';
if ($showPostedNotice)
{
$__output .= '
	<div class="importantMessage">' . 'Your message has been submitted and will be displayed pending approval by a moderator.' . '</div>
';
}
$__output .= '

';
$threadStatusHtml = '';
$threadStatusHtml .= '
	';
$__compilerVar26 = '';
$__compilerVar26 .= '
				';
if ($thread['discussion_state'] == ('deleted'))
{
$__compilerVar26 .= '
					<dd class="deletedAlert">
						<span class="icon Tooltip" title="' . 'Deleted' . '" data-tipclass="iconTip"></span>
							' . 'Removed from public view.' . '</dd>
				';
}
else if ($thread['discussion_state'] == ('moderated'))
{
$__compilerVar26 .= '
					<dd class="moderatedAlert">
						<span class="icon Tooltip" title="' . 'Awaiting moderation' . '" data-tipclass="iconTip"></span>
							' . 'Awaiting moderation before being displayed publicly.' . '</dd>
				';
}
$__compilerVar26 .= '
	
				';
if (!$thread['discussion_open'])
{
$__compilerVar26 .= '
					<dd class="lockedAlert">
						<span class="icon Tooltip" title="' . 'Locked' . '" data-tipclass="iconTip"></span>
							' . 'Not open for further replies.' . '</dd>
				';
}
$__compilerVar26 .= '
			';
if (trim($__compilerVar26) !== '')
{
$threadStatusHtml .= '
		<dl class="threadAlerts secondaryContent">
			<dt>' . 'Thread Status' . ':</dt>
			' . $__compilerVar26 . '
		</dl>
	';
}
unset($__compilerVar26);
$threadStatusHtml .= '
';
$__output .= '
' . $threadStatusHtml . '

';
$__compilerVar27 = '';
$__output .= $this->callTemplateHook('thread_view_pagenav_before', $__compilerVar27, array(
'thread' => $thread
));
unset($__compilerVar27);
$__output .= '
';
if ($xenOptions['RainDD_UA_ThreadViewPos'] == 1)
{
$__output .= '
	';
$__compilerVar28 = '';
if ($RainDD_UA_ThreadViewerPermission)
{
$__compilerVar28 .= '
	';
$__compilerVar29 = '';
$__compilerVar29 .= '
			';
if ($xenOptions['RainDD_UA_ThreadViewType'] == 0)
{
$__compilerVar29 .= '
			';
foreach ($RainDD_UA_ThreadUsersViewing['records'] AS $user)
{
$__compilerVar29 .= '
				<li>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '</li>
			';
}
$__compilerVar29 .= '
			';
}
else if ($xenOptions['RainDD_UA_ThreadViewType'] == 1)
{
$__compilerVar29 .= '
			';
foreach ($RainDD_UA_ThreadUsersViewing['records'] AS $user)
{
$__compilerVar29 .= '
				<li>' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'title' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8')
),'')) . '</li>
			';
}
$__compilerVar29 .= '
			';
}
$__compilerVar29 .= '
			';
if (trim($__compilerVar29) !== '')
{
$__compilerVar28 .= '
	';
$this->addRequiredExternal('css', 'RainDD_UA_Thread');
$__compilerVar28 .= '
	<div id="uaThreadViewContainer" class="section secondaryContent">
		<h3>' . 'Users Who Are Viewing This Thread <span class="footnote">(Users: ' . XenForo_Template_Helper_Core::numberFormat($RainDD_UA_ThreadUsersViewing['members'], '0') . ', Guests: ' . XenForo_Template_Helper_Core::numberFormat($RainDD_UA_ThreadUsersViewing['guests'], '0') . ')</span>' . '</h3>	
		';
if ($xenOptions['RainDD_UA_ThreadViewType'] == 0)
{
$__compilerVar28 .= '
			<ol class="listInline commaImplode">
		';
}
else if ($xenOptions['RainDD_UA_ThreadViewType'] == 1)
{
$__compilerVar28 .= '
			<ol class="listInline">
		';
}
$__compilerVar28 .= '
			' . $__compilerVar29 . '
			</ol>
		</div>
	';
}
unset($__compilerVar29);
$__compilerVar28 .= '
';
}
$__output .= $__compilerVar28;
unset($__compilerVar28);
$__output .= '	
';
}
$__output .= '
';
if ($xenOptions['RainDD_UA_ThreadReadPos'] == 1)
{
$__output .= '
	';
$__compilerVar30 = '';
if ($RainDD_UA_ThreadReaderPermission)
{
$__compilerVar30 .= '
	';
$__compilerVar31 = '';
$__compilerVar31 .= '
			';
if ($xenOptions['RainDD_UA_ThreadReadType'] == 0)
{
$__compilerVar31 .= '
			';
foreach ($RainDD_UA_ThreadUsersReading AS $user)
{
$__compilerVar31 .= '
					<li>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '</li>
			';
}
$__compilerVar31 .= '
			';
}
else if ($xenOptions['RainDD_UA_ThreadReadType'] == 1)
{
$__compilerVar31 .= '
			';
foreach ($RainDD_UA_ThreadUsersReading AS $user)
{
$__compilerVar31 .= '
					<li>' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'title' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8')
),'')) . '</li>
			';
}
$__compilerVar31 .= '
			';
}
$__compilerVar31 .= '
				</div>
			</div>
            ';
if (trim($__compilerVar31) !== '')
{
$__compilerVar30 .= '
	';
$this->addRequiredExternal('css', 'RainDD_UA_Thread');
$__compilerVar30 .= '
    <div id="uaThreadReadContainer" class="section secondaryContent">
        <h3>' . 'Users Who Have Read This Thread <span class="footnote">(Total: ' . XenForo_Template_Helper_Core::numberFormat($RainDD_UA_ThreadReaderCount, '0') . ')</span>' . '</h3>
		';
if ($xenOptions['RainDD_UA_ThreadReadType'] == 0)
{
$__compilerVar30 .= '
        	<ol class="listInline commaImplode">
		';
}
else if ($xenOptions['RainDD_UA_ThreadReadType'] == 1)
{
$__compilerVar30 .= '
			<ol class="listInline">
		';
}
$__compilerVar30 .= '
			<div class="uaCollapseThreadRead">
    				<div class="uaExpandThreadRead">
			' . $__compilerVar31 . '
        	</ol>
    	</div>
	';
}
unset($__compilerVar31);
$__compilerVar30 .= '
';
}
$__compilerVar30 .= '		
		';
$__output .= $__compilerVar30;
unset($__compilerVar30);
$__output .= '	
';
}
$__output .= '

<div class="pageNavLinkGroup">
	<div class="linkGroup SelectionCountContainer">
		';
$__compilerVar32 = '';
$__compilerVar32 .= '
					';
$__compilerVar33 = '';
$__compilerVar33 .= '
							';
if ($canEditThread)
{
$__compilerVar33 .= '
								<li><a href="' . XenForo_Template_Helper_Core::link('threads/edit', $thread, array()) . '" class="OverlayTrigger">' . 'Edit Thread' . '</a></li>
							';
}
else if ($canEditTitle)
{
$__compilerVar33 .= '
								<li><a href="' . XenForo_Template_Helper_Core::link('threads/edit-title', $thread, array()) . '" class="OverlayTrigger">' . 'Edit Title' . '</a></li>
							';
}
$__compilerVar33 .= '
							';
if ($canAddPoll)
{
$__compilerVar33 .= '
								<li><a href="' . XenForo_Template_Helper_Core::link('threads/poll/add', $thread, array()) . '">' . 'Add Poll' . '</a></li>
							';
}
$__compilerVar33 .= '
							';
if ($canDeleteThread)
{
$__compilerVar33 .= '
								<li><a href="' . XenForo_Template_Helper_Core::link('threads/delete', $thread, array()) . '" class="OverlayTrigger">' . 'Delete Thread' . '</a></li>
							';
}
$__compilerVar33 .= '
							';
if ($canMoveThread)
{
$__compilerVar33 .= '
								<li><a href="' . XenForo_Template_Helper_Core::link('threads/move', $thread, array()) . '" class="OverlayTrigger">' . 'Move Thread' . '</a></li>
							';
}
$__compilerVar33 .= '
							';
if ($canReplyBan)
{
$__compilerVar33 .= '
								<li><a href="' . XenForo_Template_Helper_Core::link('threads/reply-bans', $thread, array()) . '" class="OverlayTrigger">' . 'Manage Reply Bans' . '</a></li>
							';
}
$__compilerVar33 .= '
							';
if ($canViewModeratorLog)
{
$__compilerVar33 .= '
								<li><a href="' . XenForo_Template_Helper_Core::link('threads/moderator-actions', $thread, array()) . '" class="OverlayTrigger">' . 'Moderator Actions' . '</a></li>
							';
}
$__compilerVar33 .= '
							';
if ($deletedPosts)
{
$__compilerVar33 .= '
								<li><a href="' . XenForo_Template_Helper_Core::link('threads/show-posts', $thread, array(
'page' => $page
)) . '" class="MessageLoader" data-messageSelector="#messageList .message.deleted.placeholder">' . 'Show Deleted Posts' . '</a></li>
							';
}
$__compilerVar33 .= '
							
';
if ($visitor['permissions']['forum']['whoRepliedView'] and $thread['reply_count'] > 0)
{
$__compilerVar33 .= '
    <a href="' . XenForo_Template_Helper_Core::link('threads/whoreplied', $thread, array()) . '" title="' . 'Who Replied?' . '" class=\'OverlayTrigger\' data-href="' . XenForo_Template_Helper_Core::link('threads/whoreplied', $thread, array()) . '">' . 'Who Replied?' . '</a>
';
}
$__compilerVar33 .= '

							';
$__compilerVar34 = '';
$__compilerVar33 .= $this->callTemplateHook('thread_view_tools_links', $__compilerVar34, array(
'thread' => $thread
));
unset($__compilerVar34);
$__compilerVar33 .= '
						';
if (trim($__compilerVar33) !== '')
{
$__compilerVar32 .= '
					<div class="primaryContent menuHeader"><h3>' . 'Thread Tools' . '</h3></div>
					<ul class="secondaryContent blockLinksList">
						' . $__compilerVar33 . '
					</ul>
					';
}
unset($__compilerVar33);
$__compilerVar32 .= '
					';
$__compilerVar35 = '';
$__compilerVar35 .= '
							';
if ($canLockUnlockThread)
{
$__compilerVar35 .= '
							<li><label><input type="checkbox" name="discussion_open" value="1" class="SubmitOnChange" ' . (($thread['discussion_open']) ? ' checked="checked"' : '') . ' />
								' . 'Open' . '</label>
								<input type="hidden" name="set[discussion_open]" value="1" /></li>';
}
$__compilerVar35 .= '
							';
if ($canStickUnstickThread)
{
$__compilerVar35 .= ' 
							<li><label><input type="checkbox" name="sticky" value="1" class="SubmitOnChange" ' . (($thread['sticky']) ? ' checked="checked"' : '') . ' />
								' . 'Sticky' . '</label>
								<input type="hidden" name="set[sticky]" value="1" /></li>';
}
$__compilerVar35 .= '
						';
if (trim($__compilerVar35) !== '')
{
$__compilerVar32 .= '
					<form action="' . XenForo_Template_Helper_Core::link('threads/quick-update', $thread, array()) . '" method="post" class="AutoValidator">
						<ul class="secondaryContent blockLinksList checkboxColumns">
						' . $__compilerVar35 . '
						</ul>
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
					</form>
					';
}
unset($__compilerVar35);
$__compilerVar32 .= '
					';
$__compilerVar36 = '';
if ($brCanUseThreadLiveUpdateTools)
{
$__compilerVar36 .= '
	<form action="' . XenForo_Template_Helper_Core::link('threads/allow-update', $thread, array(
'page' => $page
)) . '" method="post" class="AutoValidator visibilityForm" data-redirect="on">
		<ul class="secondaryContent blockLinksList checkboxColumns">
			<li>
				<label>
					<input type="checkbox" name="br_thread_update" value="1" class="SubmitOnChange" ' . (($visitor['br_thread_update']) ? ('checked="checked"') : ('')) . '>
					' . 'Live Update' . '
				</label>
			</li>
			
			<li>
				<label>
					<input type="checkbox" name="br_post_jump" value="1" class="SubmitOnChange" ' . (($visitor['br_post_jump']) ? ('checked="checked"') : ('')) . '>
					' . 'Post Jump' . '
				</label>
			</li>
		</ul>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
';
}
$__compilerVar32 .= $__compilerVar36;
unset($__compilerVar36);
$__compilerVar32 .= '
';
if ($thread['canInlineMod'])
{
$__compilerVar32 .= '
					<form action="' . XenForo_Template_Helper_Core::link('inline-mod/thread/switch', false, array()) . '" method="post" class="InlineModForm sectionFooter" id="threadViewThreadCheck"
						data-cookieName="threads">
						<label><input type="checkbox" name="threads[]" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck" /> ' . 'Select for Thread Moderation' . '</label>
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
					</form>
					';
}
$__compilerVar32 .= '
				';
if (trim($__compilerVar32) !== '')
{
$__output .= '
			<div class="Popup">
				<a rel="Menu">' . 'Thread Tools' . '</a>
				<div class="Menu">
				' . $__compilerVar32 . '
				</div>
			</div>
		';
}
unset($__compilerVar32);
$__output .= '
		';
if ($canWatchThread)
{
$__output .= '
			<a href="' . XenForo_Template_Helper_Core::link('threads/watch-confirm', $thread, array()) . '" class="OverlayTrigger" data-cacheOverlay="false">' . (($thread['thread_is_watched']) ? ('Unwatch Thread') : ('Watch Thread')) . '</a>
		';
}
$__output .= '
	</div>

	' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($postsPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalPosts, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'threads', $thread, array(), htmlspecialchars($unreadLink, ENT_QUOTES, 'UTF-8'), array())) . '
</div>

';
$__compilerVar37 = '';
$__compilerVar38 = '';
$__compilerVar37 .= $this->callTemplateHook('ad_thread_view_above_messages', $__compilerVar38, array());
unset($__compilerVar38);
$__output .= $__compilerVar37;
unset($__compilerVar37);
$__output .= '

';
$__compilerVar39 = '';
$__output .= $this->callTemplateHook('thread_view_form_before', $__compilerVar39, array(
'thread' => $thread
));
unset($__compilerVar39);
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('inline-mod/post/switch', false, array()) . '" method="post"
	class="InlineModForm section"
	data-cookieName="posts"
	data-controls="#InlineModControls"
	data-imodOptions="#ModerationSelect option">

	<ol class="messageList" id="messageList">
		';
foreach ($posts AS $post)
{
$__output .= '
			';
if ($post['message_state'] == ('deleted'))
{
$__output .= '
				';
$__compilerVar40 = '';
$__compilerVar41 = '';
$__compilerVar41 .= 'post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar42 = '';
$__compilerVar42 .= '
		';
if ($post['canInlineMod'])
{
$__compilerVar42 .= '<input type="checkbox" name="posts[]" value="' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck item" title="' . 'Select this post' . '" data-target="#post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar42 .= '
		
		' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($post['post_date'],array(
'time' => '$post.post_date',
'class' => 'muted item'
))) . '
		
		<a href="' . XenForo_Template_Helper_Core::link('threads/show-posts', $thread, array(
'post_id' => $post['post_id']
)) . '" class="MessageLoader control item show" data-messageSelector="#post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span>' . 'Show' . '</a>		
	';
$__compilerVar43 = '';
$this->addRequiredExternal('css', 'message');
$__compilerVar43 .= '
';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar43 .= '

<li id="' . htmlspecialchars($__compilerVar41, ENT_QUOTES, 'UTF-8') . '" class="message deleted placeholder ' . (($post['isIgnored']) ? ('ignored') : ('')) . '">
	<div class="placeholderContent">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($post,(true),array(
'user' => '$message',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo primaryContent">
			<div>
				' . 'This message by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $post
)) . ' has been removed from public view.' . '
				
				';
if ($post['delete_username'])
{
$__compilerVar43 .= '
					' . 'Deleted by ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $post['deleteInfo']
)) . '' . ',
					' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($post['delete_date'],array(
'time' => htmlspecialchars($post['delete_date'], ENT_QUOTES, 'UTF-8')
)));
if ($post['delete_reason'])
{
$__compilerVar43 .= ', ' . 'Reason' . ': ' . htmlspecialchars($post['delete_reason'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar43 .= '.
				';
}
$__compilerVar43 .= '
			</div>
			
			<div class="messageMeta">
				<div class="privateControls">' . $__compilerVar42 . '</div>
			</div>
		</div>
		
	</div>
</li>';
$__compilerVar40 .= $__compilerVar43;
unset($__compilerVar41, $__compilerVar42, $__compilerVar43);
$__output .= $__compilerVar40;
unset($__compilerVar40);
$__output .= '
			';
}
else
{
$__output .= '
				';
$__compilerVar44 = '';
$__compilerVar45 = '';
$__compilerVar45 .= 'post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar46 = '';
$__compilerVar46 .= XenForo_Template_Helper_Core::link('posts/likes', $post, array());
$__compilerVar47 = '';
if ($post['attachments'])
{
$__compilerVar48 = '';
$this->addRequiredExternal('css', 'attached_files');
$__compilerVar48 .= '

<div class="attachedFiles">
	<h4 class="attachedFilesHeader">' . 'Attached Files' . ':</h4>
	<ul class="attachmentList SquareThumbs"
		data-thumb-height="' . (min(100, $xenOptions['attachmentThumbnailDimensions'] / 2)) . '"
		data-thumb-selector="div.thumbnail > a">
		';
foreach ($post['attachments'] AS $attachment)
{
$__compilerVar48 .= '
			<li class="attachment' . (($attachment['thumbnailUrl']) ? (' image') : ('')) . '" title="' . htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8') . '">
				<div class="boxModelFixer primaryContent">
					
					<div class="thumbnail">
						';
if ($attachment['thumbnailUrl'] AND $canViewAttachments)
{
$__compilerVar48 .= '
							<a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank" class="LbTrigger"
								data-href="' . XenForo_Template_Helper_Core::link('misc/lightbox', false, array()) . '"><img 
								src="' . htmlspecialchars($attachment['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . (($xenOptions['BRME_defaultPostImageAltTag']) ? (htmlspecialchars($xenOptions['BRME_defaultPostImageAltTag'], ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8'))) . '" class="LbImage" /></a>
						';
}
else if ($attachment['thumbnailUrl'])
{
$__compilerVar48 .= '
							<a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank"><img
								src="' . htmlspecialchars($attachment['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . (($xenOptions['BRME_defaultPostImageAltTag']) ? (htmlspecialchars($xenOptions['BRME_defaultPostImageAltTag'], ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8'))) . '" /></a>
						';
}
else
{
$__compilerVar48 .= '
							<a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank" class="genericAttachment"></a>
						';
}
$__compilerVar48 .= '
					</div>
					
					<div class="attachmentInfo pairsJustified">
						<h6 class="filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank">' . htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8') . '</a></h6>
						<dl><dt>' . 'File size' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($attachment['file_size'], 'size') . '</dd></dl>
						<dl><dt>' . 'Views' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($attachment['view_count'], '0') . '</dd></dl>
					</div>
				</div>
			</li>
		';
}
$__compilerVar48 .= '
	</ul>
</div>

';
$__compilerVar47 .= $__compilerVar48;
unset($__compilerVar48);
}
$__compilerVar49 = '';
$__compilerVar49 .= '
				
		<div class="messageMeta ToggleTriggerAnchor">
			
			<div class="privateControls">
				';
if ($post['canInlineMod'])
{
$__compilerVar49 .= '<input type="checkbox" name="posts[]" value="' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck item" data-target="#post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select this post by ' . htmlspecialchars($post['username'], ENT_QUOTES, 'UTF-8') . '' . '" />';
}
$__compilerVar49 .= '
				<span class="item muted">
					<span class="authorEnd">' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($post,'',false,array(
'class' => 'author'
))) . ',</span>
					<a href="' . XenForo_Template_Helper_Core::link('posts', $post, array()) . '" title="' . 'Permalink' . '" class="datePermalink">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($post['post_date'],array(
'time' => '$post.post_date'
))) . '</a>
				</span>
				';
$__compilerVar50 = '';
$__compilerVar50 .= '
				';
if ($post['canEdit'])
{
$__compilerVar50 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts/edit', $post, array()) . '" class="item control edit ' . (($xenOptions['messageInlineEdit']) ? ('OverlayTrigger') : ('')) . '"
						data-href="' . XenForo_Template_Helper_Core::link('posts/edit-inline', $post, array()) . '" data-overlayOptions="{&quot;fixed&quot;:false}"
						data-messageSelector="#post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span>' . 'Edit' . '</a>
					';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar50 .= '
				';
}
$__compilerVar50 .= '
				';
if ($post['edit_count'] && $post['canViewHistory'])
{
$__compilerVar50 .= '<a href="' . XenForo_Template_Helper_Core::link('posts/history', $post, array()) . '" class="item control history ToggleTrigger"><span></span>' . 'History' . '</a>';
}
$__compilerVar50 .= '
				';
if ($post['canDelete'])
{
$__compilerVar50 .= '<a href="' . XenForo_Template_Helper_Core::link('posts/delete', $post, array()) . '" class="item control delete OverlayTrigger"><span></span>' . 'Delete' . '</a>';
}
$__compilerVar50 .= '
				';
if ($post['canCleanSpam'])
{
$__compilerVar50 .= '<a href="' . XenForo_Template_Helper_Core::link('spam-cleaner', $post, array()) . '" class="item control deleteSpam OverlayTrigger"><span></span>' . 'Spam' . '</a>';
}
$__compilerVar50 .= '
				';
if ($canViewIps AND $post['ip_id'])
{
$__compilerVar50 .= '<a href="' . XenForo_Template_Helper_Core::link('posts/ip', $post, array()) . '" class="item control ip OverlayTrigger"><span></span>' . 'IP' . '</a>';
}
$__compilerVar50 .= '
				
				';
if ($post['canWarn'])
{
$__compilerVar50 .= '
					<a href="' . XenForo_Template_Helper_Core::link('members/warn', $post, array(
'content_type' => 'post',
'content_id' => $post['post_id']
)) . '" class="item control warn"><span></span>' . 'Warn' . '</a>
				';
}
else if ($post['warning_id'] && $canViewWarnings)
{
$__compilerVar50 .= '
					<a href="' . XenForo_Template_Helper_Core::link('warnings', $post, array()) . '" class="OverlayTrigger item control viewWarning"><span></span>' . 'View Warning' . '</a>
				';
}
$__compilerVar50 .= '
				';
if ($post['canReport'])
{
$__compilerVar50 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts/report', $post, array()) . '" class="OverlayTrigger item control report" data-cacheOverlay="false"><span></span>' . 'Report' . '</a>
				';
}
$__compilerVar50 .= '
				
				';
$__compilerVar49 .= $this->callTemplateHook('post_private_controls', $__compilerVar50, array(
'post' => $post
));
unset($__compilerVar50);
$__compilerVar49 .= '
			</div>
			
			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('posts', $post, array()) . '" title="' . 'Permalink' . '" class="item muted postNumber hashPermalink OverlayTrigger" data-href="' . XenForo_Template_Helper_Core::link('posts/permalink', $post, array()) . '">#' . ($post['position'] + 1) . '</a>
				';
$__compilerVar51 = '';
$__compilerVar51 .= '
				';
if ($post['canLike'])
{
$__compilerVar51 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts/like', $post, array()) . '" class="LikeLink item control ' . (($post['like_date']) ? ('unlike') : ('like')) . '" data-container="#likes-post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span><span class="LikeLabel">' . (($post['like_date']) ? ('Unlike') : ('Like')) . '</span></a>
				';
}
$__compilerVar51 .= '
				';
if ($canReply)
{
$__compilerVar51 .= '
					';
if ($xenOptions['multiQuote'])
{
$__compilerVar51 .= '<a href="' . XenForo_Template_Helper_Core::link('threads/reply', $thread, array(
'quote' => $post['post_id']
)) . '"
						data-messageid="' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"
						class="MultiQuoteControl JsOnly item control"
						title="' . 'Toggle Multi-Quote' . '"><span></span><span class="symbol">' . '+ Quote' . '</span></a>';
}
$__compilerVar51 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/reply', $thread, array(
'quote' => $post['post_id']
)) . '"
						data-postUrl="' . XenForo_Template_Helper_Core::link('posts/quote', $post, array()) . '"
						data-tip="#MQ-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"
						class="ReplyQuote item control reply"
						title="' . 'Reply, quoting this message' . '"><span></span>' . 'Reply' . '</a>
				';
}
$__compilerVar51 .= '
				';
$__compilerVar49 .= $this->callTemplateHook('post_public_controls', $__compilerVar51, array(
'post' => $post
));
unset($__compilerVar51);
$__compilerVar49 .= '
			</div>
		</div>
	';
$__compilerVar52 = '';
$this->addRequiredExternal('css', 'message');
$__compilerVar52 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar52 .= '

<li id="' . htmlspecialchars($__compilerVar45, ENT_QUOTES, 'UTF-8') . '" class="message ' . (($post['isDeleted']) ? ('deleted') : ('')) . ' ' . (($post['is_staff']) ? ('staff') : ('')) . ' ' . (($post['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($post['username'], ENT_QUOTES, 'UTF-8') . '">

	';
$__compilerVar53 = '';
$this->addRequiredExternal('css', 'message_user_info');
$__compilerVar53 .= '

<div class="messageUserInfo" itemscope="itemscope" itemtype="http://data-vocabulary.org/Person">	
<div class="messageUserBlock ' . (($post['isOnline']) ? ('online') : ('')) . '">
	';
$__compilerVar54 = '';
$__compilerVar54 .= '
		<div class="avatarHolder">
			<span class="helper"></span>
			' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($post,(true),array(
'user' => '$user',
'size' => 'm',
'img' => 'true'
),'')) . '
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar54 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_avatar');
$__compilerVar54 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuainfoa'))
{
$__compilerVar54 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $post['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar54 .= '
    <dl class="convButtonInfoA convButtonInfoAM"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $post['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar54 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar54 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar54 .= ' >' . 'Contact' . '</a></dl>
';
}
$__compilerVar54 .= '
';
}
$__compilerVar54 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaAvatarInfoM'))
{
$__compilerVar54 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar54 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonInfoAM {
        display: none;
    }
}
';
}
$__compilerVar54 .= '
</style>
';
}
$__compilerVar54 .= '
';
}
else
{
$__compilerVar54 .= '

';
}
$__compilerVar54 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar54 .= '
<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
\'height=\'+h+\',width=\'+w+\',top=\'+TopPosition+\',left=\'+LeftPosition+\',scrollbars=\'+scroll+\',resizable\'
popupWindow = window.open(url,winName,settings)
}
</script>
';
}
$__compilerVar54 .= '
			';
if ($post['isOnline'])
{
$__compilerVar54 .= '<span class="Tooltip onlineMarker" title="' . 'Online Now' . '" data-offsetX="-22" data-offsetY="-8"></span>';
}
$__compilerVar54 .= '
			<!-- slot: message_user_info_avatar -->
		</div>
	';
$__compilerVar53 .= $this->callTemplateHook('message_user_info_avatar', $__compilerVar54, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar54);
$__compilerVar53 .= '

';
if (!$isQuickReply)
{
$__compilerVar53 .= '
	';
$__compilerVar55 = '';
$__compilerVar55 .= '
		<h3 class="userText">
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar55 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_username_icon');
$__compilerVar55 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaUserIcon') AND $xenOptions['cxf_fas'])
{
$__compilerVar55 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $post['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar55 .= '
    <dl class="convButtonUI"><span class="Tooltip" title="' . 'Start a Conversation' . '"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $post['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar55 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar55 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar55 .= ' title="' . 'Start a Conversation' . '" ><i class="fa fa-envelope Tooltip"></i></a></span></dl>
';
}
$__compilerVar55 .= '
';
}
$__compilerVar55 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaUserIconM'))
{
$__compilerVar55 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar55 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonUI {
        display: none;
    }
}
';
}
$__compilerVar55 .= '
</style>
';
}
$__compilerVar55 .= '
';
}
$__compilerVar55 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar55 .= '
<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
\'height=\'+h+\',width=\'+w+\',top=\'+TopPosition+\',left=\'+LeftPosition+\',scrollbars=\'+scroll+\',resizable\'
popupWindow = window.open(url,winName,settings)
}
</script>
';
}
$__compilerVar55 .= '
			' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($post,'',(true),array(
'itemprop' => 'name'
))) . '
			';
$__compilerVar56 = '';
$__compilerVar56 .= XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $post,
'1' => '1',
'2' => '1'
));
if (trim($__compilerVar56) !== '')
{
$__compilerVar55 .= '<em class="userTitle" itemprop="title">' . $__compilerVar56 . '</em>';
}
unset($__compilerVar56);
$__compilerVar55 .= '
			' . XenForo_Template_Helper_Core::callHelper('userBanner', array(
'0' => $post,
'1' => 'wrapped'
)) . '
			<!-- slot: message_user_info_text -->
		</h3>
	';
$__compilerVar53 .= $this->callTemplateHook('message_user_info_text', $__compilerVar55, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar55);
$__compilerVar53 .= '
';
if ($post['trophyCache'])
{
$__compilerVar53 .= '
<p class="trophies" id="trophyIcons">
	';
foreach ($post['trophyCache'] AS $trophy)
{
$__compilerVar53 .= '
		';
$__compilerVar57 = '';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__compilerVar57 .= '
<a href="' . XenForo_Template_Helper_Core::link('members/trophies', $post, array()) . '" class="OverlayTrigger">		
<img src="' . htmlspecialchars($trophy['iconUrl'], ENT_QUOTES, 'UTF-8') . '" title="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" class="trophyIconMini" />
</a>';
$__compilerVar53 .= $__compilerVar57;
unset($__compilerVar57);
$__compilerVar53 .= '
	';
}
$__compilerVar53 .= '
</p>
';
}
$__compilerVar53 .= '
		
	';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsActive'))
{
$__compilerVar58 = '';
$__compilerVar58 .= '
';
if (!XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsBadgeCSS'))
{
$__compilerVar58 .= '
    ';
$this->addRequiredExternal('css', 'userrankribbons');
$__compilerVar58 .= '
';
}
$__compilerVar58 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsBadgeCSS'))
{
$__compilerVar58 .= '
    ';
$this->addRequiredExternal('css', 'userrankribbonsbadge');
$__compilerVar58 .= '
';
}
$__compilerVar58 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsSoftResponsiveFix'))
{
$__compilerVar58 .= '
    ';
$this->addRequiredExternal('css', 'UserRankRibbonsSoftResponsiveFix');
$__compilerVar58 .= '
';
}
$__compilerVar58 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsXenMoodsFix'))
{
$__compilerVar58 .= '
    ';
$this->addRequiredExternal('css', 'UserRankRibbonsXenMoodsFix');
$__compilerVar58 .= '
';
}
$__compilerVar58 .= '
    
';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsActive'))
{
$__compilerVar58 .= '

	<ul class="ribbon">
    
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1'))
{
$__compilerVar58 .= '
			<li class="ribbon1">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2'))
{
$__compilerVar58 .= '
			<li class="ribbon2">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3'))
{
$__compilerVar58 .= '
			<li class="ribbon3">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4'))
{
$__compilerVar58 .= '
			<li class="ribbon4">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5'))
{
$__compilerVar58 .= '
			<li class="ribbon5">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6'))
{
$__compilerVar58 .= '
			<li class="ribbon6">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7'))
{
$__compilerVar58 .= '
			<li class="ribbon7">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8'))
{
$__compilerVar58 .= '
			<li class="ribbon8">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9'))
{
$__compilerVar58 .= '
			<li class="ribbon9">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10'))
{
$__compilerVar58 .= '
			<li class="ribbon10">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11'))
{
$__compilerVar58 .= '
			<li class="ribbon11">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12'))
{
$__compilerVar58 .= '
			<li class="ribbon12">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13'))
{
$__compilerVar58 .= '
			<li class="ribbon13">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14'))
{
$__compilerVar58 .= '
			<li class="ribbon14">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15'))
{
$__compilerVar58 .= '
			<li class="ribbon15">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16'))
{
$__compilerVar58 .= '
			<li class="ribbon16">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17'))
{
$__compilerVar58 .= '
			<li class="ribbon17">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18'))
{
$__compilerVar58 .= '
			<li class="ribbon18">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19'))
{
$__compilerVar58 .= '
			<li class="ribbon19">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20'))
{
$__compilerVar58 .= '
			<li class="ribbon20">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21'))
{
$__compilerVar58 .= '
			<li class="ribbon21">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22'))
{
$__compilerVar58 .= '
			<li class="ribbon22">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23'))
{
$__compilerVar58 .= '
			<li class="ribbon23">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24'))
{
$__compilerVar58 .= '
			<li class="ribbon24">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25'))
{
$__compilerVar58 .= '
			<li class="ribbon25">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26'))
{
$__compilerVar58 .= '
			<li class="ribbon26">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27'))
{
$__compilerVar58 .= '
			<li class="ribbon27">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28'))
{
$__compilerVar58 .= '
			<li class="ribbon28">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29'))
{
$__compilerVar58 .= '
			<li class="ribbon29">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30'))
{
$__compilerVar58 .= '
			<li class="ribbon30">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31'))
{
$__compilerVar58 .= '
			<li class="ribbon31">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32'))
{
$__compilerVar58 .= '
			<li class="ribbon32">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33'))
{
$__compilerVar58 .= '
			<li class="ribbon33">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34'))
{
$__compilerVar58 .= '
			<li class="ribbon34">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35'))
{
$__compilerVar58 .= '
			<li class="ribbon35">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35Title') . '
			</li>
		';
}
$__compilerVar58 .= '
		
	</ul>
';
}
$__compilerVar53 .= $__compilerVar58;
unset($__compilerVar58);
}
$__compilerVar53 .= '
    ';
$__compilerVar59 = '';
$__compilerVar59 .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_info_extra_fa'))
{
$__compilerVar59 .= '
';
$__compilerVar60 = '';
$__compilerVar60 .= '

<dl class="pairsJustified">
<dt><i class="fa fa-comments Tooltip info_extra_fa" title="' . 'Messages' . '"></i></dt>
<dd><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $post['user_id']
)) . '" class="concealed" rel="nofollow">' . XenForo_Template_Helper_Core::numberFormat($post['message_count'], '0') . '</a></dd>
</dl>

<dl class="pairsJustified">
<dt><i class="fa fa-thumbs-up Tooltip info_extra_fa" title="' . 'Likes Received' . '"></i></dt>
<dd>' . XenForo_Template_Helper_Core::numberFormat($post['like_count'], '0') . '</dd>
</dl>

<dl class="pairsJustified">
<dt><i class="fa fa-trophy Tooltip info_extra_fa" title="' . 'Trophy Points' . '"></i></dt>
<dd><a href="' . XenForo_Template_Helper_Core::link('members/trophies', $post, array()) . '" class="OverlayTrigger concealed">' . XenForo_Template_Helper_Core::numberFormat($post['trophy_points'], '0') . '</a></dd>
</dl>

';
$__compilerVar59 .= $this->callTemplateHook('message_user_info_extra', $__compilerVar60, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar60);
$__compilerVar59 .= '
';
}
else
{
$__compilerVar59 .= '
			
			';
$__compilerVar61 = '';
$__compilerVar61 .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowRegisterDate') AND $post['user_id'])
{
$__compilerVar61 .= '
					<dl class="pairsJustified">
						<dt>' . 'Joined' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::date($post['register_date'], '') . '</dd>
					</dl>
				';
}
$__compilerVar61 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowMessageCount') AND $post['user_id'])
{
$__compilerVar61 .= '
					<dl class="pairsJustified">
						<dt>' . 'Messages' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $post['user_id']
)) . '" class="concealed" rel="nofollow">' . XenForo_Template_Helper_Core::numberFormat($post['message_count'], '0') . '</a></dd>
					</dl>
				';
}
$__compilerVar61 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowTotalLikes') AND $post['user_id'])
{
$__compilerVar61 .= '
					<dl class="pairsJustified">
						<dt>' . 'Likes Received' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($post['like_count'], '0') . '</dd>
					</dl>
				';
}
$__compilerVar61 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowTrophyPoints') AND $post['user_id'] AND $xenOptions['enableTrophies'])
{
$__compilerVar61 .= '
					<dl class="pairsJustified">
						<dt>' . 'Trophy Points' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('members/trophies', $post, array()) . '" class="OverlayTrigger concealed">' . XenForo_Template_Helper_Core::numberFormat($post['trophy_points'], '0') . '</a></dd>
					</dl>
				';
}
$__compilerVar61 .= '
			
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowGender') AND $post['gender'])
{
$__compilerVar61 .= '
					<dl class="pairsJustified">
						<dt>' . 'Gender' . ':</dt>
						<dd itemprop="gender">';
if ($post['gender'] == ('male'))
{
$__compilerVar61 .= 'Male';
}
else
{
$__compilerVar61 .= 'Female';
}
$__compilerVar61 .= '</dd>
					</dl>
				';
}
$__compilerVar61 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowOccupation') AND $post['occupation'])
{
$__compilerVar61 .= '
					<dl class="pairsJustified">
						<dt>' . 'Occupation' . ':</dt>
						<dd itemprop="role">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($post['occupation'], ENT_QUOTES, 'UTF-8')
)) . '</dd>
					</dl>
				';
}
$__compilerVar61 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowLocation') AND $post['location'])
{
$__compilerVar61 .= '
					<dl class="pairsJustified">
						<dt>' . 'Location' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('misc/location-info', '', array(
'location' => XenForo_Template_Helper_Core::string('censor', array(
'0' => $post['location'],
'1' => '-'
))
)) . '" target="_blank" rel="nofollow" itemprop="address" class="concealed">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($post['location'], ENT_QUOTES, 'UTF-8')
)) . '</a></dd>
					</dl>
				';
}
$__compilerVar61 .= '
			
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowHomepage') AND $post['homepage'])
{
$__compilerVar61 .= '
					<dl class="pairsJustified">
						<dt>' . 'Home Page' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($post['homepage'], ENT_QUOTES, 'UTF-8'),
'1' => '-'
)) . '" rel="nofollow" target="_blank" itemprop="url">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($post['homepage'], ENT_QUOTES, 'UTF-8')
)) . '</a></dd>
					</dl>
				';
}
$__compilerVar61 .= '
							
			';
$__compilerVar59 .= $this->callTemplateHook('message_user_info_extra', $__compilerVar61, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar61);
$__compilerVar59 .= '
			';
}
$__compilerVar59 .= '			
			';
if (XenForo_Template_Helper_Core::styleProperty('messageShowCustomFields') AND $post['customFields'])
{
$__compilerVar59 .= '
			';
$__compilerVar62 = '';
$__compilerVar62 .= '
			
				';
foreach ($userFieldsInfo AS $fieldId => $fieldInfo)
{
$__compilerVar62 .= '
					';
if ($fieldInfo['viewable_message'] AND ($fieldInfo['display_group'] != ('contact') OR $post['allow_view_identities'] == ('everyone') OR ($post['allow_view_identities'] == ('members') AND $visitor['user_id'])))
{
$__compilerVar62 .= '
						';
$__compilerVar63 = '';
$__compilerVar63 .= XenForo_Template_Helper_Core::callHelper('userFieldValue', array(
'0' => $fieldInfo,
'1' => $post,
'2' => $post['customFields'][$fieldId]
));
if (trim($__compilerVar63) !== '')
{
$__compilerVar62 .= '
							<dl class="pairsJustified userField_' . htmlspecialchars($fieldId, ENT_QUOTES, 'UTF-8') . '">
								<dt>' . XenForo_Template_Helper_Core::callHelper('userFieldTitle', array(
'0' => $fieldId
)) . ':</dt>
								<dd>' . $__compilerVar63 . '</dd>
							</dl>
						';
}
unset($__compilerVar63);
$__compilerVar62 .= '
					';
}
$__compilerVar62 .= '
				';
}
$__compilerVar62 .= '
				
			';
$__compilerVar59 .= $this->callTemplateHook('message_user_info_custom_fields', $__compilerVar62, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar62);
$__compilerVar59 .= '
			';
}
$__compilerVar59 .= '
			';
if (trim($__compilerVar59) !== '')
{
$__compilerVar53 .= '
		<div class="extraUserInfo">
			' . $__compilerVar59 . '
		</div>
	';
}
unset($__compilerVar59);
$__compilerVar53 .= '
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar53 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_user_info');
$__compilerVar53 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowInfo'))
{
$__compilerVar53 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $post['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar53 .= '
    <dl class="conversationButtonInfo convButtonMobileInfo"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $post['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar53 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar53 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar53 .= ' >' . 'Start a Conversation' . '</a></dl>
';
}
$__compilerVar53 .= '
';
}
$__compilerVar53 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaMobileInfo'))
{
$__compilerVar53 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar53 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonMobileInfo {
        display: none;
    }
}
';
}
$__compilerVar53 .= '
</style>
';
}
$__compilerVar53 .= '
';
}
$__compilerVar53 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar53 .= '
<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
\'height=\'+h+\',width=\'+w+\',top=\'+TopPosition+\',left=\'+LeftPosition+\',scrollbars=\'+scroll+\',resizable\'
popupWindow = window.open(url,winName,settings)
}
</script>
';
}
$__compilerVar53 .= '
		
';
}
$__compilerVar53 .= '

	<span class="arrow"><span></span></span>
</div>
</div>';
$__compilerVar52 .= $__compilerVar53;
unset($__compilerVar53);
$__compilerVar52 .= '

	<div class="messageInfo primaryContent">
		';
if ($post['isNew'])
{
$__compilerVar52 .= '<strong class="newIndicator"><span></span>' . 'New' . '</strong>';
}
$__compilerVar52 .= '
		
		';
$__compilerVar64 = '';
$__compilerVar64 .= '
					';
$__compilerVar65 = '';
$__compilerVar65 .= '
						';
if ($post['warning_message'])
{
$__compilerVar65 .= '
							<li class="warningNotice"><span class="icon Tooltip" title="' . 'Warning' . '" data-tipclass="iconTip flipped"></span>' . htmlspecialchars($post['warning_message'], ENT_QUOTES, 'UTF-8') . '</li>
						';
}
$__compilerVar65 .= '
						';
if ($post['isDeleted'])
{
$__compilerVar65 .= '
							<li class="deletedNotice"><span class="icon Tooltip" title="' . 'Deleted' . '" data-tipclass="iconTip flipped"></span>' . 'This message has been removed from public view.' . '</li>
						';
}
else if ($post['isModerated'])
{
$__compilerVar65 .= '
							<li class="moderatedNotice"><span class="icon Tooltip" title="' . 'Awaiting moderation' . '" data-tipclass="iconTip flipped"></span>' . 'This message is awaiting moderator approval, and is invisible to normal visitors.' . '</li>
						';
}
$__compilerVar65 .= '
						';
if ($post['isIgnored'])
{
$__compilerVar65 .= '
							<li>' . 'You are ignoring content by this member.' . ' <a href="javascript:" class="JsOnly DisplayIgnoredContent">' . 'Show Ignored Content' . '</a></li>
						';
}
$__compilerVar65 .= '
					';
$__compilerVar64 .= $this->callTemplateHook('message_notices', $__compilerVar65, array(
'message' => $post
));
unset($__compilerVar65);
$__compilerVar64 .= '
				';
if (trim($__compilerVar64) !== '')
{
$__compilerVar52 .= '
			<ul class="messageNotices">
				' . $__compilerVar64 . '
			</ul>
		';
}
unset($__compilerVar64);
$__compilerVar52 .= '
		
		';
$__compilerVar66 = '';
$__compilerVar66 .= '
		<div class="messageContent">		
			<article>
				<blockquote class="messageText SelectQuoteContainer ugc baseHtml' . (($post['isIgnored']) ? (' ignored') : ('')) . '">
					';
$__compilerVar67 = '';
$__compilerVar68 = '';
$__compilerVar67 .= $this->callTemplateHook('ad_message_body', $__compilerVar68, array());
unset($__compilerVar68);
$__compilerVar66 .= $__compilerVar67;
unset($__compilerVar67);
$__compilerVar66 .= '
					' . $post['messageHtml'] . '
					<div class="messageTextEndMarker">&nbsp;</div>
				</blockquote>
			</article>
			
			' . $__compilerVar47 . '
		</div>
		';
$__compilerVar52 .= $this->callTemplateHook('message_content', $__compilerVar66, array(
'message' => $post
));
unset($__compilerVar66);
$__compilerVar52 .= '
		
		';
if ($post['last_edit_date'])
{
$__compilerVar52 .= '
			<div class="editDate">
			';
if ($post['user_id'] == $post['last_edit_user_id'])
{
$__compilerVar52 .= '
				' . 'Last edited' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($post['last_edit_date'],array(
'time' => htmlspecialchars($post['last_edit_date'], ENT_QUOTES, 'UTF-8')
))) . '
			';
}
else
{
$__compilerVar52 .= '
				' . 'Last edited by a moderator' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($post['last_edit_date'],array(
'time' => htmlspecialchars($post['last_edit_date'], ENT_QUOTES, 'UTF-8')
))) . '
			';
}
$__compilerVar52 .= '
			</div>
		';
}
$__compilerVar52 .= '
		
		';
if ($visitor['content_show_signature'] && $post['signature'])
{
$__compilerVar52 .= '
			<div class="baseHtml signature messageText ugc' . (($post['isIgnored']) ? (' ignored') : ('')) . '"><aside>' . $post['signatureHtml'] . '</aside></div>
		';
}
$__compilerVar52 .= '
		
		' . $__compilerVar49 . '
		
		<div id="likes-' . htmlspecialchars($__compilerVar45, ENT_QUOTES, 'UTF-8') . '">';
if ($post['likes'])
{
$__compilerVar69 = '';
if ($post['likes'])
{
$__compilerVar69 .= '
	';
$this->addRequiredExternal('css', 'likes_summary');
$__compilerVar69 .= '
	<div class="likesSummary secondaryContent">
		<span class="LikeText">
			' . XenForo_Template_Helper_Core::callHelper('likeshtml', array($post['likes'],$__compilerVar46,$post['like_date'],$post['likeUsers'])) . '
		</span>
	</div>
';
}
$__compilerVar52 .= $__compilerVar69;
unset($__compilerVar69);
}
$__compilerVar52 .= '</div>
	</div>

	';
$__compilerVar70 = '';
$__compilerVar52 .= $this->callTemplateHook('message_below', $__compilerVar70, array(
'post' => $post,
'message_id' => $__compilerVar45
));
unset($__compilerVar70);
$__compilerVar52 .= '
	
	';
$__compilerVar71 = '';
$__compilerVar72 = '';
$__compilerVar71 .= $this->callTemplateHook('ad_message_below', $__compilerVar72, array());
unset($__compilerVar72);
$__compilerVar52 .= $__compilerVar71;
unset($__compilerVar71);
$__compilerVar52 .= '
	
</li>';
$__compilerVar44 .= $__compilerVar52;
unset($__compilerVar45, $__compilerVar46, $__compilerVar47, $__compilerVar49, $__compilerVar52);
$__output .= $__compilerVar44;
unset($__compilerVar44);
$__output .= '
			';
}
$__output .= '
		';
}
$__output .= '
		' . '
	</ol>

	';
if ($inlineModOptions)
{
$__output .= '
		<div class="sectionFooter InlineMod Hide">
			<label for="ModerationSelect">' . 'Perform action with selected posts' . '...</label>

			';
$__compilerVar73 = '';
$__compilerVar74 = '';
$__compilerVar74 .= 'Post Moderation';
$__compilerVar75 = '';
$__compilerVar75 .= '
		';
if ($inlineModOptions['delete'])
{
$__compilerVar75 .= '<option value="delete">' . 'Delete Posts' . '...</option>';
}
$__compilerVar75 .= '
		';
if ($inlineModOptions['undelete'])
{
$__compilerVar75 .= '<option value="undelete">' . 'Undelete Posts' . '</option>';
}
$__compilerVar75 .= '
		';
if ($inlineModOptions['approve'])
{
$__compilerVar75 .= '<option value="approve">' . 'Approve Posts' . '</option>';
}
$__compilerVar75 .= '
		';
if ($inlineModOptions['unapprove'])
{
$__compilerVar75 .= '<option value="unapprove">' . 'Unapprove Posts' . '</option>';
}
$__compilerVar75 .= '
		';
if ($inlineModOptions['move'])
{
$__compilerVar75 .= '<option value="move">' . 'Move Posts' . '...</option>';
}
$__compilerVar75 .= '
		';
if ($inlineModOptions['copy'])
{
$__compilerVar75 .= '<option value="copy">' . 'Copy Posts' . '...</option>';
}
$__compilerVar75 .= '
		';
if ($inlineModOptions['merge'])
{
$__compilerVar75 .= '<option value="merge">' . 'Merge Posts' . '...</option>';
}
$__compilerVar75 .= '
		';
$__compilerVar76 = '';
if ($inlineModOptions['editDate'])
{
$__compilerVar76 .= '<option value="editDate">' . 'Edit Posts Date' . '...</option>';
}
$__compilerVar75 .= $__compilerVar76;
unset($__compilerVar76);
$__compilerVar75 .= '
<option value="deselect">' . 'Deselect Posts' . '</option>
	';
$__compilerVar77 = '';
$__compilerVar77 .= 'Select / deselect all posts on this page';
$__compilerVar78 = '';
$__compilerVar78 .= 'Selected Posts';
$__compilerVar79 = '';
$this->addRequiredExternal('css', 'inline_mod');
$__compilerVar79 .= '
';
$this->addRequiredExternal('js', 'js/xenforo/inline_mod.js');
$__compilerVar79 .= '

<span id="InlineModControls">
	<span class="selectionControl secondaryContent">
		<label for="ModerationCheck">
			' . 'Select All' . ' <input type="checkbox" id="ModerationCheck" title="' . htmlspecialchars($__compilerVar77, ENT_QUOTES, 'UTF-8') . '" />
		</label>

		<input type="button" class="button ClickNext" value="&darr;" title="' . 'Move down' . '" />
		<input type="button" class="button ClickPrev" value="&uarr;" title="' . 'Move up' . '" />
		<a class="SelectionCount">' . htmlspecialchars($__compilerVar78, ENT_QUOTES, 'UTF-8') . ': <em class="InlineModCheckedTotal">0</em></a>
	</span>

	<span class="actionControl sectionFooter">
		<span class="commonActions">
			';
if ($inlineModOptions['delete'])
{
$__compilerVar79 .= '<input type="submit" class="button" value="' . 'Delete' . '..." name="delete" />';
}
$__compilerVar79 .= '
			';
if ($inlineModOptions['approve'])
{
$__compilerVar79 .= '<input type="submit" class="button" value="' . 'Approve' . '" name="approve" />';
}
$__compilerVar79 .= '
		</span>

		<span class="otherActions">
			<select name="a" id="ModerationSelect" class="textCtrl">
				<option value="">' . 'Other Action' . '...</option>
				<optgroup label="' . 'Moderation Actions' . '">
					' . $__compilerVar75 . '
				</optgroup>
				<option value="closeOverlay">' . 'Close This Overlay' . '</option>
			</select>

			<input type="submit" class="button primary" value="' . 'Go' . '" />
			<input type="reset" class="button OverlayCloser overylayOnly" value="X" title="' . 'Cancel and close these controls' . '" />
		</span>
	</span>
</span>';
$__compilerVar73 .= $__compilerVar79;
unset($__compilerVar74, $__compilerVar75, $__compilerVar77, $__compilerVar78, $__compilerVar79);
$__output .= $__compilerVar73;
unset($__compilerVar73);
$__output .= '
		</div>
	';
}
$__output .= '

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />

</form>

	<div class="pageNavLinkGroup">
			';
if ($canQuickReply)
{
$__output .= '
				';
if ($postsRemaining)
{
$__output .= '
					<div class="linkGroup">
						';
if ($postsRemaining == 1)
{
$__output .= '
							<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array(
'page' => ($page + 1)
)) . '" class="postsRemaining">' . '1 more message' . '...</a>
						';
}
else
{
$__output .= '
							<a href="' . XenForo_Template_Helper_Core::link('threads', $thread, array(
'page' => ($page + 1)
)) . '" class="postsRemaining">' . '' . XenForo_Template_Helper_Core::numberFormat($postsRemaining, '0') . ' more messages' . '...</a>
						';
}
$__output .= '
					</div>
				';
}
$__output .= '
			';
}
else
{
$__output .= '
				<div class="linkGroup">
					';
if ($canReply)
{
$__output .= '
						<a href="' . XenForo_Template_Helper_Core::link('threads/reply', $thread, array()) . '" class="callToAction"><span>' . 'Reply to Thread' . '</span></a>
					';
}
else if ($visitor['user_id'])
{
$__output .= '
						<span class="element">(' . 'You have insufficient privileges to reply here.' . ')</span>
					';
}
else
{
$__output .= '
						<label for="LoginControl"><a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="concealed element">(' . 'You must log in or sign up to reply here.' . ')</a></label>
					';
}
$__output .= '
				</div>
			';
}
$__output .= '
			<div class="linkGroup"' . ((!$ignoredNames) ? (' style="display: none"') : ('')) . '><a href="javascript:" class="muted JsOnly DisplayIgnoredContent Tooltip" title="' . 'Show hidden content by ' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $ignoredNames,
'1' => ', '
)) . '' . '">' . 'Show Ignored Content' . '</a></div>

			' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($postsPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalPosts, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'threads', $thread, array(), htmlspecialchars($unreadLink, ENT_QUOTES, 'UTF-8'), array())) . '
	</div>

';
$__compilerVar80 = '';
$__compilerVar81 = '';
$__compilerVar80 .= $this->callTemplateHook('ad_thread_view_below_messages', $__compilerVar81, array());
unset($__compilerVar81);
$__output .= $__compilerVar80;
unset($__compilerVar80);
$__output .= '

';
$__compilerVar82 = '';
$__output .= $this->callTemplateHook('thread_view_qr_before', $__compilerVar82, array(
'thread' => $thread
));
unset($__compilerVar82);
$__output .= '
';
if ($xenOptions['RainDD_UA_ThreadViewPos'] == 2)
{
$__output .= '
	';
$__compilerVar83 = '';
if ($RainDD_UA_ThreadViewerPermission)
{
$__compilerVar83 .= '
	';
$__compilerVar84 = '';
$__compilerVar84 .= '
			';
if ($xenOptions['RainDD_UA_ThreadViewType'] == 0)
{
$__compilerVar84 .= '
			';
foreach ($RainDD_UA_ThreadUsersViewing['records'] AS $user)
{
$__compilerVar84 .= '
				<li>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '</li>
			';
}
$__compilerVar84 .= '
			';
}
else if ($xenOptions['RainDD_UA_ThreadViewType'] == 1)
{
$__compilerVar84 .= '
			';
foreach ($RainDD_UA_ThreadUsersViewing['records'] AS $user)
{
$__compilerVar84 .= '
				<li>' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'title' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8')
),'')) . '</li>
			';
}
$__compilerVar84 .= '
			';
}
$__compilerVar84 .= '
			';
if (trim($__compilerVar84) !== '')
{
$__compilerVar83 .= '
	';
$this->addRequiredExternal('css', 'RainDD_UA_Thread');
$__compilerVar83 .= '
	<div id="uaThreadViewContainer" class="section secondaryContent">
		<h3>' . 'Users Who Are Viewing This Thread <span class="footnote">(Users: ' . XenForo_Template_Helper_Core::numberFormat($RainDD_UA_ThreadUsersViewing['members'], '0') . ', Guests: ' . XenForo_Template_Helper_Core::numberFormat($RainDD_UA_ThreadUsersViewing['guests'], '0') . ')</span>' . '</h3>	
		';
if ($xenOptions['RainDD_UA_ThreadViewType'] == 0)
{
$__compilerVar83 .= '
			<ol class="listInline commaImplode">
		';
}
else if ($xenOptions['RainDD_UA_ThreadViewType'] == 1)
{
$__compilerVar83 .= '
			<ol class="listInline">
		';
}
$__compilerVar83 .= '
			' . $__compilerVar84 . '
			</ol>
		</div>
	';
}
unset($__compilerVar84);
$__compilerVar83 .= '
';
}
$__output .= $__compilerVar83;
unset($__compilerVar83);
$__output .= '	
';
}
$__output .= '
';
if ($xenOptions['RainDD_UA_ThreadReadPos'] == 2)
{
$__output .= '
	';
$__compilerVar85 = '';
if ($RainDD_UA_ThreadReaderPermission)
{
$__compilerVar85 .= '
	';
$__compilerVar86 = '';
$__compilerVar86 .= '
			';
if ($xenOptions['RainDD_UA_ThreadReadType'] == 0)
{
$__compilerVar86 .= '
			';
foreach ($RainDD_UA_ThreadUsersReading AS $user)
{
$__compilerVar86 .= '
					<li>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '</li>
			';
}
$__compilerVar86 .= '
			';
}
else if ($xenOptions['RainDD_UA_ThreadReadType'] == 1)
{
$__compilerVar86 .= '
			';
foreach ($RainDD_UA_ThreadUsersReading AS $user)
{
$__compilerVar86 .= '
					<li>' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'title' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8')
),'')) . '</li>
			';
}
$__compilerVar86 .= '
			';
}
$__compilerVar86 .= '
				</div>
			</div>
            ';
if (trim($__compilerVar86) !== '')
{
$__compilerVar85 .= '
	';
$this->addRequiredExternal('css', 'RainDD_UA_Thread');
$__compilerVar85 .= '
    <div id="uaThreadReadContainer" class="section secondaryContent">
        <h3>' . 'Users Who Have Read This Thread <span class="footnote">(Total: ' . XenForo_Template_Helper_Core::numberFormat($RainDD_UA_ThreadReaderCount, '0') . ')</span>' . '</h3>
		';
if ($xenOptions['RainDD_UA_ThreadReadType'] == 0)
{
$__compilerVar85 .= '
        	<ol class="listInline commaImplode">
		';
}
else if ($xenOptions['RainDD_UA_ThreadReadType'] == 1)
{
$__compilerVar85 .= '
			<ol class="listInline">
		';
}
$__compilerVar85 .= '
			<div class="uaCollapseThreadRead">
    				<div class="uaExpandThreadRead">
			' . $__compilerVar86 . '
        	</ol>
    	</div>
	';
}
unset($__compilerVar86);
$__compilerVar85 .= '
';
}
$__compilerVar85 .= '		
		';
$__output .= $__compilerVar85;
unset($__compilerVar85);
$__output .= '	
';
}
$__output .= '

';
if ($canQuickReply)
{
$__output .= '
	';
$__compilerVar87 = '';
$__compilerVar87 .= XenForo_Template_Helper_Core::link('threads/add-reply', $thread, array());
$__compilerVar88 = '';
$__compilerVar88 .= htmlspecialchars($lastPost['post_date'], ENT_QUOTES, 'UTF-8');
$__compilerVar89 = '';
$__compilerVar89 .= htmlspecialchars($thread['last_post_date'], ENT_QUOTES, 'UTF-8');
$__compilerVar90 = '';
$__compilerVar90 .= '1';
$__compilerVar91 = '';
$__compilerVar91 .= XenForo_Template_Helper_Core::link('threads/multi-quote', $thread, array(
'formId' => '#QuickReply'
));
$__compilerVar92 = '';
$this->addRequiredExternal('css', 'quick_reply');
$__compilerVar92 .= '
';
$this->addRequiredExternal('css', 'bookmarks_quick_reply');
$__compilerVar92 .= '
';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar92 .= '
';
if ($visitor['message_count'] < 3)
{
$__compilerVar92 .= '<h2 style="color:white;background:#f72600;border-radius:2px;padding:2px;text-align:center;">You need 3 posts to add links to your posts! This is used to prevent spam.</h2>';
}
$__compilerVar92 .= '

<div class="quickReply message">
	
	';
$__compilerVar93 = '';
$__compilerVar93 .= '1';
$__compilerVar94 = '';
$this->addRequiredExternal('css', 'message_user_info');
$__compilerVar94 .= '

<div class="messageUserInfo" itemscope="itemscope" itemtype="http://data-vocabulary.org/Person">	
<div class="messageUserBlock ' . (($visitor['isOnline']) ? ('online') : ('')) . '">
	';
$__compilerVar95 = '';
$__compilerVar95 .= '
		<div class="avatarHolder">
			<span class="helper"></span>
			' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,(true),array(
'user' => '$user',
'size' => 'm',
'img' => 'true'
),'')) . '
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar95 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_avatar');
$__compilerVar95 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuainfoa'))
{
$__compilerVar95 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $visitor['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar95 .= '
    <dl class="convButtonInfoA convButtonInfoAM"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $visitor['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar95 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar95 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar95 .= ' >' . 'Contact' . '</a></dl>
';
}
$__compilerVar95 .= '
';
}
$__compilerVar95 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaAvatarInfoM'))
{
$__compilerVar95 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar95 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonInfoAM {
        display: none;
    }
}
';
}
$__compilerVar95 .= '
</style>
';
}
$__compilerVar95 .= '
';
}
else
{
$__compilerVar95 .= '

';
}
$__compilerVar95 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar95 .= '
<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
\'height=\'+h+\',width=\'+w+\',top=\'+TopPosition+\',left=\'+LeftPosition+\',scrollbars=\'+scroll+\',resizable\'
popupWindow = window.open(url,winName,settings)
}
</script>
';
}
$__compilerVar95 .= '
			';
if ($visitor['isOnline'])
{
$__compilerVar95 .= '<span class="Tooltip onlineMarker" title="' . 'Online Now' . '" data-offsetX="-22" data-offsetY="-8"></span>';
}
$__compilerVar95 .= '
			<!-- slot: message_user_info_avatar -->
		</div>
	';
$__compilerVar94 .= $this->callTemplateHook('message_user_info_avatar', $__compilerVar95, array(
'user' => $visitor,
'isQuickReply' => $__compilerVar93
));
unset($__compilerVar95);
$__compilerVar94 .= '

';
if (!$__compilerVar93)
{
$__compilerVar94 .= '
	';
$__compilerVar96 = '';
$__compilerVar96 .= '
		<h3 class="userText">
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar96 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_username_icon');
$__compilerVar96 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaUserIcon') AND $xenOptions['cxf_fas'])
{
$__compilerVar96 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $visitor['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar96 .= '
    <dl class="convButtonUI"><span class="Tooltip" title="' . 'Start a Conversation' . '"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $visitor['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar96 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar96 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar96 .= ' title="' . 'Start a Conversation' . '" ><i class="fa fa-envelope Tooltip"></i></a></span></dl>
';
}
$__compilerVar96 .= '
';
}
$__compilerVar96 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaUserIconM'))
{
$__compilerVar96 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar96 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonUI {
        display: none;
    }
}
';
}
$__compilerVar96 .= '
</style>
';
}
$__compilerVar96 .= '
';
}
$__compilerVar96 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar96 .= '
<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
\'height=\'+h+\',width=\'+w+\',top=\'+TopPosition+\',left=\'+LeftPosition+\',scrollbars=\'+scroll+\',resizable\'
popupWindow = window.open(url,winName,settings)
}
</script>
';
}
$__compilerVar96 .= '
			' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($visitor,'',(true),array(
'itemprop' => 'name'
))) . '
			';
$__compilerVar97 = '';
$__compilerVar97 .= XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $visitor,
'1' => '1',
'2' => '1'
));
if (trim($__compilerVar97) !== '')
{
$__compilerVar96 .= '<em class="userTitle" itemprop="title">' . $__compilerVar97 . '</em>';
}
unset($__compilerVar97);
$__compilerVar96 .= '
			' . XenForo_Template_Helper_Core::callHelper('userBanner', array(
'0' => $visitor,
'1' => 'wrapped'
)) . '
			<!-- slot: message_user_info_text -->
		</h3>
	';
$__compilerVar94 .= $this->callTemplateHook('message_user_info_text', $__compilerVar96, array(
'user' => $visitor,
'isQuickReply' => $__compilerVar93
));
unset($__compilerVar96);
$__compilerVar94 .= '
';
if ($post['trophyCache'])
{
$__compilerVar94 .= '
<p class="trophies" id="trophyIcons">
	';
foreach ($post['trophyCache'] AS $trophy)
{
$__compilerVar94 .= '
		';
$__compilerVar98 = '';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__compilerVar98 .= '
<a href="' . XenForo_Template_Helper_Core::link('members/trophies', $visitor, array()) . '" class="OverlayTrigger">		
<img src="' . htmlspecialchars($trophy['iconUrl'], ENT_QUOTES, 'UTF-8') . '" title="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" class="trophyIconMini" />
</a>';
$__compilerVar94 .= $__compilerVar98;
unset($__compilerVar98);
$__compilerVar94 .= '
	';
}
$__compilerVar94 .= '
</p>
';
}
$__compilerVar94 .= '
		
	';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsActive'))
{
$__compilerVar99 = '';
$__compilerVar99 .= '
';
if (!XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsBadgeCSS'))
{
$__compilerVar99 .= '
    ';
$this->addRequiredExternal('css', 'userrankribbons');
$__compilerVar99 .= '
';
}
$__compilerVar99 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsBadgeCSS'))
{
$__compilerVar99 .= '
    ';
$this->addRequiredExternal('css', 'userrankribbonsbadge');
$__compilerVar99 .= '
';
}
$__compilerVar99 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsSoftResponsiveFix'))
{
$__compilerVar99 .= '
    ';
$this->addRequiredExternal('css', 'UserRankRibbonsSoftResponsiveFix');
$__compilerVar99 .= '
';
}
$__compilerVar99 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsXenMoodsFix'))
{
$__compilerVar99 .= '
    ';
$this->addRequiredExternal('css', 'UserRankRibbonsXenMoodsFix');
$__compilerVar99 .= '
';
}
$__compilerVar99 .= '
    
';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsActive'))
{
$__compilerVar99 .= '

	<ul class="ribbon">
    
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1'))
{
$__compilerVar99 .= '
			<li class="ribbon1">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2'))
{
$__compilerVar99 .= '
			<li class="ribbon2">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3'))
{
$__compilerVar99 .= '
			<li class="ribbon3">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4'))
{
$__compilerVar99 .= '
			<li class="ribbon4">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5'))
{
$__compilerVar99 .= '
			<li class="ribbon5">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6'))
{
$__compilerVar99 .= '
			<li class="ribbon6">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7'))
{
$__compilerVar99 .= '
			<li class="ribbon7">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8'))
{
$__compilerVar99 .= '
			<li class="ribbon8">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9'))
{
$__compilerVar99 .= '
			<li class="ribbon9">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10'))
{
$__compilerVar99 .= '
			<li class="ribbon10">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11'))
{
$__compilerVar99 .= '
			<li class="ribbon11">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12'))
{
$__compilerVar99 .= '
			<li class="ribbon12">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13'))
{
$__compilerVar99 .= '
			<li class="ribbon13">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14'))
{
$__compilerVar99 .= '
			<li class="ribbon14">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15'))
{
$__compilerVar99 .= '
			<li class="ribbon15">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16'))
{
$__compilerVar99 .= '
			<li class="ribbon16">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17'))
{
$__compilerVar99 .= '
			<li class="ribbon17">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18'))
{
$__compilerVar99 .= '
			<li class="ribbon18">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19'))
{
$__compilerVar99 .= '
			<li class="ribbon19">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20'))
{
$__compilerVar99 .= '
			<li class="ribbon20">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21'))
{
$__compilerVar99 .= '
			<li class="ribbon21">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22'))
{
$__compilerVar99 .= '
			<li class="ribbon22">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23'))
{
$__compilerVar99 .= '
			<li class="ribbon23">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24'))
{
$__compilerVar99 .= '
			<li class="ribbon24">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25'))
{
$__compilerVar99 .= '
			<li class="ribbon25">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26'))
{
$__compilerVar99 .= '
			<li class="ribbon26">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27'))
{
$__compilerVar99 .= '
			<li class="ribbon27">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28'))
{
$__compilerVar99 .= '
			<li class="ribbon28">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29'))
{
$__compilerVar99 .= '
			<li class="ribbon29">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30'))
{
$__compilerVar99 .= '
			<li class="ribbon30">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31'))
{
$__compilerVar99 .= '
			<li class="ribbon31">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32'))
{
$__compilerVar99 .= '
			<li class="ribbon32">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33'))
{
$__compilerVar99 .= '
			<li class="ribbon33">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34'))
{
$__compilerVar99 .= '
			<li class="ribbon34">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $visitor,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35'))
{
$__compilerVar99 .= '
			<li class="ribbon35">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35Title') . '
			</li>
		';
}
$__compilerVar99 .= '
		
	</ul>
';
}
$__compilerVar94 .= $__compilerVar99;
unset($__compilerVar99);
}
$__compilerVar94 .= '
    ';
$__compilerVar100 = '';
$__compilerVar100 .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_info_extra_fa'))
{
$__compilerVar100 .= '
';
$__compilerVar101 = '';
$__compilerVar101 .= '

<dl class="pairsJustified">
<dt><i class="fa fa-comments Tooltip info_extra_fa" title="' . 'Messages' . '"></i></dt>
<dd><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id']
)) . '" class="concealed" rel="nofollow">' . XenForo_Template_Helper_Core::numberFormat($visitor['message_count'], '0') . '</a></dd>
</dl>

<dl class="pairsJustified">
<dt><i class="fa fa-thumbs-up Tooltip info_extra_fa" title="' . 'Likes Received' . '"></i></dt>
<dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['like_count'], '0') . '</dd>
</dl>

<dl class="pairsJustified">
<dt><i class="fa fa-trophy Tooltip info_extra_fa" title="' . 'Trophy Points' . '"></i></dt>
<dd><a href="' . XenForo_Template_Helper_Core::link('members/trophies', $visitor, array()) . '" class="OverlayTrigger concealed">' . XenForo_Template_Helper_Core::numberFormat($visitor['trophy_points'], '0') . '</a></dd>
</dl>

';
$__compilerVar100 .= $this->callTemplateHook('message_user_info_extra', $__compilerVar101, array(
'user' => $visitor,
'isQuickReply' => $__compilerVar93
));
unset($__compilerVar101);
$__compilerVar100 .= '
';
}
else
{
$__compilerVar100 .= '
			
			';
$__compilerVar102 = '';
$__compilerVar102 .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowRegisterDate') AND $visitor['user_id'])
{
$__compilerVar102 .= '
					<dl class="pairsJustified">
						<dt>' . 'Joined' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::date($visitor['register_date'], '') . '</dd>
					</dl>
				';
}
$__compilerVar102 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowMessageCount') AND $visitor['user_id'])
{
$__compilerVar102 .= '
					<dl class="pairsJustified">
						<dt>' . 'Messages' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id']
)) . '" class="concealed" rel="nofollow">' . XenForo_Template_Helper_Core::numberFormat($visitor['message_count'], '0') . '</a></dd>
					</dl>
				';
}
$__compilerVar102 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowTotalLikes') AND $visitor['user_id'])
{
$__compilerVar102 .= '
					<dl class="pairsJustified">
						<dt>' . 'Likes Received' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['like_count'], '0') . '</dd>
					</dl>
				';
}
$__compilerVar102 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowTrophyPoints') AND $visitor['user_id'] AND $xenOptions['enableTrophies'])
{
$__compilerVar102 .= '
					<dl class="pairsJustified">
						<dt>' . 'Trophy Points' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('members/trophies', $visitor, array()) . '" class="OverlayTrigger concealed">' . XenForo_Template_Helper_Core::numberFormat($visitor['trophy_points'], '0') . '</a></dd>
					</dl>
				';
}
$__compilerVar102 .= '
			
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowGender') AND $visitor['gender'])
{
$__compilerVar102 .= '
					<dl class="pairsJustified">
						<dt>' . 'Gender' . ':</dt>
						<dd itemprop="gender">';
if ($visitor['gender'] == ('male'))
{
$__compilerVar102 .= 'Male';
}
else
{
$__compilerVar102 .= 'Female';
}
$__compilerVar102 .= '</dd>
					</dl>
				';
}
$__compilerVar102 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowOccupation') AND $visitor['occupation'])
{
$__compilerVar102 .= '
					<dl class="pairsJustified">
						<dt>' . 'Occupation' . ':</dt>
						<dd itemprop="role">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($visitor['occupation'], ENT_QUOTES, 'UTF-8')
)) . '</dd>
					</dl>
				';
}
$__compilerVar102 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowLocation') AND $visitor['location'])
{
$__compilerVar102 .= '
					<dl class="pairsJustified">
						<dt>' . 'Location' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('misc/location-info', '', array(
'location' => XenForo_Template_Helper_Core::string('censor', array(
'0' => $visitor['location'],
'1' => '-'
))
)) . '" target="_blank" rel="nofollow" itemprop="address" class="concealed">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($visitor['location'], ENT_QUOTES, 'UTF-8')
)) . '</a></dd>
					</dl>
				';
}
$__compilerVar102 .= '
			
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowHomepage') AND $visitor['homepage'])
{
$__compilerVar102 .= '
					<dl class="pairsJustified">
						<dt>' . 'Home Page' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($visitor['homepage'], ENT_QUOTES, 'UTF-8'),
'1' => '-'
)) . '" rel="nofollow" target="_blank" itemprop="url">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($visitor['homepage'], ENT_QUOTES, 'UTF-8')
)) . '</a></dd>
					</dl>
				';
}
$__compilerVar102 .= '
							
			';
$__compilerVar100 .= $this->callTemplateHook('message_user_info_extra', $__compilerVar102, array(
'user' => $visitor,
'isQuickReply' => $__compilerVar93
));
unset($__compilerVar102);
$__compilerVar100 .= '
			';
}
$__compilerVar100 .= '			
			';
if (XenForo_Template_Helper_Core::styleProperty('messageShowCustomFields') AND $visitor['customFields'])
{
$__compilerVar100 .= '
			';
$__compilerVar103 = '';
$__compilerVar103 .= '
			
				';
foreach ($userFieldsInfo AS $fieldId => $fieldInfo)
{
$__compilerVar103 .= '
					';
if ($fieldInfo['viewable_message'] AND ($fieldInfo['display_group'] != ('contact') OR $visitor['allow_view_identities'] == ('everyone') OR ($visitor['allow_view_identities'] == ('members') AND $visitor['user_id'])))
{
$__compilerVar103 .= '
						';
$__compilerVar104 = '';
$__compilerVar104 .= XenForo_Template_Helper_Core::callHelper('userFieldValue', array(
'0' => $fieldInfo,
'1' => $visitor,
'2' => $visitor['customFields'][$fieldId]
));
if (trim($__compilerVar104) !== '')
{
$__compilerVar103 .= '
							<dl class="pairsJustified userField_' . htmlspecialchars($fieldId, ENT_QUOTES, 'UTF-8') . '">
								<dt>' . XenForo_Template_Helper_Core::callHelper('userFieldTitle', array(
'0' => $fieldId
)) . ':</dt>
								<dd>' . $__compilerVar104 . '</dd>
							</dl>
						';
}
unset($__compilerVar104);
$__compilerVar103 .= '
					';
}
$__compilerVar103 .= '
				';
}
$__compilerVar103 .= '
				
			';
$__compilerVar100 .= $this->callTemplateHook('message_user_info_custom_fields', $__compilerVar103, array(
'user' => $visitor,
'isQuickReply' => $__compilerVar93
));
unset($__compilerVar103);
$__compilerVar100 .= '
			';
}
$__compilerVar100 .= '
			';
if (trim($__compilerVar100) !== '')
{
$__compilerVar94 .= '
		<div class="extraUserInfo">
			' . $__compilerVar100 . '
		</div>
	';
}
unset($__compilerVar100);
$__compilerVar94 .= '
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar94 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_user_info');
$__compilerVar94 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowInfo'))
{
$__compilerVar94 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $visitor['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar94 .= '
    <dl class="conversationButtonInfo convButtonMobileInfo"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $visitor['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar94 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar94 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar94 .= ' >' . 'Start a Conversation' . '</a></dl>
';
}
$__compilerVar94 .= '
';
}
$__compilerVar94 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaMobileInfo'))
{
$__compilerVar94 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar94 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonMobileInfo {
        display: none;
    }
}
';
}
$__compilerVar94 .= '
</style>
';
}
$__compilerVar94 .= '
';
}
$__compilerVar94 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar94 .= '
<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
\'height=\'+h+\',width=\'+w+\',top=\'+TopPosition+\',left=\'+LeftPosition+\',scrollbars=\'+scroll+\',resizable\'
popupWindow = window.open(url,winName,settings)
}
</script>
';
}
$__compilerVar94 .= '
		
';
}
$__compilerVar94 .= '

	<span class="arrow"><span></span></span>
</div>
</div>';
$__compilerVar92 .= $__compilerVar94;
unset($__compilerVar93, $__compilerVar94);
$__compilerVar92 .= '

	<form action="' . htmlspecialchars($__compilerVar87, ENT_QUOTES, 'UTF-8', (false)) . '" method="post" class="AutoValidator blendedEditor" data-optInOut="OptIn" id="QuickReply">

		' . $qrEditor . '

		<div class="submitUnit">
			<div class="draftUpdate">
				<span class="draftSaved">' . 'Draft saved' . '</span>
				<span class="draftDeleted">' . 'Draft deleted' . '</span>
			</div>
			';
if ($canBookmark > 0 && $xenOptions['bookmarks_InsertQuotesBtn'])
{
$__compilerVar92 .= '
<input type="button" class="button OverlayTrigger JsOnly" id="BookMarkOverlayTrigger"
				value="' . 'Insert Bookmarks' . '..."
				tabindex="1"
				data-href="' . XenForo_Template_Helper_Core::link('bookmarks/search', false, array()) . '"
				data-add="' . 'Bookmark' . '"
				data-add-message="' . 'Bookmark' . '"
				data-cacheOverlay="false" />
';
}
$__compilerVar92 .= '
';
if ($xenOptions['multiQuote'] AND $__compilerVar91)
{
$__compilerVar92 .= '<input type="button" class="button JsOnly MultiQuoteWatcher insertQuotes" id="MultiQuote"
				value="' . 'Insert Quotes' . '..."
				tabindex="1"
				data-href="' . htmlspecialchars($__compilerVar91, ENT_QUOTES, 'UTF-8', (false)) . '"
				' . (($multiQuoteCookie) ? ('data-mq-cookie="' . htmlspecialchars($multiQuoteCookie, ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
				data-add="' . '+ Quote' . '"
				data-add-message="' . 'Message added to multi-quote.' . '"
				data-remove="' . '− Quote' . '"
				data-remove-message="' . 'Message removed from multi-quote.' . '"
				data-cacheOverlay="false" />';
}
$__compilerVar92 .= '
			<input type="submit" class="button primary" value="' . 'Post Reply' . '" accesskey="s" />
			';
$__compilerVar105 = '';
if ($attachmentParams)
{
$__compilerVar105 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar105 .= '
	';
if ($xenOptions['swfUpload'] AND $visitor['enable_flash_uploader'])
{
$__compilerVar105 .= '
		';
$this->addRequiredExternal('js', 'js/swfupload/swfupload.min.js');
$__compilerVar105 .= '
	';
}
$__compilerVar105 .= '	
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar105 .= '

	<span id="AttachmentUploader" class="buttonProxy AttachmentUploader"
		style="display: none"
		data-placeholder="#SWFUploadPlaceHolder"
		data-trigger="#ctrl_uploader"
		data-postname="upload"
		data-maxfilesize="' . htmlspecialchars($attachmentConstraints['size'], ENT_QUOTES, 'UTF-8') . '"
		data-maxuploads="' . htmlspecialchars($attachmentConstraints['count'], ENT_QUOTES, 'UTF-8') . '"
		data-extensions="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $attachmentConstraints['extensions'],
'1' => ','
)) . '"
		data-action="' . XenForo_Template_Helper_Core::link('full:attachments/do-upload.json', '', array(
'hash' => $attachmentParams['hash'],
'content_type' => $attachmentParams['content_type'],
'key' => $attachmentButtonKey
)) . '"
		data-uniquekey="' . htmlspecialchars($attachmentButtonKey, ENT_QUOTES, 'UTF-8') . '"
		data-err-110="' . 'The uploaded file is too large.' . '"
		data-err-120="' . 'The uploaded file is empty.' . '"
		data-err-130="' . 'The uploaded file does not have an allowed extension.' . '"
		data-err-unknown="' . 'There was a problem uploading your file.' . '">
		
		<span id="SWFUploadPlaceHolder"></span>		
			
		<input type="button" value="' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '"
			id="ctrl_uploader" class="button OverlayTrigger DisableOnSubmit"
			data-href="' . XenForo_Template_Helper_Core::link('full:attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => '',
'key' => $attachmentButtonKey
)) . '"
			data-hider="#AttachmentUploader" />
		<span class="HiddenInput" data-name="_xfSessionId" data-value="' . htmlspecialchars($sessionId, ENT_QUOTES, 'UTF-8') . '"></span>
		';
foreach ($attachmentParams['content_data'] AS $dataKey => $dataValue)
{
$__compilerVar105 .= '<span class="HiddenInput" data-name="content_data[' . htmlspecialchars($dataKey, ENT_QUOTES, 'UTF-8') . ']" data-value="' . htmlspecialchars($dataValue, ENT_QUOTES, 'UTF-8') . '"></span>
		';
}
$__compilerVar105 .= '
	</span>

	<noscript>
		<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" class="button" target="_blank">' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '</a>
	</noscript>

';
}
$__compilerVar92 .= $__compilerVar105;
unset($__compilerVar105);
$__compilerVar92 .= '
			';
if ($__compilerVar90)
{
$__compilerVar92 .= '<input type="submit" class="button DisableOnSubmit" value="' . 'More Options' . '..." name="more_options" />';
}
$__compilerVar92 .= '
		</div>
		
		';
if ($attachmentParams)
{
$__compilerVar92 .= '
			';
$__compilerVar106 = $attachmentParams['attachments'];
$__compilerVar107 = '';
if ($attachmentParams)
{
$__compilerVar107 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar107 .= '
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar107 .= '
	
	<div class="AttachmentEditor">
	
		';
if ($showUploadButton)
{
$__compilerVar107 .= '
			';
$__compilerVar108 = '';
if ($attachmentParams)
{
$__compilerVar108 .= '

	';
$this->addRequiredExternal('js', 'js/xenforo/attachment_editor.js');
$__compilerVar108 .= '
	';
if ($xenOptions['swfUpload'] AND $visitor['enable_flash_uploader'])
{
$__compilerVar108 .= '
		';
$this->addRequiredExternal('js', 'js/swfupload/swfupload.min.js');
$__compilerVar108 .= '
	';
}
$__compilerVar108 .= '	
	';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar108 .= '

	<span id="AttachmentUploader" class="buttonProxy AttachmentUploader"
		style="display: none"
		data-placeholder="#SWFUploadPlaceHolder"
		data-trigger="#ctrl_uploader"
		data-postname="upload"
		data-maxfilesize="' . htmlspecialchars($attachmentConstraints['size'], ENT_QUOTES, 'UTF-8') . '"
		data-maxuploads="' . htmlspecialchars($attachmentConstraints['count'], ENT_QUOTES, 'UTF-8') . '"
		data-extensions="' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $attachmentConstraints['extensions'],
'1' => ','
)) . '"
		data-action="' . XenForo_Template_Helper_Core::link('full:attachments/do-upload.json', '', array(
'hash' => $attachmentParams['hash'],
'content_type' => $attachmentParams['content_type'],
'key' => $attachmentButtonKey
)) . '"
		data-uniquekey="' . htmlspecialchars($attachmentButtonKey, ENT_QUOTES, 'UTF-8') . '"
		data-err-110="' . 'The uploaded file is too large.' . '"
		data-err-120="' . 'The uploaded file is empty.' . '"
		data-err-130="' . 'The uploaded file does not have an allowed extension.' . '"
		data-err-unknown="' . 'There was a problem uploading your file.' . '">
		
		<span id="SWFUploadPlaceHolder"></span>		
			
		<input type="button" value="' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '"
			id="ctrl_uploader" class="button OverlayTrigger DisableOnSubmit"
			data-href="' . XenForo_Template_Helper_Core::link('full:attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => '',
'key' => $attachmentButtonKey
)) . '"
			data-hider="#AttachmentUploader" />
		<span class="HiddenInput" data-name="_xfSessionId" data-value="' . htmlspecialchars($sessionId, ENT_QUOTES, 'UTF-8') . '"></span>
		';
foreach ($attachmentParams['content_data'] AS $dataKey => $dataValue)
{
$__compilerVar108 .= '<span class="HiddenInput" data-name="content_data[' . htmlspecialchars($dataKey, ENT_QUOTES, 'UTF-8') . ']" data-value="' . htmlspecialchars($dataValue, ENT_QUOTES, 'UTF-8') . '"></span>
		';
}
$__compilerVar108 .= '
	</span>

	<noscript>
		<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" class="button" target="_blank">' . (($buttonText) ? ($buttonText) : ('Upload a File')) . '</a>
	</noscript>

';
}
$__compilerVar107 .= $__compilerVar108;
unset($__compilerVar108);
$__compilerVar107 .= '
		';
}
$__compilerVar107 .= '
		
		<div class="NoAttachments"></div>
		
		<div class="secondaryContent AttachmentInsertAllBlock JsOnly">
			<span></span>
			<div class="AttachmentText">
				<div class="label">' . 'Insert every image as a' . '...</div>
				<div class="controls">
					<!--<input type="button" value="' . 'Delete All' . '" class="button _smallButton AttachmentDeleteAll" />-->
					<input type="button" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInsertAll" name="thumb" />
					<input type="button" value="' . 'Full Image' . '" class="button smallButton AttachmentInsertAll" name="image" />
				</div>
			</div>
		</div>
	
		<ol class="AttachmentList New">
			';
$__compilerVar109 = '';
$__compilerVar109 .= '1';
$__compilerVar110 = '';
$__compilerVar111 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar111 .= '

<li id="' . (($__compilerVar109) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($__compilerVar110['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($__compilerVar110 and $__compilerVar110['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($__compilerVar110 and $__compilerVar110['thumbnailUrl'])
{
$__compilerVar111 .= '
			<a href="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar110, array()) . '" target="_blank"
				data-attachmentId="' . htmlspecialchars($__compilerVar110['attachment_id'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbTrigger" data-href="' . XenForo_Template_Helper_Core::link('misc/lightbox', false, array()) . '"><img
				src="' . htmlspecialchars($__compilerVar110['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($__compilerVar110['filename'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbImage" data-src="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar110, array(
'embedded' => '1'
)) . '" /></a>
		';
}
else
{
$__compilerVar111 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar111 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $__compilerVar110, array()) . '" target="_blank">' . (($__compilerVar110) ? (htmlspecialchars($__compilerVar110['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($__compilerVar109)
{
$__compilerVar111 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar111 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($__compilerVar110['thumbnailUrl'])
{
$__compilerVar111 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar111 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $__compilerVar110, array()) . '" />
			
				';
if ($__compilerVar110['thumbnailUrl'])
{
$__compilerVar111 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar111 .= '
			</div>
		';
}
$__compilerVar111 .= '

	</div>
	
</li>';
$__compilerVar107 .= $__compilerVar111;
unset($__compilerVar109, $__compilerVar110, $__compilerVar111);
$__compilerVar107 .= '
			';
if ($__compilerVar106)
{
$__compilerVar107 .= '
				';
foreach ($__compilerVar106 AS $attachment)
{
$__compilerVar107 .= '
					';
if ($attachment['temp_hash'])
{
$__compilerVar107 .= '
						';
$__compilerVar112 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar112 .= '

<li id="' . (($isTemplate) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($attachment and $attachment['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($attachment and $attachment['thumbnailUrl'])
{
$__compilerVar112 .= '
			<a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank"
				data-attachmentId="' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbTrigger" data-href="' . XenForo_Template_Helper_Core::link('misc/lightbox', false, array()) . '"><img
				src="' . htmlspecialchars($attachment['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbImage" data-src="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array(
'embedded' => '1'
)) . '" /></a>
		';
}
else
{
$__compilerVar112 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar112 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank">' . (($attachment) ? (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($isTemplate)
{
$__compilerVar112 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar112 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($attachment['thumbnailUrl'])
{
$__compilerVar112 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar112 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $attachment, array()) . '" />
			
				';
if ($attachment['thumbnailUrl'])
{
$__compilerVar112 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar112 .= '
			</div>
		';
}
$__compilerVar112 .= '

	</div>
	
</li>';
$__compilerVar107 .= $__compilerVar112;
unset($__compilerVar112);
$__compilerVar107 .= '
					';
}
$__compilerVar107 .= '
				';
}
$__compilerVar107 .= '
			';
}
$__compilerVar107 .= '
		</ol>
	
		';
if ($__compilerVar106)
{
$__compilerVar107 .= '
			';
$__compilerVar113 = '';
$__compilerVar113 .= '
					';
foreach ($__compilerVar106 AS $attachment)
{
$__compilerVar113 .= '
						';
if (!$attachment['temp_hash'])
{
$__compilerVar113 .= '
							';
$__compilerVar114 = '';
$this->addRequiredExternal('css', 'attachment_editor');
$__compilerVar114 .= '

<li id="' . (($isTemplate) ? ('AttachedFileTemplate') : ('attachment' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8'))) . '"
	class="AttachedFile ' . (($attachment and $attachment['thumbnailUrl']) ? ('AttachedImage') : ('')) . ' secondaryContent">

	<div class="Thumbnail">
		';
if ($attachment and $attachment['thumbnailUrl'])
{
$__compilerVar114 .= '
			<a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank"
				data-attachmentId="' . htmlspecialchars($attachment['attachment_id'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbTrigger" data-href="' . XenForo_Template_Helper_Core::link('misc/lightbox', false, array()) . '"><img
				src="' . htmlspecialchars($attachment['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8') . '"
				class="_not_LbImage" data-src="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array(
'embedded' => '1'
)) . '" /></a>
		';
}
else
{
$__compilerVar114 .= '
			<span class="genericAttachment"></span>
		';
}
$__compilerVar114 .= '
	</div>

	<div class="AttachmentText">
		<div class="Filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank">' . (($attachment) ? (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8')) : ('')) . '</a></div>
	
		';
if ($isTemplate)
{
$__compilerVar114 .= '
			<input type="button" value="' . 'Cancel' . '" class="button smallButton AttachmentCanceller" />
			
			<span class="ProgressMeter"><span class="ProgressGraphic">&nbsp;</span><span class="ProgressCounter">0%</span></span>
		';
}
else
{
$__compilerVar114 .= '
			<noscript>
				<a href="' . XenForo_Template_Helper_Core::link('attachments/upload', '', array(
'_params' => $attachmentParams,
'attachments' => ''
)) . '" target="_blank" class="button Smallbutton">' . 'Delete' . '</a>
			</noscript>
			
			';
if ($attachment['thumbnailUrl'])
{
$__compilerVar114 .= '
				<div class="label JsOnly">' . 'Insert' . ':</div>
			';
}
$__compilerVar114 .= '
			
			<div class="controls JsOnly">				
				<input type="button" value="' . 'Delete' . '" class="button smallButton AttachmentDeleter" data-href="' . XenForo_Template_Helper_Core::link('attachments/delete', $attachment, array()) . '" />
			
				';
if ($attachment['thumbnailUrl'])
{
$__compilerVar114 .= '
					<input type="button" name="thumb" value="' . 'Thumbnail' . '" class="button smallButton AttachmentInserter" />
					<input type="button" name="image" value="' . 'Full Image' . '" class="button smallButton AttachmentInserter" />
				';
}
$__compilerVar114 .= '
			</div>
		';
}
$__compilerVar114 .= '

	</div>
	
</li>';
$__compilerVar113 .= $__compilerVar114;
unset($__compilerVar114);
$__compilerVar113 .= '
						';
}
$__compilerVar113 .= '
					';
}
$__compilerVar113 .= '
				';
if (trim($__compilerVar113) !== '')
{
$__compilerVar107 .= '
			<ol class="AttachmentList Existing">
				' . $__compilerVar113 . '
			</ol>
			';
}
unset($__compilerVar113);
$__compilerVar107 .= '
		';
}
$__compilerVar107 .= '
		
		<input type="hidden" name="attachment_hash" value="' . htmlspecialchars($attachmentParams['hash'], ENT_QUOTES, 'UTF-8') . '" />
		
		' . '
		
	</div>
	
';
}
$__compilerVar92 .= $__compilerVar107;
unset($__compilerVar106, $__compilerVar107);
$__compilerVar92 .= '
		';
}
$__compilerVar92 .= '

		<input type="hidden" name="last_date" value="' . htmlspecialchars($__compilerVar88, ENT_QUOTES, 'UTF-8') . '" data-load-value="' . htmlspecialchars($__compilerVar88, ENT_QUOTES, 'UTF-8') . '" />
		<input type="hidden" name="last_known_date" value="' . htmlspecialchars($__compilerVar89, ENT_QUOTES, 'UTF-8') . '" />
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />

	</form>

</div>';
$__output .= $__compilerVar92;
unset($__compilerVar87, $__compilerVar88, $__compilerVar89, $__compilerVar90, $__compilerVar91, $__compilerVar92);
$__output .= '
';
}
$__output .= '

';
$__compilerVar115 = '';
$__output .= $this->callTemplateHook('thread_view_qr_after', $__compilerVar115, array(
'thread' => $thread
));
unset($__compilerVar115);
$__output .= '
';
if ($xenOptions['RainDD_UA_ThreadViewPos'] == 3)
{
$__output .= '
	';
$__compilerVar116 = '';
if ($RainDD_UA_ThreadViewerPermission)
{
$__compilerVar116 .= '
	';
$__compilerVar117 = '';
$__compilerVar117 .= '
			';
if ($xenOptions['RainDD_UA_ThreadViewType'] == 0)
{
$__compilerVar117 .= '
			';
foreach ($RainDD_UA_ThreadUsersViewing['records'] AS $user)
{
$__compilerVar117 .= '
				<li>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '</li>
			';
}
$__compilerVar117 .= '
			';
}
else if ($xenOptions['RainDD_UA_ThreadViewType'] == 1)
{
$__compilerVar117 .= '
			';
foreach ($RainDD_UA_ThreadUsersViewing['records'] AS $user)
{
$__compilerVar117 .= '
				<li>' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'title' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8')
),'')) . '</li>
			';
}
$__compilerVar117 .= '
			';
}
$__compilerVar117 .= '
			';
if (trim($__compilerVar117) !== '')
{
$__compilerVar116 .= '
	';
$this->addRequiredExternal('css', 'RainDD_UA_Thread');
$__compilerVar116 .= '
	<div id="uaThreadViewContainer" class="section secondaryContent">
		<h3>' . 'Users Who Are Viewing This Thread <span class="footnote">(Users: ' . XenForo_Template_Helper_Core::numberFormat($RainDD_UA_ThreadUsersViewing['members'], '0') . ', Guests: ' . XenForo_Template_Helper_Core::numberFormat($RainDD_UA_ThreadUsersViewing['guests'], '0') . ')</span>' . '</h3>	
		';
if ($xenOptions['RainDD_UA_ThreadViewType'] == 0)
{
$__compilerVar116 .= '
			<ol class="listInline commaImplode">
		';
}
else if ($xenOptions['RainDD_UA_ThreadViewType'] == 1)
{
$__compilerVar116 .= '
			<ol class="listInline">
		';
}
$__compilerVar116 .= '
			' . $__compilerVar117 . '
			</ol>
		</div>
	';
}
unset($__compilerVar117);
$__compilerVar116 .= '
';
}
$__output .= $__compilerVar116;
unset($__compilerVar116);
$__output .= '	
';
}
$__output .= '
';
if ($xenOptions['RainDD_UA_ThreadReadPos'] == 3)
{
$__output .= '
	';
$__compilerVar118 = '';
if ($RainDD_UA_ThreadReaderPermission)
{
$__compilerVar118 .= '
	';
$__compilerVar119 = '';
$__compilerVar119 .= '
			';
if ($xenOptions['RainDD_UA_ThreadReadType'] == 0)
{
$__compilerVar119 .= '
			';
foreach ($RainDD_UA_ThreadUsersReading AS $user)
{
$__compilerVar119 .= '
					<li>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($user,'',(true),array())) . '</li>
			';
}
$__compilerVar119 .= '
			';
}
else if ($xenOptions['RainDD_UA_ThreadReadType'] == 1)
{
$__compilerVar119 .= '
			';
foreach ($RainDD_UA_ThreadUsersReading AS $user)
{
$__compilerVar119 .= '
					<li>' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($user,(true),array(
'user' => '$user',
'size' => 's',
'img' => 'true',
'title' => htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8')
),'')) . '</li>
			';
}
$__compilerVar119 .= '
			';
}
$__compilerVar119 .= '
				</div>
			</div>
            ';
if (trim($__compilerVar119) !== '')
{
$__compilerVar118 .= '
	';
$this->addRequiredExternal('css', 'RainDD_UA_Thread');
$__compilerVar118 .= '
    <div id="uaThreadReadContainer" class="section secondaryContent">
        <h3>' . 'Users Who Have Read This Thread <span class="footnote">(Total: ' . XenForo_Template_Helper_Core::numberFormat($RainDD_UA_ThreadReaderCount, '0') . ')</span>' . '</h3>
		';
if ($xenOptions['RainDD_UA_ThreadReadType'] == 0)
{
$__compilerVar118 .= '
        	<ol class="listInline commaImplode">
		';
}
else if ($xenOptions['RainDD_UA_ThreadReadType'] == 1)
{
$__compilerVar118 .= '
			<ol class="listInline">
		';
}
$__compilerVar118 .= '
			<div class="uaCollapseThreadRead">
    				<div class="uaExpandThreadRead">
			' . $__compilerVar119 . '
        	</ol>
    	</div>
	';
}
unset($__compilerVar119);
$__compilerVar118 .= '
';
}
$__compilerVar118 .= '		
		';
$__output .= $__compilerVar118;
unset($__compilerVar118);
$__output .= '	
';
}
$__output .= '

';
if ($threadTagsHtml AND $xenOptions['tagPosition'] == ('bottom'))
{
$__output .= $threadTagsHtml;
}
$__output .= '

' . $threadStatusHtml . '

';
$__compilerVar120 = '';
$__compilerVar120 .= XenForo_Template_Helper_Core::link('canonical:threads', $thread, array());
$__compilerVar121 = '';
$__compilerVar122 = '';
$__compilerVar122 .= '
			';
$__compilerVar123 = '';
$__compilerVar123 .= '
			';
if ($xenOptions['tweet']['enabled'])
{
$__compilerVar123 .= '
				<div class="tweet shareControl">
					<a href="https://twitter.com/share" class="twitter-share-button"
						data-count="horizontal"
						data-lang="' . XenForo_Template_Helper_Core::callHelper('twitterLang', array(
'0' => $visitorLanguage['language_code']
)) . '"
						data-url="' . htmlspecialchars($__compilerVar120, ENT_QUOTES, 'UTF-8') . '"
						' . (($thread['title']) ? ('data-text="' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread,
'1' => 'escaped'
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
						' . (($xenOptions['tweet']['via']) ? ('data-via="' . htmlspecialchars($xenOptions['tweet']['via'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '
						' . (($xenOptions['tweet']['related']) ? ('data-related="' . htmlspecialchars($xenOptions['tweet']['related'], ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>' . 'Tweet' . '</a>
				</div>
			';
}
$__compilerVar123 .= '
			';
if ($xenOptions['plusone'])
{
$__compilerVar123 .= '
				<div class="plusone shareControl">
					<div class="g-plusone" data-size="medium" data-count="true" data-href="' . htmlspecialchars($__compilerVar120, ENT_QUOTES, 'UTF-8') . '"></div>
				</div>
			';
}
$__compilerVar123 .= '
			';
if ($xenOptions['facebookLike'])
{
$__compilerVar123 .= '
				<div class="facebookLike shareControl">
					';
$__extraData['facebookSdk'] = '';
$__extraData['facebookSdk'] .= '1';
$__compilerVar123 .= '
					<div class="fb-like" data-href="' . htmlspecialchars($__compilerVar120, ENT_QUOTES, 'UTF-8') . '" data-width="400" data-layout="standard" data-action="' . htmlspecialchars($xenOptions['facebookLikeAction'], ENT_QUOTES, 'UTF-8') . '" data-show-faces="true" data-colorscheme="' . XenForo_Template_Helper_Core::styleProperty('fbColorScheme') . '"></div>
				</div>
			';
}
$__compilerVar123 .= '
			';
$__compilerVar122 .= $this->callTemplateHook('share_page_options', $__compilerVar123, array());
unset($__compilerVar123);
$__compilerVar122 .= '
		';
if (trim($__compilerVar122) !== '')
{
$__compilerVar121 .= '
	';
$this->addRequiredExternal('css', 'share_page');
$__compilerVar121 .= '

	<div class="sharePage">
		<h3 class="textHeading larger">' . 'Share This Page' . '</h3>
		' . $__compilerVar122 . '
	</div>
';
}
unset($__compilerVar122);
$__output .= $__compilerVar121;
unset($__compilerVar120, $__compilerVar121);
