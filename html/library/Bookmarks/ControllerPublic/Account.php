<?php

/**
 * ControllerPublic class for displaying Bookmark items
 *
 * @package Bookmarks
 */
class Bookmarks_ControllerPublic_Account extends XFCP_Bookmarks_ControllerPublic_Account
{
	/**
	 * Show a list of Bookmark content items
	 * @return Bookmarks_ViewPublic_Bookmarks_View
	 */
	public function actionBookmarks()
	{
		$visitor = XenForo_Visitor::getInstance();
		if (!$visitor->hasPermission('general', 'canUseBookmarks'))
		{
			return $this->responseNoPermission();
		}

		$userId = $visitor['user_id'];
		$bookmarksModel = $this->_getBookmarksModel();

		if ($bookmarksModel->hasBookmarks($userId))
		{
			$pageType = $this->_input->filterSingle('type', XenForo_Input::STRING);

			if ($pageType == 'post')
			{
				$postPage = $this->_input->filterSingle('page', XenForo_Input::UINT);
				$profilePostPage = $this->_input->filterSingle('profilePostPage', XenForo_Input::UINT);
				$showcaseItemPage = $this->_input->filterSingle('showcaseItemPage', XenForo_Input::UINT);
				$resourcePage = $this->_input->filterSingle('resourcePage', XenForo_Input::UINT);
				$mediaPage = $this->_input->filterSingle('page', XenForo_Input::UINT);
			}
			else if ($pageType == 'resource')
			{
				$resourcePage = $this->_input->filterSingle('page', XenForo_Input::UINT);
				$mediaPage = $this->_input->filterSingle('page', XenForo_Input::UINT);
				$postPage = $this->_input->filterSingle('postPage', XenForo_Input::UINT);
				$profilePostPage = $this->_input->filterSingle('profilePostPage', XenForo_Input::UINT);
				$showcaseItemPage = $this->_input->filterSingle('showcaseItemPage', XenForo_Input::UINT);
			}
			else if ($pageType == 'xengallery_media')
			{
				$mediaPage = $this->_input->filterSingle('page', XenForo_Input::UINT);
				$resourcePage = $this->_input->filterSingle('resourcePage', XenForo_Input::UINT);
				$postPage = $this->_input->filterSingle('postPage', XenForo_Input::UINT);
				$profilePostPage = $this->_input->filterSingle('profilePostPage', XenForo_Input::UINT);
				$showcaseItemPage = $this->_input->filterSingle('showcaseItemPage', XenForo_Input::UINT);
			}
			else if ($pageType == 'showcase_item')
			{
				$showcaseItemPage = $this->_input->filterSingle('page', XenForo_Input::UINT);
				$postPage = $this->_input->filterSingle('postPage', XenForo_Input::UINT);
				$profilePostPage = $this->_input->filterSingle('profilePostPage', XenForo_Input::UINT);
				$resourcePage = $this->_input->filterSingle('resourcePage', XenForo_Input::UINT);
				$mediaPage = $this->_input->filterSingle('page', XenForo_Input::UINT);
			}
			else // profile_post
			{
				$profilePostPage = $this->_input->filterSingle('page', XenForo_Input::UINT);
				$postPage = $this->_input->filterSingle('postPage', XenForo_Input::UINT);
				$showcaseItemPage = $this->_input->filterSingle('showcaseItemPage', XenForo_Input::UINT);
				$resourcePage = $this->_input->filterSingle('resourcePage', XenForo_Input::UINT);
				$mediaPage = $this->_input->filterSingle('page', XenForo_Input::UINT);
			}

			if ($postPage < 1)
			{
				$postPage = 1;
			}

			if ($profilePostPage < 1)
			{
				$profilePostPage = 1;
			}

			if ($resourcePage < 1)
			{
				$resourcePage = 1;
			}

			if ($mediaPage < 1)
			{
				$mediaPage = 1;
			}

			if ($showcaseItemPage < 1)
			{
				$showcaseItemPage = 1;
			}

			$options = XenForo_Application::get('options');

			$perPage = $options->bookmarks_account_num_items;
			$numTabs = 1; // keep track of number of tabs to be used for responsive style

			$fetchParams = array();

			// TAG NAMES
			$tag = '';
			if ($options->bookmarks_tags)
			{
				$fetchParams['tag'] = $this->_input->filterSingle('tag', XenForo_Input::STRING);
				$tag = $fetchParams['tag'];
			}

			// FETCH TYPE
			$filterTypeName = '';
			$filterType = $this->_input->filterSingle('filter_type', XenForo_Input::STRING);
			if ($filterType)
			{
				if ($filterType == 'private' && $options->bookmarks_public)
				{
					$fetchParams['public'] = 0;
					$filterTypeName = new XenForo_Phrase('bookmarks_filter_private');
				}
				else if ($filterType == 'public' && $options->bookmarks_public)
				{
					$fetchParams['public'] = 1;
					$filterTypeName = new XenForo_Phrase('bookmarks_filter_public');
				}
				else if ($filterType == 'quick_link' && $options->bookmarks_navtab)
				{
					$fetchParams['quick_link'] = 1;
					$filterTypeName = new XenForo_Phrase('bookmarks_filter_quick_link');
				}
				else
				{
					$filterType = '';
				}
			}

			// THREAD POSTS
			$totalPostItems = $bookmarksModel->countBookmarksForContentByUser($userId,
				array('content_type' => 'post') + $fetchParams);

			// ensure we are not directed to a none existing page after an item is deleted
			if (ceil($totalPostItems / $perPage) < $postPage)
			{
				$postPage -= 1;
			}

			$postBookmarks = $bookmarksModel->getBookmarksForContentByUser($userId, array(
					'page' => $postPage,
					'perPage' => $perPage,
					'content_type' => 'post'
				) + $fetchParams);

			$postBookmarks = $bookmarksModel->addContentDataToBookmarks($postBookmarks);

			// pagination count
			$from = (($postPage - 1) * $perPage) + 1;
			$to = ($postPage * $perPage);

			if ($to > $totalPostItems)
			{
				$to = $totalPostItems;
			}

			$viewParams = array(
				'hasBookmarks' => true,
				'postBookmarks' => $postBookmarks,
				'totalPostItems' => $totalPostItems,
				'postPage' => $postPage,
				'perPage' => $perPage,
				'bookmarkTag' => $tag,
				'postFrom' => $from,
				'postTo' => $to,
				'contentTypes' => 'post',
				'filterType' => $filterType,
				'filterTypeName' => $filterTypeName
			);

			// PROFILE POSTS
			if ($options->bookmarks_profile)
			{
				$numTabs += 1;
				$totalProfilePostItems = $bookmarksModel->countBookmarksForContentByUser($userId,
					array('content_type' => 'profile_post') + $fetchParams);

				// ensure we are not directed to a none existing page after an item is deleted
				if (ceil($totalProfilePostItems / $perPage) < $profilePostPage)
				{
					$profilePostPage -= 1;
				}

				$profilePostBookmarks = $bookmarksModel->getBookmarksForContentByUser($userId, array(
						'page' => $profilePostPage,
						'perPage' => $perPage,
						'content_type' => 'profile_post'
					) + $fetchParams);

				$profilePostBookmarks = $bookmarksModel->addContentDataToBookmarks($profilePostBookmarks);

				$viewParams['profilePostBookmarks'] = $profilePostBookmarks;
				$viewParams['totalProfilePostItems'] = $totalProfilePostItems;
				$viewParams['profilePostPage'] = $profilePostPage;

				// pagination count
				$from = (($profilePostPage - 1) * $perPage) + 1;
				$to = ($profilePostPage * $perPage);

				if ($to > $totalProfilePostItems)
				{
					$to = $totalProfilePostItems;
				}

				$viewParams['profilePostFrom'] = $from;
				$viewParams['profilePostTo'] = $to;

				$viewParams['contentTypes'] .= '_profile'; // used to select correct tab position
			}

			// RESOURCES
			if ($options->bookmarks_resource)
			{
				$numTabs += 1;
				$totalResources = $bookmarksModel->countBookmarksForContentByUser($userId,
					array('content_type' => 'resource') + $fetchParams);

				// ensure we are not directed to a none existing page after an item is deleted
				if (ceil($totalResources / $perPage) < $resourcePage)
				{
					$resourcePage -= 1;
				}

				$resourceBookmarks = $bookmarksModel->getBookmarksForContentByUser($userId, array(
						'page' => $resourcePage,
						'perPage' => $perPage,
						'content_type' => 'resource'
					) + $fetchParams);

				$resourceBookmarks = $bookmarksModel->addContentDataToBookmarks($resourceBookmarks);

				$viewParams['resourceBookmarks'] = $resourceBookmarks;
				$viewParams['totalResources'] = $totalResources;
				$viewParams['resourcePage'] = $resourcePage;

				// pagination count
				$from = (($resourcePage - 1) * $perPage) + 1;
				$to = ($resourcePage * $perPage);

				if ($to > $totalResources)
				{
					$to = $totalResources;
				}

				$viewParams['resourceFrom'] = $from;
				$viewParams['resourceTo'] = $to;

				$viewParams['contentTypes'] .= '_resource'; // used to select correct tab position
			}

			// MEDIA
			if ($options->bookmarks_media)
			{
				$numTabs += 1;
				$totalMedia = $bookmarksModel->countBookmarksForContentByUser($userId,
					array('content_type' => 'xengallery_media') + $fetchParams);

				// ensure we are not directed to a none existing page after an item is deleted
				if (ceil($totalMedia / $perPage) < $resourcePage)
				{
					$mediaPage -= 1;
				}

				$mediaBookmarks = $bookmarksModel->getBookmarksForContentByUser($userId, array(
						'page' => $mediaPage,
						'perPage' => $perPage,
						'content_type' => 'xengallery_media'
					) + $fetchParams);

				$mediaBookmarks = $bookmarksModel->addContentDataToBookmarks($mediaBookmarks);

				$viewParams['mediaBookmarks'] = $mediaBookmarks;
				$viewParams['totalMedia'] = $totalMedia;
				$viewParams['mediaPage'] = $mediaPage;

				// pagination count
				$from = (($mediaPage - 1) * $perPage) + 1;
				$to = ($mediaPage * $perPage);

				if ($to > $mediaPage)
				{
					$to = $totalMedia;
				}

				$viewParams['mediaFrom'] = $from;
				$viewParams['mediaTo'] = $to;

				$viewParams['contentTypes'] .= '_xengallery_media'; // used to select correct tab position
			}

			// SHOWCASE ITEMS
			if ($options->bookmarks_showcase)
			{
				$numTabs += 1;
				$totalShowcaseItems = $bookmarksModel->countBookmarksForContentByUser($userId,
					array('content_type' => 'showcase_item') + $fetchParams);

				// ensure we are not directed to a none existing page after an item is deleted
				if (ceil($totalShowcaseItems / $perPage) < $showcaseItemPage)
				{
					$showcaseItemPage -= 1;
				}

				$showcaseItemBookmarks = $bookmarksModel->getBookmarksForContentByUser($userId, array(
						'page' => $showcaseItemPage,
						'perPage' => $perPage,
						'content_type' => 'showcase_item'
					) + $fetchParams);

				$showcaseItemBookmarks = $bookmarksModel->addContentDataToBookmarks($showcaseItemBookmarks);

				$viewParams['showcaseItemBookmarks'] = $showcaseItemBookmarks;
				$viewParams['totalShowcaseItems'] = $totalShowcaseItems;
				$viewParams['showcaseItemPage'] = $showcaseItemPage;

				// pagination count
				$from = (($showcaseItemPage - 1) * $perPage) + 1;
				$to = ($showcaseItemPage * $perPage);

				if ($to > $totalShowcaseItems)
				{
					$to = $totalShowcaseItems;
				}

				$viewParams['showcaseItemFrom'] = $from;
				$viewParams['showcaseItemTo'] = $to;

				$viewParams['contentTypes'] .= '_showcase'; // used to select correct tab position
			}

			$viewParams['numTabs'] = $numTabs;

			// AVAILABLE TAGS
			if ($options->bookmarks_tags)
			{
				$bookmarkTags = $bookmarksModel->getTagsByUserId($userId);
				$viewParams['bookmarkTags'] = $bookmarkTags;
			}
		}
		else
		{
			$viewParams['hasBookmarks'] = false;
		}

		return $this->_getWrapper(
			'account', 'bookmarks',
			$this->responseView('Bookmarks_ViewPublic_Bookmarks_View', 'bookmarks_account_list', $viewParams)
		);
	}

