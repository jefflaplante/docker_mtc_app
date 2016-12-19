<?php

class bdCache_XenForo_ControllerPublic_Thread extends XFCP_bdCache_XenForo_ControllerPublic_Thread
{
    public function actionIndex()
    {
        $response = parent::actionIndex();

        if ($response instanceof XenForo_ControllerResponse_View) {
            if ($this->_input->inRequest('amp')) {
                /** @var bdCache_ControllerHelper_FastSinglePage $fspHelper */
                $fspHelper = $this->getHelper('bdCache_ControllerHelper_FastSinglePage');
                $fspHelper->doAmp($response, 'bdcache_amp_thread_view');
            }

            if ($this->_bdCache_isSafeToCache($response->params)) {
                /** @var bdCache_ControllerHelper_Cache $cacheHelper */
                $cacheHelper = $this->getHelper('bdCache_ControllerHelper_Cache');
                $cacheHelper->markResponseAsCacheable($response, false, array(
                    'XenForo_ControllerPublic_Thread:actionIndex' => true,
                    'thread_id' => $response->params['thread']['thread_id'],
                ));
            }
        }

        return $response;
    }

    protected function _bdCache_isSafeToCache(array $params)
    {
        if (empty($params['thread']['thread_id'])) {
            // no thread id, do not cache
            return false;
        }

        if (bdCache_Option::get('cacheThreadLastPage')) {
            // cache all pages
            return true;
        } else {
            if (!empty($params['postsRemaining'])) {
                // cache old pages of a thread only
                return true;
            }
        }

        return false;
    }

}
