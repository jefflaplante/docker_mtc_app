<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.natMenuLevel0
{
	padding-left: 0px;
}

.natMenuLevel1
{
	padding-left: 10px;
}

.natMenuLevel2
{
	padding-left: 20px;
}

.natMenuLevel3
{
	padding-left: 30px;
}

.natMenuLevel4
{
	padding-left: 40px;
}

.natMenuLevel5
{
	padding-left: 50px;
}

.natMenuLevel6
{
	padding-left: 60px;
}

.natMenuLevel7
{
	padding-left: 70px;
}

.natMenuLevel8
{
	padding-left: 80px;
}

.natMenuLevel9
{
	padding-left: 90px;
}

.natMenuLevel10
{
	padding-left: 100px;
}



/* STYLING TO MAKE COLUMN MENUS WORK */
div.natJSMenuColumns
{
	' . XenForo_Template_Helper_Core::styleProperty('secondaryContent.background') . '
	background-color: ' . XenForo_Template_Helper_Core::callHelper('rgba', array(
'0' => XenForo_Template_Helper_Core::styleProperty('secondaryContent.background-color'),
'1' => '0.96'
)) . ';
}

/* STYLING TO MAKE COLUMN MENUS WORK */
div.natJSMenuColumns ul
{
	float: left;
	border-bottom: 0px;
	background-color: transparent !important;
	max-height: none !important;
}





';
