<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($threads)
{
$__output .= '
    <div class="section threadList">
        <div class="secondaryContent">
            <h3><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '">' . 'New Posts' . '</a></h3>
            ';
$__compilerVar1 = '';
$this->addRequiredExternal('css', 'thread_list_simple');
$__compilerVar1 .= '

<ul>
';
foreach ($threads AS $thread)
{
$__compilerVar1 .= '
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
$__compilerVar1 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/unread', $thread, array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
else
{
$__compilerVar1 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts', $thread['lastPostInfo'], array()) . '">' . XenForo_Template_Helper_Core::callHelper('threadPrefix', array(
'0' => $thread
)) . htmlspecialchars($thread['title'], ENT_QUOTES, 'UTF-8') . '</a>
				';
}
$__compilerVar1 .= '
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
$__compilerVar1 .= '
</ul>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
        </div>
    </div>
';
}
