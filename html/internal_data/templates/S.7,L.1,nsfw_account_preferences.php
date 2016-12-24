<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<h3 class="sectionHeader">' . 'NSFW Options' . '</h3>

<dl class="ctrlUnit">
	<dt>' . 'Mode Detection Mechanism' . ':</dt>
	<dd>
		<ul>
			<li>
				<label for="ctrl_nsfw_mode_machine">
					<input type="radio" name="nsfw_mode" value="machine" class="Disabler" id="ctrl_nsfw_mode_machine" ' . ((!$visitor['nsfw_options']['all']) ? ' checked="checked"' : '') . ' />
					' . 'By machines' . '
				</label>
				<ul id="ctrl_nsfw_mode_machine_Disabler">
					';
if ($visitor['nsfw_options']['machines'])
{
$__output .= '
						';
foreach ($visitor['nsfw_options']['machines'] AS $machineId => $machine)
{
$__output .= '
							';
$__compilerVar1 = '';
$this->addRequiredExternal('css', 'nsfw');
$__compilerVar1 .= '

<li class="NSFW_Machine">
	';
if ($machine['name'])
{
$__compilerVar1 .= '
		' . 'Machine ID' . ': ' . htmlspecialchars($machine['name'], ENT_QUOTES, 'UTF-8') . '.
		' . 'First seen' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($machine['first_seen'],array(
'time' => '$machine.first_seen'
))) . '
		
		<input type="hidden" name="nsfw_machines[' . htmlspecialchars($machineId, ENT_QUOTES, 'UTF-8') . '][name]" value="' . htmlspecialchars($machine['name'], ENT_QUOTES, 'UTF-8') . '" />
		<input type="hidden" name="nsfw_machines[' . htmlspecialchars($machineId, ENT_QUOTES, 'UTF-8') . '][first_seen]" value="' . htmlspecialchars($machine['first_seen'], ENT_QUOTES, 'UTF-8') . '" />
	';
}
else
{
$__compilerVar1 .= '
		<input type="text" name="nsfw_machines[' . htmlspecialchars($machineId, ENT_QUOTES, 'UTF-8') . '][name]" value="' . htmlspecialchars($machine['name'], ENT_QUOTES, 'UTF-8') . '" placeholder="' . 'new machine name' . '" class="textCtrl" />
		<input type="hidden" name="nsfw_machines[' . htmlspecialchars($machineId, ENT_QUOTES, 'UTF-8') . '][first_seen]" value="' . htmlspecialchars($nsfw_time, ENT_QUOTES, 'UTF-8') . '" />
	';
}
$__compilerVar1 .= '
	
	';
if ($machineId == $nsfw_machineId)
{
$__compilerVar1 .= '(' . 'this machine' . ')';
}
$__compilerVar1 .= '
	
	';
if ($machine['name'])
{
$__compilerVar1 .= '
		<label for="ctrl_nsfw_machine_delete_' . htmlspecialchars($machineId, ENT_QUOTES, 'UTF-8') . '">
			<input type="checkbox" name="nsfw_machines[' . htmlspecialchars($machineId, ENT_QUOTES, 'UTF-8') . '][delete]" value="1" id="ctrl_nsfw_machine_delete_' . htmlspecialchars($machineId, ENT_QUOTES, 'UTF-8') . '" />
			' . 'delete' . '
		</label>
	';
}
$__compilerVar1 .= '
</li>';
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
						';
}
$__output .= '
					';
}
$__output .= '
					';
if ($nsfw_machineId AND !$visitor['nsfw_options']['machines'][$nsfw_machineId])
{
$__output .= '
						';
$__compilerVar2 = '';
$__compilerVar2 .= htmlspecialchars($nsfw_machineId, ENT_QUOTES, 'UTF-8');
$__compilerVar3 = '';
$__compilerVar4 = '';
$this->addRequiredExternal('css', 'nsfw');
$__compilerVar4 .= '

<li class="NSFW_Machine">
	';
if ($__compilerVar3['name'])
{
$__compilerVar4 .= '
		' . 'Machine ID' . ': ' . htmlspecialchars($__compilerVar3['name'], ENT_QUOTES, 'UTF-8') . '.
		' . 'First seen' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($__compilerVar3['first_seen'],array(
'time' => '$machine.first_seen'
))) . '
		
		<input type="hidden" name="nsfw_machines[' . htmlspecialchars($__compilerVar2, ENT_QUOTES, 'UTF-8') . '][name]" value="' . htmlspecialchars($__compilerVar3['name'], ENT_QUOTES, 'UTF-8') . '" />
		<input type="hidden" name="nsfw_machines[' . htmlspecialchars($__compilerVar2, ENT_QUOTES, 'UTF-8') . '][first_seen]" value="' . htmlspecialchars($__compilerVar3['first_seen'], ENT_QUOTES, 'UTF-8') . '" />
	';
}
else
{
$__compilerVar4 .= '
		<input type="text" name="nsfw_machines[' . htmlspecialchars($__compilerVar2, ENT_QUOTES, 'UTF-8') . '][name]" value="' . htmlspecialchars($__compilerVar3['name'], ENT_QUOTES, 'UTF-8') . '" placeholder="' . 'new machine name' . '" class="textCtrl" />
		<input type="hidden" name="nsfw_machines[' . htmlspecialchars($__compilerVar2, ENT_QUOTES, 'UTF-8') . '][first_seen]" value="' . htmlspecialchars($nsfw_time, ENT_QUOTES, 'UTF-8') . '" />
	';
}
$__compilerVar4 .= '
	
	';
