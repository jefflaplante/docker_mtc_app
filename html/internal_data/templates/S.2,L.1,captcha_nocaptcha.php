<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<div class="NoCaptcha" data-sitekey="' . htmlspecialchars($siteKey, ENT_QUOTES, 'UTF-8') . '"></div>

<noscript>
	<div style="width: 302px; height: 352px;">
		<div style="width: 302px; height: 352px; position: relative;">
			<div style="width: 302px; height: 352px; position: absolute;">
				<iframe src="https://www.google.com/recaptcha/api/fallback?k=' . urlencode($siteKey) . '" frameborder="0" scrolling="no" style="width: 302px; height:352px; border-style: none;"></iframe>
			</div>
			<div style="width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;">
				<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0px; padding: 0px; resize: none;" value=""></textarea>
			</div>
		</div>
	</div>
</noscript>';
