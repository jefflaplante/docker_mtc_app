<?php

/**
 *
 * @see XenForo_ControllerPublic_InlineMod_Post
 */
class Waindigo_EditPostDate_Extend_XenForo_ControllerPublic_InlineMod_Post extends XFCP_Waindigo_EditPostDate_Extend_XenForo_ControllerPublic_InlineMod_Post
{

    public function actionEditDate()
    {
        if ($this->isConfirmedPost()) {
            if (XenForo_Application::get('options')->waindigo_editPostDate_unixTimestamp) {
               $postDate = $this->_input->filterSingle('post_date', XenForo_Input::UINT);
            } else {
                $input = $this->_input->filter(
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
            if ($postDate <= 0) {
                return $this->responseError(new XenForo_Phrase('waindigo_date_must_be_after_1_jan_1970_editpostdate'));
            }

            $options = array(
                'post_date' => $postDate
            );

            $this->_assertPostOnly();

            $ids = $this->getInlineModIds(false);

            $response = $this->getInlineModTypeModel()->editDatePosts($ids, $options, $errorPhraseKey);
            if (!$response) {
                throw $this->getErrorOrNoPermissionResponseException($errorPhraseKey);
            }

            $this->clearCookie();

            return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS, $this->getDynamicRedirect());
        } else {
            $postIds = $this->getInlineModIds();

            $handler = $this->_getInlineModPostModel();
            if (!$handler->canEditDatePosts($postIds, $errorPhraseKey)) {
                throw $this->getErrorOrNoPermissionResponseException($errorPhraseKey);
            }

            $redirect = $this->getDynamicRedirect();

            if (!$postIds) {
                return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS, $redirect);
            }

            $viewParams = array(
                'postIds' => $postIds,
                'postCount' => count($postIds),
                'redirect' => $redirect,
            );

            return $this->responseView('XenForo_ViewPublic_InlineMod_Post_Move',
                'waindigo_inline_mod_edit_post_date_editpostdate', $viewParams);
        }
    } /* END actionEditDate */
}