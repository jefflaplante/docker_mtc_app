<?php

class Bookmarks_StatsHandler_Bookmarks extends XenForo_StatsHandler_Abstract
{
	public function getStatsTypes()
	{
		$options = XenForo_Application::get('options');
		$fullStats = $options->bookmarks_full_stats;

		$types = array('bookmarks' => $fullStats ? new XenForo_Phrase('bookmarks_stats_total') : new XenForo_Phrase('bookmarks_bookmarks'));

		if ($fullStats)
		{
			$types['bookmarks_post'] = new XenForo_Phrase('bookmarks_stats_posts');

			if ($options->bookmarks_profile)
			{
				$types['bookmarks_profile_post'] = new XenForo_Phrase('bookmarks_stats_profile_posts');
			}

			if ($options->bookmarks_resource)
			{
				$types['bookmarks_resource'] = new XenForo_Phrase('bookmarks_stats_resources');
			}

			if ($options->bookmarks_showcase)
			{
				$types['bookmarks_showcase_item'] = new XenForo_Phrase('bookmarks_stats_showcase_items');
			}

			if ($options->bookmarks_media)
			{
				$types['bookmarks_xengallery_media'] = new XenForo_Phrase('bookmarks_media');
			}
		}

		return $types;
	}

	public function getData($startDate, $endDate)
	{
		$db = $this->_getDb();

		$bookmarks = $db->fetchPairs(
			$this->_getBasicDataQuery('bookmark_content', 'bookmark_date'),
			array(
				$startDate,
				$endDate
			)
		);

		$data = array('bookmarks' => $bookmarks);

		$options = XenForo_Application::get('options');
		if ($options->bookmarks_full_stats)
		{
			$posts = $db->fetchPairs(
				$this->_getBasicDataQuery('bookmark_content', 'bookmark_date', 'content_type = ' . $db->quote('post')),
				array(
					$startDate,
					$endDate
				)
			);

			$data['bookmarks_post'] = $posts;

			if ($options->bookmarks_profile)
			{
				$profilePosts = $db->fetchPairs(
					$this->_getBasicDataQuery('bookmark_content', 'bookmark_date',
						'content_type = ' . $db->quote('profile_post')),
					array(
						$startDate,
						$endDate
					)
				);

				$data['bookmarks_profile_post'] = $profilePosts;
			}

			if ($options->bookmarks_resource)
			{
				$resources = $db->fetchPairs(
					$this->_getBasicDataQuery('bookmark_content', 'bookmark_date',
						'content_type = ' . $db->quote('resource')),
					array(
						$startDate,
						$endDate
					)
				);

				$data['bookmarks_resource'] = $resources;
			}

			if ($options->bookmarks_media)
			{
				$media = $db->fetchPairs(
					$this->_getBasicDataQuery('bookmark_content', 'bookmark_date',
						'content_type = ' . $db->quote('xengallery_media')),
					array(
						$startDate,
						$endDate
					)
				);

				$data['bookmarks_xengallery_media'] = $media;
			}

			if ($options->bookmarks_showcase)
			{
				$showcaseItems = $db->fetchPairs(
					$this->_getBasicDataQuery('bookmark_content', 'bookmark_date',
						'content_type = ' . $db->quote('showcase_item')),
					array(
						$startDate,
						$endDate
					)
				);

				$data['bookmarks_showcase_item'] = $showcaseItems;
			}
		}

		return $data;
	}
}