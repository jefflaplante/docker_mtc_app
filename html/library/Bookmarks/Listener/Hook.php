<?php

class Bookmarks_Listener_Hook
{
	// preload the templates
	public static function templateCreate(&$templateName, array &$params, XenForo_Template_Abstract $template)
	{
		if ($templateName == 'PAGE_CONTAINER')
		{
			if (XenForo_Visitor::getUserId())
			{
				$template->preloadTemplate('bookmarks_navigation_visitor_tab_links2');

				if (XenForo_Application::get('options')->bookmarks_navtab)
				{
					$template->preloadTemplate('bookmarks_visitor_tab');
				}
			}
		}
		else if ($templateName == 'thread_view')
		{
			if (XenForo_Visitor::getUserId())
			{
				$template->preloadTemplate('bookmarks_post_controls');
			}
		}
		else if ($templateName == 'account_wrapper')
		{
			$template->preloadTemplate('bookmarks_account_wrapper_sidebar_your_account');
			$template->preloadTemplate('bookmarks_account_tabs_anchor');
			$template->preloadTemplate('bookmarks_navigation_tabs_account');
			$template->preloadTemplate('bookmarks_account_tabs_link_anchor');
		}
		else if ($templateName == 'conversation_list' || $templateName == 'conversation_view')
		{
			$template->preloadTemplate('bookmarks_navigation_tabs_account');
		}
		else if ($templateName == 'member_view')
		{
			$options = XenForo_Application::get('options');
			if ($options->bookmarks_public)
			{
				$isMember = XenForo_Visitor::getUserId();

				if ($isMember || $options->bookmarks_public_guests)
				{
					if ($isMember && $options->bookmarks_profile)
					{
						$template->preloadTemplate('bookmarks_profile_post_controls');
					}

					$template->preloadTemplate('bookmarks_member_tabs_link_anchor');
				}
			}
		}
		else if ($templateName == 'member_recent_activity') // $templateName == 'news_feed_page_global' ||
		{
			$template->preloadTemplate('news_feed_item_post_bookmark');
			$template->preloadTemplate('news_feed_item_profile_post_bookmark');
		}
		else if ($templateName == 'account_alert_preferences')
		{
			if (XenForo_Application::get('options')->bookmarks_account_alert_preferences)
			{
				$template->preloadTemplate('bookmarks_account_alerts_extra');
			}
		}
		else if ($templateName == 'page_nav')
		{
			if ($params['linkType'] == 'members/#bookmarks')
			{
				// our own page_nav with page renamed to 'bookmarksPage' so as to not conflict with profile posts page_nav
				$templateName = 'bookmarks_page_nav';
			}
		}
		else if ($templateName == 'resource_view')
		{
			if (XenForo_Visitor::getUserId() && XenForo_Application::get('options')->bookmarks_resource)
			{
				$template->preloadTemplate('bookmarks_resource_controls');
			}
		}
		else if ($templateName == 'xengallery_media_view')
		{
			if (XenForo_Visitor::getUserId() && XenForo_Application::get('options')->bookmarks_media)
			{
				$template->preloadTemplate('bookmarks_media_controls');
			}
		}
		else if ($templateName == 'nflj_showcase_item')
		{
			if (XenForo_Visitor::getUserId() && XenForo_Application::get('options')->bookmarks_showcase)
			{
				$template->preloadTemplate('bookmarks_showcase_controls');
			}
		}
	}

