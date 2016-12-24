<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '#loginBar .xenForm {max-width: ' . XenForo_Template_Helper_Core::styleProperty('uix_pageWidth') . ';}
#loginBar .pageContent {padding: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';}

.uix_loginForm .xenForm .ctrlUnit > dd {
	width: auto;
	padding: 0;
	float: none;
}
.uix_loginForm .xenForm .uix_loginOptions .ctrlUnit > dt {display: none;}

.uix_loginForm .rememberPassword {font-size: 11px;}
.Responsive .uix_loginForm .xenForm .ctrlUnit {padding: 0;}

.xenOverlay .xenForm#pageLogin {
	max-width: 400px;
	margin: 0 auto;
	padding: 40px;
}
.xenOverlay .xenForm#pageLogin h2.heading {display: none;}
.xenOverlay .xenForm#pageLogin h2.textHeading {
	font-size: 18px;
	padding: 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ' 0;
}

.xenOverlay .xenForm#pageLogin .ctrlUnit > dt,
.xenOverlay .xenForm#pageLogin .ctrlUnit > dd {
	float: none;
	width: auto;
	text-align: left;
	padding: 0;
	margin: 0;
}
.xenOverlay .xenForm#pageLogin .ctrlUnit > dt label {
	margin-left: 0;
	font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeFontSize') . ';
	padding: 0 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ' 0;
	display: block;
}
.xenOverlay .xenForm#pageLogin .ctrlUnit > dd > input {margin-top: 0;}
.xenOverlay .xenForm#pageLogin .ctrlUnit.submitUnit dd label.rememberPassword {float: right; line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_formElementHeight') . ';}

.xenOverlay .xenForm#pageLogin .submitUnit dt {display: none;}
.xenOverlay .xenForm#pageLogin .uix_loginOptions {
	margin-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	border-top: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('uix_primaryBorder.border-color') . ';
	padding-top: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
}

.xenOverlay .xenForm#pageLogin .textCtrl.disabled {display: none;}

@media (max-width: ' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveNarrowWidth') . ') {
	.xenOverlay .xenForm#pageLogin .ctrlUnit.submitUnit dd label.rememberPassword {display: block; float: none;}
	.xenOverlay .xenForm#pageLogin {padding: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidth') . ';}
}



#XenForo a.twitterLogin span,
#XenForo a.fbLogin span,
#XenForo .googleLogin span {
	background: none;
	margin: 0;
	padding: 0 ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
	border: none;
	text-shadow: none;
	color: #FFF;
	width: auto;
	height: ' . XenForo_Template_Helper_Core::styleProperty('uix_formElementHeight') . ';
	line-height: ' . XenForo_Template_Helper_Core::styleProperty('uix_formElementHeight') . ';
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';
	text-overflow: ellipsis;
}

#XenForo a.twitterLogin span:before,
#XenForo a.fbLogin span:before,
#XenForo .googleLogin span:before {
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	margin-right: ' . XenForo_Template_Helper_Core::styleProperty('uix_gutterWidthSmall') . ';
}

#XenForo a.twitterLogin span:before {content: "\\f099";}
#XenForo a.fbLogin span:before {content: "\\f09a";}
#XenForo .googleLogin span:before {content: "\\f0d5";}

#XenForo a.twitterLogin span:hover,
#XenForo a.fbLogin span:hover,
#XenForo .googleLogin span:hover {background: rgba(0,0,0,.1);}

#XenForo a.twitterLogin,
#XenForo a.fbLogin,
#XenForo .googleLogin
{
	display: block;
	background: none;
	margin: 0;
	padding: 0;
	border: none;
	text-shadow: none;
	color: #FFF;
	width: 100%;
	height: auto;
	font-size: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalLargeFontSize') . ';
	border-radius: ' . XenForo_Template_Helper_Core::styleProperty('uix_globalBorderRadius') . ';
}

#XenForo a.twitterLogin, #loginBar a.twitterLogin {background: #77CDF0;}
#XenForo a.fbLogin, #loginBar a.fbLogin {background: #537CBE;}
#XenForo .googleLogin, #loginBar .googleLogin {background: #E9654C;}';
