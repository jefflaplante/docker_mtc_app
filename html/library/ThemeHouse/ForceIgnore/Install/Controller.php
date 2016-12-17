<?php

class ThemeHouse_ForceIgnore_Install_Controller extends ThemeHouse_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/force-ignore.1907/';

    protected $_minVersionId = 1010070;

    protected $_minVersionString = '1.1.0';

    /**
     *
     * @see ThemeHouse_Install::_getTables()
     */
    protected function _getTables()
    {
        return array(
            'xf_force_ignore' => array(
                'force_ignore_id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
                'user_id_1' => 'INT(10) UNSIGNED NOT NULL',
                'user_id_2' => 'INT(10)UNSIGNED NOT NULL',
                'end_date' => 'INT(10) UNSIGNED NOT NULL DEFAULT 0'
            ), /* 'xf_force_ignore' */
        );
    } /* END _getTables */

    protected function _getUniqueKeys()
    {
        return array(
            'xf_force_ignore' => array(
                'user_id_1_user_id_2' => array(
                    'user_id_1',
                    'user_id_2'
                ), /* END 'user_id_1_user_id_2' */
            ) /* 'xf_force_ignore' */
        );
    } /* END _getUniqueKeys */
}