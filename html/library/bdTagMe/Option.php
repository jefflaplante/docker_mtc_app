<?php

class bdTagMe_Option
{
    const UPDATER_URL = 'https://xfrocks.com/api/index.php?updater';

    public static function get($key)
    {
        $options = XenForo_Application::get('options');

        switch ($key) {
            case 'max':
                $visitor = XenForo_Visitor::getInstance();
                return $visitor->hasPermission('general', 'maxTaggedUsers');
                break;
            case 'groupTag':
                $visitor = XenForo_Visitor::getInstance();
                return $visitor->hasPermission('general', 'bdtagme_groupTag');
                break;
        }

        return $options->get('bdtagme_' . $key);
    }

}
