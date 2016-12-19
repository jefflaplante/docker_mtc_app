<?php

class bdCache_Core
{
    const TEMPLATE_PARAM_IS_CACHEABLE = 'bdCache_isCacheable';
    const TEMPLATE_PARAM_TTL_SECONDS = 'bdCache_ttlSeconds';
    const TEMPLATE_PARAM_EXTRA_DATA = 'bdCache_extraData';
    const EXTRA_DATA_RESPONSE_HEADERS = 'responseHeaders';
    const EXTRA_DATA_PAGE_TIME = 'pageTime';
    const EXTRA_DATA_QUERY_COUNT = 'queryCount';
    const EXTRA_DATA_QUERY_TOTAL_RUN_TIME = 'queryTime';

    protected $_shouldWork = null;
    protected $_isCaching = false;
    protected $_ttl = false;
    protected $_extraData = array();

    public function shouldWork(XenForo_FrontController &$fc = null, XenForo_RouteMatch &$routeMatch = null)
    {
        if ($this->_shouldWork === null) {
            /** @noinspection PhpUndefinedFieldInspection */
            if (isset($fc->getRequest()->amp)) {
                XenForo_CodeEvent::addListener('load_class',
                    array('bdCache_Listener', 'load_class_XenForo_Session'), 'XenForo_Session');
            }

            if (XenForo_Application::debugMode() AND !empty($_REQUEST['_bdCache_noCache'])) {
                $this->_shouldWork = false;
            } elseif (!bdCache_Option::get('cachePages')) {
                $this->_shouldWork = false;
            } elseif ($fc == null OR $routeMatch == null) {
                $this->_shouldWork = false;
            } elseif (!($fc->getDependencies() instanceof XenForo_Dependencies_Public)) {
                $this->_shouldWork = false;
            }

            if ($this->_shouldWork === null) {
                if (!$this->isSupportedRoute($routeMatch->getControllerName(), $routeMatch->getAction())) {
                    $this->_shouldWork = false;
                }
            }

            if ($this->_shouldWork === null) {
                if (!XenForo_Application::isRegistered('session')) {
                    // we start the public session a bit earlier than usual here
                    // (normally, it is setup on XenForo_Controller::preDispatch)
                    XenForo_Session::startPublicSession($fc->getRequest());
                }

                $visitor = XenForo_Visitor::getInstance();

                if ($visitor->get('user_id') > 0) {
                    $this->_shouldWork = false;
                }
            }

            if ($this->_shouldWork === null) {
                $this->_shouldWork = true;
            }
        }

        return $this->_shouldWork;
    }

    public function isSupportedRoute($controllerName, $controllerAction)
    {
        return $this->_getCacheModel()->isSupportedRoute($controllerName, $controllerAction);
    }

    public function startCaching($ttl, array $extraData)
    {
        $this->_isCaching = true;
        $this->_ttl = $ttl;
        $this->_extraData = $extraData;
    }

    public function isCaching()
    {
        return $this->_isCaching;
    }

    public function finishCaching(XenForo_FrontController &$fc, &$output)
    {
        $extraData = array(self::EXTRA_DATA_RESPONSE_HEADERS => $fc->getResponse()->getHeaders());

        if (bdCache_Option::get('log')) {
            if (XenForo_Application::isRegistered('page_start_time')) {
                $extraData[self::EXTRA_DATA_PAGE_TIME] = microtime(true) - XenForo_Application::get('page_start_time');
            }

            if (XenForo_Application::isRegistered('db')) {
                $dbDebug = XenForo_Debug::getDatabaseDebugInfo(XenForo_Application::getDb());
                $extraData[self::EXTRA_DATA_QUERY_COUNT] = $dbDebug['queryCount'];
                $extraData[self::EXTRA_DATA_QUERY_TOTAL_RUN_TIME] = $dbDebug['totalQueryRunTime'];
            }
        }

        $extraData = XenForo_Application::mapMerge($extraData, $this->_extraData);

        $_output = $output;
        $this->_getCacheModel()->prepareBeforeCaching($_output, $extraData);
        $this->save($_output, $extraData, $this->_ttl);
    }

    public function save(&$output, array &$extraData, $ttl, $uriSignature = false, $permissionCombinationId = false)
    {
        if (XenForo_Application::debugMode() AND !empty($_REQUEST['_bdCache_noSave'])) {
            return false;
        }

        if ($uriSignature === false) {
            $uriSignature = $this->_getRequestUriSignature();
        }
        if ($permissionCombinationId === false) {
            $visitor = XenForo_Visitor::getInstance();
            $permissionCombinationId = $visitor['permission_combination_id'];
        }

        $this->_cleanUpOutput($output);

        return $this->_getCacheModel()->save($output, $extraData, $ttl, $uriSignature, $permissionCombinationId);
    }

