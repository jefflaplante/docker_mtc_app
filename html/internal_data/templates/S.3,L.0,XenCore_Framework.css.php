<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_enable'))
{
$__output .= '
';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_mode_breadcrumb'))
{
$__output .= '
.breadcrumb {
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ' !important;
}
.breadmode {
border: 0px solid ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_border') . ' !important;
background: none !important;
}
.nodeList .category .category_toggle_container a.toggle_arrow.collapse, 
.nodeList .category .category_toggle_container a.toggle_arrow.collapsed {
cursor: pointer;
}
.sidebar_mini {
background: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_bloc') . ';
font-family: FontAwesome;
display: inline-block;
line-height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ';
width: 30px;
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ';
text-align: center;
border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_border') . ';
border-radius: 5px;
float: right;
margin-left: 5px;
position: relative;
overflow: hidden;
}
.sidebar_mini a {
display: inline-block;
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ';
-webkit-transition: all .40s ease-in-out;
-moz-transition: all .40s ease-in-out;
-ms-transition: all .40s ease-in-out;
-o-transition: all .40s ease-in-out;
}
.sidebar_mini a:before {
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_font_awesome_hide') . '";
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_hide') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_hide') . ';
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_opacity_hide') . ';
-webkit-transition: all 2s ease; 
-moz-transition: all 2s ease; 
-ms-transition: all 2s ease; 
-o-transition: all 2s ease; 
transition: all 2s ease; 
}
.sidebar_mini.sidebar_expand a:before {
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_font_awesome_show') . '";
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_show') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_show') . ';
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_opacity_show') . ';
}
.sidebar_mini Tooltip .sidebar_expand {
display: inline-block;
font-family: FontAwesome;
}
.mainContainer.no_sidebar,
.mainContent.no_sidebar { 
margin-right: 0;
}
';
}
else
{
$__output .= '
.nodeList .category .category_toggle_container a.toggle_arrow.collapse, 
.nodeList .category .category_toggle_container a.toggle_arrow.collapsed {
cursor: pointer;
}
.sidebar_mini {
background: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_bloc') . ';
font-family: FontAwesome;
display: inline-block;
line-height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ';
width: 30px;
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ';
text-align: center;
border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_border') . ';
border-radius: 5px;
float: right;
margin-left: 5px;
position: relative;
overflow: hidden;
box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05);
}
.sidebar_mini a {
display: inline-block;
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ';
-webkit-transition: all .40s ease-in-out;
-moz-transition: all .40s ease-in-out;
-ms-transition: all .40s ease-in-out;
-o-transition: all .40s ease-in-out;
}
.sidebar_mini a:before {
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_font_awesome_hide') . '";
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_hide') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_hide') . ';
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_opacity_hide') . ';
-webkit-transition: all 2s ease; 
-moz-transition: all 2s ease; 
-ms-transition: all 2s ease; 
-o-transition: all 2s ease; 
transition: all 2s ease; 
}
.sidebar_mini.sidebar_expand a:before {
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_font_awesome_show') . '";
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_show') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_show') . ';
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_opacity_show') . ';
}
.sidebar_mini Tooltip .sidebar_expand {
display: inline-block;
font-family: FontAwesome;
}
.mainContainer.no_sidebar,
.mainContent.no_sidebar { 
margin-right: 0;
}
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
.sidebar_mini {
display: none;
}}
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
.sidebar_mini {
display: none;
}}
';
}
$__output .= '

