<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<div class="messageInfo primaryContent">
	<div class="messageContent" style="max-height:350px; overflow:auto;">		
		<article>
			<blockquote class="messageText ugc baseHtml">
				' . $item['messageHtml'] . '
			</blockquote>
		</article>
		
		<div class="baseHtml ugc">
			<br /><aside>
			';
if ($contentUser['user_id'] > 0 AND $contentUser['username'])
{
$__output .= '
				<a href="' . XenForo_Template_Helper_Core::link('full:members', $contentUser, array()) . '" class="OverlayCloser">' . htmlspecialchars($contentUser['username'], ENT_QUOTES, 'UTF-8') . '</a><span class="muted">,</span>
			';
}
else if ($contentUser['username'])
{
$__output .= '
				' . htmlspecialchars($contentUser['username'], ENT_QUOTES, 'UTF-8') . ',
			';
}
else
{
$__output .= '	
				' . '(deleted member)' . ',
			';
}
$__output .= '
			' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['content']['date'],array(
'time' => htmlspecialchars($item['content']['date'], ENT_QUOTES, 'UTF-8'),
'class' => 'muted'
))) . '</aside>
		</div>
	</div>
</div>';
