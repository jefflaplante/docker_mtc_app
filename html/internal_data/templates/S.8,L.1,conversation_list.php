<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if (!$title)
{
$title = '';
$title .= (($selectedUserId != $visitor['user_id']) ? ('' . htmlspecialchars($users[$selectedUserId]['username'], ENT_QUOTES, 'UTF-8') . '\'s Conversations') : ('Conversations'));
}
$__output .= '
';
if (!$pageRoute)
{
$pageRoute = '';
$pageRoute .= 'conversations';
}
$__output .= '

';
$__extraData['title'] = '';
$__extraData['title'] .= htmlspecialchars($title, ENT_QUOTES, 'UTF-8', (false)) . XenForo_Template_Helper_Core::callHelper('pagenumber', array(
'0' => $page
));
$__output .= '
';
$__extraData['h1'] = '';
$__extraData['h1'] .= htmlspecialchars($title, ENT_QUOTES, 'UTF-8', (false));
$__output .= '
';
$__extraData['pageDescription'] = array();
$__extraData['pageDescription']['content'] = '';
$__extraData['pageDescription']['content'] .= 'Conversations allow you to exchange messages with other members directly.';
$__output .= '

';
if ($canStartConversation)
{
$__output .= '
	';
$__extraData['topctrl'] = '';
$__extraData['topctrl'] .= '
		<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="callToAction"><span>' . 'Start a New Conversation' . '</span></a>
	';
$__output .= '
';
}
$__output .= '

';
$this->addRequiredExternal('css', 'discussion_list');
$__output .= '
';
$this->addRequiredExternal('js', 'js/xenforo/discussion_list.js');
$__output .= '

';
$__compilerVar1 = '';
$this->addRequiredExternal('js', 'js/waindigo/convaccess/remove_user.js');
$__compilerVar1 .= '

';
$this->addRequiredExternal('css', 'waindigo_conversation_list_tabs_convaccess');
$__compilerVar1 .= '

';
if ($canAddUsers)
{
$__compilerVar1 .= '
	<div class="conversationTabs">
		<a href="' . XenForo_Template_Helper_Core::link('conversations/add-users', false, array()) . '" class="OverlayTrigger addLink">' . 'Add Users' . '</a>
		<ul class="tabs">
			<li class="' . (($selectedUserId == $visitor['user_id']) ? ('active') : ('')) . '">
				<a href="' . XenForo_Template_Helper_Core::link('conversations' . (($controllerAction == ('Starred')) ? ('/starred') : ((($controllerAction == ('Yours')) ? ('/yours') : ('')))), false, array()) . '">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</a>
			</li>
			';
foreach ($users AS $userId => $user)
{
$__compilerVar1 .= '
				<li class="' . (($selectedUserId == $userId) ? ('active') : ('')) . '">
					<a href="' . XenForo_Template_Helper_Core::link('conversations' . (($controllerAction == ('Starred')) ? ('/starred') : ((($controllerAction == ('Yours')) ? ('/yours') : ('')))), '', array(
'conversation_user_id' => $userId
)) . '">' . htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') . ' <span class="RemoveUserTabIcon" data-href="' . XenForo_Template_Helper_Core::link('conversations/remove-user', '', array(
'conversation_user_id' => $userId
)) . '">' . 'waindigo_remove_user_convaccess' . '</span></a></a>
				</li>
			';
}
$__compilerVar1 .= '
		</ul>
	</div>
';
}
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($conversationsPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalConversations, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), htmlspecialchars($pageRoute, ENT_QUOTES, 'UTF-8'), false, $pageNavParams, false, array())) . '

