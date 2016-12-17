<?php
class Nobita_StylePermissions_Helper 
{
	public static function appliedUserGroupIds(array $user, array $allowedUserGroupIds = null) {
		if($allowedUserGroupIds === null) { 
			return true;
		} else if(!is_array($allowedUserGroupIds) || empty($allowedUserGroupIds)) {
			return false; // no-one can choose
		}
		
		$belongToGroups = $user['user_group_id'];
		if(!empty($user['secondary_group_ids'])) {
			$belongToGroups .= ',' . $user['secondary_group_ids'];
		}
		
		$groupToCheck = explode(',',$belongToGroups);
		unset($belongToGroups);
		
		foreach($groupToCheck as $groupId) {
			if(in_array($groupId, $allowedUserGroupIds)) {
				return true;
				break;
			}
		}
		
		return false;
	}
	
	public static function appliedIndividualUsers(array $user, array $appliedUsers = null) {
		if($appliedUsers === null) { 
			return true; // prevent error when new install 
		} else if(!is_array($appliedUsers) || empty($appliedUsers)) {
			return false; // false if empty that's mean no-one have special. Should be check groups
		}
		
		return in_array($user['user_id'], $appliedUsers);
	}
}