	/**
	 * Short-cut function to create a DataWriter for the visiting user and attempt to save the specified settings.
	 * If 'false' is returned, $errors will contain an array of the errors encountered.
	 *
	 * @param array $settings Array of name/value pairs to set into the DataWriter
	 * @param array $errors   (reference) Container for any errors encountered
	 *
	 * @return XenForo_DataWriter_User|false
	 */
	protected function _saveVisitorSettings($settings, &$errors, $extras = array())
	{
		$writer = parent::_saveVisitorSettings($settings, $errors, $extras);

		if ($writer instanceof XenForo_DataWriter_User)
		{
			if ($writer->isChanged('allow_view_profile'))
			{
				// member is limitting his/her profile viewing permissions
				if ($settings['allow_view_profile'] == 'followed' || $settings['allow_view_profile'] == 'none' || $settings['allow_view_profile'] == '')
				{
					$userId = XenForo_Visitor::getUserId();
					$bookmarksModel = $this->_getBookmarksModel();
					$profilePostModel = $this->_getProfilePostModel();

					// delete bookmarks that are no longer viewable to their creator
					$profilePostIds = array_keys($profilePostModel->getProfilePostsForUserId($userId));

					$result = $bookmarksModel->deleteUnViewableBookmarks($profilePostIds, 'profile_post');
					if (!$result)
					{
						throw new XenForo_Exception('Bookmarks delete error in function _saveVisitorSettings');
					}
				}
			}
		}

		return $writer;
	}

