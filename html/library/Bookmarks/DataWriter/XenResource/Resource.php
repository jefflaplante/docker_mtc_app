<?php

/**
* Data writer for XenResource.
*
* @package Bookmarks
*/
class Bookmarks_DataWriter_XenResource_Resource extends XFCP_Bookmarks_DataWriter_XenResource_Resource
{
	/**
	 * Post-delete handling.
	 */
	protected function _preDelete()
	{
		parent::_preDelete();
		
		if (!$this->_haveErrorsPreventSave())
		{
			// hard delete
			$resourceId = $this->get('resource_id');
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
			
			// send bookmark alert
			$bookmarksModel->sendBookmarkAlerts('resource', $resourceId, 'content_not_viewable', 'delete');
			
			// delete all bookmarks that point to this un-viewable resource		
			$bookmarksModel->deleteAllByContentTypeId('resource', $resourceId);
		}
	}
	
	/**
	 * Post-save handling.
	 */
	protected function _postSave()
	{
		if ($this->isUpdate())
		{
			$resourceId = $this->get('resource_id');
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
			
			// soft delete - now deleted but was visible
			if ($this->isChanged('resource_state') && $this->get('resource_state') != 'visible')
			{
				// send bookmark alert
				$bookmarksModel->sendBookmarkAlerts('resource', $resourceId, 'content_not_viewable', 'delete');
				
				// delete all bookmarks that point to this un-viewable resource
				$bookmarksModel->deleteAllByContentTypeId('resource', $resourceId);
			}
			else
			{
				$bookmarksModel->sendBookmarkAlerts('resource', $resourceId, 'content_edit', 'edit');
			}
		}
		
		parent::_postSave();
	}
}