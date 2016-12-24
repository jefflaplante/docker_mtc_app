<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'polls');
$__output .= '
';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__output .= '

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
$__output .= '<a href="' . XenForo_Template_Helper_Core::link('threads/poll/edit', $thread, array()) . '" class="editLink">' . 'Edit' . '</a>';
}
$__output .= '
';
if ($poll['close_date'] AND $poll['hide_results'] AND $poll['until_close'])
{
$__output .= '
	<div class="pollNotes closeDate muted">
		' . 'The results of this poll are hidden until the poll closes on ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array(
'0' => $poll['close_date']
)) . '.' . '
	</div>
';
}
else if ($poll['hide_results'])
{
$__output .= '
	<div class="pollNotes closeDate muted">
		' . 'The results of this poll are hidden until it is manually edited by the user or site admin.' . '
	</div>
';
}
$__output .= '
					
					';
if ($poll['close_date'])
{
$__output .= '
						<div class="pollNotes closeDate muted">
							';
if ($poll['open'])
{
$__output .= '
								' . 'This poll will close on ' . XenForo_Template_Helper_Core::datetime($poll['close_date'], 'absolute') . '.' . '
							';
}
else
{
$__output .= '
								' . 'Poll closed ' . XenForo_Template_Helper_Core::datetime($poll['close_date'], '') . '.' . '
							';
}
$__output .= '
						</div>
					';
}
$__output .= '
				</div>
					
				' . $options . '
			</div>
		</div>
	
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>';
