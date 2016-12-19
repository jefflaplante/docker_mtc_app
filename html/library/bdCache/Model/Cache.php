<?php

class bdCache_Model_Cache extends XenForo_Model
{
    const KEY_PREFIX = 'bdc_';

    const DATA_CACHE_KEY = 'cacheKey';
    const DATA_OUTPUT = 'output';
    const DATA_EXTRA_DATA = 'extraData';
    const DATA_CACHE_DATE = 'cacheDate';
    const DATA_EXPIRE_DATE = 'expireDate';
    const DATA_URI_SIGNATURE = 'uriSignature';
    const DATA_PERMISSION_COMBINATION_ID = 'permissionCombinationId';
    const DATA_INTERNAL_SIGNATURE = 'internalSignature';

    const PLACE_HOLDER_SESSION_CSRF = '{bdCache_sessionCsrf}';

    public function isSupportedRoute($controllerName, $action)
    {
        $this->_normalizeControllerNameAndAction($controllerName, $action);

        static $supported = array(
            'xenforo_controllerpublic_forum' => array('index' => true),
            'xenforo_controllerpublic_index' => array('index' => true),
            'xenforo_controllerpublic_member' => array('index' => true),
            'xenforo_controllerpublic_thread' => array('index' => true),

            'xenresource_controllerpublic_author' => array('index' => true),
            'xenresource_controllerpublic_resource' => array(
                'category' => true,
                'history' => true,
                'reviews' => true,
                'updates' => true,
                'update' => true,
                'index' => true,
            ),

            'ewrporta_controllerpublic_articles' => array('index' => true),
            'ewrporta_controllerpublic_portal' => array('index' => true),
        );

        return (!empty($supported[$controllerName][$action]));
    }

    public function prepareBeforeCaching(
        &$output,
        /** @noinspection PhpUnusedParameterInspection */
        array &$extraData
    ) {
        $output = str_replace('</head>',
            sprintf('<meta name="bdcache" content="%s" /></head>', XenForo_Application::$time), $output);

        if (XenForo_Application::$versionId >= 1030000) {
            $session = XenForo_Application::getSession();
            $output = str_replace($session->get('sessionCsrf'), self::PLACE_HOLDER_SESSION_CSRF, $output);
        }
    }

    public function prepareCached(array &$cached)
    {
        $this->_prepareCached_serverTimeInto($cached[self::DATA_OUTPUT]);

        if (!empty($cached[self::DATA_EXTRA_DATA]['XenForo_ControllerPublic_Thread:actionIndex'])) {
            if (!empty($cached[self::DATA_EXTRA_DATA]['thread_id'])) {
                $this->_prepareCached_logThreadView($cached[self::DATA_EXTRA_DATA]['thread_id']);
            }
        }

        if (XenForo_Application::$versionId >= 1030000
            && XenForo_Application::isRegistered('session')
        ) {
            $session = XenForo_Application::getSession();
            $cached[self::DATA_OUTPUT] = str_replace(self::PLACE_HOLDER_SESSION_CSRF,
                $session->get('sessionCsrf'), $cached[self::DATA_OUTPUT]);
        }
    }

    public function save(&$output, array &$extraData, $ttl, $uriSignature, $permissionCombinationId)
    {
        $key = $this->_getKey($uriSignature, $permissionCombinationId);
        $data = array(
            self::DATA_CACHE_KEY => $key,
            self::DATA_OUTPUT => &$output,
            self::DATA_EXTRA_DATA => &$extraData,
            self::DATA_CACHE_DATE => XenForo_Application::$time,
            self::DATA_EXPIRE_DATE => time() + $ttl,
            self::DATA_URI_SIGNATURE => $uriSignature,
            self::DATA_PERMISSION_COMBINATION_ID => $permissionCombinationId,
            self::DATA_INTERNAL_SIGNATURE => $this->getInternalSignature(),
        );

        return $this->helperSave($key, $data, $ttl);
    }

    public function load($uriSignature, $permissionCombinationId)
    {
        $key = $this->_getKey($uriSignature, $permissionCombinationId);
        $data = $this->helperLoad($key);

        if (empty($data)) {
            // no data found
            return false;
        }

        if (empty($data[self::DATA_URI_SIGNATURE])
            || $data[self::DATA_URI_SIGNATURE] !== $uriSignature
        ) {
            // uri signature not found OR not matched
            return false;
        }

        if (empty($data[self::DATA_PERMISSION_COMBINATION_ID])
            || $data[self::DATA_PERMISSION_COMBINATION_ID] !== $permissionCombinationId
        ) {
            // permission combination id not found OR not matched
            return false;
        }

        if (!XenForo_Application::isRegistered('_bdCloudServerHelper_readonly')) {
            if (empty($data[self::DATA_INTERNAL_SIGNATURE])
                || $data[self::DATA_INTERNAL_SIGNATURE] !== $this->getInternalSignature()
            ) {
                // internal signature not matched
                return false;
            }

            if (empty($data[self::DATA_EXPIRE_DATE])
                || $data[self::DATA_EXPIRE_DATE] < XenForo_Application::$time
            ) {
                // no expire date OR now has passed expire date
                return false;
            }
        }

        return $data;
    }

