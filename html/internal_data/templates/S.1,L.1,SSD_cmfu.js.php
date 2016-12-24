<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<script type="text/javascript">
$(function () {
    var currentMarkupInstance = $(\'#currentMarkup_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '\');

    var i;
    var toggleClasses = [\'bold\', \'italic\', \'underline\', \'overline\', \'strike\', \'border\'];
    var colourPickerProperties = [\'text_colour\', \'background_colour\', \'border_colour\'];

    

    function makeColourPicker(name) {
            $(\'#colorSelector_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_\' + name).ColorPicker({
            color: $(\'#ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_\' + name).val(),
            onShow: function (colpkr) {
                $(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                $(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
            	console.log(\'hey\');
                $(\'#colorSelectorIndicator_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_\' + name).css(\'backgroundColor\', \'#\' + hex);
                $(\'#ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_\' + name).val(\'#\' + hex);
            }
        });
    }

    for (i = 0; i < colourPickerProperties.length; ++i) {
	makeColourPicker(colourPickerProperties[i]);
    }
});
</script>';
