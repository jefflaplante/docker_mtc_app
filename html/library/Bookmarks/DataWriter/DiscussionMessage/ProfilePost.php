<?php

/**
* Data writer for posts.
*
* @package Bookmarks
*/
class Bookmarks_DataWriter_DiscussionMessage_ProfilePost extends XFCP_Bookmarks_DataWriter_DiscussionMessage_ProfilePost
{
	public function _messagePreDelete()
	{
		parent::_messagePreDelete();
		
		if (!$this->_haveErrorsPreventSave())
		{
			// hard delete
			$profilePostId = $this->get('profile_post_id');
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
			
			// send bookmark alert
			$bookmarksModel->sendBookmarkAlerts('profile_post', $profilePostId, 'content_not_viewable', 'delete');
			
			// delete all bookmarks that point to this un-viewable post
			$bookmarksModel->deleteAllByContentTypeId('profile_post', $profilePostId);
		}
	}
	
	protected function _messagePostSave()
	{
		// soft delete - now deleted but was visible
		if ($this->isUpdate() && $this->isChanged('message_state') && $this->get('message_state') != 'visible')
		{
			$profilePostId = $this->get('profile_post_id');
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
			
			// send bookmark alert
			$bookmarksModel->sendBookmarkAlerts('profile_post', $profilePostId, 'content_not_viewable', 'delete');
			
			// delete all bookmarks that point to this un-viewable post
			$bookmarksModel->deleteAllByContentTypeId('profile_post', $profilePostId);
		}
		
		parent::_messagePostSave();
	}
}