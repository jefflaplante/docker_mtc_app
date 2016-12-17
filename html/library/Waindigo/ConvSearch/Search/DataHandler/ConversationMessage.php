<?php

/**
 * Handles searching of conversation messages.
 *
 * @package XenForo_Search
 */
class Waindigo_ConvSearch_Search_DataHandler_ConversationMessage extends XenForo_Search_DataHandler_Abstract
{

    /**
     *
     * @var XenForo_Model_ConversationMessage
     */
    protected $_conversationMessageModel = null;

    /**
     *
     * @var XenForo_Model_Conversation
     */
    protected $_conversationModel = null;

    /**
     * Inserts into (or replaces a record) in the index.
     *
     * @see XenForo_Search_DataHandler_Abstract::_insertIntoIndex()
     */
    protected function _insertIntoIndex(XenForo_Search_Indexer $indexer, array $data, array $parentData = null)
    {
        $metadata = array();
        $title = '';

        if ($parentData) {
            $conversation = $parentData;
            if ($data['message_id'] == $conversation['first_message_id'] || $conversation['first_message_id'] === 0) {
                $title = $conversation['title'];
                if (!empty($conversation['prefix_id'])) {
                    $metadata['prefix'] = $conversation['prefix_id'];
                }
            }
        }

        $metadata['conversation'] = $data['conversation_id'];

        $indexer->insertIntoIndex('conversation_message', $data['message_id'], $title, $data['message'],
            $data['message_date'], $data['user_id'], $data['conversation_id'], $metadata);
    } /* END _insertIntoIndex */

    /**
     * Updates a record in the index.
     *
     * @see XenForo_Search_DataHandler_Abstract::_updateIndex()
     */
    protected function _updateIndex(XenForo_Search_Indexer $indexer, array $data, array $fieldUpdates)
    {
        $indexer->updateIndex('conversation_message', $data['message_id'], $fieldUpdates);
    } /* END _updateIndex */

    /**
     * Deletes one or more records from the index.
     *
     * @see XenForo_Search_DataHandler_Abstract::_deleteFromIndex()
     */
    protected function _deleteFromIndex(XenForo_Search_Indexer $indexer, array $dataList)
    {
        $conversationMessageIds = array();
        foreach ($dataList as $data) {
            $conversationMessageIds[] = $data['message_id'];
        }

        $indexer->deleteFromIndex('conversation_message', $conversationMessageIds);
    } /* END _deleteFromIndex */

    /**
     * Rebuilds the index for a batch.
     *
     * @see XenForo_Search_DataHandler_Abstract::rebuildIndex()
     */
    public function rebuildIndex(XenForo_Search_Indexer $indexer, $lastId, $batchSize)
    {
        $conversationModel = $this->_getConversationModel();

        if (!class_exists('XFCP_Waindigo_ConvSearch_Extend_XenForo_Model_Conversation', false)) {
            return false;
        }

        $conversationMessageIds = $conversationModel->getConversationMessageIdsInRange($lastId, $batchSize);
        if (!$conversationMessageIds) {
            return false;
        }

        $this->quickIndex($indexer, $conversationMessageIds);

        return max($conversationMessageIds);
    } /* END rebuildIndex */

    /**
     * Rebuilds the index for the specified content.
     *
     * @see XenForo_Search_DataHandler_Abstract::quickIndex()
     */
    public function quickIndex(XenForo_Search_Indexer $indexer, array $contentIds)
    {
        $conversationMessages = $this->_getConversationModel()->getConversationMessagesByIds($contentIds);

        $conversationIds = array();
        foreach ($conversationMessages as $conversationMessage) {
            $conversationIds[] = $conversationMessage['conversation_id'];
        }

        $conversations = $this->_getConversationModel()->getConversationsByIds(array_unique($conversationIds));

        foreach ($conversationMessages as $conversationMessage) {
            $conversation = (isset($conversations[$conversationMessage['conversation_id']]) ? $conversations[$conversationMessage['conversation_id']] : null);
            //            if (!$conversation || $conversationMessage['recipient_state'] != 'active')
            //            {
            //                continue;
            //            }


            $this->insertIntoIndex($indexer, $conversationMessage, $conversation);
        }

        return true;
    } /* END quickIndex */