    public function getCached($uriSignature = false, $permissionCombinationId = false)
    {
        if ($uriSignature === false) {
            $uriSignature = $this->_getRequestUriSignature();
        }
        if ($permissionCombinationId === false) {
            $visitor = XenForo_Visitor::getInstance();
            $permissionCombinationId = $visitor['permission_combination_id'];
        }

        return $this->_getCacheModel()->load($uriSignature, $permissionCombinationId);
    }

    public function output(XenForo_FrontController &$fc, array &$cached)
    {
        if ($fc->showDebugOutput()) {
            // admin requested debug information...
            echo '<h1>CACHE HIT FOR THIS PAGE BUT DEBUG INFORMATION BELOW IS NOT CACHED</h1>';
            echo '<p>Some of these information is also available as HTTP headers:</p>';
            echo '<ul>';
            echo '<li>X-Debug-Page-Time</li>';
            echo '<li>X-Debug-Memory</li>';
            echo '<li>X-Debug-Peak</li>';
            echo '<li>X-Debug-Query-Count</li>';
            echo '<li>X-Debug-Total-Query-Runtime</li>';
            echo '</ul>';
            die($fc->renderDebugOutput(''));
        }

        $this->_getCacheModel()->prepareCached($cached);

        // from XenForo_Controller::updateSession...
        if (XenForo_Application::isRegistered('session')) {
            XenForo_Application::getSession()->save();
        }

        // mimics the original context and variables
        $content = $cached[bdCache_Model_Cache::DATA_OUTPUT];
        $response = $fc->getResponse();

        if (!empty($cached[bdCache_Model_Cache::DATA_EXTRA_DATA][self::EXTRA_DATA_RESPONSE_HEADERS])) {
            foreach ($cached[bdCache_Model_Cache::DATA_EXTRA_DATA][self::EXTRA_DATA_RESPONSE_HEADERS]
                     as $cachedHeader) {
                $response->setHeader($cachedHeader['name'], $cachedHeader['value'], true);
            }
        }

        /**
         * @see XenForo_FrontController::run
         */
        $headers = $response->getHeaders();
        $isText = false;
        foreach ($headers AS $header) {
            if ($header['name'] == 'Content-Type') {
                if (strpos($header['value'], 'text/') === 0) {
                    $isText = true;
                }
                break;
            }
        }
        if ($isText && is_string($content) && $content) {
            $extraHeaders = XenForo_Application::gzipContentIfSupported($content);
            foreach ($extraHeaders AS $extraHeader) {
                $response->setHeader($extraHeader[0], $extraHeader[1], $extraHeader[2]);
            }
        }

        if (is_string($content) && $content && !ob_get_level() && XenForo_Application::get('config')->enableContentLength) {
            if ($response->getHttpResponseCode() >= 400
                && strpos($fc->getRequest()->getServer('HTTP_USER_AGENT', ''), 'IEMobile') !== false
            ) {
                // Windows mobile bug - 400+ errors cause the standard browser error
                // to be output if a content length is sent. ...Err, what?
            } else {
                $response->setHeader('Content-Length', strlen($content), true);
            }
        }

        if (XenForo_Application::debugMode() || bdCache_Option::get('log')) {
            $pageTime = 0;
            $dbDebug = false;
            $queryCount = 0;
            $queryTotalRunTime = 0;

            if (XenForo_Application::isRegistered('page_start_time')) {
                $pageTime = microtime(true) - XenForo_Application::get('page_start_time');
            }

            if (XenForo_Application::isRegistered('db')) {
                $dbDebug = XenForo_Debug::getDatabaseDebugInfo(XenForo_Application::getDb());
                $queryCount = $dbDebug['queryCount'];
                $queryTotalRunTime = $dbDebug['totalQueryRunTime'];
            }

            // debug information
            if (XenForo_Application::debugMode()) {
                if ($pageTime) {
                    $response->setHeader('X-Debug-Page-Time', number_format($pageTime, 4));
                }

                $memoryUsage = memory_get_usage();
                $memoryUsagePeak = memory_get_peak_usage();
                $response->setHeader('X-Debug-Memory', number_format($memoryUsage / 1024 / 1024, 4) . ' MB');
                $response->setHeader('X-Debug-Peak', number_format($memoryUsagePeak / 1024 / 1024, 4) . ' MB');

                if ($dbDebug) {
                    $response->setHeader('X-Debug-Query-Count', $queryCount);
                    $response->setHeader('X-Debug-Total-Query-Runtime', number_format($queryTotalRunTime, 4));
                }
            }

            if (bdCache_Option::get('log')
                && !empty($cached[bdCache_Model_Cache::DATA_EXTRA_DATA][self::EXTRA_DATA_PAGE_TIME])
            ) {
                XenForo_Helper_File::log('bdcache', call_user_func_array('sprintf', array(
                    'saved %f pt, %d qc, %f qtrt',
                    $cached[bdCache_Model_Cache::DATA_EXTRA_DATA][self::EXTRA_DATA_PAGE_TIME] - $pageTime,
                    $cached[bdCache_Model_Cache::DATA_EXTRA_DATA][self::EXTRA_DATA_QUERY_COUNT] - $queryCount,
                    $cached[bdCache_Model_Cache::DATA_EXTRA_DATA][self::EXTRA_DATA_QUERY_TOTAL_RUN_TIME] - $queryTotalRunTime,
                )));
            }
        }

        $response->sendHeaders();

        die($content);
    }

