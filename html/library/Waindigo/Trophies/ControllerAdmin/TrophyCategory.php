<?php

/**
 * Admin controller for handling actions on trophy categories.
 */
class Waindigo_Trophies_ControllerAdmin_TrophyCategory extends XenForo_ControllerAdmin_Abstract
{

    protected function _preDispatch($action)
    {
        $this->assertAdminPermission('trophy');
    }

    /**
     * Shows a list of trophy categories.
     *
     * @return XenForo_ControllerResponse_View
     */
    public function actionIndex()
    {
        $trophyCategoryModel = $this->_getTrophyCategoryModel();

        $trophyCategories = $trophyCategoryModel->getTrophyCategories(array(),
            array(
                'order' => 'default',
                'orderDirection' => 'asc'
            ));

        $trophyCategories = $trophyCategoryModel->groupTrophyCategoriesByParent($trophyCategories);

        $viewParams = array(
            'trophyCategories' => $trophyCategories
        );

        return $this->responseView('Waindigo_Trophies_ViewAdmin_TrophyCategory_List',
            'waindigo_trophy_category_list_trophies', $viewParams);
    }

    /**
     * Helper to get the trophy category add/edit form controller response.
     *
     * @param array $trophyCategory
     *
     * @return XenForo_ControllerResponse_View
     */
    protected function _getTrophyCategoryAddEditResponse(array $trophyCategory)
    {
        $trophyCategories = $this->_getTrophyCategoryModel()->getTrophyCategories(
            array(
                'parent_category_id' => 0
            ));
        
        $trophyCategoryTitles = array();
        foreach ($trophyCategories as $trophyCategoryId => $category) {
            $trophyCategoryTitles[$trophyCategoryId] = $category['title'];
        }

        $viewParams = array(
            'trophyCategory' => $trophyCategory,
            'trophyCategories' => $trophyCategoryTitles
        );

        return $this->responseView('Waindigo_Trophies_ViewAdmin_TrophyCategory_Edit',
            'waindigo_trophy_category_edit_trophies', $viewParams);
    }

    /**
     * Displays a form to add a new trophy category.
     *
     * @return XenForo_ControllerResponse_View
     */
    public function actionAdd()
    {
        $trophyCategory = $this->_getTrophyCategoryModel()->getDefaultTrophyCategory();

        return $this->_getTrophyCategoryAddEditResponse($trophyCategory);
    }

    /**
     * Displays a form to edit an existing trophy category.
     *
     * @return XenForo_ControllerResponse_Abstract
     */
    public function actionEdit()
    {
        $trophyCategoryId = $this->_input->filterSingle('trophy_category_id', XenForo_Input::STRING);

        if (!$trophyCategoryId) {
            return $this->responseReroute('Waindigo_Trophies_ControllerAdmin_TrophyCategory', 'add');
        }

        $trophyCategory = $this->_getTrophyCategoryOrError($trophyCategoryId);

        return $this->_getTrophyCategoryAddEditResponse($trophyCategory);
    }

    /**
     * Inserts a new trophy category or updates an existing one.
     *
     * @return XenForo_ControllerResponse_Abstract
     */
    public function actionSave()
    {
        $this->_assertPostOnly();

        $trophyCategoryId = $this->_input->filterSingle('trophy_category_id', XenForo_Input::STRING);

        $input = $this->_input->filter(
            array(
                'title' => XenForo_Input::STRING,
                'parent_category_id' => XenForo_Input::UINT,
                'display_order' => XenForo_Input::UINT,
            ));

        $visitor = XenForo_Visitor::getInstance();
        $writer = XenForo_DataWriter::create('Waindigo_Trophies_DataWriter_TrophyCategory');
        if ($trophyCategoryId) {
            $writer->setExistingData($trophyCategoryId);
        }
        $writer->bulkSet($input);
        $writer->save();

        if ($this->_input->filterSingle('reload', XenForo_Input::STRING)) {
            return $this->responseRedirect(XenForo_ControllerResponse_Redirect::RESOURCE_UPDATED,
                XenForo_Link::buildAdminLink('trophy-categories/edit', $writer->getMergedData()));
        } else {
            return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
                XenForo_Link::buildAdminLink('trophy-categories') .
                     $this->getLastHash($writer->get('trophy_category_id')));
        }
    }

    /**
     * Deletes a trophy category.
     *
     * @return XenForo_ControllerResponse_Abstract
     */
    public function actionDelete()
    {
        $trophyCategoryId = $this->_input->filterSingle('trophy_category_id', XenForo_Input::STRING);
        $trophyCategory = $this->_getTrophyCategoryOrError($trophyCategoryId);

        $writer = XenForo_DataWriter::create('Waindigo_Trophies_DataWriter_TrophyCategory');
        $writer->setExistingData($trophyCategory);

        if ($this->isConfirmedPost()) { // delete trophy category
            $writer->delete();

            return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
                XenForo_Link::buildAdminLink('trophy-categories'));
        } else { // show delete confirmation prompt
            $writer->preDelete();
            $errors = $writer->getErrors();
            if ($errors) {
                return $this->responseError($errors);
            }

            $viewParams = array(
                'trophyCategory' => $trophyCategory
            );

            return $this->responseView('Waindigo_Trophies_ViewAdmin_TrophyCategory_Delete',
                'waindigo_trophy_category_delete_trophies', $viewParams);
        }
    }

    /**
     * Gets a valid trophy category or throws an exception.
     *
     * @param string $trophyCategoryId
     *
     * @return array
     */
    protected function _getTrophyCategoryOrError($trophyCategoryId)
    {
        $trophyCategory = $this->_getTrophyCategoryModel()->getTrophyCategoryById($trophyCategoryId);
        if (!$trophyCategory) {
            throw $this->responseException(
                $this->responseError(new XenForo_Phrase('waindigo_requested_trophy_category_not_found_trophies'), 404));
        }

        return $trophyCategory;
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