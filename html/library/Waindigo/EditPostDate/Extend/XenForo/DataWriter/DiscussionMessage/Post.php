<?php

/**
 *
 * @see XenForo_DataWriter_DiscussionMessage_Post
 */
class Waindigo_EditPostDate_Extend_XenForo_DataWriter_DiscussionMessage_Post extends XFCP_Waindigo_EditPostDate_Extend_XenForo_DataWriter_DiscussionMessage_Post
{

    /**
     *
     * @see XenForo_DataWriter_DiscussionMessage::_setPosition()
     */
    protected function _setPosition()
    {
        if (isset($GLOBALS['XenForo_ControllerPublic_Thread']) || isset($GLOBALS['XenForo_ControllerPublic_Post'])) {
            if (isset($GLOBALS['XenForo_ControllerPublic_Thread'])) {
                /* @var $controller XenForo_ControllerPublic_Thread */
                $controller = $GLOBALS['XenForo_ControllerPublic_Thread'];
            } elseif (isset($GLOBALS['XenForo_ControllerPublic_Post'])) {
                /* @var $controller XenForo_ControllerPublic_Post */
                $controller = $GLOBALS['XenForo_ControllerPublic_Post'];
            }

            if (XenForo_Application::get('options')->waindigo_editPostDate_unixTimestamp) {
                $postDate = $controller->getInput()->filterSingle('post_date', XenForo_Input::UINT);
            } else {
                $input = $controller->getInput()->filter(
                    array(
                        'year' => XenForo_Input::UINT,
                        'month' => XenForo_Input::UINT,
                        'day' => XenForo_Input::UINT,
                        'hour' => XenForo_Input::UINT,
                        'min' => XenForo_Input::UINT
                    ));
                $formattedTime = $input['year'] . '-' . $input['month'] . '-' . $input['day'] . ' ' . $input['hour'] .
                     ':' . $input['min'] . ':00';
                if ($input['year'] && $input['month'] && $input['day']) {
                    $postDate = strtotime($formattedTime) - XenForo_Locale::getTimeZoneOffset();
                } else {
                    $postDate = 0;
                }
            }
            $post = $this->getMergedData();
            $thread = $this->getDiscussionDataWriter()->getMergedData();
            $forum = $this->_getForumInfo();
            if ($postDate > 0 && $this->_getPostModel()->canEditPostDate($post, $thread, $forum)) {
                $this->set('post_date', $postDate);
            }
        }

        /* @var $discussionDw XenForo_DataWriter_Discussion */
        $discussionDw = $this->getDiscussionDataWriter();
        if ($this->isInsert()) {
            if ($discussionDw && !$discussionDw->isInsert()) {
                if ($this->get('post_date') < $discussionDw->get('last_post_date')) {
                    $position = $this->_db->fetchOne(
                        '
                            SELECT max(position) FROM xf_post
                            WHERE thread_id = ? AND post_date <= ?
                        ',
                        array(
                            $discussionDw->get('thread_id'),
                            $this->get('post_date')
                        ));
                    $this->set('position', $position + 1);
                    $this->_db->query(
                        '
                            UPDATE xf_post SET position = position + 1
                            WHERE thread_id = ? AND post_date > ?
                        ',
                        array(
                            $discussionDw->get('thread_id'),
                            $this->get('post_date')
                        ));
                    return;
                }
            }
        }

        parent::_setPosition();
    } /* END _setPosition */

    /**
     *
     * @see XenForo_DataWriter_DiscussionMessage_Post::_messagePostSave()
     */
    protected function _messagePostSave()
    {
        if ($this->isUpdate() && $this->isChanged('post_date')) {
            /* @var $discussionDw XenForo_DataWriter_Discussion_Thread */
            $discussionDw = $this->getDiscussionDataWriter();
            $discussionDw->rebuildDiscussion();
        }

        parent::_messagePostSave();
    } /* END _messagePostSave */

    /**
     * Added to make add-on compatible with < XF 1.2
     *
     * @see XenForo_DataWriter_DiscussionMessage_Post::_getForumInfo()
     *
     */
    protected function _getForumInfo()
    {
        if (method_exists(get_parent_class(), '_getForumInfo')) {
            return parent::_getForumInfo();
        } else {
            if (!$forum = $this->getExtraData(self::DATA_FORUM)) {
                $forum = $this->getModelFromCache('XenForo_Model_Forum')->getForumByThreadId($this->get('thread_id'));

                $this->setExtraData(self::DATA_FORUM, $forum ? $forum : array());
            }
        }
        return $this->getExtraData(self::DATA_FORUM);
    } /* END _getForumInfo */
}