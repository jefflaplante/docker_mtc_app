<?php

class KeywordAlert_Deferred_Queue extends XenForo_Deferred_Abstract
{
    public function execute(array $deferred, array $data, $targetRunTime, &$status)
    {
        /* @var $queueModel KeywordAlert_Model_Queue */
        $queueModel = XenForo_Model::create('KeywordAlert_Model_Queue');

        $queueItems = $queueModel->getAllQueue(array('schedule_date_compare' => array('<=', XenForo_Application::$time)));
        $queueModel->runQueue($queueItems);

        return false;
    }
}