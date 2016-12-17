<?php

/**
 *
 * @see XenForo_ControllerPublic_Thread
 */
class Waindigo_EditPostDate_Extend_XenForo_ControllerPublic_Thread extends XFCP_Waindigo_EditPostDate_Extend_XenForo_ControllerPublic_Thread
{

    /**
     * @see XenForo_ControllerPublic_Thread::actionAddReply()
     */
    public function actionAddReply()
    {
        $GLOBALS['XenForo_ControllerPublic_Thread'] = $this;

        return parent::actionAddReply();
    } /* END actionAddReply */
}