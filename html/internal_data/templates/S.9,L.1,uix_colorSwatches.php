<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_adStylerOn') && XenForo_Template_Helper_Core::styleProperty('uix_adStylerColorOptions') && $uix_canUseStylerSwatches)
{
$__output .= '
<script>

	function changeColorOption(primary, secondary, tertiary, backgroundColor, backgroundImage, backgroundRepeat, backgroundSize){
	
		var
		primaryColor_backgroundColor 	= 	styleit_var[\'primaryColor_background-color\'],
		primaryColor_color 		= 	styleit_var[\'primaryColor_color\'],
		primaryColor_borderTopColor 	= 	styleit_var[\'primaryColor_border-top-color\'],
		primaryColor_borderColor	=	styleit_var[\'primaryColor_border-color\'],
		primaryColor_borderRightColor	=	styleit_var[\'primaryColor_border-right-color\'],
		primaryColor_borderBottomColor	=	styleit_var[\'primaryColor_border-bottom-color\'],
		
		tertiaryColor_color		=	styleit_var[\'tertiaryColor_color\'],
		tertiaryColor_backgroundColor	=	styleit_var[\'tertiaryColor_background-color\'];
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
		
		var change10 = {};
		change10[primaryColor_borderRightColor] = "border-right-color";
		$i.change(change10, primary); 
		
		var change11 = {};
		change11[primaryColor_borderBottomColor] = "border-bottom-color";
		$i.change(change11, tertiary); 
		
		var change12 = {};
		change12[tertiaryColor_color] = "color";
		$i.change(change12, tertiary); 
		var change13 = {};
		change13[tertiaryColor_backgroundColor] = "background-color";
		$i.change(change13, tertiary); 
		
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
				<li><a style="background-color: #ed428f" href="javascript: changeColorOption(\'#ed428f\',\'#cc4682\',\'#888\',\'\', \'/patterns/vertical_1.png\', \'repeat repeat\', \'auto\');">' . 'Lust' . '</a></li>
				<li><a style="background-color: #db4f21" href="javascript: changeColorOption(\'#db4f21\',\'#d44431\',\'#888\',\'\', \'/patterns/dots_1.png\', \'repeat repeat\', \'auto\');">' . 'Gluttony' . '</a></li>
				<li><a style="background-color: #f29f33" href="javascript: changeColorOption(\'#f29f33\',\'#d9861a\',\'#888\',\'\', \'/patterns/hash_1.png\', \'repeat repeat\', \'auto\');">' . 'Envy' . '</a></li>
				<li><a style="background-color: #62ae24" href="javascript: changeColorOption(\'#62ae24\',\'#578a2c\',\'#888\',\'\', \'/patterns/diagonal_3.png\', \'repeat repeat\', \'auto\');">' . 'Greed' . '</a></li>
				<li><a style="background-color: #00a2cb" href="javascript: changeColorOption(\'#00a2cb\',\'#2290bf\',\'#888\',\'\', \'/patterns/noise_1.png\', \'repeat repeat\', \'auto\');">' . 'Sloth' . '</a></li>
				<li><a style="background-color: #3d68b3" href="javascript: changeColorOption(\'#3d68b3\',\'#164185\',\'#888\',\'\', \'/patterns/noise_2.png\', \'repeat repeat\', \'auto\');">' . 'Pride' . '</a></li>
				<li><a style="background-color: #5f459c" href="javascript: changeColorOption(\'#5f459c\',\'#44327a\',\'#888\',\'\', \'/patterns/diagonal_2.png\', \'repeat repeat\', \'auto\');">' . 'Wrath' . '</a></li>
			</ul>
		</div>
	</div>
</div>
';
}
$__output .= '


';
