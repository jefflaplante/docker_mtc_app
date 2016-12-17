<?php

/**
* Data writer for threads.
*
* @package Bookmarks
*/
class Bookmarks_DataWriter_Discussion_Thread extends XFCP_Bookmarks_DataWriter_Discussion_Thread
{
	protected function _discussionPreDelete()
	{
		parent::_discussionPreDelete();
		
		if (!$this->_haveErrorsPreventSave())
		{
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
			$messageIds = $this->_getDiscussionMessageIds();
			
			// hard delete
			foreach ($messageIds AS $postId)
			{	
				// bookmark alerts
				$bookmarksModel->sendBookmarkAlerts('post', $postId, 'content_not_viewable', 'delete');
				
				// delete bookmarks
				$bookmarksModel->deleteAllByContentTypeId('post', $postId);
			}
		}
	}
	
	/**
	 * Specific discussion post-save behaviors.
	 */
	protected function _discussionPostSave()
	{
		if ($this->isUpdate())
		{
			// soft deleted thread
			if ($this->isChanged('discussion_state') && $this->get('discussion_state') != 'visible')
			{
				$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
				$messageIds = $this->_getDiscussionMessageIds();
				
				foreach ($messageIds AS $postId)
				{
					// bookmark alerts
					$bookmarksModel->sendBookmarkAlerts('post', $postId, 'content_not_viewable', 'delete');
					
					// delete bookmarks
					$bookmarksModel->deleteAllByContentTypeId('post', $postId);
				}
			}
		}
		
		parent::_discussionPostSave();
	}
}