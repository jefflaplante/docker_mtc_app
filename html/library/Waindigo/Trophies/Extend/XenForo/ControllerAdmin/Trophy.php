<?php
if (false) {

    class XFCP_Waindigo_Trophies_Extend_XenForo_ControllerAdmin_Trophy extends XenForo_ControllerAdmin_Trophy
    {
    }
}

class Waindigo_Trophies_Extend_XenForo_ControllerAdmin_Trophy extends XFCP_Waindigo_Trophies_Extend_XenForo_ControllerAdmin_Trophy
{

    /**
     * Lists all available trophies, grouped by level.
     *
     * @return XenForo_ControllerResponse_Abstract
     */
    public function actionIndex()
    {
        $trophyModel = $this->_getTrophyModel();
        $trophyCategoryModel = $this->_getTrophyCategoryModel();

        $trophies = $trophyModel->prepareTrophies($trophyModel->getAllTrophies());

        $trophyCategories = $trophyCategoryModel->getTrophyCategories(array(),
            array(
                'order' => 'parent_category_id',
                'orderDirection' => 'asc'
            ));

        $parentTrophyCategories = $trophyCategoryModel->groupTrophyCategoriesByParent($trophyCategories);

        foreach ($trophies as $trophyId => $trophy) {
            if ($trophy['trophy_category_id'] && isset($trophyCategories[$trophy['trophy_category_id']])) {
                $parentTrophyCategoryId = $trophyCategories[$trophy['trophy_category_id']]['parent_category_id'];
            } else {
                $parentTrophyCategoryId = 0;
            }
            $parentTrophyCategories[$parentTrophyCategoryId]['trophy_categories'][$trophy['trophy_category_id']]['trophies'][$trophyId] = $trophy;
        }

        $viewParams = array(
            'parentTrophyCategories' => $parentTrophyCategories,
            'trophyCount' => count($trophies)
        );

        return $this->responseView('Waindigo_Trophies_ViewAdmin_Trophy_List', 'waindigo_trophy_list_trophies',
            $viewParams);
    }

    /**
     *
     * @see XenForo_ControllerAdmin_Trophy::_getTrophyAddEditResponse()
     */
    protected function _getTrophyAddEditResponse(array $trophy)
    {
        /* @var $response XenForo_ControllerResponse_View */
        $response = parent::_getTrophyAddEditResponse($trophy);

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

        $response->params['trophyCategories'] = $trophyCategoryTitles;

        return $response;
    }

    /**
     *
     * @see XenForo_ControllerAdmin_Trophy::actionSave()
     *
     */
    public function actionSave()
    {
        $GLOBALS['XenForo_ControllerAdmin_Trophy'] = $this;

        return parent::actionSave();
    }

    /**
     * Displays a form to manually assign users trophies.
     *
     * @return XenForo_ControllerResponse_Abstract
     */
    public function actionManage()
    {
        $trophyModel = $this->_getTrophyModel();
        $trophies = $trophyModel->getAllTrophies();
        $trophies = $trophyModel->prepareTrophies($trophies);

        $viewParams = array(
            'trophies' => $trophies
        );
        return $this->responseView('XenForo_ViewAdmin_Trophy_Manage', 'waindigo_trophy_manage_trophies', $viewParams);
    }

