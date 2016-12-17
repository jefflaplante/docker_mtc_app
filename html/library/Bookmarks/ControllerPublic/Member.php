<?php

/**
 * Controller for displaying public bookmarks
 *
 * @package Bookmarks
 */
class Bookmarks_ControllerPublic_Member extends XFCP_Bookmarks_ControllerPublic_Member
{
	/**
	 * Member profile page
	 * Include our bookmarks page with the template params
	 *
	 * @return XenForo_ControllerResponse_View
	 */
	public function actionMember()
	{
		$responseView = parent::actionMember();
		
		if (!empty($responseView->params['user']))
		{
			$member = $responseView->params['user'];
			if (isset($member['user_id']))
			{
				$options = XenForo_Application::get('options');
				
				if ($options->bookmarks_public)
				{
					$visitorId = XenForo_Visitor::getUserId();
					if ($visitorId || $options->bookmarks_public_guests)
					{
						$userModel = $this->_getUserModel();
						$member = $userModel->getUserById($member['user_id'], array('join' => XenForo_Model_User::FETCH_USER_PERMISSIONS));
						$member['permissions'] = XenForo_Permission::unserializePermissions($member['global_permission_cache']);
						$canUseBookmarks = (empty($member['permissions']['general']['canUseBookmarks']) ? false : $member['permissions']['general']['canUseBookmarks']);
						if ($canUseBookmarks)
						{
							$numBookmarks = $this->_getBookmarksModel()->countBookmarksForContentByUser($member['user_id'], array('content_type' =>'all', 'public' => 1));
							
							if ($options->bookmarks_public_always_show_tab || $numBookmarks > 0)
							{
								$responseView->params['bookmarksTab'] = true;
								
								// since count can be higher than actual viewable bookmarks, only display if specifically opted to do so for the member card as that option explains this issue
								if ($options->bookmarks_member_card)
									$responseView->params['bookmarksCount'] = $numBookmarks;
								
								if ($page = $this->_input->filterSingle('bookmarksPage', XenForo_Input::UINT))
									$responseView->params['bookmarksPage'] = $page;
							}
						}
					}
				}
			}
		}
		
		return $responseView;
	}
	
	/**
	 * Member mini-profile (for popup)
	 *
	 * @return XenForo_ControllerResponse_View
	 */
	public function actionCard()
	{
		$responseView = parent::actionCard();
		
		if (!empty($responseView->params['user']))
		{
			$options = XenForo_Application::get('options');
			if ($options->bookmarks_member_card && $options->bookmarks_public)
			{
				$isMember = XenForo_Visitor::getUserId();
				if ($options->bookmarks_public_guests || $isMember)
				{
					$user = $responseView->params['user'];
					$bookmarksCount = $this->_getBookmarksModel()->countBookmarksForContentByUser($user['user_id'], array('content_type' =>'all', 'public' => 1));
					if ($options->bookmarks_public_always_show_tab || $bookmarksCount > 0)
					{
						$responseView->params['bookmarksCount'] = true;
						$user['bookmarks_count'] = $bookmarksCount;
						$responseView->params['user'] = $user;
					}
				}
			}
		}
		
		return $responseView;
	}
	
