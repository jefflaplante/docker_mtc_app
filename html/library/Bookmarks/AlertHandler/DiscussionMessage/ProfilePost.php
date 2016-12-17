<?php

/**
 * Alert handler for bookmarks.
 *
 * @package Bookmarks
 */
class Bookmarks_AlertHandler_DiscussionMessage_ProfilePost extends XenForo_AlertHandler_Abstract
{
	/**
	 * @var XenForo_Model_UserProfile
	 */	
	protected $_userProfileModel = null;
	
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
		$users = array();
		
		if (XenForo_Application::get('options')->bookmarks_profile && $viewingUser['permissions']['general']['canUseBookmarks'] == true)
		{
			foreach ($contentIds AS $key => $contentId)
			{
				if ($contentId == $viewingUser['user_id'])
				{
					$users[$viewingUser['user_id']] = $viewingUser;
					unset($contentIds[$key]);
					break;
				}
			}
			
			$userModel = $model->getModelFromCache('XenForo_Model_User');
			$users = $users + $userModel->getUsersByIds($contentIds, array('join' => XenForo_Model_User::FETCH_USER_FULL));
			
			$userIds = array_keys($users);
			
			// hard deleted
			$deletedIds = array_diff($contentIds, $userIds);
			
			// keep the content ID as we still want to display the alert for deleted / unviewable contents
			foreach ($deletedIds AS $deleteId)
			{
				$users[$deleteId] = array('user_id' => $deleteId, 'user_state' => 'not_viewable');
			}
		}
		
		return $users;
	}
	
	public function canViewAlert(array $alert, $content, array $viewingUser)
	{
		if ($alert['action'] == 'bookmark' )
		{
			if (!$this->_getUserProfileModel()->canViewFullUserProfile($content, $null))
				return false;
		}
		else if ($alert['action'] == 'edit')
		{
			if ($content['user_state'] == 'not_viewable' || !$alert['extra_data'])
			{
				return false;
			}
			
			$bookmark = unserialize($alert['extra_data']);
			if (empty($bookmark))
				return false;
			
			// if the edit bookmark no longer exists due to the content being deleted - then no point showing the alert
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
	 * @return XenForo_Model_UserProfile
	 */
	protected function _getUserProfileModel()
	{
		if (!isset($this->_userProfileModel))
		{
			$this->_userProfileModel = XenForo_Model::create('XenForo_Model_UserProfile');
		}
		
		return $this->_userProfileModel;
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