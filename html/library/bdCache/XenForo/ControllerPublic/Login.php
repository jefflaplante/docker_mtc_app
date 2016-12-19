<?php

class bdCache_XenForo_ControllerPublic_Login extends XFCP_bdCache_XenForo_ControllerPublic_Login
{
    public function getDynamicRedirectIfNot($notUrl, $fallbackUrl = false, $useReferrer = true)
    {
        $redirect = parent::getDynamicRedirectIfNot($notUrl, $fallbackUrl, $useReferrer);

        if (strpos($redirect, XenForo_Application::getOptions()->get('boardUrl')) === 0) {
            $redirect = preg_replace('#(\?|&)amp=\d+(&|$)#', '$1', $redirect);
        }

        return $redirect;
    }

}
