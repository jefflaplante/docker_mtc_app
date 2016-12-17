<?php
	
class KingK_TagMiniAvatar_BbCode_Formatter_Base extends XFCP_KingK_TagMiniAvatar_BbCode_Formatter_Base {
	public function renderTagUser(array $tag, array $rendererStates) {
		$return = parent::renderTagUser($tag, $rendererStates);
		
		if ($return !== '') {
			$userId = intval($tag['option']);
			if ($userId) {
				$avatarHtml = XenForo_Template_Helper_Core::callHelper('avatarhtml', array(
					array(
						'user_id' => $userId,
						'avatar_date' => time(),
						'gravatar' => '',
						'username' => $this->renderSubTree($tag['children'], $rendererStates)
					),
					true,
					array(
						'class' => 'inTextMiniMe',
						'size' => 's'
					)));

				if ($avatarHtml) {
					
					if (!$imagePath = XenForo_Template_Helper_Core::styleProperty('imagePath'))
					{
						$imagePath = 'styles/default';
					}
					
					$avatarHtml = str_replace('src=', 'onerror="this.src = \'' . $imagePath . '/xenforo/avatars/avatar_s.png\';" src=', $avatarHtml);
					
					$return = $avatarHtml . $return;
				}
			}
		}
		
		return $return;
	}
}