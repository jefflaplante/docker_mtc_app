<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Search Tags';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:tags', false, array()), 'value' => 'Tags');
$__output .= '

';
$this->addRequiredExternal('js', 'js/xenforo/tag.js');
$__output .= '
';
$this->addRequiredExternal('css', 'tag');
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('tags', false, array()) . '" method="post" class="xenForm AutoValidator" data-redirect="yes">

	';
if ($canSearch)
{
$__output .= '
		';
$__compilerVar1 = '';
$__compilerVar1 .= 'tags';
$__compilerVar2 = '';
$__compilerVar2 .= '<ul class="tabs">
	';
$__compilerVar3 = '';
$__compilerVar3 .= '
		<li' . (($__compilerVar1 == ('')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '">' . 'Search Everything' . '</a></li>
		<li' . (($__compilerVar1 == ('post')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Threads and Posts' . '</a></li>
		<li' . (($__compilerVar1 == ('profile_post')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'profile_post'
)) . '">' . 'Search Profile Posts' . '</a></li>
	
';
$__compilerVar4 = '';
$__compilerVar4 .= '<li' . (($__compilerVar1 == ('conversation_message')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'conversation_message'
)) . '">' . 'Search Conversations' . '</a></li>';
$__compilerVar3 .= $__compilerVar4;
unset($__compilerVar4);
$__compilerVar3 .= '
';
$__compilerVar2 .= $this->callTemplateHook('search_form_tabs', $__compilerVar3, array());
unset($__compilerVar3);
$__compilerVar2 .= '
	';
if ($xenOptions['enableTagging'])
{
$__compilerVar2 .= '
		<li' . (($__compilerVar1 == ('tags')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('tags', false, array()) . '">' . 'Search Tags' . '</a></li>
	';
}
$__compilerVar2 .= '
	</ul>';
$__output .= $__compilerVar2;
unset($__compilerVar1, $__compilerVar2);
$__output .= '
	';
}
$__output .= '

	<dl class="ctrlUnit">
		<dt><label for="ctrl_tags">' . 'Tags' . ':</label></dt>
		<dd>
			<input type="text" name="tags" value="' . htmlspecialchars($tags, ENT_QUOTES, 'UTF-8') . '" class="textCtrl TagInput" data-extra-class="verticalShift" autofocus="autofocus" />
		</dd>
	</dl>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" value="' . 'Search' . '" accesskey="s" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />

	';
if ($tagCloud)
{
$__output .= '
		<div class="section">
			<h3 class="textHeading">' . 'Most Popular Tags' . '</h3>
			<ul class="tagCloud">
			';
foreach ($tagCloud AS $tagId => $tag)
{
$__output .= '
				<li><a href="' . XenForo_Template_Helper_Core::link('tags', $tag, array()) . '" class="tagCloudTag tagCloudTag' . htmlspecialchars($tagCloudLevels[$tagId], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($tag['tag'], ENT_QUOTES, 'UTF-8') . '</a></li>
			';
}
$__output .= '
			</ul>
		</div>
	';
}
$__output .= '
</form>';
