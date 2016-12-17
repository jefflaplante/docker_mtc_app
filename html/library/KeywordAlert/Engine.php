<?php

class KeywordAlert_Engine
{
    /**
     * Prepares keyword. This method should be called before any
     * keywords are saved into database. Otherwise, it may become
     * incompatible with the processing procedure and malfunctions!
     *
     * @param string $keyword
     */
    public static function prepareKeyword($keyword)
    {
        $keyword = self::_trim($keyword);

        if (!self::_isRegEx($keyword)) {
            $keyword = self::_strtolower($keyword);
        }

        return $keyword;
    }

    /**
     * Triggers the process from a datawriter
     *
     * @param string $text
     * @param string $title
     * @param string $link
     * @param array $data
     * @param XenForo_DataWriter $dw
     */
    public static function processFromDw($text, $title, $link, array $data, XenForo_DataWriter $dw)
    {
        /** @var KeywordAlert_Model_Keyword $keywordModel */
        $keywordModel = $dw->getModelFromCache('KeywordAlert_Model_Keyword');

        /** @var KeywordAlert_Model_Queue $queueModel */
        $queueModel = $keywordModel->getModelFromCache('KeywordAlert_Model_Queue');

        self::process(
            $text,
            $title,
            $link,
            $data,
            $keywordModel->getKeywordCache(),
            $queueModel
        );
    }

    /**
     * Processes the text with the given array of keywords. This method also requires
     * a link to be pre-rendered and an array of data (with at least user_id and username).
     * The keywords should be get from KeywordAlert_Model_Keyword::getKeywordCache().
     *
     * @param string $text
     * @param string $title
     * @param string $link
     * @param array $data
     * @param array $keywords
     * @param KeywordAlert_Model_Queue $queueModel
     */
    public static function process($text, $title, $link, array $data, array $keywords, KeywordAlert_Model_Queue $queueModel)
    {
        $emails = array();
        $alerts = array();

        // strip BBCode, remove contents of [QUOTE]
        $text = XenForo_Helper_String::bbCodeStrip($text, true);

        $preProcessText = self::_preProcess($text);
        $preProcessTitle = self::_preProcess($title);

        foreach ($keywords as $keyword) {
            if (!empty($emails[$keyword['user_id']])
                && !empty($alerts[$keyword['user_id']])
            ) {
                // skip this keyword, user is going to receive both email and alert anyway
                continue;
            }

            if (!empty($keyword['notify_frequency'])
                && $keyword['notify_frequency'] == 4
                && empty($keyword['send_alert'])
            ) {
                // no email, no alert?!
                continue;
            }

            if ($keyword['user_id'] == $data['user_id']) {
                // the text comes from the same user (owner of keyword)
                // it's silly to notify somebody with his/her contents!
                // bail out now, hah!
                continue;
            }

            if (isset($data['forum_id'])) {
                // the data has forum_id set, we will check it against forum_mode and forum_data
                $forumFound = false;
                foreach ($keyword['forum_data'] as $forumId) {
                    if ($data['forum_id'] == $forumId) {
                        $forumFound = true;
                        break;
                    }
                }

                if ($keyword['forum_mode'] == 'whitelist') {
                    // whitelist means only forum ids specified is accepted
                    if (!$forumFound) {
                        // well, this data forum_id is not found
                        // don't process it anymore
                        continue;
                    }
                } elseif ($keyword['forum_mode'] == 'blacklist') {
                    if ($forumFound) {
                        // blacklist means if the data forum_id is matched
                        // it shouldn't be processed. It's the case here
                        // so we are ignoring this keyword now
                        continue;
                    }
                }
            }

            if (self::_matchesRules($data, $keyword['excluded_rules'])) {
                // one or more excluded rules have been matched
                // bye bye
                continue;
            }

            $hasBeenFound = false;
            foreach ($keyword['keywords'] as $aKeyword) {
                $first = self::_substr($aKeyword['text'], 0, 1);
                if ($first == '@') {
                    // username mode
                    $username = self::_substr($aKeyword['text'], 1, self::_strlen($aKeyword['text']) - 1);
                    if ($username == self::prepareKeyword($data['username'])) {
                        $hasBeenFound = true;
                        break; // doesn't need to loop though this keyword texts anymore
                    }
                } elseif (self::_found($aKeyword['text'], $preProcessText, $text)
                    || (!empty($aKeyword['in_title'])
                        && self::_found($aKeyword['text'], $preProcessTitle, $title))
                ) {
                    $keyword['matchedText'] = $aKeyword['text'];
                    $hasBeenFound = true;
                    break; // doesn't need to loop though this keyword texts anymore
                }
            }

            if ($hasBeenFound) {
                if (empty($keyword['notify_frequency'])
                    || $keyword['notify_frequency'] != 4
                ) {
                    $emails[$keyword['user_id']] = $keyword;
                }

                if (!empty($keyword['send_alert'])) {
                    $alerts[$keyword['user_id']] = $keyword;
                }
            }
        }

        if (!empty($emails)) {
            $queueModel->queue($emails, $text, $title, $link, $data);
        }

        if (!empty($alerts)) {
            self::_sendAlerts($alerts, $text, $title, $link, $data, $queueModel);
        }
    }