	/**
	 * Member profile page
	 * Bookmarks tab
	 *
	 * @return XenForo_ControllerResponse_View / XenForo_ControllerResponse_Redirect
	 */
	public function actionBookmarks()
	{
		$userId = $this->_input->filterSingle('user_id', XenForo_Input::UINT);
		$user = $this->getHelper('UserProfile')->assertUserProfileValidAndViewable($userId);
		
		$options = XenForo_Application::get('options');
		$isMember = XenForo_Visitor::getUserId();
		$bookmarksModel = $this->_getBookmarksModel();
			
		// public bookmark sharing option is set and guests can view it
		if ($options->bookmarks_public AND ($isMember || $options->bookmarks_public_guests))
		{
			$perPage = $options->bookmarks_public_num_items;
			
			if ($options->bookmarks_public_display == 'pagination') // pagination style
			{
				$page = $this->_input->filterSingle('bookmarksPage', XenForo_Input::UINT);
				
				// we cannot use this function as it may count posts that are unviewable to the Visitor
				// we therefore have to fetch all bookmarks, process them, and select the ones for the page we are on
				// this is not ideal but needs to be done if pagination is to be used as total viewable items must be known
		//		$totalItems = $bookmarksModel->countBookmarksForContentByUser($userId, array('content_type' =>'all', 'public' => 1));
				
				// fetch all public bookmarks
				$bookmarks = $bookmarksModel->getBookmarksForContentByUser($userId, array(
					'content_type' => 'all',
					'public' => 1,
					'limit' => $options->bookmarks_max_allowed
				));
				
				// process and fetch only viewable bookmarks
				$bookmarks = $bookmarksModel->addContentDataToBookmarks($bookmarks);
				$totalItems = count($bookmarks);
				$start = $page - 1;
				if ($start < 0)
					$start = 0;
				
				// grab the bookmarks for the page we are on
				$bookmarks = array_slice($bookmarks, $start*$perPage, $perPage);
				
				$viewParams = array(
					'user' => $user,
					'bookmarks' => $bookmarks,
					'totalBookmarkItems' => $totalItems,
					'bookmarksPerPage' => $perPage,
					'bookmarksPage' => $page,
					'page' => $this->_input->filterSingle('page', XenForo_Input::UINT)
				);
				
				$templateName = 'bookmarks_member_list';
			}
			else // feed style
			{
				$skipIds = $this->_input->filterSingle('skipIds', XenForo_Input::STRING);
				$cutOffDate = $this->_input->filterSingle('cutOffDate', XenForo_Input::UINT);
				$totalChecked = $this->_input->filterSingle('totalChecked', XenForo_Input::UINT);
				
				// last bookmark date or current time stamp
				if (!$cutOffDate)
					$cutOffDate = XenForo_Application::$time;
				
				// bookmark ids to skip
				if ($skipIds)
					$skipIds = explode(',', $skipIds);
				else
					$skipIds = array();
					
				// total public bookmarks
				$totalItems = $bookmarksModel->countBookmarksForContentByUser($userId, array('content_type' =>'all', 'public' => 1));
				
				// fetch x anount of public bookmarks
				$bookmarksRaw = $bookmarksModel->getBookmarksForContentByUserFeed($userId, array(
					'limit' => $perPage,
					'content_type' => 'all',
					'public' => 1
				), $cutOffDate, $skipIds);
				
				// how many of the total amount have we sifted through already
				$totalChecked += count($bookmarksRaw);
		
				// process and fetch only viewable bookmarks
				$bookmarks = $bookmarksModel->addContentDataToBookmarks($bookmarksRaw);
				$count = count($bookmarks); // viewable bookmarks count
				
				// add un-viewable bookmarks to the skip array
				$bookmarksRaw = array_diff_key($bookmarksRaw, $bookmarks);
				foreach ($bookmarksRaw AS $bookmark)
				{
					$skipIds[] = $bookmark['bookmark_id'];
				}
				unset($bookmarksRaw);

				// total viewable are less than per-page, so try and fill the gap
				if ($count < $perPage && $totalItems > $perPage && $totalChecked < $totalItems)
				{
					while ($count < $perPage)
					{
						$num = 0;
						foreach ($bookmarks AS $bookmark) // all viewable bookmarks
						{
							$num++;
							if ($bookmark['sticky'] && !in_array($bookmark['bookmark_id'], $skipIds)) // do not re-fetch this sticky
								$skipIds[] = $bookmark['bookmark_id'];
								
							// last displayed bookmark
							if ($num == $count && !$bookmark['sticky'])
								$cutOffDate = $bookmark['bookmark_date']; // update cut-off with last none sticky, otherwise use last know date
						}
					
						// fetch x amount of public bookmarks to fill the gap between $count and $perPage
						$bookmarksRaw2 = $bookmarksModel->getBookmarksForContentByUserFeed($userId, array(
							'limit' => $perPage - $count,
							'content_type' => 'all',
							'public' => 1
						), $cutOffDate, $skipIds);
						
						// update sifted through count
						$totalChecked += count($bookmarksRaw2);
						
						// process and fetch only viewable bookmarks
						$bookmarks2 = $bookmarksModel->addContentDataToBookmarks($bookmarksRaw2);
						$count2 = count($bookmarks2);
						// our new viewable count
						$count += $count2;
						
						// add any fetched viewable bookmarks to our existing array
						$bookmarks = array_merge($bookmarks, $bookmarks2);
						
						// add un-viewable bookmarks to the skip array
						$bookmarksRaw2 = array_diff_key($bookmarksRaw2, $bookmarks2);
						foreach ($bookmarksRaw2 AS $bookmark)
						{
							$skipIds[] = $bookmark['bookmark_id'];
						}
						unset($bookmarksRaw2, $bookmarks2);
						
						// no more bookmarks - we sifted through all of this user's public bookmarks
						if ($totalChecked >= $totalItems)
							break;
					}
				}

				$num = 0;
				foreach ($bookmarks AS $bookmark) // all viewable bookmarks
				{
					$num++;
					if ($bookmark['sticky'] && !in_array($bookmark['bookmark_id'], $skipIds)) // do not re-fetch this sticky
						$skipIds[] = $bookmark['bookmark_id'];
						
					// last displayed bookmark
					if ($num == $count && !$bookmark['sticky'])
						$cutOffDate = $bookmark['bookmark_date']; // update cut-off, otherwise use the last non sticky cut-off date
				}
				
				// do we display the 'show older' link at the end of the list?
				$feedEnds = $totalChecked >= $totalItems ? 1 : 0;
				
				// convert the array into a string
				$skipIds = implode(',', $skipIds);
				
				$viewParams = array(
					'user' => $user,
					'bookmarks' => $bookmarks,
					'feedParams' => array('cutOffDate' => $cutOffDate, 'skipIds' => $skipIds, 'totalChecked' => $totalChecked, 'feedEnds' => $feedEnds)
				);
				
				$templateName = 'bookmarks_member_list_feed';
			}
			
			return $this->responseView('Bookmarks_ViewPublic_Member_Bookmarks', $templateName, $viewParams);
		}
		else // go back
		{
			return $this->responseRedirect(
				XenForo_ControllerResponse_Redirect::RESOURCE_CANONICAL,
				XenForo_Link::buildPublicLink('members', $user)
			);
		}
	}
	
	/**
	 * @return Bookmarks_Model_Bookmarks
	 */
	protected function _getBookmarksModel()
	{
		return $this->getModelFromCache('Bookmarks_Model_Bookmarks');
	}
}
