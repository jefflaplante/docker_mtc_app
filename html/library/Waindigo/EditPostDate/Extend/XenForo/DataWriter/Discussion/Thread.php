<?php

/**
 *
 * @see XenForo_DataWriter_Discussion_Thread
 */
class Waindigo_EditPostDate_Extend_XenForo_DataWriter_Discussion_Thread extends XFCP_Waindigo_EditPostDate_Extend_XenForo_DataWriter_Discussion_Thread
{

    /**
     *
     * @see XenForo_DataWriter_Discussion_Thread::_discussionPreSave()
     */
    protected function _discussionPreSave()
    {
        if (isset($GLOBALS['XenForo_ControllerPublic_Forum'])) {
            /* @var $controller XenForo_ControllerPublic_Forum */
            $controller = $GLOBALS['XenForo_ControllerPublic_Forum'];

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
            $post = array();
            $thread = $this->getMergedData();
            $forum = $this->_getForumData();
            if ($postDate > 0 && $this->_getPostModel()->canEditPostDate($post, $thread, $forum)) {
                $this->set('post_date', $postDate);
                $this->set('last_post_date', $postDate);
            }
        }

        parent::_discussionPreSave();
    } /* END _discussionPreSave */
}