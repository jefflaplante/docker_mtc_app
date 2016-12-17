<?php

class Waindigo_NewestPostFirst_Install_Controller extends Waindigo_Install
{

    protected function _getTableChanges()
    {
        return array(
            'xf_user_option' => array(
                'thread_display_mode' => 'ENUM(\'newest_first\',\'oldest_first\', \'\') NOT NULL DEFAULT \'\'', 
            ), 
        );
    }
}