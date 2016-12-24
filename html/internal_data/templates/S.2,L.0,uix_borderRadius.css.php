<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if (XenForo_Template_Helper_Core::styleProperty('uix_enableBorderJS') || XenForo_Template_Helper_Core::styleProperty('uix_enableULManagerJs'))
{
$__output .= '




.noBorderRadiusTop {
	border-top-left-radius: 0 !important;
	border-top-right-radius: 0 !important;
}

.noBorderRadiusBottom {
	border-bottom-left-radius: 0 !important;
	border-bottom-right-radius: 0 !important;
}

.noBorderRadius {
	border-radius: 0 !important;
}




	

	.noBorderRadiusTop .navTabs {
		border-top-left-radius: 0 !important;
		border-top-right-radius: 0 !important;
	}
	
	.noBorderRadiusBottom .navTabs {
		border-bottom-left-radius: 0 !important;
		border-bottom-right-radius: 0 !important;
	}
	
	.noBorderRadius .navTabs { border-radius: 0 !important; }
	
	
	
	
	.noBorderRadiusBottom .navTabs .navTab.selected .tabLinks {
		border-bottom-left-radius: 0 !important;
		border-bottom-right-radius: 0 !important;
	}
	
	.noBorderRadius .navTabs .navTab.selected .tabLinks { border-radius: 0 !important; }
	

	
	
		 
	
		/* THE FIRST TAB OF THE FIRST UL */
	
		.navTabs .navLeft:first-of-type .uix_leftMost { 
			border-top-left-radius: ' . XenForo_Template_Helper_Core::styleProperty('navTabs.border-top-left-radius') . '; 
			border-bottom-left-radius: ' . XenForo_Template_Helper_Core::styleProperty('navTabs.border-bottom-left-radius') . ';
		}
		
		#userBar .navTabs .navLeft:first-of-type .uix_leftMost {
			border-top-left-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.border-top-left-radius') . '; 
			border-bottom-left-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.border-bottom-left-radius') . ';
		}
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= ' #navigation .navTabs .navLeft:first-of-type .uix_leftMost { border-bottom-left-radius: 0 !important; } ';
}
$__output .= '
		
			/* NAVLINK */
		
			.navTabs .navLeft:first-of-type .uix_leftMost .navLink {
				border-radius: inherit;
			}
		
		
		/* THE LAST TAB OF THE "LAST" UL */
		
		.navTabs .navRight .uix_rightMost {
			border-top-right-radius: ' . XenForo_Template_Helper_Core::styleProperty('navTabs.border-top-right-radius') . '; 
			border-bottom-right-radius: ' . XenForo_Template_Helper_Core::styleProperty('navTabs.border-bottom-right-radius') . ';
		}
		
		#userBar .navTabs .navRight .uix_rightMost {
			border-top-right-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.border-top-right-radius') . '; 
			border-bottom-right-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_userBar_style.border-bottom-right-radius') . ';
		}
		
		';
if (!XenForo_Template_Helper_Core::styleProperty('uix_removeTabLinks'))
{
$__output .= ' #navigation .navTabs .navRight .uix_rightMost { border-bottom-right-radius: 0 !important; } ';
}
$__output .= '
		
		/* CAN\'T USE LAST-OF-TYPE BECAUSE NATURE OF FLOAT: RIGHT */
		
		.navTabs .navRight ~ .navRight .uix_rightMost {
			border-top-right-radius: initial !important;
			border-bottom-right-radius: initial !important;	
		}
		
			/* NAVLINK */
		
			.navTabs .navRight .uix_rightMost .navLink {
				border-radius: inherit;
			}
			
		
		
		
		/* THE FIRST TAB OF THE FIRST UL */

		.noBorderRadius .navLeft:first-of-type .uix_leftMost {
			border-bottom-left-radius: 0 !important;
			border-top-left-radius: 0 !important;
		}
		
		.noBorderRadiusBottom .navTabs .navLeft:first-of-type .uix_leftMost { border-bottom-left-radius: 0 !important; }
		
		.noBorderRadiusTop .navTabs .navLeft:first-of-type .uix_leftMost { border-top-left-radius: 0 !important; }
		
		
		.activeSticky .navLeft:first-of-type .uix_leftMost {
			border-bottom-left-radius: 0 !important;
			border-top-left-radius: 0 !important;
		}
		
		
		/* THE LAST TAB OF THE "LAST" UL */
		
		.noBorderRadius .navRight .uix_rightMost {
			border-bottom-right-radius: 0 !important;
			border-top-right-radius: 0 !important;
		}
		
		.noBorderRadiusBottom .navTabs .navRight .uix_rightMost { border-bottom-right-radius: 0 !important; }
		
		.noBorderRadiusTop .navTabs .navRight .uix_rightMost { border-top-left-radius: 0 !important; }
		
		
		.activeSticky .navRight .uix_rightMost {
			border-bottom-right-radius: 0 !important;
			border-top-right-radius: 0 !important;
		}
		
	
		
	
	
	
	
	
';
}