    /**
     * Parses the rule and return a structured array of it.
     *
     * @param string $rule
     *
     * @return array if success, false otherwise.
     */
    public static function parseRule($rule)
    {
        $rule = str_replace(array('=', '<', '>'), array(' = ', ' > ', ' < '), $rule);
        $rule = self::_trim($rule);
        $rule = preg_replace('/\s+/', ' ', $rule);
        $rule = self::_strtolower($rule);
        $parts = explode(' ', $rule);

        if (count($parts) >= 3) {
            $variable = array_shift($parts);
            $operator = array_shift($parts);
            $value = implode(' ', $parts);

            switch ($variable) {
                case 'user_id':
                    if ($operator == '=' AND is_numeric($value)) {
                        return array($variable, $operator, intval($value));
                    } else {
                        return false;
                    }
                    break;
                default:
                    // variable name not found
                    return false;
            }
        }

        return false;
    }

    protected static function _sendAlerts(array $foundKeywords, $text, $title, $link, array $data, KeywordAlert_Model_Queue $queueModel)
    {
        /** @var XenForo_Model_User $userModel */
        $userModel = $queueModel->getModelFromCache('XenForo_Model_User');

        $users = $userModel->getUsersByIds(array_keys($foundKeywords), array(
            'join' => XenForo_Model_User::FETCH_USER_FULL,
        ));

        foreach ($foundKeywords as $userId => $keyword) {
            if (empty($users[$userId])) {
                continue;
            }
            $user = $users[$userId];

            if ($userModel->isUserIgnored($user, $data['user_id'])) {
                // don't send alert about ignored users
                continue;
            }

            if (!$queueModel->canViewContent($data, $user)) {
                // no permission
                continue;
            }

            XenForo_Model_Alert::alert(
                $user['user_id'],
                $data['user_id'],
                $data['username'],
                $data['content_type'],
                $data['content_id'],
                'keywordalert',
                array(
                    'keyword' => $keyword,
                    'text' => $text,
                    'title' => $title,
                    'link' => $link,
                    'data' => $data,
                )
            );
        }
    }

    /**
     * Looks for a keyword in the text. Returns true if keyword is found,
     * returns false otherwise.
     *
     * @param string $keyword
     * @param string $preProcessedText
     * @param string $text
     *
     * @return boolean
     */
    protected static function _found($keyword, $preProcessedText, $text)
    {
        $isRegEx = self::_isRegEx($keyword);
        $textLength = self::_strlen($preProcessedText);
        $keywordLength = self::_strlen($keyword);
        $offset = 0;

        while (true) {
            if ($isRegEx) {
                if (preg_match($keyword, $text, $matches, PREG_OFFSET_CAPTURE, $offset)) {
                    $_pos = $matches[0][1];
                    $keywordLength = self::_strlen($matches[0][0]);
                } else {
                    $_pos = false;
                }
            } else {
                $_pos = self::_strpos($preProcessedText, $keyword, $offset);
            }

            // keyword is not found, stop searching around
            if ($_pos === false) break;

            // marks for future search
            $offset = $_pos + 1;

            if ($_pos > 0) {
                // checks for the previous character
                $_prev = self::_substr($preProcessedText, $_pos - 1, 1);
                $_prev = self::_trim($_prev);
                if (!empty($_prev)
                    && !self::_isPunctuation($_prev)
                ) {
                    // the previous character is non-space and non-punctuation!
                    // continues searching for another instance of the keyword
                    continue;
                }
            }

            $_posNext = $_pos + $keywordLength;
            if ($_posNext < $textLength) {
                // checks for the following character
                $_next = self::_substr($preProcessedText, $_posNext, 1);
                $_next = self::_trim($_next);
                if (!empty($_next)
                    && !self::_isPunctuation($_next)
                ) {
                    // the following character is non-space and non-punctuation!
                    // continues searching for another instance of the keyword
                    continue;
                }
            }

            // well, if it reached this far
            // it should be good enough...
            return true; // CONGRATS!
        }

        return false;
    }

