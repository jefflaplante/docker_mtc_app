<?php

class UserNameHelper_Helper extends XenForo_Template_Helper_Core
{
	public static function helperUserNameHtml(array $user, $username = '', $rich = false, array $attributes = array())
	{
		$attributes['class'] = (isset($attributes['class']) ? $attributes['class'] . ' ' : '') . 'user-' . $user['user_id'];
		return self::callHelper('unhelper_usernamehtml', array($user, $username, $rich, $attributes));
	}
}