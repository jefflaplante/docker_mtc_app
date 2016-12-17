<?php
class Nobita_StylePermissions_Listener {
	public static function loadControllers($class, array &$extend) {
		if($class == 'XenForo_ControllerAdmin_Style') {
			$extend[] = 'Nobita_StylePermissions_ControllerAdmin_Style';
		}else if($class == 'XenForo_ControllerPublic_Misc') {
			$extend[] = 'Nobita_StylePermissions_ControllerPublic_Misc';
		} else if ($class == 'XenForo_ControllerPublic_Account') {
			$extend[] = 'Nobita_StylePermissions_ControllerPublic_Account';
		}
	}
	
	public static function loadDataWriter($class, array &$extend) {
		if($class == "XenForo_DataWriter_Style") {
			$extend[] = 'Nobita_StylePermissions_DataWriter_Style';
		}
	}
	
	public static function templatePostRender($templateName, &$content, array &$containerData, XenForo_Template_Abstract $template) {
		if($templateName == "style_edit") {
			$search = '<dl class="ctrlUnit submitUnit">';
			$pos = strpos($content,$search);
			
			if($pos !== false) {
				
				$ourTemplate = $template->create('style_permission_edit',$template->getParams());
				$content = substr_replace($content,$ourTemplate,$pos,0);
			}
		}
	}
}