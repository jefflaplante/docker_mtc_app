<?php

class bdCache_Option
{
    const CONFIG_FORCE_USE_FILE_AS_CACHE = 'bdCache_forceFile';
    const CONFIG_USE_SYSTEM_TMP_DIRECTORY = 'bdCache_useSystemTmp';

    public static function get($key, $subKey = null)
    {
        $options = XenForo_Application::getOptions();

        switch ($key) {
            case 'log':
                return !!XenForo_Application::getConfig()->get('bdCache_log');
        }

        return $options->get(sprintf('bdCache_%s', $key), $subKey);
    }

    public static function getCustomizedTtlSeconds($controllerName, $controllerAction)
    {
        return self::get('customizedTtlSeconds', self::getKeyForCombo($controllerName, $controllerAction));
    }

    public static function setCustomizedTtlSeconds($controllerName, $controllerAction, $ttl)
    {
        $dw = XenForo_DataWriter::create('XenForo_DataWriter_Option');
        $dw->setExistingData('bdCache_customizedTtlSeconds');

        $allCustomizedTtlSeconds = self::get('customizedTtlSeconds');
        $key = self::getKeyForCombo($controllerName, $controllerAction);

        if (is_int($ttl)) {
            $allCustomizedTtlSeconds[$key] = $ttl;
        } elseif (isset($allCustomizedTtlSeconds[$key])) {
            unset($allCustomizedTtlSeconds[$key]);
        }

        $dw->set('option_value', $allCustomizedTtlSeconds);

        return $dw->save();
    }

    public static function getKeyForCombo($controllerName, $controllerAction)
    {
        bdCache_Core::normalizeControllerNameAndAction($controllerName, $controllerAction);

        return sprintf('%s::%s', $controllerName, $controllerAction);
    }

    public static function renderCustomizedTtlSeconds(XenForo_View $view, $fieldPrefix, array $preparedOption, $canEdit)
    {
        return '';
    }

}
