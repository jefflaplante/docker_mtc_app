<?php

/**
 * Handles alerts of bookmarks.
 *
 * @package Bookmarks
 */
class Bookmarks_AlertHandler_DiscussionMessage_Post extends XenForo_AlertHandler_Abstract
{
	/**
	 * @var XenForo_Model_Thread
	 */
	protected $_threadModel = null;

	/**
	 * @var Bookmarks_Model_Bookmarks
	 */	
	protected $_bookmarksModel = null;
	
	
	/**
	 * Fetches the content required by alerts.
	 *
	 * @param array $contentIds
	 * @param XenForo_Model_Alert $model Alert model invoking this
	 * @param integer $userId User ID the alerts are for
	 * @param array $viewingUser Information about the viewing user (keys: user_id, permission_combination_id, permissions)
	 *
	 * @return array
	 */
	public function getContentByIds(array $contentIds, $model, $userId, array $viewingUser)
	{
		$threads = array();
		
		if ($viewingUser['permissions']['general']['canUseBookmarks'] == true)
		{
			$threadModel = $model->getModelFromCache('XenForo_Model_Thread');

			$threads = $threadModel->getThreadsByIds($contentIds, array('permissionCombinationId' => $viewingUser['permission_combination_id']));
			$threadIds = array_keys($threads);
			
			// hard deleted
			$deletedIds = array_diff($contentIds, $threadIds);
			
			// keep the content ID as we still want to display the alert for deleted / unviewable contents
			foreach ($deletedIds AS $contentId)
			{
				$threads[$contentId] = array('thread_id' => $contentId, 'discussion_state' => 'not_viewable');
			}
		}
		
		return $model->unserializePermissionsInList($threads, 'node_permission_cache');
	}
	
	public function canViewAlert(array $alert, $content, array $viewingUser)
	{
		if ($alert['action'] == 'edit' || $alert['action'] == 'merge')
		{
			if ($content['discussion_state'] == 'not_viewable' || empty($alert['extra_data']))
			{
				return false;
			}
			
			$bookmark = unserialize($alert['extra_data']);
			if (empty($bookmark))
				return false;
			
			// if the edit/merge bookmark no longer exists due to the content being deleted - then no point showing the alert
			$bookmark = $this->_getBookmarksModel()->getBookmarkById($bookmark['bookmark_id']);
			if (empty($bookmark))
				return false;
		}
		
		// always return true as we want to view alerts of deleted / unviewables content
		return true;
	}
	
	protected function _prepareDelete(array $item)
	{
		if ($item['extra_data'])
		{
			$item['bookmark'] = unserialize($item['extra_data']);
			
			if (!empty($item['bookmark']))
			{
				if (empty($item['content']) || $item['content']['discussion_state'] != 'visible' || !$this->_getThreadModel()->canViewThreadAndContainer(
					$item['content'], $item['content'], $null, $item['content']['permissions']
				))
				{
					$item['content']['deleted_title'] = $item['bookmark']['title']; // lets the template know not to link the title and uses last known title name
				}
			}
		}
		
		unset($item['extra_data']);
		return $item;
	}
	
	protected function _prepareMerge(array $item)
	{
		if ($item['extra_data'])
		{
			$item['bookmark'] = unserialize($item['extra_data']);
			
			if (!empty($item['bookmark']))
			{
				if (empty($item['content']) || $item['content']['discussion_state'] != 'visible' || !$this->_getThreadModel()->canViewThreadAndContainer(
							$item['content'], $item['content'], $null, $item['content']['permissions']
				))
				{
					$item['content']['deleted_title'] = $item['bookmark']['title']; // lets the template know not to link the title
				}
				
				// fetch current note as it may have changed since this alert was saved
				$bookmark = $this->_getBookmarksModel()->getBookmarkById($item['bookmark']['bookmark_id']);
				if (!empty($bookmark))
					$item['bookmark']['bookmark_note'] = $bookmark['bookmark_note'];
			}
		}
		
		unset($item['extra_data']);
		return $item;
	}
	
	protected function _prepareEdit(array $item)
	{
		if ($item['extra_data'])
		{
			$item['bookmark'] = unserialize($item['extra_data']);
			
			if (!empty($item['bookmark']))
			{
				if (empty($item['content']) || $item['content']['discussion_state'] != 'visible' || !$this->_getThreadModel()->canViewThreadAndContainer(
							$item['content'], $item['content'], $null, $item['content']['permissions']
				))
				{
					$item['content']['deleted_title'] = $item['bookmark']['title']; // lets the template know not to link the title
				}
				
				// fetch current note as it may have changed since this alert was saved
				$bookmark = $this->_getBookmarksModel()->getBookmarkById($item['bookmark']['bookmark_id']);
				if (!empty($bookmark))
					$item['bookmark']['bookmark_note'] = $bookmark['bookmark_note'];
			}
		}
		
		unset($item['extra_data']);
		return $item;
	}
	
	/**
	 * @return XenForo_Model_Thread
	 */
	protected function _getThreadModel()
	{
		if (!isset($this->_threadModel))
		{
			$this->_threadModel = XenForo_Model::create('XenForo_Model_Thread');
		}

		return $this->_threadModel;
	}
	
	/**
	 * @return Bookmarks_Model_Bookmarks
	 */
	protected function _getBookmarksModel()
	{
		if (!isset($this->_bookmarksModel))
		{
			$this->_bookmarksModel = XenForo_Model::create('Bookmarks_Model_Bookmarks');
		}

		return $this->_bookmarksModel;
	}
}