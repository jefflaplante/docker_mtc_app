<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<li id="conversation-' . htmlspecialchars($conversation['conversation_id'], ENT_QUOTES, 'UTF-8') . '" class="searchResult conversation primaryContent' . (($conversation['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($conversation['username'], ENT_QUOTES, 'UTF-8') . '">

	<div class="listBlock posterAvatar">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($conversation,(true),array(
'user' => '$conversation',
'size' => 's',
'img' => 'true'
),'')) . '</div>

	<div class="listBlock main">
		<div class="titleText">
			<span class="contentType">' . 'Conversation' . '</span>
			<h3 class="title' . (($conversation['isNew']) ? (' new') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('conversations', $conversation, array(
'conversation_user_id' => (($conversation['owner_user_id'] != $visitor['user_id']) ? ($conversation['owner_user_id']) : (''))
)) . '">' . XenForo_Template_Helper_Core::callHelper('conversationPrefix', array(
'0' => $conversation
)) . XenForo_Template_Helper_Core::callHelper('highlight', array(
'0' => $conversation['title'],
'1' => $search['search_query'],
'2' => 'highlight'
)) . '</a></h3>
		</div>

		<blockquote class="snippet">
			<a href="' . XenForo_Template_Helper_Core::link('conversations', $conversation, array(
'conversation_user_id' => (($conversation['owner_user_id'] != $visitor['user_id']) ? ($conversation['owner_user_id']) : (''))
)) . '">' . XenForo_Template_Helper_Core::callHelper('snippet', array(
'0' => $conversationMessage['message'],
'1' => '150',
'2' => array(
'term' => $search['search_query'],
'emClass' => 'highlight',
'stripQuotes' => '1'
)
)) . '</a>
		</blockquote>

		<div class="meta">
			' . 'Conversation by' . ': ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($conversation,'',false,array())) . ',
			' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($conversation['message_date'],array(
'time' => '$conversation.message_date'
))) . ',
			' . '' . XenForo_Template_Helper_Core::numberFormat($conversation['reply_count'], '0') . ' replies' . '
		</div>
	</div>

</li>';