if ($__compilerVar2 == $nsfw_machineId)
{
$__compilerVar4 .= '(' . 'this machine' . ')';
}
$__compilerVar4 .= '
	
	';
if ($__compilerVar3['name'])
{
$__compilerVar4 .= '
		<label for="ctrl_nsfw_machine_delete_' . htmlspecialchars($__compilerVar2, ENT_QUOTES, 'UTF-8') . '">
			<input type="checkbox" name="nsfw_machines[' . htmlspecialchars($__compilerVar2, ENT_QUOTES, 'UTF-8') . '][delete]" value="1" id="ctrl_nsfw_machine_delete_' . htmlspecialchars($__compilerVar2, ENT_QUOTES, 'UTF-8') . '" />
			' . 'delete' . '
		</label>
	';
}
$__compilerVar4 .= '
</li>';
$__output .= $__compilerVar4;
unset($__compilerVar2, $__compilerVar3, $__compilerVar4);
$__output .= '
					';
}
$__output .= '
				</ul>
			</li>
			<li>
				<label for="ctrl_nsfw_mode_all">
					<input type="radio" name="nsfw_mode" value="all" id="ctrl_nsfw_mode_all" ' . (($visitor['nsfw_options']['all']) ? ' checked="checked"' : '') . ' />
					' . 'All the time' . '
				</label>
			</li>
			<li><p class="hint">' . 'Choose when you want to activate NSFW features. If you only need them in some specific machines, select "' . 'By machines' . '". Otherwise, you can select "' . 'All the time' . '" to simply use the features everytime you visit ' . htmlspecialchars($xenOptions['boardTitle'], ENT_QUOTES, 'UTF-8') . '.' . '</p></li>
		</ul>
	</dd>
</dl>
<dl class="ctrlUnit">
	<dt>' . 'Features' . ':</dt>
	<dd>
		<ul>
			<li>
				<label for="ctrl_features_avatar">
					<input type="checkbox" name="nsfw_features[avatar]" value="1" id="ctrl_features_avatar" ' . (($visitor['nsfw_options']['avatar']) ? ' checked="checked"' : '') . ' />
					' . 'Hide avatars' . '
				</label>
			</li>
			<li>
				<label for="ctrl_features_smilies">
					<input type="checkbox" name="nsfw_features[smilies]" value="1" id="ctrl_features_smilies" ' . (($visitor['nsfw_options']['smilies']) ? ' checked="checked"' : '') . ' />
					' . 'Hide smilies (display as text)' . '
				</label>
			</li>
			<li>
				<label for="ctrl_features_bbcode_img">
					<input type="checkbox" name="nsfw_features[bbcode_img]" value="1" id="ctrl_features_bbcode_img" ' . (($visitor['nsfw_options']['bbcode_img']) ? ' checked="checked"' : '') . ' />
					' . 'Hide [IMG] tag (display as link)' . '
				</label>
			</li>
			<li>
				<label for="ctrl_features_attachment">
					<input type="checkbox" name="nsfw_features[attachment]" value="1" id="ctrl_features_attachment" ' . (($visitor['nsfw_options']['attachment']) ? ' checked="checked"' : '') . ' />
					' . 'Hide attachment\'s thumbnail' . '
				</label>
			</li>
			';
$__compilerVar5 = '';
$__output .= $this->callTemplateHook('nsfw_account_preferences_features', $__compilerVar5, array());
unset($__compilerVar5);
$__output .= '
		</ul>
	</dd>
</dl>';
