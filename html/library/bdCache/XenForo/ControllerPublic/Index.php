<?php

class bdCache_XenForo_ControllerPublic_Index extends XFCP_bdCache_XenForo_ControllerPublic_Index
{
    public function actionIndex()
    {
        $response = parent::actionIndex();

        /** @var bdCache_ControllerHelper_Cache $cacheHelper */
        $cacheHelper = $this->getHelper('bdCache_ControllerHelper_Cache');
        $cacheHelper->markResponseAsCacheable($response);

        return $response;
    }

}
