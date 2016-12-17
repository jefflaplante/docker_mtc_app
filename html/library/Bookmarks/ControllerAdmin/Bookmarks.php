<?php

class Bookmarks_ControllerAdmin_Bookmarks extends XenForo_ControllerAdmin_Abstract
{
	public function actionIndex()
	{
		$maxResults = $this->_input->filterSingle('max_results', XenForo_Input::UINT);
		if ($maxResults < 1)
			$maxResults = 10;
		else if ($maxResults > 50)
			$maxResults = 50;
		
		if (!$contentType = $this->_input->filterSingle('content_type', XenForo_Input::STRING))
			$contentType = null;
		
		$types = array('' => new XenForo_Phrase('all'), 'post' => new XenForo_Phrase('bookmarks_thread_posts'));
		
		$options = XenForo_Application::get('options');
		$addOns = XenForo_Application::get('addOns');
		if ($options->bookmarks_profile)
			$types['profile_post'] = new XenForo_Phrase('profile_posts');
		
		if ($options->bookmarks_resource && isset($addOns['XenResource']))
			$types['resource'] = new XenForo_Phrase('resources');

		if ($options->bookmarks_media && isset($addOns['XenGallery']))
			$types['xengallery_media'] = new XenForo_Phrase('xengallery_media_items');

		if ($options->bookmarks_showcase && isset($addOns['NFLJ_Showcase']))
			$types['showcase_item'] = new XenForo_Phrase('bookmarks_most_content_showcase_items');
		
		if (isset($contentType) && !array_key_exists($contentType, $types))
			$contentType = null;
		
		if (isset($contentType) && array_key_exists($contentType, $types))
		{
			$fetchTypes[] = $contentType; // specific type
		}
		else
		{
			if (count($types) < 5)
				$fetchTypes = array_keys($types); // certain types
			else
				$fetchTypes = array(); // all types
		}
		
		$results = $this->_getBookmarksModel()->getTopContent($maxResults, $fetchTypes);
		$postArray = $profilePostArray = $resourceArray = $mediaArray = $showcaseItemArray = array();
		
		foreach ($results AS $key => $result)
		{
			$contentId = $result['content_id'];
			
			switch ($result['content_type'])
			{
				case 'post':
				{
					$postArray[$key] = $contentId;
					break;
				}
				case 'profile_post':
				{
					$profilePostArray[$key] = $contentId;
					break;
				}
				case 'resource':
				{
					$resourceArray[$key] = $contentId;
					break;
				}
				case 'xegallery_media':
				{
					$mediaArray[$key] = $contentId;
					break;
				}
				case 'showcase_item':
				{
					$showcaseItemArray[$key] = $contentId;
					break;
				}
			}
		}
		
		$bookmarks = array();
		
		if (!empty($postArray))
		{
			$posts = $this->_getPostModel()->getPostsByIds(array_values($postArray), array('join' => XenForo_Model_Post::FETCH_THREAD | XenForo_Model_Post::FETCH_FORUM));
			
			foreach ($posts AS $postId => $post)
			{
				foreach ($postArray AS $key => $contentId)
				{
					if ($postId == $contentId)
					{
						$temp = $results[$key];
						
						$bookmarks[$key] = $post;
						$bookmarks[$key]['bookmark_id'] = $temp['bookmark_id'];
						$bookmarks[$key]['content_type'] = $temp['content_type'];
						$bookmarks[$key]['first_date'] = $temp['first_date'];
						$bookmarks[$key]['last_date'] = $temp['last_date'];
						$bookmarks[$key]['count'] = $temp['count'];
					}
				}
			}
		}
		
		if (!empty($profilePostArray))
		{
			$profilePosts = $this->_getProfilePostModel()->getProfilePostsByIds(array_values($profilePostArray), array('join' => XenForo_Model_ProfilePost::FETCH_USER_POSTER | XenForo_Model_ProfilePost::FETCH_USER_RECEIVER));
			
			foreach ($profilePosts AS $profilePostId => $profilePost)
			{
				foreach ($profilePostArray AS $key => $contentId)
				{
					if ($profilePostId == $contentId)
					{
						$temp = $results[$key];
						
						$bookmarks[$key] = $profilePost;
						$bookmarks[$key]['bookmark_id'] = $temp['bookmark_id'];
						$bookmarks[$key]['content_type'] = $temp['content_type'];
						$bookmarks[$key]['first_date'] = $temp['first_date'];
						$bookmarks[$key]['last_date'] = $temp['last_date'];
						$bookmarks[$key]['count'] = $temp['count'];
					}
				}
			}
		}
		
		if (!empty($resourceArray))
		{
			$resources = $this->_getResourceModel()->getResourcesByIds(array_values($resourceArray), array('join' => XenResource_Model_Resource::FETCH_CATEGORY));
			
			foreach ($resources AS $resourceId => $resource)
			{
				foreach ($resourceArray AS $key => $contentId)
				{
					if ($resourceId == $contentId)
					{
						$temp = $results[$key];
						
						$bookmarks[$key] = $resource;
						$bookmarks[$key]['bookmark_id'] = $temp['bookmark_id'];
						$bookmarks[$key]['content_type'] = $temp['content_type'];
						$bookmarks[$key]['first_date'] = $temp['first_date'];
						$bookmarks[$key]['last_date'] = $temp['last_date'];
						$bookmarks[$key]['count'] = $temp['count'];
					}
				}
			}
		}

		if (!empty($mediaArray))
		{
			$mediaItems = $this->_getMediaModel()->getMediaByIds(array_values($mediaArray));

			foreach ($mediaItems AS $mediaId => $media)
			{
				foreach ($resourceArray AS $key => $contentId)
				{
					if ($mediaId == $contentId)
					{
						$temp = $results[$key];

						$bookmarks[$key] = $media;
						$bookmarks[$key]['media_id'] = $temp['bookmark_id'];
						$bookmarks[$key]['content_type'] = $temp['content_type'];
						$bookmarks[$key]['first_date'] = $temp['first_date'];
						$bookmarks[$key]['last_date'] = $temp['last_date'];
						$bookmarks[$key]['count'] = $temp['count'];
					}
				}
			}
		}
		
		if (!empty($showcaseItemArray))
		{
			$items = $this->_getSCItemModel()->getItemsByIds(array_values($showcaseItemArray), array('join' => NFLJ_Showcase_Model_Item::FETCH_CATEGORY));
			
			foreach ($items AS $itemId => $item)
			{
				foreach ($showcaseItemArray AS $key => $contentId)
				{
					if ($itemId == $contentId)
					{
						$temp = $results[$key];
						
						$bookmarks[$key] = $item;
						$bookmarks[$key]['bookmark_id'] = $temp['bookmark_id'];
						$bookmarks[$key]['content_type'] = $temp['content_type'];
						$bookmarks[$key]['first_date'] = $temp['first_date'];
						$bookmarks[$key]['last_date'] = $temp['last_date'];
						$bookmarks[$key]['count'] = $temp['count'];
					}
				}
			}
		}
		
		ksort($bookmarks); // re-arrange by keys
		
		$viewParams = array(
			'bookmarks' => $bookmarks,
			'totalCount' => count($bookmarks),
			'maxResults' => $maxResults,
			'contentType' => $contentType,
			'types' => $types
		);
		
		return $this->responseView('XenForo_ViewAdmin_Base', 'bookmarks_top_content', $viewParams);
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
	
	/**
	 * @return XenForo_Model_ProfilePost
	 */
	protected function _getProfilePostModel()
	{
		return $this->getModelFromCache('XenForo_Model_ProfilePost');
	}
	
    /**
     * @return NFLJ_Showcase_Model_Item
     */ 	
	protected function _getSCItemModel()
	{
		return $this->getModelFromCache('NFLJ_Showcase_Model_Item');
	}
	
	/**
	 * @return XenResource_Model_Resource
	 */
	protected function _getResourceModel()
	{
		return $this->getModelFromCache('XenResource_Model_Resource');
	}

	/**
	 * @return XenGallery_Model_Media
	 */
	protected function _getMediaModel()
	{
		return $this->getModelFromCache('XenGallery_Model_Media');
	}
}