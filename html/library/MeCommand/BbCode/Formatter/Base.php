<?php

class MeCommand_BbCode_Formatter_Base extends XFCP_MeCommand_BbCode_Formatter_Base
{
	public function renderTagQuote(array $tag, array $rendererStates)
	{
		$parent = parent::renderTagQuote($tag, $rendererStates);
		
		$name = '';
		if ($tag['option'])
		{
			$parts = explode(',', $tag['option']);
			$name = $this->filterString(array_shift($parts), $rendererStates);
		}
		
		if ($name)
		{
			$pattern = '#(>|^|\r|\n)/me ([^\r\n<]*)#i';
			$parent = preg_replace($pattern, "\\1<span class=\"meCommand\">* $name \\2 </span>", $parent);			
		}
		
		return $parent;
	}	
}