<?php

class KeywordAlert_Installer
{
    /* Start auto-generated lines of code. Change made will be overwriten... */

    protected static $_tables = array(
        'keyword' => array(
            'createQuery' => 'CREATE TABLE IF NOT EXISTS `xf_keywordalert_keyword` (
                `keyword_id` INT(10) UNSIGNED AUTO_INCREMENT
                ,`name` VARCHAR(255) NOT NULL
                ,`keywords` MEDIUMBLOB
                ,`notify_frequency` INT(10) UNSIGNED NOT NULL
                ,`send_alert` TINYINT(4) UNSIGNED DEFAULT \'0\'
                ,`user_id` INT(10) UNSIGNED NOT NULL
                ,`forum_mode` ENUM (\'whitelist\',\'blacklist\',\'all\') NOT NULL
                ,`forum_data` MEDIUMBLOB
                ,`excluded_rules` MEDIUMBLOB
                , PRIMARY KEY (`keyword_id`)
                
            ) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;',
            'dropQuery' => 'DROP TABLE IF EXISTS `xf_keywordalert_keyword`',
        ),
        'queue' => array(
            'createQuery' => 'CREATE TABLE IF NOT EXISTS `xf_keywordalert_queue` (
                `queue_id` INT(10) UNSIGNED AUTO_INCREMENT
                ,`target_user_id` INT(10) UNSIGNED NOT NULL
                ,`schedule_date` INT(10) UNSIGNED NOT NULL
                ,`data` MEDIUMBLOB
                , PRIMARY KEY (`queue_id`)
                
            ) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;',
            'dropQuery' => 'DROP TABLE IF EXISTS `xf_keywordalert_queue`',
        ),
    );
    protected static $_patches = array(
        array(
            'table' => 'xf_keywordalert_keyword',
            'field' => 'send_alert',
            'showTablesQuery' => 'SHOW TABLES LIKE \'xf_keywordalert_keyword\'',
            'showColumnsQuery' => 'SHOW COLUMNS FROM `xf_keywordalert_keyword` LIKE \'send_alert\'',
            'alterTableAddColumnQuery' => 'ALTER TABLE `xf_keywordalert_keyword` ADD COLUMN `send_alert` TINYINT(4) UNSIGNED DEFAULT \'0\'',
            'alterTableDropColumnQuery' => 'ALTER TABLE `xf_keywordalert_keyword` DROP COLUMN `send_alert`',
        ),
    );

    public static function install($existingAddOn, $addOnData)
    {
        $db = XenForo_Application::get('db');

        foreach (self::$_tables as $table) {
            $db->query($table['createQuery']);
        }

        foreach (self::$_patches as $patch) {
            $tableExisted = $db->fetchOne($patch['showTablesQuery']);
            if (empty($tableExisted)) {
                continue;
            }

            $existed = $db->fetchOne($patch['showColumnsQuery']);
            if (empty($existed)) {
                $db->query($patch['alterTableAddColumnQuery']);
            }
        }

        self::installCustomized($existingAddOn, $addOnData);
    }

    public static function uninstall()
    {
        $db = XenForo_Application::get('db');

        foreach (self::$_patches as $patch) {
            $tableExisted = $db->fetchOne($patch['showTablesQuery']);
            if (empty($tableExisted)) {
                continue;
            }

            $existed = $db->fetchOne($patch['showColumnsQuery']);
            if (!empty($existed)) {
                $db->query($patch['alterTableDropColumnQuery']);
            }
        }

        foreach (self::$_tables as $table) {
            $db->query($table['dropQuery']);
        }

        self::uninstallCustomized();
    }

    /* End auto-generated lines of code. Feel free to make changes below */

    public static function installCustomized($existingAddOn, $addOnData)
    {
        if (XenForo_Application::$versionId < 1020000) {
            throw new XenForo_Exception('[bd] Keyword Alert requires XenForo v1.2.0+');
        }
    }

    public static function uninstallCustomized()
    {
        KeywordAlert_ShippableHelper_Updater::onUninstall(KeywordAlert_Option::UPDATER_URL);
    }

}