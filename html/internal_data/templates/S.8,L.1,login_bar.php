<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'login_bar');
$__output .= '

<div id="loginBar">
	<div class="pageContent">
		<span class="helper"></span>
	</div>
	<div class="pageWidth">
		
		';
if (XenForo_Template_Helper_Core::styleProperty('uix_loginTriggerPosition') == 0)
{
$__output .= '
		<h3 id="loginBarHandle">
			<label for="LoginControl"><a href="' . XenForo_Template_Helper_Core::link('login', false, array()) . '" class="concealed noOutline">' . (($xenOptions['registrationSetup']['enabled']) ? ('Log in or Sign up') : ('Log in')) . '</a></label>
		</h3>
		';
}
$__output .= '
		
	</div>
</div>';