';
}
$__output .= '
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_cat_enable'))
{
$__output .= '
.nodeList .category .category_toggle_container { 
display: block;
position: absolute;
right: 5px;
} 
.nodeList .category .category_toggle_container a.toggle_arrow.collapsed {  
display: inline-block;
font-family: FontAwesome;
position: absolute;
top: 50%;
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_cat_size_show') . ';
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_cat_color_show') . ';
-webkit-font-smoothing: antialiased;
right: 10px;
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_cat_opcity_show') . ';
-webkit-transition: all 2s ease; 
-moz-transition: all 2s ease; 
-ms-transition: all 2s ease; 
-o-transition: all 2s ease; 
transition: all 2s ease;
cursor: pointer;
}
.nodeList .category .category_toggle_container a.toggle_arrow.collapsed:before { 
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_cat_font_awesome_show') . '";
}
.nodeList .category .category_toggle_container a.toggle_arrow.collapse { 
display: inline-block;
font-family: FontAwesome;
position: absolute;
top: 50%;
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_cat_size_hide') . ';
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_cat_color_hide') . ';
-webkit-font-smoothing: antialiased;
right: 10px;
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_cat_opcity_hide') . ';
-webkit-transition: all 2s ease; 
-moz-transition: all 2s ease; 
-ms-transition: all 2s ease; 
-o-transition: all 2s ease; 
transition: all 2s ease;
cursor: pointer;
}
.nodeList .category .category_toggle_container a.toggle_arrow.collapse:before { 
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_cat_font_awesome_hide') . '";
}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_avatar_cercle'))
{
$__output .= '
.messageUserBlock div.avatarHolder .onlineMarker {
top: 21px !important;
left: 26px !important;
}
.profilePage .avatar .img {
padding: 0 !important;
border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('xc_avatar_cercle_border') . ';
}
.memberCard .avatarCropper img, .memberCard .avatarCropper {
border-radius: 0 !important;
padding: 0 !important;
}
.avatar img, .avatar .img, .avatarCropper, .avatarScaler img {
border-radius: 100px !important;
background-position: 0 0 !important;
border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('xc_avatar_cercle_border') . ';
padding: 2px !important;
}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_left_sidebar'))
{
$__output .= '
.mainContainer
{
float: right;
margin-left: -' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + 10) . 'px !important;
margin-right: 0px;
width: 100%;
}
.mainContent
{
margin-left: ' . (XenForo_Template_Helper_Core::styleProperty('sidebar.width') + 10) . 'px;
margin-right: 0px;
}
.sidebar
{
font-size: 11px;
float: left;
width: 275px;
}

';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_enable'))
{
$__output .= '
';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_mode_breadcrumb'))
{
$__output .= '
.breadcrumb {
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ' !important;
}
.breadmode {
border: 0px solid ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_border') . ' !important;
background: none !important;
}
.nodeList .category .category_toggle_container a.toggle_arrow.collapse, 
.nodeList .category .category_toggle_container a.toggle_arrow.collapsed {
cursor: pointer;
}
.sidebar_mini {
background: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_bloc') . ';
font-family: FontAwesome;
display: inline-block;
line-height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ';
width: 30px;
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ';
text-align: center;
border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_border') . ';
border-radius: 5px;
float: left;
position: relative;
overflow: hidden;
}
.sidebar_mini a {
display: inline-block;
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ';
-webkit-transition: all .40s ease-in-out;
-moz-transition: all .40s ease-in-out;
-ms-transition: all .40s ease-in-out;
-o-transition: all .40s ease-in-out;
}
.sidebar_mini a:before {
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_font_awesome_hide') . '";
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_hide') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_hide') . ';
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_opacity_hide') . ';
-webkit-transition: all 2s ease; 
-moz-transition: all 2s ease; 
-ms-transition: all 2s ease; 
-o-transition: all 2s ease; 
transition: all 2s ease; 
}
.sidebar_mini.sidebar_expand a:before {
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_font_awesome_show') . '";
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_show') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_show') . ';
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_opacity_show') . ';
}
.sidebar_mini Tooltip .sidebar_expand {
display: inline-block;
font-family: FontAwesome;
}
.mainContainer.no_sidebar,
.mainContent.no_sidebar { 
margin-left: 0;
}
';
}
else
{
$__output .= '
.nodeList .category .category_toggle_container a.toggle_arrow.collapse, 
.nodeList .category .category_toggle_container a.toggle_arrow.collapsed {
cursor: pointer;
}
.sidebar_mini {
background: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_bloc') . ';
font-family: FontAwesome;
display: inline-block;
line-height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ';
width: 30px;
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ';
text-align: center;
border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_border') . ';
border-radius: 5px;
float: left;
margin-right: 5px;
margin-left: 0px !important;
position: relative;
overflow: hidden;
-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05);
box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05);
}
.sidebar_mini a {
display: inline-block;
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_bloc') . ';
-webkit-transition: all .40s ease-in-out;
-moz-transition: all .40s ease-in-out;
-ms-transition: all .40s ease-in-out;
-o-transition: all .40s ease-in-out;
}
.sidebar_mini a:before {
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_font_awesome_hide') . '";
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_hide') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_hide') . ';
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_opacity_hide') . ';
-webkit-transition: all 2s ease; 
-moz-transition: all 2s ease; 
-ms-transition: all 2s ease; 
-o-transition: all 2s ease; 
transition: all 2s ease; 
}
.sidebar_mini.sidebar_expand a:before {
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_font_awesome_show') . '";
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_color_show') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_size_show') . ';
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_opacity_show') . ';
}
.sidebar_mini Tooltip .sidebar_expand {
display: inline-block;
font-family: FontAwesome;
}
.mainContainer.no_sidebar,
.mainContent.no_sidebar { 
margin-left: 0;
}
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
.sidebar_mini {
display: none;
}}
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
.sidebar_mini {
display: none;
}}
';
}
$__output .= '
';
}
$__output .= '
';
}
$__output .= '
';
}
$__output .= '



