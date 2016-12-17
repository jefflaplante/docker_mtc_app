<?php

class KeywordAlert_DataWriter_Keyword extends XenForo_DataWriter
{

    public function setKeywords(array $keywords)
    {
        foreach (array_keys($keywords) as $key) {
            if (empty($keywords[$key])
                || empty($keywords[$key]['text'])
            ) {
                unset($keywords[$key]);
                continue;
            }

            $keywords[$key]['text'] = KeywordAlert_Engine::prepareKeyword($keywords[$key]['text']);
        }

        if (empty($keywords)) {
            $this->error(new XenForo_Phrase('keywordalert_you_must_enter_some_keywords'), 'keywords');
            return false;
        }

        return $this->set('keywords', $keywords);
    }

    public function setForumData(array $forumData)
    {
        if ($this->get('forum_mode') == 'all') {
            $forumData = array();
        }

        $forumData = array_map('intval', $forumData);
        $forumData = array_unique($forumData);
        foreach (array_keys($forumData) as $key) {
            if (empty($forumData[$key])) {
                unset($forumData[$key]);
            }
        }

        if ($this->get('forum_mode') != 'all' AND empty($forumData)) {
            $this->error(new XenForo_Phrase('keywordalert_you_must_select_at_least_one_forum'), 'forum_data', true);
        }

        return $this->set('forum_data', $forumData);
    }

    public function setExcludedRules(array $excludedRules)
    {
        foreach (array_keys($excludedRules) as $key) {
            if (empty($excludedRules[$key])) {
                unset($excludedRules[$key]);
            }
        }

        return $this->set('excluded_rules', $excludedRules);
    }

    protected function _postSave()
    {
        $this->_getKeywordModel()->updateKeywordCache();
    }

    protected function _postDelete()
    {
        $this->_getKeywordModel()->updateKeywordCache();
    }

    /* Start auto-generated lines of code. Change made will be overwriten... */

    protected function _getFields()
    {
        return array(
            'xf_keywordalert_keyword' => array(
                'keyword_id' => array('type' => XenForo_DataWriter::TYPE_UINT, 'autoIncrement' => true),
                'name' => array('type' => XenForo_DataWriter::TYPE_STRING, 'required' => true, 'maxLength' => 255,
                    'requiredError' => 'keywordalert_you_must_give_the_keyword_set_a_name'),
                'keywords' => array('type' => XenForo_DataWriter::TYPE_SERIALIZED),
                'notify_frequency' => array('type' => XenForo_DataWriter::TYPE_UINT, 'required' => true),
                'send_alert' => array('type' => XenForo_DataWriter::TYPE_BOOLEAN, 'default' => 0),
                'user_id' => array('type' => XenForo_DataWriter::TYPE_UINT, 'required' => true),
                'forum_mode' => array(
                    'type' => XenForo_DataWriter::TYPE_STRING,
                    'required' => true,
                    'allowedValues' => array('whitelist', 'blacklist', 'all')
                ),
                'forum_data' => array('type' => XenForo_DataWriter::TYPE_SERIALIZED),
                'excluded_rules' => array('type' => XenForo_DataWriter::TYPE_SERIALIZED)
            )
        );
    }

    protected function _getExistingData($data)
    {
        if (!$id = $this->_getExistingPrimaryKey($data, 'keyword_id')) {
            return false;
        }

        return array('xf_keywordalert_keyword' => $this->_getKeywordModel()->getKeywordById($id));
    }

    protected function _getUpdateCondition($tableName)
    {
        $conditions = array();

        foreach (array('keyword_id') as $field) {
            $conditions[] = $field . ' = ' . $this->_db->quote($this->getExisting($field));
        }

        return implode(' AND ', $conditions);
    }

    /**
     * @return KeywordAlert_Model_Keyword
     */
    protected function _getKeywordModel()
    {
        return $this->getModelFromCache('KeywordAlert_Model_Keyword');
    }


    /* End auto-generated lines of code. Feel free to make changes below */
}