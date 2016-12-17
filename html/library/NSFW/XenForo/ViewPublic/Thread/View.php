<?php

class NSFW_XenForo_ViewPublic_Thread_View extends XFCP_NSFW_XenForo_ViewPublic_Thread_View
{
	public function prepareParams()
	{
		parent::prepareParams();
		
		$visitor = XenForo_Visitor::getInstance();
		if ($visitor[NSFW_Cookie::VISITOR_KEY_ACTIVATED] AND !empty($visitor['nsfw_options']['attachment']))
		{
			// attachment is set to be hidden
			// unset all thumbnailUrl in messages' attachments
			foreach ($this->_params['posts'] as &$post)
			{
				if (!empty($post['attachments']))
				{
					foreach ($post['attachments'] as &$attachment)
					{
						$attachment['thumbnailUrl'] = false;
					}
				}
			}
		}
	}
}