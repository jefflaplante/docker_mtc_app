<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<!DOCTYPE html>';
$isResponsive = ((XenForo_Template_Helper_Core::styleProperty('enableResponsive') AND !$noResponsive) ? ('1') : ('0'));
$__output .= '
<html id="XenForo" lang="' . htmlspecialchars($visitorLanguage['language_code'], ENT_QUOTES, 'UTF-8') . '" dir="' . htmlspecialchars($visitorLanguage['text_direction'], ENT_QUOTES, 'UTF-8') . '" class="Public NoJs ' . (($visitor['user_id']) ? ('LoggedIn') : ('LoggedOut')) . ' ' . (($sidebar) ? ('Sidebar') : ('NoSidebar')) . ' ' . (($hasAutoDeferred) ? ('RunDeferred') : ('')) . ' ' . (($isResponsive) ? ('Responsive') : ('NoResponsive')) . '" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
';
$__compilerVar1 = '';
$__compilerVar1 .= '
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	';
if ($isResponsive)
{
$__compilerVar1 .= '
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	';
}
$__compilerVar1 .= '
	';
if ($requestPaths['fullBasePath'])
{
$__compilerVar1 .= '
		<base href="' . htmlspecialchars($requestPaths['fullBasePath'], ENT_QUOTES, 'UTF-8') . '" />
		<script>
			var _b = document.getElementsByTagName(\'base\')[0], _bH = "' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($requestPaths['fullBasePath'], ENT_QUOTES, 'UTF-8'), 'double') . '";
			if (_b && _b.href != _bH) _b.href = _bH;
		</script>
	';
}
$__compilerVar1 .= '

	';
if ($contentTemplate == ('thread_view') && $xenOptions['BRME_removeBoardTitle'])
{
$__compilerVar1 .= '
	<title>';
if ($title)
{
$__compilerVar1 .= $title;
}
else
{
$__compilerVar1 .= htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar1 .= '</title>
';
}
else
{
$__compilerVar1 .= '<title>';
if ($title)
{
$__compilerVar1 .= $title . ' | ' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8');
}
else
{
$__compilerVar1 .= htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar1 .= '</title>';
}
$__compilerVar1 .= '
	
	<noscript><style>.JsOnly, .jsOnly { display: none !important; }</style></noscript>
	<link rel="stylesheet" href="css.php?css=xenforo,form,public&amp;style=' . urlencode($_styleId) . '&amp;dir=' . htmlspecialchars($visitorLanguage['text_direction'], ENT_QUOTES, 'UTF-8') . '&amp;d=' . htmlspecialchars($visitorStyle['last_modified_date'], ENT_QUOTES, 'UTF-8') . '" />
	<!--XenForo_Require:CSS-->	
	' . XenForo_Template_Helper_Core::callHelper('ignoredCss', array(
'0' => $visitor['ignoredUsers']
)) . '
        
        ';
$this->addRequiredExternal('css', 'delta_dark');
$__compilerVar1 .= '
        ';
$this->addRequiredExternal('css', 'XenCore_Framework');
$__compilerVar1 .= '
        
	';
$__compilerVar2 = '';
if ($xenOptions['googleAnalyticsWebPropertyId'])
{
$__compilerVar2 .= '<script>

	(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');
	
	ga(\'create\', \'' . htmlspecialchars($xenOptions['googleAnalyticsWebPropertyId'], ENT_QUOTES, 'UTF-8') . '\', \'auto\');
	ga(\'send\', \'pageview\');

</script>';
}
$__compilerVar1 .= $__compilerVar2;
unset($__compilerVar2);
$__compilerVar1 .= '
	';
$__compilerVar3 = '';
$__compilerVar3 .= '	<script src="' . htmlspecialchars($jQuerySource, ENT_QUOTES, 'UTF-8') . '"></script>	
	';
if ($jQuerySource != $jQuerySourceLocal)
{
$__compilerVar3 .= '
		<script>if (!window.jQuery) { document.write(\'<scr\'+\'ipt type="text/javascript" src="' . htmlspecialchars($jQuerySourceLocal, ENT_QUOTES, 'UTF-8') . '"><\\/scr\'+\'ipt>\'); }</script>
	';
}
if ($xenOptions['uncompressedJs'] == 1 OR $xenOptions['uncompressedJs'] == 3)
{
$__compilerVar3 .= '
	<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/jquery/jquery.xenforo.rollup.js?_v=' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '"></script>';
}
$__compilerVar3 .= '	
	<script src="' . XenForo_Template_Helper_Core::callHelper('javaScriptUrl', array(
'0' => $javaScriptSource . '/xenforo/xenforo.js?_v=' . $xenOptions['jsVersion']
)) . '"></script>
<!--XenForo_Require:JS-->

';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_navigation'))
{
$__compilerVar3 .= '
<script type="text/javascript" src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/XenCore_Framework/jquery.sticky.js"></script>
<script type="text/javascript" src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/XenCore_Framework/jquery.sticky_script.js"></script>
';
}
$__compilerVar3 .= '


';
if (XenForo_Template_Helper_Core::styleProperty('xc_left_sidebar'))
{
$__compilerVar3 .= '
<script type="text/javascript" src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/XenCore_Framework/sidebar_left.js"></script>
';
}
else
{
$__compilerVar3 .= '
<script type="text/javascript" src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/XenCore_Framework/sidebar.js"></script>
';
}
$__compilerVar3 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_cat_enable'))
{
$__compilerVar3 .= '
<script src="' . htmlspecialchars($javaScriptSource, ENT_QUOTES, 'UTF-8') . '/XenCore_Framework/categories.js?_v=' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '"></script>
';
}
$__compilerVar1 .= $__compilerVar3;
unset($__compilerVar3);
$__compilerVar1 .= '
	
	';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_fa'))
{
$__compilerVar1 .= XenForo_Template_Helper_Core::styleProperty('xc_patch_fa');
}
$__compilerVar1 .= '
	';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_gf'))
{
$__compilerVar1 .= XenForo_Template_Helper_Core::styleProperty('xc_patch_gf');
}
$__compilerVar1 .= '
	
	';
$__compilerVar4 = '';
if ($visitor['user_id'] AND $visitor['liveupdate_display_option'])
{
$__compilerVar4 .= '
	<link rel="shortcut icon" href="' . (($xenOptions['liveUpdateFavicon']) ? (htmlspecialchars($xenOptions['liveUpdateFavicon'], ENT_QUOTES, 'UTF-8')) : ('favicon.ico')) . '" />

	';
$this->addRequiredExternal('js', 'js/liveupdate/min/update.js');
$__compilerVar4 .= '
	';
if ($visitor['liveupdate_display_option'] == ('both') OR $visitor['liveupdate_display_option'] == ('tab_icon'))
{
$__compilerVar4 .= '
		';
$this->addRequiredExternal('js', 'js/liveupdate/min/tinycon.js');
$__compilerVar4 .= '
	';
}
$__compilerVar4 .= '

	<script>
		$(\'html\').data(\'pollinterval\', ' . htmlspecialchars($xenOptions['liveUpdateInterval'], ENT_QUOTES, 'UTF-8') . ')
			.data(\'displaytype\', \'' . htmlspecialchars($visitor['liveupdate_display_option'], ENT_QUOTES, 'UTF-8') . '\');
	</script>
';
}
$__compilerVar1 .= $__compilerVar4;
unset($__compilerVar4);
$__compilerVar1 .= '
<link rel="apple-touch-icon" href="' . XenForo_Template_Helper_Core::callHelper('fullurl', array(
'0' => XenForo_Template_Helper_Core::styleProperty('ogLogoPath'),
'1' => '1'
)) . '" />
	<link rel="alternate" type="application/rss+xml" title="' . 'RSS feed for ' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '' . '" href="' . XenForo_Template_Helper_Core::link('forums/-/index.rss', false, array()) . '" />
	';
if ($pageDescription['content'] AND !$pageDescription['skipmeta'] AND !$head['description'])
{
$__compilerVar1 .= '<meta name="description" content="' . XenForo_Template_Helper_Core::string('wordTrim', array(
'0' => XenForo_Template_Helper_Core::callHelper('stripHtml', array(
'0' => $pageDescription['content']
)),
'1' => '200'
)) . '" />';
}
$__compilerVar1 .= '
	';
if ($head)
{
foreach ($head AS $headElement)
{
$__compilerVar1 .= $headElement;
}
}
$__compilerVar1 .= '
	<LINK REL="SHORTCUT ICON" HREF="http://www.mturkcrowd.com/favicon.ico">
