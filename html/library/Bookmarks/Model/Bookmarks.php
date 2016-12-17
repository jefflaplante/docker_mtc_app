<?php

// Model class for manipulating Bookmarks.
class Bookmarks_Model_Bookmarks extends XenForo_Model
{
	/**
	 * Finds out if the user has at least one bookmark
	 *
	 * @param integer $userId
	 *
	 * @return boolean
	 */
	public function hasBookmarks($userId)
	{
		return $this->_getDb()->fetchOne('
			SELECT bookmark_id IS TRUE
			FROM bookmark_content
			WHERE bookmark_user_id = ?
			LIMIT 1', $userId
		);
	}

	/**
	 * Get a bookmark item by ID
	 *
	 * @param integer $bookmarkId - the auto increment value of the item
	 *
	 * @return array bookmark_content
	 */
	public function getBookmarkById($bookmarkId)
	{
		return $this->_getDb()->fetchRow('
			SELECT *
			FROM bookmark_content
			WHERE bookmark_id = ?
		', $bookmarkId);
	}

	/**
	 * Get a bookmark item by ID
	 *
	 * @param integer $bookmarkId - the auto increment value of the item
	 *
	 * @return array bookmark_content
	 */
	public function getBookmarksByIds(array $bookmarkIds = array())
	{
		return $this->fetchAllKeyed("
			SELECT *
			FROM bookmark_content
			WHERE bookmark_user_id = " . XenForo_Visitor::getUserId() . " AND bookmark_id IN (" . $this->_getDb()
				->quote($bookmarkIds) . ")", 'bookmark_id');
	}

	/**
	 * Get a bookmark item
	 *
	 * @param string  $contentType - such as 'post'
	 * @param integer $contentId   - such as post_id
	 * @param integer $userId
	 *
	 * @return array bookmark_content
	 */
	public function getBookmarkByContent($contentType, $contentId, $userId)
	{
		return $this->_getDb()->fetchRow('
			SELECT *
			FROM bookmark_content
			WHERE content_type = ?
				AND content_id = ?
				AND bookmark_user_id = ?
		', array(
			$contentType,
			$contentId,
			$userId
		));
	}

	/**
	 * Finds out if bookmark item is set as Public
	 *
	 * @param integer $bookmarkId - the auto increment value of the bookmark
	 *
	 * @return boolean
	 */
	public function isPublic($bookmarkId)
	{
		return $this->_getDb()->fetchOne('
			SELECT public IS TRUE
			FROM bookmark_content
			WHERE bookmark_id = ?
			LIMIT 1', $bookmarkId
		);
	}

	/**
	 * Get bookmark tags by creator ID
	 *
	 * @param integer $bookmarkUserId - the bookmark creator
	 *
	 * @return array Format: [bookmark_tag] => count, name
	 */
	public function getTagsByUserId($bookmarkUserId)
	{
		$db = $this->_getDb();
		$types = $this->getBookmarkTypes();

		return $db->fetchAll("
			SELECT COUNT(*) AS count, bookmark_tag AS name
			FROM bookmark_content
			WHERE bookmark_user_id = ? AND content_type IN (" . $db->quote($types) . ") AND bookmark_tag != ''
			GROUP BY bookmark_tag ASC
		", $bookmarkUserId);
	}

	/**
	 * Get bookmark tag names by creator ID
	 *
	 * @param integer $bookmarkUserId - the bookmark creator
	 *
	 * @return array Format: [bookmark_tag] => name
	 */
	public function getTagNamesByUserId($bookmarkUserId)
	{
		$db = $this->_getDb();
		$types = $this->getBookmarkTypes();

		return $db->fetchAll("
			SELECT DISTINCT bookmark_tag AS name
			FROM bookmark_content
			WHERE bookmark_user_id = ? AND content_type IN (" . $db->quote($types) . ") AND bookmark_tag != ''
			ORDER BY bookmark_tag ASC
		", $bookmarkUserId);
	}

	/**
	 * Updates bookmark tags by user id
	 *
	 * @param array   $tags - such as 'name' => 'zzz'
	 * @param integer $userId
	 *
	 */
	public function updateTags(array $tags, $userId)
	{
		foreach ($tags AS $old => $new)
		{
			$userId = intval($userId);

			$this->_getDb()->query('
				UPDATE bookmark_content
				SET bookmark_tag = ?
				WHERE bookmark_user_id = ? AND bookmark_tag = ?
				', array(
				$new,
				$userId,
				$old
			));
		}
	}

	/**
	 * Get bookmark items by Content ID
	 *
	 * @param array  $contentIds  - content_id of the item - such as post_id
	 * @param string $contentType - such as 'post'
	 *
	 * @return array Format: [bookmark_id] => info
	 */
	public function getBookmarksByContentTypeIds(array $contentIds, $contentType)
	{
		$db = $this->_getDb();

		return $this->fetchAllKeyed('
			SELECT *
			FROM bookmark_content
			WHERE content_type = ' . $db->quote($contentType) . ' AND content_id IN (' . $db->quote($contentIds) . ')' . '
		', 'bookmark_id');
	}

	/**
	 * Get bookmark items by Content Type with optional (content_user_id OR bookmark_user_id)
	 *
	 * @param string  $contentType    - content_type of the item - such as 'post'
	 * @param integer $contentUserId  - content_user_id
	 * @param integer $bookmarkUserId - bookmark_user_id
	 *
	 * @return array Format: [bookmark_id] => info
	 */
	public function getBookmarksByContentType($contentType, $contentUserId = null, $bookmarkUserId = null)
	{
		$contentUserId = intval($contentUserId);
		$bookmarkUserId = intval($bookmarkUserId);
		$whereClause = '';
		$db = $this->_getDb();

		if ($contentUserId > 0 && $bookmarkUserId > 0)
		{
			$whereClause = ' AND (content_user_id = ' . $db->quote($contentUserId) . ' OR bookmark_user_id = ' . $db->quote($bookmarkUserId) . ')';
		}
		else if ($contentUserId > 0)
		{
			$whereClause = ' AND content_user_id = ' . $db->quote($contentUserId);
		}
		else if ($bookmarkUserId > 0)
		{
			$whereClause = ' AND bookmark_user_id = ' . $db->quote($bookmarkUserId);
		}

		return $this->fetchAllKeyed('
			SELECT *
			FROM bookmark_content
			WHERE content_type = ' . $db->quote($contentType) . $whereClause . '
		', 'bookmark_id');
	}

	/**
	 * Get distinct bookmark content IDs by Content Type
	 *
	 * @param string $contentType - content_type of the item - such as 'post'
	 *
	 * @return array content_id
	 */
	public function getContentIdsByContentType($contentType)
	{
		$db = $this->_getDb();

		return $this->fetchAllKeyed('
					SELECT DISTINCT content_id
					FROM bookmark_content
					WHERE content_type = ' . $db->quote($contentType) . '
					ORDER BY content_id
		', 'content_id');
	}

	/**
	 * Get bookmark content IDs by Content Type and bookmark creator ID
	 *
	 * @param string  $contentType - content_type of the item - such as 'post'
	 * @param integer $userId      - bookmark creator
	 *
	 * @return array Format: [content_id] => content_id
	 */
	public function getContentIdsByContentTypeCreatorId($contentType, $userId)
	{
		$db = $this->_getDb();

		return $db->fetchCol('
				SELECT content_id
				FROM bookmark_content
				WHERE content_type = ' . $db->quote($contentType) . ' AND bookmark_user_id = ?
		', $userId);
	}

	/**
	 * Get distinct bookmark creator IDs
	 *
	 * @return array bookmark_user_id
	 */
	public function getBookmarkCreatorIds()
	{
		return $this->_getDb()->fetchCol('
					SELECT DISTINCT bookmark_user_id
					FROM bookmark_content
					ORDER BY bookmark_user_id
		');
	}

	/**
	 * Get bookmark items by Content Type
	 *
	 * @param array /string $contentType - content_type of the item - such as 'post'
	 *
	 * @return array Format: [content_id] => info
	 */
	public function getBookmarksByContentTypeForNavTab($contentTypes)
	{
		if (!is_array($contentTypes))
		{
			$contentTypes = array($contentTypes);
		}

		foreach ($contentTypes AS $contentType)
		{
			if (!$this->isValidBookmarkType($contentType))
			{
				unset($contentTypes[$contentType]);
			}

			if (empty($contentTypes))
			{
				return array();
			}
		}

		$db = $this->_getDb();
		$limit = XenForo_Application::get('options')->bookmarks_max_allowed;

		$bookmarks = $this->fetchAllKeyed($this->limitQueryResults('
			SELECT bookmark_id, content_id, content_type, bookmark_note AS note
			FROM bookmark_content
			WHERE content_type IN (' . $db->quote($contentTypes) . ')
			AND bookmark_user_id = ' . XenForo_Visitor::getUserId() . '
			AND quick_link = 1
			AND bookmark_note != \'\'
			ORDER BY sticky DESC, bookmark_date DESC
		', $limit, 0), 'bookmark_id');

		// truncate the note to fit is the Quick Links navigation tab
		foreach ($bookmarks AS &$bookmark)
		{
			$bookmark['note'] = XenForo_Helper_String::wholeWordTrim($bookmark['note'],
				XenForo_Application::get('options')->bookmarks_quicklink_length);
		}

		return $bookmarks;
	}

	/**
	 * Saves or updates a content type as a Bookmark
	 *
	 * @param string  $contentType    - such as 'post'
	 * @param integer $contentId      - such as post_id
	 * @param integer $contentUserId  - creator of the content
	 * @param integer $bookmarkUserId - creator of the bookmark
	 * @param string  $errorKey       - passed by reference
	 * @param string  $note           - comment to self about the Bookmark
	 * @param string  $tag            - search filter tag
	 * @param integer $public         - whether or not to display in the profile page list
	 * @param integer $sticky         - whether or not to always display at the top of the list
	 *
	 * @return boolean
	 */
	public function bookmarkSave($contentType, $contentId, $contentUserId, $bookmarkUserId, &$errorKey, $note = '', $tag = '', $public = 0, $sticky = 0, $quickLink = 0)
	{
		if (!$this->isValidBookmarkType($contentType))
		{
			$errorKey = 'bookmarks_unknown_content_type';

			return false;
		}

		$contentId = intval($contentId);
		$contentUserId = intval($contentUserId);
		$bookmarkUserId = intval($bookmarkUserId);
		$public = intval($public);
		$sticky = intval($sticky);
		$quickLink = intval($quickLink);

		$exists = $this->getBookmarkByContent($contentType, $contentId, $bookmarkUserId);

		if ($exists) // update - will update the save date
		{
			$setVars = array(
				'content_type' => $contentType,
				'content_id' => $contentId,
				'bookmark_user_id' => $bookmarkUserId
			);

			$dw = XenForo_DataWriter::create('Bookmarks_DataWriter_Bookmarks');
			$dw->setExistingData($setVars);
		}
		else
		{
			// global limit on number of bookmarks
			$maxAllowed = XenForo_Application::get('options')->bookmarks_max_allowed;
			if ($maxAllowed)
			{
				if ($this->countBookmarksForContentByUser($bookmarkUserId) >= $maxAllowed)
				{
					$errorKey = new XenForo_Phrase('bookmarks_reached_max_allowed', array(
						'max' => XenForo_Locale::numberFormat($maxAllowed),
						'link' => XenForo_Link::buildPublicLink('account/bookmarks')
					));

					return false;
				}
			}

			$dw = XenForo_DataWriter::create('Bookmarks_DataWriter_Bookmarks');
		}

		$vars = array(
			'bookmark_tag' => $tag,
			'content_type' => $contentType,
			'content_id' => $contentId,
			'content_user_id' => $contentUserId,
			'bookmark_user_id' => $bookmarkUserId,
			'bookmark_date' => XenForo_Application::$time,
			'bookmark_note' => $note,
			'public' => $public,
			'sticky' => $sticky,
			'quick_link' => $quickLink
		);

		$dw->bulkSet($vars);

		$dw->preSave();

		if ($dw->hasErrors())
		{
			$errors = $dw->getErrors();
			$errorKey = reset($errors);

			return false;
		}

		$dw->save();

		// new bookmark - saved as public
		if ($public)
		{
			// Recent Activity news feed
			$this->_publishToNewsFeed($bookmarkUserId, $contentType, $contentId);

			// user alerts
			if ($contentUserId <> $bookmarkUserId)
			{
				$this->_sendBookmarkAlertToContentUser($contentType, $contentId, $contentUserId, $bookmarkUserId);
			}
		}

		return true;
	}

	/**
	 * Publishes a bookmark event to the news feed
	 */
	protected function _publishToNewsFeed($bookmarkUserId, $contentType, $contentId)
	{
		// only publish if save came from the bookmark owner
		$visitor = XenForo_Visitor::getInstance();
		if ($visitor['user_id'] != $bookmarkUserId)
		{
			return;
		}

		// templates:
		// 'news_feed_item_post_bookmark' / 'news_feed_item_profile_post_bookmark' / 'news_feed_item_showcase_item_bookmark' / 'news_feed_item_resource_bookmark'

		$this->_getNewsFeedModel()->publish(
			$visitor['user_id'],
			$visitor['username'],
			$contentType,
			$contentId,
			'bookmark'
		);
	}

	/**
	 * Updates a Bookmark by ID
	 *
	 * @param array   $fields     - such as 'content_type' => 'post'
	 * @param integer $bookmarkId - the auto increment value of the bookmark
	 * @param string  $errorKey   - passed by reference
	 *
	 * @return boolean
	 */
	public function bookmarkUpdateById(array $fields, $bookmarkId, &$errorKey)
	{
		if (!is_array($fields))
		{
			$errorKey = 'field value must be an array';

			return false;
		}
		else if (isset($fields['content_type']))
		{
			if (!$this->isValidBookmarkType($fields['content_type']))
			{
				$errorKey = 'bookmarks_unknown_content_type';

				return false;
			}
		}

		$bookmarkId = intval($bookmarkId);
		$exists = $this->getBookmarkById($bookmarkId);

		if (empty($exists))
		{
			$errorKey = 'bookmarks_item_not_found';

			return false;
		}

		$dw = XenForo_DataWriter::create('Bookmarks_DataWriter_Bookmarks');
		$dw->setExistingData($bookmarkId);
		$dw->bulkSet($fields);
		$dw->preSave();

		if ($dw->hasErrors())
		{
			$errors = $dw->getErrors();
			$errorKey = reset($errors);

			return false;
		}

		$dw->save();

		return true;
	}

	/**
	 * Deletes a Bookmark
	 *
	 * @param integer $bookmarkId - the auto increment value of the bookmark
	 * @param string  $errorKey   - passed by reference
	 *
	 * @return boolean
	 */
	public function bookmarkDelete($bookmarkId, &$errorKey)
	{
		$bookmarkId = intval($bookmarkId);

		if (!XenForo_Visitor::getUserId())
		{
			$errorKey = 'must_be_registered';

			return false;
		}

		if ($bookmarkId < 1)
		{
			$errorKey = 'bookmarks_item_not_found';

			return false;
		}

		$dw = XenForo_DataWriter::create('Bookmarks_DataWriter_Bookmarks');
		$dw->setExistingData($bookmarkId);

		$dw->preDelete();

		if ($dw->hasErrors())
		{
			$errors = $dw->getErrors();
			$errorKey = reset($errors);

			return false;
		}

		$dw->delete();

		return true;
	}

	/**
	 * Deletes table rows based on a WHERE clause.
	 *
	 * @param  mixed $where DELETE WHERE clause(s).
	 *
	 * @return int    The number of affected rows.
	 */
	protected function _delete($where)
	{
		return $this->_getDb()->delete('bookmark_content', $where);
	}

	/**
	 * Delete all bookmarks that belong to a content type and ID - such as post_id
	 *
	 * @param string  $contentType - such as 'post'
	 * @param integer $contentId   - such as post_id
	 */
	public function deleteAllByContentTypeId($contentType, $contentId)
	{
		$db = $this->_getDb();
		$contentIdQuoted = $db->quote($contentId);
		$contentTypeQuoted = $db->quote($contentType);
		$where = "content_type = $contentTypeQuoted AND content_id = $contentIdQuoted";
		$this->_delete($where);
	}

	/**
	 * Delete all bookmarks that belong to a content type
	 *
	 * @param string $contentType - such as 'post'
	 */
	public function deleteAllByContentType($contentType)
	{
		if ($this->isValidBookmarkType($contentType))
		{
			$contentTypeQuoted = $this->_getDb()->quote($contentType);
			$where = "content_type = $contentTypeQuoted";
			$this->_delete($where);
		}
	}

	/**
	 * Delete all bookmarks that belong to a specific user
	 *
	 * @param integer $userId
	 */
	public function deleteAllByUserId($userId)
	{
		$userIdQuoted = $this->_getDb()->quote($userId);
		$where = "bookmark_user_id = $userIdQuoted";
		// delete all bookmarks that were created by this user
		// bookmarks that have this user's content are not deleted because XenForo does not delete their content
		$this->_delete($where);
	}

	/**
	 * Gets bookmarks based on the content user for pagination.
	 *
	 * @param integer $userId
	 * @param array   $fetchOptions Fetch options. Supports limit (page, perPage), public, and content_type
	 *                              content_type - such as 'post'
	 *                              public - whether or not to display public only bookmarks
	 *
	 * @return array Format: [bookmark_id] => info
	 */
	public function getBookmarksForContentByUser($userId, array $fetchOptions = array())
	{
		$selectJoinWhereOptions = $this->_prepareSelectJoinWhereFetchOptions($fetchOptions);
		if (empty($selectJoinWhereOptions))
		{
			return array();
		}

		$limitOptions = $this->prepareLimitFetchOptions($fetchOptions);

		return $this->fetchAllKeyed($this->limitQueryResults('
				SELECT bookmark.*, user.*
				' . $selectJoinWhereOptions['selectFields'] . '
				FROM bookmark_content AS bookmark
				LEFT JOIN xf_user AS user ON (user.user_id = bookmark.content_user_id)
				' . $selectJoinWhereOptions['joinTables'] . '
				WHERE bookmark.bookmark_user_id = ?' . $selectJoinWhereOptions['whereClause'] . '
				ORDER BY bookmark.sticky DESC, bookmark.bookmark_date DESC
			', $limitOptions['limit'], $limitOptions['offset']
		), 'bookmark_id', $userId);
	}

	/**
	 * Gets bookmarks based on the content user for a feed.
	 *
	 * @param integer $userId
	 * @param array   $fetchOptions Fetch options. Supports limit (page, perPage), public, and content_type
	 *                              content_type - such as 'post'
	 *                              public - whether or not to display public only bookmarks
	 * @param integer $cutOffDate
	 * @param array   $skipIds
	 *
	 * @return array Format: [bookmark_id] => info
	 */
	public function getBookmarksForContentByUserFeed($userId, array $fetchOptions, $cutOffDate, array $skipIds = array())
	{
		$selectJoinWhereOptions = $this->_prepareSelectJoinWhereFetchOptions($fetchOptions);
		$cutOffDate = intval($cutOffDate);
		if (empty($selectJoinWhereOptions) || !$cutOffDate)
		{
			return array();
		}

		$limitOptions = $this->prepareLimitFetchOptions($fetchOptions);

		if (empty($skipIds))
		{
			$skipIds[] = 0;
		}
		$skipIds = $this->_getDb()->quote($skipIds);

		return $this->fetchAllKeyed($this->limitQueryResults('
				SELECT bookmark.*, user.*
				' . $selectJoinWhereOptions['selectFields'] . '
				FROM bookmark_content AS bookmark
				LEFT JOIN xf_user AS user ON (user.user_id = bookmark.content_user_id)
				' . $selectJoinWhereOptions['joinTables'] . '
				WHERE bookmark.bookmark_user_id = ? AND ((bookmark.sticky = 0 AND bookmark.bookmark_date < ? AND bookmark.bookmark_id NOT IN (' . $skipIds . ')) OR (bookmark.sticky = 1 AND bookmark.bookmark_id NOT IN (' . $skipIds . ')))' . $selectJoinWhereOptions['whereClause'] . '
				ORDER BY bookmark.sticky DESC, bookmark.bookmark_date DESC
			', $limitOptions['limit'], $limitOptions['offset']
		), 'bookmark_id', array(
			$userId,
			$cutOffDate
		));
	}

	/**
	 * Count the number of bookmarks a content user has
	 *
	 * @param integer $userId
	 * @param array   $fetchOptions Fetch options. Supports public, and content_type
	 *                              content_type - such as 'post'
	 *                              public - whether or not to display public only bookmarks
	 *
	 * @return integer
	 */
	public function countBookmarksForContentByUser($userId, array $fetchOptions = array())
	{
		$selectJoinWhereOptions = $this->_prepareSelectJoinWhereFetchOptions($fetchOptions);
		if ($selectJoinWhereOptions === false) // something went wrong - such as bad content type
		{
			return 0;
		}

		$db = $this->_getDb();

		return $db->fetchOne('
			SELECT COUNT(*)
			' . $selectJoinWhereOptions['selectFields'] . '
			FROM bookmark_content AS bookmark
			' . $selectJoinWhereOptions['joinTables'] . '
			WHERE bookmark.bookmark_user_id = ?' . $selectJoinWhereOptions['whereClause'] . '
		', $userId);
	}

	/**
	 * Prepares additional Where clauses
	 * Includes: post, profile_post, all
	 *
	 * @param array $fetchOptions Unprepared options
	 *
	 * @return false|array Where options; keys: post, profile_post, where
	 */
	protected function _prepareSelectJoinWhereFetchOptions(array $fetchOptions)
	{
		$incProfilePosts = XenForo_Application::get('options')->bookmarks_profile;
		$incShowcases = XenForo_Application::get('options')->bookmarks_showcase;
		$incResources = XenForo_Application::get('options')->bookmarks_resource;
		$incMedia = XenForo_Application::getOptions()->bookmarks_media;
		$db = $this->_getDb();

		$selectJoinWhereOptions = array(
			'selectFields' => '',
			'joinTables' => '',
			'whereClause' => ''
		);

		if (isset($fetchOptions['content_type']) && !empty($fetchOptions['content_type']))
		{
			$contentType = $fetchOptions['content_type'];
		}
		else
		{
			$contentType = 'all'; // no type given so fetch all types
		}

		if ($contentType == 'all') // fetch all types
		{
			if (!$incProfilePosts || !$incResources || !$incShowcases || !$incMedia)
			{
				$types = array($db->quote('post'));

				if ($incProfilePosts)
				{
					$types[] = $db->quote('profile_post');
				}

				if ($incResources)
				{
					$types[] = $db->quote('resource');
				}

				if ($incShowcases)
				{
					$types[] = $db->quote('showcase_item');
				}

				if ($incMedia)
				{
					$types[] = $db->quote('xengallery_media');
				}

				$selectJoinWhereOptions['whereClause'] .= ' AND (bookmark.content_type IN (' . implode(',',
						$types) . '))';
			}
		}
		else
		{
			// unknown content type or no profile_post/resource/showcase bookmarks allowed
			if (!$this->isValidBookmarkType($contentType) || ($contentType == 'profile_post' && !$incProfilePosts) || ($contentType == 'resource' && !$incResources) || ($contentType == 'xengallery_media' && !$incMedia) || ($contentType == 'showcase_item' && !$incShowcases))
			{
				return false;
			}

			$selectJoinWhereOptions['whereClause'] .= ' AND bookmark.content_type = \'' . $contentType . '\'';
		}

		if (isset($fetchOptions['tag']) && !empty($fetchOptions['tag']))
		{
			$tag = $db->quote($fetchOptions['tag']);
			$selectJoinWhereOptions['whereClause'] .= ' AND bookmark.bookmark_tag = ' . $tag;
		}

		if (isset($fetchOptions['public']))
		{
			$public = intval($fetchOptions['public']);
			$selectJoinWhereOptions['whereClause'] .= ' AND bookmark.public = ' . $public;
		}

		if (isset($fetchOptions['quick_link']))
		{
			$quickLink = intval($fetchOptions['quick_link']);
			$selectJoinWhereOptions['whereClause'] .= ' AND bookmark.quick_link = ' . $quickLink;
		}

		if (isset($fetchOptions['content_id']))
		{
			if (is_array($fetchOptions['content_id']))
			{
				$selectJoinWhereOptions['whereClause'] .= ' AND bookmark.content_id IN (' . $this->_getDb()
						->quote($fetchOptions['content_id']) . ')';
			}
			else
			{
				$contentId = intval($fetchOptions['content_id']);
				$selectJoinWhereOptions['whereClause'] .= ' AND bookmark.content_id = ' . $this->_getDb()
						->quote($contentId);
			}
		}


		return $selectJoinWhereOptions;
	}

	/**
	 * Gets a bookmark by its ID.
	 *
	 * @param integer $bookmarkId
	 * @param boolean $public - whether or not to display public only bookmarks
	 *
	 * @return array bookmark info
	 */
	public function getBookmarkForContentById($bookmarkId, $public = false)
	{
		$db = $this->_getDb();

		// if bookmark is not public then limit to bookmark creator
		return $db->fetchRow('
				SELECT bookmark.*, user.*
				FROM bookmark_content AS bookmark
				LEFT JOIN xf_user AS user ON (user.user_id = bookmark.content_user_id)
				WHERE bookmark.bookmark_id = ?' . ($public ? ' AND bookmark.public = ' . $db->quote($public) : '') . ' AND IF(bookmark.public = 1 OR bookmark.bookmark_user_id = ' . XenForo_Visitor::getUserId() . ', 1, 0)
		', $bookmarkId);
	}

	/**
	 * Remove bookmarks that belong to deleted users
	 * This can happen when a user is deleted while the plugin is disabled
	 */
	public function removeDeletedUsers()
	{
		$db = $this->_getDb();
		$bookmarkUserIds = $this->getBookmarkCreatorIds();

		if (!empty($bookmarkUserIds))
		{
			$userIds = $db->fetchCol('
					SELECT user_id
					FROM xf_user
					WHERE user_id IN (' . $db->quote($bookmarkUserIds) . ')
			');

			// users that no longer exist
			$deleteUserIds = array_diff($bookmarkUserIds, $userIds);

			// delete all bookmarks	that belong to these users
			while (count($deleteUserIds))
			{
				$deleteIds = array_slice($deleteUserIds, 0, 500); // process 500 at a time

				$where = 'bookmark_user_id IN (' . $db->quote($deleteIds) . ')';
				$this->_delete($where);

				// remove 500 from the $deleteUserIds array
				$deleteUserIds = array_splice($deleteUserIds, 500);
			}
		}
	}

	/**
	 * Remove bookmarks that point to content that is no longer viewable to its creator
	 * This can happen when a post is moved or merged while the plugin is disabled or upon user group change
	 *
	 * @param array   $bookmarkUserIds - ID's of the creators of bookmarks
	 * @param boolean $sendAlerts      - whether or not to notify the user about the bookmark being deleted - not used when called from the Cron
	 */
	public function removeUnViewableContent(array $bookmarkUserIds = null, $sendAlerts = false)
	{
		$db = $this->_getDb();
		$sendPostAlerts = $sendProfilePostAlerts = $sendResourceAlerts = $sendMediaAlerts = $sendShowcaseItemAlerts = $sendAlerts;

		if (!isset($bookmarkUserIds))
		{
			$bookmarkUserIds = $this->getBookmarkCreatorIds();
		}

		while (count($bookmarkUserIds))
		{
			$userIds = array_slice($bookmarkUserIds, 0, 500); // process 500 at a time

			foreach ($userIds AS $userId)
			{
				$postModel = $this->_getPostModel();
				$profilePostModel = $this->_getProfilePostModel();
				$userModel = $this->_getUserModel();

				$bookmarkCreator = $userModel->getUserById($userId, array(
					'join' => XenForo_Model_User::FETCH_USER_FULL | XenForo_Model_User::FETCH_USER_PERMISSIONS
				));

				$bookmarkCreator['permissions'] = XenForo_Permission::unserializePermissions($bookmarkCreator['global_permission_cache']);

				// THREAD POSTS
				$postIds = $this->getContentIdsByContentTypeCreatorId('post', $userId);

				if (!empty($postIds))
				{
					$deletePostArray = array();

					$posts = $postModel->getPostsByIds($postIds, array(
						'join' => XenForo_Model_Post::FETCH_THREAD | XenForo_Model_Post::FETCH_FORUM,
						'permissionCombinationId' => $bookmarkCreator['permission_combination_id']
					));

					$posts = $this->unserializePermissionsInList($posts, 'node_permission_cache');

					foreach ($posts AS $postId => $post)
					{
						if ($post['message_state'] != 'visible' || $post['discussion_state'] != 'visible' || !$postModel->canViewPostAndContainer(
								$post, $post, $post, $null, $post['permissions'], $bookmarkCreator
							)
						)
						{
							// cannot be viewed so add to deletion array
							$deletePostArray[] = $postId;
						}
					}

					// DELETE POST BOOKMARKS
					if (!empty($deletePostArray))
					{
						$contentType = 'post';

						if ($sendPostAlerts)
						{
							foreach ($deletePostArray AS $contentId)
							{
								// bookmark alert
								$this->sendBookmarkAlert($contentType, $contentId, 'content_not_viewable', 'delete',
									$userId);
							}
						}

						$deleteIdsQuoted = $db->quote($deletePostArray);
						$userIdQuoted = $db->quote($userId);
						$contentTypeQuoted = $db->quote($contentType);

						// delete unviewable bookmarks
						$where = "bookmark_user_id = $userIdQuoted AND content_type = $contentTypeQuoted AND content_id IN ($deleteIdsQuoted)";
						$this->_delete($where);
					}
				}

				// PROFILE POSTS
				$profilePostIds = $this->getContentIdsByContentTypeCreatorId('profile_post', $userId);

				if (!empty($profilePostIds))
				{
					$deleteProfilePostArray = array();

					if (XenForo_Application::get('options')->bookmarks_profile)
					{
						$posts = $profilePostModel->getProfilePostsByIds($profilePostIds, array(
							'join' => XenForo_Model_ProfilePost::FETCH_USER_RECEIVER
						));

						foreach ($posts AS $postId => $post)
						{
							$user = $userModel->getUserById($post['profile_user_id'], array(
								'join' => XenForo_Model_User::FETCH_USER_PRIVACY,
								'followingUserId' => $userId
							));

							if (empty($user) || $post['message_state'] != 'visible' || !$profilePostModel->canViewProfilePostAndContainer(
									$post, $user, $null, $bookmarkCreator
								)
							)
							{
								// cannot be viewed so add to deletion array
								$deleteProfilePostArray[] = $postId;
							}
						}
					}
					else
					{
						// since profile posts no longer count, delete all
						$deleteProfilePostArray = $profilePostIds;

						// no need to send an alert
						$sendProfilePostAlerts = false;
					}

					// DELETE PROFILE POST BOOKMARKS
					if (!empty($deleteProfilePostArray))
					{
						$contentType = 'profile_post';

						if ($sendProfilePostAlerts)
						{
							foreach ($deleteProfilePostArray AS $contentId)
							{
								// bookmark alert
								$this->sendBookmarkAlert($contentType, $contentId, 'content_not_viewable', 'delete',
									$userId);
							}
						}

						$deleteIdsQuoted = $db->quote($deleteProfilePostArray);
						$userIdQuoted = $db->quote($userId);
						$contentTypeQuoted = $db->quote($contentType);

						// delete unviewable bookmarks
						$where = "bookmark_user_id = $userIdQuoted AND content_type = $contentTypeQuoted AND content_id IN ($deleteIdsQuoted)";
						$this->_delete($where);
					}
				}

				// RESOURCES
				$resourceIds = $this->getContentIdsByContentTypeCreatorId('resource', $userId);

				if (!empty($resourceIds))
				{
					$deleteResourceArray = array();

					if (XenForo_Application::get('options')->bookmarks_resource)
					{
						$resourcemModel = $this->_getResourceModel();
						$items = $resourcemModel->getResourcesByIds($resourceIds,
							array('permissionCombinationId' => $bookmarkCreator['permission_combination_id']));
						$items = $this->unserializePermissionsInList($items, 'category_permission_cache');

						foreach ($items AS $itemId => $item)
						{
							if ($item['resource_state'] != 'visible' || !$resourcemModel->canViewResourceAndContainer($item,
									$item, $null, $bookmarkCreator, $item['permissions'])
							)
							{
								// cannot be viewed so add to deletion array
								$deleteResourceArray[] = $itemId;
							}
						}
					}
					else
					{
						// since resource is no longer active, delete all
						$deleteResourceArray = $resourceIds;

						// no need to send an alert
						$sendResourceAlerts = false;
					}

					// DELETE RESOURCE BOOKMARKS
					if (!empty($deleteResourceArray))
					{
						$contentType = 'resource';

						if ($sendResourceAlerts)
						{
							foreach ($deleteResourceArray AS $contentId)
							{
								// bookmark alert
								$this->sendBookmarkAlert($contentType, $contentId, 'content_not_viewable', 'delete',
									$userId);
							}
						}

						$deleteIdsQuoted = $db->quote($resourceIds);
						$userIdQuoted = $db->quote($userId);
						$contentTypeQuoted = $db->quote($contentType);

						// delete unviewable bookmarks
						$where = "bookmark_user_id = $userIdQuoted AND content_type = $contentTypeQuoted AND content_id IN ($deleteIdsQuoted)";
						$this->_delete($where);
					}
				}

				// MEDIA
				$mediaIds = $this->getContentIdsByContentTypeCreatorId('xengallery_media', $userId);

				if (!empty($mediaIds))
				{
					$deleteMediaArray = array();

					if (XenForo_Application::get('options')->bookmarks_media)
					{
						$mediaModel = $this->_getMediaModel();
						$items = $mediaModel->getMediaByIds($mediaIds);
						foreach ($items AS $itemId => $item)
						{
							if ($item['media_state'] != 'visible' || !$mediaModel->canViewMediaItem($item, $null,
									$bookmarkCreator)
							)
							{
								// cannot be viewed so add to deletion array
								$deleteMediaArray[] = $itemId;
							}
						}
					}
					else
					{
						// since media is no longer active, delete all
						$deleteMediaArray = $mediaIds;

						// no need to send an alert
						$sendMediaAlerts = false;
					}

					// DELETE MEDIA BOOKMARKS
					if (!empty($deleteMediaArray))
					{
						$contentType = 'xengallery_media';

						if ($sendMediaAlerts)
						{
							foreach ($deleteMediaArray AS $contentId)
							{
								// bookmark alert
								$this->sendBookmarkAlert($contentType, $contentId, 'content_not_viewable', 'delete',
									$userId);
							}
						}

						$deleteIdsQuoted = $db->quote($mediaIds);
						$userIdQuoted = $db->quote($userId);
						$contentTypeQuoted = $db->quote($contentType);

						// delete unviewable bookmarks
						$where = "bookmark_user_id = $userIdQuoted AND content_type = $contentTypeQuoted AND content_id IN ($deleteIdsQuoted)";
						$this->_delete($where);
					}
				}

				// SHOWCASE ITEMS
				$showcaseItemIds = $this->getContentIdsByContentTypeCreatorId('showcase_item', $userId);

				if (!empty($showcaseItemIds))
				{
					$deleteShowcaseItemArray = array();
					$addOns = XenForo_Application::get('addOns');

					if (XenForo_Application::get('options')->bookmarks_showcase && isset($addOns['NFLJ_Showcase']))
					{
						$scItemModel = $this->_getSCItemModel();
						$items = $scItemModel->getItemsByIds($showcaseItemIds, array(
							'join' => NFLJ_Showcase_Model_Item::FETCH_CATEGORY,
							'permissionCombinationId' => $bookmarkCreator['permission_combination_id']
						));

						$items = $this->unserializePermissionsInList($items, 'category_permission_cache');

						foreach ($items AS $itemId => $item)
						{
							if ($item['item_state'] != 'visible')
							{
								$canViewItem = false;
							}
							else if ($addOns['NFLJ_Showcase'] < 40)
							{
								$canViewItem = $scItemModel->canViewItem($item, $bookmarkCreator);
							}
							else
							{
								$canViewItem = $scItemModel->canViewItemAndContainer($item,
									array('category_id' => $item['category_id']), $null, $bookmarkCreator,
									$item['permissions']);
							}

							if (!$canViewItem)
							{
								// cannot be viewed so add to deletion array
								$deleteShowcaseItemArray[] = $itemId;
							}
						}
					}
					else
					{
						// since showcase is no longer active, delete all
						$deleteShowcaseItemArray = $showcaseItemIds;

						// no need to send an alert
						$sendShowcaseItemAlerts = false;
					}

					// DELETE SHOWCASE ITEM BOOKMARKS
					if (!empty($deleteShowcaseItemArray))
					{
						$contentType = 'showcase_item';

						if ($sendShowcaseItemAlerts)
						{
							foreach ($deleteShowcaseItemArray AS $contentId)
							{
								// bookmark alert
								$this->sendBookmarkAlert($contentType, $contentId, 'content_not_viewable', 'delete',
									$userId);
							}
						}

						$deleteIdsQuoted = $db->quote($showcaseItemIds);
						$userIdQuoted = $db->quote($userId);
						$contentTypeQuoted = $db->quote($contentType);

						// delete unviewable bookmarks
						$where = "bookmark_user_id = $userIdQuoted AND content_type = $contentTypeQuoted AND content_id IN ($deleteIdsQuoted)";
						$this->_delete($where);
					}
				}
			}

			// remove 500 from the $bookmarkUserIds array
			$bookmarkUserIds = array_splice($bookmarkUserIds, 500);
		}
	}

	/**
	 * Remove bookmarks that belong to deleted posts
	 * This can happen when a post is deleted while the plugin is disabled
	 *
	 * @param string $contentType - such as 'post'
	 */
	public function removeDeletedContent($contentType)
	{
		switch ($contentType)
		{
			case 'post':
			{
				$db = $this->_getDb();
				$contentIds = $this->getContentIdsByContentType($contentType);

				if (!empty($contentIds))
				{
					$contentIds = array_keys($contentIds);
					$deleteIds = array();

					// fetch the post_id if post exists and visible
					$postIds = $db->fetchCol('
							SELECT post.post_id
							FROM xf_post AS post
							INNER JOIN xf_thread AS thread ON (thread.thread_id = post.thread_id)
							WHERE post.post_id IN (' . $db->quote($contentIds) . ') AND (post.message_state = \'visible\' AND thread.discussion_state = \'visible\')
					');

					// posts that no longer exist (were 'hard' deleted) or not visible (were 'soft' deleted)
					$deleteIds = array_diff($contentIds, $postIds);

					if (!empty($deleteIds))
					{
						// delete orphaned bookmarks
						$deleteIdsQuoted = $db->quote($deleteIds);
						$contentTypeQuoted = $db->quote($contentType);
						$where = "content_type = $contentTypeQuoted AND content_id IN ($deleteIdsQuoted)";
						$this->_delete($where);
					}
				}
				break;
			}
			case 'profile_post':
			{
				$db = $this->_getDb();
				$contentIds = $this->getContentIdsByContentType($contentType);

				if (!empty($contentIds))
				{
					$contentIds = array_keys($contentIds);
					$deleteIds = array();

					if (XenForo_Application::get('options')->bookmarks_profile)
					{
						// fetch the profile_post_id if post exists and visible
						$profilePostIds = $db->fetchCol('
								SELECT profile_post_id
								FROM xf_profile_post
								WHERE profile_post_id IN (' . $db->quote($contentIds) . ') AND message_state = \'visible\'
						');

						// posts that no longer exist (were 'hard' deleted) or not visible (were 'soft' deleted)
						$deleteIds = array_diff($contentIds, $profilePostIds);
					}
					else
					{
						// since profile posts no longer count, delete all
						$deleteIds = $contentIds;
					}

					if (!empty($deleteIds))
					{
						// delete orphaned bookmarks
						$deleteIdsQuoted = $db->quote($deleteIds);
						$contentTypeQuoted = $db->quote($contentType);
						$where = "content_type = $contentTypeQuoted AND content_id IN ($deleteIdsQuoted)";
						$this->_delete($where);
					}
				}
				break;
			}
			case 'resource':
			{
				$db = $this->_getDb();
				$contentIds = $this->getContentIdsByContentType($contentType);

				if (!empty($contentIds))
				{
					$contentIds = array_keys($contentIds);
					$deleteIds = array();

					if (XenForo_Application::get('options')->bookmarks_resource)
					{
						// fetch the item if exists and visible
						$items = $this->_getResourceModel()->getResourcesByIds($contentIds);
						foreach ($items AS $id => $item)
						{
							if ($item['resource_state'] != 'visible')
							{
								unset($items[$id]);
							}
						}

						$itemIds = array_keys($items);

						// items that no longer exist (were 'hard' deleted) or not visible (were 'soft' deleted)
						$deleteIds = array_diff($contentIds, $itemIds);
					}
					else
					{
						// since resources no longer count, delete all
						$deleteIds = $contentIds;
					}

					if (!empty($deleteIds))
					{
						// delete orphaned bookmarks
						$deleteIdsQuoted = $db->quote($deleteIds);
						$contentTypeQuoted = $db->quote($contentType);
						$where = "content_type = $contentTypeQuoted AND content_id IN ($deleteIdsQuoted)";
						$this->_delete($where);
					}
				}
				break;
			}
			case 'xengallery_media':
			{
				$db = $this->_getDb();
				$contentIds = $this->getContentIdsByContentType($contentType);

				if (!empty($contentIds))
				{
					$contentIds = array_keys($contentIds);
					$deleteIds = array();

					if (XenForo_Application::get('options')->bookmarks_media)
					{
						// fetch the item if exists and visible
						$items = $this->_getMediaModel()->getMediaByIds($contentIds);
						foreach ($items AS $id => $item)
						{
							if ($item['media_state'] != 'visible')
							{
								unset($items[$id]);
							}
						}

						$itemIds = array_keys($items);

						// items that no longer exist (were 'hard' deleted) or not visible (were 'soft' deleted)
						$deleteIds = array_diff($contentIds, $itemIds);
					}
					else
					{
						// since resources no longer count, delete all
						$deleteIds = $contentIds;
					}

					if (!empty($deleteIds))
					{
						// delete orphaned bookmarks
						$deleteIdsQuoted = $db->quote($deleteIds);
						$contentTypeQuoted = $db->quote($contentType);
						$where = "content_type = $contentTypeQuoted AND content_id IN ($deleteIdsQuoted)";
						$this->_delete($where);
					}
				}
				break;
			}
			case 'showcase_item':
			{
				$db = $this->_getDb();
				$contentIds = $this->getContentIdsByContentType($contentType);

				if (!empty($contentIds))
				{
					$contentIds = array_keys($contentIds);
					$deleteIds = array();

					if (XenForo_Application::get('options')->bookmarks_showcase)
					{
						// fetch the item if exists and visible
						$items = $this->_getSCItemModel()->getItemsByIds($contentIds);

						// remove those no longer visible
						foreach ($items AS $itemId => $item)
						{
							if ($item['item_state'] != 'visible')
							{
								unset($items[$itemId]);
							}
						}

						// remove those that no longer exist or not visible
						$itemIds = array_keys($items);
						$deleteIds = array_diff($contentIds, $itemIds);
					}
					else
					{
						// since showcase items no longer count, delete all
						$deleteIds = $contentIds;
					}

					if (!empty($deleteIds))
					{
						// delete orphaned bookmarks
						$deleteIdsQuoted = $db->quote($deleteIds);
						$contentTypeQuoted = $db->quote($contentType);
						$where = "content_type = $contentTypeQuoted AND content_id IN ($deleteIdsQuoted)";
						$this->_delete($where);
					}
				}
				break;
			}
			default:
			{
				break;
			}
		}
	}

	public function buildLinkToContent($contentType, $contentId)
	{
		$link = '';

		switch ($contentType)
		{
			case 'post':
			{
				$link = XenForo_Link::buildPublicLink('canonical:posts', array('post_id' => $contentId));
				break;
			}
			case 'profile_post':
			{
				$link = XenForo_Link::buildPublicLink('canonical:profile-posts',
					array('profile_post_id' => $contentId));
				break;
			}
			case 'resource':
			{
				$link = XenForo_Link::buildPublicLink('canonical:resources', array('resource_id' => $contentId));
				break;
			}
			case 'xengallery_media':
			{
				$link = XenForo_Link::buildPublicLink('canonical:xengallery', array('media_id' => $contentId));
				break;
			}
			case 'showcase_item':
			{
				$link = XenForo_Link::buildPublicLink('canonical:showcase', array('item_id' => $contentId));
				break;
			}
			default:
			{
				$link = XenForo_Link::buildPublicLink('canonical:index');
			}
		}

		return $link;
	}

	/**
	 * Gets the bookmark handler for a specific type of content.
	 *
	 * @param string $contentType
	 *
	 * @return false|Bookmarks_Handler_Abstract
	 */
	public function getBookmarkHandler($contentType)
	{
		$handlerClass = $this->getContentTypeField($contentType, 'bookmarks_handler_class');

		if (!$handlerClass)
		{
			return false;
		}

		return new $handlerClass();
	}

	/**
	 * Gets the bookmark handlers for all content types.
	 *
	 * @return array Array of Bookmarks_Handler_Abstract objects
	 */
	public function getBookmarkHandlers()
	{
		$handlerClasses = $this->getContentTypesWithField('bookmarks_handler_class');
		$handlers = array();

		foreach ($handlerClasses AS $contentType => $handlerClass)
		{
			$handlers[$contentType] = new $handlerClass();
		}

		return $handlers;
	}

	/**
	 * Adds content specific data to a list of bookmark. bookmarks of unviewable content will
	 * be removed.
	 *
	 * @param array      $bookmarks - an array of bookmark items
	 * @param array|null $viewingUser
	 *
	 * @return array Viewable bookmarks with content key added
	 */
	public function addContentDataToBookmarks(array $bookmarks, array $viewingUser = null)
	{
		$this->standardizeViewingUserReference($viewingUser);
		$bookmarksGrouped = array();

		foreach ($bookmarks AS $key => $bookmark)
		{
			$bookmarksGrouped[$bookmark['content_type']][$key] = $bookmark['content_id'];
		}

		$handlers = $this->getBookmarkHandlers();

		foreach ($bookmarksGrouped AS $contentType => $contentIds)
		{
			if (!isset($handlers[$contentType]))
			{
				foreach ($contentIds AS $key => $contentId)
				{
					unset($bookmarks[$key]);
				}
			}
			else
			{
				$contents = $handlers[$contentType]->getContentData($contentIds, $viewingUser);
				$listTemplateName = $handlers[$contentType]->getListTemplateName();

				foreach ($contentIds AS $key => $contentId)
				{
					if (isset($contents[$contentId])) // item is viewable by the user
					{
						$bookmarks[$key]['content'] = $contents[$contentId];
						$bookmarks[$key]['content']['bookmark_note'] = $bookmarks[$key]['bookmark_note'];

						$bookmarks[$key]['content']['rawMessage'] = $bookmarks[$key]['content']['message'];

						$bookmarks[$key]['content']['link'] = $this->buildLinkToContent($bookmarks[$key]['content_type'],
							$bookmarks[$key]['content_id']);

						$message = XenForo_Helper_String::wholeWordTrim(XenForo_Helper_String::bbCodeStrip($bookmarks[$key]['content']['message'],
							true), XenForo_Application::get('options')->bookmarks_snippet_length);

						// no actual message - post must contain just a quote or nested quotes
						if ($message == ' ' || strtolower(substr($message, -8)) == '[/quote]')
						{
							// get the text between the bb tags
							$message = XenForo_Helper_String::wholeWordTrim(XenForo_Helper_String::bbCodeStrip($bookmarks[$key]['content']['message']),
								XenForo_Application::get('options')->bookmarks_snippet_length);
						}

						$bookmarks[$key]['content']['message'] = $message;
						$bookmarks[$key]['listTemplateName'] = $listTemplateName;
					}
					else // unviewable bookmark
					{
						unset($bookmarks[$key]);
					}
				}
			}
		}

		return $bookmarks;
	}

	/**
	 * Gets a bookmark filled with all relevant data for display
	 *
	 * @param integer $bookmarkId - a bookmark item auto-increment value
	 * @param         null        / array $viewingUser
	 *
	 * @return array - Viewable bookmark with content key added / empty
	 */
	public function getBookmarkContentForView($bookmarkId, array $viewingUser = null)
	{
		$this->standardizeViewingUserReference($viewingUser);

		$item = $this->getBookmarkForContentById($bookmarkId);
		if (!empty($item))
		{
			$item = $this->_getContentDataForBookmarkView($item, $viewingUser);
			if (empty($item))
			{
				$item = array();
			}
		}
		else
		{
			$item = array();
		}

		return $item;
	}

	/**
	 * Adds content specific data to a list of bookmarks. bookmarks of unviewable content will
	 * be removed.
	 *
	 * @param array $bookmark - a bookmark item
	 * @param array $viewingUser
	 *
	 * @return array - Viewable bookmark with content key added / null
	 */
	protected function _getContentDataForBookmarkView(array $bookmark, $viewingUser)
	{
		if (empty($bookmark))
		{
			return null;
		}

		$handler = $this->getBookmarkHandler($bookmark['content_type']);
		if (empty($handler))
		{
			return null;
		}

		$content = $handler->getContentData(array($bookmark['content_id']), $viewingUser);
		if (empty($content))
		{
			return null;
		}

		$viewTemplateName = $handler->getViewTemplateName();

		$bookmark['content'] = $content[$bookmark['content_id']];
		$bookmark['viewTemplateName'] = $viewTemplateName;

		return $bookmark;
	}

	/**
	 * Delete any bookmarks that are no longer viewable to the bookmark creator
	 * Due to hard deletes, soft deletes, moved to another forum, or profile page permissions change
	 *
	 * @param array $contentIds
	 * @param array $contentType
	 *
	 * @return boolean as success / failure
	 */
	public function deleteUnViewableBookmarks(array $contentIds, $contentType)
	{
		if (empty($contentIds))
		{
			return true;
		}

		// get the bookmarks that correspond to the thread's posts
		$bookmarks = $this->getBookmarksByContentTypeIds($contentIds, $contentType);

		// GROUP by bookmark_user_id - so we only need to create $bookmarkCreator below once rather than every post
		$bookmarksGrouped = array();

		foreach ($bookmarks AS $bookmark)
		{
			$bookmarksGrouped[$bookmark['bookmark_user_id']][$bookmark['content_id']] = $bookmark;
		}

		$postModel = $this->_getPostModel();
		$profilePostModel = $this->_getProfilePostModel();
		$userModel = $this->_getUserModel();
		$errorKey = '';

		foreach ($bookmarksGrouped AS $bookmarkUserId => $items)
		{
			$bookmarkCreator = $userModel->getUserById($bookmarkUserId, array(
				'join' => XenForo_Model_User::FETCH_USER_FULL | XenForo_Model_User::FETCH_USER_PERMISSIONS
			));

			$bookmarkCreator['permissions'] = XenForo_Permission::unserializePermissions($bookmarkCreator['global_permission_cache']);

			// delete the bookmark if its creator can no longer view the post
			foreach ($items AS $item)
			{
				$contentType = $item['content_type'];

				if (!$this->isContentViewableToBookmarkCreator($bookmarkUserId, $item['content_id'], $contentType,
					$bookmarkCreator)
				)
				{
					// bookmark alert
					$sendAlert = true;

					// no alert as this content type is no longer bookmarkable
					if ($contentType == 'profile_post' && !XenForo_Application::get('options')->bookmarks_profile)
					{
						$sendAlert = false;
					}
					else if ($contentType == 'resource' && !XenForo_Application::get('options')->bookmarks_resource)
					{
						$sendAlert = false;
					}
					else if ($contentType == 'xengallery_media' && !XenForo_Application::get('options')->bookmarks_media)
					{
						$sendAlert = false;
					}
					else if ($contentType == 'showcase_item' && !XenForo_Application::get('options')->bookmarks_showcase)
					{
						$sendAlert = false;
					}

					if ($sendAlert)
					{
						$this->sendBookmarkAlert($contentType, $item['content_id'], 'content_not_viewable', 'delete',
							$bookmarkUserId);
					}

					// delete
					$this->bookmarkDelete($item['bookmark_id'], $errorKey);
				}
			}
		}

		// if any of the bookmark deletes failed then return false
		return empty($errorKey) ? true : false;
	}

	/**
	 * Find out wheteher a bookmark creator still has permission to view the content it is pointing to
	 *
	 * @param integer $contentId
	 * @param array   $bookmarkCreator - user array of bookmark owner
	 *
	 * @return boolean
	 */
	public function isContentViewableToBookmarkCreator($bookmarkUserId, $contentId, $contentType, array $bookmarkCreator = null)
	{
		if (!$this->isValidBookmarkType($contentType))
		{
			return false;
		}

		$bookmarkUserId = intval($bookmarkUserId);
		$contentId = intval($contentId);

		if (($bookmarkUserId < 1 && !isset($bookmarkCreator)) || $contentId < 1)
		{
			return false;
		}

		// bookmark owner
		if (!isset($bookmarkCreator))
		{
			$userModel = $this->_getUserModel();
			$bookmarkCreator = $userModel->getUserById($bookmarkUserId, array(
				'join' => XenForo_Model_User::FETCH_USER_FULL | XenForo_Model_User::FETCH_USER_PERMISSIONS
			));

			if (empty($bookmarkCreator))
			{
				return false;
			}

			$bookmarkCreator['permissions'] = XenForo_Permission::unserializePermissions($bookmarkCreator['global_permission_cache']);
		}

		switch ($contentType)
		{
			case 'post':
			{
				$postModel = $this->_getPostModel();

				// thread post
				$post = $postModel->getPostById($contentId, array(
					'join' => XenForo_Model_Post::FETCH_THREAD | XenForo_Model_Post::FETCH_FORUM,
					'permissionCombinationId' => $bookmarkCreator['permission_combination_id']
				));

				if (!empty($post['node_permission_cache']))
				{
					$post['permissions'] = XenForo_Permission::unserializePermissions($post['node_permission_cache']);
				}
				else
				{
					$post['permissions'] = array();
				}

				// check if viewable
				if ($post['message_state'] == 'visible' && $postModel->canViewPostAndContainer($post, $post, $post,
						$null, $post['permissions'], $bookmarkCreator)
				)
				{
					return true;
				}

				return false;
			}
			case 'profile_post':
			{
				$userModel = $this->_getUserModel();
				$profilePostModel = $this->_getProfilePostModel();

				// profile post
				$post = $profilePostModel->getProfilePostById($contentId,
					array('join' => XenForo_Model_ProfilePost::FETCH_USER_RECEIVER));

				// profile user
				$user = $userModel->getUserById($post['profile_user_id'], array(
					'join' => XenForo_Model_User::FETCH_USER_FULL,
					'followingUserId' => $bookmarkCreator['user_id']
				));

				// check if viewable
				if (!empty($user) && $post['message_state'] == 'visible' && $profilePostModel->canViewProfilePostAndContainer(
						$post, $user, $null, $bookmarkCreator
					)
				)
				{
					return true;
				}

				return false;
			}
			case 'resource':
			{
				$resourceModel = $this->_getResourceModel();

				// resource item
				$item = $resourceModel->getResourceById($contentId,
					array('permissionCombinationId' => $bookmarkCreator['permission_combination_id']));

				if (!empty($item['category_permission_cache']))
				{
					$item['permissions'] = XenForo_Permission::unserializePermissions($item['category_permission_cache']);
				}
				else
				{
					$item['permissions'] = array();
				}

				// check if viewable
				if ($item['resource_state'] == 'visible' && $resourceModel->canViewResourceAndContainer($item, $item,
						$null, $bookmarkCreator, $item['permissions'])
				)
				{
					return true;
				}

				return false;
			}
			case 'showcase_item':
			{
				$addOns = XenForo_Application::get('addOns');
				if (isset($addOns['NFLJ_Showcase']))
				{
					// showcase item
					$scItemModel = $this->_getSCItemModel();
					$item = $scItemModel->getItemById($contentId, array(
						'join' => NFLJ_Showcase_Model_Item::FETCH_CATEGORY,
						'permissionCombinationId' => $bookmarkCreator['permission_combination_id']
					));

					if (!empty($item['category_permission_cache']))
					{
						$item['permissions'] = XenForo_Permission::unserializePermissions($item['category_permission_cache']);
					}
					else
					{
						$item['permissions'] = array();
					}

					if ($item['item_state'] == 'visible')
					{
						// check if viewable
						if ($addOns['NFLJ_Showcase'] < 40)
						{
							$canViewItem = $scItemModel->canViewItem($item, $bookmarkCreator);
						}
						else
						{
							$canViewItem = $scItemModel->canViewItemAndContainer($item,
								array('category_id' => $item['category_id']), $null, $bookmarkCreator,
								$item['permissions']);
						}

						if ($canViewItem)
						{
							return true;
						}
					}
				}

				return false;
			}
			case 'xengallery_media':
			{
				$addOns = XenForo_Application::get('addOns');
				if (isset($addOns['XenGallery']))
				{
					$mediaModel = $this->_getMediaModel();
					$item = $mediaModel->getMediaById($contentId);

					if ($item['media_state'] == 'visible')
					{
						if ($mediaModel->canViewMediaItem($item, $null, $bookmarkCreator))
						{
							return true;
						}
					}
				}

				return false;
			}
			default:
			{
				return false;
			}
		}
	}

	/**
	 * Find out wheteher a bookmark creator still has permission to view the content it is pointing to
	 *
	 * @param integer $userId
	 * @param string  $username
	 * @param string  $contentType - such as 'post'
	 * @param integer $contentId   - such as 'post_id'
	 * @param string  $action      - such as 'delete', edit', 'merge'
	 * @param array   $bookmark    - bookmark item
	 *
	 * @return boolean
	 */
	protected function _bookmarkAlert($userId, $username, $contentType, $contentId, $action, $bookmark)
	{
		$params = array();
		$actionType = $contentType . '_' . $action;
		$alertContentType = 'bookmark_' . $contentType;

		switch ($actionType)
		{
			case 'post_edit':
			case 'post_merge':
			{
				$params['bookmark_note'] = $bookmark['bookmark_note'];
				$params['bookmark_id'] = $bookmark['bookmark_id'];
				$params['post_id'] = $contentId;

				$postModel = $this->_getPostModel();
				$post = $postModel->getPostById($contentId, array('join' => XenForo_Model_Post::FETCH_THREAD));
				if (empty($post))
				{
					return false;
				}

				$contentId = $post['thread_id']; // thread
				$params['title'] = XenForo_Helper_String::censorString($post['title']);
				break;
			}
			case 'profile_post_edit':
			{
				$params['bookmark_note'] = $bookmark['bookmark_note'];
				$params['bookmark_id'] = $bookmark['bookmark_id'];
				$params['profile_post_id'] = $contentId;

				$profilePostModel = $this->_getProfilePostModel();
				$post = $profilePostModel->getProfilePostById($contentId,
					array('join' => XenForo_Model_ProfilePost::FETCH_USER_RECEIVER));
				if (empty($post))
				{
					return false;
				}

				$contentId = $post['profile_user_id']; // user

				$params['profileUser'] = array(
					'user_id' => $post['profile_user_id'],
					'username' => $post['profile_username']
				);
				$params['post_date'] = $post['post_date'];
				$params['user'] = array(
					'user_id' => $post['user_id'],
					'username' => $post['username']
				);
				break;
			}
			case 'resource_edit':
			{
				$params['bookmark_note'] = $bookmark['bookmark_note'];
				$params['bookmark_id'] = $bookmark['bookmark_id'];
				$params['resource_id'] = $contentId;

				$resourceModel = $this->_getResourceModel();
				$item = $resourceModel->getResourceById($contentId);
				if (empty($item))
				{
					return false;
				}

				$params['title'] = XenForo_Helper_String::censorString($item['title']);
				break;
			}
			case 'showcase_item_edit':
			{
				$params['bookmark_note'] = $bookmark['bookmark_note'];
				$params['bookmark_id'] = $bookmark['bookmark_id'];
				$params['item_id'] = $contentId;

				$scItemModel = $this->_getSCItemModel();
				$item = $scItemModel->getItemById($contentId,
					array('join' => NFLJ_Showcase_Model_Item::FETCH_CATEGORY | NFLJ_Showcase_Model_Item::FETCH_USER));
				if (empty($item))
				{
					return false;
				}

				$params['title'] = XenForo_Helper_String::censorString($item['item_name']);
				break;
			}
			case 'xengallery_media_edit':
			{
				$params['bookmark_note'] = $bookmark['bookmark_note'];
				$params['bookmark_id'] = $bookmark['bookmark_id'];
				$params['media_id'] = $contentId;

				$mediaModel = $this->_getMediaModel();
				$item = $mediaModel->getMediaById($contentId, array('join' => XenGallery_Model_Media::FETCH_USER));

				if (empty($item))
				{
					return false;
				}

				$params['title'] = XenForo_Helper_String::censorString($item['media_title']);
				break;
			}
			case 'post_delete':
			{
				$params['bookmark_note'] = $bookmark['bookmark_note'];

				$postModel = $this->_getPostModel();
				$post = $postModel->getPostById($contentId, array('join' => XenForo_Model_Post::FETCH_THREAD));
				if (empty($post))
				{
					return false;
				}

				$params['post_date'] = $post['post_date'];
				$params['user_id'] = $post['user_id'];
				$params['username'] = $post['username'];
				$params['message'] = XenForo_Helper_String::censorString($post['message']);

				$contentId = $post['thread_id']; // thread
				$params['thread_id'] = $post['thread_id'];
				$params['title'] = XenForo_Helper_String::censorString($post['title']);
				break;
			}
			case 'profile_post_delete':
			{
				$params['bookmark_note'] = $bookmark['bookmark_note'];

				$profilePostModel = $this->_getProfilePostModel();
				$post = $profilePostModel->getProfilePostById($contentId,
					array('join' => XenForo_Model_ProfilePost::FETCH_USER_RECEIVER));
				if (empty($post))
				{
					return false;
				}

				$contentId = $post['profile_user_id']; // user

				$params['profile_post_id'] = $post['profile_post_id'];
				$params['profileUser'] = array(
					'user_id' => $post['profile_user_id'],
					'username' => $post['profile_username']
				);
				$params['post_date'] = $post['post_date'];
				$params['user'] = array(
					'user_id' => $post['user_id'],
					'username' => $post['username']
				);
				$params['message'] = XenForo_Helper_String::censorString($post['message']);
				break;
			}
			case 'resource_delete':
			{
				$params['bookmark_note'] = $bookmark['bookmark_note'];

				$resourceModel = $this->_getResourceModel();
				$item = $resourceModel->getResourceById($contentId,
					array('join' => XenResource_Model_Resource::FETCH_DESCRIPTION | XenResource_Model_Resource::FETCH_CATEGORY));
				if (empty($item))
				{
					return false;
				}

				$params['resource_date'] = $item['resource_date'];
				$params['user_id'] = $item['user_id'];
				$params['username'] = $item['username'];
				$params['message'] = XenForo_Helper_String::censorString($item['description']);
				$params['resource_id'] = $item['resource_id'];
				$params['title'] = XenForo_Helper_String::censorString($item['title']);
				$params['category_id'] = $item['resource_category_id'];
				$params['category_title'] = XenForo_Helper_String::censorString($item['category_title']);
				break;
			}
			case 'showcase_item_delete':
			{
				$params['bookmark_note'] = $bookmark['bookmark_note'];

				$scItemModel = $this->_getSCItemModel();
				$item = $scItemModel->getItemById($contentId,
					array('join' => NFLJ_Showcase_Model_Item::FETCH_CATEGORY | NFLJ_Showcase_Model_Item::FETCH_USER));
				if (empty($item))
				{
					return false;
				}

				$params['item_date'] = $item['date_added'];
				$params['user_id'] = $item['user_id'];
				$params['username'] = $item['username'];
				$params['message'] = XenForo_Helper_String::censorString($item['message']);
				$params['item_id'] = $item['item_id'];
				$params['title'] = XenForo_Helper_String::censorString($item['item_name']);
				$params['category_id'] = $item['category_id'];
				$params['category_title'] = XenForo_Helper_String::censorString($item['category_name']);
				break;
			}
			case 'xengallery_media_delete':
			{
				$params['bookmark_note'] = $bookmark['bookmark_note'];

				$mediaModel = $this->_getMediaModel();
				$item = $mediaModel->getMediaById($contentId, array('join' => XenGallery_Model_Media::FETCH_USER));

				if (empty($item))
				{
					return false;
				}

				$params['media_date'] = $item['media_date'];
				$params['user_id'] = $item['user_id'];
				$params['username'] = $item['username'];
				$params['message'] = XenForo_Helper_String::censorString($item['media_description']);
				$params['media_id'] = $item['media_id'];
				$params['title'] = XenForo_Helper_String::censorString($item['media_title']);
				break;
			}
			default:
			{
				return false;
			}
		}

		if ($action == 'edit')
		{
			$alertExistsUnread = $this->_getDb()->fetchOne('
				SELECT alert_id
				FROM xf_user_alert
				WHERE alerted_user_id = ? AND content_type = ? AND content_id = ? AND view_date = 0
				ORDER BY event_date DESC
				LIMIT 1
			', array(
				$userId,
				$alertContentType,
				$contentId
			));

			// a previous alert indicating this item has been edited already exists and has not yet been read, therefore no need to resend it
			if ($alertExistsUnread)
			{
				return false;
			}
		}

		XenForo_Model_Alert::alert(
			$userId,
			$userId,
			$username,
			$alertContentType,
			$contentId,
			$action,
			$params
		);

		return true;
	}

	/**
	 * Alert users that their bookmarked item has been edited, merged, deleted, etc.
	 *
	 * @param string  $contentType - such as 'post'
	 * @param integer $contentId   - such as 'post_id'
	 * @param string  $alertOption - such as 'content_not_viewable' - set by the members on their account's alert preferences page
	 * @param string  $action      - such as 'delete', edit', 'merge'
	 */
	public function sendBookmarkAlerts($contentType, $contentId, $alertOption, $action)
	{
		// individual bookmarks alert preferences enabled
		if (XenForo_Application::get('options')->bookmarks_account_alert_preferences)
		{
			$bookmarks = $this->getBookmarksByContentTypeIds(array($contentId), $contentType);
			$userIds = array();

			foreach ($bookmarks AS $bookmark)
			{
				$userIds[$bookmark['bookmark_user_id']] = $bookmark;
			}

			if (!empty($userIds))
			{
				$users = $this->_getUserModel()->getUsersByIds(array_keys($userIds), array(
					'join' => XenForo_Model_User::FETCH_USER_FULL | XenForo_Model_User::FETCH_USER_PERMISSIONS
				));

				foreach ($users AS $user)
				{
					$user['permissions'] = XenForo_Permission::unserializePermissions($user['global_permission_cache']);

					if ($user['permissions']['general']['canUseBookmarks'] == true)
					{
						// member requested alert
						if (XenForo_Model_Alert::userReceivesAlert($user, 'bookmarks', $alertOption))
						{
							$this->_bookmarkAlert($user['user_id'], $user['username'], $contentType, $contentId,
								$action, $userIds[$user['user_id']]);
						}
					}
				}
			}
		}
	}

	/**
	 * Alert a user that their bookmarked item has been edited, merged, deleted, etc.
	 *
	 * @param string  $contentType - such as 'post'
	 * @param integer $contentId   - such as 'post_id'
	 * @param string  $alertOption - such as 'content_not_viewable' - set by the members on their account's alert preferences page
	 * @param string  $action      - such as 'delete', edit', 'merge'
	 * @param integer $userId      - bookmark creator
	 */
	public function sendBookmarkAlert($contentType, $contentId, $alertOption, $action, $userId)
	{
		// individual bookmarks alert preferences enabled
		if (XenForo_Application::get('options')->bookmarks_account_alert_preferences)
		{
			$user = $this->_getUserModel()->getUserById($userId, array(
				'join' => XenForo_Model_User::FETCH_USER_FULL | XenForo_Model_User::FETCH_USER_PERMISSIONS
			));

			if (!empty($user))
			{
				$user['permissions'] = XenForo_Permission::unserializePermissions($user['global_permission_cache']);

				if ($user['permissions']['general']['canUseBookmarks'] == true)
				{
					// member requested alert
					if (XenForo_Model_Alert::userReceivesAlert($user, 'bookmarks', $alertOption))
					{
						$bookmark = $this->getBookmarkByContent($contentType, $contentId, $userId);

						if (!empty($bookmark))
						{
							$this->_bookmarkAlert($user['user_id'], $user['username'], $contentType, $contentId,
								$action, $bookmark);
						}
					}
				}
			}
		}
	}

	/**
	 * Alert a user that their content has been bookmarked
	 *
	 * @param string  $contentType - such as 'post'
	 * @param integer $contentId   - such as 'post_id'
	 * @param string  $action      - such as 'delete', edit', 'merge'
	 * @param integer $alertUserId - content user
	 * @param integer $userId      - bookmark creator
	 */
	protected function _sendBookmarkAlertToContentUser($contentType, $contentId, $alertUserId, $userId)
	{
		// individual bookmarks alert preferences enabled
		if (XenForo_Application::get('options')->bookmarks_account_alert_preferences)
		{
			$userModel = $this->_getUserModel();
			$user = $this->_getUserModel()->getUserById($alertUserId, array(
				'join' => XenForo_Model_User::FETCH_USER_FULL | XenForo_Model_User::FETCH_USER_PERMISSIONS
			));

			if (!empty($user))
			{
				$user['permissions'] = XenForo_Permission::unserializePermissions($user['global_permission_cache']);

				if ($user['permissions']['general']['canUseBookmarks'] == true)
				{
					// member requested alert
					if (XenForo_Model_Alert::userReceivesAlert($user, 'bookmarks', 'content_bookmark'))
					{
						$user = $userModel->getUserById($userId);
						$alertContentType = 'bookmark_' . $contentType;
						if ($contentType != 'resource' && $contentType != 'showcase_item' && $contentType != 'xengallery_media')
						{
							$alertContentType .= '_alt';
						}

						XenForo_Model_Alert::alert(
							$alertUserId,
							$user['user_id'],
							$user['username'],
							$alertContentType,
							$contentId,
							'bookmark'
						);
					}
				}
			}
		}
	}

	/**
	 * Set cron state
	 *
	 * @param integer $state - 1 to run the cron, 0 to not
	 * @param integer $cronId
	 *
	 * @return boolean
	 */
	public function setCronState($state, $cronId)
	{
		$state = intval($state);
		$cronId = intval($cronId);

		$this->_getDb()->query('
			UPDATE bookmark_cron
			SET execute = ?
			WHERE cron_id = ?
			LIMIT 1
			', array(
			$state,
			$cronId
		));
	}

	/**
	 * Finds out if we should run the cron - TRUE means the add-on was disabled at some point
	 *
	 * @param integer $cronId
	 *
	 * @return boolean
	 */
	public function getCronState($cronId)
	{
		$cronId = intval($cronId);

		return $this->_getDb()->fetchOne('
			SELECT execute IS TRUE
			FROM bookmark_cron
			WHERE cron_id = ?
			LIMIT 1
		', $cronId);
	}

	/**
	 * Finds out if a content type is bookmarkable
	 *
	 * @param string $contentType
	 *
	 * @return boolean
	 */
	public function isValidBookmarkType($contentType)
	{
		if (in_array($contentType, $this->getBookmarkTypes()))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	/**
	 * Fetch all available bookmark types
	 *
	 * @return array
	 */
	public function getBookmarkTypes()
	{
		// available bookmark types
		$options = XenForo_Application::get('options');
		$types = array('post');
		if ($options->bookmarks_profile)
		{
			$types[] = 'profile_post';
		}
		if ($options->bookmarks_resource)
		{
			$types[] = 'resource';
		}
		if ($options->bookmarks_media)
		{
			$types[] = 'xengallery_media';
		}
		if ($options->bookmarks_showcase)
		{
			$types[] = 'showcase_item';
		}

		return $types;
	}

	/**
	 * Get top bookmarked content
	 *
	 * @param array $limit      - max results to fetch
	 * @param array $fetchTypes - such as 'post', 'profile_post'
	 *
	 * @return array Format: [bookmark_id] => info
	 */
	public function getTopContent($limit, array $fetchTypes = array())
	{
		$db = $this->_getDb();
		$limit = intval($limit);

		return $db->fetchAll('
			SELECT bookmark_id, content_type, content_id, COUNT(*) AS count, MIN(bookmark_date) AS first_date, MAX(bookmark_date) AS last_date
			FROM bookmark_content
			' . (!empty($fetchTypes) ? 'WHERE content_type IN (' . $db->quote($fetchTypes) . ')' : '') . '
			GROUP BY content_type, content_id
			ORDER BY COUNT DESC, last_date DESC
			LIMIT ?
		', $limit);
	}

	/**
	 * @return XenForo_Model_Post
	 */
	protected function _getPostModel()
	{
		return $this->getModelFromCache('XenForo_Model_Post');
	}

	/**
	 * @return XenForo_Model_Thread
	 */
	protected function _getThreadModel()
	{
		return $this->getModelFromCache('XenForo_Model_Thread');
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
	 * @return XenForo_Model_NewsFeed
	 */
	protected function _getNewsFeedModel()
	{
		return $this->getModelFromCache('XenForo_Model_NewsFeed');
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