    /**
     * Gets the type-specific data for a collection of results of this content
     * type.
     *
     * @see XenForo_Search_DataHandler_Abstract::getDataForResults()
     */
    public function getDataForResults(array $ids, array $viewingUser, array $resultsGrouped)
    {
        $conversationModel = $this->_getConversationModel();

        if (!class_exists('XFCP_Waindigo_ConvSearch_Extend_XenForo_Model_Conversation', false)) {
            return array();
        }

        if (XenForo_Permission::hasPermission($viewingUser['permissions'], 'conversation', 'viewAny')) {
            $conversationMessages = $conversationModel->getConversationMessagesByIds($ids);
        } else {
            $conversationMessages = $conversationModel->getConversationMessagesSearchResultsForUserByIds(
                $viewingUser['user_id'], $ids);
        }

        foreach ($conversationMessages as $conversationMessageId => $conversationMessage) {
            if ($conversationMessage['message_id'] == $conversationMessage['first_message_id'] &&
                 isset($resultsGrouped['conversation'][$conversationMessage['conversation_id']])) {
                // matched first conversationMessage and conversation, skip the conversationMessage
                unset($conversationMessages[$conversationMessageId]);
            }
        }

        return $conversationMessages;
    } /* END getDataForResults */

    /**
     * Determines if this result is viewable.
     *
     * @see XenForo_Search_DataHandler_Abstract::canViewResult()
     */
    public function canViewResult(array $result, array $viewingUser)
    {
        return true;
    } /* END canViewResult */

    /**
     * Prepares a result for display.
     *
     * @see XenForo_Search_DataHandler_Abstract::prepareResult()
     */
    public function prepareResult(array $result, array $viewingUser)
    {
        $result = $this->_getConversationModel()->prepareMessage($result, $result);
        $result['title'] = XenForo_Helper_String::censorString($result['title']);
        return $result;
    } /* END prepareResult */

    /**
     * Gets the date of the result (from the result's content).
     *
     * @see XenForo_Search_DataHandler_Abstract::getResultDate()
     */
    public function getResultDate(array $result)
    {
        return $result['message_date'];
    } /* END getResultDate */

    /**
     * Renders a result to HTML.
     *
     * @see XenForo_Search_DataHandler_Abstract::renderResult()
     */
    public function renderResult(XenForo_View $view, array $result, array $search)
    {
        return $view->createTemplateObject('search_result_conversation_message',
            array(
                'conversationMessage' => $result,
                'conversation' => $result,
                'search' => $search
            ));
    } /* END renderResult */

    /**
     * Gets the content types searched in a type-specific search.
     *
     * @see XenForo_Search_DataHandler_Abstract::getSearchContentTypes()
     */
    public function getSearchContentTypes()
    {
        return array(
            'conversation_message',
            'conversation'
        );
    } /* END getSearchContentTypes */

    /**
     * Get type-specific constraints from input.
     *
     * @param XenForo_Input $input
     *
     * @return array
     */
    public function getTypeConstraintsFromInput(XenForo_Input $input)
    {
        $constraints = array();

        $replyCount = $input->filterSingle('reply_count', XenForo_Input::UINT);
        if ($replyCount) {
            $constraints['reply_count'] = $replyCount;
        }

        $conversationId = $input->filterSingle('conversation_id', XenForo_Input::UINT);
        if ($conversationId) {
            $constraints['conversation'] = $conversationId;

            // undo things that don't make sense with this
            $constraints['titles_only'] = false;
        }

        return $constraints;
    } /* END getTypeConstraintsFromInput */

