<?php

class Bookmarks_ControllerPublic_Bookmarks extends XenForo_ControllerPublic_Abstract
{
	/**
	 * Show a template with an option to save/add a content item as a Bookmark
	 * @return XenForo_ViewPublic_Base / error
	 */
	public function actionIndex()
	{
		$this->_assertRegistrationRequired();
		$contentType = '';

		$input = $this->getInput();
		$contentType = $input->filterSingle('type', XenForo_Input::STRING);
		$contentId = $input->filterSingle('id', XenForo_Input::UINT);

		$bookmarksModel = $this->_getBookmarksModel();
		if (!$bookmarksModel->isValidBookmarkType($contentType))
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_unknown_content_type'));
		}

		$visitor = XenForo_Visitor::getInstance();
		if (!$visitor->hasPermission('general', 'canUseBookmarks'))
		{
			return $this->responseNoPermission();
		}

		$options = XenForo_Application::get('options');

		// if previously bookmarked this post, then display current values
		$bookmark = $bookmarksModel->getBookmarkByContent($contentType, $contentId, $visitor['user_id']);
		if (empty($bookmark))
		{
			// global limit on number of bookmarks
			$maxAllowed = ($visitor->hasPermission('general', 'maxBookmarks') > 0) ? $visitor->hasPermission('general',
				'maxBookmarks') : $options->bookmarks_max_allowed;
			if ($maxAllowed)
			{
				if ($bookmarksModel->countBookmarksForContentByUser($visitor['user_id']) >= $maxAllowed)
				{
					return $this->responseError(new XenForo_Phrase('bookmarks_reached_max_allowed', array(
						'max' => XenForo_Locale::numberFormat($maxAllowed),
						'link' => XenForo_Link::buildPublicLink('account/bookmarks')
					)));
				}
			}

			$bookmark['public'] = $options->bookmarks_default_save_state_private_public == 'public' ? 1 : 0;
		}

		$viewParams = array(
			'publicEnabled' => $options->bookmarks_public,
			'navTabEnabled' => $options->bookmarks_navtab,
			'tagsEnabled' => $options->bookmarks_tags,
			'bookmark' => $bookmark
		);

		// current tag names for this user
		if ($options->bookmarks_tags)
		{
			$tagNames = $bookmarksModel->getTagNamesByUserId($visitor['user_id']);

			if (!empty($tagNames))
			{
				$viewParams['tagNames'] = $tagNames;
			}
		}

