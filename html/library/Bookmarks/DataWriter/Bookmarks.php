<?php

/**
* Data writer for bookmark content.
*
* @package Bookmarks
*/
class Bookmarks_DataWriter_Bookmarks extends XenForo_DataWriter
{
	/**
	* Gets the fields that are defined for the table. See parent for explanation.
	*
	* @return array
	*/
	protected function _getFields()
	{
		return array(
				'bookmark_content'	=> array(
				'bookmark_id'		=> array('type' => self::TYPE_UINT, 'autoIncrement' => true),
				'bookmark_tag'		=> array('type' => self::TYPE_STRING, 'default' => '', 'maxLength' => 25),
				'content_type'  	=> array('type' => self::TYPE_STRING, 'maxLength' => 25, 'required' => true),
				'content_id'   	    => array('type' => self::TYPE_UINT, 'required' => true),
				'content_user_id'   => array('type' => self::TYPE_UINT, 'required' => true),
				'bookmark_user_id'  => array('type' => self::TYPE_UINT, 'default' => XenForo_Visitor::getUserId()),
				'bookmark_date'		=> array('type' => self::TYPE_UINT, 'default' => XenForo_Application::$time),
				'bookmark_note' 	=> array('type' => self::TYPE_STRING, 'default' => '', 'maxLength' => 150),
				'public'        	=> array('type' => self::TYPE_UINT, 'default' => 0),
				'sticky'        	=> array('type' => self::TYPE_UINT, 'default' => 0),
				'quick_link'      	=> array('type' => self::TYPE_UINT, 'default' => 0)
			)
		);
	}
	
	/**
	* Gets the actual existing data out of data that was passed in. See parent for explanation.
	*
	* @param mixed
	*
	* @return array|false
	*/
	protected function _getExistingData($data)
	{
		if ($bookmarkId = $this->_getExistingPrimaryKey($data))
		{
			return array('bookmark_content' => $this->_getBookmarksModel()->getBookmarkById($bookmarkId));
		}
		else if (!is_array($data))
		{
			return false;
		}
		else if (isset($data['content_type'], $data['content_id'], $data['bookmark_user_id']))
		{
			$contentType = $data['content_type'];
			$contentId = $data['content_id'];
			$userId = $data['bookmark_user_id'];
			return array('bookmark_content' => $this->_getBookmarksModel()->getBookmarkByContent($contentType, $contentId, $userId));
		}
		
		return false;
	}
	
	/**
	* Gets SQL condition to update the existing record.
	*
	* @return string
	*/
	protected function _getUpdateCondition($tableName)
	{
		return 'bookmark_id = ' . $this->_db->quote($this->getExisting('bookmark_id'));
	}
	
	/**
	 * @return Bookmarks_Model_Bookmarks
	 */
	protected function _getBookmarksModel()
	{
		return $this->getModelFromCache('Bookmarks_Model_Bookmarks');
	}
}