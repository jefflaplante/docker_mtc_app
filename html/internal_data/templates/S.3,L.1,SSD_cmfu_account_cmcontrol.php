<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'SSD_cmfu_colorpicker');
$__output .= '
';
$this->addRequiredExternal('css', 'SSD_cmfu');
$__output .= '
';
$this->addRequiredExternal('js', 'js/SSD/cmfu/colorpicker.js');
$__output .= '

<h3 class="sectionHeader">' . '' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' Markup' . '</h3>
<dl class="ctrlUnit">
    <dt>' . 'Your current ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' markup' . '</dt>
    <dd id="currentMarkup_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '">' . $currentMarkupRender . '</dd>
</dl>
';
if ($permissions['_textEffects'])
{
$__output .= '
<dl class="ctrlUnit OptOut">
    <dt>' . '' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' Font Effects' . '</dt>
    <dd>
        <ul>
            ';
if ($permissions['bold'])
{
$__output .= '
            <li><label>
                <input type="checkbox" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][bold]" value="1" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_bold" ' . (($userOptions['bold']) ? ' checked="checked"' : '') . ' /> ' . 'Apply <span style="font-weight: bold;">bold</span> effect to ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '' . '
            </label></li>
            ';
}
$__output .= '
            
            ';
if ($permissions['italic'])
{
$__output .= '
            <li><label>
                <input type="checkbox" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][italic]" value="1" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_italic" ' . (($userOptions['italic']) ? ' checked="checked"' : '') . ' /> ' . 'Apply <i>italic</i> effect to ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '' . '
            </label></li>
            ';
}
$__output .= '
            
            ';
if ($permissions['underline'])
{
$__output .= '
            <li><label>
                <input type="checkbox" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][underline]" value="1" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_underline" ' . (($userOptions['underline']) ? ' checked="checked"' : '') . ' /> ' . '<span style="text-decoration: underline;">Underline</span> ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '' . '
            </label></li>
            ';
}
$__output .= '
            
            ';
if ($permissions['strike'])
{
$__output .= '
            <li><label>
                <input type="checkbox" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][strike]" value="1" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_strike" ' . (($userOptions['strike']) ? ' checked="checked"' : '') . ' /> ' . '<span style="text-decoration: line-through;">Strike through</span> ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '' . '
            </label></li>
            ';
}
$__output .= '

            ';
if ($permissions['overline'])
{
$__output .= '
            <li><label>
                <input type="checkbox" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][overline]" value="1" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_overline" ' . (($userOptions['overline']) ? ' checked="checked"' : '') . ' /> ' . '<span style="text-decoration: overline;">Overline</span> ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '' . '
            </label></li>
            ';
}
$__output .= '

            ';
if ($permissions['text_colour'])
{
$__output .= '
            <li>
                <label>
                    <input type="checkbox" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][enable_text_colour]" value="1" class="Disabler" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_enable_text_colour" ' . (($userOptions['enable_text_colour']) ? ' checked="checked"' : '') . ' /> ' . 'Enable ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' colour' . '
                </label>
                <ul id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_enable_text_colour_Disabler">
                    <li>
                        <label>
                            <input type="hidden" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][text_colour]" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_text_colour" value="' . htmlspecialchars($userOptions['text_colour'], ENT_QUOTES, 'UTF-8') . '" />
                            <div id="colorWidget_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_text_colour" class="colorWidget">
                                <div id="colorSelector_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_text_colour" class="colorSelector"><div id="colorSelectorIndicator_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_text_colour" style="background-color: ' . htmlspecialchars($userOptions['text_colour'], ENT_QUOTES, 'UTF-8') . '"></div></div>
                                <div id="colorPickerHolder_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_text_colour" class="colorPickerHolder"" style="height: 0px; display: block;"></div>
                            </div>
                        </label>
                    </li>
                </ul>
            </li>
            ';
}
$__output .= '

            ';
if ($permissions['font_face'])
{
$__output .= '
            <li>
                <label>
                    <input type="checkbox" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][enable_font_face]" value="1" class="Disabler" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_enable_font_face" ' . (($userOptions['enable_font_face']) ? ' checked="checked"' : '') . ' /> ' . 'Enable ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' font' . '
                </label>
                <ul id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_enable_font_face_Disabler">
                    <li>
                        <label>
                            ' . '' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' font' . ': 
                            <select name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][font_face]" class="textCtrl autoSize">
                                ';
foreach ($fontList AS $fontId => $fontValue)
{
$__output .= '
                                    <option style="font-family: ' . $fontValue['fullname'] . '" value="' . htmlspecialchars($fontId, ENT_QUOTES, 'UTF-8') . '" ' . (($fontId == $userOptions['font_face']) ? ' selected="selected"' : '') . '>' . htmlspecialchars($fontValue['name'], ENT_QUOTES, 'UTF-8') . '</option>
                                ';
}
$__output .= '
                            </select>
                        </label>
                    </li>
                </ul>
            </li>
            ';
}
$__output .= '
        </ul>
    </dd>
