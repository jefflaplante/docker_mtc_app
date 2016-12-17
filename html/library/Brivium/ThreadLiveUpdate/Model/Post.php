<?php
class Brivium_ThreadLiveUpdate_Model_Post extends XenForo_Model_Post {

	public function brGetNewestPostsInThreadAfterDate($threadId, $postDate, array $fetchOptions = array()) {

		$stateLimit = $this->prepareStateLimitFromConditions ( $fetchOptions, 'post' );
		
		$joinOptions = $this->preparePostJoinOptions ( $fetchOptions );
		
		$limitOptions = $this->prepareLimitFetchOptions ( $fetchOptions );
		
		return $this->fetchAllKeyed ( $this->limitQueryResults ( '
				SELECT post.*
					' . $joinOptions ['selectFields'] . '
				FROM xf_post AS post
				' . $joinOptions ['joinTables'] . '
				WHERE post.thread_id = ?
					AND post.post_date > ?
					AND (' . $stateLimit . ')
					AND user.user_id != ?
				ORDER BY post.position ASC, post.post_date ASC
			', $limitOptions ['limit'], $limitOptions ['offset'] ), 'post_id', array (
				$threadId,
				$postDate,
				$fetchOptions['likeUserId']
		) );
	}
	
	public function canUseThreadLiveUpdate($forumId, array $viewingUser = null, array $nodePermissions = null)
	{
		$this->standardizeViewingUserReferenceForNode($forumId, $viewingUser, $nodePermissions);
	
		return XenForo_Permission::hasContentPermission($nodePermissions, 'BRTLU_threadLiveUpdate');
	}
	public function canUseThreadLiveUpdateTools($forumId, array $viewingUser = null, array $nodePermissions = null)
	{
		$this->standardizeViewingUserReferenceForNode($forumId, $viewingUser, $nodePermissions);
	
		return XenForo_Permission::hasContentPermission($nodePermissions, 'BRTLU_threadUpdateTools');
	}
}
