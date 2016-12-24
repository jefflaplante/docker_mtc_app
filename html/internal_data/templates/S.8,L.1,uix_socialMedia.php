<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<ul class="uix_socialMediaLinks">
	';
if ($xenOptions['uix_socialMedia_facebook'])
{
$__output .= '<li class="facebook"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_facebook'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-facebook"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_twitter'])
{
$__output .= '<li class="twitter"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_twitter'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-twitter"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_youtube'])
{
$__output .= '<li class="youtube"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_youtube'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-youtube"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_dribbble'])
{
$__output .= '<li class="dribbble"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_dribbble'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-dribbble"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_vimeo'])
{
$__output .= '<li class="vimeo"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_vimeo'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-vimeo"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_deviantart'])
{
$__output .= '<li class="deviantart"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_deviantart'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-deviantArt"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_googleplus'])
{
$__output .= '<li class="googleplus"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_googleplus'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-googlePlus"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_linkedin'])
{
$__output .= '<li class="linkedin"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_linkedin'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-linkedIn"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_instagram'])
{
$__output .= '<li class="instagram"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_instagram'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-instagram"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_pinterest'])
{
$__output .= '<li class="pinterest"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_pinterest'], ENT_QUOTES, 'UTF-8') . '" target="_blank"><i class="uix_icon uix_icon-pinterest"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_steam'])
{
$__output .= '<li class="steam"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_steam'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-steam"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_twitch'])
{
$__output .= '<li class="twitch"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_twitch'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-twitch"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_vine'])
{
$__output .= '<li class="vine"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_vine'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-vine"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_tumblr'])
{
$__output .= '<li class="tumblr"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_tumblr'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-tumblr"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_git'])
{
$__output .= '<li class="git"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_git'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-git"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_reddit'])
{
$__output .= '<li class="reddit"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_reddit'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-reddit"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_flickr'])
{
$__output .= '<li class="flickr"><a href="' . htmlspecialchars($xenOptions['uix_socialMedia_flickr'], ENT_QUOTES, 'UTF-8') . '"><i class="uix_icon uix_icon-flickr"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_contact'] AND $xenOptions['contactUrl']['type'] == ('default'))
{
$__output .= '<li class="contact"><a href="' . XenForo_Template_Helper_Core::link('misc/contact', false, array()) . '" class="OverlayTrigger" data-overlayOptions="{&quot;fixed&quot;:false}"><i class="uix_icon uix_icon-email"></i></a></li>';
}
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_contact'] AND $xenOptions['contactUrl']['type'] == ('custom'))
{
$__output .= '<li class="contact"><a href="' . htmlspecialchars($xenOptions['contactUrl']['custom'], ENT_QUOTES, 'UTF-8') . '" ' . (($xenOptions['contactUrl']['overlay']) ? ('class="OverlayTrigger" data-overlayOptions="' . '{' . '&quot;fixed&quot;:false}"') : ('target="_blank"')) . '><i class="uix_icon uix_icon-email"></i></a></li>';
}
$__output .= '
        ';
$__compilerVar1 = '';
$__compilerVar1 .= '



<!--ADD LIST ITEMS HERE -->


';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
        ';
if ($xenOptions['uix_socialMedia_rss'])
{
$__output .= '<li class="rss"><a href="' . XenForo_Template_Helper_Core::link('forums/-/index.rss', false, array()) . '" rel="alternate}" target="_blank"><i class="uix_icon uix_icon-rss"></i></a></li>';
}
$__output .= '
</ul>';
