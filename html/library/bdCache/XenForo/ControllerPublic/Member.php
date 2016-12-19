<?php

class bdCache_XenForo_ControllerPublic_Member extends XFCP_bdCache_XenForo_ControllerPublic_Member
{
    public function actionIndex()
    {
        $response = parent::actionIndex();

        /** @var bdCache_ControllerHelper_Cache $cacheHelper */
        $cacheHelper = $this->getHelper('bdCache_ControllerHelper_Cache');
        $cacheHelper->markResponseAsCacheable($response);

        return $response;
    }

    public function actionMember()
    {
        $response = parent::actionMember();

        /** @var bdCache_ControllerHelper_Cache $cacheHelper */
        $cacheHelper = $this->getHelper('bdCache_ControllerHelper_Cache');
        $cacheHelper->markResponseAsCacheable($response);

        return $response;
    }

}
