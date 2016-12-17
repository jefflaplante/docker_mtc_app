<?php
class Nobita_StylePermissions_DataWriter_Style extends XFCP_Nobita_StylePermissions_DataWriter_Style {
	protected function _getFields() {
		$fields = parent::_getFields();
		
		$fields['xf_style']['style_permissions'] = array('type' => self::TYPE_SERIALIZED, 'default' => 'a:0:{}');
		return $fields;
	}
	
	protected function _preSave() {
		if(isset($GLOBALS['Nobita_StylePermissions_ControllerAdmin_Style::actionSave'])) {
			$GLOBALS['Nobita_StylePermissions_ControllerAdmin_Style::actionSave']->permissions_actionSave($this);
		}
		
		return parent::_preSave();
	}
}