<?php

class MeCommand_ViewPublic_Thread_View extends XFCP_MeCommand_ViewPublic_Thread_View
{
	public function renderHtml()
	{
		$parent = parent::renderHtml();
		
		$posts = $this->_params['posts'];
		foreach ($posts AS &$post)
		{
			$me = $post['username'];
			
			$pattern = '#(>|^|\r|\n)/me ([^\r\n<]*)#i';
			$post['messageHtml'] = preg_replace($pattern, "\\1<span class=\"meCommand\"> * $me \\2</span>", $post['messageHtml']);
		}
		
		$this->_params['posts'] = $posts;
		
		return $parent;
	}
}