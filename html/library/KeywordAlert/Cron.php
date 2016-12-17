<?php

class KeywordAlert_Cron
{
    public static function sendEmails(array $cronEntry)
    {
        /* @var $queueModel KeywordAlert_Model_Queue */
        $queueModel = XenForo_Model::create('KeywordAlert_Model_Queue');

        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');

        $secondsGap = 3600; // defaults to process emails for 1 hours each time...
        if (!empty($cronEntry['runRules']) AND !empty($cronEntry['runRules']['minutes'])) {
            $minMinutes = 60;
            for ($i = 1; $i < count($cronEntry['runRules']['minutes']); $i++) {
                $minutes = $cronEntry['runRules']['minutes'][$i] - $cronEntry['runRules']['minutes'][$i - 1];
                if ($minutes < $minMinutes) {
                    $minMinutes = $minutes;
                }
            }
            $secondsGap = $minMinutes * 60;
        }

        $queueItems = $queueModel->getAllQueue(array('schedule_date_compare' => array('<', XenForo_Application::$time + $secondsGap)));
        $queueModel->runQueue($queueItems);
    }
}