	/**
	 * Method called for editing all tags
	 * @return View or error
	 */
	public function actionBookmarksTags()
	{
		$this->_assertRegistrationRequired();

		if (!XenForo_Application::get('options')->bookmarks_tags)
		{
			return $this->responseNoPermission();
		}

		$visitor = XenForo_Visitor::getInstance();
		if (!$visitor->hasPermission('general', 'canUseBookmarks'))
		{
			return $this->responseNoPermission();
		}

		$bookmarksModel = $this->_getBookmarksModel();
		$tags = $bookmarksModel->getTagNamesByUserId($visitor['user_id']);

		$viewParams = array(
			'tags' => $tags
		);

		return $this->_getWrapper(
			'account', 'bookmarks',
			$this->responseView('XenForo_ViewPublic_Base', 'bookmarks_tags', $viewParams)
		);
	}

	/**
	 * Method called for saving edited tags
	 * @return View or error
	 */
	public function actionBookmarksEditTags()
	{
		$this->_assertPostOnly();

		$newTags = $this->_input->filterSingle('tags', XenForo_Input::ARRAY_SIMPLE);

		if (empty($newTags))
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_no_tags_available'));
		}

		$userId = XenForo_Visitor::getUserId();
		$bookmarksModel = $this->_getBookmarksModel();
		$currentTags = $bookmarksModel->getTagNamesByUserId($userId);