';
if (XenForo_Template_Helper_Core::styleProperty('xc_title_node_center'))
{
$__output .= '
.nodeList .categoryStrip .nodeTitle
{
text-align: center;
}
.nodeList .categoryStrip .nodeDescription
{
text-align: center;
}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_hide_title_board'))
{
$__output .= '
#content.forum_list .titleBar { 
display: none; 
}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_separate_sticky_threads'))
{
$__output .= '
.separate_thread_important {
background-color: ' . XenForo_Template_Helper_Core::styleProperty('xc_separate_thread_sticky_color') . ';
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_separate_thread_sticky_font_color') . ';
Font-size: 11px;
border-top-style: none;
border-left-style: none;
border-right-style: none;
padding: 0px;
padding-left: ' . XenForo_Template_Helper_Core::styleProperty('xc_separate_thread_sticky_padding_left') . ';
margin: 0px;
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_separate_thread_sticky_size') . ';
line-height:' . XenForo_Template_Helper_Core::styleProperty('xc_separate_thread_sticky_size') . ';
}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_hide_rss_icon'))
{
$__output .= '
.node .tinyIcon {
display: none !important;
}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_fade_thread_lock'))
{
$__output .= '
.locked {
opacity:' . XenForo_Template_Helper_Core::styleProperty('xc_fade_thread_lock_opacity') . ';
}
.locked.sticky {
opacity: 1.0;
}
';
}
$__output .= '



';
if (XenForo_Template_Helper_Core::styleProperty('xc_hide_breadcrumbs'))
{
$__output .= '
.forum_list .breadBoxTop { 
display: none;
} 
.forum_list .breadBoxBottom nav { 
display: none; 
} 
.forum_list .breadBoxTop, .breadBoxBottom { 
padding: 0; 
padding-botom: 10px;
} 
.forum_list .hide_breadcrumb_space {
padding: 5px;
}
';
}
$__output .= '



';
if (XenForo_Template_Helper_Core::styleProperty('xc_subforums_enhanced'))
{
$__output .= '
.subForumList li.node .nodeTitle:before {
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_subforums_fa') . '";
display: inline-block;
font-family: FontAwesome;
padding-right: 7px;
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_subforums_fa_size') . ';
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_subforums_fa_color') . ';
}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_mini_avatar_navbar'))
{
$__output .= '
.navTab .accountPopup img {
float: left;
width: ' . XenForo_Template_Helper_Core::styleProperty('xc_mini_avatar_navbar_size') . ';
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_mini_avatar_navbar_size') . ';
margin-right: 10px;
margin-top: ' . XenForo_Template_Helper_Core::styleProperty('xc_mini_avatar_navbar_vertical') . ';
padding: 1px;
border: 1px solid #515151;
border-radius: 2px;   
}
.navTabs .navTab.account .navLink .accountUsername
{
display: inline-block;
}
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_mini_avatar_moderator_bar'))
{
$__output .= '
.mini_moderator_bar {
float: left; 
width: 18px; 
margin-right: 5px; 
border-radius: 2px;
}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_info_extra_fa'))
{
$__output .= '
.info_extra_fa {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_info_extra_fa_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_info_extra_fa_size') . ' !important;
}
.extraUserInfo .pairsJustified dt, .extraUserInfo .pairsJustified dd {
float: none !important;
text-align: center !important;
margin-right: 0px !important;
}
.messageUserBlock .extraUserInfo {
font-size: 12px !important;
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_info_extra_fa_color') . ' !important;
background-color: #333 !important;
margin: 5px 5px !important;
border: 1px solid #535353 !important;
border-radius: 3px !important;
overflow: hidden !important;
}
.messageUserBlock .extraUserInfo dl {
float: left !important;
width: 33% !important;
overflow: hidden !important;
}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_replace_home_text'))
{
$__output .= '
.replace_home_text {
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_replace_home_text_size') . ' !important;
line-height:' . XenForo_Template_Helper_Core::styleProperty('xc_replace_home_text_size') . ' !important;
}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_replace_home_text_navbar'))
{
$__output .= '
.replace_home_text_navbar_size {
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_replace_home_text_navbar_size') . ' !important;
line-height:' . XenForo_Template_Helper_Core::styleProperty('xc_replace_home_text_navbar_size') . ' !important;
}
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_nodes_columns'))
{
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') {
.node .tinyIcon {display: none !important;}
.nodeList .node.level_2 .nodeLastPost {width: 127px !important;padding-right: 0 !important;}
}
';
}
$__output .= '

@media (min-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
' . XenForo_Template_Helper_Core::callHelper('clearfix', array(
'0' => '.nodeList'
)) . '
.nodeList .node.level_2 {float: left; width: 50%;min-height: 80px;}
.nodeList .categoryForumNodeInfo, .nodeList .forumNodeInfo, .nodeList .pageNodeInfo, .nodeList .linkNodeInfo { min-height: 80px;}
.nodeList .node.level_2:nth-child(odd) {clear: left;}
.nodeList .node.level_2 .nodeLastPost {position: static;width: 160px;float: right;margin-top: -54px;padding-right: 24px;}
.nodeList .node.level_2 .nodeText {margin-right: 26px;margin-top:20px;}
.nodeList .node.level_2 .nodeControls {right: -10px;}
.nodeList .node.level_2:last-child:nth-child(odd) {width: 100%;}
.nodeList .node.level_2:last-child:nth-child(odd) .nodeText {margin-right: 270px;margin-top: 20px}
.nodeList .node.level_2:last-child:nth-child(odd) .nodeLastPost {width: 210px;margin-top: -19px;position: absolute;padding-right: 10px;}
.nodeList .node.level_2:last-child:nth-child(odd) .nodeControls {right: 242px;}
.node .subForumList, .subForumsPopup a.PopupControl {display: none !important;}
}

.node .subForumList, .subForumsPopup a.PopupControl {
display: none !important;
}
';
}
$__output .= '    
    
    
';
if (XenForo_Template_Helper_Core::styleProperty('xc_breadcrumb_height'))
{
$__output .= '
.breadcrumb, .breadcrumb .crust a.crumb > span, .breadcrumb .crust a.crumb {
height: ' . XenForo_Template_Helper_Core::styleProperty('xc_breadcrumb_height') . ' !important;
line-height: ' . XenForo_Template_Helper_Core::styleProperty('xc_breadcrumb_height') . ' !important;
} 
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_remove_separator'))
{
$__output .= '
.breadcrumb .crust a.crumb:after {
display: none;
}
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_max_page_width'))
{
$__output .= '
.pageWidth {
max-width: ' . XenForo_Template_Helper_Core::styleProperty('xc_max_page_width') . ';
}
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_text_logo'))
{
$__output .= '
.xc_logo_text {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_logo_text_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_logo_text_size') . ';
font-family: ' . XenForo_Template_Helper_Core::styleProperty('xc_logo_text_font') . ';
}
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_secondary_text_logo'))
{
$__output .= '
.xc_logo_secondary_text {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_logo_secondary_text_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_logo_secondary_text_size') . ';
font-family: ' . XenForo_Template_Helper_Core::styleProperty('xc_logo_secondary_text_font') . ';
margin-top: ' . XenForo_Template_Helper_Core::styleProperty('xc_logo_secondary_text_adjustment') . ';
float: right;
margin-left: 5px;
}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
.xc_logo_secondary_text, .xc_icon_before_logo_fa {
display: none;
}}
';
}
$__output .= '
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_icon_before_logo'))
{
$__output .= '
.xc_icon_before_logo_fa {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_icon_before_logo_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_icon_before_logo_size') . ';
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_icon_before_logo_opacity') . ';
margin-right: 5px;
padding-left: 1px;
margin-top: ' . XenForo_Template_Helper_Core::styleProperty('xc_icon_before_logo_adjustment') . ';
float: left;
}
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_navigation'))
{
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') {
.sticky-wrapper.is-sticky .image_navbar {
  display: none;
}}
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
.sticky-wrapper.is-sticky .image_navbar {
  display: none;
}}
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
.sticky-wrapper.is-sticky .image_navbar {
  display: none;
}}
';
}
$__output .= '

.sticky-wrapper.is-sticky #navigation { -webkit-transition: opacity 1s ease; -moz-transition: opacity 1s ease; -ms-transition: opacity 1s ease; -o-transition: opacity 1s ease; transition: opacity 1s ease;}
.sticky-wrapper.is-sticky #navigation { top:0px; left:0px; right: 0; z-index:7499; opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_sticky_navigation_opacity') . ';}
.sticky-wrapper.is-sticky #navigation:hover { opacity: 1; -webkit-transition: opacity 0.500s ease-in; -moz-transition: opacity 0.500s ease-in; -ms-transition: opacity 0.500s ease-in; -o-transition: opacity 0.500s ease-in; transition: opacity 0.500s ease-in;}
.sticky-wrapper.is-sticky #navigation .navTabs {
background: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_color_background') . ' !important;
height: 37px !important;
} 
.sticky-wrapper.is-sticky .navTabs .navTab.selected .navLink {border-radius: 0 !important;}
.sticky-wrapper.is-sticky .navTabs .navLink .itemCount {right: -2px;top: 0px;position: inherit;padding: 2px 6px;}
.sticky-wrapper.is-sticky .navTabs .navLink .itemCount .arrow { display:none}
.sticky-wrapper.is-sticky .navTabs .Popup.PopupContainerControl.PopupOpen .navLink .itemCount {padding: 2px 6px;}
.sticky-wrapper.is-sticky .navTabs .Popup.PopupContainerControl.PopupOpen .navLink .itemCount .arrow {display: none;}   
.sticky-wrapper.is-sticky .navTabs:before {
content: "";
background: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_color_background') . ' !important;
height: 50px;
position: absolute;
right: 100%;
top: 0;
width: 100%;
}
.sticky-wrapper.is-sticky .navTabs:after {
content: "";
background: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_color_background') . ' !important;
height: 37px;
position: absolute;
left: 100%;
top: 0;
width: 100%;
} 

';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_fa'))
{
$__output .= '
.sticky-wrapper.is-sticky .icon_navbar:before {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_fa_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_fa_size') . ';
font-family: FontAwesome;
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_fa_fa') . '";
line-height: ' . XenForo_Template_Helper_Core::styleProperty('xc_breadcrumb_height') . ';
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_fa_opacity') . ';
}
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_mini_logo'))
{
$__output .= '
.sticky-wrapper.is-sticky .image_navbar {
background: url(\'' . XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_mini_logo_patch') . '\') no-repeat scroll left top / 85px 25px transparent;
content: "";
height: 25px;
width: 85px;
margin-top: 6px;
box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}
';
}
$__output .= '
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_header_enable_guest'))
{
$__output .= '
.xc_enable_header_enable_guest {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_guest_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_message__guest_size') . ';
font-family: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_font_guest_family') . ';
float: right; 
text-align: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_message__guest_center') . ';
position: absolute;
padding: 10px;
top: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_guest_vertical_position') . ';
right: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_guest_horizontal_position') . ';
border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('xc_header_guest_border') . ';
background: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_guest_background') . ';
}
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
.xc_enable_header_enable_guest {
display: none;
}}
';
}
$__output .= '
';
}
$__output .= '

#header .pageContent {position: relative;}

';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_header_enable_members'))
{
$__output .= '
.xc_enable_header_enable_members_text {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_size') . ';
font-family: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_font_family') . ';
float: right; 
text-align: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_center') . ';
position: absolute;
padding: 10px;
top: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_vertical_position') . ';
right: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_horizontal_position') . ';
border: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_border') . ';
background: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_backgound') . ';
}
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') {
';
if (XenForo_Template_Helper_Core::styleProperty('xc_header_message_members'))
{
$__output .= '
.xc_logo_secondary_text {
display: none;
}}
';
}
$__output .= '

@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') {
';
if (XenForo_Template_Helper_Core::styleProperty('xc_header_message_guest'))
{
$__output .= '
.xc_logo_secondary_text {
display: none;
}}
';
}
$__output .= '

