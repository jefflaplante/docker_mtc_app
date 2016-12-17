<?php

/**
* Data writer for showcase categories.
*
* @package Bookmarks
*/
class Bookmarks_DataWriter_Showcase_Category extends XFCP_Bookmarks_DataWriter_Showcase_Category
{
	/**
	 * Generic showcase category pre-delete handler.
	 */
	protected function _preDelete()
	{
		parent::_preDelete();
		
		if (!$this->_haveErrorsPreventSave())
		{
			// hard delete
			$categoryId = $this->get('category_id');
			$items = $this->_db->fetchAll('
				SELECT item_id
				FROM xf_nflj_showcase_item
				WHERE category_id = ?
			', $categoryId);	
			
			// this is done here rather that defering to the item datawriter as we want the category name in the alerts
			if (!empty($items))
			{
				$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
				
				foreach ($items AS $item)
				{
					// send bookmark alert
					$bookmarksModel->sendBookmarkAlerts('showcase_item', $item['item_id'], 'content_not_viewable', 'delete');
					
					// delete all bookmarks that point to this un-viewable showcase item		
					$bookmarksModel->deleteAllByContentTypeId('showcase_item', $item['item_id']);
				}
			}
		}
	}
}