		$editedTags = array();
		foreach ($currentTags AS $key => $currentTag)
		{
			if ($currentTag['name'] != $newTags[$key])
			{
				$newTag = $newTags[$key];

				if ($newTag)
				{
					$newTag = XenForo_Helper_String::censorString($newTag);
					$newTag = trim($newTag);
					$length = utf8_strlen($newTag);

					if ($length > 25)
					{
						return $this->responseError(new XenForo_Phrase('bookmarks_tag_x_is_y_characters_too_long',
							array(
								'tag' => $newTag,
								'length' => XenForo_Locale::numberFormat($length - 25)
							)));
					}
				}

				$editedTags[$currentTag['name']] = $newTag;
			}
		}

		if (!empty($editedTags))
		{
			$bookmarksModel->updateTags($editedTags, $userId);
		}

		return $this->responseRedirect(
			XenForo_ControllerResponse_Redirect::SUCCESS,
			XenForo_Link::buildPublicLink('account/bookmarks')
		);
	}

	/**
	 * @return Bookmarks_Model_Bookmarks
	 */
	protected function _getBookmarksModel()
	{
		return $this->getModelFromCache('Bookmarks_Model_Bookmarks');
	}

	/**
	 * @return XenForo_Model_ProfilePost
	 */
	protected function _getProfilePostModel()
	{
		return $this->getModelFromCache('XenForo_Model_ProfilePost');
	}
}