    public function remove($uriSignature, $permissionCombinationId)
    {
        $key = $this->_getKey($uriSignature, $permissionCombinationId);
        return $this->helperRemove($key);
    }

    public function getInternalSignature()
    {
        $signature = array(
            'readOnly' => !!XenForo_Application::isRegistered('_bdCloudServerHelper_readonly'),
        );

        return md5(serialize($signature));
    }

    public function helperSave($key, $data, $ttl)
    {
        $cache = null;
        if (!XenForo_Application::getConfig()->get(bdCache_Option::CONFIG_FORCE_USE_FILE_AS_CACHE)) {
            $cache = XenForo_Application::getCache();
        }

        if (!empty($cache)) {
            if (!$cache->getOption('automatic_serialization')) {
                $data = serialize($data);
            }

            return $cache->save($data, self::KEY_PREFIX . $key, array(), $ttl);
        } else {
            return $this->_internalData_save($key, $data);
        }
    }

    public function helperLoad($key)
    {
        $cache = null;
        if (!XenForo_Application::getConfig()->get(bdCache_Option::CONFIG_FORCE_USE_FILE_AS_CACHE)) {
            $cache = XenForo_Application::getCache();
        }

        if (!empty($cache)) {
            $data = $cache->load(self::KEY_PREFIX . $key, false, true);

            if (!empty($data)) {
                $data = unserialize($data);
            }
        } else {
            $data = $this->_internalData_load($key);
        }

        return $data;
    }

    public function helperRemove($key)
    {
        $cache = null;
        if (!XenForo_Application::getConfig()->get(bdCache_Option::CONFIG_FORCE_USE_FILE_AS_CACHE)) {
            $cache = XenForo_Application::getCache();
        }

        if (!empty($cache)) {
            $removed = $cache->remove(self::KEY_PREFIX . $key);
        } else {
            $removed = $this->_internalData_remove($key);
        }

        return !empty($removed);
    }

    protected function _prepareCached_serverTimeInto(&$content)
    {
        if (strpos($content, 'serverTimeInfo:') === false) {
            return;
        }

        $serverTimeInfo = XenForo_Locale::getDayStartTimestamps();

        $script = call_user_func_array('sprintf', array(
            "\n<" . 'script>XenForo.serverTimeInfo.now = %d;'
            . 'XenForo.serverTimeInfo.today = %d;'
            . 'XenForo.serverTimeInfo.todayDow = %d;</script>',
            $serverTimeInfo['now'],
            $serverTimeInfo['today'],
            $serverTimeInfo['todayDow'],
        ));

        $content = str_replace('</body>', $script . '</body>', $content);
    }

    protected function _prepareCached_logThreadView($threadId)
    {
        if (!!bdCache_Option::get('logThreadView')) {
            /** @var XenForo_Model_Thread $threadModel */
            $threadModel = $this->getModelFromCache('XenForo_Model_Thread');
            try {
                $threadModel->logThreadView($threadId);
            } catch (Exception $e) {
                XenForo_Helper_File::log(__CLASS__, $e->getMessage());
            }
        }
    }

    protected function _getKey($uri, $permissionCombinationId)
    {
        return md5(sprintf('%s/%s/%s', $uri, $permissionCombinationId,
            XenForo_Application::getConfig()->get('globalSalt')));
    }

    protected function _internalData_save($key, $data)
    {
        $filePath = $this->_internalData_getFilePath($key);
        $dirPath = dirname($filePath);
        $dataSerialized = serialize($data);

        XenForo_Helper_File::createDirectory($dirPath);
        $written = @file_put_contents($filePath, $dataSerialized);
        if ($written !== false) {
            XenForo_Helper_File::makeWritableByFtpUser($filePath);
        } elseif (XenForo_Application::debugMode()) {
            XenForo_Error::logError(sprintf('file_put_contents(%s, %d) failed', $filePath, strlen($dataSerialized)));
        }

        return $written;
    }

    protected function _internalData_load($key)
    {
        $filePath = $this->_internalData_getFilePath($key);

        if (bdCache_File::existsAndNotEmpty($filePath)) {
            $data = file_get_contents($filePath);
            $data = @unserialize($data);
        } else {
            $data = false;
        }

        return $data;
    }

    protected function _internalData_remove($key)
    {
        $filePath = $this->_internalData_getFilePath($key);

        return @unlink($filePath);
    }

    protected function _internalData_getFilePath($key)
    {
        $dir = XenForo_Helper_File::getInternalDataPath();
        if (!!XenForo_Application::getConfig()->get(bdCache_Option::CONFIG_USE_SYSTEM_TMP_DIRECTORY)) {
            $dir = sys_get_temp_dir();
        }

        return sprintf('%s/bdCache/%s/%s', $dir, substr($key, 0, 1), $key);
    }

    protected function _normalizeControllerNameAndAction(&$controllerName, &$action)
    {
        // this method was kept for compatibility
        bdCache_Core::normalizeControllerNameAndAction($controllerName, $action);
    }

}
