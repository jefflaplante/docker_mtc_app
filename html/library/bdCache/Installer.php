<?php

class bdCache_Installer
{
    /* Start auto-generated lines of code. Change made will be overwriten... */

    protected static $_tables = array();
    protected static $_patches = array();

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
        if (XenForo_Application::$versionId < 1040000) {
            throw new XenForo_Exception('XenForo 1.4.0+ is required.');
        }
    }

    public static function uninstallCustomized()
    {
        $internalDataDir = sprintf('%s/bdCache', XenForo_Helper_File::getInternalDataPath());
        if (is_dir($internalDataDir)) {
            bdCache_File::removeDirectory($internalDataDir);
        }

        $externalDataDir = sprintf('%s/bdCache', XenForo_Helper_File::getExternalDataPath());
        if (is_dir($externalDataDir)) {
            bdCache_File::removeDirectory($externalDataDir);
        }

        bdCache_ShippableHelper_Updater::onUninstall(bdCache_Listener::UPDATER_URL);
    }

}
