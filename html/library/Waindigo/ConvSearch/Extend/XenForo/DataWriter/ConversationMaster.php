<?php

/**
 *
 * @see XenForo_DataWriter_ConversationMaster
 */
class Waindigo_ConvSearch_Extend_XenForo_DataWriter_ConversationMaster extends XFCP_Waindigo_ConvSearch_Extend_XenForo_DataWriter_ConversationMaster
{

    /**
     * Option that controls whether the data in this discussion should be
     * indexed for search.
     * If this value is set inconsistently for the same discussion (and messages
     * within), data might be orphaned in the search index. Defaults to true.
     *
     * @var string
     */
    const OPTION_INDEX_FOR_SEARCH = 'indexForSearch';

    /**
     *
     * @see XenForo_DataWriter_ConversationMaster::_getDefaultOptions()
     */
    protected function _getDefaultOptions()
    {
        $defaultOptions = parent::_getDefaultOptions();

        $defaultOptions[self::OPTION_INDEX_FOR_SEARCH] = true;

        return $defaultOptions;
    } /* END _getDefaultOptions */

    protected function _postSave()
    {
        if ($this->_firstMessageDw) {
            $this->_firstMessageDw->setOption(
                Waindigo_ConvSearch_Extend_XenForo_DataWriter_ConversationMessage::OPTION_INDEX_FOR_SEARCH, false);
        }

        parent::_postSave();

        $this->_insertOrUpdateSearchIndex();

        if ($this->_firstMessageDw) {
            $this->_insertOrUpdateMessageSearchIndex();
        }
    } /* END _postSave */

    /**
     * Inserts or updates a record in the search index for this conversation.
     */
    protected function _insertOrUpdateSearchIndex()
    {
        $dataHandler = new Waindigo_ConvSearch_Search_DataHandler_Conversation();

        $indexer = new XenForo_Search_Indexer();
        $dataHandler->insertIntoIndex($indexer, $this->getMergedData());
    } /* END _insertOrUpdateSearchIndex */

    /**
     * Inserts or updates a record in the search index for this conversation's
     * first message.
     */
    protected function _insertOrUpdateMessageSearchIndex()
    {
        $dataHandler = new Waindigo_ConvSearch_Search_DataHandler_ConversationMessage();

        $indexer = new XenForo_Search_Indexer();
        $dataHandler->insertIntoIndex($indexer, $this->_firstMessageDw->getMergedData(), $this->getMergedData());
    } /* END _insertOrUpdateMessageSearchIndex */
}