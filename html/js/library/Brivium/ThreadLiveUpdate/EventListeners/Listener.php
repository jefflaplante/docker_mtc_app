<?php
class Brivium_ThreadLiveUpdate_EventListeners_Listener extends Brivium_BriviumHelper_EventListeners
{
	public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
	{
		switch ($hookName)
		{
			case 'thread_view_qr_before' :
				$newTemplate = $template->create( 'BRTLU_' . $hookName, $template->getParams());
				$contents .= $newTemplate->render();
				break;
		}
	}
}