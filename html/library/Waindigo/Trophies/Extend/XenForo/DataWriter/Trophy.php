<?php
if (false) {

    class XFCP_Waindigo_Trophies_Extend_XenForo_DataWriter_Trophy extends XenForo_DataWriter_Trophy
    {
    }
}

class Waindigo_Trophies_Extend_XenForo_DataWriter_Trophy extends XFCP_Waindigo_Trophies_Extend_XenForo_DataWriter_Trophy
{

    /**
     *
     * @see XenForo_DataWriter_Trophy::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();

        $fields['xf_trophy']['trophy_category_id'] = array(
            'type' => self::TYPE_UINT,
            'default' => 0
        );
        $fields['xf_trophy']['icon_url'] = array(
            'type' => self::TYPE_STRING,
            'default' => ''
        );

        return $fields;
    }

    /**
     *
     * @see XenForo_DataWriter_Trophy::_preSave()
     */
    protected function _preSave()
    {
        if (isset($GLOBALS['XenForo_ControllerAdmin_Trophy'])) {
            /* @var $controller XenForo_ControllerAdmin_Trophy */
            $controller = $GLOBALS['XenForo_ControllerAdmin_Trophy'];
            $this->set('trophy_category_id',
                $controller->getInput()
                    ->filterSingle('trophy_category_id', XenForo_Input::INT));
            $this->set('icon_url',
                $controller->getInput()
                    ->filterSingle('icon_url', XenForo_Input::STRING));
        }
        return parent::_preSave();
    }

    /**
     *
     * @see XenForo_DataWriter_Trophy::_postSave()
     */
    protected function _postSave()
    {
        if ($this->isUpdate() && $this->isChanged('icon_url')) {
            $this->_getTrophyCombinationModel()->rebuildExistingTrophyCombinationForTrophyId($this->get('trophy_id'));
        }
        return parent::_postSave();
    }

    /**
     *
     * @see XenForo_DataWriter_Trophy::_postDelete()
     */
    protected function _postDelete()
    {
        $trophyCombinationModel = $this->_getTrophyCombinationModel();
        $trophyCombinationModel->deleteTrophyCombinationsForTrophy($this->get('trophy_id'));
        return parent::_postDelete();
    }

    /**
     * Updates the number of points a trophy is worth.
     *
     * @param integer $trophyId
     * @param integer $oldPoints
     * @param integer $newPoints
     */
    protected function _updateTrophyPoints($trophyId, $oldPoints, $newPoints)
    {
        parent::_updateTrophyPoints($trophyId, $oldPoints, $newPoints);

        $this->_db->query(
            '
			UPDATE xf_user_profile SET
				trophy_count = IF(trophy_count > 0, trophy_count - 1, 0)
			WHERE user_id IN (
				SELECT user_id
				FROM xf_user_trophy
				WHERE trophy_id = ?
			)
		', array(
                $trophyId
            ));
    }

    /**
     * Get the trophy combination model.
     *
     * @return Waindigo_Trophies_Model_TrophyCombination
     */
    protected function _getTrophyCombinationModel()
    {
        return $this->getModelFromCache('Waindigo_Trophies_Model_TrophyCombination');
    }
}