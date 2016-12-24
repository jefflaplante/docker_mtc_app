<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '
';
$uix_searchPosition = '';
if ((XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 1 && (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2 || (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)) || (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 0 && XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))))
{
$uix_searchPosition .= '2';
}
else
{
$uix_searchPosition .= XenForo_Template_Helper_Core::styleProperty('uix_searchPosition');
}
$__output .= '

<div id="logoBlock" ' . (($canSearch && $uix_searchPosition == 1) ? ('class="withSearch"') : ('')) . '>

	';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)
{
$__output .= '
	<div class="pageWidth">
	';
}
$__output .= '	
		
		<div class="pageContent">
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') == 1)
{
$__output .= '
		<div class="pageWidth">
		';
}
$__output .= '
			
		';
$__compilerVar1 = '';
$__compilerVar1 .= '
		<div id="logo"><a href="' . htmlspecialchars($logoLink, ENT_QUOTES, 'UTF-8') . '">
			<span></span>
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoText'))
{
$__compilerVar1 .= '<h2 class="uix_textLogo">';
if (XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon'))
{
$__compilerVar1 .= '<i class="uix_icon ' . XenForo_Template_Helper_Core::styleProperty('uix_logoTextIcon') . '"></i>';
}
$__compilerVar1 .= XenForo_Template_Helper_Core::styleProperty('uix_logoText') . '</h2>';
}
else
{
$__compilerVar1 .= '<img src="' . XenForo_Template_Helper_Core::styleProperty('headerLogoPath') . '" alt="' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '" />';
}
$__compilerVar1 .= '
			';
if (XenForo_Template_Helper_Core::styleProperty('uix_sloganText'))
{
$__compilerVar1 .= '<div class="uix_slogan">' . XenForo_Template_Helper_Core::styleProperty('uix_sloganText') . '</div>';
}
$__compilerVar1 .= '
		</a></div>
		';
$__output .= $this->callTemplateHook('header_logo', $__compilerVar1, array());
unset($__compilerVar1);
$__output .= '
		
		';
if ($canSearch && $uix_searchPosition == 1)
{
$__output .= '
			';
$__compilerVar2 = '';
$__compilerVar2 .= '
';
$uix_searchPosition = '';
if ((XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 1 && (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 2 || (XenForo_Template_Helper_Core::styleProperty('uix_navStyle') == 3 && XenForo_Template_Helper_Core::styleProperty('uix_pageStyle') != 1)) || (XenForo_Template_Helper_Core::styleProperty('uix_searchPosition') == 0 && XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))))
{
$uix_searchPosition .= '2';
}
else
{
$uix_searchPosition .= XenForo_Template_Helper_Core::styleProperty('uix_searchPosition');
}
$__compilerVar2 .= '

' . '

<div id="searchBar" class="' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('hasSearchButton') : ('')) . '">
	';
$__compilerVar3 = '';
$__compilerVar3 .= '
	<i id="QuickSearchPlaceholder" class="uix_icon uix_icon-search" title="' . 'Search' . '"></i>
	
	';
if ($uix_searchPosition == 1)
{
$__compilerVar3 .= '
		';
$__compilerVar4 = '';
if ($canSearch && XenForo_Template_Helper_Core::styleProperty('uix_searchMinimalSize'))
{
$__compilerVar4 .= '

<div id="uix_searchMinimal">
	<form action="index.php?search/search" method="post">
		<i id="uix_searchMinimalClose" class="uix_icon uix_icon-close"  title="' . 'Close' . '"></i>
		<i id="uix_searchMinimalOptions" class="uix_icon uix_icon-cog" title="' . 'Options' . '"></i>
		<div id="uix_searchMinimalInput" >
			<input type="search" name="keywords" value="" placeholder="' . 'Search' . '..." results="0" />
		</div>
		<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	</form>
</div>

';
}
$__compilerVar3 .= $__compilerVar4;
unset($__compilerVar4);
$__compilerVar3 .= '
	';
}
$__compilerVar3 .= '
	
	
	<fieldset id="QuickSearch">
		<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="post" class="formPopup">
			
			<div class="primaryControls">
				<!-- block: primaryControls -->
				<i class="uix_icon uix_icon-search" onclick=\'' . ((XenForo_Template_Helper_Core::styleProperty('uix_searchButton')) ? ('$("#QuickSearch form").submit()') : ('$("#QuickSearch .primaryControls input").focus()')) . '\'></i>
				<input type="search" name="keywords" value="" class="textCtrl" placeholder="' . 'Search' . '..." results="0" title="' . 'Enter your search and hit enter' . '" id="QuickSearchQuery" />				
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
$__compilerVar3 .= '
					<dl class="ctrlUnit">
						<dt></dt>
						<dd><ul>
								';
foreach ($searchBar AS $constraint)
{
$__compilerVar3 .= '
									<li>' . $constraint . '</li>
								';
}
$__compilerVar3 .= '
						</ul></dd>
					</dl>
					';
}
$__compilerVar3 .= '
				</div>
				<!-- end block: secondaryControls -->
				
				<dl class="ctrlUnit submitUnit">
					<dt></dt>
					<dd>
						<input type="submit" value="' . 'Search' . '" class="button primary Tooltip" title="' . 'Find Now' . '" />
						<a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '" class="button moreOptions Tooltip" title="' . 'Advanced Search' . '">' . 'More' . '...</a>
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
$__compilerVar3 .= '
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
$__compilerVar3 .= '
									<!-- end block: useful_searches -->
								</ul>
							</div>
						</div>
					</dd>
				</dl>
				
			</div>
			
			<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
		</form>		
	</fieldset>
	';
$__compilerVar2 .= $this->callTemplateHook('quick_search', $__compilerVar3, array());
unset($__compilerVar3);
$__compilerVar2 .= '

</div>';
$__output .= $__compilerVar2;
unset($__compilerVar2);
$__output .= '
		';
}
else
{
$__output .= '
			';
$__compilerVar5 = '';
$__compilerVar6 = '';
$__compilerVar6 .= '
	
		';
$__compilerVar7 = '';
$__compilerVar7 .= '
				';
$__compilerVar8 = '';
$__compilerVar7 .= $this->callTemplateHook('ad_header', $__compilerVar8, array());
unset($__compilerVar8);
$__compilerVar7 .= '
				
				
				
				

				
			';
if (trim($__compilerVar7) !== '')
{
$__compilerVar6 .= '
			' . $__compilerVar7 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar6 .= '
			<div>' . 'Template' . ': ad_header</div>
		';
}
unset($__compilerVar7);
$__compilerVar6 .= '
	
	';
if (trim($__compilerVar6) !== '')
{
$__compilerVar5 .= '
	<div class="funbox">
	<div class="funboxWrapper">
	' . $__compilerVar6 . '
	</div>
	</div>
	
';
}
unset($__compilerVar6);
$__output .= $__compilerVar5;
unset($__compilerVar5);
$__output .= '
		';
}
$__output .= '
			
		<span class="helper"></span>
		</div>
	</div>	
</div>';
