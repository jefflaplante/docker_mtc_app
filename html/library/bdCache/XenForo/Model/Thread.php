<?php

class bdCache_XenForo_Model_Thread extends XFCP_bdCache_XenForo_Model_Thread
{
    public function countThreads(array $conditions)
    {
        /** @var bdCache_Model_Cache $cacheModel */
        $cacheModel = null;
        $serialized = '';
        $key = '';

        $ttl = bdCache_Option::get('modelThreadCountThreads');
        if ($ttl > 0) {
            $cacheModel = XenForo_Model::create('bdCache_Model_Cache');
            $serialized = serialize($conditions);
            $key = md5(serialize($conditions));
            $data = $cacheModel->helperLoad($key);
            if (!empty($data)
                && $data['serialized'] === $serialized
                && $data['expireDate'] > XenForo_Application::$time
            ) {
                return $data['result'];
            }
        }

        $result = parent::countThreads($conditions);

        if ($cacheModel !== null
            && $key !== ''
            && $result > XenForo_Application::getOptions()->get('discussionsPerPage') * 10
        ) {
            $cacheModel->helperSave($key, array(
                'serialized' => $serialized,
                'expireDate' => time() + $ttl,
                'result' => $result,
            ), $ttl);
        }

        return $result;
    }

}