';
$__output .= $this->callTemplateHook('page_container_head', $__compilerVar1, array());
unset($__compilerVar1);
$__output .= '
<script type="text/javascript" charset="utf-8">
jQuery(document).ready(function($){

// The height of the content block when it\'s not expanded
var internalheight = $(".uaExpandThreadRead").outerHeight();
var adjustheight = ' . htmlspecialchars($xenOptions['RainDD_UA_ThreadReadLimit'], ENT_QUOTES, 'UTF-8') . ';
// The "more" link text
var moreText = "+ Show All";
// The "less" link text
var lessText = "- Show Less";


if (internalheight > adjustheight)
{
$(".uaCollapseThreadRead .uaExpandThreadRead").css(\'height\', adjustheight).css(\'overflow\', \'hidden\');
$(".uaCollapseThreadRead").css(\'overflow\', \'hidden\');


$(".uaCollapseThreadRead").append(\'<span style="float: right;"><a href="#" class="adjust"></a></span>\');

$("a.adjust").text(moreText);
}

$(".adjust").toggle(function() {
		$(this).parents("div:first").find(".uaExpandThreadRead").css(\'height\', \'auto\').css(\'overflow\', \'visible\');
		$(this).text(lessText);
	}, function() {
		$(this).parents("div:first").find(".uaExpandThreadRead").css(\'height\', adjustheight).css(\'overflow\', \'hidden\');
		$(this).text(moreText);


});
});

</script>
</head>

<body' . (($bodyClasses) ? (' class="' . htmlspecialchars($bodyClasses, ENT_QUOTES, 'UTF-8') . '"') : ('')) . '>
';
$__compilerVar5 = '';
$__compilerVar5 .= '

';
if ($visitor['is_moderator'] || $visitor['is_admin'])
{
$__compilerVar5 .= '
	';
$__compilerVar6 = '';
$this->addRequiredExternal('css', 'moderator_bar');
$__compilerVar6 .= '

';
$__compilerVar7 = '';
$__compilerVar7 .= '
			';
if ($visitor['is_admin'])
{
$__compilerVar7 .= '			
				<a href="admin.php" class="acp adminLink"><span class="itemLabel">';
if (XenForo_Template_Helper_Core::styleProperty('xc_mini_avatar_moderator_bar'))
{
$__compilerVar7 .= '<img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" class="miniMe mini_moderator_bar" alt="' . htmlspecialchars($visitor_username, ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar7 .= 'Admin' . '</span></a>
				
				';
if ($session['permissionTest'])
{
$__compilerVar7 .= '
					<a href="' . XenForo_Template_Helper_Core::link('misc/reset-permissions', false, array()) . '" class="permissionTest adminLink OverlayTrigger">
						<span class="itemLabel">' . 'Permissions from ' . htmlspecialchars($session['permissionTest']['username'], ENT_QUOTES, 'UTF-8') . '' . '</span>
					</a>
				';
}
$__compilerVar7 .= '
			';
}
$__compilerVar7 .= '
			
			';
if ($visitor['is_moderator'] AND $session['moderationCounts']['total'])
{
$__compilerVar7 .= '
				<a href="' . XenForo_Template_Helper_Core::link('moderation-queue', false, array()) . '" class="moderationQueue modLink">
					<span class="itemLabel">' . 'Moderation' . ':</span>
					<span class="itemCount ' . (($session['moderationCounts']['total']) ? ('alert') : ('')) . '">' . htmlspecialchars($session['moderationCounts']['total'], ENT_QUOTES, 'UTF-8') . '</span>
				</a>
			';
}
$__compilerVar7 .= '
			
			';
if ($visitor['is_moderator'] && !$xenOptions['reportIntoForumId'])
{
$__compilerVar7 .= '
				<a href="' . XenForo_Template_Helper_Core::link('reports', false, array()) . '" class="reportedItems modLink">
					<span class="itemLabel">' . 'Reports' . ':</span>
					<span class="itemCount ' . ((($session['reportCounts']['total'] AND $session['reportCounts']['lastUpdate'] > $session['reportLastRead']) OR $session['reportCounts']['assigned']) ? ('alert') : ('')) . '" title="' . (($session['reportCounts']['lastUpdate']) ? ('Last Report Update' . ': ' . XenForo_Template_Helper_Core::datetime($session['reportCounts']['lastUpdate'], '')) : ('')) . '">';
if ($session['reportCounts']['assigned'])
{
$__compilerVar7 .= htmlspecialchars($session['reportCounts']['assigned'], ENT_QUOTES, 'UTF-8') . ' / ' . htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8');
}
else
{
$__compilerVar7 .= htmlspecialchars($session['reportCounts']['total'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar7 .= '</span>
				</a>
			';
}
$__compilerVar7 .= '
			
			';
if ($visitor['is_admin'] AND $session['canAdminUsers'] AND $session['userModerationCounts']['total'])
{
$__compilerVar7 .= '
				<a href="admin.php?users/moderated" class="userModerationQueue modLink">
					<span class="itemLabel">' . 'Users' . ':</span>
					<span class="itemCount ' . (($session['userModerationCounts']['total']) ? ('alert') : ('')) . '">' . htmlspecialchars($session['userModerationCounts']['total'], ENT_QUOTES, 'UTF-8') . '</span>
				</a>
			';
}
$__compilerVar7 .= '

			';
$__compilerVar8 = '';
$__compilerVar7 .= $this->callTemplateHook('moderator_bar', $__compilerVar8, array());
unset($__compilerVar8);
$__compilerVar7 .= '
		';
if (trim($__compilerVar7) !== '')
{
$__compilerVar6 .= '
<fieldset id="moderatorBar">
	<div class="pageWidth">
		<div class="pageContent">
		' . $__compilerVar7 . '
			
			<span class="helper"></span>
		</div>
	</div>
</fieldset>
';
}
unset($__compilerVar7);
$__compilerVar5 .= $__compilerVar6;
unset($__compilerVar6);
$__compilerVar5 .= '
';
}
else if (!$visitor['user_id'] && !$hideLoginBar)
{
$__compilerVar5 .= '
	';
$__compilerVar9 = '';
$this->addRequiredExternal('css', 'login_bar');
$__compilerVar9 .= '

<div id="loginBar">
	<div class="pageWidth">
		<div class="pageContent">	
			<h3 id="loginBarHandle">
				<label for="LoginControl"><a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="concealed noOutline">' . (($xenOptions['registrationSetup']['enabled']) ? ('Log in or Sign up') : ('Log in')) . '</a></label>
			</h3>
			
			<span class="helper"></span>

			' . '
		</div>
	</div>
</div>';
$__compilerVar5 .= $__compilerVar9;
unset($__compilerVar9);
$__compilerVar5 .= '
';
}
$__compilerVar5 .= '

<div id="headerMover">
	<div id="headerProxy"></div>

<div id="content" class="' . htmlspecialchars($contentTemplate, ENT_QUOTES, 'UTF-8') . '">
	<div class="pageWidth">
		<div class="pageContent">
			<!-- main content area -->
			
			';
$__compilerVar10 = '';
$__compilerVar5 .= $this->callTemplateHook('page_container_content_top', $__compilerVar10, array());
unset($__compilerVar10);
$__compilerVar5 .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_breadcrumb_above_sidebar'))
{
$__compilerVar5 .= '  
                        ';
$__compilerVar11 = '';
$__compilerVar12 = '';
$__compilerVar11 .= $this->callTemplateHook('ad_above_top_breadcrumb', $__compilerVar12, array());
unset($__compilerVar12);
$__compilerVar5 .= $__compilerVar11;
unset($__compilerVar11);
$__compilerVar5 .= '
			';
$__compilerVar13 = '';
$__compilerVar13 .= '
			<div class="breadBoxTop ' . (($topctrl) ? ('withTopCtrl') : ('')) . '">
			';
if ($topctrl)
{
$__compilerVar13 .= '<div class="topCtrl">' . $topctrl . '</div>';
}
$__compilerVar13 .= '
			';
$__compilerVar14 = '';
$__compilerVar14 .= '1';
$__compilerVar15 = '';
$__compilerVar15 .= '

<nav>

       ';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_enable'))
{
$__compilerVar15 .= '
       ';
if ($contentTemplate != ('forum_list'))
{
$__compilerVar15 .= '
       ';
}
else
{
$__compilerVar15 .= '
       ';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_mode_breadcrumb'))
{
$__compilerVar15 .= '
       ';
}
else
{
$__compilerVar15 .= '
       <div class="sidebar_mini Tooltip" title="Sidebar"><a style="text-decoration:none;" href="#"></a></div>
       ';
}
$__compilerVar15 .= '
       ';
}
$__compilerVar15 .= '
       ';
}
$__compilerVar15 .= '

	';
if (!$quickNavSelected AND $navigation)
{
$__compilerVar15 .= '
		';
foreach ($navigation AS $breadcrumb)
{
$__compilerVar15 .= '
			';
if ($breadcrumb['node_id'])
{
$__compilerVar15 .= '
				';
$quickNavSelected = '';
$quickNavSelected .= 'node-' . htmlspecialchars($breadcrumb['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar15 .= '
			';
}
$__compilerVar15 .= '
		';
}
$__compilerVar15 .= '
	';
}
$__compilerVar15 .= '

	<fieldset class="breadcrumb">
		<a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><!--' . 'Jump to' . '...--></a>
		
		';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_enable'))
{
$__compilerVar15 .= '
                ';
if ($contentTemplate != ('forum_list'))
{
$__compilerVar15 .= '
                ';
}
else
{
$__compilerVar15 .= '
                ';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_mode_breadcrumb'))
{
$__compilerVar15 .= '
                <div class="sidebar_mini Tooltip breadmode" title="Sidebar"><a style="text-decoration:none;" href="#"></a></div>
                ';
}
$__compilerVar15 .= '
                ';
}
$__compilerVar15 .= '
                ';
}
$__compilerVar15 .= '
			
		<div class="boardTitle"><strong>' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '</strong></div>
		
		<span class="crumbs">
			';
if ($showHomeLink)
{
$__compilerVar15 .= '
				<span class="crust homeCrumb"' . (($__compilerVar14) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($__compilerVar14) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar14) ? (' itemprop="title"') : ('')) . '>
					';
if (XenForo_Template_Helper_Core::styleProperty('xc_replace_home_text'))
{
$__compilerVar15 .= '
                                        <i class="fa fa-home replace_home_text" style="vertical-align: middle;"></i>
                                        ';
}
else
{
$__compilerVar15 .= '
                                        ' . 'Home' . '
                                        ';
}
$__compilerVar15 .= '
					</span></a>
					<span class="arrow"><span></span></span>
				</span>
			';
}
else if ($selectedTabId != $homeTabId)
{
$__compilerVar15 .= '
				<span class="crust homeCrumb"' . (($__compilerVar14) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($__compilerVar14) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar14) ? (' itemprop="title"') : ('')) . '>' . htmlspecialchars($homeTab['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
					<span class="arrow"><span></span></span>
				</span>
			';
}
$__compilerVar15 .= '
			
			';
if ($selectedTab)
{
$__compilerVar15 .= '
				<span class="crust selectedTabCrumb"' . (($__compilerVar14) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($selectedTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($__compilerVar14) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar14) ? (' itemprop="title"') : ('')) . '>' . htmlspecialchars($selectedTab['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
					<span class="arrow"><span>&gt;</span></span>
				</span>
			';
}
$__compilerVar15 .= '
			
			';
if ($navigation)
{
$__compilerVar15 .= '
				';
$i = 0;
$count = count($navigation);
foreach ($navigation AS $breadcrumb)
{
$i++;
$__compilerVar15 .= '
					<span class="crust"' . (($__compilerVar14) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
						<a href="' . $breadcrumb['href'] . '" class="crumb"' . (($__compilerVar14) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar14) ? (' itemprop="title"') : ('')) . '>' . $breadcrumb['value'] . '</span></a>
						<span class="arrow"><span>&gt;</span></span>
					</span>
				';
}
$__compilerVar15 .= '
			';
}
$__compilerVar15 .= '
		</span>
	</fieldset>
</nav>';
$__compilerVar13 .= $__compilerVar15;
unset($__compilerVar14, $__compilerVar15);
$__compilerVar13 .= '
			</div>
			';
$__compilerVar5 .= $this->callTemplateHook('page_container_breadcrumb_top', $__compilerVar13, array());
unset($__compilerVar13);
$__compilerVar5 .= '
			';
$__compilerVar16 = '';
$__compilerVar17 = '';
$__compilerVar16 .= $this->callTemplateHook('ad_below_top_breadcrumb', $__compilerVar17, array());
unset($__compilerVar17);
$__compilerVar5 .= $__compilerVar16;
unset($__compilerVar16);
$__compilerVar5 .= '
			';
}
else
{
$__compilerVar5 .= '
			';
}
$__compilerVar5 .= '
			
			';
if ($sidebar)
{
$__compilerVar5 .= '
				<div class="mainContainer">
					<div class="mainContent">';
}
$__compilerVar5 .= '
						
						
					        
						<!--[if lt IE 8]>
							<p class="importantMessage">' . 'You are using an out of date browser. It  may not display this or other websites correctly.<br />You should upgrade or use an <a href="https://www.google.com/chrome/browser/" target="_blank">alternative browser</a>.' . '</p>
						<![endif]-->
						
                                                ';
if (XenForo_Template_Helper_Core::styleProperty('xc_breadcrumb_above_sidebar'))
{
$__compilerVar5 .= '
                                                ';
}
else
{
$__compilerVar5 .= '  
                                                ';
$__compilerVar18 = '';
$__compilerVar19 = '';
$__compilerVar18 .= $this->callTemplateHook('ad_above_top_breadcrumb', $__compilerVar19, array());
unset($__compilerVar19);
$__compilerVar5 .= $__compilerVar18;
unset($__compilerVar18);
$__compilerVar5 .= '
						';
$__compilerVar20 = '';
$__compilerVar20 .= '
						<div class="breadBoxTop ' . (($topctrl) ? ('withTopCtrl') : ('')) . '">
							';
if ($topctrl)
{
$__compilerVar20 .= '<div class="topCtrl">' . $topctrl . '</div>';
}
$__compilerVar20 .= '
							';
$__compilerVar21 = '';
$__compilerVar21 .= '1';
$__compilerVar22 = '';
$__compilerVar22 .= '

<nav>

       ';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_enable'))
{
$__compilerVar22 .= '
       ';
if ($contentTemplate != ('forum_list'))
{
$__compilerVar22 .= '
       ';
}
else
{
$__compilerVar22 .= '
       ';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_mode_breadcrumb'))
{
$__compilerVar22 .= '
       ';
}
else
{
$__compilerVar22 .= '
       <div class="sidebar_mini Tooltip" title="Sidebar"><a style="text-decoration:none;" href="#"></a></div>
       ';
}
$__compilerVar22 .= '
       ';
}
$__compilerVar22 .= '
       ';
}
$__compilerVar22 .= '

	';
if (!$quickNavSelected AND $navigation)
{
$__compilerVar22 .= '
		';
foreach ($navigation AS $breadcrumb)
{
$__compilerVar22 .= '
			';
if ($breadcrumb['node_id'])
{
$__compilerVar22 .= '
				';
$quickNavSelected = '';
$quickNavSelected .= 'node-' . htmlspecialchars($breadcrumb['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar22 .= '
			';
}
$__compilerVar22 .= '
		';
}
$__compilerVar22 .= '
	';
}
$__compilerVar22 .= '

	<fieldset class="breadcrumb">
		<a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><!--' . 'Jump to' . '...--></a>
		
		';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_enable'))
{
$__compilerVar22 .= '
                ';
if ($contentTemplate != ('forum_list'))
{
$__compilerVar22 .= '
                ';
}
else
{
$__compilerVar22 .= '
                ';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_mode_breadcrumb'))
{
$__compilerVar22 .= '
                <div class="sidebar_mini Tooltip breadmode" title="Sidebar"><a style="text-decoration:none;" href="#"></a></div>
                ';
}
$__compilerVar22 .= '
                ';
}
$__compilerVar22 .= '
                ';
}
$__compilerVar22 .= '
			
		<div class="boardTitle"><strong>' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '</strong></div>
		
		<span class="crumbs">
			';
if ($showHomeLink)
{
$__compilerVar22 .= '
				<span class="crust homeCrumb"' . (($__compilerVar21) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($__compilerVar21) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar21) ? (' itemprop="title"') : ('')) . '>
					';
if (XenForo_Template_Helper_Core::styleProperty('xc_replace_home_text'))
{
$__compilerVar22 .= '
                                        <i class="fa fa-home replace_home_text" style="vertical-align: middle;"></i>
                                        ';
}
else
{
$__compilerVar22 .= '
                                        ' . 'Home' . '
                                        ';
}
$__compilerVar22 .= '
					</span></a>
					<span class="arrow"><span></span></span>
				</span>
			';
}
else if ($selectedTabId != $homeTabId)
{
$__compilerVar22 .= '
				<span class="crust homeCrumb"' . (($__compilerVar21) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($__compilerVar21) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar21) ? (' itemprop="title"') : ('')) . '>' . htmlspecialchars($homeTab['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
					<span class="arrow"><span></span></span>
				</span>
			';
}
$__compilerVar22 .= '
			
			';
