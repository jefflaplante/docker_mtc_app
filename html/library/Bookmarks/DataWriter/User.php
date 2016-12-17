<?php

/**
* Data writer for users.
*
* @package Bookmarks
*/
class Bookmarks_DataWriter_User extends XFCP_Bookmarks_DataWriter_User
{
	/**
	 * Post-delete handling.
	 */
	protected function _delete()
	{
		// using _delete() due to the need of having this user intact for sending out alerts
		// also this provides reverting in the event nothing is commited to the database
		
		$userId = $this->get('user_id');
		$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
		
		// delete this user's bookmarks
		$bookmarksModel->deleteAllByUserId($userId);
		
		// remove profile post bookmarks
		$posts = $this->getModelFromCache('XenForo_Model_ProfilePost')->getProfilePostsForUserId($userId);
		
		if (!empty($posts))
		{
			$contentIds = array_keys($posts);
			$bookmarks = $bookmarksModel->getBookmarksByContentTypeIds($contentIds, 'profile_post');
			
			foreach ($bookmarks AS $bookmark)
			{
				// send alert
				$bookmarksModel->sendBookmarkAlert('profile_post', $bookmark['content_id'], 'content_not_viewable', 'delete', $bookmark['bookmark_user_id']);
				
				// delete bookmark
				$errorKey = '';
				$bookmarksModel->bookmarkDelete($bookmark['bookmark_id'], $errorKey);
			}
		}
		
		parent::_delete();	
	}
	
	/**
	 * Post-save handling.
	 */
	protected function _postSaveAfterTransaction()
	{
		parent::_postSaveAfterTransaction();
		
		if ($this->isChanged('user_group_id') || $this->isChanged('secondary_group_ids'))
		{
			$data = XenForo_Application::get('db')->fetchOne("
				SELECT execute_data
				FROM xf_deferred
				WHERE unique_key = 'Permission'
			");
			
			// permissions are to be rebuilt so we must wait till that is done
			if (!empty($data))
			{
				$data = unserialize($data);
				
				// add user_id so un-viewable bookmarks can be removed
				$data['bookmark_user_ids'][] = $this->get('user_id');
				
				// update the cron with our user_ids as deferred class is extended to deal with bookmarks
				XenForo_Application::defer('Permission', $data, 'Permission', true);
			}
		}
	}
}