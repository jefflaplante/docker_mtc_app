<?php

/**
 * Data writer for trophy categories.
 */
class Waindigo_Trophies_DataWriter_TrophyCategory extends XenForo_DataWriter
{

    /**
     * Title of the phrase that will be created when a call to set the
     * existing data fails (when the data doesn't exist).
     *
     * @var string
     */
    protected $_existingDataErrorPhrase = 'waindigo_requested_trophy_category_not_found_trophies';

    /**
     * Gets the fields that are defined for the table.
     * See parent for explanation.
     *
     * @return array
     */
    protected function _getFields()
    {
        return array(
            'xf_trophy_category' => array(
                'trophy_category_id' => array(
                    'type' => self::TYPE_UINT,
                    'autoIncrement' => true
                ), 
                'title' => array(
                    'type' => self::TYPE_STRING,
                    'required' => true
                ), 
                'parent_category_id' => array(
                    'type' => self::TYPE_UINT,
                    'default' => 0
                ), 
                'display_order' => array(
                    'type' => self::TYPE_UINT,
                    'default' => 1
                ), 
            ), 
        );
    }

    /**
     * Gets the actual existing data out of data that was passed in.
     * See parent for explanation.
     *
     * @param mixed
     *
     * @return array false
     */
    protected function _getExistingData($data)
    {
        if (!$trophyCategoryId = $this->_getExistingPrimaryKey($data, 'trophy_category_id')) {
            return false;
        }

        $trophyCategory = $this->_getTrophyCategoryModel()->getTrophyCategoryById($trophyCategoryId);
        if (!$trophyCategory) {
            return false;
        }

        return $this->getTablesDataFromArray($trophyCategory);
    }

    /**
     * Gets SQL condition to update the existing record.
     *
     * @return string
     */
    protected function _getUpdateCondition($tableName)
    {
        return 'trophy_category_id = ' . $this->_db->quote($this->getExisting('trophy_category_id'));
    }

    /**
     * Post-delete handling.
     */
    protected function _postDelete()
    {
        $this->_db->update('xf_trophy', array(
            'trophy_category_id' => 0
        ), 'trophy_category_id = ' . $this->_db->quote($this->get('trophy_category_id')));
    }

    /**
     * Get the trophy categories model.
     *
     * @return Waindigo_Trophies_Model_TrophyCategory
     */
    protected function _getTrophyCategoryModel()
    {
        return $this->getModelFromCache('Waindigo_Trophies_Model_TrophyCategory');
    }
}