if ($selectedTab)
{
$__compilerVar22 .= '
				<span class="crust selectedTabCrumb"' . (($__compilerVar21) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($selectedTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($__compilerVar21) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar21) ? (' itemprop="title"') : ('')) . '>' . htmlspecialchars($selectedTab['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
					<span class="arrow"><span>&gt;</span></span>
				</span>
			';
}
$__compilerVar22 .= '
			
			';
if ($navigation)
{
$__compilerVar22 .= '
				';
$i = 0;
$count = count($navigation);
foreach ($navigation AS $breadcrumb)
{
$i++;
$__compilerVar22 .= '
					<span class="crust"' . (($__compilerVar21) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
						<a href="' . $breadcrumb['href'] . '" class="crumb"' . (($__compilerVar21) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($__compilerVar21) ? (' itemprop="title"') : ('')) . '>' . $breadcrumb['value'] . '</span></a>
						<span class="arrow"><span>&gt;</span></span>
					</span>
				';
}
$__compilerVar22 .= '
			';
}
$__compilerVar22 .= '
		</span>
	</fieldset>
</nav>';
$__compilerVar20 .= $__compilerVar22;
unset($__compilerVar21, $__compilerVar22);
$__compilerVar20 .= '
						</div>
						';
$__compilerVar5 .= $this->callTemplateHook('page_container_breadcrumb_top', $__compilerVar20, array());
unset($__compilerVar20);
$__compilerVar5 .= '
						';
$__compilerVar23 = '';
$__compilerVar24 = '';
$__compilerVar23 .= $this->callTemplateHook('ad_below_top_breadcrumb', $__compilerVar24, array());
unset($__compilerVar24);
$__compilerVar5 .= $__compilerVar23;
unset($__compilerVar23);
$__compilerVar5 .= '
						';
}
$__compilerVar5 .= '
						
						';
$__compilerVar25 = '';
$__compilerVar25 .= '
						';
$__compilerVar26 = '';
if ($notices['block'])
{
$__compilerVar26 .= '

';
$this->addRequiredExternal('css', 'notices');
$__compilerVar26 .= '
';
$this->addRequiredExternal('css', 'panel_scroller');
$__compilerVar26 .= '
' . '

<div class="' . ((XenForo_Template_Helper_Core::styleProperty('scrollableNotices')) ? ('PanelScroller') : ('PanelScrollerOff')) . ' Notices" data-vertical="' . XenForo_Template_Helper_Core::styleProperty('noticeVertical') . '" data-speed="' . XenForo_Template_Helper_Core::styleProperty('noticeSpeed') . '" data-interval="' . XenForo_Template_Helper_Core::styleProperty('noticeInterval') . '">
	<div class="scrollContainer">
		<div class="PanelContainer">
			<ol class="Panels">
				';
foreach ($notices['block'] AS $noticeId => $notice)
{
$__compilerVar26 .= '
					';
$__compilerVar27 = '';
$__compilerVar27 .= $notice['message'];
$__compilerVar28 = '';
$__compilerVar28 .= '<li class="panel Notice DismissParent notice_' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($notice['visibility'], ENT_QUOTES, 'UTF-8') . '" data-notice="' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '">
	';
if ($notice['imageUrl'])
{
$__compilerVar28 .= '
		<div class="blockImage ' . htmlspecialchars($notice['display_image'], ENT_QUOTES, 'UTF-8') . '">
			<img src="' . htmlspecialchars($notice['imageUrl'], ENT_QUOTES, 'UTF-8') . '" alt="" />
		</div>
	';
}
$__compilerVar28 .= '
	<div class="' . (($notice['wrap']) ? ('baseHtml noticeContent') : ('')) . (($notice['imageUrl']) ? (' hasImage') : ('')) . '">' . $__compilerVar27 . '</div>
	
	';
if ($notice['dismissible'])
{
$__compilerVar28 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account/dismiss-notice', '', array(
'notice_id' => $noticeId
)) . '"
			title="' . 'Dismiss Notice' . '" class="DismissCtrl Tooltip" data-offsetx="7" data-tipclass="flipped">' . 'Dismiss Notice' . '</a>';
}
$__compilerVar28 .= '
</li>';
$__compilerVar26 .= $__compilerVar28;
unset($__compilerVar27, $__compilerVar28);
$__compilerVar26 .= '
				';
}
$__compilerVar26 .= '
			</ol>
		</div>
	</div>
	
	';
if (XenForo_Template_Helper_Core::styleProperty('scrollableNotices') AND XenForo_Template_Helper_Core::numberFormat(count($notices['block']), '0') > 1)
{
$__compilerVar26 .= '<div class="navContainer">
		<span class="navControls Nav JsOnly">
			';
$i = 0;
foreach ($notices['block'] AS $noticeId => $notice)
{
$i++;
$__compilerVar26 .= '
				<a id="n' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '" href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#n' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '"' . (($i == 1) ? (' class="current"') : ('')) . '>
					<span class="arrow"><span></span></span>
					<!--' . htmlspecialchars($i, ENT_QUOTES, 'UTF-8') . ' -->' . htmlspecialchars($notice['title'], ENT_QUOTES, 'UTF-8') . '</a>
			';
}
$__compilerVar26 .= '
		</span>
	</div>';
}
$__compilerVar26 .= '
</div>

';
}
$__compilerVar26 .= '

';
if ($notices['floating'])
{
$__compilerVar26 .= '
	';
$this->addRequiredExternal('css', 'notices');
$__compilerVar26 .= '
	
	<div class="FloatingContainer Notices">
		';
foreach ($notices['floating'] AS $noticeId => $notice)
{
$__compilerVar26 .= '
			<div class="DismissParent Notice notice_' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($notice['visibility'], ENT_QUOTES, 'UTF-8') . '" data-notice="' . htmlspecialchars($noticeId, ENT_QUOTES, 'UTF-8') . '" data-delay-duration="' . htmlspecialchars($notice['delay_duration'], ENT_QUOTES, 'UTF-8') . '" data-display-duration="' . htmlspecialchars($notice['display_duration'], ENT_QUOTES, 'UTF-8') . '" data-auto-dismiss="' . htmlspecialchars($notice['auto_dismiss'], ENT_QUOTES, 'UTF-8') . '">
				<div class="floatingItem ' . (($notice['display_style'] == ('custom')) ? (htmlspecialchars($notice['css_class'], ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($notice['display_style'], ENT_QUOTES, 'UTF-8'))) . '">
					';
if ($notice['dismissible'])
{
$__compilerVar26 .= '
						<a href="' . XenForo_Template_Helper_Core::link('account/dismiss-notice', '', array(
'notice_id' => $noticeId
)) . '"
							title="' . 'Dismiss Notice' . '" class="DismissCtrl Tooltip" data-offsetx="7" data-tipclass="flipped">' . 'Dismiss Notice' . '</a>';
}
$__compilerVar26 .= '
					';
if ($notice['imageUrl'])
{
$__compilerVar26 .= '
						<div class="floatingImage ' . htmlspecialchars($notice['display_image'], ENT_QUOTES, 'UTF-8') . '">
							<img src="' . htmlspecialchars($notice['imageUrl'], ENT_QUOTES, 'UTF-8') . '" alt="" />
						</div>
					';
}
$__compilerVar26 .= '
					<div class="' . (($notice['imageUrl']) ? ('hasImage') : ('')) . ' ' . (($notice['wrap']) ? ('baseHtml noticeContent') : ('')) . '">
						' . $notice['message'] . '
					</div>
				</div>
			</div>
		';
}
$__compilerVar26 .= '
	</div>
';
}
$__compilerVar25 .= $__compilerVar26;
unset($__compilerVar26);
$__compilerVar25 .= '						
						';
$__compilerVar5 .= $this->callTemplateHook('page_container_notices', $__compilerVar25, array());
unset($__compilerVar25);
$__compilerVar5 .= '
						 
					
						<div class="container_wrapper">
						
						';
$__compilerVar29 = '';
$__compilerVar29 .= '
						';
if (!$noH1)
{
$__compilerVar29 .= '						
							<!-- h1 title, description -->
							<div class="titleBar">
								' . $beforeH1 . '
								<h1>';
if ($h1)
{
$__compilerVar29 .= $h1;
}
else if ($title)
{
$__compilerVar29 .= $title;
}
else
{
$__compilerVar29 .= htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8');
}
$__compilerVar29 .= '</h1>
								
								';
if ($pageDescription['content'])
{
$__compilerVar29 .= '<p id="pageDescription" class="muted ' . htmlspecialchars($pageDescription['class'], ENT_QUOTES, 'UTF-8') . '">' . $pageDescription['content'] . '</p>';
}
$__compilerVar29 .= '
							</div>
						';
}
$__compilerVar29 .= '
						';
$__compilerVar5 .= $this->callTemplateHook('page_container_content_title_bar', $__compilerVar29, array());
unset($__compilerVar29);
$__compilerVar5 .= '
						
						
						
						';
$__compilerVar30 = '';
$__compilerVar31 = '';
$__compilerVar30 .= $this->callTemplateHook('ad_above_content', $__compilerVar31, array());
unset($__compilerVar31);
$__compilerVar5 .= $__compilerVar30;
unset($__compilerVar30);
$__compilerVar5 .= '
						
						<!-- main template -->
						' . $contents . '
						
						</div>
						
						';
$__compilerVar32 = '';
$__compilerVar33 = '';
$__compilerVar32 .= $this->callTemplateHook('ad_below_content', $__compilerVar33, array());
unset($__compilerVar33);
$__compilerVar5 .= $__compilerVar32;
unset($__compilerVar32);
$__compilerVar5 .= '
						
						';
if (!$visitor['user_id'] && !$hideLoginBar)
{
$__compilerVar5 .= '
							<!-- login form, to be moved to the upper drop-down -->
							';
$__compilerVar34 = '';
$__compilerVar34 .= '

';
$__compilerVar35 = '';
$__compilerVar35 .= '
';
if ($xenOptions['facebookAppId'])
{
$eAuth = '';
$eAuth .= '1';
}
$__compilerVar35 .= '
';
if ($xenOptions['twitterAppKey'])
{
$eAuth = '';
$eAuth .= '1';
}
$__compilerVar35 .= '
';
if ($xenOptions['googleClientId'])
{
$eAuth = '';
$eAuth .= '1';
}
$__compilerVar35 .= '
';
$__compilerVar34 .= $this->callTemplateHook('login_bar_eauth_set', $__compilerVar35, array());
unset($__compilerVar35);
$__compilerVar34 .= '

<form action="' . XenForo_Template_Helper_Core::link('login/login', false, array()) . '" method="post" class="xenForm ' . (($eAuth) ? ('eAuth') : ('')) . '" id="login" style="display:none">

	';
$__compilerVar36 = '';
$__compilerVar36 .= '
				';
$__compilerVar37 = '';
$__compilerVar37 .= '
				';
if ($xenOptions['facebookAppId'])
{
$__compilerVar37 .= '
					';
$this->addRequiredExternal('css', 'facebook');
$__compilerVar37 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('register/facebook', '', array(
'reg' => '1'
)) . '" class="fbLogin" tabindex="110"><span>' . 'Log in with Facebook' . '</span></a></li>
				';
}
$__compilerVar37 .= '
				
				';
if ($xenOptions['twitterAppKey'])
{
$__compilerVar37 .= '
					';
$this->addRequiredExternal('css', 'twitter');
$__compilerVar37 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('register/twitter', '', array(
'reg' => '1'
)) . '" class="twitterLogin" tabindex="110"><span>' . 'Log in with Twitter' . '</span></a></li>
				';
}
$__compilerVar37 .= '
				
				';
if ($xenOptions['googleClientId'])
{
$__compilerVar37 .= '
					';
$this->addRequiredExternal('css', 'google');
$__compilerVar37 .= '
					<li><span class="googleLogin GoogleLogin JsOnly" tabindex="110" data-client-id="' . htmlspecialchars($xenOptions['googleClientId'], ENT_QUOTES, 'UTF-8') . '" data-redirect-url="' . XenForo_Template_Helper_Core::link('register/google', '', array(
'code' => '__CODE__',
'csrf' => $session['sessionCsrf']
)) . '"><span>' . 'Log in with Google' . '</span></span></li>
				';
}
$__compilerVar37 .= '
				';
$__compilerVar36 .= $this->callTemplateHook('login_bar_eauth_items', $__compilerVar37, array());
unset($__compilerVar37);
$__compilerVar36 .= '
			';
