<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<li id="conversationMessage-' . htmlspecialchars($conversationMessage['message_id'], ENT_QUOTES, 'UTF-8') . '" class="searchResult conversationMessage primaryContent" data-author="' . htmlspecialchars($conversationMessage['username'], ENT_QUOTES, 'UTF-8') . '">

	<div class="listBlock postAvatar">' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($conversationMessage,(true),array(
'user' => '$conversationMessage',
'size' => 's',
'img' => 'true'
),'')) . '</div>

	<div class="listBlock main">
		<div class="titleText">
			<span class="contentType">' . 'Conversation Message' . '</span>
			<h3 class="title' . (($thread['isNew']) ? (' new') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('conversations', $conversation, array(
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
'stripQuote' => '1'
)
)) . '</a>
		</blockquote>

		<div class="meta">
			' . 'Conversation message by' . ': ' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($conversationMessage,'',false,array())) . ',
			' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($conversationMessage['message_date'],array(
'time' => htmlspecialchars($conversationMessage['message_date'], ENT_QUOTES, 'UTF-8')
))) . '
		</div>
	</div>
</li>';