    public function purgeCache($fullUri)
    {
        $debugModes = array(
            true,
            false
        );

        $styles = XenForo_Application::isRegistered('styles') ? XenForo_Application::get('styles') : false;
        if ($styles === false) {
            /** @var XenForo_Model_Style $styleModel */
            $styleModel = $this->_getCacheModel()->getModelFromCache('XenForo_Model_Style');
            $styles = $styleModel->getAllStyles();
        }
        $styleIds = array_keys($styles);

        $languages = XenForo_Application::isRegistered('languages') ? XenForo_Application::get('languages') : false;
        if ($languages === false) {
            /** @var XenForo_Model_Language $languageModel */
            $languageModel = $this->_getCacheModel()->getModelFromCache('XenForo_Model_Language');
            $languages = $languageModel->getAllLanguagesForCache();
        }
        $languageIds = array_keys($languages);

        $isBrowsingWithMobiles = array(
            true,
            false
        );

        foreach ($debugModes as $debugMode) {
            foreach ($styleIds as $styleId) {
                foreach ($languageIds as $languageId) {
                    foreach ($isBrowsingWithMobiles as $isBrowsingWithMobile) {
                        $uriSignature = $this->_getRequestUriSignature($fullUri, array(
                            'debugMode' => $debugMode,
                            'styleId' => $styleId,
                            'languageId' => $languageId,
                            'isBrowsingWithMobile' => $isBrowsingWithMobile,
                        ));

                        $this->_getCacheModel()->remove($uriSignature,
                            XenForo_Model_User::$guestPermissionCombinationId);
                    }
                }
            }
        }
    }

    protected function _getRequestUriSignature($fullUri = false, array $uriInfo = array())
    {
        if ($fullUri === false) {
            $requestPaths = XenForo_Application::get('requestPaths');
            $fullUri = $requestPaths['fullUri'];
        }

        $uriInfo = parse_url($fullUri);
        if (isset($uriInfo['query'])) {
            $uriParams = array();
            parse_str($uriInfo['query'], $uriParams);
            ksort($uriParams);
            $uriInfo['query'] = http_build_query($uriParams);
        }

        // add additional uri info to distinguish requests
        $visitor = XenForo_Visitor::getInstance();
        if (!isset($uriInfo['debugMode'])) {
            $uriInfo['debugMode'] = XenForo_Application::debugMode();
        }
        if (!isset($uriInfo['styleId'])) {
            $uriInfo['styleId'] = $visitor->get('style_id');
        }
        if (!isset($uriInfo['languageId'])) {
            $uriInfo['languageId'] = $visitor->get('language_id');
        }
        if (!isset($uriInfo['isBrowsingWithMobile'])) {
            $uriInfo['isBrowsingWithMobile'] = $visitor->isBrowsingWith('mobile');
        }

        // set default value for style id and language id
        if (empty($uriInfo['styleId'])) {
            $uriInfo['styleId'] = XenForo_Application::getOptions()->get('defaultStyleId');
        }
        if (empty($uriInfo['languageId'])) {
            $uriInfo['languageId'] = XenForo_Application::getOptions()->get('defaultLanguageId');
        }

        // normalize uri info
        ksort($uriInfo);
        $data = array();
        foreach ($uriInfo as $key => $value) {
            $data[strval($key)] = strval($value);
        }

        return md5(serialize($data));
    }

    protected function _cleanUpOutput(&$output)
    {
        $output = preg_replace('#(\s)\s+#', '$1', $output);
    }

    /**
     * @return bdCache_Model_Cache
     */
    protected function _getCacheModel()
    {
        static $_cacheModel = false;
        if ($_cacheModel === false) {
            $_cacheModel = XenForo_Model::create('bdCache_Model_Cache');
        }
        return $_cacheModel;
    }

    protected function __construct()
    {
        // singleton implementation
    }

    protected function __clone()
    {
        // singleton implementation
    }

    /**
     * @return bdCache_Core
     */
    public static function getInstance()
    {
        static $_instance = null;

        if ($_instance === null) {
            $class = XenForo_Application::resolveDynamicClass(__CLASS__);
            $_instance = new $class();
        }

        return $_instance;
    }

    public static function normalizeControllerNameAndAction(&$controllerName, &$action)
    {
        $controllerName = strtolower(trim($controllerName));
        $action = preg_replace('/[^a-z]/', '', strtolower(trim($action)));
        if (empty($action)) {
            $action = 'index';
        }
    }

}
