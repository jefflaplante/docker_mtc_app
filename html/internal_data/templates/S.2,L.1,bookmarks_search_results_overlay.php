<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('js', 'js/sortable/jquery.sortable.min.js');
$__output .= '
';
$this->addRequiredExternal('css', 'thread_multi_quote_overlay');
$__output .= '

<form class="section" id="MultiQuoteForm" data-form="' . htmlspecialchars($formId, ENT_QUOTES, 'UTF-8') . '" action="' . XenForo_Template_Helper_Core::link('bookmarks/insert-quotes', false, array()) . '" method="post">
	';
if ($bookmarks)
{
$__output .= '
		<h3 class="subHeading multiQuoteDragHeading">' . 'Drag messages up and down to rearrange the order for quoting.' . '</h3>
		<ol class="overlayScroll Sortable">
			';
foreach ($bookmarks AS $bookmarkId => $bookmark)
{
$__output .= '
				<li draggable="true" class="MultiQuoteItem">					
					<table>
					<tr>
						<td class="secondaryContent messageInfo">
							<input type="checkbox" name="bookmarkId[]" value="' . htmlspecialchars($bookmarkId, ENT_QUOTES, 'UTF-8') . '" class="MultiQuoteId" />
							' . htmlspecialchars($bookmark['content']['username'], ENT_QUOTES, 'UTF-8') . ', ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($bookmark['content']['date'],array(
'time' => htmlspecialchars($bookmark['content']['date'], ENT_QUOTES, 'UTF-8')
))) . '
						</td>
					</tr>
					<tr>
						<td class="primaryContent messageCell">
							<div class="messageArea">
								<div class="messageText">' . $bookmark['content']['message'] . '</div>
								<div class="messageGradient"></div>
							</div>
						</td>
					</tr>
					</table>
				</li>
			';
}
$__output .= '
		</ol>
		<div class="sectionFooter">
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
			<a class="button OverlayCloser JsOnly">' . 'Cancel' . '</a>
			<a class="button MultiQuote primary OverlayCloser AutoFocus"
				href="' . XenForo_Template_Helper_Core::link('bookmarks/insert-quotes', $thread, array()) . '"
				data-form="#QuickReply"
				data-inputs="#MultiQuoteForm input.MultiQuoteId:checked">' . 'Quote These Messages' . '</a>
				
			<a class="button primary MultiQuote OverlayCloser AutoFocus"
				href="' . XenForo_Template_Helper_Core::link('bookmarks/insert-quotes', $thread, array(
'type' => 'link'
)) . '"
				data-form="#QuickReply"
				data-inputs="#MultiQuoteForm input.MultiQuoteId:checked">' . 'Link To These Messages' . '</a>
		</div>
	';
}
else
{
$__output .= '
		<h3 class="subHeading multiQuoteDragHeading">' . 'Error' . '</h3>
		<p>' . 'No bookmarked content could be found for this search.' . '</p>
		<div class="sectionFooter">
			<dl class="ctrlUnit submitUnit">
				<dt></dt>
				<dd>
					<input type="reset" class="button OverlayCloser" value="' . 'Cancel' . '">
				</dd>
			</dl>
		</div>
	';
}
$__output .= '
</form>';
