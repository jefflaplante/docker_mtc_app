<?php

class bdCache_EWRporta_ControllerPublic_Articles extends XFCP_bdCache_EWRporta_ControllerPublic_Articles
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
