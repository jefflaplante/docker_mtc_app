<?php

/**
 * Handles searching of conversations.
 */
class Waindigo_ConvSearch_Search_DataHandler_Conversation extends XenForo_Search_DataHandler_Abstract
{
    /**
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
        $metadata['conversation'] = $data['conversation_id'];
        if (!empty($data['prefix_id'])) {
            $metadata['prefix'] = $data['prefix_id'];
        }

        $indexer->insertIntoIndex(
            'conversation', $data['conversation_id'],
            $data['title'], '',
            $data['start_date'], $data['user_id'], $data['conversation_id'], $metadata
        );
    } /* END _insertIntoIndex */

    /**
     * Updates a record in the index.
     *
     * @see XenForo_Search_DataHandler_Abstract::_updateIndex()
     */
    protected function _updateIndex(XenForo_Search_Indexer $indexer, array $data, array $fieldUpdates)
    {
        $indexer->updateIndex('conversation', $data['conversation_id'], $fieldUpdates);
    } /* END _updateIndex */

    /**
     * Deletes one or more records from the index.
     *
     * @see XenForo_Search_DataHandler_Abstract::_deleteFromIndex()
     */
    protected function _deleteFromIndex(XenForo_Search_Indexer $indexer, array $dataList)
    {
        $conversationIds = array();
        foreach ($dataList AS $data) {
            $conversationIds[] = $data['conversation_id'];
        }

        $indexer->deleteFromIndex('conversation', $conversationIds);
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

        $conversationIds = $conversationModel->getConversationIdsInRange($lastId, $batchSize);
        if (!$conversationIds) {
            return false;
        }

        $this->quickIndex($indexer, $conversationIds);

        return max($conversationIds);
    } /* END rebuildIndex */

    /**
     * Rebuilds the index for the specified content.

     * @see XenForo_Search_DataHandler_Abstract::quickIndex()
     */
    public function quickIndex(XenForo_Search_Indexer $indexer, array $contentIds)
    {
        $conversationModel = $this->_getConversationModel();

        $conversations = $conversationModel->getConversationsByIds($contentIds);

        foreach ($conversations AS $conversation) {
            $this->insertIntoIndex($indexer, $conversation);
        }

        return true;
    } /* END quickIndex */

    /**
     * Gets the type-specific data for a collection of results of this content type.
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
            $conversations = $conversationModel->getConversationsByIds($ids);
        } else {
            $conversations = $conversationModel->getConversationsSearchResultsForUserByIds($viewingUser['user_id'], $ids);
        }

        return $conversations;
    } /* END getDataForResults */

    /**
     * Determines if this result is viewable.
     *
     * @see XenForo_Search_DataHandler_Abstract::canViewResult()
     */
    public function canViewResult(array $result, array $viewingUser)
    {
        if (XenForo_Permission::hasPermission($viewingUser['permissions'], 'conversation', 'viewAny')) {
            return true;
        }

        return $this->_getConversationModel()->canViewConversation($result, $viewingUser);
    } /* END canViewResult */

    /**
     * Prepares a result for display.
     *
     * @see XenForo_Search_DataHandler_Abstract::prepareResult()
     */
    public function prepareResult(array $result, array $viewingUser)
    {
        return $this->_getConversationModel()->prepareConversation($result);
    } /* END prepareResult */

    /**
     * Gets the date of the result (from the result's content).
     *
     * @see XenForo_Search_DataHandler_Abstract::getResultDate()
     */
    public function getResultDate(array $result)
    {
        return $result['start_date'];
    } /* END getResultDate */

    /**
     * Renders a result to HTML.
     *
     * @see XenForo_Search_DataHandler_Abstract::renderResult()
     */
    public function renderResult(XenForo_View $view, array $result, array $search)
    {
        return $view->createTemplateObject('search_result_conversation', array(
            'conversation' => $result,
            'conversationMessage' => $result,
            'search' => $search
        ));
    } /* END renderResult */

    public function getSearchContentTypes()
    {
        return array('conversation');
    } /* END getSearchContentTypes */

    /**
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