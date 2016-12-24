<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__output .= '

<ul>
';
foreach ($threads AS $thread)
{
$__output .= '
	<li id="thread-' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" class="threadListItem' . (($thread['isDeleted']) ? (' deleted') : ('')) . (($thread['lastPostInfo']['isIgnored']) ? (' ignored') : ('')) . '" data-author="' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . '">

		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($thread['lastPostInfo'],(true),array(
'user' => '$thread.lastPostInfo',
'size' => 's',
'img' => 'true'
),'')) . '
		
		<div class="messageInfo">
			
			<div class="messageContent">
				<div class="title">
				';
if ($thread['isNew'] AND $thread['haveReadData'])
{
$__output .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__output .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__output .= '
				</div>
			</div>

			<div class="additionalRow muted">
				' . 'Latest' . ': ' . htmlspecialchars($thread['lastPostInfo']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($thread['lastPostInfo']['post_date'],array(
'time' => '$thread.lastPostInfo.post_date'
))) . '
			</div>
			
			<div class="additionalRow muted">
				<a href="' . XenForo_Template_Helper_Core::link('forums', $thread['forum'], array()) . '" class="forumLink">' . htmlspecialchars($thread['forum']['title'], ENT_QUOTES, 'UTF-8') . '</a>
			</div>
		</div>
	</li>
';
}
$__output .= '
</ul>';
