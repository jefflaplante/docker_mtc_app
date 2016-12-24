<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<div class="resourceHeaders">
     <ol class="tabs">
          ';
if ($category)
{
$__output .= '
     		<li class="' . (($order == ('')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade/browse', $category, array()) . '">' . 'Alphabetical' . '</a></li>
     		<li class="' . (($order == ('game_id')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade/browse', $category, array(
'order' => 'game_id',
'type' => $typeFilter
)) . '">' . 'Most Recent' . '</a></li>
     		<li class="' . (($order == ('play_count')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade/browse', $category, array(
'order' => 'play_count',
'type' => $typeFilter
)) . '">' . 'Most Played' . '</a></li>
          ';
}
else
{
$__output .= '
     		<li class="' . (($order == ('')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade', '', array()) . '">' . 'Alphabetical' . '</a></li>
     		<li class="' . (($order == ('game_id')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade', '', array(
'order' => 'game_id',
'type' => $typeFilter
)) . '">' . 'Most Recent' . '</a></li>
     		<li class="' . (($order == ('play_count')) ? ('active') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade', '', array(
'order' => 'play_count',
'type' => $typeFilter
)) . '">' . 'Most Played' . '</a></li>
          ';
}
$__output .= '
     </ol>
</div>
';
