<?php

class bdCache_ControllerHelper_FastSinglePage extends XenForo_ControllerHelper_Abstract
{
    public function doAmp(XenForo_ControllerResponse_View &$response, $templateName)
    {
        $response->containerParams['containerTemplate'] = 'bdcache_amp_PAGE_CONTAINER';
        $response->containerParams['bdCache_isAmp'] = true;
        $response->templateName = $templateName;
        $response->params['bdCache_isAmp'] = true;

        $sharePageOptionsCallback = array('bdCache_Helper_Amp', 'template_hook_share_page_options');
        XenForo_CodeEvent::addListener('template_hook', $sharePageOptionsCallback, 'bdcache_amp_share_page');
        XenForo_CodeEvent::addListener('template_hook', $sharePageOptionsCallback, 'bdcache_amp_sidebar_share_page');
    }
}