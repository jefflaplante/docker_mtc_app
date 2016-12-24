<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '	<h3 class="sectionHeader">' . 'Style Options' . '</h3>
            
            <dl class="ctrlUnit">
            <dt></dt>
            <dd>
            <ul>
            <li class="uix_sticky_navigation"><label><input type="checkbox" name="uix_sticky_navigation" value="1" id="ctrl_uix_sticky_navigation" ' . (($visitor['uix_sticky_navigation']) ? ' checked="checked"' : '') . ' />
            ' . 'Enable Sticky Navigation' . '</label>
            </li>
            <li class="uix_sticky_userbar"><label><input type="checkbox" name="uix_sticky_userbar" value="1" id="ctrl_uix_sticky_userbar" ' . (($visitor['uix_sticky_userbar']) ? ' checked="checked"' : '') . ' />
            ' . 'Enable Sticky Userbar' . '</label>
            </li>
            <li class="uix_sticky_sidebar"><label><input type="checkbox" name="uix_sticky_sidebar" value="1" id="ctrl_uix_sticky_sidebar" ' . (($visitor['uix_sticky_sidebar']) ? ' checked="checked"' : '') . ' />
            ' . 'Enable Sticky Sidebar' . '</label>
            </li>
            <li class="uix_collapse_user_info"><label><input type="checkbox" name="uix_collapse_user_info" value="1" id="ctrl_uix_collapse_user_info" ' . (($visitor['uix_collapse_user_info']) ? ' checked="checked"' : '') . ' />
            ' . 'Collapse user information in posts' . '</label>
            </li>
            <li class="uix_collapse_signature"><label><input type="checkbox" name="uix_collapse_signature" value="1" id="ctrl_uix_collapse_signature" ' . (($visitor['uix_collapse_signature']) ? ' checked="checked"' : '') . ' />
            ' . 'Collapse Signatures' . '</label>
            </li>
            </ul>
            </dd>
            </dl>';
