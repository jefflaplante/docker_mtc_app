<?php

/**
 * Handles alerts of bookmarks.
 *
 * @package Bookmarks
 */
class Bookmarks_AlertHandler_XenResource_Resource extends XenForo_AlertHandler_Abstract
{
	/**
	 * @var XenResource_Model_Resource
	 */
	protected $_resourceModel = null;
	
	/**
	 * @var XenResource_Model_Category
	 */
	protected $_categoryModel = null;

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
		$items = array();
		
		if (XenForo_Application::get('options')->bookmarks_resource && $viewingUser['permissions']['general']['canUseBookmarks'] == true)
		{
			// includes non visible items
			$items = $this->_getResourceModel()->getResourcesByIds($contentIds, array(
				'join' => XenResource_Model_Resource::FETCH_CATEGORY,
				'permissionCombinationId' => $viewingUser['permission_combination_id']
			));
			
			$itemIds = array_keys($items);
			
			// hard deleted
			$deletedIds = array_diff($contentIds, $itemIds);
			
			// keep the content ID as we still want to display the alert for deleted / unviewable contents
			foreach ($deletedIds AS $contentId)
			{
				$items[$contentId] = array('resource_id' => $contentId, 'resource_state' => 'not_viewable');
			}
		}
		
		return $model->unserializePermissionsInList($items, 'category_permission_cache');
	}
	
	public function canViewAlert(array $alert, $content, array $viewingUser)
	{
		if ($alert['action'] == 'bookmark' && $content['resource_state'] == 'not_viewable')
		{
			return false;
		}
		else if ($alert['action'] == 'edit')
		{
			if ($content['resource_state'] == 'not_viewable' || !$alert['extra_data'])
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
			
			if (!empty($item['bookmark']))
			{
				$canViewItem = false;
				
				if (!empty($item['content']) && $item['content']['resource_state'] == 'visible')
				{
					$canViewItem = $this->_getResourceModel()->canViewResource($item['content'], $item['content'], $null, null, $item['content']['permissions']);
				}
				
				if (!$canViewItem)
				{
					$item['content']['deleted_title'] = $item['bookmark']['title']; // lets the template know not to link the title
				}
				
				// category
				$categoryId = $item['bookmark']['category_id'];
				if ($categoryId)
				{
					$categoryModel = $this->_getCategoryModel();
					$category = $categoryModel->getCategoryById($categoryId);
					
					if (!empty($category) && $categoryModel->canViewCategory($category, $null))
					{
						$item['content']['category_title'] = $category['category_title']; // get current title in case it has changed since bookmark was saved
						$item['content']['category_id'] = $categoryId;
					}
					else
					{
						$item['content']['deleted_category_title'] = $item['bookmark']['category_title'];
					}
				}
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
				$canViewItem = false;
				
				if (empty($item['content']) || $item['content']['resource_state'] != 'visible')
				{
					$canViewItem = $this->_getResourceModel()->canViewResource($item['content'], $item['content'], $null, null, $item['content']['permissions']);
				}
				
				if (!$canViewItem)
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
	 * @return XenResource_Model_Resource
	 */
	protected function _getResourceModel()
	{
		if (!isset($this->_resourceModel))
		{
			$this->_resourceModel = XenForo_Model::create('XenResource_Model_Resource');
		}

		return $this->_resourceModel;
	}
	
	/**
	 * @return XenResource_Model_Category
	 */
	protected function _getCategoryModel()
	{
		if (!isset($this->_categoryModel))
		{
			$this->_categoryModel = XenForo_Model::create('XenResource_Model_Category');
		}

		return $this->_categoryModel;
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