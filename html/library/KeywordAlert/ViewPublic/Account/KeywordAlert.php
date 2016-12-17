<?php

class KeywordAlert_ViewPublic_Account_KeywordAlert extends XenForo_ViewPublic_Base
{
    public function renderHtml()
    {
        /** @var XenForo_Model_Node $model */
        $model = XenForo_Model::create('XenForo_Model_Node');
        $forums = $model->getViewableNodeList();
        $this->_params['forums'] = array();

        foreach ($forums as $forum) {
            if ($forum['node_type_id'] != 'Forum') continue;
            $this->_params['forums'][] = array(
                'value' => $forum['node_id'],
                'label' => $forum['title'],
                'depth' => $forum['depth'],
            );
        }
    }
}