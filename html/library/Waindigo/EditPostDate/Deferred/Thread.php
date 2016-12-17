<?php

class Waindigo_EditPostDate_Deferred_Thread extends XenForo_Deferred_Abstract
{

    public function execute(array $deferred, array $data, $targetRunTime, &$status)
    {
        $data = array_merge(array(
            'threadIds' => null
        ), $data);

        if (is_array($data['threadIds'])) {
            $threadIds = $data['threadIds'];
        } else {
            $threadIds = array();
        }

        if (!$threadIds) {
            return false;
        }

        $forums = XenForo_Model::create('XenForo_Model_Forum')->getForumsByThreadIds($threadIds);

        foreach ($threadIds AS $key => $threadId) {
            unset($threadIds[$key]);

            /* @var $dw XenForo_DataWriter_Discussion_Thread */
            $dw = XenForo_DataWriter::create('XenForo_DataWriter_Discussion_Thread', XenForo_DataWriter::ERROR_SILENT);
            if ($dw->setExistingData($threadId)) {
                $dw->setOption(XenForo_DataWriter_Discussion::OPTION_UPDATE_CONTAINER, false);

                if (isset($forums[$dw->get('node_id')])) {
                    $dw->setExtraData(XenForo_DataWriter_Discussion_Thread::DATA_FORUM, $forums[$dw->get('node_id')]);
                }

                XenForo_Db::beginTransaction();
                $dw->rebuildDiscussion();
                XenForo_Db::commit();
                $dw->save();
            }
        }

        if (!$threadIds)
        {
            return false;
        }

        $data['threadIds'] = $threadIds;

        $actionPhrase = new XenForo_Phrase('rebuilding');
        $typePhrase = new XenForo_Phrase('threads');
        $status = sprintf('%s... %s', $actionPhrase, $typePhrase);

        return $data;
    } /* END execute */

    public function canCancel()
    {
        return true;
    } /* END canCancel */
}