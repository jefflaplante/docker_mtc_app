<?php
class Brivium_ThreadLiveUpdate_ControllerPublic_Thread extends XFCP_Brivium_ThreadLiveUpdate_ControllerPublic_Thread {

	
	public function actionIndex(){
		$action = parent::actionIndex();
		if(!empty($action->params['forum']['node_id'])){
			$nodeId = $action->params['forum']['node_id'];
			
			$canUseThreadLiveUpdate = $this->_assertCanUseThreadLiveUpdate($nodeId);
			if($canUseThreadLiveUpdate){
				$action->params['brCanUseThreadLiveUpdate']=true;
			}
			
			$canUseThreadLiveUpdateTools = $this->_brGetPostModel()->canUseThreadLiveUpdateTools($nodeId);
			if($canUseThreadLiveUpdateTools){
				$action->params['brCanUseThreadLiveUpdateTools']=true;
			}
		}
		return $action;
	}
	public function actionThreadUpdate(){
		
		$threadId = $this->_input->filterSingle('thread_id', XenForo_Input::UINT);
		$lastDate = $this->_input->filterSingle('last_date', XenForo_Input::UINT);
		
		$visitor = XenForo_Visitor::getInstance();
		
		$xenOptions =  XenForo_Application::getOptions();
		
		$ftpHelper = $this->getHelper('ForumThreadPost');
		$threadForumFetchOptions = array('readUserId' => $visitor['user_id']);
		list($thread, $forum) = $ftpHelper->assertThreadValidAndViewable($threadId, $threadForumFetchOptions, $threadForumFetchOptions);
		
		if($thread['last_post_date'] <= $lastDate){
			return $this->responseView(
					'Brivium_ThreadLiveUpdate_Thread_ViewNewPosts',
					'',
					array()
			);
		}
	
		$limit = $xenOptions->BRTLU_maxThreadOnLoad;
		$viewParams = $this->_getNewPostsOtherId($thread, $forum, $lastDate, $limit);
		
		$post = $viewParams['posts'];
		if(!empty($viewParams)){
			foreach ($post as $key => $value){
				$viewParams['posts'][$key]['isNew']=true;
			}
		}
		
		$displaySignature = $xenOptions->BRTLU_displaySignature;
		if (!$displaySignature) {
			foreach ($viewParams['posts'] as $key => $value){
				$viewParams['posts'][$key]['signature']='';
			}
		}
		return $this->responseView(
				'XenForo_ViewPublic_Thread_ViewNewPosts',
				'thread_reply_new_posts',
				$viewParams
		);
	}
	
	
	protected function _getNewPostsOtherId(array $thread, array $forum, $lastDate, $limit = 3)
	{
		$postModel = $this->_brGetPostModel();
		$visitor = XenForo_Visitor::getInstance();

		$postFetchOptions = $this->_getPostFetchOptions($thread, $forum);
		
		$postFetchOptions += array(
				'limit' => $limit,
		);
		
		$posts = $postModel->brGetNewestPostsInThreadAfterDate(
			$thread['thread_id'], $lastDate, $postFetchOptions
		);

		if(!empty($posts))
		{
			foreach ($posts as &$post)
			{
				$post = $postModel->preparePost($post, $thread, $forum);
			}
			$posts = $postModel->getAndMergeAttachmentsIntoPosts($posts);
		}
		
		
		return $this->_getDefaultViewParams($forum, $thread, $posts, null, array(
			'firstUnshownPost' => false,
			'lastPost' => end($posts)
		));
	}
	
	
	public function actionAllowUpdate(){
		$this->_assertPostOnly();
		
		$settings = $this->_input->filter(array(
				'br_thread_update' => XenForo_Input::UINT,
				'br_post_jump' => XenForo_Input::UINT,
		));
		
		if (!$this->_brSaveThreadUpdate($settings))
		{
			return $this->responseError();
		}
	
		$threadId = $this->_input->filterSingle('thread_id', XenForo_Input::UINT);
		$ftpHelper = $this->getHelper('ForumThreadPost');
		list($thread, $forum) = $ftpHelper->assertThreadValidAndViewable($threadId);
		
		$currentPage = $this->_input->filterSingle('page', XenForo_Input::UINT);
		
	
		return $this->responseRedirect(
				XenForo_ControllerResponse_Redirect::RESOURCE_CANONICAL,
				XenForo_Link::buildPublicLink('threads', $thread,array('page'=>$currentPage))
		);
	}
	
	public function _assertCanUseThreadLiveUpdate($nodeId = ''){
		$permission = $this->_brGetPostModel()->canUseThreadLiveUpdate($nodeId);
		if(!$permission){
			return false;
		}
		
		$optionsExcludeForum = XenForo_Application::getOptions()->BRTLU_excludeForum;
		if(in_array($nodeId, $optionsExcludeForum)){
			return false;
		}
		return true;
	}
	
	protected function _brSaveThreadUpdate($settings)
	{
		$writer = XenForo_DataWriter::create('XenForo_DataWriter_User');
		$writer->setExistingData(XenForo_Visitor::getUserId());
		$writer->bulkSet($settings);
		$writer->save();
	
		return $writer;
	}
	
	protected function _brGetPostModel()
	{
		return $this->getModelFromCache('Brivium_ThreadLiveUpdate_Model_Post');
	}
	
}