    /**
     * Manually awards a user a trophy.
     *
     * @return XenForo_ControllerResponse_Abstract
     */
    public function actionManual()
    {
        $input = $this->_input->filter(
            array(
                'username' => XenForo_Input::STRING,
                'trophy_id' => XenForo_Input::UINT
            ));

        $user = $this->_getUserModel()->getUserByName($input['username']);
        if (!$user) {
            return $this->responseError(new XenForo_Phrase('requested_user_not_found'));
        }

        $trophy = $this->_getTrophyOrError($input['trophy_id']);

        /* @var $trophyModel XenForo_Model_Trophy */
        $trophyModel = $this->_getTrophyModel();
        $userTrophies = $trophyModel->getTrophiesForUserId($user['user_id']);

        if (isset($userTrophies[$trophy['trophy_id']])) {
            return $this->responseError(new XenForo_Phrase('waindigo_user_already_has_trophy_trophies'));
        }

        $trophyModel->awardUserTrophy($user, $user['username'], $trophy);

        $newTrophy = $trophyModel->getTrophyById($input['trophy_id']);
        $userTrophies[$newTrophy['trophy_id']] = $newTrophy;

        $trophyModel->rebuildUserTrophyCache($user['user_id']);

        return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
            XenForo_Link::buildAdminLink('trophies'));
    }

    public function actionExport()
    {
        /* @var $trophyModel XenForo_Model_Trophy */
        $trophyModel = $this->_getTrophyModel();

        $trophyCategoryModel = $this->_getTrophyCategoryModel();

        $allTrophies = $trophyModel->getAllTrophies();

        if ($this->isConfirmedPost()) {
            $trophyIds = $this->_input->filterSingle('trophy_ids', XenForo_Input::ARRAY_SIMPLE);
            $trophies = array();
            foreach ($trophyIds as $trophyId) {
                if (isset($allTrophies[$trophyId])) {
                    $trophies[] = $allTrophies[$trophyId];
                }
            }

            $trophies = $trophyModel->prepareTrophies($trophies);

            $this->_routeMatch->setResponseType('xml');

            $viewParams = array(
                'xml' => $trophyModel->getTrophiesXml($trophies)
            );

            return $this->responseView('Waindigo_Trophies_ViewAdmin_Trophies_Export', '', $viewParams);
        } else {
            $trophies = $trophyModel->prepareTrophies($trophyModel->getAllTrophies());

            $trophyCategories = $trophyCategoryModel->getTrophyCategories(array(),
                array(
                    'order' => 'parent_category_id',
                    'orderDirection' => 'asc'
                ));

            $parentTrophyCategories = $trophyCategoryModel->groupTrophyCategoriesByParent($trophyCategories);

            foreach ($trophies as $trophyId => $trophy) {
                if ($trophy['trophy_category_id']) {
                    $parentTrophyCategoryId = $trophyCategories[$trophy['trophy_category_id']]['parent_category_id'];
                } else {
                    $parentTrophyCategoryId = 0;
                }
                $parentTrophyCategories[$parentTrophyCategoryId]['trophy_categories'][$trophy['trophy_category_id']]['trophies'][$trophyId] = $trophy;
            }

            $viewParams = array(
                'parentTrophyCategories' => $parentTrophyCategories,
                'trophyCount' => count($trophies)
            );

            return $this->responseView('Waindigo_Trophies_ViewAdmin_Trophy_Export', 'waindigo_trophy_export_trophies',
                $viewParams);
        }
    }

    public function actionImport()
    {
        if ($this->isConfirmedPost()) {
            /* @var $trophyModel XenForo_Model_Trophy */
            $trophyModel = $this->_getTrophyModel();

            $upload = XenForo_Upload::getUploadedFile('upload');
            if (!$upload) {
                return $this->responseError(
                    new XenForo_Phrase('waindigo_please_upload_valid_trophies_xml_file_trophies'));
            }

            $document = $this->getHelper('Xml')->getXmlFromFile($upload);
            $caches = $trophyModel->importTrophiesXml($document);

            return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
                XenForo_Link::buildAdminLink('trophies'));
        } else {
            return $this->responseView('Waindigo_Trophies_ViewAdmin_Trophy_Import', 'waindigo_trophy_import_trophies');
        }
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

    /**
     * Get the trophy combination model.
     *
     * @return Waindigo_Trophies_Model_TrophyCombination
     */
    protected function _getTrophyCombinationModel()
    {
        return $this->getModelFromCache('Waindigo_Trophies_Model_TrophyCombination');
    }

    /**
     * Get the user model.
     *
     * @return XenForo_Model_User
     */
    protected function _getUserModel()
    {
        return $this->getModelFromCache('XenForo_Model_User');
    }
}