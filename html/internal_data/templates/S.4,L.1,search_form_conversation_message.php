<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__extraData['title'] = '';
$__extraData['title'] .= 'Search Conversations';
$__output .= '

';
$__extraData['navigation'] = array();
$__extraData['navigation'][] = array('href' => XenForo_Template_Helper_Core::link('full:search', false, array()), 'value' => 'Search');
$__output .= '

<form action="' . XenForo_Template_Helper_Core::link('search/search', false, array()) . '" method="conversationMessage" class="xenForm AutoValidator"
	data-optInOut="optIn"
	data-redirect="true">

	';
$__compilerVar1 = '';
$__compilerVar1 .= '<ul class="tabs">
	';
$__compilerVar2 = '';
$__compilerVar2 .= '
		<li' . (($searchType == ('')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', false, array()) . '">' . 'Search Everything' . '</a></li>
		<li' . (($searchType == ('post')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'post'
)) . '">' . 'Search Threads and Posts' . '</a></li>
		<li' . (($searchType == ('profile_post')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'profile_post'
)) . '">' . 'Search Profile Posts' . '</a></li>
	
';
$__compilerVar3 = '';
$__compilerVar3 .= '<li' . (($searchType == ('conversation_message')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('search', '', array(
'type' => 'conversation_message'
)) . '">' . 'Search Conversations' . '</a></li>';
$__compilerVar2 .= $__compilerVar3;
unset($__compilerVar3);
$__compilerVar2 .= '
';
$__compilerVar1 .= $this->callTemplateHook('search_form_tabs', $__compilerVar2, array());
unset($__compilerVar2);
$__compilerVar1 .= '
	';
if ($xenOptions['enableTagging'])
{
$__compilerVar1 .= '
		<li' . (($searchType == ('tags')) ? (' class="active"') : ('')) . '><a href="' . XenForo_Template_Helper_Core::link('tags', false, array()) . '">' . 'Search Tags' . '</a></li>
	';
}
$__compilerVar1 .= '
	</ul>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
	
	';
if ($search['conversation'])
{
$__output .= '
		';
$this->addRequiredExternal('css', 'search_form_conversationMessage');
$__output .= '
		<dl class="ctrlUnit" id="conversationConstraint">
			<dt>' . 'search_only_in_conversation' . ':</dt>
			<dd><a href="javascript:" title="' . 'Remove Filter' . '" id="TitleRemove">x</a>
				<a href="' . XenForo_Template_Helper_Core::link('conversations', $search['conversation'], array()) . '" class="title">' . htmlspecialchars($search['conversation']['title'], ENT_QUOTES, 'UTF-8') . '</a>
				<input type="hidden" name="conversation_id" value="' . htmlspecialchars($search['conversation']['conversation_id'], ENT_QUOTES, 'UTF-8') . '" /></dd>
		</dl>
	';
}
$__output .= '
	
	<dl class="ctrlUnit">
		<dt><label for="ctrl_keywords">' . 'Keywords' . ':</label></dt>
		<dd>
			<ul>
				<li><input type="search" name="keywords" value="' . htmlspecialchars($search['keywords'], ENT_QUOTES, 'UTF-8') . '" results="0" class="textCtrl" id="ctrl_keywords" autofocus="true" /></li>
				<li><label for="ctrl_title_only"><input type="checkbox" name="title_only" id="ctrl_title_only" value="1" ' . (($search['title_only']) ? ' checked="checked"' : '') . ' /> ' . 'Search titles only' . '</label></li>
			</ul>
		</dd>
	</dl>

	<fieldset>
		<dl class="ctrlUnit">
			<dt><label for="ctrl_users">' . 'Posted by Member' . ':</label></dt>
			<dd>
				<ul>
					<li>
						<input type="text" name="users" value="' . htmlspecialchars($search['users'], ENT_QUOTES, 'UTF-8') . '" class="textCtrl AutoComplete" id="ctrl_users" />
						<p class="explain">' . 'Separate names with a comma.' . '</p>
					</li>
					<li><label><input type="checkbox" name="user_content" value="conversation" ' . (($search['user_content'] == ('conversation')) ? ' checked="checked"' : '') . ' /> ' . 'Search conversations started by this member only' . '</label></li>
				</ul>
			</dd>
		</dl>
	</fieldset>

	<fieldset>
		<dl class="ctrlUnit">
			<dt><label for="ctrl_date">' . 'Newer Than' . ':</label></dt>
			<dd>
				<input type="date" name="date" value="' . htmlspecialchars($search['date'], ENT_QUOTES, 'UTF-8') . '" class="textCtrl" id="ctrl_date" />
			</dd>
		</dl>
	
		<dl class="ctrlUnit">
			<dt><label for="ctrl_reply_count">' . 'Minimum Number of Replies' . ':</label></dt>
			<dd>
				<!-- Chrome does horrible things with input:number -->
				<input type="number" name="reply_count" value="' . htmlspecialchars($search['reply_count'], ENT_QUOTES, 'UTF-8') . '" class="textCtrl" id="ctrl_reply_count" min="0" step="5" />
			</dd>
		</dl>
	</fieldset>
	
	';
$__compilerVar4 = '';
$__compilerVar4 .= '
	';
if ($prefixes)
{
$__compilerVar4 .= '		
		<dl class="ctrlUnit">
			<dt><label for="ctrl_prefixes">' . 'conversation_prefixes' . ':</label></dt>
			<dd><select name="prefixes[]" class="textCtrl" size="5" multiple="multiple" id="ctrl_prefixes">
				<option value=""' . ((!$search['prefixes']) ? ' selected="selected"' : '') . '>(' . 'Any' . ')</option>
				';
foreach ($prefixes AS $prefixGroupId => $_prefixes)
{
$__compilerVar4 .= '
					';
if ($prefixGroupId)
{
$__compilerVar4 .= '
					<optgroup label="' . XenForo_Template_Helper_Core::callHelper('conversationPrefixGroup', array(
'0' => $prefixGroupId
)) . '">
						';
foreach ($_prefixes AS $prefixId => $prefix)
{
$__compilerVar4 .= '
							<option value="' . htmlspecialchars($prefixId, ENT_QUOTES, 'UTF-8') . '"' . (($search['prefixes'][$prefixId]) ? ' selected="selected"' : '') . '>' . htmlspecialchars($prefix['title'], ENT_QUOTES, 'UTF-8') . '</option>
						';
}
$__compilerVar4 .= '
					</optgroup>
					';
}
else
{
$__compilerVar4 .= '
						';
foreach ($_prefixes AS $prefixId => $prefix)
{
$__compilerVar4 .= '
							<option value="' . htmlspecialchars($prefixId, ENT_QUOTES, 'UTF-8') . '"' . (($search['prefixes'][$prefixId]) ? ' selected="selected"' : '') . '>' . htmlspecialchars($prefix['title'], ENT_QUOTES, 'UTF-8') . '</option>
						';
}
$__compilerVar4 .= '
					';
}
$__compilerVar4 .= '	
				';
}
$__compilerVar4 .= '
			</select></dd>
		</dl>			
	';
}
$__compilerVar4 .= '
	';
