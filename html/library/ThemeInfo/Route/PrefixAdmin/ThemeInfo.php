<?php

class ThemeInfo_Route_PrefixAdmin_ThemeInfo implements XenForo_Route_Interface
{
        /**
         * Match a specific route for an already matched prefix.
         *
         * @see XenForo_Route_Interface::match()
         */
        public function match($routePath, Zend_Controller_Request_Http $request, XenForo_Router $router)
        {
                return $router->getRouteMatch('ThemeInfo_ControllerAdmin_ThemeInfo', $routePath, 'tools');
        }
}
