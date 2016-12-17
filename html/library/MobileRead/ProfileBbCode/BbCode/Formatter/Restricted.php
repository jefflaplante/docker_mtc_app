<?php

class MobileRead_ProfileBbCode_BbCode_Formatter_Restricted extends XFCP_MobileRead_ProfileBbCode_BbCode_Formatter_Restricted
{
	public function renderTag(array $element, array $rendererStates, &$trimLeadingLines)
	{
		if (isset($rendererStates['template']))
		{
			if (MobileRead_ProfileBbCode_Template_Helper_ProfileBbCode::isAllowed($rendererStates['template'], $element['tag']))
			{
				return parent::renderTag($element, $rendererStates, $trimLeadingLines);
			}
			else
			{
				if ($rendererStates['stripOut'])
				{
					return $this->renderSubTree($element['children'], $rendererStates);
				}
				else
				{
					return $this->renderInvalidTag($element, $rendererStates);
				}
			}
		}
		return parent::renderTag($element, $rendererStates, $trimLeadingLines);
	}
}

?>