    /**
     * Pre-processes the text. Remove all noise to make it easier (and faster)
     * to search later...
     *
     * @param string $text
     *
     * @return string
     */
    protected static function _preProcess($text)
    {
        $text = self::_strtolower($text);

        return $text;
    }

    /**
     * Tries to go through list of rules and match them againts data.
     *
     * @param array $data
     * @param array $rules
     *
     * @return boolean true if one or more rules are matched, false otherwise.
     */
    protected static function _matchesRules(array $data, array $rules)
    {
        foreach ($rules as $rule) {
            $parsed = self::parseRule($rule);
            if (!empty($parsed)) {
                $variable = $parsed[0];
                $operator = $parsed[1];
                $value = $parsed[2];

                if (isset($data[$variable])) {
                    // only checks againts rule if the data element is set
                    $matched = false;

                    switch ($operator) {
                        case '=':
                            $matched = ($data[$variable] == $value);
                            break;
                        case '<':
                            $matched = ($data[$variable] < $value);
                            break;
                        case '>':
                            $matched = ($data[$variable] > $value);
                            break;
                    }

                    if ($matched) {
                        // returns immediately if a match is found
                        return true;
                    }
                }
            }
        }

        return false;
    }

    /**
     * Checks if a string is a regular expression.
     *
     * @param string $string
     *
     * @return boolean true if it is, false otherwise
     */
    protected static function _isRegEx($string)
    {
        if (self::_strlen($string) < 3) {
            return false;
        }

        $first = self::_substr($string, 0, 1);
        $last = self::_substr($string, -1, 1);

        if ($first !== $last) {
            return false;
        }

        return in_array($first, array('/', '#', '|'));
    }

    /**
     * Checks if a string is a punctuation.
     * Idea from http://msdn.microsoft.com/en-us/library/6w3ahtyy.aspx
     *
     * @param string $string
     *
     * @return boolean true if it is, false otherwise
     */
    protected static function _isPunctuation($string)
    {
        static $map = array(
            0x21, 0x2F,
            0x3A, 0x40,
            0x5B, 0x60,
            0x7B, 0x7E
        );

        $code = ord($string);
        for ($i = 0, $l = count($map); $i < $l; $i += 2) {
            if ($code >= $map[$i] AND $code <= $map[$i + 1]) {
                return true;
            }
        }

        return false;
    }

    /**
     * Gets string length. Basically a wrapper around mb_strlen()
     * and strlen().
     *
     * @param string $string
     *
     * @return int
     */
    protected static function _strlen($string)
    {
        if (function_exists('mb_strlen')) {
            return mb_strlen($string);
        } else {
            return strlen($string);
        }
    }

    /**
     * Returns the numeric position of the first occurrences of needle
     * in the haystack string. Basically a wrapper around mb_strpos()
     * and strpos().
     *
     * @param string $haystack
     * @param string $needle
     * @param int $offset
     *
     * @return int the position as an integer. If needle is not found, returns boolean FALSE.
     */
    protected static function _strpos($haystack, $needle, $offset = 0)
    {
        if (function_exists('mb_strpos')) {
            return mb_strpos($haystack, $needle, $offset);
        } else {
            return strpos($haystack, $needle, $offset);
        }
    }

    /**
     * Makes a string lowercase. Basically a wrapper around mb_strtolower()
     * and strtolower()
     *
     * @param string $string
     *
     * @return string
     */
    protected static function _strtolower($string)
    {
        if (function_exists('mb_strtolower')) {
            return mb_strtolower($string);
        } else {
            return strtolower($string);
        }
    }

    /**
     * Returns the portion of string specified by the start and length
     * parameters. Basically a wrapper around mb_substr() and substr()
     *
     * @param string $string
     * @param int $start
     * @param int $length
     *
     * @return string
     */
    protected static function _substr($string, $start, $length)
    {
        if (function_exists('mb_substr')) {
            return mb_substr($string, $start, $length);
        } else {
            return substr($string, $start, $length);
        }
    }

    /**
     * Strip whitespace (or other characters) from the beginning and
     * end of a string. Basically an alternative for trim().
     * Idea from http://php.net/manual/en/ref.mbstring.php
     *
     * @param string $string
     */
    protected static function _trim($string)
    {
        return preg_replace("/(^\s+)|(\s+$)/us", "", $string);
    }

}