<?php

class KeywordAlert_Template_Helper
{
    public static function canUse(array $viewingUser = NULL)
    {
        /** @var KeywordAlert_Model_Keyword $keywordModel */
        $keywordModel = XenForo_Model::create('KeywordAlert_Model_Keyword');
        return $keywordModel->canUse($viewingUser);
    }

    public static function keywordsCommaSeparated($keywordKeywords)
    {
        $keywordTexts = array();
        if (!empty($keywordKeywords)) {
            foreach ($keywordKeywords as $aKeyword) {
                $keywordTexts[] = $aKeyword['text'];
            }
        }

        return implode(', ', $keywordTexts);
    }

    public static function notifyFrequency($f)
    {
        switch ($f) {
            case 86400:
                return new XenForo_Phrase('keywordalert_notify_frequency_daily');
            case 604800:
                return new XenForo_Phrase('keywordalert_notify_frequency_weekly_short');
            case 2592000:
                return new XenForo_Phrase('keywordalert_notify_frequency_monthly_short');
            case 0:
            default:
                return new XenForo_Phrase('keywordalert_notify_frequency_immediately');
        }
    }

    public static function excludedRulesCommaSeparated($excludedRules)
    {
        $rules = array();

        if (!empty($excludedRules)) {
            foreach ($excludedRules as $excludedRule) {
                $tmp = self::excludedRuleExplain($excludedRule);
                if (is_array($tmp)) {
                    $rules[] = $tmp[1];
                } else {
                    $rules[] = $tmp;
                }
            }
        }

        return implode(', ', $rules);
    }

    public static function excludedRuleExplain($excludedRule)
    {
        $parsed = KeywordAlert_Engine::parseRule($excludedRule);
        if (!empty($parsed)) {
            $variable = $parsed[0];
            $operator = $parsed[1];
            $value = $parsed[2];
            $str = $excludedRule;

            switch ($variable) {
                case 'user_id':
                    $str = new XenForo_Phrase('keywordalert_rule_user_id_equals_x', array('value' => $value));
                    break;
            }

            return array($excludedRule, $str);
        }

        return $excludedRule;
    }
}