<?php

/**
 *
 * @see XenForo_ControllerPublic_Conversation
 */
class Waindigo_ConvAccess_Extend_XenForo_ControllerPublic_Conversation extends XFCP_Waindigo_ConvAccess_Extend_XenForo_ControllerPublic_Conversation
{

    /**
     *
     * @see XenForo_ControllerPublic_Conversation::actionIndex()
     */
    public function actionIndex()
    {
        $response = parent::actionIndex();

        if ($response instanceof XenForo_ControllerResponse_View) {
            $response->params = array_merge($response->params, $this->_getAccessParams());
        }

        return $response;
    } /* END actionIndex */

    /**
     *
     * @see XenForo_ControllerPublic_Conversation::actionStarred()
     */
    public function actionStarred()
    {
        $response = parent::actionStarred();

        if ($response instanceof XenForo_ControllerResponse_View) {
            $response->params = array_merge($response->params, $this->_getAccessParams());
        }

        return $response;
    } /* END actionStarred */

    public function actionYours()
    {
        $viewParams = $this->_getAccessParams();

        if ($viewParams['selectedUserId'] == XenForo_Visitor::getUserId()) {
            $response = parent::actionYours();

            if ($response instanceof XenForo_ControllerResponse_View) {
                $response->params = array_merge($response->params, $viewParams);
            }

            return $response;
        }

        $viewParams = array_merge(
            $this->_getConversationListData(
                array(
                    'search_type' => 'started_by',
                    'search_user' => $viewParams['users'][$viewParams['selectedUserId']]['username'],
                    'search_user_id' => $viewParams['selectedUserId']
                )), $viewParams);

        return $this->responseView('XenForo_ViewPublic_Conversation_Yours', 'conversation_list_yours', $viewParams);
    } /* END actionYours */

    protected function _getAccessParams()
    {
        $params = array();

        $conversationUserId = $this->_input->filterSingle('conversation_user_id', XenForo_Input::UINT);

        if ($this->_getConversationModel()->canViewConversationsByUser($conversationUserId)) {
            $users = $this->_getConversationModel()->getAccessedUsersForUser(XenForo_Visitor::getUserId());

            if ($conversationUserId && !isset($users[$conversationUserId])) {
                /* @var $userModel XenForo_Model_User */
                $userModel = $this->getModelFromCache('XenForo_Model_User');

                $user = array();
                if ($conversationUserId != XenForo_Visitor::getUserId()) {
                    $user = $userModel->getUserById($conversationUserId);
                }

                if (!$user) {
                    return $this->responseRedirect(XenForo_ControllerResponse_Redirect::RESOURCE_CANONICAL,
                        XenForo_Link::buildPublicLink('conversations'));
                }

                $users[$conversationUserId] = $user;
            }

            if (!$conversationUserId) {
                $conversationUserId = XenForo_Visitor::getUserId();
            }

            $params['users'] = $users;

            $params['canAddUsers'] = 1;
        } else {
            $conversationUserId = XenForo_Visitor::getUserId();
        }

        $params['selectedUserId'] = $conversationUserId;

        return $params;
    } /* END _getAccessParams */

    protected function _getConversationListData(array $extraConditions = array())
    {
        $conversationUserId = $this->_input->filterSingle('conversation_user_id', XenForo_Input::UINT);

        if (!$conversationUserId) {
            return parent::_getConversationListData($extraConditions);
        }

        if (!$this->_getConversationModel()->canViewConversationsByUser($conversationUserId)) {
            throw $this->getErrorOrNoPermissionResponseException('');
        }

        $visitor = XenForo_Visitor::getInstance();
        $conversationModel = $this->_getConversationModel();

        $conditions = $this->_getListConditions();
        $conditions = array_merge($conditions, $extraConditions);
        $fetchOptions = $this->_getListFetchOptions();

        $totalConversations = $conversationModel->countConversationsForUser($conversationUserId, $conditions);

        $conversations = $conversationModel->getConversationsForUser($conversationUserId, $conditions, $fetchOptions);
        $conversations = $conversationModel->prepareConversations($conversations);

        $page = max(1, intval($fetchOptions['page']));

        return array(
            'conversations' => $conversations,

            'page' => $fetchOptions['page'],
            'conversationsPerPage' => $fetchOptions['perPage'],
            'totalConversations' => $totalConversations,
            'startOffset' => ($page - 1) * $fetchOptions['perPage'] + 1,
            'endOffset' => ($page - 1) * $fetchOptions['perPage'] + count($conversations),

            'ignoredNames' => $this->_getIgnoredContentUserNames($conversations),

            'canStartConversation' => $conversationModel->canStartConversations(),

            'search_type' => $conditions['search_type'],
            'search_user' => $conditions['search_user'],

            'pageNavParams' => array(
                'conversation_user_id' => $conversationUserId,
                'search_type' => ($conditions['search_type'] ? $conditions['search_type'] : false),
                'search_user' => ($conditions['search_user'] ? $conditions['search_user'] : false)
            )
        );
    } /* END _getConversationListData */

