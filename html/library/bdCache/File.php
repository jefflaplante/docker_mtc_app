<?php

class bdCache_File
{
    public static function existsAndNotEmpty($path, $sizeMinimum = 0)
    {
        return is_file($path) && filesize($path) > $sizeMinimum;
    }

    public static function removeDirectory($dirPath)
    {
        $paths = glob(sprintf('%s/*', $dirPath));

        foreach ($paths as $path) {
            if (is_dir($path)) {
                self::removeDirectory($path);
            } else {
                @unlink($path);
            }
        }

        return @rmdir($dirPath);
    }

}
