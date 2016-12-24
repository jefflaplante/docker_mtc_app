<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$this->addRequiredExternal('css', 'nsfw');
$__output .= '

<li class="NSFW_Machine">
	';
if ($machine['name'])
{
$__output .= '
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
$__output .= '
		<input type="text" name="nsfw_machines[' . htmlspecialchars($machineId, ENT_QUOTES, 'UTF-8') . '][name]" value="' . htmlspecialchars($machine['name'], ENT_QUOTES, 'UTF-8') . '" placeholder="' . 'new machine name' . '" class="textCtrl" />
		<input type="hidden" name="nsfw_machines[' . htmlspecialchars($machineId, ENT_QUOTES, 'UTF-8') . '][first_seen]" value="' . htmlspecialchars($nsfw_time, ENT_QUOTES, 'UTF-8') . '" />
	';
}
$__output .= '
	
	';
if ($machineId == $nsfw_machineId)
{
$__output .= '(' . 'this machine' . ')';
}
$__output .= '
	
	';
if ($machine['name'])
{
$__output .= '
		<label for="ctrl_nsfw_machine_delete_' . htmlspecialchars($machineId, ENT_QUOTES, 'UTF-8') . '">
			<input type="checkbox" name="nsfw_machines[' . htmlspecialchars($machineId, ENT_QUOTES, 'UTF-8') . '][delete]" value="1" id="ctrl_nsfw_machine_delete_' . htmlspecialchars($machineId, ENT_QUOTES, 'UTF-8') . '" />
			' . 'delete' . '
		</label>
	';
}
$__output .= '
</li>';
