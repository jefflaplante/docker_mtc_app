<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
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
$uix_footer_col1 = '';
$uix_footer_col1 .= $xenOptions['uix_footer_col1'];
$__output .= '
	';
$uix_footer_col2 = '';
$uix_footer_col2 .= $xenOptions['uix_footer_col2'];
$__output .= '
	';
$uix_footer_col3 = '';
$uix_footer_col3 .= $xenOptions['uix_footer_col3'];
$__output .= '
	';
$uix_footer_col4 = '';
$uix_footer_col4 .= $xenOptions['uix_footer_col4'];
$__output .= '
	';
$uix_footer_col1_icon = '';
$uix_footer_col1_icon .= $xenOptions['uix_footer_col1_icon'];
$__output .= '
	';
$uix_footer_col2_icon = '';
$uix_footer_col2_icon .= $xenOptions['uix_footer_col2_icon'];
$__output .= '
	';
$uix_footer_col3_icon = '';
$uix_footer_col3_icon .= $xenOptions['uix_footer_col3_icon'];
$__output .= '
	';
$uix_footer_col4_icon = '';
$uix_footer_col4_icon .= $xenOptions['uix_footer_col4_icon'];
$__output .= '
	';
$uix_footer_col1_title = '';
$uix_footer_col1_title .= $xenOptions['uix_footer_col1_title'];
$__output .= '
	';
$uix_footer_col2_title = '';
$uix_footer_col2_title .= $xenOptions['uix_footer_col2_title'];
$__output .= '
	';
$uix_footer_col3_title = '';
$uix_footer_col3_title .= $xenOptions['uix_footer_col3_title'];
$__output .= '
	';
$uix_footer_col4_title = '';
$uix_footer_col4_title .= $xenOptions['uix_footer_col4_title'];
$__output .= '
	';
$uix_footer_col1_content = '';
$uix_footer_col1_content .= $xenOptions['uix_footer_col1_content'];
$__output .= '
	';
$uix_footer_col2_content = '';
$uix_footer_col2_content .= $xenOptions['uix_footer_col2_content'];
$__output .= '
	';
$uix_footer_col3_content = '';
$uix_footer_col3_content .= $xenOptions['uix_footer_col3_content'];
$__output .= '
	';
$uix_footer_col4_content = '';
$uix_footer_col4_content .= $xenOptions['uix_footer_col4_content'];
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
$uix_footer_col1 = '';
$uix_footer_col1 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1');
$__output .= '
	';
$uix_footer_col2 = '';
$uix_footer_col2 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2');
$__output .= '
	';
$uix_footer_col3 = '';
$uix_footer_col3 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3');
$__output .= '
	';
$uix_footer_col4 = '';
$uix_footer_col4 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4');
$__output .= '
	';
$uix_footer_col1_icon = '';
$uix_footer_col1_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_icon');
$__output .= '
	';
$uix_footer_col2_icon = '';
$uix_footer_col2_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_icon');
$__output .= '
	';
$uix_footer_col3_icon = '';
$uix_footer_col3_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_icon');
$__output .= '
	';
$uix_footer_col4_icon = '';
$uix_footer_col4_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_icon');
$__output .= '
	';
$uix_footer_col1_title = '';
$uix_footer_col1_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_title');
$__output .= '
	';
$uix_footer_col2_title = '';
$uix_footer_col2_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_title');
$__output .= '
	';
$uix_footer_col3_title = '';
$uix_footer_col3_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_title');
$__output .= '
	';
$uix_footer_col4_title = '';
$uix_footer_col4_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_title');
$__output .= '
	';
$uix_footer_col1_content = '';
$uix_footer_col1_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_content');
$__output .= '
	';
$uix_footer_col2_content = '';
$uix_footer_col2_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_content');
$__output .= '
	';
$uix_footer_col3_content = '';
$uix_footer_col3_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_content');
$__output .= '
	';
$uix_footer_col4_content = '';
$uix_footer_col4_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_content');
$__output .= '
	
';
}
$__output .= '

