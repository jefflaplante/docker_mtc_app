<?php

/* Start auto-generated lines of code. Change made will be overwriten... */

class KeywordAlert_ControllerAdmin_Keyword_Generated extends XenForo_ControllerAdmin_Abstract
{

    public function actionIndex()
    {
        $model = $this->_getKeywordModel();
        $allKeyword = $model->getAllKeyword();

        $viewParams = array(
            'allKeyword' => $allKeyword
        );

        return $this->responseView('KeywordAlert_ViewAdmin_Keyword_List', 'keywordalert_keyword_list', $viewParams);
    }

    public function actionAdd()
    {
        $viewParams = array(
            'keyword' => array(),

        );

        return $this->responseView('KeywordAlert_ViewAdmin_Keyword_Edit', 'keywordalert_keyword_edit', $viewParams);
    }

    public function actionEdit()
    {
        $id = $this->_input->filterSingle('keyword_id', XenForo_Input::UINT);
        $keyword = $this->_getKeywordOrError($id);

        $viewParams = array(
            'keyword' => $keyword,

        );

        return $this->responseView('KeywordAlert_ViewAdmin_Keyword_Edit', 'keywordalert_keyword_edit', $viewParams);
    }

    public function actionSave()
    {
        $this->_assertPostOnly();

        $id = $this->_input->filterSingle('keyword_id', XenForo_Input::UINT);

        $dwInput = $this->_input->filter(array('name' => 'string', 'notify_frequency' => 'uint', 'user_id' => 'uint', 'forum_mode' => 'string'));

        $dw = $this->_getKeywordDataWriter();
        if ($id) {
            $dw->setExistingData($id);
        }
        $dw->bulkSet($dwInput);


        $this->_prepareDwBeforeSaving($dw);

        $dw->save();

        return $this->responseRedirect(
            XenForo_ControllerResponse_Redirect::SUCCESS,
            XenForo_Link::buildAdminLink('keyword-alert')
        );
    }

    public function actionDelete()
    {
        $id = $this->_input->filterSingle('keyword_id', XenForo_Input::UINT);
        $keyword = $this->_getKeywordOrError($id);

        if ($this->isConfirmedPost()) {
            $dw = $this->_getKeywordDataWriter();
            $dw->setExistingData($id);
            $dw->delete();

            return $this->responseRedirect(
                XenForo_ControllerResponse_Redirect::SUCCESS,
                XenForo_Link::buildAdminLink('keyword-alert')
            );
        } else {
            $viewParams = array(
                'keyword' => $keyword
            );

            return $this->responseView('KeywordAlert_ViewAdmin_Keyword_Delete', 'keywordalert_keyword_delete', $viewParams);
        }
    }


    protected function _getKeywordOrError($id, array $fetchOptions = array())
    {
        $info = $this->_getKeywordModel()->getKeywordById($id, $fetchOptions);

        if (empty($info)) {
            throw $this->responseException($this->responseError(new XenForo_Phrase('keywordalert_keyword_not_found'), 404));
        }

        return $info;
    }

    /**
     * @return KeywordAlert_Model_Keyword
     */
    protected function _getKeywordModel()
    {
        return $this->getModelFromCache('KeywordAlert_Model_Keyword');
    }

    /**
     * @return KeywordAlert_DataWriter_Keyword
     */
    protected function _getKeywordDataWriter()
    {
        return XenForo_DataWriter::create('KeywordAlert_DataWriter_Keyword');
    }

    protected function _prepareDwBeforeSaving(KeywordAlert_DataWriter_Keyword $dw)
    {
        // this method should be overriden if datawriter requires special treatments
    }
}

/* End auto-generated lines of code. Feel free to make changes below */

class KeywordAlert_ControllerAdmin_Keyword extends KeywordAlert_ControllerAdmin_Keyword_Generated
{

    public function actionIndex()
    {
        $page = $this->_input->filterSingle('page', XenForo_Input::UINT);
        $perPage = KeywordAlert_Option::get('perPage');

        $keywords = $this->_getKeywordModel()->getAllKeyword(
            array(),
            array(
                'page' => $page,
                'perPage' => $perPage,
            )
        );
        $total = $this->_getKeywordModel()->countAllKeyword();

        $viewParams = array(
            'keywords' => $keywords,
            'total' => $total,

            'page' => $page,
            'perPage' => $perPage,
        );

        return $this->responseView('KeywordAlert_ViewAdmin_Keyword_List', 'keywordalert_keyword_list', $viewParams);
    }

    protected function _prepareDwBeforeSaving(KeywordAlert_DataWriter_Keyword $dw)
    {
        $extraInput = $this->_input->filter(array(
            'keywords' => XenForo_Input::ARRAY_SIMPLE,
            'forum_data' => XenForo_Input::ARRAY_SIMPLE,
            'excluded_rules' => XenForo_Input::ARRAY_SIMPLE,
        ));

        $dw->setKeywords($extraInput['keywords']);
        $dw->setForumData($extraInput['forum_data']);
        $dw->setExcludedRules($extraInput['excluded_rules']);
    }
}