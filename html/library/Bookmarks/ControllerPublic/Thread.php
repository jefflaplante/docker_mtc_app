<?php

/**
 * Controller for thread-related actions.
 *
 * @package Bookmarks
 */
class Bookmarks_ControllerPublic_Thread extends XFCP_Bookmarks_ControllerPublic_Thread
{
    public function actionIndex()
    {
        $visitor = XenForo_Visitor::getInstance();
        if ($visitor['user_id'])
        {
            $viewObject = parent::actionIndex();

            if (($viewObject instanceof XenForo_ControllerResponse_View) && !empty($viewObject->params) && isset($viewObject->params['thread']))
            {
                $viewObject->params['canBookmark'] = $visitor->hasPermission('general', 'canUseBookmarks');
            }

            return $viewObject;
        }

        return parent::actionIndex();
    }
	/**
	 * Moves a thread to a different forum.
	 *
	 * @return XenForo_ControllerResponse_Abstract
	 */
	public function actionMove()
	{
		$redirect = parent::actionMove();
		
		if (!empty($redirect))
		{
			// send bookmark alert
			$threadId = $this->_input->filterSingle('thread_id', XenForo_Input::UINT);
			
			// delete bookmarks that are no longer viewable to their creator
			$postModel = $this->_getPostModel();
			$postIds = array_keys($postModel->getPostsInThread($threadId, array('limit' => 100000, 'offset' => 0)));
			$bookmarksModel = $this->_getBookmarksModel();
			$result = $bookmarksModel->deleteUnViewableBookmarks($postIds, 'post');
			if (!$result)
				throw new XenForo_Exception('Bookmarks delete error in function controller public move');
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
	
	/**
	 * @return XenForo_Model_Post
	 */
	protected function _getPostModel()
	{
		return $this->getModelFromCache('XenForo_Model_Post');
	}
}