    /**
     * Marks an unread conversation as read, or a read conversation as unread
     *
     * @return XenForo_ControllerResponse_Abstract
     */
    public function actionToggleRead()
    {
        $conversationUserId = $this->_input->filterSingle('conversation_user_id', XenForo_Input::UINT);

        if (!$conversationUserId || $conversationUserId == XenForo_Visitor::getUserId()) {
            return parent::actionToggleRead();
        }

        if (!$this->_getConversationModel()->canViewConversationsByUser($conversationUserId)) {
            return $this->responseNoPermission();
        }

        $conversationId = $this->_input->filterSingle('conversation_id', XenForo_Input::UINT);
        $conversation = $this->_getConversationOrError($conversationId);

        if ($this->isConfirmedPost()) {
            $visitor = XenForo_Visitor::getInstance();

            if ($conversation['isNew']) {
                $this->_getConversationModel()->markConversationAsRead($conversationId, $visitor->user_id,
                    XenForo_Application::$time);

                $redirectPhrase = 'conversation_marked_as_read';
            } else {
                $this->_getConversationModel()->markConversationAsUnread($conversationId, $visitor->user_id);

                $redirectPhrase = 'conversation_marked_as_unread';
            }

            return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
                XenForo_Link::buildPublicLink('conversations'), new XenForo_Phrase($redirectPhrase),
                array(
                    'unread' => $conversation['isNew'] ? false : true,
                    'actionPhrase' => new XenForo_Phrase($conversation['isNew'] ? 'mark_as_unread' : 'mark_as_read'),
                    'counter' => $visitor->conversations_unread,
                    'counterFormatted' => XenForo_Locale::numberFormat($visitor->conversations_unread)
                ));
        } else {
            $viewParams = array(
                'conversation' => $conversation
            );

            return $this->responseView('XenForo_ViewPublic_Conversation_ToggleRead', 'conversation_toggle_read',
                $viewParams);
        }
    } /* END actionToggleRead */

    public function actionAddUsers()
    {
        if ($this->isConfirmedPost()) {
            $usernames = $this->_input->filterSingle('users', XenForo_Input::STRING);

            $usernames = explode(',', $usernames);

            /* @var $userModel XenForo_Model_User */
            $userModel = $this->getModelFromCache('XenForo_Model_User');

            $users = $userModel->getUsersByNames($usernames);

            $accessUserIds = array_keys($users);

            $this->_getConversationModel()->grantAccessToUsersConversationsForUser(XenForo_Visitor::getUserId(),
                $accessUserIds);

            $userId = reset($accessUserIds);

            return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
                XenForo_Link::buildPublicLink('conversations', '',
                    array(
                        'conversation_user_id' => $userId
                    )));
        }

        return $this->responseView('Waindigo_ConvSearch_ViewPublic_Conversation_AddUsers',
            'waindigo_add_users_convaccess');
    } /* END actionAddUsers */

    public function actionRemoveUser()
    {
        $this->_assertPostOnly();

        $conversationUserId = $this->_input->filterSingle('conversation_user_id', XenForo_Input::UINT);

        if ($conversationUserId) {
            $this->_getConversationModel()->revokeAccessToUserConversationsForUser(XenForo_Visitor::getUserId(),
                $conversationUserId);
        }

        return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
            XenForo_Link::buildPublicLink('conversations'));
    } /* END actionRemoveUser */

    /**
     *
     * @see XenForo_ControllerPublic_Conversation::_getConversationOrError()
     */
    protected function _getConversationOrError($conversationId, $userId = null, $fetchFirstMessage = false)
    {
        $markRead = true;

        $xenOptions = XenForo_Application::get('options');

        $conversationUserId = $this->_input->filterSingle('conversation_user_id', XenForo_Input::UINT);
        if ($conversationUserId && $this->_getConversationModel()->canViewConversationsByUser($conversationUserId)) {
            if ($userId != $conversationUserId && $xenOptions->waindigo_convAccess_noMarkRead) {
                $markRead = false;
            }
            $userId = $conversationUserId;
        }

        $conversation = parent::_getConversationOrError($conversationId, $userId, $fetchFirstMessage);

        if (!$markRead) {
            $conversation['last_read_date'] = XenForo_Application::$time;
        }

        return $conversation;
    } /* END _getConversationOrError */

    /**
     *
     * @see XenForo_ControllerPublic_Conversation::_getConversationOrError()
     */
    protected function _getConversationAndMessageOrError($messageId, $conversationId, $userId = null)
    {
        $conversationUserId = $this->_input->filterSingle('conversation_user_id', XenForo_Input::UINT);
        if ($conversationUserId && $this->_getConversationModel()->canViewConversationsByUser($conversationUserId)) {
            $userId = $conversationUserId;
        }

        return parent::_getConversationAndMessageOrError($messageId, $conversationId, $userId);
    } /* END _getConversationAndMessageOrError */
}