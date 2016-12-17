<?php

/**
 * News feed handler for Resource bookmarks
 *
 * @package Bookmarks
 *
 */
class Bookmarks_NewsFeedHandler_Resource extends XenForo_NewsFeedHandler_Abstract
{
	protected $_resourceModel;
	
	/**
	 * Just returns a value for each requested ID
	 * but does no actual DB work
	 *
	 * @param array $contentIds
	 * @param XenForo_Model_NewsFeed $model
	 * @param array $viewingUser Information about the viewing user (keys: user_id, permission_combination_id, permissions)
	 *
	 * @return array
	 */
	public function getContentByIds(array $contentIds, $model, array $viewingUser)
	{
		$resourceModel = $this->_getResourceModel();
		
		$resources = $resourceModel->getResourcesByIds($contentIds, array('join' =>XenResource_Model_Update::FETCH_CATEGORY));
		foreach ($resources AS $id => &$resource)
		{	
			$resource['title'] = XenForo_Helper_String::censorString($resource['title']);
		}
		
		return $resources;
	}
	
	/**
	 * Determines if the given news feed item is viewable.
	 *
	 * @param array $item
	 * @param mixed $content
	 * @param array $viewingUser
	 *
	 * @return boolean
	 */
	public function canViewNewsFeedItem(array $item, $content, array $viewingUser)
	{
		$resourceModel = $this->_getResourceModel();
		
		return $resourceModel->canViewResourceAndContainer(
			$content, $content, $null, $viewingUser
		);
	}
	
	/**
	 * @return XenResource_Model_Resource
	 */
	protected function _getResourceModel()
	{
		if (!$this->_resourceModel)
		{
			$this->_resourceModel = XenForo_Model::create('XenResource_Model_Resource');
		}
		
		return $this->_resourceModel;
	}
}