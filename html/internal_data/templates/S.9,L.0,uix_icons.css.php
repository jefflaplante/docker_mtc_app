<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '.uix_icon,

.uix_icon-facebook,
.uix_icon-twitter,
.uix_icon-youtube,
.uix_icon-dribbble,
.uix_icon-vimeo,
.uix_icon-deviantArt,
.uix_icon-googlePlus,
.uix_icon-linkedIn,
.uix_icon-instagram,
.uix_icon-pinterest,
.uix_icon-steam,
.uix_icon-twitch,
.uix_icon-vine,
.uix_icon-tumblr,
.uix_icon-git,
.uix_icon-reddit,
.uix_icon-flickr,

.uix_icon-close,
.uix_icon-search,
.uix_icon-home,
.uix_icon-inbox,
.uix_icon-alerts,
.uix_icon-admin,
.uix_icon-cog,
.uix_icon-navTrigger,
.uix_icon-sitemap,
.uix_icon-jumpToTop,
.uix_icon-jumpToBottom,
.uix_icon-signIn,
.uix_icon-register,

.uix_icon-permissions,
.uix_icon-user,
.uix_icon-users,
.uix_icon-reports,
.uix_icon-moderator,

.uix_icon-sidebarCollapse,

.uix_icon-email,
.uix_icon-rss,
.uix_icon-comment,
.uix_icon-thumbsUp,
.uix_icon-trophy,

.uix_icon-statsDiscussions,
.uix_icon-statsMessages,
.uix_icon-statsSubforumPopup,

.uix_icon-breadcrumbSeparator,
.breadcrumb .crust.placeholder .arrow,

.uix_icon-expand,
.uix_icon-collapse

