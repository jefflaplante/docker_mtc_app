<?php

/**
 * Route prefix handler for force-ignored users in the admin control panel.
 */
class ThemeHouse_ForceIgnore_Route_PrefixAdmin_ForceIgnore implements XenForo_Route_Interface
{

    /**
     * Match a specific route for an already matched prefix.
     *
     * @see XenForo_Route_Interface::match()
     */
    public function match($routePath, Zend_Controller_Request_Http $request, XenForo_Router $router)
    {
        $action = $routePath;

        $parts = explode('/', $routePath, 2);
        if (count($parts) == 2) {
            switch ($parts[0]) {
                case 'users':
                    $action = 'users' . $router->resolveActionWithIntegerParam($parts[1], $request, 'force_ignore_id');
                    break;
            }
        }

        return $router->getRouteMatch('ThemeHouse_ForceIgnore_ControllerAdmin_ForceIgnore', $action, 'users');
    } /* END match */

    /**
     * Method to build a link to the specified page/action with the provided
     * data and params.
     *
     * @see XenForo_Route_BuilderInterface
     */
    public function buildLink($originalPrefix, $outputPrefix, $action, $extension, $data, array &$extraParams)
    {
        $parts = explode('/', $action, 2);
        if (count($parts) == 1) {
            $parts[1] = '';
        }

        switch ($parts[0]) {
            case 'users':
                $output = XenForo_Link::buildBasicLinkWithIntegerParam($parts[0], $parts[1], $extension, $data,
                    'force_ignore_id');
                break;

            default:
                return false;
        }

        return $outputPrefix . '/' . $output;
    } /* END buildLink */
}