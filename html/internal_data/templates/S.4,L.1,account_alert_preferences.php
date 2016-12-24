<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Alert Preferences';
$__output .= '

';
$this->addRequiredExternal('css', 'account');
$__output .= '
';
$this->addRequiredExternal('js', 'js/xenforo/personal_details_editor.js');
$__output .= '

' . '
' . '

<form method="post" class="xenForm AutoValidator"
	action="' . XenForo_Template_Helper_Core::link('account/alert-preferences-save', false, array()) . '"
	data-fieldValidatorUrl="' . XenForo_Template_Helper_Core::link('account/validate-field.json', false, array()) . '">
	
	<h3 class="sectionHeader">' . 'Messages in Threads' . '</h3>
	<dl class="ctrlUnit">
		<dt>' . 'Receive an alert when someone' . '...</dt>
		<dd>
			<ul>
				';
$__compilerVar1 = '';
$__compilerVar1 .= '
				<li><input type="hidden" name="alertSet[post_insert]" value="1" />
					<label><input type="checkbox" value="1" name="alert[post_insert]" ' . ((!$alertOptOuts['post_insert']) ? ' checked="checked"' : '') . ' autofocus="true" /> ' . 'Replies to a watched thread' . '</label>
					<p class="hint">' . 'Someone replies to a thread you are watching' . '</p>
				</li>
				<li><input type="hidden" name="alertSet[post_insert_attachment]" value="1" />
					<label><input type="checkbox" value="1" name="alert[post_insert_attachment]" ' . ((!$alertOptOuts['post_insert_attachment']) ? ' checked="checked"' : '') . ' /> ' . 'Attaches a file to a watched thread' . '</label>
					<p class="hint">' . 'Someone replies and attaches a file to a thread you are watching' . '</p>
				</li>
				<li><input type="hidden" name="alertSet[post_quote]" value="1" />
					<label><input type="checkbox" value="1" name="alert[post_quote]" ' . ((!$alertOptOuts['post_quote']) ? ' checked="checked"' : '') . ' /> ' . 'Quotes your message' . '</label>
					<p class="hint">' . 'Someone directly quotes one of your messages in a thread' . '</p>
				</li>
				<li><input type="hidden" name="alertSet[post_tag]" value="1" />
					<label><input type="checkbox" value="1" name="alert[post_tag]" ' . ((!$alertOptOuts['post_tag']) ? ' checked="checked"' : '') . ' /> ' . 'Mentions you in a message' . '</label>
					<p class="hint">' . 'Someone mentions you in a message' . '</p>
				</li>
				<li><input type="hidden" name="alertSet[post_like]" value="1" />
					<label><input type="checkbox" value="1" name="alert[post_like]" ' . ((!$alertOptOuts['post_like']) ? ' checked="checked"' : '') . ' /> ' . 'Likes your message' . '</label>
					<p class="hint">' . 'Someone likes one of your messages in a thread' . '</p>
				</li>
				';
$__output .= $this->callTemplateHook('account_alerts_messages_in_threads', $__compilerVar1, array());
unset($__compilerVar1);
$__output .= '
			</ul>
		</dd>
	</dl>

	';
$__compilerVar2 = '';
$__output .= $this->callTemplateHook('account_alerts_after_posts', $__compilerVar2, array());
unset($__compilerVar2);
$__output .= '
	
	<h3 class="sectionHeader">' . 'Messages on Profile Pages' . '</h3>
	<dl class="ctrlUnit">
		<dt>' . 'Receive an alert when someone' . '...</dt>
		<dd>
			<ul>
				';
