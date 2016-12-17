<?php

class Waindigo_ConvSearch_Listener_LoadClass extends Waindigo_Listener_LoadClass
{
    protected function _getExtendedClasses()
    {
        return array(
            'Waindigo_ConvSearch' => array(
                'model' => array(
                    'XenForo_Model_Conversation',
                ), /* END 'model' */
                'datawriter' => array(
                    'XenForo_DataWriter_ConversationMaster',
                    'XenForo_DataWriter_ConversationMessage',
                ), /* END 'datawriter' */
            ), /* END 'Waindigo_ConvSearch' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new Waindigo_ConvSearch_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    } /* END loadClassModel */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $loadClassDataWriter = new Waindigo_ConvSearch_Listener_LoadClass($class, $extend, 'datawriter');
        $extend = $loadClassDataWriter->run();
    } /* END loadClassDataWriter */
}