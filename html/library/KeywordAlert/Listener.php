<?php

class KeywordAlert_Listener
{
    public static function load_class($class, array &$extend)
    {
        static $classes = array(
            'XenForo_ControllerPublic_Account',
            'XenForo_DataWriter_DiscussionMessage_Post',
        );

        if (in_array($class, $classes)) {
            $extend[] = 'KeywordAlert_' . $class;
        }
    }

    public static function init_dependencies(XenForo_Dependencies_Abstract $dependencies, array $data)
    {
        $helperClassName = 'KeywordAlert_Template_Helper';
        $helperMethods = get_class_methods($helperClassName);
        if (!empty($helperMethods)) {
            foreach ($helperMethods as $helperMethod) {
                XenForo_Template_Helper_Core::$helperCallbacks[strtolower('KeywordAlert_' . $helperMethod)] = array($helperClassName, $helperMethod);
            }
        }

        KeywordAlert_ShippableHelper_Updater::onInitDependencies($dependencies, KeywordAlert_Option::UPDATER_URL);
    }

    public static function file_health_check(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes += KeywordAlert_FileSums::getHashes();
    }
}