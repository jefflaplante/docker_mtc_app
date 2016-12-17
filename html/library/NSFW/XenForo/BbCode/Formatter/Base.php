<?php

class NSFW_XenForo_BbCode_Formatter_Base extends XFCP_NSFW_XenForo_BbCode_Formatter_Base
{
	public function addSmilies(array $smilies)
	{
		$visitor = XenForo_Visitor::getInstance();
		if ($visitor[NSFW_Cookie::VISITOR_KEY_ACTIVATED] AND !empty($visitor['nsfw_options']['smilies']))
		{
			// smilies is set to be hidden
			// do nothing here
		}
		else 
		{
			// work as normal, call the parent
			return parent::addSmilies($smilies);
		}
	}
	
	public function renderTagImage(array $tag, array $rendererStates)
	{
		$visitor = XenForo_Visitor::getInstance();
		if ($visitor[NSFW_Cookie::VISITOR_KEY_ACTIVATED] AND !empty($visitor['nsfw_options']['bbcode_img']))
		{
			// bbcode [IMG] is set to be hidden
			// render as [URL]
			return $this->renderTagUrl($tag, $rendererStates);
		}
		else 
		{
			// work as normal, call the parent
			return parent::renderTagImage($tag, $rendererStates);
		}
	}
}