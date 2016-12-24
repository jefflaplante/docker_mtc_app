<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '	

';
if (!XenForo_Template_Helper_Core::styleProperty('uix_useStyleProperties_footer'))
{
$__output .= '
	
	';
$uix_showFooterColumns = '';
$uix_showFooterColumns .= htmlspecialchars($xenOptions['uix_showFooterColumns'], ENT_QUOTES, 'UTF-8');
$__output .= '
	';
$uix_numFooterColumns = '';
$uix_numFooterColumns .= ($xenOptions['uix_footer_col1'] + $xenOptions['uix_footer_col2'] + $xenOptions['uix_footer_col3'] + $xenOptions['uix_footer_col4']);
$__output .= '
	';
$uix_footerWidth = '';
$uix_footerWidth .= htmlspecialchars($xenOptions['uix_footerWidth'], ENT_QUOTES, 'UTF-8');
$__output .= '
	';
$uix_footer_col1_width = '';
$uix_footer_col1_width .= htmlspecialchars($xenOptions['uix_footer_col1_width'], ENT_QUOTES, 'UTF-8');
$__output .= '
	';
$uix_footer_col2_width = '';
$uix_footer_col2_width .= htmlspecialchars($xenOptions['uix_footer_col2_width'], ENT_QUOTES, 'UTF-8');
$__output .= '
	';
$uix_footer_col3_width = '';
$uix_footer_col3_width .= htmlspecialchars($xenOptions['uix_footer_col3_width'], ENT_QUOTES, 'UTF-8');
$__output .= '
	';
$uix_footer_col4_width = '';
$uix_footer_col4_width .= htmlspecialchars($xenOptions['uix_footer_col4_width'], ENT_QUOTES, 'UTF-8');
$__output .= '
	
';
}
else
{
$__output .= '
	
	';
$uix_showFooterColumns = '';
$uix_showFooterColumns .= XenForo_Template_Helper_Core::styleProperty('uix_showFooterColumns');
$__output .= '
	';
$uix_numFooterColumns = '';
$uix_numFooterColumns .= (XenForo_Template_Helper_Core::styleProperty('uix_footer_col1') + XenForo_Template_Helper_Core::styleProperty('uix_footer_col2') + XenForo_Template_Helper_Core::styleProperty('uix_footer_col3') + XenForo_Template_Helper_Core::styleProperty('uix_footer_col4'));
$__output .= '
	';
$uix_footerWidth = '';
$uix_footerWidth .= XenForo_Template_Helper_Core::styleProperty('uix_footerWidth');
$__output .= '
	';
$uix_footer_col1_width = '';
$uix_footer_col1_width .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_width');
$__output .= '
	';
$uix_footer_col2_width = '';
$uix_footer_col2_width .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_width');
$__output .= '
	';
$uix_footer_col3_width = '';
$uix_footer_col3_width .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_width');
$__output .= '
	';
$uix_footer_col4_width = '';
$uix_footer_col4_width .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_width');
$__output .= '
	
';
}
$__output .= '



';
if ($uix_showFooterColumns)
{
$__output .= '

	#uix_footer_columns .pageContent 
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_footer_columns_style') . '
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__output .= 'margin-top: 0;';
}
$__output .= '
	}
	
	#uix_footer_columns .uix_footer_columns_container {
		
	}
	
	.hasFlexbox #uix_footer_columns .uix_footer_columns_container {	
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		
		-ms-flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
		flex-wrap: wrap;
	}
	
	#uix_footer_columns .uix_footer_columns_container > li {
	
		vertical-align: top;
		box-sizing: border-box;
		
		' . XenForo_Template_Helper_Core::styleProperty('uix_footer_column_style') . '
	}
	.hasFlexbox #uix_footer_columns .uix_footer_columns_container > li {
		-ms-flex: 1 1 ' . (($uix_footerWidth) ? (htmlspecialchars($uix_footerWidth, ENT_QUOTES, 'UTF-8')) : ('290px')) . ';
		-webkit-flex: 1 1 ' . (($uix_footerWidth) ? (htmlspecialchars($uix_footerWidth, ENT_QUOTES, 'UTF-8')) : ('290px')) . ';
		flex: 1 1 ' . (($uix_footerWidth) ? (htmlspecialchars($uix_footerWidth, ENT_QUOTES, 'UTF-8')) : ('290px')) . ';
	}
	
	';
