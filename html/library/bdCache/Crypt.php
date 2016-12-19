<?php

class bdCache_Crypt
{
    public static function encrypt($controllerName, $controllerAction)
    {
        $tmp = sprintf('%s::%s', $controllerName, $controllerAction);

        if (function_exists('mcrypt_encrypt')) {
            $tmp = self::aes128_encrypt($tmp, XenForo_Application::getConfig()->get('globalSalt'));
        }

        $tmp = base64_encode($tmp);

        return $tmp;
    }

    public static function decrypt($data)
    {
        $tmp = base64_decode($data);

        if (!empty($tmp) AND function_exists('mcrypt_decrypt')) {
            $tmp = self::aes128_decrypt($tmp, XenForo_Application::getConfig()->get('globalSalt'));
        }

        $controllerName = false;
        $controllerAction = false;

        if (!empty($tmp)) {
            list($controllerName, $controllerAction) = explode('::', $tmp);
        }

        return array(
            $controllerName,
            $controllerAction
        );
    }

    public static function aes128_encrypt($data, $key)
    {
        $key = md5($key, true);
        $padding = 16 - (strlen($data) % 16);
        $data .= str_repeat(chr($padding), $padding);
        return mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_ECB);
    }

    public static function aes128_decrypt($data, $key)
    {
        $key = md5($key, true);
        $data = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_ECB);
        $padding = ord($data[strlen($data) - 1]);
        return substr($data, 0, -$padding);
    }

}
