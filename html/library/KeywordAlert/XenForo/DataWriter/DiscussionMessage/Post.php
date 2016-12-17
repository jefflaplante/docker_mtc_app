<?php

class KeywordAlert_XenForo_DataWriter_DiscussionMessage_Post extends XFCP_KeywordAlert_XenForo_DataWriter_DiscussionMessage_Post
{
    protected function _postSaveAfterTransaction()
    {
        if ($this->isInsert()) {
            // only works on insert

            $data = array(
                'user_id' => $this->get('user_id'),
                'username' => $this->get('username'),
                'post_id' => $this->get('post_id'),
                'post_thread_id' => $this->get('thread_id'),
            );

            $data['content_type'] = 'post';
            $data['content_id'] = $data['post_id'];
            $data['post'] = $this->getMergedData();
            $link = XenForo_Link::buildPublicLink('canonical:posts', $data['post']);

            $thread = $this->getDiscussionData();
            $threadTitle = '';
            if (!empty($thread)) {
                $data['thread'] = $thread;
                $threadTitle = $thread['title'];

                if (empty($data['thread']['first_post_id'])
                    || $data['thread']['first_post_id'] == $data['post']['post_id']
                ) {
                    $link = XenForo_Link::buildPublicLink('canonical:threads', $data['thread']);
                }
            }

            if (!empty($thread)) {
                $forum = $this->_getForumInfo();
                if (!empty($forum)) {
                    $data['forum_id'] = $forum['node_id'];
                    $data['forum'] = $forum;
                }
            }

            KeywordAlert_Engine::processFromDw(
                $this->get('message'),
                $threadTitle,
                $link,
                $data,
                $this
            );
        }

        parent::_postSaveAfterTransaction();
    }
}