<div class="discussionList section sectionMain">
	<form action="' . XenForo_Template_Helper_Core::link('inline-mod/conversation/switch', false, array()) . '" method="post"
		class="DiscussionList InlineModForm"
		data-cookieName="conversations"
		data-controls="#InlineModControls"
		data-imodOptions="#ModerationSelect option"
	>	
		<dl class="sectionHeaders">
			<dt class="posterAvatar"><a><span></span></a></dt>			
			<dd class="main">
				<a class="title"><span>' . 'Conversation Title' . '</span></a>
				<a class="postDate"><span></span></a>
			</dd>			
			<dd class="stats"><a><span>' . 'Replies' . '</span></a></dd>
			<dd class="lastPost"><a><span>' . 'Last Message' . '</span></a></dd>
		</dl>

		<ol class="discussionListItems">
		';
if ($conversations)
{
$__output .= '
			';
foreach ($conversations AS $conversation)
{
$__output .= '
				';
$__compilerVar2 = '';
$this->addRequiredExternal('css', 'discussion_list');
$__compilerVar2 .= '

<li id="conversation-' . htmlspecialchars($conversation['conversation_id'], ENT_QUOTES, 'UTF-8') . '" class="discussionListItem ' . (($conversation['isNew']) ? ('unread') : ('')) . '" data-author="' . htmlspecialchars($conversation['username'], ENT_QUOTES, 'UTF-8') . '">

	<div class="listBlock posterAvatar">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($conversation,(true),array(
'user' => '$conversation',
'size' => 's',
'img' => 'true'
),'')) . '</div>			
		
	<div class="listBlock main">
		<div class="titleText">
			';
$__compilerVar3 = '';
$__compilerVar3 .= '
					';
if ($conversation['is_starred'])
{
$__compilerVar3 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '"><span class="starred" title="' . 'Starred' . '">' . 'Starred' . '</span></a>';
}
$__compilerVar3 .= '
				';
if (trim($__compilerVar3) !== '')
{
$__compilerVar2 .= '
				<div class="iconKey">
				' . $__compilerVar3 . '
				</div>
			';
}
unset($__compilerVar3);
$__compilerVar2 .= '

			<h3 class="title">
				<input type="checkbox" name="conversations[]" value="' . htmlspecialchars($conversation['conversation_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck" id="inlineModCheck-conversation-' . htmlspecialchars($conversation['conversation_id'], ENT_QUOTES, 'UTF-8') . '" data-target="#conversation-' . htmlspecialchars($conversation['conversation_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select conversation' . ': \'' . htmlspecialchars($conversation['title'], ENT_QUOTES, 'UTF-8') . '\'" />
				<a href="' . XenForo_Template_Helper_Core::link('conversations' . (($conversation['isNew']) ? ('/unread') : ('')), $conversation, array()) . '">' . XenForo_Template_Helper_Core::callHelper('wrap', array(
'0' => $conversation['title'],
'1' => '50'
)) . '</a>
				';
if ($visitor['user_id'])
{
$__compilerVar2 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/toggle-read', $conversation, array()) . '" class="ReadToggle"
					data-counter="#ConversationsMenu_Counter"
					title="' . (($conversation['isNew']) ? ('Mark as Read') : ('Mark as Unread')) . '"></a>';
}
$__compilerVar2 .= '
			</h3>

			<div class="secondRow">
				<div class="posterDate muted">
					' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($conversation,'',false,array(
'title' => 'Conversation Starter'
))) . ',
					';
foreach ($conversation['recipientNames'] AS $recipient)
{
$__compilerVar2 .= '
						';
if ($recipient['user_id'] != $conversation['user_id'])
{
$__compilerVar2 .= XenForo_Template_Helper_Core::callHelper('usernamehtml', array($recipient,(($recipient['user_id']) ? (htmlspecialchars($recipient['username'], ENT_QUOTES, 'UTF-8')) : ('Unknown Member')),false,array())) . ',';
}
$__compilerVar2 .= '
					';
}
$__compilerVar2 .= '

					<a href="' . XenForo_Template_Helper_Core::link('conversations', $conversation, array()) . '" class="faint">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($conversation['start_date'],array(
'time' => '$conversation.start_date'
))) . '</a>
									
					';
