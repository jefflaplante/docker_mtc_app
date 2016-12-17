<?php

/**
 * Controller for profile post-related actions.
 *
 * @package Bookmarks
 */
class Bookmarks_ControllerPublic_ProfilePost extends XFCP_Bookmarks_ControllerPublic_ProfilePost
{
	/**
	 * Updates an existing post.
	 *
	 * @return XenForo_ControllerResponse_Abstract
	 */
	public function actionSave()
	{
		$redirect = parent::actionSave();
		
		if (!empty($redirect))
		{
			// send bookmark alert
			$postId = $this->_input->filterSingle('profile_post_id', XenForo_Input::UINT);
			$bookmarksModel = $this->_getBookmarksModel();
			$bookmarksModel->sendBookmarkAlerts('profile_post', $postId, 'content_edit', 'edit');
		}
		
		return $redirect;
	}
	
	/**
	 * @return Bookmarks_Model_Bookmarks
	 */
	protected function _getBookmarksModel()
	{
		return $this->getModelFromCache('Bookmarks_Model_Bookmarks');
	}
}
