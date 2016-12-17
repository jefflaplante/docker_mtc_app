<?php

// Class to handle turning raw bookmark events into renderable items
abstract class Bookmarks_Handler_Abstract
{
	/**
	 * Gets data for specified content IDs. This must check viewing permissions!
	 *
	 * @param array $contentIds
	 * @param array $viewingUser
	 *
	 * @return array Keyed by content ID
	 */
	abstract public function getContentData(array $contentIds, array $viewingUser);
	
	/**
	 * Gets the name of the template that will be used when listing bookmark's of this type.
	 *
	 * @return string bookmarks_item_{$contentType}
	 */
	abstract public function getListTemplateName();
	
	/**
	 * Gets the name of the template that will be used for viewing a single bookmark item.
	 *
	 * @return string bookmarks_item_{$contentType}
	 */
	abstract public function getViewTemplateName();
}