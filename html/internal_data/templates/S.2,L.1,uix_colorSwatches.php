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
$__output .= '


';
