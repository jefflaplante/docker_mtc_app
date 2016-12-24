<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<div class="primaryContent">' . XenForo_Template_Helper_Core::callHelper('bodyText', array(
'0' => $content['message']
)) . '</div>
<dl class="secondaryContent pairsInline">
	<dt>' . 'Profile Post' . ':</dt>
	<dd><a href="' . XenForo_Template_Helper_Core::link('profile-posts', $content, array()) . '">' . 'Profile post for ' . htmlspecialchars($content['profile_username'], ENT_QUOTES, 'UTF-8') . '' . '</a></dd>
</dl>';
