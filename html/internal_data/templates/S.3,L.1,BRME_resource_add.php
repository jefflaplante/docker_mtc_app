<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__compilerVar1 = '';
$__compilerVar1 .= '
	';
if ($canChangeTitleMeta && $xenOptions['BRME_resourceMetadata']['title'] == ('user') && $xenOptions['BRME_resourceMetadata']['enabled_title'])
{
$__compilerVar1 .= '
	<dl class="ctrlUnit">
		<dt><label for="ctrl_brme_meta_title">' . 'Meta Title' . ':</label></dt>
		<dd><input type="text" id="ctrl_brme_meta_description" name="brme_meta_title" maxlength="250" data-charlimit="' . htmlspecialchars($xenOptions['BRME_titleLength'], ENT_QUOTES, 'UTF-8') . '" value="' . htmlspecialchars($resource['metaData']['title'], ENT_QUOTES, 'UTF-8') . '" class="textCtrl BRMEMetaEditor" />
			<p class="explain">' . 'Enter title for metadata. By default it will using your content title.' . '.</p>
		</dd>
	</dl>
	';
}
$__compilerVar1 .= '
	';
if ($canChangeDescriptionMeta && $xenOptions['BRME_resourceMetadata']['description'] == ('user') && $xenOptions['BRME_resourceMetadata']['enabled_description'])
{
$__compilerVar1 .= '
	<dl class="ctrlUnit">
		<dt><label for="ctrl_brme_meta_description">' . 'Meta Description' . ':</label></dt>
		<dd><input type="text" id="ctrl_brme_meta_description" name="brme_meta_description" maxlength="250" data-charlimit="' . htmlspecialchars($xenOptions['BRME_descriptionLength'], ENT_QUOTES, 'UTF-8') . '" value="' . htmlspecialchars($resource['metaData']['description'], ENT_QUOTES, 'UTF-8') . '" class="textCtrl BRMEMetaEditor" />
			<p class="explain">' . 'Enter description for metadata. By default it will using content\'s message or description.' . '.</p>
		</dd>
	</dl>
	';
}
$__compilerVar1 .= '
	';
if ($canChangeKeywordMeta && $xenOptions['BRME_resourceMetadata']['keywords'] == ('user') && $xenOptions['BRME_resourceMetadata']['enabled_keywords'])
{
$__compilerVar1 .= '
	<dl class="ctrlUnit">
		<dt><label for="ctrl_brme_meta_keywords">' . 'Meta Keywords' . ':</label></dt>
		<dd>
			<input type="text" id="ctrl_brme_meta_keywords" name="brme_meta_keywords" data-charlimit="' . htmlspecialchars($xenOptions['BRME_keywordLength'], ENT_QUOTES, 'UTF-8') . '" value="' . htmlspecialchars($resource['metaData']['keywords'], ENT_QUOTES, 'UTF-8') . '" class="textCtrl BRMEMetaEditor" />
			<p class="explain">' . 'Enter keywords metadata, separated by comma' . '.</p>
		</dd>
	</dl>
	';
}
$__compilerVar1 .= '
	';
if ($canChangeRobotIndex)
{
$__compilerVar1 .= '
	<dl class="ctrlUnit">
		<dt><label for="ctrl_brme_index">' . 'Meta Robot Index' . ':</label></dt>
		<dd>
			<select name="brme_index" id="ctrl_brme_index" class="textCtrl">
				<option value="0" ' . ((!$resource['metaData']['index']) ? ' selected="selected"' : '') . '>' . 'Not Set' . '</option>
				<option value="1" ' . (($resource['metaData']['index'] == 1) ? ' selected="selected"' : '') . '>' . 'index' . '</option>
				<option value="2" ' . (($resource['metaData']['index'] == 2) ? ' selected="selected"' : '') . '>' . 'noindex' . '</option>
			</select>
		</dd>
	</dl>
	';
}
$__compilerVar1 .= '
	';
if ($canChangeRobotFollow)
{
$__compilerVar1 .= '
	<dl class="ctrlUnit">
		<dt><label for="ctrl_brme_follow">' . 'Meta Robot Follow' . ':</label></dt>
		<dd>
			<select name="brme_follow" id="ctrl_brme_follow" class="textCtrl">
				<option value="0" ' . ((!$resource['metaData']['follow']) ? ' selected="selected"' : '') . '>' . 'Not Set' . '</option>
				<option value="1" ' . (($resource['metaData']['follow'] == 1) ? ' selected="selected"' : '') . '>' . 'follow' . '</option>
				<option value="2" ' . (($resource['metaData']['follow'] == 2) ? ' selected="selected"' : '') . '>' . 'nofollow' . '</option>
			</select>
		</dd>
	</dl>
	';
}
$__compilerVar1 .= '
	';
if (trim($__compilerVar1) !== '')
{
$__output .= '
	';
$this->addRequiredExternal('js', 'js/brivium/MetadataEssential/meta_counter.js');
$__output .= '
	<style>
		.brmeCounter{
			color: green;
		}
		.brmeCounter.warning
		{
			color: orange;
			font-weight: bold;
		}
		.brmeCounter.error
		{
			color: red;
			font-weight: bold;
		}
	</style>
	' . $__compilerVar1 . '
';
}
unset($__compilerVar1);
