<?php

/**
 *
 * @see XenForo_ControllerPublic_Post
 */
class Waindigo_EditPostDate_Extend_XenForo_ControllerPublic_Post extends XFCP_Waindigo_EditPostDate_Extend_XenForo_ControllerPublic_Post
{

    /**
     *
     * @see XenForo_ControllerPublic_Post::actionEdit()
     */
    public function actionEdit()
    {
        $response = parent::actionEdit();

        if ($response instanceof XenForo_ControllerResponse_View) {
            $response->params['canEditPostDate'] = $this->_getPostModel()->canEditPostDate($response->params['post'],
                $response->params['thread'], $response->params['forum']);
        }

        return $response;
    } /* END actionEdit */

    /**
     *
     * @see XenForo_ControllerPublic_Post::actionSave()
     */
    public function actionSave()
    {
        $GLOBALS['XenForo_ControllerPublic_Post'] = $this;

        return parent::actionSave();
    } /* END actionSave */
}