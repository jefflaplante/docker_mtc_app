<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($brCanUseThreadLiveUpdate && $visitor['br_thread_update'])
{
$__output .= '
	<div id="BR_threadLiveUpdate">
		';
$this->addRequiredExternal('js', 'js/brivium/ThreadLiveUpdate/br_thread_auto_update.js');
$__output .= '
		<input name="BR_thread_id" type="hidden" value="' . htmlspecialchars($thread['thread_id'], ENT_QUOTES, 'UTF-8') . '" />
		<input name="BR_timeupdate" type="hidden" value="' . htmlspecialchars($xenOptions['BRTLU_timeLiveUpdate'], ENT_QUOTES, 'UTF-8') . '" />
	</div>
';
}
