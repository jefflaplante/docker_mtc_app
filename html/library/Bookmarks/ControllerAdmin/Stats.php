<?php

class Bookmarks_ControllerAdmin_Stats extends XFCP_Bookmarks_ControllerAdmin_Stats
{
	public function getStatsData($grouping, $defaultStart)
	{
		// alows loading the stats page with 'bookmarks' selected as the type
		// used for linking directly from the options page
		if ($this->_input->filterSingle('bookmarks', XenForo_Input::BOOLEAN))
		{
			if (!$statsTypes = $this->_input->filterSingle('statsTypes', XenForo_Input::ARRAY_SIMPLE))
			{
				$this->_request->setParam('statsTypes', array('bookmarks'));
			}
		}
		
		return parent::getStatsData($grouping, $defaultStart);
	}
}