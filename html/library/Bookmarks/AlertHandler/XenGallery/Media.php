<?php

class Bookmarks_AlertHandler_XenGallery_Media extends XenForo_AlertHandler_Abstract
{
	/** @var XenGallery_Model_Media */
	protected $_mediaModel = null;

	/** @var XenGallery_Model_Category */
	protected $_categoryModel = null;

	/**
	 * @var Bookmarks_Model_Bookmarks
	 */
	protected $_bookmarksModel = null;

	public function getContentByIds(array $contentIds, $model, $userId, array $viewingUser)
	{
		$items = array();

		if (XenForo_Application::get('options')->bookmarks_media && $viewingUser['permissions']['general']['canUseBookmarks'] == true)
		{
			// includes non visible items
			$items = $this->_getMediaModel()->getMediaByIds($contentIds, array(
				'join' => XenGallery_Model_Media::FETCH_CATEGORY,
				'permissionCombinationId' => $viewingUser['permission_combination_id']
			));

			$itemIds = array_keys($items);

			// hard deleted
			$deletedIds = array_diff($contentIds, $itemIds);

			// keep the content ID as we still want to display the alert for deleted / unviewable contents
			foreach ($deletedIds AS $contentId)
			{
				$items[$contentId] = array(
					'media_id' => $contentId,
					'media_state' => 'not_viewable'
				);
			}
		}

		return $items;
	}

	public function canViewAlert(array $alert, $content, array $viewingUser)
	{
		if ($alert['action'] == 'bookmark' && $content['media_state'] == 'not_viewable')
		{
			return false;
		}
		else if ($alert['action'] == 'edit')
		{
			if ($content['media_state'] == 'not_viewable' || !$alert['extra_data'])
			{
				return false;
			}

			$bookmark = unserialize($alert['extra_data']);
			if (empty($bookmark))
			{
				return false;
			}

			// if the edit bookmark no longer exists due to the content being deleted - then no point showing the alert
			$bookmark = $this->_getBookmarksModel()->getBookmarkById($bookmark['bookmark_id']);
			if (empty($bookmark))
			{
				return false;
			}
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

				if (!empty($item['content']) && $item['content']['media_state'] == 'visible')
				{
					$canViewItem = $this->_getMediaModel()->canViewMediaItem($item['content'], $null);
				}

				if (!$canViewItem)
				{
					$item['content']['deleted_title'] = $item['bookmark']['title']; // lets the template know not to link the title
				}
			}
		}

		unset($item['extra_data']);

		return $item;
	}

	protected function _prepareEdit(array $item)
	{
		//var_dump($item);

		if ($item['extra_data'])
		{
			$item['bookmark'] = unserialize($item['extra_data']);

			if (!empty($item['bookmark']))
			{
				$canViewItem = false;

				if (empty($item['content']) || $item['content']['media_state'] != 'visible')
				{
					$canViewItem = $this->_getMediaModel()->canViewMediaItem($item['content']);
				}

				if (!$canViewItem)
				{
					$item['content']['deleted_title'] = $item['bookmark']['title']; // lets the template know not to link the title
				}

				// fetch current note as it may have changed since this alert was saved
				$bookmark = $this->_getBookmarksModel()->getBookmarkById($item['bookmark']['bookmark_id']);
				if (!empty($bookmark))
				{
					$item['bookmark']['bookmark_note'] = $bookmark['bookmark_note'];
				}
			}
		}

		unset($item['extra_data']);

		return $item;
	}

	/**
	 * @return XenGallery_Model_Media
	 */
	protected function _getMediaModel()
	{
		if (!isset($this->_mediaModel))
		{
			$this->_mediaModel = XenForo_Model::create('XenGallery_Model_Media');
		}

		return $this->_mediaModel;
	}

	/**
	 * @return XenGallery_Model_Category
	 */
	protected function _getCategoryModel()
	{
		if (!isset($this->_categoryModel))
		{
			$this->_categoryModel = XenForo_Model::create('XenGallery_Model_Category');
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