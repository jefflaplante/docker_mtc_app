<?php

class Bookmarks_Listener_Proxy
{
	// class extensions
	public static function loadClassPermission($class, array &$extend)
	{
		if ($class == 'XenForo_Deferred_Permission')
		{
			$extend[] = 'Bookmarks_Deferred_Permission';
		}
	}

	// controller class extensions
	public static function loadClassController($class, array &$extend)
	{
		if ($class == 'XenForo_ControllerPublic_Post')
		{
			$extend[] = 'Bookmarks_ControllerPublic_Post';
		}
		else if ($class == 'XenForo_ControllerPublic_Thread')
		{
			$extend[] = 'Bookmarks_ControllerPublic_Thread';
		}
		else if ($class == 'XenForo_ControllerPublic_ProfilePost')
		{
			$extend[] = 'Bookmarks_ControllerPublic_ProfilePost';
		}
		else if ($class == 'XenForo_ControllerPublic_Account')
		{
			$extend[] = 'Bookmarks_ControllerPublic_Account';
		}
		else if ($class == 'XenForo_ControllerPublic_Member')
		{
			$extend[] = 'Bookmarks_ControllerPublic_Member';
		}
		else if ($class == 'XenForo_ControllerAdmin_Stats')
		{
			$extend[] = 'Bookmarks_ControllerAdmin_Stats';
		}
	}

	// model class extensions
	public static function loadClassModel($class, array &$extend)
	{
		if ($class == 'XenForo_Model_Post')
		{
			$extend[] = 'Bookmarks_Model_Post';
		}
		else if ($class == 'XenForo_Model_Thread')
		{
			$extend[] = 'Bookmarks_Model_Thread';
		}
		else if ($class == 'XenForo_Model_InlineMod_Thread')
		{
			$extend[] = 'Bookmarks_Model_InlineMod_Thread';
		}
	}

	// datawriter class extensions
	public static function loadClassDataWriter($class, array &$extend)
	{
		if ($class == 'XenForo_DataWriter_User')
		{
			$extend[] = 'Bookmarks_DataWriter_User';
		}
		else if ($class == 'XenForo_DataWriter_DiscussionMessage_Post')
		{
			$extend[] = 'Bookmarks_DataWriter_DiscussionMessage_Post';
		}
		else if ($class == 'XenForo_DataWriter_DiscussionMessage_ProfilePost')
		{
			$extend[] = 'Bookmarks_DataWriter_DiscussionMessage_ProfilePost';
		}
		else if ($class == 'XenForo_DataWriter_Discussion_Thread')
		{
			$extend[] = 'Bookmarks_DataWriter_Discussion_Thread';
		}
		else if ($class == 'XenForo_DataWriter_AddOn')
		{
			$extend[] = 'Bookmarks_DataWriter_AddOn';
		}
		else if ($class == 'XenResource_DataWriter_Resource')
		{
			$extend[] = 'Bookmarks_DataWriter_XenResource_Resource';
		}
		else if ($class == 'XenResource_DataWriter_Category')
		{
			$extend[] = 'Bookmarks_DataWriter_XenResource_Category';
		}
		else if ($class == 'NFLJ_Showcase_DataWriter_Item')
		{
			$extend[] = 'Bookmarks_DataWriter_Showcase_Item';
		}
		else if ($class == 'NFLJ_Showcase_DataWriter_Category')
		{
			$extend[] = 'Bookmarks_DataWriter_Showcase_Category';
		}
		else if ($class == 'XenGallery_DataWriter_Media')
		{
			$extend[] = 'Bookmarks_DataWriter_XenGallery_Media';
		}
	}
}