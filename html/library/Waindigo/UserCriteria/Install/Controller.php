<?php

class Waindigo_UserCriteria_Install_Controller extends Waindigo_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/user-criteria-by-waindigo.813/';

    protected function _preInstall()
    {
        $addOn = $this->getModelFromCache('XenForo_Model_AddOn')->getAddOnById('Waindigo_AdvUserPromo');

        if ($addOn) {
            $dw = XenForo_DataWriter::create('XenForo_DataWriter_AddOn');
            $dw->setExistingData($addOn);
            $dw->delete();
        }
    }
}