@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') {
.xc_enable_header_enable_members_text, .xc_enable_header_enable_guest {
display: none;
}}
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
.xc_enable_header_enable_members_text, .xc_enable_header_enable_guest {
display: none;
}}
';
}
$__output .= '
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_custom_footer'))
{
$__output .= '
.custom_footer {
height: 100%;
border: 1px solid rgb(83, 83, 83);
border-radius: 5px;
background: rgb(66, 66, 66);
margin: 10px 0 10px 0;
}
.custom_footer_container {
display: table;
width: 100%;
height: 100%;
padding: 10px 2px;
}
.custom_footer_container > li {
width: 33%;
padding: 10px;
max-width: 0;
}
.block_wrapper1 > h3 > i {
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block1_title_fa_size') . ';
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block1_title_fa_color') . ';
padding-right: 5px;
}
.block_wrapper1 > h3 {
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block1_title_size') . ';
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block1_title_color') . ';
}
.custom_footer_container > li:first-child {
border: none !important;
}
.block_wrapper2 > h3 > i {
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block2_title_fa_size') . ';
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block2_title_fa_color') . ';
padding-right: 5px;
}
.block_wrapper2 > h3 {
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block2_title_size') . ';
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block2_title_color') . ';
}
.block_wrapper3 > h3 > i {
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block3_title_fa_size') . ';
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block3_title_fa_color') . ';
padding-right: 5px;
}
.block_wrapper3 > h3 {
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block3_title_size') . ';
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block3_title_color') . ';
}
.custom_footer_block1 {
display: table-cell;
text-align: center;
}
.custom_footer_block2 {
display: table-cell;
text-align: center;
border-left: 1px solid rgb(83, 83, 83);
}
.custom_footer_block3 {
display: table-cell;
text-align: center;
border-left: 1px solid rgb(83, 83, 83);
}
.custom_block_about_us {
padding-top: 20px;
line-height: 20px;
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block1_container_color') . ';
}
.links_container {
display: table;
width: 100%;
line-height: 25px;
}
.links_block1 {
display: table-cell;
width: 33%;
border-right: 1px solid rgb(83, 83, 83);
}
.links_block2 {
display: table-cell;
width: 33%;
border-right: 1px solid rgb(83, 83, 83);
}
.links_block3 {
display: table-cell;
width: 33%;
}
.links_block4 {
display: table-cell;
width: 33%;
border-right: 1px solid rgb(83, 83, 83);
}
.links_block5 {
display: table-cell;
width: 33%;
border-right: 1px solid rgb(83, 83, 83);
}
.links_block6 {
display: table-cell;
width: 33%;
}

.links_block1 a:hover, .links_block2 a:hover, .links_block3 a:hover, .links_block4 a:hover, .links_block5 a:hover, .links_block6 a:hover {
color: #fff !important;
}
.custom_block_social {
padding-top: 20px;
font-size: 40px;
}
.social_container {
display: table;
width: 100%;
line-height: 50px;
}
.social_block1, .social_block2, .social_block3, .social_block4, .social_block5, .social_block6 {
display: table-cell;
width: auto;
}
.social_block1:hover > a > i, .social_block2:hover > a > i, .social_block3:hover > a > i, .social_block4:hover > a > i, .social_block5:hover > a > i, .social_block6:hover > a > i {
opacity: 0.5;
-webkit-transition: opacity 0.5s ease-in-out;
-moz-transition: opacity 0.5s ease-in-out;
-o-transition: opacity 0.5s ease-in-out;
transition: opacity 0.5s ease-in-out;
}
.social_block1 > a > i, .social_block2 > a > i, .social_block3 > a > i, .social_block4 > a > i, .social_block5 > a > i, .social_block6 > a > i {
-webkit-transition: opacity 0.5s ease-in-out;
-moz-transition: opacity 0.5s ease-in-out;
-o-transition: opacity 0.5s ease-in-out;
transition: opacity 0.5s ease-in-out;
}
.social_block1 > a > i {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_facebook_fa_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_facebook_fa_size') . ';
}
.social_block2 > a > i {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_twitter_fa_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_twitter_fa_size') . ';
}
.social_block3 > a > i {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_google_fa_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_google_fa_size') . ';
}
.social_block4 > a > i {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_instagram_fa_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_instagram_fa_size') . ';
}
.social_block5 > a > i {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_pinterest_fa_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_pinterest_fa_size') . ';
}
.social_block6 > a > i {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_contact_fa_color') . ';
font-size: ' . XenForo_Template_Helper_Core::styleProperty('xc_footer_contact_fa_size') . ';
}

';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
.custom_footer_block1, .custom_footer_block2 {
display: none !important;
}
.custom_footer_container > li:nth-child(-n+3) {
border: none !important;
}
}
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
.custom_footer_block1 {
display: none !important;
}
.social_container {
line-height: 100px;
}
.social_block6 > a > i {
display: none !important;
}
.custom_footer_container > li:nth-child(-n+2) {
border: none !important;
}
}
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') {
.custom_footer_block1 {
display: none !important;
}
.custom_footer_container > li:nth-child(-n+2) {
border: none !important;
}
}
';
}
$__output .= '
';
}
$__output .= '


