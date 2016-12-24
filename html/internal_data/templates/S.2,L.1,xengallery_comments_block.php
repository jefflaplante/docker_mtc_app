<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__compilerVar1 = '';
$__compilerVar1 .= '
					';
foreach ($comments AS $comment)
{
$__compilerVar1 .= '
						<li>
							' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($comment,(true),array(
'user' => '$comment',
'size' => 's',
'img' => 'true',
'href' => htmlspecialchars($comment['content_link'], ENT_QUOTES, 'UTF-8'),
'class' => 'NoOverlay Tooltip',
'title' => htmlspecialchars($comment['username'], ENT_QUOTES, 'UTF-8')
),'')) . '
							<div class="mediaTitle"><a href="' . XenForo_Template_Helper_Core::link('xengallery/comments', $comment, array()) . '" class="username NoOverlay"><i class="fa fa-' . htmlspecialchars($comment['content_icon'], ENT_QUOTES, 'UTF-8') . '"></i> ' . htmlspecialchars($comment['content_title'], ENT_QUOTES, 'UTF-8') . '</a></div>
							<div class="extraData mediaComment"><a href="' . XenForo_Template_Helper_Core::link('xengallery/comments', $comment, array()) . '">' . XenForo_Template_Helper_Core::callHelper('snippet', array(
'0' => $comment['message'],
'1' => '200'
)) . '</a></div>
						</li>
					';
}
$__compilerVar1 .= '
				';
if (trim($__compilerVar1) !== '')
{
$__output .= '
	<div class="section xengallery_recent_comments">
		<dl class="secondaryContent avatarList">
			<h3>' . $title . '</h3>
			<ol class="recentComments">
				' . $__compilerVar1 . '
			</ol>
		</dl>
	</div>
';
}
unset($__compilerVar1);