if ($uix_footer_col1_width)
{
$__output .= '
	
		.hasFlexbox #uix_footer_columns .uix_footer_columns_container > li.uix_footer_columns_col1 {
			-ms-flex-preferred-size: ' . htmlspecialchars($uix_footer_col1_width, ENT_QUOTES, 'UTF-8') . ';
			-webkit-flex-basis: ' . htmlspecialchars($uix_footer_col1_width, ENT_QUOTES, 'UTF-8') . ';
			flex-basis: ' . htmlspecialchars($uix_footer_col1_width, ENT_QUOTES, 'UTF-8') . ';
		}
		
	';
}
$__output .= '
	
	';
if ($uix_footer_col2_width)
{
$__output .= '
	
		.hasFlexbox #uix_footer_columns .uix_footer_columns_container > li.uix_footer_columns_col2 {
			-ms-flex-preferred-size: ' . htmlspecialchars($uix_footer_col2_width, ENT_QUOTES, 'UTF-8') . '
			-webkit-flex-basis: ' . htmlspecialchars($uix_footer_col2_width, ENT_QUOTES, 'UTF-8') . ';
			flex-basis: ' . htmlspecialchars($uix_footer_col2_width, ENT_QUOTES, 'UTF-8') . ';
		}
		
	';
}
$__output .= '
	
	';
if ($uix_footer_col3_width)
{
$__output .= '
	
		.hasFlexbox #uix_footer_columns .uix_footer_columns_container > li.uix_footer_columns_col3 {
			-ms-flex-preferred-size: ' . htmlspecialchars($uix_footer_col3_width, ENT_QUOTES, 'UTF-8') . ';
			-webkit-flex-basis: ' . htmlspecialchars($uix_footer_col3_width, ENT_QUOTES, 'UTF-8') . ';
			flex-basis: ' . htmlspecialchars($uix_footer_col3_width, ENT_QUOTES, 'UTF-8') . ';
		}
		
	';
}
$__output .= '
	
	';
if ($uix_footer_col4_width)
{
$__output .= '
	
		.hasFlexbox #uix_footer_columns .uix_footer_columns_container > li.uix_footer_columns_col4 {
			-ms-flex-preferred-size: ' . htmlspecialchars($uix_footer_col4_width, ENT_QUOTES, 'UTF-8') . ';
			-webkit-flex-basis: ' . htmlspecialchars($uix_footer_col4_width, ENT_QUOTES, 'UTF-8') . ';
			flex-basis: ' . htmlspecialchars($uix_footer_col4_width, ENT_QUOTES, 'UTF-8') . ';
		}
		
	';
}
$__output .= '

	#uix_footer_columns h3,
	#uix_footer_columns h3 a
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_footer_column_title_style') . ';
	}
	#uix_footer_columns .uix_footer_columns_container > li h3 > i
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_footer_icon_style') . '
	}
	#uix_footer_columns .uix_footer_columns_container > li a 
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_footer_link_style') . '
	}
	#uix_footer_columns .uix_footer_columns_container > li a:hover 
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_footer_linkHover_style') . '
	}
	#uix_footer_columns .uix_footer_columns_container > li ul.footerMenu 
	{
		margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	}
	#uix_footer_columns .uix_footer_columns_container > li ul.footerMenu > li > a 
	{
		' . XenForo_Template_Helper_Core::styleProperty('uix_footer_columns_listItem') . '
	}
	#uix_footer_columns .widget-container 
	{
		 background: none;
		 padding: 0;
		 margin: 0;
		 border: none;
		 border-radius: 0;
	}
	
	
	
	@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ')
	{
		.Responsive #uix_footer_columns .uix_footer_columns_container > li h3 {text-align: center;}
		.Responsive #uix_footer_columns .uix_footer_columns_container > li h3 > i {
			display: block;
			font-size: 48px;
			margin: 0;
			margin-bottom: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';
		}
		.Responsive #uix_footer_columns .uix_footer_columns_container {text-align: center;}
	}
	
';
}
$__output .= '






';
if (XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_top'))
{
$__output .= '
	.uix_footer_topRow {
		' . XenForo_Template_Helper_Core::styleProperty('uix_footer_topRow_style') . '
	}
	' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.uix_footer_topRow'
)) . '
';
}
$__output .= '







';
if (XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_bottom'))
{
$__output .= '
	.uix_footer_bottomRow {
		' . XenForo_Template_Helper_Core::styleProperty('uix_footer_bottomRow_style') . '
	}
	' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.uix_footer_bottomRow'
)) . '
';
}
