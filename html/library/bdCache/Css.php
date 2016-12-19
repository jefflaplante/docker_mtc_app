<?php

class bdCache_Css
{
    const SIZE_MINIMUM = 32;

    public static function save($parameters, $css)
    {
        if (strlen($css) < self::SIZE_MINIMUM) {
            return false;
        }

        $filePath = self::getCssFilePath($parameters, true);
        if (empty($filePath)) {
            return false;
        }

        $cacheSuffix = '/* CSS returned from cache. */';
        if (substr($css, -1 * strlen($cacheSuffix)) == $cacheSuffix) {
            // only save on css real rendering (ignore render from cache)
            // this is done to avoid race condition as much as possible
            return false;
        }

        $dirPath = dirname($filePath);
        XenForo_Helper_File::createDirectory($dirPath, true);

        $requestPaths = XenForo_Application::get('requestPaths');
        $css = bdCache_Helper_Css::fixUrls($css, $requestPaths);
        $css = Minify_CSS_Compressor::process($css);

        $css .= call_user_func_array('sprintf', array(
            '/* CSS saved with [bd] Cache (%s) */',
            $requestPaths['fullUri'],
            $parameters,
        ));

        file_put_contents($filePath, $css);
        XenForo_Helper_File::makeWritableByFtpUser($filePath);

        return true;
    }

    public static function redirect($parameters)
    {
        $filePath = self::getCssFilePath($parameters);

        if (bdCache_File::existsAndNotEmpty($filePath, self::SIZE_MINIMUM)) {
            $url = XenForo_Link::convertUriToAbsoluteUri(self::getCssUrl($parameters), true);

            header('HTTP/1.1 301 Moved Permanently');
            header(sprintf('Location: %s', $url));
            exit();
        }
    }

    public static function replaceCssUrls(&$content)
    {
        if (!bdCache_Option::get('cssToFile')) {
            return true;
        }

        $offset = 0;
        $begin = '"css.php?';
        $beginLength = strlen($begin);
        $failed = 0;

        while (true) {
            $beginStrPos = strpos($content, $begin, $offset);
            if ($beginStrPos === false) {
                break;
                // while(true)
            }

            $endStrPos = strpos($content, '"', $beginStrPos + 1);
            if ($endStrPos === false) {
                break;
                // while(true)
            }
            //$endStrPos--;

            $parameters = substr($content, $beginStrPos + $beginLength, $endStrPos - $beginStrPos - $beginLength);
            $parameters = html_entity_decode($parameters);
            $offset = $beginStrPos + $beginLength;

            $filePath = self::getCssFilePath($parameters);
            if (bdCache_File::existsAndNotEmpty($filePath, self::SIZE_MINIMUM)) {
                // start replacing...
                $oldUrlOffset = $beginStrPos + 1;
                $oldUrlLength = $endStrPos - $oldUrlOffset;
                $newUrl = self::getCssUrl($parameters);

                $content = substr_replace($content, $newUrl, $oldUrlOffset, $oldUrlLength);
            } else {
                $failed++;
            }
        }

        return ($failed == 0);
    }

    public static function doHouseKeeping()
    {
        $cssPath = sprintf('%s/bdCache/css', XenForo_Helper_File::getExternalDataPath());

        $dirs = glob(sprintf('%s/*', $cssPath));
        $cssDirs = array();

        // set cut off to ignore directories that are generated within a week
        // have to do this because cached page may still use these CSS files
        // TODO: get the largest value of page cache TTL to use here
        $cutOff = XenForo_Application::$time - 7 * 86400;

        foreach ($dirs as $dir) {
            $dirName = basename($dir);

            if (!is_numeric($dirName)) {
                // not our directory, ignore
                continue;
            }

            $timestamp = intval($dirName);
            if ($timestamp > $cutOff) {
                // this directory is new, ignore
                continue;
            }

            $cssDirs[$timestamp] = $dir;
        }
        ksort($cssDirs);

        if (empty($cssDirs)) {
            // nothing?
            // maybe CSS caching is disabled
            return false;
        }

        // leave out the last directory, just to be safe
        array_pop($cssDirs);

        foreach ($cssDirs as $dir) {
            bdCache_File::removeDirectory($dir);
        }

        return true;
    }

    public static function getCssFilePath($parameters, $onLatestOnly = false)
    {
        list($modifiedDate, $hash, $isLatest) = self::_getModifiedDateAndHash($parameters);

        if ($onLatestOnly && !$isLatest) {
            return false;
        }

        return sprintf('%s/bdCache/css/%d/%s.css', XenForo_Helper_File::getExternalDataPath(), $modifiedDate, $hash);
    }

    public static function getCssUrl($parameters)
    {
        list($modifiedDate, $hash) = self::_getModifiedDateAndHash($parameters);

        $url = sprintf('%s/bdCache/css/%d/%s.css', XenForo_Application::$externalDataUrl, $modifiedDate, $hash);

        return $url;
    }

    protected static function _getModifiedDateAndHash($parameters)
    {
        parse_str($parameters, $parsed);
        ksort($parsed);

        $styleId = (isset($parsed['style']) ? $parsed['style'] : 0);
        $modifiedDate = (isset($parsed['d']) ? $parsed['d'] : 0);

        static $addOnVersionId = false;
        if ($addOnVersionId === false) {
            $addOnVersionId = 0;
            $addOns = XenForo_Application::get('addOns');
            if (isset($addOns['bdCache'])) {
                $addOnVersionId = $addOns['bdCache'];
            }
        }
        $parsed[] = $addOnVersionId;

        $hash = md5(implode('', $parsed));

        $isLatest = false;
        if ($styleId > 0 && $modifiedDate > 0) {
            $styles = XenForo_Application::get('styles');
            if (!empty($styles[$styleId]['last_modified_date'])) {
                $isLatest = ($modifiedDate == $styles[$styleId]['last_modified_date']);
            }
        }

        return array(
            $modifiedDate,
            $hash,
            $isLatest
        );
    }
}
