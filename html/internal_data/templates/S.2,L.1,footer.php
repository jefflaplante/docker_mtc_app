<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '

';
$__compilerVar1 = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_adStylerOn') && XenForo_Template_Helper_Core::styleProperty('uix_adStylerColorOptions') && $uix_canUseStylerSwatches)
{
$__compilerVar1 .= '
<script>

	function changeColorOption(primary, secondary, tertiary, backgroundColor, backgroundImage, backgroundRepeat, backgroundSize){
	
	var
		primaryColor_backgroundColor 	= 	styleit_var[\'primaryColor_background-color\'],
		primaryColor_color 		= 	styleit_var[\'primaryColor_color\'],
		primaryColor_borderTopColor 	= 	styleit_var[\'primaryColor_border-top-color\'],
		primaryColor_borderColor	=	styleit_var[\'primaryColor_border-color\'],
		secondaryColor_backgroundColor 	= 	styleit_var[\'secondaryColor_background-color\'],
		tertiaryColor_color		=	styleit_var[\'tertiaryColor_color\'],
		tertiaryColor_backgroundColor	=	styleit_var[\'tertiaryColor_background-color\'],
		tertiaryColor_borderColor	=	styleit_var[\'tertiaryColor_border-color\'],
		tertiaryColor_borderTopColor	=	styleit_var[\'tertiaryColor_border-top-color\'];		

		
		/* 
		New function=> .change(ChangeObject, value)
		
		ChangeObject: contains the target and targetproperties. Its value should be similar to values inside data-si-change attributes inside tempaltes
		example of ChangeObject: \'{ "body":"color","h1": "color" }\' (JSON)
		
		value: the value
		*/

		var change1 = {};
		change1[\'body\'] = "background-color";
		$i.change(change1, backgroundColor);
		
		var change2 = {};
		change2[\'body\'] = \'background-image\';
		$i.change(change2, \'url(\' + styleit_var[\'ImgPath\'] + backgroundImage + \')\');
		
		var change3 = {};
		change3[\'body\'] = "background-repeat";
		$i.change(change3, backgroundRepeat);
		
		var change9 = {};
		change9[\'body\'] = "background-size";
		$i.change(change9, backgroundSize);
		
		var change4 = {};
		change4[primaryColor_backgroundColor] = "background-color";
		$i.change(change4, primary);
		
		var change5 = {};
		change5[primaryColor_color] = "color";
		$i.change(change5, primary);
		
		var change6 = {};
		change6[primaryColor_borderTopColor] = "border-top-color";
		$i.change(change6, primary); 
		
		var change7 = {};
		change7[primaryColor_borderColor] = "border-color";
		$i.change(change7, primary);
		
		var change8 = {};
		change8[secondaryColor_backgroundColor] = "background-color";
		$i.change(change8, secondary);
		
		var change9 = {};
		change9[tertiaryColor_color] = "color";
		$i.change(change9, tertiary);
		
		var change10 = {};
		change10[tertiaryColor_backgroundColor] = "background-color";
		$i.change(change10, tertiary);
		
		var change11 = {};
		change11[tertiaryColor_borderColor] = "border-color";
		$i.change(change11, tertiary);
		
		var change12 = {};
		change12[tertiaryColor_borderTopColor] = "border-top-color";
		$i.change(change12, tertiary);
		
		$i.save($i.buildCSS());
		
	}
	
	$(document).ready(function() {
		$(\'.uix_colorOptionsToggle\').on(\'click\', function(e) {
			e.preventDefault();
			$(\'.uix_adStylerColorOptions\').slideToggle();
		});
	});
</script>
<div class="uix_adStylerColorOptions">
	<div class="pageWidth">
		<div class="pageContent">
			<ul>
				<li><a style="background-color: #4a4e51" href="javascript: _styleit.reset(); _styleit.reset(); var currentPresetName = styleit_store.get(\'preset\') || opts.default_preset; _styleit.preset.change(currentPresetName);">' . 'Default' . '</a></li>
				<li><a style="background-color: #ed428f" href="javascript: changeColorOption(\'#ed428f\',\'#cc4682\',\'#363636\',\'\', \'/patterns/vertical_1.png\', \'repeat repeat\', \'auto\');">' . 'Lust' . '</a></li>
				<li><a style="background-color: #db4f21" href="javascript: changeColorOption(\'#db4f21\',\'#d44431\',\'#363636\',\'\', \'/patterns/dots_1.png\', \'repeat repeat\', \'auto\');">' . 'Gluttony' . '</a></li>
				<li><a style="background-color: #f29f33" href="javascript: changeColorOption(\'#f29f33\',\'#d9861a\',\'#363636\',\'\', \'/patterns/hash_1.png\', \'repeat repeat\', \'auto\');">' . 'Envy' . '</a></li>
				<li><a style="background-color: #62ae24" href="javascript: changeColorOption(\'#62ae24\',\'#578a2c\',\'#363636\',\'\', \'/patterns/diagonal_3.png\', \'repeat repeat\', \'auto\');">' . 'Greed' . '</a></li>
				<li><a style="background-color: #00a2cb" href="javascript: changeColorOption(\'#00a2cb\',\'#2290bf\',\'#363636\',\'\', \'/patterns/noise_1.png\', \'repeat repeat\', \'auto\');">' . 'Sloth' . '</a></li>
				<li><a style="background-color: #3d68b3" href="javascript: changeColorOption(\'#3d68b3\',\'#164185\',\'#363636\',\'\', \'/patterns/noise_2.png\', \'repeat repeat\', \'auto\');">' . 'Pride' . '</a></li>
				<li><a style="background-color: #5f459c" href="javascript: changeColorOption(\'#5f459c\',\'#44327a\',\'#363636\',\'\', \'/patterns/diagonal_2.png\', \'repeat repeat\', \'auto\');">' . 'Wrath' . '</a></li>
			</ul>
		</div>
	</div>
</div>
';
}
$__compilerVar1 .= '


';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '

';
$__compilerVar2 = '';
$__compilerVar2 .= '

';
$__compilerVar3 = '';
$__compilerVar3 .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_widthToggle') && $visitor['user_id'] && XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') > 100)
{
$__compilerVar3 .= '
					<dl class="choosers chooser_widthToggle uix_widthToggle_lower">
						<dt>' . 'Toggle Width' . '</dt>
						<dd><a href="javascript: uix.toggleWidth.toggle()" class=\'Tooltip\' title="' . 'Toggle Width' . '" rel="nofollow"><span class="uix_icon uix_widthToggle"></span></a></dd>
					</dl>
				';
}
$__compilerVar3 .= '
				';
if ($canChangeStyle OR $canChangeLanguage)
{
$__compilerVar3 .= '
					<dl class="choosers">
						';
if ($canChangeStyle)
{
$__compilerVar3 .= '
							<dt>' . 'Style' . '</dt>
							<dd><a href="' . XenForo_Template_Helper_Core::link('misc/style', '', array(
'redirect' => $requestPaths['requestUri']
)) . '" class="OverlayTrigger Tooltip" title="' . 'Style Chooser' . '" rel="nofollow">' . htmlspecialchars($visitorStyle['title'], ENT_QUOTES, 'UTF-8') . '</a></dd>
						';
}
$__compilerVar3 .= '
						';
if ($canChangeLanguage)
{
$__compilerVar3 .= '
							<dt>' . 'Language' . '</dt>
							<dd><a href="' . XenForo_Template_Helper_Core::link('misc/language', '', array(
'redirect' => $requestPaths['requestUri']
)) . '" class="OverlayTrigger Tooltip" title="' . 'Language Chooser' . '" rel="nofollow">' . htmlspecialchars($visitorLanguage['title'], ENT_QUOTES, 'UTF-8') . '</a></dd>
						';
}
$__compilerVar3 .= '
					</dl>
				';
}
$__compilerVar3 .= '
				';
if ($uix_adStyler_enabled)
{
$__compilerVar3 .= '
					';
if (!XenForo_Template_Helper_Core::styleProperty('uix_hideAdStylerTrigger') && ($uix_canUseStylerPanel || $uix_canUseStylerPresets))
{
$__compilerVar3 .= '
						<dl class="choosers chooser_AdStyler">
							<dt>' . 'AD Styler' . '</dt>
							<dd><a href="#" class=\'si-reveal-toggle Tooltip\' title="' . 'Open AD Styler' . '" rel="nofollow">' . 'AD Styler' . '</a></dd>
						</dl>
					';
}
$__compilerVar3 .= '
					';
if (XenForo_Template_Helper_Core::styleProperty('uix_adStylerColorOptions') && $uix_canUseStylerSwatches)
{
$__compilerVar3 .= '
						<dl class="choosers chooser_colorOptions">
							<dt>' . 'Color Options' . '</dt>
							<dd><a href="#" class=\'uix_colorOptionsToggle Tooltip\' title="' . 'Toggle Color Options' . '" rel="nofollow">' . 'Color Options' . '</a></dd>
						</dl>
					';
}
$__compilerVar3 .= '
				';
}
$__compilerVar3 .= '
				';
if (!XenForo_Template_Helper_Core::styleProperty('uix_hideFooterMenu'))
{
$__compilerVar3 .= '
				<ul class="footerLinks">
					';
$__compilerVar4 = '';
$__compilerVar4 .= '
						';
if ($homeLink)
{
$__compilerVar4 .= '<li><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="homeLink">' . 'Home' . '</a></li>';
}
$__compilerVar4 .= '
						';
if ($xenOptions['contactUrl']['type'] === ('default'))
{
$__compilerVar4 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('misc/contact', false, array()) . '" class="OverlayTrigger" data-overlayOptions="{&quot;fixed&quot;:false}">' . 'Contact Us' . '</a></li>
						';
}
else if ($xenOptions['contactUrl']['type'] === ('custom'))
{
$__compilerVar4 .= '
							<li><a href="' . htmlspecialchars($xenOptions['contactUrl']['custom'], ENT_QUOTES, 'UTF-8') . '" ' . (($xenOptions['contactUrl']['overlay']) ? ('class="OverlayTrigger" data-overlayOptions="' . '{' . '&quot;fixed&quot;:false}"') : ('')) . '>' . 'Contact Us' . '</a></li>
						';
}
$__compilerVar4 .= '
						<li><a href="' . XenForo_Template_Helper_Core::link('help', false, array()) . '">' . 'Help' . '</a></li>
					';
$__compilerVar3 .= $this->callTemplateHook('footer_links', $__compilerVar4, array());
unset($__compilerVar4);
$__compilerVar3 .= '
					';
$__compilerVar5 = '';
$__compilerVar5 .= '
						';
if ($tosUrl)
{
$__compilerVar5 .= '<li><a href="' . htmlspecialchars($tosUrl, ENT_QUOTES, 'UTF-8') . '">' . 'Terms and Rules' . '</a></li>';
}
$__compilerVar5 .= '
						';
if ($xenOptions['privacyPolicyUrl'])
{
$__compilerVar5 .= '<li><a href="' . htmlspecialchars($xenOptions['privacyPolicyUrl'], ENT_QUOTES, 'UTF-8') . '">' . 'Privacy Policy' . '</a></li>';
}
$__compilerVar5 .= '
					';
$__compilerVar3 .= $this->callTemplateHook('footer_links_legal', $__compilerVar5, array());
unset($__compilerVar5);
$__compilerVar3 .= '
					<li class="topLink"><a href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#XenForo"><i class="uix_icon uix_icon-jumpToTop"></i> <span class="uix_hide">' . 'Top' . '</span></a></li>
				</ul>
				';
}
$__compilerVar3 .= '
				
			';
if (trim($__compilerVar3) !== '')
{
$__compilerVar2 .= '

<div class="footer">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1 && !XenForo_Template_Helper_Core::styleProperty('uix_footer_forceCovered'))
{
$__compilerVar2 .= '<div class="pageWidth">';
}
$__compilerVar2 .= '
		<div class="pageContent">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_footer_forceCovered'))
{
$__compilerVar2 .= '<div class="pageWidth">';
}
$__compilerVar2 .= '
			
				' . $__compilerVar3 . '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__compilerVar2 .= '</div>';
}
$__compilerVar2 .= '
			<span class="helper"></span>
		</div>
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__compilerVar2 .= '</div>';
}
$__compilerVar2 .= '
</div>

<div id="uix_stickyFooterSpacer"></div>

';
}
unset($__compilerVar3);
$__compilerVar2 .= '


';
$__compilerVar6 = '';
if (!XenForo_Template_Helper_Core::styleProperty('uix_useStyleProperties_footer'))
{
$__compilerVar6 .= '
	
	';
$uix_showFooterColumns = '';
$uix_showFooterColumns .= htmlspecialchars($xenOptions['uix_showFooterColumns'], ENT_QUOTES, 'UTF-8');
$__compilerVar6 .= '
	';
$uix_numFooterColumns = '';
$uix_numFooterColumns .= ($xenOptions['uix_footer_col1'] + $xenOptions['uix_footer_col2'] + $xenOptions['uix_footer_col3'] + $xenOptions['uix_footer_col4']);
$__compilerVar6 .= '
	';
$uix_footer_col1 = '';
$uix_footer_col1 .= $xenOptions['uix_footer_col1'];
$__compilerVar6 .= '
	';
$uix_footer_col2 = '';
$uix_footer_col2 .= $xenOptions['uix_footer_col2'];
$__compilerVar6 .= '
	';
$uix_footer_col3 = '';
$uix_footer_col3 .= $xenOptions['uix_footer_col3'];
$__compilerVar6 .= '
	';
$uix_footer_col4 = '';
$uix_footer_col4 .= $xenOptions['uix_footer_col4'];
$__compilerVar6 .= '
	';
$uix_footer_col1_icon = '';
$uix_footer_col1_icon .= $xenOptions['uix_footer_col1_icon'];
$__compilerVar6 .= '
	';
$uix_footer_col2_icon = '';
$uix_footer_col2_icon .= $xenOptions['uix_footer_col2_icon'];
$__compilerVar6 .= '
	';
$uix_footer_col3_icon = '';
$uix_footer_col3_icon .= $xenOptions['uix_footer_col3_icon'];
$__compilerVar6 .= '
	';
$uix_footer_col4_icon = '';
$uix_footer_col4_icon .= $xenOptions['uix_footer_col4_icon'];
$__compilerVar6 .= '
	';
$uix_footer_col1_title = '';
$uix_footer_col1_title .= $xenOptions['uix_footer_col1_title'];
$__compilerVar6 .= '
	';
$uix_footer_col2_title = '';
$uix_footer_col2_title .= $xenOptions['uix_footer_col2_title'];
$__compilerVar6 .= '
	';
$uix_footer_col3_title = '';
$uix_footer_col3_title .= $xenOptions['uix_footer_col3_title'];
$__compilerVar6 .= '
	';
$uix_footer_col4_title = '';
$uix_footer_col4_title .= $xenOptions['uix_footer_col4_title'];
$__compilerVar6 .= '
	';
$uix_footer_col1_content = '';
$uix_footer_col1_content .= $xenOptions['uix_footer_col1_content'];
$__compilerVar6 .= '
	';
$uix_footer_col2_content = '';
$uix_footer_col2_content .= $xenOptions['uix_footer_col2_content'];
$__compilerVar6 .= '
	';
$uix_footer_col3_content = '';
$uix_footer_col3_content .= $xenOptions['uix_footer_col3_content'];
$__compilerVar6 .= '
	';
$uix_footer_col4_content = '';
$uix_footer_col4_content .= $xenOptions['uix_footer_col4_content'];
$__compilerVar6 .= '
	
';
}
else
{
$__compilerVar6 .= '
	
	';
$uix_showFooterColumns = '';
$uix_showFooterColumns .= XenForo_Template_Helper_Core::styleProperty('uix_showFooterColumns');
$__compilerVar6 .= '
	';
$uix_numFooterColumns = '';
$uix_numFooterColumns .= (XenForo_Template_Helper_Core::styleProperty('uix_footer_col1') + XenForo_Template_Helper_Core::styleProperty('uix_footer_col2') + XenForo_Template_Helper_Core::styleProperty('uix_footer_col3') + XenForo_Template_Helper_Core::styleProperty('uix_footer_col4'));
$__compilerVar6 .= '
	';
$uix_footer_col1 = '';
$uix_footer_col1 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1');
$__compilerVar6 .= '
	';
$uix_footer_col2 = '';
$uix_footer_col2 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2');
$__compilerVar6 .= '
	';
$uix_footer_col3 = '';
$uix_footer_col3 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3');
$__compilerVar6 .= '
	';
$uix_footer_col4 = '';
$uix_footer_col4 .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4');
$__compilerVar6 .= '
	';
$uix_footer_col1_icon = '';
$uix_footer_col1_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_icon');
$__compilerVar6 .= '
	';
$uix_footer_col2_icon = '';
$uix_footer_col2_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_icon');
$__compilerVar6 .= '
	';
$uix_footer_col3_icon = '';
$uix_footer_col3_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_icon');
$__compilerVar6 .= '
	';
$uix_footer_col4_icon = '';
$uix_footer_col4_icon .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_icon');
$__compilerVar6 .= '
	';
$uix_footer_col1_title = '';
$uix_footer_col1_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_title');
$__compilerVar6 .= '
	';
$uix_footer_col2_title = '';
$uix_footer_col2_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_title');
$__compilerVar6 .= '
	';
$uix_footer_col3_title = '';
$uix_footer_col3_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_title');
$__compilerVar6 .= '
	';
$uix_footer_col4_title = '';
$uix_footer_col4_title .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_title');
$__compilerVar6 .= '
	';
$uix_footer_col1_content = '';
$uix_footer_col1_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col1_content');
$__compilerVar6 .= '
	';
$uix_footer_col2_content = '';
$uix_footer_col2_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col2_content');
$__compilerVar6 .= '
	';
$uix_footer_col3_content = '';
$uix_footer_col3_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col3_content');
$__compilerVar6 .= '
	';
$uix_footer_col4_content = '';
$uix_footer_col4_content .= XenForo_Template_Helper_Core::styleProperty('uix_footer_col4_content');
$__compilerVar6 .= '
	
';
}
$__compilerVar6 .= '

';
if ($uix_showFooterColumns)
{
$__compilerVar6 .= '

';
$this->addRequiredExternal('css', 'uix_extendedFooter');
$__compilerVar6 .= '

<div id="uix_footer_columns">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1 && !XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_forceCovered'))
{
$__compilerVar6 .= '<div class="pageWidth">';
}
$__compilerVar6 .= '
		<div class="pageContent">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_forceCovered'))
{
$__compilerVar6 .= '<div class="pageWidth">';
}
$__compilerVar6 .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_top'))
{
$__compilerVar6 .= '
				';
$__compilerVar7 = '';
$__compilerVar7 .= '
						';
$__compilerVar8 = '';
$__compilerVar9 = '';
$__compilerVar8 .= $this->callTemplateHook('uix_footer_top', $__compilerVar9, array());
unset($__compilerVar9);
$__compilerVar7 .= $__compilerVar8;
unset($__compilerVar8);
$__compilerVar7 .= '
					';
if (trim($__compilerVar7) !== '')
{
$__compilerVar6 .= '
				<div class="uix_footer_topRow">
					' . $__compilerVar7 . '
				</div>
				';
}
unset($__compilerVar7);
$__compilerVar6 .= '
			';
}
$__compilerVar6 .= '
			
			
			<ul class="uix_footer_columns_container uix_footer_columns_' . htmlspecialchars($uix_numFooterColumns, ENT_QUOTES, 'UTF-8') . '">
				';
if ($uix_footer_col1)
{
$__compilerVar6 .= '<li class="uix_footer_columns_col1">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar10 = '';
$__compilerVar10 .= '
								';
$__compilerVar11 = '';
$__compilerVar10 .= $this->callTemplateHook('uix_footer_col1', $__compilerVar11, array());
unset($__compilerVar11);
$__compilerVar10 .= '
							';
if (trim($__compilerVar10) !== '')
{
$__compilerVar6 .= '
							' . $__compilerVar10 . '
						';
}
else
{
$__compilerVar6 .= '
							';
if ($uix_footer_col1_title)
{
$__compilerVar6 .= '<h3>
								';
if ($uix_footer_col1_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__compilerVar6 .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col1_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar6 .= ' 
								' . $uix_footer_col1_title . '
							</h3>';
}
$__compilerVar6 .= '
						
							' . $uix_footer_col1_content . '
						';
}
unset($__compilerVar10);
$__compilerVar6 .= '
				
					</div>
				</li>';
}
$__compilerVar6 .= '
				';
if ($uix_footer_col2)
{
$__compilerVar6 .= '<li class="uix_footer_columns_col2">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar12 = '';
$__compilerVar12 .= '
								';
$__compilerVar13 = '';
$__compilerVar12 .= $this->callTemplateHook('uix_footer_col2', $__compilerVar13, array());
unset($__compilerVar13);
$__compilerVar12 .= '
							';
if (trim($__compilerVar12) !== '')
{
$__compilerVar6 .= '
							' . $__compilerVar12 . '
						';
}
else
{
$__compilerVar6 .= '
							';
if ($uix_footer_col2_title)
{
$__compilerVar6 .= '<h3>
								';
if ($uix_footer_col2_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__compilerVar6 .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col2_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar6 .= ' 
								' . $uix_footer_col2_title . '
							</h3>';
}
$__compilerVar6 .= '
						
							' . $uix_footer_col2_content . '
						';
}
unset($__compilerVar12);
$__compilerVar6 .= '
				
					</div>
				</li>';
}
$__compilerVar6 .= '
				';
if ($uix_footer_col3)
{
$__compilerVar6 .= '<li class="uix_footer_columns_col3">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar14 = '';
$__compilerVar14 .= '
								';
$__compilerVar15 = '';
$__compilerVar14 .= $this->callTemplateHook('uix_footer_col3', $__compilerVar15, array());
unset($__compilerVar15);
$__compilerVar14 .= '
							';
if (trim($__compilerVar14) !== '')
{
$__compilerVar6 .= '
							' . $__compilerVar14 . '
						';
}
else
{
$__compilerVar6 .= '
							';
if ($uix_footer_col3_title)
{
$__compilerVar6 .= '<h3>
								';
if ($uix_footer_col3_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__compilerVar6 .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col3_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar6 .= ' 
								' . $uix_footer_col3_title . '
							</h3>';
}
$__compilerVar6 .= '
						
							' . $uix_footer_col3_content . '
						';
}
unset($__compilerVar14);
$__compilerVar6 .= '
				
					</div>
				</li>';
}
$__compilerVar6 .= '
				';
if ($uix_footer_col4)
{
$__compilerVar6 .= '<li class="uix_footer_columns_col4">
					<div class="uix_footer_columnWrapper">
			
						';
$__compilerVar16 = '';
$__compilerVar16 .= '
								';
$__compilerVar17 = '';
$__compilerVar16 .= $this->callTemplateHook('uix_footer_col4', $__compilerVar17, array());
unset($__compilerVar17);
$__compilerVar16 .= '
							';
if (trim($__compilerVar16) !== '')
{
$__compilerVar6 .= '
							' . $__compilerVar16 . '
						';
}
else
{
$__compilerVar6 .= '
							';
if ($uix_footer_col4_title)
{
$__compilerVar6 .= '<h3>
								';
if ($uix_footer_col4_icon && !XenForo_Template_Helper_Core::styleProperty('uix_footer_hideIcons'))
{
$__compilerVar6 .= '<i class="uix_icon ' . htmlspecialchars($uix_footer_col4_icon, ENT_QUOTES, 'UTF-8') . '"></i>';
}
$__compilerVar6 .= ' 
								' . $uix_footer_col4_title . '
							</h3>';
}
$__compilerVar6 .= '
						
							' . $uix_footer_col4_content . '
						';
}
unset($__compilerVar16);
$__compilerVar6 .= '
				
					</div>
				</li>';
}
$__compilerVar6 .= '
			</ul>
			
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_footerColumns_bottom'))
{
$__compilerVar6 .= '
				';
$__compilerVar18 = '';
$__compilerVar18 .= '
						';
$__compilerVar19 = '';
$__compilerVar20 = '';
$__compilerVar19 .= $this->callTemplateHook('uix_footer_bottom', $__compilerVar20, array());
unset($__compilerVar20);
$__compilerVar18 .= $__compilerVar19;
unset($__compilerVar19);
$__compilerVar18 .= '
					';
if (trim($__compilerVar18) !== '')
{
$__compilerVar6 .= '
				<div class="uix_footer_bottomRow">
					' . $__compilerVar18 . '
				</div>
				';
}
unset($__compilerVar18);
$__compilerVar6 .= '
			';
}
$__compilerVar6 .= '
			
		</div>
	</div>
</div>

';
}
$__compilerVar2 .= $__compilerVar6;
unset($__compilerVar6);
$__compilerVar2 .= '


<div class="footerLegal">
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1 && !XenForo_Template_Helper_Core::styleProperty('uix_copyright_forceCovered'))
{
$__compilerVar2 .= '<div class="pageWidth">';
}
$__compilerVar2 .= '
		<div class="pageContent">
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1 || XenForo_Template_Helper_Core::styleProperty('uix_copyright_forceCovered'))
{
$__compilerVar2 .= '<div class="pageWidth">';
}
$__compilerVar2 .= '
			<div id="copyright">
				' . XenForo_Template_Helper_Core::callHelper('copyright', array()) . ' ';
if (!$adCopyrightShown && !$thCopyrightShown)
{
$thCopyrightShown = '';
$thCopyrightShown .= '1';
$__compilerVar2 .= '<div id="thCopyrightNotice">Some XenForo functionality crafted by <a href="http://xf.themehouse.io/" title="Premium XenForo Add-ons" target="_blank">ThemeHouse</a>.</div>';
}
$__compilerVar2 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar2 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar2 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar2 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar2 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar2 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar2 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar2 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar2 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar2 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar2 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar2 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar2 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar2 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar2 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar2 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar2 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar2 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar2 .= '
				';
$__compilerVar21 = '';
$__compilerVar2 .= $this->callTemplateHook('uix_copyright', $__compilerVar21, array());
unset($__compilerVar21);
$__compilerVar2 .= '
			</div>
			';
$__compilerVar22 = '';
$__compilerVar2 .= $this->callTemplateHook('footer_after_copyright', $__compilerVar22, array());
unset($__compilerVar22);
$__compilerVar2 .= '
				
			';
if ($debugMode AND (($visitor['is_admin'] AND $xenOptions['uix_debugAdmin']) || !$xenOptions['uix_debugAdmin']))
{
$__compilerVar2 .= '
				';
$__compilerVar23 = '';
$__compilerVar23 .= '
						';
if ($page_time)
{
$__compilerVar23 .= '<dt>' . 'Timing' . ':</dt> <dd><a href="' . htmlspecialchars($debug_url, ENT_QUOTES, 'UTF-8') . '" rel="nofollow">' . '' . XenForo_Template_Helper_Core::numberFormat($page_time, '4') . ' seconds' . '</a></dd>';
}
$__compilerVar23 .= '
						';
if ($memory_usage)
{
$__compilerVar23 .= '<dt>' . 'Memory' . ':</dt> <dd>' . '' . XenForo_Template_Helper_Core::numberFormat(($memory_usage / 1024 / 1024), '3') . ' MB' . '</dd>';
}
$__compilerVar23 .= '
						';
if ($db_queries)
{
$__compilerVar23 .= '<dt>' . 'DB Queries' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($db_queries, '0') . '</dd>';
}
$__compilerVar23 .= '
					';
if (trim($__compilerVar23) !== '')
{
$__compilerVar2 .= '
					<dl class="pairsInline debugInfo" title="' . htmlspecialchars($controllerName, ENT_QUOTES, 'UTF-8') . '-&gt;' . htmlspecialchars($controllerAction, ENT_QUOTES, 'UTF-8') . (($viewName) ? (' (' . htmlspecialchars($viewName, ENT_QUOTES, 'UTF-8') . ')') : ('')) . '">
					' . $__compilerVar23 . '
					</dl>
				';
}
unset($__compilerVar23);
$__compilerVar2 .= '
			';
}
$__compilerVar2 .= '

			<span class="helper"></span>
		</div>
	</div>	
</div>

';
$__output .= $this->callTemplateHook('footer', $__compilerVar2, array());
unset($__compilerVar2);
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpToTopFixed') || XenForo_Template_Helper_Core::styleProperty('uix_jumpToBottomFixed'))
{
$__output .= '
	<div id="uix_jumpToFixed">
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpToTopFixed'))
{
$__output .= '
			<a href="' . XenForo_Template_Helper_Core::styleProperty('uix_jumpToTop_location') . '" title="' . 'Top' . '" data-position="top"><i class="uix_icon uix_icon-jumpToTop"></i></a>
		';
}
$__output .= '
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_jumpToBottomFixed'))
{
$__output .= '
			<a href="' . XenForo_Template_Helper_Core::styleProperty('uix_jumpToBottom_location') . '" title="' . 'Bottom' . '" data-position="bottom"><i class="uix_icon uix_icon-jumpToBottom"></i></a>
		';
}
$__output .= '
	</div>
';
}