if ($conversation['lastPageNumbers'])
{
$__compilerVar2 .= '
						<span class="itemPageNav">
							<span>...</span>
							';
foreach ($conversation['lastPageNumbers'] AS $pageNumber)
{
$__compilerVar2 .= '
								<a href="' . XenForo_Template_Helper_Core::link('conversations', $conversation, array(
'page' => $pageNumber
)) . '">' . htmlspecialchars($pageNumber, ENT_QUOTES, 'UTF-8') . '</a>
							';
}
$__compilerVar2 .= '
						</span>
					';
}
$__compilerVar2 .= '
				</div>
			</div>
		</div>
	</div>
		
	<div class="listBlock stats pairsJustified">
		<dl class="major"><dt>' . 'Replies' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($conversation['reply_count'], '0') . '</dd></dl>
		<dl class="minor"><dt>' . 'Participants' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($conversation['recipient_count'], '0') . '</dd></dl>
	</div>

	<div class="listBlock lastPost">
		<dl class="lastPostInfo">
			<dt>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($conversation['last_message'],'',false,array())) . '</dt>
			<dd class="muted"><a href="' . XenForo_Template_Helper_Core::link('conversations/message', $conversation, array(
'message_id' => $conversation['last_message_id']
)) . '" class="dateTime">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($conversation['last_message_date'],array(
'time' => '$conversation.last_message_date'
))) . '</a></dd>
		</dl>
	</div>
	
</li>';
$__output .= $__compilerVar2;
unset($__compilerVar2);
$__output .= '
			';
}
$__output .= '
		';
}
else
{
$__output .= '
			<li class="primaryContent">' . 'There are no conversations to display.' . ' ';
if ($canStartConversation)
{
$__output .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '">' . 'Start a conversation now' . '</a>';
}
$__output .= '</li>
		';
}
$__output .= '
		</ol>

		<div class="sectionFooter InlineMod SelectionCountContainer">
			';
if ($totalConversations)
{
$__output .= '<span class="contentSummary">' . 'Showing conversations ' . XenForo_Template_Helper_Core::numberFormat($startOffset, '0') . ' to ' . XenForo_Template_Helper_Core::numberFormat($endOffset, '0') . ' of ' . XenForo_Template_Helper_Core::numberFormat($totalConversations, '0') . '' . '</span>';
}
$__output .= '

			';
$__compilerVar4 = '';
$__compilerVar5 = '';
$__compilerVar5 .= 'Conversation Management';
$__compilerVar6 = '';
$__compilerVar6 .= '
		<option value="leave">' . 'Leave Conversations' . '...</option>
		<option value="read">' . 'Mark Conversations Read' . '</option>
		<option value="unread">' . 'Mark Conversations Unread' . '</option>
		<option value="star">' . 'Star Conversations' . '</option>
		<option value="unstar">' . 'Unstar Conversations' . '</option>
		<option value="deselect">' . 'Deselect Conversations' . '</option>
	';
$__compilerVar7 = '';
$__compilerVar7 .= 'Select / deselect all conversations on this page';
$__compilerVar8 = '';
$__compilerVar8 .= 'Selected Conversations';
$__compilerVar9 = '';
$this->addRequiredExternal('css', 'inline_mod');
$__compilerVar9 .= '
';
$this->addRequiredExternal('js', 'js/xenforo/inline_mod.js');
$__compilerVar9 .= '

<span id="InlineModControls">
	<span class="selectionControl secondaryContent">
		<label for="ModerationCheck">
			' . 'Select All' . ' <input type="checkbox" id="ModerationCheck" title="' . htmlspecialchars($__compilerVar7, ENT_QUOTES, 'UTF-8') . '" />
		</label>

		<input type="button" class="button ClickNext" value="&darr;" title="' . 'Move down' . '" />
		<input type="button" class="button ClickPrev" value="&uarr;" title="' . 'Move up' . '" />
		<a class="SelectionCount">' . htmlspecialchars($__compilerVar8, ENT_QUOTES, 'UTF-8') . ': <em class="InlineModCheckedTotal">0</em></a>
	</span>

	<span class="actionControl sectionFooter">
		<span class="commonActions">
			';