	// hook name
	public static function template($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
	{
		switch ($hookName)
		{
			case 'body':
			{
				if ($template->getParam('majorSection') == 'account' && $template->getParam('title') == 'Bookmarks')
				{
					self::addTabLinkAnchorAccount($contents, $hookParams, $template);
				}
				else if ($template->getParam('majorSection') == 'members')
				{
					self::addTabLinkAnchorMember($contents, $hookParams, $template);
				}
				break;
			}
			case 'post_private_controls':
			{
				if (XenForo_Application::get('options')->bookmarks_post_link == 'private')
				{
					self::addPostBookmarkOption($contents, $hookParams, $template);
				}
				break;
			}
			case 'post_public_controls':
			{
				if (XenForo_Application::get('options')->bookmarks_post_link == 'public')
				{
					self::addPostBookmarkOption($contents, $hookParams, $template);
				}
				break;
			}
			case 'resource_update_private_controls':
			{
				if (XenForo_Application::get('options')->bookmarks_resource_link == 'private')
				{
					self::addResourceBookmarkOption($contents, $hookParams, $template);
				}
				break;
			}
			case 'resource_update_public_controls':
			{
				if (XenForo_Application::get('options')->bookmarks_resource_link == 'public')
				{
					self::addResourceBookmarkOption($contents, $hookParams, $template);
				}
				break;
			}
			case 'showcase_item_private_controls':
			{
				if (XenForo_Application::get('options')->bookmarks_showcase_link == 'private')
				{
					self::addShowcaseBookmarkOption($contents, $hookParams, $template);
				}
				break;
			}
			case 'showcase_item_public_controls':
			{
				if (XenForo_Application::get('options')->bookmarks_showcase_link == 'public')
				{
					self::addShowcaseBookmarkOption($contents, $hookParams, $template);
				}
				break;
			}
			case 'navigation_visitor_tabs_start':
			case 'navigation_visitor_tabs_middle':
			case 'navigation_visitor_tabs_end':
			{
				self::addBookmarksVisitorTab($hookName, $contents, $hookParams, $template);
				break;
			}
			case 'navigation_visitor_tab_links2':
			{
				self::addBookmarksLinkNavTab($contents, $hookParams, $template);
				break;
			}
			case 'navigation_tabs_account':
			{
				self::addBookmarksNavTab($contents, $hookParams, $template);
				break;
			}
			case 'account_wrapper_content':
			{
				self::addBookmarksTabAnchor($contents, $hookParams, $template);
				break;
			}
			case 'account_wrapper_sidebar_your_account':
			{
				self::addBookmarksLink($contents, $hookParams, $template);
				break;
			}
			case 'profile_post_private_controls':
			{
				if (XenForo_Application::get('options')->bookmarks_post_link == 'private')
				{
					self::addProfileBookmarkOption($contents, $hookParams, $template);
				}
				break;
			}
			case 'profile_post_public_controls':
			{
				if (XenForo_Application::get('options')->bookmarks_post_link == 'public')
				{
					self::addProfileBookmarkOption($contents, $hookParams, $template);
				}
				break;
			}
			case 'account_alerts_extra':
			{
				self::addAccountAlertPreferences($contents, $hookParams, $template);
				break;
			}
		}
	}

	public static function renderMediaBookmarkOption($contents, $hookParams, XenForo_Template_Abstract $template)
	{
		$media = $template->getParam('media');

		if ($media['media_state'] == 'visible')
		{
			$visitor = XenForo_Visitor::getInstance();

			if ($visitor['user_id'] && XenForo_Application::get('options')->bookmarks_media)
			{
				if ($visitor->hasPermission('general', 'canUseBookmarks') && $visitor->hasPermission('xengallery',
						'canBookmarkMedia')
				)
				{
					$tmp = $template->create('bookmarks_media_controls', $hookParams);
                    return $tmp;
				}

				return 'noperm';
			}
		}
	}


	// ensures account page does not jump to the tab position when pagination is used
	private static function addTabLinkAnchorAccount(&$contents, $hookParams, XenForo_Template_Abstract $template)
	{
		$visitor = XenForo_Visitor::getInstance();
		if ($visitor['user_id'] && $visitor->hasPermission('general', 'canUseBookmarks'))
		{
			$contents = $template->create('bookmarks_account_tabs_link_anchor', $hookParams) . $contents;
		}
	}

	// ensures account page does not jump to the tab position when pagination is used
	private static function addTabLinkAnchorMember(&$contents, $hookParams, XenForo_Template_Abstract $template)
	{
		$contents = $template->create('bookmarks_member_tabs_link_anchor', $hookParams) . $contents;
	}

	// insert an anchor for the account page bookmark tabs - ensures tabs remain static even when notices are on
	private static function addBookmarksTabAnchor(&$contents, $hookParams, XenForo_Template_Abstract $template)
	{
		$visitor = XenForo_Visitor::getInstance();
		if ($visitor['user_id'] && $visitor->hasPermission('general', 'canUseBookmarks'))
		{
			//$contents = '<div class="tabsAnchor">' . $contents . '</div>';
			$hookParams['contents'] = $contents;
			$contents = $template->create('bookmarks_account_tabs_anchor', $hookParams);
		}
	}

	// insert the Bookmark link on left side of account page
	private static function addBookmarksLink(&$contents, $hookParams, XenForo_Template_Abstract $template)
	{
		$visitor = XenForo_Visitor::getInstance();
		if ($visitor['user_id'] && $visitor->hasPermission('general', 'canUseBookmarks'))
		{
			$hookParams['selectedKey'] = $template->getParam('selectedKey');
			$contents .= $template->create('bookmarks_account_wrapper_sidebar_your_account', $hookParams);
		}
	}

	//  insert the Bookmark link in the drop down menu of the username
	private static function addBookmarksLinkNavTab(&$contents, $hookParams, XenForo_Template_Abstract $template)
	{
		$visitor = XenForo_Visitor::getInstance();
		if ($visitor['user_id'] && $visitor->hasPermission('general', 'canUseBookmarks'))
		{
			$contents .= $template->create('bookmarks_navigation_visitor_tab_links2', $hookParams);
		}
	}

	//  insert the Bookmark link at the top navigation list on the account page
	private static function addBookmarksNavTab(&$contents, $hookParams, XenForo_Template_Abstract $template)
	{
		$visitor = XenForo_Visitor::getInstance();
		if ($visitor['user_id'] && $visitor->hasPermission('general', 'canUseBookmarks'))
		{
			$contents .= $template->create('bookmarks_navigation_tabs_account', $hookParams);
		}
	}

	//  add a navigation tab for bookmark list drop-down
	private static function addBookmarksVisitorTab($hookName, &$contents, $hookParams, XenForo_Template_Abstract $template)
	{
		$visitor = XenForo_Visitor::getInstance();

		if ($visitor['user_id'])
		{
			$options = XenForo_Application::get('options');
			if ($options->bookmarks_navtab && $visitor->hasPermission('general', 'canUseBookmarks'))
			{
				$location = $options->bookmarks_navtab_location;

				if (($location == 'visitor_start' && $hookName == 'navigation_visitor_tabs_start') || ($location == 'visitor_middle' && $hookName == 'navigation_visitor_tabs_middle') || ($location == 'visitor_end' && $hookName == 'navigation_visitor_tabs_end'))
				{
					$bookmarksModel = XenForo_Model::create('Bookmarks_Model_Bookmarks');
					$types = $bookmarksModel->getBookmarkTypes();

					$bookmarks = $bookmarksModel->getBookmarksByContentTypeForNavTab($types);
					$threadBookmarks = $profileBookmarks = $resourceBookmarks = $galleryBookmarks = $showcaseItemBookmarks = array();

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
							$galleryBookmarks[] = $bookmark;
						}
						else if ($type == 'showcase_item')
						{
							$showcaseItemBookmarks[] = $bookmark;
						}
					}

					if ($options->bookmarks_navtab_always_show || (!empty($threadBookmarks) || !empty($profileBookmarks) || !empty($resourceBookmarks) || !empty($galleryBookmarks) || !empty($showcaseItemBookmarks)))
					{
						$hookParams['threadBookmarks'] = $threadBookmarks;
						$hookParams['profileBookmarks'] = $profileBookmarks;
						$hookParams['resourceBookmarks'] = $resourceBookmarks;
						$hookParams['showcaseItemBookmarks'] = $showcaseItemBookmarks;
						$contents .= $template->create('bookmarks_visitor_tab', $hookParams);
					}
				}
			}
		}
	}

	//  insert the Bookmark link at the bottom of each post
	private static function addPostBookmarkOption(&$contents, $hookParams, XenForo_Template_Abstract $template)
	{
		if ($hookParams['post']['message_state'] == 'visible')
		{
			$visitor = XenForo_Visitor::getInstance();
			$thread = $template->getParam('thread');

			if ($thread['discussion_state'] == 'visible' && (!isset($hookParams['post']['canBookmark']) || $hookParams['post']['canBookmark']))
			{
				if ($visitor['user_id'] && $visitor->hasPermission('general',
						'canUseBookmarks') && $visitor->hasNodePermission($thread['node_id'], 'canBookmarkPost')
				)
				{
					if (XenForo_Application::get('options')->bookmarks_post_link_side == 'right') // right side of other links in this location
					{

						$contents .= $template->create('bookmarks_post_controls', $hookParams);
					}
					else
					{
						$contents = $template->create('bookmarks_post_controls', $hookParams) . $contents;
					}
				}
			}
		}
	}

	//  insert the Bookmark link at the bottom of each profile post
	private static function addProfileBookmarkOption(&$contents, $hookParams, XenForo_Template_Abstract $template)
	{
		if ($hookParams['profilePost']['message_state'] == 'visible')
		{
			$visitor = XenForo_Visitor::getInstance();

			if ($visitor['user_id'] && XenForo_Application::get('options')->bookmarks_profile)
			{
				if ($visitor->hasPermission('general', 'canUseBookmarks') && $visitor->hasPermission('profilePost',
						'canBookmarkProfilePost')
				)
				{
					if (XenForo_Application::get('options')->bookmarks_post_link_side == 'right') // right side of other links in this location
					{

						$contents .= $template->create('bookmarks_profile_post_controls', $hookParams);
					}
					else
					{
						$contents = $template->create('bookmarks_profile_post_controls', $hookParams) . $contents;
					}
				}
			}
		}
	}

	//  insert the Bookmark link at the bottom of resource
	private static function addResourceBookmarkOption(&$contents, $hookParams, XenForo_Template_Abstract $template)
	{
		$resource = $template->getParam('resource');

		if ($resource['resource_state'] == 'visible' && $hookParams['update']['isDescriptionUpdate'])
		{
			$visitor = XenForo_Visitor::getInstance();

			if ($visitor['user_id'] && XenForo_Application::get('options')->bookmarks_resource)
			{
				if ($visitor->hasPermission('general', 'canUseBookmarks') && $visitor->hasPermission('resource',
						'canBookmarkResource')
				)
				{
					if (XenForo_Application::get('options')->bookmarks_resource_link_side == 'right') // right side of other links in this location
					{

						$contents .= $template->create('bookmarks_resource_controls', $hookParams);
					}
					else
					{
						$contents = $template->create('bookmarks_resource_controls', $hookParams) . $contents;
					}
				}
			}
		}
	}

	//  insert the Bookmark link at the bottom of each showcase item
	private static function addShowcaseBookmarkOption(&$contents, $hookParams, XenForo_Template_Abstract $template)
	{
		if ($hookParams['item']['item_state'] == 'visible')
		{
			$visitor = XenForo_Visitor::getInstance();

			if ($visitor['user_id'] && XenForo_Application::get('options')->bookmarks_showcase)
			{
				if ($visitor->hasPermission('general', 'canUseBookmarks') && $visitor->hasPermission('nfljsc',
						'canBookmarkShowcase')
				)
				{
					if (XenForo_Application::get('options')->bookmarks_showcase_link_side == 'right') // right side of other links in this location
					{

						$contents .= $template->create('bookmarks_showcase_controls', $hookParams);
					}
					else
					{
						$contents = $template->create('bookmarks_showcase_controls', $hookParams) . $contents;
					}
				}
			}
		}
	}

	//  add bookmark alert preferences to the account alert page
	private static function addAccountAlertPreferences(&$contents, $hookParams, XenForo_Template_Abstract $template)
	{
		$visitor = XenForo_Visitor::getInstance();

		if (XenForo_Application::get('options')->bookmarks_account_alert_preferences && $visitor->hasPermission('general',
				'canUseBookmarks')
		)
		{
			$hookParams['alertOptOuts'] = $template->getParam('alertOptOuts');
			$hookParams['resource'] = XenForo_Application::get('options')->bookmarks_resource;
			$hookParams['showcase'] = XenForo_Application::get('options')->bookmarks_showcase;
			$hookParams['gallery'] = XenForo_Application::get('options')->bookmarks_media;
			$contents .= $template->create('bookmarks_account_alerts_extra', $hookParams);
		}
	}
}