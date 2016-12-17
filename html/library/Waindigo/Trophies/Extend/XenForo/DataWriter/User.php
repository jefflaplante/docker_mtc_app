<?php
if (false) {

    class XFCP_Waindigo_Trophies_Extend_XenForo_DataWriter_User extends XenForo_DataWriter_User
    {
    }
}

class Waindigo_Trophies_Extend_XenForo_DataWriter_User extends XFCP_Waindigo_Trophies_Extend_XenForo_DataWriter_User
{

    /**
     *
     * @see XenForo_DataWriter_User::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();
        $fields['xf_user_profile']['trophy_combination_id'] = array(
            'type' => self::TYPE_UINT,
            'default' => 0
        );
        $fields['xf_user_option']['trophy_category_ids'] = array(
            'type' => self::TYPE_STRING,
            'default' => ''
        );
        return $fields;
    }

    /**
     * @see XenForo_DataWriter_User::_postSave()
     */
    protected function _postSave()
    {
        if ($this->isChanged('trophy_category_ids')) {
            $this->getModelFromCache('XenForo_Model_Trophy')->rebuildUserTrophyCache($this->get('user_id'));
        }
        return parent::_postSave();
    }

    /**
     *
     * @param array $trophyCategoryIds
     */
    public function updateTrophyCategoryIds(array $trophyCategoryIds)
    {
        sort($trophyCategoryIds);

        $trophyCategoryIds = implode(',', $trophyCategoryIds);

        $this->set('trophy_category_ids', $trophyCategoryIds);
    }
}