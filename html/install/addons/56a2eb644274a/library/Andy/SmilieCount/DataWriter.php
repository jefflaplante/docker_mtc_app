<?php

class Andy_SmilieCount_DataWriter extends XFCP_Andy_SmilieCount_DataWriter
{
	public function preSave()
	{
		// make sure preSave() is only run once
		if ($this->_preSaveCalled)
		{
			return;
		}
		
		// call parent function
		parent::preSave();		
										
		// get smilies from xf_smilie table
		$smilies = $this->getModelFromCache('XenForo_Model_Smilie')->getAllSmilies();
				
		// get $maxSmilieCount from Admin CP -> Options -> Smilie Count -> Maximum Smilies Per Message	
		$maxSmilieCount = XenForo_Application::get('options')->maxSmilieCount;		
		
		//########################################
		// count number of smilies in message
		//########################################
		
		$smilieCount = 0;
		
		foreach ($smilies as $smilie)
		{
			$smilieCount += substr_count($this->get('message'), $smilie['smilie_text']);
		} 			
		
		// show error message if smilie_count exceeds limit
		if ($smilieCount > $maxSmilieCount) 
		{
			$this->_preSaveCalled = true;
			return $this->error(new XenForo_Phrase('smiliecount_please_reduce_the_number_of_smilies_maximum_allowed_is') . ' ' . $maxSmilieCount); 
		}	
	}   
}