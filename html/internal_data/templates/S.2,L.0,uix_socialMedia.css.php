<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($xenOptions['uix_socialMedia'] && XenForo_Template_Helper_Core::styleProperty('uix_socialMedia'))
{
$__output .= '
	.footerLegal .uix_socialMediaLinks {float: right;}
	.uix_socialMediaLinks > li {display: inline-block;}
	.uix_socialMediaLinks > li > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon') . '
	}
	.uix_socialMediaLinks > li:last-child > a {margin-right: 0;}
	
	.uix_socialMediaLinks > li > a:hover {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIconsHover') . '
	
	}
	.uix_socialMediaLinks > li > a .uix_icon:before {
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon.height') . ';
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon.height') . ';
		display: block;
		
	}
	.uix_socialMediaLinks > li.facebook > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_facebook') . '
	}
	
	.uix_socialMediaLinks > li.twitter > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_twitter') . '
	}
	
	.uix_socialMediaLinks > li.youtube> a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_youtube') . '
	}
	
	.uix_socialMediaLinks > li.dribbble > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_dribbble') . '
	}
	
	.uix_socialMediaLinks > li.vimeo > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_vimeo') . '
	}
	
	.uix_socialMediaLinks > li.deviantart > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_deviantart') . '
	}
	
	.uix_socialMediaLinks > li.googleplus > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_googleplus') . '
	}
	
	.uix_socialMediaLinks > li.linkedin > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_linkedin') . '
	}
	
	.uix_socialMediaLinks > li.pinterest > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_pinterest') . '
	}
	
	.uix_socialMediaLinks > li.instagram > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_instagram') . '
	}
	
	.uix_socialMediaLinks > li.steam > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_steam') . '
	}
	
	.uix_socialMediaLinks > li.twitch > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_twitch') . '
	}
	
	.uix_socialMediaLinks > li.vine > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_vine') . '
	}
	
	.uix_socialMediaLinks > li.tumblr > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_tumblr') . '
	}	
	
	.uix_socialMediaLinks > li.git > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_git') . '
	}
	
	.uix_socialMediaLinks > li.reddit > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_reddit') . '
	}
	
	.uix_socialMediaLinks > li.flickr > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_flickr') . '
	}
	
	.uix_socialMediaLinks > li.contact > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_contact') . '
	}
	
	.uix_socialMediaLinks > li.rss > a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_socialMediaIcon_rss') . '
	}
';
}
