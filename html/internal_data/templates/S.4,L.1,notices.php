<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($notices['block'])
{
$__output .= '

';
$this->addRequiredExternal('css', 'notices');
$__output .= '
';
$this->addRequiredExternal('css', 'panel_scroller');
$__output .= '
' . '

<div class="' . ((XenForo_Template_Helper_Core::styleProperty('scrollableNotices')) ? ('PanelScroller') : ('PanelScrollerOff')) . ' Notices" data-vertical="' . XenForo_Template_Helper_Core::styleProperty('noticeVertical') . '" data-speed="' . XenForo_Template_Helper_Core::styleProperty('noticeSpeed') . '" data-interval="' . XenForo_Template_Helper_Core::styleProperty('noticeInterval') . '">
	<div class="scrollContainer">
		<div class="PanelContainer">
			<ol class="Panels">
				';
foreach ($notices['block'] AS $noticeId => $notice)
{
$__output .= '
					';
$__compilerVar1 = '';
$__compilerVar1 .= $notice['message'];
$__compilerVar2 = '';
$__compilerVar2 .= '<li class="panel Notice DismissParent notice_' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($notice['visibility'], ENT_QUOTES, 'UTF-8') . '" data-notice="' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '">
	';
if ($notice['imageUrl'])
{
$__compilerVar2 .= '
		<div class="blockImage ' . htmlspecialchars($notice['display_image'], ENT_QUOTES, 'UTF-8') . '">
			<img src="' . htmlspecialchars($notice['imageUrl'], ENT_QUOTES, 'UTF-8') . '" alt="" />
		</div>
	';
}
$__compilerVar2 .= '
	<div class="' . (($notice['wrap']) ? ('baseHtml noticeContent') : ('')) . (($notice['imageUrl']) ? (' hasImage') : ('')) . '">' . $__compilerVar1 . '</div>
	
	';
if ($notice['dismissible'])
{
$__compilerVar2 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account/dismiss-notice', '', array(
'notice_id' => $noticeId
)) . '"
			title="' . 'Dismiss Notice' . '" class="DismissCtrl Tooltip" data-offsetx="7" data-tipclass="flipped">' . 'Dismiss Notice' . '</a>';
}
$__compilerVar2 .= '
</li>';
$__output .= $__compilerVar2;
unset($__compilerVar1, $__compilerVar2);
$__output .= '
				';
}
$__output .= '
			</ol>
		</div>
	</div>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('scrollableNotices') AND XenForo_Template_Helper_Core::numberFormat(count($notices['block']), '0') > 1)
{
$__output .= '<div class="navContainer">
		<span class="navControls Nav JsOnly">
			';
$i = 0;
foreach ($notices['block'] AS $noticeId => $notice)
{
$i++;
$__output .= '
				<a id="n' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '" href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#n' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '"' . (($i == 1) ? (' class="current"') : ('')) . '>
					<span class="arrow"><span></span></span>
					<!--' . htmlspecialchars($i, ENT_QUOTES, 'UTF-8') . ' -->' . htmlspecialchars($notice['title'], ENT_QUOTES, 'UTF-8') . '</a>
			';
}
$__output .= '
		</span>
	</div>';
}
$__output .= '
</div>

';
}
$__output .= '

';
if ($notices['floating'])
{
$__output .= '
	';
$this->addRequiredExternal('css', 'notices');
$__output .= '
	
	<div class="FloatingContainer Notices">
		';
foreach ($notices['floating'] AS $noticeId => $notice)
{
$__output .= '
			<div class="DismissParent Notice notice_' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($notice['visibility'], ENT_QUOTES, 'UTF-8') . '" data-notice="' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '" data-delay-duration="' . htmlspecialchars($notice['delay_duration'], ENT_QUOTES, 'UTF-8') . '" data-display-duration="' . htmlspecialchars($notice['display_duration'], ENT_QUOTES, 'UTF-8') . '" data-auto-dismiss="' . htmlspecialchars($notice['auto_dismiss'], ENT_QUOTES, 'UTF-8') . '">
				<div class="floatingItem ' . (($notice['display_style'] == ('custom')) ? (htmlspecialchars($notice['css_class'], ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($notice['display_style'], ENT_QUOTES, 'UTF-8'))) . '">
					';
if ($notice['dismissible'])
{
$__output .= '
						<a href="' . XenForo_Template_Helper_Core::link('account/dismiss-notice', '', array(
'notice_id' => $noticeId
)) . '"
							title="' . 'Dismiss Notice' . '" class="DismissCtrl Tooltip" data-offsetx="7" data-tipclass="flipped">' . 'Dismiss Notice' . '</a>';
}
$__output .= '
					';
if ($notice['imageUrl'])
{
$__output .= '
						<div class="floatingImage ' . htmlspecialchars($notice['display_image'], ENT_QUOTES, 'UTF-8') . '">
							<img src="' . htmlspecialchars($notice['imageUrl'], ENT_QUOTES, 'UTF-8') . '" alt="" />
						</div>
					';
}
$__output .= '
					<div class="' . (($notice['imageUrl']) ? ('hasImage') : ('')) . ' ' . (($notice['wrap']) ? ('baseHtml noticeContent') : ('')) . '">
						' . $notice['message'] . '
					</div>
				</div>
			</div>
		';
}
$__output .= '
	</div>
';
}