if (trim($__compilerVar4) !== '')
{
$__output .= '
	<fieldset>
	' . $__compilerVar4 . '
	</fieldset>
	';
}
unset($__compilerVar4);
$__output .= '

	<dl class="ctrlUnit">
		<dt><label>' . 'Order By' . ':</label></dt>
		<dd>
			<ul>
				<li><label for="ctrl_order_date"><input type="radio" name="order" id="ctrl_order_date" value="date"' . (($search['order'] == ('date')) ? ' checked="checked"' : '') . ' /> ' . 'Most Recent' . '</label></li>
				<li><label for="ctrl_order_replies"><input type="radio" name="order" id="ctrl_order_replies" value="replies"' . (($search['order'] == ('replies')) ? ' checked="checked"' : '') . ' /> ' . 'Most Replies' . '</label></li>
				';
if ($supportsRelevance)
{
$__output .= '<li><label for="ctrl_order_relevance"><input type="radio" name="order" id="ctrl_order_relevance" value="relevance"' . (($search['order'] == ('relevance')) ? ' checked="checked"' : '') . ' /> ' . 'Relevance' . '</label></li>';
}
$__output .= '
			</ul>
		</dd>
	</dl>

	<dl class="ctrlUnit">
		<dt></dt>
		<dd><label for="ctrl_group_discussion"><input type="checkbox" name="group_discussion" id="ctrl_group_discussion" value="1"' . (($search['group_discussion']) ? ' checked="checked"' : '') . ' /> ' . 'Display results as conversations' . '</label></dd>
	</dl>

	<dl class="ctrlUnit submitUnit">
		<dt></dt>
		<dd><input type="submit" value="' . 'Search' . '" accesskey="s" class="button primary" /></dd>
	</dl>

	<input type="hidden" name="type" value="conversation_message" />
	<input type="hidden" name="_xfToken" value="' . htmlspecialchars($visitor['csrf_token_page'], ENT_QUOTES, 'UTF-8') . '" />
	
	<script>
	
	$(function()
	{
		$(\'#TitleRemove\').click(function(e)
		{
			$(this).closest(\'dl.ctrlUnit\').xfRemove();
		});
	});
	
	</script>
</form>';
