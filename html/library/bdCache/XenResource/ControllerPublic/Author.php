<?php

class bdCache_XenResource_ControllerPublic_Author extends XFCP_bdCache_XenResource_ControllerPublic_Author
{
    public function actionIndex()
    {
        $response = parent::actionIndex();

        /** @var bdCache_ControllerHelper_Cache $cacheHelper */
        $cacheHelper = $this->getHelper('bdCache_ControllerHelper_Cache');
        $cacheHelper->markResponseAsCacheable($response);

        return $response;
    }

    public function actionView()
    {
        $response = parent::actionView();

        /** @var bdCache_ControllerHelper_Cache $cacheHelper */
        $cacheHelper = $this->getHelper('bdCache_ControllerHelper_Cache');
        $cacheHelper->markResponseAsCacheable($response);

        return $response;
    }

}
