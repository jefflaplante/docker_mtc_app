<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($brmeOptions['enabled_description'])
{
$__output .= '
	';
if ($brmeOptions['description'] != ('fixed') && $metaData['description'])
{
$__output .= '
		<meta name="description" content="' . $metaData['description'] . '">
	';
}
else if ($brmeOptions['descriptionFixed'])
{
$__output .= '
		<meta name="description" content="' . $brmeOptions['descriptionFixed'] . '">
	';
}
$__output .= '
';
}
$__output .= '
';
if ($brmeOptions['enabled_keywords'])
{
$__output .= '
	';
if ($brmeOptions['keywords'] != ('fixed') && $metaData['keywords'])
{
$__output .= '
		<meta name="keywords" content="' . $metaData['keywords'] . '">
	';
}
else if ($brmeOptions['keywordsFixed'])
{
$__output .= '
		<meta name="keywords" content="' . $brmeOptions['keywordsFixed'] . '">
	';
}
$__output .= '
';
}
$__output .= '
';
if ($brmeOptions['enabled_author'])
{
$__output .= '
	';
if ($brmeOptions['author'] != ('fixed') && $metaData['author'])
{
$__output .= '
		<meta name="author" content="' . $metaData['author'] . '">
	';
}
else if ($brmeOptions['authorFixed'])
{
$__output .= '
		<meta name="author" content="' . $brmeOptions['authorFixed'] . '">
	';
}
$__output .= '
';
}
$__output .= '
';
if ($xenOptions['BRME_copyrightMetadata']['enabled_copyright'] && $xenOptions['BRME_copyrightMetadata']['copyright'])
{
$__output .= '
	<meta name="copyright" content="' . $xenOptions['BRME_copyrightMetadata']['copyright'] . '">
';
}
$__output .= '
';
if ($metaData['robot'])
{
$__output .= '
	<meta name="robots" content="' . $metaData['robot'] . '">
';
}
$__output .= '
';
if ($metaData['title'])
{
$__output .= '
	<meta property="og:title" content="' . $metaData['title'] . '" />
';
}