{
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.uix_icon-facebook:before		 {content: "\\f09a";}
.uix_icon-twitter:before		 {content: "\\f099";}
.uix_icon-youtube:before		 {content: "\\f16a";}
.uix_icon-dribbble:before		 {content: "\\f17d";}
.uix_icon-vimeo:before		 	 {content: "\\f194";}
.uix_icon-deviantArt:before		 {content: "\\f1bd";}
.uix_icon-googlePlus:before		 {content: "\\f0d5";}
.uix_icon-linkedIn:before		 {content: "\\f0e1";}
.uix_icon-instagram:before		 {content: "\\f16d";}
.uix_icon-pinterest:before	 	 {content: "\\f0d2";}
.uix_icon-steam:before	 		 {content: "\\f1b6";}
.uix_icon-twitch:before	 		 {content: "\\f1e8";}
.uix_icon-vine:before	 		 {content: "\\f1ca";}
.uix_icon-tumblr:before	 		 {content: "\\f173";}
.uix_icon-git:before	 		 {content: "\\f1d3";}
.uix_icon-reddit:before	 		 {content: "\\f1a1";}
.uix_icon-flickr:before	 		 {content: "\\f16e";}

.uix_icon-close:before		 	 {content: "\\f00d";}
.uix_icon-search:before		 	 {content: "\\f002";}
.uix_icon-admin:before		 	 {content: "\\f013";}
.uix_icon-cog:before			 {content: "\\f013";}
.uix_icon-home:before		 	 {content: "\\f015";}
.uix_icon-inbox:before		 	 {content: "\\f0e0";}
.uix_icon-alerts:before		 	 {content: "\\f024";}
.uix_icon-navTrigger:before		 {content: "\\f0c9";}
.uix_icon-sitemap:before		 {content: "\\f0e8";}
.uix_icon-jumpToTop:before		 {content: "\\f062";}
.uix_icon-jumpToBottom:before		 {content: "\\f063";}
.uix_icon-signIn:before			 {content: "\\f007";}
.uix_icon-register:before		 {content: "\\f09c";}

.uix_icon-permissions:before		 {content: "\\f1c4";}
.uix_icon-user:before		 	 {content: "\\f007";}
.uix_icon-users:before		 	 {content: "\\f0c0";}
.uix_icon-reports:before		 {content: "\\f0f6";}
.uix_icon-moderator:before		 {content: "\\f0ae";}

.uix_icon-sidebarCollapse:before 	 {content: "\\f039";}

.uix_icon-email:before 			 {content: "\\f0e0";}
.uix_icon-rss:before 			 {content: "\\f09e";}
.uix_icon-comment:before 		 {content: "\\f075";}
.uix_icon-thumbsUp:before 		 {content: "\\f164";}
.uix_icon-trophy:before 		 {content: "\\f091";}

.uix_icon-statsDiscussions:before	 {content: "\\f0e5";}
.uix_icon-statsMessages:before		 {content: "\\f0c5";}
.uix_icon-statsSubforumPopup:before	 {content: "\\f114";}

.uix_icon-collapse:before		 { content: "\\f068"; }
.uix_icon-expand:before		 	 { content: "\\f067"; }

';
if (XenForo_Template_Helper_Core::styleProperty('uix_breadcrumbSeparators'))
{
$__output .= '.breadcrumb .crust.placeholder .arrow:before, ';
}
$__output .= '
.uix_icon-breadcrumbSeparator:before{content: "\\f105";}

';
if (XenForo_Template_Helper_Core::styleProperty('uix_rteIconFont'))
{
$__output .= '

	html .redactor_toolbar li a
	{
		text-indent: 0;
		text-align: center;
		line-height: ' . (XenForo_Template_Helper_Core::styleProperty('rteToolbarButton.height') - XenForo_Template_Helper_Core::styleProperty('rteToolbarButton.border-top-width') - XenForo_Template_Helper_Core::styleProperty('rteToolbarButton.border-bottom-width')) . 'px;
		font-size: 14px;
		color: ' . XenForo_Template_Helper_Core::styleProperty('contentText') . ';
	}
	
	.redactor_dropdown a.icon,
	html .redactor_toolbar li a,
	html .redactor_toolbar li a:hover,
	html .redactor_toolbar li a:active, 
	html .redactor_toolbar li a.redactor_act
	{
		background-image: none;
	}
	.redactor_dropdown a.icon:before
	{
		margin-left: -22px;
		margin-right: 10px;
		font-size: 14px;
	}
	html .redactor_toolbar li a:before,
	.redactor_dropdown a.icon:before
	{
		display: inline-block;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;	
	}
	
	
	html .redactor_toolbar li a, 
	html .redactor_toolbar li a:hover, 
	html .redactor_toolbar li a:active, 
	html .redactor_toolbar li a.redactor_act
	{
		background-image: none;
	}
	
	html .redactor_toolbar li a.redactor_btn_bold:before
	{
		content: "\\f032";
	}
	html .redactor_toolbar li a.redactor_btn_italic:before
	{
		content: "\\f033";
	}
	html .redactor_toolbar li a.redactor_btn_underline:before
	{
		content: "\\f0cd";
	}
	html .redactor_toolbar li a.redactor_btn_deleted:before
	{
		content: "\\f0cc";
	}
	html .redactor_toolbar li a.redactor_btn_fontcolor:before
	{
		content: "\\f043";
	}
	html .redactor_toolbar li a.redactor_btn_fontsize:before
	{
		content: "\\f034";
	}
	html .redactor_toolbar li a.redactor_btn_fontfamily:before
	{
		content: "\\f031";
	}
	html .redactor_toolbar li a.redactor_btn_createlink:before
	{
		content: "\\f0c1";
	}
	html .redactor_toolbar li a.redactor_btn_unlink:before
	{
		content: "\\f127";
	}
	html .redactor_toolbar li a.redactor_btn_alignment:before,
	.redactor_dropdown a.alignLeft:before
	{
		content: "\\f036";
	}
	.redactor_dropdown a.alignCenter:before
	{
		content: "\\f037";
	}
	.redactor_dropdown a.alignRight:before
	{
		content: "\\f038";
	}
	html .redactor_toolbar li a.redactor_btn_unorderedlist:before
	{
		content: "\\f0ca";
	}
	html .redactor_toolbar li a.redactor_btn_orderedlist:before
	{
		content: "\\f0cb";
	}
	html .redactor_toolbar li a.redactor_btn_outdent:before
	{
		content: "\\f03b";
	}
	html .redactor_toolbar li a.redactor_btn_indent:before
	{
		content: "\\f03c";
	}
	html .redactor_toolbar li a.redactor_btn_smilies:before
	{
		content: "\\f118";
	}
	html .redactor_toolbar li a.redactor_btn_image:before
	{
		content: "\\f03e";
	}
	html .redactor_toolbar li a.redactor_btn_media:before
	{
		content: "\\f008";
	}
	html .redactor_toolbar li a.redactor_btn_insert:before
	{
		content: "\\f196";
	}
	.redactor_dropdown a.quote:before
	{
		content: "\\f10e";
	}
	.redactor_dropdown a.spoiler:before
	{
		content: "\\f070";
	}
	.redactor_dropdown a.code:before
	{
		content: "\\f121";
	}
	.redactor_dropdown a.strikethrough:before
	{
		content: "\\f0cc";
	}
	html .redactor_toolbar li a.redactor_btn_draft:before,
	.redactor_dropdown a.saveDraft:before
	{
		content: "\\f0c7"
	}
	.redactor_dropdown a.deleteDraft:before
	{
		content: "\\f014";
	}
	html .redactor_toolbar li a.redactor_btn_undo:before
	{
		content: "\\f0e2";
	}
	html .redactor_toolbar li a.redactor_btn_redo:before
	{
		content: "\\f01e";
	}
	html .redactor_toolbar li a.redactor_btn_removeformat:before
	{
		content: "\\f12d";
	}
	html .redactor_toolbar li a.redactor_btn_switchmode:before
	{
		content: "\\f0ad";
	}
	
	html .redactor_toolbar li a.redactor_btn_custom_gallery {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_custom_gallery:before {
		content: "\\f030";
	}
	
';
}