';
if ($uix_showFooterColumns)
{
$__output .= '

';
$this->addRequiredExternal('css', 'uix_extendedFooter');
$__output .= '

<div id="uix_footer_columns">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1 && !XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_forceCovered'))
{
$__output .= '<div class="pageWidth">';
}
$__output .= '
		<div class="pageContent">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_forceCovered'))
{
$__output .= '<div class="pageWidth">';
}
$__output .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_top'))
{
$__output .= '
				';
$__compilerVar1 = '';
$__compilerVar1 .= '
						';
$__compilerVar2 = '';
$__compilerVar3 = '';
$__compilerVar2 .= $this->callTemplateHook('uix_footer_top', $__compilerVar3, array());
unset($__compilerVar3);
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
$__compilerVar1 .= '
					';
if (trim($__compilerVar1) !== '')
{
$__output .= '
				<div class="uix_footer_topRow">
					' . $__compilerVar1 . '
				</div>
				';
}
unset($__compilerVar1);
$__output .= '
			';
}
$__output .= '
			
			
			<ul class="uix_footer_columns_container uix_footer_columns_' . htmlspecialchars($uix_numFooterColumns, ENT_QUOTES, 'UTF-8') . '">
				';
if ($uix_footer_col1)
{
$__output .= '<li class="uix_footer_columns_col1">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar4 = '';
$__compilerVar4 .= '
								';
$__compilerVar5 = '';
$__compilerVar4 .= $this->callTemplateHook('uix_footer_col1', $__compilerVar5, array());
unset($__compilerVar5);
$__compilerVar4 .= '
							';
if (trim($__compilerVar4) !== '')
{
$__output .= '
							' . $__compilerVar4 . '
						';
}
else
{
$__output .= '
							';
if ($uix_footer_col1_title)
{
$__output .= '<h3>
								';
if ($uix_footer_col1_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__output .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col1_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__output .= ' 
								' . $uix_footer_col1_title . '
							</h3>';
}
$__output .= '
						
							' . $uix_footer_col1_content . '
						';
}
unset($__compilerVar4);
$__output .= '
				
					</div>
				</li>';
}
$__output .= '
				';
if ($uix_footer_col2)
{
$__output .= '<li class="uix_footer_columns_col2">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar6 = '';
$__compilerVar6 .= '
								';
$__compilerVar7 = '';
$__compilerVar6 .= $this->callTemplateHook('uix_footer_col2', $__compilerVar7, array());
unset($__compilerVar7);
$__compilerVar6 .= '
							';
if (trim($__compilerVar6) !== '')
{
$__output .= '
							' . $__compilerVar6 . '
						';
}
else
{
$__output .= '
							';
if ($uix_footer_col2_title)
{
$__output .= '<h3>
								';
if ($uix_footer_col2_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__output .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col2_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__output .= ' 
								' . $uix_footer_col2_title . '
							</h3>';
}
$__output .= '
						
							' . $uix_footer_col2_content . '
						';
}
unset($__compilerVar6);
$__output .= '
				
					</div>
				</li>';
}
$__output .= '
				';
if ($uix_footer_col3)
{
$__output .= '<li class="uix_footer_columns_col3">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar8 = '';
$__compilerVar8 .= '
								';
$__compilerVar9 = '';
$__compilerVar8 .= $this->callTemplateHook('uix_footer_col3', $__compilerVar9, array());
unset($__compilerVar9);
$__compilerVar8 .= '
							';
if (trim($__compilerVar8) !== '')
{
$__output .= '
							' . $__compilerVar8 . '
						';
}
else
{
$__output .= '
							';
if ($uix_footer_col3_title)
{
$__output .= '<h3>
								';
if ($uix_footer_col3_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__output .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col3_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__output .= ' 
								' . $uix_footer_col3_title . '
							</h3>';
}
$__output .= '
						
							' . $uix_footer_col3_content . '
						';
}
unset($__compilerVar8);
$__output .= '
				
					</div>
				</li>';
}
$__output .= '
				';
if ($uix_footer_col4)
{
$__output .= '<li class="uix_footer_columns_col4">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar10 = '';
$__compilerVar10 .= '
								';
$__compilerVar11 = '';
$__compilerVar10 .= $this->callTemplateHook('uix_footer_col4', $__compilerVar11, array());
unset($__compilerVar11);
$__compilerVar10 .= '
							';
if (trim($__compilerVar10) !== '')
{
$__output .= '
							' . $__compilerVar10 . '
						';
}
else
{
$__output .= '
							';
if ($uix_footer_col4_title)
{
$__output .= '<h3>
								';
if ($uix_footer_col4_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__output .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col4_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__output .= ' 
								' . $uix_footer_col4_title . '
							</h3>';
}
$__output .= '
						
							' . $uix_footer_col4_content . '
						';
}
unset($__compilerVar10);
$__output .= '
				
					</div>
				</li>';
}
$__output .= '
			</ul>
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_bottom'))
{
$__output .= '
				';
$__compilerVar12 = '';
$__compilerVar12 .= '
						';
$__compilerVar13 = '';
$__compilerVar14 = '';
$__compilerVar13 .= $this->callTemplateHook('uix_footer_bottom', $__compilerVar14, array());
unset($__compilerVar14);
$__compilerVar12 .= $__compilerVar13;
unset($__compilerVar13);
$__compilerVar12 .= '
					';
if (trim($__compilerVar12) !== '')
{
$__output .= '
				<div class="uix_footer_bottomRow">
					' . $__compilerVar12 . '
				</div>
				';
}
unset($__compilerVar12);
$__output .= '
			';
}
$__output .= '
			
		</div>
	</div>
</div>

';
}
