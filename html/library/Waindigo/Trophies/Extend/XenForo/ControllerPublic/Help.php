<?php
if (false) {

    class XFCP_Waindigo_Trophies_Extend_XenForo_ControllerPublic_Help extends XenForo_ControllerPublic_Help
    {
    }
}

class Waindigo_Trophies_Extend_XenForo_ControllerPublic_Help extends XFCP_Waindigo_Trophies_Extend_XenForo_ControllerPublic_Help
{

    /**
     *
     * @see XenForo_ControllerPublic_Help::actionTrophies()
     */
    public function actionTrophies()
    {
		/* @var $trophyModel XenForo_Model_Trophy */
		$trophyModel = $this->getModelFromCache('XenForo_Model_Trophy');

		/* @var $trophyCategoryModel Waindigo_Trophies_Model_TrophyCategory */
		$trophyCategoryModel = $this->getModelFromCache('Waindigo_Trophies_Model_TrophyCategory');

        $trophies = $trophyModel->prepareTrophies($trophyModel->getAllTrophies());

        $trophyCategories = $trophyCategoryModel->getTrophyCategories(array(),
            array(
                'order' => 'default',
                'orderDirection' => 'asc'
            ));
        $parentTrophyCategories = $trophyCategoryModel->groupTrophyCategoriesByParent($trophyCategories);

        foreach ($trophies as $trophyId => $trophy) {
            if (XenForo_Application::getOptions()->waindigo_trophies_userTrophyListHelp) {
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
            'parentTrophyCategories' => $parentTrophyCategories
        );

       return $this->_getWrapper('trophies',
            $this->responseView('Waindigo_Trophies_ViewPublic_Help_Trophies', 'waindigo_help_trophies_trophies',
                $viewParams));
    }
}