';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') {
.links_block1, .links_block4 {
display: none !important;
}
.social_block6 > a > i {
display: none !important;
}
}
@media (min-width: 1000px) and (max-width: 1400px) {
.links_block1, .links_block4 {
display: none !important;
}
.social_block6 > a > i {
display: none !important;
}
}
';
}
$__output .= '

.nav_collapse {
float: right;
border: none;
margin-top: 6px;
margin-right: -6px;
height: 30px;
box-shadow: none !important;
}
.forum_list .sectionMain {
margin-top: 0 !important;
margin-bottom: 0 !important;
}


';
if (XenForo_Template_Helper_Core::styleProperty('xc_nodes_columns'))
{
$__output .= '
';
}
else
{
$__output .= '
';
if (XenForo_Template_Helper_Core::styleProperty('xc_stats_column'))
{
$__output .= '
.xc_node_stats {
position: absolute;
top: 50%;
margin-top: -18px;
right: 305px;
}
.xc_node_stats dl {
color: rgb(133, 133, 133);
float: left;
min-width: 70px;
padding: 0 6px;
text-align: center;
text-transform: uppercase;
font-size: 10px;
}
.xc_node_stats dd {
display: block;
color: rgb(133,133,133);
font-size: 16px;
padding-bottom: 3px;
}
.node .nodeLastPost {
top: 50% !important;
right: 30px !important;
margin: -21px 25px !important;
padding: 3px 20px 0 20px !important;
border-left: 1px solid rgb(83, 83, 83);
border-right: 1px solid rgb(83, 83, 83);
}
.node .nodeControls {
margin: 20px 12px !important;
right: 0 !important
}
.node .nodeText {
margin: 22px 270px 20px 65px !important;
}


';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__output .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ') {
.node .nodeLastPost {
position: absolute !important;
margin: -12px 25px !important;
}
.node .nodeStats {
display: none !important;
}
}
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
.Responsive .node .nodeLastPost .lastThreadTitle, .Responsive .node .nodeLastPost .lastThreadUser {
display: inline !important;
}
.node .nodeStats {
display: none;
}
.node .unread .nodeTitle:after {
display: none;
}
.node .nodeLastPost {
display: none !important;
}
.node .nodeText .nodeTitle {
min-width: 120px;
}}
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') {
.node .subForumList {
display: none !important;
}}
';
}
$__output .= '






