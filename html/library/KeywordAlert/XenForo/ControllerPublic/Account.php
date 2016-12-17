<?php

class KeywordAlert_XenForo_ControllerPublic_Account extends XFCP_KeywordAlert_XenForo_ControllerPublic_Account
{
    public function actionKeywordAlert()
    {
        return $this->KeywordAlert_actionList();
    }

    public function actionKeywordAlertEdit()
    {
        return $this->KeywordAlert_actionEdit();
    }

    public function actionKeywordAlertDelete()
    {
        return $this->KeywordAlert_actionDelete();
    }

    protected function KeywordAlert_actionList()
    {
        $edit = $this->_input->filterSingle('edit', XenForo_Input::UINT);
        if (!empty($edit)) {
            $this->_request->setParam('keyword_id', $edit);
            return $this->responseReroute('XenForo_ControllerPublic_Account', 'KeywordAlertEdit');
        }

        $delete = $this->_input->filterSingle('delete', XenForo_Input::UINT);
        if (!empty($delete)) {
            $this->_request->setParam('keyword_id', $delete);
            return $this->responseReroute('XenForo_ControllerPublic_Account', 'KeywordAlertDelete');
        }

        /* @var $keywordModel KeywordAlert_Model_Keyword */
        $keywordModel = $this->getModelFromCache('KeywordAlert_Model_Keyword');

        if ($keywordModel->canUse() == false) {
            return $this->responseNoPermission();
        }

        $conditions = array('user_id' => XenForo_Visitor::getUserId());
        $fetchOptions = array();
        $keywords = $keywordModel->getAllKeyword($conditions, $fetchOptions);

        $viewParams = array(
            'keywords' => $keywords,
        );

        return $this->_getWrapper(
            'account', 'keyword-alert',
            $this->responseView(
                'KeywordAlert_ViewPublic_Account_KeywordAlert',
                'keywordalert_list',
                $viewParams
            )
        );
    }

    protected function KeywordAlert_actionEdit()
    {
        $id = $this->_input->filterSingle('keyword_id', XenForo_Input::UINT);

        /* @var $keywordModel KeywordAlert_Model_Keyword */
        $keywordModel = $this->getModelFromCache('KeywordAlert_Model_Keyword');

        if ($keywordModel->canUse() == false) {
            return $this->responseNoPermission();
        }

        $keyword = $keywordModel->getKeywordById($id);
        if (!empty($keyword) AND $keyword['user_id'] != XenForo_Visitor::getUserId()) {
            return $this->responseNoPermission();
        }

        if (!$this->isConfirmedPost()) {
            // this is a get request: display the edit form
            $viewParams = array(
                'keyword' => $keyword,
            );

            if ($this->_input->filterSingle('_postedFromInlineEditor', XenForo_Input::UINT)) {
                return $this->responseView(
                    'KeywordAlert_ViewPublic_Account_KeywordAlertEdit',
                    'keywordalert_edit',
                    $viewParams
                );
            } else {
                return $this->_getWrapper(
                    'account', 'keyword-alert',
                    $this->responseView(
                        'KeywordAlert_ViewPublic_Account_KeywordAlertEdit',
                        'keywordalert_edit',
                        $viewParams
                    )
                );
            }
        } else {
            // user submitted the edit, process it and response accordingly now

            $dwInput = $this->_input->filter(array(
                'name' => XenForo_Input::STRING,
                'notify_frequency' => XenForo_Input::UINT,
                'forum_mode' => XenForo_Input::STRING,
            ));
            $extraInput = $this->_input->filter(array(
                'keywords' => XenForo_Input::ARRAY_SIMPLE,
                'forum_data' => XenForo_Input::ARRAY_SIMPLE,
                'excluded_rules' => XenForo_Input::ARRAY_SIMPLE,
                'send_alert' => XenForo_Input::BOOLEAN,
            ));

            /* @var $dw KeywordAlert_DataWriter_Keyword */
            $dw = XenForo_DataWriter::create('KeywordAlert_DataWriter_Keyword');
            if (!empty($keyword)) {
                $dw->setExistingData($keyword, true);
            } else {
                $dw->set('user_id', XenForo_Visitor::getUserId());

                if (empty($dwInput['name'])) {
                    // new keyword set and user didn't give it a name...
                    $dwInput['name'] = XenForo_Template_Helper_Core::date(XenForo_Application::$time, 'absolute');
                }
            }
            $dw->bulkSet($dwInput);
            $dw->setKeywords($extraInput['keywords']);
            $dw->setForumData($extraInput['forum_data']);
            $dw->setExcludedRules($extraInput['excluded_rules']);
            $dw->set('send_alert', $extraInput['send_alert']);
            $dw->save();
            $keyword = $dw->getMergedData();

            if ($this->_input->filterSingle('_postedFromInlineEditor', XenForo_Input::UINT)) {
                // this is an inline editor submit request, we have to render it...
                $viewParams = array(
                    'keyword' => $keywordModel->getKeywordById($keyword['keyword_id']),
                );

                return $this->responseView(
                    'KeywordAlert_ViewPublic_Account_KeywordAlertOne',
                    'keywordalert_list_one',
                    $viewParams
                );
            } else {
                // standard stuff, just redirect to the list page
                return $this->responseRedirect(
                    XenForo_ControllerResponse_Redirect::RESOURCE_UPDATED,
                    XenForo_Link::buildPublicLink('account/keyword-alert')
                );
            }
        }
    }

    protected function KeywordAlert_actionDelete()
    {
        $id = $this->_input->filterSingle('keyword_id', XenForo_Input::UINT);

        /* @var $keywordModel KeywordAlert_Model_Keyword */
        $keywordModel = $this->getModelFromCache('KeywordAlert_Model_Keyword');

        if ($keywordModel->canUse() == false) {
            return $this->responseNoPermission();
        }

        $keyword = $keywordModel->getKeywordById($id);
        if (empty($keyword) OR $keyword['user_id'] != XenForo_Visitor::getUserId()) {
            return $this->responseNoPermission();
        }

        if (!$this->isConfirmedPost()) {
            // this is a get request: display the delete confirmation
            $viewParams = array(
                'keyword' => $keyword,
            );

            if ($this->_noRedirect()) {
                return $this->responseView(
                    'KeywordAlert_ViewPublic_Account_KeywordAlertDelete',
                    'keywordalert_delete_confirm',
                    $viewParams
                );
            } else {
                return $this->_getWrapper(
                    'account', 'keyword-alert',
                    $this->responseView(
                        'KeywordAlert_ViewPublic_Account_KeywordAlertDelete',
                        'keywordalert_delete_confirm',
                        $viewParams
                    )
                );
            }
        } else {
            /* @var $dw KeywordAlert_DataWriter_Keyword */
            $dw = XenForo_DataWriter::create('KeywordAlert_DataWriter_Keyword');
            $dw->setExistingData($keyword, true);
            $dw->delete();

            return $this->responseRedirect(
                XenForo_ControllerResponse_Redirect::RESOURCE_UPDATED,
                XenForo_Link::buildPublicLink('account/keyword-alert')
            );
        }
    }
}