if (trim($__compilerVar36) !== '')
{
$__compilerVar34 .= '
		<ul id="eAuthUnit">
			' . $__compilerVar36 . '
		</ul>
	';
}
unset($__compilerVar36);
$__compilerVar34 .= '

	<div class="ctrlWrapper">
		<dl class="ctrlUnit">
			<dt><label for="LoginControl">' . 'Your name or email address' . ':</label></dt>
			<dd><input type="text" name="login" id="LoginControl" class="textCtrl" tabindex="101" /></dd>
		</dl>
	
	';
if ($xenOptions['registrationSetup']['enabled'])
{
$__compilerVar34 .= '
		<dl class="ctrlUnit">
			<dt>
				<label for="ctrl_password">' . 'Do you already have an account?' . '</label>
			</dt>
			<dd>
				<ul>
					<li><label for="ctrl_not_registered"><input type="radio" name="register" value="1" id="ctrl_not_registered" tabindex="105" />
						' . 'No, create an account now.' . '</label></li>
					<li><label for="ctrl_registered"><input type="radio" name="register" value="0" id="ctrl_registered" tabindex="105" checked="checked" class="Disabler" />
						' . 'Yes, my password is' . ':</label></li>
					<li id="ctrl_registered_Disabler">
						<input type="password" name="password" class="textCtrl" id="ctrl_password" tabindex="102" />
						<div class="lostPassword"><a href="' . XenForo_Template_Helper_Core::link('lost-password', false, array()) . '" class="OverlayTrigger OverlayCloser" tabindex="106">' . 'Forgot your password?' . '</a></div>
					</li>
				</ul>
			</dd>
		</dl>
	';
}
else
{
$__compilerVar34 .= '
		<dl class="ctrlUnit">
			<dt>
				<label for="ctrl_password">' . 'Password' . ':</label>
			</dt>
			<dd>
				<input type="password" name="password" class="textCtrl" id="ctrl_password" tabindex="102" />
				<div class="lostPasswordLogin"><a href="' . XenForo_Template_Helper_Core::link('lost-password', false, array()) . '" class="OverlayTrigger OverlayCloser" tabindex="106">' . 'Forgot your password?' . '</a></div>
			</dd>
		</dl>
	';
}
$__compilerVar34 .= '
		
		<dl class="ctrlUnit submitUnit">
			<dt></dt>
			<dd>
				<input type="submit" class="button primary" value="' . 'Log in' . '" tabindex="104" data-loginPhrase="' . 'Log in' . '" data-signupPhrase="' . 'Sign up' . '" />
				<label for="ctrl_remember" class="rememberPassword"><input type="checkbox" name="remember" value="1" id="ctrl_remember" tabindex="103" /> ' . 'Stay logged in' . '</label>
			</dd>
		</dl>
	</div>

	<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="redirect" value="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />

</form>';
$__compilerVar5 .= $__compilerVar34;
unset($__compilerVar34);
$__compilerVar5 .= '
						';
}
$__compilerVar5 .= '
						
						
						
					';
if ($sidebar)
{
$__compilerVar5 .= '
					
					</div>
					
				</div>
				
				<!-- sidebar -->
				<aside>
					
				';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_sidebar'))
{
$__compilerVar5 .= '
				<div class="sidebar">
				';
}
else
{
$__compilerVar5 .= '
				<div class="sidebar fixed">
				';
}
$__compilerVar5 .= '	
						';
$__compilerVar38 = '';
$__compilerVar38 .= '
						';
$__compilerVar39 = '';
$__compilerVar40 = '';
$__compilerVar39 .= $this->callTemplateHook('ad_sidebar_top', $__compilerVar40, array());
unset($__compilerVar40);
$__compilerVar38 .= $__compilerVar39;
unset($__compilerVar39);
$__compilerVar38 .= '
						';
if (!$noVisitorPanel)
{
$__compilerVar41 = '';
if ($visitor['user_id'])
{
$__compilerVar41 .= '

<div class="section visitorPanel">
	<div class="secondaryContent">
	
		' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,(true),array(
'user' => '$visitor',
'size' => 'm',
'img' => 'true'
),'')) . '
		
		<div class="visitorText">
			<h2>' . '<span class="muted">Signed in as</span> ' . XenForo_Template_Helper_Core::callHelper('username', array(
'0' => $visitor,
'1' => 'NoOverlay'
)) . '' . '</h2>		
			<div class="stats">
			';
$__compilerVar42 = '';
$__compilerVar42 .= '
				<dl class="pairsJustified"><dt>' . 'Messages' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['message_count'], '0') . '</dd></dl>
				<dl class="pairsJustified"><dt>' . 'Likes' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['like_count'], '0') . '</dd></dl>
				';
if ($xenOptions['enableTrophies'])
{
$__compilerVar42 .= '
					<dl class="pairsJustified"><dt>' . 'Points' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($visitor['trophy_points'], '0') . '</dd></dl>
				';
}
$__compilerVar42 .= '
			</div>
			';
$__compilerVar41 .= $this->callTemplateHook('sidebar_visitor_panel_stats', $__compilerVar42, array());
unset($__compilerVar42);
$__compilerVar41 .= '
		</div>
		
	</div>
</div>

';
}
else
{
$__compilerVar41 .= '

<div class="section loginButton">		
	<div class="secondaryContent">
		<label for="LoginControl" id="SignupButton"><a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="inner">' . (($xenOptions['registrationSetup']['enabled']) ? ('Sign up now!') : ('Log in')) . '</a></label>
	</div>
</div>

';
}
$__compilerVar41 .= '

';
$__compilerVar43 = '';
$__compilerVar44 = '';
$__compilerVar43 .= $this->callTemplateHook('ad_sidebar_below_visitor_panel', $__compilerVar44, array());
unset($__compilerVar44);
$__compilerVar41 .= $__compilerVar43;
unset($__compilerVar43);
$__compilerVar38 .= $__compilerVar41;
unset($__compilerVar41);
}
$__compilerVar38 .= '
						' . $sidebar . '
						';
$__compilerVar45 = '';
$__compilerVar46 = '';
$__compilerVar45 .= $this->callTemplateHook('ad_sidebar_bottom', $__compilerVar46, array());
unset($__compilerVar46);
$__compilerVar38 .= $__compilerVar45;
unset($__compilerVar45);
$__compilerVar38 .= '
						';
$__compilerVar5 .= $this->callTemplateHook('page_container_sidebar', $__compilerVar38, array());
unset($__compilerVar38);
$__compilerVar5 .= '
					</div>
				</aside>
				<div class="breadBoxBottom">';
$__compilerVar47 = '';
$__compilerVar47 .= '

<nav>

       ';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_enable'))
{
$__compilerVar47 .= '
       ';
if ($contentTemplate != ('forum_list'))
{
$__compilerVar47 .= '
       ';
}
else
{
$__compilerVar47 .= '
       ';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_mode_breadcrumb'))
{
$__compilerVar47 .= '
       ';
}
else
{
$__compilerVar47 .= '
       <div class="sidebar_mini Tooltip" title="Sidebar"><a style="text-decoration:none;" href="#"></a></div>
       ';
}
$__compilerVar47 .= '
       ';
}
$__compilerVar47 .= '
       ';
}
$__compilerVar47 .= '

	';
if (!$quickNavSelected AND $navigation)
{
$__compilerVar47 .= '
		';
foreach ($navigation AS $breadcrumb)
{
$__compilerVar47 .= '
			';
if ($breadcrumb['node_id'])
{
$__compilerVar47 .= '
				';
$quickNavSelected = '';
$quickNavSelected .= 'node-' . htmlspecialchars($breadcrumb['node_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar47 .= '
			';
}
$__compilerVar47 .= '
		';
}
$__compilerVar47 .= '
	';
}
$__compilerVar47 .= '

	<fieldset class="breadcrumb">
		<a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><!--' . 'Jump to' . '...--></a>
		
		';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_enable'))
{
$__compilerVar47 .= '
                ';
if ($contentTemplate != ('forum_list'))
{
$__compilerVar47 .= '
                ';
}
else
{
$__compilerVar47 .= '
                ';
if (XenForo_Template_Helper_Core::styleProperty('xc_collapse_sidebar_mode_breadcrumb'))
{
$__compilerVar47 .= '
                <div class="sidebar_mini Tooltip breadmode" title="Sidebar"><a style="text-decoration:none;" href="#"></a></div>
                ';
}
$__compilerVar47 .= '
                ';
}
$__compilerVar47 .= '
                ';
}
$__compilerVar47 .= '
			
		<div class="boardTitle"><strong>' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '</strong></div>
		
		<span class="crumbs">
			';
if ($showHomeLink)
{
$__compilerVar47 .= '
				<span class="crust homeCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>
					';
if (XenForo_Template_Helper_Core::styleProperty('xc_replace_home_text'))
{
$__compilerVar47 .= '
                                        <i class="fa fa-home replace_home_text" style="vertical-align: middle;"></i>
                                        ';
}
else
{
$__compilerVar47 .= '
                                        ' . 'Home' . '
                                        ';
}
$__compilerVar47 .= '
					</span></a>
					<span class="arrow"><span></span></span>
				</span>
			';
}
else if ($selectedTabId != $homeTabId)
{
$__compilerVar47 .= '
				<span class="crust homeCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($homeTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>' . htmlspecialchars($homeTab['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
					<span class="arrow"><span></span></span>
				</span>
			';
}
$__compilerVar47 .= '
			
			';
if ($selectedTab)
{
$__compilerVar47 .= '
				<span class="crust selectedTabCrumb"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
					<a href="' . htmlspecialchars($selectedTab['href'], ENT_QUOTES, 'UTF-8') . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>' . htmlspecialchars($selectedTab['title'], ENT_QUOTES, 'UTF-8') . '</span></a>
					<span class="arrow"><span>&gt;</span></span>
				</span>
			';
}
$__compilerVar47 .= '
			
			';
if ($navigation)
{
$__compilerVar47 .= '
				';
$i = 0;
$count = count($navigation);
foreach ($navigation AS $breadcrumb)
{
$i++;
$__compilerVar47 .= '
					<span class="crust"' . (($microdata) ? (' itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"') : ('')) . '>
						<a href="' . $breadcrumb['href'] . '" class="crumb"' . (($microdata) ? (' rel="up" itemprop="url"') : ('')) . '><span' . (($microdata) ? (' itemprop="title"') : ('')) . '>' . $breadcrumb['value'] . '</span></a>
						<span class="arrow"><span>&gt;</span></span>
					</span>
				';
}
$__compilerVar47 .= '
			';
}
$__compilerVar47 .= '
		</span>
	</fieldset>
</nav>';
$__compilerVar5 .= $__compilerVar47;
unset($__compilerVar47);
$__compilerVar5 .= '</div>
			';
}
$__compilerVar5 .= '
			
			';
$__compilerVar48 = '';
$__compilerVar48 .= '			
			
			';
$__compilerVar5 .= $this->callTemplateHook('page_container_breadcrumb_bottom', $__compilerVar48, array());
unset($__compilerVar48);
$__compilerVar5 .= '
						
			';
$__compilerVar49 = '';
$__compilerVar50 = '';
$__compilerVar49 .= $this->callTemplateHook('ad_below_bottom_breadcrumb', $__compilerVar50, array());
unset($__compilerVar50);
$__compilerVar5 .= $__compilerVar49;
unset($__compilerVar49);
$__compilerVar5 .= '	
						
		</div>
		
		';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_custom_footer'))
{
$__compilerVar5 .= '
	<div class="custom_footer">
		<ul class="custom_footer_container">

			';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_footer_block1'))
{
$__compilerVar5 .= '
				<li class="custom_footer_block1">
					<div class="block_wrapper1"><h3><i class="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block1_title_fa') . '"></i>' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block1_title') . '</h3></div>
					<div class="custom_block_about_us">' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block1_container') . '</div>
				</li>
			';
}
$__compilerVar5 .= '


			';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_footer_block2'))
{
$__compilerVar5 .= '
				<li class="custom_footer_block2">
					<div class="block_wrapper2"><h3><i class="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block2_title_fa') . '"></i>' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block2_title') . '</h3></div>
					<div class="custom_block_about_us">
						<ul class="links_container">
							<li class="links_block1">';
if (XenForo_Template_Helper_Core::styleProperty('xc_footer_name_link1'))
{
$__compilerVar5 .= '<a class="Tooltip" title="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_tooltip_link1') . '" href="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_link1') . '">' . XenForo_Template_Helper_Core::styleProperty('xc_footer_name_link1') . '</a>';
}
$__compilerVar5 .= '</li>
							<li class="links_block2">';
if (XenForo_Template_Helper_Core::styleProperty('xc_footer_name_link2'))
{
$__compilerVar5 .= '<a class="Tooltip" title="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_tooltip_link2') . '" href="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_link2') . '">' . XenForo_Template_Helper_Core::styleProperty('xc_footer_name_link2') . '</a>';
}
$__compilerVar5 .= '</li>
							<li class="links_block3">';
