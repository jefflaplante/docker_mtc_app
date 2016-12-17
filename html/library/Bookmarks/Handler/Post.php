<?php

/**
 * Class to handle turning raw discussion-message-related bookmark events
 *
 * @package Bookmarks
 */
class Bookmarks_Handler_Post extends Bookmarks_Handler_Abstract
{
	/**
	 * Gets content data (if viewable).
	 * @see Bookmarks_Handler_Abstract::getContentData()
	 */
	public function getContentData(array $contentIds, array $viewingUser)
	{
		$postModel = $this->_getPostModel();
		
		$posts = $postModel->getPostsByIds($contentIds, array(
			'join' => XenForo_Model_Post::FETCH_THREAD | XenForo_Model_Post::FETCH_FORUM | XenForo_Model_Post::FETCH_USER,
			'permissionCombinationId' => $viewingUser['permission_combination_id']
		));
		
		$posts = $postModel->unserializePermissionsInList($posts, 'node_permission_cache');
		
		foreach ($posts AS $postId => &$post)
		{
			if ($post['message_state'] != 'visible' || $post['discussion_state'] != 'visible' || !$postModel->canViewPostAndContainer(
				$post, $post, $post, $null, $post['permissions'], $viewingUser
			))
			{
				unset($posts[$postId]);
			}
			else
			{
				// does the post user exist
				if (is_null($post['user_id']))
				{
					$post['user_id'] = 0; // do not provide a link to none existing user
				}
				
				// only forward the stuff we actually need for displaying the bookmark
				$bookmark = array();
				$bookmark['post_id'] = $post['post_id'];
				$bookmark['thread_id'] = $post['thread_id'];
				$bookmark['prefix_id'] = $post['prefix_id'];
				$bookmark['user_id'] = $post['user_id'];
				$bookmark['username'] = $post['username'];
				$bookmark['date'] = $post['post_date'];
				$bookmark['attach_count'] = $post['attach_count'];
				$bookmark['message'] = XenForo_Helper_String::censorString($post['message']);
				$bookmark['node_id'] = $post['node_id'];
				$bookmark['title'] = XenForo_Helper_String::censorString($post['title']);
				$bookmark['node_title'] = $post['node_title'];
				
				$post = $bookmark;
			}

		}
		
		$options = XenForo_Application::get('options');

		if ($options->bookmarks_attachments)
		{
			$hasAttachments = false;
	
			foreach ($posts AS &$post)
			{
				if ($post['attach_count'])
				{
					$hasAttachments = true;
					break;
				}
			}
	
			if ($hasAttachments)
			{
				$attachmentModel = XenForo_Model::create('XenForo_Model_Attachment');
	
				$count = 1;
				foreach ($attachmentModel->getAttachmentsByContentIds('post', array_keys($posts)) AS $attachmentId => $attachment)
				{
					$posts[$attachment['content_id']]['attachments'][$attachmentId] = $attachmentModel->prepareAttachment($attachment);
					$count++;
					
					// check for max desired attachments to display
					if ($count > $options->bookmarks_max_attachments)
						break;
				}
			}
		}
		
		return $posts;
	}
	
	/**
	 * Gets the name of the template that will be used when listing bookmark's of this type.
	 *
	 * @return string bookmarks_item_post
	 */
	public function getListTemplateName()
	{
		return 'bookmarks_item_post';
	}
	
	/**
	 * Gets the name of the template that will be used for viewing a single bookmark item.
	 *
	 * @return string bookmarks_view_post
	 */
	public function getViewTemplateName()
	{
		return 'bookmarks_view_post';
	}
	
	/**
	 * @return XenForo_Model_Post
	 */
	protected function _getPostModel()
	{
		return XenForo_Model::create('XenForo_Model_Post');
	}
}