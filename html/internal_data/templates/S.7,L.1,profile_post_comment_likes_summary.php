<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($comment['likes'])
{
$__output .= '
	';
$this->addRequiredExternal('css', 'likes_summary');
$__output .= '
	<div class="likesSummary">
		<span class="LikeText">
			' . XenForo_Template_Helper_Core::callHelper('likeshtml', array($comment['likes'],$likesUrl,$comment['like_date'],$comment['likeUsers'])) . '
		</span>
	</div>
';
}
