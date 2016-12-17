<?php

class Bookmarks_ViewPublic_Bookmarks_ListItemEdit extends XenForo_ViewPublic_Base
{
	public function renderJson()
	{
		$output = $this->_renderer->getDefaultOutputArray(get_class($this), $this->_params, $this->_templateName);
		
		$output['bookmarkId'] = $this->_params['item']['bookmark_id'];
		$output['note'] = $this->_params['item']['bookmark_note'];
		$output['public'] = $this->_params['item']['public'] ? new XenForo_Phrase('bookmarks_public_flip') : new XenForo_Phrase('bookmarks_private_flip');
		$output['sticky'] = $this->_params['item']['sticky'];
		$output['content_type'] = $this->_params['item']['content_type'];
		
		if (XenForo_Application::get('options')->bookmarks_tags)
			$output['tag'] = $this->_params['item']['bookmark_tag'];			
		else
			$output['tag'] = '';
		
		if (!empty($this->_params['prev_sticky_state']))
			$output['prev_sticky_state'] = $this->_params['prev_sticky_state'];
			
		if (!empty($this->_params['multiplelines']))
			$output['multiplelines'] = $this->_params['multiplelines'];
		
//		if (!empty($this->_params['item']['redirect']))
//			$output['redirect'] = $this->_params['item']['redirect']; //'account/bookmarks'

		return XenForo_ViewRenderer_Json::jsonEncodeForOutput($output);
	}
}