<?php

/**
 * Class to handle turning raw discussion-message-related bookmark events
 *
 * @package Bookmarks
 */
class Bookmarks_Handler_ProfilePost extends Bookmarks_Handler_Abstract
{
	/**
	 * Gets content data (if viewable).
	 * @see Bookmarks_Handler_Abstract::getContentData()
	 */
	public function getContentData(array $contentIds, array $viewingUser)
	{
		$profilePostModel = $this->_getProfilePostModel();
		
		$profilePosts = $profilePostModel->getProfilePostsByIds($contentIds, array(
			'join' => XenForo_Model_ProfilePost::FETCH_USER_RECEIVER | XenForo_Model_ProfilePost::FETCH_USER_POSTER
		));
		
		$userIds = array();
		
		foreach ($profilePosts AS $profilePost)
		{
			$userIds[$profilePost['profile_user_id']] = true;
		}
		
		$userModel = $profilePostModel->getModelFromCache('XenForo_Model_User');
		
		$users = $userModel->getUsersByIds(array_keys($userIds), array(
			'join' => XenForo_Model_User::FETCH_USER_PRIVACY,
			'followingUserId' => $viewingUser['user_id']
		));
		
		foreach ($profilePosts AS $key => &$profilePost)
		{
			if (!isset($users[$profilePost['profile_user_id']]))
			{
				unset($profilePosts[$key]);
			}
			else
			{
				$user = $users[$profilePost['profile_user_id']];
				
				if ($profilePost['message_state'] != 'visible' || !$profilePostModel->canViewProfilePostAndContainer(
					$profilePost, $user, $null, $viewingUser
				))
				{
					unset($profilePosts[$key]);
				}
				else
				{
					// does the post user exist
					if (is_null($profilePost['user_id']))
						$user['user_id'] = 0; // do not provide a link to none existing user
					
					// only forward the stuff we actually need for displaying the bookmark
					$bookmark = array();
					$bookmark['profile_post_id'] = $profilePost['profile_post_id'];
					$bookmark['profile_user_id'] = $profilePost['profile_user_id'];
					$bookmark['user_id'] = $profilePost['user_id'];
					$bookmark['username'] = $profilePost['username'];
					$bookmark['date'] = $profilePost['post_date'];
					$bookmark['message'] = XenForo_Helper_String::censorString($profilePost['message']);
					$bookmark['attach_count'] = $profilePost['attach_count'];
					$bookmark['profile_username'] = $profilePost['profile_username'];
					
					$profilePost = $bookmark;
				}
			}
		}
		
		return $profilePosts;
	}
	
	/**
	 * Gets the name of the template that will be used when listing bookmark's of this type.
	 *
	 * @return string bookmarks_item_post
	 */
	public function getListTemplateName()
	{
		return 'bookmarks_item_profile_post';
	}
	
	/**
	 * Gets the name of the template that will be used for viewing a single bookmark item.
	 *
	 * @return string bookmarks_item_post
	 */
	public function getViewTemplateName()
	{
		return 'bookmarks_view_profile_post';
	}
	
	/**
	 * @return XenForo_Model_ProfilePost
	 */
	protected function _getProfilePostModel()
	{
		return XenForo_Model::create('XenForo_Model_ProfilePost');
	}
}