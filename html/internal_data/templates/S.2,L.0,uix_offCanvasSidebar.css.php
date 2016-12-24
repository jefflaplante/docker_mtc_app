<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') > 0 || XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') > 0)
{
$__output .= '

	.hasJs #userBar {
		display: none;
	}

	.off-canvas-wrapper {
		position: relative;
		overflow-x: hidden;
		overflow-y: auto;
		width: 100%;
		min-height: 100vh;
	}
	  
	.off-canvas-wrapper > .inner-wrapper {
		position: relative;
		min-height: 100vh;
		left: 0px;
	}
	    
	.off-canvas-wrapper .exit-off-canvas {
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		height: 100%;
		z-index: 1001;
		background: ' . XenForo_Template_Helper_Core::styleProperty('overlayMaskColor') . ';
		
		display: none;
		opacity: 0;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		
		-moz-transition: opacity .2s;
		-o-transition: opacity .2s;
		-webkit-transition: opacity .2s;
		transition: opacity .2s;
	}
	
	.left-off-canvas-content, .right-off-canvas-content {
		top: 0px;
		bottom: 0px;
		width: 250px;
		display: none;
		overflow-y: auto;
		position: absolute;
		z-index: 2;
		-webkit-backface-visibility: hidden;
		
		' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style') . '
	}
	
	.left-off-canvas-content {left: -' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ';}
	.right-off-canvas-content {right: -' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ';}
	
	
	.off-canvas-wrapper.move-right .exit-off-canvas,
	.off-canvas-wrapper.move-left .exit-off-canvas {
		opacity: ' . XenForo_Template_Helper_Core::styleProperty('overlayMaskOpacity') . ';
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	}
	
	.off-canvas-wrapper.move-right .exit-off-canvas:hover,
	.off-canvas-wrapper.move-right .exit-off-canvas:focus,
	.off-canvas-wrapper.move-left .exit-off-canvas:hover,
	.off-canvas-wrapper.move-left .exit-off-canvas:focus {
	    opacity: 0.3;
	    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
	}	
	
	.csstransforms .off-canvas-wrapper > .inner-wrapper,
	.csstransforms .left-off-canvas-content,
	.csstransforms .right-off-canvas-content {
		
		-moz-transition: -moz-transform .5s; /* Older Firefox */
		-o-transition: transform .5s; 
		-o-transition: -o-transform .5s;
		
		-webkit-transition: -webkit-transform .5s; /* Older Android Browser  */
		transition: -webkit-transform .5s; /* Safari, iOS Safari, Blackberry Browser */
		transition: transform .5s; /* Chrome, Android Chrome, Firefox  */
		
		display: block
	}
	
	.csstransforms .off-canvas-wrapper.move-left > .inner-wrapper,
	.csstransforms .off-canvas-wrapper.move-left .' . (($pageIsRtl) ? ('left') : ('right')) . '-off-canvas-content {
		transform: translate(-' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ', 0);
	}
	
	.csstransforms .off-canvas-wrapper.move-right > .inner-wrapper,
	.csstransforms .off-canvas-wrapper.move-right .' . (($pageIsRtl) ? ('right') : ('left')) . '-off-canvas-content {
	 	transform: translate(' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ', 0);
	}
	
	.no-csstransforms .off-canvas-wrapper > .inner-wrapper,
	.no-csstransforms .left-off-canvas-content,
	.no-csstransforms .right-off-canvas-content {
		display: block;
	}
	.no-csstransforms .off-canvas-wrapper.move-left > .inner-wrapper {left: -' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ';right:auto;}
	.no-csstransforms .off-canvas-wrapper.move-left .right-off-canvas-content {right:0;}
	.no-csstransforms .off-canvas-wrapper.move-right > .inner-wrapper {right: -' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ';left:auto;}
	.no-csstransforms .off-canvas-wrapper.move-right .left-off-canvas-content {left:0;}
	
	/* Styling for off canvas sidebar */
	
	
	.move-right .sticky_wrapper,
	.move-left .sticky_wrapper {position: static !important;}
	
	/* hide the trigger by default */
	.uix_offCanvas_trigger {
		display: none !important;	
	}
	
	.navLink.right-off-canvas-trigger .uix_icon.uix_icon-navTrigger {
		padding-left: 4px;
	}
	
	';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') != ('0'))
{
$__output .= '
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') && XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') != ('100%'))
{
$__output .= '
		@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') . ') {
		';
}
$__output .= '
			
	
			';
if ((XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 1) || (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 1))
{
$__output .= '
				
				
			
				.Responsive #navigation .publicTabs .navTab:not(.uix_offCanvas_trigger):not(.selected) { display: none !important; }
				
				
				.Responsive #navigation .publicTabs .selected .navLink,
				.Responsive #navigation .publicTabs .selected .SplitCtrl { display: none !important; }
				
			
			';
}
$__output .= '
		
			
			';
