<?php

class bdCache_Helper_Css
{
    public static function cleanUpStylesheet($css, $html)
    {
        $output = '';

        $css = trim(Minify_CSS_Compressor::process($css));

        $offset = 0;
        while (true) {
            if (!preg_match('#(?<s>[@\w\s\-,:\*\+\#\.\(\)\[\]\=\"\>]+)\{(?<d>.+?)}#s', $css, $matches,
                PREG_OFFSET_CAPTURE,
                $offset)
            ) {
                break;
            }

            $selectors = $matches['s'][0];
            if (strpos($selectors, '@') !== false) {
                $output .= substr($css, $offset, $matches['d'][1] - $offset);
                $offset = $matches['d'][1];
                continue;
            }

            $declaration = $matches['d'][0];

            $selectors = preg_split('#,#', $selectors, -1, PREG_SPLIT_NO_EMPTY);
            $filteredSelectors = array();
            foreach ($selectors as $selector) {
                if (strpos($selector, '*')
                    || strpos($selector, ':not(')
                ) {
                    continue;
                }

                $rules = preg_split('#(\s|\#|\.)#', $selector, -1, PREG_SPLIT_NO_EMPTY);
                $ruleNotFound = false;
                foreach ($rules as $rule) {
                    $rule = preg_replace('#:.+$#', '', $rule);
                    if (empty($rule)) {
                        continue;
                    }
                    if (strpos($html, $rule) === false) {
                        $ruleNotFound = true;
                        break;
                    }
                }

                if (!$ruleNotFound) {
                    $filteredSelectors[] = $selector;
                }
            }

            if ($matches[0][1] > $offset) {
                $output .= substr($css, $offset, $matches[0][1] - $offset);
            }

            if (!empty($filteredSelectors)) {
                $declaration = str_replace('!important', '', $declaration);
                $declaration = preg_replace('#\*\w.+(;|$)#', '', $declaration);

                $output .= sprintf('%s{%s}', implode(',', $filteredSelectors), $declaration);
            }

            $offset = $matches[0][1] + strlen($matches[0][0]);
        }

        return $output;
    }

    public static function fixUrls($css, array $requestPaths = null)
    {
        if ($requestPaths === null) {
            $requestPaths = XenForo_Application::get('requestPaths');
        }
        $requestBeforeBasePath = substr($requestPaths['fullBasePath'], 0, -1 * strlen($requestPaths['basePath']));

        $offset = 0;
        while (true) {
            $strPos = strpos($css, 'url(', $offset);
            if ($strPos === false) {
                break;
                // while(true)
            }
            $offset = $strPos + 1;

            $insertOffset = 4;
            $firstChars = substr($css, $strPos + $insertOffset, 9);
            $veryFirstChar = substr($firstChars, 0, 1);
            if ($veryFirstChar === "'" OR $veryFirstChar === '"') {
                $firstChars = substr($firstChars, 1);
                $insertOffset++;
            }

            $semiColonPos = strpos($firstChars, ':');
            if ($semiColonPos !== false) {
                // protocol found, do nothing
                // expected protocol: http, https, data
            } elseif (substr($firstChars, 0, 2) === '//') {
                // protocol independent, do nothing
            } elseif (substr($firstChars, 0, 1) === '/') {
                // append the host name
                $css = substr_replace($css, $requestBeforeBasePath, $strPos + $insertOffset, 0);
            } else {
                // adjust url to make it valid
                $css = substr_replace($css, $requestPaths['fullBasePath'], $strPos + $insertOffset, 0);
            }
        }

        return $css;
    }
}