		switch ($contentType)
		{
			case 'post':
			{
				$ftpHelper = $this->getHelper('ForumThreadPost');
				list($post, $thread) = $ftpHelper->assertPostValidAndViewable($contentId);

				if ($post['message_state'] != 'visible' || $thread['discussion_state'] != 'visible' || (isset($post['canBookmark']) && !$post['canBookmark']) || !$visitor->hasNodePermission($thread['node_id'],
						'canBookmarkPost')
				)
				{
					return $this->responseNoPermission();
				}

				// forward only the stuff we need
				$post = array(
					'post_id' => $post['post_id'],
					'title' => $thread['title'],
					'content_type' => $contentType
				);

				$viewParams['content'] = $post;
				$viewParams['contentId'] = $post['post_id'];

				break;
			}
			case 'profile_post':
			{
				if ($options->bookmarks_profile)
				{
					if (!$visitor->hasPermission('profilePost', 'canBookmarkProfilePost'))
					{
						return $this->responseNoPermission();
					}

					$ppHelper = $this->getHelper('UserProfile');
					list($profilePost, $user) = $ppHelper->assertProfilePostValidAndViewable($contentId);

					if ($profilePost['message_state'] != 'visible')
					{
						return $this->responseNoPermission();
					}

					// forward only the stuff we need
					$profilePost = array(
						'profile_post_id' => $profilePost['profile_post_id'],
						'content_type' => $contentType
					);
					$user = array(
						'user_id' => $user['user_id'],
						'username' => $user['username']
					);

					$viewParams['content'] = $profilePost;
					$viewParams['contentId'] = $profilePost['profile_post_id'];
					$viewParams['user'] = $user;

					break;
				}
				else
				{
					return $this->responseNoPermission();
				}
			}
			case 'resource':
			{
				$addOns = XenForo_Application::get('addOns');
				if ($options->bookmarks_resource && isset($addOns['XenResource']))
				{
					$resourceModel = $this->_getResourceModel();
					$item = $resourceModel->getResourceById($contentId);
					if (!$item)
					{
						throw $this->responseException($this->responseError(new XenForo_Phrase('requested_resource_not_found'),
							404));
					}

					if ($item['resource_state'] != 'visible' || !$resourceModel->canViewResource($item, $item))
					{
						return $this->responseNoPermission();
					}

					// forward only the stuff we need
					$item = array(
						'resource_id' => $item['resource_id'],
						'title' => $item['title'],
						'content_type' => $contentType
					);

					$viewParams['content'] = $item;
					$viewParams['contentId'] = $item['resource_id'];

					break;
				}
				else
				{
					return $this->responseNoPermission();
				}
			}
			case 'xengallery_media':
			{
				$addOns = XenForo_Application::get('addOns');
				if ($options->bookmarks_media && isset($addOns['XenGallery']))
				{
					$mediaModel = $this->_getMediaModel();
					$item = $mediaModel->getMediaById($contentId);
					if (!$item)
					{
						throw $this->responseException($this->responseError(new XenForo_Phrase('requested_media_not_found'),
							404));
					}

					if ($item['media_state'] != 'visible' || !$mediaModel->canViewMediaItem($item))
					{
						return $this->responseNoPermission();
					}

					// forward only the stuff we need
					$item = array(
						'media_id' => $item['media_id'],
						'title' => $item['media_title'],
						'content_type' => $contentType
					);

					$viewParams['content'] = $item;
					$viewParams['contentId'] = $item['media_id'];

					break;
				}
				else
				{
					return $this->responseNoPermission();
				}
			}
			case 'showcase_item':
			{
				$addOns = XenForo_Application::get('addOns');
				if ($options->bookmarks_showcase && isset($addOns['NFLJ_Showcase']))
				{
					$scItemModel = $this->_getSCItemModel();
					$item = $scItemModel->getItemById($contentId,
						array('join' => NFLJ_Showcase_Model_Item::FETCH_CATEGORY | NFLJ_Showcase_Model_Item::FETCH_USER));
					if (!$item)
					{
						throw $this->responseException($this->responseError(new XenForo_Phrase('nflj_showcase_404_item'),
							404));
					}

					if ($addOns['NFLJ_Showcase'] < 40)
					{
						$canViewItem = $scItemModel->canViewItem($item);
					}
					else
					{
						$errorPhraseKey = '';
						$canViewItem = $scItemModel->canViewItem($item, array('category_id' => $item['category_id']),
							$errorPhraseKey);
					}

					if ($item['item_state'] != 'visible' || !$visitor->hasPermission('nfljsc',
							'canBookmarkShowcase') || !$canViewItem
					)
					{
						return $this->responseNoPermission();
					}

					// forward only the stuff we need
					$item = array(
						'item_id' => $item['item_id'],
						'title' => $item['item_name'],
						'content_type' => $contentType
					);

					$viewParams['content'] = $item;
					$viewParams['contentId'] = $item['item_id'];

					break;
				}
				else
				{
					return $this->responseNoPermission();
				}
			}
			default:
			{
				return $this->responseError(new XenForo_Phrase('bookmarks_unknown_content_type'));
			}
		}

