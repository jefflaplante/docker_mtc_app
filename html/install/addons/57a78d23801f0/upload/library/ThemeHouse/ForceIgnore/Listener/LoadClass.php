<?php

class ThemeHouse_ForceIgnore_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{
    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_ForceIgnore' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Account',
                    'XenForo_ControllerPublic_Member'
                ), /* END 'controller' */
                'model' => array(
                    'XenForo_Model_User',
                ), /* END 'model' */
            ), /* END 'ThemeHouse_ForceIgnore' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new ThemeHouse_ForceIgnore_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    } /* END loadClassController */

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new ThemeHouse_ForceIgnore_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    } /* END loadClassModel */
}