';
}
$__output .= '
';
}
$__output .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_text_indicator'))
{
$__output .= '
.nodeList > .node > .unread > .nodeText .nodeTitle:after,
.subForumList .node .unread .nodeTitle:after {
content: "' . XenForo_Template_Helper_Core::styleProperty('xc_text_indicator') . '";
color: #fff;
border-radius: 2px;
margin: 0 0 0 7px;
padding: 2px 4px;
font-size: 10px;
display: inline-block;
vertical-align: middle;
background: #2c2c2c;
border: 1px solid #535353;
}
';
}
$__output .= '

.sidebar .section:last-child {
margin-bottom: 0;
}

';
if (XenForo_Template_Helper_Core::styleProperty('xc_restore_description_categories'))
{
$__output .= '
.restore_description_cat {
display: inline-flex;
}
.nodeList .categoryStrip .nodeDescription {
margin-left: 10px; 
}
';
}
$__output .= '

li.category.collapsed {
opacity: ' . XenForo_Template_Helper_Core::styleProperty('xc_fade_categories_opacity') . ';
-webkit-transition: all .80s ease-in-out;
-moz-transition: all .80s ease-in-out;
-ms-transition: all .80s ease-in-out;
-o-transition: all .80s ease-in-out;
}
li.category:not(.collapsed) {
-webkit-transition: all .80s ease-in-out;
-moz-transition: all .80s ease-in-out;
-ms-transition: all .80s ease-in-out;
-o-transition: all .80s ease-in-out;
}


/* COLOR PALETTE */
.nodeList .categoryStrip .nodeTitle a, .nodeList .categoryStrip .nodeDescription, .sidebar .section .primaryContent h3 a, .sidebar .section .secondaryContent h3 a  {
color: ' . XenForo_Template_Helper_Core::styleProperty('xc_categories_color_font') . ' !important;
}
#moderatorBar {
background: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_moderator_background') . ' !important;
border: 0 !important;
}
#header {
background: ' . XenForo_Template_Helper_Core::styleProperty('xc_header_color_background') . ';
box-shadow: 0 1px 5px 0 rgba(50, 50, 50, 0.54);
}
.nodeList .categoryStrip, .sidebar .section .primaryContent h3, .sidebar .section .secondaryContent h3 {
background-color: ' . XenForo_Template_Helper_Core::styleProperty('xc_categories_color_background') . ' !important;
border-color: ' . XenForo_Template_Helper_Core::styleProperty('xc_categories_color_border') . ' !important;
}


/* COLOR PALETTE */';
