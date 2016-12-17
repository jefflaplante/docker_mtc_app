<?php
if (false) {

    class XFCP_Waindigo_Trophies_Extend_XenForo_ControllerPublic_Thread extends XenForo_ControllerPublic_Thread
    {
    }
}

class Waindigo_Trophies_Extend_XenForo_ControllerPublic_Thread extends XFCP_Waindigo_Trophies_Extend_XenForo_ControllerPublic_Thread
{

    /**
     *
     * @see XenForo_ControllerPublic_Thread::actionIndex()
     *
     */
    public function actionIndex()
    {
        $response = parent::actionIndex();

        if ($response instanceof XenForo_ControllerResponse_View) {
            if (XenForo_Application::getOptions()->waindigo_trophies_showIconsPostList && !empty($response->params['posts'])) {
                $posts = $this->_getTrophyModel()->prepareTrophyCacheForPosts($response->params['posts']);
                $response->params['posts'] = $posts;
            }
        }
        return $response;
    }

    /**
     *
     * @see XenForo_ControllerPublic_Thread::actionAddReply()
     */
    public function actionAddReply()
    {
        $response = parent::actionAddReply();

        if ($response instanceof XenForo_ControllerResponse_View) {
            if (XenForo_Application::getOptions()->waindigo_trophies_showIconsPostList) {
                $posts = $this->_getTrophyModel()->prepareTrophyCacheForPosts($response->params['posts']);
                $response->params['posts'] = $posts;
            }
        }
        return $response;
    }

    /**
     *
     * @see XenForo_ControllerPublic_Thread::_getPostFetchOptions()
     */
    protected function _getPostFetchOptions(array $thread, array $forum)
    {
        $postFetchOptions = parent::_getPostFetchOptions($thread, $forum);

        if (!isset($postFetchOptions['waindigo_join'])) {
            $postFetchOptions['waindigo_join'] = 0;
        }

        $this->_getTrophyModel();
        $postFetchOptions['waindigo_join'] |= Waindigo_Trophies_Extend_XenForo_Model_Post::FETCH_TROPHY_COMBINATION;

        return $postFetchOptions;
    }

    /**
     *
     * @return XenForo_Model_Trophy
     */
    protected function _getTrophyModel()
    {
        return $this->getModelFromCache('XenForo_Model_Trophy');
    }
}