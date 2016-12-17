<?php

class Bookmarks_DataWriter_XenGallery_Media extends XFCP_Bookmarks_DataWriter_XenGallery_Media
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
			$mediaId = $this->get('media_id');
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');

			// send bookmark alert
			$bookmarksModel->sendBookmarkAlerts('xengallery_media', $mediaId, 'content_not_viewable', 'delete');

			// delete all bookmarks that point to this un-viewable resource
			$bookmarksModel->deleteAllByContentTypeId('xengallery_media', $mediaId);
		}
	}

	/**
	 * Post-save handling.
	 */
	protected function _postSave()
	{
		if ($this->isUpdate())
		{
			$mediaId = $this->get('media_id');
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');

			// soft delete - now deleted but was visible
			if ($this->isChanged('media_state') && $this->get('media_state') != 'visible')
			{
				// send bookmark alert
				$bookmarksModel->sendBookmarkAlerts('xengallery_media', $mediaId, 'content_not_viewable', 'delete');

				// delete all bookmarks that point to this un-viewable resource
				$bookmarksModel->deleteAllByContentTypeId('xengallery_media', $mediaId);
			}
			else
			{
				$bookmarksModel->sendBookmarkAlerts('xengallery_media', $mediaId, 'content_edit', 'edit');
			}
		}

		parent::_postSave();
	}
}
