<?php


class Borbole_EditAlert_Model_EditAlert extends XFCP_Borbole_EditAlert_Model_EditAlert
{
	
	public function sendEditAlert($alertType, $postId, array $recipients, XenForo_Visitor $visitor = null)
	{
		$visitor = XenForo_Visitor::getInstance(); 
		
		if (!$visitor)
		{
			$visitor = XenForo_Visitor::getInstance();
		}

		if (!empty($recipients))
		{
			foreach ($recipients as $recipient)
			{
				$user = $this->_getUserModel()->getUserByName($recipient);
				
				if (XenForo_Model_Alert::userReceivesAlert($user, 'post', $alertType))
				{
					XenForo_Model_Alert::alert($user['user_id'],
							$visitor['user_id'], $visitor['username'],
							'post', 
							$postId,
							$alertType
					);
				}
			}
		}
		return false;
	}
	
	
	protected function _getUserModel()
	{
		return $this->getModelFromCache('XenForo_Model_User');
	}	
		
}