<?php

/**
 *
 * @see XenForo_Model_Post
 */
class Waindigo_EditPostDate_Extend_XenForo_Model_Post extends XFCP_Waindigo_EditPostDate_Extend_XenForo_Model_Post
{

    /**
     *
     * @see XenForo_Model_Post::addInlineModOptionToPost()
     */
    public function addInlineModOptionToPost(array &$post, array $thread, array $forum, array $nodePermissions = null,
        array $viewingUser = null)
    {
        $this->standardizeViewingUserReferenceForNode($thread['node_id'], $viewingUser, $nodePermissions);

        $postModOptions = parent::addInlineModOptionToPost($post, $thread, $forum, $nodePermissions, $viewingUser);

        $canInlineMod = ($viewingUser['user_id'] &&
             XenForo_Permission::hasContentPermission($nodePermissions, 'manageAnyThread'));

        if ($canInlineMod) {
            if ($this->canEditPostDate($post, $thread, $forum, $null, $nodePermissions, $viewingUser)) {
                $postModOptions['editDate'] = true;
            }
        }
        if (!$post['canInlineMod'] && isset($postModOptions['editPostDate'])) {
            $post['canInlineMod'] = true;
        }

        return $postModOptions;
    } /* END addInlineModOptionToPost */

    /**
     * Determines if the post date can be edited with the given permissions.
     * This does not check post viewing permissions.
     *
     * @param array $post Info about the post
     * @param array $thread Info about the thread this post is in
     * @param array $forum Info about the forum the thread is in
     * @param string $errorPhraseKey Returned phrase key for a specific error
     * @param array|null $nodePermissions
     * @param array|null $viewingUser
     *
     * @return boolean
     */
    public function canEditPostDate(array $post, array $thread, array $forum, &$errorPhraseKey = '',
        array $nodePermissions = null, array $viewingUser = null)
    {
        $this->standardizeViewingUserReferenceForNode($thread['node_id'], $viewingUser, $nodePermissions);
        return ($viewingUser['user_id'] && XenForo_Permission::hasContentPermission($nodePermissions, 'editPostDate'));
    } /* END canEditPostDate */

    public function editPostDateOfPosts(array $postIds, $postDate, $useDataWriter = true)
    {
        if (!$postIds) {
            return false;
        }
        foreach ($postIds as $postId) {
            if ($useDataWriter) {
                $writer = XenForo_DataWriter::create('XenForo_DataWriter_DiscussionMessage_Post');
                $writer->setExistingData($postId);
                $writer->set('post_date', $postDate);
                $writer->save();
            } else {
                $this->_getDb()->update('xf_post', array('post_date' => $postDate), 'post_id=' . $postId);
            }
        }
    } /* END editPostDateOfPosts */
}