<?php

class Waindigo_Trophies_Listener_LoadClass extends Waindigo_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'Waindigo_Trophies' => array(
                'controller' => array(
                    'XenForo_ControllerAdmin_Trophy',
                    'XenForo_ControllerPublic_Help',
                    'XenForo_ControllerPublic_Member',
                    'XenForo_ControllerPublic_Thread',
                    'XenForo_ControllerPublic_Account'
                ), 
                'datawriter' => array(
                    'XenForo_DataWriter_Trophy',
                    'XenForo_DataWriter_User'
                ), 
                'model' => array(
                    'XenForo_Model_Trophy',
                    'XenForo_Model_Post'
                ), 
            ), 
        );
    }

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new Waindigo_Trophies_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    }

    public static function loadClassDataWriter($class, array &$extend)
    {
        $loadClassDataWriter = new Waindigo_Trophies_Listener_LoadClass($class, $extend, 'datawriter');
        $extend = $loadClassDataWriter->run();
    }

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new Waindigo_Trophies_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    }
}