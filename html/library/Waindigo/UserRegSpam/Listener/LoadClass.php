<?php

class Waindigo_UserRegSpam_Listener_LoadClass extends Waindigo_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'Waindigo_UserRegSpam' => array(
                'model' => array(
                    'XenForo_Model_SpamPrevention'
                ), /* END 'model' */
            ), /* END 'Waindigo_UserRegSpam' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new Waindigo_UserRegSpam_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    } /* END loadClassModel */
}