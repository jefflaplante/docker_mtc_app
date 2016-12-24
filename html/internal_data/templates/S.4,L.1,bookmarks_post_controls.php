<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<a href="' . XenForo_Template_Helper_Core::link('bookmarks/index', '', array(
'type' => 'post',
'id' => $post['post_id']
)) . '" class="item control bookmarks OverlayTrigger" data-cacheOverlay="false"><span></span>' . 'Bookmark' . '</a>';
