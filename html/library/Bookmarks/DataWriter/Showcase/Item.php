<?php
/**
* Data writer for showcase items.
*
* @package Bookmarks
*/
class Bookmarks_DataWriter_Showcase_Item extends XFCP_Bookmarks_DataWriter_Showcase_Item
{
	/**
	 * Generic showcase item pre-delete handler.
	 */
	protected function _preDelete()
	{
		parent::_preDelete();
		
		if (!$this->_haveErrorsPreventSave())
		{
			// hard delete
			$itemId = $this->get('item_id');
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
			
			// send bookmark alert
			$bookmarksModel->sendBookmarkAlerts('showcase_item', $itemId, 'content_not_viewable', 'delete');
			
			// delete all bookmarks that point to this un-viewable showcase item		
			$bookmarksModel->deleteAllByContentTypeId('showcase_item', $itemId);
		}
	}
	
	/**
	* Generic Showcase Item Post Save handler
	*/
	protected function _postSave()
	{
		// soft delete - now deleted but was visible
		if ($this->isUpdate() && $this->get('item_state') != 'visible' && $this->getExisting('item_state') == 'visible')
		{
			$itemId = $this->get('item_id');
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
			
			// send bookmark alert
			$bookmarksModel->sendBookmarkAlerts('showcase_item', $itemId, 'content_not_viewable', 'delete');
			
			// delete all bookmarks that point to this un-viewable showcase item
			$bookmarksModel->deleteAllByContentTypeId('showcase_item', $itemId);
		}
		else if ($this->isChanged('message') || $this->isChanged('message_t2') || $this->isChanged('message_t3') || $this->isChanged('message_t4') || $this->isChanged('message_t5'))
		{
			$itemId = $this->get('item_id');
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
			
			// send bookmark alert
			$bookmarksModel->sendBookmarkAlerts('showcase_item', $itemId, 'content_edit', 'edit');
		}
		
		parent::_postSave();
	}
}