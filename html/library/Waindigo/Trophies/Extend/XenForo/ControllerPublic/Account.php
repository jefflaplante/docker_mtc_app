<?php
if (false) {

    class XFCP_Waindigo_Trophies_Extend_XenForo_ControllerPublic_Account extends XenForo_ControllerPublic_Account
    {
    }
}

class Waindigo_Trophies_Extend_XenForo_ControllerPublic_Account extends XFCP_Waindigo_Trophies_Extend_XenForo_ControllerPublic_Account
{

    /**
     *
     * @return XenForo_ControllerResponse_View
     */
    public function actionTrophies()
    {
        $visitor = XenForo_Visitor::getInstance();

        if (!XenForo_Application::getOptions()->waindigo_trophies_userCanEditTrophyDisplayOptions) {
            return $this->responseNoPermission();
        }

        $selectedTrophyCategories = array();
        if ($visitor['trophy_category_ids']) {
            $selectedTrophyCategories = explode(',', $visitor['trophy_category_ids']);
        }

        $trophyCategories = $this->_getTrophyCategoryModel()->getTrophyCategories(array(),
            array(
                'order' => 'default',
                'orderDirection' => 'asc'
            ));

        $trophyCategoryTitles = array();
        foreach ($trophyCategories as $trophyCategoryId => $category) {
            if ($category['parent_category_id'] != 0) {
                $trophyCategoryTitles[$trophyCategoryId] = $category['title'];
            }
        }
        $trophyCategoryTitles[0] = new XenForo_Phrase('ungrouped');

        $viewParams = array(
            'trophyCategoryTitles' => $trophyCategoryTitles,
            'selectedTrophyCategories' => $selectedTrophyCategories
        );

        return $this->_getWrapper('account', 'trophies',
            $this->responseView('Waindigo_Trophies_ViewPublic_Account_Trophies', 'waindigo_account_trophies_trophies',
                $viewParams));
    }

    /**
     *
     * @return XenForo_ControllerResponse_Redirect
     */
    public function actionTrophiesSave()
    {
        $this->_assertPostOnly();

        if (!XenForo_Application::getOptions()->waindigo_trophies_userCanEditTrophyDisplayOptions) {
            return $this->responseNoPermission();
        }

        $input = $this->_input->filter(
            array(
                'trophy_category_ids' => XenForo_Input::ARRAY_SIMPLE
            ));

        $userId = XenForo_Visitor::getUserId();
        
        $dw = XenForo_DataWriter::create('XenForo_DataWriter_User');
        $dw->setExistingData($userId);
        $dw->updateTrophyCategoryIds(array_keys($input['trophy_category_ids']));
        $dw->save();

        $this->_getTrophyModel()->rebuildUserTrophyCache($userId);
        
        return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
            XenForo_Link::buildPublicLink('account/trophies'));
    }
    
    /**
     * @return XenForo_Model_Trophy
     */
    protected function _getTrophyModel()
    {
        return $this->getModelFromCache('XenForo_Model_Trophy');
    }
    
    /**
     * Get the trophy category model.
     *
     * @return Waindigo_Trophies_Model_TrophyCategory
     */
    protected function _getTrophyCategoryModel()
    {
        return $this->getModelFromCache('Waindigo_Trophies_Model_TrophyCategory');
    }

}