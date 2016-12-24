<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Start a New Conversation';
$__output .= '


<div class="formOverlay">
<a class="close OverlayCloser"></a>
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaredirect'))
{
$__output .= '<form action="' . XenForo_Template_Helper_Core::link('conversations/insert', false, array()) . '" target="popup" method="post" class="xenForm Preview AutoValidator" data-previewUrl="' . XenForo_Template_Helper_Core::link('conversations/preview', false, array()) . '" >
';
}
else
{
$__output .= '<form action="' . XenForo_Template_Helper_Core::link('conversations/insert', false, array()) . '" method="post" class="xenForm Preview AutoValidator" data-previewUrl="' . XenForo_Template_Helper_Core::link('conversations/preview', false, array()) . '" data-redirect="on">
';
}
$__output .= '
        <dl class="ctrlUnit">
		<dt><label for="ctrl_recipients">' . (($remaining == 1) ? ('Participant' . ':') : ('Participants' . ':')) . '</label></dt>
		<dd>
			<input type="text" name="recipients" value="' . htmlspecialchars($to, ENT_QUOTES, 'UTF-8') . '" id="ctrl_recipients" class="textCtrl AutoComplete ' . (($remaining == 1) ? ('AcSingle') : ('')) . '" />
			';
if ($remaining != 1)
{
$__output .= '
				<p class="explain">' . 'Separate names with a comma.' . ' ';
if ($remaining > 0)
{
$__output .= 'You may invite up to ' . XenForo_Template_Helper_Core::numberFormat($remaining, '0') . ' member(s).';
}
$__output .= '</p>
			';
}
$__output .= '
		</dd>
	</dl>

	<fieldset>
		<dl class="ctrlUnit fullWidth surplusLabel">
			<dt><label for="ctrl_title">' . 'Title' . ':</label></dt>
			<dd><input type="text" name="title" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuasubject'))
{
$__output .= 'value="' . '<No Subject>' . '" onfocus="this.select()"';
}
$__output .= ' class="textCtrl titleCtrl" id="ctrl_title" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuafocus'))
{
$__output .= 'autofocus="on"';
}
$__output .= ' maxlength="100" value="' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '" placeholder="' . 'Conversation Title' . '..."	data-liveTitleTemplate="' . 'Start a New Conversation' . ': <em>%s</em>" /></dd>
		</dl>
	
		<dl class="ctrlUnit fullWidth">
			<dt></dt>
                ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaeditor'))
{
$__output .= '
                    <dd>' . $editorTemplate . '</dd>
                ';
}
else
{
$__output .= '
                <dd><textarea color="#ffffff" name="message" id="ctrl_message" rows="8" class="textCtrl Elastic"></textarea></dd>
                ';
}
$__output .= '

		</dl>
	</fieldset>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>

		<dd>
                    <input type="submit" value="' . 'Start a Conversation' . '" accesskey="s" class="button primary" />
                </dd>
	</dl>
        
	<dl class="ctrlUnit">
		<dt></dt>
		<dd>
			<ul>
				<li><label for="ctrl_open_invite"><input type="checkbox" name="open_invite" id="ctrl_open_invite" value="1" /> ' . 'Allow anyone in the conversation to invite others' . '</label></li>
				<li><label for="ctrl_conversation_locked"><input type="checkbox" name="conversation_locked" id="ctrl_conversation_locked" value="1" /> ' . 'Lock conversation (no responses will be allowed)' . '</label></li>
			</ul>
		</dd>
	</dl>

	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>
</div>';
