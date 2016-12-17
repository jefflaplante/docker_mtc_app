<?php

/**
 *
 * @see XenForo_DataWriter_User
 */
class Waindigo_NewestPostFirst_Extend_XenForo_DataWriter_User extends XFCP_Waindigo_NewestPostFirst_Extend_XenForo_DataWriter_User
{

    /**
     *
     * @see XenForo_DataWriter_User::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();
        
        $fields['xf_user_option']['thread_display_mode'] = array(
            'type' => self::TYPE_STRING,
            'allowedValues' => array(
                'newest_first',
                'oldest_first',
                ''
            ),
            'default' => ''
        );
        
        return $fields;
    }

    /**
     *
     * @see XenForo_DataWriter_User::_preSave()
     */
    protected function _preSave()
    {
        parent::_preSave();
        
        if (isset($GLOBALS['XenForo_ControllerPublic_Account'])) {
            /* @var $controller XenForo_ControllerPublic_Account */
            $controller = $GLOBALS['XenForo_ControllerPublic_Account'];
            
            $xenOptions = XenForo_Application::get('options');
            if ($xenOptions->waindigo_newestPostFirst_userChoice &&
                 $controller->getRouteMatch()->getAction() == 'preferences-save') {
                $input = $controller->getInput()->filter(
                    array(
                        'thread_display_mode' => XenForo_Input::STRING
                    ));
                $this->bulkSet($input);
            }
        }
    }
}