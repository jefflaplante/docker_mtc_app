<?php

class KeywordAlert_DataWriter_Queue extends XenForo_DataWriter
{
    /* Start auto-generated lines of code. Change made will be overwriten... */

    protected function _getFields()
    {
        return array(
            'xf_keywordalert_queue' => array(
                'queue_id' => array('type' => 'uint', 'autoIncrement' => true),
                'target_user_id' => array('type' => 'uint', 'required' => true),
                'schedule_date' => array('type' => 'uint', 'required' => true),
                'data' => array('type' => 'serialized')
            )
        );
    }

    protected function _getExistingData($data)
    {
        if (!$id = $this->_getExistingPrimaryKey($data, 'queue_id')) {
            return false;
        }

        return array('xf_keywordalert_queue' => $this->_getQueueModel()->getQueueById($id));
    }

    protected function _getUpdateCondition($tableName)
    {
        $conditions = array();

        foreach (array('queue_id') as $field) {
            $conditions[] = $field . ' = ' . $this->_db->quote($this->getExisting($field));
        }

        return implode(' AND ', $conditions);
    }

    /**
     * @return KeywordAlert_Model_Queue
     */
    protected function _getQueueModel()
    {
        return $this->getModelFromCache('KeywordAlert_Model_Queue');
    }


    /* End auto-generated lines of code. Feel free to make changes below */
}