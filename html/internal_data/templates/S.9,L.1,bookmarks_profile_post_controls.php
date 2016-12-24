<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<a href="' . XenForo_Template_Helper_Core::link('bookmarks/index', '', array(
'type' => 'profile_post',
'id' => $profilePost['profile_post_id']
)) . '" class="OverlayTrigger item control bookmarks" data-cacheOverlay="false"><span></span>' . 'Bookmark' . '</a>';
