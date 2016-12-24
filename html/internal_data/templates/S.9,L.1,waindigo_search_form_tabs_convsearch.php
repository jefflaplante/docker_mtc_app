<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<li' . (($searchType == ('conversation_message')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'conversation_message'
)) . '">' . 'Search Conversations' . '</a></li>';
