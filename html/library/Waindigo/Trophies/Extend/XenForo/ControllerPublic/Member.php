<?php
if (false) {

    class XFCP_Waindigo_Trophies_Extend_XenForo_ControllerPublic_Member extends XenForo_ControllerPublic_Member
    {
    }
}

class Waindigo_Trophies_Extend_XenForo_ControllerPublic_Member extends XFCP_Waindigo_Trophies_Extend_XenForo_ControllerPublic_Member
{

    /**
     *
     * @see XenForo_ControllerPublic_Member::actionTrophies()
     */
    public function actionTrophies()
    {
        $userId = $this->_input->filterSingle('user_id', XenForo_Input::UINT);
        $user = $this->getHelper('UserProfile')->assertUserProfileValidAndViewable($userId);

        $trophyModel = $this->_getTrophyModel();

        /* @var $trophyCategoryModel Waindigo_Trophies_Model_TrophyCategory */
        $trophyCategoryModel = $this->getModelFromCache('Waindigo_Trophies_Model_TrophyCategory');

        $trophies = $trophyModel->prepareTrophies($trophyModel->getTrophiesForUserId($userId));

        $trophyCategories = $trophyCategoryModel->getTrophyCategories(array(),
            array(
                'order' => 'default',
                'orderDirection' => 'asc'
            ));

        $parentTrophyCategories = $trophyCategoryModel->groupTrophyCategoriesByParent($trophyCategories);

        foreach ($trophies as $trophyId => $trophy) {
            if (XenForo_Application::getOptions()->waindigo_trophies_userTrophyListOverlay) {
                $trophy['userTrophyList'] = $trophyModel->getUsersWithTrophy($trophyId);
                $trophy['count'] = count($trophy['userTrophyList']);
            }
            if ($trophy['trophy_category_id']) {
                $parentTrophyCategoryId = $trophyCategories[$trophy['trophy_category_id']]['parent_category_id'];
            } else {
                $parentTrophyCategoryId = 0;
            }
            $parentTrophyCategories[$parentTrophyCategoryId]['trophy_categories'][$trophy['trophy_category_id']]['trophies'][$trophyId] = $trophy;
        }

        $viewParams = array(
            'user' => $user,
            'parentTrophyCategories' => $parentTrophyCategories
        );

        return $this->responseView('Waindigo_Trophies_ViewPublic_Member_Trophies', 'waindigo_member_trophies_trophies',
            $viewParams);
    }

    /**
     * Member profile page
     *
     * @see XenForo_ControllerPublic_Member
     *
     * @return XenForo_ControllerResponse_View
     */
    public function actionMember()
    {
        $response = parent::actionMember();
        if ($response instanceof XenForo_ControllerResponse_View) {
            if (XenForo_Application::getOptions()->waindigo_trophies_showIconsProfilePage) {
                $trophyCombinationId = $response->params['user']['trophy_combination_id'];
                if ($trophyCombinationId) {
                    $trophyCache = $this->_getTrophyModel()->getUserTrophyCache($trophyCombinationId);
                    $response->params['user']['trophyCache'] = $trophyCache;
                }
            }
        }
        return $response;
    }
}