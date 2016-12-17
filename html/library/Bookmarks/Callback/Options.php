<?php

class Bookmarks_Callback_Options
{
	public static function verifyOption($value, XenForo_DataWriter $dw, $fieldName)
	{
		if ($fieldName == 'bookmarks_resource')
		{
			if (!$value)
			{
				return true;
			}

			$addOnModel = XenForo_Model::create('XenForo_Model_AddOn');
			$resource = $addOnModel->getAddOnById('XenResource');
			if (empty($resource) || !$resource['active'])
			{
				$dw->error(new XenForo_Phrase('bookmarks_resource_manager_must_be_installed_and_active_option_error'),
					$fieldName);

				return false;
			}
			else
			{
				if ($resource['version_id'] < 1000170) // smaller than version 1.0.1 (pre hooks)
				{
					$dw->error(new XenForo_Phrase('bookmarks_resource_manager_must_be_x_option_error',
						array('version' => '1.0.1')), $fieldName);
				}
			}
		}
		else if ($fieldName == 'bookmarks_media')
		{
			if (!$value)
			{
				return true;
			}

			$addOnModel = XenForo_Model::create('XenForo_Model_AddOn');
			$gallery = $addOnModel->getAddOnById('XenGallery');
			if (empty($gallery) || !$gallery['active'])
			{
				$dw->error(new XenForo_Phrase('bookmarks_media_gallery_must_be_installed_and_active_option_error'),
					$fieldName);

				return false;
			}
		}
		else if ($fieldName == 'bookmarks_showcase')
		{
			if (!$value)
			{
				return true;
			}

			$addOnModel = XenForo_Model::create('XenForo_Model_AddOn');
			$showcase = $addOnModel->getAddOnById('NFLJ_Showcase');
			if (empty($showcase) || !$showcase['active'])
			{
				$dw->error(new XenForo_Phrase('bookmarks_showcase_must_be_installed_and_active_option_error'),
					$fieldName);

				return false;
			}
			else
			{
				if ($showcase['version_id'] < 31) // smaller than version 1.3.0
				{
					$dw->error(new XenForo_Phrase('bookmarks_showcase_must_be_x_option_error',
						array('version' => '1.3.0')), $fieldName);
				}
			}
		}

		return true;
	}
}