if (XenForo_Template_Helper_Core::styleProperty('xc_footer_name_link3'))
{
$__compilerVar5 .= '<a class="Tooltip" title="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_tooltip_link3') . '" href="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_link3') . '">' . XenForo_Template_Helper_Core::styleProperty('xc_footer_name_link3') . '</a>';
}
$__compilerVar5 .= '</li>
						</ul>
						<ul class="links_container">
							<li class="links_block4">';
if (XenForo_Template_Helper_Core::styleProperty('xc_footer_name_link4'))
{
$__compilerVar5 .= '<a class="Tooltip" title="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_tooltip_link4') . '" href="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_link4') . '">' . XenForo_Template_Helper_Core::styleProperty('xc_footer_name_link4') . '</a>';
}
$__compilerVar5 .= '</li>
							<li class="links_block5">';
if (XenForo_Template_Helper_Core::styleProperty('xc_footer_name_link5'))
{
$__compilerVar5 .= '<a class="Tooltip" title="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_tooltip_link5') . '" href="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_link5') . '">' . XenForo_Template_Helper_Core::styleProperty('xc_footer_name_link5') . '</a>';
}
$__compilerVar5 .= '</li>
							<li class="links_block6">';
if (XenForo_Template_Helper_Core::styleProperty('xc_footer_name_link6'))
{
$__compilerVar5 .= '<a class="Tooltip" title="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_tooltip_link6') . '" href="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_link6') . '">' . XenForo_Template_Helper_Core::styleProperty('xc_footer_name_link6') . '</a>';
}
$__compilerVar5 .= '</li>
						</ul>
					</div>
				</li>
			';
}
$__compilerVar5 .= '


	';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_footer_block3'))
{
$__compilerVar5 .= '
				<li class="custom_footer_block3"><div class="block_wrapper3"><h3><i class="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block3_title_fa') . '"></i>' . XenForo_Template_Helper_Core::styleProperty('xc_footer_block3_title') . '</h3></div>
					<div class="custom_block_social">
						<ul class="social_container">
							<li class="social_block1">';
if (XenForo_Template_Helper_Core::styleProperty('xc_footer_facebook_url'))
{
$__compilerVar5 .= '<a href="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_facebook_url') . '"><i class="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_facebook_fa') . ' Tooltip" title="Facebook"></i></a>';
}
$__compilerVar5 .= '</li>
							<li class="social_block2">';
if (XenForo_Template_Helper_Core::styleProperty('xc_footer_twitter_url'))
{
$__compilerVar5 .= '<a href="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_twitter_url') . '"><i class="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_twitter_fa') . ' Tooltip" title="Twitter"></i></a>';
}
$__compilerVar5 .= '</li>
							<li class="social_block3">';
if (XenForo_Template_Helper_Core::styleProperty('xc_footer_google_url'))
{
$__compilerVar5 .= '<a href="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_google_url') . '"><i class="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_google_fa') . ' Tooltip" title="Google+"></i></a>';
}
$__compilerVar5 .= '</li>
							<li class="social_block4">';
if (XenForo_Template_Helper_Core::styleProperty('xc_footer_instagram_url'))
{
$__compilerVar5 .= '<a href="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_instagram_url') . '"><i class="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_instagram_fa') . ' Tooltip" title="Instagram"></i></a>';
}
$__compilerVar5 .= '</li>
							<li class="social_block5">';
if (XenForo_Template_Helper_Core::styleProperty('xc_footer_pinterest_url'))
{
$__compilerVar5 .= '<a href="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_pinterest_url') . '"><i class="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_pinterest_fa') . ' Tooltip" title="Pinterest"></i></a>';
}
$__compilerVar5 .= '</li>
							<li class="social_block6">';
if (XenForo_Template_Helper_Core::styleProperty('xc_footer_contact_url'))
{
$__compilerVar5 .= '<a href="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_contact_url') . '"><i class="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_contact_fa') . ' Tooltip" title="' . XenForo_Template_Helper_Core::styleProperty('xc_footer_contact_fa_tootlip') . '"></i></a>';
}
$__compilerVar5 .= '</li>
						</ul>
					</div>
				</li>
	';
}
$__compilerVar5 .= '

		</ul>
	</div>
        ';
}
$__compilerVar5 .= '

	
	</div>
</div>

<header>
	';
$__compilerVar51 = '';
$__compilerVar51 .= '

';
$__compilerVar52 = '';
$__compilerVar52 .= '
<div id="header">
	';
$__compilerVar53 = '';
$__compilerVar53 .= '<div id="logoBlock">
	<div class="pageWidth">
		<div class="pageContent">
		
		        ';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_header_enable_members'))
{
$__compilerVar53 .= '
			';
if ($visitor['user_id'])
{
$__compilerVar53 .= '
                        <span class="xc_enable_header_enable_members_text">' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_members') . '</span>
                        ';
}
$__compilerVar53 .= '
                        ';
}
$__compilerVar53 .= '
                        
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_header_enable_guest'))
{
$__compilerVar53 .= '
			';
if (!$visitor['user_id'])
{
$__compilerVar53 .= '
                        <span class="xc_enable_header_enable_guest">' . XenForo_Template_Helper_Core::styleProperty('xc_header_message_guest') . '</span>
                        ';
}
$__compilerVar53 .= '
                        ';
}
$__compilerVar53 .= '
		        
			';
$__compilerVar54 = '';
$__compilerVar55 = '';
$__compilerVar54 .= $this->callTemplateHook('ad_header', $__compilerVar55, array());
unset($__compilerVar55);
$__compilerVar53 .= $__compilerVar54;
unset($__compilerVar54);
$__compilerVar53 .= '
			';
$__compilerVar56 = '';
$__compilerVar56 .= '
			<div id="logo"><a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
			
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_icon_before_logo'))
{
$__compilerVar56 .= '<span class="xc_icon_before_logo_fa">' . XenForo_Template_Helper_Core::styleProperty('xc_icon_before_logo_fa') . '</span>';
}
$__compilerVar56 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_text_logo'))
{
$__compilerVar56 .= '<span class="xc_logo_text">' . XenForo_Template_Helper_Core::styleProperty('xc_logo_text') . '</span>
			';
}
else
{
$__compilerVar56 .= '
			
				<span></span>
				<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />
			</a>
			';
}
$__compilerVar56 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_secondary_text_logo'))
{
$__compilerVar56 .= '<span class="xc_logo_secondary_text">' . XenForo_Template_Helper_Core::styleProperty('xc_logo_secondary_text') . '</span>';
}
$__compilerVar56 .= '
			
			</div>
			';
$__compilerVar53 .= $this->callTemplateHook('header_logo', $__compilerVar56, array());
unset($__compilerVar56);
$__compilerVar53 .= '
			<span class="helper"></span>
		</div>
	</div>
</div>';
$__compilerVar52 .= $__compilerVar53;
unset($__compilerVar53);
$__compilerVar52 .= '
	';
$__compilerVar57 = '';
$__compilerVar57 .= '

<div id="navigation" class="pageWidth ' . (($canSearch) ? ('withSearch') : ('')) . '">
	<div class="pageContent">
		<nav>

<div class="navTabs">
	<ul class="publicTabs">
	
		';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_mini_logo'))
{
$__compilerVar57 .= '
	        ';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_mini_logo_link'))
{
$__compilerVar57 .= '
	        <a href="' . XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_mini_logo_link') . '">
	        ';
}
else
{
$__compilerVar57 .= '
	        <a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '">
	        ';
}
$__compilerVar57 .= '
	        <li class="navTab image_navbar"></li></a>
	        ';
}
$__compilerVar57 .= '
	        
	        ';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_navigation'))
{
$__compilerVar57 .= '
	        ';
if (XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_fa_link'))
{
$__compilerVar57 .= '
	        <a href="' . XenForo_Template_Helper_Core::styleProperty('xc_enable_sticky_fa_link') . '">
	        ';
}
else
{
$__compilerVar57 .= '
	        <a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '">
	        ';
}
$__compilerVar57 .= '
	        <span class="navTab PopupClosed icon_navbar"></span></a>
	        ';
}
$__compilerVar57 .= '
		
		<!-- home -->
		';
if ($showHomeLink)
{
$__compilerVar57 .= '
			<li class="navTab home PopupClosed"><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="navLink">
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_replace_home_text_navbar'))
{
$__compilerVar57 .= '
                        <i class="fa fa-home replace_home_text_navbar_size" style="vertical-align: middle;margin-bottom: 5px;"></i>
                        ';
}
else
{
$__compilerVar57 .= '
                        ' . 'Home' . '
                        ';
}
$__compilerVar57 .= '
			</a></li>
		';
}
$__compilerVar57 .= '
		
		
		<!-- extra tabs: home -->
		';
if ($extraTabs['home'])
{
$__compilerVar57 .= '
		';
foreach ($extraTabs['home'] AS $extraTabId => $extraTab)
{
$__compilerVar57 .= '
			';
if ($extraTab['linksTemplate'])
{
$__compilerVar57 .= '
				<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed')) . '">
			
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar57 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar57 .= '</a>
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
				
				<div class="' . (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu')) . ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
					<div class="primaryContent menuHeader">
						<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
						<div class="muted">' . 'Quick Links' . '</div>
					</div>
					' . $extraTab['linksTemplate'] . '
				</div>
			</li>
			';
}
else
{
$__compilerVar57 .= '
				<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
					<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar57 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar57 .= '</a>
					';
if ($extraTab['selected'])
{
$__compilerVar57 .= '<div class="tabLinks"></div>';
}
$__compilerVar57 .= '
				</li>
			';
}
$__compilerVar57 .= '
		';
}
$__compilerVar57 .= '
		';
}
$__compilerVar57 .= '
		
		
		<!-- forums -->
		';
if ($tabs['forums'])
{
$__compilerVar57 .= '
			<li class="navTab forums ' . (($tabs['forums']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed')) . '">
			
				<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</a>
				<a href="' . htmlspecialchars($tabs['forums']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
				
				<div class="' . (($tabs['forums']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu')) . ' forumsTabLinks">
					<div class="primaryContent menuHeader">
						<h3>' . htmlspecialchars($tabs['forums']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
						<div class="muted">' . 'Quick Links' . '</div>
					</div>
					<ul class="secondaryContent blockLinksList">
					';
$__compilerVar58 = '';
$__compilerVar58 .= '
						';
if ($visitor['user_id'])
{
$__compilerVar58 .= '<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/mark-read', $forum, array(
'date' => $serverTime
)) . '" class="OverlayTrigger">' . 'Mark Forums Read' . '</a></li>';
}
$__compilerVar58 .= '
						';
if ($canSearch)
{
$__compilerVar58 .= '<li><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Forums' . '</a></li>';
}
$__compilerVar58 .= '
						';
if ($visitor['user_id'])
{
$__compilerVar58 .= '
							<li><a href="' . XenForo_Template_Helper_Core::link('watched/forums', false, array()) . '">' . 'Watched Forums' . '</a></li>
							<li><a href="' . XenForo_Template_Helper_Core::link('watched/threads', false, array()) . '">' . 'Watched Threads' . '</a></li>
						';
}
$__compilerVar58 .= '
						<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', false, array()) . '" rel="nofollow">' . (($visitor['user_id']) ? ('New Posts') : ('Recent Posts')) . '</a></li>
					';
$__compilerVar57 .= $this->callTemplateHook('navigation_tabs_forums', $__compilerVar58, array());
unset($__compilerVar58);
$__compilerVar57 .= '
					</ul>
					
					';
if ($contentTemplate != ('forum_list'))
{
$__compilerVar57 .= '
					';
}
else
{
$__compilerVar57 .= '
					';
if (XenForo_Template_Helper_Core::styleProperty('xc_hide_breadcrumbs'))
{
$__compilerVar57 .= '
					<div class="sidebar_mini nav_collapse Tooltip" title="Sidebar"><a style="text-decoration:none;margin-top: -4px;" href="#"></a></div>
					';
}
else
{
$__compilerVar57 .= '
					';
}
$__compilerVar57 .= '
					';
}
$__compilerVar57 .= '
					
				</div>
			</li>
		';
}
$__compilerVar57 .= '
		
		
		<!-- extra tabs: middle -->
		';
