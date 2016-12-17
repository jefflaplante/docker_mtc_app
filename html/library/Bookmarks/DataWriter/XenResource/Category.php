<?php

/**
* Data writer for resource categories.
*
* @package Bookmarks
*/
class Bookmarks_DataWriter_XenResource_Category extends XFCP_Bookmarks_DataWriter_XenResource_Category
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
			$categoryId = $this->get('resource_category_id');
			$items = $this->_db->fetchAll('
				SELECT resource_id
				FROM xf_resource
				WHERE resource_category_id = ?
			', $categoryId);	
			
			// this is done here rather that defering to the resource datawriter as we want the category name in the alerts
			if (!empty($items))
			{
				$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
				
				foreach ($items AS $item)
				{
					// send bookmark alert
					$bookmarksModel->sendBookmarkAlerts('resource', $item['resource_id'], 'content_not_viewable', 'delete');
					
					// delete all bookmarks that point to this un-viewable resource	
					$bookmarksModel->deleteAllByContentTypeId('resource', $item['resource_id']);
				}
			}
		}
	}
}