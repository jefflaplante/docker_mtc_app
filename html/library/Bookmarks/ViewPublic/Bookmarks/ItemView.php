<?php

class Bookmarks_ViewPublic_Bookmarks_ItemView extends XenForo_ViewPublic_Base
{
	public function renderHtml()
	{
		$bbCodeParser = new XenForo_BbCode_Parser(XenForo_BbCode_Formatter_Base::create('Base', array('view' => $this)));
		$item = $this->_params['item'];
		$content = $item['content'];
		
		$this->_params['item']['messageHtml'] = new XenForo_BbCode_TextWrapper($content['message'], $bbCodeParser);
		$this->_params['user'] = array('user_id' => $item['user_id'], 'username' => $item['username']);
	}
}