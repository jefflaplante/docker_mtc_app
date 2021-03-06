<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Deleted Resource';
$__output .= '
';
$__extraData['h1'] = '';
$__extraData['h1'] .= 'Deleted Resource';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('account/alerts', $user, array()), 'value' => htmlspecialchars($item['username'], ENT_QUOTES, 'UTF-8'));
$__output .= '

';
$this->addRequiredExternal('css', 'message');
$__output .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__output .= '

<div class="section">
	<dl class="subHeading pairsInline"><dt>' . 'resource' . ':</dt> <dd><span class="ugc">
	';
if ($item['content']['not_viewable'])
{
$__output .= '
		' . htmlspecialchars($item['content']['title'], ENT_QUOTES, 'UTF-8') . '
	';
}
else
{
$__output .= '
		<a href="' . XenForo_Template_Helper_Core::link('resources', $item['content'], array()) . '">' . htmlspecialchars($item['content']['title'], ENT_QUOTES, 'UTF-8') . '</a>
	';
}
$__output .= '
	<span></dd></dl>
	
	';
$__compilerVar1 = '';
$__compilerVar1 .= '<div class="messageInfo primaryContent">
	<div class="messageContent" style="max-height:350px; overflow:auto;">		
		<article>
			<blockquote class="messageText ugc baseHtml">
				' . $item['messageHtml'] . '
			</blockquote>
		</article>
		
		<div class="baseHtml ugc">
			<br /><aside>
			';
if ($item['content']['user_id'] > 0 AND $item['content']['username'])
{
$__compilerVar1 .= '
				<a href="' . XenForo_Template_Helper_Core::link('full:members', $item['content'], array()) . '" class="OverlayCloser">' . htmlspecialchars($item['content']['username'], ENT_QUOTES, 'UTF-8') . '</a><span class="muted">,</span>
			';
}
else if ($item['content']['username'])
{
$__compilerVar1 .= '
				' . htmlspecialchars($item['content']['username'], ENT_QUOTES, 'UTF-8') . ',
			';
}
else
{
$__compilerVar1 .= '	
				' . '(deleted member)' . ',
			';
}
$__compilerVar1 .= '
			' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($item['content']['date'],array(
'time' => htmlspecialchars($item['content']['date'], ENT_QUOTES, 'UTF-8'),
'class' => 'muted'
))) . '</aside>
		</div>
	</div>
</div>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
	
	<div class="sectionFooter overlayOnly">
		<a class="button primary OverlayCloser">' . 'Close' . '</a>
	</div>
</div>';
