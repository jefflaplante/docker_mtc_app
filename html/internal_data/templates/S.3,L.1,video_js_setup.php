<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'video_js');
$__output .= '
';
$this->addRequiredExternal('js', 'js/videojs/video.js');
$__output .= '

';
$__extraData['head']['videoJsSwf'] = '';
$__extraData['head']['videoJsSwf'] .= '
	<script>
		videojs.options.flash.swf = "' . htmlspecialchars($requestPaths['fullBasePath'], ENT_QUOTES, 'UTF-8') . 'js/videojs/video-js.swf"
	</script>
';
