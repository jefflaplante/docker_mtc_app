<?php

class KeywordAlert_Option
{
    const UPDATER_URL = 'https://xfrocks.com/api/index.php?updater';

    public static function get($key)
    {
        switch ($key) {
            case 'perPage':
                return 20;
            case 'snippetMaxLength':
                return 150; // from template search_result_post
        }

        return XenForo_Application::get('options')->get('KeywordAlert_' . $key);
    }
}