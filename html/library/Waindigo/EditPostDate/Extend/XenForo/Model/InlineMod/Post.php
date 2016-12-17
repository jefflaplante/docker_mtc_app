<?php

/**
 *
 * @see XenForo_Model_InlineMod_Post
 */
class Waindigo_EditPostDate_Extend_XenForo_Model_InlineMod_Post extends XFCP_Waindigo_EditPostDate_Extend_XenForo_Model_InlineMod_Post
{

    /**
     * Determines if the selected post IDs can be edited.
     *
     * @param array $postIds List of post IDs check
     * @param string $errorKey Modified by reference. If no permission, may
     * include a key of a phrase that gives more info
     * @param array|null $viewingUser
     *
     * @return boolean
     */
    public function canEditDatePosts(array $postIds, &$errorKey = '', array $viewingUser = null)
    {
        list ($posts, $threads, $forums) = $this->getPostsAndParentData($postIds, $viewingUser);
        return $this->canEditDatePostsData($posts, $threads, $forums, $errorKey, $viewingUser);
    } /* END canEditDatePosts */

    /**
     * Determines if the selected posts can be edited.
     * This is a slightly more
     * "internal" version of the canEditDatePosts() function, as the required
     * data
     * must already be retrieved.
     *
     * @param array $posts List of information about posts to be checked
     * @param array $threads List of information about threads the posts are in
     * @param array $forums List of information about forums the threads/posts
     * are in; must include unserialized permissions in 'nodePermissions' key
     * @param string $errorKey Modified by reference. If no permission, may
     * include a key of a phrase that gives more info
     * @param array|null $viewingUser
     *
     * @return boolean
     */
    public function canEditDatePostsData(array $posts, array $threads, array $forums, &$errorKey = '',
        array $viewingUser = null)
    {
        return $this->_checkPermissionOnPosts('canEditPostDate', $posts, $threads, $forums, $errorKey, $viewingUser);
    } /* END canEditDatePostsData */

    /**
     * Edits the specified posts if permissions are sufficient.
     *
     * @param array $postIds List of post IDs to move
     * @param array $options Options that control the action. Nothing supported
     * at this time.
     * @param string $errorKey Modified by reference. If no permission, may
     * include a key of a phrase that gives more info
     * @param array|null $viewingUser
     *
     * @return array false if error; array of info about new thread otherwise
     */
    public function editDatePosts(array $postIds, array $options = array(), &$errorKey = '', array $viewingUser = null)
    {
        list ($posts, $threads, $forums) = $this->getPostsAndParentData($postIds, $viewingUser);

        if (empty($options['skipPermissions']) &&
             !$this->canEditDatePostsData($posts, $threads, $forums, $errorKey, $viewingUser)) {
            return false;
        }

        $options = array_merge(array(
            'post_date' => ''
        ), $options);

        if (XenForo_Application::$versionId >= 1020000 && count($postIds) > 100) {
            $this->_getPostModel()->editPostDateOfPosts($postIds, $options['post_date'], false);

            $threadIds = array_keys($threads);

            XenForo_Application::defer('Waindigo_EditPostDate_Deferred_Thread', array(
                'threadIds' => $threadIds
            ));
        } else {
            $this->_getPostModel()->editPostDateOfPosts($postIds, $options['post_date']);
        }

        return true;
    } /* END editDatePosts */
}