</dl>
';
}
$__output .= '

';
if ($permissions['_bgBorders'])
{
$__output .= '
    <dl class="ctrlUnit OptOut">
        <dt>' . 'Background And Borders' . '</dt>
        <dd>
            <ul>
                ';
if ($permissions['background_colour'])
{
$__output .= '
                    <li>
                        <label>
                            <input type="checkbox" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][enable_background_colour]" value="1" class="Disabler" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_enable_background_colour" ' . (($userOptions['enable_background_colour']) ? ' checked="checked"' : '') . ' /> ' . 'Enable ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' background colour' . '
                        </label>
                        <ul id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_enable_background_colour_Disabler">
                            <li>
                                <label>
                                    <input type="hidden" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][background_colour]" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_background_colour" value="' . htmlspecialchars($userOptions['background_colour'], ENT_QUOTES, 'UTF-8') . '" />
                                    <div id="colorWidget_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_background_colour" class="colorWidget">
                                        <div id="colorSelector_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_background_colour" class="colorSelector"><div id="colorSelectorIndicator_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_background_colour" style="background-color: ' . htmlspecialchars($userOptions['background_colour'], ENT_QUOTES, 'UTF-8') . '"></div></div>
                                        <div id="colorPickerHolder_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_background_colour" class="colorPickerHolder"" style="height: 0px; display: block;"></div>
                                    </div>
                                </label>
                            </li>
                        </ul>
                    </li>
                ';
}
$__output .= '
                
                ';
if ($permissions['border'])
{
$__output .= '
                <li>
                    <label>
                        <input type="checkbox" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][border]" value="1" class="Disabler" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_border" ' . (($userOptions['border']) ? ' checked="checked"' : '') . ' /> ' . 'Enable ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' border' . '
                    </label>
                    <ul id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_border_Disabler">
                        ';
if ($permissions['border_colour'])
{
$__output .= '
                        <li>
                            <label>
                                <input type="checkbox" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][enable_border_colour]" value="1" class="Disabler" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_enable_border_colour" ' . (($userOptions['enable_border_colour']) ? ' checked="checked"' : '') . ' /> ' . 'Enable ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' border colour' . '
                            </label>
                            <ul id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_enable_border_colour_Disabler">
                                <li>
                                    <label>
                                        <input type="hidden" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][border_colour]" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_border_colour" value="' . htmlspecialchars($userOptions['border_colour'], ENT_QUOTES, 'UTF-8') . '" />
                                        <div id="colorWidget_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_border_colour" class="colorWidget">
                                            <div id="colorSelector_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_border_colour" class="colorSelector"><div id="colorSelectorIndicator_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_border_colour" style="background-color: ' . htmlspecialchars($userOptions['border_colour'], ENT_QUOTES, 'UTF-8') . '"></div></div>
                                            <div id="colorPickerHolder_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_border_colour" class="colorPickerHolder"" style="height: 0px; display: block;"></div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </li>
                        ';
}
$__output .= '

                        ';
if ($permissions['border_style'])
{
$__output .= '
                        <li>
                            <label>
                                <input type="checkbox" name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][enable_border_style]" value="1" class="Disabler" id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_enable_border_style" ' . (($userOptions['enable_border_style']) ? ' checked="checked"' : '') . ' /> ' . 'Enable ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' border style' . '
                            </label>
                            <ul id="ctrl_SSD_cmfu_options_' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '_enable_border_style_Disabler">
                                <li>
                                    <label>
                                        ' . 'Border Style' . ': 
                                        <select name="SSD_cmfu_options[' . htmlspecialchars($titleCode, ENT_QUOTES, 'UTF-8') . '][border_style]" class="textCtrl autoSize">
                                            ';
foreach ($borderList AS $borderId => $border)
{
$__output .= '
                                                <option value="' . htmlspecialchars($borderId, ENT_QUOTES, 'UTF-8') . '" ' . (($borderId == $userOptions['border_style']) ? ' selected="selected"' : '') . '>' . htmlspecialchars($border, ENT_QUOTES, 'UTF-8') . '</option>
                                            ';
}
$__output .= '
                                        </select>
                                    </label>
                                </li>
                            </ul>
                        </li>
                        ';
}
$__output .= '
                    </ul>
                </li>
                ';
}
$__output .= '
            </ul>
        </dd>
    </dl>
';
}
$__output .= '
';
$__compilerVar1 = '';
$__compilerVar1 .= '<script type="text/javascript">
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
$__output .= $__compilerVar1;
unset($__compilerVar1);
