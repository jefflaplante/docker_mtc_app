<?php

class Bookmarks_Install_Construct
{
	public static function install($existingAddOn, $addOnData)
	{
		if (XenForo_Application::$versionId < 1020034)
		{
			throw new XenForo_Exception('This Add-On requires XenForo version 1.2.0 Beta 4 or newer.');
		}

		$db = XenForo_Application::get('db');
		$rebuildCache = false;

		if ($existingAddOn) // upgrade
		{
			$addOns = XenForo_Application::get('addOns');

			// old version of Showcase is installed and active
			if (isset($addOns['NFLJ_Showcase']) && $addOns['NFLJ_Showcase'] < 31) // older than version 1.3.0
			{
				$db = XenForo_Application::get('db');
				$doBookmarkShowcase = $db->fetchOne("SELECT option_value FROM xf_option WHERE option_id = 'bookmarks_showcase'");

				// option to bookmark Showcase items is set
				if ($doBookmarkShowcase)
				{
					throw new XenForo_Exception('You must first upgrade the Showcase Add-On to version 1.3.0 or newer.');
				}
			}

			$versionId = $existingAddOn['version_id'];

			if ($versionId < 105)
			{
				$tableColumns = $db->describeTable('bookmark_content');
				$bookmarkTagExists = array_key_exists('bookmark_tag', $tableColumns);
				$quickLinkExists = array_key_exists('quick_link', $tableColumns);

				if (!$bookmarkTagExists || !$quickLinkExists)
				{
					if (!$bookmarkTagExists && !$quickLinkExists)
					{
						$db->query("
							ALTER TABLE bookmark_content
							ADD bookmark_tag VARCHAR(25) NOT NULL DEFAULT '' AFTER bookmark_id,
							ADD quick_link TINYINT UNSIGNED NOT NULL DEFAULT 0 AFTER sticky,
							ADD KEY bookmark_user_id_tag (bookmark_user_id, bookmark_tag),
							ADD KEY bookmark_user_id_type_quick (bookmark_user_id, content_type, quick_link)
						");
					}
					else if (!$bookmarkTagExists)
					{
						$db->query("
							ALTER TABLE bookmark_content
							ADD bookmark_tag VARCHAR(25) NOT NULL DEFAULT '' AFTER bookmark_id,
							ADD KEY bookmark_user_id_tag (bookmark_user_id, bookmark_tag)
						");
					}
					else
					{
						$db->query("
							ALTER TABLE bookmark_content
							ADD quick_link TINYINT UNSIGNED NOT NULL DEFAULT 0 AFTER sticky,
							ADD KEY bookmark_user_id_type_quick (bookmark_user_id, content_type, quick_link)
						");
					}
				}

				$db->query("
					UPDATE IGNORE bookmark_content
					SET quick_link = 1
					WHERE bookmark_note != ''
				");

				$db->query("
					INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
					VALUES ('bookmark_post_alt', 'alert_handler_class', 'XenForo_AlertHandler_DiscussionMessage_Post')
				");

				$db->query("
					INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
					VALUES ('bookmark_profile_post_alt', 'alert_handler_class', 'XenForo_AlertHandler_DiscussionMessage_ProfilePost')
				");
			}

			if ($versionId < 106)
			{
				$db->query("
					UPDATE IGNORE bookmark_content
					SET quick_link = 0
					WHERE content_type = 'profile_post' AND quick_link = 1 AND bookmark_note = ''
				");
			}

			if ($versionId < 108)
			{
				$db->query("
					INSERT IGNORE INTO xf_content_type (content_type, addon_id)
					VALUES ('bookmarks', 'Bookmarks')
				");

				$db->query("
					INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
					VALUES ('bookmarks', 'stats_handler_class', 'Bookmarks_StatsHandler_Bookmarks')
				");

				$rebuildCache = true;
			}

			if ($versionId < 113)
			{
				// these have been renamed so remove the old ones
				// cannot simply update as same info is stored in xf_user_option/alert_optout as text which is used for the checkmarks when viewing the alert preferences page
				$db->query("
					DELETE FROM xf_user_alert_optout
					WHERE alert IN ('bookmarks_account_post_bookmark', 'bookmarks_account_post_edit', 'bookmarks_account_post_merge', 'bookmarks_account_post_not_viewable')
				");

				$db->query("
					INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
					VALUES ('showcase_item', 'bookmarks_handler_class', 'Bookmarks_Handler_Showcase_Item')
				");

				$db->query("
					INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
					VALUES ('bookmark_showcase_item', 'alert_handler_class', 'Bookmarks_AlertHandler_Showcase_Item')
				");
			}

			if ($versionId < 114)
			{
				$db->query("
					INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
					VALUES ('resource', 'bookmarks_handler_class', 'Bookmarks_Handler_XenResource_Resource')
				");

				$db->query("
					INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
					VALUES ('bookmark_resource', 'alert_handler_class', 'Bookmarks_AlertHandler_XenResource_Resource')
				");
			}

			if ($versionId < 115)
			{
				if ($versionId > 113) // only needed if 114 is already installed as this alert type is only available there
				{
					$db->query("
						UPDATE IGNORE xf_user_alert
						SET content_type = 'bookmark_resource'
						WHERE content_type = 'bookmark_resource_alt'
					");
				}

				$db->query("
					INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
					VALUES ('resource', 'news_feed_handler_class', 'Bookmarks_NewsFeedHandler_Resource')
				");
			}

			if ($versionId < 117)
			{
				$db->query("
					INSERT IGNORE INTO xf_content_type (content_type, addon_id)
					VALUES ('bookmark_post', 'Bookmarks'), ('bookmark_post_alt', 'Bookmarks'), ('bookmark_profile_post', 'Bookmarks'), ('bookmark_profile_post_alt', 'Bookmarks'), ('bookmark_resource', 'Bookmarks'), ('bookmark_showcase_item', 'Bookmarks')
				");

				$rebuildCache = true;
			}

			if ($versionId < 127)
			{
				$db->query("
					ALTER TABLE bookmark_content
					CHANGE bookmark_tag bookmark_tag VARBINARY(150) NOT NULL DEFAULT ''
				");
			}

			if ($versionId < 128)
			{
				if ($versionId > 126) // only needed if 127 was already installed
				{
					$db->query("
						ALTER TABLE bookmark_content
						CHANGE bookmark_tag bookmark_tag VARBINARY(150) NOT NULL DEFAULT ''
					");
				}
			}

			if ($versionId < 160)
			{
				$db->query("
					INSERT IGNORE INTO xf_content_type (content_type, addon_id)
					VALUES ('bookmark_xengallery_media', 'Bookmarks')
				");

				$db->query("
					INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value) VALUES
						('xengallery_media', 'bookmarks_handler_class', 'Bookmarks_Handler_XenGallery_Media'),
						('bookmark_xengallery_media', 'alert_handler_class', 'Bookmarks_AlertHandler_XenGallery_Media')
				");

				$rebuildCache = true;
			}
		}
		else // fresh install
		{
			$db->query("
				CREATE TABLE IF NOT EXISTS bookmark_content (
					bookmark_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
					bookmark_tag VARBINARY(150) NOT NULL DEFAULT '',
					content_type VARCHAR(25) NOT NULL,
					content_id INT UNSIGNED NOT NULL,
					content_user_id INT UNSIGNED NOT NULL,
					bookmark_user_id INT UNSIGNED NOT NULL,
					bookmark_date INT UNSIGNED NOT NULL,
					bookmark_note VARCHAR(150) NOT NULL DEFAULT '',
					public TINYINT UNSIGNED NOT NULL DEFAULT 0,
					sticky TINYINT UNSIGNED NOT NULL DEFAULT 0,
					quick_link TINYINT UNSIGNED NOT NULL DEFAULT 0,
					PRIMARY KEY (bookmark_id),
					UNIQUE KEY content_type_id_bookmark_user_id (content_type, content_id, bookmark_user_id),
					KEY bookmark_user_id_public_sticky (bookmark_user_id, public, sticky),
					KEY bookmark_user_id_tag (bookmark_user_id, bookmark_tag),
					KEY bookmark_user_id_type_quick (bookmark_user_id, content_type, quick_link)
				) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci
			");

			$db->query("
				CREATE TABLE IF NOT EXISTS bookmark_cron (
					cron_id INT UNSIGNED NOT NULL,
					execute INT UNSIGNED NOT NULL DEFAULT 0,
					PRIMARY KEY (cron_id)
				) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci
			");

			$db->query("
				INSERT IGNORE INTO bookmark_cron (cron_id, execute)
				VALUES (1, 0)
			");

			$db->query("
				INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
				VALUES
				('post', 'bookmarks_handler_class', 'Bookmarks_Handler_Post'),
				('profile_post', 'bookmarks_handler_class', 'Bookmarks_Handler_ProfilePost'),
				('bookmark_post', 'alert_handler_class', 'Bookmarks_AlertHandler_DiscussionMessage_Post'),
				('bookmark_profile_post', 'alert_handler_class', 'Bookmarks_AlertHandler_DiscussionMessage_ProfilePost'),
				('bookmark_post_alt', 'alert_handler_class', 'XenForo_AlertHandler_DiscussionMessage_Post'),
				('bookmark_profile_post_alt', 'alert_handler_class', 'XenForo_AlertHandler_DiscussionMessage_ProfilePost'),
				('bookmarks', 'stats_handler_class', 'Bookmarks_StatsHandler_Bookmarks'),
				('showcase_item', 'bookmarks_handler_class', 'Bookmarks_Handler_Showcase_Item'),
				('bookmark_showcase_item', 'alert_handler_class', 'Bookmarks_AlertHandler_Showcase_Item'),
				('resource', 'bookmarks_handler_class', 'Bookmarks_Handler_XenResource_Resource'),
				('bookmark_resource', 'alert_handler_class', 'Bookmarks_AlertHandler_XenResource_Resource'),
				('resource', 'news_feed_handler_class', 'Bookmarks_NewsFeedHandler_Resource'),
				('xengallery_media', 'bookmarks_handler_class', 'Bookmarks_Handler_XenGallery_Media'),
				('bookmark_xengallery_media', 'alert_handler_class', 'Bookmarks_AlertHandler_XenGallery_Media')
			");

			$db->query("
				INSERT IGNORE INTO xf_content_type (content_type, addon_id)
				VALUES
				('bookmarks', 'Bookmarks'),
				('bookmark_post', 'Bookmarks'),
				('bookmark_post_alt', 'Bookmarks'),
				('bookmark_profile_post', 'Bookmarks'),
				('bookmark_profile_post_alt', 'Bookmarks'),
				('bookmark_resource', 'Bookmarks'),
				('bookmark_showcase_item', 'Bookmarks'),
				('bookmark_xengallery_media', 'Bookmarks')
			");

			$rebuildCache = true;
		}

		// in the event that showcase was uninstalled at some point, re-insert the handler
		$rows = $db->query("
			INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
			VALUES ('showcase_item', 'bookmarks_handler_class', 'Bookmarks_Handler_Showcase_Item')
		")->rowCount();

		if ($rows > 0)
		{
			$rebuildCache = true;
		}

		// in the event that the resource manager was uninstalled at some point, re-insert the handler
		$rows = $db->query("
			INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
			VALUES ('resource', 'bookmarks_handler_class', 'Bookmarks_Handler_XenResource_Resource')
		")->rowCount();

		if ($rows > 0)
		{
			$rebuildCache = true;
		}

		// in the event that the resource manager was uninstalled at some point, re-insert the handler
		$rows = $db->query("
			INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
			VALUES ('resource', 'news_feed_handler_class', 'Bookmarks_NewsFeedHandler_Resource')
		")->rowCount();

		if ($rows > 0)
		{
			$rebuildCache = true;
		}

		// in the event that the media gallery was uninstalled at some point, re-insert the handler
		$rows = $db->query("
			INSERT IGNORE INTO xf_content_type_field (content_type, field_name, field_value)
			VALUES ('xengallery_media', 'bookmarks_handler_class', 'Bookmarks_Handler_XenGallery_Media')
		")->rowCount();

		if ($rows > 0)
		{
			$rebuildCache = true;
		}

		if ($rebuildCache)
		{
			XenForo_Model::create('XenForo_Model_ContentType')->rebuildContentTypeCache();
		}
	}

	public static function uninstall()
	{
		$db = XenForo_Application::get('db');

		$db->query("
			DROP TABLE IF EXISTS bookmark_content
		");

		$db->query("
			DROP TABLE IF EXISTS bookmark_cron
		");

		$db->query("
			DELETE FROM xf_user_alert
			WHERE content_type = 'bookmark_post' OR content_type = 'bookmark_profile_post'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'post' AND field_name = 'bookmarks_handler_class' AND field_value = 'Bookmarks_Handler_Post'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'profile_post' AND field_name = 'bookmarks_handler_class' AND field_value = 'Bookmarks_Handler_ProfilePost'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'bookmark_post' AND field_name = 'alert_handler_class' AND field_value = 'Bookmarks_AlertHandler_DiscussionMessage_Post'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'bookmark_profile_post' AND field_name = 'alert_handler_class' AND field_value = 'Bookmarks_AlertHandler_DiscussionMessage_ProfilePost'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'bookmark_xengallery_media' AND field_name = 'alert_handler_class' AND field_value = 'Bookmarks_AlertHandler_DiscussionMessage_ProfilePost'
		");

		$db->query("
			DELETE FROM xf_user_alert
			WHERE content_type = 'bookmark_post_alt' OR content_type = 'bookmark_profile_post_alt'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'bookmark_post_alt' AND field_name = 'alert_handler_class' AND field_value = 'XenForo_AlertHandler_DiscussionMessage_Post'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'bookmark_profile_post_alt' AND field_name = 'alert_handler_class' AND field_value = 'XenForo_AlertHandler_DiscussionMessage_ProfilePost'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'bookmarks' AND field_name = 'stats_handler_class' AND field_value = 'Bookmarks_StatsHandler_Bookmarks'
		");

		$db->query("
			DELETE FROM xf_news_feed
			WHERE content_type IN ('post', 'profile_post', 'showcase_item', 'xengallery_media') AND action = 'bookmark'
		");

		$db->query("
			DELETE FROM xf_user_alert
			WHERE content_type = 'bookmark_showcase_item'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'showcase_item' AND field_name = 'bookmarks_handler_class' AND field_value = 'Bookmarks_Handler_Showcase_Item'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'bookmark_showcase_item' AND field_name = 'alert_handler_class' AND field_value = 'Bookmarks_AlertHandler_Showcase_Item'
		");

		$db->query("
			DELETE FROM xf_user_alert
			WHERE content_type = 'bookmark_resource'
		");

		$db->query("
			DELETE FROM xf_user_alert
			WHERE content_type = 'bookmark_xengallery_media'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'resource' AND field_name = 'bookmarks_handler_class' AND field_value = 'Bookmarks_Handler_XenResource_Resource'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'bookmark_resource' AND field_name = 'alert_handler_class' AND field_value = 'Bookmarks_AlertHandler_XenResource_Resource'
		");

		$db->query("
			DELETE FROM xf_news_feed
			WHERE content_type = 'resource' AND action = 'bookmark'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'resource' AND field_name = 'news_feed_handler_class' AND field_value = 'Bookmarks_NewsFeedHandler_Resource'
		");

		$db->query("
			DELETE FROM xf_content_type_field
			WHERE content_type = 'xengallery_media' AND field_name = 'bookmarks_handler_class' AND field_value = 'Bookmarks_Handler_XenGallery_Media'
		");

		$db->query("
			DELETE FROM xf_content_type
			WHERE addon_id = 'Bookmarks'
		");

		$db->query("
			DELETE FROM xf_stats_daily
			WHERE stats_type = 'bookmarks'
		");

		$db->query("
			DELETE FROM xf_permission_entry
			WHERE permission_id IN (
			'canUseBookmarks',
			'canBookmarkPost',
			'canBookmarkProfilePost',
			'canBookmarkResource',
			'canBookmarkShowcase')
		");

		$db->query("
			DELETE FROM xf_permission_entry_content
			WHERE permission_id IN (
			'canUseBookmarks',
			'canBookmarkPost',
			'canBookmarkProfilePost',
			'canBookmarkResource',
			'canBookmarkShowcase')
		");

		XenForo_Model::create('XenForo_Model_ContentType')->rebuildContentTypeCache();
	}
}