<?php

/**
* Data writer for posts.
*
* @package Bookmarks
*/
class Bookmarks_DataWriter_DiscussionMessage_Post extends XFCP_Bookmarks_DataWriter_DiscussionMessage_Post
{
	public function _messagePreDelete()
	{
		parent::_messagePreDelete();
		
		if (!$this->_haveErrorsPreventSave())
		{
			// hard delete
			$postId = $this->get('post_id');
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
			
			// send bookmark alert
			$bookmarksModel->sendBookmarkAlerts('post', $postId, 'content_not_viewable', 'delete');
			
			// delete all bookmarks that point to this un-viewable post		
			$bookmarksModel->deleteAllByContentTypeId('post', $postId);
		}
	}
	
	protected function _messagePostSave()
	{
		// soft delete - now deleted but was visible
		if ($this->isUpdate() && $this->isChanged('message_state') && $this->get('message_state') != 'visible')
		{
			$postId = $this->get('post_id');
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
			
			// send bookmark alert
			$bookmarksModel->sendBookmarkAlerts('post', $postId, 'content_not_viewable', 'delete');
			
			// delete all bookmarks that point to this un-viewable post
			$bookmarksModel->deleteAllByContentTypeId('post', $postId);
		}
		
		parent::_messagePostSave();
	}
}