<?php

/**
 * Class to handle turning raw showcase-related bookmark events
 *
 * @package Bookmarks
 */
class Bookmarks_Handler_Showcase_Item extends Bookmarks_Handler_Abstract
{
	/**
	 * Gets content data (if viewable).
	 * @see Bookmarks_Handler_Abstract::getContentData()
	 */
	public function getContentData(array $contentIds, array $viewingUser)
	{
		$addOns = XenForo_Application::get('addOns');
		if (!isset($addOns['NFLJ_Showcase']))
		{
			return array();
		}
		
		$scItemModel = $this->_getSCItemModel();
		$items = $scItemModel->getItemsByIds($contentIds, array('join' => NFLJ_Showcase_Model_Item::FETCH_CATEGORY | NFLJ_Showcase_Model_Item::FETCH_USER));
		
		foreach ($items AS $itemId => &$item)
		{
			if ($item['item_state'] != 'visible')
			{
				$canViewItem = false;
			}
			else if ($addOns['NFLJ_Showcase'] < 40)
			{
				$canViewItem = $scItemModel->canViewItem($item, $viewingUser);
			}
			else
			{
				$errorPhraseKey = '';
				$canViewItem = $scItemModel->canViewItem($item, array('category_id' => $item['category_id']), $errorPhraseKey, $viewingUser);
			}
			
			if (!$canViewItem)
			{
				unset($items[$itemId]);
			}
			else
			{
				// does the post user exist
				if (is_null($item['user_id']))
				{
					$item['user_id'] = 0; // do not provide a link to none existing user
				}
				
				// only forward the stuff we actually need for displaying the bookmark
				$bookmark = array();
				$bookmark['item_id'] = $item['item_id'];
				
				if ($addOns['NFLJ_Showcase'] < 40)
					$bookmark['preview_url'] = XenForo_Link::buildPublicLink('showcase/preview', $bookmark);
				else
					$bookmark['preview_url'] = XenForo_Link::buildPublicLink('showcase/quick-preview', $bookmark);
				
				$bookmark['user_id'] = $item['user_id'];
				$bookmark['username'] = $item['username'];
				$bookmark['date'] = $item['date_added'];
				$bookmark['message'] = XenForo_Helper_String::censorString($item['message']);
				$bookmark['title'] = XenForo_Helper_String::censorString($item['item_name']);
				$bookmark['category_id'] = $item['category_id'];
				$bookmark['category_title'] = $item['category_name'];
				
				$item = $bookmark;
			}
		}
		
		return $items;
	}
	
	/**
	 * Gets the name of the template that will be used when listing bookmark's of this type.
	 *
	 * @return string bookmarks_item_showcase
	 */
	public function getListTemplateName()
	{
		return 'bookmarks_item_showcase_item';
	}
	
	/**
	 * Gets the name of the template that will be used for viewing a single bookmark item.
	 *
	 * @return string bookmarks_view_showcase
	 */
	public function getViewTemplateName()
	{
		return 'bookmarks_view_showcase_item';
	}
	
    /**
     * @return NFLJ_Showcase_Model_Item
     */ 	
	protected function _getSCItemModel()
	{
		return XenForo_Model::create('NFLJ_Showcase_Model_Item');
	}
}