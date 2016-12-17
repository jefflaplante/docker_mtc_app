<?php

/**
 * Handles alerts of bookmarks.
 *
 * @package Bookmarks
 */
class Bookmarks_AlertHandler_Showcase_Item extends XenForo_AlertHandler_Abstract
{
	/**
	 * @var NFLJ_Showcase_Model_Item
	 */
	protected $_scItemModel = null;
	
	/**
	 * @var NFLJ_Showcase_Model_Category
	 */
	protected $_scCategoryModel = null;

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
		
		if (XenForo_Application::get('options')->bookmarks_showcase && $viewingUser['permissions']['general']['canUseBookmarks'] == true)
		{
			// includes non visible items
			$items = $this->_getSCItemModel()->getItemsByIds($contentIds, array(
				'join' => NFLJ_Showcase_Model_Item::FETCH_CATEGORY | NFLJ_Showcase_Model_Item::FETCH_USER,
				'permissionCombinationId' => $viewingUser['permission_combination_id']
			));
			
			$itemIds = array_keys($items);
			
			// hard deleted
			$deletedIds = array_diff($contentIds, $itemIds);
			
			// keep the content ID as we still want to display the alert for deleted / unviewable contents
			foreach ($deletedIds AS $contentId)
			{
				$items[$contentId] = array('item_id' => $contentId, 'item_state' => 'not_viewable');
			}
		}
		
		return $model->unserializePermissionsInList($items, 'category_permission_cache');
	}
	
	public function canViewAlert(array $alert, $content, array $viewingUser)
	{
		if ($alert['action'] == 'bookmark' && $content['item_state'] == 'not_viewable')
		{
			return false;
		}
		else if ($alert['action'] == 'edit')
		{
			if ($content['item_state'] == 'not_viewable' || !$alert['extra_data'])
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
		
		$canViewItem = false;
		
		if (!empty($item['content']) && $item['content']['item_state'] == 'visible')
		{
			$addOns = XenForo_Application::get('addOns');
			if (isset($addOns['NFLJ_Showcase']) && $addOns['NFLJ_Showcase'] < 40)
			{
				$canViewItem = $this->_getSCItemModel()->canViewItem($item['content']);
			}
			else
			{
				$canViewItem = $this->_getSCItemModel()->canViewItem($item['content'], array('category_id' => $item['content']['category_id']), $null, null, $item['content']['permissions']);
			}
		}
		
		if (!$canViewItem && !empty($item['bookmark']))
		{
			$item['content']['deleted_title'] = $item['bookmark']['title'];
			
			// category
			$categoryId = $item['bookmark']['category_id'];
			if ($categoryId)
			{
				$categoryModel = $this->_getSCCategoryModel();
				$category = $categoryModel->getCategoryById($categoryId);
				
				if (!empty($category) && $categoryModel->canViewCategory($category, $null))
				{
					$item['content']['category_title'] = $category['category_name']; // get current title in case it has changed since bookmark was saved
					$item['content']['category_id'] = $categoryId;
				}
				else
				{
					$item['content']['deleted_category_title'] = $item['bookmark']['category_title'];
				}
			}
		}
		else
		{
			$item['content']['title'] = $item['content']['item_name'];
			$item['content']['category_title'] = $item['content']['category_name'];
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
				
				if (!empty($item['content']) && $item['content']['item_state'] == 'visible')
				{
					$addOns = XenForo_Application::get('addOns');
					if (isset($addOns['NFLJ_Showcase']) && $addOns['NFLJ_Showcase'] < 40)
					{
						$canViewItem = $this->_getSCItemModel()->canViewItem($item['content']);
					}
					else
					{
						$canViewItem = $this->_getSCItemModel()->canViewItem($item['content'], array('category_id' => $item['content']['category_id']), $null, null, $item['content']['permissions']);
					}
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
	 * @return NFLJ_Showcase_Model_Item
	 */
	protected function _getSCItemModel()
	{
		if (!isset($this->_scItemModel))
		{
			$this->_scItemModel = XenForo_Model::create('NFLJ_Showcase_Model_Item');
		}

		return $this->_scItemModel;
	}
	
	/**
	 * @return NFLJ_Showcase_Model_Category
	 */
	protected function _getSCCategoryModel()
	{
		if (!isset($this->_scCategoryModel))
		{
			$this->_scCategoryModel = XenForo_Model::create('NFLJ_Showcase_Model_Category');
		}

		return $this->_scCategoryModel;
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