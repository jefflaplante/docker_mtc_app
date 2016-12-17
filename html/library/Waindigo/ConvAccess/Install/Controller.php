<?php

class Waindigo_ConvAccess_Install_Controller extends Waindigo_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/conversations-access-by-waindigo.2357/';

    protected function _getTables()
    {
        return array(
            'xf_conversation_user_access' => array(
                'user_id' => 'INT(10) UNSIGNED NOT NULL', /* END 'user_id' */
                'access_user_id' => 'INT(10) UNSIGNED NOT NULL', /* END 'access_user_id' */
            ), /* END 'xf_conversation_user_access' */
        );
    } /* END _getTables */

    protected function _getUniqueKeys()
    {
        return array(
            'xf_conversation_user_access' => array(
                'user_id_access_user_id' => array(
                    'user_id',
                    'access_user_id'
                ), /* END 'user_id_access_user_id' */
            ), /* END 'xf_conversation_user_access' */
        );
    } /* END _getUniqueKeys */
}