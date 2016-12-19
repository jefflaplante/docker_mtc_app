<?php

class bdCache_Helper_Session
{
    public static function startNullSession(Zend_Controller_Request_Http $request = null)
    {
        XenForo_CodeEvent::addListener('load_class',
            array(__CLASS__, 'load_class_XenForo_Session'), 'XenForo_Session');

        return XenForo_Session::startPublicSession($request);
    }

    public static function load_class_XenForo_Session($class, array &$extend)
    {
        if ($class === 'XenForo_Session') {
            $extend[] = 'bdCache_XenForo_Session';
        }
    }
}