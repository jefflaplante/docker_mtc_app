<?php

/**
 * Installer for Trophy Categories by Waindigo.
 */
class Waindigo_Trophies_Install_Controller extends Waindigo_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/trophies-by-waindigo.2220/';

    /**
     * Gets the tables (with fields) to be created for this add-on. See parent for explanation.
     *
     * @return array Format: [table name] => fields
     */
    protected function _getTables()
    {
        return array(
            'xf_trophy_category' => array(
                'trophy_category_id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
                'title' => 'VARCHAR(255) NOT NULL',
                'parent_category_id' => 'INT(10) UNSIGNED NOT NULL DEFAULT 0',
                'display_order' => 'INT(3) UNSIGNED NOT NULL DEFAULT 1',
            ),
            'xf_trophy_combination' => array(
                'trophy_combination_id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY',
                'trophy_ids' => 'MEDIUMTEXT',
                'cache_value' => 'MEDIUMTEXT',
            ),
        );
    }

    protected function _getTableChanges()
    {
        return array(
            'xf_trophy' => array(
                'trophy_category_id' => 'INT(10) UNSIGNED NOT NULL DEFAULT 0',
                'icon_url' => 'VARCHAR(255) NOT NULL DEFAULT \'\'',
                ),
            'xf_user_profile' => array(
                'trophy_combination_id' => 'INT(10) NOT NULL DEFAULT 0',
                'trophy_count' => 'INT(10) NOT NULL DEFAULT 0',
            ),
            'xf_user_option' => array(
                'trophy_category_ids' => 'VARCHAR(255) NOT NULL DEFAULT \'\'',
            ),
        );
    }
}