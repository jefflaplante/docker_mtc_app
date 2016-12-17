<?php

/**
 * Cron entry for cleaning up the bookmark_content table. Only needs to be done rarely
 *
 * @package Bookmarks
 */
class Bookmarks_CronEntry_CleanUp
{
	/**
	 * Clean up the table - check for orphaned bookmarks
	 */
	public static function cleanUp()
	{
		$bookmarksModel = XenForo_Model::create('Bookmarks_Model_Bookmarks');
		
		$execute = $bookmarksModel->getCronState(1); // cron_id
		
		if ($execute) // add-on was disabled at some point
		{
			// remove bookmarks that belong to deleted users
			// this can happen when a user is deleted while the AddOn is disabled
			$bookmarksModel->removeDeletedUsers();
			
			// remove bookmarks that belong to deleted posts
			// this can happen when a thread is deleted while the AddOn is disabled
			$bookmarksModel->removeDeletedContent('post');
			
			// remove bookmarks that belong to deleted profile posts
			// this can happen when a profile post is deleted while the AddOn is disabled
			$bookmarksModel->removeDeletedContent('profile_post');
			
			// remove bookmarks that belong to deleted resources
			// this can happen when a showcase item is deleted while the AddOn is disabled
			$bookmarksModel->removeDeletedContent('resource');

			// remove bookmarks that belong to deleted media
			// this can happen when a media item is deleted while the AddOn is disabled
			$bookmarksModel->removeDeletedContent('xengallery_media');
			
			// remove bookmarks that belong to deleted showcase items
			// this can happen when a showcase item is deleted while the AddOn is disabled
			$bookmarksModel->removeDeletedContent('showcase_item');
		
			// remove bookmarks that point to content that is no longer viewable to its creator
			// this can happen when a post is moved or merged while the plugin is disabled	
			$bookmarksModel->removeUnViewableContent();
			
			// reset cron state
			$bookmarksModel->setCronState(0, 1); // first param - execute, second param - cron_id
		}
	}
}