$__compilerVar3 = '';
$__compilerVar3 .= '
				<li><input type="hidden" name="alertSet[profile_post_insert]" value="1" />
					<label><input type="checkbox" value="1" name="alert[profile_post_insert]" ' . ((!$alertOptOuts['profile_post_insert']) ? ' checked="checked"' : '') . ' /> ' . 'Posts on your profile' . '</label>
					<p class="hint">' . 'Someone posts a message on your profile page' . '</p>
				</li>
				<li><input type="hidden" name="alertSet[profile_post_comment_your_profile]" value="1" />
					<label><input type="checkbox" value="1" name="alert[profile_post_comment_your_profile]" ' . ((!$alertOptOuts['profile_post_comment_your_profile']) ? ' checked="checked"' : '') . ' /> ' . 'Comments on your profile or status' . '</label>
					<p class="hint">' . 'Someone comments on a message on your profile page or your status' . '</p>
				</li>
				<li><input type="hidden" name="alertSet[profile_post_comment_your_post]" value="1" />
					<label><input type="checkbox" value="1" name="alert[profile_post_comment_your_post]" ' . ((!$alertOptOuts['profile_post_comment_your_post']) ? ' checked="checked"' : '') . ' /> ' . 'Comments on your profile posts for other members' . '</label>
					<p class="hint">' . 'Someone comments on a message you left on someone else\'s profile' . '</p>
				</li>
				<li><input type="hidden" name="alertSet[profile_post_comment_other_commenter]" value="1" />
					<label><input type="checkbox" value="1" name="alert[profile_post_comment_other_commenter]" ' . ((!$alertOptOuts['profile_post_comment_other_commenter']) ? ' checked="checked"' : '') . ' /> ' . 'Also comments on a profile post' . '</label>
					<p class="hint">' . 'Someone comments on a profile post that you have commented on' . '</p>
				</li>
				<li><input type="hidden" name="alertSet[profile_post_tag]" value="1" />
					<label><input type="checkbox" value="1" name="alert[profile_post_tag]" ' . ((!$alertOptOuts['profile_post_tag']) ? ' checked="checked"' : '') . ' /> ' . 'Mentions you in a profile post or comment' . '</label>
					<p class="hint">' . 'Someone mentions you in a post or comment on someone\'s profile' . '</p>
				</li>
				<li><input type="hidden" name="alertSet[profile_post_like]" value="1" />
					<label><input type="checkbox" value="1" name="alert[profile_post_like]" ' . ((!$alertOptOuts['profile_post_like']) ? ' checked="checked"' : '') . ' /> ' . 'Likes your profile post' . '</label>
					<p class="hint">' . 'Someone likes a message you left on a member profile page' . '</p>
				</li>
				<li><input type="hidden" name="alertSet[profile_post_comment_like]" value="1" />
					<label><input type="checkbox" value="1" name="alert[profile_post_comment_like]" ' . ((!$alertOptOuts['profile_post_comment_like']) ? ' checked="checked"' : '') . ' /> ' . 'Likes your profile post comment' . '</label>
					<p class="hint">' . 'Someone likes a comment you made on a profile post' . '</p>
				</li>
				';
$__output .= $this->callTemplateHook('account_alerts_messages_on_profile_pages', $__compilerVar3, array());
unset($__compilerVar3);
$__output .= '
			</ul>
		</dd>
	</dl>
	
	';
$__compilerVar4 = '';
$__output .= $this->callTemplateHook('account_alerts_after_profile_posts', $__compilerVar4, array());
unset($__compilerVar4);
$__output .= '
		
	<h3 class="sectionHeader">' . 'Achievements' . '</h3>
	<dl class="ctrlUnit">
		<dt>' . 'Receive an alert when you receive a' . '...</dt>
		<dd>
			<ul>
				';
$__compilerVar5 = '';
$__compilerVar5 .= '
				<li><input type="hidden" name="alertSet[user_following]" value="1" />
					<label><input type="checkbox" value="1" name="alert[user_following]" ' . ((!$alertOptOuts['user_following']) ? ' checked="checked"' : '') . ' /> ' . 'New follower' . '</label
					 ><p class="hint">' . 'Someone starts following you' . '</p>
				</li>
				';
if ($xenOptions['enableTrophies'])
{
$__compilerVar5 .= '
					<li><input type="hidden" name="alertSet[user_trophy]" value="1" />
						<label><input type="checkbox" value="1" name="alert[user_trophy]" ' . ((!$alertOptOuts['user_trophy']) ? ' checked="checked"' : '') . ' /> ' . 'New trophy' . '</label>
						<p class="hint">' . 'You are awarded a new trophy for passing a milestone' . '</p>
					</li>
				';
}
$__compilerVar5 .= '
				';
$__output .= $this->callTemplateHook('account_alerts_achievements', $__compilerVar5, array());
unset($__compilerVar5);
$__output .= '
			</ul>
		</dd>
	</dl>
	
	';
$__compilerVar6 = '';
$__output .= $this->callTemplateHook('account_alerts_extra', $__compilerVar6, array());
unset($__compilerVar6);
$__output .= '

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" name="save" value="' . 'Save Changes' . '" accesskey="s" class="button primary" /></dd>
	</dl>
	
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
</form>';