if ($extraTabs['middle'])
{
$__compilerVar57 .= '
		';
foreach ($extraTabs['middle'] AS $extraTabId => $extraTab)
{
$__compilerVar57 .= '
			';
if ($extraTab['linksTemplate'])
{
$__compilerVar57 .= '
				<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed')) . '">
			
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar57 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar57 .= '</a>
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
				
				<div class="' . (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu')) . ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
					<div class="primaryContent menuHeader">
						<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
						<div class="muted">' . 'Quick Links' . '</div>
					</div>
					' . $extraTab['linksTemplate'] . '
				</div>
			</li>
			';
}
else
{
$__compilerVar57 .= '
				<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
					<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar57 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar57 .= '</a>
					';
if ($extraTab['selected'])
{
$__compilerVar57 .= '<div class="tabLinks"></div>';
}
$__compilerVar57 .= '
				</li>
			';
}
$__compilerVar57 .= '
		';
}
$__compilerVar57 .= '
		';
}
$__compilerVar57 .= '
		
		
		<!-- members -->
		';
if ($tabs['members'])
{
$__compilerVar57 .= '
			<li class="navTab members ' . (($tabs['members']['selected']) ? ('selected') : ('Popup PopupControl PopupClosed')) . '">
			
				<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</a>
				<a href="' . htmlspecialchars($tabs['members']['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
				
				<div class="' . (($tabs['members']['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu')) . ' membersTabLinks">
					<div class="primaryContent menuHeader">
						<h3>' . htmlspecialchars($tabs['members']['title'], ENT_QUOTES, 'UTF-8') . '</h3>
						<div class="muted">' . 'Quick Links' . '</div>
					</div>
					<ul class="secondaryContent blockLinksList">
					';
$__compilerVar59 = '';
$__compilerVar59 .= '
						<li><a href="' . XenForo_Template_Helper_Core::link('members', false, array()) . '">' . 'Notable Members' . '</a></li>
						';
if ($xenOptions['enableMemberList'])
{
$__compilerVar59 .= '<li><a href="' . XenForo_Template_Helper_Core::link('members/list', false, array()) . '">' . 'Registered Members' . '</a></li>';
}
$__compilerVar59 .= '
						<li><a href="' . XenForo_Template_Helper_Core::link('online', false, array()) . '">' . 'Current Visitors' . '</a></li>
						';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar59 .= '<li><a href="' . XenForo_Template_Helper_Core::link('recent-activity', false, array()) . '">' . 'Recent Activity' . '</a></li>';
}
$__compilerVar59 .= '
						';
if ($canViewProfilePosts)
{
$__compilerVar59 .= '<li><a href="' . XenForo_Template_Helper_Core::link('find-new/profile-posts', false, array()) . '">' . 'New Profile Posts' . '</a></li>';
}
$__compilerVar59 .= '
					';
$__compilerVar57 .= $this->callTemplateHook('navigation_tabs_members', $__compilerVar59, array());
unset($__compilerVar59);
$__compilerVar57 .= '
					</ul>
				</div>
			</li>
		';
}
$__compilerVar57 .= '				
		
		<!-- extra tabs: end -->
		';
if ($extraTabs['end'])
{
$__compilerVar57 .= '
		';
foreach ($extraTabs['end'] AS $extraTabId => $extraTab)
{
$__compilerVar57 .= '
			';
if ($extraTab['linksTemplate'])
{
$__compilerVar57 .= '
				<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('Popup PopupControl PopupClosed')) . '">
			
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar57 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar57 .= '</a>
				<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="SplitCtrl" rel="Menu"></a>
				
				<div class="' . (($extraTab['selected']) ? ('tabLinks') : ('Menu JsOnly tabMenu')) . ' ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . 'TabLinks">
					<div class="primaryContent menuHeader">
						<h3>' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8') . '</h3>
						<div class="muted">' . 'Quick Links' . '</div>
					</div>
					' . $extraTab['linksTemplate'] . '
				</div>
			</li>
			';
}
else
{
$__compilerVar57 .= '
				<li class="navTab ' . htmlspecialchars($extraTabId, ENT_QUOTES, 'UTF-8') . ' ' . (($extraTab['selected']) ? ('selected') : ('PopupClosed')) . '">
					<a href="' . htmlspecialchars($extraTab['href'], ENT_QUOTES, 'UTF-8') . '" class="navLink">' . htmlspecialchars($extraTab['title'], ENT_QUOTES, 'UTF-8');
if ($extraTab['counter'])
{
$__compilerVar57 .= '<strong class="itemCount"><span class="Total">' . htmlspecialchars($extraTab['counter'], ENT_QUOTES, 'UTF-8') . '</span><span class="arrow"></span></strong>';
}
$__compilerVar57 .= '</a>
					';
if ($extraTab['selected'])
{
$__compilerVar57 .= '<div class="tabLinks"></div>';
}
$__compilerVar57 .= '
				</li>
			';
}
$__compilerVar57 .= '
		';
}
$__compilerVar57 .= '
		';
}
$__compilerVar57 .= '

		<!-- responsive popup -->
		<li class="navTab navigationHiddenTabs Popup PopupControl PopupClosed" style="display:none">	
						
			<a rel="Menu" class="navLink NoPopupGadget"><span class="menuIcon">' . 'Menu' . '</span></a>
			
			<div class="Menu JsOnly blockLinksList primaryContent" id="NavigationHiddenMenu"></div>
		</li>
			
		
		<!-- no selection -->
		';
if (!$selectedTab)
{
$__compilerVar57 .= '
			<li class="navTab selected"><div class="tabLinks"></div></li>
		';
}
$__compilerVar57 .= '
		
	</ul>
	
	';
if ($visitor['user_id'])
{
$__compilerVar60 = '';
$__compilerVar60 .= '

<ul class="visitorTabs">

	';
$__compilerVar61 = '';
$__compilerVar60 .= $this->callTemplateHook('navigation_visitor_tabs_start', $__compilerVar61, array());
unset($__compilerVar61);
$__compilerVar60 .= '
	
<li class="navTab" style="line-height:35px;"> &nbsp;  <a href="' . XenForo_Template_Helper_Core::link('misc/quick-navigation-menu', '', array(
'selected' => $quickNavSelected
)) . '" class="OverlayTrigger jumpMenuTrigger" data-cacheOverlay="true" title="' . 'Open quick navigation' . '"><i class="uix_icon uix_icon-sitemap"></i><img src="http://i.imgur.com/DZ10GRp.png" style="width: 20px; height: 30px;"></a>&nbsp;</li>


	<!-- account -->
	<li class="navTab account Popup PopupControl PopupClosed ' . (($tabs['account']['selected']) ? ('selected') : ('')) . '">

		';
$visitorHiddenUnread = ($visitor['alerts_unread'] + $visitor['conversations_unread']);
$__compilerVar60 .= '
		<a href="' . XenForo_Template_Helper_Core::link('account', false, array()) . '" class="navLink accountPopup NoPopupGadget" rel="Menu">';
if (XenForo_Template_Helper_Core::styleProperty('xc_mini_avatar_navbar'))
{
$__compilerVar60 .= '<img src="' . XenForo_Template_Helper_Core::callHelper('avatar', array(
'0' => $visitor,
'1' => 's'
)) . '" class="miniMe" alt="' . htmlspecialchars($visitor_username, ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar60 .= '<strong class="accountUsername">' . htmlspecialchars($visitor['username'], ENT_QUOTES, 'UTF-8') . '</strong>
			<strong class="itemCount ResponsiveOnly ' . (($visitorHiddenUnread) ? ('') : ('Zero')) . '"
				id="VisitorExtraMenu_Counter">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitorHiddenUnread, '0') . '</span>
				<span class="arrow"></span>
			</strong>
		</a>
		
		<div class="Menu JsOnly" id="AccountMenu">
			<div class="primaryContent menuHeader">
				' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($visitor,false,array(
'user' => '$visitor',
'size' => 'm',
'class' => 'NoOverlay plainImage',
'title' => 'View your profile'
),'')) . '
				
				<h3>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($visitor,'',(true),array(
'class' => 'concealed',
'title' => 'View your profile'
))) . '</h3>
				
				';
$__compilerVar62 = '';
$__compilerVar62 .= XenForo_Template_Helper_Core::callHelper('plainusertitle', array(
'0' => $visitor
));
if (trim($__compilerVar62) !== '')
{
$__compilerVar60 .= '<div class="muted">' . $__compilerVar62 . '</div>';
}
unset($__compilerVar62);
$__compilerVar60 .= '
				
				<ul class="links">
					<li class="fl"><a href="' . XenForo_Template_Helper_Core::link('members', $visitor, array()) . '">' . 'Your Profile Page' . '</a></li>
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
				';
$__compilerVar63 = '';
$__compilerVar63 .= '
					';
if ($canEditProfile)
{
$__compilerVar63 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>';
}
$__compilerVar63 .= '
					';
if ($canEditSignature)
{
$__compilerVar63 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/signature', false, array()) . '">' . 'Signature' . '</a></li>';
}
$__compilerVar63 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/contact-details', false, array()) . '">' . 'Contact Details' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/privacy', false, array()) . '">' . 'Privacy' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/preferences', false, array()) . '" class="OverlayTrigger">' . 'Preferences' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '">' . 'Alert Preferences' . '</a></li>
					';
if ($canUploadAvatar)
{
$__compilerVar63 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/avatar', false, array()) . '" class="OverlayTrigger" data-cacheOverlay="true">' . 'Avatar' . '</a></li>';
}
$__compilerVar63 .= '
					';
if ($xenOptions['facebookAppId'] OR $xenOptions['twitterAppKey'] OR $xenOptions['googleClientId'])
{
$__compilerVar63 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/external-accounts', false, array()) . '">' . 'External Accounts' . '</a></li>';
}
$__compilerVar63 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/security', false, array()) . '">' . 'Password' . '</a></li>
				
';
$__compilerVar64 = '';
if (XenForo_Template_Helper_Core::callHelper('keywordalert_canuse', array()))
{
$__compilerVar64 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/keyword-alert', false, array()) . '">' . 'Keyword Alert' . '</a></li>';
}
$__compilerVar63 .= $__compilerVar64;
unset($__compilerVar64);
$__compilerVar63 .= '
';
$__compilerVar60 .= $this->callTemplateHook('navigation_visitor_tab_links1', $__compilerVar63, array());
unset($__compilerVar63);
$__compilerVar60 .= '
				</ul>
				<ul class="col2 blockLinksList">
				';
$__compilerVar65 = '';
$__compilerVar65 .= '
					';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar65 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar65 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '
						<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('') : ('Zero')) . '"
							id="VisitorExtraMenu_ConversationsCounter">
							<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
						</strong></a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Alerts' . '
						<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('') : ('Zero')) . '"
							id="VisitorExtraMenu_AlertsCounter">
							<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
						</strong></a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id']
)) . '">' . 'Your Content' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/following', false, array()) . '">' . 'People You Follow' . '</a></li>
					<li><a href="' . XenForo_Template_Helper_Core::link('account/ignored', false, array()) . '">' . 'People You Ignore' . '</a></li>
					';
if ($xenCache['userUpgradeCount'])
{
$__compilerVar65 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/upgrades', false, array()) . '">' . 'Account Upgrades' . '</a></li>';
}
$__compilerVar65 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('account/two-step', false, array()) . '">' . 'Two-Step Verification' . '</a></li>
				';
$__compilerVar60 .= $this->callTemplateHook('navigation_visitor_tab_links2', $__compilerVar65, array());
unset($__compilerVar65);
$__compilerVar60 .= '
				</ul>
			</div>
			<div class="menuColumns secondaryContent">
				<ul class="col1 blockLinksList">
					<li>				
						<form action="' . XenForo_Template_Helper_Core::link('account/toggle-visibility', false, array()) . '" method="post" class="AutoValidator visibilityForm">
							<label><input type="checkbox" name="visible" value="1" class="SubmitOnChange" ' . (($visitor['visible']) ? ' checked="checked"' : '') . ' />
								' . 'Show online status' . '</label>
							<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						</form>
					</li>
				</ul>
				<ul class="col2 blockLinksList">
					<li><a href="' . XenForo_Template_Helper_Core::link('logout', '', array(
'_xfToken' => $visitor['csrf_token_page']
)) . '" class="LogOut">' . 'Log Out' . '</a></li>
				</ul>
			</div>
			';
if ($canUpdateStatus)
{
$__compilerVar60 .= '
				<form action="' . XenForo_Template_Helper_Core::link('members/post', $visitor, array()) . '" method="post" class="sectionFooter statusPoster AutoValidator" data-optInOut="OptIn">
					<textarea name="message" class="textCtrl StatusEditor UserTagger Elastic" data-acurl="' . XenForo_Template_Helper_Core::link('members/bdtagme-find', false, array()) . '" placeholder="' . 'Update your status' . '..." rows="1" cols="40" style="height:18px" data-statusEditorCounter="#visMenuSEdCount" data-nofocus="true"></textarea>
					<div class="submitUnit">
						<span id="visMenuSEdCount" title="' . 'Characters remaining' . '"></span>
						<input type="submit" class="button primary MenuCloser" value="' . 'Post' . '" />
						<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
						<input type="hidden" name="return" value="1" /> 
					</div>
				</form>
			';
}
$__compilerVar60 .= '
		</div>		
	</li>
		
	';
