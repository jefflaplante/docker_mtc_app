<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<ul class="tabs">
	';
$__compilerVar1 = '';
$__compilerVar1 .= '
		<li' . (($searchType == ('')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '">' . 'Search Everything' . '</a></li>
		<li' . (($searchType == ('post')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Threads and Posts' . '</a></li>
		<li' . (($searchType == ('profile_post')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'profile_post'
)) . '">' . 'Search Profile Posts' . '</a></li>
	
';
$__compilerVar2 = '';
$__compilerVar2 .= '<li' . (($searchType == ('conversation_message')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'conversation_message'
)) . '">' . 'Search Conversations' . '</a></li>';
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
$__compilerVar1 .= '
';
$__output .= $this->callTemplateHook('search_form_tabs', $__compilerVar1, array());
unset($__compilerVar1);
$__output .= '
	';
if ($xenOptions['enableTagging'])
{
$__output .= '
		<li' . (($searchType == ('tags')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('tags', false, array()) . '">' . 'Search Tags' . '</a></li>
	';
}
$__output .= '
	</ul>';