    /**
     * Process a type-specific constraint.
     *
     * @see XenForo_Search_DataHandler_Abstract::processConstraint()
     */
    public function processConstraint(XenForo_Search_SourceHandler_Abstract $sourceHandler, $constraint, $constraintInfo,
        array $constraints)
    {
        switch ($constraint) {
            case 'reply_count':
                $replyCount = intval($constraintInfo);
                if ($replyCount > 0) {
                    return array(
                        'query' => array(
                            'conversation',
                            'reply_count',
                            '>=',
                            $replyCount
                        )
                    );
                }

            case 'prefix':
                if ($constraintInfo) {
                    return array(
                        'metadata' => array(
                            'prefix',
                            preg_split('/\D+/', strval($constraintInfo))
                        )
                    );
                }

            case 'conversation':
                $conversationId = intval($constraintInfo);
                if ($conversationId > 0) {
                    return array(
                        'metadata' => array(
                            'conversation',
                            $conversationId
                        )
                    );
                }
        }

        return false;
    } /* END processConstraint */

    /**
     * Gets the search form controller response for this type.
     *
     * @see XenForo_Search_DataHandler_Abstract::getSearchFormControllerResponse()
     */
    public function getSearchFormControllerResponse(XenForo_ControllerPublic_Abstract $controller, XenForo_Input $input,
        array $viewParams)
    {
        $params = $input->filterSingle('c', XenForo_Input::ARRAY_SIMPLE);

        $viewParams['search']['reply_count'] = empty($params['reply_count']) ? '' : $params['reply_count'];

        $viewParams['search']['conversation'] = array();
        if (!empty($params['conversation'])) {
            $conversationModel = $this->_getConversationModel();

            $conversation = $conversationModel->getConversationById($params['conversation'],
                array(
                    'join' => XenForo_Model_Conversation::FETCH_FORUM,
                    'permissionCombinationId' => XenForo_Visitor::getPermissionCombinationId()
                ));

            if ($conversation) {
                $permissions = XenForo_Permission::unserializePermissions($conversation['node_permission_cache']);

                if ($conversationModel->canViewConversationAndContainer($conversation, $conversation, $null,
                    $permissions)) {
                    $viewParams['search']['conversation'] = $this->_getConversationModel()->getConversationById(
                        $params['conversation']);
                }
            }
        }

        return $controller->responseView('Waindigo_ConvSearch_ViewPublic_Search_Form_ConversationMessage',
            'search_form_conversation_message', $viewParams);
    } /* END getSearchFormControllerResponse */

    /**
     * Gets the search order for a type-specific search.
     *
     * @see XenForo_Search_DataHandler_Abstract::getOrderClause()
     */
    public function getOrderClause($order)
    {
        if ($order == 'replies') {
            return array(
                array(
                    'conversation',
                    'reply_count',
                    'desc'
                ),
                array(
                    'search_index',
                    'item_date',
                    'desc'
                )
            );
        }

        return false;
    } /* END getOrderClause */

    /**
     * Gets the necessary join structure information for this type.
     *
     * @see XenForo_Search_DataHandler_Abstract::getJoinStructures()
     */
    public function getJoinStructures(array $tables)
    {
        $structures = array();
        if (isset($tables['conversation'])) {
            $structures['conversation'] = array(
                'table' => 'xf_conversation_master',
                'key' => 'conversation_id',
                'relationship' => array(
                    'search_index',
                    'discussion_id'
                )
            );
        }

        return $structures;
    } /* END getJoinStructures */

    /**
     * Gets the content type that will be used when grouping for this type.
     *
     * @see XenForo_Search_DataHandler_Abstract::getGroupByType()
     */
    public function getGroupByType()
    {
        return 'conversation';
    } /* END getGroupByType */

    /**
     *
     * @return XenForo_Model_Conversation
     */
    protected function _getConversationModel()
    {
        if (!$this->_conversationModel) {
            $this->_conversationModel = XenForo_Model::create('XenForo_Model_Conversation');
        }

        return $this->_conversationModel;
    } /* END _getConversationModel */
}