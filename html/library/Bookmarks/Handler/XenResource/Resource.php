<?php

/**
 * Class to handle turning raw resource-related bookmark events
 *
 * @package Bookmarks
 */
class Bookmarks_Handler_XenResource_Resource extends Bookmarks_Handler_Abstract
{
	/**
	 * Gets content data (if viewable).
	 * @see Bookmarks_Handler_Abstract::getContentData()
	 */
	public function getContentData(array $contentIds, array $viewingUser)
	{
		$resourceModel = $this->_getResourceModel();
		$items = $resourceModel->getResourcesByIds($contentIds, array('join' => XenResource_Model_Resource::FETCH_DESCRIPTION | XenResource_Model_Resource::FETCH_CATEGORY));
		
		foreach ($items AS $itemId => &$item)
		{
			$errorPhraseKey = '';
			if ($item['resource_state'] != 'visible' || !$resourceModel->canViewResource($item, $item, $errorPhraseKey, $viewingUser))
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
				$bookmark['resource_id'] = $item['resource_id'];
				$bookmark['user_id'] = $item['user_id'];
				$bookmark['username'] = $item['username'];
				$bookmark['date'] = $item['resource_date'];
				$bookmark['message'] = XenForo_Helper_String::censorString($item['description']);
				$bookmark['title'] = XenForo_Helper_String::censorString($item['title']);
				$bookmark['category_id'] = $item['resource_category_id'];
				$bookmark['category_title'] = $item['category_title'];
				
				$item = $bookmark;
			}
		}
		
		if (!empty($items))
		{
			$options = XenForo_Application::get('options');

			if ($options->bookmarks_attachments)
			{
				$attachmentModel = XenForo_Model::create('XenForo_Model_Attachment');
	
				$count = 1;
				foreach ($attachmentModel->getAttachmentsByContentIds('resource_update', array_keys($items)) AS $attachmentId => $attachment)
				{
					$items[$attachment['content_id']]['attachments'][$attachmentId] = $attachmentModel->prepareAttachment($attachment);
					$count++;
					
					// check for max desired attachments to display
					if ($count > $options->bookmarks_max_attachments)
						break;
				}
			}
		}
		
		return $items;
	}
	
	/**
	 * Gets the name of the template that will be used when listing bookmark's of this type.
	 *
	 * @return string bookmarks_item_resource
	 */
	public function getListTemplateName()
	{
		return 'bookmarks_item_resource';
	}
	
	/**
	 * Gets the name of the template that will be used for viewing a single bookmark item.
	 *
	 * @return string bookmarks_view_resource
	 */
	public function getViewTemplateName()
	{
		return 'bookmarks_view_resource';
	}
	
    /**
     * @return XenResource_Model_Resource
     */ 	
	protected function _getResourceModel()
	{
		return XenForo_Model::create('XenResource_Model_Resource');
	}
}