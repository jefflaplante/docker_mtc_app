<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($brCanUseThreadLiveUpdateTools)
{
$__output .= '
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
