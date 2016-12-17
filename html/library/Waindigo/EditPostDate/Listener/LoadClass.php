<?php

class Waindigo_EditPostDate_Listener_LoadClass extends Waindigo_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'Waindigo_EditPostDate' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_InlineMod_Post',
                    'XenForo_ControllerPublic_Forum',
                    'XenForo_ControllerPublic_Post',
                    'XenForo_ControllerPublic_Thread'
                ), /* END 'controller' */
                'model' => array(
                    'XenForo_Model_InlineMod_Post',
                    'XenForo_Model_Post',
                    'XenForo_Model_Forum'
                ), /* END 'model' */
                'datawriter' => array(
                    'XenForo_DataWriter_Discussion_Thread',
                    'XenForo_DataWriter_DiscussionMessage_Post'
                ), /* END 'datawriter' */
            ), /* END 'Waindigo_EditPostDate' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $extend = self::createAndRun('Waindigo_EditPostDate_Listener_LoadClass', $class, $extend, 'controller');
    } /* END loadClassController */

    public static function loadClassModel($class, array &$extend)
    {
        $extend = self::createAndRun('Waindigo_EditPostDate_Listener_LoadClass', $class, $extend, 'model');
    } /* END loadClassModel */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $extend = self::createAndRun('Waindigo_EditPostDate_Listener_LoadClass', $class, $extend, 'datawriter');
    } /* END loadClassDataWriter */
}