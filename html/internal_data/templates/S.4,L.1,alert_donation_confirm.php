<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= 'Your donation has been confirmed.
' . '
<div>' . 'Donation date' . ': ' . XenForo_Template_Helper_Core::datetime($content['dateline'], 'absolute') . '</div>
<div>' . 'Donation amount' . ': <b>' . htmlspecialchars($content['amount'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($content['currency'], ENT_QUOTES, 'UTF-8') . '</b></div>';
