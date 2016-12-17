<?php

class Waindigo_ConvAccess_Listener_LoadClass extends Waindigo_Listener_LoadClass
{
    protected function _getExtendedClasses()
    {
        return array(
            'Waindigo_ConvAccess' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Conversation',
                ), /* END 'controller' */
                'model' => array(
                    'XenForo_Model_Conversation',
                ), /* END 'model' */
                'route_prefix' => array(
                    'XenForo_Route_Prefix_Conversations',
                ), /* END 'route_prefix' */
                'datawriter' => array(
                    'XenForo_DataWriter_ConversationMessage',
                ), /* END 'datawriter' */
            ), /* END 'Waindigo_ConvAccess' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new Waindigo_ConvAccess_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    } /* END loadClassController */

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new Waindigo_ConvAccess_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    } /* END loadClassModel */

    public static function loadClassRoutePrefix($class, array &$extend)
    {
        $loadClassRoutePrefix = new Waindigo_ConvAccess_Listener_LoadClass($class, $extend, 'route_prefix');
        $extend = $loadClassRoutePrefix->run();
    } /* END loadClassRoutePrefix */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $loadClassDataWriter = new Waindigo_ConvAccess_Listener_LoadClass($class, $extend, 'datawriter');
        $extend = $loadClassDataWriter->run();
    } /* END loadClassDataWriter */
}