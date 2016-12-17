<?php

class Waindigo_UserCriteria_Listener_LoadClass extends Waindigo_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'Waindigo_UserCriteria' => array(
                'model' => array(
                    'XenForo_Model_Like',
                    'XenForo_Model_Post'
                ), 
            ), 
        );
    }

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new Waindigo_UserCriteria_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    }
}