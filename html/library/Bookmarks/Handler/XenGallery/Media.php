<?php

class Bookmarks_Handler_XenGallery_Media extends Bookmarks_Handler_Abstract
{
	public function getContentData(array $contentIds, array $viewingUser)
	{
		$mediaModel = $this->_getMediaModel();

		$mediaItems = $mediaModel->getMediaByIds($contentIds, array(
			'join' => XenGallery_Model_Media::FETCH_USER | XenGallery_Model_Media::FETCH_ALBUM | XenGallery_Model_Media::FETCH_CATEGORY | XenGallery_Model_Media::FETCH_ATTACHMENT
		));

		foreach ($mediaItems AS $mediaItemId => &$mediaItem)
		{
			$errorPhraseKey = '';
			if ($mediaItem['media_state'] != 'visible' || !$mediaModel->canViewMediaItem($mediaItem, $errorPhraseKey,
					$viewingUser)
			)
			{
				unset($mediaItem[$mediaItemId]);
			}
			else
			{
				// does the post user exist
				if (is_null($mediaItem['user_id']))
				{
					$mediaItem['user_id'] = 0; // do not provide a link to none existing user
				}

				$mediaItem = $mediaModel->prepareMedia($mediaItem);

				$mediaItem['message'] = $mediaItem['media_description'];
			}
		}

		return $mediaItems;
	}

	public function getListTemplateName()
	{
		return 'bookmarks_item_media';
	}

	public function getViewTemplateName()
	{
		return 'bookmarks_view_media';
	}

	/**
	 * @return XenGallery_Model_Media
	 */
	protected function _getMediaModel()
	{
		return XenForo_Model::create('XenGallery_Model_Media');
	}
}