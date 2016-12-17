<?php
/**
 * Class SolidMean_ForumBackup_Install
 * @author      David Dotson <sneaky@sneakydave.com>
 * @copyright   �2014 Solid Mean Technology. All rights reserved.
 * @link        http://sneakydave.com
 * @package     SolidMean_ForumBackup
 */
class SolidMean_ForumBackup_Install
{
    /**
     * @var
     */
    private static $_instance;

    /**
     * @var array - List of forums that shouldn't be allowed to install this addon.
     */
    private static $forumban = array(
        array(
            'name'    => 'Socially Uncensored',
            'message' => 'Pending Litigation Circumstances prevent this install',
            ),
        array(
            'name'    => 'The Admin Zone',
            'message' => 'Reading private conversations prevents this install from happening',
        ),
        array(
            'name'    => 'CODForums',
            'message' => 'Being a rage machine prevents this install from happening.',
        ),
        array(
            'name'    => 'Unreal Tournament Forums',
            'message' => 'Being rude to people trying to help you prevents this install from happening',
        ),
    );

    /**
     * @return SolidMean_ForumBackup_Install
     */
    public static final function getInstance()
    {
        if (!self::$_instance)
        {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    /**
     * Do some initial versioning setup
     *
     * @param $existingAddOn
     * @param $addOnData
     * @throws XenForo_Exception
     */
    public static function build($existingAddOn, $addOnData)
    {
        if (XenForo_Application::$versionId < 1020070) {
            throw new XenForo_Exception('ForumBackup requires XenForo 1.2.0 or newer to proceed.', true);
        }

        // Ignore installations to forums that are more trouble than they are worth.
        foreach (self::$forumban as $site){
            if (XenForo_Application::get('options')->boardTitle == $site['name'])
            {
                throw new XenForo_Exception($site['message'], true);
            }
        }

        $startVersion = 1;
        $endVersion = $addOnData['version_id'];

        if ($existingAddOn)
        {
            $startVersion = $existingAddOn['version_id'] + 1;
        }

        $install = self::getInstance();

        for ($i = $startVersion; $i <= $endVersion; $i++)
        {
            $method = '_installVersion' . $i;

            if (method_exists($install, $method) === false)
            {
                continue;
            }

            $install->$method();
        }
    }

    /**
     * Establish some requirements before installing this add-on
     *
     * @throws XenForo_Exception
     */
    protected function _installVersion1()
    {
        // Try to see if the exec function exists, and actually works.
        if(! exec('echo SolidMeanForumBackup') == 'SolidMeanForumBackup')
        {
            throw new XenForo_Exception('The PHP exec() function is required for this add-on.', true);
        }

     }


}