if ($inlineModOptions['delete'])
{
$__compilerVar9 .= '<input type="submit" class="button" value="' . 'Delete' . '..." name="delete" />';
}
$__compilerVar9 .= '
			';
if ($inlineModOptions['approve'])
{
$__compilerVar9 .= '<input type="submit" class="button" value="' . 'Approve' . '" name="approve" />';
}
$__compilerVar9 .= '
		</span>

		<span class="otherActions">
			<select name="a" id="ModerationSelect" class="textCtrl">
				<option value="">' . 'Other Action' . '...</option>
				<optgroup label="' . 'Moderation Actions' . '">
					' . $__compilerVar6 . '
				</optgroup>
				<option value="closeOverlay">' . 'Close This Overlay' . '</option>
			</select>

			<input type="submit" class="button primary" value="' . 'Go' . '" />
			<input type="reset" class="button OverlayCloser overylayOnly" value="X" title="' . 'Cancel and close these controls' . '" />
		</span>
	</span>
</span>';
$__compilerVar4 .= $__compilerVar9;
unset($__compilerVar5, $__compilerVar6, $__compilerVar7, $__compilerVar8, $__compilerVar9);
$__output .= $__compilerVar4;
unset($__compilerVar4);
$__output .= '
		</div>

	</form>
	
	<h3 id="DiscussionListOptionsHandle" class="JsOnly"><a href="#">' . 'Conversation Display Options' . '</a></h3>

	<form action="' . XenForo_Template_Helper_Core::link(htmlspecialchars($pageRoute, ENT_QUOTES, 'UTF-8'), false, array()) . '" method="post" class="DiscussionListOptions secondaryContent">
		<div class="controlGroup">
			<label for="ctrl_search_type">' . 'Show only conversations' . ':</label>
			<select name="search_type" id="ctrl_search_type" class="textCtrl">
				<option value="">(' . 'Show all conversations' . ')</option>
				<option value="received_by" ' . (($search_type == ('received_by')) ? ' selected="selected"' : '') . '>' . 'Received by' . '</option>
				
				<option value="started_by" ' . (($search_type == ('started_by')) ? ' selected="selected"' : '') . '>' . 'Started by' . '</option>
			</select>
			<input type="search" name="search_user" value="' . htmlspecialchars($search_user, ENT_QUOTES, 'UTF-8') . '" placeholder="' . 'User Name' . '..."
				class="textCtrl AutoComplete AcSingle"
				data-acurl="' . XenForo_Template_Helper_Core::link('conversations/find-user', false, array()) . '" data-acextrafields="#ctrl_search_type" />
		</div>
	
		<div class="buttonGroup">
			<input type="submit" class="button primary" value="' . 'Set Options' . '" />
			<input type="reset" class="button" value="' . 'Cancel' . '" />
		</div>
	
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
	
</div>
	
<div class="pageNavLinkGroup afterDiscussionListHandle">
	<div class="linkGroup">
		';
if ($canStartConversation)
{
$__output .= '
			<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="callToAction"><span>' . 'Start a New Conversation' . '</span></a>
		';
}
$__output .= '
	</div>
	
	' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($conversationsPerPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalConversations, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), htmlspecialchars($pageRoute, ENT_QUOTES, 'UTF-8'), false, $pageNavParams, false, array())) . '
</div>';
$__extraData['searchBar']['conversation'] = '';
$__compilerVar10 = '';
$__compilerVar10 .= '<label title="' . 'Search conversations only' . '"><input type="checkbox" name="type" value="conversation"
	id="search_bar_conversations" checked="checked" /> ' . 'Search conversations only' . '</label>';
$__extraData['searchBar']['conversation'] .= $__compilerVar10;
unset($__compilerVar10);
