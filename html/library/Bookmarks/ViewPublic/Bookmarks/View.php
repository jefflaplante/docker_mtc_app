<?php

class Bookmarks_ViewPublic_Bookmarks_View extends XenForo_ViewPublic_Base
{
	public function renderHtml()
	{
		if (isset($this->_params['postBookmarks']))
		{
			foreach ($this->_params['postBookmarks'] AS &$item)
			{
				$item['listTemplate'] = $this->createTemplateObject($item['listTemplateName'], array(
					'item' => $item,
					'user' => array(
						'user_id' => $item['user_id'],
						'username' => $item['username'],
					),
					'content' => $item['content']
				));
			}
		}
		
		$options = XenForo_Application::get('options');
		
		if ($options->bookmarks_profile)
		{
			if (isset($this->_params['profilePostBookmarks']))
			{
				foreach ($this->_params['profilePostBookmarks'] AS &$item)
				{
					$item['listTemplate'] = $this->createTemplateObject($item['listTemplateName'], array(
						'item' => $item,
						'user' => array(
							'user_id' => $item['user_id'],
							'username' => $item['username'],
						),
						'content' => $item['content']
					));
				}
			}
		}
		
		if ($options->bookmarks_resource)
		{
			if (isset($this->_params['resourceBookmarks']))
			{
				foreach ($this->_params['resourceBookmarks'] AS &$item)
				{
					$item['listTemplate'] = $this->createTemplateObject($item['listTemplateName'], array(
						'item' => $item,
						'user' => array(
							'user_id' => $item['user_id'],
							'username' => $item['username'],
						),
						'content' => $item['content']
					));
				}
			}
		}

		if ($options->bookmarks_media)
		{
			if (isset($this->_params['mediaBookmarks']))
			{
				foreach ($this->_params['mediaBookmarks'] AS &$item)
				{
					$item['listTemplate'] = $this->createTemplateObject($item['listTemplateName'], array(
						'item' => $item,
						'user' => array(
							'user_id' => $item['user_id'],
							'username' => $item['username'],
						),
						'content' => $item['content']
					));
				}
			}
		}
		
		if ($options->bookmarks_showcase)
		{
			if (isset($this->_params['showcaseItemBookmarks']))
			{
				foreach ($this->_params['showcaseItemBookmarks'] AS &$item)
				{
					$item['listTemplate'] = $this->createTemplateObject($item['listTemplateName'], array(
						'item' => $item,
						'user' => array(
							'user_id' => $item['user_id'],
							'username' => $item['username'],
						),
						'content' => $item['content']
					));
				}
			}
		}
	}
}