<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= htmlspecialchars($tag['tag'], ENT_QUOTES, 'UTF-8');
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:tags', false, array()), 'value' => 'Tags');
$__output .= '

';
$this->addRequiredExternal('css', 'search_results');
$__output .= '

<div class="pageNavLinkGroup">
	' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($perPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalResults, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'tags', $tag, array(), false, array())) . '
</div>

<div class="section sectionMain searchResults">
	<ol class="searchResultsList">
		';
$i = 0;
foreach ($results AS $result)
{
$i++;
$__output .= '
			' . $result . '
		';
}
$__output .= '
	</ol>
				
	<div class="sectionFooter searchResultSummary">
		<span class="resultCount">' . 'Showing results ' . XenForo_Template_Helper_Core::numberFormat($resultStartOffset, '0') . ' to ' . XenForo_Template_Helper_Core::numberFormat($resultEndOffset, '0') . ' of ' . XenForo_Template_Helper_Core::numberFormat($totalResults, '0') . '' . '</span>
	</div>
</div>

<div class="pageNavLinkGroup">
	<div class="linkGroup">
		';
if ($ignoredNames)
{
$__output .= '
			<a href="javascript:" class="muted JsOnly DisplayIgnoredContent Tooltip" title="' . 'Show hidden content by ' . XenForo_Template_Helper_Core::callHelper('implode', array(
'0' => $ignoredNames,
'1' => ', '
)) . '' . '">' . 'Show Ignored Content' . '</a>
		';
}
$__output .= '
	</div>

	' . XenForo_Template_Helper_Core::callHelper('pagenavhtml', array('public', htmlspecialchars($perPage, ENT_QUOTES, 'UTF-8'), htmlspecialchars($totalResults, ENT_QUOTES, 'UTF-8'), htmlspecialchars($page, ENT_QUOTES, 'UTF-8'), 'tags', $tag, array(), false, array())) . '
</div>';
