<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($categories)
{
$__output .= '
	<div class="section">
	<div class="secondaryContent">
		<h3>' . 'categories' . '</h3>
		    <ul>
				<li class="' . ((!$selectedCategoryId) ? ('selected') : ('')) . '"><a href="' . XenForo_Template_Helper_Core::link('full:arcade', false, array()) . '">' . 'All' . '</a></li>
				
				';
foreach ($categories AS $category)
{
$__output .= '
					<li class="' . (($category['category_id'] == $selectedCategoryId) ? ('selected') : ('')) . '">
						<a href="' . XenForo_Template_Helper_Core::link('arcade/browse', $category, array()) . '"
						   ' . (($category['description']) ? ('title="' . XenForo_Template_Helper_Core::callHelper('striphtml', array(
'0' => $category['description']
)) . '" class="Tooltip"') : ('')) . '>
							' . htmlspecialchars($category['title'], ENT_QUOTES, 'UTF-8') . '
						</a>
					</li>
				';
}
$__output .= '
		    </ul>
		</div>
	</div>
';
}
$__output .= '
';
