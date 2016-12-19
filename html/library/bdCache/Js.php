<?php

class bdCache_Js
{
    public static function deferJs(&$content)
    {
        if (!bdCache_Option::get('jsDefer')) {
            return true;
        }

        if (empty($_SERVER['REQUEST_METHOD']) OR $_SERVER['REQUEST_METHOD'] !== 'GET') {
            // do not work with any requests other than GET
            return true;
        }

        if (strpos($content, '<html ⚡')) {
            // do not defer AMP
            return true;
        }

        $found = self::_getScriptsAndInlines($content);
        if (empty($found)) {
            // nothing to do
            return true;
        }

        $newContent = '';
        $offset = 0;
        foreach ($found as $foundOne) {
            $newContent .= substr($content, $offset, $foundOne['offset'] - $offset);
            $offset = $foundOne['offset'] + $foundOne['length'];
        }
        $newContent .= substr($content, $offset);

        $loader = self::_generateLoader($found);
        $newContent = str_replace('</body>', $loader . '</body>', $newContent);

        $content = $newContent;

        return true;
    }

    protected static function _getScriptsAndInlines(&$content)
    {
        $found = array();
        $conditionalCommentOpen = '<!--[if';
        $conditionalCommentClose = '<![endif]-->';

        $offset = 0;
        while (true) {
            // check for conditional comment (Internet Explorer's thingy)
            $openPos = strpos($content, $conditionalCommentOpen, $offset);
            preg_match('#<script(?<attr>[^>]*)>(?<body>.*?)</script>#si', $content, $matches, PREG_OFFSET_CAPTURE, $offset);

            $matched = false;
            if ($openPos === false) {
                if (!empty($matches)) {
                    $matched = true;
                }
            } else {
                if (!empty($matches)) {
                    if ($openPos > $matches[0][1]) {
                        // script match are before conditional comment match, use script instead
                        $openPos = false;
                    }
                }

                $matched = true;
            }

            if (!$matched) {
                break;
            } elseif ($openPos !== false) {
                $offset = $openPos + 1;
                $closePos = strpos($content, $conditionalCommentClose, $openPos);
                if ($closePos !== false) {
                    $matchLength = $closePos - $openPos + strlen($conditionalCommentClose);
                    $match = substr($content, $openPos, $matchLength);

                    if (stripos($match, '<script')) {
                        $found[] = array(
                            'match' => $match,
                            'offset' => $openPos,
                            'length' => $matchLength,
                        );
                    }

                    $offset = $openPos + $matchLength;
                }

                continue;
            } else {
                $offset = $matches[0][1] + 1;
                $src = false;
                $body = false;

                if (preg_match('#src="(?<src>[^"]+)"#i', $matches['attr'][0], $attrMatches)) {
                    $src = $attrMatches['src'];

                    if (self::_isBlacklisted($src)) {
                        // blacklisted
                        $src = false;
                    }
                } elseif (!empty($matches['body'][0])) {
                    $body = $matches['body'][0];

                    if (self::_isBlacklisted($body)) {
                        // blacklisted
                        $body = false;
                    }
                }

                if ($src !== false OR $body !== false) {
                    // check for script type
                    if (preg_match('#type="(?<type>[^"]+)"#i', $matches['attr'][0], $attrMatches)) {
                        $type = $attrMatches['type'];

                        if (empty($type)) {
                            // empty type is good,
                            // javascript is being handled by default by most browsers
                        } elseif (utf8_strtolower($type) === 'text/javascript') {
                            // type is javascript, good
                        } else {
                            // bad type, ignore this script block
                            $src = false;
                            $body = false;
                        }
                    }
                }

                if (!empty($src) OR !empty($body)) {
                    $found[] = array(
                        'src' => $src,
                        'body' => $body,
                        'match' => $matches[0][0],
                        'offset' => $matches[0][1],
                        'length' => strlen($matches[0][0]),
                    );
                }
            }
        }

        return $found;
    }

    protected static function _generateLoader(array $found)
    {
        $loader = '';

        foreach ($found as $foundOne) {
            if (!empty($foundOne['match'])) {
                $loader .= $foundOne['match'];
            } elseif (!empty($foundOne['src'])) {
                $loader .= sprintf("\n<" . 'script type="text/javascript" src="%1$s"></script>', $foundOne['src']);
            } elseif (!empty($foundOne['body'])) {
                $loader .= sprintf("\n<" . 'script type="text/javascript">%1$s</script>', $foundOne['body']);
            }
        }

        return $loader;
    }

    protected static function _isBlacklisted($script)
    {
        static $blacklist = false;
        static $whitelist = false;

        if ($blacklist === false) {
            $blacklist = preg_split('#\n#', bdCache_Option::get('jsDeferBlacklist'), -1, PREG_SPLIT_NO_EMPTY);
        }

        if ($whitelist === false) {
            $whitelist = preg_split('#\n#', bdCache_Option::get('jsDeferWhitelist'), -1, PREG_SPLIT_NO_EMPTY);
        }

        foreach ($blacklist as $blacklistOne) {
            if (strpos($script, $blacklistOne) !== false) {
                $whitelisted = false;

                foreach ($whitelist as $whitelistOne) {
                    if (strpos($script, $whitelistOne) !== false) {
                        $whitelisted = true;
                        break;
                    }
                }

                if (!$whitelisted) {
                    return true;
                }
            }
        }

        return false;
    }

}
