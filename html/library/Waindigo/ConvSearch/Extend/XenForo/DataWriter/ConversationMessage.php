<?php

/**
 *
 * @see XenForo_DataWriter_ConversationMessage
 */
class Waindigo_ConvSearch_Extend_XenForo_DataWriter_ConversationMessage extends XFCP_Waindigo_ConvSearch_Extend_XenForo_DataWriter_ConversationMessage
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
     * @see XenForo_DataWriter_ConversationMessage::_getDefaultOptions()
     */
    protected function _getDefaultOptions()
    {
        $defaultOptions = parent::_getDefaultOptions();

        $defaultOptions[self::OPTION_INDEX_FOR_SEARCH] = true;

        return $defaultOptions;
    } /* END _getDefaultOptions */

    /**
     *
     * @see XenForo_DataWriter_ConversationMessage::_postSave()
     */
    protected function _postSave()
    {
        parent::_postSave();

        if ($this->getOption(self::OPTION_INDEX_FOR_SEARCH)) {
            $this->_insertOrUpdateSearchIndex();
        }
    } /* END _postSave */

    /**
     * Inserts or updates a record in the search index for this message.
     */
    protected function _insertOrUpdateSearchIndex()
    {
        $dataHandler = new Waindigo_ConvSearch_Search_DataHandler_ConversationMessage();

        $indexer = new XenForo_Search_Indexer();
        $dataHandler->insertIntoIndex($indexer, $this->getMergedData());
    } /* END _insertOrUpdateSearchIndex */
}