if ((XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarLeft') == 2) || (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebarRight') == 2))
{
$__output .= '
			
				
				
				.Responsive .visitorTabs .navTab.account:not(.uix_offCanvas_trigger),
				.Responsive .visitorTabs .navTab.inbox,
				.Responsive .visitorTabs .navTab.alerts { 
					display: none !important; 
				}
			';
}
$__output .= '
			
			.Responsive .uix_offCanvas_trigger {display: list-item !important;}
			
			.Responsive #userBar.uix_offCanvasVisitorTabs.uix_noUserBarContent { display: none; }
			
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') && XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_trigger_maxWidth') != ('100%'))
{
$__output .= '	
		}
		';
}
$__output .= '
	';
}
$__output .= '
	

	.uix_sidePane ul#uix_offCanvasVisitorMenu li,
	.uix_sidePane .navTab { position: relative; }
	

	.uix_sidePane ul#uix_offCanvasVisitorMenu li > a,
	.uix_sidePane .navLink {
		display: block;
		' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink') . '
	}
	
	.uix_sidePane .navTab:first-of-type .navLink {
		border-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-style') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-width') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-color') . ';
	}
	
	.uix_sidePane .navTab.active + .navTab .navLink {
		box-shadow: 0 -' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-width') . ' ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-color') . ';
	}
	

	.uix_sidePane ul#uix_offCanvasVisitorMenu li >a:hover,
	.uix_sidePane .navLink:hover {
		' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLinkHover') . '
	}
	
	.uix_sidePane .SplitCtrl {
		display: block;
		position: absolute;
		right: 0;
		top: 0;
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.height') . ';
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.height') . ';
		width: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.height') . ';
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.color') . ';
		
		
		background: rgba(0,0,0,.2);
		border-left: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-color') . ';
		
		
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		text-align: center;
	}
	
	.uix_sidePane .SplitCtrl:hover {
		text-decoration: none;
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.color') . ';
	}
	
	.uix_sidePane .SplitCtrl:before { content: "\\f0d7"; }

	.uix_sidePane .navTab.active .SplitCtrl:before { content: "\\f0d8"; }
	
	
	.uix_sidePane .navTab.selected .SplitCtrl { background: none; }
	

	.uix_sidePane ul li.selected > a,
	.uix_sidePane .navTab.selected .navLink {
		' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navTabSelected') . '
	}
		
	.uix_sidePane .subMenu {
		-moz-transition: opacity 300ms ease, max-height 300ms ease;
		-o-transition: opacity 300ms ease, max-height 300ms ease;
		-webkit-transition: opacity 300ms ease, max-height 300ms ease;
		transition: opacity 300ms ease, max-height 300ms ease;
		
		opacity: 0;
		max-height: 0;
		overflow: hidden;
	}

	
	
	.uix_sidePane ul .subMenu .blockLinksList {
		padding: 0;
	}
		
	.uix_sidePane ul .active .subMenu {
		opacity: 1;
		max-height: 600px;
		
		-moz-transition: opacity 300ms ease, max-height 300ms ease;
		-o-transition: opacity 300ms ease, max-height 300ms ease;
		-webkit-transition: opacity 300ms ease, max-height 300ms ease;
		transition: opacity 300ms ease, max-height 300ms ease;
	}
		
	
	
	.uix_sidePane .subMenu .secondaryContent {background: transparent;}
	
	.uix_sidePane .subMenu .blockLinksList a {
		' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navTabLink') . '
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
		word-wrap: normal;
	}
	
	.uix_sidePane .subMenu .blockLinksList a:hover {
		' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navTabLinkHover') . '
	}

	.uix_sidePane .subMenu .blockLinksList a:focus { color: inherit; background-color: inherit; }




	.csstransforms .off-canvas-wrapper.move-right > .inner-wrapper, .csstransforms .off-canvas-wrapper.move-right .left-off-canvas-content {
		overflow-x: hidden;
	}
	
	.uix_sidePane_content {
		height: 100%;
		overflow-x: hidden;
		overflow-y: auto;
	}
	
	.uix_sidePane_content .uix_offCanvasPanes > ul {
		height: 0;
		
		-moz-transition: -moz-transform 0.3s ease;
		-o-transition: transform 0.3s ease;
		-o-transition: -o-transform 0.3s ease;
		
		-webkit-transition: -webkit-transform 0.3s ease;
		
		transition: -webkit-transform 0.3s ease;
		transition: transform 0.3s ease;
		
		float: left;
		width: 100%;
	}
	
	.uix_sidePane_content .uix_offCanvasPanes > ul.leftTab {
		transform: translate3d(-' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ', 0, 0);
	}
	
	.uix_sidePane_content .uix_offCanvasPanes > ul.rightTab {
		transform: translate3d(' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_style.width') . ', 0, 0);
	}
	
	.uix_sidePane_content .uix_offCanvasPanes > ul.activeTab {
		transform: translate3d(0, 0, 0);
		display: block;
	}
	
	
	
	
	.uix_offcanvasTabs {
		background-color: rgba(0,0,0,.1);
		display: table;
		width: 100%;
	}
	
	.uix_offcanvasTabs .navTab {
		min-width: 20px;
		max-width: 100px;
		display: table-cell; 
	}

	.uix_offcanvasTabs .navLink {
		display: block;
	
		border-right: solid 1px ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-color') . ';
		padding: 0 10px;
		font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeFontSize') . ';
		font-weight: bold;
		
		cursor: pointer;
		text-align: center;
		
		line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.height') . ';
		height: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.height') . ';
		
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	
		.uix_offcanvasTabs .navTab:last-child .navLink { border-right: none; }
	
	.uix_offcanvasTabs .navTab .Zero { display: none !important; }
	
	.uix_sidePane .itemCount {
		' . XenForo_Template_Helper_Core::styleProperty('alertBalloon') . '
		' . XenForo_Template_Helper_Core::styleProperty('uix_inlineAlertBalloon_style') . '
	}
	
	.uix_offCanvasVisitorTabs .primaryContent,
	.uix_offCanvasVisitorTabs .secondaryContent,
	.uix_offCanvasVisitorTabs .sectionFooter { 
		background-color: transparent; 
	}
	

	.uix_offCanvasVisitorTabs .primaryContent .avatar span { margin-left: auto; margin-right: auto; }
	.uix_offCanvasVisitorTabs .primaryContent h3 { 
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . '; 
		font-size: 20px; 
		font-weight: bold;
	}
	.uix_offCanvasVisitorTabs .statusEditorCounter { display: none; }
	.uix_offCanvasVisitorTabs .StatusEditor, .uix_offCanvasVisitorTabs .button { width: 100%; }
	.uix_offCanvasVisitorTabs .StatusEditor {
		background: rgba(0,0,0,.2);
		border: 1px solid rgba(255,255,255,.2);
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.color') . ';
	}
	
	.uix_offCanvasVisitorTabs .StatusEditor:focus {
		border-color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . ';
		min-height: 46px;
	}
	
	.uix_offCanvasVisitorTabs .button {
		display: block;
		overflow: hidden;
		box-sizing: border-box;
	}
	
	
	
	
	
	#uix_offCanvasVisitorMenu .primaryContent h3 { display: none; }
	#uix_offCanvasVisitorMenu .primaryContent h3 + .muted {text-align: center;}
	
	#uix_offCanvasVisitorMenu .primaryContent .muted { font-size: 15px; margin-top: 6px;}
	
	#uix_offCanvasVisitorMenu .navTab .navLink,
	.uix_sidePane ul#uix_offCanvasVisitorMenu li > a {
		line-height: 20px;
		height: auto;
		padding: 10px;
		font-size: 11px;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	
	#uix_offCanvasVisitorMenu .navTab,
	#uix_offCanvasVisitorMenu li {
		position: relative;
		width: 50%;
		float: left;
		border-right: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-color') . ';
		box-sizing: border-box;
	}
	
	#uix_offCanvasVisitorMenu .navTab.full,
	#uix_offCanvasVisitorMenu li.full {
		width: 100%;
		border: none;
	}
	
	#uix_offCanvasVisitorMenu .navTab:nth-child(2n),
	#uix_offCanvasVisitorMenu li:nth-child(2n) {
		border-right: 0;
	}
	
	#uix_offCanvasVisitorMenu .navTab.active .navLink,
	#uix_offCanvasVisitorMenu li.active > a {
		border-bottom-width: 1px;
	}
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorMenu .sectionFooter { 
		clear: left; 
		border: none;
	}
	
	
	
	
	#uix_offCanvasVisitorConvo .listItem,
	#uix_offCanvasVisitorAlert .listItem { 
		padding: 8px; 
		border-top: solid 1px ' . XenForo_Template_Helper_Core::styleProperty('uix_offCanvasSidebar_navLink.border-color') . '; 
		overflow-x: hidden; 
	}
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo .avatar,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert .avatar { float: left; }
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo .avatar img,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert .avatar img { width: 32px; height: 32px; }
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo .listItemText,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert .listItemText { margin-left: 40px; font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalSmallFontSize') . '; }
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo .listItem .title a,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert .listItem .title a {
		text-overflow: ellipsis;
		display: block;
	}
	
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo .listItem.unread .title a,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert .listItem.unread .title a {
		color: ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryColor') . ';
	} 
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo h3.title a,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert h3 a { 
		color: #FFF; 
		text-overflow: ellipsis;
		overflow: hidden; 
	}
	
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorConvo .listItemText a,
	.uix_offCanvasVisitorTabs ul#uix_offCanvasVisitorAlert .listItemText {
		color: ' . XenForo_Template_Helper_Core::styleProperty('faintTextColor') . ';
	}
	
	
';
}
