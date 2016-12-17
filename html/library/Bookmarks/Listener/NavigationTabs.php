<?php

class Bookmarks_Listener_NavigationTabs
{
	/**
	 * Add a new navigation tabs
	 *
	 * @param array  $extraTabs
	 * @param string $selectedTabId
	 */
	public static function addNavbarTabs(array &$extraTabs, $selectedTabId)
	{
		$visitor = XenForo_Visitor::getInstance();

		if ($visitor['user_id'])
		{
			$options = XenForo_Application::get('options');

			// navigation tab option is enabled and user has bookmarking permission
			if ($options->bookmarks_navtab && $visitor->hasPermission('general', 'canUseBookmarks'))
			{
				$location = $options->bookmarks_navtab_location;

				if ($location == 'home' || $location == 'middle' || $location == 'end')
				{
					$bookmarksModel = XenForo_Model::create('Bookmarks_Model_Bookmarks');
					$types = $bookmarksModel->getBookmarkTypes();

					$bookmarks = $bookmarksModel->getBookmarksByContentTypeForNavTab($types);
					$threadBookmarks = $profileBookmarks = $resourceBookmarks = $mediaBookmarks = $showcaseItemBookmarks = array();

					foreach ($bookmarks AS $bookmark)
					{
						$type = $bookmark['content_type'];

						if ($type == 'post')
						{
							$threadBookmarks[] = $bookmark;
						}
						else if ($type == 'profile_post')
						{
							$profileBookmarks[] = $bookmark;
						}
						else if ($type == 'resource')
						{
							$resourceBookmarks[] = $bookmark;
						}
						else if ($type == 'xengallery_media')
						{
							$mediaBookmarks[] = $bookmark;
						}
						else if ($type == 'showcase_item')
						{
							$showcaseItemBookmarks[] = $bookmark;
						}
					}

					if ($options->bookmarks_navtab_always_show || (!empty($threadBookmarks) || !empty($profileBookmarks) || !empty($resourceBookmarks) || !empty($showcaseItemBookmarks) || !empty($mediaBookmarks)))
					{
						$extraTabs['Bookmarks'] = array(
							'title' => new XenForo_Phrase('bookmarks_bookmarks'),
							'href' => XenForo_Link::buildPublicLink('account/bookmarks'),
							'linksTemplate' => 'bookmarks_nav_tab',
							'position' => $location,
							'threadBookmarks' => $threadBookmarks,
							'profileBookmarks' => $profileBookmarks,
							'resourceBookmarks' => $resourceBookmarks,
							'mediaBookmarks' => $mediaBookmarks,
							'showcaseItemBookmarks' => $showcaseItemBookmarks
						);
					}
				}
			}
		}
	}
}