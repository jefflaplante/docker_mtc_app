<?php

/**
 * Model to handle inline mod-style actions on threads. Generally, these are simply
 * bulk actions. They can be applied to other circumstances if desired.
 *
 * @package Bookmarks
 */
class Bookmarks_Model_InlineMod_Thread extends XFCP_Bookmarks_Model_InlineMod_Thread
{
	/**
	 * Moves the specified threads if permissions are sufficient.
	 *
	 * @param array $threadIds List of thread IDs to change
	 * @param integer $targetNodeId ID of node where threads are being moved to. Use 0 if unknown.
	 * @param array $options Options that control the action. Nothing supported at this time.
	 * @param string $errorKey Modified by reference. If no permission, may include a key of a phrase that gives more info
	 * @param array|null $viewingUser
	 *
	 * @return boolean True if permissions were ok
	 */
	public function moveThreads(array $threadIds, $targetNodeId, array $options = array(), &$errorKey = '', array $viewingUser = null)
	{
		$result = parent::moveThreads($threadIds, $targetNodeId, $options, $errorKey, $viewingUser);
		
		if ($result) // move was successful
		{
			foreach ($threadIds AS $threadID)

			{
				// delete bookmarks that are no longer viewable to their creator
				$postModel = $this->_getPostModel();
				$postIds = array_keys($postModel->getPostsInThread($threadID));
				$bookmarksModel = $this->_getBookmarksModel();
				$result = $bookmarksModel->deleteUnViewableBookmarks($postIds, 'post');
				if (!$result)
					throw new XenForo_Exception('Bookmarks delete error in function moveThreads');
			}
		}		
		
		return $result;
	}
	
	/**
	 * @return Bookmarks_Model_Bookmarks
	 */
	protected function _getBookmarksModel()
	{
		return $this->getModelFromCache('Bookmarks_Model_Bookmarks');
	}
	
	/**
	 * @return XenForo_Model_Post
	 */
	protected function _getPostModel()
	{
		return $this->getModelFromCache('XenForo_Model_Post');
	}
}