		return $this->responseView('XenForo_ViewPublic_Base', 'bookmarks_bookmark', $viewParams);
	}

	public function actionSearch()
	{
		$visitor = XenForo_Visitor::getInstance();
		if (!$visitor->hasPermission('general', 'canUseBookmarks'))
		{
			return $this->responseNoPermission();
		}
		$viewParams = array();
		$contentTypes = $this->_getBookmarksModel()->getBookmarkTypes();
		foreach ($contentTypes AS $value)
		{
			$viewParams['contentTypes'][$value] = new XenForo_Phrase($value);
		}

		$viewParams['tagNames'] = $this->_getBookmarksModel()->getTagNamesByUserId($visitor['user_id']);

		return $this->responseView('', 'bookmarks_search_form_overlay', $viewParams);
	}

	public function actionSearchProcess()
	{
		$visitor = XenForo_Visitor::getInstance();
		if (!$visitor->hasPermission('general', 'canUseBookmarks'))
		{
			return $this->responseNoPermission();
		}
		$fetchParams = array(
			'content_type' => $this->_input->filterSingle('content_type', XenForo_Input::STRING)
		);

		if ($tag = $this->_input->filterSingle('tag', XenForo_Input::STRING))
		{
			$fetchParams['tag'] = $tag;
		}

		if ($this->_input->filterSingle('quick_link', XenForo_Input::UINT))
		{
			$fetchParams['quick_link'] = 1;
		}

		$bookmarks = $this->_getBookmarksModel()->getBookmarksForContentByUser($visitor['user_id'], $fetchParams);

		if (!$bookmarks)
		{
			return $this->responseError(new XenForo_Phrase("bookmarks_no_bookmarks_were_found"));
		}

		$viewParams['bookmarks'] = $this->_getBookmarksModel()->addContentDataToBookmarks($bookmarks);

		return $this->responseView('', 'bookmarks_search_results_overlay', $viewParams);
	}

	public function actionInsertQuotes()
	{
		$visitor = XenForo_Visitor::getInstance();
		if (!$visitor->hasPermission('general', 'canUseBookmarks'))
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_item_not_viewable'));
		}

		$formId = $this->_input->filterSingle('formId', XenForo_Input::STRING);
		$type = $this->_input->filterSingle('type', XenForo_Input::STRING);
		$bookmarkIds = $this->_input->filterSingle('postIds', array(
			XenForo_Input::STRING,
			'array' => true
		));
		if (empty($bookmarkIds))
		{
			return $this->responseError(new XenForo_Phrase('no_messages_selected'));
		}

		$bookmarks = $this->_getBookmarksModel()->getBookmarksByIds($bookmarkIds);
		if (!$bookmarks)
		{
			return $this->responseError(new XenForo_Phrase('no_messages_selected'));
		}
		$ordered = array();

		$bookmarks = $this->_getBookmarksModel()->addContentDataToBookmarks($bookmarks);

		if (!$bookmarks)
		{
			return $this->responseError(new XenForo_Phrase('no_messages_selected'));
		}

		foreach ($bookmarkIds as $bookmarkId)
		{
			$ordered[$bookmarkId] = $bookmarks[$bookmarkId]['content'];
		}

		$viewParams['quotes'] = $ordered;

		$quote = '';
		foreach ($ordered AS $content)
		{
			$message = ($type == 'link') ? $content['message'] : $content['rawMessage'];
			$message = XenForo_Helper_String::stripQuotes($message, 1);

			if ($type == 'link')
			{
				if (empty($content['link']))
				{
					continue;
				}
				$message = '[URL="' . $content['link']
					. '"]'
					. $message
					. "[/URL]\n";

			}
			else
			{
				$message = '[QUOTE="' . $content['username']
					. ((isset($content['post_id'])) ? ', post: ' . $content['post_id'] : '')
					. (!empty($content['user_id']) ? ', member: ' . $content['user_id'] : '')
					. '"]'
					. $message
					. "[/QUOTE]\n";
			}

			$quote .= trim($message) . "\n\n";
		}

		$viewParams['quote'] = trim($quote);

		return $this->responseView('Bookmarks_ViewPublic_Bookmarks_Quote', '', $viewParams);
	}

	/**
	 * Display a deleted/edited post's message in a OverLay
	 *
	 * @return Bookmarks_ViewPublic_Bookmarks_ItemView / error
	 */
	public function actionViewAlertItem()
	{
		$this->_assertRegistrationRequired();
		$visitor = XenForo_Visitor::getInstance();
		if (!$visitor->hasPermission('general', 'canUseBookmarks'))
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_item_not_viewable'));
		}

		$alertId = $this->getInput()->filterSingle('alert_id', XenForo_Input::UINT);
		$alertModel = $this->_getAlertModel();
		$item = $alertModel->getAlertById($alertId);
		$action = $item['action'];

		// only the alerted person can view this
		if ($item['alerted_user_id'] != $visitor['user_id'])
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_item_not_viewable'));
		}

		$item['content'] = unserialize($item['extra_data']);

		switch ($item['content_type'])
		{
			case 'bookmark_post':
			{
				if ($action == 'delete')
				{
					// does thread exist and can we see it
					$threadModel = $this->_getThreadModel();
					$thread = $threadModel->getThreadById($item['content']['thread_id'], array(
						'permissionCombinationId' => $visitor['permission_combination_id']
					));

					$canView = false;
					if (!empty($thread))
					{
						$thread = $threadModel->unserializePermissionsInList(array($thread), 'node_permission_cache');
						$thread = $thread[0];

						$canView = $threadModel->canViewThreadAndContainer(
							$thread, $thread, $null, $thread['permissions'], $visitor->toArray()
						);
					}

					if (!$canView) // let the template know not to make the title a link
					{
						$item['content']['not_viewable'] = true;
					}

					// does the post user exist
					$userModel = $this->_getUserModel();
					$postUser = $userModel->getUserById($item['content']['user_id']);

					if (empty($postUser))
					{
						$item['content']['user_id'] = 0;
					}

					$templateName = 'bookmarks_view_alert_deleted_post';
					break;
				}
				else if ($action == 'edit' || $action == 'merge')
				{
					// display the bookmarked post
					$bookmarksModel = $this->_getBookmarksModel();
					$item = $bookmarksModel->getBookmarkContentForView($item['content']['bookmark_id']);
					if (empty($item)) // post was deleted - bookmark no longer exists
					{
						return $this->responseError(new XenForo_Phrase('bookmarks_item_not_found'));
					}

					$templateName = $item['viewTemplateName'];
					break;
				}
			}
			case 'bookmark_profile_post':
			{
				if ($action == 'delete')
				{
					// does the profile and post user exist
					$userModel = $this->_getUserModel();
					$profileUser = $userModel->getUserById($item['content']['profileUser']['user_id']);
					$postUser = $userModel->getUserById($item['content']['user']['user_id']);

					if (empty($profileUser))
					{
						$item['content']['profile_user_not_exist'] = true;
						$item['content']['profileUser']['user_id'] = 0;
					}

					if (empty($postUser))
					{
						$item['content']['post_user_not_exist'] = true;
						$item['content']['user']['user_id'] = 0;
					}

					$templateName = 'bookmarks_view_alert_deleted_profile_post';
					break;
				}
				else if ($action == 'edit')
				{
					// display the bookmarked post
					$bookmarksModel = $this->_getBookmarksModel();
					$item = $bookmarksModel->getBookmarkContentForView($item['content']['bookmark_id']);
					if (empty($item)) // post was deleted - bookmark no longer exists
					{
						return $this->responseError(new XenForo_Phrase('bookmarks_item_not_found'));
					}

					$templateName = $item['viewTemplateName'];
					break;
				}
			}
			case 'bookmark_resource':
			{
				$addOns = XenForo_Application::get('addOns');
				if (isset($addOns['XenResource']))
				{
					if ($action == 'delete')
					{
						// does resource exist and can we see it
						$resourceModel = $this->_getResourceModel();
						$resource = $resourceModel->getResourceById($item['content']['resource_id']);

						$canView = false;
						if (!empty($resource))
						{
							$canView = $resourceModel->canViewResource($resource, $resource);
						}

						if (!$canView) // let the template know not to make the title a link
						{
							$item['content']['not_viewable'] = true;
						}

						// does the post user exist
						$userModel = $this->_getUserModel();
						$postUser = $userModel->getUserById($item['content']['user_id']);

						if (empty($postUser))
						{
							$item['content']['user_id'] = 0;
						}

						$templateName = 'bookmarks_view_alert_deleted_resource';
						break;
					}
					else if ($action == 'edit')
					{
						// display the bookmarked item
						$bookmarksModel = $this->_getBookmarksModel();
						$item = $bookmarksModel->getBookmarkContentForView($item['content']['bookmark_id']);
						if (empty($item)) // showcase item was deleted - bookmark no longer exists
						{
							return $this->responseError(new XenForo_Phrase('bookmarks_item_not_found'));
						}

						$templateName = $item['viewTemplateName'];
						break;
					}
				}
			}
			case 'bookmark_xengallery_media':
			{
				$addOns = XenForo_Application::get('addOns');
				if (isset($addOns['xengallery_media']))
				{
					if ($action == 'delete')
					{
						// does resource exist and can we see it
						$mediaModel = $this->_getMediaModel();
						$media = $mediaModel->getMediaById($item['content']['media_id']);

						$canView = false;
						if (!empty($media))
						{
							$canView = $mediaModel->canViewMediaItem($media);
						}

						if (!$canView) // let the template know not to make the title a link
						{
							$item['content']['not_viewable'] = true;
						}

						$templateName = 'bookmarks_view_alert_deleted_media';
						break;
					}
					else if ($action == 'edit')
					{
						// display the bookmarked item
						$bookmarksModel = $this->_getBookmarksModel();
						$item = $bookmarksModel->getBookmarkContentForView($item['content']['bookmark_id']);
						if (empty($item))
						{
							return $this->responseError(new XenForo_Phrase('bookmarks_item_not_found'));
						}

						$templateName = $item['viewTemplateName'];
						break;
					}
				}
			}
			case 'bookmark_showcase_item':
			{
				$addOns = XenForo_Application::get('addOns');
				if (isset($addOns['NFLJ_Showcase']))
				{
					if ($action == 'delete')
					{
						// does showcase item exist and can we see it
						$scItemModel = $this->_getSCItemModel();
						$showcaseItem = $scItemModel->getItemById($item['content']['item_id'],
							array('join' => NFLJ_Showcase_Model_Item::FETCH_CATEGORY | NFLJ_Showcase_Model_Item::FETCH_USER));

						$canView = false;
						if (!empty($showcaseItem))
						{
							if ($addOns['NFLJ_Showcase'] < 40)
							{
								$canView = $scItemModel->canViewItem($showcaseItem);
							}
							else
							{
								$errorPhraseKey = '';
								$canView = $scItemModel->canViewItem($showcaseItem,
									array('category_id' => $showcaseItem['category_id']), $errorPhraseKey);
							}
						}

						if (!$canView) // let the template know not to make the title a link
						{
							$item['content']['not_viewable'] = true;
						}

						// does the post user exist
						$userModel = $this->_getUserModel();
						$postUser = $userModel->getUserById($item['content']['user_id']);

						if (empty($postUser))
						{
							$item['content']['user_id'] = 0;
						}

						$templateName = 'bookmarks_view_alert_deleted_showcase_item';
						break;
					}
					else if ($action == 'edit')
					{
						// display the bookmarked item
						$bookmarksModel = $this->_getBookmarksModel();
						$item = $bookmarksModel->getBookmarkContentForView($item['content']['bookmark_id']);
						if (empty($item)) // showcase item was deleted - bookmark no longer exists
						{
							return $this->responseError(new XenForo_Phrase('bookmarks_item_not_found'));
						}

						$templateName = $item['viewTemplateName'];
						break;
					}
				}
			}
			default:
			{
				return $this->responseError(new XenForo_Phrase('bookmarks_item_not_found'));
			}
		}

		$viewParams = array(
			'item' => $item
		);

		return $this->responseView('Bookmarks_ViewPublic_Bookmarks_ItemView', $templateName, $viewParams);
	}

	/**
	 * Display an item in a OverLay
	 *
	 * @return Bookmarks_ViewPublic_Bookmarks_ItemView / error
	 */
	public function actionViewItem()
	{
		$visitor = XenForo_Visitor::getInstance();
		$input = $this->getInput();
		$bookmarkId = $input->filterSingle('bookmark_id', XenForo_Input::UINT);
		$bookmarksModel = $this->_getBookmarksModel();
		$bookmark = $bookmarksModel->getBookmarkById($bookmarkId);
		if (empty($bookmark))
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_item_not_found'));
		}

		$isOwner = $visitor['user_id'] == $bookmark['bookmark_user_id'] ? true : false;
		if (!$isOwner) // visitor is viewing profile page
		{
			$options = XenForo_Application::get('options');
			// item is not public OR bookmark sharing option is not set OR guests cannot view it
			if (!$bookmark['public'] || !$options->bookmarks_public || ($visitor['user_id'] < 1 && !$options->bookmarks_public_guests))
			{
				return $this->responseError(new XenForo_Phrase('bookmarks_item_not_viewable'));
			}
		}
		else if (!$visitor->hasPermission('general', 'canUseBookmarks'))
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_item_not_viewable'));
		}

		$item = $bookmarksModel->getBookmarkContentForView($bookmarkId);
		if (empty($item)) // content was deleted - bookmark no longer exists
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_item_not_found'));
		}

		$viewParams = array(
			'item' => $item
		);

		return $this->responseView('Bookmarks_ViewPublic_Bookmarks_ItemView', $item['viewTemplateName'], $viewParams);
	}

	/**
	 * Alternative route into actionEdit - adding a _listItemEdit parameter
	 *
	 * @return Bookmarks_ViewPublic_Bookmarks_ListItemEdit / error
	 */
	public function actionListItemEdit()
	{
		$this->_assertRegistrationRequired();
		$visitor = XenForo_Visitor::getInstance();
		$input = $this->getInput();
		$bookmarkId = $input->filterSingle('bookmark_id', XenForo_Input::UINT);
		$bookmarksModel = $this->_getBookmarksModel();
		$bookmark = $bookmarksModel->getBookmarkById($bookmarkId);
		if (empty($bookmark))
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_item_not_found'));
		}

		$isOwner = $visitor['user_id'] == $bookmark['bookmark_user_id'] ? true : false;
		if (!$isOwner)
		{
			return $this->responseNoPermission();
		}
		else if (!$visitor->hasPermission('general', 'canUseBookmarks'))
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_item_not_viewable'));
		}

		$options = XenForo_Application::get('options');

		$viewParams = array(
			'item' => $bookmark,
			'publicEnabled' => $options->bookmarks_public,
			'navTabEnabled' => $options->bookmarks_navtab,
			'tagsEnabled' => $options->bookmarks_tags
		);

		return $this->responseView('Bookmarks_ViewPublic_Bookmarks_ListItemEdit', 'bookmarks_list_item_edit',
			$viewParams);
	}

	/**
	 * Method called for editing a content item
	 * @return Response or error as a result of the save intent
	 */
	public function actionEdit()
	{
		// this action must be called via POST
		$this->_assertPostOnly();
		$this->_assertRegistrationRequired();

		$input = $this->getInput();
		$note = XenForo_Helper_String::censorString($this->_input->filterSingle('note', XenForo_Input::STRING));
		$tag = XenForo_Helper_String::censorString($this->_input->filterSingle('tag', XenForo_Input::STRING));
		$quickLink = $this->_input->filterSingle('quick_link', XenForo_Input::UINT);

		if ($quickLink && !$note)
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_note_required'));
		}

		$bookmarkId = $input->filterSingle('bookmark_id', XenForo_Input::UINT);
		$public = $this->_input->filterSingle('public', XenForo_Input::UINT);
		$sticky = $this->_input->filterSingle('sticky', XenForo_Input::UINT);
		$prevStickyState = $this->_input->filterSingle('prev_sticky_state', XenForo_Input::UINT);

		$errorKey = '';
		$bookmarksModel = $this->_getBookmarksModel();
		$fields = array(
			'bookmark_tag' => $tag,
			'bookmark_note' => $note,
			'public' => $public,
			'sticky' => $sticky,
			'quick_link' => $quickLink
		);

		$bookmarksModel->bookmarkUpdateById($fields, $bookmarkId, $errorKey);

		if ($errorKey)
		{
			$errorKey = $errorKey instanceof XenForo_Phrase ? $errorKey : new XenForo_Phrase($errorKey);

			return $this->responseError(new XenForo_Phrase($errorKey));
		}

		$item = $bookmarksModel->getBookmarkById($bookmarkId);
		$multiline = XenForo_Application::get('options')->bookmarks_multiline;

		$viewParams = array(
			'item' => $item,
			'prev_sticky_state' => $prevStickyState,
			'multiplelines' => $multiline
		);

		return $this->responseView('Bookmarks_ViewPublic_Bookmarks_ListItemEdit', 'bookmarks_list_item_edit',
			$viewParams);
	}

	/**
	 * Method called for saving/adding a content item to the bookmark table
	 * @return Response or error as a result of the save intent
	 */
	public function actionSave()
	{
		// this action must be called via POST
		$this->_assertPostOnly();
		$this->_assertRegistrationRequired();

		$input = $this->getInput();
		$contentType = $input->filterSingle('content_type', XenForo_Input::STRING);
		$contentId = $input->filterSingle('content_id', XenForo_Input::UINT);
		$note = XenForo_Helper_String::censorString($this->_input->filterSingle('note', XenForo_Input::STRING));
		$public = $this->_input->filterSingle('public', XenForo_Input::UINT);
		$sticky = $this->_input->filterSingle('sticky', XenForo_Input::UINT);
		$quickLink = $this->_input->filterSingle('quick_link', XenForo_Input::UINT);
		$tag = XenForo_Helper_String::censorString($this->_input->filterSingle('tag', XenForo_Input::STRING));

		switch ($contentType)
		{
			case 'post':
			{
				$ftpHelper = $this->getHelper('ForumThreadPost');
				list($content, $thread) = $ftpHelper->assertPostValidAndViewable($contentId);

				$controllerResponse = $this->getPostSpecificRedirect($content, $thread);
				break;
			}
			case 'profile_post':
			{
				$ppHelper = $this->getHelper('UserProfile');
				list($content, $user) = $ppHelper->assertProfilePostValidAndViewable($contentId);

				$controllerResponse = $this->getProfilePostSpecificRedirect($content, $user);
				break;
			}
			case 'resource':
			{
				$resourceModel = $this->_getResourceModel();
				$content = $resourceModel->getResourceById($contentId);
				if (!$content)
				{
					throw $this->responseException($this->responseError(new XenForo_Phrase('requested_resource_not_found'),
						404));
				}

				$controllerResponse = $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
					XenForo_Link::buildPublicLink('resources', $content));
				break;
			}
			case 'xengallery_media':
			{
				$mediaModel = $this->_getMediaModel();
				$content = $mediaModel->getMediaById($contentId);
				if (!$content)
				{
					throw $this->responseException($this->responseError(new XenForo_Phrase('xengallery_requested_media_not_found'),
						404));
				}
				$controllerResponse = $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
					XenForo_Link::buildPublicLink('media', $content));

				break;
			}
			case 'showcase_item':
			{
				$scItemModel = $this->_getSCItemModel();
				$content = $scItemModel->getItemById($contentId,
					array('join' => NFLJ_Showcase_Model_Item::FETCH_CATEGORY | NFLJ_Showcase_Model_Item::FETCH_USER));
				if (!$content)
				{
					throw $this->responseException($this->responseError(new XenForo_Phrase('nflj_showcase_404_item'),
						404));
				}

				$controllerResponse = $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
					XenForo_Link::buildPublicLink('showcase', $content));
				break;
			}
			default:
			{
				return $this->responseError(new XenForo_Phrase('bookmarks_unknown_content_type'));
			}
		}

		$errorKey = '';
		$bookmarksModel = $this->_getBookmarksModel();
		$bookmarksModel->bookmarkSave($contentType, $contentId, $content['user_id'], XenForo_Visitor::getUserId(),
			$errorKey, $note, $tag, $public, $sticky, $quickLink);

		if ($errorKey)
		{
			$errorKey = $errorKey instanceof XenForo_Phrase ? $errorKey : new XenForo_Phrase($errorKey);

			return $this->responseError(new XenForo_Phrase($errorKey));
		}

		$controllerResponse->redirectMessage = new XenForo_Phrase('bookmarks_saved');

		return $controllerResponse;
	}

	/**
	 * Method called for deleting a bookmark item
	 * @return Response or error as a result of the delete intent
	 */
	public function actionDelete()
	{
		$this->_assertRegistrationRequired();
		$visitor = XenForo_Visitor::getInstance();
		$input = $this->getInput();
		$bookmarkId = $input->filterSingle('bookmark_id', XenForo_Input::UINT);
		$bookmarksModel = $this->_getBookmarksModel();
		$bookmark = $bookmarksModel->getBookmarkById($bookmarkId);
		if (empty($bookmark))
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_item_not_found'));
		}

		$isOwner = $visitor['user_id'] == $bookmark['bookmark_user_id'] ? true : false;
		if (!$isOwner)
		{
			return $this->responseNoPermission();
		}
		else if (!$visitor->hasPermission('general', 'canUseBookmarks'))
		{
			return $this->responseError(new XenForo_Phrase('bookmarks_item_not_viewable'));
		}

		$viaContent = $input->filterSingle('via_content', XenForo_Input::BOOLEAN);

		if ($this->isConfirmedPost())
		{
			$errorKey = '';
			$bookmarksModel->bookmarkDelete($bookmarkId, $errorKey);

			if ($errorKey)
			{
				$errorKey = $errorKey instanceof XenForo_Phrase ? $errorKey : new XenForo_Phrase($errorKey);

				return $this->responseError(new XenForo_Phrase($errorKey));
			}

			if ($viaContent)
			{
				$contentId = $bookmark['content_id'];

				switch ($bookmark['content_type'])
				{
					case 'post':
					{
						$link = XenForo_Link::buildPublicLink('posts', array('post_id' => $contentId));
						break;
					}
					case 'profile_post':
					{
						$link = XenForo_Link::buildPublicLink('profile-posts', array('profile_post_id' => $contentId));
						break;
					}
					case 'resource':
					{
						$link = XenForo_Link::buildPublicLink('resources', array('resource_id' => $contentId));
						break;
					}
					case 'xengallery_media':
					{
						$link = XenForo_Link::buildPublicLink('media', array('media_id' => $contentId));
						break;
					}
					case 'showcase_item':
					{
						$link = XenForo_Link::buildPublicLink('showcase', array('item_id' => $contentId));
						break;
					}
					default:
					{
						$link = XenForo_Link::buildPublicLink('index');
					}
				}

				return $this->responseRedirect(
					XenForo_ControllerResponse_Redirect::SUCCESS,
					$link,
					new XenForo_Phrase('bookmarks_deleted')
				);
			}
			else
			{
				return $this->responseRedirect(
					XenForo_ControllerResponse_Redirect::SUCCESS,
					XenForo_Link::buildPublicLink('account/bookmarks'),
					new XenForo_Phrase('bookmarks_deleted'),
					array('bookmarkDeleteId' => $bookmarkId)
				);
			}
		}
		else
		{
			// confirmation dialog
			return $this->responseView('XenForo_ViewPublic_Base', 'bookmarks_delete', array(
				'bookmark_id' => $bookmarkId,
				'via_content' => $viaContent
			));
		}
	}

	/**
	 * Method called for saving/adding a content item to the bookmark table
	 * @return Response or error as a result of the save intent
	 */
	public function actionFlipStatus()
	{
		// this action must be called via POST
		$this->_assertPostOnly();
		$this->_assertRegistrationRequired();

		$input = $this->getInput();
		$bookmarkId = $input->filterSingle('bookmark_id', XenForo_Input::UINT);

		$errorKey = '';
		$bookmarksModel = $this->_getBookmarksModel();
		$public = !$bookmarksModel->isPublic($bookmarkId);

		if ($public)
		{
			$flipText = new XenForo_Phrase('bookmarks_public_flip');
		}
		else
		{
			$flipText = new XenForo_Phrase('bookmarks_private_flip');
		}

		$bookmarksModel->bookmarkUpdateById(array('public' => $public), $bookmarkId, $errorKey);

		if ($errorKey)
		{
			$errorKey = $errorKey instanceof XenForo_Phrase ? $errorKey : new XenForo_Phrase($errorKey);

			return $this->responseError(new XenForo_Phrase($errorKey));
		}

		return $this->responseRedirect(
			XenForo_ControllerResponse_Redirect::SUCCESS,
			XenForo_Link::buildPublicLink('account/bookmarks'),
			new XenForo_Phrase('bookmarks_status_updated'),
			array(
				'flipped' => $flipText,
				'bookmarkId' => $bookmarkId
			)
		);
	}

	/**
	 * Gets the redirect to a particular post in the specified thread.
	 *
	 * @param array    $post
	 * @param array    $thread
	 * @param constant $redirectType
	 *
	 * @return XenForo_ControllerResponse_Redirect
	 */
	public function getPostSpecificRedirect(array $post, array $thread,
		$redirectType = XenForo_ControllerResponse_Redirect::SUCCESS
	)
	{
		$page = floor($post['position'] / XenForo_Application::get('options')->messagesPerPage) + 1;

		return $this->responseRedirect(
			$redirectType,
			XenForo_Link::buildPublicLink('threads', $thread, array('page' => $page)) . '#post-' . $post['post_id']
		);
	}

	/**
	 * Helper to get the correct redirect to a specific profile post.
	 *
	 * @param array    $profilePost
	 * @param array    $user
	 * @param constant $redirectType
	 *
	 * @return XenForo_ControllerResponse_Redirect
	 */
	public function getProfilePostSpecificRedirect(array $profilePost, array $user,
		$redirectType = XenForo_ControllerResponse_Redirect::SUCCESS
	)
	{
		if ($profilePost['post_date'] < XenForo_Application::$time)
		{
			$profilePostModel = $this->_getProfilePostModel();

			$conditions = $profilePostModel->getPermissionBasedProfilePostConditions($user) + array(
					'post_date' => array(
						'>',
						$profilePost['post_date']
					)
				);

			$count = $profilePostModel->countProfilePostsForUserId($user['user_id'], $conditions);

			$page = floor($count / XenForo_Application::get('options')->messagesPerPage) + 1;
		}
		else
		{
			$page = 1;
		}

		return $this->responseRedirect(
			XenForo_ControllerResponse_Redirect::SUCCESS,
			XenForo_Link::buildPublicLink('members', $user,
				array('page' => $page)) . '#profile-post-' . $profilePost['profile_post_id']
		);
	}

	/**
	 * @return XenForo_Model_ProfilePost
	 */
	protected function _getProfilePostModel()
	{
		return $this->getModelFromCache('XenForo_Model_ProfilePost');
	}

	/**
	 * @return XenForo_Model_User
	 */
	protected function _getUserModel()
	{
		return $this->getModelFromCache('XenForo_Model_User');
	}

	/**
	 * @return XenForo_Model_UserProfile
	 */
	protected function _getUserProfileModel()
	{
		return $this->getModelFromCache('XenForo_Model_UserProfile');
	}

	/**
	 * @return Bookmarks_Model_Bookmarks
	 */
	protected function _getBookmarksModel()
	{
		return $this->getModelFromCache('Bookmarks_Model_Bookmarks');
	}

	/**
	 * @return XenForo_Model_Thread
	 */
	protected function _getThreadModel()
	{
		return $this->getModelFromCache('XenForo_Model_Thread');
	}

	/**
	 * @return XenForo_Model_Alert
	 */
	protected function _getAlertModel()
	{
		return $this->getModelFromCache('XenForo_Model_Alert');
	}

	/**
	 * @return NFLJ_Showcase_Model_Item
	 */
	protected function _getSCItemModel()
	{
		return $this->getModelFromCache('NFLJ_Showcase_Model_Item');
	}

	/**
	 * @return XenGallery_Model_Media
	 */
	protected function _getMediaModel()
	{
		return XenForo_Model::create('XenGallery_Model_Media');
	}

	/**
	 * @return XenResource_Model_Resource
	 */
	protected function _getResourceModel()
	{
		return XenForo_Model::create('XenResource_Model_Resource');
	}
}