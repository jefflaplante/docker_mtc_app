<?php

class bdCache_ControllerHelper_Cache extends XenForo_ControllerHelper_Abstract
{
    public function markResponseAsCacheable(XenForo_ControllerResponse_Abstract &$response, $ttl = false, array $extraData = array())
    {
        if (XenForo_Visitor::getUserId() > 0) {
            return;
        }

        if ($response instanceof XenForo_ControllerResponse_View) {
            $this->markViewParamsAsCacheable($response->params, $ttl, $extraData);
        }
    }

    public function markViewParamsAsCacheable(array &$params, $ttl = false, array $extraData = array())
    {
        if (isset($params[bdCache_Core::TEMPLATE_PARAM_IS_CACHEABLE])) {
            // do not change existing configuration
            return;
        }

        if ($ttl === false) {
            $routeMatch = $this->_controller->getRouteMatch();
            $controllerName = $routeMatch->getControllerName();
            $controllerAction = $routeMatch->getAction();
            $customizedTtl = bdCache_Option::getCustomizedTtlSeconds($controllerName, $controllerAction);

            if (is_int($customizedTtl)) {
                $ttl = $customizedTtl;
            } else {
                $ttl = intval(bdCache_Option::get('defaultTtlSeconds'));
            }
        }

        if ($ttl > 0) {
            $params[bdCache_Core::TEMPLATE_PARAM_IS_CACHEABLE] = true;
            $params[bdCache_Core::TEMPLATE_PARAM_TTL_SECONDS] = $ttl;
            $params[bdCache_Core::TEMPLATE_PARAM_EXTRA_DATA] = $extraData;
        }
    }

}
