<?php

class bdCache_XenForo_ControllerPublic_Misc extends XFCP_bdCache_XenForo_ControllerPublic_Misc
{
    public function actionPurgeCache()
    {
        $visitor = XenForo_Visitor::getInstance();

        if (!$visitor->get('is_admin')) {
            return $this->responseNoPermission();
        }

        $uri = $this->getDynamicRedirect();

        bdCache_Core::getInstance()->purgeCache($uri);

        return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS, $uri);
    }

    public function actionUpdateCacheTtl()
    {
        $visitor = XenForo_Visitor::getInstance();

        if (!$visitor->hasAdminPermission('option')) {
            return $this->responseNoPermission();
        }

        $comboEncrypted = $this->_input->filterSingle('combo', XenForo_Input::STRING);
        list($controllerName, $controllerAction) = bdCache_Crypt::decrypt($comboEncrypted);

        if (empty($controllerName) OR empty($controllerAction)) {
            return $this->responseNoPermission();
        }

        if ($this->isConfirmedPost()) {
            $input = $this->_input->filter(array(
                'customize' => XenForo_Input::UINT,
                'ttl' => XenForo_Input::UINT,
            ));

            if ($input['customize']) {
                bdCache_Option::setCustomizedTtlSeconds($controllerName, $controllerAction, $input['ttl']);
            } else {
                bdCache_Option::setCustomizedTtlSeconds($controllerName, $controllerAction, null);
            }

            return $this->responseMessage(new XenForo_Phrase('redirect_changes_saved_successfully'));
        }

        $customizedTtlSeconds = bdCache_Option::getCustomizedTtlSeconds($controllerName, $controllerAction);

        $viewParams = array(
            'controllerName' => $controllerName,
            'controllerAction' => $controllerAction,
            'comboEncrypted' => $comboEncrypted,

            'customizedTtlSeconds' => $customizedTtlSeconds,
        );

        return $this->responseView('bdCache_ViewPublic_Misc_UpdateCacheTtl', 'bdcache_misc_update_cache_ttl', $viewParams);
    }

}
