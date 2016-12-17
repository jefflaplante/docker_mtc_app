<?php

/**
 * Controller for post-related actions.
 *
 * @package Bookmarks
 */
class Bookmarks_ControllerPublic_Post extends XFCP_Bookmarks_ControllerPublic_Post
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
			$postId = $this->_input->filterSingle('post_id', XenForo_Input::UINT);
			$bookmarksModel = $this->_getBookmarksModel();
			$bookmarksModel->sendBookmarkAlerts('post', $postId, 'content_edit', 'edit');
		}
		
		return $redirect;
	}

	/**
	 * Updates an existing post.
	 */
	public function actionSaveInline()
	{
		$redirect = parent::actionSaveInline();
		
		if (!empty($redirect))
		{
			if (!$this->_input->inRequest('more_options'))
			{
				// send bookmark alert
				$postId = $this->_input->filterSingle('post_id', XenForo_Input::UINT);
				$bookmarksModel = $this->_getBookmarksModel();
				$bookmarksModel->sendBookmarkAlerts('post', $postId, 'content_edit', 'edit');
			}
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
