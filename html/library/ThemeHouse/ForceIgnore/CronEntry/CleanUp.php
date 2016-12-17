<?php

/**
 * Cron entry for cleaning up expired force ignored users.
 */
class ThemeHouse_ForceIgnore_CronEntry_CleanUp
{

    /**
     * Clean up the table
     */
    public static function cleanUp()
    {
        $forceIgnoreModel = XenForo_Model::create('ThemeHouse_ForceIgnore_Model_ForceIgnore');
        $forceIgnoreModel->removeExpiredIgnores();
    } /* END cleanUp */
}