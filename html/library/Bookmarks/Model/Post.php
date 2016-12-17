<?php

/**
 * Model for posts.
 *
 * @package Bookmarks
 */
class Bookmarks_Model_Post extends XFCP_Bookmarks_Model_Post
{
	/**
	 * Moves the specified posts (in the given threads) to a new thread. The
	 * new thread will be created in this function.
	 *
	 * Delete bookmarks that are no longer viewable to their creator
	 *
	 * @param array $posts
	 * @param array $sourceThreads
	 * @param array $newThread Information about the new thread; first/last/poster info filled in automatically
	 * @param array $options Options to control behavior
	 *
	 * @return array|false New thread ID or false
	 */
	public function movePostsToNewThread(array $posts, array $sourceThreads, array $newThread, array $options = array())
	{
		$newThread = parent::movePostsToNewThread($posts, $sourceThreads, $newThread, $options);
		
		if (!empty($newThread))
		{
			// delete bookmarks that are no longer viewable to their creator
			$postIds = array_keys($this->getPostsInThread($newThread['thread_id']));
			$bookmarksModel = $this->_getBookmarksModel();
			$result = $bookmarksModel->deleteUnViewableBookmarks($postIds, 'post');
			if (!$result)
				throw new XenForo_Exception('Bookmarks delete error in function movePostsToNewThread');
		}
		
		return $newThread;
	}

	/**
	 * Merges specified posts (from given threads) into a target post and updates the text.
	 * The target post must be in the list of given posts.
	 *
	 * Keep bookmarks on post merge - point them to target post
	 *
	 * @param array $posts
	 * @param array $threads
	 * @param integer $targetPostId
	 * @param string $newMessage
	 * @param array $options
	 *
	 * @return boolean
	 */
	public function mergePosts(array $posts, array $threads, $targetPostId, $newMessage, $options = array())
	{
		if ($posts && isset($posts[$targetPostId]))
		{
			$targetPost = $posts[$targetPostId];

			$targetPostUserId = $targetPost['user_id'];
			$postIds = array_keys($posts);
	
			// grab all corresponding bookmarks before they are deleted in the parent function
			$bookmarksModel = $this->_getBookmarksModel();
			$bookmarks = $bookmarksModel->getBookmarksByContentTypeIds($postIds, 'post');
			
			// GROUP by bookmark_user_id
			$bookmarksGrouped = array();

			foreach ($bookmarks AS $bookmark)
			{
				$bookmarksGrouped[$bookmark['bookmark_user_id']][$bookmark['content_id']] = $bookmark;
			}
			
			$deleteArray = array();
						
			foreach ($bookmarksGrouped AS $bookmarkUserId => $items)
			{
				// check whether the target post is viewable to the bookmark creator
				if ($bookmarksModel->isContentViewableToBookmarkCreator($bookmarkUserId, $targetPostId, 'post'))
				{	
					// merge all the bookmark notes
					$mergedNote = '';
					foreach ($items AS $item)
					{
						if (isset($item['bookmark_note']))
						{
							if (!empty($mergedNote))
								$mergedNote .= " | ";
							
							$mergedNote .= $item['bookmark_note'];
						}
						
						$itemId = $item['content_id'];
						if ($itemId != $targetPostId)
							$deleteArray[$itemId] = $itemId;
					}
					
					if (!array_key_exists($targetPostId, $items))
					{
						// create a new bookmark for the target post
						$errorKey = '';
						$bookmarksModel->bookmarkSave('post', $targetPostId, $targetPostUserId, $bookmarkUserId, $errorKey, $mergedNote);
						
						if ($errorKey)
						{
							$errorKey = $errorKey instanceof XenForo_Phrase ? $errorKey : new XenForo_Phrase($errorKey);
							throw new XenForo_Exception($errorKey);
						}
					}
					else // bookmark already exists for target post - so update with $mergedNote
					{
						if ($mergedNote != $items[$targetPostId]['bookmark_note']) // note has changed
						{
							$errorKey = '';
							$bookmarksModel->bookmarkUpdateById(array('bookmark_note' => $mergedNote), $items[$targetPostId]['bookmark_id'], $errorKey);
							
							if ($errorKey)
							{
								$errorKey = $errorKey instanceof XenForo_Phrase ? $errorKey : new XenForo_Phrase($errorKey);
								throw new XenForo_Exception($errorKey);
							}
						}
					}
				}
			}
			
			// delete the bookmarks that point to the merging posts that are about to be deleted
			// this prevents a 'delete' alert to be sent out on those bookmarks
			foreach ($deleteArray AS $deleteId)
				$bookmarksModel->deleteAllByContentTypeId('post', $deleteId);
				
			// bookmark alert
			$bookmarksModel->sendBookmarkAlerts('post', $targetPostId, 'content_merge', 'merge');
		}
		
		// we call the parent last assuming all will be OK
		// we do this because we require the bookmarks intact for 'sendBookmarkAlert'
		// as 'mergePosts' will delete bookmarks that point to the merging posts
		return parent::mergePosts($posts, $threads, $targetPostId, $newMessage, $options);
	}
	
	/**
	 * @return Bookmarks_Model_Bookmarks
	 */
	protected function _getBookmarksModel()
	{
		return $this->getModelFromCache('Bookmarks_Model_Bookmarks');
	}
}