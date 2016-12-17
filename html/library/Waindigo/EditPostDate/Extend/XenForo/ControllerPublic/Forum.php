<?php

/**
 *
 * @see XenForo_ControllerPublic_Forum
 */
class Waindigo_EditPostDate_Extend_XenForo_ControllerPublic_Forum extends XFCP_Waindigo_EditPostDate_Extend_XenForo_ControllerPublic_Forum
{

    /**
     *
     * @see XenForo_ControllerPublic_Forum::actionCreateThread()
     */
    public function actionCreateThread()
    {
        $response = parent::actionCreateThread();

        if ($response instanceof XenForo_ControllerResponse_View) {
            $response->params['canEditPostDate'] = $this->_getForumModel()->canEditPostDate($response->params['forum']);
        }

        return $response;
    } /* END actionCreateThread */

    /**
     *
     * @see XenForo_ControllerPublic_Forum::actionAddThread()
     */
    public function actionAddThread()
    {
        $GLOBALS['XenForo_ControllerPublic_Forum'] = $this;

        return parent::actionAddThread();
    } /* END actionAddThread */
}