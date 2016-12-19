<?php

class bdCache_Helper_Image
{
    public static function getWidth($uri)
    {
        $size = self::getSize($uri);
        if (isset($size['width'])) {
            return $size['width'];
        } else {
            return '';
        }
    }

    public static function getHeight($uri)
    {
        $size = self::getSize($uri);
        if (isset($size['height'])) {
            return $size['height'];
        } else {
            return '';
        }
    }

    public static function getSize($uri)
    {
        return bdCache_ShippableHelper_ImageSize::calculate($uri);
    }
}