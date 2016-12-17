<?php

/**
 * Model for threads.
 *
 * @package Bookmarks
 */
class Bookmarks_Model_Thread extends XFCP_Bookmarks_Model_Thread
{
	/**
	 * Merge multiple threads into a single thread
	 *
	 * Delete bookmarks that are no longer viewable to their creator
	 *
	 * @param array $threads
	 * @param integer $targetThreadId
	 * @param array $options
	 *
	 * @return boolean|array False if failure, otherwise thread array of merged thread
	 */
	public function mergeThreads(array $threads, $targetThreadId, array $options = array())
	{
		$targetThread = parent::mergeThreads($threads, $targetThreadId, $options);
		
		if (!empty($targetThread))
		{
			// delete bookmarks that are no longer viewable to their creator
			$postModel = $this->_getPostModel();
			$postIds = array_keys($postModel->getPostsInThread($targetThread['thread_id']));
			$bookmarksModel = $this->_getBookmarksModel();
			$result = $bookmarksModel->deleteUnViewableBookmarks($postIds, 'post');
			if (!$result)
				throw new XenForo_Exception('Bookmarks delete error in function mergeThreads');
		}
			
		return $targetThread;
	}
	
	/**
	 * @return Bookmarks_Model_Bookmarks
	 */
	protected function _getBookmarksModel()
	{
		return $this->getModelFromCache('Bookmarks_Model_Bookmarks');
	}
}