<?php

class bdCache_XenForo_DataWriter_DiscussionMessage_Post extends XFCP_bdCache_XenForo_DataWriter_DiscussionMessage_Post
{
    protected function _postSaveAfterTransaction()
    {
        if ($this->isInsert() AND bdCache_Option::get('cacheThreadLastPage')) {
            // because the last page is cached, we have to purge it
            $thread = $this->getDiscussionData();
            $postsPerPage = XenForo_Application::get('options')->messagesPerPage;
            $page = ceil(($thread['reply_count'] + 2) / $postsPerPage);
            $link = XenForo_Link::buildPublicLink('full:threads', $thread, array('page' => $page));

            bdCache_Core::getInstance()->purgeCache($link);
        }

        parent::_postSaveAfterTransaction();
    }

}