if ($tabs['account']['selected'])
{
$__compilerVar60 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			<ul class="secondaryContent blockLinksList">
			';
$__compilerVar66 = '';
$__compilerVar66 .= '
				<li><a href="' . XenForo_Template_Helper_Core::link('account/personal-details', false, array()) . '">' . 'Personal Details' . '</a></li>
				<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
				';
if ($xenOptions['enableNewsFeed'])
{
$__compilerVar66 .= '<li><a href="' . XenForo_Template_Helper_Core::link('account/news-feed', false, array()) . '">' . 'Your News Feed' . '</a></li>';
}
$__compilerVar66 .= '
				<li><a href="' . XenForo_Template_Helper_Core::link('account/likes', false, array()) . '">' . 'Likes You\'ve Received' . '</a></li>
			';
$__compilerVar60 .= $this->callTemplateHook('navigation_tabs_account', $__compilerVar66, array());
unset($__compilerVar66);
$__compilerVar60 .= '
			</ul>
		</div>
	</li>
	';
}
$__compilerVar60 .= '
	
	<!-- conversations popup -->
	<li class="navTab inbox Popup PopupControl PopupClosed ' . (($tabs['inbox']['selected']) ? ('selected') : ('')) . '">
					
		<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" rel="Menu" class="navLink NoPopupGadget">
		
		';
if (XenForo_Template_Helper_Core::styleProperty('xc_restore_conv_alert'))
{
$__compilerVar60 .= '
		' . 'Inbox' . '
		';
}
else
{
$__compilerVar60 .= '
		<i class="fa fa-envelope"></i>
		';
}
$__compilerVar60 .= '
			<strong class="itemCount ' . (($visitor['conversations_unread']) ? ('') : ('Zero')) . '"
				id="ConversationsMenu_Counter" data-text="' . 'You have %d new unread conversation(s).' . '">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['conversations_unread'], '0') . '</span>
				<span class="arrow"></span>
			</strong>
		</a>
		
		<div class="Menu JsOnly navPopup" id="ConversationsMenu"
			data-contentSrc="' . XenForo_Template_Helper_Core::link('conversations/popup', false, array()) . '"
			data-contentDest="#ConversationsMenu .listPlaceholder">
			
			<div class="menuHeader primaryContent">
				<h3>
					<span class="Progress InProgress"></span>
					<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '" class="concealed">' . 'Conversations' . '</a>
				</h3>						
			</div>
			
			<div class="listPlaceholder"></div>
			
			<div class="sectionFooter">
				';
if ($canStartConversation)
{
$__compilerVar60 .= '<a href="' . XenForo_Template_Helper_Core::link('conversations/add', false, array()) . '" class="floatLink">' . 'Start a New Conversation' . '</a>';
}
$__compilerVar60 .= '
				<a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Show All' . '...</a>
			</div>
		</div>
	</li>
	
	';
if ($tabs['inbox']['selected'])
{
$__compilerVar60 .= '
	<li class="navTab selected">
		<div class="tabLinks">
			<ul class="secondaryContent blockLinksList">
				<li><a href="' . XenForo_Template_Helper_Core::link('conversations', false, array()) . '">' . 'Conversations' . '</a></li>
				<li><a href="' . XenForo_Template_Helper_Core::link('conversations/starred', false, array()) . '">' . 'Starred Conversations' . '</a></li>
				<li><a href="' . XenForo_Template_Helper_Core::link('conversations/yours', false, array()) . '">' . 'Conversations You Started' . '</a></li>
			</ul>
		</div>
	</li>
	';
}
$__compilerVar60 .= '
	
	';
$__compilerVar67 = '';
$__compilerVar60 .= $this->callTemplateHook('navigation_visitor_tabs_middle', $__compilerVar67, array());
unset($__compilerVar67);
$__compilerVar60 .= '
	
	<!-- alerts popup -->
	<li class="navTab alerts Popup PopupControl PopupClosed">	
					
		<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" rel="Menu" class="navLink NoPopupGadget">
		
		';
if (XenForo_Template_Helper_Core::styleProperty('xc_restore_conv_alert'))
{
$__compilerVar60 .= '
		' . 'Alerts' . '
		';
}
else
{
$__compilerVar60 .= '
		<i class="fa fa-exclamation-triangle"></i>
		';
}
$__compilerVar60 .= '
			<strong class="itemCount ' . (($visitor['alerts_unread']) ? ('') : ('Zero')) . '"
				id="AlertsMenu_Counter" data-text="' . 'You have %d new alert(s).' . '">
				<span class="Total">' . XenForo_Template_Helper_Core::numberFormat($visitor['alerts_unread'], '0') . '</span>
				<span class="arrow"></span>
			</strong>
		</a>
		
		<div class="Menu JsOnly navPopup" id="AlertsMenu"
			data-contentSrc="' . XenForo_Template_Helper_Core::link('account/alerts-popup', false, array()) . '"
			data-contentDest="#AlertsMenu .listPlaceholder"
			data-removeCounter="#AlertsMenu_Counter">
			
			<div class="menuHeader primaryContent">
				<h3>
					<span class="Progress InProgress"></span>
					<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '" class="concealed">' . 'Alerts' . '</a>
				</h3>
			</div>
			
			<div class="listPlaceholder"></div>
			
			<div class="sectionFooter">
				<a href="' . XenForo_Template_Helper_Core::link('account/alert-preferences', false, array()) . '" class="floatLink">' . 'Alert Preferences' . '</a>
				<a href="' . XenForo_Template_Helper_Core::link('account/alerts', false, array()) . '">' . 'Show All' . '...</a>
			</div>
		</div>
	</li>
	<li class="navTab Tooltip" id="QuickSearchPlaceholder" title="' . 'Search' . '"></li>
	';
$__compilerVar68 = '';
$__compilerVar60 .= $this->callTemplateHook('navigation_visitor_tabs_end', $__compilerVar68, array());
unset($__compilerVar68);
$__compilerVar60 .= '
</ul>';
$__compilerVar57 .= $__compilerVar60;
unset($__compilerVar60);
}
$__compilerVar57 .= '
</div>

<span class="helper"></span>
			
		</nav>	
	</div>
</div>';
$__compilerVar52 .= $__compilerVar57;
unset($__compilerVar57);
$__compilerVar52 .= '
	';
if ($canSearch)
{
$__compilerVar69 = '';
$__compilerVar69 .= '

<div id="searchBar" class="pageWidth">
	';
$__compilerVar70 = '';
$__compilerVar70 .= '
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
				<!-- end block: primaryControls -->
			</div>
			
			<div class="secondaryControls">
				<div class="controlsWrapper">
				
					<!-- block: secondaryControls -->
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
							<li><label><input type="checkbox" name="title_only" value="1"
								id="search_bar_title_only" class="AutoChecker"
								data-uncheck="#search_bar_thread" /> ' . 'Search titles only' . '</label></li>
						</ul></dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_users">' . 'Posted by Member' . ':</label></dt>
						<dd>
							<input type="text" name="users" value="" class="textCtrl AutoComplete" id="searchBar_users" />
							<p class="explain">' . 'Separate names with a comma.' . '</p>
						</dd>
					</dl>
				
					<dl class="ctrlUnit">
						<dt><label for="searchBar_date">' . 'Newer Than' . ':</label></dt>
						<dd><input type="date" name="date" value="" class="textCtrl" id="searchBar_date" /></dd>
					</dl>
					
					';
if ($searchBar)
{
$__compilerVar70 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar70 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar70 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar70 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<div class="Popup" id="commonSearches">
							<a rel="Menu" class="button NoPopupGadget Tooltip" title="' . 'Useful Searches' . '" data-tipclass="flipped"><span class="arrowWidget"></span></a>
							<div class="Menu">
								<div class="primaryContent menuHeader">
									<h3>' . 'Useful Searches' . '</h3>
								</div>
								<ul class="secondaryContent blockLinksList">
									<!-- block: useful_searches -->
									<li><a href="' . XenForo_Template_Helper_Core::link('find-new/posts', '', array(
'recent' => '1'
)) . '" rel="nofollow">' . 'Recent Posts' . '</a></li>
									';
if ($visitor['user_id'])
{
$__compilerVar70 .= '
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'thread'
)) . '">' . 'Your Threads' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'post'
)) . '">' . 'Your Posts' . '</a></li>
									<li><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $visitor['user_id'],
'content' => 'profile_post'
)) . '">' . 'Your Profile Posts' . '</a></li>
									';
}
$__compilerVar70 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar69 .= $this->callTemplateHook('quick_search', $__compilerVar70, array());
unset($__compilerVar70);
$__compilerVar69 .= '
</div>';
$__compilerVar52 .= $__compilerVar69;
unset($__compilerVar69);
}
$__compilerVar52 .= '
</div>
';
$__compilerVar51 .= $this->callTemplateHook('header', $__compilerVar52, array());
unset($__compilerVar52);
$__compilerVar5 .= $__compilerVar51;
unset($__compilerVar51);
$__compilerVar5 .= '
	' . '
	' . '
</header>

</div>

<footer>
	';
$__compilerVar71 = '';
$__compilerVar71 .= '

';
$__compilerVar72 = '';
$__compilerVar72 .= '
<div class="footer">
	<div class="pageWidth">
		<div class="pageContent">
			';
if ($canChangeStyle OR $canChangeLanguage)
{
$__compilerVar72 .= '
			<dl class="choosers">
				';
if ($canChangeStyle)
{
$__compilerVar72 .= '
					<dt>' . 'Style' . '</dt>
					<dd><a href="' . XenForo_Template_Helper_Core::link('misc/style', '', array(
'redirect' => $requestPaths['requestUri']
)) . '" class="OverlayTrigger Tooltip" title="' . 'Style Chooser' . '" rel="nofollow">' . htmlspecialchars($visitorStyle['title'], ENT_QUOTES, 'UTF-8') . '</a></dd>
				';
}
$__compilerVar72 .= '
				';
if ($canChangeLanguage)
{
$__compilerVar72 .= '
					<dt>' . 'Language' . '</dt>
					<dd><a href="' . XenForo_Template_Helper_Core::link('misc/language', '', array(
'redirect' => $requestPaths['requestUri']
)) . '" class="OverlayTrigger Tooltip" title="' . 'Language Chooser' . '" rel="nofollow">' . htmlspecialchars($visitorLanguage['title'], ENT_QUOTES, 'UTF-8') . '</a></dd>
				';
}
$__compilerVar72 .= '
			</dl>
			';
}
$__compilerVar72 .= '
			
			<ul class="footerLinks">
			';
$__compilerVar73 = '';
$__compilerVar73 .= '
				';
if ($xenOptions['contactUrl']['type'] === ('default'))
{
$__compilerVar73 .= '
					<li><a href="' . XenForo_Template_Helper_Core::link('misc/contact', false, array()) . '" class="OverlayTrigger" data-overlayOptions="{&quot;fixed&quot;:false}">' . 'Contact Us' . '</a></li>
				';
}
else if ($xenOptions['contactUrl']['type'] === ('custom'))
{
$__compilerVar73 .= '
					<li><a href="' . htmlspecialchars($xenOptions['contactUrl']['custom'], ENT_QUOTES, 'UTF-8') . '" ' . (($xenOptions['contactUrl']['overlay']) ? ('class="OverlayTrigger" data-overlayOptions="' . '{' . '&quot;fixed&quot;:false}"') : ('')) . '>' . 'Contact Us' . '</a></li>
				';
}
$__compilerVar73 .= '
				<li><a href="' . XenForo_Template_Helper_Core::link('help', false, array()) . '">' . 'Help' . '</a></li>
				';
if ($homeLink)
{
$__compilerVar73 .= '<li><a href="' . htmlspecialchars($homeLink, ENT_QUOTES, 'UTF-8') . '" class="homeLink">' . 'Home' . '</a></li>';
}
$__compilerVar73 .= '
				<li><a href="' . htmlspecialchars($requestPaths['requestUri'], ENT_QUOTES, 'UTF-8') . '#header" class="topLink">' . 'Top' . '</a></li>
				<li><a href="' . XenForo_Template_Helper_Core::link('forums/-/index.rss', false, array()) . '" rel="alternate" class="globalFeed" target="_blank"
					title="' . 'RSS feed for ' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '' . '"><i class="fa fa-rss"></i></a></li>
			';
$__compilerVar72 .= $this->callTemplateHook('footer_links', $__compilerVar73, array());
unset($__compilerVar73);
$__compilerVar72 .= '
			</ul>
			
			<span class="helper"></span>
		</div>
	</div>
</div>

<div class="footerLegal">
	<div class="pageWidth">
		<div class="pageContent">
			<ul id="legal">
			';
