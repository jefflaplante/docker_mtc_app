<?php

class bdCache_Listener
{
    const UPDATER_URL = 'https://xfrocks.com/api/index.php?updater';

    public static function load_class($class, array &$extend)
    {
        static $classes = array(
            'XenForo_ControllerPublic_Forum',
            'XenForo_ControllerPublic_Index',
            'XenForo_ControllerPublic_Login',
            'XenForo_ControllerPublic_Member',
            'XenForo_ControllerPublic_Misc',
            'XenForo_ControllerPublic_Thread',
            'XenForo_DataWriter_DiscussionMessage_Post',
            'XenForo_Model_Permission',
            'XenForo_Model_User',

            'XenResource_ControllerPublic_Author',
            'XenResource_ControllerPublic_Resource',

            'EWRporta_ControllerPublic_Articles',
            'EWRporta_ControllerPublic_Portal',
        );

        if (in_array($class, $classes)) {
            $extend[] = 'bdCache_' . $class;
        }
    }

    /** @noinspection PhpInconsistentReturnPointsInspection
     * @param $class
     * @param array $extend
     * @return bool
     */
    public static function load_class_XenForo_Model_Thread($class, array &$extend)
    {
        if ($class === 'XenForo_Model_Thread') {
            $extend[] = 'bdCache_XenForo_Model_Thread';
            return false;
        }
    }

    public static function load_class_XenForo_Session($class, array &$extend)
    {
        // the event listener is registered dynamically via bdCache_Core::shouldWork
        if ($class === 'XenForo_Session') {
            $extend[] = 'bdCache_XenForo_Session';
        }
    }

    public static function template_create(&$templateName, array &$params, XenForo_Template_Abstract $template)
    {
        if ($template instanceof XenForo_Template_Public) {
            if ($templateName === 'PAGE_CONTAINER') {
                $template->preloadTemplate('bdcache_moderator_bar');
            }
        }
    }

    public static function template_hook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
    {
        switch ($hookName) {
            case 'moderator_bar':
                $params = $template->getParams();
                if (isset($params['controllerName']) AND isset($params['controllerAction'])) {
                    $controllerName = $params['controllerName'];
                    $controllerAction = $params['controllerAction'];

                    if (bdCache_Core::getInstance()->isSupportedRoute($controllerName, $controllerAction)) {
                        $params['bdCache_hasOptionAdminPermission'] = XenForo_Visitor::getInstance()->hasAdminPermission('option');
                        $params['bdCache_ttl'] = bdCache_Option::getCustomizedTtlSeconds($controllerName, $controllerAction);
                        $params['bdCache_comboEncrypted'] = bdCache_Crypt::encrypt($controllerName, $controllerAction);

                        $contents .= $template->create('bdcache_moderator_bar', $params);
                    }
                }
                break;
        }
    }

    public static function init_dependencies(XenForo_Dependencies_Abstract $dependencies, array $data)
    {
        $requestPaths = XenForo_Application::get('requestPaths');
        $fullUri = $requestPaths['fullUri'];
        $basename = basename($fullUri);

        if (strpos($basename, 'css.php?') === 0
            && isset($_SERVER['REQUEST_METHOD'])
            && strtolower($_SERVER['REQUEST_METHOD']) === 'get'
            && bdCache_Option::get('cssToFile')
        ) {
            $parameters = substr($basename, strpos($basename, '?') + 1);

            header('Vary: Origin');
            header('Vary: X-Requested-With');
            if (empty($_SERVER['HTTP_ORIGIN'])
                && empty($_SERVER['HTTP_X_REQUESTED_WITH'])
            ) {
                // do not ever redirect cross origin requests...
                bdCache_Css::redirect($parameters);
            }

            if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {
                // disable XenForo_CssOutput::handleIfModifiedSinceHeader
                unset($_SERVER['HTTP_IF_MODIFIED_SINCE']);
            }

            register_shutdown_function(array(__CLASS__, 'css_shutdown'), $parameters);

            // disable gzip
            $_SERVER['HTTP_ACCEPT_ENCODING'] = '';

            ob_start();
        }

        if ($dependencies instanceof XenForo_Dependencies_Public) {
            XenForo_Template_Helper_Core::$helperCallbacks['bdcache_getoption'] = array(
                'bdCache_Option',
                'get'
            );
        }

        bdCache_ShippableHelper_Updater::onInitDependencies($dependencies, self::UPDATER_URL);
    }

    public static function front_controller_pre_dispatch(XenForo_FrontController $fc, XenForo_RouteMatch &$routeMatch)
    {
        $core = bdCache_Core::getInstance();

        if ($core->shouldWork($fc, $routeMatch)) {
            $cached = $core->getCached();

            if ($cached !== false) {
                $core->output($fc, $cached);
            }
        }
    }

    public static function front_controller_pre_view(XenForo_FrontController $fc, XenForo_ControllerResponse_Abstract &$controllerResponse, XenForo_ViewRenderer_Abstract &$viewRenderer, array &$containerParams)
    {
        $core = bdCache_Core::getInstance();

        if ($core->shouldWork() AND $controllerResponse instanceof XenForo_ControllerResponse_View AND $viewRenderer instanceof XenForo_ViewRenderer_HtmlPublic) {
            $params = &$controllerResponse->params;
            if (!empty($params[bdCache_Core::TEMPLATE_PARAM_IS_CACHEABLE])) {
                $ttl = isset($params[bdCache_Core::TEMPLATE_PARAM_TTL_SECONDS]) ? $params[bdCache_Core::TEMPLATE_PARAM_TTL_SECONDS] : false;
                $extraData = isset($params[bdCache_Core::TEMPLATE_PARAM_EXTRA_DATA]) ? $params[bdCache_Core::TEMPLATE_PARAM_EXTRA_DATA] : array();

                $core->startCaching($ttl, $extraData);
            }
        }
    }

    public static function front_controller_post_view(XenForo_FrontController $fc, &$output)
    {
        if (is_string($output)) {
            $core = bdCache_Core::getInstance();

            $okie = true;
            $okie = ($okie && bdCache_Css::replaceCssUrls($output));
            $okie = ($okie && bdCache_Js::deferJs($output));

            if ($core->shouldWork()) {
                $fc->getResponse()->clearHeader('Last-Modified');

                if ($core->isCaching() AND $okie) {
                    $core->finishCaching($fc, $output);
                }
            }
        }
    }

    public static function file_health_check(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes += bdCache_FileSums::getHashes();
    }

    public static function css_shutdown($parameters)
    {
        $contents = ob_get_flush();
        bdCache_Css::save($parameters, $contents);
    }

}
