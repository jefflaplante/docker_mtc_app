<?php

/**
* Data writer for add-ons.
*
* @package Bookmarks
*/
class Bookmarks_DataWriter_AddOn extends XFCP_Bookmarks_DataWriter_AddOn
{
	/**
	 * Post-save handling.
	 */
	protected function _postSave()
	{
		parent::_postSave();
		
		if ($this->isUpdate() && $this->isChanged('active'))
		{	
			if ($this->get('addon_id') == 'Bookmarks' && $this->get('active') === 0)
			{
				$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
				$bookmarksModel->setCronState(1, 1); // first param - execute, second param - cron_id
			}
			else if ($this->get('addon_id') == 'XenResource' && $this->get('active') === 0)
			{
				// turn off the option to bookmark resources
				$dw = XenForo_DataWriter::create('XenForo_DataWriter_Option');
				$dw->setExistingData('bookmarks_resource');
				$dw->set('option_value', 0);
				$dw->save();				
			}
			else if ($this->get('addon_id') == 'NFLJ_Showcase' && $this->get('active') === 0)
			{
				// turn off the option to bookmark showcase items
				$dw = XenForo_DataWriter::create('XenForo_DataWriter_Option');
				$dw->setExistingData('bookmarks_showcase');
				$dw->set('option_value', 0);
				$dw->save();				
			}
		}
	}
	
	/**
	 * Post-delete handling.
	 */
	protected function _postDelete()
	{
		parent::_postDelete();
		
		if ($this->get('addon_id') == 'XenResource')
		{
			// turn off the option to bookmark resources
			$dw = XenForo_DataWriter::create('XenForo_DataWriter_Option');
			$dw->setExistingData('bookmarks_resource');
			$dw->set('option_value', 0);
			$dw->save();
			
			// delete all resource bookmarks
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
			$bookmarksModel->deleteAllByContentType('resource');
			
			// delete all resource alerts
			$type = 'bookmark_resource';
			$db = $this->_db;
			$db->delete('xf_user_alert', 'content_type = '. $db->quote($type));
			
			// delete all resource news feeds
			$type = 'resource';
			$action = 'bookmark';
			$db = $this->_db;
			$db->delete('xf_news_feed', 'content_type = '. $db->quote($type) . ' AND action = '. $db->quote($action));
		}
		else if ($this->get('addon_id') == 'NFLJ_Showcase')
		{
			// turn off the option to bookmark showcase items
			$dw = XenForo_DataWriter::create('XenForo_DataWriter_Option');
			$dw->setExistingData('bookmarks_showcase');
			$dw->set('option_value', 0);
			$dw->save();
			
			// delete all showcase item bookmarks
			$bookmarksModel = $this->getModelFromCache('Bookmarks_Model_Bookmarks');
			$bookmarksModel->deleteAllByContentType('showcase_item');
			
			// delete all showcase item alerts
			$type = 'bookmark_showcase_item';
			$db = $this->_db;
			$db->delete('xf_user_alert', 'content_type = '. $db->quote($type));
			
			// delete all showcase item news feeds
			$type = 'showcase_item';
			$action = 'bookmark';
			$db = $this->_db;
			$db->delete('xf_news_feed', 'content_type = '. $db->quote($type) . ' AND action = '. $db->quote($action));
		}
	}
}