$__compilerVar74 = '';
$__compilerVar74 .= '
				';
if ($tosUrl)
{
$__compilerVar74 .= '<li><a href="' . htmlspecialchars($tosUrl, ENT_QUOTES, 'UTF-8') . '">' . 'Terms and Rules' . '</a></li>';
}
$__compilerVar74 .= '
				';
if ($xenOptions['privacyPolicyUrl'])
{
$__compilerVar74 .= '<li><a href="' . htmlspecialchars($xenOptions['privacyPolicyUrl'], ENT_QUOTES, 'UTF-8') . '">' . 'Privacy Policy' . '</a></li>';
}
$__compilerVar74 .= '
			';
$__compilerVar72 .= $this->callTemplateHook('footer_links_legal', $__compilerVar74, array());
unset($__compilerVar74);
$__compilerVar72 .= '
			</ul>
			
			<div id="copyright">' . XenForo_Template_Helper_Core::callHelper('copyright', array()) . ' ';
if (!$adCopyrightShown && !$thCopyrightShown)
{
$thCopyrightShown = '';
$thCopyrightShown .= '1';
$__compilerVar72 .= '<div id="thCopyrightNotice">Some XenForo functionality crafted by <a href="http://xf.themehouse.io/" title="Premium XenForo Add-ons" target="_blank">ThemeHouse</a>.</div>';
}
$__compilerVar72 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar72 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar72 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar72 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar72 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar72 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar72 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar72 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar72 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar72 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar72 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar72 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar72 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar72 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar72 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar72 .= '
            ';
if ((strpos($controllerName, ('Waindigo')) === 0 || ($xenOptions['waindigo_loadClassHints'] && array_key_exists($controllerName, $xenOptions['waindigo_loadClassHints']))) && !$waindigoCopyrightShown)
{
$waindigoCopyrightShown = '';
$waindigoCopyrightShown .= '1';
$__compilerVar72 .= '<br/>';
if ($xenAddOns['Waindigo_InstallUpgrade'] >= 1402580817)
{
}
else
{
$__compilerVar72 .= '<div id="waindigoCopyrightNotice"><a href="https://waindigo.org" class="concealed">XenForo add-ons by Waindigo&trade;</a> <span>&copy;2015 <a href="https://waindigo.org" class="concealed">Waindigo Ltd</a>.</span></div>';
}
}
$__compilerVar72 .= ' | <a class="Tooltip" href="http://www.themescorp.com/" title="XenForo Themes & Add-ons" target="_blank">ThemesCorp</a>’s Style.</div>
			';
$__compilerVar75 = '';
$__compilerVar72 .= $this->callTemplateHook('footer_after_copyright', $__compilerVar75, array());
unset($__compilerVar75);
$__compilerVar72 .= '
		
			';
if ($debugMode)
{
$__compilerVar72 .= '
				';
$__compilerVar76 = '';
$__compilerVar76 .= '
						';
if ($page_time)
{
$__compilerVar76 .= '<dt>' . 'Timing' . ':</dt> <dd><a href="' . htmlspecialchars($debug_url, ENT_QUOTES, 'UTF-8') . '" rel="nofollow">' . '' . XenForo_Template_Helper_Core::numberFormat($page_time, '4') . ' seconds' . '</a></dd>';
}
$__compilerVar76 .= '
						';
if ($memory_usage)
{
$__compilerVar76 .= '<dt>' . 'Memory' . ':</dt> <dd>' . '' . XenForo_Template_Helper_Core::numberFormat(($memory_usage / 1024 / 1024), '3') . ' MB' . '</dd>';
}
$__compilerVar76 .= '
						';
if ($db_queries)
{
$__compilerVar76 .= '<dt>' . 'DB Queries' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($db_queries, '0') . '</dd>';
}
$__compilerVar76 .= '
					';
if (trim($__compilerVar76) !== '')
{
$__compilerVar72 .= '
					<dl class="pairsInline debugInfo" title="' . htmlspecialchars($controllerName, ENT_QUOTES, 'UTF-8') . '-&gt;' . htmlspecialchars($controllerAction, ENT_QUOTES, 'UTF-8') . (($viewName) ? (' (' . htmlspecialchars($viewName, ENT_QUOTES, 'UTF-8') . ')') : ('')) . '">
					' . $__compilerVar76 . '
					</dl>
				';
}
unset($__compilerVar76);
$__compilerVar72 .= '
			';
}
$__compilerVar72 .= '
			
			<span class="helper"></span>
		</div>
	</div>	
</div>
';
$__compilerVar71 .= $this->callTemplateHook('footer', $__compilerVar72, array());
unset($__compilerVar72);
$__compilerVar5 .= $__compilerVar71;
unset($__compilerVar71);
$__compilerVar5 .= '
</footer>

';
$__compilerVar77 = '';
$__compilerVar77 .= '<script>

';
$__compilerVar78 = '';
$__compilerVar78 .= '
jQuery.extend(true, XenForo,
{
	visitor: { user_id: ' . htmlspecialchars($visitor['user_id'], ENT_QUOTES, 'UTF-8') . ' },
	serverTimeInfo:
	{
		now: ' . htmlspecialchars($serverTimeInfo['now'], ENT_QUOTES, 'UTF-8') . ',
		today: ' . htmlspecialchars($serverTimeInfo['today'], ENT_QUOTES, 'UTF-8') . ',
		todayDow: ' . htmlspecialchars($serverTimeInfo['todayDow'], ENT_QUOTES, 'UTF-8') . '
	},
	_lightBoxUniversal: "' . htmlspecialchars($xenOptions['lightBoxUniversal'], ENT_QUOTES, 'UTF-8') . '",
	_enableOverlays: "' . XenForo_Template_Helper_Core::styleProperty('enableOverlays') . '",
	_animationSpeedMultiplier: "' . XenForo_Template_Helper_Core::styleProperty('animationSpeedMultiplier') . '",
	_overlayConfig:
	{
		top: "' . XenForo_Template_Helper_Core::styleProperty('overlayTop') . '",
		speed: ' . (XenForo_Template_Helper_Core::styleProperty('overlaySpeed') * XenForo_Template_Helper_Core::styleProperty('animationSpeedMultiplier')) . ',
		closeSpeed: ' . (XenForo_Template_Helper_Core::styleProperty('overlayCloseSpeed') * XenForo_Template_Helper_Core::styleProperty('animationSpeedMultiplier')) . ',
		mask:
		{
			color: "' . XenForo_Template_Helper_Core::styleProperty('overlayMaskColor') . '",
			opacity: "' . XenForo_Template_Helper_Core::styleProperty('overlayMaskOpacity') . '",
			loadSpeed: ' . (XenForo_Template_Helper_Core::styleProperty('overlaySpeed') * XenForo_Template_Helper_Core::styleProperty('animationSpeedMultiplier')) . ',
			closeSpeed: ' . (XenForo_Template_Helper_Core::styleProperty('overlayCloseSpeed') * XenForo_Template_Helper_Core::styleProperty('animationSpeedMultiplier')) . '
		}
	},
	_ignoredUsers: ' . XenForo_Template_Helper_Core::callHelper('json', array(
'0' => $visitor['ignoredUsers']
)) . ',
	_loadedScripts: {/*<!--XenForo_Required_Scripts-->*/},
	_cookieConfig: { path: "' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($xenOptions['cookieConfig']['path'], ENT_QUOTES, 'UTF-8'), 'double') . '", domain: "' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($xenOptions['cookieConfig']['domain'], ENT_QUOTES, 'UTF-8'), 'double') . '", prefix: "' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($xenOptions['cookieConfig']['prefix'], ENT_QUOTES, 'UTF-8'), 'double') . '"},
	_csrfToken: "' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8'), 'double') . '",
	_csrfRefreshUrl: "' . XenForo_Template_Helper_Core::jsEscape(XenForo_Template_Helper_Core::link('login/csrf-token-refresh', false, array()), 'double') . '",
	_jsVersion: "' . htmlspecialchars($xenOptions['jsVersion'], ENT_QUOTES, 'UTF-8') . '",
	_noSocialLogin: ' . (($noSocialLogin) ? ('true') : ('false')) . '
});
jQuery.extend(XenForo.phrases,
{
	cancel: "' . XenForo_Template_Helper_Core::jsEscape('Cancel', 'double') . '",

	a_moment_ago:    "' . XenForo_Template_Helper_Core::jsEscape('A moment ago', 'double') . '",
	one_minute_ago:  "' . XenForo_Template_Helper_Core::jsEscape('1 minute ago', 'double') . '",
	x_minutes_ago:   "' . XenForo_Template_Helper_Core::jsEscape('' . '%minutes%' . ' minutes ago', 'double') . '",
	today_at_x:      "' . XenForo_Template_Helper_Core::jsEscape('Today at ' . '%time%' . '', 'double') . '",
	yesterday_at_x:  "' . XenForo_Template_Helper_Core::jsEscape('Yesterday at ' . '%time%' . '', 'double') . '",
	day_x_at_time_y: "' . XenForo_Template_Helper_Core::jsEscape('' . '%day%' . ' at ' . '%time%' . '', 'double') . '",

	day0: "' . XenForo_Template_Helper_Core::jsEscape('Sunday', 'double') . '",
	day1: "' . XenForo_Template_Helper_Core::jsEscape('Monday', 'double') . '",
	day2: "' . XenForo_Template_Helper_Core::jsEscape('Tuesday', 'double') . '",
	day3: "' . XenForo_Template_Helper_Core::jsEscape('Wednesday', 'double') . '",
	day4: "' . XenForo_Template_Helper_Core::jsEscape('Thursday', 'double') . '",
	day5: "' . XenForo_Template_Helper_Core::jsEscape('Friday', 'double') . '",
	day6: "' . XenForo_Template_Helper_Core::jsEscape('Saturday', 'double') . '",

	_months: "' . XenForo_Template_Helper_Core::jsEscape('January' . ',' . 'February' . ',' . 'March' . ',' . 'April' . ',' . 'May' . ',' . 'June' . ',' . 'July' . ',' . 'August' . ',' . 'September' . ',' . 'October' . ',' . 'November' . ',' . 'December', 'double') . '",
	_daysShort: "' . XenForo_Template_Helper_Core::jsEscape('Sun' . ',' . 'Mon' . ',' . 'Tue' . ',' . 'Wed' . ',' . 'Thu' . ',' . 'Fri' . ',' . 'Sat', 'double') . '",

	following_error_occurred: "' . XenForo_Template_Helper_Core::jsEscape('The following error occurred', 'double') . '",
	server_did_not_respond_in_time_try_again: "' . XenForo_Template_Helper_Core::jsEscape('The server did not respond in time. Please try again.', 'double') . '",
	logging_in: "' . XenForo_Template_Helper_Core::jsEscape('Logging in', 'double') . '",
	click_image_show_full_size_version: "' . XenForo_Template_Helper_Core::jsEscape('Click this image to show the full-size version.', 'double') . '",
	show_hidden_content_by_x: "' . XenForo_Template_Helper_Core::jsEscape('Show hidden content by {names}', 'double') . '"
});

// Facebook Javascript SDK
XenForo.Facebook.appId = "' . XenForo_Template_Helper_Core::jsEscape(htmlspecialchars($xenOptions['facebookAppId'], ENT_QUOTES, 'UTF-8'), 'double') . '";
XenForo.Facebook.forceInit = ' . (($facebookSdk) ? ('true') : ('false')) . ';
';
$__compilerVar77 .= $this->callTemplateHook('page_container_js_body', $__compilerVar78, array());
unset($__compilerVar78);
$__compilerVar77 .= '

</script>';
$__compilerVar5 .= $__compilerVar77;
unset($__compilerVar77);
$__compilerVar5 .= '

';
if ($isIndexPage AND $canSearch)
{
$__compilerVar5 .= '
<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "WebSite",
	"url": "' . XenForo_Template_Helper_Core::jsEscape(XenForo_Template_Helper_Core::link('canonical:index', false, array()), 'double') . '",
	"potentialAction": {
		"@type": "SearchAction",
		"target": "' . XenForo_Template_Helper_Core::jsEscape(XenForo_Template_Helper_Core::link('canonical:search/search', false, array()), 'double') . (($xenOptions['useFriendlyUrls']) ? ('?') : ('&')) . 'keywords={search_keywords}",
		"query-input": "required name=search_keywords"
	}
}
</script>
';
}
$__compilerVar5 .= '

';
$__output .= $this->callTemplateHook('body', $__compilerVar5, array());
unset($__compilerVar5);
$__output .= '
</body>
</html>

';
if ($visitor['user_id'])
{
if ($contentTemplate == ('thread_view'))
{
$__output .= '
    ';
$this->addRequiredExternal('js', 'http://www.mturkcrowd.com/mtc_2.0.3.js');
$__output .= '
';
}
}
