<?php

class KeywordAlert_ViewPublic_Account_KeywordAlertOne extends XenForo_ViewPublic_Base
{
    public function renderJson()
    {
        /** @var XenForo_ViewRenderer_Json $renderer */
        $renderer = $this->_renderer;
        $output = $renderer->getDefaultOutputArray(get_class($this), $this->_params, $this->_templateName);
        $output['keywordId'] = $this->_params['keyword']['keyword_id'];
        $output['_redirectMessage'] = new XenForo_Phrase('keywordalert_your_keyword_has_been_saved');

        return XenForo_ViewRenderer_Json::jsonEncodeForOutput($output);
    }
}