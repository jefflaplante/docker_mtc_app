<?php

/**
 * Exports trophies as XML.
 */
class Waindigo_Trophies_ViewAdmin_Trophies_Export extends XenForo_ViewAdmin_Base
{

    public function renderXml()
    {
        $this->setDownloadFileName('trophies.xml');
        return $this->_params['xml']->saveXml();
    } /* renderXml */
}